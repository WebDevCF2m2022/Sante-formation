<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoSanteFormation.png">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/valeur.css">
    <link rel="stylesheet" href="css/asbl.css">
    <script src="js/lightbox.js" defer></script>
    <script src="js/nav.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ASBL</title>
</head>
<body>
        <div id="gridASBL">
    <!-- INCLUDE DU MENU -->
    <?php
        include "../view/public_view/src/menu.php";
    ?>

    <!-- INCLUDE DU CAROUSEL -->
    <?php
        include "../view/public_view/src/lightbox.php"
    ?>

    <div id="quiSommeNous">
        <img src="img/03.png" alt="">
        <h1><?=$recup->getTitreSomme()?></h1>
        <h3><?=$recup->getTextSomme()?></h3>
    </div>

            <div id="text1">
                <p><?=$recup->getDescriptionSomme()?></p>
            </div>

    <div id="historique">
        <img src="img/05.jpg" alt="">
        <h1><?=$recup->getTitreHistory()?></h1>
        <h3><?=$recup->getTextHistory()?></h3>
    </div>

            <div id="text2">
             <p><?=$recup->getDescriptionHistory()?></p>
            </div>

    <div id="objectif">
        <img src="img/17.PNG" alt="">
        <h1><?=$recup->getTitreObjectif()?></h1>
        <h3><?=$recup->getTextObjectif()?></h3>
    </div>

            <div id="text3">

                <p><?=$recup->getDescriptionObjectif()?></p>
            </div>

    <!-- INCLUDE DE "NOS VALEUR -->
    <?php
        include "../view/public_view/src/valeur.php"
    ?>


    <!-- INCLUDE DU FOOTER -->
    <footer>
        <?php
     include_once "../view/public_view/src/footer.php";
     ?>
    </footer>


        </div>
</body>
</html>