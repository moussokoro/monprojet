<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>Affichage</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   

    
     <link rel="stylesheet" href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="css/Normalize.css" rel="stylesheet">
     <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">


   

      <script src="js/jquery-1.11.3.min.js"></script>

    

     
        
  </head>
<body>


<?php 
require 'connect.php';
include 'nav.php'; ?> 




<div class="container mainbg">
<br><a class="return" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>

    <h1 class="h1_title">Affichage des information</h1>
    <hr> <br>
    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">
<?PHP if (isset($_GET['id_destinataire']) ){ ?>
      <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="examen" type="text" placeholder="rechercher un client" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Nom</th>
            <th>Prenom</th>
            <th>telephone</th>
            <th>code secret</th>
            
           <!-- <th colspan="2">Operation</th>-->
          </tr>
<?php 
  $code=$_GET['id_destinataire'];
  $stmt_find = $connect->prepare("SELECT * FROM `transfert`.`` WHERE `id_destinataire` = $code");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_nom=$find_row['nom_destinataire'];
      $fetch_prenom = $find_row ['prenom_destinataire'];
	  $fetch_telephone=$find_row['telephone_destinataire'];
    $fetch_code_secret=$find_row['telephone_code_secret'];
   
	 
     



?>
            <tr>
              <td><?php echo $fetch_nom;  ?></td>
              <td><?php echo $fetch_prenom;  ?></td>
              <td><?php echo $fetch_telephone;  ?></td>
              <td><?php echo $fetch_code_secret;  ?></td>
              
              
             <!-- <td><a href="?cat_delete=<?PHP echo $fetch_class_numeric; ?>"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-pencil large"></i></a></td> -->
            
<?php }
 ?>
                 
        </tr>        
      </table> 
<?PHP
}else if(isset($_GET['id_expediteur']))
{
?>
    <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="traitement" type="text" placeholder="Rechercher un expediteur" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Nom</th>
            <th>Prenom</th>
            <th>telephone</th>
            <th>code_secret</th>
            
  
           <!-- <th colspan="2">Operation</th>-->
          </tr>
<?php 
 $code=$_GET['id_expediteur'];
  $stmt_find = $connect->prepare("SELECT * FROM `transfert`.`expediteur` WHERE `id_expediteur` = $code");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_nom=$find_row['nom_expediteur'];
      $fetch_prenom = $find_row ['prenom_expediteur'];
	  $fetch_telephone=$find_row['telephone_expediteur'];
    $fetch_code_secret= $find_row ['code_secret_expediteur'];
	  
?>
            <tr>
              <td><?php echo $fetch_nom;  ?></td>
              <td><?php echo $fetch_prenom;  ?></td>
              <td><?php echo $fetch_telephone; ?></td>
              <td><?php echo $fetch_code_secret; ?></td>
             
             
             <!-- <td><a href="?cat_delete=<?PHP echo $fetch_class_numeric; ?>"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-pencil large"></i></a></td> -->
            
<?php } ?>
                 
        </tr>        
      </table>           
  <?PHP } ?>
  </div>

<div class="clear"></div>
<br>
        

</div>  
        
                           
           




  </body>
</html>
