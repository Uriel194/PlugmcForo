<?php

include "conexion.php";

$nick = $_POST['nickreg'];
$correo = $_POST['emailreg'];
$pass = $_POST['passreg'];

$sql="INSERT INTO usuarios VALUES(DEFAULT,'$nick',
								   '$pass',
								   '$correo')";

$ejecutar=mysqli_query($conectar,$sql);

if(!$ejecutar){
    echo"Hubo Algun Error";
}else{
    echo "<script type=\"text/javascript\">alert(\"¡Registration Completed! Log in.\");</script>";
?>

    <script>window.location.replace("../forum.php");</script>
    
    <?php
}
?>