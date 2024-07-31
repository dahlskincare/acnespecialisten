<div class="service-info-widget">
    <h3 id="<?php echo $category ?>"><?php echo $category ?></h3>
    <hr class="is-hidden-touch" />
    <?php foreach ($services as $scm) { ?>
        <div class="tiw-service">
            <div class="tiw-service-flex">
                <div class="tiw-service-left">
                    <?php if (isset($service->image)) { ?>
                        <img src="<?php echo $service->image ?>" alt="<?php echo $service->name ?>" title="<?php echo $service->name ?>" width="64" height="64" />
                    <?php } ?>
                    <div>
                        <div class="tiw-service-name"><?php echo $service->name ?></div>
                        <div class="tiw-service-price">
                            <span><?php echo $service->price ?></span>
                            <?php if (isset($service->savings)) { ?>
                                <span class="tiw-service-savings"><?php echo $service->savings ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $service->booking_url ?>" class="button l10n" title="Book">Book</a>
            </div>
            <?php if (isset($service->combo_items)) { ?>
                <div class="tiw-combo-items">
                    <?php foreach ($service->combo_items as $combo_item) { ?>
                        <div class="tiw-combo-item">
                            <div class="tiw-combo-item-label"><?php echo $combo_item->name ?></div>
                            <div class="tiw-combo-item-prices">
                                <span class="tiw-combo-item-price"><?php echo $combo_item->price ?></span>
                                <?php if (isset($combo_item->savings)) { ?>
                                    <span class="tiw-combo-item-savings"><?php echo $combo_item->savings ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <hr class="is-hidden-touch" />
    <?php } ?>
</div>