<div class="service-card-big-widget">
    <div class="service-card-image">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
            <img src="<?php echo $image_large ?>" alt="About us" width="872" height="456" />
        </picture>
    </div>
    <div class="service-card-big-content">
        <div class="h200"><?php echo $service->title ?></div>
        <?php if (isset($service->duration)) { ?>
            <div class="service-duration"><?php echo $service->duration ?></div>
        <?php } ?>
        <?php if (isset($service->icons) && sizeof($service->icons) > 0) { ?>
            <div class="service-card-icons">
                <?php foreach ($service->icons as $key => $label) { ?>
                    <div class="service-card-icon">
                        <?php icon($key) ?>
                        <div class="h200"><?php echo $label ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="mt-m">
            <?php echo $service->content ?>
        </div>
        <?php if (isset($service->procedures) && sizeof($service->procedures) > 0) { ?>
            <div class="mt-m">
                <?php foreach ($service->procedures as $procedure) { ?>
                    <hr />
                    <div class="procedure">
                        <div>
                            <div class="procedure-label"><?php echo $procedure->label ?></div>
                            <div>
                                <span class="full-price"><?php echo $procedure->full_price ?></span>
                                <span class="price"><?php echo $procedure->price ?></span>
                            </div>
                        </div>
                        <?php if (isset($procedure->booking_url)) { ?>
                            <a href="<?php echo $procedure->booking_url ?>" target="_blank" class="button l10n">Book</a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <hr />
            </div>
        <?php } ?>
        <?php if (isset($service->consultation_url)) { ?>
            <a href="<?php echo $service->consultation_url ?>" target="_blank" class="mt-m button expand l10n">Book a free consultation</a>
        <?php } ?>
    </div>
</div>