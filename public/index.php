<?php
 session_start();
 use \model\Autoloader;

require '../model/Autoloader.php';
\model\Autoloader::register();
require_once '../config.php';
require_once '../controller/public_controller.php';



try{
    $dbConnect = new PDO (DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
        DB_USER,DB_PWD);
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
     throw new Exception('CONNECTION ERROR');

}







