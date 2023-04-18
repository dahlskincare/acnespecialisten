<div class="specialist-card-widget">
    <img src="<?php echo $specialist->image_large ?>" alt="<?php echo $specialist->name ?>" width="358" height="358" />
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
                <div class="sct-rating-where">on bokadirekt</div>
            </div>
        </div>
        <div class="specialist-card-info">
            <strong><?php echo $specialist->num_treatments ?>&nbsp;</strong>
            <span class="l10n">treatments</span>
            <div class="dot"></div>
            <span class="l10n">Therapist&nbsp;</span>
            <strong class="l10n">since&nbsp;</strong>
            <strong><?php echo $specialist->since_year ?></strong>
        </div>
        <div class="specialist-card-description"><?php echo $specialist->description ?></div>
        <a href="" class="button outline expand l10n">Book an appointment</a>
    </div>
</div>