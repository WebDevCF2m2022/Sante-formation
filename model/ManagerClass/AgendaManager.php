<?php

namespace model\ManagerClass;

use model\InterfaceClass\AgendaInterface;
use model\InterfaceClass\ManagerInterface;
use model\MappingClass\AgendaMapping;
use model\TraitsClass\TestTrait;

use PDO;
use Exception;

class AgendaManager implements ManagerInterface ,AgendaInterface
{


    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    /**
     * request get one by id
     * @param int $id
     * @return \model\MappingClass\AgendaMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM agenda WHERE `idAgenda` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new AgendaMapping($result);
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
        $prepare = $this->connect->prepare("SELECT * FROM agenda");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new AgendaMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /**
     * request insert of db
     * @param \model\MappingClass\AgendaMapping $datas
     * @return bool
     */
    public function insertAgenda(AgendaMapping  $datas): bool{
        $prepare = $this->connect->prepare("INSERT INTO `agenda` (`agendaTitre`, `agendaDescription`, `agendaText`,`agendaImages`,`agendaDate`) VALUES (:agendaTitre, :agendaDescription, :agendaText , :agendaImage , :agendaDate");
        $prepare->bindValue(":actionTitre", $datas->getAgendaTitre(), PDO::PARAM_STR);
        $prepare->bindValue(":actionDescription", $datas->getAgendaDescription(), PDO::PARAM_STR);
        $prepare->bindValue(":actionText", $datas->getAgendaText(), PDO::PARAM_STR);
        $prepare->bindValue(":actionImage",$datas->getAgendaImage(),PDO::PARAM_STR);
        $prepare->bindValue(":actionDate", $datas->getAgendaDate(),PDO::PARAM_STR);

        try {
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /***
     * request update of db
     * @param \model\MappingClass\AgendaMapping $datas
     * @return bool
     */
    public function  updateAgenda(AgendaMapping $datas):bool{
        $prepare = $this->connect->prepare("UPDATE agenda SET agendaTitle=?,agendaDescription=?,agendaText=?,agendaImages=?,agendaDate=? WHERE idAgenda = :idAgenda");
        $prepare->bindValue(1, htmlspecialchars(strip_tags(trim($datas->getAgendaTitre()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(2, htmlspecialchars(strip_tags(trim($datas->getAgendaDescription()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(3, htmlspecialchars(strip_tags(trim($datas->getAgendaText()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(4, htmlspecialchars(strip_tags(trim($datas->getAgendaImage()), ENT_QUOTES)), PDO::PARAM_STR);
        $prepare->bindValue(5, htmlspecialchars(strip_tags(trim($datas->getAgendaDate()), ENT_QUOTES)), PDO::PARAM_STR);

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
     * @param \model\MappingClass\AgendaMapping $id
     * @return bool
     */
    public function deleteAgenda(AgendaMapping $id):bool{
        $prepare= $this->connect->prepare("DELETE FROM agenda WHERE idAgenda =  :idAgenda");
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