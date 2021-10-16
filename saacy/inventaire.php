
<?php
@require_once("Connexion.php");

Connexion::initConnexion();

if(isset($_GET["id"]) && isset($_GET["aj"])){
    if($_GET["aj"] == "sup"){
        $reqbd = Connexion::$bdd->prepare("UPDATE inventaire SET qte = qte-1 WHERE id = ?");
        $reqbd->execute(array($_GET["id"]));

        $reqbd = Connexion::$bdd->prepare("SELECT * FROM inventaire WHERE id = ?");
        $reqbd->execute(array($_GET["id"]));

        $reqverif = $reqbd->fetch();
        if($reqverif["qte"] == 0){
            $reqbd = Connexion::$bdd->prepare("DELETE FROM inventaire WHERE id = ?");
            $reqbd->execute(array($_GET["id"]));
        }
        header('Location: inventaire.php');
    }
    else{
        $reqbd = Connexion::$bdd->prepare("UPDATE inventaire SET qte = qte+1 WHERE id = ?");
        $reqbd->execute(array($_GET["id"]));
        header('Location: inventaire.php');

    }
}

?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Generic - Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/content.css" />
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
            <header id="header">
                <a href="inventaire.php" class="logo"><strong>Inventaire</strong></a>

            </header>

            <!-- Content -->
            <section>
                <header class="main">
                    <h1>Generic</h1>
                </header>

                <span class="image main"><img src="images/pic11.jpg" alt="" /></span>

                <div class="tsInv" >

                <?php
                    $inv = Connexion::$bdd->prepare("SELECT * FROM inventaire");
                    $inv->execute();

                    ?>
                    <div class="nom">

                    <h2>NOM</h2><?php
                    while($req = $inv->fetch()){
                        ?>
                        <div class="inv" >
                            <p> <?php echo $req["nom"] ?></p>

                        </div>


                <?php
                    }
                        ?> </div>

                    <div class="qte"><h2>QUANTITE</h2><?php

                        $inv2 = Connexion::$bdd->prepare("SELECT * FROM inventaire");
                    $inv2->execute();
                    while($req = $inv2->fetch()){
                    ?>
                    <div class="inv" >
                        <p> <?php echo $req["qte"] ?></p>

                    </div>
                    <?php
                    }
                 ?>
                    </div>
                    <div class="action"><h2>ACTION</h2><?php

                        $inv2 = Connexion::$bdd->prepare("SELECT * FROM inventaire");
                        $inv2->execute();
                        while($req = $inv2->fetch()){
                            ?>
                            <div class="inv" >
                                <form action="inventaire.php" method="POST">
                                    <a href="inventaire.php?aj=ajout&id=<?php echo $req['id']?>" class="button primary small">+</a>
                                    <a href="inventaire.php?aj=sup&id=<?php echo $req['id']?>" class="button primary small">-</a>
                                </form>

                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <!-- Sidebar -->
    <?php
    include("menu.php");
    ?>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>