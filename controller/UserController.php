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

    public static function general($page){
        View::setTemplate('general');
        View::bindVariable("page",$page);
        View::display();
    }

    public static function envoi($page){
        View::setTemplate('envoi');
        View::bindVariable("page",$page);
        View::display();
    }

    public static function reception($page){
        View::setTemplate('reception');
        View::bindVariable("page",$page);
        View::display();
    }

    public static function recherche($page){
        View::setTemplate('recherche');
        View::bindVariable("page",$page);
        View::display();
    }

    public static function insertUser($page, $last_name, $first_name, $mail, $password){
        if(trim($last_name) == "" || trim($first_name) == "" || trim($password) == ""){
            echo "Pas possible";
        }
        else {
            if(strlen(trim($password)) <6){
                echo "Mot de passe trop court";
            } else {
                User::register(trim($last_name), trim($first_name), trim($mail), trim($password));
                self::signIn($page);
            }
        }
    }

    public static function login($page, string $mail, string $password){
        $user = new User();
        $users = $user->login($mail,$password);
        if($users != null){
            $_SESSION['user'] = $users;
            View::setTemplate('general');
            View::bindVariable("user", $users);
            View::display();
        } else {
            unset($_SESSION['user']);
            View::setTemplate('signin');
            View::display();
            echo "L'identifiant utilisé n'existe pas";
        }
    }
}