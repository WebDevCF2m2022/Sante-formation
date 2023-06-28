<?php

namespace model\InterfaceClass;
use model\MappingClass\ActionMapping;
use model\MappingClass\AgendaMapping;
use PDO ;
use Exception;



interface ManagerInterface
{

    public function __construct(PDO $connection);
    public  function getOneById(int $id) ;

    public function getAll();





}