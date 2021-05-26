<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require "head.html.php" ?>
    <title>Inscription</title>
</head>

<body class="background-image" background="images/background-image.jpg">
    <div class="shadow-lg rounded card-img-overlay border border-primary carde" style="width: 50rem;">
        <img src="images/transparent.png" class="card-img" alt="transparent">
        <div class="card-img-overlay">
            <h1 class="titre2">Inscription</h1>
            <div class="container2">
                <form action="?page=user-insert" method="post" class="form-group" style="margin-top:100px;">
                    <label for=" nom"></label>
                    <input class="form-control name" type="text" name="last_name" id="last_name" placeholder="Entrez votre nom">
                    <label for="prenom"></label>
                    <input class="form-control firstname" type="text" name="first_name" id="first_name"
                        placeholder="Entrez votre prénom">
                    <label for="email"></label>
                    <input class="form-control email2" type="email" name="mail" id="mail"
                        placeholder="Entrez votre adresse mail">
                    <label for="password"></label>
                    <input class="form-control mdp2" type="password" name="password" id="password"
                        placeholder="Entrez votre mot de passe">
                    <button class="btn btn-outline-primary btn-lg btnup">S'inscrire</button>
                    <a href="?page=home" class="btn btn-outline-primary btn-lg btnesc2">Retour</a>
                </form>
                    <img class="logo-email1" src="images/logo-email.png" alt="logo email">
                    <img class="logo-password1" src="images/logo-password.png" alt="logo password">
                    <img class="logo-user" src="images/logo-user.png" alt="logo user">
                    <img class="logo-user1" src="images/logo-user.png" alt="logo user">
                    <img class="img-fluid Image3" src="images/Logo Valarep.png" alt="logo Valarep">
            </div>
        </div>
</body>

<?php require "scripts.html.php"?>

</html>