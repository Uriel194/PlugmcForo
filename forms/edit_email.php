<?php

include "conexion.php";

$email = $_POST['email'];
$nickoriginal = $_POST['nickorig'];

//Edit pass
    $sql = "UPDATE usuarios SET email_user = '$email' WHERE nick_user = '".$nickoriginal."'";

    $ejecutar=mysqli_query($conectar,$sql);
    if(!$ejecutar){
        echo"Hubo Algun Error";
    }else{
        echo "<script type=\"text/javascript\">alert(\"Email updated! Log in again\");</script>";
        session_start();
 
        
        session_destroy(); 
        ?>
            <script>window.location.replace("../forum.php");</script> -->
        <?php
    }
?>