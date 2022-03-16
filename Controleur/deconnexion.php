<?php

include_once "./Modele/authentification.inc.php";


authentificationDAO::logout();

                

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";


include "./Vue/vuemon_compte.html.php";



?>