<?php
include '../../includes/conn.php';
$conn=$pdo->open();

  

  if(!empty($_GET['id_categ'])){
   $req="SELECT * from categorie_produit where id_categorie_produit=?";
   $stmt=$conn->prepare($req);
   $stmt->execute([$_GET['id_categ']]);
   foreach ($stmt as $row) {
                $c=$row['categorie_produit'];  
          }
         echo "$c"; 
  }

  ?>