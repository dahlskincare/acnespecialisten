<a href="<?php echo $type->url ?>" class="type-card-widget flex-row">
    <div class="image">
        <img src="<?php echo $type->image_url ?>?>" alt="<?php echo $type->title ?>" width="102" height="102">
    </div>
    <div class="ml-m">
        <h4 class="h200">
            <?php echo $type->title ?>
        </h4>
        <p class="p200">
            <?php echo $type->subtitle ?>
        </p>
    </div>
</a>