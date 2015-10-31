<?php

function setCommande()
{	

	date_default_timezone_set('America/Montreal'); 	
	$date1 = getTime ();
	$bdd = getConnexion();
	foreach ($_SESSION['commande'] as $element) {
            
	$req2 = $bdd->query("INSERT INTO ligne_commande VALUES((select id_commande from commande where id_membre = ".$_SESSION['id']." and date = '".$date1-> format('Y-m-d H:i:s')."') ,".$element[0][0].",".$element[0][3].");
					commit; ");		
	}			
		
}

function getTime () {
	
	include_once('Modele/ConnexionBD.php');
	$bdd = getConnexion();
	date_default_timezone_set('America/Montreal'); 
	$date  = new DateTime();
	
	echo $date-> format('Y-m-d H:i:s');
    $req1 = $bdd->query("INSERT INTO commande(date, id_membre) VALUES('".$date-> format('Y-m-d H:i:s')."'," .$_SESSION['id'].");
					commit; ");
echo $date-> format('Y-m-d H:i:s');
return $date;
}





