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
        id: 'accessories',
        name: 'Accessories',
    ),
    new SkinGuideCategory(
        id: 'age',
        name: 'Age',
    ),
    new SkinGuideCategory(
        id: 'areas',
        name: 'Areas',
    ),
    new SkinGuideCategory(
        id: 'brands',
        name: 'Brands',
    ),
    new SkinGuideCategory(
        id: 'gender',
        name: 'Gender',
    ),
    new SkinGuideCategory(
        id: 'personal-care',
        name: 'Personal care',
    ),
    new SkinGuideCategory(
        id: 'products',
        name: 'Products',
    ),
    new SkinGuideCategory(
        id: 'routine',
        name: 'Routine',
    ),
    new SkinGuideCategory(
        id: 'skin-conditions',
        name: 'Skin conditions',
    ),
    new SkinGuideCategory(
        id: 'skin-problems',
        name: 'Skin problems',
    ),
    new SkinGuideCategory(
        id: 'skin-tones',
        name: 'Skin tones',
    ),
    new SkinGuideCategory(
        id: 'tools',
        name: 'Tools',
    ),
);

$subcategories = array(
    new SkinGuideSubCategory(
        id: 'dry-skin',
        name: 'Dry skin',
        category_id: 'skin-problems'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-1',
        name: 'Subtopic 1',
        category_id: 'accessories'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-2',
        name: 'Subtopic 2',
        category_id: 'accessories'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-3',
        name: 'Subtopic 3',
        category_id: 'accessories'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-4',
        name: 'Subtopic 4',
        category_id: 'accessories'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-5',
        name: 'Subtopic 5',
        category_id: 'accessories'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-6',
        name: 'Subtopic 6',
        category_id: 'accessories'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-7',
        name: 'Subtopic 7',
        category_id: 'accessories'
    ),
    new SkinGuideSubCategory(
        id: 'subtopic-8',
        name: 'Subtopic 8',
        category_id: 'accessories'
    ),
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
                        <?php foreach ($subcategories as $subcategory) { ?>
                            <a id="sc-item-<?php echo $subcategory->id ?>" class="subcategory-item" href="skin-guide/<?php echo $subcategory->category_id ?>/<?php echo $subcategory->id ?>"><?php echo $subcategory->name ?></a>
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
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <a href="omdomen" class="ml-l button compact text">
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="omdomen">View all reviews</a>
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
                    <a href="specialister" class="button compact text is-hidden-mobile">
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
    <script src="skin-guide/skin-guide.js"></script>
</body>

</html>