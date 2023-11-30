<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('models/step/step.php');

$steps = array(
    new StepModel(
        title: '01. Identifiera',
        content: "På Acnespecialisten inleder vi din hudvårdsresa med en gratis hudkonsultation. Under denna session identifierar våra experter din hudtyp och eventuella hudproblem. Denna noggranna analys är grunden för att skapa en effektiv och personligt anpassad behandlingsplan.",
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        url: 'konsultation',
        url_label: 'Boka en gratis konsultation'
    ),
    new StepModel(
        title: '02. Behandla',
        content: "Efter identifieringen av dina hudproblem, tar vi nästa steg mot att behandla dem direkt. Våra specialister använder avancerade tekniker och behandlingsmetoder för att effektivt hantera dina specifika hudproblem och uppnå synliga resultat.",
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        url: 'problem',
        url_label: 'Se våra behandlingar'
    ),
    new StepModel(
        title: '03. Förebygga',
        content: "För att säkerställa långsiktiga resultat fokuserar vi på att förebygga framtida hudproblem. Vi ger dig skräddarsydda råd och rekommenderar högkvalitativa hudvårdsprodukter som är anpassade för att skydda och upprätthålla din huds hälsa.",
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        url: 'https://dahlskincare.com',
        url_label: 'Upptäck våra produkter'
    ),
    new StepModel(
        title: '04. Reparera',
        content: "I det sista steget i vår metod tar vi hand om eventuella återstående effekter av hudproblem, såsom ärr och pigmentförändringar. Vi erbjuder behandlingar och vård för att reparera och återställa huden, och ge dig en hälsosam och strålande hy.",
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/424x526.webp',
        url: 'problem',
        url_label: 'Läs mer om eftervård'
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Vår Metod</title>
    <meta name="description" content="Upptäck Acnespecialistens unika fyrastegsmetod för effektiv hudvård. Vår metod kombinerar personlig konsultation, skräddarsydda behandlingar och kontinuerligt stöd för att nå optimala hudvårdsresultat." class="l10n">
    <meta name="title" content="Acnespecialisten - Expertis och Innovation inom Hudvård" class="l10n">
    <meta name="keywords" content="Acnespecialisten, hudvård, trestegsmetod, personlig konsultation, skräddarsydda behandlingar, hudhälsa" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/metod/method.css">
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
                    <h1 class="l10n">Ditt alternativ till hudläkare</h1>
                    <p class="l10n">Vi på Acnespecialisten har utvecklat en unik metod i fyra steg där kundens problemhy står i fokus. Vi är ditt alternativ till en hudläkare, men utan remisser och långa köer. På våra hudmottagningar arbetar vi med att identifiera problemet, behandla det och sedan hjälpa dig att bibehålla den balans som vi påbörjat arbetet med att återställa. Vi vill vara ditt enkla och självklara val mot en problemfri hy!</p>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="presentkort/small.webp">
                        <source media="(min-width: 800px)" srcset="presentkort/large.webp">
                        <img src="presentkort/small.webp" alt="Gift cards" title="Gift cards" width="360" height="274" />
                    </picture>
                </section>
                <section id="bullets">
                    <div class="columns is-variable is-3">
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">Unik helhetslösning</span>
                                </div>
                                <div class="bullet-content l10n">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">30 års erfarenhet</span>
                                </div>
                                <div class="bullet-content l10n">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="bullet">
                                <div class="bullet-label">
                                    <?php icon('star'); ?>
                                    <span class="l10n">Diplomerade hudspecialister</span>
                                </div>
                                <div class="bullet-content l10n">In a personal meeting with a skin specialist, your skin type is examined and identified.</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="steps">
                    <?php foreach ($steps as $step) {
                        include('widgets/step/step.php');
                    } ?>
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
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
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