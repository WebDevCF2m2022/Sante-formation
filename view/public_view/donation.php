<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/nav.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Don</title>
</head>
<body>
<!--include menu-->
<nav>
    <?php
    include "../view/public_view/src/menu.php";
    ?>
</nav>




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