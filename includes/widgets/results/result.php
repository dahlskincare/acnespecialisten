<div class="result-overlay">
    <div class="ro-images">
        <img src="<?php echo $result->slider_image_before_large ?>" alt="<?php echo $result->image_alt ?>" title="<?php echo $result->$image_title ?>" width="424" height="424" />
        <img src="<?php echo $result->slider_image_after_large ?>" alt="<?php echo $result->image_alt ?>" title="<?php echo $result->$image_title ?>" width="424" height="424" />
        <div class="ro-slider">
            <div class="ro-slider-button">
                <div class="ro-icon-left"></div>
                <div class="ro-icon-right"></div>
            </div>
        </div>
    </div>
    <div class="ro-info">
        <?php echo $result->treatment->duration ?>
    </div>
</div>