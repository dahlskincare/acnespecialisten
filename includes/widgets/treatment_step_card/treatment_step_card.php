<div class="treatment-step-card-widget">
    <div>
        <div class="treatment-step-title">
            <div class="index-circle">
                <span>0</span>
                <span>
                    <?php echo $i + 1 ?>
                </span>
            </div>
            <div>
                <?php echo $treatment_steps[$i]->title ?>
            </div>
        </div>
        <div class="treatment-step-content">
            <?php echo $treatment_steps[$i]->content; ?>
        </div>
    </div>
    <a href="<?php echo $treatment_steps[$i]->url ?>" title="<?php echo $treatment_steps[$i]->url_title ?>" class="button grey expand is-hidden-tablet"><?php echo $treatment_steps[$i]->url_label ?></a>
    <a href="<?php echo $treatment_steps[$i]->url ?>" title="<?php echo $treatment_steps[$i]->url_title ?>" class="button b200 text compact is-hidden-mobile"><?php echo $treatment_steps[$i]->url_label ?></a>
</div>