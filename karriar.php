<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/path_segment.php');
$path_segments = [
    new PathSegment('Karriär', 'karriar.php'),
];

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/karriar.php" />
      
    <title>Vill du jobba som hudterapeut? - Lediga jobb</title>
    <meta name="description" content="Se lediga tjänster hos oss på AcneSpecialisten. Vi söker dig som vill jobba heltid och deltid som hudterapeut hos oss.">
    <meta name="keywords" content="lediga jobb hudterapeut, hudterapeut jobb, jobba som hudterpeut">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/avbokningspolicy/cancellation-policy.css">
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
                    <h1 class="l10n">Karriär</h1>
                    <p class="l10n">Vill du jobba som hudterapeut? Här kan du läsa mer om våra lediga jobb som hudterapeut.</p>
                </section>
                <section id="alert-banner">
                    <div id="alert-text" class="l10n">Besök vår karriärsida.</div>
                    <!-- TOOD: set link -->
                    <a href="https://skonhetsgruppen.teamtailor.com" title="Till Avbokning" class="is-hidden-touch l10n">Till karriär</a>
                    <a href="https://skonhetsgruppen.teamtailor.com" title="Till Avbokning" class="is-hidden-desktop button outline expand l10n">Till karriär</a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>