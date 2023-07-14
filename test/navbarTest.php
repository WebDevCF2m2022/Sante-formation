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
        <li><a href=".">Test</a></li>
    </ul>
</nav>
<h2>Test navbar  </h2><?php
use model\MappingClass\NavbarMapping;
use model\ManagerClass\NavbarManager;
use model\Autoloader;
model\Autoloader::register();


$testNavbar = new NavbarMapping([
    "idNavbar"=>1,
    "navbarAsbl "=>"Asbl",
    "navbarAction"=>"Action",
    "navbarFormation"=> "Formation ",
    "navbarAgenda"=>"Agenda",
    "navbarContact"=>"Contact",
    "navbarDon"=>"Faire un don" ,
    "navbarLangue"=>"FR"
]);

echo $testNavbar->getIdNavbar()."<br>";
echo $testNavbar->getNavbarAsbl()."<br>";
echo $testNavbar->getNavbarAction()."<br>";
echo $testNavbar->getNavbarFormation()."<br>";
echo $testNavbar->getNavbarAgenda()."<br>";
echo $testNavbar->getNavbarContact()."<br>";
echo $testNavbar->getNavbarDon()."<br>";
echo $testNavbar->getNavbarLangue()."<br>";



try{
    $testAccueil2 =new NavbarMapping([
        "idNavbar"=>2,
        "navbarAsbl "=>"Asbl",
        "navbarAction"=>"Action",
        "navbarFormation"=> "Formation ",
        "navbarAgenda"=>"Agenda",
        "navbarContact"=>"Contact",
        "navbarDon"=>"Faire un don" ,
        "navbarLangue"=>"FR"
    ]);
}catch (Exception $e){
    echo $e;
}