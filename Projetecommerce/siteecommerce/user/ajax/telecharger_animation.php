<?php
session_start();
include '../../includes/conn.php';
$conn=$pdo->open();

$req="INSERT INTO telecharger(id_user,id_animation,date_payement) values(?,?,?)";
$stmt=$conn->prepare($req);
$stmt->execute([$_SESSION['id_user'],$_SESSION['id_animation'],date('Y-m-d')]);

echo "l'animation est bien acheter voir votre telechargement";
?>