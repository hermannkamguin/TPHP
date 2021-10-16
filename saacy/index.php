
<?php
@require_once("Connexion.php");

Connexion::initConnexion();

session_start();

?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Saacy house</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/mdp.css" />
	</head>


    <?php
    $essai = false;
    if(isset($_POST['pass'])){
        $essai = true;
        if($_POST['pass'] == "azerty"){
            $_SESSION['actif'] = "actif";
        }
    }
    if(!isset($_SESSION['actif'])){
        ?>
        <form action="index.php" method="POST">
            <label>Mot de passe : </label>
            <input type="password" id="pass" name="pass" />
            <input type="submit" value="Valider" class="primary" />
            <?php
            if($essai){
                echo "<p>Mot de passe incorrect </p>";
            }
            ?>
        </form>

        <?php
    }
    else{
    ?>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Home</strong></a>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>ON GÈRE TOUS ICI !!</h1>
											<p>Admnistration de la house</p>
										</header>
                                        <p> Que ce soit les courses, les achats, l'inventaire de la maison tout est répertorié ici. Plus besoin de se casser la tête</p>
										<ul class="actions">
											<li><a href="inventaire.php" class="button big">Inventaire</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/house.jpeg" alt="" />
									</span>
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
        <?php
        }

        ?>
	</body>
</html>