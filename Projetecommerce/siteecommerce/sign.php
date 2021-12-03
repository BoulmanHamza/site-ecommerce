<?php
session_start();

if(!empty($_SESSION['id_user'])){
 header('location:user/index.php');
}
?>
<?php include 'includes/conn.php';?>
<!DOCTYPE html>
<html>
<head>

	 <?php include 'includes/link.php';?>
	<title>Se connecter</title>
	<style type="text/css">
		

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
	margin-bottom: 40px;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid  rgb(25,148,123);
	background-color:  rgb(25,148,123);
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

.inscr {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background:  rgb(25,148,123);
	background: -webkit-linear-gradient(to right, #040100, rgb(25,148,123));
	background: linear-gradient(to right, #040100,  rgb(25,148,123));
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
	</style>
</head>
<body style="background-image: url(img/bg.jpg);">



<div class="container" id="container">
	<div class="form-container sign-up-container">
		<div class="inscr">
			<h2>Créer un compte</h2>
			<span style="color: red; font-size: 15px;font-family: Arial;" id="err"></span>
			<input type="text" placeholder="Nom" name="nom" id="nom_ins" />
			<input type="text" placeholder="Email" name="email" id="email_ins" />
			<input type="password" placeholder="Password" name="password" id="password_ins" />
			<button name="inscription" id="inscription">S'inscrire</button>
			<a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour à la page d'accueil</a>
		</div>
	</div>
	<div class="form-container sign-in-container">
		<form class="inscr" method="post" action="">
			<h1>Se connecter</h1>
			<span style="color: red; font-size: 15px;font-family: Arial;" id="errr"></span>
			<input type="text" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password" />
			<button name="connecter">Se connecter</button>
			
			<a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour à la page d'accueil</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1 style="color: white;">Bienvenue!</h1>
				<p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
				<button class="ghost" id="signIn">se connecter</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>S'inscrire</h1>
				<p>Entrez vos informations personnelles et commencez votre voyage avec nous</p>
				<button class="ghost" id="signUp">s'inscrire</button>
			</div>
		</div>
	</div>
</div>


<?php

if(isset($_POST['connecter'])){
	$don='';
	$conn=$pdo->open();

	if(!empty($_POST['email']) and !empty($_POST['password']) ){

            	
				if (preg_match('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/',$_POST['email'])){
 					$email=$_POST['email'];
				}else{
					$email=null;
				}
				if (preg_match('/.{8,}/',$_POST['password'])){
 					$password=$_POST['password'];
				}else{
					$password=null;
				}

			
      if($email==null){
        $don.="email n'est pas valider <br>"; 
      }
      if($password==null){
        $don.="password n'est pas valider <br>"; 
      }

      if($don!=''){
        echo "<script>
	document.getElementById('err').innerHTML='".$don."';
	</script>";
      }

       $count=0;
      if($email!=null and $password!=null){
          $reqs="SELECT * FROM client where email=?";
          $stmt2=$conn->prepare($reqs);
          $stmt2->execute([$email]);
          foreach ($stmt2 as $row) {
          	$count=$count+1;
          	$p=password_verify($password, $row['password']);
             if ($p==1) {
             	$_SESSION['id_user']=$row['id'];
             	echo '<script>
  						window.location="user/index.php";
					</script>';
             }else{
             	echo "<script>
							document.getElementById('errr').innerHTML='email ou mot de pass et incorrect';
						</script>";
             }
          }

          if($count==0){
             	echo "<script>
					document.getElementById('errr').innerHTML='email ou mot de pass et incorrect';
					</script>";
          }else{

          }

         

      }
          

   				
       

        }else{
                	echo "<script>
	document.getElementById('errr').innerHTML='remplire tous les champe';
	</script>";
        }


}

?>

<script type="text/javascript">
	
	document.getElementById("inscription").addEventListener("click",function(){
var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
var nom_ins=document.getElementById("nom_ins").value;
var email_ins=document.getElementById("email_ins").value;
var pass_ins=document.getElementById("password_ins").value;

xmlhttp.open("get","ajax/inscription.php?nom_ins="+nom_ins+"&email_ins="+email_ins+"&pass_ins="+pass_ins,true);
xmlhttp.send();
xmlhttp.onreadystatechange=affich;

function affich(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("err").innerHTML=xmlhttp.responseText;
        
  }else{
    document.getElementById("err").innerHTML="probleme de l'affichage";
  }
}
})

</script>




<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

</body>
</html>