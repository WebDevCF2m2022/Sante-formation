<?php

namespace model\ManagerClass;

use model\InterfaceClass\ManagerInterface;
use model\MappingClass\AsblMapping;

use PDO;
use Exception;


class AsblManager implements ManagerInterface
{

    protected PDO $connect;

    public function __construct(PDO $connection)
    {
        $this->connect = $connection;
    }
    /** 
     * request get one by id
     * @param int $id
     * @return \model\MappingClass\AsblMapping;
     */
    public function getOneById(int $id)
    {
        $prepare = $this->connect->prepare("SELECT * FROM asbl WHERE `idasbl` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new AsblMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
}
