<div id="donFooter">
    <h1><?=$recupFooter->getFooterFaireUnDonTitre()?></h1>
    <p> <?=$recupFooter->getFooterFaireUnDonText() ?> </p>
    <button><a href="index.php?view=donation"><?=$recupFooter->getFooterFaireUnDonButton() ?></a></button>
</div>

<div id="menuFooter">
    <a href="?view=asbl<?=$URL?>"><?=$recupFooter->getFooterAsbl()?></a>
    <a href="?view=actions<?=$URL?>"><?=$recupFooter->getFooterAction()?></a>
    <a href="?view=formations<?=$URL?>"><?=$recupFooter->getFooterFormation()?></a>
    <a href="?view=agenda<?=$URL?>"><?=$recupFooter->getFooterAgenda()?></a>
    <a href="?view=donation<?=$URL?>"><?=$recupFooter->getFooterDon()?></a>
    <a href="?view=admin" target="_blank"><?=$recupFooter->getFooterAdmin()?></a>
    <a href="?view=error" target="_blank"><?=$recupFooter->getFooterMention()?></a>
    <a href="?view=error" target="_blank"><?=$recupFooter->getFooterPolitique()?></a>
</div>

<div id="aboutFooter">
    <h2><?=$recupFooter->getFooterTitre()?></h2>
    <hr id="hrBleu">
    <img src="img/logoSanteFormation.png"  alt="">
    <p><?=$recupFooter->getFooterDescription()?></p>
</div>

<div id="coordoneeFooter">
    <h2><?=$recupFooter->getFooterCoordonnee()?></h2>
    <hr id="hrBleu">
    <h4><?=$recupFooter->getFooterSiegeSociete()?></h4>
    <h4><?=$recupFooter->getFooterMail()?></h4>
    <h4><?=$recupFooter->getFooterTelephone()?></h4>
    <h4><?=$recupFooter->getFooterReseauxSocial()?></h4>
    <img src="img/icons8-facebook-nouveau-50.png" alt="">
    <img src="img/icons8-instagram-50.png" alt="">
    <img src="img/icons8-linkedin-50.png" alt="">
</div>

<div id="contactFooter">
    <h2><?=$recupFooter->getFooterContactTitre()?></h2>
    <hr id="hrBleu">
<form id="formFooter" action="" method="POST">
    <div class="input-container">
        <input id="nomFooter" type="text" name="nom" placeholder="<?=$recupFooter->getFooterContactNom()?>" required>
    </div>
    <div class="input-container">
        <input id="emailFooter" type="text" name="email" placeholder="<?=$recupFooter->getFooterContactEmail()?>" required>
    </div>
    <div class="input-container">
        <select id="categorieFooter" name="categorie">
            <option value="Administration"><?=$recupFooter->getFooterOp1()?></option>
            <option value="Donation"><?=$recupFooter->getFooterOp2()?></option>
            <option value="Bénévole"><?=$recupFooter->getFooterOp3()?></option>
            <option value="Autre"><?=$recupFooter->getFooterOp4()?></option>
        </select>
    </div>
    <div class="input-container textarea-container">
        <textarea id="messageFooter" name="message" placeholder="<?=$recupFooter->getFooterContactMsg()?>" required></textarea>
    </div>
    <div class="input-container">
        <input id="submitFooter" type="submit" name="envoyer" value="<?=$recupFooter->getFooterContactButton()?>">
    </div>
</form>


</div>

<div id="copyright">
    <hr>
    <p>&copy; <?php echo date("Y"); ?> <?=$recupFooter->getFooterCopyrigth()?></p>
</div>
