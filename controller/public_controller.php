<?php


/* Utilisation du manager au BON endroit */
use \model\ManagerClass\AsblManager;
use \model\ManagerClass\AccueilManager;
use \model\ManagerClass\AdminManager;
use \model\ManagerClass\ActionManager;
use \model\ManagerClass\AgendaManager;
use \model\ManagerClass\ContactManager;
use \model\ManagerClass\ContactAccueilManager;
use \model\ManagerClass\DonManager;
use \model\ManagerClass\FooterManager;
use \model\ManagerClass\FormationManager;
use \model\ManagerClass\NavbarManager;
use \model\ManagerClass\ValeursManager;





//conection admin


    /*
    if(isset($_POST['username']) and !empty($_POST['username'])){
        if(filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
            if(isset($_POST['pwd']) and !empty($_POST['pwd'])){
                $pwd = sha1($_POST['pwd']);
                var_dump($pwd);
                $recupAdmin =  connectAdmin($conne)
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

*/





// include menu dans toute la page
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'homepage':
            /* Création d'un manager VALIDE avec sa connexion */
            $home =new AccueilManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $recupHome = $home-> getOneById(1);
            include "../view/public_view/homepage.php";
            break;
        case 'asbl':
            /* Création d'un manager VALIDE avec sa connexion */
            $asbl =new AsblManager($connection);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
            $recup = $asbl -> getOneById(1);
            include "../view/public_view/asbl.php";
            break;
        case 'actions':
            /* Création d'un manager VALIDE avec sa connexion */
            $action =new ActionManager($connection);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
            $recupAction = $action-> getOneById(1);
            include "../view/public_view/action.php";
            break;
        case 'agenda':
            /* Création d'un manager VALIDE avec sa connexion */
            $agenda =new AgendaManager($connection);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
            $recupAgenda = $agenda-> getOneById(1);
            include "../view/public_view/agenda.php";
            break;       
        case 'contact':
            /* Création d'un manager VALIDE avec sa connexion */
            $contact =new ContactManager($connection);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
            $recupContact = $contact-> getOneById(1);
            include "../view/public_view/contact.php";
            break;
        case 'donation':
            /* Création d'un manager VALIDE avec sa connexion */
            $donnation =new DonManager($connection);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
            $recupDonnation = $donnation-> getOneById(1);
            include "../view/public_view/donation.php";
            break;
        case 'formations':
            /* Création d'un manager VALIDE avec sa connexion */
            $formation =new FormationManager($connection);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
            $recupFormation = $formation-> getOneById(1);
            include "../view/public_view/formation.php";
            break;
        case 'admin':
            /* Création d'un manager VALIDE avec sa connexion */
            $admin =new AdminManager($connection);
            /* Instantiation du AsblMapping.php avec la méthod du manager */
               if(isset($_POST['username']) and !empty($_POST['username'])){
                   $pwd = sha1($_POST['pwd']);
                   $login = $_POST['username'];
            echo $recupAdmin = $admin-> connectAdmin($connection, $login, $pwd);
            if($recupAdmin === true ){
                header("Location: ./");
            }
            }
            include "../view/public_view/admin.php";
            break;
/*
            case 'logAdmin':

                include "../view/public_view/logAdmin.php";
                break;*/
        default:
            /* Création d'un manager VALIDE avec sa connexion */
            $home =new AccueilManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $recupHome = $home -> getOneById(1);
            include_once "../view/public_view/homepage.php";
            break;
    }
} else {
    /* Création d'un manager VALIDE avec sa connexion */
    $home =new AccueilManager($connection);
    /* Instantiation du AccueilMapping.php avec la méthod du manager */
    $recupHome = $home -> getOneById(1);
    include_once "../view/public_view/homepage.php";
}

?>


