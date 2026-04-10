<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'HIFU Ultraljud Stockholm - Avancerad hudåtstramning';
$seo_description = 'HIFU ultraljud är en icke-kirurgisk behandling som stramar åt huden genom fokuserat ultraljud. Stimulerar kollagenproduktionen djupt i SMAS-lagret för synliga resultat.';
$seo_keywords = 'HIFU, ultraljud, hudåtstramning, Stockholm';

$seo_image = '/images/treatments/large/hifu.webp';

$model = new Service(
    title: 'HIFU Ultraljud',
    duration: null,
    price: 'Från 4500 kr',
    content: '<p class="p200">HIFU (High-Intensity Focused Ultrasound) är en avancerad icke-kirurgisk behandling för hudåtstramning. Genom att använda fokuserad ultraljudsenergi stimuleras kollagenproduktionen djupt i huden, inklusive SMAS-lagret, för att ge synliga resultat utan kniv.</p>',
    image_small: 'bilder/varumarken/358x274/hifu.webp',
    image_large: 'bilder/varumarken/424x456/hifu.webp',
    image_alt: 'HIFU ultraljudsbehandling',
    image_title: 'HIFU ultraljudsbehandling',
    consultation_url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/konsultation-hifu-3442781',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://www.bokadirekt.se/places/sveriges-skonhetscenter-ostermalm-135539?sr=47EAD38D_275D_472B_96E6_68A5C5965983',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'HIFU ultraljud för hudåtstramning utan kniv.';

$description_title = 'HIFU Ultraljud - icke-kirurgisk hudåtstramning';
$description_text = '<p class="p200">HIFU (High-Intensity Focused Ultrasound) är en banbrytande behandling som använder fokuserad ultraljudsenergi för att strama åt huden på ett icke-kirurgiskt sätt. Tekniken når djupt ner till SMAS-lagret (det lager som kirurger når vid ett kirurgiskt ansiktslyft) och stimulerar kroppens naturliga kollagenproduktion.</p>
    <p class="p200 mt-m">HIFU är idealisk för dig som vill förbättra hudens fasthet och elasticitet, lyfta kinder och käklinje, minska hängande hud under hakan samt reducera fina linjer och rynkor. Resultaten varar upp till 12-18 månader och behandlingen kräver ingen återhämtningstid - du kan återgå till dina dagliga aktiviteter direkt efter besöket.</p>';

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">HIFU kan användas på flera områden för att effektivt strama åt och lyfta huden. Behandlingen är skräddarsydd för varje specifikt område och ger synliga resultat utan kirurgi.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'HIFU ansiktsbehandlingar',
        image_title: 'HIFU ansiktsbehandlingar',
        title: 'HIFU Ultraljud Ansiktet',
        description: '<p class="p200">HIFU ultraljud kan behandla flera områden i ansiktet och på halsen för optimal hudåtstramning och lyft.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Ansikte + Hals',
                image_title: 'Hifu - Ansikte + Hals',
                title: 'Hifu - Ansikte + Hals',
                duration: '60 min',
                price: '7 750 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-ansikte-hals-3442771',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU ansikte + hals'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Kinder + Nasolabiala linjer + Käklinje',
                image_title: 'Hifu - Kinder + Nasolabiala linjer + Käklinje',
                title: 'Hifu - Kinder + Nasolabiala linjer + Käklinje',
                duration: '30 min',
                price: '6 200 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-kinder-nasolabiala-linjer-kaklinje-3442766',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU kinder + nasolabiala linjer + käklinje'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Ögonbrynslyft + Panna',
                image_title: 'Hifu - Ögonbrynslyft + Panna',
                title: 'Hifu - Ögonbrynslyft + Panna',
                duration: '30 min',
                price: '4 900 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-ogonbrynslyft-panna-3442779',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU ögonbrynslyft + panna'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Hals + Dubbelhaka',
                image_title: 'Hifu - Hals + Dubbelhaka',
                title: 'Hifu - Hals + Dubbelhaka',
                duration: '30 min',
                price: '4 500 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-hals-dubbelhaka-3442773',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU hals + dubbelhaka'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'HIFU kroppsbehandlingar',
        image_title: 'HIFU kroppsbehandlingar',
        title: 'HIFU Ultraljud Kroppen',
        description: '<p class="p200">HIFU är effektivt för hudåtstramning på olika delar av kroppen. Perfekt för att behandla områden med slapp hud eller för kroppskonturering.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Mage',
                image_title: 'Hifu - Mage',
                title: 'Hifu - Mage',
                duration: '60 min',
                price: '5 200 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-mage-3442768',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU mage'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Kärlekshandtag',
                image_title: 'Hifu - Kärlekshandtag',
                title: 'Hifu - Kärlekshandtag',
                duration: '30 min',
                price: '3 900 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-karlekshandtag-3442767',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU kärlekshandtag'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Insida lår',
                image_title: 'Hifu - Insida lår',
                title: 'Hifu - Insida lår',
                duration: '30 min',
                price: '4 500 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-insida-lar-3442772',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU insida lår'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Baksida lår',
                image_title: 'Hifu - Baksida lår',
                title: 'Hifu - Baksida lår',
                duration: '30 min',
                price: '4 500 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-baksida-lar-3442774',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU baksida lår'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Rygg',
                image_title: 'Hifu - Rygg',
                title: 'Hifu - Rygg',
                duration: '50 min',
                price: '4 500 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-rygg-3442777',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU rygg'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Armar',
                image_title: 'Hifu - Armar',
                title: 'Hifu - Armar',
                duration: '30 min',
                price: '3 800 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-armar-3442775',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU armar'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Under bh-band',
                image_title: 'Hifu - Under bh-band',
                title: 'Hifu - Under bh-band',
                duration: '30 min',
                price: '3 800 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-under-bh-band-3442778',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU under bh-band'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Bröst',
                image_title: 'Hifu - Bröst',
                title: 'Hifu - Bröst',
                duration: '30 min',
                price: '3 200 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-brost-3442776',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU bröst'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Över knän',
                image_title: 'Hifu - Över knän',
                title: 'Hifu - Över knän',
                duration: '30 min',
                price: '2 700 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-over-knan-3442780',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU över knän'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Dekolletage',
                image_title: 'Hifu - Dekolletage',
                title: 'Hifu - Dekolletage',
                duration: '30 min',
                price: '2 700 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-dekolletage-3442808',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU dekolletage'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'HIFU paketbehandlingar',
        image_title: 'HIFU paketbehandlingar',
        title: 'HIFU Paket',
        description: '<p class="p200">Kombinera flera behandlingsområden med våra paketlösningar för bästa resultat och pris.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Paket - Mage + Kärlekshandtag',
                image_title: 'Hifu - Paket - Mage + Kärlekshandtag',
                title: 'Hifu - Paket - Mage + Kärlekshandtag',
                duration: '90 min',
                price: '8 500 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-paket-mage-karlekshandtag-3442770',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU mage + kärlekshandtag'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Paket - Lår + Insida lår',
                image_title: 'Hifu - Paket - Lår + Insida lår',
                title: 'Hifu - Paket - Lår + Insida lår',
                duration: '60 min',
                price: '8 200 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-paket-lar-insida-lar-3442769',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU lår + insida lår'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Hifu - Paket - Överkropp (Armar + Under bh-band + Bröst)',
                image_title: 'Hifu - Paket - Överkropp (Armar + Under bh-band + Bröst)',
                title: 'Hifu - Paket - Överkropp (Armar + Under bh-band + Bröst)',
                duration: '60 min',
                price: '7 200 kr',
                url: 'https://www.bokadirekt.se/boka-tjanst/sveriges-skonhetscenter-ostermalm-135539/hifu-paket-overkropp-armar-under-bh-band-brost--3442807',
                url_label: 'Boka',
                url_title: 'Boka tid för HIFU överkropp'
            ),
        )
    ),
);

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/hifu-forberedelser.webp',
        image_large: '/bilder/process/872x456/hifu-forberedelser.webp',
        image_alt: 'Förberedelser inför HIFU-behandling',
        image_title: 'Förberedelser inför HIFU-behandling',
        content: '<p class="p200">För att få bästa möjliga resultat av din HIFU-behandling är det viktigt att förbereda din hud rätt. Undvik solexponering en vecka före behandlingen och kom med ren hud utan smink eller hudvårdsprodukter.</p>
        <p class="p200 mt-m">Om du tar blodförtunnande mediciner, informera din hudterapeut i förväg. Det är också bra att dricka mycket vatten dagarna före behandlingen för att hålla huden väl hydrerad.</p>',
    ),
    'process' => new Article(
        title: 'Behandlingsprocessen',
        image_small: '/bilder/process/358x272/hifu-process.webp',
        image_large: '/bilder/process/872x456/hifu-process.webp',
        image_alt: 'HIFU behandlingsprocess',
        image_title: 'HIFU behandlingsprocess',
        content: '<p class="p200">Under HIFU-behandlingen appliceras fokuserad ultraljudsenergi som tränger djupt ner i huden och når SMAS-lagret. Energin skapar små termiska zoner som aktiverar kroppens naturliga kollagenproduktion och hudens läkningsprocess.</p>
        <p class="p200 mt-m">Behandlingen tar mellan 60-90 minuter beroende på område. Du kan känna en viss värme och pickkänsla under behandlingen, men de flesta upplever det som helt hanterbart. Direkt efter behandlingen kan huden vara något röd och svullen, men detta försvinner normalt inom några timmar.</p>',
    ),
);

$reviews_title = 'Omdömen';

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur fungerar HIFU-behandling?',
            text: '<p class="p200">HIFU använder fokuserad ultraljudsenergi som tränger djupt ner i huden och når SMAS-lagret. Energin skapar kontrollerade termiska zoner som stimulerar kroppens naturliga kollagenproduktion och läkningsprocess. Detta leder till strammning och lyft av huden utan kirurgiskt ingrepp.</p>'
        ),
        new Question(
            title: 'Hur länge håller resultaten från HIFU?',
            text: '<p class="p200">Resultaten från HIFU-behandling kan vara synliga direkt, men den fulla effekten utvecklas under 2-3 månader när kollagenproduktionen aktiveras. Resultaten varar vanligtvis 12-18 månader, beroende på din ålder, hudkvalitet och livsstilsfaktorer. Uppföljningsbehandlingar kan förlänga effekten.</p>'
        ),
        new Question(
            title: 'Gör HIFU-behandlingen ont?',
            text: '<p class="p200">De flesta upplever en viss värme och pickkänsla under HIFU-behandlingen när ultraljudsenergin penetrerar huden. Obehaget är dock hanterbart och kortvarigt. Din hudterapeut kan justera behandlingsintensiteten för att säkerställa din komfort under hela sessionen.</p>'
        ),
        new Question(
            title: 'Finns det någon återhämtningstid efter HIFU?',
            text: '<p class="p200">HIFU kräver ingen återhämtningstid. Du kan uppleva en viss rodnad och svullnad direkt efter behandlingen, men detta försvinner vanligtvis inom några timmar. Du kan återgå till dina dagliga aktiviteter omedelbart, men det rekommenderas att undvika intensiv träning och bastu i 24 timmar.</p>'
        ),
        new Question(
            title: 'Vem är en bra kandidat för HIFU?',
            text: '<p class="p200">HIFU passar bäst för personer som har mild till måttlig hudslapphet och vill förbättra hudens fasthet utan kirurgi. Det är idealiskt för dem i åldern 30-65 år som vill förebygga eller minska tecken på åldrande. En kostnadsfri konsultation hjälper till att avgöra om HIFU är rätt behandling för dig.</p>'
        ),
    )
);
$faq_view_more = 'Se fler frågor & svar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i HIFU-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på HIFU-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på HIFU',
        image_title: 'Veronika Benedik - Specialist inom HIFU-vård'
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund, hudterapeut med kunskap inom HIFU-behandlingar',
        image_title: 'Julia Eklund - Hudterapeut specialiserad på HIFU'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot HIFU-behandlingar',
        image_title: 'Vilma Libom - Expert inom HIFU-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/varumarken/hifu/" />

    <title><?php echo $seo_title ?></title>
    <meta name="description" content="<?php echo $seo_description ?>">
    <meta name="keywords" content="<?php echo $seo_keywords ?>">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->
    <meta property="og:title" content="<?php echo $seo_title ?>" />
    <meta property="og:description" content="<?php echo $seo_description ?>" />
    <meta property="og:image" content="<?php echo $seo_image ?>" />

    <meta property="twitter:title" content="<?php echo $seo_title ?>" />
    <meta property="twitter:description" content="<?php echo $seo_description ?>" />
    <meta property="twitter:image" content="<?php echo $seo_image ?>" />

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

                <?php if (isset($top_articles)) { ?>
                    <section id="articles" class="large-margin">
                        <?php foreach ($top_articles as $id => $article) { ?>
                            <div class="article">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                            </div>
                        <?php } ?>
                    </section>
                <?php } ?>

                <?php if (isset($types_title)) { ?>
                    <section id="types" class="large-margin">
                        <h2 class="h500"><?php echo $types_title; ?></h2>
                        <?php if (isset($types_description)) { ?>
                            <p class="p200 mt-xs"><?php echo $types_description ?></p>
                        <?php } ?>
                        <div class="mt-xl"></div>
                        <?php if (isset($types)) { ?>
                            <?php foreach ($types as $scm) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $scm) { ?>
                                <div class="big-type">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php') ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($combos) && isset($combos_title)) { ?>
                    <section id="combos" class="large-margin">
                        <h2 class="big l10n"><?php echo $combos_title ?></h2>
                        <?php foreach ($combos as $combo) { ?>
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_combo/service_combo.php') ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php if (isset($treatment_areas_title)) { ?>
                            <h2 class="big l10n"><?php echo $treatment_areas_title ?></h2>
                        <?php } ?>
                        <?php if (isset($treatment_areas_text)) { ?>
                            <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php } ?>
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
                                include($_SERVER['DOCUMENT_ROOT'] . '/hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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
                        <div class="mt-xl">
                            <?php
                            $brands = $service_brands;
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                            ?>
                        </div>
                    </section>
                <?php } ?>

                <section id="reviews" class="large-margin">
                    <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se fler frågor"><?php echo $faq_view_more ?></a>
                </section>
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>
