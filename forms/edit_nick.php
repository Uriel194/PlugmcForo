<?php

include "conexion.php";

$nick = $_POST['nick'];
$nickoriginal = $_POST['nickorig'];

//Edit pass
    $sql = "UPDATE usuarios SET nick_user = '$nick' WHERE nick_user = '".$nickoriginal."'";
    $sql2 = "UPDATE tickets SET uname = '$nick' WHERE uname = '".$nickoriginal."'";

    $ejecutar=mysqli_query($conectar,$sql);
    $ejecutar2=mysqli_query($conectar, $sql2);

    if(!$ejecutar && !$ejecutar2){
        echo"Hubo Algun Error";
    }else{
        echo "<script type=\"text/javascript\">alert(\"Nick updated correctly!\");</script>";
    ?>
        <script>window.location.replace("../forum.php");</script>
    <?php
    }
?>