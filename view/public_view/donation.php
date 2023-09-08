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
<nav>
    <?php
    include "../view/public_view/src/menu.php";
    ?>
</nav>

    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>
<div id="containeurDon">
    <div id="carteDon">
    <img id="photoDon" src="img/back-to-school.jpg" alt="Fourniture pour rentrée scolaire">
        <h1 id="titreDon">Fournitures pour rentrée scolaire</h1>
        <p id="montantDon">30€/enfant</p>
        <h3>IBAN: BE32 7340 2599 5302</h3>
        <h5>Communication: Fournitures pour rentrée scolaire</h5>
    </div>
    <div id="carteDon">
    <img src="img/vetement-enfant.jpg" alt="Vêtement pour rentrée scolaire" id="photoDon">
        <h1 id="titreDon">Vêtement pour rentrée scolaire</h1>
        <p id="montantDon">30€/enfant</p>
        <h3>IBAN: BE32 7340 2599 5302</h3>
        <h5>Communication: Vêtement pour rentrée scolaire</h5>
    </div>
    <div id="carteDon">
    <img src="img/famille.jpg" alt="Aide Alimentaire pour 1 famille et 3 enfants" id="photoDon">
        <h1 id="titreDon">Aide Alimentaire pour<br> 1 famille et 3 enfants</h1>
        <p id="montantDon">30€/enfant</p>
        <h3>IBAN: BE32 7340 2599 5302</h3>
        <h5>Communication: Aide Alimentaire pour 1 famille et 3 enfants</h5>
    </div>
    <div id="carteDon">
    <img src="img/consultation.jpg" alt="Aide pour les soins de santé / Consultations-Médicaments" id="photoDon">
        <h1 id="titreDon">Aide pour les soins de santé:<br>Consultations-Médicaments</h1>
        <p id="montantDon">50€/enfant</p>
        <h3>IBAN: BE32 7340 2599 5302</h3>
        <h5>Communication: Aide pour les soins de santé</h5>
    </div>
    <div id="carteDon">
    <img src="img/consultation.jpg" alt="Aide pour les soins de santé / Consultations-Médicaments" id="photoDon">
        <h1 id="titreDon">Aide pour les soins de santé:<br>Consultations-Médicaments</h1>
        <p id="montantDon">50€/enfant</p>
        <button id="boutonDon">Faire un don</button>
    </div>
</div>

<footer>
    <!-- INCLUDE DU FOOTER -->
    <?php
     include_once "../view/public_view/src/footer.php";
     ?>
</footer>
</body>
</html>