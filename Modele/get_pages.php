<?php
function get_pages() {
	$bdd = getConnexion();
    try {

        $requete = $bdd->query('SELECT * FROM pages');

        $donnees = $requete->fetchAll();

        $requete->closeCursor(); // Termine le traitement de la requête

        return $donnees;
        
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

}
?>