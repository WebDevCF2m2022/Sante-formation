<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <title>Home</title>
</head>
<body>
    <footer>
        <div id="menuFooter">
            <?php
                $asbl = "Non-profit organization";
                $formation = "Training";
                $don = "Donate";
                $agenda = "Events";
                $credits = "Admin";
                $mentionsLegales = "Legal Notice";
                $politiqueConfidentialite = "Privacy Policy";
                
                echo "<a href=\"#\" target=\"_blank\">$asbl</a>";
                echo "<a href=\"#\" target=\"_blank\">$formation</a>";
                echo "<a href=\"#\" target=\"_blank\">$don</a>";
                echo "<a href=\"#\" target=\"_blank\">$agenda</a>";
                echo "<a href=\"#\" target=\"_blank\">$credits</a>";
                echo "<a href=\"#\" target=\"_blank\">$mentionsLegales</a>";
                echo "<a href=\"#\" target=\"_blank\">$politiqueConfidentialite</a>";
            ?>
        </div>

        <div id="aboutFooter">
            <?php
                $santeFormation = "Health and Education";
                $hrBleu = "<hr id=\"hrBleu\">";
                $logoSanteFormation = "<img src=\"img/logoSanteFormation.png\" width=\"60px\" alt=\"\">";
                $loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam accusamus provident hic, voluptatum consequatur modi labore est, illum vitae ab, aperiam magni? Modi ducimus provident commodi aspernatur deserunt tenetur eaque!";

                echo "<h2>$santeFormation</h2>";
                echo "$hrBleu";
                echo "$logoSanteFormation";
                echo "<p>$loremIpsum</p>";
            ?>
        </div>

        <div id="coordoneeFooter">
            <?php
                $coordonnee = "Contact Information";
                $siegeSocial = "Headquarters:";
                $mail = "Email:";
                $tel = "Phone:";
                $reseauxSociaux = "Social Media";

                echo "<h2>$coordonnee</h2>";
                echo "$hrBleu";
                echo "<h4>$siegeSocial</h4>";
                echo "<h4>$mail</h4>";
                echo "<h4>$tel</h4>";
                echo "<h4>$reseauxSociaux</h4>";
                echo "<img src=\"img/icons8-facebook-nouveau-50.png\" alt=\"\">";
                echo "<img src=\"img/icons8-instagram-50.png\" alt=\"\">";
                echo "<img src=\"img/icons8-linkedin-50.png\" alt=\"\">";
            ?>
        </div>

        <div id="contactFooter">
            <?php
                $contact = "Contact";

                echo "<h2>$contact</h2>";
                echo "$hrBleu";
                echo "<form id=\"formFooter\" action=\"#\">";
                echo "<input id=\"nomFooter\" type=\"text\" name=\"nom\" placeholder=\"Name, Surname\">";
                echo "<input id=\"emailFooter\" type=\"text\" name=\"email\" placeholder=\"Email *\">";
                echo "<input id=\"messageFooter\" type=\"text\" name=\"message\" placeholder=\"Your message *\">";
                echo "<input id=\"submitFooter\" type=\"submit\" name=\"envoyer\" value=\"SEND\">";
                echo "</form>";
            ?>
        </div>

        <div id="copyright">
            <?php
                echo "<hr>";
                echo "<p>&copy; ".date("Y")." Health and Education</p>";
            ?>
        </div>

    </footer>
</body>
</html>
