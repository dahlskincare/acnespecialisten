<div class="service-combo-widget">
    <div class="service-combo-small is-hidden-tablet">
        <div class="service-combo-info">
            <picture>
                <source media="(max-width: 799px)" srcset="<?php echo $combo->image_small ?>">
                <source media="(min-width: 800px)" srcset="<?php echo $combo->image_large ?>">
                <img loading="lazy" src="<?php echo $combo->image_large ?>" alt="Combo image" title="Combo image" width="72" height="72" />
            </picture>
            <div>
                <div class="h200"><?php echo $combo->name ?></div>
                <div class="p200"><?php echo $combo->price ?></div>
            </div>
        </div>
        <div class="service-combo-content">
            <?php foreach ($combo->items as $combo_item) { ?>
                <div class="service-combo-item">
                    <span class="h200"><?php echo $combo_item->title ?></span>
                    <div>
                        <span class="p200"><?php echo $combo_item->price ?></span>
                        <span class="p200 savings"><?php echo $combo_item->savings ?></span>
                    </div>
                </div>
            <?php } ?>
            <a href="<?php echo $combo->booking_url ?>" title="<?php echo $combo->booking_url_title ?>"><button class="mt-m expand l10n"><?php echo $combo->booking_url_label ?></button></a>
        </div>
    </div>
    <div class="service-combo-large is-hidden-mobile">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $combo->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $combo->image_large ?>">
            <img loading="lazy" src="<?php echo $combo->image_large ?>" alt="<?php echo $combo->image_alt ?>" title="<?php echo $combo->image_title ?>" width="92" height="92" />
        </picture>
        <div class="service-combo-content">
            <div class="service-combo-info">
                <div>
                    <div class="h200"><?php echo $combo->name ?></div>
                    <div class="p200"><?php echo $combo->price ?></div>
                </div>
                <a class="button" href="<?php echo $combo->booking_url ?>" title="<?php echo $combo->booking_url_title ?>"><?php echo $combo->booking_url_label ?></a>
            </div>

            <div class="service-combo-items">
                <?php foreach ($combo->items as $combo_item) { ?>
                    <div class="service-combo-item">
                        <span class="h200"><?php echo $combo_item->title ?></span>
                        <div>
                            <span class="p200"><?php echo $combo_item->price ?></span>
                            <span class="p200 savings"><?php echo $combo_item->savings ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>