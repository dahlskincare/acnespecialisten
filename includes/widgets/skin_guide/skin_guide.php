<?php
if (!isset($skin_guide_articles)) {
    $skin_guide_articles = array(
        new SkinGuideArticle('How hormones affect?', 'Problem skin', 'skin-guide/hormones-effect', 'images/skin-guide/small/hormones.jpg', 'images/skin-guide/large/hormones.jpg'),
        new SkinGuideArticle('Can makeup harm your skin?', 'Problem skin', 'skin-guide/can-makeup-harm', 'images/skin-guide/small/makeup.jpg', 'images/skin-guide/large/makeup.jpg'),
        new SkinGuideArticle('How to build a skin care routine', 'Problem skin', 'skin-guide/routine-how-to', 'images/skin-guide/small/routine.jpg', 'images/skin-guide/large/routine.jpg'),
        new SkinGuideArticle('Skin care tips dermatologists use', 'Problem skin', 'skin-guide/skin-care-tips', 'images/skin-guide/small/tips.jpg', 'images/skin-guide/large/tips.jpg')
    );
}
?>

<div class="skin-guide-widget">
    <div class="columns is-3 is-variable">
        <?php foreach ($skin_guide_articles as $article) { ?>
            <div class="column is-one-quarter">
                <a href="<?php echo $article->url ?>" class="skin-guide-article">
                    <div class="image-container">
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?php echo $article->image_small ?>">
                            <source media="(min-width: 800px)" srcset="<?php echo $article->image_large ?>">
                            <img src="<?php echo $article->image_large ?>" alt="<?php echo $article->title ?>" width="312" height="328" />
                        </picture>
                    </div>
                    <div>
                        <h3>
                            <?php echo $article->title ?>
                        </h3>
                        <p class="skin-guide-category">
                            <?php echo $article->category ?>
                        </p>
                    </div>
                </a>
            </div>


        <?php } ?>

    </div>
</div>
<script>
    function scrollSkinGuide(distance) {
        let widget = document.querySelector('.skin-guide-widget');
        let item = widget.querySelector('.column');
        widget.scrollBy(distance * item.getBoundingClientRect().width, 0);
    }
</script>