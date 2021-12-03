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
if (isset($_POST['voir'])) {
  $_SESSION['voir']=$_POST['voir'];
  $id_destinataire=$_SESSION['voir'];
}
if (empty($_SESSION['voir'])) {
  header('Location:commande_valider.php');
}

$nomclient='';
  $emailclient='';
  $nomdestinataire='';
  $emaildestinataire='';
  $tele='';
  $ville='';
  $pays='';
  $Adresse1='';
  $Adresse2='';
  $note='';

$req="SELECT status,Pays,ville,Adresse1,Adresse2,note,c.Nom as 'Nomclient',c.Email as 'emailclient', des.Prenom as 'Prenom', des.Nom as 'Nomdestinataire', des.Email as 'Emaildestinataire', des.telephone as 'telephone',des.id_destinataire as 'id_destinataire' from details det,client c,destinataire des where status=1 and c.id=det.id_user and det.id_destinataire=des.id_destinataire
and des.id_destinataire=?";
$stmt=$conn->prepare($req);
$stmt->execute([$_SESSION['voir']]);
foreach ($stmt as $row) {

  $nomclient=$row['Nomclient'];
  $emailclient=$row['emailclient'];
  $nomdestinataire=$row['Nomdestinataire']." & ".$row['Prenom'];
  $emaildestinataire=$row['Emaildestinataire'];
  $tele=$row['telephone'];
  $ville=$row['ville'];
  $pays=$row['Pays'];
  $Adresse1=$row['Adresse1'];
  $Adresse2=$row['Adresse2'];
  $note=$row['note'];
    
}

?>



    <?php
$tabanimation='<table id="example1" class="table table-bordered ">
          <thead>
            <th>Nom Produit</th>
            <th>Photo Produit</th>
            <th>Prix</th>
            <th>TVA</th>
            <th>Quantity</th>
             <th>status</th>
            <th>Prix total</th>
          </thead>
          <tbody>';
          
          $req="SELECT det.status as 'statusdetails' ,p.Nom as 'nomproduit',tva,Prix,quantity,categorie_produit,photo1,des.id_destinataire as 'id_destinataire' from details det,produit p,destinataire des where p.id_produit=det.id_produit and det.id_destinataire=des.id_destinataire and des.id_destinataire=? and det.status=1";
          $stmt=$conn->prepare($req);
          $stmt->execute([$_SESSION['voir']]);

          foreach ($stmt as $row) {


            $status='<span class="label label-success">valider</span>';
             

            $urlphoto='';
              if($row['categorie_produit']=='Hologramme Professionnel'){
                $urlphoto='../img/products/holo_pro';
              }elseif ($row['categorie_produit']=='Hologramme Particulier') {
                $urlphoto='../img/products/holo_par';
              }elseif ($row['categorie_produit']=='Accessoire Holographique') {
                $urlphoto='../img/products/pied_et_fix';
              }else{
                $urlphoto='../img/products/coup_de_coeur';
              }
              $total=$row['quantity']*$row['Prix']+$row['quantity']*$row['tva'];

                    $tabanimation=$tabanimation."
                    <tr>
                    <td>".$row['nomproduit']."</td>
                    <td><img src='".$urlphoto."/".$row['photo1']."' height='30px' width='30px'/></td>
                    <td>".$row['Prix']."</td>
                     <td>".$row['tva']."</td>
                    <td>".$row['quantity']."</td>
                    <td>".$status."</td>
                    <td>".$total."</td>

            
                  </tr>";
          }
          $tabanimation=$tabanimation."</tbody></table>";

?>

<div class="container">
    <?php echo $err?>
<div class="row">
  <div class="col-lg-6 col-sm-12">
    
      <div style="padding-top: 4rem;padding-bottom: 4rem;padding: 3rem 1.25rem;position: relative;background-color: #fff;margin-bottom: 3rem;z-index: 2;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
       <strong style="font-size: 20px;">de : </strong><br>
        <strong style="font-size: 15px;"> Nom : </strong><?php echo $nomclient; ?>
        <br>
        <strong style="font-size: 15px;">Email : </strong><?php echo $emailclient; ?>
      </div>

      
  
  
  
  
  
  
  
  
  
        
  </div>
    <div class="col-lg-6 col-sm-12">
       <div style="padding-top: 4rem;padding-bottom: 4rem;padding: 3rem 1.25rem;position: relative;background-color: #fff;margin-bottom: 3rem;z-index: 2;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
     <strong style="font-size: 20px;">a : </strong> <br>

       <strong style="font-size: 15px;"> Nom & Prenom :</strong> <?php echo $nomdestinataire;?><br>
       <strong style="font-size: 15px;"> Email : </strong><?php echo $emaildestinataire; ?><br>
       <strong style="font-size: 15px;"> telephone: </strong><?php echo $tele ;?><br>
        <strong style="font-size: 15px;">Pays:</strong> <?php echo $ville ;?><br>
       <strong style="font-size: 15px;"> ville: </strong><?php echo $pays;?><br>
       <strong style="font-size: 15px;"> Adresse1:</strong> <?php echo $Adresse1;?><br>
       <strong style="font-size: 15px;"> Adresse2: </strong><?php echo $Adresse2;?><br>
       <strong style="font-size: 15px;"> note Commande: </strong><?php echo $note;?><br>

      </div>
   
  </div>
</div>
</div>





    <section class="content">
      <div class="row" id="tabp">
        <div class="col-xs-12">
          <div class="box">
      
       <div class="box-body">
        <form method="POST" action="afficher_commande.php">
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