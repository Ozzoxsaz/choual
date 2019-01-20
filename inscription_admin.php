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
    if(empty($_POST['pseudo'])) {
        $erreurs['pseudo'] = 'Entrez un nom de compte.';
    }
    if(empty($_POST['mdp'])) {
        $erreurs['mdp'] = 'Entrez un mot de passe.';
    }
}

if(empty($erreurs)) {
    $requete = $base->prepare('INSERT INTO adminzeta SET pseudo = :pseudo, mdp = :mdp');
    $requete->execute(array(
        ':pseudo' => $_POST['pseudo'], 
        ':mdp' => $_POST['mdp'], 
        ':role' => $_POST['role'],
        
      ));
}

 ?>
 <h1 class="typo" align="center">Inscription Admin</h1>

<div class="container">
<form>
<div class="form-group">
    <label for="exampleInputEmail1">Pseudo :</label>
    <input name="pseudo"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre nom de compte">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe:</label>
    <input name="mdp" type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez un mot de passe">
  </div>
  <button type="submit" class="btn btn-dark">Confirmer l'inscription Admin</button>
</form>

</div>

<?php require 'php/footer.php'; ?>