<?php

class visiteur{
    private $id;
    private $nom; 
    private $prenom;
    private $login;
    private $mdp;
    private $adresse;
    private $cp;
    private $ville;
    private $dateEmbauche;
    private $timespan;
    private $ticket;

    public function __construct($idvisiteur, $unnom, $unprenom, $unlogin, $unmdp, $uneadresse, $uncp, $uneville, $unedateEmbauche, $untimespan, $unticket){
        $this->id=$idvisiteur;
        $this->nom=$unnom;
        $this->prenom=$unprenom;
        $this->login=$unlogin;
        $this->mdp=$unmdp;
        $this->adresse=$uneadresse;
        $this->cp=$uncp;
        $this->ville=$uneville;
        $this->dateEmbauche=$unedateEmbauche;
        $this->timespan=$untimespan;
        $this->ticket=$unticket;

    }
    public function getnom(){
        return $this->nom;
    }
    public function getprenom(){
        return $this->prenom;
    }
    public function getlogin(){
        return $this->login;
    }
    public function getmdp(){
        return $this->mdp;
    }
    public function getadresse(){
        return $this->adresse;
    }
    public function getcp(){
        return $this->cp;
    }public function getville(){
        return $this->ville;
    }
    public function getdateEmbauche(){
        return $this->dateEmbauche;
    }
    public function gettimespan(){
        return $this->timespan;
    }
    public function getticket(){
        return $this->ticket;
    }

}