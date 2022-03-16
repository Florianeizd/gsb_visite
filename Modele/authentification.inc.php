<?php

include_once "bd.utilisateur.inc.php";

class authentificationDAO{

    public static function login($login, $mdp) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $util= visiteurDAO::getUtilisateurBylogin($login);
        $mdpBD = $util["mdp"];
        if ($mdpBD == $mdp) {
            $_SESSION["login"] = $login;
            $_SESSION["mdp"] = $mdpBD;
            $_SESSION["id"] = $util["id"];
            $_SESSION["nom"] = $util ["nom"];
            $_SESSION["prenom"] = $util ["prenom"];
            $_SESSION["adresse"] = $util ["adresse"];
            
        }else{
            echo "L'identifiant ou mot de passe est incorrect";
        }
    }


    static public function logout() {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["login"]); //Détruit une variable
        unset($_SESSION["mdp"]);
    }

    static public function getloginLoggedOn(){
        if (authentificationDAO::isLoggedOn()){
            $ret = $_SESSION["login"];
        }
        else {
            $ret = "";
        }
        return $ret;
            
    }
    static public function getidLoggedOn(){
        if (authentificationDAO::isLoggedOn()){
            
            $ret = $_SESSION["id"];
        }
        else {
            $ret = "";
            
        }
        return $ret;
            
    }

    static public function isLoggedOn() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $ret = false;

        // $_SESSION["login"]=$_REQUEST["login"];
        // $_SESSION["mdp"]=$_REQUEST["mdp"];

        

        if (isset($_SESSION["login"])) {
            $util = visiteurDAO::getUtilisateurBylogin($_SESSION["login"]);
            
            if ($util["login"] == $_SESSION["login"] && $util["mdp"] == $_SESSION["mdp"]) {
                $ret = true;
                $_SESSION["id"]=$util["id"];
            }
        }
        return $ret;
    }
    
}
?>