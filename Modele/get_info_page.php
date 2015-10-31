<?php
function get_info_page($section) {
    $bdd = getConnexion();

    try {

        $requete = $bdd->prepare('SELECT * FROM pages WHERE section = :page');
        $requete->bindParam(':page', $section, PDO::PARAM_STR);

        $requete->execute();

        $donnees = $requete->fetchAll();

        $requete->closeCursor(); // Termine le traitement de la requête

        return $donnees;
        
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

}
?>
