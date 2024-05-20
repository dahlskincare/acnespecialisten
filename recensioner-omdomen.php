<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/review.php');

$header_title = "Reviews";
$header_content = "At Acnespecialisten there is an experienced and well-educated group of doctors with specialist skills and broad experience from the aesthetic and reconstructive industry.";

$logo_registry = [
    'Google' => 'images/brands/google-small.svg',
    'Trustpilot' => 'images/brands/trustpilot.svg',
    'Bokadirekt' => 'images/brands/bokadirekt-small.svg',
];


$reviews = [
    new Review(
        brand: 'Trustpilot',
        title: 'Supernöjd',
        text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
        signature: 'Sofia',
        stars: 5,
        logo_url: $logo_registry['Trustpilot'],
    ),
    new Review(
        brand: 'Google',
        title: 'Jag är mycket nöjd..',
        text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
        signature: 'Lovisa',
        stars: 5,
        logo_url: $logo_registry['Google'],
    ),
    new Review(
        brand: 'Bokadirekt',
        title: 'Rekommenderar varmt!',
        text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
        signature: 'Emily',
        stars: 5,
        logo_url: $logo_registry['Bokadirekt'],
    ),
];





?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <title>AcneSpecialistens Recensioner & Omdömen</title>
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
        <div class="container">
            <section id="results">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results.php'; ?>
            </section>
            <section id="faq">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'; ?>
            </section>
            <section id="brands">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'; ?>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>