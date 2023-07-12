<?php
namespace model\MappingClass;
use model\AbstractsClass\AbstractsMapping;


class ActionMapping extends AbstractsMapping
{

    protected int $idAction ;
    protected string $actionTitre;
    protected string $actionDescription;
    protected string $actionText;
    protected mixed $actionImage;
    protected  mixed $actionDate;


    /**getter
     * @return int id of action
     */
    public function getIdAction(): int
    {
        return $this->idAction;
    }

    /**getter
     * @return string title of action
     */
    public function getActionTitre(): string
    {
        return $this->actionTitre;
    }

    /**getter
     * @return string description of action
     */
    public function getActionDescription(): string
    {
        return $this->actionDescription;
    }

    /**getter
     * @return string text of action
     */
    public function getActionText(): string
    {
        return $this->actionText;
    }

    /**getter
     * @return mixed pic of action
     */
    public function getActionImage():mixed
    {
        return $this->actionImage;
    }

    /**getter
     * @return mixed date of action
     */
    public function getActionDate():mixed
    {
        return $this->actionDate;
    }

    /**setter
     * @param int $idAction
     */
    public function setIdAction(int $idAction): void
    {
        $this->idAction = $idAction;
    }

    /**setter
     * @param string $actionTitre
     */
    public function setActionTitre(string $actionTitre): void
    {
        $this->actionTitre = $actionTitre;
    }

    /**setter
     * @param string $actionDescription
     */
    public function setActionDescription(string $actionDescription): void
    {
        $this->actionDescription = $actionDescription;
    }

    /**setter
     * @param string $actionText
     */
    public function setActionText(string $actionText): void
    {
        $this->actionText = $actionText;
    }

    /**setter
     * @param mixed $actionImage
     */
    public function setActionImage($actionImage): void
    {
        $this->actionImage = $actionImage;
    }

    /**setter
     * @param mixed $actionDate
     */
    public function setActionDate($actionDate): void
    {
        $this->actionDate = $actionDate;
    }

}