<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Laser mot ärr | AcneSpecialisten';
$seo_description = 'Effektiv metod för att reducera ärr efter operationer och skador. Vi erbjuder skräddarsydd behandlingar för att förbättra och eliminera dina ärr.';
$seo_keywords = 'laserbehandling av ärr, laser på ärr, laser ärr, laser för ärr, laserbehandling ärr, laser ärr före efter, laserbehandling ärr kostnad';

$seo_image = '/bilder/hudbehandlingar/424x456/laser-mot-problemhy.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Laser mot ärr', 'laser-arr.php'),
);

$model = new Service(
    title: 'Laser mot ärr',
    duration: null,
    price: 'Från 4595 kr',
    content: '',
    image_small: 'bilder/hudbehandlingar/358x274/laser-mot-problemhy.webp',
    image_large: 'bilder/hudbehandlingar/424x456/laser-mot-problemhy.webp',
    image_alt: 'Laser mot ärr',
    image_title: 'Laser mot ärr',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '4595 kr',
            savings: null,
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY&procedures=PriceClass_9_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '10995 kr',
            savings: 'Spara 2790 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY&procedures=PriceClass_9_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '15995 kr',
            savings: 'Spara 6980 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY&procedures=PriceClass_9_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$floating_box = 'Effektiv laserbehandling som förbättrar hudens struktur.';

$description_title = 'Hur går behandlingen till?';
$description_text = '<p class="p200">Laserbehandling är en avancerad metod för att effektivt minska synligheten av ärr orsakade av operationer och skador vilket inkluderar acneärr och bristningar. Denna teknik använder koncentrerat ljus för att försiktigt ta bort ärrvävnad och stimulera hudens naturliga läkningsprocess, vilket resulterar i en jämnare och mer enhetlig hudton.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi dessutom <a class="b200 underline color-deep-sea-400" href="/laser-acnearr.php" title="Mer information om acneärr laser">acneärr laser</a> som en del av vår omfattande ärrbehandlingsportfölj. Våra specialister anpassar behandlingen efter varje individs unika hudtyp och ärrbildning, med målet att uppnå optimala resultat. Utöver laserbehandlingar inkluderar våra behandlingsmetoder även microneedling och kemisk peeling, vilka kompletterar och förstärker effekten av laser.</p>';

$types_title = '';
$types_description = '';
$big_types = array(
    new Service(
        title: 'Laser mot ärr',
        duration: '30 min',
        price: null,
        content: '<p class="p200">Laserbehandling mot ärr är en effektiv process anpassad för att minska synligheten av ärr, oavsett om de är från skador eller operationer. Behandlingen inleds med en grundlig hudanalys för att utvärdera ärrets egenskaper och din hudtyp. Denna analys är avgörande för att skräddarsy behandlingen efter dina specifika behov. Processen fortsätter med själva laserbehandlingen, där fokuserat ljus används för att selektivt bryta ner ärrvävnaden. Detta stimulerar hudens naturliga läkningsprocess och främjar cellförnyelse.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/laser.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser.webp',
        image_alt: 'Laser mot ärr',
        image_title: 'Laser mot ärr',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
        consultation_url_label: 'Boka hudkonsultation',
        consultation_url_title: 'Boka hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka behandling',
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '4595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY&procedures=PriceClass_9_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '10995 kr',
                savings: 'Spara 2790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY&procedures=PriceClass_9_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '15995 kr',
                savings: 'Spara 6980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY&procedures=PriceClass_9_Procedure_5'
            )
        )
    ),

);

$results_title = 'Laser ärr före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.webp',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '5 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Cazzandra Lindberg'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.webp',
        url_title: 'Rosacea resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Rosaceabehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår rosacea',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
);

$reviews_title = 'Omdömen';

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur många behandlingar behövs?',
            text: 'Antalet behandlingar kan variera beroende på individens hudtyp och hudens tillstånd. Generellt rekommenderas en serie av behandlingar för bästa möjliga resultat och sedan underhållsbehandlingar för långsiktig effekt.'
        ),
        new Question(
            title: 'Hur ofta ska jag boka en klassisk ansiktsbehandling?',
            text: 'För att upprätthålla resultat och hudens hälsa, rekommenderar vi en klassisk ansiktsbehandling var fjärde till sjätte vecka. Det kan justeras beroende på personliga behov och hudens tillstånd.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig direkt efter behandlingen?',
            text: 'Efter en klassisk ansiktsbehandling kan huden vara lite rosig och kännas extra mjuk och återfuktad. Det är viktigt att följa eftervårdsinstruktionerna för att maximera behandlingens effekt. I de fall där en mer resultatinriktad behandling gjorts kan upplevelsen av huden variera.'
        ),
        new Question(
            title: 'Behövs speciell eftervård efter en klassisk ansiktsbehandling?',
            text: 'Eftervård är viktigt för att bevara resultatet av din ansiktsbehandling. Det innefattar solskydd, mild hudvård, och att undvika starka hudirriterande ämnen ett par dagar efter behandlingen.'
        )
    )
);

$faq_view_more = 'Se alla frågor & svar';



$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'images/brands/infuzion.svg',
        image_alt: 'Infuzion',
        image_title: 'Infuzion',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/laser-arr.php" />

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
                                include('../widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor"><?php echo $faq_view_more ?></a>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>