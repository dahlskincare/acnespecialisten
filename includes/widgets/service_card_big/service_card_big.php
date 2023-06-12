<div class="service-card-big-widget">
    <div class="service-card-image">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
            <img src="<?php echo $image_large ?>" alt="<?php echo $service->image_alt ?>" title="<?php echo $service->image_title ?>" width="872" height="456" />
        </picture>
    </div>
    <div class="service-card-big-content">
        <div class="service-card-title"><?php echo $service->title ?></div>
        <?php if (isset($service->duration) || isset($service->price)) { ?>
            <div class="service-info">
                <div class="p200">
                    <?php echo $service->duration ?>
                </div>
                <?php if (isset($service->duration) && isset($service->price)) { ?>
                    <div class="service-dot"></div>
                <?php } ?>
                <div class="p200">
                    <?php echo $service->price ?>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($service->icons) && sizeof($service->icons) > 0) { ?>
            <div class="service-card-icons">
                <?php foreach ($service->icons as $key => $label) { ?>
                    <div class="service-card-icon">
                        <?php icon($key) ?>
                        <span><?php echo $label ?></span>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="service-card-content">
            <?php echo $service->content ?>
        </div>
        <?php if (isset($service->procedures) && sizeof($service->procedures) > 0) { ?>
            <div class="service-card-procedures is-hidden-desktop">
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
                            <a href="<?php echo $procedure->booking_url ?>" title="<?php echo $procedure->booking_url_title ?>" class="button" title="<?php echo $procedure->booking_url_label ?>"><?php echo $procedure->booking_url_label ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <hr />
            </div>
            <div class="service-card-procedures is-hidden-touch">
                <?php foreach ($service->procedures as $procedure) { ?>
                    <div class="procedure">
                        <div class="procedure-label"><?php echo $procedure->label ?></div>
                        <div class="procedure-price">
                            <span class="full-price"><?php echo $procedure->full_price ?></span>
                            <span class="price"><?php echo $procedure->price ?></span>
                        </div>
                        <?php if (isset($procedure->booking_url)) { ?>
                            <a href="<?php echo $procedure->booking_url ?>" title="<?php echo $procedure->booking_url_title ?>" class="button" title="<?php echo $procedure->booking_url_label ?>"><?php echo $procedure->booking_url_label ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if (isset($service->url)) { ?>
            <div class="mt-m">
                <a href="<?php echo $service->url ?>" title="<?php echo $service->url_title ?>" class="button b200 text compact">
                    <span><?php echo $service->url_label ?></span>
                    <?php icon('navigate-next') ?>
                </a>
            </div>
        <?php } ?>
        <?php if (isset($service->consultation_url)) { ?>
            <a href="<?php echo $service->consultation_url ?>" title="<?php echo $service->consultation_url_title ?>" class="button book-button" title="<?php echo $service->consultation_url_label ?>"><?php echo $service->consultation_url_label ?></a>
        <?php } ?>
        <?php if (isset($service->booking_url)) { ?>
            <a href="<?php echo $service->booking_url ?>" title="<?php echo $service->booking_url_title ?>" class="button book-button" title="<?php echo $service->booking_url_label ?>"><?php echo $service->booking_url_label ?></a>
        <?php } ?>
    </div>
</div>