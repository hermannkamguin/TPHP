<?php

@require_once('Connexion.php');

class Model extends Connexion {
    public function __construct(){

    }





    public function getListbis(){
        $tab = array ( array("id"=>1, "nom"=>"Zidane"), array("id"=>2, "nom"=> "Henry"), array("id"=>3, "nom"=>"Mbappé"), array("id"=>4, "nom"=>"Rami" ));
        return $tab;
    }




    public function getList(){
        $player = parent::$bdd->prepare('SELECT id, name, description  FROM joueur');
        $player->execute();

        return $player;
    }

    public function detail($id){
        $player = parent::$bdd->prepare('SELECT id, name, description FROM joueur WHERE id = ?');
        $player->execute(array($id));

        return $player;
    }
    public function ajout($nom, $description){
        $player = parent::$bdd->prepare('INSERT INTO joueur (name , description) VALUES (?, ?)');
        $player->execute(array($nom, $description));
    }

}
