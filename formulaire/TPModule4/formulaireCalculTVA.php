<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de calcul TVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<?php
$prixHt=0;
if(isset($_POST['prixHt'])&& !empty($_POST['prixHt'])) {
    $prixHt = filter_input(INPUT_POST, 'prixHt', FILTER_SANITIZE_STRING);
}
//echo"\n";
$tauxTVA=0;
if(isset($_POST['tauxTVA'])&& !empty($_POST['tauxTVA'])) {
    $tauxTVA = filter_input(INPUT_POST, 'tauxTVA', FILTER_SANITIZE_STRING);
}
if(isset($prixHt)&&isset($tauxTVA)){
    $prixTTC=$prixHt*(1+$tauxTVA/100);
    $tva=$prixHt*($tauxTVA/100);


}

?>
<div class="container">
<form action="formulaireCalculTVA.php" method="post">
    <div class="form-horizontal">
    <div class="form-group">
    <fieldset>
        <legend>Calcul des taxes</legend>
        <label class="control-label">Prix Ht<input class="form-control" type="number" step="any" name="prixHt" id="idPrixHorsTaxe" value="<?= $prixHt?>"></label><br>
    </div>
        <label>Taux de TVA<input type="number" step="any" name="tauxTVA" id="idTauxTVA" value="<?= $tauxTVA?>"></label><br>
        <input type="submit" value="Calculer"><br>
        <label>Montant de la TVA<input type="text" name="montantTVA" id="idMontantTVA" value="<?php  if(isset($tva)&&!empty($tva)){echo number_format($tva,2,'€');}else {echo"";}?>" readonly></label><br>
        <label>Montant TTC<input type="text" name="montantTTC" id="idMontantTTC" value="<?php if(isset($prixTTC)&&!empty($prixTTC)){echo number_format($prixTTC,2,'€');}else {echo"";}?>" readonly></label><br>
</div>
    </fieldset>

</form>
</div>
</body>
</html>