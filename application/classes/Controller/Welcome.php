<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

    public function before()
    {
        $this->template = 'template/template_portal';


        return parent::before();

    }


    public function action_index()
	{

		var_dump(DOCROOT);
		$path = 'section/test.json';
		$xieziStr = load_cms_content($path);


		$this->response->body('hello, world!');
	}

} // End Welcome
