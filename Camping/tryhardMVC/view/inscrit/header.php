<?php 

session_start();

if(!isset($_SESSION['nom'])&&($action=="saveUser") )
{
//redirection  
    header('location:/../../index.html');
}

?>

