<?php
session_start();


if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}


include '../includes/conn.php';

if(!empty($_POST['voir'])){
$_SESSION['id_prod']=$_POST['voir'];
$conn=$pdo->open();
$req='update produit SET counter=counter+1 WHERE id_produit="'.$_POST['voir'].'"';
$stmt=$conn->query($req);   
$pdo->close();
}
if(empty($_SESSION['id_prod']) && empty($_POST['voir'])){
 header('location:index.php');
}


$conn=$pdo->open();
$req= "SELECT * FROM produit where id_produit=? ";  
$stmt = $conn->prepare($req); 
 $stmt->execute([$_SESSION['id_prod']]);
foreach ($stmt as $row) {
    $nom=$row['Nom'];
    $Categorie=$row['categorie_produit'];
    $prix=$row['Prix'];
    $description1=$row['description'];
    $description2=$row['description2'];
    $information=$row['information'];
    $val1=$row['photo1'];
    $val2=$row['photo2'];
    $val3=$row['photo3'];
    $val4=$row['photo4'];
    $status=$row['status'];
    if($status==0){
        $status='indisponible';
    }else{
      $status='';
    }

    if($Categorie=='Hologramme Professionnel'){
        $photo1='holo_pro/'.$row['photo1'];
        $photo2='holo_pro/'.$row['photo2'];
        $photo3='holo_pro/'.$row['photo3'];
        $photo4='holo_pro/'.$row['photo4'];
        

    }elseif ($Categorie=='Hologramme Particulier') {
        $photo1='holo_par/'.$row['photo1'];
        $photo2='holo_par/'.$row['photo2'];
        $photo3='holo_par/'.$row['photo3'];
        $photo4='holo_par/'.$row['photo4'];
       
    }elseif ($Categorie=='Accessoire Holographique') {
        $photo1='pied_et_fix/'.$row['photo1'];
        $photo2='pied_et_fix/'.$row['photo2'];
        $photo3='pied_et_fix/'.$row['photo3'];
        $photo4='pied_et_fix/'.$row['photo4'];
        
    }else{

        $photo1='coup_de_coeur/'.$row['photo1'];
        $photo2='coup_de_coeur/'.$row['photo2'];
        $photo3='coup_de_coeur/'.$row['photo3'];
        $photo4='coup_de_coeur/'.$row['photo4'];

    }
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>

   <?php include 'includes/link.php';?>

  <title>Preview Product</title>

  
 
 


 
</head>

<body class="skin-light" aria-busy="true" data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="">





<!-- nav -->
 <?php include 'includes/nav.php';?>
<!-- end nav -->


  <!--Main layout-->
  <main style="margin-top: 190px;">
    <div class="container">
<div id="jj">

</div>
      <!--Section: Block Content-->
      <section class="mb-5">

        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="mdb-lightbox" data-pswp-uid="1">
              <div class="row product-gallery mx-1">
                <div class="col-12 mb-0">
                  <?php
                      if($val1!=""){
                        echo ' <figure class="view overlay rounded z-depth-1 main-img" style="max-height: 450px;">
                    <a href="../img/products/'.$photo1.'" data-size="710x823">
                      <img src="../img/products/'.$photo1.'" class="img-fluid z-depth-1" style="transform-origin: center center; height: 450px; width: 100%;">
                    </a>
                  </figure>';
                      }
                  
                      if($val2!=""){
                        echo ' <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="../img/products/'.$photo2.'" data-size="710x823">
                      <img src="../img/products/'.$photo2.'" class="img-fluid z-depth-1">
                    </a>
                  </figure>';
                      }
                 
                      if($val3!=""){
                        echo ' <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="../img/products/'.$photo3.'" data-size="710x823">
                      <img src="../img/products/'.$photo3.'" class="img-fluid z-depth-1">
                    </a>
                  </figure>';
                      }
                 
                      if($val4!=""){
                        echo ' <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="../img/products/'.$photo4.'" data-size="710x823">
                      <img src="../img/products/'.$photo4.'" class="img-fluid z-depth-1">
                    </a>
                  </figure>';
                      }
                  ?>

                </div>
                <div class="col-12">
                  <div class="row">
<?php
if($val1!=""){
  echo '<div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="../img/products/'.$photo1.'" class="img-fluid" style="height: 100px;width: 100px;">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>';
}


if($val2!=""){
  echo '<div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="../img/products/'.$photo2.'" class="img-fluid" style="height: 100px;width: 100px;">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>';
}


if($val3!=""){
  echo '<div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="../img/products/'.$photo3.'" class="img-fluid" style="height: 100px;width: 100px;">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>';
}


if($val4!=""){
  echo '<div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="../img/products/'.$photo4.'" class="img-fluid" style="height: 100px;width: 100px;">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>';
}

?>

                   
                   
                  </div>
                </div>
              </div>

            </div>

          </div>
          <div class="col-md-6">
            <h5><?php echo (!empty($nom))? $nom : '';?></h5>
            <p class="mb-2 text-muted text-uppercase small"><?php echo (!empty($Categorie))? $Categorie : '';?></p>
            <p><span style="font-size: 25px; font-family: Arial; font-weight: bold;"><?php echo (!empty($prix))? $prix : '';?> €</span></p>
            <p class="pt-1"><?php echo (!empty($description1))? $description1 : '';?></p>

            <span style=" background-color: orange; border-radius:5px; margin: 0 5px;"><?php echo (!empty($status))? $status : '';?></span>
            <hr>
            <div class="table-responsive mb-2">
              <table class="table table-sm table-borderless">
                <tbody>
                  <tr>
                    <td class="pl-0 pb-0 w-25">Quantity</td>
                  </tr>
                  <tr>
                    <td class="pl-0">
                      <div class="number-input" style="width: 10em; text-align: center;">
                        <button onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepDown()" class="minus"></button>
                        <input class="quantity" min="1" name="quantity" id="quantity" id="quantity" value="1" type="number" disabled="">
                        <button onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepUp()" class="plus"></button>
                      </div>
                    </td>
                  
                  </tr>
                </tbody>
              </table>
            </div>
            <button type="button" class="btn btn-light btn-md mr-1 mb-2 waves-effect waves-light" id="ajouter"><i class="fa fa-shopping-cart pr-2"></i>Ajouter au panie</button>
          </div>
        </div>

      </section>
      <!--Section: Block Content-->

  <!-- Classic tabs -->
<!-- Classic tabs -->
<div class="classic-tabs border rounded px-4 pt-1">

  <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Information</a>
    </li>
  </ul>
  <div class="tab-content" id="advancedTabContent">
    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
      <h5><?php echo (!empty($description2))? $description2 : '';?></h5>
     
    </div>
    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
      <h5><?php echo (!empty($information))? $information : '';?></h5>
      
    </div>
   
  </div>

</div>
<!-- Classic tabs -->
<!-- Classic tabs -->

      <hr>

   

    </div>
  </main>
  <!--Main layout-->



<script type="text/javascript">
document.getElementById("ajouter").addEventListener("click",function(){
var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
var quantity=document.getElementById("quantity").value;
if(quantity<=0){
  quantity=1;
}


xmlhttp.open("get","ajax/ajouter_panier.php?quantity="+quantity,true);
xmlhttp.send();
xmlhttp.onreadystatechange=affich;

function affich(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200){
        var arr=JSON.parse(xmlhttp.responseText);
                document.getElementById('count').innerHTML=arr.count;
                document.getElementById('jj').innerHTML=arr.message;
              
          
        
  }else{
    document.getElementById("jj").innerHTML="probleme de l'affichage";
  }
}
})
</script>
<!-- section foot -->

<?php
include 'includes/footer.php';
?>

<!-- end -->
    

<!-- script -->

<?php include 'includes/script.php';?>

<!-- end script -->



</body>
</html>