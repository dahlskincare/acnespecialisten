<div class="article-widget">
    <h2 class="h500">
        <?php echo $article->title ?>
    </h2>
    <?php if (isset($article->image_large) && isset($article->image_small)) { ?>
        <picture>
            <source media="(max-width: 199px)" srcset="<?php echo $article->image_small ?>">
            <source media="(min-width: 200px, max-width: 349px)" srcset="<?php echo $article->image_small ?>">
            <source media="(min-width: 350px, max-width: 1279px)" srcset="<?php echo $article->image_large ?>">
            <source media="(min-width: 1280px)" srcset="<?php echo $article->image_large ?>">
            <img src="<?php echo $article->image_large ?>" alt="<?php echo $article->image_alt ?>" title="<?php echo $article->image_title ?>" width="872" height="456" />
        </picture>
    <?php } ?>
    <?php
    if (sizeof($article->tags) > 0) { ?>
        <div class="article-tags">
            <?php foreach ($article->tags as $tag) { ?>
                <div class="article-tag">
                    <?php icon($tag->icon) ?>
                    <div class="h200"><?php echo $tag->label ?></div>
                </div>
            <?php } ?>
        </div>
    <?php }
    ?>
    <div class="article-content p200">
        <?php echo $article->content ?>
    </div>
    <?php if (isset($article->url) && isset($article->url_label)) { ?>
        <a href="<?php echo $article->url ?>" title="<?php echo $article->url_title ?>" class="mt-m button"><?php echo $article->url_label ?></a>
    <?php } ?>
</div>