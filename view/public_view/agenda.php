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
    <link rel="stylesheet" href="css/agenda.css">
    <script src="js/lightbox.js" defer></script>
    <script src="js/nav.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Agenda</title>
</head>
<body>
    <div id="gridAgenda">
<!--include menu-->
    <?php
    include "../view/public_view/src/menu.php";
    ?>

    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>

<div id="agendaBloc">
        <h1 class="centre"><?=$recupAgenda->getAgendaTitre()?></h1>
       <h3 class="centre"><?=$recupAgenda->getAgendaDescription()?></h3>
<div id="positionAgenda">
     <?php foreach ($recupAllAgenda as $key){?>
    <div class="carteAgenda">
        <?=$key->getAgendaImages()?>
        <h1><?=$key->getAgendaTextDetail()?></h1>
        <p><?=$key->getAgendaText()?></p>

    </div>
    <?php } ?>


</div>
</div>



    <!-- INCLUDE DES VALEURS -->
    <?php
    include_once "../view/public_view/src/valeur.php";
    ?>
<footer>
    <!-- INCLUDE DU FOOTER -->
    <?php
     include_once "../view/public_view/src/footer.php";
     ?>
</footer>
</div>
</body>
</html>