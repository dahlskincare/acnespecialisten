<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$consultation_url = 'https://dahlskincare.com/skin-consultation';
$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
if (isset($_GET['subcategory'])) {
    $subcategory_id = $_GET['subcategory'];
} else {
    $subcategory_id = '*';
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
if ($subcategory_id == '*') {
    $where = '1';
} else {
    $where = sprintf("subcategory_id = '%s'", $subcategory_id);
}
if ($rs = $conn->query(sprintf("SELECT COUNT(id) as cnt FROM skin_guide_article WHERE %s", $where))) {
    $num_articles = $rs->fetch_assoc()['cnt'];
    $rs->free_result();
} else {
    die($conn->error);
}
$pages = ceil($num_articles / $pagesize);
if ($rs = $conn->query(sprintf("SELECT * FROM skin_guide_article WHERE %s ORDER BY ranking ASC LIMIT %d, %d", $where, ($page - 1) * $pagesize, $pagesize))) {
    foreach ($rs as $row) {
        $articles[] = new SkinGuideArticle($row);
    }
} else {
    die($conn->error);
}
if ($rs = $conn->query("SELECT * FROM skin_guide_category ORDER BY ranking ASC")) {
    foreach ($rs as $row) {
        $categories[] = new SkinGuideCategory($row);
    }
    $rs->free_result();
} else {
    die($conn->error);
}
if ($rs = $conn->query("SELECT * FROM skin_guide_subcategory ORDER BY ranking ASC")) {
    foreach ($rs as $row) {
        $subcategories[] = new SkinGuideSubCategory($row);
    }
    $rs->free_result();
} else {
    die($conn->error);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Skin guide</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/skin-guide/skin-guide.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div id="banner-green">
                <div class="container l10n">
                    <div class="is-hidden-desktop">
                        <h1 class="h600 mt-xs l10n">Skin guide</h1>
                        <p class="p200 mt-xs">
                            <span id="problems-banner-collapsed" class="l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                                <span class="l10n underline h200" onclick="SkinGuide.onReadMoreClick(this)">read more</span>
                            </span>
                            <span id="problems-banner-expanded" class="l10n is-hidden">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                            </span>
                        </p>
                        <a href="<?php echo $consultation_url ?>" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
                    </div>
                    <div class="is-hidden-touch" id="banner-green-desktop">
                        <div class="flex-row justify-space-between">
                            <div></div>
                            <div class="mt-xl mb-xs">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                            </div>
                        </div>
                        <div class="flex-row align-end">
                            <div id="skin-problems-header-column">
                                <h1 class="h600 mt-xs l10n" id="page-title-desktop">Skin guide</h1>
                                <a href="https://dahlskincare.com/skin-consultation" class="button b200 white mt-xl">Get a free consultation</a>
                            </div>
                            <div class="l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                            </div>
                            <div class="ml-xl4 l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
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
            <section id="categories-tablet" class="is-hidden-desktop">
                <div id="category-links">
                    <?php foreach ($categories as $category) { ?>
                        <a href="/skin-guide/<?php echo $category->id ?>" class="category-link"><?php echo $category->name ?></a>
                    <?php } ?>
                </div>
            </section>
            <section id="categories-desktop" class="is-hidden-touch">
                <div id="category-items-container">
                    <div id="category-items">
                        <?php foreach ($categories as $category) { ?>
                            <a href="/skin-guide/<?php echo $category->id ?>" class="category-item"><?php echo $category->name ?></a>
                        <?php } ?>
                    </div>
                    <div class="scroll-button is-hidden" id="scroll-button-previous">
                        <button class="round-medium grey">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="scroll-button is-hidden" id="scroll-button-next">
                        <button class="round-medium grey">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                </div>
            </section>
            <section id="subcategories">
                <div id="subcategories-wrapper">
                    <div class="scroll-button is-hidden" id="subcategory-scroll-left">
                        <button class="round-medium grey">
                            <?php icon('arrow-left') ?>
                        </button>
                    </div>
                    <div class="scroll-button is-hidden" id="subcategory-scroll-right">
                        <button class="round-medium grey">
                            <?php icon('arrow-right') ?>
                        </button>
                    </div>
                    <div id="subcategory-items">
                        <a href="skin-guide?page=1&pagesize=<?php echo $pagesize ?>" class="subcategory-item l10n <?php if ($subcategory_id == '*') {
                                                                                                                        echo 'sc-active';
                                                                                                                    } ?>">All topics</a>
                        <?php foreach ($subcategories as $subcategory) { ?>
                            <a id="sc-item-<?php echo $subcategory->id ?>" class="subcategory-item <?php if ($subcategory->id == $subcategory_id) {
                                                                                                        echo 'sc-active';
                                                                                                    } ?>" href="skin-guide?page=1&pagesize=<?php echo $pagesize ?>&subcategory=<?php echo $subcategory->id ?>"><?php echo $subcategory->name ?></a>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section id="articles">
                <?php if (isset($articles)) { ?>
                    <div class="columns is-multiline is-variable is-3">
                        <?php foreach ($articles as $article) { ?>
                            <div class="column is-one-third">
                                <?php include('widgets/article_card/article_card_widget.php'); ?>
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
                        <a class="button b200 expand l10n" href="/skin-guide?page=1&pagesize=<?php echo $pagesize * 2 ?>&subcategory=<?php echo $subcategory_id ?>">View more articles</a>
                    </div>
                <?php } ?>
                <?php include('widgets/paginator/paginator.php'); ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n">Get a free consultation</a>
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
    <script src="skin-guide/skin-guide.js"></script>
</body>

</html>