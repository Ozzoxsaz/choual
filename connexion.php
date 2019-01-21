<?php

include('php/menu.php');
?>


<h1 class="typo" align="center">Connexion</h1>

<div class="container">
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom de compte</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre nom de compte">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
  </div>
  <button type="submit" id="bouton" class="btn btn-dark">Se Connecter</button>
</form>

</div>




<?php require 'php/footer.php'; ?>