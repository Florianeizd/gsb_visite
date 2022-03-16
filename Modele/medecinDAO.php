<?php
include_once "medecin.php";
include_once "bd.inc.php";

class medecinDAO{
    public static function creemedecin(){
        $resultat = array();

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from medecin");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]=new medecin($ligne["id"], $ligne["nom"], $ligne["prenom"], $ligne["adresse"], $ligne["tel"], $ligne["specialitecomplementaire"], $ligne["departement"]);
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getmedecin() {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from medecin order by nom");
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

    public static function searchmedecin($nom) {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from medecin where nom like :nom");
            $req->bindValue(':nom', "%".$nom."%", PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[]=new medecin($ligne["id"], $ligne["nom"], $ligne["prenom"], $ligne["adresse"], $ligne["tel"], $ligne["specialitecomplementaire"], $ligne["departement"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        return $resultat;

        
    }

    public static function creemedecinid($id){

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from medecin where id=:id");
            $req->bindValue(':id', $id , PDO::PARAM_INT);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat=new medecin($ligne["id"], $ligne["nom"], $ligne["prenom"], $ligne["adresse"], $ligne["tel"], $ligne["specialitecomplementaire"], $ligne["departement"]);
                $ligne=$req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function updatemedecin($id, $nom, $prenom, $adresse, $tel, $specialitecomplementaire, $departement){

        try{
            $cnx = connexionPDO();
            $req = $cnx->prepare("update medecin set nom=:nom, prenom=:prenom, adresse=:adresse, tel=:tel, specialitecomplementaire=:specialitecomplementaire, departement=:departement where id=:id");
            $req->bindValue(':id', $id , PDO::PARAM_INT);
            $req->bindValue(':nom', $nom , PDO::PARAM_STR);
            $req->bindValue(':prenom', $prenom , PDO::PARAM_STR);
            $req->bindValue(':adresse', $adresse , PDO::PARAM_STR);
            $req->bindValue(':tel', $tel , PDO::PARAM_STR);
            $req->bindValue(':specialitecomplementaire', $specialitecomplementaire , PDO::PARAM_STR);
            $req->bindValue(':departement', $departement , PDO::PARAM_INT);

            $resultat = $req->execute();
        } catch (PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
        return $resultat;
    }

  
}