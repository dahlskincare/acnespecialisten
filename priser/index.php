<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('models.php');

$service_categories = array(
    new ServiceCategoryInfo(
        name: 'Microneedling',
        image_small: 'https://via.placeholder.com/362x274.webp',
        image_large: 'https://via.placeholder.com/148x148.webp',
        description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.',
        url: 'priser/microneedling',
        url_label: 'View treatment details',
        services_per_category: array(
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
                    full_price: '2485 kr',
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
                            full_price: '1485 kr'
                        ),
                        new ServiceInfoComboItem(
                            name: 'Label',
                            price: '995 kr',
                            full_price: '1485 kr'
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
    <!-- TODO: Set title and meta tags -->
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
    <link rel="stylesheet" href="/priser/prices.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: 'Priser behandlingar',
                description: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
                description_extended: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend. In a personal meeting with a skin specialist, your skin type.',
                button_url: 'https://dahlskincare.com/consultation',
                button_label: 'Gör en gratis konsultation'
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
            <div class="container">
                <div id="brands-container">
                    <div id="brands">
                        <div id="brands-shadow">
                            <?php
                            $brands = array(
                                new Brand(
                                    label: 'Powerlite',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/powerlite',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                                new Brand(
                                    label: 'Dermapen',
                                    image: 'https://via.placeholder.com/94x34.webp',
                                    url: 'priser/dermapen',
                                ),
                            );
                            foreach ($brands as $brand) { ?>
                                <a href="<?php echo $brand->url ?>">
                                    <img src="<?php echo $brand->image ?>" alt="<?php echo $brand->title ?>" width="94" height="34" class="brand" />
                                </a>
                            <?php } ?>
                        </div>
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
            </div>
        </section>
        <div class="container">
            <section id="buttons">
                <div class="columns is-multiline is-variable is-1">
                    <?php foreach ($service_categories as $service_category) { ?>
                        <div class="column is-one-fifth">
                            <a href="<?php echo $service_category->url ?>" class="button b200 grey expand"><?php echo $service_category->name ?></a>
                        </div>
                    <?php } ?>
                </div>
            </section>
            <section id="service-categories">
                <?php
                foreach ($service_categories as $service_category) {
                    include('widgets/service_category_info/service_category_info.php');
                } ?>
            </section>
            <section id="consultation-banner" class="large-margin">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/consultation_banner/consultation_banner.php'); ?>
                </div>
            </section>
            <section id="results" class="large-margin">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="container">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Reviews</h2>
                        <div class="flex-row is-hidden-mobile">
                            <div class="step-buttons">
                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                    <?php icon('arrow-left') ?>
                                </button>
                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                    <?php icon('arrow-right') ?>
                                </button>
                            </div>
                            <a href="reviews" class="ml-l button compact text">
                                <span class="l10n">View all reviews</span>
                                <?php icon('navigate-next') ?>
                            </a>
                        </div>

                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="omdomen">View all reviews</a>
                </div>
            </section>
            <section id="faq" class="large-margin">
                <div class="container">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Questions & answers</h2>
                        <a href="faq" class="button compact text is-hidden-mobile">
                            <span class="l10n">View all questions</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
                </div>
            </section>
            <section id="skin-guide" class="large-margin">
                <div class="container">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Skin guide</h2>
                        <a href="skin-guide" class="button compact text is-hidden-mobile">
                            <span class="l10n">View all articles</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
                </div>
            </section>
            <section id="specialists" class="large-margin">
                <div class="container">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Our specialists</h2>
                        <a href="specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">View all specialists</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    $specialists = array(
                        new Specialist(
                            name: 'Cazzandra Lindberg',
                            title: 'Hudterapeut sedan 2015',
                            image_small: 'images/specialists/small/specialist-1.jpg',
                            image_large: 'images/specialists/large/hudterapeut-cazzandra.webp'
                        ),
                        new Specialist(
                            name: 'Veronika Benedik',
                            title: 'Hudterapeut sedan 1999',
                            image_small: 'images/specialists/small/specialist-2.jpg',
                            image_large: 'images/specialists/large/hudterapeut-veronika.webp'
                        ),
                        new Specialist(
                            name: 'Amira Maqboul',
                            title: 'Hudterapeut sedan 2017',
                            image_small: 'images/specialists/small/specialist-3.jpg',
                            image_large: 'images/specialists/large/hudterapeut-amira.webp'
                        ),
                        new Specialist(
                            name: 'Vilma Libom',
                            title: 'Hudterapeut sedan 2019',
                            image_small: 'images/specialists/small/specialist-4.jpg',
                            image_large: 'images/specialists/large/hudterapeut-vilma.webp'
                        )
                    );
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                    ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
                </div>
            </section>
            <section id="brands" class="large-margin">
                <div class="container">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Brands we use</h2>
                        <a href="brands" class="button compact text is-hidden-mobile">
                            <span class="l10n">View all brands</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
                </div>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="priser/prices.js"></script>
</body>

</html>