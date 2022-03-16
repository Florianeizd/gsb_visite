<?php

class medicament{
    private $id;
    private $nomCommercial; 
    private $idFamille;
    private $composition;
    private $effets;
    private $contreIndications;

    public function __construct($idmedicament, $unnomCommercial, $unidFamille, $unecomposition, $deseffets, $descontreIndications){
        $this->id=$idmedicament;
        $this->nomCommercial=$unnomCommercial;
        $this->idFamille=$unidFamille;
        $this->composition=$unecomposition;
        $this->effets=$deseffets;
        $this->contreIndications=$descontreIndications;
    }
    public function getnomCommercial(){
        return $this->nomCommercial;
    }
    public function getidFamille(){
        return $this->idFamille;
    }
    public function getcomposition(){
        return $this->composition;
    }
    public function geteffets(){
        return $this->effets;
    }
    public function getcontreIndications(){
        return $this->contreIndications;
    }
}