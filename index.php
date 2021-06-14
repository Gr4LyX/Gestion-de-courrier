<?php

namespace Valarep;

use Valarep\controller\HomeController;
use Valarep\controller\UserController;
use Valarep\controller\CourrierController;

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
        CourrierController::envoi($page);
        break;
    case 'reception':
        CourrierController::reception($page);
        break;
    case 'recherche':
        CourrierController::recherche($page);
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
    case 'insertCourrierArrive':
        $objet = $_POST['objet'];
        $commentaire = $_POST['commentaire'];
        $mail_dest = $_POST['adresse_dest'];
        $num_expediteur = $_POST['num_expediteur'];
        CourrierController::insertCourrierArrive($page,$objet, $commentaire, $mail_dest, $num_expediteur);
        break;
    default:
        break;
}