<?php

namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;

class AgendaMapping extends AbstractsMapping
{
    protected int $idAgenda;
    protected string $agendaTitre;
    protected mixed  $agendaDate;
    protected string $agendaDescription;
    protected string $agendaText;
    protected mixed $agendaImages;
    protected string $agendaTitreImage ;
    protected  string $agendaTextDetail ;


    /** getter
     * @return int if of agenda
     */
    public function getIdAgenda(): int
    {
        return $this->idAgenda;
    }

    /** getter
     * @return string title of agenda
     */
    public function getAgendaTitre(): string
    {
        return $this->agendaTitre;
    }

    /**getter
     * @return mixed
     */
    public function getAgendaDate(): mixed
    {
        return $this->agendaDate;
    }

    /**getter
     * @return string
     */
    public function getAgendaDescription(): string
    {
        return $this->agendaDescription;
    }

    /**getter
     * @return string
     */
    public function getAgendaText(): string
    {
        return $this->agendaText;
    }

    /**getter
     * @return string
     */
    public function getAgendaTitreImage(): string
    {
     return $this->agendaTitreImage;
    }



    /**getter
     * @return string
     */
    public function getAgendaTextDetail(): string
    {
        return $this->agendaTextDetail;
    }

    /**setter
     * @param int $idAgenda
     */
    public function setIdAgenda(int $idAgenda): void
    {
        $this->idAgenda = $idAgenda;
    }

    /**setter
     * @param string $agendaTitre
     */
    public function setAgendaTitre(string $agendaTitre): void
    {
        $this->agendaTitre = $agendaTitre;
    }

    /**setter
     * @param mixed $agendaDate
     */
    public function setAgendaDate(mixed $agendaDate): void
    {
        $this->agendaDate = $agendaDate;
    }

    /**setter
     * @param string $agendaDescription
     */
    public function setAgendaDescription(string $agendaDescription): void
    {
        $this->agendaDescription = $agendaDescription;
    }

    /**setter
     * @param string $agendaText
     */
    public function setAgendaText(string $agendaText): void
    {
        $this->agendaText = $agendaText;
    }

    /**setter
     * @param mixed $agendaImages
     */
    public function setAgendaImages(mixed $agendaImages): void
    {
        $this->agendaImages = $agendaImages;
    }


    /**setter
     * @param string $agendaTitreImage
     */
    public function setAgendaTitreImage(string $agendaTitreImage): void
    {
        $this->agendaTitreImage = $agendaTitreImage;
    }

    /**setter
     * @param string $agendaTextDetail
     */
    public function setAgendaTextDetail(string $agendaTextDetail): void
    {
        $this->agendaTextDetail = $agendaTextDetail;
    }


}