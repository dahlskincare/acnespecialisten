<?php
if (!isset($skin_guide_articles)) {
    $conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }
    if ($rs = $conn->query("
    SELECT article.*, subcategory.category_id FROM skin_guide_article article
    INNER JOIN skin_guide_subcategory subcategory ON subcategory.id = article.subcategory_id  
    LIMIT 4")) {
        foreach ($rs as $row) {
            $skin_guide_articles[] = new SkinGuideArticle($row);
        }
        $rs->free_result();
    } else {
        die($conn->error);
    }
}
?>

<div class="skin-guide-widget">
    <div class="columns is-3 is-variable">
        <?php foreach ($skin_guide_articles as $article) { ?>
            <div class="column is-one-quarter">
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