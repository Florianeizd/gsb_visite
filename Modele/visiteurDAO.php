<?php
include_once "visiteur.php";
include_once "bd.inc.php";

class visiteur1DAO{
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
}