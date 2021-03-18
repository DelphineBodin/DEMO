<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>Formulaire adresse client</title>
</head>
<body>
<div class="adresseClient">
<form action="traitementAdresse.php" method="post">
    <fieldset>
        <legend>Adresse Client</legend>
    <label>Nom :
        <input type="text" name="nom" id="idnom" class="input is-link" placeholder="nom">
    </label>
    <br>
    <label>Prénom :
        <input type="text" name="prenom" id="idprenom">
    </label>
    <br>
    <label>Adresse :
        <input type="text" name="adresse" id="idadresse">
    </label>
    <br>
    <label>CP :
        <input type="text" name="cp" id="idcp">
    </label>
    <br>
    <label>Ville :
        <input type="text" name="ville" id="idville">
    </label>
    <br>
    <input type="submit" value="Envoyer le formulaire">
    </fieldset>
</form>


</div>
</body>
</html>

<?php
