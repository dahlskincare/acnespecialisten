<a href="problem/<?php echo $problem->id ?>" class="related-problem-card-widget">
    <div class="image">
        <img src="<?php echo $problem->image ?>" alt="<?php echo $problem->name ?>" title="<?php echo $problem->name ?>" width="102" height="102" />
    </div>
    <div class="text">
        <h3>
            <?php echo $problem->name ?>
        </h3>
        <div class="aka">
            <span class="l10n">Also called</span>
            <span>
                <?php echo $problem->aka ?>
            </span>
        </div>
    </div>
</a>