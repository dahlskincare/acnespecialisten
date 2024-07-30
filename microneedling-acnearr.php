<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Microneedling mot acneärr | AcneSpecialisten';
$seo_description = 'Behandla acneärr effektivt med hjälp av Microneedling. Läs mer och boka en gratis hudkonsultation idag!';
$seo_keywords = 'microneedling, behandling av akneärr, förbättrad hudstruktur, jämn hudton, kollagenproduktion, hudföryngring, minskning av akneärr, förfinad hud, porminskning, hudförbättring';

$seo_image = 'images/treatments/large/microneedling.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Microneedling mot akne', 'microneedling-acnearr.php'),
);

$model = new Service(
    title: 'Microneedling mot akneärr',
    duration: null,
    price: 'Från 2332 kr',
    content: '',
    image_small: 'bilder/hudbehandlingar/358x274/microneedling.webp',
    image_large: 'bilder/hudbehandlingar/424x456/microneedling.webp',
    image_alt: 'Microneedling',
    image_title: 'Microneedling',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
    consultation_url_label: 'Boka konsultation',
    consultation_url_title: 'Boka konsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '2595 kr',
            savings: null,
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_LargePores&area=EMPTY&procedures=PriceClass_5_Procedure_1',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '6995 kr',
            savings: 'Spara 790 kr',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_LargePores&area=EMPTY&procedures=PriceClass_5_Procedure_3',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '9995 kr',
            savings: 'Spara 2980 kr',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_LargePores&area=EMPTY&procedures=PriceClass_5_Procedure_5',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka behandling'
        )
    ),
);

$floating_box = 'Behandlar och reducerar akneärr.';

$description_title = 'Hur går behandlingen till?';
$description_text = '<p class="p200">Vi använder oss av Dermapen mot akneärr som är precisionsutformade mikronålar som förbättrar hudens textur och minska akneärr. Genom att skapa små, nästan omärkliga punkteringar i huden, stimulerar denna teknik hudens egen läkningsmekanism och ökar produktionen av kollagen. Detta resulterar i en synbart fastare och mer enhetlig hudstruktur.</p>
<p class="p200 mt-m">På AcneSpecialisten anpassar vi varje microneedling-behandling till dina individuella hudbehov, speciellt när det gäller akneärr. Denna metod är idealisk för att uppnå en jämnare hudton och för att reducera synligheten av ärr. Med konsekventa behandlingar kommer du att uppleva en betydande förbättring av din hud, inklusive minskade porer. Vårt främsta mål är att hjälpa dig att uppnå en mjukare och jämnare hy.</p>';

$types_title = '';
$types_description = '';
$big_types = array(
    new Service(
        title: 'Microneedling mot akneärr',
        duration: '50 min',
        price: null,
        content: '<p class="p200">En microneedling-behandling mot akneärr på AcneSpecialisten inleds med att huden rengörs grundligt för att säkerställa en ren yta. Därefter genomförs själva microneedling-proceduren med hjälp av Dermapen, där en specialiserad enhet med fina nålar varsamt punkterar hudens yta. Proceduren är precist kontrollerad för att säkerställa minimal obehag och maximal effektivitet, speciellt i områden med akneärr. Efter behandlingen tillämpas en lugnande och återfuktande kräm för att minska eventuell rodnad och påskynda återhämtningsprocessen.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_alt: 'microneedling mot akneärr',
        image_title: 'microneedling mot akneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka behandling',
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '2595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars&area=Microneedling_Face&procedures=PriceClass_5_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '6995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars&area=Microneedling_Face&procedures=PriceClass_5_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '9995 kr',
                savings: 'Spara 2980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars&area=Microneedling_Face&procedures=PriceClass_5_Procedure_5'
            )
        )
    ),

);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
        image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
        image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
        image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
        image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
        image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
        image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
        image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
        image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
        image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
        image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
        image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
        image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
        image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
        image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
        image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
);

$reviews_title = 'Omdömen';

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    'Generella frågor' => array(
        new Question(
            title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
            text: 'Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
            text: 'Under konsultationen kommer en av våra hudterapeuter att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.'
        ),
    ),
    'Frågor om behandling' => array(
        new Question(
            title: 'Vilka behandlingar erbjuder AcneSpecialisten för olika hudproblem?',
            text: 'På AcneSpecialisten erbjuder vi ett brett utbud av behandlingar anpassade för specifika hudproblem, inklusive avancerad acnebehandling, skonsam rosaceabehandling och noggrann portömning, samt andra specialbehandlingar för olika hudtillstånd.'
        ),
        new Question(
            title: 'Anpassar ni behandlingarna för olika hudtyper?',
            text: 'Absolut, på AcneSpecialisten anpassar vi våra behandlingar för att passa en mängd olika hudtyper, från mycket känslig till oljig hy, för att säkerställa den mest effektiva och skonsamma behandlingen.'
        ),
    ),
);

$faq_view_more = 'Se alla frågor & svar';

$skin_guide_title = 'Hudguiden';
$skin_guide_articles = array(
    new SkinGuideArticle(
        url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
        url_title: 'How hormones effect?',
        title: 'How hormones effect?',
        problem: 'Acne',
        image_small: 'https://via.placeholder.com/426x324.webp',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_alt: 'Hormones effect',
        image_title: 'Hormones effect',
    ),
);
$skin_guide_view_more = 'Se alla artiklar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Exceed',
        image: 'bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed',
        url_title: 'Exceedn',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/microneedling-acnearr.php" />

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
                            <?php foreach ($types as $service) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $service) { ?>
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
                                    <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
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
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>