<?php

require_once "Inscription.php";
require_once "Salarie.php";

class Formation {
    private string $intitule;
    private int $nbPlaces;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private array $inscriptions = [];

    public function __construct(string $intitule, int $nbPlaces, DateTime $dateDebut, DateTime $dateFin)
    {
        $this->intitule = $intitule;
        $this->nbPlaces = $nbPlaces;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
    }

    public function getIntitule(): string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): void
    {
        $this->intitule = $intitule;
    }

    public function getNbPlaces(): int
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces(int $nbPlaces): void
    {
        $this->nbPlaces = $nbPlaces;
    }

    public function getDateDebut(): DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(DateTime $dateDebut): void
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin(): DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(DateTime $dateFin): void
    {
        $this->dateFin = $dateFin;
    }

    public function inscrireSalarie(Salarie $salarie): void
    {
        if (count($this->inscriptions) < $this->nbPlaces) {
            $this->inscriptions[] = new Inscription(0,"",$salarie);;
        }
    }

    public function getInscriptions(): array
    {
        return $this->inscriptions;
    }

    public function noterSalarie(Salarie $salarie, int $note, string $appreciation):void
    {
        foreach ($this->inscriptions as $inscription) {
            if ($inscription->getSalarie() == $salarie) {
                $inscription->setNote($note);
                $inscription->setAppreciation($appreciation);
            }
        }
    }
}