<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require "head.html.php" ?>
  <title>Menu general</title>
</head>

<body class="background-image" background="images/background-image.jpg">
  <div class="shadow-lg rounded card-img-overlay border border-primary carde" style="width: 50rem;">
    <img src="images/transparent.png" class="card-img" alt="transparent">
    <div class="card-img-overlay">
      <p class="card-text paragraphe1"></p>
      <p class="paragraphe2"></p>
      <h1 class="titre3">Gestion du courrier</h1>
      <div class="contact1">
        <p>VALAREP DAMPIERRE FORMATION</p>
        <p>85 avenue de Denain(bat Alexandre 2ème étage) 59300 VALENCIENNES</p>
        <p>tél: 03 27 21 58 58 fax : 03 27 21 58 59 Mail : valarep@valarep.fr</p>
        <p>www.valarep.fr</p>
      </div>
      <div class="boutton1">
      <a href="?page=envoi" class="btn btn-outline-primary btn-lg btn-envoi">Enregistrement Envoi</a>
      <a href="?page=reception" class="btn btn-outline-primary btn-lg btn-reception">Reception</a>
      <div class="recherche">
        <a href="?page=recherche" class="btn btn-outline-primary btn-lg btn-recherche">Recherche Courrier</a>
      </div>
      <a href="?page=home" class="btn btn-outline-primary btn-lg btn-quitter">Quitter</a>
      </div>
      <img class=" img-fluid Image4" src="images/Logo Valarep.png" alt="logo Valarep">
    </div>
  </div>
</body>

<?php require "scripts.html.php"?>

</html>