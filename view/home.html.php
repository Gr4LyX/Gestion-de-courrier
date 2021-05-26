<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require "head.html.php" ?>
  <title>gestionnaire de courrier</title>
</head>

<body class="background-image" background="images/background-image.jpg">
  <div class="shadow-lg rounded card-img-overlay border border-primary carde" style="width: 50rem;">
    <img src="images/transparent.png" class="card-img" alt="transparent">
    <div class="card-img-overlay">
      <p class="card-text paragraphe1">Veuillez vous connectez.</p>
      <p class="paragraphe2">Si vous n'avez pas de compte inscrivez-vous </p>
      <h1 class="titre">Gestionnaire de courrier</h1>
      <div class="contact">
        <p>VALAREP DAMPIERRE FORMATION</p>
        <p>85 avenue de Denain(bat Alexandre 2ème étage) 59300 VALENCIENNES</p>
        <p>tél: 03 27 21 58 58 fax : 03 27 21 58 59 Mail : valarep@valarep.fr</p>
        <p>www.valarep.fr</p>
      </div>
      <div class="boutton">
        <a href="?page=signin" class="btn btn-outline-primary btn-lg">Se connecter</a>
        <a href="?page=signup" class="btn btn-outline-primary btn-lg">S'inscrire</a>
      </div>
      <img class="img-fluid Image" src="images/Logo Valarep.png" alt="logo Valarep">
    </div>
  </div>
</body>

<?php require "scripts.html.php"?>

</html>