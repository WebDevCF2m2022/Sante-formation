<div class="navigation">
        <div class="logo">
        <img src="img/logoSanteFormation.png" alt="logo">
        </div>
            <a id="asbl"href="index.php?view=homepage" class="navi">L'ASBL</a>
            <a id="action" href="index.php?view=action" class="navi">Actions</a>
            <a id="formation" href="index.php?view=formation" class="navi">Formations</a>
            <a id="agenda" href="index.php?view=agenda" class="navi">Agenda</a>
            <a id="contact" href="index.php?view=contact" class="navi">Contact</a>
            <button id="don" class="navibutton"><a href="index.php?view=donation" class="navilien">Faire un don</a></button>
            <!-- BOUTON CHANGEMENT DE LANGUES -->
            <form id="langue" method="post" action="">
                <select name="langSelect"  class= "navilangue" id="langue-select" onchange="this.form.submit()">
                    <option value="fr" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "fr") { echo "selected"; } ?>>FR</option>
                    <option value="en" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "en") { echo "selected"; } ?>>EN</option>
                    <option value="nl" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "nl") { echo "selected"; } ?>>NL</option>
                    <option value="ar" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "ar") { echo "selected"; } ?>>AR</option>
                </select>
            </form>
    
</div>
        

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Récupérer la valeur de la langue sélectionnée
        $selectedLang = $_POST["langSelect"];

        // Inclure le contenu traduit en fonction de la langue sélectionnée
        if ($selectedLang === "fr") {
            include "../view/public_view/src/FR/footerFR.php";
        } else if ($selectedLang === "en") {
            include "../view/public_view/src/ENG/footerENG.php";
        } else if ($selectedLang === "nl") {
            include "../view/public_view/src/NL/footerNL.php";
        } else if ($selectedLang === "ar") {
            include "../view/public_view/src/AR/footerAR.php";
        }

        // Arrêter l'exécution du script pour afficher uniquement le contenu traduit
        exit;
    }
?>

</nav>


