<?php

/**
 * Created by PhpStorm.
 * User: marcos.almeida-pit
 * Date: 22/09/2015
 * Time: 8:50
 */

	class Request{
		
		private $_controller;

		private $_method;

		private $_args;

		public function __construct($url)
		{
			if ($url != '') {
				$urlParts = explode($url, $_SERVER['REQUEST_URI']);
				//print_r($urlParts);
				$parts = explode('/', $urlParts[1]);
			}else {
					$parts = explode('/', $_SERVER['REQUEST_URI']);
				}

			$parts = array_filter($parts);
			
			$this->_controller = ($c = array_shift($parts))? $c: 'index';
			$this->_method = ($c = array_shift($parts))? $c: 'index';
			$this->_args = (isset($parts[0])) ? $parts : array();
		}

		public function getController(){
			return $this->_controller;
		}
		public function getMethod(){
			return $this->_method;
		}
		public function getArgs(){
			return $this->_args;
		}
	}
