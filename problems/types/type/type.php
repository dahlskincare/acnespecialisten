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
    <link rel="stylesheet" href="problems/types/type/type.css">
</head>

<?php
$type_name = 'Sun spots';
$header_title = 'Sun spots';
$header_description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
$image_small = 'https://via.placeholder.com/358x274.jpg';
$image_large = 'https://via.placeholder.com/424x456.jpg';
$about_title = 'What is acne scar types?';
$about_description = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="mt-m p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$area_icons = array(
    'area-face' => 'Face',
    'area-chest' => 'Chest',
    'area-shoulders' => 'Shoulders',
    'area-back' => 'Back',

);
$areas_text = '<p class="p200">This is a treatment adapted for acne skin and <a class="h200 underline">pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-xl">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the <a class="h200 underline">acne treatment</a>, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$service = new Service('sun-spots-consultation', 'Consultation', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', null);
$solutions = array(
    new Service('chemical-peeling-pigmentation', 'Chemical peeling', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/'),
    new Service('laser-pigmentation', 'Laser', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/'),
    new Service('ipl-pigmentation', 'IPL', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/'),
    new Service('freezetreat-pigmentation', 'FreezeTreat', '30 min', '1295 kr', 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',  'https://via.placeholder.com/102x102.jpg', 'https://via.placeholder.com/200x200.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/')

);
$specialists = array(
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-2.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-3.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-4.jpg'),
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
                            <div class="mt-xl columns is-2 is-variable">
                                <div class="column">
                                    <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button white expand l10n">Get a free consultation</a>
                                </div>
                                <div class="column">
                                    <a href="<?php echo $booking_url ?>" target="_blank" class="button white expand l10n">Book a treatment</a>
                                </div>
                            </div>
                            </p>
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
                        <h1 class="mt-xs h600">
                            <?php echo $header_title ?>
                        </h1>
                        <p class="mt-xs">
                            <?php echo $header_description ?>
                        </p>
                        <div class="mt-xl columns is-mobile">
                            <div class="column is-half">
                                <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand l10n">Free consultation</a>
                            </div>
                            <div class="column is-half">
                                <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white expand l10n">Book a treatment</a>
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
                                <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button b200 white l10n">Get a free consultation</a>
                                <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white l10n">Book a treatment</a>
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
                            <img src="<?php echo $image_large ?>" alt="<?php echo $header_title ?>" width="358" height="274" />
                        </picture>
                    </section>
                    <section id="nav-buttons">
                        <a href="javascript:;" onclick="scrollToElement('#about')" class="button b50 grey l10n">Overview</a>
                        <a href="javascript:;" onclick="scrollToElement('#approach')" class="button b50 grey l10n">Treatment approach</a>
                        <a href="javascript:;" onclick="scrollToElement('#areas')" class="button b50 grey l10n">Areas</a>
                        <a href="javascript:;" onclick="scrollToElement('#articles')" class="button b50 grey l10n">Articles</a>
                        <a href="javascript:;" onclick="scrollToElement('#define')" class="button b50 grey l10n">Define</a>
                        <a href="javascript:;" onclick="scrollToElement('#solutions')" class="button b50 grey l10n">Solutions</a>
                        <a href="javascript:;" onclick="scrollToElement('#results')" class="button b50 grey l10n">Cases</a>
                        <a href="javascript:;" onclick="scrollToElement('#reviews')" class="button b50 grey l10n">Reviews</a>
                        <a href="javascript:;" onclick="scrollToElement('#faq')" class="button b50 grey l10n">Questions and answers</a>
                        <a href="javascript:;" onclick="scrollToElement('#skin-guide')" class="button b50 grey l10n">Skin guide</a>
                        <a href="javascript:;" onclick="scrollToElement('#specialists')" class="button b50 grey l10n">Specialists</a>
                        <a href="javascript:;" onclick="scrollToElement('#brands')" class="button b50 grey l10n">Brands</a>
                    </section>
                    <section id="about">
                        <h2 class="h500"><?php echo $about_title ?></h2>
                        <div class="mt-xl"><?php echo $about_description ?></div>
                    </section>
                    <section id="approach">
                        <h2 class="h500 l10n">Treatment approach</h2>
                        <?php
                        $approach_cards = array(
                            new ApproachCard('01', 'Define', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'Get a free consultation', 'https://www.dahlskincare.com/skin-consultation'),
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
                        <a href="our-approach" class="auto-width button outline expand mt-xl l10n">
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
                        include($_SERVER['DOCUMENT_ROOT'] . '/problems/widgets/problem-article/problem-article.php');
                        $articles = array(
                            new ProblemArticle('pigmentation-causes-and-risk-factors', 'Acne scars causes and risks factors', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'),
                            new ProblemArticle('when-to-see-your-pigmentation-specialist', 'When to see your acne scars specialist?', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'),
                        );
                        foreach ($articles as $article) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/problems/widgets/problem-article/problem-article-widget.php');
                        } ?>
                    </section>
                    <section id="define">
                        <h2>
                            <span class="h500 l10n">Define</span>&nbsp;<span class="h500 lowercase"><?php echo $type_name ?></span>
                        </h2>
                        <hr class="is-hidden-mobile mt-xl mb-xxl">
                        <?php include('../../widgets/service-card/service-card.php') ?>
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
                                <?php include('../../widgets/service-card/service-card.php') ?>
                                <hr class="is-hidden-mobile mt-xxl">
                            </div>
                        <?php } ?>
                    </section>
                    <section id="results">
                        <div class="flex-row justify-space-between">
                            <h2 class="big l10n">Results</h2>
                            <div class="step-buttons">
                                <button class="round-large grey" onclick="Carousel.prev('#results-carousel')">
                                    <?php icon('arrow-left') ?>
                                </button>
                                <button class="round-large grey" onclick="Carousel.next('#results-carousel')">
                                    <?php icon('arrow-right') ?>
                                </button>
                            </div>
                        </div>
                        <div class="carousel" id="results-carousel">
                            <div class="slide l10n">
                                <?php
                                $before = 'images/results/acne-before.webp';
                                $after = 'images/results/acne-after.webp';
                                $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                ?>
                            </div>
                            <div class="slide l10n">
                                <?php
                                $before = 'images/results/rosacea-before.webp';
                                $after = 'images/results/rosacea-after.webp';
                                $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                ?>
                            </div>
                            <div class="slide l10n">
                                <?php
                                $before = 'images/results/comedones-before.webp';
                                $after = 'images/results/comedones-after.webp';
                                $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                                ?>
                            </div>
                        </div>
                        <a class="button outline l10n" href="results">View all treatment results</a>
                    </section>
                    <section id="reviews">
                        <div class="flex-row align-end justify-space-between">
                            <h2 class="big l10n">Reviews</h2>
                            <div class="flex-row is-hidden-mobile">
                                <div class="step-buttons">
                                    <button class="round-large grey" onclick="Carousel.prev('#reviews-carousel')">
                                        <?php icon('arrow-left') ?>
                                    </button>
                                    <button class="round-large grey" onclick="Carousel.next('#reviews-carousel')">
                                        <?php icon('arrow-right') ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="reviews">View all reviews</a>
                    </section>
                    <section id="faq">
                        <h2 class="big l10n">Questions & answers</h2>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="faq">View all questions</a>
                    </section>
                    <section id="skin-guide">
                        <h2 class="big l10n">Skin guide</h2>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="skin-guide">View all articles</a>
                    </section>
                    <section id="specialists">
                        <h2 class="big l10n">Our specialists</h2>
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                        ?>
                        <a class="mt-xl button outline expand auto-width l10n" href="specialists">View all specialists</a>
                    </section>
                </div>
                <section id="brands">
                    <h2 class="big l10n">Brands we use</h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                    <a class="mt-xl button outline expand auto-width l10n" href="brands">View all brands</a>
                </section>
            </div>
        </main>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
        <!-- Floater image logic -->
        <script src="problems/problem.js"></script>
</body>

</html>