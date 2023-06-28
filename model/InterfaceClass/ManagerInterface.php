<?php

namespace model\InterfaceClass;
use PDO ;
use Exception;



interface ManagerInterface
{

    public function __construct(PDO $connection);
    public  function getOneById(int $id) ;

    public function getAll();





}