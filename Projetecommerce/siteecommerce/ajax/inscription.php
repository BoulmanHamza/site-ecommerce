<?php
session_start();
?>
<?php include '../includes/conn.php';?>
<?php
$don='';

$conn=$pdo->open();

	if(!empty($_GET['nom_ins']) and !empty($_GET['email_ins']) and !empty($_GET['pass_ins'])){

            	if (preg_match('/^([a-zA-Z]{3,15})+$/',$_GET['nom_ins'])){
 					            $nom=$_GET['nom_ins'];
				      }else{
					           $nom=null;
				      }
				if (preg_match('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/',$_GET['email_ins'])){
 					$email=$_GET['email_ins'];
				}else{
					$email=null;
				}
				if (preg_match('/.{8,}/',$_GET['pass_ins'])){
 					$password=password_hash($_GET['pass_ins'], PASSWORD_DEFAULT);
				}else{
					$password=null;
				}

			if($nom==null){
				$don.="Nom n'est pas valider <br>"; 
			}
      if($email==null){
        $don.="email n'est pas valider <br>"; 
      }
      if($password==null){
        $don.="password n'est pas valider <br>"; 
      }

      if($don!=''){
        echo "$don";
      }


      if($nom!=null and $email!=null and $password!=null){
        $count=0;
          $today=date('Y-m-d');
          $reqs="SELECT * FROM client where email=?";
          $stmt2=$conn->prepare($reqs);
          $stmt2->execute([$email]);
          foreach ($stmt2 as $row) {
             $count++;
          }

          if($count==0){
              $req="insert into client(Nom,Email,password,date_creation) values(?,?,?,?)";
              $stmt=$conn->prepare($req);
              $stmt->execute([$nom,$email,$password,$today]);
      
                echo '<span style="color:green; font-size:15px; font-weight: bold;">Ce compte a été créé avec succès</span>';    
          }else{
            echo 'ce compte existe déjà';    
          }

      }
          

   				
       

        }else{
                	echo "remplire tous les champ";
        }




?>
