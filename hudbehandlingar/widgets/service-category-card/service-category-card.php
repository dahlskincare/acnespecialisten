<div class="service-category-card">
    <a href="<?php echo $category->url ?>" title="<?php echo $category->read_more_label ?>" class="scc-image">
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
                <?php foreach ($category->services as $scm) { ?>
                    <a href="<?php echo $scm->url ?>" title="<?php echo $scm->url_title ?>" class="service-link button grey"><?php echo $scm->label ?></a>
                <?php } ?>
            </div>
        </div>
        <p class="mt-m service-content">
            <?php echo $category->content ?>
        </p>
        <div class="is-hidden-tablet">
            <a href="<?php echo $category->url ?>" class="mt-m button outline expand" title="<?php echo $category->read_more_title ?>"><?php echo $category->read_more_label ?></a>
            <hr>
            <?php if (isset($category->consultation_url)) { ?>
                <a href="<?php echo $category->consultation_url ?>" title="<?php echo $category->consultation_url_title ?>" class="button expand"><?php echo $category->consultation_url_label ?></a>
            <?php } ?>
            <?php if (isset($category->booking_url)) { ?>
                <a href="<?php echo $category->booking_url ?>" title="<?php echo $category->booking_url_title ?>" class="mt-s button expand"><?php echo $category->booking_url_label ?></a>
            <?php } ?>
        </div>
        <div class="is-hidden-mobile">
            <a href="<?php echo $category->url ?>" class="mt-m button text compact" title="<?php echo $category->read_more_title ?>"><?php echo $category->read_more_label ?></a>
            <hr>
            <div class="columns is-multiline">
                <?php if (isset($category->consultation_url)) { ?>
                    <div class="column mt-xxs is-full is-half-widescreen">
                        <a href="<?php echo $category->consultation_url ?>" title="<?php echo $category->consultation_url_title ?>" class="button expand"><?php echo $category->consultation_url_label ?></a>
                    </div>
                <?php } ?>
                <?php if (isset($category->booking_url)) { ?>
                    <div class="column mt-xxs is-full is-half-widescreen">
                        <a href="<?php echo $category->booking_url ?>" title="<?php echo $category->booking_url_title ?>" class="button expand"><?php echo $category->booking_url_label ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>