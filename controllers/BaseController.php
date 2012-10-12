<?php
class CBaseController{
	private $action;	
	private $defaultAction='index';
	
	public function run($action){
		echo $action;
	}
	
	public function renderView($name, $data){
		
	}
}
?>