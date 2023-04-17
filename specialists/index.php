<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');


$specialists = array(
    new Specialist(
        name: 'Patrick Minogue',
        title: 'Estetician',
        image_small: 'https://via.placeholder.com/358x358.webp',
        image_large: 'https://via.placeholder.com/358x358.webp',
        city: 'Sundbyberg',
        description: 'Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience in the skin care industry. Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience.',
        rating: 4.8,
        num_treatments: 1234,
        since_year: 2012
    ),
    new Specialist(
        name: 'Patrick Minogue',
        title: 'Estetician',
        image_small: 'https://via.placeholder.com/358x358.webp',
        image_large: 'https://via.placeholder.com/358x358.webp',
        city: 'Sundbyberg',
        description: 'Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience in the skin care industry. Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience.',
        rating: 4.8,
        num_treatments: 1234,
        since_year: 2012
    ),
    new Specialist(
        name: 'Patrick Minogue',
        title: 'Estetician',
        image_small: 'https://via.placeholder.com/358x358.webp',
        image_large: 'https://via.placeholder.com/358x358.webp',
        city: 'Sundbyberg',
        description: 'Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience in the skin care industry. Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience.',
        rating: 4.8,
        num_treatments: 1234,
        since_year: 2012
    ),
    new Specialist(
        name: 'Patrick Minogue',
        title: 'Estetician',
        image_small: 'https://via.placeholder.com/358x358.webp',
        image_large: 'https://via.placeholder.com/358x358.webp',
        city: 'Sundbyberg',
        description: 'Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience in the skin care industry. Danielle is auctorised and CIDESCO certified skin therapist since 2010 and has a long experience.',
        rating: 4.8,
        num_treatments: 1234,
        since_year: 2012
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">Acnespecialisten | Specialists</title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/specialists/specialists.css">
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
            <section id="title" class="large-margin">
                <h1 class="l10n">Our specialists</h1>
                <div class="p200 mt-s">At Acnespecialisten there is an experienced and well-educated group of doctors with specialist skills and broad experience from the aesthetic and reconstructive industry.</div>
            </section>
            <section id="cards">
                <div class="columns is-3 is-variable is-multiline">
                    <?php foreach ($specialists as $specialist) { ?>
                        <div class="column is-one-third">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialist_card/specialist_card.php') ?>
                        </div>
                    <?php } ?>
                </div>

            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>