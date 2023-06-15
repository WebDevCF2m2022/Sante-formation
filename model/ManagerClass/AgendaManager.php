<?php

namespace model\MappingClass;
use PDO;
use Exception;
use model\MappingClass\AgendaMapping;

class AgendaManager
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
        $prepare = $this->connect->prepare("SELECT * FROM agenda WHERE `idagenda` = :id");
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
    public function insertAction(AgendaMapping  $datas): bool{
        $prepare = $this->connect->prepare("INSERT INTO `agenda` (`agendaTitre`, `agendaDescription`, `agendaText`,`agendaImage`,`agendaDate`) VALUES (:agendaTitre, :agendaDescription, :agendaText , :agendaImage , :agendaDate");
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
    public function  updateAction(AgendaMapping $datas):bool{
        $prepare = $this->connect->prepare("UPDATE agenda SET agendaTitle=?,agendaDescription=?,agendaText=?,agendaImage=?,agendaDate=? WHERE id = :idAgenda");
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
    public function deleteAction(AgendaMapping $id):bool{
        $prepare= $this->connect->prepare("DELETE FROM agenda WHERE id=  :idAgenda");
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