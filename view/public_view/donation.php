<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoSanteFormation.png">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/don.css">
    <script src="js/nav.js" defer></script>
    <script src="js/lightbox.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Don</title>
</head>
<body>
    <div id="gridDon">
<!--include menu-->

    <?php
    include "../view/public_view/src/menu.php";
    ?>


    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>
<div id="containeurDon">
    <?php foreach ($recupDonnation as $item){ ?>
    <div id="carteDon">
   <?=$item->getDonPackImage()?>
        <h1 id="titreDon"><?=$item->getDonTitre()?></h1>
        <p id="montantDon"><?=$item->getDonPackTitre()?></p>
        <h3><?=$item->getDonPackText()?></h3>
        <h5><?=$item->getDonText()?></h5>
    </div>
    <?php } ?>

</div>

<footer>
    <!-- INCLUDE DU FOOTER -->
    <?php
     include_once "../view/public_view/src/footer.php";
     ?>
</footer>
</body>
</html>

