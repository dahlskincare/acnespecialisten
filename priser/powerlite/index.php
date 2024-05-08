<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../models.php');

$categories = array(
    new BrandCategoryInfo(
        id: 'hybrid-c02',
        name: 'Hybrid (C02)',
        description: 'Hybrid is a combination of C02 and RF. The treatment is suitable for those who want to treat wrinkles, scars, stretch marks, acne and large pores. The treatment is also suitable for those who want to tighten the skin and get a more even skin tone.',
        service_categories: array(
            'Areas' =>
            array(
                new ServiceInfo(
                    name: 'Face',
                    price: '1295 kr',
                    booking_url: '',
                    image: 'https://via.placeholder.com/64x64.webp',
                ),
                new ServiceInfo(
                    name: 'Chest',
                    price: '1295 kr',
                    booking_url: '',
                    image: 'https://via.placeholder.com/64x64.webp',
                )
            ),
            'Bundles' => array(
                new ServiceInfo(
                    name: '2x Areas',
                    price: '1895 kr',
                    savings: 'save 500 kr',
                    booking_url: ''
                )
            ),
        ),
    ),
    new BrandCategoryInfo(
        id: 'harmony-xl',
        name: 'Harmony XL',
        description: 'Harmony XL is a laser treatment that is suitable for those who want to treat wrinkles, scars, stretch marks, acne and large pores. The treatment is also suitable for those who want to tighten the skin and get a more even skin tone.',
        service_categories: array(
            'Areas' =>
            array(
                new ServiceInfo(
                    name: 'Face',
                    price: '1295 kr',
                    booking_url: '',
                    image: 'https://via.placeholder.com/64x64.webp',
                ),
                new ServiceInfo(
                    name: 'Chest',
                    price: '1295 kr',
                    booking_url: '',
                    image: 'https://via.placeholder.com/64x64.webp',
                )
            ),
            'Bundles' => array(
                new ServiceInfo(
                    name: '2x Areas',
                    price: '1895 kr',
                    savings: 'save 500 kr',
                    booking_url: ''
                )
            ),
            'Spots' => array(),
        ),
    ),
    new BrandCategoryInfo(
        id: 'soprano-ice',
        name: 'Soprano ice',
        description: 'Soprano ice is a laser treatment that is suitable for those who want to treat wrinkles, scars, stretch marks, acne and large pores. The treatment is also suitable for those who want to tighten the skin and get a more even skin tone.',
        service_categories: array(
            'Combinations' => array(
                new ServiceInfo(
                    name: 'Combination 1',
                    price: '2495 kr',
                    booking_url: '',
                    image: 'https://via.placeholder.com/64x64.webp',
                    combo_items: array(
                        new ServiceInfoComboItem(
                            name: 'Label',
                            price: '995 kr',
                            savings: 'save 1485 kr'
                        ),
                        new ServiceInfoComboItem(
                            name: 'Label',
                            price: '995 kr',
                            savings: 'save 500 kr'
                        ),
                        new ServiceInfoComboItem(
                            name: 'Label',
                            price: '995 kr'
                        ),
                    )
                )
            )
        )
    )

);


$nav_buttons = array(
    'hybrid-c02' => 'Hybrid (C02)',
    'harmony-xl' => 'Harmony XL',
    'soprano-ice' => 'Soprano ice',
    'results' => 'Results',
    'reviews' => 'Reviews',
    'faq' => 'FAQ',
    'skin-guide' => 'Skin guide',
    'specialists' => 'Specialists',
    'brands' => 'Brands',
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title class="l10n">Acnespecialisten | Priser</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="Acnespecialisten is the best etc.." class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="Acnespecialisten is the best etc.." class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/priser/brand_prices.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('https://via.placeholder.com/424x456.webp')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h600 l10n">The cost of Powerlite</h2>
                        <div class="mt-m l10n">Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.</div>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="gratis-hudkonsultation" class="button white expand l10n" title="Get a free consultation">Get a free consultation</a>
                                </div>
                                <div class="column">
                                    <a href="https://bokadirekt.se" class="button white expand l10n" title="Book a treatment">Book a treatment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600 l10n">The cost of Powerlite</h1>
                    <div class="mt-xs l10n">Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.</div>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="gratis-hudkonsultation" class="button b200 white expand l10n" title="Free consultation">Free consultation</a>
                            </div>
                            <div class="column is-half">
                                <a href="https://bokadirekt.se" class="button b200 white expand l10n" title="Book a treatment">Book a treatment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-touch">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        </div>
                        <div class="column is-half flex-row align-end justify-end">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600 l10n">The cost of Powerlite</h1>
                        <div class="mt-s l10n">Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.</div>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="gratis-hudkonsultation" class="button b200 white l10n" title="Get a free consultation">Get a free consultation</a>
                            <a href="https://bokadirekt.se" class="button b200 white l10n" title="Book a treatment">Book a treatment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="mt-m mb-s is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="https://via.placeholder.com/358x274.webp">
                        <source media="(min-width: 450px)" srcset="https://via.placeholder.com/358x274.webp">
                        <img src="https://via.placeholder.com/358x274.webp" alt="The cost of Powerlite" title="The cost of Powerlite" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <?php foreach ($categories as $brand_category) { ?>
                    <section class="large-margin" id="<?php echo $brand_category->id ?>">
                        <h2 class="h500"><?php echo $brand_category->name ?></h2>
                        <p class="mt-xs p200"><?php echo $brand_category->description ?></p>
                        <?php
                        foreach ($brand_category->service_categories as $category => $services) {
                            include('../widgets/service_category_info/service_info/service_info.php');
                        }
                        ?>
                    </section>
                <?php } ?>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
                <section id="reviews" class="large-margin">
                    <h2 class="big l10n">Reviews</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n">Questions & answers</h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="View all questions">View all questions</a>
                </section>
                <section id="skin-guide" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Skin guide</h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="View all articles">View all articles</a>
                </section>
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Our specialists</h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="View all specialists">View all specialists</a>
                </section>
            </div>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Brands we use</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>