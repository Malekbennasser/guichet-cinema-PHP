<?php
echo '<Head><link rel="stylesheet" href="ticket.css"></Head>';
require_once __DIR__."/Ticketclass.php";
require_once __DIR__."/../Ticket.php";

class Theatre extends Ticket {
public $piece;
protected $debut;
protected $entracte;
 

public function __construct($date,$place,$tarif,$piece){
    parent::__construct($date,$place,$tarif);
    $this->piece=$piece;
    $this->setHeure();
    $this->setPause();
}
public function setHeure(){
    $this->debut = date("h:i");
}
public function getHeure(){
    return $this->debut;
}

public function setPause(){
    $this->entracte = date("h:i", strtotime("+1 hours"));
}

public function getPause(){
    return $this->entracte;
}

public function getTheatre(){
    echo '<div class="ticketc">';
    echo parent::getTicket();
   echo '<div class="info">';
    echo "<li>Piece :"." ".$this->piece ."</li>";
    echo "<li>Debut :"." ".$this->getHeure() ."</li>";
    echo "<li>Pause :"." ".$this->getPause() ."</li>";
    echo "</div>";
    echo "</div>";
}

}