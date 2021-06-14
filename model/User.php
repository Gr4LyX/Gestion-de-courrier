<?php

namespace Valarep\model;

use Valarep\model\Dao;
use PDO;

class User{
    public $id;
    public $last_name;
    public $first_name;
    public $mail;
    public $password;

    public function register(){
        $dbh = Dao::openDatabase();
        $query = "INSERT INTO utilisateur(`nom_utilisateur`, `prenom_utilisateur`,`adresse_utilisateur`, `mot_de_passe`)
    VALUES (:last_name, :first_name, :mail, :password);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":last_name",$this->last_name);
        $sth->bindParam(":first_name",$this->first_name);
        $sth->bindParam(":mail",$this->mail);
        $sth->bindParam(":password",$this->password);
        $sth->execute();
        Dao::closeDatabase();
    }

    public function login($login, $password){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur` WHERE `adresse_utilisateur` = :mail AND `mot_de_passe` = :password;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":mail",$login);
        $sth->bindParam(":password",$password);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\User");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }

    public function getAll(){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `utilisateur`;";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Valarep\\model\\User");
        $items = $sth->fetchAll();
        Dao::closeDatabase();
        return $items;
    }
}