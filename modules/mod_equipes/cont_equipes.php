<?php

@require_once('vue_equipes.php');
@require_once('model_equipes.php');

class ContEquipes
{

    private $vue;
    private $model;

    public function __construct()
    {
        $this->model = new ModelEquipes();
        $this->vue = new VueEquipes();

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


}
