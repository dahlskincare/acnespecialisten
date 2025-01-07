<div class="result-overlay">
    <div class="ro-images">
        <img loading="lazy" src="<?php echo $result->slider_image_before_large ?>" alt="<?php echo $result->slider_image_before_alt ?>" title="<?php echo $result->slider_image_before_title ?>" width="424" height="424" />
        <img loading="lazy" src="<?php echo $result->slider_image_after_large ?>" alt="<?php echo $result->slider_image_after_alt ?>" title="<?php echo $result->slider_image_after_title ?>" width="424" height="424" />
        <div class="ro-slider">
            <div class="ro-slider-button">
                <div class="ro-icon-left"></div>
                <div class="ro-icon-right"></div>
            </div>
        </div>
    </div>
    <?php if (isset($result->treatment->duration) && !empty($result->treatment->duration) > 0) { ?>
        <div class="ro-info">
            <?php echo $result->treatment->duration ?>
        </div>
    <?php } ?>
</div>