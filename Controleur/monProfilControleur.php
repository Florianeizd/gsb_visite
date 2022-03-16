<?php
include_once "./Modele/bd.utilisateur.inc.php";
include_once "./Modele/authentification.inc.php";


$ret = visiteurDAO::creevisiteur();


include "./Vue/vuemon_compte.html.php";
