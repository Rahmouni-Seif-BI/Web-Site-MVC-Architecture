<html>
    <head></head>
    <body>
 <div class="container">


<?php 
require_once __DIR__ .'/../../model/livre.php' ; 
$livre =new Livre(); 
$livres=$livre->all(); 


    foreach ($livres  as $v ) 
    {
    ?>
    <form action="index.php?action=update" method="POST">
      <table align="center" >
      <tr>
              <td><input type="hidden" name="id" value="<?php echo $v->get('id')?>"></td>
</tr>
<tr>
    <td>Titre</td>    <td><input type="text" name="titre" ></td>
</tr>
<tr>
    <td>auteur</td>    <td><input type="text" name="auteur"></td>
</tr>
<tr>
    <td>Prix</td>    <td><input type="text" name="prix"></td>
</tr>
<tr>
    <td><input type="submit" value="Ajouter"></td>    <td><input type="reset" value="Annuler"></td>
</tr>



    </table>

</form>
      
    <?php   
    }
    
    ?>

  
</form>


 </div>
 </main>
 </body>
</html>