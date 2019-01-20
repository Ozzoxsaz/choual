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
 ?>
   <h1 class="typo" align="center" id="elem">Eléments <img class="imgmode" src="./img/elements.jpg"></h1>
   

<table class="table">
  <thead class="thead-light">
    <tr class="typo">
      <th scope="col" align="center">Elements</th>
      <th scope="col">Feu -Intelligence <img class="imgtab" src="./img/element_feu.png"></th>
      <th scope="col">Eau - Chance <img class="imgtab" src="./img/element_eau.png"></th>
      <th scope="col">Air - Agilité <img class="imgtab" src="./img/element_air.png"></th>
      <th scope="col">Terre - Force <img class="imgtab" src="./img/element_terre.png"></th>
      <th scope="col">Sagesse <img class="imgtab" src="./img/sagesse.png"></th>
    </tr>
  </thead>
  <tbody>
    <tr class="typo">
      <th scope="row">Effet</th>
      <td>Augmente les dégats élémentaires feu et les soins occasionnés.</td>
      <td>Augmente les dégats élémentaires eau et la prospection(drop).</td>
      <td>Augmente les dégats élémentaires air , le tacle et la fuite.</td>
      <td>Augmente les dégats élémentaires terre, le pods.</td>
      <td>Augmente les retraits PA et PM, augmente aussi l'xp gagné.</td>
    </tr>
  </tbody>
</table>
<div class="container">
<h1 class="typo" align="center"><img class="imgmode"   src="./img/illu_block_jeux_en_ligne.webp"> Mode de jeu </h1>

<p class="typo"> Ce jeu gratuit en ligne propose des combats tactiques au tour par tour.
Lancez des sorts grâce aux points d'action (PA) et remportez des points d'expérience (XP) pour monter de niveau.
Des milliers d'équipements et d'objets à optimiser via l'artisanat,
le craft et la forgemagie permettent de customiser votre héros à l'infini.
 
 Dans ce RPG en ligne, vous pouvez vendre et acheter des ressources grâce à la monnaie du jeu,
 les "kamas" et exercer de multiples métiers (paysan, chasseur, boulanger, forgeron...).
 Donjons, chasses aux trésors, monstres, boss, familiers, compagnons et
 mode joueur contre joueur (JcJ / PvP) vous attendent dans ce jeu stratégie en ligne.</p>

 <h1 class="typo" align="center">Les différents gameplay <img class="imgmode" src="./img/symbol_roublard.png"></h1>

  <div class="row">
    <div class="col-sm">
   

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_xelor.png" alt="Card image cap">
  <div class="card-body">

  <h5 class="card-title">Xelor</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Entrave/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_sacrieur.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Sacrieur</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Tank/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_pandawa.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Pandawa</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Tank/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>





<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_cra.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Crâ</h5>
  <h6 class="card-subtitle mb-2 text-muted">Entrave/Améliorations/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>





<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_feca.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Féca</h5>
  <h6 class="card-subtitle mb-2 text-muted">Protection/Tank/Entrave</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>



<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_ouginak.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Ouginak</h5>
  <h6 class="card-subtitle mb-2 text-muted">Tank/Entrave/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>



    </div>
    <div class="col-sm">
   

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_osamodas.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Osamodas</h5>
  <h6 class="card-subtitle mb-2 text-muted">Invocation/Améliorations/Soins</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_zobal.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Zobal</h5>
  <h6 class="card-subtitle mb-2 text-muted">Tank/Protection/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_ecaflip.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Ecaflip</h5>
  <h6 class="card-subtitle mb-2 text-muted">Soins/Améliorations/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_sadida.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Sadida</h5>
  <h6 class="card-subtitle mb-2 text-muted">Invocation/Entrave/Soins</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_eliotrope.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Eliotrope</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Soins/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_huppermage.png" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">Huppermage</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Améliorations/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>








    </div>
    <div class="col-sm">
   
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_steamer.png" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">Steamer</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Dégâts/Soins</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>
 


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_eniripsa.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Eniripsa</h5>
  <h6 class="card-subtitle mb-2 text-muted">Soins/Améliorations/Entrave</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
</p>


  </div>
</div>



<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_iop.png" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">Iop</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Améliorations/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_enutrof.png" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">Enutrof</h5>
  <h6 class="card-subtitle mb-2 text-muted">Entrave/Invocations/Améliorations</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>
  


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_sram.png" alt="Card image cap">
  <div class="card-body">
    
  <h5 class="card-title">Sram</h5>
  
  <h6 class="card-subtitle mb-2 text-muted">Placement/Entrave/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
<img class="elementclass" src="./img/element_terre.png" alt="Card image cap">
</p>


  </div>
</div>



<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/symbol_roublard.png" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">Roublard</h5>
  <h6 class="card-subtitle mb-2 text-muted">Placement/Entrave/Dégâts</h6>
    <p class="card-text">

    <p>Soins:</p>
<div class="progress">
  <p></p>
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Protection:</p>
<div class="progress">
<p></p>
  <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
 
</div>
<p>Placement:</p>
<div class="progress">

<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>
<p>Dégâts:</p>
<div class="progress">

  <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
  
</div>

<img class="elementclass"  src="./img/element_eau.png" alt="Card image cap">
<img class="elementclass" src="./img/element_feu.png" alt="Card image cap">
<img class="elementclass" src="./img/element_air.png" alt="Card image cap">
</p>


  </div>
</div>







    </div>
  <img class="skin_class"   src="./img/dofus_class_by_ligadelegiones-da8u184.jpg">
  </div>
</div>




<?php require 'php/footer.php'; ?>