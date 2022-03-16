<?php
include_once "./Modele/authentification.inc.php";
include_once "./Modele/bd.utilisateur.inc.php";
include_once "./Modele/medecinDAO.php";
include_once "./Modele/medecin.php";
include_once "./Modele/rapportDAO.php";
include_once "./Modele/rapport.php";


$type = $_GET["type"];

if($type == "medecin"){
   
    $ret = medecinDAO::creemedecin();
    $lemedecin= array();
    
    include "./Vue/entete.html.php";
    include "./Vue/vuemedecin.html.php";
}
elseif($type == "enrmodmedecin"){
    if (isset($_POST["id"]) && isset($_POST["nom"])&& isset($_POST["prenom"])&& isset($_POST["adresse"])&& isset($_POST["tel"])&& isset($_POST["specialitecomplementaire"]) && isset($_POST["departement"])) {
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $tel = $_POST["tel"];
        $specialitecomplementaire = $_POST["specialitecomplementaire"];
        $departement = $_POST["departement"];
        $update = medecinDAO::updatemedecin($id, $nom, $prenom, $adresse, $tel, $specialitecomplementaire, $departement);
        include "./Vue/entete.html.php";
        include "./Vue/vueconfir.html.php";
    
    }
}
elseif($type == "modifiermedecin"){
        
    if (isset($_GET["idMedecin"])) {
        $id = $_GET["idMedecin"];
        

    }

    $ret = medecinDAO::creemedecinid($id);
    $lemedecin= array();

    include "./Vue/entete.html.php";
    include "./Vue/vuemodifiermedecin.php";
}
elseif($type == "SearchMedecin"){
            
    if (isset($_POST["nom"])){
        $nom=$_POST["nom"];
        $lemedecin = medecinDAO::searchmedecin($nom);
    }
    $lemedecin = medecinDAO::searchmedecin($nom);
    $ret= array();

    include "./Vue/entete.html.php";
    include "./Vue/vuemedecin.html.php";
}


