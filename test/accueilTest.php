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
<h2>Test accueill page </h2><?php
use model\MappingClass\AccueilMapping;
use model\ManagerClass\AccueilManager;
use model\Autoloader;
model\Autoloader::register();


$testAccueil = new  AccueilMapping([
    "idAccueil"=>1,
    "accueilTitre"=>"test",
    "accueilText"=>"  on vas teste la page accueil ",
    "accueilDescription"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux ",
    "accueilImage"=>"",
    "accueilButton"=>"envoyer"
]);

echo $testAccueil->getIdAccueil()."<br>";
echo $testAccueil->getAccueilTitre()."<br>";
echo $testAccueil->getAccueilText()."<br>";
echo $testAccueil->getAccueilDescription()."<br>";
echo $testAccueil->getAccueilImage()."<br>";
echo $testAccueil->getAccueilButton()."<br>";


try{
    $testAccueil2 =new AccueilMapping([
        "idAccueil"=>2,
        "accueilTitre"=>"test2",
        "accueilText"=>"  return of test  ",
        "accueilDescription"=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux ",
        "accueilImage"=>"",
        "accueilButton"=>"envoyer"
    ]);
}catch (Exception $e){
    echo $e;
}