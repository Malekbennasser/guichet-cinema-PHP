<?php  
echo '<Head><link rel="stylesheet" href="ticketcine.css"></Head>';
require_once __DIR__."/../Ticket.php";

 class Ticket {
protected $id;
protected $date;
protected  $place;
protected string $tarif;


public function __construct ($date,$place,$tarif) {

$this->setId();
$this->date=$date;
$this->place=$place;
$this->tarif=$tarif;

}
public function setId(){

    $this->id= date('y-m')."-".rand( 10, 99);
  
}

public function getId(){
    return $this->id;
}
public function getTicket(){

   
echo'<div class="idtk">';
    echo "<li>Id :"." ".$this->getId()."</li>";
    echo "<li> Date :"." ".$this->date."</li>";
    echo "<li> Place :"." ".$this->place."</li>";
    echo "<li> Tarif :"." ".$this->tarif."</li>";
echo '</div>';

}

 }








?>