<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
    require 'php/menu.php';?>
    <h1 class="typo" align="center">Connexion Admin</h1>
    
    <div class="container">

        <div class="table_erreur">
<?php
          
        if (isset($_POST['boutton'])) {
            $erreurs = array();
        if (empty($_POST['pseudo'])) {
            $erreurs['pseudo'] = 'Pas de nom';
             echo ("Vous n'avez pas entré de pseudo.<br>");
        }
        if (!isset($_POST['mdp']) || $_POST['mdp'] == '') {
            $erreurs['mdp'] = 'Pas de mot de passe.';
             echo ("Vous n'avez pas saisi votre mot de passe.<br>");
        }

    }



//  CONNEXION BD
require '/php/function.php';
 



    if(!empty($_POST) && !empty($_POST['pseudo'] && !empty($_POST['mdp']))){
        
        require 'php/db.php';
        $req =$base->prepare('SELECT * FROM adminzeta WHERE pseudo = :pseudo ');
        $req->execute(['pseudo' => $_POST['pseudo']]);
        $user=$req->fetch();
        if(password_verify($_POST['mdp'], $user['mdp'])){
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté sur Zeta.';
            header('Location: ./admin156748942.php');
            exit();
        }else{
            $_SESSION['flash']['danger'] = 'Pseudo ou mot de passe incorrect';
        }
    }

 ?>
        </div>

        <form method="post">


            <div class="form-group">
                <label for="VotreEmail1">Pseudo :</label>
                <input type="text" class="form-control" id="exampleInputName" name="pseudo" placeholder="Votre pseudo">
            </div>
            <div class="form-group">
                <label for="VotreEmail1">Mot de passe:</label>
                <input type="password" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="mdp" placeholder="Votre mot de">
            </div>
            <button id="button" name="boutton" type="submit" class="btn btn-dark">Connexion Admin</button><br>
        </form>








    </div>


    <?php require 'php/footer.php'; ?>