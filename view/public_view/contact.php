<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoSanteFormation.png">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <script src="js/nav.js" defer></script>
    <script src="js/lightbox.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Contact</title>
</head>

<body>
    <div id="gridContact">
    <!--include menu-->
    
    <?php
    include "../view/public_view/src/menu.php";
    ?>

  <!--ligthbox-->
    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>

<div id="container">
<div id="coordonneContact">
    <h1>Coordonné</h1>
    <h4>Siège social:<br>Avenue voltaire 138, 1030 Schaerbeek</h4>
    <h4>Mail:<br>contact@sante-et-formation.org</h4>
    <h4>Tel:</h4>
    <h4>Réseaux sociaux</h4>
    <div id="social">
    <img src="img/icons8-facebook-nouveau-50.png" alt="">
    <img src="img/icons8-instagram-50.png" alt="">
    <img src="img/icons8-linkedin-50.png" alt="">
    </div>
</div>

<div id="formulaireettext">
    <h1><?=$recupContact->getContactTitre()?></h1>
    <p><?=$recupContact->getContactText()?></p>
<form id="form" action="#">
    <div class="input">
        <label for=""><?=$recupContact->getContactName()?></label>
        <input id="nom" type="text" name="nom" required>
    </div>
    <div class="input">
        <label for=""><?=$recupContact->getContactEmail()?></label>
        <input id="email" type="text" name="email" required>
    </div>
    <div class="input">
        <label for=""><?=$recupContact->getContactCategorie()?></label><br>
        <select id="categorie" name="categorie">
            <option value="Administration"><?=$recupContact->getOption1()?></option>
            <option value="Donation"><?=$recupContact->getOption2()?></option>
            <option value="Bénévole"><?=$recupContact->getOption3()?></option>
            <option value="Autre"><?=$recupContact->getOption4()?></option>
        </select>
    </div>
    <div class="input textarea-container">
        <label for=""><?=$recupContact->getContactMessage()?></label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <div class="input">
        <input id="submit" type="submit" name="envoyer" value="<?=$recupContact->getContactButton()?>">
    </div>
</form>
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