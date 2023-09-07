<div id="donFooter">
    <h1>Faire un don</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quis delectus odio hic cupiditate recusandae magnam vel totam doloribus, alias aspernatur dolorum omnis sint amet optio nihil beatae eaque debitis vitae fuga temporibus. Dolore in molestias soluta officia eius consequuntur veritatis molestiae. Totam excepturi veritatis aperiam iure quisquam pariatur voluptatum assumenda, voluptatibus illo quas ipsam dicta ad porro, obcaecati at laboriosam sunt placeat expedita. Aliquid, sint a aspernatur veritatis voluptatum minima deserunt? Distinctio voluptatibus, voluptatem totam, necessitatibus consequuntur ab maxime iure eligendi deserunt laborum doloribus repellat rem vero deleniti debitis illo cumque ipsam? Quisquam aspernatur ratione harum nostrum beatae quidem!</p>
    <button><a href="index.php?view=donation">Donation</a></button>
</div>

<div id="menuFooter">
    <a href="?view=asbl">L'ASBL</a>
    <a href="?view=actions">Actions</a>
    <a href="?view=formations">Formations</a>
    <a href="?view=agenda">Agenda</a>
    <a href="?view=donation">Don</a>
    <a href="?view=admin" target="_blank">Admin</a>
    <a href="?view=don" target="_blank">Mention légales</a>
    <a href="?view=don" target="_blank">Politique de confidentialité</a>
</div>

<div id="aboutFooter">
    <h2>Santé et formation</h2>
    <hr id="hrBleu">
    <img src="img/logoSanteFormation.png"  alt="">
    <p>Notre Association "Santé & Formation" contribue activement à la formation, l’éducation et l’insertion professionnelle des personnes précaires. Nos activités sont axées sur la santé physique et mentale, l’information et la prévention.</p>
</div>

<div id="coordoneeFooter">
    <h2>Coordonée</h2>
    <hr id="hrBleu">
    <h4>Siège social:<p>Avenue voltaire 138, 1030 Schaerbeek</p></h4>
    <h4>Mail:<p>contact@sante-et-formation.org</p></h4>
    <h4>Tel:</h4>
    <h4>Réseaux sociaux</h4>
    <img src="img/icons8-facebook-nouveau-50.png" alt="">
    <img src="img/icons8-instagram-50.png" alt="">
    <img src="img/icons8-linkedin-50.png" alt="">
</div>

<div id="contactFooter">
    <h2>Contact</h2>
    <hr id="hrBleu">
<form id="formFooter" action="#">
    <div class="input-container">
        <input id="nomFooter" type="text" name="nom" placeholder="Nom, prénom *" required>
    </div>
    <div class="input-container">
        <input id="emailFooter" type="text" name="email" placeholder="Email *" required>
    </div>
    <div class="input-container">
        <select id="categorieFooter" name="categorie">
            <option value="Administration">Administration</option>
            <option value="Donation">Donation</option>
            <option value="Bénévole">Bénévole</option>
            <option value="Autre">Autre</option>
        </select>
    </div>
    <div class="input-container textarea-container">
        <textarea id="messageFooter" name="message" placeholder="Votre message *" required></textarea>
    </div>
    <div class="input-container">
        <input id="submitFooter" type="submit" name="envoyer" value="ENVOYER">
    </div>
</form>


</div>

<div id="copyright">
    <hr>
    <p>&copy; <?php echo date("Y"); ?> Santé-et-formation</p>
</div>
