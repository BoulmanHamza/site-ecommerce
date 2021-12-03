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
              <h4 class="modal-title"><b>Ajouter Produit</b></h4>
            </div>
             <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
                

               <div class="form-group">
                  <label for="addnomproduit" class="col-sm-2 control-label">Nom Produit </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="addnomproduit" name="addnomproduit" required>
                  </div>
                <label for="addprixproduit" class="col-sm-2 control-label">Prix Produit </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="addprixproduit" name="addprixproduit" required>
                  </div>
                </div>        
                <div class="form-group">
                  <label for="addtvaproduit" class="col-sm-2 control-label">TVA Produit </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="addtvaproduit" name="addtvaproduit" required>
                  </div>
                   <label for="addcategorieproduit" class="col-sm-2 control-label">categorie</label>
                  <div class="col-sm-4">
                  <select  name="addcategorieproduit" id="addcategorieproduit" class="form-control" required>
                      <?php
                           
                            $req="select * from categorie_produit";
                            $stmt=$conn->query($req);
                            foreach ($stmt as $row) {
                              echo '<option>'.$row['categorie_produit'].'</option>';
                            }
                      ?>
                  </select>
                  </div>
                </div>

                 <div class="form-group">
                <label for="addstatusproduit" class="col-sm-2 control-label">status</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="addstatusproduit" name="addstatusproduit" required>
                      <option>Indisponible</option>
                      <option>Disponible</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                   <label for="addphoto1" class="col-sm-2 control-label">Photo1</label>
                  <div class="col-sm-4">
                    <input type="file" id="addphoto1" name="addphoto1">
                  </div>
                  <label for="addphoto" class="col-sm-2 control-label">Photo2</label>
                  <div class="col-sm-4">
                    <input type="file" id="addphoto2" name="addphoto2">
                  </div>
                </div>

                 <div class="form-group">
                   <label for="addphoto3" class="col-sm-2 control-label">Photo3</label>
                  <div class="col-sm-4">
                    <input type="file" id="addphoto3" name="addphoto3">
                  </div>
                  <label for="addphoto4" class="col-sm-2 control-label">Photo4</label>
                  <div class="col-sm-4">
                    <input type="file" id="addphoto4" name="addphoto4">
                  </div>
                </div>


                <p><b>Information </b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="addinformationproduit" rows="10" cols="140" required></textarea>
                  </div>
                  
                </div>
               
              <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor5" name="adddescription1produit" rows="10" cols="140" required></textarea>
                  </div>
                  
                </div>
                
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor6" name="adddescription2produit" rows="10" cols="140" required></textarea>
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
  if(!empty($_POST['addnomproduit']) && !empty($_POST['addprixproduit']) 
            && !empty($_POST['addtvaproduit']) && !empty($_POST['addcategorieproduit']) && !empty($_POST['addstatusproduit'])
            && !empty($_POST['adddescription1produit']) && !empty($_POST['adddescription2produit']) && !empty($_POST['addinformationproduit']) && !empty($_FILES['addphoto1']['name'])  )
            {



              
                $nomp=$_POST['addnomproduit'];
                $nomp=str_replace('"', '\"', $nomp);
                $nomp=str_replace("'", "\'", $nomp);
                $prixp=$_POST['addprixproduit'];
                $tvap=$_POST['addtvaproduit'];
                $catp=$_POST['addcategorieproduit'];
                $statusp=$_POST['addstatusproduit'];
                $desc1p=$_POST['adddescription1produit'];
                $desc1p=str_replace('"', '\"', $desc1p);
                $desc1p=str_replace("'", "\'", $desc1p);
                $desc2p=$_POST['adddescription2produit'];
                $desc2p=str_replace('"', '\"', $desc2p);
                $desc2p=str_replace("'", "\'", $desc2p);
                $infop=$_POST['addinformationproduit'];
                $infop=str_replace('"', '\"', $infop);
                $infop=str_replace("'", "\'", $infop);
                $filedes='';
                if($statusp=='Indisponible'){
                  $statusp=0;
                }else{
                  $statusp=1;
                }

                if($catp=='Accessoire Holographique'){
                  $filedes='..\\img\\products\\pied_et_fix';

                }elseif ($catp=='Hologramme Particulier'){
                  $filedes='..\\img\\products\\holo_par';
                  
                }elseif ($catp=='Hologramme Professionnel'){
                  $filedes='..\\img\\products\\holo_pro';
                }else{
                  $filedes='..\\img\\products\\coup_de_coeur';
                }
                 $photo2NameNew='';
                 $photo3NameNew='';
                 $photo4NameNew='';
                $photo1 = $_FILES['addphoto1'];
                $photo1name=$_FILES['addphoto1']['name'];
                $photo1TmpName=$_FILES['addphoto1']['tmp_name'];
                $photo1Ext=explode('.',$photo1name);
                $photo1ActualExt=strtolower(end($photo1Ext));
                $photo1NameNew=uniqid('',true).".".$photo1ActualExt;
                $photo1Des=$filedes.'\\'.$photo1NameNew;
                move_uploaded_file($photo1TmpName,$photo1Des);


                if(!empty($_FILES['addphoto2']['name'])){
                  $photo2 = $_FILES['addphoto2'];
                  $photo2name=$_FILES['addphoto2']['name'];
                  $photo2TmpName=$_FILES['addphoto2']['tmp_name'];
                  $photo2Ext=explode('.',$photo2name);
                  $photo2ActualExt=strtolower(end($photo2Ext));
                  $photo2NameNew=uniqid('',true).".".$photo2ActualExt;
                  $photo2Des=$filedes.'\\'.$photo2NameNew;
                  move_uploaded_file($photo2TmpName,$photo2Des);
                }
                if(!empty($_FILES['addphoto3']['name'])){
                  $photo3 = $_FILES['addphoto3'];
                  $photo3name=$_FILES['addphoto3']['name'];
                  $photo3TmpName=$_FILES['addphoto3']['tmp_name'];
                  $photo3Ext=explode('.',$photo3name);
                  $photo3ActualExt=strtolower(end($photo3Ext));
                  $photo3NameNew=uniqid('',true).".".$photo3ActualExt;
                  $photo3Des=$filedes.'\\'.$photo3NameNew;
                  move_uploaded_file($photo3TmpName,$photo3Des);
                }
                if(!empty($_FILES['addphoto4']['name'])){
                  $photo4 = $_FILES['addphoto4'];
                  $photo4name=$_FILES['addphoto4']['name'];
                  $photo4TmpName=$_FILES['addphoto4']['tmp_name'];
                  $photo4Ext=explode('.',$photo4name);
                  $photo4ActualExt=strtolower(end($photo4Ext));
                  $photo4NameNew=uniqid('',true).".".$photo4ActualExt;
                  $photo4Des=$filedes.'\\'.$photo4NameNew;
                  move_uploaded_file($photo4TmpName,$photo4Des);
                }




                       $today=date('Y-m-d');
                      $req="insert into produit(Nom,categorie_produit,Prix,TVA
                      ,description,description2,information,status,counter,photo1,photo2,photo3,photo4,date_creation) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                      $stmt=$conn->prepare($req);
                      $stmt->execute([$nomp,$catp,$prixp,$tvap,$desc1p,$desc2p,$infop,$statusp,0,$photo1NameNew,$photo2NameNew,$photo3NameNew,$photo4NameNew,$today]);        
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
       Listes Des Produits 
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Acceuil</a></li>
        <li class="">Produit</li>
		<li class="active">liste des Produits</li>
      </ol>
    </section>



















<?php
$c=0;
if(isset($_POST['sup'])){
  $sql2="DELETE from produit where id_produit=? and id_produit Not in (select id_produit from cart) and id_produit not in (select id_produit from details)";
  $stmt2=$conn->prepare($sql2);
  $stmt2->execute([$_POST['sup']]);
   $sql3="select * from produit where id_produit=?";
  $stmt3=$conn->prepare($sql3);
  $stmt3->execute([$_POST['sup']]);
  foreach ($stmt3 as $row) {
    $c++;
  }
  if($c==0){
      $err='<div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>produit est bien supprimer</h4>
    </div> ';
  }else{
    $err='<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-warning"></i>produit n\'est pas supprimer</h4>
    </div> ';
    $c=0;
  }
}



if (isset($_POST['mod_p'])) {
 $id_p=$_POST['mod_p'];
 $nom_p=$_POST['nomproduit'];
 $prix_p=$_POST['prixproduit'];
 $tva_p=$_POST['tvaproduit'];
 $categorie_p=$_POST['categorieproduit'];
 $status_p=$_POST['statusproduit'];
 $information_p=$_POST['informationproduit'];
 $description1_p=$_POST['description1'];
 $description2_p=$_POST['description2'];
 

if($status_p=='Indisponible'){
  $status_p=0;
}else{
  $status_p=1;
} 
             
             

                $req='update produit SET Nom="'.$nom_p.'",Prix="'.$prix_p.'",TVA="'.$tva_p.'",status="'.$status_p.'", counter="0",information="'.$information_p.'",categorie_produit="'.$categorie_p.'",description="'.$description1_p.'",description2="'.$description2_p.'" WHERE id_produit="'.$_POST['mod_p'].'"';
                 $stmt=$conn->query($req);    
                  
                    $err='<div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-warning"></i>modification du produit est bien effectuer </h4>
                      </div> '; 

            

}




?>



    <?php


$tabproduit='<table id="example1" class="table table-bordered ">
          <thead>
            <th>Nom Produit</th>
            <th>Photo Produit</th>
            <th>Description</th>
            <th>categorie</th>
             <th>Prix</th>
             <th>TVA</th>
            <th>status</th>
            <th>Outils</th>
          </thead>
          <tbody>';
          
          $req="select * from produit";
          $stmt=$conn->query($req);

          foreach ($stmt as $row) {

              $urlphoto='';
              $status='';
              if($row['status']==0){
                $status='<span class="label label-danger">Indisponible</span>';
              }else{
                $status='<span class="label label-success">Disponible</span>';
              }
              if($row['categorie_produit']=='Hologramme Professionnel'){
                $urlphoto='../img/products/holo_pro';
              }elseif ($row['categorie_produit']=='Hologramme Particulier') {
                $urlphoto='../img/products/holo_par';
              }elseif ($row['categorie_produit']=='Accessoire Holographique') {
                $urlphoto='../img/products/pied_et_fix';
              }else{
                $urlphoto='../img/products/coup_de_coeur';
              }

	          
                    $tabproduit=$tabproduit."
                    <tr>
                    <td>".$row['Nom']."</td>
                    <td><img src='".$urlphoto."/".$row['photo1']."' height='30px' width='30px'/></td>
                    <td><button class='btn btn-info btn-sm edit btn-flat' data-toggle='modal' onclick='aff(this)' id_produit='".$row['id_produit']."' data-target='#description'  ><i class='fa fa-search'></i> view</button> </td>
                    <td>".$row['categorie_produit']."</td>
                    <td>".$row['Prix']." €</td>
                    <td>".$row['TVA']." €</td>
                    <td>".$status."</td>
                    <td>  
                      <button class='btn btn-success btn-sm edit btn-flat' onclick='aff(this)' data-toggle='modal' data-target='#mod_plante' id_produit='".$row['id_produit']."'><i class='fa fa-edit'></i> Modifier</button>      
                      <button class='btn btn-danger btn-sm delete btn-flat' data-toggle='modal' onclick='aff(this)' data-target='#sup_plante' id_produit='".$row['id_produit']."'><i class='fa fa-trash'></i> Supp</button>
                      </td>
                  </tr>";
          }
          $tabproduit=$tabproduit."</tbody></table>";

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





<!-- modal sup plante -->
             <div id="sup_plante" class="modal fade">
              <form method="post">
                  <div class="modal-dialog">
                       <div class="modal-content">
                             <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                        <div class="modal-body">
                                <center>  <h3> Voulez-vous supprimer le plante <span id="div_sup" style="color:red;"></span> </h3></center>
                        </div>
                        <div class="modal-footer">
                                 <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                                 <button type="submit" value="" id="supprimer" class="btn btn-danger delete btn-flat" name="sup"><i class="fa fa-trash"></i> Supprimer </button>
                        </div>

                        </div>
                 </div>
                 </form>
           </div>
<!-- End modal sup_plante -->



<!-- //////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////// -->
<!-- Modifier Plante -->
<div class="modal fade" id="mod_plante">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="tet"><b>Modifier Produit</b></h4>
            </div>
             <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
            
                <div class="form-group">
                  <label for="nomproduit" class="col-sm-2 control-label">Nom Produit </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nomproduit" name="nomproduit" required>
                  </div>
                <label for="prixproduit" class="col-sm-2 control-label">Prix Produit </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="prixproduit" name="prixproduit" required>
                  </div>
                </div>        
                <div class="form-group">
                  <label for="tvaproduit" class="col-sm-2 control-label">TVA Produit </label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="tvaproduit" name="tvaproduit" required>
                  </div>
                   <label for="categorieproduit" class="col-sm-2 control-label">categorie</label>
                  <div class="col-sm-4">
                  <select  name="categorieproduit" id="categorieproduit" class="form-control" required>
                      <?php
                           
                            $req="select * from categorie_produit";
                            $stmt=$conn->query($req);
                            foreach ($stmt as $row) {
                              echo '<option>'.$row['categorie_produit'].'</option>';
                            }
                      ?>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                <label for="statusproduit" class="col-sm-2 control-label">status</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="statusproduit" name="statusproduit" required>
                      <option>Indisponible</option>
                      <option>Disponible</option>
                    </select>
                  </div>
                </div>

                <p><b>Information</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor3" name="informationproduit" rows="10" cols="140" required></textarea>
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
          echo $tabproduit;
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
              var str=val.getAttribute("id_produit");
               var xmlhttp;
                          if(window.XMLHttpRequest){
                            xmlhttp=new XMLHttpRequest();
                          }else{
                            xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
                          }
                          xmlhttp.open("get","ajax/select_produit.php?id_produit="+str,true);
                          xmlhttp.send();
                          xmlhttp.onreadystatechange=affich;

                          function affich(){

                            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                              var arr=JSON.parse(xmlhttp.responseText);
                              var nomp=arr.Nom;
                              var prix=arr.Prix;
                              var categorie_produit=arr.categorie_produit;
                              var TVA=arr.TVA;
                              var description1=arr.description1;
                              var description2=arr.description2;
                              var information=arr.information;
                              var status=arr.status;
                              //description
                              document.getElementById("des_body").innerHTML=description1;
                              document.getElementById("des_head").innerHTML=nomp;
                              //suppression
                              document.getElementById("div_sup").innerHTML=nomp;
                              var sup= document.getElementById("supprimer");
                              sup.setAttribute('value',str); 
                              //modification
                              document.getElementById("nomproduit").value=nomp;
                              document.getElementById("prixproduit").value=prix;
                              document.getElementById("tvaproduit").value=TVA;
                              document.getElementById("categorieproduit").value=categorie_produit;
                              if(status==0){
                                 document.getElementById("statusproduit").value='Indisponible';
                              }else{
                                document.getElementById("statusproduit").value='Disponible';
                              }
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