<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');
?>


<?php
$image_small = 'https://via.placeholder.com/358x274.jpg';
$image_large = 'https://via.placeholder.com/424x456.jpg';
$nav_buttons = array(
    'about' => 'Overview',
    'define' => 'Define problem',
    'approach' => 'Treatment approach',
    'results' => 'Cases',
    'reviews' => 'Reviews',
    'faq' => 'FAQ',
    'skin-guide' => 'Skin guide',
    'specialists' => 'Specialists',
    'brands' => 'Brands'
);

$problem_name = 'Acne scars';
$header_title = 'Different type of acne scars';
$header_description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.';
$about_title = 'What is acne scar types?';
$about_description = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="mt-m p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$based_type_categories = array(
    new BasedTypeCategory(
        title: 'Based on age',
        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        types: array(
            new BasedType(
                url: 'problem/akne/typer/vuxenakne',
                url_title: 'Vuxenakne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Vuxenakne',
                image_title: 'Vuxenakne',
                title: 'Vuxenakne',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/teen-acne',
                url_title: 'Teen acne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Teen acne',
                image_title: 'Teen acne',
                title: 'Teen acne',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/barnakne',
                url_title: 'Kids acne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Kids acne',
                image_title: 'Kids acne',
                title: 'Kids acne',
                subtitle: 'Also called scars stains',
            ),
        )
    ),
    new BasedTypeCategory(
        title: 'Based on severity',
        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        types: array(
            new BasedType(
                url: 'problem/akne/typer/pormaskar',
                url_title: 'Comedones',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Comedones',
                image_title: 'Comedones',
                title: 'Comedones',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/pimples',
                url_title: 'Pimples',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Pimples',
                image_title: 'Pimples',
                title: 'Pimples',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/cystic-acne',
                url_title: 'Cystic acne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Cystic acne',
                image_title: 'Cystic acne',
                title: 'Cystic acne',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/acne-conblogata',
                url_title: 'Acne conblogata',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Acne conblogata',
                image_title: 'Acne conblogata',
                title: 'Acne conblogata',
                subtitle: 'Also called scars stains',
            )
        )
    ),
    new BasedTypeCategory(
        title: 'Based on reason',
        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        types: array(
            new BasedType(
                url: 'problem/akne/typer/mallorca-acne',
                url_title: 'Mallorca acne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Mallorca acne',
                image_title: 'Mallorca acne',
                title: 'Mallorca acne',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/hormonal-acne',
                url_title: 'Hormonal acne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Hormonal acne',
                image_title: 'Hormonal acne',
                title: 'Hormonal acne',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/cosmetic-acne',
                url_title: 'Cosmetic acne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Cosmetic acne',
                image_title: 'Cosmetic acne',
                title: 'Cosmetic acne',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/acne-exoriee',
                url_title: 'Acne exoriee',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Acne exoriee',
                image_title: 'Acne exoriee',
                title: 'Acne exoriee',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/acne-mechanics',
                url_title: 'Acne mechanics',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Acne mechanics',
                image_title: 'Acne mechanics',
                title: 'Acne mechanics',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/acne-medicamentosa',
                url_title: 'Acne medicamentosa',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Acne medicamentosa',
                image_title: 'Acne medicamentosa',
                title: 'Acne medicamentosa',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/fungal-acne',
                url_title: 'Fungal acne',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Fungal acne',
                image_title: 'Fungal acne',
                title: 'Fungal acne',
                subtitle: 'Also called scars stains',
            )
        )
    ),
    new BasedTypeCategory(
        title: 'Based on area',
        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
        types: array(
            new BasedType(
                url: 'problem/akne/typer/acne-on-face',
                url_title: 'Acne on face',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Acne on face',
                image_title: 'Acne on face',
                title: 'Acne on face',
                subtitle: 'Also called scars stains',
            ),
            new BasedType(
                url: 'problem/akne/typer/acne-on-body',
                url_title: 'Acne on body',
                image_url: 'https://via.placeholder.com/102x102.jpg',
                image_alt: 'Acne on body',
                image_title: 'Acne on body',
                title: 'Acne on body',
                subtitle: 'Also called scars stains',
            )
        )
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
    <link rel="stylesheet" href="problem/types.css">
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
                        <h1 class="h600">
                            <?php echo $header_title ?>
                        </h1>
                        <p class="mt-s p200">
                            <?php echo $header_description ?>
                        </p>
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
                <section id="badges" class="mt-m is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="mt-m is-hidden-desktop">
                    <picture class="is-hidden-tablet">
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
                <div id="define">
                    <?php foreach ($based_type_categories as $category) { ?>
                        <section class="based">
                            <h2 class="h500"><?php echo $category->title ?></h2>
                            <div class="mt-xs mb-xs"><?php echo $category->content ?></div>
                            <div class="columns is-3 is-variable is-multiline">
                                <?php foreach ($category->types as $type) { ?>
                                    <div class="column is-half">
                                        <?php include('../../widgets/my-type-card/type-card.php') ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>
                    <?php } ?>
                </div>
                <section id="approach">
                    <h2 class="h500 l10n">Treatment approach</h2>
                    <?php
                    $approach_cards = array(
                        new ApproachCard(
                            number: '01',
                            title: 'Define',
                            content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.',
                            button_label: 'Get a free consultation',
                            button_url: 'gratis-hudkonsultation'
                        ),
                        new ApproachCard(
                            number: '02',
                            title: 'Treat',
                            content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.',
                            button_label: 'View treatments',
                            button_url: 'treatments'
                        ),
                        new ApproachCard(
                            number: '03',
                            title: 'Prevent',
                            content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.',
                            button_label: 'View products',
                            button_url: 'products'
                        ),
                        new ApproachCard(
                            number: '04',
                            title: 'Repair',
                            content: 'In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.',
                            button_label: 'View treatments',
                            button_url: 'treatments'
                        )
                    );
                    ?>
                    <div class="columns is-gapless">
                        <?php foreach ($approach_cards as $approach_card) { ?>
                            <div class="column">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/approach_card/approach_card.php') ?>
                            </div>
                        <?php } ?>
                    </div>
                    <a href="metod" class="auto-width button outline expand mt-xl l10n">
                        Read more about our approach
                    </a>
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
                    <a class="mt-xl button outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews">View all reviews</a>
                </section>
                <section id="faq">
                    <h2 class="big l10n">Questions & answers</h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a href="fragor-svar.php" class="mt-xl button outline expand auto-width l10n" title="View all questions">View all questions</a>
                </section>
                <section id="skin-guide">
                    <h2 class="big l10n">Skin guide</h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                    <a class="mt-xl button outline expand auto-width l10n" href="skin-guide" title="View all articles">View all articles</a>
                </section>
                <section id="specialists">
                    <h2 class="big l10n">Our specialists</h2>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button outline expand auto-width l10n" href="specialister" title="View all specialists">View all specialists</a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Brands we use</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>