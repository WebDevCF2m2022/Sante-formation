<div class="navigation">
        <div class="logo">
        <img src="img/logo.png" alt="logo">
        </div>
            <a href="index.php?view=homepage" class="navi">جمعية</a>
            <a href="index.php?view=action" class="navi"> الإجراءات</a>
            <a href="index.php?view=formation" class="navi">تدريب</a>
            <a href="index.php?view=agenda" class="navi">خطة</a>
            <a href="index.php?view=contact" class="navi"> اتصال</a>
            <button class="navibutton"><a href="index.php?view=donation" class="navilien">تبرع</a></button>
            <!-- BOUTON CHANGEMENT DE LANGUES -->
            <form method="post" action="">
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
            include "../view/public_view/src/FR/menuFR.php";
        } else if ($selectedLang === "en") {
            include "../view/public_view/src/ENG/footerENG.php";
            include "../view/public_view/src/ENG/menuENG.php";
        } else if ($selectedLang === "nl") {
            include "../view/public_view/src/NL/footerNL.php";
            include "../view/public_view/src/NL/menuNL.php";
        } else if ($selectedLang === "ar") {
            include "../view/public_view/src/AR/footerAR.php";
            include "../view/public_view/src/AR/menuAR.php";
        }

        // Arrêter l'exécution du script pour afficher uniquement le contenu traduit
        exit;
    }
?>

</nav>


