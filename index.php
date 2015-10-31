<?php

include_once('Modele/ConnexionBD.php');
include_once 'classes/Commande.class.php';
include_once 'classes/Membres.class.php';
include_once 'classes/Produit.class.php';
include_once 'classes/Page.class.php';

//setlocale(LC_MONETARY, 'fr_CA');

if (!isset($_GET['section'])) {

	$section = 'index';

} else {

	$section = $_GET['section'];
}

include_once('controleur/index.php');