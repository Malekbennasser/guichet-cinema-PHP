<?php
require_once __DIR__."/Ticketclass.php";
require_once __DIR__."/../Ticket.php";
echo '<Head><link rel="stylesheet" href="ticket.css"></Head>';
class Cine extends Ticket {

protected string $film;
protected int $age;
protected $salle;
protected $hseance;

public function __construct ($date,$place,$tarif,$film,$salle){
    parent::__construct($date,$place,$tarif);
    $this->film=$film;
    $this->setAge();
    $this->salle=$salle;
    $this->setHseance();


}
public function setAge (){
    if($this->film==="film1"|| $this ->film ==="film3"){
        $this->age = "+18";
    }else if($this->film ==="film2"|| $this ->film ==="film4" ){

        $this->age = "+10";

    }

}

public function getAge(){
    
        return  $this->age;
    
}

public function setHseance(){
    $this->hseance = date("h:i");
}
public function getHseance(){
    return $this->hseance;
}


public function getCine(){

    echo '<div class="ticketc">';
   echo parent::getTicket();
   echo  '<div class="info">';
   echo "<li>Film :"." ".$this->film ."</li>";
    echo "<li>Age Min :"." ".$this->getAge() ."</li>"; 
   echo "<li>Salle :"." ". $this->salle ."</li>";
   echo "<li>Seance :"." ".$this->getHseance()."</li>";
   echo "</div>";
   echo "</div>";
}


}