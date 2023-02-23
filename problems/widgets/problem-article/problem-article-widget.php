<div class="problem-article-widget">
        <h2 class="h500">
                <?php echo $article->title ?>
        </h2>
        <picture>
                <source media="(max-width: 199px)" srcset="<?php echo $article->image_small ?>">
                <source media="(min-width: 200px, max-width: 349px)" srcset="<?php echo $article->image_small ?>">
                <source media="(min-width: 350px, max-width: 1279px)" srcset="<?php echo $article->image_large ?>">
                <source media="(min-width: 1280px)" srcset="<?php echo $article->image_large ?>">
                <img src="<?php echo $article->image_large ?>" alt="<?php echo $article->title ?>" width="872" height="456" />
        </picture>
        <div class="problem-article-content p200">
                <?php echo $article->content ?>
        </div>
</div>