<div id="donFooter">
        <h1>Faire un don</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quis delectus odio hic cupiditate recusandae magnam vel totam doloribus, alias aspernatur dolorum omnis sint amet optio nihil beatae eaque debitis vitae fuga temporibus. Dolore in molestias soluta officia eius consequuntur veritatis molestiae. Totam excepturi veritatis aperiam iure quisquam pariatur voluptatum assumenda, voluptatibus illo quas ipsam dicta ad porro, obcaecati at laboriosam sunt placeat expedita. Aliquid, sint a aspernatur veritatis voluptatum minima deserunt? Distinctio voluptatibus, voluptatem totam, necessitatibus consequuntur ab maxime iure eligendi deserunt laborum doloribus repellat rem vero deleniti debitis illo cumque ipsam? Quisquam aspernatur ratione harum nostrum beatae quidem!</p>
        <button><a href="index.php?view=donation">Donation</a></button>
</div>
<div id="menuFooter">
            <?php
                $asbl = "L'ASBL";
                $formation = "Formation";
                $don = "Don";
                $agenda = "Agenda";
                $credits = "Admin";
                $mentionsLegales = "Mention légales";
                $politiqueConfidentialite = "Politique de confidentialité";
                
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
                $santeFormation = "Santé et formation";
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
                $coordonnee = "Coordonée";
                $siegeSocial = "Siège social:";
                $mail = "Mail:";
                $tel = "Tel:";
                $reseauxSociaux = "Réseaux sociaux";

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
                echo "<input id=\"nomFooter\" type=\"text\" name=\"nom\" placeholder=\"Nom, prénom\">";
                echo "<input id=\"emailFooter\" type=\"text\" name=\"email\" placeholder=\"Email *\">";
                echo "<input id=\"messageFooter\" type=\"text\" name=\"message\" placeholder=\"Votre message *\">";
                echo "<input id=\"submitFooter\" type=\"submit\" name=\"envoyer\" value=\"ENVOYER\">";
                echo "</form>";
            ?>
        </div>

        <div id="copyright">
            <?php
                echo "<hr>";
                echo "<p>&copy; ".date("Y")." Santé-et-formation</p>";
            ?>
        </div>


