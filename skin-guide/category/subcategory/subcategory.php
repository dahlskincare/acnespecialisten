<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');

include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$subcategory_id = $_GET['id'];
if ($rs = $conn->query(sprintf("SELECT * FROM skin_guide_subcategory WHERE id = '%s'", $subcategory_id))) {
    if ($rs->num_rows == 1) {
        $subcategory = new SkinGuideSubCategory($rs->fetch_assoc());
    } else {
        http_response_code(404);
        die('Page not found');
    }
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


if ($rs = $conn->query(sprintf("SELECT COUNT(id) as cnt FROM skin_guide_article WHERE subcategory_id = '%s'", $subcategory_id))) {
    $num_articles = $rs->fetch_assoc()['cnt'];
    $rs->free_result();
} else {
    die($conn->error);
}
$pages = ceil($num_articles / $pagesize);
if ($rs = $conn->query(sprintf("SELECT * FROM skin_guide_article WHERE subcategory_id = '%s' ORDER BY ranking ASC LIMIT %d, %d", $subcategory_id, ($page - 1) * $pagesize, $pagesize))) {
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
    <title>Acnespecialisten | <?php echo $subcategory->name ?></title>
    <meta name="description" content="<?php echo $subcategory->meta_description ?>">
    <meta name="title" content="<?php echo $subcategory->meta_title ?>">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/skin-guide/category/subcategory/subcategory.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div id="banner-green">
                <div class="container">
                    <div class="is-hidden-desktop">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="h600 mt-xs"><?php echo $subcategory->name ?></h1>
                        <p class="p200 mt-xs">
                            <?php echo $subcategory->description ?>
                        </p>
                        <a href="<?php echo $subcategory->consultation_url ?>" target="_blank" class="button b200 white expand mt-xl l10n">Get a free consultation</a>
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
                                <h1 class="h600 mt-xs" id="page-title-desktop"><?php echo $subcategory->name ?></h1>
                                <a href="<?php echo $subcategory->consultation_url ?>" class="button b200 white mt-xl">Get a free consultation</a>
                            </div>
                            <div class="p200">
                                <?php echo $subcategory->description ?>
                            </div>
                            <div class="ml-xl4 p200">
                                <?php echo $subcategory->description_extended ?>
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
            <section id="articles">
                <?php if (isset($articles)) { ?>
                    <div class="columns is-multiline is-variable is-3">
                        <?php foreach ($articles as $article) { ?>
                            <div class="column is-one-third">
                                <?php include('../../widgets/article_card/article_card_widget.php'); ?>
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
                <?php include('../../widgets/paginator/paginator.php'); ?>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>