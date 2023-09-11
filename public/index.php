<?php

 session_start();
 use \model\Autoloader;
require_once '../vendor/autoload.php';

require '../model/Autoloader.php';
\model\Autoloader::register();

require_once '../config.php';


/*
# PHP ini_set mail
ini_set('SMTP', MAIL_SERVER);
ini_set('smtp_port', MAIL_PORT);
ini_set('sendmail_from', MAIL_FROM);
*/


 // Vérifiez si la langue sélectionnée est définie dans la requête

try {
    if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];
    // Utilisez la langue sélectionnée pour changer la connexion à la base de données
            if ($selectedLang === 'fr') {

               $connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME_FR . ';charset=' . DB_CHARSET, DB_USER, DB_PWD);
               $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            } elseif ($selectedLang === 'en') {

              $connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME_EN . ';charset=' . DB_CHARSET, DB_USER, DB_PWD);
              $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            } elseif ($selectedLang === 'nl') {

               $connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME_NL . ';charset=' . DB_CHARSET, DB_USER, DB_PWD);
               $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            } else {
               $connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME_FR . ';charset=' . DB_CHARSET, DB_USER, DB_PWD);
               $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               $connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            }

    } else {
            $connection = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME_FR . ';charset=' . DB_CHARSET, DB_USER, DB_PWD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    }
}   catch (PDOException $e) {
    echo "connection error " . $e->getMessage();
}



      if(!isset($_SESSION['idAdmin']) || $_SESSION['idAdmin'] != session_id() ){
            require_once '../controller/public_controller.php';
      } else{
    require_once '../controller/private_controller.php';
      }



