<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

if ($rs = $conn->query("
    SELECT article.*, subcategory.category_id 
    FROM skin_guide_article article
    INNER JOIN skin_guide_subcategory subcategory ON subcategory.id = article.subcategory_id 
    WHERE article.id = '" . $_GET['id'] . "'")) {
    if ($rs->num_rows == 1) {
        $article = new SkinGuideArticle($rs->fetch_assoc());
    } else {
        http_response_code(404);
        die('Page not found');
    }
} else {
    die($conn->error);
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/skin-guide/category/article/article.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div class="container">
                <div class="flex-row justify-space-between">
                    <div class="is-hidden-touch">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
        </section>
        <div class="container">
            <section id="desktop-breadcrumbs" class="is-hidden-desktop">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            </section>
            <div id="article-wrapper">
                <section id="metadata">
                    <h1 id="article-title"><?php echo $article->title ?></h1>
                    <h3 id="article-subtitle"><?php echo $article->subtitle ?></h3>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $article->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $article->image_large ?>">
                        <img src="<?php echo $article->image_small ?>" alt="<?php echo $article->title ?>" width="360" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <div id="nav-buttons-container">
                        <div class="scroll-button is-hidden" id="scroll-prev">
                            <button class="round-medium grey">
                                <?php icon('arrow-left') ?>
                            </button>
                        </div>
                        <div class="scroll-button is-hidden" id="scroll-next">
                            <button class="round-medium grey">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <div id="nav-buttons-scroller">
                            <div class="flex-row">
                            </div>
                        </div>
                    </div>
                </section>
                <section id="content">
                    <?php echo $article->content ?>
                </section>
            </div>
            <section id="skin-guide">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 large-margin l10n">Other articles</div>
                    <a href="skin-guide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
            </section>
            <section class="large-margin" id="cta-banner">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n">Get a free consultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
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
    <script src="skin-guide/category/article/article.js"></script>
</body>

</html>