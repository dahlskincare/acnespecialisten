<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$article = new SkinGuideArticle(
    url: 'ipl-acne.php',
    url_title: 'IPL Acne',
    title: 'IPL Acne',
    subtitle: 'Här förklarar vi mer om IPL mot acne med hjälp av laser.',
    problem: 'IPL Acne',
    description: "Här förklarar vi mer om IPL mot acne med hjälp av laser.",
    image_small: 'bilder/hudguide/426x324/ipl-acne.jpg',
    image_large: 'bilder/hudguide/872x456/ipl-acne.jpg',
    image_alt: 'IPL Acnen',
    image_title: 'IPL Acne',
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title class="l10n">IPL mot Acne | AcneSpecialisten</title>
    <meta name="title" content="IPL mot Acne | AcneSpecialisten" class="l10n">
    <meta name="description" content="Läs mer om IPL mot acne med laser. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan →" class="l10n">
    <meta name="keywords" content="ipl acne" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudguide/category/subcategory/article/article.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <div class="container">
                <div class="flex-row justify-space-between">
                    <div class="is-hidden-touch">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </div>
            </div>
        </section>
        <div class="container">
            <section id="desktop-breadcrumbs" class="is-hidden-desktop">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
            </section>
            <div id="article-wrapper">
                <section id="metadata">
                    <h1 id="article-title"><?php echo $article->title ?></h1>
                    <h3 id="article-subtitle"><?php echo $article->subtitle ?></h3>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $article->image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $article->image_large ?>">
                        <img src="<?php echo $article->image_small ?>" alt="<?php echo $article->title ?>" title="<?php echo $article->title ?>" width="360" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons" class="is-hidden">
                    <div id="nav-buttons-container">
                        <div class="scroll-button is-hidden" id="scroll-prev">
                            <button class="round-medium grey">
                                <?php icon('arrow-left') ?>
                            </button>
                        </div>
                        <div class="scroll-button is-hidden" id="scroll-next">
                            <button class="round-medium grey">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <div id="nav-buttons-scroller">
                            <div class="flex-row">
                            </div>
                        </div>
                    </div>
                </section>
                <section id="content">
                    <h2 class="nav-anchor">Översikt</h2>
                    <h3>Vad är IPL mot acne?</h3>
                    <p>
                        Acnemedicinen roaccutan tillhör en grupp av läkemedel som kallas för retinoider. Preparatet har flera benämningar såsom accutane och roaccutane på engelska, och det är inte ovanligt att det kallas roccutan eller roacutan på Svenska. De är besläktade med A-vitamin, ett vitamin som du bär på naturligt och är därför viktigt för både huden och kroppen i viss mängd. Läkemedlet roaccutan används främst vid mycket svår acne och är ett av de få läkemedel som faktiskt visat sig ha effekt på acnebenägen hy. Det lanserades av Hoffman-La Roche under 1980-talet.
                    </p>
                    <p>
                        En behandling pågår normalt mellan 16 och 24 veckor. Medicinen är paketerad i form av röd-bruna gelatinkapslar eller tabletter som du äter dagligen. Roaccutan är inte receptfritt utan skrivs ut av legitimerade läkare under särskilda förhållanden.
                    </p>

                    <h2 class="nav-anchor">Hur kommer jag igång?</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>

                    <!-- Service banners (touch) -->
                    <div class="mt-xl3 is-hidden-desktop">
                        <div class="service-banner-touch">
                            <div class="banner-info">
                                <img src="/bilder/hudbehandlingar/200x200/konsultation.webp" width="200" height="200" alt="Konsultation" title="Konsultation" />
                                <div>
                                    <h4>Gratis Hudkonsultation</h4>
                                    <p>20 min<span class="dot"></span>Gratis</p>
                                </div>
                            </div>
                            <p class="banner-text">
                                This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...
                            </p>
                            <a class="button outline expand" href="" title="View more about consultation">View more about consultation</a>
                            <hr />
                            <a class="button expand" href="https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne" title="Get a free consultation">Get a free consultation</a>
                        </div>
                        <div class="service-banner-touch">
                            <div class="banner-info">
                                <img src="/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                                <div>
                                    <h4>IPL for acne</h4>
                                    <p>30 min<span class="dot"></span>From 1295 kr</p>
                                </div>
                            </div>
                            <p class="banner-text">
                                This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...
                            </p>
                            <a class="button outline expand" href="" title="View more about service">View more about service</a>
                            <hr />
                            <a class="button expand" href="https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne" title="Get a free consultation">Get a free consultation</a>
                            <a class="mt-s button expand" href="https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne" title="Book a treatment">Boka behandling</a>
                        </div>
                    </div>

                    <!-- Service banners (desktop) -->
                    <div class="mt-xl3 is-hidden-touch">
                        <div class="service-banner-desktop">
                            <div>
                                <img src="/bilder/hudbehandlingar/200x200/konsultation.webp" width="200" height="200" alt="Konsultation" title="Konsultation" />
                            </div>
                            <div class="banner-info">
                                <h4>Consultation</h4>
                                <p class="banner-price">15 min<span class="dot"></span>Free</p>
                                <div>
                                    <p class="banner-text">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...</p>
                                    <a class="button text b200" href="services/acne-treatment" title="View more about consultation">View more about consultation</a>
                                </div>
                            </div>
                            <div class="banner-buttons">
                                <a class="button expand" href="https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne" title="Get a free consultation">Get a free consultation</a>
                            </div>
                        </div>
                        <div class="service-banner-desktop">
                            <div>
                                <img src="/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                            </div>
                            <div class="banner-info">
                                <h4>IPL for acne</h4>
                                <p class="banner-price">30 - 60 min<span class="dot"></span>Price from 1925 kr</p>
                                <div>
                                    <p class="banner-text">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin...</p>
                                    <a class="button text b200" href="services/acne-treatment" title="View more about service">View more about service</a>
                                </div>
                            </div>
                            <div class="banner-buttons">
                                <a class="button expand" href="https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne" title="Get a free consultation">Get a free consultation</a>
                                <a class="button expand" href="https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne" title="Book a treatment">Boka behandling</a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <section class="large-margin" id="cta-banner">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="gratis-hudkonsultation.php" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Frågor & svar</div>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Våra hudterapeuter</div>
                    <a href="hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="hudterapeut" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Varumärken</div>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="hudguide/category/subcategory/article/article.js"></script>
</body>

</html>