<?php
@require_once('Connexion.php');

class ModelEquipes extends Connexion {
    public function __construct(){

    }

    public function getList(){
        $player = parent::$bdd->prepare('SELECT id, nom, annee_creation, description  FROM equipe');
        $player->execute();

        return $player;
    }

    public function detail($id){
        $player = parent::$bdd->prepare('SELECT id, nom, annee_creation, description FROM equipe WHERE id = ?');
        $player->execute(array($id));

        return $player;
    }

}
