<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class ContactMapping extends AbstractsMapping
{

    protected int $idContact ;
    protected  string $contactTitre ;
    protected string $contactText ;
    protected string $contactName ;
    protected string $contactEmail ;
    protected string $contactCategorie ;
    protected string $contactMessage ;
    protected string $contactButton ;


    /**getter
     * @return int
     */
    public function getIdContact(): int
    {
        return $this->idContact;
    }

    /**getter
     * @return string
     */
    public function getContactTitre(): string
    {
        return $this->contactTitre;
    }

    /**getter
     * @return string
     */
    public function getContactText(): string
    {
        return $this->contactText;
    }

    /**getter
     * @return string
     */
    public function getContactName(): string
    {
        return $this->contactName;
    }

    /**getter
     * @return string
     */
    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }

    /**getter
     * @return string
     */
    public function getContactCategorie(): string
    {
        return $this->contactCategorie;
    }


    /**getter
     * @return string
     */
    public function getContactMessage(): string
    {
        return $this->contactMessage;
    }

    /**getter
     * @return string
     */
    public function getContactButton(): string
    {
        return $this->contactButton;
    }


    /**setter
     * @param int $idContact
     */
    public function setIdContact(int $idContact): void
    {
        $this->idContact = $idContact;
    }

    /**setter
     * @param string $contactTitre
     */
    public function setContactTitre(string $contactTitre): void
    {
        $this->contactTitre = $contactTitre;
    }

    /**setter
     * @param string $contactText
     */
    public function setContactText(string $contactText): void
    {
        $this->contactText = $contactText;
    }


    /**setter
     * @param string $contactName
     */
    public function setContactName(string $contactName): void
    {
        $this->contactName = $contactName;
    }

    /**setter
     * @param string $contactEmail
     */
    public function setContactEmail(string $contactEmail): void
    {
        $this->contactEmail = $contactEmail;
    }


    /**setter
     * @param string $contactCategorie
     */
    public function setContactCategorie(string $contactCategorie): void
    {
        $this->contactCategorie = $contactCategorie;
    }

    /**setter
     * @param string $contactMessage
     */
    public function setContactMessage(string $contactMessage): void
    {
        $this->contactMessage = $contactMessage;
    }

    /**setter
     * @param string $contactButton
     */
    public function setContactButton(string $contactButton): void
    {
        $this->contactButton = $contactButton;
    }






}