<?php

/**
 * Created by PhpStorm.
 * User: marcos.almeida-pit
 * Date: 22/09/2015
 * Time: 07:08
 */

	abstract class baseController{
		
		protected $_registry;

		protected $load;

		public function __construct(){
			$this->_registry = Registry::getInstance();
			$this->load = new Load;
		}
		abstract public function index();

		final public function __get($key){
			if($return = $this->_registry->$key){
				return $return;
			}
			return false;
		}	
	}
?>
