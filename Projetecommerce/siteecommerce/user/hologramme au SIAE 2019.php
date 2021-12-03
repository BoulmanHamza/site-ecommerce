<?php
session_start();
include '../includes/conn.php';
if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}
?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en">
<head>

     <?php include 'includes/link.php';?>

    <title>L’hologramme au SIAE 2019</title>
      

 

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





<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="" style="background-image: url(../img/bg.jpg);">

   

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
            L’hologramme au SIAE 2019
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
                  			Une animation 3D pour l’aéronautique
                  </h4>
                  </div>
              <div class="col-md-8 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  <p  style="text-align: justify; font-family: Arial; font-size: 20px; ">
                   	- Normandie Aeroespace, une entité regroupant de nombreux acteurs de l’aéronautique participe tous les deux ans au très célèbre salon Salon International de l’Aéronautique et de l’Espace au Bourget. Afin de mettre en avant leurs acteurs, ils ont choisi de diffuser une animation holographique sur leur stand.</p>
                   	<p style="text-align: justify; font-family: Arial; font-size: 20px;">
					- Nous avons pris en charge, la réalisation de l’animation, mais aussi l’installation du matériel holographique pour ce salon durant 10 jours.</p>
					<p style="text-align: justify; font-family: Arial; font-size: 20px;">
					- Leur besoin pour l’animation était d’afficher un Airbus et d’animer à la fois leur logo et la phrase “Embarquez avec NAE”. Nous avons ainsi réalisé un contenu compatible avec l’hélice installé sur leur stand; une hélice holographique de 65cm.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="about-me pt-4 pt-md-0" style="height: 100%; ">
                  
                  <img src="../img/propos.jpg" title="image" width="100%" height="100%" style="border-radius: 5px;">
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
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 30px; margin-bottom: 40px; ">
                        Un stand équipé d’une hélice holographique 65cm
                </h4>
              </div>
              <div class="col-md-12 col-sm-12">
                <p style="text-align: justify; font-family: Arial; font-size: 20px; ">
                       Le stand de NAE a été équipé d’une hélice holographique 65cm. Disposé en hauteur, le dispositif a pu attirer l’attention des visiteurs pour le SIAE 2019 au Bourget. Une innovation visuel qui a plu à la fois aux visiteurs professionnels mais aussi aux particuliers se rendant au Bourget.
                </p>
              </div>
              <div class="col-md-12 col-sm-12">
                <center><div class="about-me pt-4 pt-md-0">
                 <video controls width="90%" height="90%">
                 <source src="../img/video.mp4" type="video/mp4">
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
                   	- Réactivité, créativité, conseil. Tout ce que l’on attend d’un prestataire! Je recommande vivement Hellogram qui a su parfaitement comprendre notre besoin et s’adapter à notre logistique contraignante. Bravo!</p>
                   	<p style="text-align: justify; font-family: Arial; font-size: 20px;">
					           <b>- Marion – NAE</b></p>
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