<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['auth']) && $_SESSION['auth']['role']== 'admin'){
    include('php/menu_admin.php');
}
else{
    include('php/menu.php');
}

require 'php/db.php';

?>
 <h1 class="typo" align="center">Présentation du serveur :</h1>
 <div class="container">
<div id="txtacc">
<p class="typo">Zeta est un serveur Semi-Ankalike PvP/PvM.<br>
Notre équipe est soudée et nous sommes en développement constant afin de vous proposer une expérience de jeu optimale.
<br>Le serveur est un serveur de farm et l’économie a été pensée pour ne jamais se lasser du jeu. 

Voici quelques spécifications de notre serveur : 

Xp multipliée par 5 
Des mises à jours régulières et de qualités 
Nombreux Donjons disponible et modulaire 
Une Boutique avec des objets uniques crées par nos soins 
Variantes de sorts (+ de 370 nouveaux sorts) 
Niveaux Omega avec statistiques, titres et ornements exclusifs à la clef 
Toutes les classes disponibles et débug (refonte Sacrieur, Eliotrope, Ouginak, Roublard...) 
Kolizeum 1v1 et 3v3 équilibré 
Les Idoles 100% fonctionnelles 
Les Exo PA/PM/PO/INVOCATION ainsi que le FM cac 
Une équipe compétente, proche de la communauté et à l’écoute de vos suggestions 
Un serveur, site, forum de dernière génération 
Marché de personnages, achetez ou vendez des personnages aux autres joueurs en toute sécurité 
Refonte d’Astrub 
Nombreux débugs supplémentaires, venez essayer ! 

L'économie du serveur se base sur 5 monnaies :</p>
<ul class="typo">
<li>L'Orbe (droppable sur tous les monstres), </li>
<li> L’Orbe en Or (droppable sur les boss de donjons THL) </li>
<li> Les Kamas (échangez 1 orbe contre 1000 kamas), </li>
<li> Les Kolizeton (récompense Kolizeum 1v1 et 3v3), </li>
<li> Les Ogrines (point boutique). </li>
</ul> 

<p class="typo">
Un serveur Discord est disponible afin de vous divertire avec les autres joueurs et de contacter rapidement les membres du staff. 

Nous vous attendons en grand nombre sur le serveur, en espérant qu’il vous plaise autant qu’à nous.
</p>  
</div>
<div id="drago"><img src="./img/illu_block_jeux_en_ligne.webp" alt=""></div>

</div>


 <h1 class="typo" align="center">Nouveaux Articles</h1>

 <?php
// SELECTION DANS BD

$requete = $base->prepare('SELECT * FROM article');
$requete->execute();

?>
</div>

<div id="card_article" class="container">
<?php while($res = $requete->fetch(PDO::FETCH_OBJ)): ?>
<div class="card bg-light mb-3" style="max-width: 18rem;">
    <img class="card-img-top" src="./img/image_bd/<?= $res->imge; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $res->titre; ?> </h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $res->auteur; ?></h6>
    <p class="card-text"><?= $res->contenu; ?><br><?= $res->jour; ?></p>
    <div id="card_btn"><a href="#" class="btn btn-dark">En savoir +..</a></div>
  </div>

</div>
<?php endwhile; ?>

</div>

<?php require 'php/footer.php'; ?>