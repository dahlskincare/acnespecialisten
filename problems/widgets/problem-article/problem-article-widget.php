<div class="problem-article-widget">
    <h2 class="h500">
        <?php echo $article->title ?>
        <picture>
            <source media="(max-width: 199px)"
                    srcset="images/articles/small/<?php echo $article->id ?>.jpg">
            <source media="(min-width: 200px, max-width: 349px)"
                    srcset="images/articles/medium/<?php echo $article->id ?>.jpg">
            <source media="(min-width: 350px, max-width: 1279px)"
                    srcset="images/articles/large/<?php echo $article->id ?>.jpg">
            <source media="(min-width: 1280px)"
                    srcset="images/articles/xlarge/<?php echo $article->id ?>.jpg">
            <img src="images/articles/xlarge/<?php echo $article->id ?>.jpg"
                 alt="<?php echo $article->title ?>"
                 width="872"
                 height="456" />
        </picture>
    </h2>
</div>