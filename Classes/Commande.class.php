<?php

class Commande {
    
    public function __construct() {
        if (!isset($_SESSION)){
			session_start();
		}
		if (!isset($_SESSION['commande'])){
			$_SESSION['commande'] = array();
		}
    }

}
