<?php
namespace  model\MappingClass;

use PDO;
use Exception;
use model\MappingClass\ContactAccueilMapping;
use model\InterfaceClass\ManagerInterface;
class ContactAccueilManager implements ManagerInterface{
    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    /**request get one by id
     * @param int $id
     * @return \model\MappingClass\ContactAccueilMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM contactaccueil WHERE `idContactAccueil` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new ContactAccueilMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }

    /**request get all
     * @return array
     */
    public function getAll(): array{
        $prepare = $this->connect->prepare("SELECT * FROM contactaccueil");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new AContactAccueilMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }




}