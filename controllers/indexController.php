<?php

/**
 * Created by PhpStorm.
 * User: marcos.almeida-pit
 * Date: 22/09/2015
 * Time: 10:08
 */

	class indexController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){

				$this->load->model('posts');

				$vars['title'] = 'Titulo dinamico';
				$vars['posts'] = $this->posts->getEntries();
				$this->load->view('index',$vars);	
		}

	}
