<a href="<?php echo $_SERVER['REQUEST_URI'] . '/types/' . $type->id ?>" class="type-card-widget flex-row">
    <img src="<?php echo $type->image_url ?>?>" alt="<?php echo $type->title ?>">
    <div class="ml-m">
        <h4 class="h200">
            <?php echo $type->title ?>
        </h4>
        <p class="p200">
            <?php echo $type->subtitle ?>
        </p>
    </div>
</a>