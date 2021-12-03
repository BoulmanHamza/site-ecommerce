<?php
session_start();
include '../includes/conn.php';
$conn=$pdo->open();
if(empty($_SESSION['admin'])){
  header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TNH3D</title>
  	<?php include 'include/style.php'; ?>
</head>

<?php include 'include/modifier_profile.php'; ?>






<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	
	 <?php include 'include/navbar.php'; ?>


 <?php include 'include/menu.php'; ?>





<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	
  	<section class="content-header">
      <h1>
       Liste Des Utilisateurs
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="#">USER</li>
		<li class="active">Liste des Utilisateurs</li>
      </ol>
    </section>



<?php
if(isset($_POST['sup'])){
  $co=0;
  $sup=$_POST['sup'];
  $req='DELETE from client WHERE id=? and id NOT IN (SELECT id_user FROM details where id_user=?) and id NOT IN (SELECT id_user FROM telecharger where id_user=?)';
  $stmt=$conn->prepare($req);
  $stmt->execute([$sup,$sup,$sup]);
  $req='SELECT * from client WHERE id=?';
  $stmt=$conn->prepare($req);
  $stmt->execute([$sup]);
  foreach ($stmt as $row) {
      $co++;
  }

  if($co==0){
    $err='<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>User est bien supprimer</h4>
    </div> ';
  }else{
     $err='<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>user n\'est pas supprimer car</h4>
    </div> ';
    $co=0;
  }


  
}
?>



<?php
          $tabusers='<table id="example1" class="table table-bordered ">
          <thead>
            <th>Email</th>
            <th>Nom & Prenom</th>
            <th>Date D\'engagement</th>
            <th>Outils</th>
          </thead>
          <tbody>';
         
          $req="select * from client";
          $stmt=$conn->query($req);

          foreach ($stmt as $row) {
	         
                    $tabusers=$tabusers.'
                    <tr>
                    <td>'.$row['Email'].'</td>
                    <td>'.$row['Nom'].'</td>
                    <td>'.$row['date_creation'].'</td>
                    <td>
                      <button class="btn btn-danger btn-sm delete btn-flat"  data-toggle="modal" data-target="#sup_user" onclick="aff(this)"  id_user="'.$row['id'].'"><i class="fa fa-trash"></i> Supp</button>
                    </td>
                  </tr>
                    
                    ';
            
          }
          $tabusers=$tabusers."</tbody></table>";
          ?>


<!-- modal sup user -->
             <div id="sup_user" class="modal fade">
              <form method="post">
                  <div class="modal-dialog">
                       <div class="modal-content">
                             <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                        <div class="modal-body">
                                <center>  <h3> Voulez-vous supprimer le Client  <span id="div_sup" style="color:red;"></span> </h3></center>
                        </div>
                        <div class="modal-footer">
                                 <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                                 <button type="submit" value="" id="supprimer" class="btn btn-danger delete btn-flat" name="sup"><i class="fa fa-trash"></i> Supprimer </button>
                        </div>

                        </div>
                 </div>
                 </form>
           </div>
<!-- End modal sup_user -->






    <section class="content">
             <?php echo $err?>
             
        <div class="row" >
          <div class="col-xs-12">
          <div class="box">
             <div class="box-body">
               <?php
          echo $tabusers;
          ?>
             </div>

          </div>
        </div>
          <!-- <form method="post"> -->
          
          <!-- </form> -->
        </div>
</section>
  </div>
</div>



<!-- ajax  user -->
<script type="text/javascript">
function aff(val){
              var str=val.getAttribute("id_user");
               var xmlhttp;
                          if(window.XMLHttpRequest){
                            xmlhttp=new XMLHttpRequest();
                          }else{
                            xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
                          }
                          xmlhttp.open("get","ajax/select_user.php?id_user="+str,true);
                          xmlhttp.send();
                          xmlhttp.onreadystatechange=affich;

                          function affich(){

                            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                              document.getElementById("div_sup").innerHTML=xmlhttp.responseText;
                             var sup= document.getElementById("supprimer");
                             sup.setAttribute('value',str); 
                            }else{
                              document.getElementById("div_sup").innerHTML="probleme de l'affichage";
                            }
                          }
}


</script>
<!-- end ajax  user -->


<?php include 'include/script.php'; ?>



</body>
</html>