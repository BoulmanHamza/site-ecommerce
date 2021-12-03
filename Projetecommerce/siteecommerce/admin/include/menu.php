


<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="image/male2.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php
                echo $prenom." ".$nom 
                ?>
        </p>
       <a><i class="fa fa-circle text-success"></i> En ligne</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Générale</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Table de Bord</span></a></li>
     
      <li class="header">MANAGE</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
           <li><a href="users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>
        </ul>
      </li>







     
      <li class="treeview">
        <a href="#">
          <i class="fa fa-product-hunt"></i>
          <span>Produit</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="produit.php"><i class="fa fa-circle-o"></i> Listes des Produits</a></li>
          <li><a href="catg_produit.php"><i class="fa fa-circle-o"></i> Categorie</a></li>
        </ul>
      </li>
	  <li class="treeview">
        <a href="#">
          <i class="fa fa-video-camera"></i>
          <span>Animation</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="animation.php"><i class="fa fa-circle-o"></i>Listes des Animations</a></li>
          <li><a href="animation_telecharger.php"><i class="fa fa-circle-o"></i>Animations Telecharger</a></li>
          <li><a href="catg_animation.php"><i class="fa fa-circle-o"></i>Categorie</a></li>
        </ul>
      </li>
	  <li class="treeview">
        <a href="#">
          <i class="fa fa-bars"></i>
          <span>Commande </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="commande.php"><i class="fa fa-circle-o"></i> Listes des Commandes</a></li>
          <li><a href="commande_valider.php"><i class="fa fa-circle-o"></i> Listes des Commandes valider</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>