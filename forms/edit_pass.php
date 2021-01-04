<?php

include "conexion.php";

$passwd = $_POST['pass'];
$nickoriginal = $_POST['nickorig'];

//Edit pass
    $sql = "UPDATE usuarios SET pass_user = '$passwd' WHERE nick_user = '".$nickoriginal."'";

    $ejecutar=mysqli_query($conectar,$sql);
    if(!$ejecutar){
        echo"Hubo Algun Error";
    }else{
        echo "<script type=\"text/javascript\">alert(\"Password updated correctly!\");</script>";
    ?>
        <script>window.location.replace("../forum.php");</script>
    <?php
    }
?>