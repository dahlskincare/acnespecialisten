<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/path_segment.php');
$path_segments = [
    new PathSegment('Om oss', 'om-oss.php'),
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/presentkort.php" />
      
    <title class="l10n">Digitalt presentkort på hudvård & skönhet</title>
    <meta name="title" content="Digitalt presentkort på hudvård & skönhet" class="l10n">
    <meta name="description" content="Ge bort skönhet med ett digitalt presentkort. Perfekt för hudvård, ansiktsbehandlingar och mer. Skicka kärlek online med ett klick!" class="l10n">
    <meta name="keywords" content="presentkort, presentkort hudvård, digitalt presentkort, skicka digitalt presentkort, presentkort online, skicka presentkort online" class="l10n">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/styles/forms.css">
    <link rel="stylesheet" href="/presentkort/gift-cards.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="title">
                    <h1 class="l10n">Studentrabatt & ungdomsrabatt - 20%</h1>
                    <p class="l10n">Vi erbjuder 20% rabatt på alla våra behandlingar för dig som är student eller som inte fyllt 18 ännu. Allt du behöver göra är att boka valfri behandling och sedan uppvisa ditt mecenatkort via appen så drar vi av 20% under ditt besök.</p>
                    <a href="/hudbehandlingar/" class="button expand l10n" title="Boka behandling">Se behandlingar</a>
                </section>
                <section id="image">
                    <picture>
                        <source media="(max-width: 799px)" srcset="presentkort/small.webp">
                        <source media="(min-width: 800px)" srcset="presentkort/large.webp">
                        <img src="presentkort/small.webp" alt="Gift cards" title="Gift cards" width="360" height="274" />
                    </picture>
                </section>
                <section id="flyers">
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Alla våra hudvårdsbehandlingar</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="bilder/behandlingar/358x274/konsultation.webp">
                            <source media="(min-width: 1024px)" srcset="bilder/behandlingar/424x456/konsultation.webp">
                            <img src="bilder/behandlingar/358x274/konsultation.webp" alt="Välj Belopp eller Behandling" title="Välj Belopp eller Behandling" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Alla våra hudvårdsbehandlingar</div>
                            <div class="gcf-text l10n">
                                Studentrabatten går att använda på alla våra hudvårdsbehandlingar. Detta inkluderar inte frisör, naglar, ögonbron eller injektionsbehandlingar.
                            </div>
                            <a href="/hudbehandlingar/" class="mt-xl button b200 outline expand auto-width" title="Boka behandling">Se behandlingar</a>
                        </div>

                    </div>
                    <div class="gift-card-flyer">
                        <div class="h500 is-hidden-desktop l10n">Fungerar på Alla Våra Kliniker</div>
                        <picture>
                            <source media="(max-width: 1023px)" srcset="bilder/behandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp">
                            <source media="(min-width: 1024px)" srcset="bilder/behandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp">
                            <img src="bilder/behandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp" alt="Fungerar på Alla Våra Kliniker" title="Fungerar på Alla Våra Kliniker" width="358" height="272" />
                        </picture>
                        <div>
                            <div class="gcf-header is-hidden-touch l10n">Fungerar på Alla Våra Kliniker</div>
                            <div class="gcf-text l10n">
                                Studentrabatten kan användas på alla våra kliniker för både enskilda behandlingar och kurer.
                            </div>

                            <a href="/hudbehandlingar/" class="mt-xl button b200 outline expand auto-width" title="Boka behandling">Se behandlingar</a>
                        </div>

                    </div>

                </section>
            </div>
            <section id="cta" class="large-margin">
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
            <!--Hudguide-->
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra specialister</h2>
                    <a href="hudterapeut" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla specialister</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="hudterapeut" title="Se alla specialister">Se alla specialister</a>
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
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>