<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$meta_description = '';
$meta_title = '';

$category = new SkinGuideCategory(
    url: 'hudguide/accessories',
    name: 'Accessories',
    description: 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. He…',
    description_extended: 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.',
    consultation_url: ''
);

$subcategories = array(
    new SkinGuideSubCategory(
        id: 'subcategory-1',
        url: 'hudguide/accessories/subcategory-1',
        name: 'Subcategory 1',
    ),
    new SkinGuideSubCategory(
        id: 'subcategory-2',
        url: 'hudguide/accessories/subcategory-2',
        name: 'Subcategory 2',
    ),
    new SkinGuideSubCategory(
        id: 'subcategory-3',
        url: 'hudguide/accessories/subcategory-3',
        name: 'Subcategory 3',
    ),
);

$articles_per_page = array(
    1 => array(
        new SkinGuideArticle(
            url: 'hudguide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
        ),
        new SkinGuideArticle(
            url: 'hudguide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
        ),
    ),
    2 => array(
        new SkinGuideArticle(
            url: 'hudguide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
        ),
    )
);


$pages = sizeof($articles_per_page);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title>Acnespecialisten | <?php echo $category->name ?></title>
    <meta name="description" content="<?php echo $meta_description ?>">
    <meta name="title" content="<?php echo $meta_title ?>">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudguide/category/category.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: $category->name,
                description: $category->description,
                description_extended: $category->description_extended,
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
        </section>
        <div class="container">
            <section id="subcategories">
                <div id="subcategory-links-tablet" class="is-hidden-desktop">
                    <?php if (isset($subcategories)) { ?>
                        <?php foreach ($subcategories as $subcategory) { ?>
                            <a class="subcategory-link" href="<?php echo $subcategory->url ?>" title="<?php echo $subcategory->name ?>"><?php echo $subcategory->name ?></a>
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
                                <a class="subcategory-link" href="<?php echo $subcategory->url ?>" title="<?php echo $subcategory->name ?>"><?php echo $subcategory->name ?></a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section id="articles">
                <?php if (isset($articles_per_page[$page])) { ?>
                    <div class="columns is-multiline is-variable is-3">
                        <?php foreach ($articles_per_page[$page] as $article) { ?>
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
                <?php include('../widgets/paginator/paginator.php'); ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $category->consultation_url ?>" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Reviews</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="faq" title="View all questions">View all questions</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="specialister" title="View all specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/hudguide/category/category.js"></script>
</body>

</html>