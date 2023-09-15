<?php


namespace model\InterfaceClass;

use model\MappingClass\ActionMapping;
use PDO;
use Exception;


interface ActionInterface
{
    public function insertAction(ActionMapping  $datas);
    public function  updateAction(ActionMapping $datas);
    public function deleteAction(int $id);
}
