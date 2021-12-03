<?php include '../../includes/conn.php';?>
<?php
$conn=$pdo->open();


$rechercher="";
$categorie_animation="";
$prixmin=0;
$prixmax=999999;

if(!empty($_GET['rechercher'])){
if (preg_match('/^([a-zA-Z0-9\'\"-_ éè]{0,})+$/',$_GET['rechercher']))
{
 $rechercher=$_GET['rechercher'];
 $rechercher=str_replace("'", "\'", $rechercher);
 $rechercher=str_replace('"', '\"', $rechercher);
}else{
  $rechercher="aucun resultat";
}
	
}else{
	$rechercher="";
}
if(!empty($_GET['categorie_animation'])){
	$categorie_animation=$_GET['categorie_animation'];
}else{
	$categorie_animation="";
}
if(!empty($_GET['prixmin']) && $_GET['prixmin']>=0){
	$prixmin=$_GET['prixmin'];
}else{
	$prixmin=0;
}
if(!empty($_GET['prixmax']) && $_GET['prixmax']>=0){
	$prixmax=$_GET['prixmax'];
}else{
	$prixmax=999999;
}

if($prixmin>=$prixmax){
	$prixmax=$prixmin+5000;
}




	$req= "SELECT * FROM animation where prix>=".$prixmin." and prix<=".$prixmax." and nom Like '%".$rechercher."%' and categorie_animation Like '%".$categorie_animation."%' ";  


	$stmt = $conn->query($req); 

      $aff = '';
      $co=0;
      foreach ($stmt as $row) {
      	$co=$co+1;
        
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
if($co==0){
	echo ' <section id="NosUsers" class="services-mf route">
    <div class="container">
       <div class="box-shadow-full" style="margin-top: 30px; ">
      <div class="row">
        <div class="col-sm-12">
        <h2>Aucun Resultat</h2>
</div>
</div>
</div>
</div>
</section>
        ';
}else{
	echo $aff;
}

?>