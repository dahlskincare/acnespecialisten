<div class="treatment-info-widget">
    <div class="tiw-card">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $treatment->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $treatment->image_large ?>">
            <img src="<?php echo $treatment->image_small ?>" alt="<?php echo $treatment->title ?>" width="364" height="274" />
        </picture>
        <div class="tiw-title"><?php echo $treatment->title ?></div>
        <div class="tiw-desc"><?php echo $treatment->description ?></div>
        <a href="<?php echo $treatment->url ?>" class="button grey expand is-hidden-desktop"><?php echo $treatment->url_label ?></a>
        <a href="<?php echo $treatment->url ?>" class="button text compact is-hidden-touch"><?php echo $treatment->url_label ?></a>
    </div>
    <div class="services"></div>
</div>