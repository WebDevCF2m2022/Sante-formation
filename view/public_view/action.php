<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoSanteFormation.png">
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
        <?php
        include "../view/public_view/src/menu.php";
        ?>
    <!-- INCLUDE DU CAROUSEL -->
    <?php
    include "../view/public_view/src/lightbox.php"
    ?>

            <div id="actionBloc">
                    <h1><?=$recupAction->getActionTitre()?></h1>
                    <h3><?=$recupAction->getActionDescription()?></h3>
                    <p><?=$recupAction->getActionText()?></p>
            <div id="positionAction">
                <?php foreach ($recupAllAction as $item){?>
                <div class="carteAction">
                       <?=$item->getActionImg()?>
                    <h1><?=$item->getActionImageText()?> </h1>
                </div>
                <?php }?>

            </div>
            </div>



    <!-- INCLUDE DES VALEURS -->
    <?php
    include_once "../view/public_view/src/valeur.php";
    ?>
 <footer>
     <!-- INCLUDE DU FOOTER -->
     <?php
     include_once "../view/public_view/src/footer.php";
     ?>
 </footer>
 </div>
</body>
</html>