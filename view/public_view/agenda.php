<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<nav>
    <?php
    include "../view/public_view/src/menu.php";
    ?>
</nav>

    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>

<div id="agendaBloc">
        <h1 class="centre">Agenda</h1>
<div id="positionAgenda">
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
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
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam nesciunt inventore libero excepturi facere sapiente, dolore, delectus nobis laudantium natus laborum incidunt quidem? Maxime.</p>
        <a href="#">Detail</a>
    </div>
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam nesciunt inventore libero excepturi facere sapiente, dolore, delectus nobis laudantium natus laborum incidunt quidem? Maxime.</p>
        <a href="#">Detail</a>
    </div>
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam nesciunt inventore libero excepturi facere sapiente, dolore, delectus nobis laudantium natus laborum incidunt quidem? Maxime.</p>
        <a href="#">Detail</a>
    </div>
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam nesciunt inventore libero excepturi facere sapiente, dolore, delectus nobis laudantium natus laborum incidunt quidem? Maxime.</p>
        <a href="#">Detail</a>
    </div>
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam nesciunt inventore libero excepturi facere sapiente, dolore, delectus nobis laudantium natus laborum incidunt quidem? Maxime.</p>
        <a href="#">Detail</a>
    </div>
    <div class="carteAgenda">
        <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
        <h1>titre</h1>
        <p id="date"><?php echo date("l, j F Y H:i:s"); ?></p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam nesciunt inventore libero excepturi facere sapiente, dolore, delectus nobis laudantium natus laborum incidunt quidem? Maxime.</p>
        <a href="#">Detail</a>
    </div>
</div>
</div>



<!--script langue-->
<script>
    $("#country_selector").countrySelect({
        defaultCountry: "fr",
        onlyCountries: ['gb', 'fr', 'nl', 'sa'],
        preferredCountries: [],
        localizedCountries:{'gb': 'EN', 'fr': 'FR', 'nl': 'NL', 'sa': 'AR'}
    });
</script>

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
    include_once '../view/public_view/src/FR/footerFR.php';
    ?>
</footer>
</div>
</body>
</html>