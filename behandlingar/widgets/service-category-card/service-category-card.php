<div class="service-category-card">
    <a href="<?php echo $category->url ?>" title="<?php echo $category->read_more_label ?>">
        <picture>
            <source media="(max-width: 799px)" srcset="<?php echo $category->image_small ?>">
            <source media="(min-width: 800px)" srcset="<?php echo $category->image_large ?>">
            <img src="<?php echo $category->image_large ?>" alt="<?php echo $category->image_alt ?>" title="<?php echo $category->image_title ?>" width="424" height="324" />
        </picture>
    </a>
    <div class="service-category-card-content">
        <div>
            <h3 class="h300">
                <?php echo $category->label ?>
            </h3>
            <div class="service-links">
                <?php foreach ($category->services as $service) { ?>
                    <a href="<?php echo $service->url ?>" title="<?php echo $service->url_title ?>" class="service-link" title="<?php echo $service->url_label ?>"><?php echo $service->url_label ?></a>
                <?php } ?>
            </div>
        </div>
        <p class="mt-m service-content">
            <?php echo $category->content ?>
        </p>
        <div class="is-hidden-tablet">
            <a href="<?php echo $category->url ?>" class="mt-m button outline expand" title="<?php echo $category->read_more_label ?>"><?php echo $category->read_more_label ?></a>
            <hr>
            <a href="<?php echo $category->consultation_url ?>" title="<?php echo $category->consultation_url_title ?>" class="button expand"><?php echo $category->consultation_url_label ?></a>
            <a href="<?php echo $category->booking_url ?>" title="<?php echo $category->booking_url_title ?>" class="mt-s button expand"><?php echo $category->booking_url_label ?></a>
        </div>
        <div class="is-hidden-mobile">
            <a href="<?php echo $category->url ?>" class="mt-m button text compact" title="<?php echo $category->read_more_label ?>"><?php echo $category->read_more_label ?></a>
            <hr>
            <div class="columns is-multiline">
                <div class="column mt-xxs is-full is-half-widescreen">
                    <a href="<?php echo $category->consultation_url ?>" title="<?php echo $category->consultation_url_title ?>" class="button expand"><?php echo $category->consultation_url_label ?></a>
                </div>
                <div class="column mt-xxs is-full is-half-widescreen">
                    <a href="<?php echo $category->booking_url ?>" title="<?php echo $category->booking_url_title ?>" class="button expand"><?php echo $category->booking_url_label ?></a>
                </div>
            </div>
        </div>
    </div>
</div>