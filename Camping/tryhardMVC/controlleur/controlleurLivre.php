<?php 
require_once __DIR__ .'/../model/livre.php' ; 
require_once __DIR__ .'/../view/livre/header.php' ; 
class controlleurLivre 

{ 



    //=========>>>> PARTIE CRUD TABLE PRODUIT

     /*================================|||| SELECT FROM PRODUIT ||||===================================== */


        
   static  function all()
    {
        // affichage  de  tout les ligne  de  la table Produit
             $livre =new Livre(); 
            $livres=$livre->all(); 

          // Appel au fichier index.php pour lister les donnes de la table produit  
            require_once __DIR__ .'/../view/livre/index.php' ; 
    }

    /*================================|||| TEEEESST ||||===================================== */


    static  function test()
    {
        // affichage  de  tout les ligne  de  la table favoris
             $livre =new Livre(); 
            $livres=$livre->test(); 

          // Appel au fichier test.php pour lister les donnes de la table produit  
            require_once __DIR__ .'/../view/livre/test.php' ; 
    }


  // lien vers page formbook.php
  static  function ajout() 
  {
       // affiche  formulaire  d'ajout  
           require_once __DIR__ .'/../view/livre/ajout.php' ; 
  }

  // Enregistrer les donnes de formulaire "formbook" dans table test 
  static  function ajouter()
  {
       // INSERT  appel fucntion  save()
           $ajout =new Livre($_POST); 
           $R=$ajout->ajouter(); 
           self::test();
  }











    /*================================|||| INSERT INTO PRODUIT ||||===================================== */



    // lien vers page formbook.php
        static  function add() 
    {
         // affiche  formulaire  d'ajout  
             require_once __DIR__ .'/../view/livre/formbook.php' ; 
    }

    // Enregistrer les donnes de formulaire "formbook" dans table Produit 
    static  function save()
    {
         // INSERT  appel fucntion  save()
             $livre =new Livre($_POST); 
             $R=$livre->save(); 
             self::all();
    }
  






    /*================================|||| UPDATE PRODUIT ||||===================================== */

 
 
 
    // Lien vers page modifer.php
    static  function formupdate()
    {
         // affiche  formulaire  d'update
             require_once __DIR__ .'/../view/livre/modifier.php';

    }

    // Update les donnes dans table produit a travers le formulaire modifier.php 
    static  function update()
    {
        // update produit
             $livre =new Livre($_POST); 
            $R=$livre->update(); 

        // Appel au function all pour lister les donnes de la table produit  
              self::all();
    }





    /*================================|||| DELETE FROM PRODUIT ||||===================================== */





    static  function delete()
    {
        // delete From Produit
             $livre =new Livre($_GET); 
             $R=$livre->delete(); 

        // Appel au function all pour lister les donnes de la table produit  
            self::all();
    }









    
    /*((((((((((((((((((((((((((((((((((((((   ^^ TABLE ADMIN ^^    ))))))))))))))))))))))))))))))))))))))))))) */



    //=========>>>> PARTIE CRUD TABLE ADMIN

   /*================================|||| SELECT FROM ADMIN ||||===================================== */

  
  
  
   static  function alladmin()
    {
    // affichage  de  tout les ligne  de  la table Admin 
    $livre =new Livre(); 
    $livres=$livre->admin(); 
    
    require_once __DIR__ .'/../view/livre/admin.php' ; 
    
    }
 





   /*================================|||| INSERT INTO ADMIN ||||===================================== */




    // lien vers page formadmin.php
    static  function addadmin()
    {
        // affiche  formulaire  d'ajout  
            require_once __DIR__ .'/../view/livre/formadmin.php' ; 
    }


    // Enregistrer les donnes de formulaire "formadmin" dans table admin 
    
    static  function saveadmin()
    {
        // INSERT  appel fucntion  save()
            $livre =new Livre($_POST); 
            $R=$livre->saveadmin();

        // Appel au function alladmin pour lister les donnes de la table admin  
            self::alladmin();
    }


   



    /*================================|||| UPDATE ADMIN ||||===================================== */





     // Lien vers page formupdateadmin.php
    static  function formupdateadmin() 
    {
        // affiche  formulaire  d'update
            require_once __DIR__ .'/../view/livre/formupdateadmin.php';

    }

    // Update les donnes dans table Admin a travers le formulaire formupdateadmin.php
    static  function updateadmin() 
    {
        // update 
            $livre =new Livre($_POST); 
            $R=$livre->updateadmin();   
    
        // Appel au function alladmin pour lister les donnes de la table admin  
            self::alladmin();
  
    }






    /*================================|||| DELETE FROM ADMIN ||||===================================== */

    static  function deleteadmin() 
    {
        // delete 
            $livre =new Livre($_GET); 
            $R=$livre->deleteadmin(); 
            
        // Appel au function alladmin pour lister les donnes de la table admin  
            self::alladmin();
    }
   








    

    /*((((((((((((((((((((((((((((((((((((((   ^^ TABLE COMMANDE ^^    ))))))))))))))))))))))))))))))))))))))))))) */


    //=========>>>> PARTIE CRUD TABLE COMMANDE

    /*================================|||| SELECT FROM COMMANDE ||||===================================== */





    static  function order() 
    {
        // affichage  de  tout les ligne  de  la table COMMANDE 
             $livre =new Livre(); 
             $livres=$livre->order(); 

            // Appel au ficher order.php pour lister les donnes de la table order  
             require_once __DIR__ .'/../view/livre/order.php' ; 
    }


    /*================================|||| INSERT INTO COMMANDE  ||||===================================== */

    /*================================|||| UPDATE COMMANDE  ||||===================================== */

    /*================================|||| DELETE FROM COMMANDE ||||===================================== */







  /*((((((((((((((((((((((((((((((((((((((   ^^ TABLE INSCRIT ^^    ))))))))))))))))))))))))))))))))))))))))))) */

   
  
  //=========>>>> PARTIE CRUD TABLE USER

  /*================================|||| SELECT FROM USER ||||===================================== */




 
    static  function user() 
    {
         // affichage  de  tout les ligne  de  la table livre 
            $user =new Livre(); 
            $users=$user->alluser(); 

         // Appel au ficher user.php pour lister les donnes de la table user
            require_once __DIR__ .'/../view/livre/user.php' ; 
     
    }
 







    /*================================|||| INSERT INTO USER  ||||===================================== */




    static  function addUser() 
    {
        // affiche  formulaire  d'ajout d'un USER  
        require_once __DIR__ .'/../view/livre/adduser.php' ; 
    }

    static  function saveUser() 
    {
        // INSERT  appel fucntion  save()
            $user =new Livre($_POST); 
            $R=$user->saveUser(); 
        // Appel au function user.php pour lister les donnes de la table USER   
            self::user(); 
    }







    /*================================|||| UPDATE USER   ||||===================================== */

  // Lien vers page modifer.php
  static  function formupdateUser()
  {
       // affiche  formulaire  d'update
           require_once __DIR__ .'/../view/livre/modifierUser.php';

  }


    static  function deleteUser() 
    {
        // delete FROM USER
        $user =new Livre($_GET); 
        $R=$user->deleteUser(); 
        self::user();
    }



   




}



?>