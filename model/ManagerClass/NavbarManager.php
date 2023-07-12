<?php

namespace model\ManagerClass;
use model\InterfaceClass\ManagerInterface;
use model\MappingClass\NavbarMapping;


use PDO ;
use Exception;

class NavbarManager implements ManagerInterface{

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    /**request for on id
     * @param int $id
     * @return NavbarMapping|void
     */
    public function getOneById(int $id)
    {
        $prepare = $this->connect->prepare("SELECT * FROM navbar WHERE `idNavbar` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new NavbarMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /**request for all
     * @return array|void for all navbar
     */
    public function getAll()
    {
        $prepare =$this->connect->prepare("SELECT * FROM  navbar");
        try{
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row ){
                $all[] = new NavbarMapping($row);
            }
            return $all ;

        }catch (Exception $e){
            echo "erreur  : " .$e->getMessage();
            exit;
        }
    }
}