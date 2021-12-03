<?php include '../includes/conn.php';?>
<?php
$conn=$pdo->open();


$rechercher="";
$categorie_produit="";
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
if(!empty($_GET['categorie_produit'])){
	$categorie_produit=$_GET['categorie_produit'];
}else{
	$categorie_produit="";
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




	$req= "SELECT * FROM produit where categorie_produit!='Hologramme Professionnel' and categorie_produit!='Hologramme Particulier' and categorie_produit!='Accessoire Holographique' and prix>=".$prixmin." and prix<=".$prixmax." and Nom Like '%".$rechercher."%' and categorie_produit Like '%".$categorie_produit."%' ";  


	$stmt = $conn->query($req); 

      $aff = '';
      $co=0;
      foreach ($stmt as $row) {
      	$co=$co+1;
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
                    <img src="img/products/'.$photo1.'" alt="'.$row['Nom'].'" class="img-fluid">
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