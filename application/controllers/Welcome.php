<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {
    function __construct()
    {
        parent::__construct();
        $this->load->model('menu');
        $this->data['pagetitle'] = 'Jim\'s Joint Diner (Server)';
    }
    
	public function index()
	{
		$result = 'go away';
//		$oddrow = true;
//		foreach ($this->categories->all() as $category)
//		{
//			$viewparms = array(
//				'direction' => ($oddrow ? 'left' : 'right')
//			);
//			$viewparms = array_merge($viewparms, $category);
//			$category->direction = ($oddrow ? 'left' : 'right');
//			$result .= $this->parser->parse('category-home', $category, true);
//			$oddrow = ! $oddrow;
//		}
        $this->data['title'] = 'Jim\'s Joint Diner (Server)';
		$this->data['content'] = $result;
		$this->render();
	}

}
