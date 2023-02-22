<div class="symptom-card-widget">
    <div class="flex-row align-center">
        <img class="mr-m" src="<?php echo $symptom->image ?>" alt="<?php echo $symptom->name ?>" width="102" height="102" />
        <div>
            <h3 class="h200">
                <?php echo $symptom->name ?>
            </h3>
            <p class="p200" id="aka">
                <span class="l10n">Also called</span>
                <span>
                    <?php echo $symptom->aka ?>
                </span>
            </p>
        </div>
    </div>
    <div class="mt-m p200">
        <?php echo $symptom->content ?>
    </div>
    <a href="<?php echo $_SERVER['REQUEST_URI'] . '/types/' . $symptom->id ?>" class="mt-m is-hidden-mobile button b200 compact text l10n">Read more</a>
    <a href="<?php echo $_SERVER['REQUEST_URI'] . '/types/' . $symptom->id ?>" class="mt-m is-hidden-tablet button expand outline l10n">Read more</a>
</div>