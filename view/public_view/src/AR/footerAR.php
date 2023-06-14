<footer>
        <div id="menuFooter">
            <?php
                $asbl = "جمعية غير ربحية";
                $formation = "تدريب";
                $don = "تبرع";
                $agenda = "جدول الأعمال";
                $credits = "الاعتمادات";
                $mentionsLegales = "إشعار قانوني";
                $politiqueConfidentialite = "سياسة الخصوصية";
                
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
                $santeFormation = "الصحة والتعليم";
                $hrBleu = "<hr id=\"hrBleu\">";
                $logoSanteFormation = "<img src=\"img/logoSanteFormation.png\" width=\"60px\" alt=\"\">";
                $loremIpsum = "لوريم ايبسوم دولور سيت اميت، كونسيكتور أديبايسينج إيليت. فينيام أكيوساموس بروفيدنت هيك، فولوبتاتوم كونسيكاتور مودي لابوري ايست، ايلوم فيتاي آب، ابريام ماجني؟ مودي دوسيموس بروفيدنت كومودي اسبرناتور ديسيرونت تينيتور إيكو!";
                
                echo "<h2>$santeFormation</h2>";
                echo "$hrBleu";
                echo "$logoSanteFormation";
                echo "<p>$loremIpsum</p>";
            ?>
        </div>

        <div id="coordoneeFooter">
            <?php
                $coordonnee = "معلومات الاتصال";
                $siegeSocial = "المقر الرئيسي:";
                $mail = "البريد الإلكتروني:";
                $tel = "الهاتف:";
                $reseauxSociaux = "وسائل التواصل الاجتماعي";

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
                $contact = "اتصل بنا";

                echo "<h2>$contact</h2>";
                echo "$hrBleu";
                echo "<form id=\"formFooter\" action=\"#\">";
                echo "<input id=\"nomFooter\" type=\"text\" name=\"nom\" placeholder=\"الاسم، اللقب\">";
                echo "<input id=\"emailFooter\" type=\"text\" name=\"email\" placeholder=\"البريد الإلكتروني *\">";
                echo "<input id=\"messageFooter\" type=\"text\" name=\"message\" placeholder=\"رسالتك *\">";
                echo "<input id=\"submitFooter\" type=\"submit\" name=\"envoyer\" value=\"إرسال\">";
                echo "</form>";
            ?>
        </div>

        <div id="copyright">
            <?php
                echo "<hr>";
                echo "<p>&copy; ".date("Y")." الصحة والتعليم</p>";
            ?>
        </div>

    </footer>
</body>
</html>
