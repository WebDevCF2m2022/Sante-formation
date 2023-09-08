<?php
use \model\ManagerClass\AdminManager;
$adminConect = new AdminManager($connection);
/*
var_dump($_SESSION);


//var_dump($adminConect);

require "../view/private_view/HOMEAdmin.php";*/

if (isset($_GET['p'])) {

    switch ($_GET['p']) {
        case "home":
            include_once "../view/private_view/homeAdmin.php";
            break;
        case "action":
            include_once "../view/private_view/actionAdmin.php";
            break;
        case "formation" :
            include_once "../view/private_view/formationAdmin.php";
            break;
        case "agenda" :
            include_once "../view/private_view/agendaAdmin.php";
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