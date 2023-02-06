<div class="treatment-card-widget">
    <div class="is-hidden-tablet"
         id="mobile">
        <div class="flex-row">
            <picture>
                <source media="(max-width: 799px)"
                        srcset="<?php echo $treatment->image_small ?>">
                <source media="(min-width: 800px)"
                        srcset="<?php echo $treatment->image_large ?>">
                <img src="<?php echo $treatment->image_large ?>"
                     alt="<?php echo $treatment->title ?>"
                     width="102"
                     height="102" />
            </picture>
            <div class="ml-m">
                <h3 class="h200">
                    <?php echo $treatment->title ?>
                </h3>
                <div class="treatment-info">
                    <div class="p200">
                        <?php echo $treatment->duration ?>
                    </div>
                    <div class="treatment-dot"></div>
                    <div class="p200">
                        <?php echo $treatment->price ?>
                    </div>
                </div>
            </div>
        </div>
        <p class="mt-m p200">
            <?php echo $treatment->content ?>
        </p>
        <a href="treatments/<?php echo $treatment->id ?>"
           class="mt-m button outline expand l10n">Read more</a>
        <hr />
        <?php if (isset($treatment->consultation_url)) { ?>
            <a href="<?php echo $treatment->consultation_url ?>"
               target="_blank"
               class="mt-m button expand l10n">Get a free consultation</a>
        <?php } ?>
        <?php if (isset($treatment->booking_url)) { ?>
            <a href="<?php echo $treatment->booking_url ?>"
               target="_blank"
               class="mt-s button expand l10n">Book a procedure</a>
        <?php } ?>
    </div>
    <div class="is-hidden-mobile">
        <div class="flex-row">
            <picture>
                <source media="(max-width: 799px)"
                        srcset="<?php echo $treatment->image_small ?>">
                <source media="(min-width: 800px)"
                        srcset="<?php echo $treatment->image_large ?>">
                <img src="<?php echo $treatment->image_large ?>"
                     alt="<?php echo $treatment->title ?>"
                     width="102"
                     height="102" />
            </picture>
            <div class="ml-xl middle">
                <h3 class="h200">
                    <?php echo $treatment->title ?>
                </h3>
                <div class="treatment-info">
                    <div class="p200">
                        <?php echo $treatment->duration ?>
                    </div>
                    <div class="treatment-dot"></div>
                    <div class="p200">
                        <?php echo $treatment->price ?>
                    </div>
                </div>
                <p class="mt-xs p200 treatment-content">
                    <?php echo $treatment->content ?>
                </p>
                <a href="treatments/<?php echo $treatment->id ?>"
                   class="mt-xs button b200 text compact l10n">Read more</a>
            </div>
            <div class="ml-xl buttons">
                <?php if (isset($treatment->consultation_url)) { ?>
                    <a href="<?php echo $treatment->consultation_url ?>"
                       target="_blank"
                       class="mt-m button expand l10n">Get a free consultation</a>
                <?php } ?>
                <?php if (isset($treatment->booking_url)) { ?>
                    <a href="<?php echo $treatment->booking_url ?>"
                       target="_blank"
                       class="mt-s button expand l10n">Book a procedure</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>