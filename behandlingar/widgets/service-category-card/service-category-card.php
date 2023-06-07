<div class="service-category-card" id="card-<?php echo $category->id ?>">
    <picture>
        <source media="(max-width: 799px)" srcset="<?php echo $category->image_small ?>">
        <source media="(min-width: 800px)" srcset="<?php echo $category->image_large ?>">
        <img src="<?php echo $category->image_large ?>" alt="<?php echo $category->image_alt ?>" title="<?php echo $category->image_title ?>" width="424" height="324" />
    </picture>
    <div class="service-category-card-content">
        <div>
            <h3 class="h300">
                <?php echo $category->label ?>
            </h3>
            <div class="service-links">
                <?php foreach ($category->services as $service) { ?>
                    <a href="behandlingar/<?php echo $category->id ?>/<?php echo $service->id ?>" class="service-link"><?php echo $service->title ?></a>
                <?php } ?>
            </div>
        </div>
        <p class="mt-m service-content">
            <?php echo $category->content ?>
        </p>
        <div class="is-hidden-tablet">
            <a href="behandlingar/<?php echo $category->id ?>" class="mt-m button outline expand"><?php echo $category->read_more_label ?></a>
            <hr>
            <a href="<?php echo $category->consultation_url ?>" title="<?php echo $category->consultation_url_title ?>" class="button expand"><?php echo $category->consultation_url_label ?></a>
            <a href="<?php echo $category->booking_url ?>" title="<?php echo $category->booking_url_title ?>" class="mt-s button expand"><?php echo $category->booking_url_label ?></a>
        </div>
        <div class="is-hidden-mobile">
            <a href="behandlingar/<?php echo $category->id ?>" class="mt-m button text compact"><?php echo $category->read_more_label ?></a>
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