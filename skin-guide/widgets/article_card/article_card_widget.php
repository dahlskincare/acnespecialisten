<a class="article-card-widget" href="skin-guide/articles/<?php echo $article->id ?>">
    <img src="<?php echo $article->image_small ?>" alt="<?php echo $article->title ?>" width="426" height="324" />
    <div class="ac-content">
        <div class="ac-problem"><?php echo $article->problem ?></div>
        <div class="ac-title"><?php echo $article->title ?></div>
        <div class="ac-description"><?php echo $article->description ?></div>
        <button class="ac-read-more is-hidden-desktop button outline expand l10n">Read more</button>
        <div class="ac-read-more is-hidden-touch l10n">Read more</div>
    </div>
</a>