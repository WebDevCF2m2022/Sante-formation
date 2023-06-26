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
    public function getAccueilTitre(): string{
        return $this->accueilTitre;
    }

    public function getAccueilText(): string{
        return $this->accueilText;
    }
    public function getAccueilDescription(): string{
        return $this->accueilDescription;
    }

    public function getAccueilImage(): string{
        return $this->accueilImage;
    }

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

    public function setAccueilDescription(string $accueilDescription): void
    {
        $this->accueilDescription =$accueilDescription;
    }

    public function setAccueilImage(string $accueilImage): void
    {
        $this->accueilImage = $accueilImage;
    }

    public function setAccueilButton(string $accueilButton): void
    {
        $this->accueilButton =$accueilButton;
    }

    





    
}