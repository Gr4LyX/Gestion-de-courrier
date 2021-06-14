<?php

namespace Valarep\model;

use Valarep\model\Dao;
use PDO;

class Courrier{
    public $id;
    public $objet;
    public $commentaire;
    public $mail_dest;
    public $num_expediteur;
    
    public static function insertCourrierArrive(){
        $dbh = dao::openDatabase();
        $query = "INSERT INTO `courrier`(`objet`,`commentaire`,`adresse_dest`,`num_expediteur`) VALUES (:objet, :commentaire, :mail_dest, :num_expediteur);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":objet",$objet);
        $sth->bindParam(":commentaire",$commentaire);
        $sth->bindParam(":mail_dest",$mail_dest);
        $sth->bindParam(":num_expediteur",$num_expediteur);
        $sth->execute();
        dao::closeDatabase();
    }

    public static function getAll(){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `courrier`;";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Valarep\\model\\Courrier");
        $items = $sth->fetchAll();
        Dao::closeDatabase();
        return $items;
    }

}

class courrier_arrive extends Courrier{
    public $id;
    public $Date_Reception;
    public $objet;
    public $expediteur;
    public $num_expediteur;
    public $mode_reception;
}

class courrier_depart extends Courrier{
    public $id;
    public $Date_Envoi;
    public $expediteur;
    public $num_expediteur;
    public $destinataire;
    public $mode_envoi;
}