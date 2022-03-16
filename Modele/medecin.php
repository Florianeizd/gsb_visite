<?php

class medecin{
    private $id;
    private $nom; 
    private $prenom;
    private $adresse;
    private $tel;
    private $specialitecomplementaire;
    private $departement;

    public function __construct($idmedecin, $unnom, $unprenom, $uneadresse, $untel, $unespecialite, $undepartement){
        $this->id=$idmedecin;
        $this->nom=$unnom;
        $this->prenom=$unprenom;
        $this->adresse=$uneadresse;
        $this->tel=$untel;
        $this->specialitecomplementaire=$unespecialite;
        $this->departement=$undepartement;
    }
    public function getId(){
        return $this->id;
    }
    public function getnom(){
        return $this->nom;
    }
    public function getprenom(){
        return $this->prenom;
    }
    public function getadresse(){
        return $this->adresse;
    }
    public function gettel(){
        return $this->tel;
    }
    public function getspecialitecomplementaire(){
        return $this->specialitecomplementaire;
    }
    public function getdepartement(){
        return $this->departement;
    }
    
}