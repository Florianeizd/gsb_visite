<?php
include_once "rapport.php";
include_once "bd.inc.php";

class rapportDAO{
    public static function creerapport(){
        $resultat = array();

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from rapport");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]=new rapport($ligne["id"], $ligne["date"], $ligne["motif"], $ligne["bilan"], $ligne["idVisiteur"], $ligne["idMedecin"]);
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getrapportmedecin($idMedecin){
        $resultat = array();

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from rapport where idMedecin=:idMedecin");
            $req->bindValue(':idMedecin', $idMedecin, PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]= $ligne;
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getDernierRapport(){
    
        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select id from rapport where id=(select max(id)from rapport)");
            $req->execute();
            $req=$req->fetch();

        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $req["id"];
    }

    public static function searchrapport($date) {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from rapport where date like :date");
            $req->bindValue(':date', "%".$date."%", PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]=new rapport($ligne["id"], $ligne["date"], $ligne["motif"], $ligne["bilan"], $ligne["idVisiteur"], $ligne["idMedecin"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        return $resultat;

        
    }

    public static function creerapportid($id){

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from rapport where id=:id");
            $req->bindValue(':id', $id , PDO::PARAM_INT);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat=new rapport($ligne["id"], $ligne["date"], $ligne["motif"], $ligne["bilan"], $ligne["idVisiteur"], $ligne["idMedecin"]);
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function updaterapport($id, $date, $motif, $bilan, $idVisiteur, $idMedecin){

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("update rapport set date=:date, motif=:motif, bilan=:bilan, idVisiteur=:idVisiteur, idMedecin=:idMedecin where id=:id");
            $req->bindValue(':id', $id , PDO::PARAM_INT);
            $req->bindValue(':date', $date , PDO::PARAM_STR);
            $req->bindValue(':motif', $motif , PDO::PARAM_STR);
            $req->bindValue(':bilan', $bilan , PDO::PARAM_STR);
            $req->bindValue(':idVisiteur', $idVisiteur , PDO::PARAM_STR);
            $req->bindValue(':idMedecin', $idMedecin , PDO::PARAM_INT);

            $resultat = $req->execute();
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }
}
