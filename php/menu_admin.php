<!DOCTYPE html>
<html lang="fr">
<script type="text/javascript" id="cookiebanner" src="http://www.refannuseo.fr/outils/cookiemessage.js"	data-height="20px" data-position="top" data-bg="#000" data-linkmsg="En savoir plus" data-fg="#FFF" 
data-message="En poursuivant votre navigation sur ce site, vous acceptez l’utilisation des cookies ou autres traceurs pour vous proposer des services et offres adaptés à vos centres d'intérêt."></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
   
    <title>Zeta - Le Serveur Privé Dofus Ankalike</title>
    
    
</head>

<body>
    <div class="loader"></div>
    <img id="toggle_navbar" src="img/bars-solid.svg" class="bars_menu">

    <div id="slide_home">

      </div>


   
    
 <header class="header" role="banner">
  <h1 class="logo">
    <a href="blog.php">Aifor <span>Zeta</span></a>
  </h1>
  <div id="hide_navbar" class="arrow">
    <img src="./img/arrow-circle-left-solid.svg">
  </div>
  <div class="nav-wrap">
    <nav class="main-nav" role="navigation">
      <ul class="unstyled list-hover-slide">
      <li><a href="blog.php">Accueil</a></li>
        <li class="dropdown-perso-toggle">
            <a class="nav-link" href="#">
              L'Univers <img class="menu_img" src="img/arrow-down-solid.svg">
            </a>
            <div class="dropdown-perso">
              <a href="classes.php">Classes</a>
              <a href="element_mode_jeu.php">Elements et mode de jeu</a>
              <a href="cartes.php">Carte</a>
              <a href="dofus.php">Dofus</a>
            </div>
          </li>
          <?php if(isset($_SESSION['auth'])): ?>
      <li> <a href='logout.php'>Se Déconnecter</a>
<?php else: ?>
          <li><a href="admin156748942.php">Insérer un article</a></li>
          <li><a href="connexion.php">Connexion</a></li>
<?php endif; ?>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <ul class="social-links list-inline unstyled list-hover-slide">
      <li><a class="socialmenu" href="#"><img class="menu_img" src="img/twitter-brands.svg">  Twitter</a></li>
      <li><a class="socialmenu" href="#"><img class="menu_img" src="img/facebook-square-brands.svg">Facebook</a></li>
      <li><a class="socialmenu"href="#"><img class="menu_img" src="img/soundcloud-brands.svg">Soundcloud</a></li>
      <li><a class="socialmenu" href="#"><img class="menu_img" src="img/twitch-brands.svg"> Twitch</a></li>
    </ul>





  </div>
</header>