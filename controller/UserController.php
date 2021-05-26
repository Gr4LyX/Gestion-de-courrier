<?php 
namespace Valarep\controller;

use Valarep\model\User;
use Valarep\View;

class UserController{

    public static function listUser($page){
        $users = User::getAll();
        View::setTemplate('users');
        View::bindVariable("users", $users);
        View::bindVariable('page', $page);
        View::display();
    }

    public static function profilUser($page, int $id){
        $id_user = filter_var($id, FILTER_VALIDATE_INT);
        if(empty($id_user)){
            echo "Erreur";
        } else {
                $user = User::findById($id_user);
            if($user){
                View::setTemplate('profil');
                View::bindVariable("user",$user);
                View::bindVariable("page",$page);
                View::display(); 
            } 
            else {
                echo "L'identifiant utilisé n'existe pas";
                die();
            }     
        }
    }

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

    public static function insertUser($last_name, $first_name, $adresse_utilisateur, $password){
        $user = new User;
        $user->last_name = $last_name;
        $user->first_name = $first_name;
        $user->adresse_utilisateur = $adresse_utilisateur;
        $user->password = $password;
        $user->register();
        $users = $user->getAll();
        var_dump($users);
    }

    public static function login($page, string $mail, string $password){
        $users = new User();
        $user = $users->login($mail,$password);
        if($user != null){
            $_SESSION['user'] = $user;
            View::setTemplate('general');
            View::bindVariable("user", $users);
            View::display();
        } else {
            unset($_SESSION['user']);
            View::setTemplate('signin');
            View::display();
        }
    }
}