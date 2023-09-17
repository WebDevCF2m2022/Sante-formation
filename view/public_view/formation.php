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
    <link rel="stylesheet" href="css/contactPage.css">
    <link rel="stylesheet" href="css/valeur.css">
    <link rel="stylesheet" href="css/formation.css">
    <script src="js/lightbox.js" defer></script>
    <script src="js/nav.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Formation</title>
</head>
<body>
    <div id="gridFormation">
<!--include menu-->

    <?php
    include "../view/public_view/src/menu.php";
    ?>


    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>

            <div id="formationBloc">
                    <h1><?=$recupFormation->getFormationTitre()?></h1>
                    <h3><?=$recupFormation->getFormationDescription()?></h3>

            <div id="positionFormation">
                <?php foreach ($recupAllFormation as $item){?>
                <div class="carteFormation">
                    <img src="<?= $item->getFormationImage()?>" alt="">

                    <h1><?=$item->getFormationText()?></h1>
                </div>
                <?php }?>


            </div>
            </div>


<footer>
    <!-- INCLUDE DU FOOTER -->
    <?php
     include_once "../view/public_view/src/footer.php";
    ?>
</footer>
</div>
</body>
</html>