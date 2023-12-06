<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Avbokningspolicy | AcneSpecialisten – Hudvård i Stockholm</title>
    <meta name="description" content="Läs om AcneSpecialistens avbokningspolicy. Avboka din tid senast 24 timmar innan ditt planerade besök för att undvika avgifter. Vi erbjuder expertis inom acne och hudvård i Stockholm.">
    <meta name="keywords" content="Avbokningspolicy, AcneSpecialisten, Hudvårdstidning, Avboka Tid, Hudvård Stockholm, Hudvårdsbokning, Hudvårdsavbokning, Hudvårdsklinik Stockholm, Hudvårdsexpert, Hudbehandling, Hudkonsultation">

    <!-- Default imports (metadata, fonts, google analytics etc) -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/avbokningspolicy/cancellation-policy.css">
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
                    <h1 class="l10n">Avbokningspolicy</h1>
                    <p class="l10n">Här kan du läsa mer om vår avbokningspolicy.</p>
                </section>
                <section id="alert-banner">
                    <div id="alert-text" class="l10n">Kom ihåg att avboka minst 24 timmar innan den bokade tiden.</div>
                    <!-- TOOD: set link -->
                    <a href="https://www.bokadirekt.se/cancel" title="Till Avbokning" class="is-hidden-touch l10n">Till Avbokning</a>
                    <a href="https://www.bokadirekt.se/cancel" title="Till Avbokning" class="is-hidden-desktop button outline expand l10n">Till Avbokning</a>
                </section>
                <section id="questions">
                    <?php
                    $faq_categories = array(
                        '' => array(
                            new Question('Avbokningspolicy', '<p class="p200">Avbokning skall göras senast 24 tim innan avtalad tid. För sent avbokad tid eller uteblivet besök debiteras hela behandlingskostnaden upp till 1000kr. Detta gäller även vid sjukdom samma dag. På grund av smittorisk tar vi ej emot dig som är sjuk. Vid utebliven konsultation eller återbesök debiteras 250kr. OBS! Ingen avbokning via telefonsvararen.</p>'),
                            new Question('Hur avbokar jag min tid?', '<p class="p200">Du avbokar enklast din tid genom att använda avbokningssidan där du fyller i din avbokningskod. Avbokningskoden hittar du på din bokningsbekräftelse som skickat ut via e-post och SMS. Om du avbokar genom att kontakta oss är det viktigt att inkludera fullständig bokningsinformation så att vi kan identifiera den bokade tiden.'),
                            new Question('Hur debiteras ett uteblivet besök?', '<p class="p200">Debitering sker via Billogram Faktura, denna faktura skickas via e-post och SMS.</p>'),
                        )
                    );
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                    ?>
                </section>
            </div>
            <section id="results" class="large-margin">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php') ?>
            </section>
            <section id="reviews" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Omdömen</div>
                    <div class="flex-row is-hidden-mobile">
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Reviews.scroll(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                        <a href="https://se.trustpilot.com/review/acnespecialisten.se" title="Omdömen" class="ml-l button compact text">
                            <span class="l10n">Omdömen</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & Svar</h2>
                    <a href="faq" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="faq" title="Se alla frågor">Se alla frågor</a>
            </section>
            <!--Hudguide-->
            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra specialsiter</h2>
                    <a href="specialister" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla specialister</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister" title="Se alla specialister">Se alla specialister</a>
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