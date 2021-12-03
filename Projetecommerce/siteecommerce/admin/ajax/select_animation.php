<?php
include '../../includes/conn.php';
$conn=$pdo->open();
  $arr=array();
  if(!empty($_GET['id_animation'])){
   $req="select * from animation where id_animation=?";
   $stmt=$conn->prepare($req);
   $stmt->execute([$_GET['id_animation']]);
   foreach ($stmt as $row) {
    $arr['Nom']=$row['nom'];
    $arr['Prix']=$row['prix'];
    $arr['categorie_animation']=$row['categorie_animation'];
    $arr['description1']=$row['description'];
    $arr['description2']=$row['description2'];
    $arr['information']=$row['information'];         
          }
         echo json_encode($arr); 
  }

  ?>

  