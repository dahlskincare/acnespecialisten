<?php
if (!isset($skin_guide_articles)) {
    $skin_guide_articles = array(
        new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
        ),
        new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
        ),
        new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
        ),
        new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
        )
    );
}
?>
<div class="skin-guide-widget">
    <div class="columns is-2 is-variable">
        <?php foreach ($skin_guide_articles as $article) { ?>
            <div class="column is-one-third">
                <a href="skin-guide/<?php echo $article->category_id ?>/<?php echo $article->subcategory_id ?>/<?php echo $article->id ?>" class="skin-guide-article">
                    <div class="image-container">
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?php echo $article->image_small ?>">
                            <source media="(min-width: 800px)" srcset="<?php echo $article->image_small ?>">
                            <img src="<?php echo $article->image_small ?>" alt="<?php echo $article->title ?>" width="312" height="328" />
                        </picture>
                    </div>
                    <div>
                        <h3>
                            <?php echo $article->title ?>
                        </h3>
                        <p class="skin-guide-category">
                            <?php echo $article->problem ?>
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