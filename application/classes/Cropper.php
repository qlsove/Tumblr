<?PHP
 
class Cropper extends Controller{
 
    public $request;
    public $response;
    
    public function __construct(Request $request, Response $response)
        {
            $this->request = $request;
            $this->response = $response;
        }


    public  function crop($file_input, $file_output, $crop = 'square',$percent = false) 
        {
            list($w_i, $h_i, $type) = getimagesize($file_input);
                if (!$w_i || !$h_i) 
                {
                    echo 'Неможливо отримати дані картинки';
                    return;
                }
            $types = array('','gif','jpeg','png');
            $ext = $types[$type];
                if ($ext)
                    {
                        $func = 'imagecreatefrom'.$ext;
                        $img = $func($file_input);
                    }
                else 
                    {
                        echo 'Неправильний формат файлу';
                        return;
                    }
                if ($crop == 'square') 
                    {
                        $min = $w_i;
                        if ($w_i > $h_i) $min = $h_i;
                        $w_o = $h_o = $min;
                    } 
                else 
                    {
                        list($x_o, $y_o, $w_o, $h_o) = $crop;
                            if ($percent) 
                                {
                                    $w_o *= $w_i / 100;
                                    $h_o *= $h_i / 100;
                                    $x_o *= $w_i / 100;
                                    $y_o *= $h_i / 100;
                                }
                            if ($w_o < 0) $w_o += $w_i;
                                $w_o -= $x_o;
                            if ($h_o < 0) $h_o += $h_i;
                                $h_o -= $y_o;
                    }
            $img_o = imagecreatetruecolor($w_o, $h_o);
            imagecopy($img_o, $img, 0, 0, $x_o, $y_o, $w_o, $h_o);
                if ($type == 2) 
                    {
                        imagejpeg($img_o,$file_output,100);
                    } 
                else 
                    {
                        $func = 'image'.$ext;
                        $func($img_o,$file_output);
                    }
            imagedestroy($img_o);
        }


    public  function prov($per)
            {
                    if (isset($per)) 
                        {
                            $per = stripslashes($per);
                            $per = htmlspecialchars($per);
                            $per = addslashes($per);
                        }
                return $per;
            }


    public  function create()
    {
            if(null !== ($this->request->post('crop')))
            {    
                $data=array();
                $id = $this->prov($this->request->post('id'));
                $login = $this->prov($this->request->post('login'));
                $x1 = $this->prov($this->request->post('x1'));
                $x2 = $this->prov($this->request->post('x2'));
                $y1 = $this->prov($this->request->post('y1'));
                $y2 = $this->prov($this->request->post('y2'));
                $img = $this->prov($this->request->post('img'));
                $crop = $this->prov($this->request->post('crop'));
                $filenew = $crop.$id.'.jpg';

                $data['post_id']=$id;
                $data['login']=$login;
                $data['path']=$filenew;
                $this->crop($img, $filenew, array($x1, $y1, $x2, $y2));
                chmod($filenew,0777);
                
                return $data;
            }
    }


} 