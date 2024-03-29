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
    protected string $option1 ;
    protected  string $option2 ;
    protected  string $option3 ;
    protected  string $option4;
    protected  string $contactCoor ;
    protected string $contactSiege ;
    protected string $contactMailCoo ;
    protected  string $contactTel ;
    protected  string $contactReseaux ;

    /**getter
     * @return int id of contact page
     */
    public function getIdContact(): int
    {
        return $this->idContact;
    }

    /**getter
     * @return string title of contact page
     */
    public function getContactTitre(): string
    {
        return $this->contactTitre;
    }

    /**getter
     * @return string text of contact page
     */
    public function getContactText(): string
    {
        return $this->contactText;
    }

    /**getter
     * @return string name of contact page
     */
    public function getContactName(): string
    {
        return $this->contactName;
    }

    /**getter
     * @return string name of contact page
     */
    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }

    /**getter
     * @return string category of contact page
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

    /**getter
     * @return string
     */public function getOption1(): string
    {
    return $this->option1;
    }

    /**getter
     * @return string
     */public function getOption2(): string
    {
    return $this->option2;
    }

    /**getter
     * @return string
     */public function getOption3(): string
     {
    return $this->option3;
     }

     /**getter
      * @return string
      */public function getOption4(): string
    {
    return $this->option4;
    }

    /**getter
     * @return string
     */
    public function getContactCoor(): string
    {
        return $this->contactCoor;
    }

    /**getter
     * @return string
     */
    public function getContactMailCoo(): string
    {
        return $this->contactMailCoo;
    }

    /**getter
     * @return string
     */
    public function getContactReseaux(): string
    {
        return $this->contactReseaux;
    }

    /**getter
     * @return string
     */
    public function getContactSiege(): string
    {
        return $this->contactSiege;
    }


    /**getter
     * @return string
     */
    public function getContactTel(): string
    {
        return $this->contactTel;
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

   /**setter
    * @param string $option1
    */public function setOption1(string $option1): void
     {
    $this->option1 = $option1;
     }

    /**setter
     * @param string $option2
     */public function setOption2(string $option2): void
     {
    $this->option2 = $option2;
     }

     /**setter
      * @param string $option3
      */public function setOption3(string $option3): void
     {
    $this->option3 = $option3;
     }

     /**setter
      * @param string $option4
      */public function setOption4(string $option4): void
     {
    $this->option4 = $option4;
     }

    /**setter
     * @param string $contactCoor
     */
    public function setContactCoor(string $contactCoor): void
    {
        $this->contactCoor = $contactCoor;
    }

    /**setter
     * @param string $contactMailCoo
     */
    public function setContactMailCoo(string $contactMailCoo): void
    {
        $this->contactMailCoo = $contactMailCoo;
    }

    /**setter
     * @param string $contactReseaux
     */
    public function setContactReseaux(string $contactReseaux): void
    {
        $this->contactReseaux = $contactReseaux;
    }

    /**setter
     * @param string $contactSiege
     */
    public function setContactSiege(string $contactSiege): void
    {
        $this->contactSiege = $contactSiege;
    }

    /**setter
     * @param string $contactTel
     */
    public function setContactTel(string $contactTel): void
    {
        $this->contactTel = $contactTel;
    }

}