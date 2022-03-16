<?php
include_once "famille.php";
include_once "bd.inc.php";

class familleDAO{
    public static function creefamille(){
        $resultat = array();

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from famille");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]=new famille($ligne["id"], $ligne["libelle"]);
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }
}