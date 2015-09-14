<?php
 
class Model_Gallery extends Model{
    
    protected $table = 'gallery';
 
    public function addPhoto($login, $post_id, $path)
    { 
        $query = DB::insert($this->table, array('login', 'post_id', 'path'))
            ->values(array($login, $post_id, $path))
            ->execute();
    }


    public function getPhotos($login)
    { 
        $query = DB::select('path')
            ->from($this->table)
            ->where('login', '=', $login)
            ->execute()
            ->as_array();
            return $query;
    }


    public function getPost($id, $login)
    { 
        $query = DB::select('path')
            ->from($this->table)
            ->where('post_id', '=', $id)
            ->and_where('login', '=', $login)
            ->execute()
            ->as_array();
            return $query;
    }

    
}