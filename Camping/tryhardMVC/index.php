<?php
if (isset($_GET['controlleur']))
$controlleur=$_GET['controlleur'];
else 
$controlleur ='Livre';  

$controlleur ="controlleur$controlleur";


require_once "controlleur/$controlleur.php";

if (isset($_GET['action']))
    $action=$_GET['action'];
else 
    $action ='all';  

$controlleur::$action();
?>





 <?php
/*
require_once 'controlleur/controlleurLivre.php';
if (isset($_GET['action']))
    $action=$_GET['action'];
else 
    $action ='all';     
controlleurLivre::$action();*/
?>