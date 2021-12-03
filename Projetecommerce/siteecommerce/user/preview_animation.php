<?php
session_start();

if(empty($_SESSION['id_user'])){
 header('location:../index.php');
}


include '../includes/conn.php';

if(!empty($_POST['voir'])){
$_SESSION['id_animation']=$_POST['voir'];

}
if(empty($_SESSION['id_animation']) && empty($_POST['voir'])){
 header('location:Animation_payer.php');
}






$conn=$pdo->open();
$req= "SELECT * FROM animation where id_animation=? ";  
$stmt = $conn->prepare($req); 
 $stmt->execute([$_SESSION['id_animation']]);
foreach ($stmt as $row) {
    $nom=$row['nom'];
    $Categorie=$row['categorie_animation'];
    $prix=$row['prix'];
    $description1=$row['description'];
    $description2=$row['description2'];
    $information=$row['information'];
    $video1=$row['video1'];
    $video2=$row['video2'];
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
  <main style="margin-top: 200px;">
    <div class="container">

      <!--Section: Block Content-->
      <section class="mb-5">

        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="mdb-lightbox" data-pswp-uid="1">
              <div class="row product-gallery mx-1">
                <div class="col-12 mb-0">
                  <?php
                      
                        echo '<figure class="view overlay rounded z-depth-1 main-img" style="max-height: 450px;">
                   
                    <video controls width="100%" height="100%">
                 <source src="../img/animation_3d/'.$video1.'" type="video/mp4">
                    </video>
                     
                 
                  </figure>';
                      
                  
                     
                  ?>

                </div>
                <div class="col-12">
                  <div class="row">

                   
                   
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

           
            <hr>
            <?php
            $cf=0;
            $req="SELECT * from telecharger where id_user=? and id_animation=?";
            $stmt=$conn->prepare($req);
            $stmt->execute([$_SESSION['id_user'],$_SESSION['id_animation']]);
            foreach ($stmt as $row) {
              $cf++;
            }
            if($cf==0){
              echo '<button type="button" class="btn btn-light btn-md mr-1 mb-2 waves-effect waves-light" data-toggle="collapse" data-target="#paypal-button-container">Acheter maintenant</button>';
            }else{
              echo '<a href="telechargement.php"><button type="button" class="btn btn-light btn-md mr-1 mb-2 waves-effect waves-light">voir telechargement</button></a>';
            }

            ?>
           
            <div  class="collapse" id="paypal-button-container" style="width: 38%;"></div>
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
  function valideranimation(){
    var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
xmlhttp.open("get","ajax/telecharger_animation.php",true);
xmlhttp.send();
xmlhttp.onreadystatechange=affich;

function affich(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200){
        var arr=xmlhttp.responseText; 
        alert(arr);      
  }else{
    document.getElementById("co").innerHTML="probleme de l'affichage";
  }
}
  window.location='preview_animation.php';
  }
</script>


<script type="text/javascript"> const ptr=<?php echo $prix?></script>
<script src="https://www.paypal.com/sdk/js?client-id=AU03qTu5GxrI3HpRzehF3hwrGI1hs2JLBib1xWF8m_mUGnH4Fr1DK3zTiJ2MlJgGmVnibE-zzdw84vJB&disable-funding=credit,card&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script>
  function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect', 
          color: 'blue',
          layout: 'vertical',
          label: 'checkout',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"EUR","value":ptr}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            //alert('Transaction completed by ' + details.payer.name.given_name + '!');
            valideranimation();
            // alert('nom_facture'+nom_facture+'/prenomfacture'+prenom_facture+'/ville'+ville_facture+'/pays'+pays_facture+'/email'+email_facture+'/telephone'+tele_facture+'/adr1'+adresse1_facture+'/adr2'+adresse2_facture+'note'+note_facture);
          });
        },

        onCancel:function(data){
            alert('le payement et cancled');
        },

        onError: function(err) {
          echecfacture();
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();

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