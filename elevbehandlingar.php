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
    image_small: 'bilder/hudbehandlingar/358x274/ansiktsbehandling-rosacea.webp',
    image_large: 'bilder/hudbehandlingar/424x456/ansiktsbehandling-rosacea.webp',
    image_alt: 'Elevbehandlingar på AcneSpecialisten',
    image_title: 'Elevbehandlingar på AcneSpecialisten',
    consultation_url: null,
    consultation_url_label: null,
    consultation_url_title: null,
    booking_url: null,
    booking_url_label: null,
    booking_url_title: null,
    procedures: array(
        new Procedure(
            label: 'Ansiktsbehandling Lyx',
            price: '995 kr',
            savings: null,
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/ansiktsbehandling-lyx-elev-3359125',
            booking_url_label: 'Boka',
            booking_url_title: 'Boka Ansiktsbehandling Lyx'
        ),
        new Procedure(
            label: 'Massage',
            price: '595 kr',
            savings: null,
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/massage-elev-3359088',
            booking_url_label: 'Boka',
            booking_url_title: 'Boka Massage'
        )
    ),
);

$floating_box = 'Förmånliga priser på Östermalm.';

$description_title = 'Vad är elevbehandlingar?';
$description_text = '<p class="p200">Under en begränsad tid erbjuder vi elevbehandlingar på vår salong på Östermalm. Våra elever utför behandlingarna med vägledning från våra erfarna hudterapeuter. Du får samma höga kvalitet som våra ordinarie behandlingar till förmånliga priser.</p>
<p class="p200 mt-m">Vi erbjuder ansiktsbehandlingar, brynbehandlingar och massage. Boka våra populära elevbehandlingar och få professionell hudvård till ett reducerat pris.</p>
<p class="p200 mt-m"><strong>OBS!</strong> Endast tillgängligt på Östermalm under begränsad period.</p>';

$top_articles = array();

$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        title: 'Ansiktsbehandlingar',
        description: '<p class="p200">Våra elever utför professionella ansiktsbehandlingar med vägledning från erfarna hudterapeuter.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Klassisk',
                duration: '60 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/ansiktsbehandling-klassisk-elev-3359049',
                url_label: 'Boka',
                url_title: 'Boka Klassisk Ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Relax',
                duration: '70 min',
                price: '795 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/ansiktsbehandling-relax-elev-3359086',
                url_label: 'Boka',
                url_title: 'Boka Relax Ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Lyx',
                duration: '90 min',
                price: '995 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/ansiktsbehandling-lyx-elev-3359125',
                url_label: 'Boka',
                url_title: 'Boka Lyx Ansiktsbehandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        title: 'Brynbehandlingar',
        description: '<p class="p200">Professionell brynformning och färgning utförd av våra elever.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Brynformning',
                duration: '20 min',
                price: '195 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/brynformning-elev-3359091',
                url_label: 'Boka',
                url_title: 'Boka Brynformning'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Brynformning + Brynfärg',
                duration: '30 min',
                price: '295 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/brynformning-brynfarg-elev-3359099',
                url_label: 'Boka',
                url_title: 'Boka Brynformning + Brynfärg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Brynformning + Brynfärg + Fransfärg',
                duration: '40 min',
                price: '395 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/brynformning-brynfarg-fransfarg-elev-3359105',
                url_label: 'Boka',
                url_title: 'Boka Brynformning + Brynfärg + Fransfärg'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        title: 'Massage',
        description: '<p class="p200">Avslappnande massage utförd av elev för att lindra spänningar och förbättra cirkulationen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: null,
                image_title: null,
                title: 'Massage - Elev',
                duration: '60 min',
                price: '595 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-acnespecialisten-ostermalm-43559/massage-elev-3359088',
                url_label: 'Boka',
                url_title: 'Boka Massage'
            ),
        )
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
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/treatment_floater.php'); ?>
    <main>
        <section id="header">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/treatment_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
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

                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php foreach ($treatment_areas as $treatment_area) { ?>
                            <?php if (isset($treatment_area->image_small)) { ?>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img loading="lazy" class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl4"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
                    </section>
                <?php } ?>

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
