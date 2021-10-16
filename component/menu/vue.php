<?php
class VueMenu{

    public $content;
    public function __construct(){

    }

    public function menu(){
        ob_start();
        if(isset($_SESSION['username'])){
            echo '<br/>Bonjour '. $_SESSION['username'] . ' <a href="index.php?module=connexion&action=logout" >Logout</a>';
        }
        ?>
        <nav>
            <a href="index.php?module=joueurs&action=bienvenue" >Bienvenue</a>
            <br/> <a href="index.php?module=joueurs&action=list" >Liste</a>
            <br/> <a href="index.php?module=connexion&action=login" >Connexion</a>
            <br/> <a href="index.php?module=connexion&action=signup" >Inscription</a>'
        </nav>

        <?php
        return ob_get_clean();
    }
}

