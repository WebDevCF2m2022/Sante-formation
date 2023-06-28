<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/valeur.css">

    <script src="js/lightbox.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/countrySelect.css">
    <script src="js/countrySelect.js"></script>

    <title>Document</title>
</head>
<body>
<!-- INCLUDE DU MENU -->
    <nav>
        <?php
        include "../view/public_view/src/menu.php";
        ?>
    </nav>

    <!-- INCLUDE DU CAROUSEL -->
<?php
    include "../view/public_view/src/lightbox.php"
?>



<!--script langue-->
<script>
    $("#country_selector").countrySelect({
        defaultCountry: "fr",
        onlyCountries: ['gb', 'fr', 'nl', 'sa'],
        preferredCountries: [],
        localizedCountries:{'gb': 'EN', 'fr': 'FR', 'nl': 'NL', 'sa': 'AR'}
    });
</script>


 <footer>
     <!-- INCLUDE DU FOOTER -->
     <?php
     include_once '../view/public_view/src/FR/footerFR.php';
     ?>
 </footer>
</body>
</html>