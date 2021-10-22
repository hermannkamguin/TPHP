<?php
@require_once('environment.php');
class Connexion
{
    public static $bdd;

    public static function initConnexion(){
        if(Environment::$environment == "prod"){
            self::$bdd = new PDO('mysql:host=localhost;dbname=id15599947_progweb;charset=utf8', 'id15599947_progweb1', '6h<}Y%Y]khVt6nO=');
        }
        else{
            self::$bdd = new PDO('mysql:host=localhost;dbname=progweb;charset=utf8', 'root', 'root');
        }
    }
}