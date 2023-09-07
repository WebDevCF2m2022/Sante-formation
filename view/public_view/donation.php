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


<footer>
    <!-- INCLUDE DU FOOTER -->
    <?php
     include_once "../view/public_view/src/footer.php";
     ?>
     </div>
</footer>
</body>
</html>