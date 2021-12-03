<?php
include '../../includes/conn.php';
$conn=$pdo->open();
  if(!empty($_GET['id_user'])){
   $req="select * from client where id=?";
   $stmt=$conn->prepare($req);
   $stmt->execute([$_GET['id_user']]);
   foreach ($stmt as $row) {
                $user=$row['Nom'];  
          }

         echo "$user"; 
  }

  ?>