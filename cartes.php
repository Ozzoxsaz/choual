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
<h1 class="typo" align="center">Carte</h1>
<p>Cette carte provient de: <a href="https://dofus-map.com/">Dofus Map</a></p>
<iframe id="imap" src="https://dofus-map.com/" frameborder="0"></iframe>


<?php require 'php/footer.php'; ?>