<?php

namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;

class FormationMapping extends AbstractsMapping
{
   private int $idFormation ;
   private string $formationTitre ;
   private mixed $formationDate;
   private mixed $formationDescription ;
   private string $formationText;
   private mixed $formationImage;


    /**
     * @return int
     */
    public function getIdFormation(): int
    {
        return $this->idFormation;
    }

    /**
     * @return string
     */
    public function getFormationTitre(): string
    {
        return $this->formationTitre;
    }

    /**
     * @return mixed
     */
    public function getFormationDate(): mixed
    {
        return $this->formationDate;
    }

    /**
     * @return mixed
     */
    public function getFormationDescription(): mixed
    {
        return $this->formationDescription;
    }

    /**
     * @return string
     */
    public function getFormationText(): string
    {
        return $this->formationText;
    }

    /**
     * @return mixed
     */
    public function getFormationImage(): mixed
    {
        return $this->formationImage;
    }

    /**
     * @param int $idFormation
     */
    public function setIdFormation(int $idFormation): void
    {
        $this->idFormation = $idFormation;
    }

    /**
     * @param string $formationTitre
     */
    public function setFormationTitre(string $formationTitre): void
    {
        $this->formationTitre = $formationTitre;
    }

    /**
     * @param mixed $formationDate
     */
    public function setFormationDate(mixed $formationDate): void
    {
        $this->formationDate = $formationDate;
    }

    /**
     * @param mixed $formationDescription
     */
    public function setFormationDescription(mixed $formationDescription): void
    {
        $this->formationDescription = $formationDescription;
    }

    /**
     * @param string $formationText
     */
    public function setFormationText(string $formationText): void
    {
        $this->formationText = $formationText;
    }

    /**
     * @param mixed $formationImage
     */
    public function setFormationImage(mixed $formationImage): void
    {
        $this->formationImage = $formationImage;
    }


}