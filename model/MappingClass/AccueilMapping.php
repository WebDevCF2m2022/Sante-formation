<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class AccueilMapping extends AbstractsMapping
{


  // attribute
    protected int $idAccueil;
    protected string $accueilTitre;
    protected string  $accueilText;
    protected string  $accueilDescription;
    protected string $accueilImage;
    protected string $accueilButton;




    //methode

    //getter
    /**
     * @return int
     */
    public function getIdAccueil(): int
    {
        return $this->idAccueil;
    }

    /**
     * @return string
     */
    public function getAccueilTitre(): string{
        return $this->accueilTitre;
    }

    /**
     * @return string
     */
    public function getAccueilText(): string{
        return $this->accueilText;
    }

    /**
     * @return string
     */
    public function getAccueilDescription(): string{
        return $this->accueilDescription;
    }

    /**
     * @return string
     */
    public function getAccueilImage(): string{
        return $this->accueilImage;
    }

    /**
     * @return string
     */
    public function getAccueilButton(): string{
        return $this->accueilButton;
    }


    //setter

    /**
     * @param int $idAccueil
     */
    public function setIdAccueil(int $idAccueil): void
    {
        $this->idAccueil = $idAccueil;
    }

    /**
     * @param string $accueilTitre
     * @return void
     */
    public function setAccueilTitre(string $accueilTitre):void
    {
        $this->accueilTitre =$accueilTitre;
    }

    /**
     * @param string $accueilText
     */
    public function setAccueilText(string $accueilText): void
    {
        $this->accueilText = $accueilText;
    }

    /**
     * @param string $accueilDescription
     * @return void
     */
    public function setAccueilDescription(string $accueilDescription): void
    {
        $this->accueilDescription =$accueilDescription;
    }

    /**
     * @param string $accueilImage
     * @return void
     */
    public function setAccueilImage(string $accueilImage): void
    {
        $this->accueilImage = $accueilImage;
    }

    /**
     * @param string $accueilButton
     * @return void
     */
    public function setAccueilButton(string $accueilButton): void
    {
        $this->accueilButton =$accueilButton;
    }







    
}