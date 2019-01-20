<?php 

$monhost="localhost";
$madb="aifor_jdr";
$user="root";
$password="";

try {
    $base= new PDO("mysql:host=$monhost;dbname=$madb",$user,$password);
}
catch(Exception $e) {
    die("Erreur :" . $e->getMessage());
}

?>