<?php
session_start();
include '../includes/conn.php';
$conn=$pdo->open();

if(empty($_SESSION['admin'])){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>TNH3D</title>

<?php include 'include/style.php'; ?>

</head>



<?php include 'include/modifier_profile.php'; ?>




<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


	
	<?php include 'include/navbar.php'; ?>


 <?php include 'include/menu.php'; ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	
  	<section class="content-header">
      <h1>
        Tableau de Bord 
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="active">Tableau de bord</li>
      </ol>
    </section>


    <section class="content">

        <?php echo $err?>
            
        <br>
        <div class="row">
        	
          <?php
          $nbrproduits=0;
         
          $req="select * from produit";
          $stmt=$conn->query($req);
          foreach ($stmt as $row) {
	          $nbrproduits++;
          }
          ?>

        	<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $nbrproduits?></h3>
              <p>Nombre des Produits</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
          </div>
        </div>





        <?php
          $nbranimation=0;
          $req="select * from animation";
          $stmt=$conn->query($req);
          foreach ($stmt as $row) {
	          $nbranimation++;
          }
        ?>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $nbranimation?></h3>
              <p>Nombre des Animation</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
          </div>
        </div>





        <?php
          $nbrcmd=0;
          
          $req="select * from details where status=0 group by id_destinataire";
          $stmt=$conn->query($req);
          foreach ($stmt as $row) {
	          $nbrcmd++;
          }
          ?>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $nbrcmd?></h3>
              <p>Nombre des Commandes</p>
            </div>
            <div class="icon">
              <i class="fa fa-barcode"></i>
            </div>
          </div>
        </div>


        <?php
          $nbrclient=0;
         
          $req="select * from client";
          $stmt=$conn->query($req);
          foreach ($stmt as $row) {
	          $nbrclient++;
          }
          ?>



        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $nbrclient?></h3>
              <p>Nombre des Clients</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>





        </div>
  </div>
</div>



<?php include 'include/script.php'; ?>
</body>
</html>