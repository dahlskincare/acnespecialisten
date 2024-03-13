<a href="<?php echo $_SERVER['REQUEST_URI'] . $type->id ?>">
    <div class="type-card-widget">
        <div class="flex-row">
            <img src="<?php echo $type->image_url ?>" alt="<?php echo $type->title ?>" title="<?php echo $type->title ?>" />
            <div class="ml-m">
                <h3 class="h200"><?php echo $type->title ?></h3>
                <p class="mt-xxs p200 type-card-widget-subtitle"><?php echo $type->subtitle ?></p>
            </div>
        </div>
        <p class="mt-m p200">
            <?php echo $type->content ?>
        </p>
        <div class="mt-m button b200 text compact is-hidden-mobile l10n">Läs mer</div>
        <div class="mt-m button outline expand is-hidden-tablet l10n">Läs mer</div>
    </div>
</a>