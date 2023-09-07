<?php

use model\ManagerClass\AdminManager;

/* Utilisation du manager au BON endroit */
use \model\ManagerClass\AsblManager;


try {
    $pdo = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PWD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

} catch (PDOException $e) {
    echo "connection error " . $e->getMessage();
}


//conection admin
if(isset($_POST['submit'])){
    if(isset($_POST['username']) and !empty($_POST['username'])){
        if(filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
            if(isset($_POST['pwd']) and !empty($_POST['pwd'])){
                $pwd = sha1($_POST['pwd']);
                $getData = $pdo->prepare("SELECT login FROM admin WHERE login =? and pwd =? ");
                $getData->execute(array($_POST['username'], $pwd));
                $rows = $getData->rowCount();
                if($rows ==true){
                    $_SESSION['admin']=$_POST['username'];
                    header("Location:../view/public_view/logAdmin.php");

                }else{
                    $e ="username ou mot de pass inconue  ";
                }

            }else{
                $e = "veuillez introduire un  password correct ";
            }


        }else{
            $e="veuillez saissir un email valide";
        }

    }


}else{
    $e ="veuillez saissir un username" ;

};







// include menu dans toute la page
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'homepage':
            include "../view/public_view/homepage.php";
            break;
        case 'asbl':
            /* Création d'un manager VALIDE avec sa connexion */
            $asbl =new AsblManager($pdo);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
            $recup = $asbl -> getOneById(1);
            include "../view/public_view/asbl.php";
            break;
        case 'actions':
            include "../view/public_view/action.php";
            break;
        case 'agenda':
            include "../view/public_view/agenda.php";
            break;       
        case 'contact':
            include "../view/public_view/contact.php";
            break;
        case 'donation':
            include "../view/public_view/donation.php";
            break;
        case 'formations':
            include "../view/public_view/formation.php";
            break;
        case 'admin':
            include "../view/public_view/admin.php";
            break;

            case 'logAdmin':
                include "../view/public_view/logAdmin.php";
                break;
        default:
            include_once "../view/public_view/homepage.php";
            break;
    }
} else {
    include_once "../view/public_view/homepage.php";
}

?>


