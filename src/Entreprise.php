<?php

class Entreprise {
    private string $nom;
    private string $rueEntreprise;
    private string $CPEntreprise;
    private string $villeEntreprise;

    public function __construct(string $nom, string $rueEntreprise, string $CPEntreprise, string $villeEntreprise)
    {
        $this->nom = $nom;
        $this->rueEntreprise = $rueEntreprise;
        $this->CPEntreprise = $CPEntreprise;
        $this->villeEntreprise = $villeEntreprise;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getRueEntreprise(): string
    {
        return $this->rueEntreprise;
    }

    public function setRueEntreprise(string $rueEntreprise): void
    {
        $this->rueEntreprise = $rueEntreprise;
    }

    public function getCPEntreprise(): string
    {
        return $this->CPEntreprise;
    }

    public function setCPEntreprise(string $CPEntreprise): void
    {
        $this->CPEntreprise = $CPEntreprise;
    }

    public function getVilleEntreprise(): string
    {
        return $this->villeEntreprise;
    }

    public function setVilleEntreprise(string $villeEntreprise): void
    {
        $this->villeEntreprise = $villeEntreprise;
    }

}