<?php  
session_start();
if(!isset($_SESSION['nom']))
{
//redirection  
    header('location:index.html');
}

?>

