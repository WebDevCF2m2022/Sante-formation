<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/valeur.css">
    <link rel="stylesheet" href="css/contactPage.css">
    <link rel="stylesheet" href="css/homepage.css">
    <script src="js/lightbox.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/countrySelect.css">
    <script src="js/countrySelect.js"></script>
    <title>Accueil</title>
</head>
<body>
<div id="gridAccueil">
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

<div id="aProposAcc">
        <img src="img/pexels-murilo-fonseca-17239050.jpg" alt="">
        <h1>A propos de nous</h1>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem deserunt voluptates unde molestias minima optio? Molestiae sit id aperiam facere facilis? Magnam sed laborum itaque sunt ducimus ea necessitatibus animi! Tenetur, soluta natus rerum, quia quas delectus cupiditate neque blanditiis similique accusamus quos saepe recusandae tempora rem dolor laboriosam. Doloribus omnis voluptatem quisquam, nisi eveniet debitis ipsa! Illo mollitia sint fuga enim tenetur suscipit quam expedita, voluptatum deserunt similique minima libero, inventore dolorum quae tempore?</h3>
</div>

<div id="text1Accueil">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, suscipit nisi. Quia, incidunt ipsa. Eum voluptates harum animi aut est. Dolore est quasi reiciendis minima natus laudantium officiis? Perferendis distinctio facere quaerat consequuntur? Accusantium quam dicta sint neque ipsa expedita beatae blanditiis sunt necessitatibus dolor itaque voluptatum sed, deserunt, voluptas modi possimus dignissimos dolores temporibus labore, pariatur enim distinctio! Autem magni consequuntur ducimus sed, repudiandae rem nemo omnis illo, esse iure officia placeat neque illum, reiciendis id vel rerum atque a quibusdam nulla corrupti. Rerum in ratione, facere nobis ipsam officiis, velit ipsa suscipit quaerat libero cupiditate deleniti architecto magnam?</p>
</div>

                <div id="actionAccueil">
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
                </div>
                    <a href="?view=action" target="_blank">En savoir plus</a>
                </div>

<div id="formationAccueil">
        <h1>Nos formations</h1>
        <h3>SLOGAN en long</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, illo?</p>
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
    <a href="?view=formation" target="_blank">En savoir plus</a>
</div>

    <!-- INCLUDE DU CONTACT DANS LA PAGE -->
    <?php
    include_once "../view/public_view/src/contactPage.php";
    ?>

<div id="agendaAccueil">
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
</div>
    <a id="savoirPlusAgenda" href="?view=agenda" target="_blank">En savoir plus</a>
</div>


<script>
    $("#country_selector").countrySelect({
        defaultCountry: "fr",
        onlyCountries: ['gb', 'fr', 'nl', 'sa'],
        preferredCountries: [],
        localizedCountries:{'gb': 'GB', 'fr': 'FR', 'nl': 'NL', 'sa': 'AR'}
    });
</script>


    <!-- INCLUDE DE "NOS VALEUR -->
    <?php
        include "../view/public_view/src/valeur.php"
    ?>

    <!-- INCLUDE DU FOOTER -->
    <footer>
        <?php
        include_once '../view/public_view/src/FR/footerFR.php';
        ?>
    </footer>


</div>
</body>
</html>