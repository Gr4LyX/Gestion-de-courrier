<?php 
namespace Valarep\controller;

use Valarep\model\User;
use Valarep\View;

class UserController{

    public static function signUp($page){
        View::setTemplate('signup');
        View::bindVariable("page",$page);
        View::display();
    }

    public static function signIn($page){
        View::setTemplate('signin');
        View::bindVariable("page",$page);
        View::display();
    }

    public static function addUser($page,$prenom, $nom, $email, $password){
        if(trim($prenom) == "" || trim($nom) == "" || trim($password) == ""){
            // Erreur
            echo "Pas possible";
        }
        else {
            if(strlen(trim($password)) <6){
                echo "Mot de passe trop court";
            } else {
                User::insertUser(trim($prenom), trim($nom), trim($email), trim($password));
                self::listUser($page);
            }
        }
        
    }

    public static function login($page, string $login, string $password){
        $users = new User();
        $user = $users->login($login,$password);
        if($user != null){
            $_SESSION['user'] = $user;
            self::profilUser($page, $user->id);
        } else {
            unset($_SESSION['user']);
            self::signIn($page);
        }
        
    }
}