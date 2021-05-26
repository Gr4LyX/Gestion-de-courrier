<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require "head.html.php" ?>
    <title>Saisie des courriers</title>
</head>

<body class="background-image" background="images/background-image.jpg">
    <div class="shadow-lg rounded card-img-overlay border border-primary carde" style="width: 50rem;">
        <img src="images/transparent.png" class="card-img" alt="transparent">
        <div class="card-img-overlay">
            <p class="card-text paragraphe1"></p>
            <p class="paragraphe2"></p>
            <h1 class="titre4">Saisie envoi de courriers</h1>
            <div class="formulaire">
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label datenvoi">Date d'envoi :</label>
                    <div class="col-10">
                        <input class="form-control date-envoi" type="date" id="example-date-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label destinataire">Destinataire :</label>
                    <div class="col-10">
                        <input class="form-control email3" type="email" placeholder="xxx@xxx.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label naturela">Nature :</label>
                    <div class="col-10">
                        <input class="form-control nature" type="text">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label piece">Pièces envoyées :</label>
                    <input class="form-control fichier" type="file">
                </div>
                <select class="form-select mode-envoi" aria-label="Default select example">
                    <option value="1">Suivi</option>
                    <option value="2">Recommandé</option>
                    <option value="3">Simple</option>
                </select>
                <label class="modenvoi">Mode d'envoi :</label>
                <select class="form-select enregistre-par" aria-label="Default select example">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
                <label class="enregistre">Enregistré par :</label>
                <a class="btn btn-outline-primary btn-lg btn-ajout-courrier">Ajouter nouveau courrier</a>
                <a href="?page=general" class="btn btn-outline-primary btn-lg btn-quitter1">Quitter</a>
                <div class="form-floating">
                    <textarea class="form-control Commentaire" placeholder="Observation"
                        style="height: 100px"></textarea>
                </div>
            </div>
            <label class="commentaire">Observation :</label>
        </div>
    </div>
</body>

<?php require "scripts.html.php"?>

</html>