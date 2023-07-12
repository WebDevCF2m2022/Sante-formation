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


    /**getter
     * @return  int id of home page
     */
    public function getIdAccueil(): int
    {
        return $this->idAccueil;
    }

    /**getter
     * @return string title of home page
     */
    public function getAccueilTitre(): string{
        return $this->accueilTitre;
    }

    /**getter
     * @return string text of home page
     */
    public function getAccueilText(): string{
        return $this->accueilText;
    }

    /**getter
     * @return string description of home page
     */
    public function getAccueilDescription(): string{
        return $this->accueilDescription;
    }

    /**getter
     * @return string pic of home page
     */
    public function getAccueilImage(): string{
        return $this->accueilImage;
    }

    /**getter
     * @return string button of home page
     */
    public function getAccueilButton(): string{
        return $this->accueilButton;
    }




    /**setter
     * @param int $idAccueil
     */
    public function setIdAccueil(int $idAccueil): void
    {
        $this->idAccueil = $idAccueil;
    }

    /**setter
     * @param string $accueilTitre
     * @return void
     */
    public function setAccueilTitre(string $accueilTitre):void
    {
        $this->accueilTitre =$accueilTitre;
    }

    /**setter
     * @param string $accueilText
     */
    public function setAccueilText(string $accueilText): void
    {
        $this->accueilText = $accueilText;
    }

    /**setter
     * @param string $accueilDescription
     * @return void
     */
    public function setAccueilDescription(string $accueilDescription): void
    {
        $this->accueilDescription =$accueilDescription;
    }

    /**setter
     * @param string $accueilImage
     * @return void
     */
    public function setAccueilImage(string $accueilImage): void
    {
        $this->accueilImage = $accueilImage;
    }

    /**setter
     * @param string $accueilButton
     * @return void
     */
    public function setAccueilButton(string $accueilButton): void
    {
        $this->accueilButton =$accueilButton;
    }







    
}