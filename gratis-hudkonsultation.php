<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('gratis-hudkonsultation/models.php');

$nav_buttons = array(
    'about' => 'Översikt',
    'types' => 'Konsultationer',
);

$categories = array(
    new ConsultationCategory(
        id: 'problem-skin-consultation',
        name: 'Problemhy Konsultation',
        description: 'Här hittar du våra konsultationer som är anpassade för ditt hudproblem. Vi analyserar din hy och tar fram en behandlingsplan med rätt behandlingar och produkter för just din hudtyp.',
        types: array(
            new ConsultationType(
                title: 'Akne',
                subtitle: '',
                image: '',
                url: '',
                consultation_url: 'consultation-booking?problem=acneScars'
            ),
            new ConsultationType(
                title: 'Acne scars',
                subtitle: null,
                image: null,
                url: null,
                consultation_url: 'consultation-booking?problem=chemicalPeeling'
            ),
            new ConsultationType(
                title: 'Comedones',
                subtitle: 'Also called scars stains',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'consultation-booking?problem=chemicalPeeling'
            ),
        ),
        button_label: 'Se problemhy konsultationer',
    ),
    new ConsultationCategory(
        id: 'service-consultation',
        name: 'Behandlings konsultation',
        description: 'Dessa konsultationer är för dig som redan vet vilken metod du är intresserad av att höra mer och komma igång med behandlingen av huden. Vi kommer att analysera huden noga och ta fram en skräddarsydd behandlingsplan för just din hy.',
        types: array(
            new ConsultationType(
                title: 'Problem skin facials',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'consultation-booking?service=chemicalPeeling'
            ),
            new ConsultationType(
                title: 'Classic facials',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'consultation-booking?service=chemicalPeeling'
            ),
            new ConsultationType(
                title: 'Microneedling',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'consultation-booking?service=chemicalPeeling'
            ),
        ),
        button_label: 'Se behandlings listan',
    ),
    new ConsultationCategory(
        id: 'brand-consultation',
        name: 'Varumärkes konsultation',
        description: 'Våra varumärkes konsultationer är för dig som hört om ett specifikt märke eller maskin och är intresserad av att höra mer om hur den kan hjäpla dig att uppnå dina hudvårdsmål.',
        types: array(
            new ConsultationType(
                title: 'Problem skin facials',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'consultation-booking?service=chemicalPeeling'
            ),
            new ConsultationType(
                title: 'Classic facials',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'consultation-booking?service=chemicalPeeling'
            ),
            new ConsultationType(
                title: 'Microneedling',
                image: 'https://via.placeholder.com/102x102.webp',
                url: 'behandlingar/ansiktsbehandlingar-problemhy/chemical-peeling/',
                consultation_url: 'consultation-booking?service=chemicalPeeling'
            ),
        ),
        button_label: 'Se varumärkes listan',
    ),
);

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title class="l10n">Acnespecialisten | Gratis Hudkonsultation</title>
    <meta name="description" content="Upptäck fördelarna med en personlig hudkonsultation hos AcneSpecialisten. Våra erfarna hudterapeuter analyserar din hudtyp och skräddarsyr en behandlingsplan just för dig." class="l10n">
    <meta name="title" content="Gratis Hudkonsultation hos AcneSpecialisten - Din väg till en bättre hud" class="l10n">
    <meta name="keywords" content="hudkonsultation, AcneSpecialisten, gratis hudanalys, personlig hudvårdsplan, hudterapeuter, hudvård, problemhy, skräddarsydd behandling" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/gratis-hudkonsultation/consultation.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only transition" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('bilder/behandlingar/424x456//gratis-hudkonsultation.webp')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h600 l10n">Gratis hudkonsultation</h2>
                        <h3 class="mt-m h200 l10n">Längd: 20 min</h3>
                        <p class="mt-m p200 l10n">Vår kostnadsfria hudkonsultation passar alla. Vi identifierar din hudtyp och vilken problemhy du har med hjälp av vår hudanalys.</p>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="https://acnespecialisten.se/book?flow=consultation" class="button white expand l10n" title="Book a clinict visit">Boka ett klinikbesök</a>
                                </div>
                                <div class="column">
                                    <a href="https://acnespecialisten.se/book?flow=consultation" class="button white expand l10n" title="Book an online call">Boka online konsultation</a>
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
                    <h3 class="mt-xs h200 l10n">Längd: 20 min</h3>
                    <p class="mt-xs p200">Vår kostnadsfria hudkonsultation passar alla. Vi identifierar din hudtyp och vilken problemhy du har med hjälp av vår hudanalys.</p>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="https://acnespecialisten.se/book?flow=consultation" class="button b200 white expand l10n" title="Book a clinic visit">Boka ett klinikbesök</a>
                            </div>
                            <div class="column is-half">
                                <a href="https://acnespecialisten.se/book?flow=consultation" class="button b200 white expand l10n" title="Book an online call">Boka online konsultation</a>
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
                        <h3 class="mt-s h200 l10n">Längd: 20 min</h3>
                        <p class="mt-s p200 l10n">Vår kostnadsfria hudkonsultation passar alla. Vi identifierar din hudtyp och vilken problemhy du har med hjälp av vår hudanalys.</p>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="https://acnespecialisten.se/book?flow=consultation" class="button b200 white l10n" title="Book a clinic visit">Boka ett klinikbesök</a>
                            <a href="https://acnespecialisten.se/book?flow=consultation" class="button b200 white l10n" title="Book an online call">Boka online konsultation</a>
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
                    <img src="bilder/behandlingar/358x274/gratis-hudkonsultation" alt="Gratis Hudkonsultation" title="Gratis Hudkonsultation" width="358" height="274" />
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about" class="large-margin">
                    <h2 class="h500 l10n">Vad är en hudkonsultation?</h2>
                    <picture>
                        <source media="(max-width: 799px)" srcset="https://via.placeholder.com/358x272.webp">
                        <source media="(min-width: 800px)" srcset="https://via.placeholder.com/872x456.webp">
                        <img src="https://via.placeholder.com/358x272.webp" alt="What is skin consultation?" title="What is skin consultation?" width="358" height="272" />
                    </picture>
                    <div class="infobox">
                        <div class="ib-header" onclick="Consultation.toggleContent(this.parentElement)">
                            <div class="l10n">Vi erbjuder alltid gratis hudkonsultation! (Värde 600 kronor)</div>
                            <?php icon('add'); ?>
                        </div>
                        <div class="ib-content zero-size">
                            <p class="p200 l10n">Våra konsultationer är gratis om man kommer på det bokade besöket. Vid uteblivet besök som inte avbokas senast 24 timmar innan den bokade tiden debiterar vi 500 kronor.</p>
                        </div>
                    </div>
                    <div class="mt-xl l10n">
                        <p class="p200">Upptäck nyckeln till en strålande och frisk hy med vår skräddarsydda hudkonsultation på AcneSpecialisten. Denna kostnadsfria tjänst är inte bara en analys av din hudtyp, utan ett omfattande första steg för att skräddarsy en behandlingsplan som är rätt för dig. Under konsultationen utforskar vi din hud i detalj - vi identifierar din hudtyp, eventuella hudproblem som acne eller känslighet, och skräddarsyr en behandling som är effektiv och anpassad för just dig.</p>
                        <p class="p200 mt-m">Vår expertis sträcker sig bortom grundläggande hudvård. Vi tar en helhetssyn på din hudhälsa och erbjuder råd och lösningar som omfattar allt från våra beprövade metoder till de senaste innovationerna inom hudvård. Vi introducerar dig till de mest effektiva produkterna och varumärkena i vår portfolio, noggrant utvalda för att matcha dina specifika behov.</p>
                        <p class="p200 mt-m">Boka din gratis hudkonsultation idag och ta det första steget mot en klarare, friskare hy. Kontakta oss på AcneSpecialisten eller använd vårt smidiga bokningssystem för att hitta en tid som passar dig. Vår dedikerade personal väntar på att ge dig en personlig upplevelse och hjälpa dig på din resa mot en problemfri hy.</p>
                    </div>
                </section>
                <section id="types" class="large-margin">
                    <h2 class="h500 mb-xs l10n">Konsultations typer</h2>
                    <hr class="is-hidden-desktop" />
                    <?php foreach ($categories as $category) { ?>
                        <?php include('gratis-hudkonsultation/widgets/consultation_category/consultation_category.php') ?>
                        <hr class="is-hidden-desktop" />
                    <?php } ?>
                </section>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
                <section id="reviews" class="large-margin">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Omdömen</h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
                </section>
                <!--Hudguide-->
                <section id="specialister" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Våra specialister</h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specialister">Se alla specialister</a>
                </section>
            </div>
            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
    <script src="/gratis-hudkonsultation/widgets/consultation_category/consultation_category.js"></script>
    <script src="/gratis-hudkonsultation/consultation.js"></script>
</body>

</html>