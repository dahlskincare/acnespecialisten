<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$consultation_url = 'hudkonsultation';

$categories = array(
    new SkinGuideCategory(
        url: 'hudguide/accessories',
        name: 'Accessories',
    ),
    new SkinGuideCategory(
        url: 'hudguide/age',
        name: 'Age',
    ),
    new SkinGuideCategory(
        url: 'hudguide/areas',
        name: 'Areas',
    ),
    new SkinGuideCategory(
        url: 'hudguide/brands',
        name: 'Brands',
    ),
    new SkinGuideCategory(
        url: 'hudguide/gender',
        name: 'Gender',
    ),
    new SkinGuideCategory(
        url: 'hudguide/personal-care',
        name: 'Personal care',
    ),
    new SkinGuideCategory(
        url: 'hudguide/products',
        name: 'Products',
    ),
    new SkinGuideCategory(
        url: 'hudguide/routine',
        name: 'Routine',
    ),
    new SkinGuideCategory(
        url: 'hudguide/skin-conditions',
        name: 'Skin conditions',
    ),
    new SkinGuideCategory(
        url: 'hudguide/skin-problems',
        name: 'Skin problems',
    ),
    new SkinGuideCategory(
        url: 'hudguide/skin-tones',
        name: 'Skin tones',
    ),
    new SkinGuideCategory(
        url: 'hudguide/tools',
        name: 'Tools',
    ),
);

$subcategories = array(
    new SkinGuideSubCategory(
        id: 'dry-skin',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Dry skin',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-1',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 1',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-2',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 2',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-3',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 3',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-4',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 4',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-5',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 5',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-6',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 6',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-7',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 7',
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-8',
        url: 'hudguide/skin-problems/dry-skin',
        name: 'Subtopic 8',
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
        )
    )
);

$pages = sizeof($articles_per_page);

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Hudguiden</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudguide/skin-guide.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: 'Skin guide',
                description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...',
                description_extended: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified In a personal meeting with a skin specialist, your skinonal...',
                button_url: 'hudkonsultation',
                button_label: 'Gör en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
        </section>
        <div class="container">
            <section id="categories-tablet" class="is-hidden-desktop">
                <div id="category-links">
                    <?php foreach ($categories as $category) { ?>
                        <a href="<?php echo $category->url ?>" class="category-link" title="<?php echo $category->name ?>"><?php echo $category->name ?></a>
                    <?php } ?>
                </div>
            </section>
            <section id="categories-desktop" class="is-hidden-touch">
                <div id="category-items-container">
                    <div id="category-items">
                        <?php foreach ($categories as $category) { ?>
                            <a href="<?php echo $category->url ?>" class="category-item" title="<?php echo $category->name ?>"><?php echo $category->name ?></a>
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
                        <?php foreach ($subcategories as $subcategory) { ?>
                            <a id="sc-item-<?php echo $subcategory->id ?>" class="subcategory-item" href="<?php echo $subcategory->url ?>" title="<?php echo $subcategory->name ?>"><?php echo $subcategory->name ?></a>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <section id="articles">
                <?php if (isset($articles_per_page[$page])) { ?>
                    <div class="columns is-multiline is-variable is-3">
                        <?php foreach ($articles_per_page[$page] as $article) { ?>
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
                <?php include('widgets/paginator/paginator.php'); ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Want to identify your problem?</div>
                    <div class="p200 l10n" id="cta-banner-content">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
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
                    <a href="specialister" class="button compact text is-hidden-mobile">
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
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="hudguide/skin-guide.js"></script>
</body>

</html>