<?php if (!isset($type->url)) { ?>
    <div class="type-card-widget flex-row">
        <div class="<?php echo $type->image_class() ?>">
            <img src="<?php echo $type->image_url ?>" alt="<?php echo $type->image_alt ?>" title="<?php echo $type->image_title ?>" width="102" height="102">
        </div>
        <div class="ml-m">
            <h4 class="h200">
                <?php echo $type->title ?>
            </h4>
            <p class="p200">
                <?php echo $type->subtitle ?>
            </p>
        </div>
    </div>
<?php } ?>
<?php if (isset($type->url)) { ?>
    <a href="<?php echo $type->url ?>" title="<?php echo $type->url_title ?>" class="type-card-widget flex-row">
        <div class="<?php echo $type->image_class() ?>">
            <img src="<?php echo $type->image_url ?>" alt="<?php echo $type->image_alt ?>" title="<?php echo $type->image_title ?>" width="102" height="102">
        </div>
        <div class="ml-m">
            <h4 class="h200">
                <?php echo $type->title ?>
            </h4>
            <p class="p200">
                <?php echo $type->subtitle ?>
            </p>
        </div>
        <?php icon('link-external') ?>
    </a>
<?php } ?>