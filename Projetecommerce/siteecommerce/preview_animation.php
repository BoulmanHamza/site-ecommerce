<?php
session_start();

if(!empty($_SESSION['id_user'])){
 header('location:user/index.php');
}

include 'includes/conn.php';

if(!empty($_POST['voir'])){
$_SESSION['id_animation']=$_POST['voir'];

}
if(empty($_SESSION['id_animation']) && empty($_POST['voir'])){
 header('location:Animation_payer.php');
}






$conn=$pdo->open();
$req= "SELECT * FROM animation where id_animation=? ";  
$stmt = $conn->prepare($req); 
 $stmt->execute([$_SESSION['id_animation']]);
foreach ($stmt as $row) {
    $nom=$row['nom'];
    $Categorie=$row['categorie_animation'];
    $prix=$row['prix'];
    $description1=$row['description'];
    $description2=$row['description2'];
    $information=$row['information'];
    $video1=$row['video1'];
    $video2=$row['video2'];
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>

   <?php include 'includes/link.php';?>

  <title>Preview Product</title>

  
 
 


 
</head>

<body class="skin-light" aria-busy="true" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="">





<!-- nav -->
 <?php include 'includes/nav.php';?>


<!-- end nav -->


  <!--Main layout-->
  <main style="margin-top: 200px;">
    <div class="container">

      <!--Section: Block Content-->
      <section class="mb-5">

        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="mdb-lightbox" data-pswp-uid="1">
              <div class="row product-gallery mx-1">
                <div class="col-12 mb-0">
                  <?php
                      
                        echo '<figure class="view overlay rounded z-depth-1 main-img" style="max-height: 450px;">
                   
                    <video controls width="100%" height="100%">
                 <source src="img/animation_3d/'.$video1.'" type="video/mp4">
                    </video>
                     
                 
                  </figure>';
                      
                  
                     
                  ?>

                </div>
                <div class="col-12">
                  <div class="row">

                   
                   
                  </div>
                </div>
              </div>

            </div>

          </div>
          <div class="col-md-6">
            <h5><?php echo (!empty($nom))? $nom : '';?></h5>
            <p class="mb-2 text-muted text-uppercase small"><?php echo (!empty($Categorie))? $Categorie : '';?></p>
            <p><span style="font-size: 25px; font-family: Arial; font-weight: bold;"><?php echo (!empty($prix))? $prix : '';?> €</span></p>
            <p class="pt-1"><?php echo (!empty($description1))? $description1 : '';?></p>

           
            <hr>
            <a href="sign.php"><button type="button" class="btn btn-light btn-md mr-1 mb-2 waves-effect waves-light"><i class="fa fa-shopping-cart pr-2"></i>Acheter maintenant</button></a>
          </div>
        </div>

      </section>
      <!--Section: Block Content-->

  <!-- Classic tabs -->
<!-- Classic tabs -->
<div class="classic-tabs border rounded px-4 pt-1">

  <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Information</a>
    </li>
  </ul>
  <div class="tab-content" id="advancedTabContent">
    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
      <h5><?php echo (!empty($description2))? $description2 : '';?></h5>
     
    </div>
    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
      <h5><?php echo (!empty($information))? $information : '';?></h5>
      
    </div>
   
  </div>

</div>
<!-- Classic tabs -->
<!-- Classic tabs -->

      <hr>

   

    </div>
  </main>
  <!--Main layout-->




<!-- section foot -->

<?php
include 'includes/footer.php';
?>

<!-- end -->
    

<!-- script -->

<?php include 'includes/script.php';?>

<!-- end script -->



</body>
</html>