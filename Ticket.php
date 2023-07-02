<?php
//require_once __DIR__."/Ticketclass.php";
require_once __DIR__."/class/Ticketcine.php";
require_once __DIR__."/class/Ticketheatre.php";
echo '<Head><link rel="stylesheet" href="ticket.css"></Head>';


$date = $_POST ["date"];
$place = $_POST ["place"];
$tarif = $_POST ["tarif"];


if(array_key_exists("film", $_POST)=== true){


$film = $_POST ["film"];
$salle = $_POST ["salle"];
$Cine = new Cine ($date,$place,$tarif,$film,$salle);

$Cine->getCine();



}else {
$piece = $_POST ["piece"];

$Theatre = new  Theatre ($date,$place,$tarif,$piece);

$Theatre->getTheatre();

}










?>