<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoSanteFormation.png">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/valeur.css">
    <link rel="stylesheet" href="css/contactPage.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/lightbox.js" defer></script>
    <script src="js/nav.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Accueil</title>
</head>
<body>
<div id="gridAccueil">
    <!-- INCLUDE DU MENU -->
    <?php
        include "../view/public_view/src/menu.php";
    ?>

    <!-- INCLUDE DU CAROUSEL -->
    <?php
        include "../view/public_view/src/lightbox.php"
    ?>

<div id="aProposAcc">

    <img src="img/accuile.png" alt="">
        <h1><?=$recupHome->getAccueilTitre()?></h1>
        <h3><?=$recupHome->getAccueilText()?></h3>
</div>

<div id="text1Accueil">
    <p><?=$recupHome->getAccueilDescription()?> </p>
</div>

<div id="actionAccueil">
        <h1><?=$recupHome->getTitreAction()?></h1>
        <!--
        <h3>SLOGAN en long</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, illo?</p>
        -->
<div id="positionAction">
    <?php  foreach($all as $key) {?>
    <div class="carteAction">
        <img src="<?=$key->getPhotoAction()?>" alt="">
        <h1> <?=$key->getTextAction()?></h1>
    </div>

    <?php }?>


</div>
    <a href="?view=actions" target="_blank"><?=$recupHome->getButtonAction()?></a>
</div>

<div id="formationAccueil">
        <h1><?=$recupHome->getTitreFormation()?></h1>
        <!-- 
        <h3>SLOGAN en long</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, illo?</p> 
        -->
<div id="positionFormation">
    <?php  foreach($all as $key) {?>
    <div class="carteFormation">
        <img src="<?=$key->getPhotoFormation()?>" alt="">

        <h1><?=$key->getTextFormation()?></h1>
    </div>
    <?php }?>

</div>
    <a href="?view=formations" target="_blank"><?=$recupHome->getButtonFormation()?></a>
</div>

    <!-- INCLUDE DU CONTACT DANS LA PAGE -->
    

<div id="agendaAccueil">
            <h1 class="centre"><?=$recupHome->getTitreAgenda()?></h1>
<div id="positionAgenda">
    <?php  foreach($all as $key) {?>
    <div class="carteAgenda">
        <img src="<?=$key->getPhotoAgenda()?>" alt="">
        <h1><?=$key->getTextAgenda()?></h1>
        <p><?=$key->getDescriptionAgenda()?></p>
    </div>
    <?php }?>

</div>
    <a id="savoirPlusAgenda" href="?view=agenda" target="_blank"><?=$recupHome->getButtonAction()?></a>
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