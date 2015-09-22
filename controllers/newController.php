<?php

/**
 * Created by PhpStorm.
 * User: marcos.almeida-pit
 * Date: 22/09/2015
 * Time: 09:40
 */

class newController extends baseController{
	
	public function index(){
		echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
		
	}


	public function peas(){
		echo '<pre>'.print_r(__METHOD__,1).'</pre>';	
		echo '<pre>'.print_r(func_get_args(),1).'</pre>';	
		
	}
}
