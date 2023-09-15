<?php
use \model\ManagerClass\AdminManager;
use \model\ManagerClass\ActionManager;
use \model\ManagerClass\FormationManager;
use \model\ManagerClass\AgendaManager;
use model\MappingClass\ActionMapping;


$adminConect = new AdminManager($connection);


if (isset($_GET['p'])) {

    switch ($_GET['p']) {
        case "home":

            include_once "../view/private_view/homeAdmin.php";
            break;
        case "action":
            /* Création d'un manager VALIDE avec sa connexion */
            $actionAdmin =new ActionManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $act = $actionAdmin-> getAll();
            // $action = $actionAdmin->getOneById($_GET);

           // $actAll= $act->getAll();

            if(isset($_POST['actionImageText'])){
                   $insert = new ActionMapping($_POST);
                //var_dump($insert);
                   try{

                     $a =  $actionAdmin->insertAction($insert);
                     if($a===true){
                         header("Location: ./?p=action&yes");
                         die();
                     }
                   }catch (Exception $e){
                       $e = throw new Exception ('Un problème est survenu lors de la inseration , veuillez réessayer');

                   }
               }
            include_once "../view/private_view/actionAdmin.php";

    break;

        case 'deleteAction' :
                if(isset($_GET['idn'])) {
                    try {
                        $actionAdmin =new ActionManager($connection);
                        $actionAdmin->deleteAction($_GET['idn']);
                       // header("Refresh:2");
                    } catch (Exception $e) {
                        $e = throw new Exception ('Un problème est survenu lors de la supression, veuillez réessayer');
                    }
                }


            break;
        case "modifAction" :
            /* Création d'un manager VALIDE avec sa connexion */
            $modAction =new ActionManager($connection);

            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            if(isset($_GET['id'])):
                if(isset($_POST['actionImg'])&&($_POST['articleDescription'])&&($_POST['actionImageText'])&& ($_POST['articleText'])){

                    // update
                    $updateAction = new ActionMapping($_POST);
                    $modAction->updateAction($updateAction);
                }else {
                    $modAct = $modAction->getOneById($_GET['id']);
                    include_once "../view/private_view/modifierAction.php";
                }
            else:
                // sinon
            endif;

            break;
        case "formation" :
            /* Création d'un manager VALIDE avec sa connexion */
            $formaAdmin =new FormationManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $forma = $formaAdmin-> getOneById(1);
            $formationAll = $formaAdmin-> getAll();
            include_once "../view/private_view/formationAdmin.php";
            break;
        case "modifFormation" :
            /* Création d'un manager VALIDE avec sa connexion */
            $forAction =new FormationManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $forAdmin = $forAction->updateFormation($connection);
            include_once "../view/private_view/modifierFormation.php";
            break;
        case "agenda" :
            /* Création d'un manager VALIDE avec sa connexion */
            $agenda =new AgendaManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $agendaAdmin = $agenda-> getOneById(1);
            $agendaAll= $agenda->getAll();// ca marche pas
            include_once "../view/private_view/agendaAdmin.php";
            break;
        case "modifAgenda":
            /* Création d'un manager VALIDE avec sa connexion */
            $modAgenda =new AgendaManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $modAge =  $modAgenda->updateAgenda($connection);

            include_once "../view/private_view/modifierAgenda.php";
            break;
        default :
            include_once "../view/private_view/homeAdmin.php";
            break;
    }
}else if (isset($_GET['disconnect'])) {
      $adminConect->disconnect();
        header("Location: ./");
        exit();
}else{
    include_once "../view/private_view/homeAdmin.php";
}

