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


<!-- /////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////// -->
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Ajouter Catégorie </b></h4>
            </div>
             <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                  <label for="nomcategorie" class="col-sm-4 control-label">Nom catégorie </label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomcategorie" name="nomcategorie" required>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Enregistrer</button>
            </div>
            </form> 
        </div>
    </div>
</div>

<?php

if(isset($_POST['add'])){

  $i=0;
  if(!empty($_POST['nomcategorie']))
            {

              $nomcategorie=str_replace("'", "\'", $_POST['nomcategorie']);
              $nomcategorie=str_replace('"', '\"', $nomcategorie);
              $nbr=0;
              $reqcateg="select * from categorie_animation where categorie_animation=?";
              $stmtcateg=$conn->prepare($reqcateg);
              $stmtcateg->execute([$nomcategorie]);
                    foreach ($stmtcateg as $row) {
                           $nbr++; 
                    }

              if($nbr==0){
                $req="insert into categorie_animation(categorie_animation) values(?)";
                $stmt=$conn->prepare($req);
                $stmt->execute([$nomcategorie]); 
                $err='<div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-warning"></i>insertion est bien effectuer</h4>
                      </div> '; 
              }else{
                $err='<div class="alert alert-danger alert-dismissible">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-warning"></i>cette categorie deja existe</h4>
            </div> ';

              }
                   


            }}




?>
<!-- End Add -->
<!-- /////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////// -->












<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	
  	<section class="content-header">
      <h1>
       Liste des classes de animation
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="">Animation</li>
		<li class="active">Catégorie des Animations</li>
      </ol>
    </section>




<?php
$c=0;
if(isset($_POST['sup'])){
  $sql2="DELETE from categorie_animation where id=? and categorie_animation NOT in (SELECT categorie_animation from animation)";
  $stmt2=$conn->prepare($sql2);
  $stmt2->execute([$_POST['sup']]);
   $sql3="select * from categorie_animation where id=?";
  $stmt3=$conn->prepare($sql3);
  $stmt3->execute([$_POST['sup']]);
  foreach ($stmt3 as $row) {
    $c++;
  }
  if($c==0){
      $err='<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>categorie est bien supprimer</h4>
    </div> ';
  }else{
    $err='<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>categorie n\'est pas supprimer</h4>
    </div> ';
    $c=0;
  }
}

?>














    <?php


$tabcateg='<table id="example1" class="table table-bordered ">
          <thead>
            <th>Nom Categorie</th>
            <th>Outils</th>
          </thead>
          <tbody>';
          
          $req="select * from categorie_animation";
          $stmt=$conn->query($req);

          foreach ($stmt as $row) {
                   $tabcateg=$tabcateg.'
                    <tr>
                    <td>'.$row['categorie_animation'].'</td>
                     <td> <button class="btn btn-danger btn-sm delete btn-flat" onclick="aff(this)" data-toggle="modal" data-target="#sup_categ" id_categ="'.$row['id'].'"><i class="fa fa-trash"></i> Supp</button>
                    </td>
                  </tr>';

                

	          
                   
           
          }
          $tabcateg=$tabcateg."</tbody></table>";



?>













<!-- modal sup categorie -->
             <div id="sup_categ" class="modal fade">
              <form method="post">
                  <div class="modal-dialog">
                       <div class="modal-content">
                             <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                        <div class="modal-body">
                                <center>  <h3> Voulez-vous supprimer le categorie <span id="div_sup" style="color:red;"></span> </h3></center>
                        </div>
                        <div class="modal-footer">
                                 <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                                 <button type="submit" value="" id="supprimer" class="btn btn-danger delete btn-flat" name="sup"><i class="fa fa-trash"></i> Supprimer </button>
                        </div>

                        </div>
                 </div>
                 </form>
           </div>
<!-- End modal sup categorie -->





<!-- Modifier categorie-->

<!-- ////////////////////////////////////////////////////// -->
<!-- .//////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////// -->
<!-- End Modifier categorie -->
















    <section class="content">
    <?php echo $err?>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
      <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
       </div>
            
         <div class="box-body">
        <?php
          echo $tabcateg;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
</div>





<!-- ajax  categorie -->
<script type="text/javascript">
function aff(val){
              var str=val.getAttribute("id_categ");
               var xmlhttp;
                          if(window.XMLHttpRequest){
                            xmlhttp=new XMLHttpRequest();
                          }else{
                            xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
                          }
                          xmlhttp.open("get","ajax/select_categ_animation.php?id_categ="+str,true);
                          xmlhttp.send();
                          xmlhttp.onreadystatechange=affich;

                          function affich(){

                            if(xmlhttp.readyState==4 && xmlhttp.status==200){
 
                              document.getElementById("div_sup").innerHTML=xmlhttp.responseText;
                              var sup= document.getElementById("supprimer");
                              sup.setAttribute('value',str); 
                              
                          
                              
                            }else{
                              document.getElementById("des_head").innerHTML="probleme de l'affichage";
                              document.getElementById("div_sup").innerHTML="probleme de l'affichage";
                            }
                          }
}


</script>
<!-- end ajax  categorie -->






<?php include 'include/script.php'; ?>


</body>
</html>