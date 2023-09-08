<?php


namespace model\InterfaceClass;
use model\ManagerClass\AdminManager;
use PDO ;
use Exception;


interface AdminInterface
{
    public function getUserByLogin(string $login);

    public function VerifyPassword(string $pwd, string $hash):bool;
    public function HashPassword(string $pwd): string;
 /*   public function connectAdmin(pdo $connect, string $login, string $pwd) ;
    public function disconnect();*/
}