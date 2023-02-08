<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');


$image_large = 'images/treatments/large/acne-scars.jpg';
$image_small = 'images/treatments/small/acne-scars.jpg';

// l10n
if ($lang == 'sv') {
    $problem = 'akneärr';
    $title = 'Behandling av akneärr';
    $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.';
    $about_title = 'What is acne scars treatment?';
    $about_content = '<p class="p200">This is a treatment adapted for acne skin and <a class="b200 underline">pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-xl">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>';
    $define_content = '<p class="p200">This is a treatment adapted for acne skin and <a class="b200 underline">pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-xl">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>';
    $define_consultation_url = 'https://dahlskincare.com/skin-consultation';
    $services = array(
        new Service('microneedling-acne-scars', 'Microneedling for acne scars', '30-60 min', '1295 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/852x456.jpg', 'https://www.dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922?_ga=2.103539465.80893672.1675771766-1054758468.1672765135&_gac=1.52586202.1675771766.CjwKCAiAioifBhAXEiwApzCztkJaMGhW8PiC3PRH919PHMXYYIgTe0SRGs9lLjTqosRh7L3UbBbbExoC5doQAvD_BwE', array('who-infants' => 'Infants', 'who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults'), 'Microneedling'),
        new Service('laser-acne-scars', 'Laser for acne scars', '30-60 min', '1295 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/852x456.jpg', 'https://www.dahlskincare.com/skin-consultation', null, array('who-infants' => 'Infants', 'who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults'), 'Laser'),
        new Service('chemical-peeling-acne-scars', 'Chemical peeling for acne scars', '30-60 min', '1295 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/852x456.jpg', 'https://www.dahlskincare.com/skin-consultation', null, array('who-infants' => 'Infants', 'who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults'), 'Chemical peeling'),
    );
    $products = array(
        new Product('balancing-cleanser', '995 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/872x456.jpg'),
    );
} else {
    $problem = 'acne scars';
    $title = 'Acne scars treatment';
    $description = 'Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we can help you treat. Here we explain what identifies acne scars, why the problem occurs and how we.';
    $about_title = 'What is acne scars treatment?';
    $about_content = '<p class="p200">This is a treatment adapted for acne skin and <a class="b200 underline">pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-xl">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>';
    $define_content = '<p class="p200">This is a treatment adapted for acne skin and <a class="b200 underline">pimples</a> and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-xl">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>';
    $define_consultation_url = 'https://dahlskincare.com/skin-consultation';
    $services = array(
        new Service('microneedling-acne-scars', 'Microneedling for acne scars', '30-60 min', '1295 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/852x456.jpg', 'https://www.dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922?_ga=2.103539465.80893672.1675771766-1054758468.1672765135&_gac=1.52586202.1675771766.CjwKCAiAioifBhAXEiwApzCztkJaMGhW8PiC3PRH919PHMXYYIgTe0SRGs9lLjTqosRh7L3UbBbbExoC5doQAvD_BwE', array('who-infants' => 'Infants', 'who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults'), 'Microneedling'),
        new Service('laser-acne-scars', 'Laser for acne scars', '30-60 min', '1295 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/852x456.jpg', 'https://www.dahlskincare.com/skin-consultation', null, array('who-infants' => 'Infants', 'who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults'), 'Laser'),
        new Service('chemical-peeling-acne-scars', 'Chemical peeling for acne scars', '30-60 min', '1295 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/852x456.jpg', 'https://www.dahlskincare.com/skin-consultation', null, array('who-infants' => 'Infants', 'who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults'), 'Chemical peeling'),
    );
    $products = array(
        new Product('balancing-cleanser', '995 kr', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>', 'https://via.placeholder.com/358x274.jpg', 'https://via.placeholder.com/872x456.jpg'),
    );

    $repair_title = '04. Repair post acne';
    $repair_content = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
    $repair_image_small = 'https://via.placeholder.com/358x274.jpg';
    $repair_image_large = 'https://via.placeholder.com/872x456.jpg';
    $repair_url = 'treatments/acne';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">
        Acnespecialisten |
        <?php echo $title ?>
    </title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">

    <link rel="stylesheet" href="treatments/treatment.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h600">
                            <?php echo $title ?>
                        </h2>
                        <div class="mt-xl columns is-2 is-variable">
                            <div class="column">
                                <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button white expand l10n">Get a free consultation</a>
                            </div>
                            <div class="column">
                                <a href="<?php echo $booking_url ?>" target="_blank" class="button white expand l10n">Book a treatment</a>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-tablet">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600">
                        <?php echo $title ?>
                    </h1>
                    <p class="mt-m">
                        <?php echo $description ?>
                    </p>
                    <div class="mt-xl columns is-mobile">
                        <div class="column is-half">
                            <a href="https://dahlskincare.com/skin-consultation" target="_blank" class="button b200 white expand l10n">Free consultation</a>
                        </div>
                        <div class="column is-half">
                            <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white expand l10n">Book a treatment</a>
                        </div>
                    </div>
                    <div class="mt-xl">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-mobile">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        </div>
                        <div class="column is-half flex-row align-end justify-end">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600">
                            <?php echo $title ?>
                        </h1>
                        <p class="mt-s p200">
                            <?php echo $description ?>
                        </p>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="https://www.dahlskincare.com/skin-consultation" target="_blank" class="button b200 white l10n">Get a free consultation</a>
                            <a href="<?php echo $booking_url ?>" target="_blank" class="button b200 white l10n">Book a treatment</a>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="image" class="mt-xl is-hidden-desktop">
                    <picture class="is-hidden-tablet">
                        <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                        <img src="<?php echo $image_small ?>" alt="<?php echo $title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <a href="javascript:;" onclick="scrollToElement('#about')" class="button grey l10n">Overview</a>
                    <a href="javascript:;" onclick="scrollToElement('#define')" class="button grey l10n">Define problem</a>
                    <a href="javascript:;" onclick="scrollToElement('#treat')" class="button grey l10n">Treatment solutions</a>
                    <?php if (sizeof($products) > 0) { ?>
                        <a href="javascript:;" onclick="scrollToElement('#prevent')" class="button grey l10n">Prevent problem</a>
                    <?php } ?>
                    <?php if (isset($repair_title) && isset($repair_content) && isset($repair_image_small) && isset($repair_image_large) && isset($repair_url)) { ?>
                        <a href="javascript:;" onclick="scrollToElement('#repair')" class="button grey l10n">Repair</a>
                    <?php } ?>
                    <a href="javascript:;" onclick="scrollToElement('#results')" class="button grey l10n">Cases</a>
                    <a href="javascript:;" onclick="scrollToElement('#reviews')" class="button grey l10n">Reviews</a>
                    <a href="javascript:;" onclick="scrollToElement('#faq')" class="button grey l10n">FAQ</a>
                    <a href="javascript:;" onclick="scrollToElement('#skin-guide')" class="button grey l10n">Skin guide</a>
                    <a href="javascript:;" onclick="scrollToElement('#specialists')" class="button grey l10n">Specialists</a>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $about_title; ?></h2>
                    <div class="mt-xl"><?php echo $about_content ?></div>
                </section>
                <section id="define">
                    <h2>
                        <span class="h500">01.</span>&nbsp;&nbsp;<span class="h500 l10n">Define&nbsp;</span><span class="h500 lowercase"><?php echo $problem ?></span>
                    </h2>
                    <picture>
                        <source media="(max-width: 799px)" srcset="images/service-categories/medium/consultation.jpg">
                        <source media="(min-width: 800px)" srcset="images/service-categories/large/consultation.jpg">
                        <img class="mt-xl step-image" src="images/service-categories/large/consultation.jpg" alt="<?php echo $title ?>" width="872" height="456" />
                    </picture>
                    <div class="mt-xl"><?php echo $define_content ?></div>
                    <a href="<?php echo $define_consultation_url ?>" target="_blank" class="mt-xl button b200 l10n">Get a free consultation</a>
                </section>
                <section id="treat">
                    <h2>
                        <span class="h500">02.&nbsp;&nbsp;</span><span class="h500 l10n">Treat&nbsp;</span><span class="h500 lowercase"><?php echo $problem ?></span>
                    </h2>
                    <p class="mt-xs l10n">
                        Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.
                    </p>
                    <div id="service-buttons" class="mt-m flex-row is-hidden-tablet">
                        <?php foreach ($services as $service) { ?>
                            <button class="grey" onclick="scrollToElement('#service-card-<?php echo $service->id ?>')"><?php echo $service->short_title ?></button>
                        <?php } ?>
                    </div>
                    <?php foreach ($services as $service) {
                        include('widgets/service-card/service-card.php');
                    } ?>
                </section>
                <?php if (sizeof($products) > 0) { ?>
                    <section id="prevent">
                        <h2>
                            <span class="h500 l10n">03.&nbsp;&nbsp;Prevent</span>
                        </h2>
                        <?php foreach ($products as $product) {
                            include('widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <?php if (isset($repair_title) && isset($repair_content) && isset($repair_image_small) && isset($repair_image_large) && isset($repair_url)) { ?>
                    <section id="repair">
                        <h2 class="h500 l10n">04. Repair</h2>
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?php echo $repair_image_small ?>">
                            <source media="(min-width: 800px)" srcset="<?php echo $repair_image_large ?>">
                            <img src="<?php echo $repair_image_large ?>" alt="<?php echo $repair_title ?>" class="mt-xl" width="872" height="456" />
                        </picture>
                        <div class="mt-xl"><?php echo $repair_content ?></div>
                        <a href="<?php echo $repair_url ?>" class="mt-xl button outline b200 expand is-hidden-tablet l10n">
                            View treatment
                        </a>
                        <a href="<?php echo $repair_url ?>" class="mt-xl button compact text b200 is-hidden-mobile">
                            <span class="l10n">View treatment</span>
                            <?php icon('navigate-next'); ?>
                        </a>
                    </section>
                <?php } ?>
                <section id="results">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Results</h2>
                        <div class="step-buttons">
                            <button class="round-large grey" onclick="Carousel.prev('#results-carousel')">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="Carousel.next('#results-carousel')">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <div class="carousel" id="results-carousel">
                        <div class="slide l10n">
                            <?php
                            $before = 'images/results/acne-before.webp';
                            $after = 'images/results/acne-after.webp';
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/acne">aknebehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/acne">acne treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                        <div class="slide l10n">
                            <?php
                            $before = 'images/results/rosacea-before.webp';
                            $after = 'images/results/rosacea-after.webp';
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/rosacea">rosaceabehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/rosacea">rosacea treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                        <div class="slide l10n">
                            <?php
                            $before = 'images/results/comedones-before.webp';
                            $after = 'images/results/comedones-after.webp';
                            if ($lang == 'sv') {
                                $label = 'Efter två månaders <a href="treatments/comedones">pormaskbehandling</a>';
                            } else {
                                $label = 'After two months of <a href="treatments/comedones">comedones treatment</a>';
                            }
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/result/result.php');
                            ?>
                        </div>
                    </div>
                    <a class="button outline l10n" href="results">View all treatment results</a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="problems/problem.js"></script>
</body>

</html>