<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Gift cards</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Default imports (metadata, fonts, google analytics etc) -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/gift-cards/gift-cards.css">
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
                    <h1 class="l10n">Gift cards</h1>
                    <p class="l10n">Buy gift card and give as a gift to someone you care about. Gift cards are valid for all procedures in all our clinics and are valid for 1 year from the date of receipt.</p>
                    <div class="button b200 expand" onclick="document.querySelector('#steps').scrollIntoView()">Order a gift card</div>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="gift-cards/small.webp">
                        <source media="(min-width: 800px)" srcset="gift-cards/large.webp">
                        <img src="gift-cards/small.webp" alt="About us" width="360" height="274" />
                    </picture>
                </section>
                <section id="steps">
                    <div class="is-hidden-desktop">
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">01</div>
                                <h2 class="l10n">Swish money</h2>
                            </div>
                            <div class="gc-text l10n">Send us any amount you want to put on the gift card or buy some procedure.</div>
                            <hr />
                            <div id="swish-title">
                                <?php icon('swish-24') ?>
                                <span class="l10n">Our swish number</span>
                            </div>
                            <div id="swish-number-button">
                                <span>123 618 05 41</span>
                                <div id="swish-number-copy">
                                    <span class="l10n">Copy</span>
                                    <?php icon('copy') ?>
                                </div>
                            </div>
                            <a href="swish://paymentrequest?token=blablabla&callbackurl=https%3A%2F%2Facnespecialisten.com%2Fgift-cards%3Fpaid%3D1" class="button outline expand l10n">Open Swish app</a>
                        </div>
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <h2 class="l10n">Confirmation</h2>
                            </div>
                            <div class="gc-text l10n">Fill in your info and attach a screenshot with payment details.</div>
                        </div>
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">03</div>
                                <h2 class="l10n">Get your gift card</h2>
                            </div>
                            <div class="gc-text l10n">We will send you an electronic version of the gift card on your email and, if you wish, a physical gift card to your address, usually it takes up to 2 days.</div>
                        </div>
                    </div>
                    <div class="is-hidden-touch">



                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">01</div>
                                <div class="gc-texts">
                                    <h2 class="l10n">Swish money</h2>
                                    <div class="l10n">Send us any amount you want to put on the gift card or buy some procedure.</div>
                                </div>
                                <div class="gc-info" id="swish-info">
                                    <?php icon('swish-24') ?>
                                    <a href="swish://paymentrequest?token=blablabla&callbackurl=https%3A%2F%2Facnespecialisten.com%2Fgift-cards%3Fpaid%3D1">123 618 05 41</a>
                                </div>
                            </div>
                        </div>
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">02</div>
                                <h2 class="l10n">Confirmation</h2>
                            </div>
                            <div class="gc-text l10n">Fill in your info and attach a screenshot with payment details.</div>
                        </div>
                        <div class="gift-card-step">
                            <div class="flex-row align-center">
                                <div class="gc-number">03</div>
                                <h2 class="l10n">Get your gift card</h2>
                            </div>
                            <div class="gc-text l10n">We will send you an electronic version of the gift card on your email and, if you wish, a physical gift card to your address, usually it takes up to 2 days.</div>
                        </div>



                    </div>
                </section>
                <section id="flyers">
                    <p>hello</p>
                </section>
            </div>
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
                        <a href="reviews" class="ml-l button compact text">
                            <span class="l10n">View all reviews</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="reviews">View all reviews</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Questions & answers</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all questions</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq">View all questions</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="skin-guide">View all articles</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Our specialists</h2>
                    <a href="specialists" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all specialists</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialists">View all specialists</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Brands we use</div>
                    <a href="brands" class="button compact text is-hidden-mobile">
                        <span class="l10n">View all brands</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>