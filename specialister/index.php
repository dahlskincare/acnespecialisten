<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');


$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2018',
        image: '/images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Porträttbild på hudterapeuten Cazzandra Lindbergf',
        image_title: 'Hudterapeut Cazzandra Lindberg',
        city: 'Sundbyberg',
        description: '',
        rating: 4.8,
        num_reviews: 795,
        since_year: 2018,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=4250B49F_4A26_42BD_9C5A_36C69FB59B25',
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 2010',
        image: '/images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
        image_title: 'Hudterapeut Veronika Benedik',
        city: 'Stockholm',
        description: '',
        rating: 4.7,
        num_reviews: 941,
        since_year: 2010,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=48B57D6B_BB76_4FD4_A3D3_7E127863C835',
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: '/images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Porträttbild på hudterapeuten Amira Maqboul',
        image_title: 'Hudterapeut Amira Maqboul',
        city: 'Sundbyberg',
        description: '',
        rating: 4.6,
        num_reviews: 1024,
        since_year: 2017,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=366A581A_10F4_4050_9591_4A20DD7082C6',
    ),
    new Specialist(
        name: 'Georgina Youkhana',
        title: 'Hudterapeut sedan 2023',
        image: '/images/specialists/large/hudterapeut-bild-saknas.jpg',
        image_alt: 'Porträttbild på hudterapeuten Georgina Youkhana',
        image_title: 'Hudterapeut Georgina Youkhana',
        city: 'Sundbyberg',
        description: '',
        rating: 4.5,
        num_reviews: 259,
        since_year: 2023,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-19300?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..',
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: '/images/specialists/large/hudterapeut-julia.webp',
        image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
        image_title: 'Hudterapeut Julia Eklund',
        city: 'Södermalm',
        description: '',
        rating: 4.8,
        num_reviews: 669,
        since_year: 2021,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-19301?_gl=1*2y7n64*_ga*MTU1NDQ2MjU3MS4xNjYwNTUzMjIy*_ga_7EMC778CH1*MTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..',
    ),
    new Specialist(
        name: 'Sally Johansson',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-sally.webp',
        image_alt: 'Porträttbild på hudterapeuten Sally Johansson',
        image_title: 'Hudterapeut Sally Johansson',
        city: 'Södermalm',
        description: '',
        rating: 4.7,
        num_reviews: 529,
        since_year: 2022,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-19301?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=1FAFA2BB_848D_433E_B00F_E1E7BCED350E',
    ),
    new Specialist(
        name: 'Fanny Eklund',
        title: 'Hudterapeut sedan 2023',
        image: '/images/specialists/large/hudterapeut-bild-saknas.jpg',
        image_alt: 'Porträttbild på hudterapeuten Fanny Eklund',
        image_title: 'Hudterapeut Fanny Eklund',
        city: 'Sundbyberg',
        description: '',
        rating: 4.6,
        num_reviews: 322,
        since_year: 2023,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-19301?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=33EB1A31_1119_403D_9423_36A3F69A3B53',
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
        image_title: 'Hudterapeut Vilma Libom',
        city: 'Östermalm',
        description: '',
        rating: 4.8,
        num_reviews: 803,
        since_year: 2022,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=96A181A3_B437_4927_AD06_B713033F9377',
    ),
    new Specialist(
        name: 'Jennifer Messner',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-jennifer.webp',
        image_alt: 'Porträttbild på hudterapeuten Jennifer Messner',
        image_title: 'Hudterapeut Jennifer Messner',
        city: 'Östermalm',
        description: '',
        rating: 4.7,
        num_reviews: 288,
        since_year: 2022,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=B07A13BD_0C83_4822_8293_039D9358887B',
    ),
    new Specialist(
        name: 'Ulrika Bill',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-bild-saknas.jpg',
        image_alt: 'Porträttbild på hudterapeuten Ulrika Bill',
        image_title: 'Hudterapeut Ulrika Bill',
        city: 'Östermalm',
        description: '',
        rating: 4.7,
        num_reviews: 1075,
        since_year: 2022,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=47F1F39E_EC03_4974_87BC_A52B96FA5989',
    ),
    new Specialist(
        name: 'Emma Fogelkvist',
        title: 'Hudterapeut sedan 2022',
        image: '/images/specialists/large/hudterapeut-bild-saknas.jpg',
        image_alt: 'Porträttbild på hudterapeuten Emma Fogelkvist',
        image_title: 'Hudterapeut Emma Fogelkvist',
        city: 'Östermalm',
        description: '',
        rating: 4.8,
        num_reviews: 300,
        since_year: 2020,
        booking: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559?_gl=1%2A2y7n64%2A_ga%2AMTU1NDQ2MjU3MS4xNjYwNTUzMjIy%2A_ga_7EMC778CH1%2AMTcwNzIzMTUyOS4yMjAuMS4xNzA3MjMxNzExLjYwLjAuMA..&sr=328CFFD0_03BF_4CB5_BC9B_1288D44C47FC',
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
                <div class="p200 mt-s l10n">Hos AcneSpecialisten är vi stolta över att presentera vårt team av högt kvalificerade hudterapeuter, alla med professionell utbildning certifierad av SHR (Svenska Hudterapeuters Riksorganisation). Våra specialister besitter omfattande kunskap och specialkompetens inom estetisk hudvård och individanpassade lösningar för hudproblem. Med ett djupt engagemang för varje kunds unika behov, är vårt team dedikerat till att utveckla personligt anpassade och effektiva behandlingsplaner för att möta och överträffa förväntningarna hos individer med olika hudtyper.</div>
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