<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/elevbehandlingar.php" />

    <title>Elevbehandling ansiktsbehandling Stockholm</title>
    <meta name="description" content="Upptäck elevbehandlingar i Stockholm: Professionella ansiktsbehandlingar utförda av våra skickliga elever. Kvalitet till ett förmånligt pris.">
    <meta name="keywords" content="elevbehandlingar, elevbehandlingar stockholm, elevbehandling ansiktsbehandling stockholm">

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
                    <h1 class="h600 l10n">Elevbehandlingar på AcneSpecialisten</h1>
                    <p class="p200 l10n">Under en begränsad tid har vi praktikanter som utför elevbehandlingar till ett rabatterat pris. Just nu erbjuder vi tyvärr inte elevbehandlingar.</p>
                </section>
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

                </section>
                <section id="faq" class="large-margin">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Frågor & svar</h2>
                        <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla frågor</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    $faq_categories = null;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                    ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
                </section>

                <section id="specialists" class="large-margin">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeuter</h2>
                        <a href="hudterapeut" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="hudterapeut" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
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
                    <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
                </section>
            </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>