<?php

require_once "../src/Entreprise.php";
require_once "../src/Salarie.php";
require_once "../src/Inscription.php";
require_once "../src/Formation.php";

$entreprise = new Entreprise("Palco & Co","6 Rue du chemin","25000","Besançon");
$salarie = new Salarie("Odin","Viennet",$entreprise);
$salarie2 = new Salarie("Esteban","Racine",$entreprise);
$formation = new Formation("Pose de placo",1,
    DateTime::createFromFormat("d/m/Y","15/05/2023"),DateTime::createFromFormat("d/m/Y","19/05/2023"));
$formation2 = new Formation("Pose de placo eco",1,
    DateTime::createFromFormat("d/m/Y","22/05/2023"), DateTime::createFromFormat("d/m/Y","26/05/2023"));
$formation2->inscrireSalarie($salarie);
$formation->inscrireSalarie($salarie2);
$formation2->noterSalarie($salarie,13,"Admis - Mention : Assez bien");
