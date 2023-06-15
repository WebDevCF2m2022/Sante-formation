<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Header</title>
    <!--<div class="entete">-->
    
    <nav class="navigation">
        <div class="logo">
        <img src="img/logo.png" alt="logo">
        </div>
            <a href="index.php?view=homepage" class="navi">L'ASBL</a>
            <a href="index.php?view=action" class="navi">Nos actions</a>
            <a href="index.php?view=formation" class="navi">Formations</a>
            <a href="index.php?view=agenda" class="navi">Agenda</a>
            <a href="index.php?view=contact" class="navi">Contact</a>
            <button class="navibutton"><a href="index.php?view=donation" class="navilien">Faire un don</a></button>
            <!-- BOUTON CHANGEMENT DE LANGUES -->
            <form method="post" action="">
                <select name="langSelect"  class= "navilangue" id="langue-select" onchange="this.form.submit()">
                    <option value="fr" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "fr") { echo "selected"; } ?>>FR</option>
                    <option value="en" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "en") { echo "selected"; } ?>>EN</option>
                    <option value="nl" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "nl") { echo "selected"; } ?>>NL</option>
                    <option value="ar" <?php if(isset($_POST['langSelect']) && $_POST['langSelect'] === "ar") { echo "selected"; } ?>>AR</option>
                </select>
            </form>
    
        </nav>
        

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


