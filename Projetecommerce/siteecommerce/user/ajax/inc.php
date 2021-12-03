<?php 
session_start();

include '../../includes/conn.php';
$conn=$pdo->open();
$ret=array();
	$aff='';
  $q=1;
  $total=0;
  $totaltva=0;
$id_user=$_SESSION['id_user'];
if(!empty($_GET['id_produit'])){
	$id_produit=$_GET['id_produit'];
	$req="SELECT * FROM cart where id_user=? and id_produit=?";
	$stmt=$conn->prepare($req);
	$stmt->execute([$id_user,$id_produit]);
  foreach ($stmt as $row) {
  $quantity=$row['quantity'];
}


  $q=$quantity+1;
  $req="UPDATE cart set quantity=? where id_user=? and id_produit=?";
  $stmt=$conn->prepare($req);
  $stmt->execute([$q,$id_user,$id_produit]);
$tva=0;

  $req="SELECT * FROM cart c,produit p where id_user=? and c.id_produit=p.id_produit";
  $stmt=$conn->prepare($req);
  $stmt->execute([$id_user]);
  foreach ($stmt as $row) {
      $total+=$row['Prix']*$row['quantity'];
      $tva+=$row['TVA']*$row['quantity'];
     
      
  }

  $totaltva=$total+$tva;

$ret['quantity']=$q;
$ret['total']=$total;
$ret['totaltva']=$totaltva+20;
$_SESSION['totaltva']=$totaltva+20;
            


}else{

}



echo json_encode($ret);

	





?>