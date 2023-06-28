<?php

namespace model\MappingClass;
use model\MappingClass\FormationMapping;
use model\InterfaceClass\ManagerInterface;
use models\Traits\TestTrait;

use PDO;
use Exception;

class  FormationManager implements ManagerInterface{

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
        $prepare = $this->connect->prepare("SELECT * FROM formation WHERE `idformation` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new FormationMapping($result);
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
    public function insertAction(FormationMapping  $datas): bool{
        $prepare = $this->connect->prepare("INSERT INTO `formation` (`formationTitre`, `formationDescription`, `formationText`,`formationImage`,`formationDate`) VALUES (:formationTitre, :formationDescription, :formationText , :formationImage , :formationDate");
        $prepare->bindValue(":actionTitre", $datas->getFormationTitre(), PDO::PARAM_STR);
        $prepare->bindValue(":actionDescription", $datas->getFormationDescription(), PDO::PARAM_STR);
        $prepare->bindValue(":actionText", $datas->getFormationText(), PDO::PARAM_STR);
        $prepare->bindValue(":actionImage",$datas->getFormationImage(),PDO::PARAM_STR);
        $prepare->bindValue(":actionDate", $datas->getFormationDate(),PDO::PARAM_STR);

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
    public function  updateAction(FormationMapping $datas):bool
    {
        $prepare = $this->connect->prepare("UPDATE formation SET formationTitle=?,formationDescription=?,formationText=?,formationImage=?,formationDate=? WHERE id = :idFormation");
        $prepare->bindValue(1, htmlspecialchars(strip_tags(trim($datas->getFormationTitre()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(2, htmlspecialchars(strip_tags(trim($datas->getFormationDescription()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(3, htmlspecialchars(strip_tags(trim($datas->getFormationText()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(4, htmlspecialchars(strip_tags(trim($datas->getFormationImage()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(5, htmlspecialchars(strip_tags(trim($datas->getFormationDate()), ENT_QUOTES)), PDO::PARAM_STR);

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
     * @param \model\MappingClass\FormationMapping $id
     * @return bool
     */
    public function deleteAction(FormationMapping $id):bool
    {
        $prepare= $this->connect->prepare("DELETE FROM formation WHERE id=  :idFormation");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
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