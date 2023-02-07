<div class="service-card-widget">
    <picture>
        <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
        <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
        <img src="<?php echo $service->image_large ?>" alt="<?php echo $service->short_title ?>" width="358" height="274" />
    </picture>
    <div class="service-card-content">
        <h3 class="h200"><?php echo $service->title ?></h3>
        <div class="mt-xxs flex-row p200 service-info">
            <span><?php echo $service->duration ?></span>
            <div class="dot ml-xs mr-xs"></div><span class="l10n">Price from&nbsp;</span><span><?php echo $service->price ?></span>
        </div>
        <div class="mt-m columns is-mobile is-multiline service-icons">
            <?php foreach ($service->icons as $key => $value) { ?>
                <div class="column is-half-mobile">
                    <div class="service-icon">
                        <?php icon($key) ?>
                        <span class="h200"><?php echo $value ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="mt-m">
            <?php echo $service->content ?>
        </div>
        <div class="mobile-buttons mt-m is-hidden-tablet">
            <a href="services/<?php echo $service->id ?>" class="button outline expand l10n">View service details</a>
            <hr />
            <?php if (isset($service->consultation_url)) { ?>
                <a href="<?php echo $service->consultation_url ?>" target="_blank" class="mt-m button expand l10n">Get a free consultation</a>
            <?php } ?>
            <?php if (isset($service->booking_url)) { ?>
                <a href="<?php echo $service->booking_url ?>" target="_blank" class="mt-s button expand l10n">Book a procedure</a>
            <?php } ?>

        </div>
        <div class="mt-m desktop-buttons is-hidden-mobile">
            <a href="services/<?php echo $service->id ?>" class="button b200 text compact l10n">
                <span>View service details</span>
                <?php icon('navigate-next') ?>
            </a>
            <div class="mt-xl flex-row align-center">
                <?php if (isset($service->consultation_url)) { ?>
                    <a href="<?php echo $service->consultation_url ?>" target="_blank" class="mr-xs button l10n">Get a free consultation</a>
                <?php } ?>
                <?php if (isset($service->booking_url)) { ?>
                    <a href="<?php echo $service->booking_url ?>" target="_blank" class="button l10n">Book a procedure</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>