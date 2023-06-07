<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="problem/type.css">
</head>

<?php
$type_name = 'Sun spots';
$header_title = 'Sun spots';
$header_description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
$image_small = 'https://via.placeholder.com/358x274.jpg';
$image_large = 'https://via.placeholder.com/424x456.jpg';
$nav_buttons = array(
    'about' => 'Overview',
    'approach' => 'Treatment approach',
    'areas' => 'Areas',
    'articles' => 'Articles',
    'define' => 'Define problem',
    'solutions' => 'Solutions',
    'results' => 'Cases',
    'reviews' => 'Reviews',
    'faq' => 'Questions and answers',
    'skin-guide' => 'Skin guide',
    'specialists' => 'Specialists',
    'brands' => 'Brands'
);
$about_title = 'What is acne scar types?';
$about_description = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="mt-m p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';

$articles = array(
    new Article(
        id: 'pigmentation-causes-and-risk-factors',
        title: 'Acne scars causes and risks factors',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        content: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'
    ),
    new Article(
        id: 'when-to-see-your-pigmentation-specialist',
        title: 'When to see your acne scars specialist?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        content: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'
    ),
);

$area_icons = array(
    'area-face' => 'Face',
    'area-chest' => 'Chest',
    'area-shoulders' => 'Shoulders',
    'area-back' => 'Back',

);
$areas_text = '<p class="p200">This is a treatment adapted for acne skin and <a class="h200 underline">pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-xl">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the <a class="h200 underline">acne treatment</a>, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$service = new Service(
    id: 'sun-spots-consultation',
    title: 'Consultation',
    duration: '30 min',
    price: '1295 kr',
    content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
    image_small: 'https://via.placeholder.com/102x102.jpg',
    image_large: 'https://via.placeholder.com/200x200.jpg',
    consultation_url: 'hudkonsultation',
    booking_url: null
);
$solutions = array(
    new Service(
        id: 'chemical-peeling-pigmentation',
        title: 'Chemical peeling',
        duration: '30 min',
        price: '1295 kr',
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        consultation_url: 'hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/'
    ),
    new Service(
        id: 'laser-pigmentation',
        title: 'Laser',
        duration: '30 min',
        price: '1295 kr',
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        consultation_url: 'hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/'
    ),
    new Service(
        id: 'ipl-pigmentation',
        title: 'IPL',
        duration: '30 min',
        price: '1295 kr',
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        consultation_url: 'hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/'
    ),
    new Service(
        id: 'freezetreat-pigmentation',
        title: 'FreezeTreat',
        duration: '30 min',
        price: '1295 kr',
        content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        consultation_url: 'hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/'
    )

);
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
            <div class="container">
                <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
                    <div id="overlay">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        <div>
                            <h2 class="h600">
                                <?php echo $header_title ?>
                            </h2>
                            <p class="p200 mt-m"><?php echo $header_description ?></p>
                            <div class="mt-xl">
                                <div class="columns is-2 is-variable">
                                    <div class="column">
                                        <a href="hudkonsultation" class="button white expand l10n">Get a free consultation</a>
                                    </div>
                                    <div class="column">
                                        <a href="https://bokadirekt.se" class="button white expand l10n">Book a treatment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <section id="header" class="sticky-badges-target">
                <div id="green-header-small" class="is-hidden-desktop">
                    <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        <h1 class="mt-xs h600">
                            <?php echo $header_title ?>
                        </h1>
                        <p class="mt-xs">
                            <?php echo $header_description ?>
                        </p>
                        <div class="mt-xl">
                            <div class="columns is-mobile">
                                <div class="column is-half">
                                    <a href="hudkonsultation" class="button b200 white expand l10n">Free consultation</a>
                                </div>
                                <div class="column is-half">
                                    <a href="https://bokadirekt.se" class="button b200 white expand l10n">Book a treatment</a>
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
                            <h1 class="h600">
                                <?php echo $header_title ?>
                            </h1>
                            <p class="mt-s p200">
                                <?php echo $header_description ?>
                            </p>
                            <div class="mt-xl flex-row" id="book-buttons">
                                <a href="hudkonsultation" class="button b200 white l10n">Get a free consultation</a>
                                <a href="https://bokadirekt.se" class="button b200 white l10n">Book a treatment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div id="content">
                    <section id="badges" class="mt-m is-hidden-desktop">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    </section>
                    <section id="image" class="mt-m is-hidden-desktop">
                        <picture>
                            <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                            <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                            <img src="<?php echo $image_large ?>" alt="<?php echo $header_title ?>" title="<?php echo $header_title ?>" width="358" height="274" />
                        </picture>
                    </section>
                    <section id="nav-buttons">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                    </section>
                    <section id="about">
                        <h2 class="h500"><?php echo $about_title ?></h2>
                        <div class="mt-xl"><?php echo $about_description ?></div>
                    </section>
                    <section id="approach">
                        <h2 class="h500 l10n">Treatment approach</h2>
                        <?php
                        $approach_cards = array(
                            new ApproachCard('01', 'Define', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'Get a free consultation', 'hudkonsultation'),
                            new ApproachCard('02', 'Treat', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'View treatments', 'treatments'),
                        );
                        ?>
                        <div class="columns is-gapless">
                            <?php foreach ($approach_cards as $approach_card) { ?>
                                <div class="column">
                                    <?php
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/approach_card/approach_card.php')
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                        <a href="metod" class="auto-width button outline expand mt-xl l10n">
                            Read more about our approach
                        </a>
                    </section>
                    <section id="areas">
                        <h2>
                            <span class="h500"><?php echo $type_name ?>&nbsp;</span><span class="h500 l10n">areas</span>
                        </h2>
                        <div class="columns is-mobile is-multiline area-icons mt-s">
                            <?php foreach ($area_icons as $area_icon => $label) { ?>
                                <div class="column is-half-mobile">
                                    <div class="area-icon">
                                        <?php icon($area_icon) ?>
                                        <p class="h200"><?php echo $label ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="areas-text"><?php echo $areas_text ?></div>
                    </section>
                    <section id="articles">
                        <?php
                        foreach ($articles as $article) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        } ?>
                    </section>
                    <section id="define">
                        <h2>
                            <span class="h500 l10n">Define</span>&nbsp;<span class="h500 lowercase"><?php echo $type_name ?></span>
                        </h2>
                        <hr class="is-hidden-mobile mt-xl mb-xxl">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                        <hr class="is-hidden-mobile mt-xxl">
                    </section>
                    <section id="solutions">
                        <h2>
                            <span class="h500"><?php echo $type_name ?>&nbsp;</span><span class="h500 l10n">treatment solutions</span>
                        </h2>
                        <div class="mt-m is-hidden-tablet solution-buttons">
                            <?php foreach ($solutions as $service) { ?>
                                <a href="javascript:;" onclick="scrollToElement('#service-<?php echo $service->id ?>')" class="button grey "><?php echo $service->title ?>
                                </a>
                            <?php } ?>
                        </div>
                        <hr class="is-hidden-mobile mt-xl">
                        <?php foreach ($solutions as $service) { ?>
                            <div class="mt-xxl" id="service-<?php echo $service->id ?>">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                                <hr class="is-hidden-mobile mt-xxl">
                            </div>
                        <?php } ?>
                    </section>
                    <section id="results">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                    </section>
                    <section id="reviews">
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
                            </div>
                        </div>
                        <?php
                        $reviews_narrow = true;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                        ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se">View all reviews</a>
                    </section>
                    <section id="faq">
                        <h2 class="big l10n">Questions & answers</h2>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="faq">View all questions</a>
                    </section>
                    <section id="skin-guide">
                        <h2 class="big l10n">Skin guide</h2>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="skin-guide">View all articles</a>
                    </section>
                    <section id="specialists">
                        <h2 class="big l10n">Our specialists</h2>
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                        ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="specialister">View all specialists</a>
                    </section>
                </div>
                <section id="brands">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Brands we use</h2>
                        <a href="brands" class="button compact text is-hidden-mobile">
                            <span class="l10n">View all brands</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                    <a class="mt-xl button outline expand auto-width is-hidden-desktop l10n" href="brands">View all brands</a>
                </section>
            </div>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        <script src="includes/scripts/floating-image.js"></script>
</body>

</html>