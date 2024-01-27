<div class="product-card-widget">
    <?php if(isset($product->image_small) && isset($product->image_large)) { ?>
    <picture class="mb-xl">
        <source media="(max-width: 799px)" srcset="<?php echo $product->image_small ?>">
        <source media="(min-width: 800px)" srcset="<?php echo $product->image_large ?>">
        <img src="<?php echo $product->image_large ?>" alt="<?php echo $product->image_alt ?>" title="<?php echo $product->image_title ?>" width="358" height="274" />
    </picture>
    <?php } ?>
    <div class="h200"><?php echo $product->price ?></div>
    <div class="mt-m">
        <?php echo $product->content ?>
    </div>
    <div class="mt-xl product-card-button">
        <a href="<?php echo $product->url ?>" title="<?php echo $product->url_title ?>" class="is-hidden-tablet button outline expand" title="<?php echo $product->url_label ?>"><?php echo $product->url_label ?></a>
        <a href="<?php echo $product->url ?>" title="<?php echo $product->url_title ?>" class="is-hidden-mobile button b200 text compact">
            <span><?php echo $product->url_label ?></span>
            <?php icon('navigate-next') ?>
        </a>
    </div>
</div>