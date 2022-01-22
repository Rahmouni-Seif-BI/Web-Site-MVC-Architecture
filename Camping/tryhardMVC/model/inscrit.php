<?php 
require_once __DIR__. '/data-base.php';
class Inscrit
 {

 private $cin ;
 private $nom ;
 private $prenom ;
 private $ville ;
 private $password ;

 private $marque="matla" ;
 private $prix=100 ;
 private $prixTotal=200 ;
 private $quantite=2 ;
 


function __construct($tab=array())
{
 if (isset($tab['cin']))
    $this->cin = $tab['cin']; 
    
if (isset($tab['nom']))
     $this->nom = $tab['nom']; 
    
if (isset($tab['prenom']))
     $this->prenom = $tab['prenom']; 

if (isset($tab['ville']))
    $this->ville = $tab['ville']; 

if (isset($tab['password']))
    $this->password = $tab['password']; 
    if (isset($tab['id']))
    $this->id = $tab['id']; 

/*
    if (isset($tab['marque']))
    $this->marque = $tab['marque']; 

    if (isset($tab['quantite']))
    $this->quantite = $tab['quantite']; 

    if (isset($tab['prix']))
  {  $this->prix = $tab['prix']; 


    }
    $this->prixTotal= ($this->prix *$this->quantite);
*/
   
}
public function get($att)
    {
     return    $this->$att ; 

    } 
public function all()
{
  //  RECHERCHE SANS  WHERE !!!!!!!! 

    $req="SELECT cin, nom, prenom, ville, password FROM inscrit";
        
        return DataBase::query($req,'Inscrit');
}






public function save()
{
    // INSERT
    $req="INSERT INTO `inscrit`(`cin`, `nom`, `prenom`, `ville`, `password`) VALUES (:cin, :nom, :prenom, :ville, :password)"; 
    $tab=array('cin'=> $this->cin,'nom'=> $this->nom,'prenom'=> $this->prenom,'ville'=> $this->ville,'password'=> $this->password); 
    return DataBase::execute($req,$tab);
}




 public function find()
{ 
    
    // RECHERCHE avec  WHERE

    $req="SELECT `cin`, `nom`, `prenom`, `ville`, `password` FROM `inscrit` WHERE  cin=:cin"; 
    $tab=array('cin'=> $this->cin); 
    return DataBase::find($req,$tab);

}

public function details()
{ 
$req = "select id,marque,descreption,prix from produit where id=:id "; 
    $tab=array('id'=> $this->id); 
   
    return   database::find($req,$tab); 
     
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

public function commande()
{
    // INSERT
 
    $req="INSERT INTO `commande`(`marque`, `quantite`, `prix`, `prixTotal`, `cin`) VALUES (:marque, :quantite, :prix, :prixTotal, :cin)"; 
    $tab=array('marque'=> $this->marque,'quantite'=> $this->quantite,'prix'=> $this->prix,'prixTotal'=> $this->prixTotal,'cin'=> $this->cin); 
    return DataBase::execute($req,$tab);
}


 }


/*
$livre =new Livre(); 
$livres=$livre->all(); 

var_dump($livres);*/




?> 