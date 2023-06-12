<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | About</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/om-oss/about.css">
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
                    <h1 class="h600 l10n">About us</h1>
                    <p class="p200 l10n">At Acnespecialisten there is an experienced and well-educated group of doctors with specialist skills and broad experience from the aesthetic and reconstructive industry.</p>
                </section>
                <section id="plant">
                    <picture>
                        <source media="(max-width: 799px)" srcset="om-oss/images/about-plant.jpg">
                        <source media="(min-width: 800px)" srcset="om-oss/images/about-plant-large.jpg">
                        <img src="images/about/about-plant.jpg" alt="About us" title="About us" width="360" height="274" />
                    </picture>
                </section>
                <section id="segments" class="large-margin">
                    <h2 class="h500 mb-l is-hidden-tablet l10n">What does our three-step method entail?</h2>
                    <div id="segments-flex">
                        <div id="s-first-two">
                            <div id="s-first-two-text" class="is-hidden-mobile">
                                <h2 class="h500 l10n">What does our three-step method entail?</h2>
                                <p class="p200 l10n">Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments.</p>
                            </div>
                            <div id="s-first-images">
                                <picture>
                                    <source media="(max-width: 799px)" srcset="om-oss/images/segments-left.jpg">
                                    <source media="(min-width: 800px)" srcset="om-oss/images/segments-left-large.jpg">
                                    <img src="images/about/segments-left.jpg" alt="Salon 1" title="Salon 1" width="114" height="214" />
                                </picture>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="om-oss/images/segments-mid.jpg">
                                    <source media="(min-width: 800px)" srcset="om-oss/images/segments-mid-large.jpg">
                                    <img src="images/about/segments-mid.jpg" alt="Salon 2" title="Salon 2" width="114" height="157" />
                                </picture>
                            </div>
                        </div>
                        <div id="s-last">
                            <picture>
                                <source media="(max-width: 799px)" srcset="om-oss/images/segments-right.jpg">
                                <source media="(min-width: 800px)" srcset="om-oss/images/segments-right-large.jpg">
                                <img src="images/about/segments-right.jpg" alt="Salon 3" title="Salon 3" width="114" height="272" />
                            </picture>
                        </div>
                    </div>
                    <p class="mt-xl p200 is-hidden-tablet l10n">Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments.</p>
                </section>
                <section id="hands" class="large-margin">
                    <h2 class="h500 l10n">We are aiming for the goal!</h2>
                    <p class="mt-m p200 l10n is-hidden-mobile">Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.</p>
                    <picture>
                        <source media="(max-width: 799px)" srcset="om-oss/images/about-hands.jpg">
                        <source media="(min-width: 800px)" srcset="om-oss/images/about-hands-large.jpg">
                        <img src="images/about/about-hands.jpg" alt="Aiming for the goal" title="Aiming for the goal" width="358" height="274" />
                    </picture>
                    <p class="p200 mt-xl l10n is-hidden-tablet">Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.</p>
                </section>
                <section id="bullets" class="large-margin">
                    <div class="columns">
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('star') ?>
                                <h3 class="h200 ml-s l10n">Unique solution</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified.
                            </p>
                        </div>
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('star') ?>
                                <h3 class="h200 ml-s l10n">25 years</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified.
                            </p>
                        </div>
                        <div class="column">
                            <div class="flex-row align-center">
                                <?php icon('star') ?>
                                <h3 class="h200 ml-s l10n">Unique solution</h3>
                            </div>
                            <p class="bullet-desc l10n">
                                In a personal meeting with a skin specialist, your skin type is examined and identified.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="poster large-margin" id="poster-left">
                    <h2 class="h500 l10n is-hidden-desktop">What does our three-step method entail?</h2>
                    <div class="flex-row align-center">
                        <div>
                            <picture>
                                <source media="(max-width: 799px)" srcset="om-oss/images/about-drip.jpg">
                                <source media="(min-width: 800px)" srcset="om-oss/images/about-drip-large.jpg">
                                <img src="images/about/about-drip.jpg" alt="Method" title="Method" width="358" height="272" />
                            </picture>
                        </div>
                        <div class="is-hidden-touch">
                            <h2 class="h500 l10n">What does our three-step method entail?</h2>
                            <p class="p200 l10n">
                                Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.
                            </p>
                        </div>
                    </div>
                    <p class="p200 l10n is-hidden-desktop">
                        Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.
                    </p>
                </section>
                <section class="poster large-margin" id="poster-right">
                    <h2 class="h500 l10n is-hidden-desktop">We are aiming for the goal!</h2>
                    <div class="flex-row align-center">
                        <div class="is-hidden-touch">
                            <h2 class="h500 l10n">We are aiming for the goal!</h2>
                            <p class="p200 l10n">
                                Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.
                            </p>
                        </div>
                        <div>
                            <picture>
                                <source media="(max-width: 799px)" srcset="om-oss/images/about-lotion.jpg">
                                <source media="(min-width: 800px)" srcset="om-oss/images/about-lotion-large.jpg">
                                <img src="images/about/about-lotion.jpg" alt="Method" title="Method" width="358" height="272" />
                            </picture>
                        </div>
                    </div>
                    <p class="p200 l10n is-hidden-desktop">
                        Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery. Now we continue the journey with the ambition to become the Nordic region's foremost destination for medical skin care and aesthetic injection treatments. We hereby present our new department Nordiska Kliniken Hud Over the years, Acnespecialisten has established itself as one of the Nordics' foremost clinics in plastic surgery.
                    </p>
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
</body>

</html>