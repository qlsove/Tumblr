<?php

class Controller_Ajax extends Controller {

    public $client;
    public $blogName;
    public $request;
    public $response;
	
    public function __construct(Request $request, Response $response)
        {
            $this->request = $request;
            $this->response = $response;
            $site_config = Kohana::$config->load('start');
            $consumerKey = $site_config->get('consumerKey');
            $consumerSecret = $site_config->get('consumerSecret');
            $token = $site_config->get('token');
            $tokenSecret = $site_config->get('tokenSecret');
            $this->blogName = $site_config->get('blogName');
            $this->client = new Tumblr\API\Client($consumerKey);
        }


    public function action_precrop()
        {
                if (Request::initial()->is_ajax())
                { 
                    $post_id = $this->request->post('id');
                    $login = $this->request->post('login');
                    $temp=$this->client->getBlogPosts($login, array('id' => $post_id, 'type' => 'photo'));
                    $result=json_decode(json_encode($temp), true); 
                        if(!empty($result))
                        {
                            $img["width"]=($result["posts"][0]["photos"][0]["alt_sizes"][1]["width"]>=500)?500:$result["posts"][0]["photos"][0]["alt_sizes"][1]["width"];
                            $img["height"]=$result["posts"][0]["photos"][0]["alt_sizes"][1]["height"];
                            $img["url"]=$result["posts"][0]["photos"][0]["alt_sizes"][1]["url"];
                            echo json_encode($img);
                        }
                }
                else
                    $this->response->body('Internal server error');
        }

    public function action_crop()
        {
    			if (Request::initial()->is_ajax())
                { 
                    $temp=new Cropper($this->request, $this->response);
                    $data=$temp->create();
                    $crop=Model::factory('Photo');
                    $result=$crop->getPost($this->request->post('id'), $this->request->post('login'));
                        if(empty($result))
                            $crop->addPost($data['login'], $data['post_id'], $data['path']);
                    $temp=$crop->getPost($this->request->post('id'), $this->request->post('login'));
                    $img["url"]=$temp[0]["path"];
                    $img["width"]=getimagesize($img["url"])[0];
                    $img["height"]=getimagesize($img["url"])[1];
                    echo json_encode($img);
                }
                else
                    $this->response->body('Internal server error');
        }


    public function action_scroll()
        {  
                if (Request::initial()->is_ajax())
                { 
                    $startFrom = $this->request->post('startFrom');
                    $blogName=null !==($this->request->query('user'))?$this->request->query('user'):$this->blogName;
                    $temp=$this->client->getBlogPosts($blogName, array('limit' => 3, 'offset' => $startFrom, 'type' => 'photo'));
                    $data["items"]=json_decode(json_encode($temp), true);
                    $crop=Model::factory('Photo');
                    
                    $photos=array();
                        foreach($data["items"]["posts"] as $post)
                        {
                            $image=$crop->getPost($post["id"], $post["blog_name"]);
                                if(empty($image))
                                    $photos[]=array('blog_name' => $post["blog_name"], 'id' => $post["id"], 'url' => $post["photos"][0]["original_size"]["url"], 'dest' => 'api', 'timestamp' => date('d/m/Y H:i:s', $post['timestamp']), 'width' => 500);
                                else
                                    $photos[]=array('blog_name' => $post["blog_name"], 'id' => $post["id"], 'url' => "/".$image[0]["path"], 'dest' => 'local', 'timestamp' => date('d/m/Y H:i:s', $post['timestamp']), 'width' => getimagesize($image[0]["path"])[0]);
                        }
                    echo json_encode($photos);
                }
                else
                    $this->response->body('Internal server error');
    }

    public function action_addToGallery()
        {  
                if (Request::initial()->is_ajax())
                {
                    $post_id = $this->request->post('id');
                    $blogName=null !==($this->request->query('user'))?$this->request->query('user'):$this->blogName;
                    $temp=$this->client->getBlogPosts($blogName, array('id' => $post_id, 'type' => 'photo'));
                    $data=json_decode(json_encode($temp), true);
                    $gallery=Model::factory('Gallery');
                    $item=$gallery->getPost($data['posts'][0]['id'], $data["blog"]["name"]);
                        if(empty($item))
                            $gallery->addPhoto($data["blog"]["name"], $data['posts'][0]['id'], $data['posts'][0]["photos"][0]["original_size"]["url"]);
                }
                else
                    $this->response->body('Internal server error');
        }

    public function action_uncrop()
        {
                if (Request::initial()->is_ajax())
                {   
                    $blogName=null !==($this->request->query('user'))?$this->request->query('user'):$this->blogName;
                    $post_id = $this->request->post('id');
                    $data=Model::factory('Photo');
                    $current=$data->getPost($post_id, $blogName);
                    $temp=$this->client->getBlogPosts($blogName, array('id' => $post_id, 'type' => 'photo'));
                    $result=json_decode(json_encode($temp), true);
                        if(!empty($result))
                        {
                            $data->deletePhoto($post_id);
                            unlink($current[0]['path']); 
                            $img["width"]=($result["posts"][0]["photos"][0]["alt_sizes"][1]["width"]>=500)?500:$result["posts"][0]["photos"][0]["alt_sizes"][1]["width"];
                            $img["url"]=$result["posts"][0]["photos"][0]["alt_sizes"][1]["url"];
                            echo json_encode($img);
                        }
                }
                else
                    $this->response->body('Internal server error');
        }

    public function action_gallery()
    {  
            if (Request::initial()->is_ajax())
            {
                $login = $this->request->post('login');
                $gallery=Model::factory('Gallery');
                $photos=$gallery->getPhotos($login);
                $data=array();
                    if(!empty($photos))
                    {
                            foreach($photos as $photo)
                            {
                                $width=(getimagesize($photo["path"])[0]>=500)?500:getimagesize($photo["path"])[0];
                                $data[]=array('path' => $photo["path"], 'width' => $width);
                            }
                        echo json_encode($data);
                    }
            }
            else
                $this->response->body('Internal server error');
    }

}