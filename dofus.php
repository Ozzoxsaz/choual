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


<div class="container">
  <div class="row">
    <div class="col-sm">
      
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dofus_emeraude.webp" id="imgeme" alt="Card image cap">
  <h5 class="card-title">Dofus Emeraude</h5>
  <div class="card-body">
    <p class="card-text">
    Description:<br> Plus vert qu’un Tofu malade, le Dofus Émeraude fut créé par Aerafal, le Dragon de l’Air. Pour créer quelque chose d’aussi vert, il devait avoir le mal de l’air. Un comble, non ?<br>
    <br>  Effet: <br> 200PV. À la fin du tour, confère 100% du niveau du lanceur en points de bouclier pour chaque ennemi au contact. Les invocations ne sont pas comptabilisées.
     </p>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dofusabyssal.png" id="imgaby" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br> Selon des sources officielles, ce Dofus à l'aspect inhabituel serait une création des Steamers de Sufokia : on peut donc en conclure qu'il ne s'agit pas d'un véritable œuf de dragon. Enfin, c'est ce que les autorités veulent nous faire croire… car qui sait réellement ce qui se cache dans les abysses ?<br>
    <br>  Effet: <br> 40 Résistances Neutre/Terre/Air/Eau/Feu. A la fin du tour, les dommages de la prochaine subie sont réduit de 50%. </p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dofusivoire_1_orig.png" id="imgivo" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br> Cet objet n'est pas encore assez connu des artisans pour que ses caractéristiques puissent être révélées aux éventuels acheteurs.<br>
    <br>  Effet: <br>À chaque début de tour, si aucun ennemi n'est au contact, donne 1 PM. Sinon, donne 1 PA.</p>
  </div>
</div>

    </div>
    <div class="col-sm">
    
    
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/ebene.png" id="imgebe" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br> Selon des sources officielles, ce Dofus à l'aspect inhabituel serait une création des Steamers de Sufokia : on peut donc en conclure qu'il ne s'agit pas d'un véritable œuf de dragon. Enfin, c'est ce que les autorités veulent nous faire croire… car qui sait réellement ce qui se cache dans les abysses ?<br>
    <br>Effet: <br>40 Tacle et Fuite. A chaque début de tour, le lanceur gagne automatiquement une charge. Il peut gagner une seconde charge en infligeant des dommages en mêlée, une fois maximum par tour, ainsi qu'une troisième charge en infligeant des dommages à distance, une fois maximum par tour également. Une fois les cinq charges atteintes, la prochaine attaque du lanceur appliquera un poison au début de tour de l'élément d'attaque sur la cible pendant 3 tours, puis les charges disparaissent. Chaque charge accorde un bonus de 2% de dommages finaux au lanceur.</p>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dofus_turquoise.jpg" id="imgtur" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br> Selon des sources officielles, ce Dofus à l'aspect inhabituel serait une création des Steamers de Sufokia : on peut donc en conclure qu'il ne s'agit pas d'un véritable œuf de dragon. Enfin, c'est ce que les autorités veulent nous faire croire… car qui sait réellement ce qui se cache dans les abysses ?<br>
    <br>  Effet: <br>À chaque début de tour, si aucun ennemi n'est au contact, donne 1 PM. Sinon, donne 1 PA.</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dofus-forgelave_orig.png" id="imgfor" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br> Malgré son aspect quelque peu insolite, ce Dofus est un authentique œuf de dragon : ce serait donc dommage de le mettre au clou. Il vous réchauffera durant les longues soirées d'hiver et vous permettra d'organiser des barbecues en été. Évitez tout de même de passer trop près des meules de foin ou des fagots de bois sec, sinon vous risquez d'être pris pour un dangereux pyromane.<br>
    <br>  Effet: <br>60 Résistance de poussée. Ajoute 150 points de bouclier si le lanceur est déplacé via une poussée, une attirance, un échange de position ou porté par un Pandawa. Seuls les ennemis peuvent déclencher cet effet.</p>
  </div>
</div>

    </div>
    <div class="col-sm">
      
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dpourpre.webp" id="imgpou" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br>C’est le Dragon du Feu Ignemikhal qui créa le Dofus Pourpre, un Œuf dont le moins qu’on puisse dire, c’est qu’il sent le soufre - mais il sent bien d’autres choses encore…<br>
    <br>  Effet: <br>80 Puissance
Pour chaque attaque à distance reçue, les dommages finaux occasionnés sont augmentés de 1% pendant 1 tour. Les effets peuvent se cumuler 10 fois.</p>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dofus_nebuleux.webp" id="imgneb" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br> Selon des sources officielles, ce Dofus à l'aspect inhabituel serait une création des Steamers de Sufokia : on peut donc en conclure qu'il ne s'agit pas d'un véritable œuf de dragon. Enfin, c'est ce que les autorités veulent nous faire croire… car qui sait réellement ce qui se cache dans les abysses ?<br>
    <br>  Effet: <br>À chaque début de tour, si aucun ennemi n'est au contact, donne 1 PM. Sinon, donne 1 PA.</p>
  </div>
</div>



<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/dofusocre.png" id="imgocr" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    Description:<br> Créé par Terrakourial, le Dragon de la Terre, ce Dofus concentre de grands pouvoirs à ne pas mettre entre toutes les mains… Ni entre tous les pieds d’ailleurs.<br>
    <br>  Effet: <br>1PA. Donne 1 PA si aucune attaque occasionnant des dommages n'a été subie depuis le précédent tour de jeu.</p>
  </div>
</div>

    </div>
  </div>
</div>
<!--  -->




<?php require 'php/footer.php'; ?>