<div class="service-combo-widget">
    <div class="service-combo-small is-hidden-tablet">
        <div class="image">
            <picture>
                <!-- We use the large image on small screens -->
                <source media="(max-width: 799px)" srcset="<?php echo $combo->image_large ?>">
                <source media="(min-width: 800px)" srcset="<?php echo $combo->image_small ?>">
                <img src="images/about-mobile.jpg" alt="About us" width="361" height="274" />
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
            <a href="<?php $combo->booking_url ?>" target="_blank" class="mt-m button expand l10n">Book a combination</a>
        </div>
    </div>
    <div class="service-combo-large is-hidden-mobile">
        LARGE
    </div>
</div>