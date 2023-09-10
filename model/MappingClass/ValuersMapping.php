<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class ValuersMapping extends AbstractsMapping
{

    protected int $idValeurs ;
    protected string $valeursTitre ;

    protected string $valeurLogo ;

    protected string $valueDescription;

    protected string $valeurT;


    /**getter
     * @return int id of values
     */
    public function getIdValeurs(): int
    {
        return $this->idValeurs;
    }

    /**getter
     * @return string title of values
     */
    public function getValeursTitre(): string
    {
        return $this->valeursTitre;
    }

    /**geetter
     * @return string
     */
    public function getValeurT(): string
    {
        return $this->valeurT;
    }

    /**getter
     * @return string logo of values
     */
    public function getValeurLogo(): string
    {
        return $this->valeurLogo;
    }

    /**getter
     * @return string
     */
    public function getValueDescription(): string
    {
        return $this->valueDescription;
    }
    /**setter
     * @param int $idValeurs
     */
    public function setIdValeurs(int $idValeurs): void
    {
        $this->idValeurs = $idValeurs;
    }

    /**setter
     * @param string $valeursTitre
     */
    public function setValeursTitre(string $valeursTitre): void
    {
        $this->valeursTitre = $valeursTitre;
    }

    /**
     * @param string $valeurT
     */
    public function setValeurT(string $valeurT): void
    {
        $this->valeurT = $valeurT;
    }

    /**setter
     * @param string $valeurLogo
     */
    public function setValeurLogo(string $valeurLogo): void
    {
        $this->valeurLogo = $valeurLogo;
    }

    /**setter
     * @param string $valueDescription
     */
    public function setValueDescription(string $valueDescription): void
    {
        $this->valueDescription = $valueDescription;
    }

}