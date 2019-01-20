<?php
if(session_status() == PHP_SESSION_NONE) {
  session_start();
}
require 'php/menu_admin.php'; ?>
<?php

//  CONNEXION BD

require 'php/db.php';

// INSERTION DANS BD

if(isset($_POST)) {
    $erreurs = array();
    if(empty($_POST['titre'])) {
        $erreurs['titre'] = 'Entrez un titre';
    }
    if(empty($_POST['contenu'])) {
        $erreurs['contenu'] = 'Le contenu est vide';
    }
    if(empty($_POST['auteur'])) {
      $erreurs['auteur'] = "Il manque le nom de l'auteur"; 
  }
}


define('TARGET', './img/image_bd/');    // Repertoire cible
define('MAX_SIZE', 100000);    // Taille max en octets du fichier
define('WIDTH_MAX', 800);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels
 
// Tableaux de donnees
$tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
$infosImg = array();
 
// Variables
$extension = '';
$message = '';
$nomImage = '';
 
/************************************************************
 * Creation du repertoire cible si inexistant
 *************************************************************/
if( !is_dir(TARGET) ) {
  if( !mkdir(TARGET, 0755) ) {
    exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
  }
}
 
 // On verifie si le champ est rempli
 if( !empty($_FILES['imge']['name']) )
 {
   // Recuperation de l'extension du fichier
   $extension  = pathinfo($_FILES['imge']['name'], PATHINFO_EXTENSION);

   // On verifie l'extension du fichier
   if(in_array(strtolower($extension),$tabExt))
   {
     // On recupere les dimensions du fichier
     $infosImg = getimagesize($_FILES['imge']['tmp_name']);
    
           // On verifie le type de l'image
           if($infosImg[2] >= 1 && $infosImg[2] <= 14)
           {
             // On verifie les dimensions et taille de l'image
             if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['imge']['tmp_name']) <= MAX_SIZE))
             {
               // Parcours du tableau d'erreurs
               if(isset($_FILES['imge']['error']) 
                 && UPLOAD_ERR_OK === $_FILES['imge']['error'])
               {
                 // On renomme le fichier
                 $nomImage = md5(uniqid()) .'.'. $extension;
      
                 // Si c'est OK, on teste l'upload
                 if(move_uploaded_file($_FILES['imge']['tmp_name'], TARGET.$nomImage))
                 {
                   $message = 'Upload réussi !';
                 }
                 else
                 {
                   // Sinon on affiche une erreur systeme
                   $message = 'Problème lors de l\'upload !';
                 }
               }
               else
               {
                 $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
               }
             }
             else
             {
               // Sinon erreur sur les dimensions et taille de l'image
               $message = 'Erreur dans les dimensions de l\'image !';
             }
           }
           else
           {
             // Sinon erreur sur le type de l'image
             $message = 'Le fichier à uploader n\'est pas une image !';
           }
         }
         else
         {
           // Sinon on affiche une erreur pour l'extension
           $message = 'L\'extension du fichier est incorrecte !';
         }
       }
       else
       {
         // Sinon on affiche une erreur pour le champ vide
         $message = 'Veuillez remplir le formulaire svp !';
       }
     
     
  

    if(empty($erreurs)) {
        $requete = $base->prepare('INSERT INTO article SET titre = :titre, contenu = :contenu, auteur = :auteur, jour = NOW(), imge = :imge');
        $requete->execute(array(
            ':titre' => $_POST['titre'], 
            ':contenu' => $_POST['contenu'], 
            ':auteur' => $_POST['auteur'],
            ':imge' => $nomImage,
          ));
    }

?>

<h1 class="typo" align="center">Nouveaux articles</h1>
<?php if(isset($_SESSION['auth'])): ?>
<h2 class="typo" align="center">Bonjour <?php echo $_SESSION['auth']['pseudo'] ?> !</h2>
<?php endif; ?>

<div class="container">
<form class="admin-form" method="POST" enctype="multipart/form-data">
<div class="admin156"></div>
<input class="admin156748942"  type="text" name="titre" placeholder="Tapez votre titre.">
            <input class="admin156748942"  type="text" name="auteur" placeholder="Tapez votre nom.">
            <textarea class="admin156748942"  name="contenu" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>

            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            <input id="fichier" class="admin156748942" name="imge" type="file" name="nom" />
            <input class="admin156748942 mt-3"  type="submit" value="Insérer">
        </form> 

        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
<?php
// SELECTION DANS BD

$requete = $base->prepare('SELECT * FROM article');
$requete->execute();

?>
</div>

<br>

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