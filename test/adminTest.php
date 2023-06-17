<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
</head>
<body>
<h1>Admin</h1>
<nav>
    <ul>
        <li><a href=".">test</a></li>
    </ul>
</nav>
<h2>Utilisateur dont l'id est 1</h2><?php
use model\MappingClass\AdminMapping;
use model\ManagerClass\AdminManager;
/*use model\Autoloader;
model\Autoloader::register();*/

require_once "../config.php";

// Autoload classes

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require '../' .$class . '.php';
});

try{
    $dbConnect = new PDO (DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
        DB_USER,DB_PWD);
    $dbConnect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    throw new Exception('CONNECTION ERROR');

}

$one = new  AdminMapping([
    "idAdmin"=>1,
    "login"=>"test",
    "pwd"=>"test1234"
]);

echo $one->getIdAdmin()."<br>";
echo $one->getLogin()."<br>";
echo $one->getPwd()."<br>";

try{
    $test2 =new AdminMapping([
       "login"=>"ana",
        "pwd"=>"ana1234"
    ]);
}catch (Exception $e){
    echo $e;
}

?><h2>Tous les utilisateurs</h2><?php

/*
foreach ($all as $item) {
    echo $item->getIdAdmin()."<br>";
    echo $item->getLogin()."<br>";
    echo $item->getPwd()."<br>";

}*/
?>
<h2>Connexion d'un utilisateur</h2>
<form action="" method="post" name="connectUser">
    <input type="text" name="loginUser" required placeholder="Votre login"><br>
    <input type="password" name="pwdUser" required placeholder="Votre mot de passe"><br>
    <input type="submit" value="Envoyer">
</body>
</html>
