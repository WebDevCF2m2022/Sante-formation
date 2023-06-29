<?php

namespace model\ManagerClass;

use model\MappingClass\AdminMapping;
use model\InterfaceClass\ManagerInterface;
use model\InterfaceClass\SecuriteInterface;

use PDO ;
use Exception;

class
AdminManager implements ManagerInterface,SecuriteInterface
{

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    /**
     * request get one by id
     * @param int $id
     * @return \model\MappingClass\AdminMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM admin WHERE `idAdmin` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new AdminMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }

    /**
     * request get all of db
     * @return array
     */
    public function getAll(): array{
        $prepare = $this->connect->prepare("SELECT * FROM admin");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new AdminMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /**
     * request get user by login
     * @param string $login
     * @return \model\MappingClass\AdminMapping|null
     */
    public function getUserByLogin(string $login): ?AdminMapping{
        $prepare = $this->connect->prepare("SELECT * FROM admin WHERE `login` = :login");
        $prepare->bindValue(":login", $login, PDO::PARAM_STR);
        try{
            $prepare->execute();
            $result = $prepare->fetch();
            return new AdminMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /** verify  pwd
     * @param string $pwd
     * @param string $hash
     * @return bool
     */
    public function VerifyPassword(string $pwd, string $hash): bool
    {
        return password_verify($pwd, $hash);
    }


    /** Hash pwd
     * @param string $pwd
     * @return string
     */
    public function HashPassword(string $pwd): string
    {
        return password_hash($pwd, PASSWORD_DEFAULT);
    }


}