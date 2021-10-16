<?php

@require_once('vue_connexion.php');
@require_once('model_connexion.php');


class ContConnexion{
    private $vue;
    private $model;


    public function __construct()
    {
        $this->vue = new VueConnexion();
        $this->model = new ModelConnexion();
    }

    public function login(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $this->model->login($_POST['username'], $_POST['password']);
        }
        $this->vue->displayFormLogin();
    }

    public function signup(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            echo 'zfzefze';
            $this->model->signup($_POST['username'], $_POST['password']);
        }
        $this->vue->displayFormSignup();
    }

    public function logout(){
        unset($_SESSION['username']);
    }


}
