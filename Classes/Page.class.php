<?php
/**
 * Description of newPHPClass
 *
 * @author aburns
 */
class Page {
    private $id;
    private $section;
    private $titre;
    
    public function __construct($id, $section, $titre) {
        $this->id = $id;
        $this->section = $section;
        $this->titre = $titre;
    }

    public function getId() {
        return $this->id;
    }

    public function getSection() {
        return $this->section;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setSection($section) {
        $this->section = $section;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

}
?>