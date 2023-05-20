<div class="product-card-widget">
    <picture>
        <source media="(max-width: 799px)" srcset="<?php echo $product->image_small ?>">
        <source media="(min-width: 800px)" srcset="<?php echo $product->image_large ?>">
        <img src="<?php echo $product->image_large ?>" alt="<?php echo $product->title ?>" title="<?php echo $product->title ?>" width="358" height="274" />
    </picture>
    <div class="mt-xl">
        <span class="l10n h200">Pris från&nbsp;</span><span class="h200"><?php echo $product->price ?></span>
    </div>
    <div class="mt-m">
        <?php echo $product->content ?>
    </div>
    <div class="mt-xl product-card-button">
        <a href="products/<?php echo $product->id ?>" class="is-hidden-tablet button outline expand l10n">Läs mer</a>
        <a href="products/<?php echo $product->id ?>" class="is-hidden-mobile button b200 text compact l10n">
            <span>Läs mer</span>
            <?php icon('navigate-next') ?>
        </a>
    </div>
</div>