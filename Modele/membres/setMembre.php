<?php

function SetMembre()
{	
	include_once('Modele/ConnexionBD.php');
	$bdd = getConnexion();	
	if (isset($_POST['adresse']) and isset($_POST['email']) and isset($_POST['pwd1']) and isset($_POST['name']) and isset($_POST['prenom']) and isset($_POST['tel'])) {
	$req = $bdd->query("INSERT INTO membre(adresse_membre, email_membre, motDepasse_membre, nom_membre, 
		prenom_membre, telephone_membre) VALUES('".$_POST['adresse']."', '".$_POST['email']."', '"
		.$_POST['pwd1']."', '".$_POST['name']."', '".$_POST['prenom']."', '".$_POST['tel']."');
		commit;");
	
	}
}