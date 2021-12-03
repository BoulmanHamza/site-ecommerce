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

    <title>A propos</title>
        

 

<style type="text/css">


@media(max-width: 992px) {
  #panier { font-size: 22px; bottom: 15px; height: 50px; width: 50px;}
}
@media(max-width:359px) {
 
  #panier { font-size: 18px; bottom: 6px; height: 100px; width: 100px; }
}



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
      $propos="active";
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
            Qui sommes-nous ?
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
              <div class="col-md-6 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 35px; padding-bottom: 10px; ">
                  			Notre unique but : Faire parler de votre société grâce aux hologrammes et leurs effets saisissants.
                  </h4>
                  <p class="lead" style="text-align: justify; ">
                   Nous proposons des affichages publicitaires nouvelle génération : hélices holographiques, écrans OLED ainsi que les services y étant liés tel que la création de contenu 3D.
                   	<p class="lead" style="text-align: justify; ">
					Grâce à ses offres et services, TNH3D est parées pour vous accompagner dans l’aventure de la 3D !</p>

					<p class="lead" style="text-align: justify; ">
					Pour vous soutenir encore plus loin dans votre développement publicitaire nous vous proposons également la création de votre site internet que ce soit un site vitrine ou un e-commerce.
				</p>
        <p class="lead" style="text-align: justify; ">
          Nous proposons nos services en France et en Europe. Vente d’hologramme, location, animation 3D de logo texte et produits… Nos services s’adressent à toute entreprise souhaitant promouvoir un produit, améliorer son image ou encore faire passer un message.
        </p>
         <p class="lead" style="text-align: justify; ">
          N’attendez plus contactez nous.
        </p>
            
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="about-me pt-4 pt-md-0">
                  
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