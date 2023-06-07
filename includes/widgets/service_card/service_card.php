<div class="service-card-widget">
    <div class="is-hidden-tablet" id="mobile">
        <div class="flex-row">
            <div class="image">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
                    <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
                    <img src="<?php echo $service->image_large ?>" alt="<?php echo $service->image_alt ?>" title="<?php echo $service->image_title ?>" width="102" height="102" />
                </picture>
            </div>
            <div class="ml-m">
                <h3 class="h200">
                    <?php echo $service->title ?>
                </h3>
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
            </div>
        </div>
        <p class="mt-m p200">
            <?php echo $service->content ?>
        </p>
        <a href="behandlingar/<?php echo $service->id ?>" class="mt-m button outline expand l10n">Läs mer</a>
        <hr />
        <?php if (isset($service->consultation_url)) { ?>
            <a href="<?php echo $service->consultation_url ?>" class="mt-xl button expand l10n">Få gratis konsultation</a>
        <?php } ?>
        <?php if (isset($service->booking_url)) { ?>
            <a href="<?php echo $service->booking_url ?>" class="mt-s button expand l10n">Boka behandling</a>
        <?php } ?>
    </div>
    <div class="is-hidden-mobile">
        <div class="flex-row">
            <div class="image">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo $service->image_small ?>">
                    <source media="(min-width: 800px)" srcset="<?php echo $service->image_large ?>">
                    <img src="<?php echo $service->image_large ?>" alt="<?php echo $service->title ?>" title="<?php echo $service->title ?>" width="102" height="102" />
                </picture>
            </div>
            <div class="ml-xl middle">
                <h3 class="h200">
                    <?php echo $service->title ?>
                </h3>
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
                <p class="mt-xs p200 service-content">
                    <?php echo $service->content ?>
                </p>
                <a href="behandlingar/<?php echo $service->id ?>" class="mt-xs button b200 text compact l10n">Läs mer</a>
            </div>
            <div class="ml-xl buttons">
                <?php if (isset($service->consultation_url)) { ?>
                    <a href="<?php echo $service->consultation_url ?>" title="<?php echo $service->consultation_url_title ?>" class="button expand l10n">Få gratis konsultation</a>
                <?php } ?>
                <?php if (isset($service->booking_url)) { ?>
                    <a href="<?php echo $service->booking_url ?>" title="<?php echo $service_booking_url_title ?>" class="mt-s button expand l10n">Boka behandling</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>