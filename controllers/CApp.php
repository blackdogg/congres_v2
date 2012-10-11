<?php
class CApp{
	public function __construct(){
		
	}
	
	public function run(){
		if(isset($_GET['r']) && ($_GET['r']!="")){
			if(file_exists($_GET['r'].'Controller.php')){
				require($_GET['r'].'Controller.php');
				$class = $_GET['r'].'Controller.php';
				$controller = new $class;
				$class->run();
			}else{
				echo "404";
			}
		}else{
			
		}
	} 
}
?>