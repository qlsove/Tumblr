<?php

class Controller_Default extends Controller_Template {

	public $template = 'templates/default';
   
    public function before()
    {
        parent::before();

            if($this->auto_render)
            {
                $this->template->title            = '';
                //$this->template->header           = '';
                $this->template->content          = '';
                //$this->template->footer           = '';
            }
    }
}
