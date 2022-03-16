<?php
include_once "./Modele/authentification.inc.php";
include_once "./Modele/bd.utilisateur.inc.php";
include_once "./Modele/medicamentDAO.php";
include_once "./Modele/medicament.php";


$ret = medicamentDAO::creemedicament();
$lesmedicaments= array();

include "./Vue/entete.html.php";
include "./Vue/vuemedicament.html.php";