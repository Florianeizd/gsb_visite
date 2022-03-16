<?php
include_once "offrir.php";
include_once "bd.inc.php";

class offrirDAO{
    public static function creeoffrir(){
        $resultat = array();

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from offrir");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]=new offrir($ligne["idRapport"], $ligne["idMedicament"], $ligne["quantite"]);
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }
}