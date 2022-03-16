<?php

include_once "./Modele/authentification.inc.php";
include_once "./Modele/bd.utilisateur.inc.php";




// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


    // appel du script de vue qui permet de gerer l'affichage des donnees

    include "./Vue/entete.html.php";
    include "./Vue/vueMonProfil.php";


?>