<?php

class rapport{
    private $id;
    private $date; 
    private $motif;
    private $bilan;
    private $idVisiteur;
    private $idMedecin;

    public function __construct($idrapport, $unedate, $unmotif, $unbilan, $unidVisiteur, $unidMedecin){
        $this->id=$idrapport;
        $this->date=$unedate;
        $this->motif=$unmotif;
        $this->bilan=$unbilan;
        $this->idVisiteur=$unidVisiteur;
        $this->idMedecin=$unidMedecin;
    }
    public function getId(){
        return $this->id;
    }
    public function getdate(){
        return $this->date;
    }
    public function getmotif(){
        return $this->motif;
    }
    public function getbilan(){
        return $this->bilan;
    }
    public function getidVisiteur(){
        return $this->idVisiteur;
    }
    public function getidMedecin(){
        return $this->idMedecin;
    }
}