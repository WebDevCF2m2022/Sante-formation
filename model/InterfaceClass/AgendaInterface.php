<?php

namespace model\InterfaceClass;
use model\MappingClass\AgendaMapping;
use PDO ;
use Exception;


interface AgendaInterface
{
    public function insertAgenda(AgendaMapping  $datas);
    public function  updateAgenda(AgendaMapping $datas);
    public function deleteAgenda(AgendaMapping $id);
}