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
    title: 'The cost of microneedling',
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


$services_per_category = array(
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
            savings: 'save 1000 kr',
            booking_url: ''
        )
    ),
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
                    savings: 'save 500 kr'
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
    <link rel="stylesheet" href="/priser/service_prices.css">
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
                <section id="services" class="large-margin">
                    <?php foreach ($services_per_category as $category => $services) {
                        include('../widgets/service_category_info/service_info/service_info.php');
                    } ?>
                </section>
                <section id="description" class="large-margin">
                    <h2 class="h500 l10n">What is Microneedling?</h2>
                    <p class="mt-xs p200 l10n">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>
                    <p class="mt-xl p200 l10n">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>
                    <a href="behandlingar/microneedling" class="mt-xl button b200 outline expand l10n" title="View service details">View service details</a>
                </section>
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
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSkinGuide(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSkinGuide(1)">
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