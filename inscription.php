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

if(isset($_POST)) {
    $erreurs = array();
    if(empty($_POST['ndc'])) {
        $erreurs['ndc'] = 'Entrez un nom de compte.';
    }
    if(empty($_POST['mdp'])) {
        $erreurs['mdp'] = 'Entrez un mot de passe.';
    }
    if(empty($_POST['email'])) {
      $erreurs['email'] = "Il manque l'email."; 
  }
}

  

if(empty($erreurs)) {
    $requete = $base->prepare('INSERT INTO inscription SET ndc = :ndc, contenu = :contenu, auteur = :auteur, jour = NOW(), imge = :imge');
    $requete->execute(array(
        ':ndc' => $_POST['ndc'], 
        ':mdp' => $_POST['mdp'], 
        ':email' => $_POST['email'],
        
      ));
}

 ?>
<h1 class="typo" align="center">Inscription</h1>
<div class="container">
<form>
<div class="form-group">
    <label for="exampleInputEmail1">Nom de compte :</label>
    <input name="ndc"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre nom de compte">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse e-mail :</label>
    <input name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe:</label>
    <input name="mdp" type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez un mot de passe">
  </div>
  <button type="submit" class="btn btn-dark">Confirmer l'inscription</button>
</form>

</div>


<?php require 'php/footer.php'; ?>