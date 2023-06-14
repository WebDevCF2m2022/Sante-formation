<footer>
        <div id="menuFooter">
            <?php
                $asbl = "Vzw";
                $formation = "Opleiding";
                $don = "Doneren";
                $agenda = "Agenda";
                $credits = "Credits";
                $mentionsLegales = "Juridische informatie";
                $politiqueConfidentialite = "Privacybeleid";
                
                echo "<a href=\"index.php?view=homepage\" target=\"_blank\">$asbl</a>";
                echo "<a href=\"index.php?view=formation\" target=\"_blank\">$formation</a>";
                echo "<a href=\"index.php?view=donation\" target=\"_blank\">$don</a>";
                echo "<a href=\"index.php?view=agenda\" target=\"_blank\">$agenda</a>";
                echo "<a href=\"index.php?view=admin\" target=\"_blank\">$credits</a>";
                echo "<a href=\"index.php?view=don\" target=\"_blank\">$mentionsLegales</a>";
                echo "<a href=\"index.php?view=don\" target=\"_blank\">$politiqueConfidentialite</a>";
            ?>
        </div>

        <div id="aboutFooter">
            <?php
                $santeFormation = "Gezondheid en opleiding";
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
                $coordonnee = "Contactgegevens";
                $siegeSocial = "Hoofdkantoor:";
                $mail = "E-mail:";
                $tel = "Telefoon:";
                $reseauxSociaux = "Sociale media";

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
                echo "<input id=\"nomFooter\" type=\"text\" name=\"nom\" placeholder=\"Naam, Voornaam\">";
                echo "<input id=\"emailFooter\" type=\"text\" name=\"email\" placeholder=\"E-mail *\">";
                echo "<input id=\"messageFooter\" type=\"text\" name=\"message\" placeholder=\"Uw bericht *\">";
                echo "<input id=\"submitFooter\" type=\"submit\" name=\"envoyer\" value=\"VERZENDEN\">";
                echo "</form>";
            ?>
        </div>

        <div id="copyright">
            <?php
                echo "<hr>";
                echo "<p>&copy; ".date("Y")." Gezondheid en opleiding</p>";
            ?>
        </div>

    </footer>
</body>
</html>
