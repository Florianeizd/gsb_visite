<?php

include_once "bd.inc.php";
include_once "visiteur.php";
include_once "./Modele/authentification.inc.php";

class visiteurDAO{
    public static function creevisiteur(){
        $resultat = array();

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from visiteur");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]=new visiteur($ligne["id"], $ligne["nom"], $ligne["prenom"], $ligne["login"], $ligne["mdp"], $ligne["adresse"], $ligne["cp"], $ligne["ville"], $ligne["dateEmbauche"], $ligne["timespan"], $ligne["ticket"]);
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getvisiteur() {

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from visiteur");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }   

    public static function getUtilisateurBylogin($login) {

        try {
            $cnx =connexionPDO();
            $req = $cnx->prepare("select * from visiteur where login=:login");
            $req->bindValue(':login', $login, PDO::PARAM_STR);
            $req->execute();
        
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        

        return $resultat;
    }

    public static function getloginloggedOn($login) {
        if (authentificationDAO::isLoggedOn()){
            $ret = $_SESSION["login"];
        }
        else {
            $ret = "";
        }
        return $ret;

    }



    public static function getmdploggedOn($mdp) {
        if (authentificationDAO::isLoggedOn()){
            $ret = $_SESSION["mdp"];
        }
        else {
            $ret = "";
        }
        return $ret;

    }



    public static function addrapport($date, $motif, $bilan, $idVisiteur, $idMedecin) {
        try {
            
            $cnx = connexionPDO();

            $req = $cnx->prepare("insert into rapport (date, motif, bilan, idVisiteur, idMedecin) values(:date,:motif,:bilan,:idVisiteur,:idMedecin)");
            
            

            $req->bindValue(':date', $date, PDO::PARAM_STR); //Associe une valeur à un paramètre
            $req->bindValue(':motif', $motif, PDO::PARAM_STR);
            $req->bindValue(':bilan', $bilan, PDO::PARAM_STR);
            $req->bindValue(':idVisiteur', $idVisiteur, PDO::PARAM_STR);
            $req->bindValue(':idMedecin', $idMedecin, PDO::PARAM_STR);
        
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

   
    public static function modifiervisiteur($login, $mdp){
        try {
            $cnx = connexionPDO();

            $req = $cnx->prepare("update visiteur set login=:login where mdp=:mdp");
            $req->bindValue(':login', $login, PDO::PARAM_STR);
            $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;

    }
    

}
