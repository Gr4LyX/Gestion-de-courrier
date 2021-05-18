<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require "head.html.php" ?>
    <title>Inscription</title>
</head>

<body class="background-image" background="images/background-image.jpg">
    <div class="card border-primary mb-3" style="width: 50rem;">
        <div class="card-body">
            <h1 class="titre">Inscription</h1>
            <div class="container2">
                <form action="?page=addUser" method="post" class="form-group" style="margin-top:100px;">
            <label for=" nom">Nom : </label>
                    <input class="form-control" type="text" name="nom" id="nom" placeholder="Entrez votre nom">
                    <label for="prenom">Prénom : </label>
                    <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom">
                    <label for="email">Email : </label>
                    <input class="form-control" type="email" name="email" id="email"
                        placeholder="Entrez votre adresse mail">
                    <label for="password">Mot de Passe : </label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
                    <button class="btn btn-outline-primary btn-lg btnup">S'inscrire</button>
                    <a href="?page=home" class="btn btn-outline-primary btn-lg btnesc2">Retour</a>
                </form>
                <img class="Image3" src="images/Logo Valarep.png" alt="logo Valarep">
            </div>
        </div>
</body>
<?php require "scripts.html.php"?>

</html>