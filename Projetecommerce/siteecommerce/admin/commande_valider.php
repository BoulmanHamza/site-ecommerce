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
       Les Commandes 
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="">Commande</li>
		<li class="active">Liste des Commandes</li>
      </ol>
    </section>


    <?php
$tabanimation='<table id="example1" class="table table-bordered ">
          <thead>
            <th>Nom Client</th>
            <th>Email client</th>
            <th>Nom & Prenom Destinataire</th>
            <th>Email Destinataire</th>
            <th>Telephone Destinataire</th>
            <th>Status</th>
            <th>Outils</th>
          </thead>
          <tbody>';
          
          $req="SELECT status,c.Nom as 'Nomclient',c.Email as 'emailclient', des.Prenom as 'Prenom', des.Nom as 'Nomdestinataire', des.Email as 'Emaildestinataire', des.telephone as 'telephone',des.id_destinataire as 'id_destinataire' from details det,client c,destinataire des where c.id=det.id_user and det.id_destinataire=des.id_destinataire and status=1 group by des.id_destinataire";
          $stmt=$conn->query($req);

          foreach ($stmt as $row) {

             $status='<span class="label label-success">valider</span>';

                    $tabanimation=$tabanimation."
                    <tr>
                    <td>".$row['Nomclient']."</td>
                    <td>".$row['emailclient']."</td>
                    <td>".$row['Nomdestinataire']." & ".$row['Prenom']."</td>
                    <td>".$row['Emaildestinataire']."</td>
                    <td>".$row['telephone']."</td>
                    <td>".$status."</td>

                    <td><button class='btn btn-info btn-sm edit btn-flat' data-toggle='modal' onclick='aff(this)' value='".$row['id_destinataire']."' name='voir'  ><i class='fa fa-search'></i> Voir</button> </td>
                  </tr>";
          }
          $tabanimation=$tabanimation."</tbody></table>";

?>




    <section class="content">
    <?php echo $err?>
      <div class="row" id="tabp">
        <div class="col-xs-12">
          <div class="box">
      
       <div class="box-body">
        <form method="POST" action="afficher_commande_valider.php">
          <?php
          echo $tabanimation;
          ?>  
          </form>
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