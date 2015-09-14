<?php
 
class Model_Photos extends Model{
    
    protected $table = 'photos';
 
    public function addPost($login, $post_id, $path)
    { 
        $query = DB::insert($this->table, array('login', 'post_id', 'path'))
            ->values(array($login, $post_id, $path))
            ->execute();
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


    public function deletePhoto($id)
    { 
        $query = DB::delete($this->table)
        ->where('post_id', '=', $id)
        ->execute();
    }
}