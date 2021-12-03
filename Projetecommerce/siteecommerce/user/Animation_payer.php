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

    <title>Animation</title>
        


 

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
      $animation="active";
    ?>

   <?php include 'includes/nav.php';?>
 
<!-- end nav -->


<br>

  <!--/ Section Services Star /-->

  <section id="NosUsers" class="services-mf route">
    <div class="container">
       <div class="box-shadow-full" style="margin-top: 160px; ">
      <div class="row">
        <div class="col-sm-12">



  <div class="form-inline">
  <div class="form-group mb-2">
    <input type="text" class="form-control" name="rechercher" id="rechercher" placeholder="Rechercher" >
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <select class="form-control" id="categorie_animation">
      <option value="" hidden="">Categorie</option>
<?php
          $conn=$pdo->open();
          $req="SELECT * from categorie_animation ";
          $stmt=$conn->query($req);
          foreach ($stmt as $row) {
            echo " <option >".$row['categorie_animation']."</option>";
          }

?>
    </select>
  </div>
  <div class="form-group mx-sm-3 mb-1">
    <input type="number" class="form-control" min="0" max="999999" placeholder="prix Min" name="prixmin" id="prixmin" >
  </div>
  <div class="form-group mx-sm-3 mb-1">
    <input type="number" class="form-control" min="0" max="999999" placeholder="prix Max" name="prixmax" id="prixmax">
  </div>
  <button class="btn  mb-2" style="background-color: rgb(25,148,123); color: white;" id="filtrer">Filtrer</button>
</div>



          
           </div>
        </div>
      </div>
      </div>
  </section>
  <!--/ Section Services End /-->


<!-- Section  -->

<section class="about-mf sect-pt4 route" style="margin-top: -90px;">
    <div class="container">





 <form method="post" action="preview_animation.php">
      <div class="row" id="aff">      
<?php
      $conn=$pdo->open();
      $req= "SELECT * FROM animation";  
      $stmt = $conn->query($req); 
      $aff = '';
      foreach ($stmt as $row) {
          $aff.='<div class="col-md-6 col-lg-3 col-sm-12">
                <div class="product is-gray">
                  <div class="image d-flex align-items-center justify-content-center" style="position: relative; background: #fff; padding: 0px; height: auto;">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" height="100%">
                         <source src="../img/animation_3d/'.$row['video1'].'" type="video/mp4">
                    </video>


                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                      <div class="CTA d-flex align-items-center justify-content-center">
                           <button style="width: 120px; background-color: rgb(25,148,123); color: #fff;border-color: transparent; cursor: pointer;" class="visit-product active" value="'.$row['id_animation'].'" name="voir"><i class="icon-search"></i>Voir</button>
                      </div>
                    </div>
                  </div>
                  <div class="box-shadow-full" style="padding: 0 10px;">
                  <div class="title"><small class="text-muted">'.$row['categorie_animation'].'</small>
                      <h3 class="h6 text-uppercase no-margin-bottom">'.$row['nom'].'</h3>
                      <span class="price text-muted" style="font-size:20px; font-family:Arial;">'.$row['prix'].' €</span></div>
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



<!-- ajax filtration -->
<script type="text/javascript">
document.getElementById("filtrer").addEventListener("click",function(){
var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
var rechercher=document.getElementById("rechercher").value;
var categorie_animation=document.getElementById("categorie_animation").value;
var prix_min=document.getElementById("prixmin").value;
var prix_max=document.getElementById("prixmax").value;
xmlhttp.open("get","ajax/filtrer_animation.php?rechercher="+rechercher+"&categorie_animation="+categorie_animation+"&prixmin="+prix_min+"&prixmax="+prix_max,true);
xmlhttp.send();
xmlhttp.onreadystatechange=affich;

function affich(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("aff").innerHTML=xmlhttp.responseText;
        
  }else{
    document.getElementById("aff").innerHTML="probleme de l'affichage";
  }
}
})
</script>
<!-- end ajax filtration -->



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