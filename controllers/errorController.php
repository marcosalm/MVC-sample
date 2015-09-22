<?php

/**
 * Created by PhpStorm.
 * User: marcos.almeida-pit
 * Date: 22/09/2015
 * Time: 10:23
 */

class errorController extends baseController{
	
	public function index(){}
	
		public function error($message = 'Nenhuma informação de erro'){
			echo '<pre>'.print_r($message,1).'</pre>';	
			
		}
}
