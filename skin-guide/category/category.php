<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$category_id = $_GET['id'];

if ($rs = $conn->query(sprintf("SELECT * FROM skin_guide_category WHERE id = '%s'", $category_id))) {
    if ($rs->num_rows == 1) {
        $category = new SkinGuideCategory($rs->fetch_assoc());
    } else {
        http_response_code(404);
        die('Page not found');
    }
} else {
    die($conn->error);
}

$query = sprintf("SELECT * FROM skin_guide_subcategory WHERE category_id = '%s' ORDER BY ranking ASC", $category_id);
if ($rs = $conn->query($query)) {
    foreach ($rs as $row) {
        $subcategories[] = new SkinGuideSubCategory($row);
    }
    $rs->free_result();
} else {
    die($conn->error);
}
if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
if (isset($_GET['pagesize'])) {
    $pagesize = $_GET['pagesize'];
} else {
    $pagesize = 9;
}

if ($rs = $conn->query(sprintf("
    SELECT COUNT(article.id) as cnt 
    FROM skin_guide_article article
    INNER JOIN skin_guide_subcategory subcategory ON article.subcategory_id = subcategory.id 
    WHERE subcategory.category_id = '%s'
", $category_id))) {
    $num_articles = $rs->fetch_assoc()['cnt'];
    $rs->free_result();
} else {
    die($conn->error);
}
$pages = ceil($num_articles / $pagesize);
if ($rs = $conn->query(sprintf("
    SELECT article.*, subcategory.category_id 
    FROM skin_guide_article article
    INNER JOIN skin_guide_subcategory subcategory ON article.subcategory_id = subcategory.id 
    INNER JOIN skin_guide_category category ON category.id = subcategory.category_id
    WHERE subcategory.category_id = '%s'
    ORDER BY article.ranking ASC LIMIT %d, %d
", $category_id, ($page - 1) * $pagesize, $pagesize))) {
    foreach ($rs as $row) {
        $articles[] = new SkinGuideArticle($row);
    }
} else {
    die($conn->error);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title>Acnespecialisten | <?php echo $category->name ?></title>
    <meta name="description" content="<?php echo $category->meta_description ?>">
    <meta name="title" content="<?php echo $category->meta_title ?>">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/skin-guide/category/category.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div id="banner-green">
                <div class="container">
                    <div class="is-hidden-desktop">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="h600 mt-xs"><?php echo $category->name ?></h1>
                        <p class="p200 mt-xs">
                            <span id="problems-banner-collapsed" class="l10n">
                                <?php echo $category->description ?>
                                <span class="l10n underline h200" onclick="Category.onReadMoreClick(this)">read more</span>
                            </span>
                            <span id="problems-banner-expanded" class="l10n is-hidden">
                                <?php echo $category->description_extended ?>
                            </span>
                        </p>
                        <a href="<?php echo $category->consultation_url ?>" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                    </div>
                    <div class="is-hidden-touch" id="banner-green-desktop">
                        <div class="flex-row justify-space-between">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                            <div class="mt-xl mb-xs">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                            </div>
                        </div>
                        <div class="flex-row align-end">
                            <div id="skin-problems-header-column">
                                <h1 class="h600 mt-xs" id="page-title-desktop"><?php echo $category->name ?></h1>
                                <a href="<?php echo $category->consultation_url ?>" class="button b200 white mt-xl">Get a free consultation</a>
                            </div>
                            <div class="p200">
                                <?php echo $category->description ?>
                            </div>
                            <div class="ml-xl4 p200">
                                <?php echo $category->description_extended ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-m is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
        </section>
        <div class="container">
            <section id="subcategories">
                <div id="subcategory-links-tablet" class="is-hidden-desktop">
                    <?php if (isset($subcategories)) { ?>
                        <?php foreach ($subcategories as $subcategory) { ?>
                            <a class="subcategory-link" href="skin-guide/<?php echo $category_id ?>/<?php echo $subcategory->id ?>"><?php echo $subcategory->name ?></a>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div id="subcategory-links-desktop" class="is-hidden-touch">
                    <div class="scroll-button-container is-hidden" id="scroll-left">
                        <button class="grey round-medium">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="scroll-button-container is-hidden" id="scroll-right">
                        <button class="grey round-medium">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                    <div id="scroll-content">
                        <?php if (isset($subcategories)) { ?>
                            <?php foreach ($subcategories as $subcategory) { ?>
                                <a class="subcategory-link" href="skin-guide/<?php echo $category_id ?>/<?php echo $subcategory->id ?>"><?php echo $subcategory->name ?></a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section id="articles">
                <?php if (isset($articles)) { ?>
                    <div class="columns is-multiline is-variable is-3">
                        <?php foreach ($articles as $article) { ?>
                            <div class="column is-one-third">
                                <?php include('../widgets/article_card/article_card_widget.php'); ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="h200 mt-m l10n">No articles found</div>
                <?php } ?>
            </section>
            <section id="paginator">
                <?php if ($pagesize < $num_articles) { ?>
                    <div id="show-more">
                        <a class="button b200 expand l10n" href="/skin-guide/<?php echo $category_id ?>?page=1&pagesize=<?php echo $pagesize * 2 ?>">View more articles</a>
                    </div>
                <?php } ?>
                <?php include('../widgets/paginator/paginator.php'); ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $category->consultation_url ?>" class="button white expand l10n">Get a free consultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <div class="is-hidden-tablet">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Results</h2>
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Carousel.prev('#results-carousel')">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Carousel.next('#results-carousel')">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <div class="mt-l carousel" id="results-carousel">
                        <div class="slide">
                            <div class="container l10n">
                                <?php
                                $before = 'images/results/acne-before.webp';
                                $after = 'images/results/acne-after.webp';
                                $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                ?>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="container l10n">
                                <?php
                                $before = 'images/results/rosacea-before.webp';
                                $after = 'images/results/rosacea-after.webp';
                                $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                ?>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="container l10n">
                                <?php
                                $before = 'images/results/comedones-before.webp';
                                $after = 'images/results/comedones-after.webp';
                                $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <a class="button outline expand l10n" href="results">View all treatment results</a>
                    </div>
                </div>
                <div class="is-hidden-mobile">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Results</h2>
                        <a href="results" class="button compact text">
                            <span class="l10n">View all treatment results</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <div class="columns is-3 is-variable">
                        <div class="mt-l column l10n">
                            <?php
                            $before = 'images/results/acne-before.webp';
                            $after = 'images/results/acne-after.webp';
                            $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                        <div class="mt-l column l10n">
                            <?php
                            $before = 'images/results/rosacea-before.webp';
                            $after = 'images/results/rosacea-after.webp';
                            $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                        <div class="mt-l column l10n">
                            <?php
                            $before = 'images/results/comedones-before.webp';
                            $after = 'images/results/comedones-after.webp';
                            $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Reviews</div>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Carousel.prev('#reviews-carousel', -1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Carousel.next('#reviews-carousel', 1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <a href="reviews" class="ml-l button compact text">
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Questions & answers</div>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Our specialists</div>
                    <a href="specialists" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="brands" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/skin-guide/category/category.js"></script>
</body>

</html>