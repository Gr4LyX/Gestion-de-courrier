<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require "head.html.php" ?>
    <title>Connexion</title>
</head>

<body class="background-image" background="images/background-image.jpg">
    <div class="card border-primary mb-3" style="width: 50rem;">
        <div class="card-body">
            <h1 class="titre">Connexion</h1>
            <div class="container">
                <form action="?page=login" method="post" class="form-group" style="margin-top:100px;>
            <label for=" email">Email : </label>
                    <input class="form-control" type="email" name="email" id="email"
                        placeholder="Entrez votre adresse mail">
                    <label for="password">Mot de Passe : </label>
                    <input class="form-control" type="password" name="password" id="password"
                        placeholder="Entrez votre Mot de Passe">
                    <button class="btn btn-outline-primary btn-lg btnlog">Se connecter</button>
                    <a href="?page=home" class="btn btn-outline-primary btn-lg btnesc">Retour</a>
                </form>
                <img class="Image2" src="images/Logo Valarep.png" alt="logo Valarep">
            </div>
        </div>
</body>
<?php require "scripts.html.php"?>

</html>