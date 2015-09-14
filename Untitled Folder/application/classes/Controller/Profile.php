<?php

class Controller_Profile extends Controller_Default {

	public $client;
	public $blogName;
	public $data;


	public function __construct(Request $request, Response $response)
		{
			parent::__construct($request,$response);
			$site_config = Kohana::$config->load('start');
			$consumerKey = $site_config->get('consumerKey');
			$consumerSecret = $site_config->get('consumerSecret');
			$token = $site_config->get('token');
			$tokenSecret = $site_config->get('tokenSecret');
			$this->blogName = $site_config->get('blogName');
			$this->data=array();
			$this->client = new Tumblr\API\Client($consumerKey);
		}


	public function action_info()
		{
			$this->template->title = 'Профіль користувача';
			$blogName=null !==($this->request->query('user'))?$this->request->query('user'):$this->blogName;
			$this->data["avatar"]=$this->client->getBlogAvatar($blogName, 128);
			$result=$this->client->getBlogInfo($blogName);
			$this->data["profile"]=json_decode(json_encode($result), true);

			$this->template->content= View::factory('profile', $this->data);
		}


	public function action_photos()
		{
			$this->template->title = 'Фото користувача';
			$blogName=null !==($this->request->query('user'))?$this->request->query('user'):$this->blogName;
			$this->data["avatar"]=$this->client->getBlogAvatar($blogName, 128);
			$temp=$this->client->getBlogPosts($blogName, array('limit' => 3, 'type' => 'photo'));
			$this->data["items"]=json_decode(json_encode($temp), true);
			$result=$this->client->getBlogInfo($blogName);
			$this->data["profile"]=json_decode(json_encode($result), true);
			$crop=Model::factory('Photos');
			$photos=array();
				foreach($this->data["items"]["posts"] as $post)
				{
					$image=$crop->getPost($post["id"], $post["blog_name"]);
	            		if(empty($image))
	            			$photos[]=array('blog_name' => $post["blog_name"], 'id' => $post["id"], 'url' => $post["photos"][0]["original_size"]["url"], 'dest' => 'api', 'timestamp' => date('d/m/Y H:i:s', $post['timestamp']), 'width' => 500);
	        			else
		            		$photos[]=array('blog_name' => $post["blog_name"], 'id' => $post["id"], 'url' => "/".$image[0]["path"], 'dest' => 'local', 'timestamp' => date('d/m/Y H:i:s', $post['timestamp']), 'width' => getimagesize($image[0]["path"])[0]);
				}
			$this->data["photos"]=$photos;
			
			$this->template->content= View::factory('photos', $this->data);
		}


	public function action_cropper()
		{
			$this->template->title = 'Редагування фото';
			$blogName=null !==($this->request->query('user'))?$this->request->query('user'):$this->blogName;
			$id=$this->request->query('id');
			$temp=$this->client->getBlogPosts($blogName, array('type' => 'photo', 'id' => $id));
			$this->data["photo"]=json_decode(json_encode($temp), true);

			$this->template->content= View::factory('cropper', $this->data);
		}

	public function action_gallery()
		{
			$this->template->title = 'Галерея';
			$blogName=null !==($this->request->query('user'))?$this->request->query('user'):$this->blogName;
			$id=$this->request->query('id');
			$temp=$this->client->getBlogPosts($blogName, array('type' => 'photo', 'id' => $id));
			$this->data["photo"]=json_decode(json_encode($temp), true);

			$this->template->content= View::factory('gallery', $this->data);
		}

}