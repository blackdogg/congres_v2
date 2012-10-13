<?php
    $host = "localhost";
	$port = "3306";
	$database = "congres";
	$username = "root";
	$password = "";
	
	try{
		$db = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$database.";",$username,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo "Erreur : ".$e->getMessage()."<br />";
		echo "N° :".$e->getCode();
	}
?>