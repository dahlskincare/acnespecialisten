<div class="salon-card-widget">
    <div class="h500 is-hidden-desktop"><?php echo $salon->title ?></div>
    <div class="salon-card-flex">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $salon->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $salon->image_large ?>">
            <img loading="lazy" src="<?php echo $salon->image_small ?>" alt="<?php echo $salon->title ?>" title="<?php echo $salon->title ?>" width="358" height="272" />
        </picture>
        <div class="salon-info">
            <div class="h500 is-hidden-touch"><?php echo $salon->title ?></div>
            <div class="salon-address"><?php echo $salon->address ?></div>
            <div class="salon-desc"><?php echo $salon->description ?></div>
            <div class="salon-opening-hours">
                <div>
                    <div class="salon-hour-labels l10n">Måndag - Fredag</div>
                    <div class="salon-hour-values"><?php echo $salon->opening_hours_weekdays ?></div>
                </div>
                <div>
                    <div class="salon-hour-labels l10n">Lördag - Söndag</div>
                    <div class="salon-hour-values"><?php echo $salon->opening_hours_weekends ?></div>
                </div>
            </div>
            <div class="salon-buttons">
                <a href="tel: <?php echo $salon->phone ?>" class="button b200 outline expand l10n" title="Ring oss">Ring oss</a>
                <a href="mailto: <?php echo $salon->email ?>" class="button b200 outline expand l10n" title="Mejla oss">Mejla oss</a>
            </div>
        </div>
    </div>
</div>