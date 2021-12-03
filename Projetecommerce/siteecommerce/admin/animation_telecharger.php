<?php
session_start();
include '../includes/conn.php';
$conn=$pdo->open();
if(empty($_SESSION['admin'])){
  header("Location:login.php");
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
       Liste des animations telecharger
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="">Animation</li>
		<li class="active">Animation Telecharger</li>
      </ol>
    </section>

















    <?php


$tabcateg='<table id="example1" class="table table-bordered ">
          <thead>
            <th>Nom client</th>
            <th>Email</th>
             <th>Nom Animation</th>
              <th>Categorie Animation</th>
          </thead>
          <tbody>';
          
          $req="SELECT * from telecharger t,animation a,client c where t.id_user=c.id and t.id_animation=a.id_animation";
          $stmt=$conn->query($req);
          foreach ($stmt as $row) {
                   $tabcateg=$tabcateg.'
                    <tr>
                    <td>'.$row['Nom'].'</td>
                    <td>'.$row['Email'].'</td>
                    <td>'.$row['nom'].'</td>
                    <td>'.$row['categorie_animation'].'</td>
                     
                  </tr>';

                

	          
                   
           
          }
          $tabcateg=$tabcateg."</tbody></table>";



?>



    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
     
            
         <div class="box-body">
        <?php
          echo $tabcateg;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
</div>
<?php include 'include/script.php'; ?>


</body>
</html>