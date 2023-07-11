<?php

namespace model\InterfaceClass;
use model\MappingClass\FormationMapping;
use PDO ;
use Exception;


interface FormationInterface
{

    public function insertFormation(FormationMapping  $datas);
    public function  updateFormation(FormationMapping $datas);
    public function deleteFormation(FormationMapping $id);
}