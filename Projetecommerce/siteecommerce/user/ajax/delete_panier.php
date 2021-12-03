<?php 
session_start();

include '../../includes/conn.php';
$conn=$pdo->open();
$ret=array();
	$aff='';
$id_user=$_SESSION['id_user'];
if(!empty($_GET['id_produit'])){
	$id_produit=$_GET['id_produit'];
	$req="DELETE FROM cart where id_user=? and id_produit=?";
	$stmt=$conn->prepare($req);
	$stmt->execute([$id_user,$id_produit]);


$co=0;
	$req="SELECT * FROM cart c,produit p where id_user=? and c.id_produit=p.id_produit";
$stmt=$conn->prepare($req);
$stmt->execute([$_SESSION['id_user']]);
foreach ($stmt as $row) {
  $co++;
  $nom=$row['Nom'];
  $id=$row['id_produit'];
  $Prix=$row['Prix'];
  $quantity=$row['quantity'];
  $categorie=$row['categorie_produit'];
  $tva=$row['TVA'];
   if($row['categorie_produit']=='Hologramme Professionnel'){
        $photo1='holo_pro/'.$row['photo1'];
    }elseif ($row['categorie_produit']=='Hologramme Particulier') {
        $photo1='holo_par/'.$row['photo1'];
       
    }elseif ($row['categorie_produit']=='Accessoire Holographique') {
        $photo1='pied_et_fix/'.$row['photo1'];   
    }else{
        $photo1='coup_de_coeur/'.$row['photo1'];
    }  

  $aff.='<div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="../img/products/'.$photo1.'" alt="'.$photo1.'">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>'.$nom.'</h5>
                    <p class="mb-3 text-muted text-uppercase small">'.$categorie.'</p>
                    <br><br><br>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <button onclick=""
                        class="minus decrease" value="'.$quantity.'" id="dec"></button>
                      <input class="quantity" min="1" name="quantity" value="'.$quantity.'" type="number" disabled>
                      <button id="inc" value="'.$quantity.'" class="plus increase"></button>
                    </div>
                    
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a type="button" id_pro="'.$id.'" onclick="afficher(this)" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fa fa-trash mr-1"></i> Remove item </a>
                    
                  </div>
                  <p class="mb-0"><span><strong id="summary">'.$Prix.' €</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">';



}





}else{

}

$totaltva=0;
$total=0;
$tva=0;
 $req="SELECT * FROM cart c,produit p where id_user=? and c.id_produit=p.id_produit";
  $stmt=$conn->prepare($req);
  $stmt->execute([$id_user]);
  foreach ($stmt as $row) {
      $total+=$row['Prix']*$row['quantity'];
      $tva+=$row['TVA']*$row['quantity'];
     
      
  }

  $totaltva=$total+$tva;

$ret['total']=$total;
if($totaltva!=0){
  $ret['totaltva']=$totaltva+20;
  $_SESSION['totaltva']=$totaltva+20;
}else{
  $ret['totaltva']=$totaltva;
  $_SESSION['totaltva']=$totaltva;
}


$ret['aff']=$aff;
$ret['co']=$co;
$count2=0;
  $req="SELECT * from cart where id_user=?";
  $stmt=$conn->prepare($req);
  $stmt->execute([$id_user]);
  foreach ($stmt as $row) {
    $count2++;
  }
 $ret['count']=$count2; 

echo json_encode($ret);

	





?>