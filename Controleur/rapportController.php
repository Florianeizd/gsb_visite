<?php
include_once "./Modele/authentification.inc.php";
include_once "./Modele/bd.utilisateur.inc.php";
include_once "./Modele/rapportDAO.php";
include_once "./Modele/rapport.php";
include_once "./Modele/medicamentDAO.php";
include_once "./Modele/visiteurDAO.php";
include_once './Modele/medecin.php';
include_once './Modele/medecinDAO.php';

$type = $_GET["type"];

if($type == "rapport"){
    $ret = rapportDAO::creerapport();

    include "./Vue/entete.html.php";
    include "./Vue/vuerapport.html.php";
}
elseif($type == "creerapport"){ 
    $listeMedecins=medecinDAO::getmedecin();
    $inscrit = false;
    // recuperation des donnees GET, POST, et SESSION

    $id=authentificationDAO::getidLoggedOn();

    if (isset($_POST["date"]) && isset($_POST["motif"]) && isset($_POST["bilan"]) && isset($_POST["idMedecin"]) && $id !=""  ) {
    
            $date = $_POST["date"];
            $motif = $_POST["motif"];
            $bilan = $_POST["bilan"];
            $idVisiteur = $_SESSION["id"];
            $idMedecin = $_POST["idMedecin"];

            // enregistrement des donnees
            
            $ret = visiteurDAO::addrapport( $date, $motif,$bilan, $idVisiteur, $idMedecin);
            if ($ret) {
                $inscrit = true;
            } else {
                $msg = "le rapport n'a pas été enregistré.";
            }
        }else {
        $msg="Renseigner tous les champs...";    
        }



        if ($inscrit) {
            // appel du script de vue qui permet de gerer l'affichage des donnees
            $titre = "Rapport confirmée";
            include "./Vue/entete.html.php";
            include "./Vue/nombremed.html.php";
            
        } else {
            // appel du script de vue qui permet de gerer l'affichage des donnees
            $titre = "Rapport pb";
            include "./Vue/entete.html.php";
            include "./Vue/vuecreerapport.html.php";
        
        }
}

elseif($type == "CreeRapportMed"){      
    $medErr="";
    $listrentrermedicament=array();
    $listrentrerquantite=array();
    if (isset($_POST["nbMed"])){
        $nbMed=$_POST["nbMed"];
        $nbMed=intval($nbMed); //Retourne la valeur numérique entière équivalente d'une variable
        $listeMedicaments=medicamentDAO::listemedicament();
        for($i=0; $i < $nbMed; $i++){
            if (isset($_POST["medicament".$i]) && isset($_POST["quantite".$i])){
                array_push($listrentrermedicament,$_POST["medicament".$i]); //Empile un ou plusieurs éléments à la fin d'un tableau
                array_push($listrentrerquantite,$_POST["quantite".$i]);
            }
            else{
                $medErr="Tout les medicaments ne sont pas entrés";
            }
        }

        if ($medErr==""){
            $rapport=rapportDAO::getDernierRapport();
            for($i=0;$i<count($listrentrermedicament);$i++){
                medicamentDAO::addMedicament($rapport, $listrentrermedicament[$i], $listrentrerquantite[$i]);
            }
            include './Vue/entete.html.php';
            include './Vue/vueConfirmationrapport.php';
        }else{
            include './Vue/entete.html.php';
            include './Vue/ajoutermed.html.php';
        }
    }else{
        include './Vue/entete.html.php';
        include './Vue/ajoutermed.html.php';
    }
}
elseif($type == "rapportmedecin"){
    
    if (isset($_GET["idMedecin"])){
        $idMedecin = $_GET["idMedecin"];
        $ret=rapportDAO::getrapportmedecin($idMedecin);

        include "./Vue/entete.html.php";
        include "./Vue/rapportmedecin.html.php";
    }
}
elseif($type == "SearchRapport"){
        
    if (isset($_POST["date"])){
        $date=$_POST["date"];
        $lesrapports = rapportDAO::searchrapport($date);
    }
    $lesrapports = rapportDAO::searchrapport($date);
    $ret= array();

    include "./Vue/entete.html.php";
    include "./Vue/vuelisterapports.html.php";
}
elseif($type == "enrmodrapport"){
    if (isset($_POST["id"]) && isset($_POST["date"])&& isset($_POST["motif"])&& isset($_POST["bilan"])&& isset($_POST["idVisiteur"])&& isset($_POST["idMedecin"])) {
        $id = $_POST["id"];
        $date = $_POST["date"];
        $motif = $_POST["motif"];
        $bilan = $_POST["bilan"];
        $idVisiteur = $_POST["idVisiteur"];
        $idMedecin = $_POST["idMedecin"];
        $update = rapportDAO::updaterapport($id, $date, $motif, $bilan, $idVisiteur, $idMedecin);
        include "./Vue/entete.html.php";
        include "./Vue/vueconfir.html.php";
    
    }
}
elseif($type == "listerapports"){
    $ret = rapportDAO::creerapport();
    $lesrapports= array();

    include "./Vue/entete.html.php";
    include "./Vue/vuelisterapports.html.php";
}
elseif($type == "modifierrapport"){
    
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        

    }
    $ret = rapportDAO::creerapportid($id);
    $lemedecin= array();
    include "./Vue/entete.html.php";
    include "./Vue/vuemodifierrapport.html.php";
}



?>