<div class="result-overlay">
    <div class="ro-images">
        <img src="<?php echo $result->slider_image_before_large ?>" alt="Before" width="424" height="424" />
        <img src="<?php echo $result->slider_image_after_large ?>" alt="After" width="424" height="424" />
        <div class="ro-slider">
            <div class="ro-slider-button">
                <div class="ro-icon-left"></div>
                <div class="ro-icon-right"></div>
            </div>
        </div>
    </div>
    <div class="ro-info">
        After <?php echo $result->treatment->duration ?> of <a href="services"><?php echo strtolower($result->problem) ?> treatment</a>
    </div>
</div>