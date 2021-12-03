<?php
session_start();


if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}


include '../includes/conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>animation_telecharger</title>
	<?php $animation='active';?>
	<?php include 'includes/link.php';?>
</head>
<body class="skin-light" aria-busy="true" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="" style="background-image: url(../img/bg.jpg);">
<?php include 'includes/nav.php';?>


<?php
$aff='';
$conn=$pdo->open();
$req="SELECT * FROM telecharger t,animation a where t.id_animation=a.id_animation and id_user=?";
$stmt=$conn->prepare($req);
$stmt->execute([$_SESSION['id_user']]);
foreach ($stmt as $row) {
     
	$categorie_animation=$row['categorie_animation'];
	$nom_animation=$row['nom'];
	$video2=$row['video2'];
	$description=$row['description'];


	$aff.= '<div class="col-md-5 col-lg-3 col-xl-3">
              
                <figure class="view overlay rounded z-depth-1 main-img">
                   
                    <video controls width="100%" height="100%">
                 <source src="../img/animation_3d/'.$video2.'" type="video/mp4">
                    </video>
                     
                 
                  </figure>
              
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>'.$nom_animation.'</h5>
                    <p class="mb-3 text-muted text-uppercase small">'.$categorie_animation.'</p>
                    <br>
                    <p>description</p>
                  </div>
                  <div>
                    <div >
                    <a href="../img/animation_3d/'.$video2.'" download>
                      <button class="btn btn-primary">Telecharger Maintenant</button></a>
                     
                    </div>
                    
                  </div>
                </div>
               
              </div>
            </div>
          
          <hr class="mb-4">';

}

if($aff==''){
	$aff='<h3>aucun animation acheter<h3>';
}

?>

<br><br>
<section id="NosUsers" class="services-mf route">
    <div class="container">
       <div class="box-shadow-full" style="margin-top: 160px; ">
      <div class="row">
      		
          

         <?php echo $aff?>
      </div>
  </div>
</div>
</section>






<?php
include 'includes/footer.php';
?>

<!-- end -->
    

<!-- script -->

<?php include 'includes/script.php';?>

<!-- end script -->



</body>
</html>