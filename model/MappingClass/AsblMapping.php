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

    /**getter
     * @return int id of asbl
     */
    public function getIdAsbl(): int
    {
        return $this->idasbl;
    }

    /**getter
     * @return string title of how society is
     */
    public function getTitreSomme(): string
    {
        return $this->titreSomme;
    }

    /**getter
     * @return string text of how society is
     */
    public function getTextSomme(): string
    {
        return $this->textSomme;
    }

    /**getter
     * @return string description of how  society is
     */
    public function getDescriptionSomme(): string
    {
        return $this->descriptionSomme;
    }

    /**getter
     * @return string title of history society
     */
    public function getTitreHistory(): string
    {
        return $this->titreHistory;
    }

    /**getter
     * @return string text of history society
     */
    public function getTextHistory(): string
    {
        return $this->textHistory;
    }

    /**getter
     * @return string description of history society
      */
    public function getDescriptionHistory(): string
    {
        return $this->descriptionHistory;
    }

    /**getter
     * @return string title the objective society
     */
    public function getTitreObjectif(): string
    {
        return $this->titreObjectif;
    }

    /**getter
     * @return string text the objective society
     */
    public function getTextObjectif(): string
    {
        return $this->textObjectif;
    }

    /**
     * @return string description the objective society
     */
    public function getDescriptionObjectif(): string
    {
        return $this->descriptionObjectif;
    }





    // void = dont need a return statement 

    /*** setter
     * @param int $idasbl
     * @return void
     */
    public function setIdAsbl(int $idasbl): void
    {
        $this->idasbl = $idasbl;
    }

    /** setter
     * @param string $titreSomme
     * @return void
     */
    public function setTitreSomme(string $titreSomme): void
    {
        $this->titreSomme = $titreSomme;
    }

    /**setter
     * @param string $textSomme
     * @return void
     */
    public function setTextSomme(string $textSomme): void
    {
        $this->textSomme = $textSomme;
    }

    /**setter
     * @param string $descriptionSomme
     * @return void
     */
    public function setDescriptionSomme(string $descriptionSomme): void
    {
        $this->descriptionSomme = $descriptionSomme;
    }

    /**setter
     * @param string $titreHistory
     * @return void
     */
    public function setTitreHistory(string $titreHistory): void
    {
        $this->titreHistory = $titreHistory;
    }

    /**setter
     * @param string $textHistory
     * @return void
     */
    public function setTextHistory(string $textHistory): void
    {
        $this->textHistory = $textHistory;
    }

    /**setter
     * @param string $descriptionHistory
     * @return void
     */
    public function setDescriptionHistory(string $descriptionHistory): void
    {
        $this->descriptionHistory = $descriptionHistory;
    }

    /**setter
     * @param string $titreObjectif
     * @return void
     */
    public function setTitreObjectif(string $titreObjectif): void
    {
        $this->titreObjectif = $titreObjectif;
    }

    /**setter
     * @param string $textObjectif
     * @return void
     */
    public function setTextObjectif(string $textObjectif): void
    {
        $this->textObjectif = $textObjectif;
    }

    /**setter
     * @param string $descriptionObjectif
     * @return void
     */
    public function setDescriptionObjectif(string $descriptionObjectif): void
    {
        $this->descriptionObjectif = $descriptionObjectif;
    }
}
