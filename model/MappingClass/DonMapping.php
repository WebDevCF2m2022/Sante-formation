<?php

namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;

class DonMapping extends AbstractsMapping
{

    protected  int $idDon ;
    protected  string $donTitre ;
    protected  string $donText;
    protected  string $donPackTitre ;
    protected  string $donPackImage ;
    protected  string $donPackText ;
    protected  string $donPackButton ;


    /**getter
     * @return int id of don
     */
    public function getIdDon():int
    {
        return $this->idDon;
    }

    /**getter
     * @return string title of don
     */
    public function getDonTitre():string
    {
        return $this->donTitre;
    }

    /**getter
     * @return string text of don
     */
    public function getDonText():string
    {
        return $this->donText;
    }

    /**getter
     * @return string pack title of don
     */
    public function getDonPackTitre():string
    {
        return $this->donPackTitre;
    }

    /**getter
     * @return string  pack text of don
     */
    public function getDonPackText():string
    {
        return $this->donPackText;
    }

    /**getter
     * @return string pack pic of don
     */
    public function getDonPackImage():string
    {
        return $this->donPackImage;
    }

    /**getter
     * @return string pack button of don
     */
    public function getDonPackButton():string
    {
        return $this->donPackButton;
    }


    /**setter
     * @param int $idDon
     */
    public function setIdDon(int $idDon): void
    {
        $this->idDon = $idDon;
    }

    /**setter
     * @param string $donTitre
     */
    public function setDonTitre(string $donTitre): void
    {
        $this->donTitre = $donTitre;
    }

    /**setter
     * @param string $donText
     */
    public function setDonText(string $donText): void
    {
        $this->donText = $donText;
    }

    /**setter
     * @param string $donPackTitre
     */
    public function setDonPackTitre(string $donPackTitre): void
    {
        $this->donPackTitre = $donPackTitre;
    }

    /**setter
     * @param string $donPackImage
     */
    public function setDonPackImage(string $donPackImage): void
    {
        $this->donPackImage = $donPackImage;
    }

    /**setter
     * @param string $donPackText
     */
    public function setDonPackText(string $donPackText): void
    {
        $this->donPackText = $donPackText;
    }

    /**setter
     * @param string $donPackButton
     */
    public function setDonPackButton(string $donPackButton): void
    {
        $this->donPackButton = $donPackButton;
    }

}