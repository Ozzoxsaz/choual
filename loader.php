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
    <style type="text/css"> 
     .loader {
         border: 16px solid #f3f3f3; /* Light grey */
         border-top: 16px solid rgb(197, 105, 43); /* Blue */
         border-radius: 50%;
         width: 120px;
         height: 120px;
         animation: spin 2s linear infinite;
         }       
    </style>

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
          <li><a href="inscription.php">Inscription</a></li>
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


<div class='container'>
  <p class="typo"> 
    
  Zeta est un serveur Semi-cheat - PvP/PvM. Notre équipe est soudée et nous sommes en développement constant afin de vous proposer une expérience de jeu optimale. Le serveur est un serveur de farm et l’économie a été pensée pour ne jamais se lasser du jeu.

  Voici quelques spécifications de notre serveur :</p><br>
  <ul class="typo">
     <li>Rate xp: multipliée par 5</li>
     <li>Des mises à jours régulières et de qualités </li>
     <li>Refonte des familier, nourrissez vos familiers avec des ressources pour le faire UP en niveaux</li>
     <li>Les Ensembles, changez de stuffs/sorts/caractéristiques en un seul clique</li>
     <li>Rééquilibrage des classes, faites du pvp de façon équilibrée</li>
     <li>Quête Dofus Légendaire exclusive </li>
     <li>Items d’apparats exclusifs, créez vous un skin unique</li>
     <li>Nombreux Donjons disponible et modulaire </li>
     <li>Une Boutique avec des objets uniques crées par nos soins</li>
     <li>Variantes de sorts (+ de 370 nouveaux sorts)</li>
     <li>Niveaux Omega avec statistiques, titres et ornements exclusifs à la clef</li>
     <li>Toutes les classes disponibles et débug (refonte Sacrieur, Eliotrope, Ouginak, Roublard...) </li>
     <li>Kolizeum 1v1 et 3v3 équilibré </li>
     <li>Les Idoles 100% fonctionnelles</li>
     <li>Les Exo PA/PM/PO/INVOCATION ainsi que le FM cac</li>
     <li>Une équipe compétente, proche de la communauté et à l’écoute de vos suggestions</li>
     <li>Un serveur, site, forum de dernière génération</li>
     <li>Marché de personnages, achetez ou vendez des personnages aux autres joueurs en toute sécurité</li>
     <li>Nombreux débugs supplémentaires, venez essayer !</li>
     <li> L'économie du serveur se base sur 5 monnaies :
<ul>
     <li> L'Orbe (droppable sur tous les monstres),</li>
     <li> L’Orbe en Or (droppable sur les boss de donjons THL)</li>
     <li> Les Kamas (échangez 1 orbe contre 1000 kamas),</li>
     <li> Les Kolizeton (récompense Kolizeum 1v1 et 3v3),</li>
     <li> Les Ogrines (point boutique).</li>
    </ul>
     </li>
 </ul>
 <p class="typo"> Un serveur Discord est disponible afin de vous divertire avec les autres joueurs et de contacter rapidement les membres du staff.</p>
 </div>

    <div id="drago"><img  src="./img/illu_block_jeux_en_ligne.webp" alt=""></div>



</div>

<script type="text/javascript">
   $(window).load(function() {
     $(".loader").fadeOut("1000");
  })
  </script>

<?php require 'php/footer.php'; ?>