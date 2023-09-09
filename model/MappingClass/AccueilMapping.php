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
    protected string $titreAction;
    protected string $photoAction;
    protected string $textAction;
    protected string $buttonAction;
    protected string $titreFormation;
    protected string $photoFormation;
    protected string $textFormation;
    protected string $buttonFormation;
    protected string $titreAgenda;
    protected string $photoAgenda;
    protected string $textAgenda;
    protected string $descriptionAgenda;
    protected string $titreValeurs;
    protected string $textValeurs;




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

    /**getter
     * @return string
     */
    public function getTitreAction(): string
    {
        return $this->titreAction;
    }

    /**getter
     * @return string
     */
    public function getPhotoAction(): string
    {
        return $this->photoAction;
    }

    /**getter
     * @return string
     */
    public function getTextAction(): string
    {
        return $this->textAction;
    }

    /**getter
     * @return string
     */
    public function getButtonAction(): string
    {
        return $this->buttonAction;
    }

    /**getter
     * @return string
     */
    public function getTitreFormation(): string
    {
        return $this->titreFormation;
    }

    /**getter
     * @return string
     */
    public function getPhotoFormation(): string
    {
        return $this->photoFormation;
    }

    /**getter
     * @return string
     */
    public function getTextFormation(): string
    {
        return $this->textFormation;
    }

    /**getter
     * @return string
     */
    public function getButtonFormation(): string
    {
        return $this->buttonFormation;
    }

    /**getter
     * @return string
     */
    public function getTitreAgenda(): string
    {
        return $this->titreAgenda;
    }

    /**getter
     * @return string
     */
    public function getPhotoAgenda(): string
    {
        return $this->photoAgenda;
    }

    /**getter
     * @return string
     */
    public function getTextAgenda(): string
    {
        return $this->textAgenda;
    }

    /**getter
     * @return string
     */
    public function getDescriptionAgenda(): string
    {
        return $this->descriptionAgenda;
    }


    /**getter
     * @return string
     */
    public function getTextValeurs(): string
    {
        return $this->textValeurs;
    }

    /**getter
     * @return string
     */
    public function getTitreValeurs(): string
    {
        return $this->titreValeurs;
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



    /**setter
     * @param string $buttonAction
     */
    public function setButtonAction(string $buttonAction): void
    {
        $this->buttonAction = $buttonAction;
    }

    /**setter
     * @param string $buttonFormation
     */
    public function setButtonFormation(string $buttonFormation): void
    {
        $this->buttonFormation = $buttonFormation;
    }

    /**setter
     * @param string $descriptionAgenda
     */
    public function setDescriptionAgenda(string $descriptionAgenda): void
    {
        $this->descriptionAgenda = $descriptionAgenda;
    }

    /**setter
     * @param string $photoAction
     */
    public function setPhotoAction(string $photoAction): void
    {
        $this->photoAction = $photoAction;
    }

    /**setter
     * @param string $photoAgenda
     */
    public function setPhotoAgenda(string $photoAgenda): void
    {
        $this->photoAgenda = $photoAgenda;
    }

    /**setter
     * @param string $photoFormation
     */
    public function setPhotoFormation(string $photoFormation): void
    {
        $this->photoFormation = $photoFormation;
    }

    /**setter
     * @param string $textAction
     */
    public function setTextAction(string $textAction): void
    {
        $this->textAction = $textAction;
    }

    /**setter
     * @param string $textAgenda
     */
    public function setTextAgenda(string $textAgenda): void
    {
        $this->textAgenda = $textAgenda;
    }

    /**setter
     * @param string $textFormation
     */
    public function setTextFormation(string $textFormation): void
    {
        $this->textFormation = $textFormation;
    }

    /**setter
     * @param string $textValeurs
     */
    public function setTextValeurs(string $textValeurs): void
    {
        $this->textValeurs = $textValeurs;
    }

    /**setter
     * @param string $titreAction
     */
    public function setTitreAction(string $titreAction): void
    {
        $this->titreAction = $titreAction;
    }

    /**setter
     * @param string $titreAgenda
     */
    public function setTitreAgenda(string $titreAgenda): void
    {
        $this->titreAgenda = $titreAgenda;
    }

    /**setter
     * @param string $titreFormation
     */
    public function setTitreFormation(string $titreFormation): void
    {
        $this->titreFormation = $titreFormation;
    }

    /**setter
     * @param string $titreValeurs
     */
    public function setTitreValeurs(string $titreValeurs): void
    {
        $this->titreValeurs = $titreValeurs;
    }

}