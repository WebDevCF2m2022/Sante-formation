<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class ValuersMapping extends AbstractsMapping
{

    protected int $idValeurs ;
    protected string $valeursTitre ;
    protected string $valeurText ;
    protected string $valeurLogo ;


    /**getter
     * @return int
     */
    public function getIdValeurs(): int
    {
        return $this->idValeurs;
    }

    /**getter
     * @return string
     */
    public function getValeursTitre(): string
    {
        return $this->valeursTitre;
    }

    /**getter
     * @return string
     */
    public function getValeurText(): string
    {
        return $this->valeurText;
    }

    /**getter
     * @return string
     */
    public function getValeurLogo(): string
    {
        return $this->valeurLogo;
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

    /**setter
     * @param string $valeurText
     */
    public function setValeurText(string $valeurText): void
    {
        $this->valeurText = $valeurText;
    }

    /**setter
     * @param string $valeurLogo
     */
    public function setValeurLogo(string $valeurLogo): void
    {
        $this->valeurLogo = $valeurLogo;
    }

}