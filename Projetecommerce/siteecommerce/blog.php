<?php
session_start();

if(!empty($_SESSION['id_user'])){
 header('location:user/index.php');
}
?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths sr">
<head>
	
    <?php include 'includes/link.php';?>
    <title>Blog</title>
       


 

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
            Blog
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
        <h3 style="position: absolute; text-align: center; color: white;  font-size: 25px; margin-top: 50%; margin-left: 10%;">Comment filmer un hologramme?</h3>
        <img src="img/propos.jpg" alt="" width="100%" height="100%">

      </div>
      <div class="back">
        <div class="back-content middle">
          <h2>Comment filmer un hologramme?</h2>
          <div class="sm">
           <a href="comment filmer un hologram.php"> <button class="btn btn-primary">Lire plus</button></a>
          </div>
        </div>
      </div>
    </div>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-6">
          <div class="card middle">
      <div class="front">
        <h3 style="position: absolute; text-align: center; color: white;  font-size: 25px; margin-top: 50%; margin-left: 10%;">Comment créer une animation pour hologramme?</h3>
        <img src="img/propos.jpg" alt="" width="100%" height="100%">

      </div>
      <div class="back">
        <div class="back-content middle">
          <h2>Comment créer une animation pour hologramme?</h2>
          <div class="sm">
           <a href="comment creer une animation pour hologram.php"> <button class="btn btn-primary">Lire plus</button></a>
          </div>
        </div>
      </div>
    </div>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-6">
          <div class="card middle">
      <div class="front">
        <h3 style="position: absolute; text-align: center; color: white; font-size: 25px; margin-top: 50%; margin-left: 10%;">Comment fonctionnent les hélices holographiques ?</h3>
        <img src="img/propos.jpg" alt="" width="100%" height="100%">

      </div>
      <div class="back">
        <div class="back-content middle">
          <h2>Comment fonctionnent les hélices holographiques ?</h2>
          <div class="sm">
           <a href="Comment fonctionnent les helices holographiques.php"> <button class="btn btn-primary">Lire plus</button></a>
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