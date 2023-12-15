<a href="<?php echo $problem->url ?>" title="<?php echo $problem->url_title ?>" class="related-problem-card-widget">
    <div class="image">
        <img src="<?php echo $problem->image ?>" alt="<?php echo $problem->image_alt ?>" title="<?php echo $problem->image_title ?>" width="102" height="102" />
    </div>
    <div class="text">
        <h3>
            <?php echo $problem->name ?>
        </h3>
        <div class="aka">
            <span class="l10n">Känt som</span>
            <span>
                <?php echo $problem->aka ?>
            </span>
        </div>
    </div>
</a>