<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <script src="js/lightbox.js" defer></script>
    <title>Accueil</title>
</head>
<body>

<!--include menu-->
<?php
    include "../view/public_view/src/menu.php";
?>

<div id="lightbox">
    <div class="image">
        <img src="img/pexels-ono-kosuki-5973894.jpg" width="100%" alt="">
        <div class="caption">
            <h2>Action 1</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, cumque iusto repellendus consequatur nisi blanditiis veniam nihil quis aut modi?</p>
            <button>Action 1</button>
        </div>
    </div>
    <div class="image">
        <img src="img/pexels-adi-k-4485630.jpg" width="100%" alt="">
        <div class="caption">
            <h2>Title 2</h2>
            <p>Description 2</p>
            <button>Button 2</button>
        </div>
    </div>
    <div class="image">
        <img src="img/pexels-ono-kosuki-5973894.jpg" width="100%" alt="">
        <div class="caption">
            <h2>Title 3</h2>
            <p>Description 3</p>
            <button>Button 3</button>
        </div>
    </div>
    <div class="image">
        <img src="img/pexels-adi-k-4485630.jpg" width="100%" alt="">
        <div class="caption">
            <h2>Title 4</h2>
            <p>Description 4</p>
            <button>Button 4</button>
        </div>
    </div>
    <div class="image">
        <img src="img/pexels-pnw-production-8250881.jpg" width="100%" alt="">
        <div class="caption">
            <h2>Title 5</h2>
            <p>Description 5</p>
            <button>Button 5</button>
        </div>
    </div>
    <span class="prev">&#10094;</span>
    <span class="next">&#10095;</span>
</div>

<!-- INCLUDE DU FOOTER -->
<?php
    include_once '../view/public_view/src/FR/footerFR.php';
?>



</body>
</html>