<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$conn = new mysqli($_ENV['DB_URL'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], database: $_ENV['DB_NAME']);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

if ($rs = $conn->query("SELECT * FROM skin_guide_article WHERE id = '" . $_GET['id'] . "'")) {
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
                    <div class="columns is-variable is-2">
                        <div class="column">
                            <div class="result-overlay">
                                <div class="ro-images">
                                    <img src="https://via.placeholder.com/424x424.webp" alt="Before" width="424" height="424" />
                                    <img class="after" src="https://via.placeholder.com/848x848.webp" alt="After" width="424" height="424" />
                                    <div class="ro-slider">
                                        <div class="ro-slider-button">
                                            <div class="ro-icon-left"></div>
                                            <div class="ro-icon-right"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ro-info">
                                    After 2 months of <a href="">acne treatment</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="result-overlay">
                                <div class="ro-images">
                                    <img src="https://via.placeholder.com/424x424.webp" alt="Before" width="424" height="424" />
                                    <img class="after" src="https://via.placeholder.com/848x848.webp" alt="After" width="424" height="424" />
                                    <div class="ro-slider">
                                        <div class="ro-slider-button">
                                            <div class="ro-icon-left"></div>
                                            <div class="ro-icon-right"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ro-info">
                                    After 2 months of <a href="">acne treatment</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php echo $article->content ?>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="skin-guide/category/article/article.js"></script>
</body>

</html>