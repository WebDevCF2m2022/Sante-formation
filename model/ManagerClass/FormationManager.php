<?php

namespace model\ManagerClass;
use model\InterfaceClass\FormationInterface;
use model\MappingClass\FormationMapping;
use model\InterfaceClass\ManagerInterface;
use model\TraitsClass\TestTrait;

use PDO;
use Exception;

class  FormationManager implements ManagerInterface, FormationInterface {

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    /**
     * request for one by id
     * @param int $id
     * @return \model\MappingClass\FormationMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM formation WHERE `idFormation` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            return new FormationMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }

    /**
     * request for get all
     * @return array of all training
     */
    public function getAll(): array{
        $prepare = $this->connect->prepare("SELECT * FROM formation");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new FormationMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /**
     * request for insert of db
     * @param \model\MappingClass\FormationMapping $datas
     * @return bool
     */
    public function insertFormation(FormationMapping  $datas): bool{
        $prepare = $this->connect->prepare("INSERT INTO `formation` ( `formationDescription`,`formationText`,`formationImage`) VALUES ( :formationDescription ,:formationText , :formationImage )");
        $prepare->bindValue(":formationDescription", $datas->getFormationDescription(), PDO::PARAM_STR);
        $prepare->bindValue(":formationText", $datas->getFormationText(), PDO::PARAM_STR);
        $prepare->bindValue(":formationImage",$datas->getFormationImage(),PDO::PARAM_STR);


        try {
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /**
     * request for update of db
     * @param \model\MappingClass\FormationMapping $datas
     * @return bool
     */
    public function  updateFormation(FormationMapping $datas):bool
    {
        $prepare = $this->connect->prepare("UPDATE formation SET formationDescription=?,formationText=?,formationImage=? WHERE idFormation = ?");

        $prepare->bindValue(1, htmlspecialchars(strip_tags(trim($datas->getFormationDescription()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(2, htmlspecialchars(strip_tags(trim($datas->getFormationText()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(3, htmlspecialchars(strip_tags(trim($datas->getFormationImage()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(4, htmlspecialchars(strip_tags(trim($datas->getIdFormation()), ENT_QUOTES)), PDO::PARAM_STR);

        try {
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /**
     * request delete of db
     * @param integer $id
     * @return bool
     */
    public function deleteFormation(int $id):bool
    {
        $prepare= $this->connect->prepare("DELETE FROM formation WHERE idFormation=  :idFormation");
        $prepare->bindValue(":idFormation", $id, PDO::PARAM_INT);
        header("Location:./");

        try {
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }



}