<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');


$specialists = array(
    new Specialist(
        name: 'Cazzandra L',
        title: 'Hudterapeut sedan 2018',
        image: '/bilder/hudterapeut/312x312/cazzandra-l.webp',
        image_alt: 'Porträttbild på hudterapeuten Cazzandra L',
        image_title: 'Hudterapeut Cazzandra L',
        city: 'Sundbyberg',
        description: '',
        rating: 4.8,
        num_treatments: 911,
        since_year: 2018,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-135394?sr=5B73C09D_4AE0_42A7_A35A_3D0C546733FC',
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2022',
        image: '/bilder/hudterapeut/312x312/vilma-libom.webp',
        image_alt: 'Porträttbild på hudterapeuten Vilma Libom',
        image_title: 'Hudterapeut Vilma Libom',
        city: 'Östermalm',
        description: '',
        rating: 4.8,
        num_treatments: 905,
        since_year: 2022,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539?sr=0D932976_B38C_4E5E_A6F6_C5200C4D14EB',
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: '/bilder/hudterapeut/312x312/julia-eklund.webp',
        image_alt: 'Porträttbild på hudterapeuten Julia Eklund',
        image_title: 'Hudterapeut Julia Eklund',
        city: 'Södermalm',
        description: '',
        rating: 4.8,
        num_treatments: 795,
        since_year: 2021,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-135540?sr=E885C330_720D_45E5_AB65_44AC02B2145D',
    ),
    new Specialist(
        name: 'Ulrika Bill',
        title: 'Hudterapeut sedan 2023',
        image: '/bilder/hudterapeut/312x312/ulrika-bill.webp',
        image_alt: 'Porträttbild på hudterapeuten Ulrika Bill',
        image_title: 'Hudterapeut Ulrika Bill',
        city: 'Östermalm',
        description: '',
        rating: 4.7,
        num_treatments: 1090,
        since_year: 2023,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539?sr=7356D777_50AC_4633_BFDF_A3C070A9EC3E',
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1995',
        image: '/bilder/hudterapeut/312x312/veronika-benedik.webp',
        image_alt: 'Porträttbild på hudterapeuten Veronika Benedik',
        image_title: 'Hudterapeut Veronika Benedik',
        city: 'Stockholm',
        description: '',
        rating: 4.7,
        num_treatments: 1069,
        since_year: 1995,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-135394?sr=1B7348C4_8247_4394_AA9A_A50C5FB3C931',
    ),
    new Specialist(
        name: 'Fanny Eklund',
        title: 'Hudterapeut sedan 2023',
        image: '/bilder/hudterapeut/312x312/fanny-eklund.webp',
        image_alt: 'Porträttbild på hudterapeuten Fanny Eklund',
        image_title: 'Hudterapeut Fanny Eklund',
        city: 'Södermalm',
        description: '',
        rating: 4.7,
        num_treatments: 437,
        since_year: 2023,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-135540?sr=F7B69824_26ED_4E29_B9DB_D361637EAA61',
    ),
    new Specialist(
        name: 'Jennifer Messner',
        title: 'Hudterapeut sedan 2022',
        image: '/bilder/hudterapeut/312x312/jennifer-messner.webp',
        image_alt: 'Porträttbild på hudterapeuten Jennifer Messner',
        image_title: 'Hudterapeut Jennifer Messner',
        city: 'Östermalm',
        description: '',
        rating: 4.7,
        num_treatments: 355,
        since_year: 2022,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539?sr=C467CE54_2845_4C09_BF16_EDA820B0E978',
    ),
    new Specialist(
        name: 'Georgina Youkhana',
        title: 'Hudterapeut sedan 2022',
        image: '/bilder/hudterapeut/312x312/georgina-youkhana.webp',
        image_alt: 'Porträttbild på hudterapeuten Georgina Youkhana',
        image_title: 'Hudterapeut Georgina Youkhana',
        city: 'Sundbyberg',
        description: '',
        rating: 4.5,
        num_treatments: 359,
        since_year: 2022,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-135394?sr=19E51821_8BFB_4C92_AFB9_B77A31A2533B',
    ),
    new Specialist(
        name: 'Emelie Grahm',
        title: 'Hudterapeut sedan 2025',
        image: '/bilder/hudterapeut/312x312/emelie-grahm.webp',
        image_alt: 'Porträttbild på hudterapeuten Emelie Grahm',
        image_title: 'Hudterapeut Emelie Grahm',
        city: 'Sundbyberg',
        description: '',
        rating: 4.8,
        num_treatments: 723,
        since_year: 2025,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sundbyberg-135394?sr=FC3F3BF5_BB32_4D1E_9973_A529A4EAC033',
    ),
    // Cecilia: hud- och laserterapeut.
    new Specialist(
        name: 'Cecilia Renske',
        title: 'Hud- och laserterapeut sedan 2023',
        image: '/bilder/hudterapeut/312x312/cecilia-renske.webp',
        image_alt: 'Porträttbild på hudterapeuten Cecilia Renske',
        image_title: 'Hudterapeut Cecilia Renske',
        city: 'Södermalm',
        description: '',
        rating: 4.8,
        num_treatments: 137,
        since_year: 2023,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-135540',
    ),
    // Emma Berggren: endast hudterapeut (ej att förväxla med Emma Fogelkvist ovan).
    new Specialist(
        name: 'Emma Berggren',
        title: 'Hudterapeut sedan 2026',
        image: '/bilder/hudterapeut/312x312/emma-berggren.webp',
        image_alt: 'Porträttbild på hudterapeuten Emma Berggren',
        image_title: 'Hudterapeut Emma Berggren',
        city: 'Östermalm',
        description: '',
        rating: 4.8,
        num_treatments: 24,
        since_year: 2026,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539?sr=4F8B4679_0C4A_41FE_9BDC_4FBE78B47091',
    ),
    new Specialist(
        name: 'Felicia Kulovainio',
        title: 'Hudterapeut sedan 2019',
        image: '/bilder/hudterapeut/312x312/felicia-kulovainio.webp',
        image_alt: 'Porträttbild på hudterapeuten Felicia Kulovainio',
        image_title: 'Hudterapeut Felicia Kulovainio',
        city: 'Östermalm',
        description: '',
        rating: 4.7,
        num_treatments: 10,
        since_year: 2019,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539?sr=EE3968D8_D08E_4B5D_A74C_2A2E180841A0',
    ),
    new Specialist(
        name: 'Emma Fogelkvist',
        title: 'Hudterapeut sedan 2022',
        image: '/bilder/hudterapeut/312x312/emma-fogelkvist.webp',
        image_alt: 'Porträttbild på hudterapeuten Emma Fogelkvist',
        image_title: 'Hudterapeut Emma Fogelkvist',
        city: 'Östermalm',
        description: '',
        rating: 4.8,
        num_treatments: 43,
        since_year: 2021,
        booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-135539',
    ),
    // Pausad: Sally Johansson har slutat men kan komma tillbaka – avkommentera för att återaktivera.
    // new Specialist(
    //     name: 'Sally Johansson',
    //     title: 'Hudterapeut sedan 2020',
    //     image: '/bilder/hudterapeut/312x312/sally-johansson.webp',
    //     image_alt: 'Porträttbild på hudterapeuten Sally Johansson',
    //     image_title: 'Hudterapeut Sally Johansson',
    //     city: 'Södermalm',
    //     description: '',
    //     rating: 4.8,
    //     num_treatments: 668,
    //     since_year: 2020,
    //     booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-sodermalm-135540',
    // ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudterapeut/" />

    <title>Hudterapeut i Stockholm - Boka gratis hudkonsultation</title>
    <meta name="description" content="Hitta en kvalificerad hudterapeut i Stockholm för professionell hudvård. Få skräddarsydda behandlingsplaner från erfarna hudvårdsterapeuter.">
    <meta name="keywords" content="hudterapeut, hudterapeut stockholm, hudvårdsterapeut">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudterapeut/specialists.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/tiny_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <section id="title" class="large-margin">
                <h1 class="l10n">Våra hudterapeuter</h1>
                <div class="p200 mt-s l10n">Letar du efter en hudterapeut i Stockholm? Hos AcneSpecialisten är vi stolta över att presentera vårt team av högt kvalificerade hudterapeuter, alla med professionell utbildning certifierad av SHR (Svenska Hudterapeuters Riksorganisation). Våra specialister besitter omfattande kunskap och specialkompetens inom medicinsk och estetisk hudvård och individanpassade lösningar för hudproblem. Med ett djupt engagemang för varje kunds unika behov, är vårt team dedikerat till att utveckla personligt anpassade och effektiva behandlingsplaner för att möta och överträffa förväntningarna hos individer med olika hudtyper. När du besöker oss blir du alltid tilldelad en personlig hudvårdsterapeut så att du får personlig rådgivning under hela behandlingen.</div>
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
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>

            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se fler frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se fler frågor">Se fler frågor</a>
            </section>

            <section id="brands" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <div class="h500 l10n">Varumärken</div>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button b200 outline expand is-hidden-tablet l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>