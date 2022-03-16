<?php

include_once "bd.inc.php";

class famille{
    private $id;
    private $libelle;


    public function __construct($idfamille, $unlibelle){
        $this->id=$idfamille;
        $this->libelle=$unlibelle;
 
    }
    public function getlibelle(){
        return $this->libelle;
    }
   
}