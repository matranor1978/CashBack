<?php

function getMembre()
{
	include_once('Modele/ConnexionBD.php');
	$bdd = getConnexion();
    $req = $bdd->prepare('select * from membre');
    $req->execute();
    $membres = $req->fetchAll();
    return $membres;
}