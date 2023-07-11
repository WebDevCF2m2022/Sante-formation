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
    <link rel="stylesheet" href="css/contactPage.css">
    <link rel="stylesheet" href="css/action.css">
    <script src="js/lightbox.js" defer></script>
    <script src="js/nav.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Actions</title>
</head>
<body>
    <div id="gridAction">
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

            <div id="actionBloc">
                    <h1>Nos actions</h1>
                    <h3>SLOGAN en long</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, illo?</p>
            <div id="positionAction">
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
                <div class="carteAction">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Actions</h1>
                </div>
            </div>
            </div>

    <!-- INCLUDE DU CONTACT DANS LA PAGE -->
    <?php
    include_once "../view/public_view/src/contactPage.php";
    ?>


    <!-- INCLUDE DES VALEURS -->
    <?php
    include_once "../view/public_view/src/valeur.php";
    ?>
 <footer>
     <!-- INCLUDE DU FOOTER -->
     <?php
     include_once "../view/public_view/src/FR/footerFR.php";
     ?>
 </footer>
 </div>
</body>
</html>