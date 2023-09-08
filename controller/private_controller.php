<?php
use \model\ManagerClass\AdminManager;
var_dump($_SESSION);

$adminConect = new AdminManager($connection);
var_dump($adminConect);

require "../view/private_view/homeAdmin.php";

