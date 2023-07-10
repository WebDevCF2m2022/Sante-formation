<?php

namespace model\ManagerClass;

use model\InterfaceClass\ManagerInterface;
use model\MappingClass\AsblMapping;

use PDO ;
use Exception;


class AsblManager implements ManagerInterface
{

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    public function getOneById(int $id)
    {
        // TODO: Implement getOneById() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }




}