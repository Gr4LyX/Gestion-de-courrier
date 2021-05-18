<?php

namespace Valarep\model;

use PDO;

class User{
    public $id;
    public $email;
    public $password;
    public $nom;
    public $prenom;

    public static function getAll(){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `users`;";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Valarep\\model\\User");
        $items = $sth->fetchAll();
        Dao::closeDatabase();
        return $items;
    }

    public static function findById(int $id){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `users` WHERE `id` = :id;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":id",$id);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\User");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }

    public static function insertUser(string $prenom, string $nom, string $email, string $password){
        $dbh = dao::openDatabase();
        $query = "INSERT INTO `users`(`email`,`password`, `nom`,`prenom`) VALUES (:email, :password, :nom, :prenom);";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":email", $email);
        $sth->bindParam(":password", $password);
        $sth->bindParam(":nom", $nom);
        $sth->bindParam(":prenom", $prenom);
        $sth->execute();
        dao::closeDatabase();
    }

    public static function login(string $login, string $password){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `users` WHERE `email` = :email AND `password` = :password;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":email",$login);
        $sth->bindParam(":password",$password);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Valarep\\model\\User");
        $item = $sth->fetch();
        Dao::closeDatabase();
        return $item;
    }
}