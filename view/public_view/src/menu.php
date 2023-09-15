<header>
        <div class="logo">
          <a href="./"><img src="img/logoSanteFormation.png" alt="Logo"></a>
        </div>
        <nav class="menu"> <!-- Déplacer la classe 'menu' ici -->
          <div class="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          <?php
        $URL = isset($_GET['lang'])? '&lang='.$_GET['lang']:"";
            ?>
          <ul>
            <li><a href="?view=asbl<?=$URL?>"><?=$recupNav->getNavbarAsbl()?></a></li>
            <li><a href="?view=actions<?=$URL?>"><?=$recupNav->getNavbarAction()?></a></li>
            <li><a href="?view=formations<?=$URL?>"><?=$recupNav->getNavbarFormation()?></a></li>
            <li><a href="?view=agenda<?=$URL?>"><?=$recupNav->getNavbarAgenda()?></a></li>
            <li><a href="?view=contact<?=$URL?>"><?=$recupNav->getNavbarContact()?></a></li>
            <li><a href="?view=donation<?=$URL?>"><?=$recupNav->getNavbarDon()?></a></li>
          </ul>
        </nav>
        <?php
        $URL2 = isset($_GET['view'])? 'view='.$_GET['view']:"";
            ?>
        <div id="langueNavDesktop" class="language-selector">
            <div class="selected-language">
                <?php
                    switch ($_GET['lang']) {
                        case "en":
                            echo '<img class="flag-icon" src="img/icons8-great-britain-48.png" alt="American Flag"><p>EN</p><i class="fas fa-caret-down"></i>';
                            break;
                        case "nl":
                            echo '<img class="flag-icon" src="img/icons8-netherlands-48.png" alt="American Flag"><p>NL</p><i class="fas fa-caret-down"></i>';
                            break;
                        case "ar":
                            echo '<img class="flag-icon" src="img/icons8-saudi-arabia-48.png" alt="American Flag"><p>AR</p><i class="fas fa-caret-down"></i>';
                            break;
                        default:
                            echo '<img class="flag-icon" src="img/icons8-french-flag-48.png" alt="French Flag"><p>FR</p><i class="fas fa-caret-down"></i>';
                    }
                ?>
            </div>
            <ul class="language-options">
            <a href="?<?=$URL2?>&lang=fr"><li data-lang="fr">
                <img class="flag-icon" src="img/icons8-french-flag-48.png" alt="French Flag"><p>FR</p></li></a>
            <a href="?<?=$URL2?>&lang=en"><li data-lang="en">
                <img class="flag-icon" src="img/icons8-great-britain-48.png" alt="American Flag"><p>EN</p></li></a>
            <a href="?<?=$URL2?>&lang=nl"><li data-lang="nl">
                <img class="flag-icon" src="img/icons8-netherlands-48.png" alt="American Flag"><p>NL</p></li></a>
            <a href="?<?=$URL2?>&lang=ar"><li data-lang="ar">
                <img class="flag-icon" src="img/icons8-saudi-arabia-48.png" alt="American Flag"><p>AR</p></li></a>
            </ul>
        </div>
</header>