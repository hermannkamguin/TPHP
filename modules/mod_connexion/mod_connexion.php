<?php

@require_once('cont_connexion.php');

class ModConnexion{
    private $action;
    private $controller;

    public function __construct()
    {
        $this->controller = new ContConnexion();

        if(isset($_GET['action'])){
            $this->action = $_GET['action'];
        }else{
            $this->action = 'login';
        }

        switch ($this->action){
            case 'login':
                $this->controller->login();
                break;
            case 'signup':
                $this->controller->signup();
                break;
            case 'logout':
                $this->controller->logout();
                break;
        }
    }
}
