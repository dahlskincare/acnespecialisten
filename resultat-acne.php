<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/resultat-acne.php" />

    <title>Resultat av acnebehandlingar | Före och efter bilder - Acne</title>
    <meta name="description" content="Se fantastiska före och efterbilder på resultatet från våra acne kunder. Upptäck hur du kan få klarare hud och uppnå resultat med AcneSpecialistens behandlingar">
    <meta name="keywords" content="akne bilder, akne före och efter, acne bilder, acne för eoch efter">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php


$path_segments = array(
    new PathSegment('Resultat', '/resultat.php'),
    new PathSegment('Acne', '/resultat-acne.php'),
);

$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg',
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund',
        image_title: 'Julia Eklund'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$result_category =
    new ResultCategory(
        id: 'akne',
        title: 'Resultat mot akne och finnar',
        description_1: 'Utforska våra kunders akne bilder transformationsresor mot akne, finanr, blandhy och problemhy. Denna sida visar en serie av före- och efterbilder som demonstrerar den effektiva påverkan av våra specialanpassade hudvårdsbehandlingar och produkter, vilka ger tydliga och märkbara förbättringar i hudens utseende och hälsa.',

        description_2: 'Är du redo att ta kontroll över din akne och uppnå en klarare hud? Boka en kostnadsfri konsultation hos oss och ta det första steget mot en synbart förbättrad och hälsosammare hy. Låt oss visa dig vägen till effektiva resultat.',

    );
$results_images = [
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-aktiv.webp', image_alt: 'Aktiv akne före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-ansikte-hoger-latt.webp', image_alt: 'Lätt akne på höger sida före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-ansikte.webp', image_alt: 'Akne i ansiktet före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-en-stor.webp', image_alt: 'Stor akne före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-flackar.webp', image_alt: 'Akne och fläckar före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-hals.webp', image_alt: 'Akne på halsen före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-hela-ryggen.webp', image_alt: 'Akne på hela ryggen före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-inflammerad-hy.webp', image_alt: 'Inflammerad akne före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kaklinje.webp', image_alt: 'Akne längs käklinjen före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind-hals.webp', image_alt: 'Akne på kind och hals före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind-tinning.webp', image_alt: 'Akne på kind och tinning före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind.webp', image_alt: 'Akne på kinden före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-haka.webp', image_alt: 'Akne på kinder och haka före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-mun.webp', image_alt: 'Akne på kinder och mun före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-panna.webp', image_alt: 'Akne på kinder och panna före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-mild.webp', image_alt: 'Mild akne före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-munnen.webp', image_alt: 'Akne runt munnen före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-mycket.webp', image_alt: 'Mycket akne före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-panna.webp', image_alt: 'Akne på pannan före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-prickar.webp', image_alt: 'Akne och prickar före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-pustler-panna.webp', image_alt: 'Pustler på pannan före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-pustler-tinning.webp', image_alt: 'Pustler på tinningen före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-roda-marken.webp', image_alt: 'Akne med röda märken före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-rodnad.webp', image_alt: 'Akne med rodnad före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-rygg.webp', image_alt: 'Akne på ryggen före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-sida.webp', image_alt: 'Akne från sidan före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-stora.webp', image_alt: 'Stora finnar före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar-hela-ansiktet.webp', image_alt: 'Svår akne i hela ansiktet före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar-kind-panna-mun.webp', image_alt: 'Svår akne på kind, panna och mun före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar-kind.webp', image_alt: 'Svår akne på kinden före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-svar.webp', image_alt: 'Svår akne före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-tinning-kinder-panna.webp', image_alt: 'Akne på tinning, kinder och panna före och efter behandling', image_title: 'Akne resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-utslag.webp', image_alt: 'Akne och utslag före och efter behandling', image_title: 'Akne resultat', content: ''),
];

$results = [
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-2.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-3.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-10.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-4.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-5.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-6.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-7.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-8.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-9.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/resultat-acne-fore-och-efter-bilder-1.jpg',
        image_alt: '',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'bilder/resultat/744x496/resultat-akne-1.jpg',
        image_alt: 'Före och efter bild på kund med akne',
        image_title: 'Före och efter bild på kund med akne',
        content: '<a href="acne.php">Acne</a> behandlat med <a href="acnebehandling.php">Acnebehandling</a> och <a href="https://www.dahlskincare.com/sv/produktkategorier/produktpaket/akne">produktpaket mot akne</a>.',
    ),
    new LabelImage(
        image_url: 'bilder/resultat/744x496/resultat-akne-2.jpg',
        image_alt: 'Före och efter bild på kund med akne',
        image_title: 'Före och efter bild på kund med akne',
        content: '<a href="acne.php">Acne</a> behandlat med <a href="acnebehandling.php">Ansiktsbehandling mot acne</a> och <a href="https://www.dahlskincare.com/sv/produktkategorier/produktpaket/akne">produktpaket mot akne</a>.',
    ),
];

?>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: $result_category->title,
                description: $result_category->description_1,
                description_extended: $result_category->description_2,
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
        </section>
        <div class="container">
            <section id="results">
                <?php
                $results_title = '';
                $initial_count = 999;
                $show_view_all_button = false;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results_grid/results_grid.php');
                ?>
            </section>
            <section id="cards">
                <?php foreach ($results as $result) { ?>
                    <div class="result-card">
                        <img src="<?php echo $result->image_url ?>" alt="<?php echo $result->image_alt ?>" title="<?php echo $result->image_title ?>" />
                        <div class="result-card-content"><?php echo $result->content ?></div>
                    </div>
                <?php } ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
                </div>
            </section>
            <section id="reviews" class="large-margin">
                <div class="h500 l10n">Omdömen</div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php'); ?>

            </section>
            <section id="faq" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Frågor & svar</h2>
                    <a href="fragor-svar.php" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se alla frågor">Se alla frågor</a>
            </section>

            <section id="specialists" class="large-margin">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Våra hudterapeuter</h2>
                    <a href="/hudterapeut/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla hudterapeuter</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="/hudterapeut/" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
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