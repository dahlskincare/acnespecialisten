<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$path_segments = array(
    new PathSegment('Hudguide', '/hudguide/'),
    new PathSegment('IPL Acne', '/ipl-acne.php'),
);

$article = new SkinGuideArticle(
    url: 'ipl-acne.php',
    url_title: 'IPL Acne',
    title: 'IPL acne',
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

    <link rel="canonical" href="https://www.acnespecialisten.se/ipl-acne.php" />

    <title class="l10n">IPL mot acne | AcneSpecialisten</title>
    <meta name="title" content="IPL mot acne | AcneSpecialisten" class="l10n">
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
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
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
                        IPL mot acne är egentligen en laserbehandling som utförs med koldioxidlaser. Denna teknik använder högintensivt ljus för att penetrera huden och rikta sig mot problemområden som överaktiva talgkörtlar och acneframkallande bakterier. Vi behandlar både specifika områden som <a class="b200 underline color-deep-sea-400" href="/acne-ansikte.php" title="Mer information om acne på käklinjen">acne på käklinjen</a> och hela ansiktet. Koldioxidlasern hjälper till att minska talgproduktionen, döda bakterier och reducera inflammation, vilket leder till en renare och klarare hud. Behandlingen stimulerar även kollagenproduktionen, vilket förbättrar hudens struktur och minskar ärrbildning. Behandlingen är effektiv och ger långvariga resultat med minimal återhämtningstid, vilket gör den till ett populärt val för <a class="b200 underline color-deep-sea-400" href="/acnebehandling.php" title="Mer information om acne behandling">acne behandling</a>.
                    </p>

                    <h2 class="nav-anchor">Hur kommer jag igång?</h2>
                    <p>
                        För att påbörja din IPL-behandling mot acne börjar vi med en kostnadsfri konsultation. Under konsultationen kommer en erfaren hudterapeut att utvärdera din hudtyp och dina specifika hudproblem. Detta görs för att skapa en skräddarsydd behandlingsplan som är anpassad efter dina unika behov och mål. Efter en noggrann hudanalys och diskussion om dina förväntningar, kommer terapeuten att rekommendera antalet sessioner och frekvensen mellan dem för att uppnå bästa möjliga resultat. Denna plan säkerställer att behandlingen är effektiv och ger de långvariga förbättringar du önskar.
                    </p>

                    <!-- Service banners (touch) -->
                    <div class="mt-xl3 is-hidden-desktop">
                        <div class="service-banner-touch">
                            <div class="banner-info">
                                <img loading="lazy" src="/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp" width="200" height="200" alt="Laser mot hudproblem" title="Laser mot hudproblem" />
                                <div>
                                    <h4>IPL mot acne</h4>
                                    <p>30 min<span class="dot"></span>Från 2595 kr</p>
                                </div>
                            </div>
                            <p class="banner-text">
                                IPL mot acne är en effektiv laserbehandling som använder koldioxidlaser för att minska talgproduktion, döda bakterier och reducera inflammation. Behandlingen förbättrar hudens struktur och minskar ärrbildning med minimal återhämtningstid, vilket ger dig långvariga resultat.
                            </p>
                            <a class="button outline expand" href="laser-acne.php" title="Läs mer om laserbehandling">Läs mer om laserbehandling mot acne</a>
                            <hr />
                            <a class="button expand" href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne" title="Boka gratis konsultation">Boka konsultation</a>
                            <a class="mt-s button expand" href="https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Acne" title="Boka behandling">Boka behandling</a>
                        </div>
                    </div>

                    <!-- Service banners (desktop) -->
                    <div class="mt-xl3 is-hidden-touch">
                        <div class="service-banner-desktop">
                            <div>
                                <img loading="lazy" src="/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp" width="200" height="200" alt="Consultation" title="Consultation" />
                            </div>
                            <div class="banner-info">
                                <h4>IPL mot acne</h4>
                                <p class="banner-price">30 min<span class="dot"></span>Från 2595 kr</p>
                                <div>
                                    <p class="banner-text">IPL mot acne är en effektiv laserbehandling som använder koldioxidlaser för att minska talgproduktion, döda bakterier och reducera inflammation. Behandlingen förbättrar hudens struktur och minskar ärrbildning med minimal återhämtningstid, vilket ger dig långvariga resultat.</p>
                                    <a class="button text b200" href="laser-acne.php" title="Läs mer om laserbehandling">Läs mer om laserbehandling</a>
                                </div>
                            </div>
                            <div class="banner-buttons">
                                <a class="button expand" href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne" title="Boka gratis konsultation">Boka konsultation</a>
                                <a class="button expand" href="https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Acne" title="Boka behandling">Boka behandling</a>
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
                    <a href="hudterapeut/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="hudterapeut/" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
            </section>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Varumärken</div>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="hudguide/category/subcategory/article/article.js"></script>
</body>

</html>