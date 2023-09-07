<?php
session_start();
use \model\Autoloader;

require '../model/Autoloader.php';
\model\Autoloader::register();
require_once '../config.php';
require_once '../controller/public_controller.php';
require_once '../controller/private_controller.php';


