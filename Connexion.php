<?php

class Connexion
{
    public static $bdd;

    public static function initConnexion(){
        self::$bdd = new PDO('mysql:host=localhost;dbname=progweb;charset=utf8', 'id15599947_progweb', '6h<}Y%Y]khVt6nO=');
    }

}