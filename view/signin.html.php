<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require "head.html.php" ?>
    <title>Connexion</title>
</head>

<body class="background-image" background="images/background-image.jpg">
    <div class="card-img-overlay border border-primary carde" style="width: 50rem;">
        <img src="images/transparent.png" class="card-img" alt="transparent">
        <div class="card-img-overlay">
            <h1 class="titre1">Connexion</h1>
            <div class="container">
                <form action="?page=login" method="post" class="form-group" style="margin-top:100px;>
            <label for=" email"></label>
                    <input class="form-control email1" type="email" name="email" id="email"
                        placeholder="Entrez votre adresse mail">
                    <label for="password"></label>
                    <input class="form-control mdp1" type="password" name="password" id="password"
                        placeholder="Entrez votre Mot de Passe">
                    <button class="btn btn-outline-primary btn-lg btnlog">Se connecter</button>
                    <a href="?page=home" class="btn btn-outline-primary btn-lg btnesc">Retour</a>
                </form>
                <img class="logo-email" src="images/logo-email.png" alt="logo email">
                <img class="logo-password" src="images/logo-password.png" alt="logo password">
                <img class="Image2" src="images/Logo Valarep.png" alt="logo Valarep">
            </div>
        </div>
</body>
<?php require "scripts.html.php"?>

</html>