<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/resultat-ytliga-blodkarl.php" />

    <title>IPL Behandling Resultat - Ytliga blodkärl | AcneSpecialisten</title>
    <meta name="description" content="Före och efterbilder på resultatet från våra kunder med ytliga blodkärl. Upptäck hur du kan få klarare hud och uppnå resultat med AcneSpecialistens behandlingar">
    <meta name="keywords" content="ipl behandling resultat, ipl före och efter bilder, ipl före efter">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php

$path_segments = array(
    new PathSegment('Resultat', '/resultat.php'),
    new PathSegment('Ytliga Blodkärl', '/resultat-ytliga-blodkarl.php'),
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
        id: 'ytligablodkarl',
        title: 'Ytliga blodkärl resultat',
        description_1: 'Upptäck AcneSpecialistens framgångar i IPL behandlingen resultat mot <a class="b200 underline" href="/ytliga-blodkarl.php" title="Mer information om synliga blodkärl">synliga blodkärl</a>. På denna sida presenteras före- och efter bilder som visar de imponerande resultaten av våra anpassade behandlingar. Se hur vi minskar synligheten av ytliga blodkärl och förbättrar hudens övergripande ton och utseende.',

        description_2: 'Är du redo att effektivt hantera ytliga blodkärl och se en betydande förbättring i din hud? Boka en kostnadsfri konsultation hos AcneSpecialisten för att börja din resa mot en jämnare hudton. Vi erbjuder skräddarsydda behandlingslösningar anpassade för att specifikt minska ytliga blodkärl och förbättra din hudhälsa.',
    );

$results_images = [
    new LabelImage(image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte-hoger.webp', image_alt: 'Ytliga blodkärl från höger sida före och efter behandling', image_title: 'Ytliga blodkärl resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte-vanster.webp', image_alt: 'Ytliga blodkärl från vänster sida före och efter behandling', image_title: 'Ytliga blodkärl resultat', content: ''),
    new LabelImage(image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte.webp', image_alt: 'Ytliga blodkärl i ansiktet före och efter behandling', image_title: 'Ytliga blodkärl resultat', content: ''),
];

$results = [
    new LabelImage(
        image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte-hoger.webp',
        image_alt: 'Ytliga blodkärl från höger sida före och efter behandling',
        image_title: 'Resultat - ytliga blodkärl',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte-vanster.webp',
        image_alt: 'Ytliga blodkärl från vänster sida före och efter behandling',
        image_title: 'Resultat - ytliga blodkärl',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte.webp',
        image_alt: 'Ytliga blodkärl i ansiktet före och efter behandling',
        image_title: 'Resultat - ytliga blodkärl',
        content: '',
    ),
    new LabelImage(
        image_url: '/resultat/fore-och-efter-bilder-ytliga-blodkarl-i-ansiktet.jpg',
        image_alt: 'ytliga blodkärl i ansiktet kund före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: '/resultat/fore-och-efter-bilder-ytliga-blodkarl-fore-och-efterbilder.jpg',
        image_alt: 'ytliga blodkärl före och efter bilder resultat',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: '/resultat/fore-och-efter-bilder-ytliga-blodkarl-nasvingarna.jpg',
        image_alt: 'ytliga blodkärl på näsvingarna före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: '/resultat/ytliga-blodkarl-4.jpg',
        image_alt: 'ytliga blodkärl i ansiktet före och efter bilder',
        image_title: '',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/744x496/resultat-ytliga-blodkarl-1.jpg',
        image_alt: 'Före och efter bild på kund med ytliga blodkärl',
        image_title: 'Före och efter bild på kund med ytliga blodkärl',
        content: '<a href="ytliga-blodkarl.php">Ytliga Blodkärl</a> som behandlats med <a href="ipl-ytliga-blodkarl.php">IPL Ytliga Blodkärl</a>',
    ),
    new LabelImage(
        image_url: '/resultat/fore-och-efter-bilder-ytliga-blodkarl-pa-huden.jpg',
        image_alt: 'ytliga blodkärl på huden före och efter bilder',
        image_title: '',
        content: '',
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
                    <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
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