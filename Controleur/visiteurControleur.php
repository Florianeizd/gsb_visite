<?php
include_once "./Modele/bd.utilisateur.inc.php";

$ret= visiteurDAO::getvisiteur();

include "./Vue/entete.html.php";
include "./Vue/vuemon_compte.html.php";

?>