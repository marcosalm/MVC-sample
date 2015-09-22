<?php

	class postsModel extends baseModel{
		
		public function getEntries(){
			$return = array();
			$return[0] = array('title'=>'hello world', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum sollicitudin neque.');
			$return[1] = array('title'=>'hello universe','content'=>'Praesent tempor neque ac ipsum tempor, nec sodales justo semper. Pellentesque sodales tortor id aliquet sollicitudin.');

			return $return;
		}
	}
?>
