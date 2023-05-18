<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('models.php');

$nav_buttons = array(
    'about' => 'Overview',
    'types' => 'Types',
);

$categories = array(
    new ConsultationCategory(
        id: 'problem-skin-consultation',
        name: 'Problem skin consultation',
        description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth.',
        types: array(
            new ConsultationType(
                title: 'Acne',
                subtitle: 'Also called acne scars',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'hudkonsultation'
            ),
            new ConsultationType(
                title: 'Acne scars',
                subtitle: 'Also called acne',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'hudkonsultation'
            ),
            new ConsultationType(
                title: 'Comedones',
                subtitle: 'Also called scars stains',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'hudkonsultation'
            ),
        ),
        button_label: 'View problems list',
    ),
    new ConsultationCategory(
        id: 'service-consultation',
        name: 'Service consultation',
        description: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth.',
        types: array(
            new ConsultationType(
                title: 'Problem skin facials',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'hudkonsultation'
            ),
            new ConsultationType(
                title: 'Classic facials',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'hudkonsultation'
            ),
            new ConsultationType(
                title: 'Microneedling',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'hudkonsultation'
            ),
        ),
        button_label: 'View problems list',
    )
);

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title class="l10n">Acnespecialisten | Hudkonsultation</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudkonsultation/consultation.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only transition" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('images/problems/carousel/large/acne-scars.jpg')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h600 l10n">Gratis konsultation</h2>
                        <h3 class="mt-m h200 l10n">Duration: 20 min</h3>
                        <p class="mt-m p200 l10n">Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.</p>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="hudkonsultation" class="button white expand l10n">Book a clinict visit</a>
                                </div>
                                <div class="column">
                                    <a href="https://bokadirekt.se" class="button white expand l10n">Book an online call</a>
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
                    <h1 class="h600 l10n">Gratis hudkonsultation</h1>
                    <h3 class="mt-xs h200 l10n">Duration: 20 min</h3>
                    <p class="mt-xs p200">Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.</p>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="hudkonsultation" class="button b200 white expand l10n">Book a clinic visit</a>
                            </div>
                            <div class="column is-half">
                                <a href="https://bokadirekt.se" class="button b200 white expand l10n">Book an online call</a>
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
                        <div class="column is-half flex-row justify-end">
                            <div class="mt-xl">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600 l10n">Gratis hudkonsultation</h1>
                        <h3 class="mt-s h200 l10n">Duration: 20 min</h3>
                        <p class="mt-s p200 l10n">Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat.</p>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="hudkonsultation" class="button b200 white l10n">Book a clinic visit</a>
                            <a href="https://bokadirekt.se" class="button b200 white l10n">Book an online call</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="is-hidden-desktop mt-s mb-s">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="is-hidden-desktop">
                    <img src="https://via.placeholder.com/358x274.webp" alt="Akne" title="Akne" width="358" height="274" />
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about" class="large-margin">
                    <h2 class="h500 l10n">What is skin consultation?</h2>
                    <picture>
                        <source media="(max-width: 799px)" srcset="https://via.placeholder.com/358x272.webp">
                        <source media="(min-width: 800px)" srcset="https://via.placeholder.com/872x456.webp">
                        <img src="https://via.placeholder.com/358x272.webp" alt="What is skin consultation?" title="What is skin consultation?" width="358" height="272" />
                    </picture>
                    <div class="infobox">
                        <div class="ib-header" onclick="Consultation.toggleContent(this.parentElement)">
                            <div class="l10n">The consultation is absolutely free, if you have not missed the scheduled visit.</div>
                            <?php icon('add'); ?>
                        </div>
                        <div class="ib-content is-hidden">
                            <p class="p200 l10n">More consultation info here ...</p>
                        </div>
                    </div>
                    <div class="mt-xl l10n">
                        This is a treatment adapted for acne skin and <a>pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the <a>acne treatment</a>, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.
                    </div>
                    <div class="mt-xl l10n">
                        This is a treatment adapted for acne skin and <a>pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.
                    </div>
                </section>
                <section id="types" class="large-margin">
                    <h2 class="h500 mb-xs l10n">Consultation types</h2>
                    <hr class="is-hidden-desktop" />
                    <?php foreach ($categories as $category) { ?>
                        <?php include('widgets/consultation_category/consultation_category.php') ?>
                        <hr class="is-hidden-desktop" />
                    <?php } ?>
                </section>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
                <section id="reviews" class="large-margin">
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se">View all reviews</a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n">Questions & answers</h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq">View all questions</a>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide">View all articles</a>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister">View all specialists</a>
                </section>
            </div>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Brands we use</h2>
                    <a href="brands" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
    <script src="hudkonsultation/widgets/consultation_category/consultation_category.js"></script>
    <script src="hudkonsultation/consultation.js"></script>
</body>

</html>