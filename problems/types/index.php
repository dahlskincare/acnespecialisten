<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
?>


<?php
$image_small = 'https://via.placeholder.com/358x274.jpg';
$image_large = 'https://via.placeholder.com/424x456.jpg';

$problem_name = 'Acne scars';
$header_title = 'Different type of acne scars';
$header_description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
$booking_url = '';
$about_title = 'What is acne scar types?';
$about_description = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="mt-m p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$based_type_categories = array(
    new BasedTypeCategory(
        '',
        'Based on age',
        '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        array(
            new BasedType('adult-acne', 'https://via.placeholder.com/102x102.jpg', 'Adult acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('teen-acne', 'https://via.placeholder.com/102x102.jpg', 'Teen acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('kids-acne', 'https://via.placeholder.com/102x102.jpg', 'Kids acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>')
        )
    ),
    new BasedTypeCategory(
        'category-severity',
        'Based on severity',
        '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        array(
            new BasedType('comedones', 'https://via.placeholder.com/102x102.jpg', 'Comedones', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('pimples', 'https://via.placeholder.com/102x102.jpg', 'Pimples', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('cystic-acne', 'https://via.placeholder.com/102x102.jpg', 'Cystic acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('acne-conblogata', 'https://via.placeholder.com/102x102.jpg', 'Acne conblogata', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>')
        )
    ),
    new BasedTypeCategory(
        'category-reason',
        'Based on reason',
        '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        array(
            new BasedType('mallorca-acne', 'https://via.placeholder.com/102x102.jpg', 'Mallorca acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('hormonal-acne', 'https://via.placeholder.com/102x102.jpg', 'Hormonal acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('cosmetic-acne', 'https://via.placeholder.com/102x102.jpg', 'Cosmetic acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('acne-exoriee', 'https://via.placeholder.com/102x102.jpg', 'Acne exoriee', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('acne-mechanics', 'https://via.placeholder.com/102x102.jpg', 'Acne mechanics', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('acne-medicamentosa', 'https://via.placeholder.com/102x102.jpg', 'Acne medicamentosa', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('fungal-acne', 'https://via.placeholder.com/102x102.jpg', 'Fungal acne', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>')
        )
    ),
    new BasedTypeCategory(
        'category-area',
        'Based on area',
        '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        array(
            new BasedType('acne-on-face', 'https://via.placeholder.com/102x102.jpg', 'Acne on face', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'),
            new BasedType('acne-on-body', 'https://via.placeholder.com/102x102.jpg', 'Acne on body', 'Also called scars stains', '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>')
        )
    )
);

$specialists = array(
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-1.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-2.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-3.jpg'),
    new Specialist('Anette Black', 'Skincare specialist since 2010', 'images/specialists/small/specialist-1.jpg', 'images/specialists/large/specialist-4.jpg'),
);

?>


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
    <link rel="stylesheet" href="problems/types/index.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
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
            <div id="green-header-small" class="is-hidden-tablet">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600">
                        <?php echo $header_title ?>
                    </h1>
                    <p class="mt-m">
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
                    <div class="mt-xl">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-mobile">
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
                <section id="image" class="mt-xl is-hidden-desktop">
                    <picture class="is-hidden-tablet">
                        <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                        <img src="<?php echo $image_large ?>" alt="<?php echo $header_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <a href="javascript:;" onclick="scrollToElement('#about')" class="button b50 grey l10n">Overview</a>
                    <a href="javascript:;" onclick="scrollToElement('.based')" class="button b50 grey l10n">Define problem</a>
                    <a href="javascript:;" onclick="scrollToElement('#approach')" class="button b50 grey l10n">Treatment approach</a>
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
                <?php foreach ($based_type_categories as $category) { ?>
                    <section class="based">
                        <h2 class="h500"><?php echo $category->title ?></h2>
                        <div class="mt-xs mb-xs"><?php echo $category->content ?></div>
                        <div class="columns is-3 is-variable is-multiline">
                            <?php foreach ($category->types as $type) { ?>
                                <div class="column is-half">
                                    <?php include('widgets/type-card/type-card.php') ?>
                                </div>
                            <?php } ?>
                        </div>
                    </section>
                <?php } ?>
                <section id="approach">
                    <h2 class="h500 l10n">Treatment approach</h2>
                    <?php
                    $approach_cards = array(
                        new ApproachCard('01', 'Define', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'Get a free consultation', 'https://www.dahlskincare.com/skin-consultation'),
                        new ApproachCard('02', 'Treat', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'View treatments', 'treatments'),
                        new ApproachCard('03', 'Prevent', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'View products', 'products'),
                        new ApproachCard('04', 'Repair', 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.', 'View treatments', 'treatments')
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
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/acne">aknebehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                        <div class="slide l10n">
                            <?php
                            $before = 'images/results/rosacea-before.webp';
                            $after = 'images/results/rosacea-after.webp';
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/rosacea">rosaceabehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                        <div class="slide l10n">
                            <?php
                            $before = 'images/results/comedones-before.webp';
                            $after = 'images/results/comedones-after.webp';
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/comedones">pormaskbehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                    <a class="button outline expand auto-width l10n" href="results">View all treatment results</a>
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
                    <a href="questions" class="mt-xl button outline expand auto-width l10n">View all questions</a>
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
                <section id="brands">
                    <h2 class="big l10n">Brands we use</h2>
                    <a class="mt-xl button outline expand auto-width l10n" href="brands">View all brands</a>
                </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <!-- Floater image logic -->
    <script src="problems/problem.js"></script>
</body>

</html>