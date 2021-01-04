<?php 
session_start();
 
if (!isset($_SESSION[email])) 
{
    header("location:../forum.php"); 
}

session_unset($_SESSION[email]);

session_destroy();

header("location:../forum.php"); 
?>