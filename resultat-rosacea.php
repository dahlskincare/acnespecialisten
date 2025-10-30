<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/resultat-rosacea.php" />

    <title>Före och efter bilder rosacea - Resultat | AcneSpecialisten</title>
    <meta name="description" content="Se före och efterbilder på resultatet från våra rosacea kunder. Upptäck hur du kan få klarare hud och uppnå resultat med AcneSpecialistens behandlingar">
    <meta name="keywords" content="rosacea bilder, rosacea näsa bilder, bilder på hudutslag, bilder hudutslag, utslag i ansiktet bilder">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/resultat/style.css">
</head>

<?php

$path_segments = array(
    new PathSegment('Resultat', '/resultat.php'),
    new PathSegment('Rosacea', '/resultat-rosacea.php'),
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
        id: 'rosacea',
        title: 'Rosacea resultat',
        description_1: 'Utforska hur AcneSpecialisten framgångsrikt behandlar rosacea. Denna sida samlar före- och efter bilder som visar effektiva resultat av våra specialanpassade behandlingar. Se hur vi minskar rodnad och lugnar huden, vilket bidrar till att förbättra hudens hälsa och övergripande utseende för personer med rosacea.',

        description_2: 'Redo att ta itu med din rosacea och uppnå en lugnare hudton? Boka en kostnadsfri konsultation hos AcneSpecialisten och börja din resa mot en mer balanserad och hälsosam hud. Våra skräddarsydda behandlingsplaner är utformade för att effektivt hantera symtomen på rosacea och ge dig en klarare och jämnare hudton.',
    );

$results_images = [
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte.webp',
        image_alt: 'Rosacea i ansiktet före och efter behandling',
        image_title: 'Rosacea resultat - ansikte',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinder.webp',
        image_alt: 'Rosacea på kinderna före och efter behandling',
        image_title: 'Rosacea resultat - kinder',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-nasa-kinder.webp',
        image_alt: 'Rosacea på näsan och kinderna före och efter behandling',
        image_title: 'Rosacea resultat - näsa och kinder',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-rodnad.webp',
        image_alt: 'Rodnad från rosacea före och efter behandling',
        image_title: 'Rosacea resultat - rodnad',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-hela-ansiktet.webp',
        image_alt: 'Rosacea i hela ansiktet före och efter behandling',
        image_title: 'Rosacea resultat - hela ansiktet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte-vanster.webp',
        image_alt: 'Rosacea från vänster sida före och efter behandling',
        image_title: 'Rosacea resultat - vänster sida',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte-hoger.webp',
        image_alt: 'Rosacea från höger sida före och efter behandling',
        image_title: 'Rosacea resultat - höger sida',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-panna-kinder.webp',
        image_alt: 'Rosacea på panna och kinder före och efter behandling',
        image_title: 'Rosacea resultat - panna och kinder',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-mycket-ansikte.webp',
        image_alt: 'Svår rosacea i ansiktet före och efter behandling',
        image_title: 'Rosacea resultat - svår rosacea',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinderna.webp',
        image_alt: 'Rosacea på kinderna före och efter behandling',
        image_title: 'Rosacea resultat - kinderna',
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
                $results_title = ''; // No title on result pages
                $initial_count = 999; // Show all results on result pages
                $show_view_all_button = false; // Don't show "view all" button on result pages
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results_grid/results_grid.php');
                ?>
            </section>
            <section id="cta-banner" class="large-margin">
                <div id="cta-banner-texts">
                    <div class="l10n" id="cta-banner-header">Vill du ha hjälp med din hy?</div>
                    <div class="p200 l10n" id="cta-banner-content">Boka en gratis hudkonsultation hos en av våra erfarna hudterapeuter.</div>
                </div>
                <div>
                    <a href="https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea" class="button white expand l10n" title="Boka en gratis hudkonsultation">Boka en gratis hudkonsultation</a>
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