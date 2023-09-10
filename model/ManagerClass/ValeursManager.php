<?php

namespace model\ManagerClass;
use model\InterfaceClass\ManagerInterface;
use model\MappingClass\ValuersMapping;

use PDO;
use Exception;

class ValeursManager implements ManagerInterface
{

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }


    /**request for on id
     * @param int $id
     * @return  ValuersMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM valuers WHERE `idValeurs` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new ValuersMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }

    /**
     * request for get all
     * @return array from all values
     */
    public function getAll(): array{
        $prepare = $this->connect->prepare("SELECT * FROM valuers");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new ValuersMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

}