<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/resultat-pormaskar.php" />

    <title>Före och efter bilder - Pormaskar | AcneSpecialisten</title>
    <meta name="description" content="Se före och efterbilder på resultatet från våra pormask kunder. Upptäck hur du kan få klarare hud och uppnå resultat med AcneSpecialistens behandlingar">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php

$path_segments = array(
    new PathSegment('Resultat', '/resultat.php'),
    new PathSegment('Pormaskar', '/resultat-pormaskar.php'),
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
        id: 'pormaskar',
        title: 'Pormaskar resultat',
        description_1: 'Upptäck framstegen vi gör hos AcneSpecialisten i behandlingen av pormaskar. Denna sida visar en samling av före- och efterbilder som demonstrerar den märkbara effekten av våra skräddarsydda behandlingar såsom portömning. Bevittna hur vi noggrant rengör och minskar pormaskar, vilket bidrar till en klarare och jämnare hud.',

        description_2: 'Är du redo att effektivt hantera dina pormaskar och se verkliga resultat? Genom att boka en kostnadsfri konsultation hos AcneSpecialisten, tar du det första steget mot en renare och mer strålande hud. Våra anpassade behandlingsplaner är utformade för att målinriktat angripa och minska pormaskar, vilket förbättrar både hudens utseende och dess hälsa.',
    );

$results_images = [
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-ansikte-inflammerad.webp', image_alt: 'Inflammerade pormaskar i ansiktet före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-ansikte-vita.webp', image_alt: 'Vita pormaskar i ansiktet före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-ansikte.webp', image_alt: 'Pormaskar i ansiktet före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-haka.webp', image_alt: 'Pormaskar på hakan före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-kind-haka.webp', image_alt: 'Pormaskar på kind och haka före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-kind-svarta.webp', image_alt: 'Svarta pormaskar på kinden före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-kind.webp', image_alt: 'Pormaskar på kinden före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-manga-ansikte.webp', image_alt: 'Många pormaskar i ansiktet före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-mycket-ansikte.webp', image_alt: 'Mycket pormaskar i ansiktet före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-porig-hy.webp', image_alt: 'Porig hy före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-roda-ansikte.webp', image_alt: 'Röda pormaskar i ansiktet före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/pormaskar/pormaskar-resultat-fore-efter-rodnad-ansikte.webp', image_alt: 'Pormaskar med rodnad före och efter behandling', image_title: 'Pormaskar resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/blandhy/blandhy-resultat-fore-efter-ansikte.webp', image_alt: 'Blandhy i ansiktet före och efter behandling', image_title: 'Blandhy resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/blandhy/blandhy-resultat-fore-efter-ansikte-vanster.webp', image_alt: 'Blandhy från vänster sida före och efter behandling', image_title: 'Blandhy resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/blandhy/blandhy-resultat-fore-efter-ansikte-jamnare-hudton.webp', image_alt: 'Blandhy med ojämn hudton före och efter behandling', image_title: 'Blandhy resultat', content: ''),
];

$results = [
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-i-ansiktet.jpg',
        image_alt: 'pormaskar i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-svarta.jpg',
        image_alt: 'svarta pormaskar före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-vita.jpg',
        image_alt: 'vita pormaskar före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/fore-och-efter-bilder-pormaskar-pa-kinderna.jpg',
        image_alt: 'pormaskar på kinderna',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'resultat/pormaskar-2.jpg',
        image_alt: 'pormaskar i ansiktet',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: 'bilder/resultat/744x496/resultat-pormaskar-1.jpg',
        image_alt: 'Före och efter bild på kund med pormaskar',
        image_title: 'Före och efter bild på kund med pormaskar',
        content: '<a href="pormaskar.php">Pormaskar</a> behandlat med <a href="portomning.php">portömning</a> och <a href="https://www.dahlskincare.com/sv/produktkategorier/produktpaket/pormaskar">produktpaket mot pormaskar</a>.',
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
                    <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
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
                        <span class="l10n">Se fler frågor</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $faq_categories = null;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php');
                ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="fragor-svar.php" title="Se fler frågor">Se fler frågor</a>
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