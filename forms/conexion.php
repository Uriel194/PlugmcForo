<?php
$host = 'localhost';
$database = 'plugmcne_plug-foro';
$user = 'root';
$pass = '';

// $host = 'mcmysql.fallout-hosting.com';
// $database = 'fh_6467';
// $user = 'fh_6467';
// $pass = 'd916c59e95';

$conectar=mysqli_connect($host,$user,$pass) or die ("No se ha podido conectar al servidor");
	
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysqli_select_db($conectar, $database);
		if(!$base){
            echo"No Se Encontro La Base De Datos";	
		}
    }
?>