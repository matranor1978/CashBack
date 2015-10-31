
<?php

function getProduits()
{
	include_once('Modele/ConnexionBD.php');
	$bdd = getConnexion();
    $req = $bdd->prepare('select * from produit');
    $req->execute();
    $produits = $req->fetchAll();
    return $produits;
}
