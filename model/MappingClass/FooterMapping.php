<?php

namespace model\MappingClass;

use model\AbstractsClass\AbstractsMapping;

class FooterMapping extends AbstractsMapping
{


     protected int $idFooter ;
     protected string $footerFaireUnDonTitre ;
     protected string $footerFaireUnDonText ;
     protected string $footerFaireUnDonButton ;
     protected string $footerAsbl ;
     protected string $footerFormation ;
     protected string $footerDon ;
     protected string $footerAgenda ;
     protected string $footerAdmin ;
     protected string $footerMention ;
     protected string $footerPolitique ;
     protected string $footerTitre ;
     protected string $footerDescription ;
     protected  string $footerCoordonnee ;
     protected string $footerSiegeSociete ;
     protected string $footerMail;
     protected string $footerTelephone ;
     protected string $footerReseauxSocial;
     protected string $footerContactTitre;
     protected string $footerContactNom;
     protected string $footerContactEmail;
     protected string $footerContactMsg;
     protected string $footerContactButton;
     protected string $footerCopyrigth ;



    /** getter
     * @return int id of footer page
     */
    public function getIdFooter(): int
    {
        return $this->idFooter;
    }

    /**getter
     * @return string title of the make a donation in footer
     */
    public function getFooterFaireUnDonTitre(): string
    {
        return $this->footerFaireUnDonTitre;
    }

    /**getter
     * @return string text of the make a donation in footer
     */
    public function getFooterFaireUnDonText(): string
    {
        return $this->footerFaireUnDonText;
    }

    /**getter
     * @return string button of the make a donation in footer
     */
    public function getFooterFaireUnDonButton(): string
    {
        return $this->footerFaireUnDonButton;
    }

    /**getter
     * @return string asbl in footer
     */
    public function getFooterAsbl(): string
    {
        return $this->footerAsbl;
    }

    /**getter
     * @return string training in  footer
     */
    public function getFooterFormation(): string
    {
        return $this->footerFormation;
    }

    /**getter
     * @return string don in footer
     */
    public function getFooterDon(): string
    {
        return $this->footerDon;
    }

    /**getter
     * @return string agenda in footer
     */
    public function getFooterAgenda(): string
    {
        return $this->footerAgenda;
    }

    /**getter
     * @return string root in footer
     */
    public function getFooterAdmin(): string
    {
        return $this->footerAdmin;
    }

    /**getter
     * @return string mention in footer
     */
    public function getFooterMention(): string
    {
        return $this->footerMention;
    }

    /**getter
     * @return string politics in footer
     */
    public function getFooterPolitique(): string
    {
        return $this->footerPolitique;
    }

    /**getter
     * @return string title of footer
     */
    public function getFooterTitre(): string
    {
        return $this->footerTitre;
    }

    /**getter
     * @return string description of footer
     */
    public function getFooterDescription(): string
    {
        return $this->footerDescription;
    }

    /**getter
     * @return string details in footer
     */
    public function getFooterCoordonnee(): string
    {
        return $this->footerCoordonnee;
    }

    /**getter
     * @return string siege society in footer
     */
    public function getFooterSiegeSociete(): string
    {
        return $this->footerSiegeSociete;
    }

    /**getter
     * @return string mail of footer
     */
    public function getFooterMail(): string
    {
        return $this->footerMail;
    }

    /**getter
     * @return string phone of footer
     */
    public function getFooterTelephone(): string
    {
        return $this->footerTelephone;
    }

    /**getter
     * @return string social networks of footer
     */
    public function getFooterReseauxSocial(): string
    {
        return $this->footerReseauxSocial;
    }

    /**getter
     * @return string title contact in footer
     */
    public function getFooterContactTitre(): string
    {
        return $this->footerContactTitre;
    }

    /**getter
     * @return string nam contact in footer
     */
    public function getFooterContactNom(): string
    {
        return $this->footerContactNom;
    }

    /**getter
     * @return string mail contact in footer
     */
    public function getFooterContactEmail(): string
    {
        return $this->footerContactEmail;
    }

    /**getter
     * @return string msg contact in footer
     */
    public function getFooterContactMsg(): string
    {
        return $this->footerContactMsg;
    }

    /**getter
     * @return string button contact in footer
     */
    public function getFooterContactButton(): string
    {
        return $this->footerContactButton;
    }

    /**getter
     * @return string copyrigth of footer
     */
    public function getFooterCopyrigth(): string
    {
        return $this->footerCopyrigth;
    }
    

    /**setter
     * @param int $idFooter
     */
    public function setIdFooter(int $idFooter): void
    {
        $this->idFooter = $idFooter;
    }

    /**setter
     * @param string $footerFaireUnDonTitre
     */
    public function setFooterFaireUnDonTitre(string $footerFaireUnDonTitre): void
    {
        $this->footerFaireUnDonTitre = $footerFaireUnDonTitre;
    }

    /**setter
     * @param string $footerFaireUnDonText
     */
    public function setFooterFaireUnDonText(string $footerFaireUnDonText): void
    {
        $this->footerFaireUnDonText = $footerFaireUnDonText;
    }

    /**setter
     * @param string $footerFaireUnDonButton
     */
    public function setFooterFaireUnDonButton(string $footerFaireUnDonButton): void
    {
        $this->footerFaireUnDonButton = $footerFaireUnDonButton;
    }

    /**setter
     * @param string $footerAsbl
     */
    public function setFooterAsbl(string $footerAsbl): void
    {
        $this->footerAsbl = $footerAsbl;
    }

    /**setter
     * @param string $footerFormation
     */
    public function setFooterFormation(string $footerFormation): void
    {
        $this->footerFormation = $footerFormation;
    }

    /**setter
     * @param string $footerDon
     */
    public function setFooterDon(string $footerDon): void
    {
        $this->footerDon = $footerDon;
    }

    /**setter
     * @param string $footerAgenda
     */
    public function setFooterAgenda(string $footerAgenda): void
    {
        $this->footerAgenda = $footerAgenda;
    }

    /**setter
     * @param string $footerAdmin
     */
    public function setFooterAdmin(string $footerAdmin): void
    {
        $this->footerAdmin = $footerAdmin;
    }


    /**setter
     * @param string $footerMention
     */
    public function setFooterMention(string $footerMention): void
    {
        $this->footerMention = $footerMention;
    }


    /**setter
     * @param string $footerPolitique
     */
    public function setFooterPolitique(string $footerPolitique): void
    {
        $this->footerPolitique = $footerPolitique;
    }

    /**setter
     * @param string $footerTitre
     */
    public function setFooterTitre(string $footerTitre): void
    {
        $this->footerTitre = $footerTitre;
    }

    /**setter
     * @param string $footerDescription
     */
    public function setFooterDescription(string $footerDescription): void
    {
        $this->footerDescription = $footerDescription;
    }

    /**setter
     * @param string $footerCoordonnee
     */
    public function setFooterCoordonnee(string $footerCoordonnee): void
    {
        $this->footerCoordonnee = $footerCoordonnee;
    }


    /**setter
     * @param string $footerSiegeSociete
     */
    public function setFooterSiegeSociete(string $footerSiegeSociete): void
    {
        $this->footerSiegeSociete = $footerSiegeSociete;
    }

    /**setter
     * @param string $footerMail
     */
    public function setFooterMail(string $footerMail): void
    {
        $this->footerMail = $footerMail;
    }

    /**setter
     * @param string $footerTelephone
     */
    public function setFooterTelephone(string $footerTelephone): void
    {
        $this->footerTelephone = $footerTelephone;
    }

    /**setter
     * @param string $footerReseauxSocial
     */
    public function setFooterReseauxSocial(string $footerReseauxSocial): void
    {
        $this->footerReseauxSocial = $footerReseauxSocial;
    }

    /**setter
     * @param string $footerContactTitre
     */
    public function setFooterContactTitre(string $footerContactTitre): void
    {
        $this->footerContactTitre = $footerContactTitre;
    }

    /**setter
     * @param string $footerContactNom
     */
    public function setFooterContactNom(string $footerContactNom): void
    {
        $this->footerContactNom = $footerContactNom;
    }


    /**setter
     * @param string $footerContactEmail
     */
    public function setFooterContactEmail(string $footerContactEmail): void
    {
        $this->footerContactEmail = $footerContactEmail;
    }

    /**setter
     * @param string $footerContactMsg
     */
    public function setFooterContactMsg(string $footerContactMsg): void
    {
        $this->footerContactMsg = $footerContactMsg;
    }

    /**setter
     * @param string $footerContactButton
     */
    public function setFooterContactButton(string $footerContactButton): void
    {
        $this->footerContactButton = $footerContactButton;
    }

    /**setter
     * @param string $footerCopyrigth
     */
    public function setFooterCopyrigth(string $footerCopyrigth): void
    {
        $this->footerCopyrigth = $footerCopyrigth;
    }



}