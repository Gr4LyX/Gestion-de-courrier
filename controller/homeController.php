<?php

namespace Valarep\controller;

use Valarep\View;

class HomeController{

    public static function home ($page){
        View::setTemplate('home');
        View::bindVariable('page',$page);
        View::display();
    }
    
}