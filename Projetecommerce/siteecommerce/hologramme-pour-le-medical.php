<?php
session_start();

if(!empty($_SESSION['id_user'])){
 header('location:user/index.php');
}
?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en" >
<head>
	
      <?php include 'includes/link.php';?>

    <title>L’hologramme pour le médical</title>
       


 

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
            L’hologramme pour le médical
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
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
            	<div class="col-md-12 col-sm-12 col-lg-12">
            	 <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 30px; margin-bottom: 40px; ">
                  			Animation pour hologramme d’un logo et d’un téléphone
                  </h4>
                  </div>
              <div class="col-md-8 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  <p  style="text-align: justify; font-family: Arial; font-size: 20px; ">
                   	- Dans le but de faire impression lors de leurs différents évènements et salons, Urgo Medical a fait l’acquisition d’une hélice holographique 65cm.</p>
                   	<p style="text-align: justify; font-family: Arial; font-size: 20px;">
					- Pour le lancement de leur toute dernière application “Healico”, Urgo nous a fait confiance pour la création d’une animation pour hologramme. Nous avons ainsi animé le logo de l’application et mis en scène les différentes fonctions du logiciel sur un smartphone.</p>
					<p style="text-align: justify; font-family: Arial; font-size: 20px;">
					- Une animation pensée pour l’hologramme réalisé par Hellogram.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="about-me pt-4 pt-md-0" style="height: 100%; ">
                  
                  <img src="img/propos.jpg" title="image" width="100%" height="100%" style="border-radius: 5px;">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- end section -->



<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <center><div class="about-me pt-4 pt-md-0">
                 <video controls width="90%" height="90%">
                 <source src="img/video.mp4" type="video/mp4">
                </video>
                </div></center>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>










  <section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
            	<div class="col-md-12 col-sm-12 col-lg-12">
            	 <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 30px; margin-bottom: 40px; ">
                  			L’avis du client
                  </h4>
                  </div>
              <div class="col-md-12 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  <p  style="text-align: justify; font-family: Arial; font-size: 20px; ">
                   	- Nous avons contacté Valentin pour acheter une hélice et développer un hologramme dans le cadre d’un congrès de médecine. Très pro, envoi super rapide, créatif et réactif. Je recommande vivement. Nos visiteurs étaient impressionnés.</p>
                   	<p style="text-align: justify; font-family: Arial; font-size: 20px;">
					           <b>- Benoît – Urgo Medical</b></p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


































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