<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$category_id = $_GET['id'];
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
    SELECT article.* 
    FROM skin_guide_article article
    INNER JOIN skin_guide_subcategory subcategory ON article.subcategory_id = subcategory.id 
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
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Skin guide</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
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
                        <h1 class="h600 mt-xs l10n">Skin guide</h1>
                        <p class="p200 mt-xs">
                            <span id="problems-banner-collapsed" class="l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                                <span class="l10n underline h200" onclick="SkinGuide.onReadMoreClick()">read more</span>
                            </span>
                            <span id="problems-banner-expanded" class="l10n is-hidden">
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                                In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...
                            </span>
                        </p>
                        <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
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
            <section id="subcategories">
                <div id="subcategory-links-tablet" class="is-hidden-desktop">
                    <?php if (isset($subcategories)) { ?>
                        <?php foreach ($subcategories as $subcategory) { ?>
                            <a class="subcategory-link"><?php echo $subcategory->name ?></a>
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
                                <a class="subcategory-link" href="skin-guide/<?php echo $category_id ?>"><?php echo $subcategory->name ?></a>
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
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/skin-guide/category/category.js"></script>
</body>

</html>