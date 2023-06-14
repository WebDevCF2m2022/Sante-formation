<?php
namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;


class ActionMapping extends AbstractsMapping
{

    private int $idAction ;
    private string $actionTitre;
    private string $actionDescription;
    private string $actionText;
    private mixed $actionImage;
    private  mixed $actionDate;


    /**
     * @return int
     */
   public function getIdAction():int{
       return $this->idAction;
   }

    /**
     * @return string
     */
    public function getActionTitre(): string
    {
        return $this->actionTitre;
    }

    /**
     * @return string
     */
    public function getActionDescription(): string
    {
        return $this->actionDescription;
    }

    /**
     * @return string
     */
    public function getActionText(): string
    {
        return $this->actionText;
    }

    /**
     * @return mixed
     */
    public function getActionImage()
    {
        return $this->actionImage;
    }

    /**
     * @return mixed
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * @param int $idAction
     */
    public function setIdAction(int $idAction): void
    {
        $this->idAction = $idAction;
    }

    /**
     * @param string $actionTitre
     */
    public function setActionTitre(string $actionTitre): void
    {
        $this->actionTitre = $actionTitre;
    }

    /**
     * @param string $actionDescription
     */
    public function setActionDescription(string $actionDescription): void
    {
        $this->actionDescription = $actionDescription;
    }

    /**
     * @param string $actionText
     */
    public function setActionText(string $actionText): void
    {
        $this->actionText = $actionText;
    }

    /**
     * @param mixed $actionImage
     */
    public function setActionImage($actionImage): void
    {
        $this->actionImage = $actionImage;
    }

    /**
     * @param mixed $actionDate
     */
    public function setActionDate($actionDate): void
    {
        $this->actionDate = $actionDate;
    }

}