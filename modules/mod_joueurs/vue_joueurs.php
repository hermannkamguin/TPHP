<?php
@require_once("vue_generique.php");
class Vue extends VueGenerique {
    public function __construct()
    {

    }

    public function displayList($list){
        while ($value = $list->fetch()){
            echo '<a href="index.php?module=joueurs&action=detail&id=' . $value['id'] . '" >' . $value['id'] . ' ' . $value['name'] . ' ' . $value['description'] . '</a> <br />';
        }
    }

    public function displayDetail($player){
        while ($value = $player->fetch()){
            echo $value['id'] . ' ' . $value['nom'] . ' ' . $value['description'] . '<br />';
        }
    }

    public function menu(){
        echo '<a href="index.php?module=joueurs&action=bienvenue" >Bienvenue</a> 
                <br/> <a href="index.php?module=joueurs&action=list" >Liste</a> <br />';
    }

    public function displayWelcome(){
        echo'Bienvenue';
    }

    public function form_ajout(){
        echo'
        <form action="index.php?module=joueurs&action=ajout" method="post">
        <label>Nom du joueur : </label>
        <input type="text" id="nom" name="nom"/>
        
        <label>Description</label>
        <textarea name="description">
        Ce joueur est..
</textarea>
<input type="submit" />
</form>
        ';
    }
}
