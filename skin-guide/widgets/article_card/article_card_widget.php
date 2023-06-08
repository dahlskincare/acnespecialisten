<a class="article-card-widget" href="skin-guide/<?php echo $article->category_id ?>/<?php echo $article->subcategory_id ?>/<?php echo $article->id ?>">
    <img src="<?php echo $article->image_small ?>" alt="<?php echo $article->image_alt ?>" title="<?php echo $article->image_title ?>" width="426" height="324" />
    <div class="ac-content">
        <div class="ac-problem"><?php echo $article->problem ?></div>
        <div class="ac-title"><?php echo $article->title ?></div>
        <div class="ac-description"><?php echo $article->description ?></div>
        <button class="ac-read-more is-hidden-desktop button outline expand l10n">Läs mer</button>
        <div class="ac-read-more is-hidden-touch l10n">Läs mer</div>
    </div>
</a>