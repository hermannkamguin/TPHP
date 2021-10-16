<?php

class Connexion
{
    public static $bdd;

    public static function initConnexion(){
        self::$bdd = new PDO('mysql:host=localhost;dbname=progweb;charset=utf8', 'root', 'root');
    }

}