<a href="<?php echo $model->url ?>" class="brand-model-card-widget">
    <div class="flex-row align-center">
        <div class="bmc-image mr-m">
            <img loading="lazy" src="<?php echo $model->image ?>" alt="<?php echo $model->title ?>" title="<?php echo $model->title ?>" width="102" height="102" />
        </div>
        <div>
            <h3 class="h200"><?php echo $model->title ?></h3>
            <p class="p200" id="bmc-subtitle"><?php echo $model->subtitle ?></p>
        </div>
    </div>
    <div class="mt-m p200"><?php echo $model->content ?></div>
    <button class="mt-m is-hidden-mobile b200 compact text l10n"><?php echo $model->url_label ?></button>
    <button class="mt-m is-hidden-tablet expand outline l10n"><?php echo $model->url_label ?></button>
</a>