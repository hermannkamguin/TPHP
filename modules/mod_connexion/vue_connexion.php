<?php
@require_once("vue_generique.php");
class VueConnexion extends VueGenerique
{
    public function __construct()
    {

    }

    public function displayFormLogin(){
        if(!isset($_SESSION['username'])){
            echo '
            <form action="index.php?module=connexion&action=login " method="POST">
            <label> Username </label>
            <input type="text" id="username" name="username" />
            
            <label> Password </label>
            <input type="password" id="password" name="password" />
            
            <input type="submit" />
           
            </form>
        ';
        }
        else{
            echo 'Vous êtes déja connecté';
        }
    }

    public function displayFormSignup(){
        if(!isset($_SESSION['username'])){
            echo '
            <form action="index.php?module=connexion&action=signup " method="POST">
            <label> Username </label>
            <input type="text" id="username" name="username" />
            
            <label> Password </label>
            <input type="password" id="password" name="password" />
            
            <input type="submit" />
           
            </form>
        ';
        }
        else{
            echo 'Vous êtes déja connecté';
        }
    }

}

