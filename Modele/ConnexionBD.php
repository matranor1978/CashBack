<?php

// Connexion à la base de données
function getConnexion() {
	try
{
    $bdd = new PDO('mysql:host=localhost;dbname=cashback', 'root', '');
	mysql_query("SET NAMES UTF8");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
return $bdd;
}

