<?php
session_start();
include '../includes/conn.php';
if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}
?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en" >
<head>

     <?php include 'includes/link.php';?>
	
    <title>Comment-fonctionnent-les-hélices-holographiques </title>
       


 

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

    <div class="se-pre-con" style="display: none;"></div>

    <!--nav-->
    <?php
$blog="active";
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
             Comment fonctionnent les hélices holographiques ?
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
              <div class="col-md-12 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                   	<p style="text-align: justify; font-family: Arial; font-size: 20px; line-height: 30px;">
					             - Les pales des hélices holographiques sont équipées d’un grand nombre de LED. Lorsque l’appareil est en route, celui-ci va tourner à très grande vitesse de façon à afficher une image.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- end section -->


















<!-- Section  -->

<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
            	<div class="col-md-12 col-sm-12 col-lg-12">
            	 <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 30px; margin-bottom: 40px; ">
                  			Comment pouvons nous voir ce type d’hologramme?
                  </h4>
                  </div>
              <div class="col-md-8 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  <p  style="text-align: justify; font-family: Arial; font-size: 20px; line-height: 30px;">
                   	Vous pouvez voir cet hologramme grâce à ce qu’on appelle la persistance rétinienne. Pour faire simple, la persistance rétinienne est un phénomène qui fait qu’une image reste dans votre vision pendant un laps de temps très court (1/25 de seconde). En effet, je vous invite pour vous le prouver à regarder une lumière puis fermer les yeux. Pendant une très courte durée, vous verrez encore cette lumière même les yeux fermés. Au même titre qu’une lumière, les LED disposées sur les hélices vont agir sur votre persistance rétinienne. Grâce à ce phénomène, vous êtes capable de voir ce type d’hologramme.</p>
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



<!-- Section  -->

<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
               <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 30px; margin-bottom: 20px; ">
                        Quels sont les composants électroniques de l’appareil?
                  </h4>
                  </div>
              <div class="col-md-12 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  <p  style="text-align: justify; font-family: Arial; font-size: 20px;">
                    <b>Grâce à quels composants l’hélice holographique produit-elle une image? </b></p>

                  <ul>
                    <li> 
                      <p  style="text-align: justify; font-family: Arial; font-size: 20px; line-height: 30px;">
                   <b> Codeur angulaire optique : </b> Celui-ci va déterminer la position de l’hélice sur différents degrés. Un tour complet représente 360°, le codeur angulaire va donc déterminer différentes positions sur un tour complet. Ces positons qui vont faire varier l’affichage des LED.</p>
                  </li>
                    <li> 
                      <p  style="text-align: justify; font-family: Arial; font-size: 20px; line-height: 30px;">
                    <b>Barre de LED haute densité : </b> Celle-ci vont’afficher en fonction de la position de l’hélice. Chaque LED représente donc un pixel. À la différence d’une télévision ou les LED sont fixes, celles-ci se déplacent avec le mouvement permit par l’hélice.</p>
                  </li>
                    <li> 
                      <p  style="text-align: justify; font-family: Arial; font-size: 20px; line-height: 30px;">
                    <b>Un moteur : </b>Celui-ci va faire tourner l’hélice.</p>
                  </li>
                    <li>
                     <p  style="text-align: justify; font-family: Arial; font-size: 20px; line-height: 30px;">
                    En reprenant le principe de la persistance rétinienne, l’hélice doit faire un tour complet en 1/25 de seconde. À chaque tour complet, l’image affichée va varier. Pour reproduire une animation,<b> l’hélice  va afficher 25 images différentes chaque seconde </b> pour vous donner l’illusion que l’image est animée.</p>
                  </li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- end section -->






<!-- Section  -->

<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
               <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 30px; margin-bottom: 40px; ">
                        Pourquoi a-t-on l’impression que l’image est en 3D?
                  </h4>
                  </div>
              <div class="col-md-12 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  <p  style="text-align: justify; font-family: Arial; font-size: 20px; line-height: 30px;">
                    En utilisant une hélice, l’arrière-plan reste visible. En effet, lorsqu’une LED est éteinte, ce qui est situé derrière l’hélice est visible. De cette manière, le sujet de votre hologramme va lui rester allumé tandis que le tour du sujet sera éteint. La visibilité du sujet et la profondeur créée par la transparence donnent l’impression que l’image diffusée flotte dans l’air. Il suffit alors d’éloigner l’hélice suffisamment de on arrière-plan pour donner l’impression que l’image flotte dans la pièce.</p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- end section -->





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