<?php
@require_once('cont_equipes.php');

class ModEquipes{

    private $action;
    private $controller;

    public function __construct()
    {
        $this->controller = new ContEquipes();

        if(isset($_GET['action'])){
            $this->action = $_GET['action'];
        }else{
            $this->action = 'list';
        }

        switch ($this->action){
            case 'list':
                $this->controller->_list();
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