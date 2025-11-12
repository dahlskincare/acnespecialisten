<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Elevbehandlingar Stockholm Östermalm | AcneSpecialisten';
$seo_description = 'Professionella elevbehandlingar utförda av våra skickliga elever på Östermalm. Kvalitetsbehandlingar till förmånliga priser.';
$seo_keywords = 'elevbehandlingar, elevbehandlingar stockholm, elevbehandling ansiktsbehandling stockholm, elevbehandling östermalm';

$seo_image = 'bilder/hudbehandlingar/424x456/klassiska-ansiktsbehandlingar.webp';

$path_segments = array(
    new PathSegment('Elevbehandlingar', '/elevbehandlingar.php'),
);

$model = new Service(
    title: 'Elevbehandlingar på Östermalm',
    duration: null,
    price: 'Från 195 kr',
    content: '<p class="p200">Under en begränsad tid erbjuder vi elevbehandlingar på vår salong på Östermalm. Våra elever är under utbildning och utför behandlingarna med vägledning från våra erfarna hudterapeuter. Detta ger dig möjlighet att få professionella behandlingar till ett förmånligt pris samtidigt som våra elever får värdefull praktisk erfarenhet.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/klassiska-ansiktsbehandlingar.webp',
    image_large: 'bilder/hudbehandlingar/424x456/klassiska-ansiktsbehandlingar.webp',
    image_alt: 'Elevbehandlingar på AcneSpecialisten',
    image_title: 'Elevbehandlingar på AcneSpecialisten',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem',
    consultation_url_label: 'Boka gratis konsultation',
    consultation_url_title: 'Boka tid för gratis konsultation',
    booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559',
    booking_url_label: 'Se alla elevbehandlingar',
    booking_url_title: 'Se alla elevbehandlingar',
);

$floating_box = 'Kvalitetsbehandlingar till förmånliga priser.';

$description_title = 'Vad är elevbehandlingar?';
$description_text = '<p class="p200">Elevbehandlingar är professionella hudvårdsbehandlingar som utförs av våra elever under utbildning, med stöd och vägledning från våra erfarna hudterapeuter. Du får kvalitativa behandlingar till förmånliga priser.</p>
<p class="p200 mt-m"><strong>OBS!</strong> Begränsad period - endast på Östermalm.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingarna till?',
        image_small: '/bilder/process/358x272/ansiktsbehandlingar-process.webp',
        image_large: '/bilder/process/872x456/ansiktsbehandlingar-process.webp',
        image_alt: 'Processen för elevbehandlingar',
        image_title: 'Processen för elevbehandlingar',
        content: '<p class="p200">Behandlingen utförs av en elev under utbildning, med stöd från våra erfarna hudterapeuter. Du får samma höga standard som våra ordinarie behandlingar till ett förmånligt pris.</p>',
    ),
);

$types_title = 'Våra elevbehandlingar';
$types_description = 'Alla elevbehandlingar finns endast tillgängliga på vår salong på Östermalm.';
$big_types = array(
    new Service(
        title: 'Ansiktsbehandling - Klassisk - Elev',
        duration: '60 min',
        price: '595 kr',
        content: '<p class="p200">Vår klassiska ansiktsbehandling utförd av elev. Behandlingen inkluderar rengöring, ånga, extraktion av pormaskar, ansiktsmask och återfuktning. Perfekt för dig som vill ha en grundlig ansiktsbehandling till ett förmånligt pris.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-klassisk.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-klassisk.webp',
        image_alt: 'Klassisk Ansiktsbehandling - Elev',
        image_title: 'Klassisk Ansiktsbehandling - Elev',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/ansiktsbehandling-klassisk-elev-3359049',
        booking_url_label: 'Boka',
        booking_url_title: 'Boka Klassisk Ansiktsbehandling - Elev',
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
    ),
    new Service(
        title: 'Ansiktsbehandling - Lyx - Elev',
        duration: '90 min',
        price: '995 kr',
        content: '<p class="p200">Vår mest omfattande ansiktsbehandling utförd av elev. Behandlingen inkluderar djuprengöring, ansiktsmassage, exfoliering, extraktion, bryn- och fransfärgning, sheetmask och LED-behandling. En lyxig upplevelse som ger din hud den ultimata omsorgen.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-lyx.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-lyx.webp',
        image_alt: 'Lyx Ansiktsbehandling - Elev',
        image_title: 'Lyx Ansiktsbehandling - Elev',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/ansiktsbehandling-lyx-elev-3359125',
        booking_url_label: 'Boka',
        booking_url_title: 'Boka Lyx Ansiktsbehandling - Elev',
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
    ),
    new Service(
        title: 'Ansiktsbehandling - Relax - Elev',
        duration: '70 min',
        price: '795 kr',
        content: '<p class="p200">En avslappnande ansiktsbehandling utförd av elev med fokus på återhämtning och lugn. Behandlingen inkluderar lätt rengöring, ansiktsmassage med näringsrik olja, ansiktsmask och LED-terapi. Perfekt för dig som vill varva ner och ge din hud en väl behövlig paus.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-antistress.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-antistress.webp',
        image_alt: 'Relax Ansiktsbehandling - Elev',
        image_title: 'Relax Ansiktsbehandling - Elev',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/ansiktsbehandling-relax-elev-3359086',
        booking_url_label: 'Boka',
        booking_url_title: 'Boka Relax Ansiktsbehandling - Elev',
        icons: array('rengoring' => 'Lätt rengöring', 'mild' => 'Ansiktsmassage', 'led' => 'LED'),
    ),
    new Service(
        title: 'Brynformning - Elev',
        duration: '20 min',
        price: '195 kr',
        content: '<p class="p200">Professionell brynformning utförd av elev. Vi formar dina ögonbryn för att framhäva dina ansiktsdrag och ge dig en fräsch look. Behandlingen utförs noggrant för att ge dig ett naturligt och vackert resultat.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/fransar-bryn.webp',
        image_large: '/bilder/hudbehandlingar/200x200/fransar-bryn.webp',
        image_alt: 'Brynformning - Elev',
        image_title: 'Brynformning - Elev',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/brynformning-elev-3359091',
        booking_url_label: 'Boka',
        booking_url_title: 'Boka Brynformning - Elev',
    ),
    new Service(
        title: 'Brynformning + Brynfärg - Elev',
        duration: '30 min',
        price: '295 kr',
        content: '<p class="p200">Komplett brynbehandling med formning och färgning utförd av elev. Vi formar och färgar dina bryn för att ge dem mer volym och definition. Resultatet är väldefinierade bryn som framhäver din naturliga skönhet.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/fransar-bryn.webp',
        image_large: '/bilder/hudbehandlingar/200x200/fransar-bryn.webp',
        image_alt: 'Brynformning + Brynfärg - Elev',
        image_title: 'Brynformning + Brynfärg - Elev',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/brynformning-brynfarg-elev-3359099',
        booking_url_label: 'Boka',
        booking_url_title: 'Boka Brynformning + Brynfärg - Elev',
    ),
    new Service(
        title: 'Brynformning + Brynfärg + Fransfärg - Elev',
        duration: '40 min',
        price: '395 kr',
        content: '<p class="p200">Komplett bryn- och fransbehandling utförd av elev. Vi formar och färgar både bryn och fransar för ett uttrycksfullt och öppet blick. Perfekt för dig som vill ha en komplett look utan att behöva använda mascara dagligen.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/fransar-bryn.webp',
        image_large: '/bilder/hudbehandlingar/200x200/fransar-bryn.webp',
        image_alt: 'Brynformning + Brynfärg + Fransfärg - Elev',
        image_title: 'Brynformning + Brynfärg + Fransfärg - Elev',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/brynformning-brynfarg-fransfarg-elev-3359105',
        booking_url_label: 'Boka',
        booking_url_title: 'Boka Brynformning + Brynfärg + Fransfärg - Elev',
    ),
    new Service(
        title: 'Massage - Elev',
        duration: '60 min',
        price: '595 kr',
        content: '<p class="p200">Avslappnande och återställande massage utförd av elev. Behandlingen hjälper till att lindra spänningar, förbättra cirkulationen och ge dig en välbehövlig stund av avkoppling. Massagen anpassas efter dina önskemål och behov.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-antistress.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-antistress.webp',
        image_alt: 'Massage - Elev',
        image_title: 'Massage - Elev',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/massage-elev-3359088',
        booking_url_label: 'Boka',
        booking_url_title: 'Boka Massage - Elev',
    ),
);

$service_brands_title = 'Varumärken för elevbehandlingar';
$service_brands_text = '<p class="p200">Våra elever använder samma högkvalitativa produkter och varumärken som vi använder i våra ordinarie behandlingar.</p>';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/elevbehandlingar.php" />

    <title><?php echo $seo_title ?></title>
    <meta name="description" content="<?php echo $seo_description ?>">
    <meta name="keywords" content="<?php echo $seo_keywords ?>">

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudbehandlingar/service.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <main>
        <section id="banner">
            <?php
            $green_banner_content = new GreenBannerContent(
                title: $model->title,
                description: $model->content,
                description_extended: $model->content,
                button_label: $model->booking_url_label,
                button_url: $model->booking_url,
                button_url_title: $model->booking_url_title,
                floating_box: $floating_box
            );
            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php');
            ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="mt-m is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="mt-m is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_small ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $description_title ?></h2>
                    <div class="mt-xl"><?php echo $description_text ?></div>
                </section>
                <?php if (isset($top_articles)) {
                    foreach ($top_articles as $id => $article) { ?>
                        <section id="<?php echo $id ?>">
                            <?php
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                            ?>
                        </section>
                <?php }
                } ?>

                <section id="treatment-types">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n"><?php echo $types_title ?></h2>
                    </div>
                    <?php if (isset($types_description)) { ?>
                        <p class="p200 mt-xs"><?php echo $types_description ?></p>
                    <?php } ?>
                    <div class="mt-xl">
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $scm) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php') ?>
                        <?php }
                        } ?>
                        <hr class="is-hidden-touch" />
                    </div>
                    <?php if (isset($types_url)) { ?>
                        <div class="mt-xl is-hidden-tablet">
                            <a class="button outline expand l10n" href="<?php echo $types_url ?>" title="<?php echo $types_url_title ?>"><?php echo $types_url_label ?></a>
                        </div>
                    <?php } ?>
                </section>

                <?php if (isset($service_brands)) { ?>
                    <section id="service-brands" class="large-margin">
                        <?php if (isset($service_brands_title)) { ?>
                            <h2 class="h500"><?php echo $service_brands_title ?></h2>
                        <?php } ?>
                        <?php if (isset($service_brands_text)) { ?>
                            <div class="mt-xs"><?php echo $service_brands_text ?></div>
                        <?php } ?>
                        <?php
                        $brands = $service_brands;
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                        ?>
                    </section>
                <?php } ?>

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
                        <a href="hudterapeut/" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="hudterapeut/" title="Se alla hudterapeuter">Se alla hudterapeuter</a>
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
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>
