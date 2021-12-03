<?php 

$conn=$pdo->open();
$count2=0;
  $req="SELECT * from cart where id_user=?";
  $stmt=$conn->prepare($req);
  $stmt->execute([$_SESSION['id_user']]);
  foreach ($stmt as $row) {
    $count2++;
  }

?>
<a href="cart_view.php"><button title="panier" class="scrollTop back-to-top" id="panier"><i class="fa fa-shopping-cart" ></i><span style="font-size: 15px;" class="count" id="count"><?php echo $count2;?></span></button></a>

 <a href="#home" id="btnTop" class="scrollTop back-to-top" id="back-to-top" style="display: none; background-color: rgb(25,148,123);">
            <i class="fa fa-arrow-up"></i>
    </a>



    <script src="../js/jquery/jquery.min.js"></script>
    <script type="text/javascript">

       $('.back-to-top').click(function(){
      $('html, body').animate({scrollTop : 0},800);
    });


        $(function() {
  
                 var $btn = $('#btnTop');
                  var $home = $('#home');
                  var startpoint =380;
                  
                  $(window).on('scroll', function() {
                    if($(window).scrollTop() > startpoint) {
                      $btn.show();
                    } else {
                      $btn.hide();
                    }
  });
});
    </script>

    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/scrolling-nav.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/mdb.ecommerce.min.js"></script>