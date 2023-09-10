
<div id="valeur">
    <h1>NOS VALEURS</h1>
    <?php  foreach($recupValue as $item) {?>
    <div  class="valeur-item">
        <img src="img/icons8-balancer-64.png" alt="">
        <h4> <?=$item->getValeursTitre()?></h4>
        <p><?=$item->getValueDescription()?></p>
    </div>
    <?php } ?>
</div>
