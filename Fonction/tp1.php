<?php
//Créer un tableau
//multidimensionnel associatif dont les clés sont des noms de personnes
//et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge
//de la personne.

// Je crée un premier tableau contenant le prénom, la ville de résidence et l’âge de la personne
$petitPoulet[]="Gael";
$petitPoulet[]="Dans le camping car de son chien";
$petitPoulet[]=4;

$petitMignon[]="Titouan";
$petitMignon[]="Canapé";
$petitMignon[]=1;

 $personnes['Salmon']=$petitPoulet;
 $personnes['Bodin']=$petitMignon;

 //var_dump($personnes);

 //Créer un tableau multidimensionnel associatif dont les clés sont des
//noms de personnes
//et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence
//et l’âge de la personne avec une série de valeurs associées.

$grosPoulet["prenom"]="Gael";
$grosPoulet["ville"]="Dans le camping car de son chien";
$grosPoulet["age"]=4;

$grosMignon["prenom"]="Titouan";
$grosMignon["ville"]="Canapé";
$grosMignon["age"]=1;

$listePersonnes['Salmon']=$grosPoulet;
$listePersonnes['Bodin']=$grosMignon;
//var_dump($listePersonnes);

// Ou comme cela
$caliendo = ["prenom" => "Julien", "ville" => "Brest", "age" => 37];
$tab["Caliendo"] = $caliendo;

// Soit ca :
$tabQ2 = [
    "Caliendo" => [
        "prenom" => "Julien",
        "ville" => "Brest",
        "age" => 37
    ],
    "Bodin" => [
    "prenom" => "Delphine",
    "ville" => "Nantes",
    "age" => 20
]
];
//Utiliser une boucle foreach pour lire les tableaux des exercices 1 et 2 et
//afficher les
//informations avec le format suivant :
//test
foreach($grosPoulet as $cle => $value)
    echo($cle." ".$value." ");

echo("\n Je lie un deuxième tableau \n");
foreach($tabQ2 as $macle => $mavalue){
    echo($macle."\n ");
   // $value=explode()
    foreach ($mavalue as $value=> $key){
        echo ($value." ".$key."\n");
   }
}
echo("\n Je lie un troisième tableau \n");
foreach($personnes as $macle => $mavalue){
    echo($macle."\n ");

    foreach ($mavalue as $value=> $key){
        echo ($value." ".$key."\n");
    }
}
//Exercice 4
//Créer un tableau contenant une liste d’adresses e
//mail.
//Extraire le nom de serveur de ces données puis réaliser des statistiques sur les
//occurrences de chaque fournisseur d’accès.

$mails = ['jean@eni.fr', 'fred@linux.net', 'lea@renault.fr', 'caroline@eni.fr',
    'contact@eni-ecole.fr', 'valentina@ferrari.it', 'melanie@eni-ecole.fr',
    'philippe@eni.fr', 'typhaine@belfort.fr', 'louis@leparisien.fr'];

$essai='jean@eni.fr';
$position=strpos($essai,"@");
$position2=strpos($essai,".");
$taille=strlen($essai);
$nomServeur=substr($essai,$position+1,$taille-$position2);
echo("\n"."@ est en position ".$position." . est en position ".$position2." et la taille est de ".$taille."nom du serveeur ".$nomServeur);

echo("\nListe\n");
foreach ($mails as $mail){
    echo($mail."\n");
    $position1=strpos($mail,"@");
    $position3=strpos($mail,".");
    $taille3=strlen($mail);
    $nomServeurA=substr($mail,$position1+1,$taille3-$position3);
   // echo("\n"."@ est en position ".$position1." . est en position ".$position3." et la taille est de ".$taille3."nom du serveeur ".$nomServeurA);
    //$nomServeur=between ('@', '.', $mail);
    echo($nomServeurA."\n");
};
