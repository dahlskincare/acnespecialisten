<div class="service-card-widget">
    <div class="is-hidden-tablet" id="mobile">
        <div class="flex-row">
            <?php if (isset($scm->image_large) && isset($scm->image_small)) { ?>
                <div class="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $scm->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $scm->image_large ?>">
                        <img src="<?php echo $scm->image_large ?>" alt="<?php echo $scm->image_alt ?>" title="<?php echo $scm->image_title ?>" width="102" height="102" />
                    </picture>
                </div>
            <?php } ?>
            <div class="ml-m">
                <h3 class="h200">
                    <?php echo $scm->title ?>
                </h3>
                <?php if (isset($scm->duration) || isset($scm->price)) { ?>
                    <div class="service-info">
                        <div class="p200">
                            <?php echo $scm->duration ?>
                        </div>
                        <?php if (isset($scm->duration) && isset($scm->price)) { ?>
                            <div class="service-dot"></div>
                        <?php } ?>
                        <div class="p200">
                            <?php echo $scm->price ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <p class="mt-m p200">
            <?php echo $scm->content ?>
        </p>
        <?php if (isset($scm->url)) { ?>
            <a href="<?php echo $scm->url ?>" title="<?php echo $scm->url_title ?>" class="mt-m button outline expand" title="<?php echo $scm->url_label ?>"><?php echo $scm->url_label ?></a>
        <?php } ?>
        <?php if (isset($scm->consultation_url) || isset($scm->booking_url)) { ?>
            <hr />
            <?php if (isset($scm->consultation_url)) { ?>
                <a href="<?php echo $scm->consultation_url ?>" title="<?php echo $scm->consultation_url_title ?>" class="mt-xl button expand" title="<?php echo $scm->consultation_url_label ?>"><?php echo $scm->consultation_url_label ?></a>
            <?php } ?>
            <?php if (isset($scm->booking_url)) { ?>
                <a href="<?php echo $scm->booking_url ?>" title="<?php echo $scm->booking_url_title ?>" class="mt-s button expand" title="<?php echo $scm->booking_url_label ?>"><?php echo $scm->booking_url_label ?></a>
            <?php } ?>
        <?php } ?>
    </div>
    <div class="is-hidden-mobile">
        <div class="flex-row">
            <?php if (isset($scm->image_large) && isset($scm->image_small)) { ?>
                <div class="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $scm->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $scm->image_large ?>">
                        <img src="<?php echo $scm->image_large ?>" alt="<?php echo $scm->title ?>" title="<?php echo $scm->title ?>" width="102" height="102" />
                    </picture>
                </div>
            <?php } ?>
            <div class="ml-xl middle">
                <h3 class="h200">
                    <?php echo $scm->title ?>
                </h3>
                <?php if (isset($scm->duration) || isset($scm->price)) { ?>
                    <div class="service-info">
                        <div class="p200">
                            <?php echo $scm->duration ?>
                        </div>
                        <?php if (isset($scm->duration) && isset($scm->price)) { ?>
                            <div class="service-dot"></div>
                        <?php } ?>
                        <div class="p200">
                            <?php echo $scm->price ?>
                        </div>
                    </div>
                <?php } ?>
                <p class="mt-xs p200 service-content">
                    <?php echo $scm->content ?>
                </p>
                <?php if (isset($scm->url)) { ?>
                    <a href="<?php echo $scm->url ?>" title="<?php echo $scm->url_title ?>" class="mt-xs button b200 text compact" title="<?php echo $scm->url_label ?>"><?php echo $scm->url_label ?></a>
                <?php } ?>
            </div>
            <div class="ml-xl buttons">
                <?php if (isset($scm->consultation_url)) { ?>
                    <a href="<?php echo $scm->consultation_url ?>" title="<?php echo $scm->consultation_url_title ?>" class="button expand" title="<?php echo $scm->consultation_url_label ?>"><?php echo $scm->consultation_url_label ?></a>
                <?php } ?>
                <?php if (isset($scm->booking_url)) { ?>
                    <a href="<?php echo $scm->booking_url ?>" title="<?php echo $scm->booking_url_title ?>" class="mt-s button expand" title="<?php echo $scm->booking_url_label ?>"><?php echo $scm->booking_url_label ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>