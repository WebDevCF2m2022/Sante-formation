<?php

namespace model\ManagerClass;
use  model\MappingClass\FooterMapping;
use model\InterfaceClass\ManagerInterface;

use PDO ;
use Exception;

class FooterManager implements ManagerInterface
{

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }


    /**request for on id
     * @param int $id
     * @return  FooterMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM footer WHERE `idFooter` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new FooterMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }

    /**
     * request for get all
     * @return array
     */
    public function getAll(): array{
        $prepare = $this->connect->prepare("SELECT * FROM footer");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new FooterMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }
}