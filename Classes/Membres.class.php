<?php

class Membres {
    private $nom;
    private $prenom;
	private $email;
	private $adresse;
    private $telephone;
	private $motDePasse;
    
    public function __construct($nom, $prenom,$email,$adresse,$telephone,$motDePasse) {
        $this->nom = $nom;
        $this->prenom = $prenom;
		$this->email = $email;
		$this->adresse = $adresse;
        $this->telephone = $telephone;
		$this->motDePasse = $motDePasse;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
	
	public function getEmail() {
        return $this->email;
    }
	
	public function getAdresse() {
        return $this->adresse;
    }

    public function getTel() {
        return $this->telephone;
    }
	
	public function getMotDePasse() {
        return $this->motDePasse;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
	
	public function setImage($image) {
        $this->image = $image;
    }
	
	public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setTel($telephone) {
        $this->telephone = $telephone;
    }
	
	public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

}
