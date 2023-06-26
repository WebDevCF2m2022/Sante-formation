<?php

namespace model\ManagerClass;

use model\MappingClass\AccueilMapping;
use model\InterfaceClass\ManagerInterface;

use PDO ;
use Exception;



class AccueilManager implements ManagerInterface
{


    protected PDO $connect ;


    public function __construct(PDO $connection){
      $this->connect = $connection ;
    }

    /** request for on by id
     * @param int $id the id of  accueil
     * @return AccueilMapping|void  class
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM accueil WHERE `idAccueil` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new AccueilMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }


    /***request for get all
     * @return array of accueil
     */
    public function getAll():array {
        $prepare =$this->connect->prepare("SELECT * FROM  accueil");
        try{
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row ){
                $all[] = new AccueilMapping($row);
            }
            return $all ;

        }catch (Exception $e){
            echo "erreur  : " .$e->getMessage();
            exit;
        }




    }








}