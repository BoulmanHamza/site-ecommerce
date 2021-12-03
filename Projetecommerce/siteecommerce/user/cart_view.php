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




<?php
$aff='';
$co=0;
$conn=$pdo->open();
$req="SELECT * FROM cart c,produit p where id_user=? and c.id_produit=p.id_produit";
$stmt=$conn->prepare($req);
$stmt->execute([$_SESSION['id_user']]);
foreach ($stmt as $row) {
  $co++;
  $nom=$row['Nom'];
  $id=$row['id_produit'];
  $Prix=$row['Prix'];
  $quantity=$row['quantity'];
  $categorie=$row['categorie_produit'];
  $tva=$row['TVA'];
   if($row['categorie_produit']=='Hologramme Professionnel'){
        $photo1='holo_pro/'.$row['photo1'];
    }elseif ($row['categorie_produit']=='Hologramme Particulier') {
        $photo1='holo_par/'.$row['photo1'];
       
    }elseif ($row['categorie_produit']=='Accessoire Holographique') {
        $photo1='pied_et_fix/'.$row['photo1'];   
    }else{
        $photo1='coup_de_coeur/'.$row['photo1'];
    }  

  $aff.='<div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="../img/products/'.$photo1.'" alt="'.$photo1.'">
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>'.$nom.'</h5>
                    <p class="mb-3 text-muted text-uppercase small">'.$categorie.'</p>
                    <br><br><br>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <button class="minus decrease" value="'.$id.'" onclick="dec(this);" id="dec"></button>
                      <input class="quantity" min="1" name="quantity" value="'.$quantity.'" id="'.$id.'" type="number" disabled>
                      <button id="inc" value="'.$id.'"  onclick="inc(this);" class="plus increase"></button>
                    </div>
                    
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a type="button" id_pro="'.$id.'" onclick="del(this)" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fa fa-trash mr-1"></i> Remove item </a>
                    
                  </div>
                  <p class="mb-0"><span><strong id="summary">'.$Prix.' €</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">';



}
$displ='';

if($co==0){
  $displ='style="display:none;"';
}


?>


<input type="hidden" name="">

<div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">

          <h5 class="mb-4">Panier (<span id="co"><?php echo $co;?></span> articles)</h5>
          <div id="aff">
             <?php echo $aff;?>
          </div>

       
          
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
     
      <!-- Card -->

      <!-- Card -->
     
      <!-- Card -->

    </div>




<?php
$total=0;
$totaltva=0;
$tva=0;
 $req="SELECT * FROM cart c,produit p where id_user=? and c.id_produit=p.id_produit";
  $stmt=$conn->prepare($req);
  $stmt->execute([$_SESSION['id_user']]);
  foreach ($stmt as $row) {
      $total+=$row['Prix']*$row['quantity'];
      $tva+=$row['TVA']*$row['quantity'];
     
      
  }

  $totaltva=$total+$tva;
  if($totaltva!=0){
    $totaltva=$total+$tva+20;
  }
  $_SESSION['totaltva']=$totaltva;

?>

    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4" id="check" <?php echo "$displ";?>>

          <h5 class="mb-3">Le montant total de</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Montant temporaire
              <span id="total"><?php echo $total;?> €</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              livraison 4j
              <span><?php $liv=20; echo $liv;?> €</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Le montant total de</strong>
                <strong>
                  <p class="mb-0">(y compris la TVA)</p>
                </strong>
              </div>
              <strong><span id="totaltva" style="font-size: 25px; font-weight: bold; font-family: Arial;"><?php echo $totaltva?> €</span></strong>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block" style="margin-bottom: 20px;" data-toggle="modal" data-target="#facture">Acheter Maintenant</button>
          <div id="smart-button-container">
      <div style="text-align: center;">
       
      </div>
    </div>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
     
    <!--Grid column-->
          
           </div>
        </div>
      </div>
      </div>
  </section>

   <div id="facture" class="modal fade">
                  <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                            <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <div class="modal-body">
                              

<div id="details_facture">
<h4>Détails de facturation</h4>
<br>


<div class="form-inline">
    <div class="form-group col-sm-6">
        <label for="nom_facture" class="control-label col-sm-4">Nom</label>
        <input type="text" class="form-control col-sm-8" id="nom_facture" placeholder="Nom">
    </div>
    <div class="form-group col-sm-6">
        <label for="prenom_facture" class="control-label col-sm-4">Prenom</label>
        <input type="text" class="form-control col-sm-8" id="prenom_facture" placeholder="Prenom">
    </div>
</div>
<br>
<div class="form-inline">
    <div class="form-group col-sm-6">
        <label for="pays_facture" class="control-label col-sm-4">Pays</label>
      <select  name="pays_facture" id="pays_facture" class="form-control col-sm-8">
                  <option value="" hidden="">Pays/region</option>
                  <option>France</option>
                  <option>Maroc</option>
                </select>
    </div>
    <div class="form-group col-sm-6">
        <label for="ville_facture" class="control-label col-sm-4">Ville</label>
        <input type="text" class="form-control col-sm-8" id="ville_facture" placeholder="Ville">
    </div>
</div>  
<br>
<div class="form-inline">
    <div class="form-group col-sm-6">
        <label for="email_facture" class="control-label col-sm-4">Email</label>
        <input type="text" class="form-control col-sm-8" id="email_facture" placeholder="Email">
    </div>
    <div class="form-group col-sm-6">
        <label for="tele_facture" class="control-label col-sm-4">Telephone</label>
        <input type="text" class="form-control col-sm-8" id="tele_facture" placeholder="+212 ">
    </div>
</div>  
<br>
<div class="form-inline">
    <div class="form-group col-sm-6">
        <label for="adresse1_facture" class="control-label col-sm-4">Adresse</label>
        <input type="text" class="form-control col-sm-8" id="adresse1_facture" placeholder="Adresse">
    </div>
    <div class="form-group col-sm-6">
        <label for="adresse2_facture" class="control-label col-sm-4">Adresse(facultatif)</label>
        <input type="text" class="form-control col-sm-8" id="adresse2_facture" placeholder="Adresse">
    </div>
  </div>
    <br>

    <div class="form-group row" style="margin-left: 1%;">
        <label for="note_facture" class="control-label col-sm-4">Notes de commande (facultatif)</label>
        <textarea class="form-control col-sm-7" id="note_facture" placeholder="Commentaires concernant votre commande, ex. : consignes de livraison." ></textarea>
    </div>
    
  

    <center><button type="submit" id="valider" class="btn btn-success" style="margin-bottom: 15px;" onclick="valider()" data-toggle="collapse" >Valider</button></center>
  </div>
  <center> <div class="collapse" id="payement"><div  id="paypal-button-container" style="width: 40%;"></div></div></center>

                              </div>
                       
                        </div>
                 </div>
               
           </div>





<script src="js/valider_facture.js" type="text/javascript"></script>

<script type="text/javascript">
  function validerfacture(nom_facture,prenom_facture,ville_facture,pays_facture,adresse1_facture,adresse2_facture,email_facture,tele_facture,note_facture){
    var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
xmlhttp.open("get","ajax/valider_facture.php?nom_facture="+nom_facture+"&prenom_facture="+prenom_facture+"&ville_facture="+ville_facture+"&pays_facture="+pays_facture+"&adresse1_facture="+adresse1_facture+"&adresse2_facture="+adresse2_facture+"&email_facture="+email_facture+"&tele_facture="+tele_facture+"&note_facture="+note_facture,true);
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
  window.location='cart_view.php';
  }
</script>

<script type="text/javascript">
  function echecfacture(){
    var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
xmlhttp.open("get","ajax/echec_facture.php",true);
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

  }
</script>

<script type="text/javascript"> const totalpayement="<?php echo $_SESSION['totaltva'];?>";</script>

<script src="https://www.paypal.com/sdk/js?client-id=AU03qTu5GxrI3HpRzehF3hwrGI1hs2JLBib1xWF8m_mUGnH4Fr1DK3zTiJ2MlJgGmVnibE-zzdw84vJB&disable-funding=credit,card&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script src="js/paypal.js"></script>





<script type="text/javascript">
  function del(b) {
  var id=b.getAttribute('id_pro');
var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
xmlhttp.open("get","ajax/delete_panier.php?id_produit="+id,true);
xmlhttp.send();
xmlhttp.onreadystatechange=affich;

function affich(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200){
        var arr=JSON.parse(xmlhttp.responseText);
                document.getElementById('co').innerHTML=arr.co;
                document.getElementById('aff').innerHTML=arr.aff;
                document.getElementById('total').innerHTML=arr.total+'  €';
        document.getElementById('totaltva').innerHTML=arr.totaltva+'  €';
        document.getElementById('count').innerHTML=arr.count;
        if(arr.count==0){
          document.getElementById('check').setAttribute('style','display:none');
        }


        
  }else{
    document.getElementById("co").innerHTML="probleme de l'affichage";
  }
}

    window.location='cart_view.php';
    
  }

</script>


<script type="text/javascript">
function dec(b){
var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
var id_produit=b.value;

xmlhttp.open("get","ajax/dec.php?id_produit="+id_produit,true);
xmlhttp.send();
xmlhttp.onreadystatechange=affich;

function affich(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200){
        var arr=JSON.parse(xmlhttp.responseText);
        document.getElementById(b.value).value=arr.quantity;
        document.getElementById('total').innerHTML=arr.total+'  €';
        document.getElementById('totaltva').innerHTML=arr.totaltva+'  €';

        
  }else{
    document.getElementById(b.value).value=20;
  }
}
 window.location='cart_view.php';
}
</script>

<script type="text/javascript">
function inc(b){
var xmlhttp;
if(window.XMLHttpRequest){
   xmlhttp=new XMLHttpRequest();
}else{
   xmlhttp= new ActiveXObject(Microsoft.XMLHTTP);
}
var id_produit=b.value;

xmlhttp.open("get","ajax/inc.php?id_produit="+id_produit,true);
xmlhttp.send();
xmlhttp.onreadystatechange=affich;

function affich(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200){
        var arr=JSON.parse(xmlhttp.responseText);
        document.getElementById(b.value).value=arr.quantity;
        document.getElementById('total').innerHTML=arr.total+'  €';
        document.getElementById('totaltva').innerHTML=arr.totaltva+'  €';
  }else{
    document.getElementById(b.value).value=20;
  }
}
 window.location='cart_view.php';
}
</script>

















<?php
include 'includes/footer.php';
?>

<!-- end -->
    

<!-- script -->

<?php include 'includes/script.php';?>

<!-- end script -->



</body>
</html>