<?php

include_once "bd.inc.php";

class offrir{
    private $idRapport;
    private $idMedicament;
    private $quantite;


    public function __construct($unidRapport, $unidMedicament, $unequantite){
        $this->idRapport=$unidRapport;
        $this->idMedicament=$unidMedicament;
        $this->quantite=$unequantite;
 
    }
    public function getidRapport(){
        return $this->idRapport;
    }
    public function getidMedicament(){
        return $this->idMedicament;
    }
    public function getquantite(){
        return $this->quantite;
    }
   
}