<?php
class DataBase
{
    static $cnx ; 
  

static public function init() // connexion au base 
{
    try 
    {
            self::$cnx= new PDO ("mysql:host=localhost:3307;dbname=camper","root",""); 

    }catch (PDOException $exception)
    {
        echo  $exception->getMessage();
        die();
    }
 
}




static public function query($req, $class, $tab=array())
{
    // SELECT
    // req sans parametre
    if (COUNT($tab))
    {
        $stm= self::$cnx -> prepare($req); // execution de la requette ($req) "bech  njibha mba3ed"
        $res=$stm->execute($tab); 
    return  $res -> fetchall(); // transform  to associative table
    }
    // req SELECT avec paramaetre
    else 
    {
       $res=self::$cnx->query($req);
        return $res -> fetchall(PDO::FETCH_CLASS,$class);
    }
}




static public function find($req,$tab)
{
    $stm=self::$cnx -> prepare ($req);
    $res =$stm -> execute ($tab);
    if ($res)
    {
    return $stm -> fetch();
    }
    else  
    return  $res ; 
}


// cas  de : INSERT / DELETE / UPDATE
static public function execute ($req,$tab)
{
    $stm=self::$cnx -> prepare ($req);
    $res =$stm -> execute ($tab);
    return $res ; 
    
}



}
DataBase::init(); 



?>