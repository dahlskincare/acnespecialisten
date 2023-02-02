<div class="treatment-card-widget">
    <picture class="is-hidden-tablet">
        <source media="(max-width: 799px)"
                srcset="<?php echo $treatment->image_large ?>">
        <source media="(min-width: 800px)"
                srcset="<?php echo $treatment->image_large ?>">
        <img src="<?php echo $treatment->image_large ?>"
             alt="<?php echo $treatment->title ?>"
             width="102"
             height="102" />
    </picture>

    <h3 class="h200">
        <?php echo $treatment->title ?>
    </h3>
    <div class="treatment-info">
        <div class="p200">
            <?php echo $treatment->duration ?>
        </div>
        <div class="treatment-dot"></div>
        <div class="p200">
            <?php echo $treatment->price ?>
        </div>
    </div>
</div>