<?php
include '../../includes/conn.php';
$conn=$pdo->open();
  $arr=array();
  if(!empty($_GET['id_produit'])){
   $req="select * from produit where id_produit=?";
   $stmt=$conn->prepare($req);
   $stmt->execute([$_GET['id_produit']]);
   foreach ($stmt as $row) {
    $arr['Nom']=$row['Nom'];
    $arr['Prix']=$row['Prix'];
    $arr['categorie_produit']=$row['categorie_produit'];
    $arr['TVA']=$row['TVA'];
    $arr['description1']=$row['description'];
    $arr['description2']=$row['description2'];
    $arr['information']=$row['information'];
    $arr['status']=$row['status'];           
          }
         echo json_encode($arr); 
  }

  ?>

  