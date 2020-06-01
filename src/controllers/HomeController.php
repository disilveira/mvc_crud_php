<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        
        /*
        *
        * Selecionando colunas especificas
        * $usuarios = Usuario::select(['nome','email'])->execute();
        *
        */
        
        $usuarios = Usuario::select()->execute();
        $this->render('home', ['usuarios' => $usuarios]);
    }

}