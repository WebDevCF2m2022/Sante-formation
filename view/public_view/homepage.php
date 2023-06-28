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

                <div id="contactAccueil">
                    <h1>Votre action sur mesure</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magni officia eveniet maiores consectetur voluptas aliquid quisquam optio, facere repudiandae?</p>
                <form action="#" id="formulaireAccueil" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required><br>

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="4" cols="30" required></textarea><br>

                    <input type="submit" value="Envoyer">
                </form>
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