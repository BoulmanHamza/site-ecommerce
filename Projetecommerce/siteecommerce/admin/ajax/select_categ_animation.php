<?php
include '../../includes/conn.php';
$conn=$pdo->open();

  

  if(!empty($_GET['id_categ'])){
   $req="SELECT * from categorie_animation where id=?";
   $stmt=$conn->prepare($req);
   $stmt->execute([$_GET['id_categ']]);
   foreach ($stmt as $row) {
                $c=$row['categorie_animation'];  
          }
         echo "$c"; 
  }

  ?>