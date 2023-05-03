<a href="<?php echo $_SERVER['REQUEST_URI'] . 'typer/' . $type->id ?>" class="type-card-widget flex-row">
    <div class="image">
        <img src="<?php echo $type->image_url ?>?>" alt="<?php echo $type->title ?>">
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