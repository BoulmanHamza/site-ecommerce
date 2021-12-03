<?php
session_start();

if(!empty($_SESSION['id_user'])){
 header('location:user/index.php');
}
?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en">
<head>
	
   <?php include 'includes/link.php';?>

    <title>Realisations</title>
       


 

<style type="text/css">
	@media only screen and (max-width: 767px) {
  #home {
    margin-top: 125px;
  }
  @media only screen and (max-width: 576px) {
  #home {
    margin-top: 85px;
  }
}

</style>


</head>





<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="" style="background-image: url(img/bg.jpg);">

   

    <!--nav-->
    <?php
        $realisation="active";
    ?>

    <?php include 'includes/nav.php';?>
 <!-- end nav -->
 
<br>



  <!--/ Section Services Star /-->
  <section id="NosUsers" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 35px; padding-bottom: 10px;  margin-top: 160px; ">
            Réalisations
            </h3>
          </div>
        </div>
      </div>
      </div>
  </section>
  <!--/ Section Services End /-->



<!-- Section  -->

<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-4 col-md-6">
          <div class="card middle">
      <div class="front">
        <h3 style="position: absolute; text-align: center; color: white;  font-size: 25px; margin-top: 50%; margin-left: 10%;">L’hologramme pour le médical</h3>
        <img src="img/propos.jpg" alt="" width="100%" height="100%">

      </div>
      <div class="back">
        <div class="back-content middle">
          <h2>L’hologramme pour le médical</h2>
          <div class="sm">
            <a href="hologramme-pour-le-medical.php"><button class="btn btn-primary">Lire plus</button></a>
          </div>
        </div>
      </div>
    </div>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-6">
          <div class="card middle">
      <div class="front">
        <h3 style="position: absolute; text-align: center; color: white;  font-size: 25px; margin-top: 50%; margin-left: 10%;">L’hologramme au SIAE 2019</h3>
        <img src="img/propos.jpg" alt="" width="100%" height="100%">

      </div>
      <div class="back">
        <div class="back-content middle">
          <h2>L’hologramme au SIAE 2019</h2>
          <div class="sm">
            <a href="hologramme au SIAE 2019.php"><button class="btn btn-primary">Lire plus</button></a>
          </div>
        </div>
      </div>
    </div>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-6">
          <div class="card middle">
      <div class="front">
        <h3 style="position: absolute; text-align: center; color: white; font-size: 25px; margin-top: 50%; margin-left: 10%;">Une animation 3D dans le thème de l’IA</h3>
        <img src="img/propos.jpg" alt="" width="100%" height="100%">

      </div>
      <div class="back">
        <div class="back-content middle">
          <h2>Une animation 3D dans le thème de l’IA</h2>
          <div class="sm">
           <a href="animation_3D_dans_le_theme_de_lIA.php"><button class="btn btn-primary">Lire plus</button></a>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
  </section>

<!-- end section -->







<br><br>


<!-- end section -->

<!-- section foot -->

<?php
include 'includes/footer.php';
?>

<!-- end -->
    

<!-- script -->

<?php include 'includes/script.php';?>

<!-- end script -->


</body></html>