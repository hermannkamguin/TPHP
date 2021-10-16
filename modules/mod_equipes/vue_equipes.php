<?php
@require_once("vue_generique.php");
class VueEquipes extends VueGenerique {
    public function __construct()
    {

    }

    public function displayList($list){
        while ($value = $list->fetch()){
            echo '<a href="index.php?module=equipes&action=detail&id=' . $value['id'] . '" >' . $value['id'] . ' ' . $value['nom'] . ' ' . $value['description'] . '</a> <br />';
        }
    }
    public function displayDetail($player){
        while ($value = $player->fetch()){
            echo $value['id'] . ' ' . $value['nom'] . ' ' . $value['description'] . '<br />';
        }
    }

    public function menu(){
        echo '<a href="index.php?module=equipes&action=list" >Liste</a> <br />';
    }

}
