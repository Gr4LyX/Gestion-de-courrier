<?php 
namespace Valarep\controller;

use Valarep\View;
use Valarep\model\Courrier;

class CourrierController{

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

    public static function insertCourrierArrive($page, $objet, $commentaire, $mail_dest, $num_expediteur){
        $courrier = new Courrier;
        $courrier->objet = $objet;
        $courrier->commentaire = $commentaire;
        $courrier->mail_dest = $mail_dest;
        $courrier->num_expediteur = $num_expediteur;
        $courrier->insertCourrierArrive();
        $courriers = $courrier->getAll();
        self::envoi($page);
    }
}