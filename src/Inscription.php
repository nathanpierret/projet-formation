<?php

require_once "Salarie.php";

class Inscription {
    private int $note;
    private string $appreciation;
    private Salarie $salarie;

    public function __construct(int $note, string $appreciation, Salarie $salarie)
    {
        $this->note = $note;
        $this->appreciation = $appreciation;
        $this->salarie = $salarie;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function setNote(int $note): void
    {
        $this->note = $note;
    }

    public function getAppreciation(): string
    {
        return $this->appreciation;
    }

    public function setAppreciation(string $appreciation): void
    {
        $this->appreciation = $appreciation;
    }

    public function getSalarie(): Salarie
    {
        return $this->salarie;
    }

    public function setSalarie(Salarie $salarie): void
    {
        $this->salarie = $salarie;
    }

}