<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models/link.php');
$hero_title = "Start own / Franchise";
$hero_content = "We at AcneSpecialisten offer different types of franchise collaborations, depending on what suits you best. You can rent a place in an already existing clinic or in different ways open your own, and eventually develop it. Apply below to become part of our concept - but with yourself as the boss!";
$hero_image_small = 'https://via.placeholder.com/358x274.webp';
$hero_image_large = 'https://via.placeholder.com/872x456.webp';
$hero_image_alt = '';
$hero_image_title = '';

$application_link = new Link(label: "Send an Application", url: "#", title: "Click here to apply");

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">
    <meta property="og:title" content="Acnespecialisten" />
    <meta property="og:description" content="" class="l10n" />
    <meta property="og:image" content="images/about-desktop.jpg" />
    <meta property="twitter:title" content="Acnespecialisten" />
    <meta property="twitter:description" content="" class="l10n" />
    <meta property="twitter:image" content="images/about-desktop.jpg" />
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/franchise/franchise.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <div class="container" id="narrow-content">
            <section id="hero">
                <h1><?php echo $hero_title ?></h1>
                <div id="hero-content"><?php echo $hero_content ?></div>
                <div>
                    <a href="<?php echo $application_link->url ?>" title="<?php echo $application_link->title ?>" class="button b200 expand"><?php echo $application_link->label ?></a>
                </div>
                <picture>
                    <source media="(max-width: 449px)" srcset="<?php echo $hero_image_small ?>">
                    <source media="(min-width: 450px)" srcset="<?php echo $hero_image_large ?>">
                    <img src="<?php echo $hero_image_small ?>" alt="<?php echo $hero_image_alt ?>" title="<?php echo $hero_image_title ?>" />
                </picture>
            </section>
            <section id="collaboration-types"></section>
            <section id="concept"></section>
            <section id="banner"></section>
            <section id="perks"></section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>