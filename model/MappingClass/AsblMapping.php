<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class AsblMapping extends AbstractsMapping
{
    // atribut
    protected int $idasbl;
    protected string $titreSomme;
    protected string $textSomme;
    protected string $descriptionSomme;
    protected string $titreHistory;
    protected string $textHistory;
    protected string $descriptionHistory;
    protected string $titreObjectif;
    protected string $textObjectif;
    protected string $descriptionObjectif;

    //constructeur (heritier de abstract mapping)


    //methode
    public function getIdAsbl(): int
    {
        return $this->idasbl;
    }
    public function getTitreSomme(): string
    {
        return $this->titreSomme;
    }
    public function getTextSomme(): string
    {
        return $this->textSomme;
    }
    public function getDescriptionSomme(): string
    {
        return $this->descriptionSomme;
    }
    public function getTitreHistory(): string
    {
        return $this->titreHistory;
    }
    public function getTextHistory(): string
    {
        return $this->textHistory;
    }
    public function getDescriptionHistory(): string
    {
        return $this->descriptionHistory;
    }
    public function getTitreObjectif(): string
    {
        return $this->titreObjectif;
    }
    public function getTextObjectif(): string
    {
        return $this->textObjectif;
    }
    public function getDescriptionObjectif(): string
    {
        return $this->descriptionObjectif;
    }





    // void = dont need a return statement 

    public function setIdAsbl(int $idasbl): void
    {
        $this->idasbl = $idasbl;
    }
    public function setTitreSomme(string $titreSomme): void
    {
        $this->titreSomme = $titreSomme;
    }
    public function setTextSomme(string $textSomme): void
    {
        $this->textSomme = $textSomme;
    }
    public function setDescriptionSomme(string $descriptionSomme): void
    {
        $this->descriptionSomme = $descriptionSomme;
    }
    public function setTitreHistory(string $titreHistory): void
    {
        $this->titreHistory = $titreHistory;
    }
    public function setTextHistory(string $textHistory): void
    {
        $this->textHistory = $textHistory;
    }
    public function setDescriptionHistory(string $descriptionHistory): void
    {
        $this->descriptionHistory = $descriptionHistory;
    }
    public function setTitreObjectif(string $titreObjectif): void
    {
        $this->titreObjectif = $titreObjectif;
    }
    public function setTextObjectif(string $textObjectif): void
    {
        $this->textObjectif = $textObjectif;
    }
    public function setDescriptionObjectif(string $descriptionObjectif): void
    {
        $this->descriptionObjectif = $descriptionObjectif;
    }
}
