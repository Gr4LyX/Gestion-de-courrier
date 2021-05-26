<?php

namespace Valarep\model;

use Valarep\model\Dao;
use PDO;

class User{
    public $id;
    public $mail;
    public $password;
    public $last_name;
    public $first_name;

    public function register(){
        $dbh = Dao::openDatabase();
        $query = "INSERT INTO `utilisateur` (`nom_utilisateur`, `prenom_utilisateur`,`adresse_utilisateur`, `mot_de_passe`,) 
VALUES (:nom_utilisateur, :prenom_utilisateur, :adresse_utilisateur, :mot_de_passe,);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":nom_utilisateur",$this->last_name);
        $sth->bindParam(":prenom_utilisateur", $this->first_name);
        $sth->bindParam(":adresse_utilisateur", $this->mail);
        $sth->bindParam(":mot_de_passe", $this->password);
        $sth->execute();
        Dao::closeDatabase();
    }

    public static function getAll(){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur`;";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Valarep\\model\\User");
        $items = $sth->fetchAll();
        Dao::closeDatabase();
        return $items;
    }

    public static function findById(int $id){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur` WHERE `utilisateur_ID` = :utilisateur_ID;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":utilisateur_ID",$id);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\User");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }

    public static function insertUser(string $first_name, string $last_name, string $mail, string $password){
        $dbh = Dao::openDatabase();
        $query = "INSERT INTO `utilisateur`(`adresse_utilisateur`,`mot_de_passe`, `nom_utilisateur`,`prenom_utilisateur`) VALUES (:adresse_utilisateur, :password, :_utilisateur, :prenom_utilisateur);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":adresse_utilisateur", $mail);
        $sth->bindParam(":mot_de_passe", $password);
        $sth->bindParam(":nom_utilisateur", $last_name);
        $sth->bindParam(":prenom_utilisateur", $first_name);
        $sth->execute();
        Dao::closeDatabase();
    }

    public static function login(string $mail, string $password){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur` WHERE `adresse_utilisateur` = :adresse_utilisateur AND `mot_de_passe` = :mot_de_passe;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":adresse_utilisateur",$mail);
        $sth->bindParam(":mot_de_passe",$password);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\User");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }
}