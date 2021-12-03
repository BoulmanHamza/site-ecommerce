<?php

include '../../includes/conn.php';
$conn=$pdo->open();

$nom_facture="",$prenom_facture="",$ville_facture="",$pays_facture="",$adresse1_facture="",$adresse2_facture="",$email_facture="",$tele_facture="",$note_facture="";

		if(!empty($_GET['nom_facture']) && !empty($_GET['prenom_facture']) && !empty($_GET['ville_facture']) && !empty($_GET['pays_facture']) && !empty($_GET['adresse1_facture'])&& !empty($_GET['email_facture']) && !empty($_GET['tele_facture']) ){

			$nom_facture=$_GET['nom_facture'];
			$prenom_facture=$_GET['prenom_facture'];
			$ville_facture=$_GET['ville_facture'];
			$pays_facture=$_GET['pays_facture'];
			$adresse1_facture=$_GET['adresse1_facture'];
			$adresse1_facture=str_replace("'", "\'", $adresse1_facture);
			$adresse1_facture=str_replace('"', '\"', $adresse1_facture);
			$email_facture=$_GET['email_facture'];
			$tele_facture=$_GET['tele_facture'];

			if(!empty($_GET['adresse2_facture'])){
				$adresse2_facture=$_GET['adresse2_facture'];
				$adresse2_facture=str_replace("'", "\'", $adresse2_facture);
				$adresse2_facture=str_replace('"', '\"', $adresse2_facture);

			}

			if(!empty($_GET['note_facture'])){
				$note_facture=$_GET['note_facture'];
				$note_facture=str_replace("'", "\'", $note_facture);
				$note_facture=str_replace('"', '\"', $note_facture);
			}

			$req="INSERT INTO destinataire (Nom,Prenom,Pays,ville,Adresse1,Adresse2,Email,telephone,note) values (?,?,?,?,?,?,?,?,?)";
			$stmt=$conn->prepare($req);
    		$stmt->execute([$nom_facture,$prenom_facture,$pays_facture,$ville_facture,$adresse1_facture,$adresse2_facture,$email_facture,$tele_facture,$note_facture]);

    		$req="SELECT * FROM destinataire where Nom=? and Prenom=? and Pays=? and ville=? and Adresse1=? and Adresse2=? and Email=? and telephone=? and note=?";
    		$stmt=$conn->prepare($req);
    		$stmt->execute([$nom_facture,$prenom_facture,$pays_facture,$ville_facture,$adresse1_facture,$adresse2_facture,$email_facture,$tele_facture,$note_facture]);
            $id_destinataire="";
    		foreach ($stmt as $row) {
    			$id_destinataire=$row['id_destinataire'];
    		}


    		$req="SELECT * FROM cart where id_user=?";
    		$stmt=$conn->prepare($req);
    		$stmt->execute([$_SESSION['id_user']]);
    		foreach ($stmt as $row) {
    			$id_produit=$row['id_produit'];
    			$quantity=$row['quantity'];
    			$req2="INSERT into details (id_user,id_produit,id_destinataire,quantity,status,date_creation) values (?,?,?,?,?,?)";
    			$stmt2=$conn->prepare($req2);
    			$stmt2->execute([$_SESSION['id_user'],$row['id_produit'],$id_destinataire,$row['quantity'],0,date('Y-m-d');])
    		}

    		$req="DELETE FROM cart where id_user=?";
    		$stmt=$conn->prepare($req);
    		$stmt->execute([$_SESSION['id_user']]);
		}

		echo "la demande et bien effectuer";





?>