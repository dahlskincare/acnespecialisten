<div class="symptom-card-widget">
    <div class="flex-row align-center">
        <div class="image mr-m">
            <img src="<?php echo $symptom->image ?>" alt="<?php echo $symptom->name ?>" title="<?php echo $symptom->name ?>" width="102" height="102" />
        </div>
        <div>
            <h3 class="h200">
                <?php echo $symptom->name ?>
            </h3>
            <?php if (isset($symptom->aka)) { ?>
                <p class="p200" id="aka"><?php echo $symptom->aka ?></p>
            <?php } ?>
        </div>
    </div>
    <div class="mt-m p200">
        <?php echo $symptom->content ?>
    </div>
    <?php if (isset($symptom->url) && isset($symptom->url_label)) { ?>
        <a class="mt-m button is-hidden-mobile b200 compact text l10n" href="<?php echo $symptom->url ?>"><?php echo $symptom->url_label ?></a>
        <a class="mt-m button is-hidden-tablet expand outline l10n" href="<?php echo $symptom->url ?>"><?php echo $symptom->url_label ?></a>
    <?php } ?>
</div>