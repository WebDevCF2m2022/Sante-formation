<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoSanteFormation.png">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <script src="js/nav.js" defer></script>
    <script src="js/lightbox.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Contact</title>
</head>

<body>
    <!--include menu-->
    <nav>
        <?php
        include "../view/public_view/src/menu.php";
        ?>

    </nav>
  <!--ligthbox-->
    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>


    <div class="container">

            <div class ="container1">
                <h1 class = "contactush1"><?=$recupContact->getContactTitre()?></h1>
                <p class="contactuspar"><?=$recupContact->getContactText()?></p>
            </div>
        <div class="container2">

            <form action="" method="post" class="formulaire ">

                <label for="lastname" class="contactuslabel"><?=$recupContact->getContactName()?></label>
                    <input type="text" id="lastname" name="lastname" placeholder="" required class="contactusinput">
                    <label for="mail" class="contactuslabel"><?=$recupContact->getContactEmail()?></label>
                    <input type="mail" id="email" name="mail" placeholder="" required class="contactusinput">
                    <label for="mail" class="contactuslabel"><?=$recupContact->getContactCategorie()?></label>
                    <select class="contactusselect">
                        <option><?=$recupContact->getOption1()?></option>
                        <option><?=$recupContact->getOption2()?></option>
                        <option><?=$recupContact->getOption3()?></option>
                        <option><?=$recupContact->getOption4()?></option>
                    </select>
                    <label for="message" class="contactuslabel"><?=$recupContact->getContactMessage()?></label>
                    <textarea id="message" name="message" required class="contactustxtarea"></textarea>
                    <button type="submit" class="contactusbutton"><?=$recupContact->getContactButton()?></button>

            </form>
        </div>
    </div>


    <footer>
        <!-- INCLUDE DU FOOTER -->
        <?php
        include_once '../view/public_view/src/FR/footerFR.php';
        ?>
    </footer>
</body>

</html>