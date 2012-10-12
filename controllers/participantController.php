<?php
require_once('controllers/BaseController.php');

class participantController extends CBaseController{
	
	public function run($action){
		
	}
	
	public function renderView($name, $data){
		require($name.'.php');
	}
}
?>