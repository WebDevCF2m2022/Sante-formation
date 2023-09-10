<div id="gridValeur">
<h1><?=$val->getValeurT()?></h1>
<div id="valeur">
    <?php  foreach($recupValue as $item) {?>
    <div class="valeur-item">
        <h4> <?=$item->getValeursTitre()?></h4>
        <p><?=$item->getValueDescription()?></p>
    </div>
    <?php } ?>
</div>
</div>

