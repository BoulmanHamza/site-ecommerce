<?php
session_start();

if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}
?>
<?php include '../includes/conn.php';?>
<!DOCTYPE html>
<!-- saved from url=(0072)http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html -->
<html lang="en">
<head>

     <?php include 'includes/link.php';?>

    <title>holograme_professionnel</title>
       

 

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
      $holo="active";
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
             Hélice holographique professionnele
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
      <form method="post" action="preview_product.php">
      <div class="row">      
<?php
      $conn=$pdo->open();
      $req= "SELECT * FROM produit where categorie_produit='Hologramme Professionnel'";  
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