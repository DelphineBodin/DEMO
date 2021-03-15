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
$petitPoulet[]="Canapé";
$petitPoulet[]=1;

 $personnes['Salmon']=$petitPoulet;
 $personnes['Bodin']=$petitMignon;

 var_dump($personnes);

 //Créer un tableau multidimensionnel associatif dont les clés sont des
//noms de personnes
//et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence
//et l’âge de la personne avec une série de valeurs associées.

$grosPoulet["Gael"]=500;
$grosPoulet["Dans le camping car de son chien"]=558;
$grosPoulet["Quatre"]=45;

$grosMignon["Titouan"]=562;
$grosMignon["Canapé"]=55;
$grosMignon["un"]=58;

$listePersonnes['Salmon']=$grosPoulet;
$listePersonnes['Bodin']=$grosMignon;
var_dump($listePersonnes);

//Utiliser une boucle foreach pour lire les tableaux des exercices 1 et 2 et
//afficher les
//informations avec le format suivant :
//test
