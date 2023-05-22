<?php

require_once "Entreprise.php";

class Salarie {
    private string $prenom;
    private string $nom;
    private Entreprise $entreprise;

    public function __construct(string $prenom, string $nom, Entreprise $entreprise)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->entreprise = $entreprise;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getEntreprise(): Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(Entreprise $entreprise): void
    {
        $this->entreprise = $entreprise;
    }

}