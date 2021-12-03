<?php
session_start();

if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}
?>
<?php include '../includes/conn.php';?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en" >
<head>
	<?php include 'includes/link.php';?>

    <title>TNH3D</title>
    

 

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

   

    <!--top bar start-->

     <header class="header fixed-top">

        <div class="top-bar w-100">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6">

                        <ul class="list-inline list-unstyled">

                            <li class="list-inline-item"><a href="tel: 0749778276" class="pl-0"><i class="ion-ios-telephone"></i> 07 49 77 82 76 </a></li>
                            <li class="list-inline-item"><a href="mailto:tnh3d.dv@gmail.com"><i class="ion-ios-email"></i> tnh3d.dv@gmail.com</a></li>

                            

                        </ul>

                    </div>

                    <div class="col-sm-2">
                         <ul class="list-inline list-unstyled">


                            <li class="list-inline-item"><a href="#" class="pl-0"><img src="../img/en.png" title="England"></a></li>

                            <li class="list-inline-item"><a href="#" class="pl-0"><img src="../img/sa.png" title="Arabic"></a></li>
                            <li class="list-inline-item"><a href="#" class="pl-0"><img src="../img/fr.png" title="Francais"></a></li>

                            

                        </ul>

                    </div>

                    <!--top left col end-->

                    <div class="col-sm-4 text-right hidden-md-down">

                        <ul class="list-inline top-socials list-unstyled">

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-facebook-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-twitter-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-linkedin-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-google-plus-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-instagram"></i></a></li>

                        </ul>

                    </div>

                    <!--top social col end-->

                </div>

                <!--row-->

            </div>

            <!--container-->

        </div>

        <!--top bar end-->

        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse  header-transparent">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <a class="navbar-brand page-scroll logo no-margin" href="index.php"><img src="../img/logo.png"></a>

                <div class="navbar-collapse collapse show" id="navbarNav" aria-expanded="true" style="">

                    <ul class="navbar-nav ml-auto ">

                        <li class="nav-item active">

                            <a class="page-scroll nav-link" href="index.php"><b>Acceuil</b> </a>

                        </li>

                         <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <b> Hologramme</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="holograme_professionnel.php">Hélice holographique professionnel</a>
                                  <a class="dropdown-item" href="holograme_particulier.php">Hélice holographique particulier</a>
                                  <a class="dropdown-item" href="accessoire_holographique.php">Support de fixation</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <b> Animation 3D</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="animation-hologramme-sur-mesure.php">Animation 3D personnalisée</a>
                                  <a class="dropdown-item" href="Animation_payer.php">magasin d'animation</a>
                                  <a class="dropdown-item" href="Animation_telecharger.php">Telechargement</a>
                                </div>
                        </li>
                        <li class="nav-item ">

                            <a class="page-scroll nav-link" href="Coup_de_coeur.php"><b>Coup de coeur</b></a>

                        </li>
                        <li class="nav-item ">

                            <a class="page-scroll nav-link" href="site_web.php"><b>Site Web</b></a>

                        </li>
                        <li class="nav-item ">

                            <a class="page-scroll nav-link" href="location.php"><b>Location</b></a>

                        </li>

                        <li class="nav-item ">

                            <a class="page-scroll nav-link" href="realisation.php"><b>Realisation</b></a>

                        </li>

                        <li class="nav-item ">

                            <a class="page-scroll nav-link" href="blog.php"><b>Blog</b></a>

                        </li>

                        <li class="nav-item ">

                            <a class="page-scroll nav-link" href="propos.php"><b>A propos</b> </a>

                        </li>
                        
                         <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <b> Compte</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="animation-hologramme-sur-mesure.php">paramètres</a>
                                  <form method="post">
                                  <button class="dropdown-item" name="deconnexion">Deconnexion</button>
                                  </form>
                                </div>
                        </li>


                    </ul>

                </div>

            </div>

            <!-- End of Container -->

        </nav>

    </header>



     <?php
     if (isset($_POST['deconnexion'])) {
         unset($_SESSION['id_user']);
         echo "<script>
                window.location='../sign.php';
         </script>" ;
     }

     ?>

    <!--slider start-->

    <section id="home" class="slider-banner  bg-parallax" data-jarallax="{&quot;speed&quot;: 0.2}" style="width: 100%;"  >

        <div class="main-slider ">

            <!--slides end-->

            <div class="slider-overlay">

                <div class="slider-table">

                    <div class="slider-vm">

                        <!-- cd-intro -->

                       

                            <h1 class="cd-headline clip is-full-width">

                                       

                                        <span class="cd-words-wrapper" style="width: 181.538px; overflow: hidden;">

                                            <b class="is-visible">Bienvenue chez <span style="color: rgb(25,148,123);"> TNH3D </span></b>

                                            <b class="is-hidden">Produit <span style="color: rgb(25,148,123);">holographiques</span></b>

                                            <b class="is-hidden">Animation <span style="color: rgb(25,148,123);">  3D </span></b>

                                        </span>

                                        

                                    </h1>

                            <p>Spécialiste en hélices holographiques et en animations 3D</p>

                            <a href="holograme_professionnel.php" class="btn btn-lg btn-white-border" style="background-color: rgb(25,148,123); border-radius: 5px;">Voir Nos Produits</a>

                    

                        <!-- cd-intro -->

                    </div>

                </div>

            </div>

            <!--slides overlay end-->

        </div>

        

  
    		
    		
    	
    </div>
   <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" height="100%">
       					 <source src="../img/video.mp4" type="video/mp4">
  </video>
</section>
 






   
<br>



  <!--/ Section Services Star /-->
  <section id="NosUsers" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 35px; padding-bottom: 10px; ">
             Hellogram, professionnel de l’hologramme
            </h3>

            <p class="subtitle-a" style="font-size: 25px;">
              Des hologrammes de qualité à prix compétitif 
            </p>
            
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
              <div class="col-md-12">
                <div class="about-me pt-4 pt-md-0">
                  
                  <p class="lead" style="text-align: justify; ">
                Vous participez à un évènement, un forum, un salon … vous avez besoin de visibilité, d’attirer l’attention à vous ?
              Vous avez songé à un hologramme publicitaire ? Vous avez raison de choisir ce type de publicité moderne et impactante et vous êtes sur le bon site. 
              TNH3D, professionnel de l’affichage publicitaire nouvelle génération, vous accompagne tout au long de votre aventure 3D. 
              Nous étudions vos projets, vos envies, vos aspirations et vous proposons les solutions les plus adaptées à vos besoins. 
              Avec nos solutions 3D préparez-vous à révolutionner l’image de votre entreprise.

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- end section -->



<br>

<!-- section -->
<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
                <div class="col-lg-1 col-sm-4">
                    <i class="fa fa-home fa-5x" aria-hidden="true" style="margin-top: 15px; color: black;"></i>
                </div>
                <div class="col-sm-8 col-lg-2">
                   <h4>Livraison à domicile</h4>
                   <p>Livraison à votre domicile en France en et Europe</p>
                </div>


                 <div class="col-lg-1 col-sm-4">
                    <i class="fa fa-eye fa-5x" aria-hidden="true" style="margin-top: 15px; color: black;"></i>
                </div>
                <div class="col-sm-8 col-lg-2">
                   <h4>Produits captivants</h4>
                   <p>Une communication qui capte d’attention</p>
                </div>

                <div class="col-lg-1 col-sm-4">
                    <i class="fa fa-shield fa-5x" aria-hidden="true" style="margin-top: 15px; color: black;"></i>
                </div>
                <div class="col-sm-8 col-lg-2">
                   <h4>Garantie</h4>
                   <p>Tous nos produits sont garantis pendant 1 an </p>
                </div>

                <div class="col-lg-1 col-sm-4">
                    <i class="fa fa-rocket fa-5x" aria-hidden="true" style="margin-top: 15px; color: black;"></i>
                </div>
                <div class="col-sm-8 col-lg-2">
                   <h4>Livraison rapide</h4>
                   <p>Livraison en 6 jours ouvrés après paiement</p>
                </div>


            </div>
            

          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end section -->
<br>
<!-- section -->

<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <div class="box-shadow-full">
            <div class="row">
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 25px; padding-bottom: 10px; ">
                  Des hologrammes sous toutes leurs formes
                </h4>
                <p class="subtitle-a" style="font-size: 14px;">
                       Grâce à TNH3D, vous pourrez opter pour des hélices holographiques qui diffusent des images simples, des vidéos plus ou moins longues ou des animations de tout type. Quelles que soient ces données de base, l’holographie fonctionnera parfaitement pour donner une illusion d’image en 3D.

                      <details><summary>lire plus</summary>
                      Votre type d’hologramme correspondra forcément à votre projet. Chaque hologramme s’adapte à votre situation. L’hologramme à hélice est parfait pour toutes vos publicités. En effet, il diffuse sous différents aspects la forme que vous voulez lui donner. Un véritable atout pour tous vos espaces publicitaires.</details>
                </p>
            </div>
          </div>
        </div>

                

        <div class="col-sm-12 col-lg-6" >
          <div class="box-shadow-full" style="height: auto;" >
            <div class="row">
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 25px; padding-bottom: 10px; ">
                 Un affichage de qualité
                </h4>
                <p class="subtitle-a" style="font-size: 14px;">
                      L’hologramme en pyramide va révolutionner l’image de votre entreprise. Avec ses diffusions d’images en 3D, tout type de contenu pourra être projeté pour attirer les yeux des visiteurs.
                      <details><summary>lire plus</summary> Laissez les hélices afficher votre contenu tout simplement en l’allumant et vous serez épatés du résultat. Votre image sera projetée par les hélices en action pour lui donner une impression de flotter dans l’air. L’affichage sera d’une incomparable qualité avec l’intégration de lumières LED pour une incroyable précision.</details>
                </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


<!-- end section -->


<br>
<!-- section produit -->



 <section class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 35px; padding-bottom: 10px; ">
               Produits les plus consultés
            </h3>
          </div>
        </div>
      </div>
      </div>
  </section>




<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <form method="post" action="preview_product.php">
      <div class="row">      
<?php
      $conn=$pdo->open();
      $req= "SELECT * FROM produit where categorie_produit='Hologramme Professionnel' or categorie_produit='Hologramme Particulier' or categorie_produit='Accessoire Holographique' order by counter DESC LIMIT 8";  
      $stmt = $conn->query($req); 
      $aff = '';
      foreach ($stmt as $row) {
        $disp='';
        if($row['status']==0){
          $disp='indisponible';
        }
         if($row['categorie_produit']=='Hologramme Professionnel'){
        $photo1='holo_pro/'.$row['photo1'];
    }elseif ($row['categorie_produit']=='Hologramme Particulier') {
        $photo1='holo_par/'.$row['photo1'];
       
    }elseif ($row['categorie_produit']=='Accessoire Holographique') {
        $photo1='pied_et_fix/'.$row['photo1'];   
    }else{
        $photo1='coup_de_coeur/'.$row['photo1'];
    }  
          $aff.='<div class="col-md-6 col-lg-3 col-sm-12">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center">
                    <img src="../img/products/'.$photo1.'" alt="'.$row['Nom'].'" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center"> 
                        <button style="width: 120px; background-color: rgb(25,148,123); color: #fff;border-color: transparent; line-height: 30px; cursor: pointer;" class="visit-product active" value="'.$row['id_produit'].'" name="voir"><i class="icon-search"></i>Voir</button>
                       </div>
                    </div>
                  </div>
                  <div class="box-shadow-full" style="padding: 0 10px;">
                  <div class="title"><small class="text-muted">'.$row['categorie_produit'].'</small>

                  <span style=" background-color: orange; border-radius:5px; margin: 0 5px;">
                           '.$disp.'
                  </span>
                    
                      <h3 class="h6 text-uppercase no-margin-bottom">'.$row['Nom'].'</h3>
                  <span class="price text-muted" style="font-size:20px; font-family:Arial;">'.$row['Prix'].' €</span></div>
                </div>
                </div>
            </div>'; 
} 

echo $aff;
?>
          


    
</div>
</form>
</div>
</section>





<!-- end section -->

<br>

<!-- section -->
<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-4">
          <div class="box-shadow-full">
            <div class="row">
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 25px; padding-bottom: 10px; ">
                  Pour mettre en avant vos produits ou votre entreprise
                </h4>
                <p class="subtitle-a" style="font-size: 14px;">
                      Le but de nos hélices holographiques est donc de mettre en avant un produit que vous souhaitez promouvoir pour vos futurs clients. Si vous gérez un magasin par exemple, l’utilisation d’hélices holographiques permettra d’améliorer vos ventes et de faire la promotion du produit concerné.
                       <details><summary>lire plus</summary> De même, pour un restaurant, un salon de professionnels, une brasserie… les hélices holographiques seront efficaces pour attirer l’attention de vos clients et, pourquoi pas, les amener à l’achat. De ce fait, quelle que soit l’utilisation que vous ferez de votre hélice holographique, elle pourra mettre en avant un produit que vous aurez choisi pour qu’il soit visible aux yeux de tous.</details>
                </p>
            </div>
          </div>
        </div>

                

        <div class="col-sm-12 col-lg-4" >
          <div class="box-shadow-full" style="height: auto;">
            <div class="row">
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 25px; padding-bottom: 10px; ">
                 Une fonctionnalité exemplaire
                </h4>
                <p class="subtitle-a" style="font-size: 14px;">
                     Les hélices holographiques en général ont toutes la même fonctionnalité qui séduit de plus en plus les professionnels à titre publicitaire. En ce sens, ces hélices sont en fait, des ventilateurs fixés sur un appareil. <details><summary>lire plus</summary> Les pales des hélices tournent tellement vite que l’œil voit une image fixe qui est projetée par de la lumière. </details>
                </p>
            </div>
          </div>
        </div>


         <div class="col-sm-12 col-lg-4" >
          <div class="box-shadow-full" style="height: auto;" >
            <div class="row">
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 25px; padding-bottom: 10px; ">
                 De haute technologie
                </h4>
                <p class="subtitle-a" style="font-size: 14px;">
                    Comme vous pouvez le constater, les hélices holographiques, par un système de projection de qualité avec un moteur intégré, permettent de diffuser une image, une vidéo ou une animation sur un support de type écran.<details><summary>lire plus</summary> Ce mode de publicité est alors ultra moderne et fera son effet en comparaison à de simples panneaux publicitaires non animés et plutôt ternes. Car, oui, les hélices holographiques diffusent de multiples couleurs qui mettront en avant votre projet et illuminera votre espace. </details>
                </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


<!-- end section -->

<!-- section -->

  <section class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 35px; padding-bottom: 10px; ">
                Ils nous font confiance
            </h3>
          </div>
        </div>
      </div>
      </div>
  </section>

<!-- end section -->

<!-- section -->
<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-sm-12 col-lg-3">
               <img src="../img/chicken.png" style="width: 200px; height: 100px;">
              </div>
              <div class="col-sm-12 col-lg-3">
               <img src="../img/Faiveley.png" style="width: 200px; height: 100px;">
              </div>
              <div class="col-sm-12 col-lg-3">
               <img src="../img/porsche.png" style="width: 200px; height: 100px;">
              </div>
              <div class="col-sm-12 col-lg-3">
               <img src="../img/urgo.png" style="width: 200px; height: 100px;">
              </div>
              <div class="col-sm-12 col-lg-3">
               <img src="../img/peugeot.png" style="width: 200px; height: 100px;">
              </div>
              <div class="col-sm-12 col-lg-3">
               <img src="../img/chicken.png" style="width: 200px; height: 100px;">
              </div>
              <div class="col-sm-12 col-lg-3">
               <img src="../img/urgo.png" style="width: 200px; height: 100px;">
              </div>
              <div class="col-sm-12 col-lg-3">
               <img src="../img/porsche.png" style="width: 200px; height: 100px;">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end section -->
<br>


<!-- section -->


<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-6">
          <div class="box-shadow-full">
            <div class="row">
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 25px; padding-bottom: 10px; ">
                  Pour afficher votre logo
                </h4>
                <p class="subtitle-a" style="font-size: 14px;">
                       Les hélices holographiques sont adaptées pour la promotion d’un de vos produits par exemple, si vous êtes un commerçant, mais, quelle que soit votre entreprise, les hélices holographiques participeront tout simplement à l’affichage de votre logo.<details><summary>lire plus</summary>Cela est tout à fait possible et permettra de vous faire connaitre par le plus grand nombre. Les hélices sont alors capables de contenir un logo avec une simple image ou avec un texte court à l’image de votre marque ou des services que vous proposez. Le principe est alors d’afficher votre logo en 3D pour accroitre la visibilité de votre entreprise de manière efficace et lumineuse.</details> 
                </p>
            </div>
          </div>
        </div>

                

        <div class="col-sm-12 col-lg-6" >
          <div class="box-shadow-full" style="height: auto;" >
            <div class="row">
                <h4 class="intro-subtitle" style="color: rgb(25,148,123); font-size: 25px; padding-bottom: 10px; ">
                 Diffuser votre publicité
                </h4>
                <p class="subtitle-a" style="font-size: 14px;">
                     L’objectif principal des hélices holographiques est, sans aucun doute, la communication à travers un mode de fonctionnement hors norme.<details><summary>lire plus</summary> Et, ce n’est pas rien ! Imaginez les yeux ébahis de vos clients ou de nouveaux clients qui entrent dans votre magasin ou sur votre stand lors d’un salon ! Les hélices holographiques vous mettront en haut de l’affiche grâce à la rotation de leurs pales à LED en donnant une impression de projeter une image dans les airs avec une sensation de flotter. Ceci est donc une manière très originale de représenter votre entreprise et de séduire de multiples clients.</details>
                </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>




<!-- section foot -->

<?php
include 'includes/footer.php';
?>

<!-- end -->
    

<!-- script -->

<?php include 'includes/script.php';?>

<!-- end script -->


</body></html>