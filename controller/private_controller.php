<?php
/**
 use model\ManagerClass\AdminManager;

if(isset($_POST['login']) && isset($_POST['pwd'])) {
    var_dump($_POST);
    $login = htmlspecialchars(strip_tags(trim($_POST['login'])), ENT_QUOTES);
    $pwd = htmlspecialchars(strip_tags(trim($_POST['pwd'])), ENT_QUOTES);


    $userConnect = new AdminManager();
    $userLog = $userConnect->connectAdmin("sante_formation", "ana", "test1234");
    if (is_string($userLog)) {
        $erreur = $userLog;
    }

    // redirection si connexion ok
    if ($userLog === true) {
        // redirection sur index.php
        header("Location: ./view/logAdmin.php");
    } else if (isset($_GET['disconnect'])) {
        $userLog = $userConnect->disconnect();
        header("Location: ./");
        exit();
    }
}*/