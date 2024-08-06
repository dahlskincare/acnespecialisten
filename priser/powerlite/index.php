<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../models.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/green_banner_content.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/link.php');

$image_small = 'https://via.placeholder.com/358x274.webp';
$image_large = 'https://via.placeholder.com/424x456.webp';
$image_alt = 'IMAGE ALT HERE';
$image_title = 'IMAGE_TITLE_HERE';

$green_banner_content = new GreenBannerContent(
    title: 'The cost of powerlite',
    description: 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we...',
    links_touch: [
        new Link('Boka konsultation', 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300', 'Boka gratis konsultation'),
        new Link('Boka behandling', 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300', 'Boka denna behandling'),
    ],
    links_desktop: [
        new Link('Boka gratis konsultation', 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300', 'Boka gratis konsultation'),
        new Link('Boka behandling', 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300', 'Boka denna behandling'),
    ],
    show_consultation_card: false,
);


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
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/floater.php'); ?>
    <main>
        <section id="header">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                        <img src="<?php echo $image_large ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>" width="358" height="274" />
                    </picture>
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
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Our specialists</h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
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
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken/" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>