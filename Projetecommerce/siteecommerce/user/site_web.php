<?php
session_start();
include '../includes/conn.php';
if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}
?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths sr">
<head>
	
    <?php include 'includes/link.php';?>
    <title>site web</title>
       


 

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
$siteweb="active";
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
            Site Web
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
        <div class="col-lg-4"></div>
        <div class="col-sm-12 col-lg-4 col-md-6">
          <div class="card middle">
      <div class="front">
        <h3 style="position: absolute; text-align: center; color: white;  font-size: 25px; margin-top: 50%; margin-left: 10%;">Creer des sites web</h3>
        <img src="../img/propos.jpg" alt="" width="100%" height="100%">
      </div>
      <div class="back">
        <div class="back-content middle" style="padding: 30px;">
          <h2>Creer des sites web</h2>
          <p style="text-align: justify; font-size: 16px;">
                      - Envoi de votre cahier de charge
                  </p>
                  <p style="text-align: justify; font-size: 16px;">
                      - Jusqu′à 2 révisions
                  </p>
          <div class="sm">
           <!-- <a href="mailto:contact@tnh3d.com?subject=Creer site Web">  -->
            <button class="btn btn-primary" disabled>demander</button>
          <!-- </a> -->
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