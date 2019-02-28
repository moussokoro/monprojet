<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>Operations</title>

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

    <h1 class="h1_title">Operations</h1>
    <hr> <br>


    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

<ul class="nav nav-tabs text-capitalize" role="tablist" style="background-color:#999; text-justify:!important; color:#FFF;">
        <li class="nav-item active">
          <a class="nav-link active" data-toggle="tab" href="#home" role="tab">historique</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#expediteur" role="tab">expediteur</a>
        </li>
        
</ul>
  <!--les tab 1-->    
 <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="home" role="tabpanel">
        <h1 class="h1 text-info">CONSULTATION</h1>
        <br>
        <br>
        <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="examen" type="text" placeholder="" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>client</th>
            <th>expediteur</th>
            <th>Date depot</th>
            <th>montant_depot</th>
            <th>frais_depot</th>


            <th colspan="2">Operation</th>
          </tr>
<?php 

  $stmt_find = $connect->prepare("SELECT * FROM `utilisateur`");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
      $fetch_client = $find_row ['id_expediteur'];
      $fetch_expediteur = $find_row ['id_client'];
      $fetch_expediteur = $find_row ['montant_deposer'];
	  $fetch_frais_depot=$find_row['frais_depot'];
	  $fetch_date_depot=$find_row['date_depot'];
     



?>
            <tr>
              <td><a  href="affichage.php?id_expediteur=<?PHP echo $fetch_expediteur; ?>" title="visualiser les infos sur le client"><?php echo $fetch_expediteur;  ?><i class="glyphicon glyphicon-eye-open large"></i></a></td>
              <td><?php echo $fetch_client;  ?><a href="affichage.php?id_client=<?PHP echo $fetch_client; ?>" title="visualiser les infos sur l'expediteur"><i class="glyphicon glyphicon-eye-open large"></i></a></td>
             
              <td><?php echo $fetch_frais_depot;  ?></td>
              <td><?php echo $fetch_date_depot;  ?></td>
              <td><?php echo $fetch_montant_deposer;  ?></td>
              <td><a href="#" title="supprimer"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#" title="Modifier"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>
 </div>


 
 
         <div class="tab-pane" id="laboratoire" role="tabpanel">
           <br/>
           <br>
           <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="examen" type="text" placeholder="" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>nom</th>
            <th>prenom</th>
            <th>telephone</th>
            
            <th colspan="2">Operation</th>
          </tr>

            
              <td><a href="#"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            

                 
        </tr>        
      </table>
        </div>
      <!--tab4-->
         <div class="tab-pane" id="expediteur" role="tabpanel">
           <br/>
           <br>
           <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="examen" type="text" placeholder="Rechercher un expediteur" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Nom</th>
            <th>Prenom</th>
            <th>telephone</th>
            <th colspan="2">Operation</th>
          </tr>
<?php 

  $stmt_find = $connect->prepare("SELECT * FROM `expediteur`");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_nom=$find_row['nom_expediteur'];
      $fetch_prenom = $find_row ['prenom_expediteur'];
	  $fetch_tel=$find_row['telephone_expediteur'];
?>
            <tr>
              <td><?php echo $fetch_nom;  ?></td>
              <td><?php echo $fetch_prenom;  ?></td>
              <td><?php echo $fetch_telephone; ?></td>
              <td><a href="#"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>
        </div>
 <!--tab4-->
  <div class="tab-pane" id="patient" role="tabpanel">
           <br/>
           <br>
           <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="examen" type="text" placeholder="rechercher un patient" class="form-control validate[required]" />
               </div><br>
        </form>
        
          


?>
            <
    
        <!-- fin tab-->
<div class="clear"></div>
<?php 
if (isset($_GET['cat_delete']) ) {

$cat_id = $_GET['cat_delete'];

  $stmt_delete = $connect->prepare("DELETE FROM `categorie` WHERE `categorie`.`id_cat`=:id");
  $stmt_delete->bindParam (':id' , $cat_id , PDO::PARAM_STR );
  $stmt_delete->execute();

  if (isset($stmt_delete)) {
    echo "<div class='alert alert-success center' style='width: 90%; margin: auto;'><p>vous avez supprimé avec succés</p></div><br><br>"; 
    echo '<script type="text/javascript"> window.location.href += "#success"; </script>';
    echo "<meta http-equiv='refresh' content='5; url = categorie.php' />";
  }
  
}


 ?>
 <br>
        

</div>  
        
 <?php include 'footer.php'; ?>                           
 <script src="js/bootstrap.min.js"></script>          
<script src="js/popper.min.js"></script>
<script src="js/jquery-slim.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/util.js"></script>


  </body>
</html>
