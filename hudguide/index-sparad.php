<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

if (isset($_GET['page']) && $_GET['page'] > 0) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$consultation_url = 'gratis-hudkonsultation';

$categories = array(
    new SkinGuideCategory(
        url: 'hudguide/problemhy',
        name: 'Problemhy',
    ),
    new SkinGuideCategory(
        url: 'hudguide/routine',
        name: 'Routine',
    ),

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
        url: 'hudguide/problemhy',
        name: 'Problemhy',
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
    new SkinGuideCategory(
        url: 'hudguide/varumarken',
        name: 'Varumärken',
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
        ),
    ),
);

$pages = sizeof($articles_per_page);

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title>AcneSpecialisten Hudguide | Din Resurs för Allt inom Hudvård</title>
    <meta name="description" content="Upptäck AcneSpecialistens Hudguide – din ultimata källa för information om hudvård. Med över 30 års erfarenhet erbjuder vi djupgående artiklar, tips och råd om acnebehandling, hudvårdstrender och mycket mer. Utforska vår kunskapsbank idag och ta kontroll över din hudhälsa.">
    <meta name="keywords" content="Hudvårdsguide, Hudvårdstips, AcneSpecialisten, Hudvårdsartiklar, Hudproblem, Acnebehandling, Hudvårdstrender, Hudhälsa, Hudvårdsråd, Stockholm hudvård, Hudvårdsexpertis">

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
                title: 'Hudguide',
                description: 'Välkommen till AcneSpecialistens Hudguide – din omfattande resurs för allt inom hudvård. I denna guide samlar vi över 30 års expertis och erfarenhet för att ge dig den mest aktuella och praktiska informationen om hudvård, behandlingar och hudhälsa.',
                description_extended: 'Här hittar du artiklar om en mängd hudvårdsämnen, från grundläggande hudvårdstips till avancerad information om specifika hudtillstånd som acne, rosacea, och mycket mer. Vårt mål är att tillhandahålla pålitlig, vetenskapligt underbyggd information som hjälper dig att förstå din hud bättre och ta hand om den på bästa möjliga sätt.',
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
            <section id="cta" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="<?php echo $consultation_url ?>" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
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
                    <a href="hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="hudterapeut" title="View all specialists">View all specialists</a>
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
    <script src="hudguide/skin-guide.js"></script>
</body>

</html>