<div class="service-category-info-widget">
    <div class="tiw-card">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $service_category->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $service_category->image_large ?>">
            <img src="<?php echo $service_category->image_small ?>" alt="<?php echo $service_category->title ?>" title="<?php echo $service_category->title ?>" width="364" height="274" />
        </picture>
        <div class="tiw-title"><?php echo $service_category->name ?></div>
        <div class="tiw-desc"><?php echo $service_category->description ?></div>
        <a href="<?php echo $service_category->url ?>" class="button grey expand is-hidden-desktop"><?php echo $service_category->url_label ?></a>
        <a href="<?php echo $service_category->url ?>" class="button text compact is-hidden-touch"><?php echo $service_category->url_label ?></a>
    </div>
    <div class="tiw-services">
        <?php foreach ($service_category->services_per_category as $category => $services) {
            include('service_info/service_info.php');
        } ?>
    </div>
</div>