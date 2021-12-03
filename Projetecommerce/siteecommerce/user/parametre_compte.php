<?php
session_start();


if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}


include '../includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $compte='active';?>
   <?php include 'includes/link.php';?>

  <title>Parametre Compte</title>

</head>
<body class="skin-light" aria-busy="true" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="" style="background-image: url(../img/bg.jpg);">

<!-- nav -->
 <?php include 'includes/nav.php';?>



<section id="NosUsers" class="services-mf route">
    <div class="container">
       <div class="box-shadow-full" style="margin-top: 160px; ">
      <div class="row">
        <div class="col-sm-12">

<?php 
$conn=$pdo->open();
$id_user=$_SESSION['id_user'];
$req="SELECT * FROM client where id=?";
$stmt=$conn->prepare($req);
$stmt->execute([$id_user]);
foreach ($stmt as $row) {
	$nom1=$row['Nom'];
	$email1=$row['Email'];

}

?>

        		<form action="" method="POST">
        			<div class="md-form md-outline">
        				<label data-error="wrong" data-success="right" for="Nom">Nom</label>
				      <input type="text" id="Nom" name="nom" class="form-control" value="<?php echo($nom1);?>">
				      
				    </div>

        			<div class="md-form md-outline">
        				 <label data-error="wrong" data-success="right" for="email">Email</label>
				      <input type="text" id="email" name="email" class="form-control" value="<?php echo($email1);?>">
				     
				    </div>

        			<div class="md-form md-outline">
        				<label data-error="wrong" data-success="right" for="oldPass">ancien mot de passe</label>
				      <input type="password" id="oldPass" name="oldPass" class="form-control">
				      
				    </div>

				    <div class="md-form md-outline">
				    	<label data-error="wrong" data-success="right" for="newPass">nouveau mot de passe</label>
				      <input type="password" id="newPass" name="newPass" class="form-control">
				      
				    </div>

				    <div class="md-form md-outline">
				    	<label data-error="wrong" data-success="right" for="newPassConfirm">Confirmez le mot de passe</label>
				      <input type="password" id="newPassConfirm" name="confpass" class="form-control">
				      
				    </div>

    				<button type="submit" class="btn btn-success mb-4" name="modifier" style="margin-top: 10px;">Modifier</button>
    				<div id="aff"></div>
  				</form>


<?php
if (isset($_POST['modifier'])) {


$don='';
if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['oldPass']) && !empty($_POST['newPass']) && !empty($_POST['confpass'])){
	if (preg_match('/^([a-zA-Z]{3,15})+$/',$_POST['nom'])){
 					            $nom=$_POST['nom'];
				      }else{
					           $nom=null;
		}
	if (preg_match('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/',$_POST['email'])){
 					$email=$_POST['email'];
				}else{
					$email=null;
				}
	if (preg_match('/.{8,}/',$_POST['oldPass'])){
 					$oldPass=$_POST['oldPass'];
				}else{
					$oldPass=null;
				}

	if (preg_match('/.{8,}/',$_POST['newPass'])){
 					$newPass=$_POST['newPass'];
				}else{
					$newPass=null;
				}

	if (preg_match('/.{8,}/',$_POST['confpass'])){
 					$confpass=$_POST['confpass'];
				}else{
					$confpass=null;
				}

	if($nom==null){
				$don.="Nom n\'est pas valider <br>"; 
			}
      if($email==null){
        $don.="email n\'est pas valider <br>"; 
      }
      if($oldPass==null){
        $don.="ancien password n\'est pas valider <br>"; 
      }
      if($newPass==null){
        $don.="nouveau password n\'est pas valider <br>"; 
      }
      if($confpass==null){
        $don.="confirme password n\'est pas valider <br>"; 
      }

      if($don!=''){
        $message= '<div class="alert alert-danger" role="alert" style="padding-bottom: 20px; background-color: #b14040; color: black;" >'.$don.'</div>';
      }

      if($nom !=null && $email!=null && $oldPass!=null && $newPass!=null && $confpass!=null){
      	if($newPass!=$confpass){
      		$message= '<div class="alert alert-danger" role="alert" style="padding-bottom: 20px; background-color: #b14040; color: black;" >Le nouveau mot de passe et le mot de passe de confirmation sont différents.</div>';
      	}else{
      		$req="SELECT * FROM client where id=?";
          $stmt=$conn->prepare($req);
          $stmt->execute([$id_user]);
          foreach ($stmt as $row) {
          	$passBD=$row['password'];
          	$emailBD=$row['Email'];
             
          }

          $ver=password_verify($oldPass, $passBD);
          if($ver==1){
          	$newPass=password_hash($newPass, PASSWORD_DEFAULT);
          $c=0;
          $req="SELECT * FROM client where email!=?";
          $stmt=$conn->prepare($req);
          $stmt->execute([$emailBD]);
          foreach ($stmt as $row) {
          	$c++; 
          }

          if($c==0){

          	$req="UPDATE client set nom=?,email=?,password=? where id=?";
          	$stmt=$conn->prepare($req);
          	$stmt->execute([$nom,$email,$newPass,$id_user]);
          	$message= '<div class="alert alert-success" role="alert" style="padding-bottom: 20px; background-color: #4dbd4d; color: black;" >le compte est Modifier.</div>';

          }else{
          	$message= '<div class="alert alert-danger" role="alert" style="padding-bottom: 20px; background-color: #b14040; color: black;" >Email déjà existé.</div>';
          }



          }else{
          	$message= '<div class="alert alert-danger" role="alert" style="padding-bottom: 20px; background-color: #b14040; color: black;" >Ancien mot de passe est incorrect.</div>';
          }



      	}


      }




}else{
	$message='<div class="alert alert-danger" role="alert" style="padding-bottom: 20px; background-color: #b14040; color: black;" >Remplir tous les champs</div>';
}
echo "<script>
		document.getElementById('aff').innerHTML='".$message."';
</script>";
}
?>
          
           </div>
        </div>
      </div>
      </div>
  </section>




<?php
include 'includes/footer.php';
?>

<!-- end -->
    

<!-- script -->

<?php include 'includes/script.php';?>

<!-- end script -->



</body>
</html>