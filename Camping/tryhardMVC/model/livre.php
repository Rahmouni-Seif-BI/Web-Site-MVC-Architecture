<?php 
require_once __DIR__. '/data-base.php';
class Livre
 {
 private $id ;
 private $marque ;
 private $descreption ;
 private $prix ;
 private $stock ;
 private $vendue ;
 private $cin ;
 private $nom ;
 private $prenom ;

 private $password ;
 private $login ;
 private $email ;


function __construct($tab=array())
{
 if (isset($tab['id']))
    $this->id = $tab['id']; 
    
if (isset($tab['marque']))
     $this->marque = $tab['marque']; 
    
if (isset($tab['descreption']))
     $this->descreption = $tab['descreption']; 

if (isset($tab['prix']))
    $this->prix = $tab['prix']; 

if (isset($tab['stock']))
    $this->stock = $tab['stock']; 

    if (isset($tab['vendue']))
    $this->vendue = $tab['vendue']; 

    if (isset($tab['nom']))
    $this->nom = $tab['nom']; 

    if (isset($tab['prenom']))
    $this->prenom = $tab['prenom']; 


    if (isset($tab['email']))
    $this->email = $tab['email']; 

    if (isset($tab['login']))
    $this->login = $tab['login']; 

    if (isset($tab['password']))
    $this->password = $tab['password']; 
    // TEEEEEEEEEEEEEEST 
    if (isset($tab['nomproduit']))
    $this->nomproduit = $tab['nomproduit']; 

    if (isset($tab['nomclient']))
    $this->nomclient = $tab['nomclient']; 


}
public function get($att)
    {
     return    $this->$att ; 

    } 
public function all()
{
  //  RECHERCHE SANS  WHERE !!!!!!!! 

    $req="SELECT `id`, `marque`, `descreption`, `prix`, `stock`, `vendue` FROM `produit`";
        
        return DataBase::query($req,'Livre');
}



//tesssssst 
public function test()
{
  //  RECHERCHE SANS  WHERE !!!!!!!! 

    $req="SELECT `id`, `nomproduit`, `nomclient` FROM `favoris` ";
        
        return DataBase::query($req,'Livre');
}


public function admin()
{
  //  RECHERCHE SANS  WHERE !!!!!!!! 

    $req="SELECT `id`, `nom`, `prenom`, `email`, `login`, `password` FROM `admin`";
        
        return DataBase::query($req,'Livre');
}
public function ajouter()
{
    // INSERT
    $req="INSERT INTO `favoris`( `nomproduit`, `nomclient`) VALUES  (:nomproduit, :nomclient)"; 
    $tab=array('nomproduit'=> $this->nomproduit,'nomclient'=> $this->nomclient); 
    return DataBase::execute($req,$tab);
}




public function save()
{
    // INSERT
    $req="INSERT INTO `produit`(`marque`, `descreption`, `prix`, `stock`, `vendue`) VALUES (:marque, :descreption, :prix, :stock, :vendue)"; 
    $tab=array('marque'=> $this->marque,'descreption'=> $this->descreption,'prix'=> $this->prix,'stock'=> $this->stock,'vendue'=> $this->vendue); 
    return DataBase::execute($req,$tab);
}



public function saveadmin()
{
    // INSERT
    $req="INSERT INTO `admin`(`nom`, `prenom`, `email`, `login`, `password`) VALUES  (:nom, :prenom, :email, :login, :password)"; 
    $tab=array('nom'=> $this->nom,'prenom'=> $this->prenom,'email'=> $this->email,'login'=> $this->login,'password'=> $this->password); 
    return DataBase::execute($req,$tab);
}
public function update()
{
 
     // update
     $req='UPDATE `produit` SET `marque`=:marque,`descreption`=:descreption,`prix`=:prix ,`stock`=:stock,`vendue`=:vendue WHERE `id`=:id'; 
     $tab=array('id'=>$this->id,'marque'=> $this->marque,'descreption'=> $this->descreption,'prix'=> $this->prix,'stock'=> $this->stock,'vendue'=> $this->vendue); 
     return DataBase::execute($req,$tab);

}
public function updateadmin()
{
    // INSERT
    $req='UPDATE `admin` SET `nom`=:nom,`prenom`=:prenom,`email`=:email ,`login`=:login,`password`=:password WHERE `id`=:id'; 
    $tab=array('nom'=> $this->nom,'prenom'=> $this->prenom,'email'=> $this->email,'login'=> $this->login,'password'=> $this->password); 
    return DataBase::execute($req,$tab);
}

public function delete()
{ //DELETE
    $req="DELETE FROM `produit`WHERE id=:id"; 
    $tab=array('id'=>$this->id); 
    return DataBase::execute($req,$tab);
}

public function deleteadmin()
{ //DELETE
    $req="DELETE FROM `admin`WHERE id=:id"; 
    $tab=array('id'=>$this->id); 
    return DataBase::execute($req,$tab);
}


 public function find()
{ 
    
    // RECHERCHE avec  WHERE

}

public function order()
{
  //  RECHERCHE SANS  WHERE !!!!!!!! 

    $req="SELECT `num_c`, `marque`, `quantite`, `prix`, `prixTotal`, `cin` FROM `commande`";
        
        return DataBase::query($req,'Livre');
}



//=*=*=*=*=**=*=*=*=*=*==**==*=*=*=*=*=*=*=**==**==*===*=**==*=*=*=*=*

public function alluser()
{
  //  RECHERCHE SANS  WHERE !!!!!!!! 

    $req="SELECT `cin`, `nom`, `prenom`, `ville`, `password` FROM `inscrit`";
        
        return DataBase::query($req,'Livre');
}




public function deleteUser()
{ //DELETE
    $req="DELETE FROM `inscrit` WHERE cin=:cin"; 
    $tab=array('cin'=>$this->cin); 
    return DataBase::execute($req,$tab);
}



public function saveUser()
{
    // INSERT
    $req="INSERT INTO `inscrit`(`cin`, `nom`, `prenom`, `ville`, `password`) VALUES (:cin, :nom, :prenom, :ville, :password)"; 
    $tab=array('cin'=> $this->cin,'nom'=> $this->nom,'prenom'=> $this->prenom,'ville'=> $this->ville,'password'=> $this->password); 
    return DataBase::execute($req,$tab);
}


 }
/*
$livre =new Livre(); 
$livres=$livre->all(); 

var_dump($livres);*/




?> 