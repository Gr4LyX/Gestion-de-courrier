<?php

namespace Valarep;

use Valarep\controller\HomeController;
use Valarep\controller\UserController;

session_start();

require_once "vendor/autoload.php";


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'home':
        HomeController::home($page);
        break;
    case 'signin':
        UserController::signIn($page);
        break;    
    case 'signup':
        UserController::signUp($page);
        break;
    case 'addUser':
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        UserController::addUser($page,$prenom, $nom, $email, $password);
        break;
    case 'login':
        $login = $_POST['email'];
        $password = $_POST['password'];
        UserController::login($page,$login,$password);
        break;
}