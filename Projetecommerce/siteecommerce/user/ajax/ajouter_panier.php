<?php 
session_start();

include '../../includes/conn.php';
$conn=$pdo->open();
$return_arr = array();
$id_user=$_SESSION['id_user'];
$id_produit=$_SESSION['id_prod'];
if(!empty($_GET['quantity'])){
if (preg_match('/^([1-9]{1,})+$/',$_GET['quantity']))
{
 $quantity=$_GET['quantity'];
}else{
	$quantity=1;
}	
}
$count=0;

if(!empty($id_user) && !empty($id_produit) && !empty($quantity)){
	$req="SELECT * from cart where id_user=? and id_produit=?";
	$stmt=$conn->prepare($req);
	$stmt->execute([$id_user,$id_produit]);
	foreach ($stmt as $row) {
		$count++;
	}

if($count==0){
	$dis=0;
	$req="SELECT * from produit where id_produit=? and status=0";
	$stmt=$conn->prepare($req);
	$stmt->execute([$id_produit]);
	foreach ($stmt as $row) {
		$dis++;
	}

	if($dis==0){
	$req="INSERT INTO cart (id_user,id_produit,quantity) values (?,?,?)";
	$stmt=$conn->prepare($req);
    $stmt->execute([$id_user,$id_produit,$quantity]);
    
    $return_arr['message']='<div class="alert alert-success" role="alert" style="padding-bottom: 20px; background-color: #4dbd4d; color: black;" >Article ajouté au panier</div>';
}else{
	$return_arr['message']='<div class="alert alert-danger" role="alert" style="padding-bottom: 20px; background-color: #b14040; color: black;" >Article indisponible dans le stock</div>';
}


}else{
	$return_arr['message']='<div class="alert alert-danger" role="alert" style="padding-bottom: 20px; background-color: #b14040; color: black;" >Article déjà existé dans le panier</div>';
}	
$count2=0;
	$req="SELECT * from cart where id_user=?";
	$stmt=$conn->prepare($req);
	$stmt->execute([$id_user]);
	foreach ($stmt as $row) {
		$count2++;
	}

	$return_arr['count']=$count2;

	echo json_encode($return_arr);


	
}




?>