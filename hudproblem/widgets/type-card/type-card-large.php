<?php if (isset($type->url)) { ?>
    <a href="<?php echo $type->url ?>" title="<?php echo $type->url_title ?>" class="type-card-widget with-url">
        <div class="flex-row align-start justify-space-between">
            <div class="image">
                <img src="<?php echo $type->image_url ?>" alt="<?php echo $type->image_alt ?>" title="<?php echo $type->image_title ?>" width="102" height="102" />
            </div>
            <?php icon('link-external') ?>
        </div>

        <h4 class="h200 mt-m">
            <?php echo $type->title ?>
        </h4>
        <p class="p200 mt-xxs">
            <?php echo $type->subtitle ?>
        </p>
    </a>
<?php } ?>
<?php if (!isset($type->url)) { ?>
    <div class="type-card-widget">
        <div class="flex-row align-start justify-space-between">
            <div class="image">
                <img src="<?php echo $type->image_url ?>" alt="<?php echo $type->image_alt ?>" title="<?php echo $type->image_title ?>" width="102" height="102" />
            </div>
        </div>

        <h4 class="h200 mt-m">
            <?php echo $type->title ?>
        </h4>
        <p class="p200 mt-xxs">
            <?php echo $type->subtitle ?>
        </p>
    </div>
<?php } ?>