<div class="treatment-areas-widget">
    <?php foreach ($treatment_areas as $area) { ?>
        <div class="treatment-area-small is-hidden-tablet">
            <div class="image">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo $area->image_small ?>">
                    <source media="(min-width: 800px)" srcset="<?php echo $area->image_large ?>">
                    <img src="<?php echo $area->image_large ?>" alt="<?php echo $area->title ?>" width="361" height="274" />
                </picture>
            </div>
            <div class="mt-m h300"><?php echo $area->title ?></div>
            <div class="mt-xxs mb-xs"><?php echo $area->description ?></div>
            <?php foreach ($area->items as $item) { ?>
                <div class="area-item-card">
                    <div class="image">
                        <img src="<?php echo $item->image ?>" alt="<?php echo $area->title ?>" width="102" height="102" />
                    </div>
                    <div class="area-item-info">
                        <div class=" h200"><?php echo $item->title ?></div>
                        <div class="price-duration">
                            <div><?php echo $item->price ?></div>
                            <div class="dot ml-xs mr-xs"></div>
                            <div><?php echo $item->duration ?></div>
                        </div>
                    </div>
                    <div class="area-item-icon">
                        <?php icon('add') ?>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div class="treatment-area-large is-hidden-mobile"></div>

    <?php } ?>
    <script src="includes/widgets/treatment_areas/treatment_areas.js"></script>
</div>