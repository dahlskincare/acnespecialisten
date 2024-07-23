<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/review.php');

$header_title = "Recensioner & Omdömen";
$header_content = "Här hittar du omdömen från våra nöjda kunder.";

$logo_registry = [
    'Google' => 'images/brands/google-small.svg',
    'Trustpilot' => 'images/brands/trustpilot.svg',
    'Bokadirekt' => 'images/brands/bokadirekt-small.svg',
];


$reviews = [
    new Review(
        brand: 'Trustpilot',
        title: 'Hade testat allt innan',
        text: "Hade testat allt innan, och var skeptisk till att de kunde hjälpa mig på AcneSpecialisten. Men genom att följa deras råd blev allt så mycket bättre! Kan varmt rekommendera.",
        signature: 'Josefin',
        stars: 5,
        logo_url: $logo_registry['Trustpilot'],
    ),
    new Review(
        brand: 'G',
        title: 'Super!',
        text: "Super! Proffsigt, kunnigt, snabbt, smidigt! Bra och tydlig information, kan bara varmt rekommendera 👌🏼🙌🏼🙏🏼",
        signature: 'Veronica',
        stars: 5,
        logo_url: $logo_registry['Google'],
    ),
    new Review(
        brand: 'Bokadirekt',
        title: 'Super fin personal, fint ställe',
        text: "Super fin personal, fint ställe. Duktiga på att informera och svara på frågor. Jag har gått där i ca 2-3 år och det är stor skillnad på hyn. Bra produkter!",
        signature: 'Felicia',
        stars: 5,
        logo_url: $logo_registry['Bokadirekt'],
    ),
];

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/recensioner-omdomen.php" />
      
    <title>Recensioner & Omdömen | AcneSpecialisten</title>
    <meta name="description" content="Verifierade recensioner från Trustpilot, Google & Bokadirekt. Läs hur vi har hjälpt tusentals med deras hudvårdsresor. Bli inspirerad att börja din!">
    <meta name="keywords" content="acnespecialisten recensioner, acnespecialisten omdöme">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/reviews/reviews.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <div class="container" id="narrow-content">
            <section id="header">
                <h1><?php echo $header_title ?></h1>
                <div id="header-content"><?php echo $header_content ?></div>
            </section>
            <section id="reviews">
                <?php
                $show_review_banners_header = false;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                ?>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>