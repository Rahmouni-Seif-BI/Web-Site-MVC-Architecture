<?php 
require_once __DIR__ .'/../model/inscrit.php' ;
require_once __DIR__ .'/../view/inscrit/header.php' ; 

class controlleurInscrit

{ 

  //=========>>>> PARTIE CRUD TABLE INSCRIT

     /*================================|||| SELECT FROM PRODUIT ||||===================================== */


    static  function all() 
    {
        require_once __DIR__ .'/../view/inscrit/index.php' ; 
    }








    /*================================|||| INSERT INTO INSCRIT ||||===================================== */




   static  function add() 
    {
     // affiche  formulaire  d'ajout  
         require_once __DIR__ .'/../view/inscrit/inscrit.php' ; 
    }

    static  function save() 
    {
       // INSERT  appel fucntion  save()
           $inscrit =new Inscrit($_POST); 
           $R=$inscrit->save(); 
            
           self::all();
    }







    /*================================|||| UPDATE PRODUIT ||||===================================== */

    /*================================|||| DELETE FROM PRODUIT ||||===================================== */



   







    static  function profil() 
    {
        // affiche  les donnees d'un USER  
        require_once __DIR__ .'/../view/inscrit/profil.php' ; 

    }


         public static function addd(){
          
            $_SESSION['panier'][]=$_GET['id'];
          self::all();

        }

        public static function liste(){
           
            $produits=array();
            foreach($_SESSION['panier'] as $id){
                $modelproduit=new Inscrit(array('id'=>$id));
                $produit=$modelproduit->details();
                $produits[]=$produit;
            }
            require_once __DIR__."/../view/inscrit/affichpan.php";

        }



static  function details() {

    // bara lawej :) 
    $inscrit =new Inscrit($_POST); 
    $details=$inscrit->details(); 

 
    // affiche details 
    require_once __DIR__ .'/../view/inscrit/details.php' ; 


}
    static  function commande() {
        // update 
        
        $commande =new Inscrit($_POST); 
        $R=$commande->commande();   
      if($R)
      echo "doneeeeeeee !! "; 
      else 
      echo "NOOOOOOT DONE !!!!";
      
    }



// ********=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=************


 
    static  function user() {
     // affichage  de  tout les ligne  de  la table livre 
     $user =new Livre(); 
     $users=$user->alluser(); 
     
     require_once __DIR__ .'/../view/livre/user.php' ; 
     
    }
 


    static  function deleteUser() {
        // delete 
        $user =new Livre($_GET); 
        $R=$user->deleteUser(); 
        self::user();
     

    }



    static  function addUser() {
        // affiche  formulaire  d'ajout  
        require_once __DIR__ .'/../view/livre/adduser.php' ; 
   }



   static  function saveUser() {
    // INSERT  appel fucntion  save()
    $user =new Inscrit($_POST); 
    $R=$user->saveUser(); 
    if($R)
    {
    echo ("Inscrit terminer avec succes"); 
    header('location:view/inscrit/loginUser.php');
    }
   else  
   echo ("NOT OK contact Admin");
}


    /*if ($R)
    require_once __DIR__ .'/../view/livre/terminer.php' ;
    else 
    require_once __DIR__ .'/../view/livre/noterminer.php' ;*/
}





?>