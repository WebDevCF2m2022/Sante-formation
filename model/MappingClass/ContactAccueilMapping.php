<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class ContactAccueilMapping extends AbstractsMapping
{

    protected  int $idContactAccueil;
    protected string $contactAccueilTitre ;
    protected  string $contactAccueilDescription ;
    protected  string $contactAccueilName ;
    protected  string $contactAccueilEmail ;
    protected string $contactAccueilMsg ;
    protected string $contactAccueilButton ;


    /**getter
     * @return int if of contact home
     */
    public function getIdContactAccueil(): int
    {
        return $this->idContactAccueil;
    }

    /**getter
     * @return string title of contact home
     */
    public function getContactAccueilTitre(): string
    {
        return $this->contactAccueilTitre;
    }

    /**getter
     * @return string description of contact home
     */
    public function getContactAccueilDescription(): string
    {
        return $this->contactAccueilDescription;
    }

    /**getter
     * @return string name of contact home
     */
    public function getContactAccueilName(): string
    {
        return $this->contactAccueilName;
    }

    /**getter
     * @return string mail of  contact home
     */
    public function getContactAccueilEmail(): string
    {
        return $this->contactAccueilEmail;
    }

    /**getter
     * @return string msg of contact home
     */
    public function getContactAccueilMsg(): string
    {
        return $this->contactAccueilMsg;
    }


    /**getter
     * @return string button of contact home
     */
    public function getContactAccueilButton(): string
    {
        return $this->contactAccueilButton;
    }


    /**setter
     * @param int $idContactAccueil
     */
    public function setIdContactAccueil(int $idContactAccueil): void
    {
        $this->idContactAccueil = $idContactAccueil;
    }

    /**setter
     * @param string $contactAccueilTitre
     */
    public function setContactAccueilTitre(string $contactAccueilTitre): void
    {
        $this->contactAccueilTitre = $contactAccueilTitre;
    }


    /**setter
     * @param string $contactAccueilDescription
     */
    public function setContactAccueilDescription(string $contactAccueilDescription): void
    {
        $this->contactAccueilDescription = $contactAccueilDescription;
    }


    /**setter
     * @param string $contactAccueilName
     */
    public function setContactAccueilName(string $contactAccueilName): void
    {
        $this->contactAccueilName = $contactAccueilName;
    }

    /**setter
     * @param string $contactAccueilEmail
     */
    public function setContactAccueilEmail(string $contactAccueilEmail): void
    {
        $this->contactAccueilEmail = $contactAccueilEmail;
    }


    /**setter
     * @param string $contactAccueilMsg
     */
    public function setContactAccueilMsg(string $contactAccueilMsg): void
    {
        $this->contactAccueilMsg = $contactAccueilMsg;
    }

    /**setter
     * @param string $contactAccueilButton
     */
    public function setContactAccueilButton(string $contactAccueilButton): void
    {
        $this->contactAccueilButton = $contactAccueilButton;
    }


}