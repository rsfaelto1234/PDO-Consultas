<?php 
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db   = "hospital";
	try{
	 	$conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
	 	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	return $conexion;
	}catch(PDOException $e){
    	echo "ERROR: " . $e->getMessage();
	}		 	
?>