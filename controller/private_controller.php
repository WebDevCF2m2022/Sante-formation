<?php
use \model\ManagerClass\AdminManager;
use \model\ManagerClass\ActionManager;
use \model\ManagerClass\FormationManager;
use \model\ManagerClass\AgendaManager;
use \model\MappingClass\ActionMapping;
use  \model\MappingClass\FormationMapping;
use \model\MappingClass\AgendaMapping;



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
        case "deleteAction" :
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
            $formationAdmin =new FormationManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
               $formationAll = $formationAdmin-> getAll();
            if(isset($_POST['formationText'])&& ($_POST['formationImage'])){
                $insert = new FormationMapping($_POST);
                //var_dump($insert);
                try{
                    $a =  $formationAdmin->insertFormation($insert);
                    if($a===true){
                        header("Location: ./?p=formation&yes");
                        die();
                    }
                }catch (Exception $e){
                    $e = throw new Exception ('Un problème est survenu lors de la inseration , veuillez réessayer');

                }
            }
            include_once "../view/private_view/formationAdmin.php";
            break;
        case "deleteFormation" :
            if(isset($_GET['idn'])) {
                try {
                    $formationAdmin =new FormationManager($connection);
                    $formationAdmin->deleteFormation($_GET['idn']);

                } catch (Exception $e) {
                    $e = throw new Exception ('Un problème est survenu lors de la supression, veuillez réessayer');
                }
            }


            break;
        case "modifFormation" :
            /* Création d'un manager VALIDE avec sa connexion */
            $modFormation =new FormationManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */

            if(isset($_GET['id'])){
                if(isset($_POST['formationText']) && ($_POST['formationImage'])){
                    $updateFormation = new FormationMapping($_POST);
                    $modFormation ->updateFormation($updateFormation);
                }else {
                    $modForm= $modFormation->getOneById($_GET['id']);
                    include_once "../view/private_view/modifierFormation.php";
                }
            }

            break;

        case "agenda" :
            /* Création d'un manager VALIDE avec sa connexion */
            $agenda =new AgendaManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */
            $agendaAll= $agenda->getAll();
            if(isset($_POST['agendaTextDetail']) && ($_POST['agendaImages']) && ($_POST['agendaText'])){
                $insert =new AgendaMapping($_POST);
                try{
                    $a = $agenda->insertAgenda($insert);
                    if($a === true){
                        header("Location: ./?p=agenda&yes");
                        die();
                    }
                }catch (Exception $e){
                    $e = throw new Exception ('Un problème est survenu lors de la inseration , veuillez réessayer');
                }
            }
            include_once "../view/private_view/agendaAdmin.php";
            break;

        case "deleteAgenda" :
            if(isset($_GET['idn'])) {
                try {
                    $agenda =new AgendaManager($connection);
                    $agenda->deleteAgenda($_GET['idn']);

                } catch (Exception $e) {
                    $e = throw new Exception ('Un problème est survenu lors de la supression, veuillez réessayer');
                }
            }


            break;
        case "modifAgenda":
            /* Création d'un manager VALIDE avec sa connexion */
            $modAgenda =new AgendaManager($connection);
            /* Instantiation du AccueilMapping.php avec la méthod du manager */

        if(isset($_GET['id'])){
            if(isset($_POST["agendaTextDetail"]) &&($_POST['agendaImages']) && ($_POST['agendaText'])){

                $update = new AgendaMapping($_POST);
                $modAgenda->updateAgenda($update);
            }else{

                $modAge =  $modAgenda->getOneById($_GET['id']);
                include_once "../view/private_view/modifierAgenda.php";
            }
        }

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

