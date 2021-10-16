<?php

@require_once('vue_joueurs.php');
@require_once('model_joueurs.php');

class Cont
{

    private $vue;
    private $model;

    public function __construct()
    {
        $this->model = new Model();
        $this->vue = new Vue();

    }

    public function _list()
    {

        return $this->vue->displayList($this->model->getList());
    }

    public function detailList($id)
    {

        return $this->vue->displayDetail($this->model->detail($id));
    }

    public function welcome()
    {

        return $this->vue->displayWelcome();
    }

    public function ajoutplayer(){
        $this->vue->form_ajout();
        if(isset($_POST['nom']) && isset($_POST['description'])){
            $this->model->ajout($_POST['nom'], $_POST['description'] );
        }
    }



}
