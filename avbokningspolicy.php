<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Avbokningspolicy | AcneSpecialisten – Hudvård i Stockholm</title>
    <meta name="description" content="Vår avbokningspolicy, här kan du läsa mer om den avbokningspolicy som gäller när du bokar en behandling hos oss.">
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
                    <div id="alert-text" class="l10n">Kom ihåg att avboka minst 24 timmar innan den bokade tid för att undvika avgift.</div>
                    <!-- TOOD: set link -->
                    <a href="https://www.bokadirekt.se/cancel" title="Till Avbokning" class="is-hidden-touch l10n">Till Avbokning</a>
                    <a href="https://www.bokadirekt.se/cancel" title="Till Avbokning" class="is-hidden-desktop button outline expand l10n">Till Avbokning</a>
                </section>
                <section id="questions">
                    <?php
                    $faq_categories = array(
                        '' => array(
                            new Question('Avbokningspolicy', '<p class="p200">Avbokning bör ske senast 24 timmar före din inbokade tid. Om du avbokar senare än så, eller uteblir från ditt bokade besök, kommer en avbokningsavgift att debiteras. Observera att denna policy gäller oavsett anledning till avbokning, även vid sjukdom på behandlingsdagen.</p>'),
                            new Question('Hur avbokar jag min tid?', '<p class="p200">För att säkerställa en smidig avbokning rekommenderar vi att du använder avbokningskoden du mottog i din bokningsbekräftelse. Om du väljer att avboka via e-post eller telefonsvarare, var noga med att inkludera ditt fullständiga namn, den behandling du har bokat, samt den specifika dagen och tiden för din bokning.'),
                            new Question('Hur debiteras ett uteblivet besök?', '<p class="p200">Debitering sker via Fortnox faktura som skickas via e-post.</p>'),
                        )
                    );
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                    ?>
                </section>
            </div>
            
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>