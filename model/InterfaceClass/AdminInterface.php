<?php


namespace model\InterfaceClass;
use model\ManagerClass\AdminManager;
use PDO ;
use Exception;


interface AdminInterface
{
    public function getUserByLogin(string $login);
}