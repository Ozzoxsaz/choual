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


<h1 class="typo" align="center">Classes</h1>

<div class="container">
  <div class="row">
    <div class="col-sm">


    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/ecaflip.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Ecafilp</h5>
    <h6 class="card-subtitle mb-2 text-muted">Combattant Imprévisible</h6>
    <p class="card-text">Les Ecaflips sont des guerriers joueurs qui se fourrent dans
    les endroits où l'on peut gagner gros, et perdre beaucoup...
    Un Ecaflip bien dans sa peau parie sans arrêt, pour tout et pour rien.
    Mais attention, il prend le jeu très au sérieux et ira même jusqu'à risquer sa vie
    sur un jet de dés pour tenter de remporter la mise...</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/6-ecaflip" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>



<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/Cra.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Crâ</h5>
    <h6 class="card-subtitle mb-2 text-muted">Archer</h6>
    <p class="card-text">Les Crâs sont des archers aussi fiers que précis ! Ils font des alliés précieux contre les adeptes de la mêlée franche.

Restant à distance, décochant leurs traits empennés dans le moindre orifice laissé sans surveillance, ils ne laissent aucun répit à leurs adversaires !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/9-cra" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/sadida.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Sadida</h5>
    <h6 class="card-subtitle mb-2 text-muted">Sorcier Sylvestre</h6>
    <p class="card-text">Les Sadidas sont des invocateurs qui empoisonnent la vie de leurs ennemis !

Apprivoiser les ronces pour en faire des armes terrifiantes, confectionner des poupées de guerre et de soins, voilà qui satisfait tout disciple Sadida digne de ce nom.</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/10-sadida" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/sram.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Sram</h5>
    <h6 class="card-subtitle mb-2 text-muted">Assassin</h6>
    <p class="card-text">Les Srams sont des assassins qui aiment les bourses, rebondies de préférence.

Trousser les pans d'une tunique, tâter le fond d'une poche, faire preuve de doigté, palper enfin des bijoux tant convoités avant de poser un piège ou d'asséner un coup mortel, voilà la vie d'un disciple de Sram !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/4-sram" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/pandawa.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Pandawa</h5>
    <h6 class="card-subtitle mb-2 text-muted">Bagarreur Assoiffé</h6>
    <p class="card-text">Les Pandawas sont des guerriers adeptes des arts martiaux qui savent faire des folies de leur corps ! Ils peuvent même en faire avec le corps des autres...

Le Pandawa sait comment soulever les foules, il porte ses alliés sur ses épaules pour mieux les protéger. Quant à ses ennemis, il les enverra valser dans le décor, avant de fêter sa victoire avec une bonne rasade de lait de bambou !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/12-pandawa" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/steamer.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Steamer</h5>
    <h6 class="card-subtitle mb-2 text-muted">Tacticien Technomage</h6>
    <p class="card-text">Les Steamers sont aussi à l'aise sous les eaux que sur le champ de bataille. Harponneurs, gardiens, maîtres des mouvements sur le terrain : ces explorateurs des profondeurs sont changeants comme l'océan.

Leurs tourelles technomagiques bombardent tous ceux qui passent à leur portée, aussi bien les amis que les ennemis. Prenez garde à ne pas finir noyé sous un déluge de technomagie !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/15-steamer" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>




    </div>
    <div class="col-sm">
      


    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/eniripsa.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Eniripsa</h5>
    <h6 class="card-subtitle mb-2 text-muted">Guérisseurs</h6>
    <p class="card-text">Les Eniripsas sont des guérisseurs qui soignent d'un simple mot. Ils utilisent le pouvoir de la parole pour soulager les souffrances de leurs alliés, mais parfois aussi pour blesser leurs ennemis.

Certains Eniripsas sont même devenus de véritables arpenteurs du verbe, des rôdeurs des langues oubliées.</p>
<a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/7-eniripsa" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/feca.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Féca</h5>
    <h6 class="card-subtitle mb-2 text-muted">Protecteurs</h6>
    <p class="card-text">Les Fécas sont de loyaux protecteurs toujours sur la défensive. Ils sont appréciés dans les groupes d'aventuriers pour leurs armures élémentaires et leur capacité à encaisser les coups durs.

Ils sont également maîtres dans l'art des signes magiques : quand il va y avoir du grabuge, les Fécas sortent leurs glyphes !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/1-feca" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/osamodas.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Osamodas</h5>
    <h6 class="card-subtitle mb-2 text-muted">Invocateurs de créatures</h6>
    <p class="card-text">Les Osamodas sont des dompteurs nés ! Ils ont le pouvoir d'invoquer des créatures et sont de remarquables dresseurs. Une rumeur prétend qu'ils taillent leurs vêtements dans la peau de leurs ennemis, mais allez donc leur demander ce qu'il en est...

Si vous êtes de son côté, un Osamodas sera aux petits soins pour vous. Dans le cas contraire, peut-être terminerez-vous votre vie sous la forme d'une botte ou d'un bonnet fourré.</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/2-osamodas" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/xelor.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Xelor</h5>
    <h6 class="card-subtitle mb-2 text-muted">Maître du temps</h6>
    <p class="card-text">Les Xélors sont des mages qui maîtrisent le temps et toutes les mécaniques qui donnent l'heure : carillons, horloges et pendules leur obéissent au doigt et à l'œil.

Les Xélors jouent donc avec le temps pour ralentir un ennemi ou se téléporter où bon leur semble.</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/5-xelor" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/zobal.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Zobal</h5>
    <h6 class="card-subtitle mb-2 text-muted">Guerrier Lunatique</h6>
    <p class="card-text">Ce guerrier aux multiples visages peut s'adapter à toutes les situations. Il tire son pouvoir des masques qu'il porte et peut ainsi changer de techniques de combat.

Qu'il vous tape de loin, qu'il vous maintienne au corps à corps ou qu'il vous cause des dégâts très importants, le Zobal est toujours plein de surprises Et ses adversaires en font bien souvent les frais.</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/14-zobal" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/eliotrope.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Eliotrope</h5>
    <h6 class="card-subtitle mb-2 text-muted">Créateur de portails</h6>
    <p class="card-text">Apparus par accident, les Eliotropes sont des reflets de leur créateur, le Roi-Dieu. Ils se déplacent à la vitesse de l'éclair, disparaissant en un clin d'œil pour réapparaître plus loin. Tout comme les Eliatropes, ils connaissent les secrets du Wakfu</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/16-eliotrope" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>





    </div>
    <div class="col-sm">
     

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/iop.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Iop</h5>
    <h6 class="card-subtitle mb-2 text-muted">Guerrier Téméraire</h6>
    <p class="card-text">Les Iops sont des guerriers fonceurs et sans reproche ! Une chose est sûre : les Iops savent faire parler les armes. D'ailleurs, se retrouver pris dans une bagarre au moins une fois par jour est pour eux un signe de bonne santé.

Leur tempérament impétueux fait des Iops des paladins de l'extrême, capables du meilleur... comme du pire !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/8-iop" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/sacrieurs.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Sacrieur</h5>
    <h6 class="card-subtitle mb-2 text-muted">Berserk</h6>
    <p class="card-text">Les Sacrieurs sont des berserkers qui décuplent leurs forces dès qu'ils sont frappés !

N'ayant pas peur de recevoir des coups, ni de s'exposer aux blessures, ils seront souvent en première ligne, prêts à verser le premier sang ! Le Sacrieur est vraiment le compagnon idéal pour vos longues soirées guerrières...</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/11-sacrieur" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/enutrofs.gif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Enutrofs</h5>
    <h6 class="card-subtitle mb-2 text-muted">Chasseur de Trésors</h6>
    <p class="card-text">Les Enutrofs sont des chasseurs de trésor avides de kamas, qui malgré leur grand âge courent comme des dragodindes à la vue d'un coffre bien rempli.

Ils sont experts dans l'art de ralentir leurs ennemis : ils peuvent ainsi les harceler avant de les assommer à grands coups de pelle le moment venu !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/3-enutrof" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/huppermage.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Huppermage</h5>
    <h6 class="card-subtitle mb-2 text-muted">Mage Elementaire</h6>
    <p class="card-text">Les Huppermages sont capables de combiner le Feu, l'Air, l'Eau et la Terre pour lancer des sortilèges aux multiples effets. Maîtres des runes élémentaires, ils vénèrent la Balance Krosmique, une force mystérieuse qui tend à maintenir l'équilibre dans l'univers.</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/17-huppermage" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/ouginak.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Ouginak</h5>
    <h6 class="card-subtitle mb-2 text-muted">Guerrier Lycan</h6>
    <p class="card-text">Connu des peuples du Monde des Douze comme une divinité cruelle et extrêmement exigeante envers ses disciples, le dieu Ouginak est autant craint que vénéré. Pour certains, le Molosse Noir est un bourreau aussi violent que sadique. Pour d’autres, il est l'incarnation de la ténacité et de la férocité primordiales.

Ce que l'on tait plus volontiers, c'est qu'Ouginak serait le pendant d'Ecaflip : les deux dieux représentant les faces d'une seule et même pièce. Une hérésie selon certains, une abomination pour d'autres. Toujours est-il que les Ouginaks et les Ecaflips s'entendent comme chiens et chats et que cette querelle d'interprétation n'est pas prête de prendre fin.</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/18-ouginak" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/roublard.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Roublard</h5>
    <h6 class="card-subtitle mb-2 text-muted">Expert en Explosifs</h6>
    <p class="card-text">Les Roublards sont des fins stratèges poseurs de bombes ! En tout cas, tout le monde le sait, ils manient la poudre comme personne et quand il s'agit de faire exploser leurs ennemis, ils ne se font pas prier.

Si jamais, en passant par hasard sur un terrain miné, vous apercevez des étincelles, soyez sûr qu'un Roublard n'est pas bien loin !</p>
    <a href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes/13-roublard" class="btn btn-dark">Voir plus de détails</a>
  </div>
</div>




    </div>
  </div>
</div>




</div>




<?php require 'php/footer.php'; ?>