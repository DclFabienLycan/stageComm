<?php

class Commentaire {

    private $nom;
    private $prenom;
    private $noteContent;
    private $content;

    public function __construct($nom, $prenom, $noteContent, $content) {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->noteContent = $noteContent;
        $this->content = $content;
    }

}