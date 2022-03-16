<?php

include_once "./Modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["login"]) && isset($_POST["mdp"])){
    $login=$_POST["login"];
    $mdp=$_POST["mdp"]; 
}
else
{

    $login="";
    $mdp="";    

}


if($login != "" && $mdp !=""){
    authentificationDAO::login($login, $mdp);
}
   
if(authentificationDAO::isLoggedOn()){
    
    include "./Controleur/monProfil.php";
}else{
  
    include "./Vue/entete.html.php";
    include "./Vue/vuemon_compte.html.php";
}


?>