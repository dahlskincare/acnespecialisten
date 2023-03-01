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
        <?php if (isset($service->procedures)) { ?>
            <div class="mt-m">
                <p>hello</p>
            </div>
        <?php } ?>
        <?php if (isset($service->consultation_url)) { ?>
            <a href="<?php echo $service->consultation_url ?>" target="_blank" class="mt-m button expand l10n">Book a free consultation</a>
        <?php } ?>
    </div>
</div>