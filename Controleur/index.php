<?php
// On demande les informations sur les pages afin de créer le menu de navigation
include_once('modele/get_pages.php');
$pages = get_pages();

$menu = [];

 foreach($pages as $cle => $element) {
 	$pages[$cle]['id'] = $element['id'];
 	$pages[$cle]['section'] = $element['section'];
    $pages[$cle]['titre'] = htmlspecialchars($element['titre']);

    $menu[] = new Page($pages[$cle]['id'], $pages[$cle]['section'], $pages[$cle]['titre']);
}

// On demande les informations sur la page à afficher
include_once('modele/get_info_page.php');
$info = get_info_page($section);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage

if(empty($info)) {
	$titre = 'Page non existante';
	$main = 'sections/main_404.php';

} else {
	$titre = htmlspecialchars($info[0]['titre']);
	$main = 'sections/main_' . $info[0]['section'] . '.php';
}

$trouve = false;
global $text2;
if($section == 'produits') {
	include_once('Modele/produits/getProduits.php');
	$donneesp = getProduits();
	$lignes = array();
	foreach ($donneesp as $p) {

		if (isset($_POST["combo_qte".$p["id_produit"]]) and $_POST["combo_qte".$p["id_produit"]] != 0) {
			session_start ();
			$_SESSION['qte'] = $_POST["combo_qte".$p["id_produit"]];
			$_SESSION['id_produit'] = $p['id_produit'];
			$_SESSION['nom'] = $p['nom_produit'];
			$_SESSION['rabais'] = number_format($p['rabais_produit'],2);
			$_SESSION['image'] = $p['image'];
			$_SESSION['total'] = number_format($_SESSION['qte']*$_SESSION['rabais'],2);
			$nouvelleLigne = array($_SESSION['id_produit'],$_SESSION['nom'], $_SESSION['rabais'],$_SESSION['qte'],$_SESSION['total']);
			$lignes[] = $nouvelleLigne;	
		}	
    }
	$_SESSION['commande'][]= $lignes;
	if (isset($_SESSION['total'])) {
		$_SESSION['grand_total'] = number_format($_SESSION['grand_total'] + $_SESSION['total'],2) ;
		$_SESSION['economies'] = '<center><div> <p id="economiesT1">Économies: </p><p id="economiesC">'. number_format($_SESSION['grand_total'],2).' $</p></div></center><a id="bcommander" style ="text-align: center"  href="index.php?section=commande">Commander</a>';
	}
}

if($section == 'login') {
	include_once('Modele/membres/getMembre.php');
	$donneesm = getMembre();
	if (isset($_POST['email_login']) and isset($_POST['pwd'])) {
		foreach ($donneesm as $m) {
            if ($m['email_membre'] == htmlspecialchars($_POST['email_login']) and $m['motDepasse_membre'] == htmlspecialchars($_POST['pwd'])) {
				$trouve = true;
				// on la démarre :)
				session_start ();
				// on enregistre le nom et prénom du membre comme variables de session 
				$_SESSION['nom'] = $m['nom_membre'];
				$_SESSION['prenom'] = $m['prenom_membre'];
				$_SESSION['id'] = $m['id_membre'];
				$_SESSION['adresse'] = $m['adresse_membre'];
				$_SESSION['login'] = '<p id="economiesT"> Bonjour '.$_SESSION['prenom'].' '.$_SESSION['nom'].'</br><a id="bquitter" style ="text-align: center" href="deconnexion.php">Se déconnecter</a>';				
				header("Location:index.php?section=produits");
            }
        }
		if (!$trouve) {
			$text2 = '<span class = "text2">É-mail ou mot de passe incorrect!</span>';
		}
	}
    
		
	include_once('Modele/membres/setMembre.php');
	setMembre();

	
	
	// On effectue du traitement sur les données (contrôleur)
	// Ici, on doit surtout sécuriser l'affichage

	//$inventaire = new Catalogue();
	
	//foreach($donnees as $cle => $element) {
    	//$donnees[$cle]['nom'] = htmlspecialchars($element['nom']);
    	//$donnees[$cle]['prix'] = htmlspecialchars(money_format('%.2n', $element['prix']));
		//$donnees[$cle]['prix'] = htmlspecialchars($element['prix']);
    	//$inventaire->ajouterElement(new Biscuit($donnees[$cle]['nom'], $donnees[$cle]['prix']));
	//}
}

if($section == 'commande') {
	session_start ();
}

if($section == 'validationCommande') {	
	session_start ();				
	include_once('Modele/commandes/setCommande.php');
	setCommande();
	$_SESSION['grand_total'] = 0;
	$_SESSION['economies'] = null;
}

// On affiche la page (vue)
include_once('Vue/index.php');
?>


