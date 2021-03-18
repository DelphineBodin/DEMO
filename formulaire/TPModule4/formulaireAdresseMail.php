<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de Saisir</title>
</head>
<body>
<form action="formulaireAdresseMail.php" method="post">
    <fieldset>
        <legend>S'abonner</legend>

    <label>E-Mail<input type="email" name="emailClient" id="idemailClient"></label>
    <input type="submit" value="Valider">
    </fieldset>
</form>
<?php
if(isset($_POST['emailClient'])&&!empty($_POST['emailClient'])){
    $emailClient=filter_input(INPUT_POST,'emailClient',FILTER_SANITIZE_STRING);
    echo "$emailClient utilise le navigateur ";
    echo $_SERVER['HTTP_USER_AGENT'];
}
?>
</body>
</html>
