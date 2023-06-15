<?php





/**
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sante_formation');



// Connexion à la base de données
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Vérification de la connexion
if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());

}*/
 const DB_TYPE = 'mysql';
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PWD = "";
const DB_NAME = "sante_formation";
const DB_PORT = 3306;
const DB_CHARSET = "utf8mb4";
