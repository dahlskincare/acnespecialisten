<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$meta_title = '';
$meta_description = '';

$subcategory = new SkinGuideSubCategory(
    id: 'dry-skin',
    name: 'Dry skin',
    category_id: 'accessories',
    description: 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.',
    description_extended: 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.',
    consultation_url: '',
);

$articles_per_page = array(
    1 => array(
        new SkinGuideArticle(
            id: 'how-hormones-affect',
            title: 'How hormones affect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.',
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'accessories',
            subcategory_id: 'dry-skin',
        ),
        new SkinGuideArticle(
            id: 'hej-peter',
            title: 'Hej!',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Aging skin',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.',
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'accessories',
            subcategory_id: 'dry-skin',
        ),
    ),
    2 => array(
        new SkinGuideArticle(
            id: 'blablabla',
            title: 'Bla bla bla',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.',
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'accessories',
            subcategory_id: 'dry-skin',
        ),
    )
);


$pages = sizeof($articles_per_page);


?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title>Acnespecialisten | <?php echo $subcategory->name ?></title>
    <meta name="description" content="<?php echo $meta_description ?>">
    <meta name="title" content="<?php echo $meta_title ?>">
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
            <?php
            $green_banner_content = new GreenBannerContent(
                title: $subcategory->name,
                description: $subcategory->description,
                description_extended: $subcategory->description_extended,
                button_url: $subcategory->consultation_url,
                button_label: 'Gör en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
        </section>
        <div class="container">
            <section id="articles">
                <?php if (isset($articles_per_page[$page])) { ?>
                    <div class="columns is-multiline is-variable is-3">
                        <?php foreach ($articles_per_page[$page] as $article) { ?>
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
                <?php include('../../widgets/paginator/paginator.php'); ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $subcategory->consultation_url ?>" class="button white expand l10n">Get a free consultation</a>
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
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se">View all reviews</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialister">View all specialists</a>
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
</body>

</html>