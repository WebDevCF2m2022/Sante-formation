
    <nav class="navbar">
            <a href="index.php?view=homepage" class="active">L'ASBL</a>
            <a href="index.php?view=action" class="active">Nos actions</a>
            <a href="index.php?view=formation" class="active">Formations</a>
            <a href="index.php?view=agenda" class="active">Agenda</a>
            <a href="index.php?view=contact" class="active">Contact</a>
            <button><a href="index.php?view=donation" class="active">Faire un don</a></button>

            <!-- BOUTON CHANGEMENT DE LANGUES -->
    <form method="post" action="">
        <select name="langSelect" id="langue-select" onchange="this.form.submit()">
            <option value="fr" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "fr") { echo "selected"; } ?>>FR</option>
            <option value="en" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "en") { echo "selected"; } ?>>EN</option>
            <option value="nl" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "nl") { echo "selected"; } ?>>NL</option>
            <option value="ar" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "ar") { echo "selected"; } ?>>AR</option>
        </select>
    </form>

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


