<div class="specialist-card-widget">
    <img loading="lazy" src="<?php echo $specialist->image ?>" alt="<?php echo $specialist->name ?>" title="<?php echo $specialist->name ?>" width="358" height="358" />
    <div class="specialist-card-content">
        <div class="specialist-card-title">
            <div>
                <div class="h200"><?php echo $specialist->name ?></div>
                <div class="sct-city">
                    <?php icon('pin') ?>
                    <span><?php echo $specialist->city ?></span>
                </div>
            </div>
            <div>
                <div class="sct-rating">
                    <?php icon('star') ?>
                    <span><?php echo $specialist->rating ?></span>
                </div>
                <div class="sct-rating-where">på Bokadirekt</div>
            </div>
        </div>
        <div class="specialist-card-info">
            <strong><?php echo $specialist->num_treatments ?>&nbsp;</strong>
            <span class="l10n">omdömen</span>
            <div class="dot"></div>
            <span class="l10n">Hudterapeut&nbsp;</span>
            <strong class="l10n">sedan&nbsp;</strong>
            <strong><?php echo $specialist->since_year ?></strong>
        </div>
        <div class="specialist-card-description"><?php echo $specialist->description ?></div>
        <?php if (isset($specialist->booking_url)) { ?>
            <a href="<?php echo $specialist->booking_url ?>" class="button outline expand l10n" title="Boka behandling" target="_blank">Boka behandling</a>
        <?php } ?>
    </div>
</div>