<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/lightbox.js" defer></script>
    <title>Document</title>
</head>
<body>
<!-- INCLUDE DU MENU -->
    <nav>
        <?php
        include "../view/public_view/src/FR/menuFR.php";
        ?>
    </nav>

    <!-- INCLUDE DU CAROUSEL -->
<?php
    include "../view/public_view/src/lightbox.php"
?>


 <footer>
     <!-- INCLUDE DU FOOTER -->
     <?php
     include_once '../view/public_view/src/FR/footerFR.php';
     ?>
 </footer>
</body>
</html>