<?php

class Produit {
    private $nom;
    private $rabais;
	private $image;
    
    public function __construct($nom, $rabais,$image) {
        $this->nom = $nom;
        $this->rabais = $rabais;
		$this->image = $image;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getRabais() {
        return $this->rabais;
    }
	
	public function getImage() {
        return $this->image;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setRabais($rabais) {
        $this->rabais = $rabais;
    }
	
	public function setImage($image) {
        $this->image = $image;
    }

}
