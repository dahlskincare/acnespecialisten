<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
$glossary_items = array(
    'a' => array(
        new GlossaryItem(
            title: 'Acnebehandling',
            description: '<p class="p200">Detta är en behandling anpassad för acnehy och finnar och ger en riktigt bra start på behandlingen av huden. Under acnebehandlingen rengörs huden på djupet med hjälp av en vapozon som ångar upp huden. Hudterapeuten tar även hand om både finnar och pormaskar för att få bort talg och andra orenheter.
                    <a href="acnebehandling.php">Läs mer och boka en Acenbehandling</a></p>',
        ),
        new GlossaryItem(
            title: 'Acne treatment',
            image_small: 'https://via.placeholder.com/102x102.webm',
            image_large: 'https://via.placeholder.com/200x200.webm',
            description: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud...",
            description_extended: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud..."
        ),
    ),
    'b' => array(
        new GlossaryItem(
            title: 'Bacne treatment',
            image_small: 'https://via.placeholder.com/102x102.webm',
            image_large: 'https://via.placeholder.com/200x200.webm',
            description: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud...",
            description_extended: "Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud..."
        ),
    ),
    'c' => array(),
    'd' => array(),
    'e' => array(),
    'f' => array(),
    'g' => array(),
    'h' => array(),
    'i' => array(),
    'j' => array(),
    'k' => array(),
    'l' => array(),
    'm' => array(),
    'n' => array(),
    'o' => array(),
    'p' => array(),
    'q' => array(),
    'r' => array(),
    's' => array(),
    't' => array(),
    'u' => array(),
    'v' => array(),
    'w' => array(),
    'x' => array(),
    'y' => array(),
    'z' => array(),
    'å' => array(),
    'ä' => array(),
    'ö' => array(),
)
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Glossary</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/ordlista/glossary.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div class="container">
                <div class="flex-row justify-space-between">
                    <div class="is-hidden-touch">
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="title">
                    <h1 class="h600 l10n">Ordlista</h1>
                </section>
                <section id="letters">
                    <div id="letter-selector-scroller">
                        <div id="letter-selector">
                            <?php foreach ($glossary_items as $letter => $_items) { ?>
                                <div class="letter" id="<?php echo $letter ?>"><?php echo $letter ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
                <section id="glossary-items">
                    <?php foreach ($glossary_items as $letter => $items) { ?>
                        <div class="item-category" id="category-<?php echo $letter ?>">
                            <?php foreach ($items as $item) { ?>
                                <div class="item">
                                    <?php if (isset($item->image_large)) { ?>
                                        <picture>
                                            <source media="(max-width: 799px)" srcset="<?php echo $item->image_small ?>">
                                            <source media="(min-width: 800px)" srcset="<?php echo $item->image_large ?>">
                                            <img src="<?php echo $item->image_large ?>" alt="<?php echo $item->title ?>" title="<?php echo $item->title ?>" width="102" height="102" />
                                        </picture>

                                    <?php } ?>
                                    <h2><?php echo $item->title ?></h2>
                                    <p><?php echo $item->description ?></p>
                                    <?php if (isset($item->description_extended)) { ?>
                                        <div class="button text compact l10n" onclick="Glossary.onShowMoreClick(this)">Read more</div>
                                        <p class="extended zero-size"><?php echo $item->description_extended ?></p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </section>
            </div>
            <section id="cta" class="large-margin">
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
                    <h2 class="big l10n">Questions & answers</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="View all questions">View all questions</a>
            </section>
            <section id="skin-guide" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Skin guide</div>
                    <a href="skin-guide" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all articles</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide" title="View all articles">View all articles</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Our specialists</h2>
                    <a href="specialister" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister" title="View all specialists">View all specialists</a>
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
    <script type="text/javascript" src="ordlista/glossary.js"></script>
</body>

</html>