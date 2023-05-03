<a href="<?php echo $_SERVER['REQUEST_URI'] . 'typer/' . $type->id ?>" class="type-card-widget">
    <div class="flex-row align-start justify-space-between">
        <div class="image">
            <img src="<?php echo $type->image_url ?>?>" alt="<?php echo $type->title ?>">
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