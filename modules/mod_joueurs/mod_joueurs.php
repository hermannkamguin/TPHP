<?php
@require_once('cont_joueurs.php');

class Mod{

    private $action;
    private $controller;

    public function __construct()
    {
        $this->controller = new Cont();

        if(isset($_GET['action'])){
            $this->action = $_GET['action'];
        }else{
            $this->action = 'bienvenue';
        }

        switch ($this->action){
            case 'bienvenue' :
                $this->controller->welcome();
                break;
            case 'list':
                $this->controller->_list();
                break;
            case 'ajout':
                $this->controller->ajoutplayer();
                break;
            case 'detail' :
                $id = 1;
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                $this->controller->detailList($id);
                break;
        }
    }
}