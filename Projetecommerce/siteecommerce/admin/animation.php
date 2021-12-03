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
              <h4 class="modal-title"><b>Ajouter Animation</b></h4>
            </div>
             <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
                

               <div class="form-group">
                  <label for="addnomanimation" class="col-sm-2 control-label">Nom Animation </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="addnomanimation" name="addnomanimation" required>
                  </div>
                <label for="addprixanimation" class="col-sm-2 control-label">Prix Animation </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="addprixanimation" name="addprixanimation" required>
                  </div>
                </div>        
                <div class="form-group">
                 
                   <label for="addcategorieanimation" class="col-sm-2 control-label">categorie</label>
                  <div class="col-sm-4">
                  <select  name="addcategorieanimation" id="addcategorieanimation" class="form-control" required>
                      <?php
                           
                            $req="select * from categorie_animation";
                            $stmt=$conn->query($req);
                            foreach ($stmt as $row) {
                              echo '<option>'.$row['categorie_animation'].'</option>';
                            }
                      ?>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                   <label for="Fausse" class="col-sm-2 control-label">Vidéo Fausse</label>
                  <div class="col-sm-4">
                    <input type="file" id="Fausse" name="Fausse">
                  </div>
                  <label for="originale" class="col-sm-2 control-label">Vidéo originale</label>
                  <div class="col-sm-4">
                    <input type="file" id="originale" name="originale">
                  </div>
                </div>

              


                <p><b>Information </b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="addinformationanimation" rows="10" cols="140" required></textarea>
                  </div>
                  
                </div>
               
              <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor5" name="adddescription1animation" rows="10" cols="140" required></textarea>
                  </div>
                  
                </div>
                
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor6" name="adddescription2animation" rows="10" cols="140" required></textarea>
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
  if(!empty($_POST['addnomanimation']) && !empty($_POST['addprixanimation']) 
             && !empty($_POST['addcategorieanimation'])
            && !empty($_POST['adddescription1animation']) && !empty($_POST['adddescription2animation']) && !empty($_POST['addinformationanimation']) && !empty($_FILES['Fausse']['name']) && !empty($_FILES['originale']['name']) )
            {



              
                $noma=$_POST['addnomanimation'];
                $noma=str_replace('"', '\"', $noma);
                $noma=str_replace("'", "\'", $noma);
                $prixa=$_POST['addprixanimation'];
               
                $cata=$_POST['addcategorieanimation'];
              
                $desc1a=$_POST['adddescription1animation'];
                $desc1a=str_replace('"', '\"', $desc1a);
                $desc1a=str_replace("'", "\'", $desc1a);
                $desc2a=$_POST['adddescription2animation'];
                $desc2a=str_replace('"', '\"', $desc2a);
                $desc2a=str_replace("'", "\'", $desc2a);
                $infoa=$_POST['addinformationanimation'];
                $infoa=str_replace('"', '\"', $infoa);
                $infoa=str_replace("'", "\'", $infoa);
                $filedes='..\\img\\animation_3d';

              

                $video1Fauss = $_FILES['Fausse'];
                $video1Faussname=$_FILES['Fausse']['name'];
                $video1FaussTmpName=$_FILES['Fausse']['tmp_name'];
                $video1FaussExt=explode('.',$video1Faussname);
                $video1FaussActualExt=strtolower(end($video1FaussExt));
                $video1FaussNameNew=uniqid('',true).".".$video1FaussActualExt;
                $video1FaussDes=$filedes.'\\'.$video1FaussNameNew;
                move_uploaded_file($video1FaussTmpName,$video1FaussDes);


               
                  $video2originale = $_FILES['originale'];
                  $video2originalename=$_FILES['originale']['name'];
                  $video2originaleTmpName=$_FILES['originale']['tmp_name'];
                  $video2originaleExt=explode('.',$video2originalename);
                  $video2originaleActualExt=strtolower(end($video2originaleExt));
                  $video2originaleNameNew=uniqid('',true).".".$video2originaleActualExt;
                  $video2originaleDes=$filedes.'\\'.$video2originaleNameNew;
                  move_uploaded_file($video2originaleTmpName,$video2originaleDes);
                
                




                      
                      $req="insert into animation(nom,categorie_animation,prix
                      ,description,description2,information,video1,video2) values(?,?,?,?,?,?,?,?)";
                      $stmt=$conn->prepare($req);
                      $stmt->execute([$noma,$cata,$prixa,$desc1a,$desc2a,$infoa,$video1FaussNameNew,$video2originaleNameNew]);        
                    $err='<div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-warning"></i>insertion est bien effectuer</h4>
                      </div> '; 


              

              

            }else{
              $err='<div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-warning"></i>insertion echouer</h4>
                      </div> ';
            }
          }
?>

<!-- End Add -->
<!-- ///////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////// -->















<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	
  	<section class="content-header">
      <h1>
       Listes Des Animations 
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="">Animation</li>
		<li class="active">liste des Animations</li>
      </ol>
    </section>



















<?php
$c=0;
if(isset($_POST['sup'])){
  $sql2="DELETE from animation where id_animation=? and id_animation Not in (select id_animation from telecharger)";
  $stmt2=$conn->prepare($sql2);
  $stmt2->execute([$_POST['sup']]);
   $sql3="select * from animation where id_animation=?";
  $stmt3=$conn->prepare($sql3);
  $stmt3->execute([$_POST['sup']]);
  foreach ($stmt3 as $row) {
    $c++;
  }
  if($c==0){
      $err='<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>animation est bien supprimer</h4>
    </div> ';
  }else{
    $err='<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>animation n\'est pas supprimer</h4>
    </div> ';
    $c=0;
  }
}



if (isset($_POST['mod_p'])) {
 $id_a=$_POST['mod_p'];
 $nom_a=$_POST['nomanimation'];
 $prix_a=$_POST['prixanimation'];
 $categorie_a=$_POST['categorieanimation'];
 $information_a=$_POST['informationanimation'];
 $description1_a=$_POST['description1'];
 $description2_a=$_POST['description2'];
  
         
                $req='update animation SET nom="'.$nom_a.'",prix="'.$prix_a.'",information="'.$information_a.'",description="'.$description1_a.'",description2="'.$description2_a.'",categorie_animation="'.$categorie_a.'" WHERE id_animation="'.$_POST['mod_p'].'"';
                 $stmt=$conn->query($req);    
                  
                    $err='<div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-warning"></i>animation est bien modifier </h4>
                      </div> '; 

            

}




?>



    <?php


$tabanimation='<table id="example1" class="table table-bordered ">
          <thead>
            <th>Nom Animation</th>
            <th>Animation</th>
            <th>Description</th>
            <th>Categorie</th>
             <th>Prix</th>
            <th>Outils</th>
          </thead>
          <tbody>';
          
          $req="select * from animation";
          $stmt=$conn->query($req);

          foreach ($stmt as $row) {

              $urlanimation='../img/animation_3d';
              
	             
                    $tabanimation=$tabanimation."
                    <tr>
                    <td>".$row['nom']."</td>
                    <td>

                    <video playsinline='playsinline' autoplay='autoplay' loop='loop' width='60px' height='60px'' controls>
       					 <source src='".$urlanimation."/".$row['video2']."' type='video/mp4'>
  					</video>



                    </td>
                    <td><button class='btn btn-info btn-sm edit btn-flat' data-toggle='modal' onclick='aff(this)' id_animation='".$row['id_animation']."' data-target='#description'  ><i class='fa fa-search'></i> view</button> </td>
                    <td>".$row['categorie_animation']."</td>
                    <td>".$row['prix']." €</td>
                    <td>  
                      <button class='btn btn-success btn-sm edit btn-flat' onclick='aff(this)' data-toggle='modal' data-target='#mod_plante' id_animation='".$row['id_animation']."'><i class='fa fa-edit'></i> Modifier</button>      
                      <button class='btn btn-danger btn-sm delete btn-flat' data-toggle='modal' onclick='aff(this)' data-target='#sup_plante' id_animation='".$row['id_animation']."'><i class='fa fa-trash'></i> Supp</button>
                      </td>
                  </tr>";
          }
          $tabanimation=$tabanimation."</tbody></table>";

?>





<!-- Description -->
<div class="modal fade" id="description">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name" id="des_head"></span></b></h4>
            </div>
            <div class="modal-body">
              Description :
              <br><br> 
                <p id="des_body"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end Description -->





<!-- modal sup animation -->
             <div id="sup_plante" class="modal fade">
              <form method="post">
                  <div class="modal-dialog">
                       <div class="modal-content">
                             <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                        <div class="modal-body">
                                <center>  <h3> Voulez-vous supprimer l'animation  <span id="div_sup" style="color:red;"></span> </h3></center>
                        </div>
                        <div class="modal-footer">
                                 <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                                 <button type="submit" value="" id="supprimer" class="btn btn-danger delete btn-flat" name="sup"><i class="fa fa-trash"></i> Supprimer </button>
                        </div>

                        </div>
                 </div>
                 </form>
           </div>
<!-- End modal sup_animation-->



<!-- //////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////// -->
<!-- Modifier Plante -->
<div class="modal fade" id="mod_plante">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="tet"><b>Modifier Animation</b></h4>
            </div>
             <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                  <label for="nomanimation" class="col-sm-2 control-label">Nom Animation </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nomanimation" name="nomanimation" required>
                  </div>
                <label for="prixanimation" class="col-sm-2 control-label">Prix Animation </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="prixanimation" name="prixanimation" required>
                  </div>
                </div>        
                <div class="form-group">
                   <label for="categorieanimation" class="col-sm-2 control-label">categorie</label>
                  <div class="col-sm-4">
                  <select  name="categorieanimation" id="categorieanimation" class="form-control" required>
                      <?php
                           
                            $req="select * from categorie_animation";
                            $stmt=$conn->query($req);
                            foreach ($stmt as $row) {
                              echo '<option>'.$row['categorie_animation'].'</option>';
                            }
                      ?>
                  </select>
                  </div>
                </div>

                <p><b>Information</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor3" name="informationanimation" rows="10" cols="140" required></textarea>
                  </div>
                  
                </div>

                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description1" rows="10" cols="140" required></textarea>
                  </div>
                  
                </div>
                <p><b>Description2</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor4" name="description2" rows="10" cols="140" required></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
              <button type="submit" class="btn btn-primary btn-flat" value="" id="modifierp" name="mod_p"><i class="fa fa-edit"></i> Modifier</button>
            </div>
            </form> 
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////// -->
<!-- .//////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////// -->
<!-- End Modifier Plant -->






    <section class="content">
    <?php echo $err?>
      <div class="row" id="tabp">
        <div class="col-xs-12">
          <div class="box">
      <div class="box-header with-border">
              <button data-toggle="modal" data-target="#addnew" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</button>
      </div> 
       <div class="box-body">
          <?php
          echo $tabanimation;
          ?>  
        </div>
        </div>
      </div>
      </div>
    </section>
  </div>
</div>




<!-- ajax  plante -->
<script type="text/javascript">
function aff(val){
              var str=val.getAttribute("id_animation");
               var xmlhttp;
                          if(window.XMLHttpRequest){
                            xmlhttp=new XMLHttpRequest();
                          }else{
                            xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
                          }
                          xmlhttp.open("get","ajax/select_animation.php?id_animation="+str,true);
                          xmlhttp.send();
                          xmlhttp.onreadystatechange=affich;

                          function affich(){

                            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                              var arr=JSON.parse(xmlhttp.responseText);
                              var noma=arr.Nom;
                              var prix=arr.Prix;
                              var categorie_animation=arr.categorie_animation;
                             
                              var description1=arr.description1;
                              var description2=arr.description2;
                              var information=arr.information;
                         
                              //description
                              document.getElementById("des_body").innerHTML=description1;
                              document.getElementById("des_head").innerHTML=noma;
                              //suppression
                              document.getElementById("div_sup").innerHTML=noma;
                              var sup= document.getElementById("supprimer");
                              sup.setAttribute('value',str); 
                              //modification
                              document.getElementById("nomanimation").value=noma;
                              document.getElementById("prixanimation").value=prix;
                             
                              document.getElementById("categorieanimation").value=categorie_animation;
                              
                              CKEDITOR.instances["editor2"].setData(description1);
                              CKEDITOR.instances["editor3"].setData(information);
                              CKEDITOR.instances["editor4"].setData(description2);
                              var mod= document.getElementById("modifierp");
                              mod.setAttribute('value',str); 
                           
                              
                            }else{
                              document.getElementById("des_head").innerHTML="probleme de l'affichage";
                            }
                          }
}


</script>
<!-- end ajax  plante -->




<?php include 'include/script.php'; ?>



</body>
</html>