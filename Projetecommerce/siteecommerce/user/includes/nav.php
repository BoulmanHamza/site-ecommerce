 

 <header class="header fixed-top" style="background-color: black;">

        <div class="top-bar w-100">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6">

                        <ul class="list-inline list-unstyled">
                            <li class="list-inline-item"><a href="tel: 0749778276" class="pl-0"><i class="ion-ios-telephone"></i> 07 49 77 82 76 </a></li>
                            <li class="list-inline-item"><a href="mailto:tnh3d.dv@gmail.com"><i class="ion-ios-email"></i> tnh3d.dv@gmail.com</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                         <ul class="list-inline list-unstyled">


                            <li class="list-inline-item"><a href="#" class="pl-0"><img src="../img/en.png" title="England"></a></li>

                            <li class="list-inline-item"><a href="#" class="pl-0"><img src="../img/sa.png" title="Arabic"></a></li>
                            <li class="list-inline-item"><a href="#" class="pl-0"><img src="../img/fr.png" title="Francais"></a></li>

                            

                        </ul>

                    </div>

                    <!--top left col end-->

                    <div class="col-sm-4 text-right hidden-md-down">

                        <ul class="list-inline top-socials list-unstyled">

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-facebook-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-twitter-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-linkedin-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-google-plus-square"></i></a></li>

                            <li class="list-inline-item"><a href="http://bootstrapdevelop.com/bootstrap4/detheme-v1.3/light/index-alt.html#"><i class="fa fa-instagram"></i></a></li>

                        </ul>

                    </div>

                    <!--top social col end-->

                </div>

                <!--row-->

            </div>

            <!--container-->

        </div>

        <!--top bar end-->

        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse  header-transparent">

            <div class="container">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <a class="navbar-brand page-scroll logo no-margin" href="index.php"><img src="../img/logo.png"></a>

                <div class="navbar-collapse collapse show" id="navbarNav" aria-expanded="true" style="">

                    <ul class="navbar-nav ml-auto ">

                        <li class="nav-item">

                            <a class="page-scroll nav-link" href="index.php"><b>Acceuil</b> </a>

                        </li>

                         <li class="nav-item dropdown <?php if(!empty($holo)){ echo "$holo" ; }else {echo "";} ?>">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <b> Hologramme</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="holograme_professionnel.php">Hélice holographique professionnel</a>
                                  <a class="dropdown-item" href="holograme_particulier.php">Hélice holographique particulier</a>
                                  <a class="dropdown-item" href="accessoire_holographique.php">Support de fixation</a>
                                </div>
                        </li>

                        <li class="nav-item dropdown <?php if(!empty($animation)){ echo "$animation" ; }else {echo "";} ?>">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <b> Animation 3D</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="animation-hologramme-sur-mesure.php">Animation 3D personnalisée</a>
                                  <a class="dropdown-item" href="Animation_payer.php">magasin d'animation</a>
                                  <a class="dropdown-item" href="telechargement.php">telechargement</a>
                                </div>
                        </li>
                        <li class="nav-item <?php if(!empty($coupdecoeur)){ echo "$coupdecoeur" ; }else {echo "";} ?>">

                            <a class="page-scroll nav-link" href="Coup_de_coeur.php"><b>Coup de coeur</b></a>

                        </li>
                         <li class="nav-item <?php if(!empty($siteweb)){ echo "$siteweb" ; }else {echo "";} ?>">

                            <a class="page-scroll nav-link" href="site_web.php"><b>Site Web</b></a>

                        </li>
                        <li class="nav-item <?php  if(!empty($location)){ echo "$location" ; }else {echo "";} ?>">

                            <a class="page-scroll nav-link" href="location.php"><b>Location</b></a>

                        </li>


                        <li class="nav-item <?php if(!empty($realisation)){ echo "$realisation" ; }else {echo "";}?>">

                            <a class="page-scroll nav-link" href="realisation.php"><b>Realisation</b></a>

                        </li>

                        <li class="nav-item <?php if(!empty($blog)){ echo "$blog" ; }else {echo "";} ?>">

                            <a class="page-scroll nav-link" href="blog.php"><b>Blog</b></a>

                        </li>

                        <li class="nav-item <?php if(!empty($propos)){ echo "$propos" ; }else {echo "";} ?>">

                            <a class="page-scroll nav-link" href="propos.php"><b>A propos</b> </a>

                        </li>

                        <li class="nav-item dropdown <?php if(!empty($compte)){ echo "$compte" ; }else {echo "";} ?>">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <b> Compte</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="parametre_compte.php">paramètres</a>
                                  <form method="POST">
                                <button class="dropdown-item" name="deconnexion">Deconnexion</button>
                                    </form>
                                </div>
                        </li>

                    </ul>

                </div>

            </div>

            <!-- End of Container -->

        </nav>

    </header>


     <?php
     if (isset($_POST['deconnexion'])) {
         unset($_SESSION['id_user']);
         echo "<script>
                window.location='../sign.php';
         </script>" ;
     }

     ?>