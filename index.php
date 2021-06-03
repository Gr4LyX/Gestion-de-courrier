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
    case 'general':
        UserController::general($page);
        break;
    case 'envoi':
        UserController::envoi($page);
        break;
    case 'reception':
        UserController::reception($page);
        break;
    case 'recherche':
        UserController::recherche($page);
        break;
    case 'login':
        $login = $_POST['mail'];
        $password = $_POST['password'];
        UserController::login($page,$login,$password);
        break;
    case 'userInsert':
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        UserController::insertUser($page,$last_name, $first_name, $mail, $password,);
        break;
    default:
        break;
}