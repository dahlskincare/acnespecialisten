<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');


$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2018',
        image: '/images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg',
        city: 'Sundbyberg',
        description: '',
        rating: 4.8,
        num_treatments: 795,
        since_year: 2018,
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 2010',
        image: '/images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik',
        city: 'Stockholm',
        description: '',
        rating: 4.7,
        num_treatments: 941,
        since_year: 2010,
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: '/images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul',
        city: 'Sundbyberg',
        description: '',
        rating: 4.6,
        num_treatments: 1024,
        since_year: 2017,
    ),
    new Specialist(
        name: 'Georgina Youkhana',
        title: 'Hudterapeut sedan 2023',
        image: '/images/specialists/large/hudterapeut-bild-saknas.jpg',
        image_alt: 'Georgina Youkhana',
        image_title: 'Georgina Youkhana',
        city: 'Sundbyberg',
        description: '',
        rating: 4.5,
        num_treatments: 259,
        since_year: 2023,
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: '/images/specialists/large/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund',
        image_title: 'Julia Eklund',
        city: 'Södermalm',
        description: '',
        rating: 4.8,
        num_treatments: 669,
        since_year: 2021,
    ),
    new Specialist(
        name: 'Sally Johansson',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-sally.webp',
        image_alt: 'Sally Johansson',
        image_title: 'Sally Johansson',
        city: 'Södermalm',
        description: '',
        rating: 4.7,
        num_treatments: 529,
        since_year: 2022,
    ),
    new Specialist(
        name: 'Fanny Eklund',
        title: 'Hudterapeut sedan 2023',
        image: '/images/specialists/large/hudterapeut-bild-saknas.jpg',
        image_alt: 'Fanny Eklund',
        image_title: 'Fanny Eklund',
        city: 'Sundbyberg',
        description: '',
        rating: 4.6,
        num_treatments: 322,
        since_year: 2023,
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom',
        city: 'Östermalm',
        description: '',
        rating: 4.8,
        num_treatments: 803,
        since_year: 2022,
    ),
    new Specialist(
        name: 'Jennifer Messner',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-jennifer.webp',
        image_alt: 'Jennifer Messner',
        image_title: 'Jennifer Messner',
        city: 'Östermalm',
        description: '',
        rating: 4.7,
        num_treatments: 288,
        since_year: 2022,
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title>Möt Våra Hudexperter | AcneSpecialisten i Stockholm</title>
    <meta name="description" content="Träffa vårt team av professionella hudterapeuter på AcneSpecialisten. Med gedigen erfarenhet inom estetisk hudvård, erbjuder våra specialister personligt anpassade lösningar för alla hudtyper och behov.">
    <meta name="keywords" content="Hudterapeuter, Hudspecialister, Estetisk hudvård, Hudvårdsexperter, AcneSpecialisten Team, Hudvård Stockholm, Professionell hudvård, Skräddarsydd hudvård, Hudproblem lösningar, Hudvårdsklinik Stockholm">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/specialister/specialists.css">
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
                <h1 class="l10n">Våra Specialister</h1>
                <div class="p200 mt-s l10n">På AcneSpecialisten har vi ett team av professionella och välutbildade hudterapeuter. Våra specialister har gedigen erfarenhet och expertis inom estetisk hudvård och problemlösning. De är engagerade i att erbjuda skräddarsydd och effektiv vård för varje unik hudtyp och behov.</div>
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
                        <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                            <span class="l10n">Se alla omdömen</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>

                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen">Se alla omdömen</a>
            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>
            <!--Hudguide-->
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