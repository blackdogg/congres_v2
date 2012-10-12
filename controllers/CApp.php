<?php
class CApp{
	public function __construct(){
		
	}
	
	public static function run(){
		if(isset($_GET['r']) && ($_GET['r']!="")){
			if(file_exists('controllers/'.$_GET['r'].'Controller.php')){
				$class = $_GET['r'].'Controller';
				require('controllers/'.$class.'.php');				
				echo $class;
				$controller = new $class;
				$controller->run();
			}else{
				echo "404";
			}
		}
	}
}
?>