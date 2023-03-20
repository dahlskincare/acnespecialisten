<div class="service-card-widget">
    <div class="is-hidden-tablet" id="mobile">
        <div class="flex-row">
            <div class="image">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
                    <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
                    <img src="<?php echo $service->image_large ?>" alt="<?php echo $service->title ?>" width="102" height="102" />
                </picture>
            </div>
            <div class="ml-m">
                <h3 class="h200">
                    <?php echo $service->title ?>
                </h3>
                <?php if (isset($service->duration) && isset($service->price)) { ?>
                    <div class="service-info">
                        <div class="p200">
                            <?php echo $service->duration ?>
                        </div>
                        <div class="service-dot"></div>
                        <div class="p200">
                            <?php echo $service->price ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <p class="mt-m p200">
            <?php echo $service->content ?>
        </p>
        <a href="services/<?php echo $service->id ?>" class="mt-m button outline expand l10n">Read more</a>
        <hr />
        <?php if (isset($service->consultation_url)) { ?>
            <a href="<?php echo $service->consultation_url ?>" target="_blank" class="mt-xl button expand l10n">Get a free consultation</a>
        <?php } ?>
        <?php if (isset($service->booking_url)) { ?>
            <a href="<?php echo $service->booking_url ?>" target="_blank" class="mt-s button expand l10n">Book a procedure</a>
        <?php } ?>
    </div>
    <div class="is-hidden-mobile">
        <div class="flex-row">
            <div class="image">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
                    <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
                    <img src="<?php echo $service->image_large ?>" alt="<?php echo $service->title ?>" width="102" height="102" />
                </picture>
            </div>
            <div class="ml-xl middle">
                <h3 class="h200">
                    <?php echo $service->title ?>
                </h3>
                <?php if (isset($service->duration) && isset($service->price)) { ?>
                    <div class="service-info">
                        <div class="p200">
                            <?php echo $service->duration ?>
                        </div>
                        <div class="service-dot"></div>
                        <div class="p200">
                            <?php echo $service->price ?>
                        </div>
                    </div>
                <?php } ?>
                <p class="mt-xs p200 service-content">
                    <?php echo $service->content ?>
                </p>
                <a href="services/<?php echo $service->id ?>" class="mt-xs button b200 text compact l10n">Read more</a>
            </div>
            <div class="ml-xl buttons">
                <?php if (isset($service->consultation_url)) { ?>
                    <a href="<?php echo $service->consultation_url ?>" target="_blank" class="button expand l10n">Get a free consultation</a>
                <?php } ?>
                <?php if (isset($service->booking_url)) { ?>
                    <a href="<?php echo $service->booking_url ?>" target="_blank" class="mt-s button expand l10n">Book a procedure</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>