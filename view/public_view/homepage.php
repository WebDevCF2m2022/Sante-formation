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
        <h1>Nos actions</h1>
        <!--
        <h3>SLOGAN en long</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, illo?</p>
        -->
<div id="positionAction">
    <div class="carteAction">
        <img src="img/caravan.png" alt="">
        <h1>Caravane Medical </h1>
    </div>
    <div class="carteAction">
        <img src="img/02.png" alt="">
        <h1>Actions Humanitaires</h1>
    </div>
    <div class="carteAction">
        <img src="img/05.jpg" alt="">
        <h1>Aide aux familles </h1>
    </div>
</div>
    <a href="?view=actions" target="_blank">En savoir plus</a>
</div>

<div id="formationAccueil">
        <h1>Nos formations</h1>
        <!-- 
        <h3>SLOGAN en long</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, illo?</p> 
        -->
<div id="positionFormation">
    <div class="carteFormation">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>Formation</h1>
    </div>
    <div class="carteFormation">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>Formation</h1>
    </div>
    <div class="carteFormation">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>Formation</h1>
    </div>
</div>
    <a href="?view=formations" target="_blank">En savoir plus</a>
</div>

    <!-- INCLUDE DU CONTACT DANS LA PAGE -->
    

<div id="agendaAccueil">
        <h1 class="centre">Agenda</h1>
<div id="positionAgenda">
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg"  alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime consequatur nemo atque odio perferendis laudantium, eum non temporibus alias laborum distinctio maiores facilis et cumque?</p>
        <a href="">Detail</a>
    </div>
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur autem ipsam hic provident quod molestiae ducimus distinctio exercitationem cumque enim. Magnam laborum ipsa eaque omnis!</p>
        <a href="">Detail</a>
    </div>
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam nesciunt inventore libero excepturi facere sapiente, dolore, delectus nobis laudantium natus laborum incidunt quidem? Maxime.</p>
        <a href="#">Detail</a>
    </div>
</div>
    <a id="savoirPlusAgenda" href="?view=agenda" target="_blank">En savoir plus</a>
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