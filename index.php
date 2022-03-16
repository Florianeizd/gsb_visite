<?php

include_once "controleur/controleurPrincipal.php";
include_once "modele/authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()*/
include_once "modele/bd.inc.php";

if (isset($_GET["action"])) { 
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include "controleur/$fichier";


?>
   