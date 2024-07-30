<div class="approach-card">
    <div class="card-title">
        <div class="circle"><?php echo $approach_card->number ?></div>
        <h3 class="h300"><?php echo $approach_card->title ?></h3>
    </div>
    <div class="p200 approach-card-content">
        <?php echo $approach_card->content ?>
    </div>
    <a href="<?php echo $approach_card->button_url ?>" title="<?php echo $approach_card->button_url_title ?>" target="<?php echo $approach_card->button_url_target ?>" class="button compact text is-hidden-mobile">
        <?php echo $approach_card->button_label ?>
    </a>
    <a href="<?php echo $approach_card->button_url ?>" title="<?php echo $approach_card->button_url_title ?>" target="<?php echo $approach_card->button_url_target ?>" class="button grey expand is-hidden-tablet">
        <?php echo $approach_card->button_label ?>
    </a>
</div>