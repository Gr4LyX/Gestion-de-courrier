<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require "head.html.php" ?>
  <title>gestionnaire de courrier</title>
</head>

<body class="background-image" background="images/background-image.jpg"  >
    <div class="card border-primary mb-3" style="width: 50rem;">
      <div class="card-body">
        <p class="card-text paragraphe1">Veuillez vous connectez.</p>
        <p class="paragraphe2">Si vous n'avez pas de compte inscrivez-vous </p>
        <h1 class="titre">Gestionnaire de courrier</h1>
        <div class="boutton">
          <a href="?page=signin" class="btn btn-outline-primary btn-lg">Se Connecter</a>
          <a href="?page=signup" class="btn btn-outline-primary btn-lg">S'inscrire</a>
        </div>
        <img class="Image" src="images/Logo Valarep.png" alt="logo Valarep">
      </div>
    </div>
</body>
<?php require "scripts.html.php"?>

</html>