<?php
    // start session
    session_start();
?>
<!-- <?php
    include_once "./src/header.inc.php";
?> -->
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="./css/main.css" rel="stylesheet">
    <title>Gmail</title>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="navbar-logo"><img src="asset/mail.png" alt="logo"> Gmail</div>
        <div class="navbar-links">
            <a href="./index.php" class="navbar-link">POUR LES PROS</a>
            <a href="./connexion.php" class="navbar-link">CONNEXION</a>
            <a href="#form" class="navbar-link navbar-link-important">CRÉER UN COMPTE</a>
        </div>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareils</h1>
        <button class="hero-button">CRÉER UN COMPTE</button>
    </div>
</section>

<div class="para">
    <h1> Une boîte de réception <br>entierement repensée</h1>
    <p class="parat">
        Avec les nouveaux onglets personalisables,
        reperez <br> nouveaux messages et choisissez <br>ceux que vous souhaitez lire en proriorité
    </p>
</div>


<div class="container">


<p>
                    
                <?php
                    $_SESSION["first_name"] = "Ledorf";
                    $_SESSION["last_name"] = "Rasmus";
                    $_SESSION["heure"] = date("d/m/Y");
                    print "<br>Bonjour ".$_SESSION["last_name"]."<br>" ;
                    print "dernière connexion le : ".$_SESSION["heure"]."<br> 
                    valeur de la session : ".$_COOKIE['PHPSESSID'];
                ?>
                </p>

<?php

    require_once __DIR__ . "/controller/controller_main.class.php";
    ControlloerBase::event();
    ?>

    <form class="signup-form" id="form" method="post">
        <fieldset>
            <legend>Créer un compte</legend>
            <div class="input-container">
                <label for="lastname">Nom :</label>
                <input type="text" id="lastname" name="lastname" placeholder="Votre nom">
            </div>
            <div class="input-container">
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" placeholder="Votre prénom">
            </div>
            <div class="input-container">
                <label for="email">Mail :</label>
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com">
            </div>
            <div class="input-container">
                <label for="password">Choisir votre mot de passe :</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="submit-container">
                <button type="submit">VALIDER VOTRE COMPTE</button>
            </div>
        </fieldset>
    </form>
</div>



</body>
</html>