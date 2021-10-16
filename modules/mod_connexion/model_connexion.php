<?php

@require_once('Connexion.php');

class ModelConnexion extends Connexion {
    public function __construct()
    {

    }

    public function signup($username, $password){
        $pass_hache = password_hash($password, PASSWORD_DEFAULT);

        $user = parent::$bdd->prepare('INSERT INTO utilisateur (username, password) VALUES (?, ?)');
        $user->execute(array($username, $pass_hache));
    }

    public function login($username, $password){

        $user = parent::$bdd->prepare('SELECT * FROM utilisateur WHERE username=?');
        $user->execute(array($username));

        $result = $user->fetch();

        if($result){
            if(password_verify($password, $result['password'])){
                $_SESSION['username'] = $username;
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
