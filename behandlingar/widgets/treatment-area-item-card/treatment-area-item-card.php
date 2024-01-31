<div class="treatment-area-item-card">
    <?php if (isset($treatment_area_item->image)) { ?>
        <img src="<?php echo $treatment_area_item->image ?>" alt="<?php echo $treatment_area_item->image_alt ?>" title="<?php echo $treatment_area_item->image_title ?>" width="94" height="72" />
    <?php } ?>
    <div class="tac-labels">
        <div class="name"><?php echo $treatment_area_item->title ?></div>
        <div class="info">
            <span class="is-hidden-mobile"><?php echo $treatment_area_item->duration ?></span>
            <div class="dot is-hidden-mobile"></div>
            <span><?php echo $treatment_area_item->price ?></span>
        </div>
    </div>
    <a href="<?php echo $treatment_area_item->url ?>" title="<?php echo $treatment_area_item->url_title ?>" class="button"><?php echo $treatment_area_item->url_label ?></a>
</div>