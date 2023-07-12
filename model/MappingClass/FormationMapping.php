<?php

namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;

class FormationMapping extends AbstractsMapping
{
   protected int $idFormation ;
   protected string $formationTitre ;
   protected mixed $formationDate;
   protected mixed $formationDescription ;
   protected string $formationText;
   protected mixed $formationImage;


    /**getter
     * @return int id of training
     */
    public function getIdFormation(): int
    {
        return $this->idFormation;
    }

    /**getter
     * @return string title of training
     */
    public function getFormationTitre(): string
    {
        return $this->formationTitre;
    }

    /**getter
     * @return mixed date of training
     */
    public function getFormationDate(): mixed
    {
        return $this->formationDate;
    }

    /**getter
     * @return mixed description of training
     */
    public function getFormationDescription(): mixed
    {
        return $this->formationDescription;
    }

    /**getter
     * @return string text of training
     */
    public function getFormationText(): string
    {
        return $this->formationText;
    }

    /**getter
     * @return mixed pic of training
     */
    public function getFormationImage(): mixed
    {
        return $this->formationImage;
    }

    /**setter
     * @param int $idFormation
     */
    public function setIdFormation(int $idFormation): void
    {
        $this->idFormation = $idFormation;
    }

    /**setter
     * @param string $formationTitre
     */
    public function setFormationTitre(string $formationTitre): void
    {
        $this->formationTitre = $formationTitre;
    }

    /**setter
     * @param mixed $formationDate
     */
    public function setFormationDate(mixed $formationDate): void
    {
        $this->formationDate = $formationDate;
    }

    /**setter
     * @param mixed $formationDescription
     */
    public function setFormationDescription(mixed $formationDescription): void
    {
        $this->formationDescription = $formationDescription;
    }

    /**setter
     * @param string $formationText
     */
    public function setFormationText(string $formationText): void
    {
        $this->formationText = $formationText;
    }

    /**setter
     * @param mixed $formationImage
     */
    public function setFormationImage(mixed $formationImage): void
    {
        $this->formationImage = $formationImage;
    }


}