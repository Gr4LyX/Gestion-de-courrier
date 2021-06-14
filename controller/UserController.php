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

    public static function insertUser($page,$last_name, $first_name, $mail, $password){
        $user = new User;
        $user->last_name = $last_name;
        $user->first_name = $first_name;
        $user->mail = $mail;
        $user->password = $password;
        $user->register();
        $users = $user->getAll();
        self::signIn($page);
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