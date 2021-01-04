<?php

include "conexion.php";

$title = $_POST['titticket'];
$departa = $_POST['depart'];
$descrip = $_POST['desc'];
$fech = $_POST['fecha'];

$subirFoto = $_FILES['foto'];

if($subirFoto){
    $nombreFoto = $subirFoto['name'];
    move_uploaded_file($subirFoto['tmp_name'],'../assets/img_report/'.$nombreFoto);

}
//verificar
$nickverif = $_POST['nick'];

$sqli2="SELECT * FROM skyblock WHERE uname ='".$nickverif."'";
$result2=mysqli_query($conectar,$sqli2);
$numero_filas2 = mysqli_num_rows($result2);
$fila2=mysqli_fetch_assoc($result2);
 

$sql="INSERT INTO tickets VALUES(DEFAULT,'".$fila2['uuid']."',
								   '$title',
								   '$departa',
                                   '$descrip',
                                   '$fech',
                                   '$nickverif',
                                   '$nombreFoto')";

$ejecutar=mysqli_query($conectar,$sql);

if(!$ejecutar){
    echo"Hubo Algun Error";
}else{
    echo "<script type=\"text/javascript\">alert(\"¡Ticket Sent!\");</script>";
?>

    <script>window.location.replace("../forum.php");</script>
    
    <?php
}
?>