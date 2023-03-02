<a href="<?php echo $combo->booking_url ?>" target="_blank" class="service-combo-widget">
    <div class="service-combo-small is-hidden-tablet">
        <div class="image">
            <picture>
                <!-- We actually use the large image on small screens -->
                <source media="(max-width: 799px)" srcset="<?php echo $combo->image_large ?>">
                <source media="(min-width: 800px)" srcset="<?php echo $combo->image_small ?>">
                <img src="<?php echo $combo->image_large ?>" alt="Combo image" width="361" height="274" />
            </picture>
        </div>
        <div class="service-combo-content">
            <?php foreach ($combo->items as $combo_item) { ?>
                <div class="service-combo-item">
                    <span class="h200"><?php echo $combo_item->title ?></span>
                    <span class="p200"><?php echo $combo_item->price ?></span>
                </div>
            <?php } ?>
            <div class="service-combo-info">
                <span class="service-combo-duration"><?php echo $combo->duration ?></span>
                <div>
                    <span class="service-combo-full-price"><?php echo $combo->full_price ?></span><span class="service-combo-price"><?php echo $combo->price ?></span>
                </div>
            </div>
            <button class="mt-m expand l10n">Book a combination</button>
        </div>
    </div>
    <div class="service-combo-large is-hidden-mobile">
        <div class="image">
            <picture>
                <img src="<?php echo $combo->image_small ?>" alt="Combo image" width="200" height="200" />
            </picture>
        </div>
        <div class="service-combo-content">
            <div class="service-combo-items">
                <?php foreach ($combo->items as $combo_item) { ?>
                    <div class="service-combo-item">
                        <span class="h200"><?php echo $combo_item->title ?></span>
                        <span class="p200"><?php echo $combo_item->price ?></span>
                    </div>
                <?php } ?>
            </div>
            <div class="service-combo-info">
                <div class="service-combo-duration">
                    <span class="l10n">Duration:</span>
                    <span><?php echo $combo->duration ?></span>
                </div>
                <div>
                    <span class="service-combo-full-price"><?php echo $combo->full_price ?></span><span class="service-combo-price"><?php echo $combo->price ?></span>
                    <button class="l10n">Book a combination</button>
                </div>
            </div>
        </div>
    </div>
</a>