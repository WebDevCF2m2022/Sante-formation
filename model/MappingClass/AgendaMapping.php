<?php

namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;

class AgendaMapping
{
    private int $idAgenda;
    private string $agendaTitre;
    private mixed  $agendaDate;
    private string $agendaDescription;
    private string $agendaText;
    private mixed $agendaImages;


    /**
     * @return int
     */
    public function getIdAgenda(): int
    {
        return $this->idAgenda;
    }

    /**
     * @return string
     */
    public function getAgendaTitre(): string
    {
        return $this->agendaTitre;
    }

    /**
     * @return mixed
     */
    public function getAgendaDate(): mixed
    {
        return $this->agendaDate;
    }

    /**
     * @return string
     */
    public function getAgendaDescription(): string
    {
        return $this->agendaDescription;
    }

    /**
     * @return string
     */
    public function getAgendaText(): string
    {
        return $this->agendaText;
    }
    /**
 * @return mixed
 */
    public function getAgendaImages(): mixed
    {
        return $this->agendaImages;
    }

    /**
     * @param int $idAgenda
     */
    public function setIdAgenda(int $idAgenda): void
    {
        $this->idAgenda = $idAgenda;
    }

    /**
     * @param string $agendaTitre
     */
    public function setAgendaTitre(string $agendaTitre): void
    {
        $this->agendaTitre = $agendaTitre;
    }

    /**
     * @param mixed $agendaDate
     */
    public function setAgendaDate(mixed $agendaDate): void
    {
        $this->agendaDate = $agendaDate;
    }

    /**
     * @param string $agendaDescription
     */
    public function setAgendaDescription(string $agendaDescription): void
    {
        $this->agendaDescription = $agendaDescription;
    }

    /**
     * @param string $agendaText
     */
    public function setAgendaText(string $agendaText): void
    {
        $this->agendaText = $agendaText;
    }

    /**
     * @param mixed $agendaImages
     */
    public function setAgendaImages(mixed $agendaImages): void
    {
        $this->agendaImages = $agendaImages;
    }






}