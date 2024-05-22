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
                        IPL mot acne är egentligen en laserbehandling som utförs med koldioxidlaser. Denna teknik använder högintensivt ljus för att penetrera huden och rikta sig mot problemområden som överaktiva talgkörtlar och acneframkallande bakterier. Koldioxidlasern hjälper till att minska talgproduktionen, döda bakterier och reducera inflammation, vilket leder till en renare och klarare hud. Behandlingen stimulerar även kollagenproduktionen, vilket förbättrar hudens struktur och minskar ärrbildning. Behandlingen är effektiv och ger långvariga resultat med minimal återhämtningstid, vilket gör den till ett populärt val för acnebehandling.
                    </p>

                    <h2>Subtitle #7</h2>
                    <p>
                        For the first time ever, fans from around the world can explore the faraway lands of their favorite holiday films with an exclusive overnight stay at the original Hobbiton™ Movie Set. Russell Alexander is inviting guests
                        to his family’s property to live like Bilbo Baggins and retreat to The Shire™ for an overnight stay at Hobbiton, as featured in the famed The Lord of the Rings and The Hobbit film trilogies.
                    </p>
                    <p>
                        Nestled in the picturesque pastures of New Zealand’s Waikato region on a 2,500 acre working farm, the property’s rolling, green hills – bear a striking similarity to The Shire™ as described by J. R. R. Tolkien in The
                        Lord of the Rings, and captivated Sir Peter Jackson’s movie scouts more than two decades ago. The team quickly realized the Hobbits had found their home – and this holiday season, it could be yours.
                    </p>


                    <div class="mt-xl">
                        <div class="columns is-2 is-variable is-multiline">
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Hyperpigmentation" title="Hyperpigmentation" width="102" height="102" />
                                        <div>
                                            <div class="pc-title">Post inflammatory hyperpigmentation</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="problem/akne" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="problem/akne" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Cystic acne" title="Cystic acne" width="102" height="102">
                                        <div>
                                            <div class="pc-title">Cystic acne</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="problem/akne" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="problem/akne" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Hyperpigmentation" title="Hyperpigmentation" width="102" height="102">
                                        <div>
                                            <div class="pc-title">Post inflammatory hyperpigmentation</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="problem/akne" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="problem/akne" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="problem-card">
                                    <div class="pc-details">
                                        <img src="https://via.placeholder.com/102x102.webp" alt="Hyperpigmentation" title="Hyperpigmentation" width="102" height="102">
                                        <div>
                                            <div class="pc-title">Post inflammatory hyperpigmentation</div>
                                            <div class="pc-subtitle">Also called scars stains</div>
                                        </div>
                                    </div>
                                    <div class="pc-content">
                                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you
                                        can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                                    </div>
                                    <a href="problem/aknearr" class="is-hidden-desktop button outline expand" title="View more">View more</a>
                                    <a href="problem/aknearr" class="is-hidden-touch button compact text" title="View more">View more</a>
                                </div>
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