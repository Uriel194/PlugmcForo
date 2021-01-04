<?php

include "conexion.php";

$mail = $_POST['email'];
$pass = $_POST['pass'];
$_SESSION['email_session'] = $_POST['email'];


if(!$conectar){
	echo "Error";
}
else{
	 $consulta=mysqli_query($conectar,"select * from usuarios where email_user='$mail' and pass_user='$pass'")or die("Error en consulta");
     $consulta1=mysqli_query($conectar,"select id_user from usuarios where email_user='$mail' and pass_user='$pass'")or die("Error en consulta");
     $ele=mysqli_fetch_assoc($consulta1);
     $i=mysqli_num_rows($consulta);
     
     if($i==1){
      session_start();
      $_SESSION['email']="$mail";
      echo "<script type=\"text/javascript\">alert(\"Login successfully!\");</script>";
		header('Location:../forum.php');
	 }
     else{
        echo "<script type=\"text/javascript\">alert(\"Incorrect data! try again\");</script>";
        echo "<script>window.location = '../forum.php';</script>";
	 }		 
}

?>