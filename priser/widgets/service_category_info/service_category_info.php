<div class="service-info-widget">
    <div class="tiw-card">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $service_category->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $service_category->image_large ?>">
            <img src="<?php echo $service_category->image_small ?>" alt="<?php echo $service_category->title ?>" width="364" height="274" />
        </picture>
        <div class="tiw-title"><?php echo $service_category->name ?></div>
        <div class="tiw-desc"><?php echo $service_category->description ?></div>
        <a href="<?php echo $service_category->url ?>" class="button grey expand is-hidden-desktop"><?php echo $service_category->url_label ?></a>
        <a href="<?php echo $service_category->url ?>" class="button text compact is-hidden-touch"><?php echo $service_category->url_label ?></a>
    </div>
    <div class="tiw-services">
        <?php foreach ($service_category->services_per_category as $category => $services) { ?>
            <div class="tiw-category">
                <h3><?php echo $category ?></h3>
                <hr class="is-hidden-touch" />
                <?php foreach ($services as $service) { ?>
                    <div class="tiw-service">
                        <div class="tiw-service-flex">
                            <div class="tiw-service-left">
                                <?php if (isset($service->image)) { ?>
                                    <img src="<?php echo $service->image ?>" alt="<?php echo $service->name ?>" width="64" height="64" />
                                <?php } ?>
                                <div>
                                    <div class="tiw-service-name"><?php echo $service->name ?></div>
                                    <div class="tiw-service-price">
                                        <?php if (isset($service->full_price)) { ?>
                                            <span class="tiw-service-full-price"><?php echo $service->full_price ?></span>
                                        <?php } ?>
                                        <span><?php echo $service->price ?></span>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $service->booking_url ?>" class="button l10n">Book</a>
                        </div>
                        <?php if (isset($service->combo_items)) { ?>
                            <div class="tiw-combo-items">
                                <?php foreach ($service->combo_items as $combo_item) { ?>
                                    <div class="tiw-combo-item">
                                        <div class="tiw-combo-item-label"><?php echo $combo_item->name ?></div>
                                        <div class="tiw-combo-item-prices">
                                            <?php if (isset($combo_item->full_price)) { ?>
                                                <span class="tiw-combo-item-fullprice"><?php echo $combo_item->full_price ?></span>
                                            <?php } ?>
                                            <span class="tiw-combo-item-price"><?php echo $combo_item->price ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    <hr class="is-hidden-touch" />
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>