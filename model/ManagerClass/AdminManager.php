<?php

namespace model\ManagerClass;

use model\InterfaceClass\AdminInterface;
use model\MappingClass\AdminMapping;
use model\InterfaceClass\ManagerInterface;
use model\InterfaceClass\SecuriteInterface;
use model\TraitsClass\TestTrait;

use PDO ;
use Exception;

class
AdminManager implements ManagerInterface,SecuriteInterface,AdminInterface
{

    protected PDO $connect;

    public function __construct(PDO $connection){
        $this->connect = $connection;
    }

    /**
     * request get one by id
     * @param int $id
     * @return \model\MappingClass\AdminMapping|void
     */
    public  function getOneById(int $id){
        $prepare = $this->connect->prepare("SELECT * FROM admin WHERE `idAdmin` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new AdminMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }

    /**
     * request get all of db
     * @return array of all admin
     */
    public function getAll(): array{
        $prepare = $this->connect->prepare("SELECT * FROM admin");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new AdminMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /**
     * request get user by login
     * @param string $login
     * @return \model\MappingClass\AdminMapping|null
     */
    public function getUserByLogin(string $login): ?AdminMapping{
        $prepare = $this->connect->prepare("SELECT * FROM admin WHERE `login` = :login");
        $prepare->bindValue(":login", $login, PDO::PARAM_STR);
        try{
            $prepare->execute();
            $result = $prepare->fetch();
            return new AdminMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    /** verify  pwd
     * @param string $pwd
     * @param string $hash
     * @return bool
     */
    public function VerifyPassword(string $pwd, string $hash): bool
    {
        return password_verify($pwd, $hash);
    }


    /** Hash pwd
     * @param string $pwd
     * @return string
     */
    public function HashPassword(string $pwd): string
    {
        return password_hash($pwd, PASSWORD_DEFAULT);
    }


    /**  connexion admin
     *
     */
  /*  public function connectAdmin (pdo $connect, string $login, string $pwd): string {
        try{
            $sqlAdmin=$connect->query("SELECT login, pwd FROM admin WHERE login='$login'");
        }catch(Exception $e){
          echo " erreur " .$e->getMessage();
        }
        $recup = $sqlAdmin->fetch(PDO::FETCH_ASSOC);

        if(password_verify($pwd , $recup['pwd'])){
            $_SESSION = $recup;
            unset($_SESSION['pwd']);
            $_SESSION['idAdmin'] = session_id();
            #echo "<h1>Admin connecté</h1>";
            // on envoie vraie si la connexion est une réussite
            return true;
        }else{
            echo  "Login ou mot de passe incorrecte" ;
        }

    }

   /** disconnect admin
    *
    */
     public function disconnect(){
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }


}