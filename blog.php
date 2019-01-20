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

<p class="typo">jdbqkjsbjfdqhsjfbjqbsjsvd.</p>

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