<?php

namespace model\ManagerClass;
use model\InterfaceClass\ManagerInterface;
use model\MappingClass\ContactMapping;

use PDO;
use Exception;

class ContactManager implements ManagerInterface{
    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }


    /**request for on id
     * @param int $id
     * @return ContactMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM contact WHERE `idContact` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new ContactMapping($result);
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
        $prepare = $this->connect->prepare("SELECT * FROM contact");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new ContactMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }






}