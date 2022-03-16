<?php

function controleurPrincipal($action) {
    $lesActions = array();

    //connexion 
    $lesActions["defaut"] = "monProfilControleur.php";
    $lesActions["visiteur"] = "visiteurControleur.php";
    $lesActions["mon_compte"] = "mon_compteControleur.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "monProfil.php";

    //rapports
    $lesActions["rapports"] = "rapportController.php";

    //medecins
    $lesActions["medecins"] = "medecinController.php";

    //medicaments
    $lesActions["medicament"] = "medicament.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>