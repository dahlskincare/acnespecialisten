<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vakuumsug pormaskar Stockholm | AcneSpecialisten';
$seo_description = 'Vakuumsug är en effektiv metod för djuprengöring av huden. Genom vakuumteknik och specialserum avlägsnar behandlingen oönskade pormaskar.';
$seo_keywords = 'portömning med vakuumsug';

$seo_image = 'images/treatments/large/hydrafacial.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Portömning med vakuumsug', '/vakuumsug-pormaskar.php'),
);

$model = new Service(
    title: 'Portömning med vakuumsug',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Vi suger ut pormaskarna effektivt med hjälp av vakuum. Med hjälp av avancerad vakuumteknik och skräddarsydda serum rensar behandlingen porerna på djupet, avlägsnar döda hudceller och återfuktar huden.</p>',
    image_small: 'bilder/varumarken/358x274/hydrafacial.webp',
    image_large: 'bilder/varumarken/424x456/hydrafacial.webp',
    image_alt: 'Vakuumsug Pormaskar',
    image_title: 'Vakuumsug Pormaskar',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Hydrafacial',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '1995 kr',
            savings: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '4995 kr',
            savings: 'Spara 990 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '7995 kr',
            savings: 'Spara 1980 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        )
    ),
);

$floating_box = 'Vi suger ut pormaskarna effektivt med hjälp av vakuum, töm dina porer effektivt.';

$description_title = 'Hur går behandlingen till?';
$description_text = '<p class="p200">Portömning med vakuum är en modern och effektiv metod för att djuprengöra huden och bli av med oönskade pormaskar. En av de mest populära enheterna för detta ändamål är HydraFacial-maskinen, som använder vakuumteknik kombinerat med specialutformade serum för att rensa, exfoliera och återfukta huden.</p>
<p class="p200 mt-m">HydraFacial-behandlingen börjar med en skonsam exfoliering som avlägsnar döda hudceller och öppnar upp porerna. Detta förberedande steg gör det möjligt för vakuumtekniken att arbeta mer effektivt. Efter exfolieringen använder HydraFacial-maskinen ett speciellt munstycke som skapar ett vakuum över huden som extraherar varsamt ut smuts, olja och andra orenheter från porerna, inklusive envisa pormaskar.</p>
<p class="p200 mt-m">Det som gör HydraFacial behandlingen till en unik <a class="b200 underline color-deep-sea-400" href="/pormaskar.php" title="Mer information om kurer mot pormaskar">kur mot pormaskar</a> är dess förmåga att samtidigt införa närande serum i huden. Medan vakuumet rensar porerna, levererar maskinen antioxidanter, hyaluronsyra och andra hudvårdande ämnen direkt till hudens djupare lager. Detta steg inte bara rengör huden på djupet utan bidrar också till att återfukta och revitalisera den, vilket ger en fräsch och ungdomlig lyster.</p>';

$types_title = '';
$types_description = '';
$big_types = array(
    new Service(
        title: 'Vakuumsug mot pormaskar',
        duration: '40 min',
        price: null,
        content: '',
        image_small: '/bilder/hudbehandlingar/200x200/hydrafacial-pormaskar.webp',
        image_large: '/bilder/hudbehandlingar/200x200/hydrafacial-pormaskar.webp',
        image_alt: 'Vakuumsug mot pormaskar',
        image_title: 'Vakuumsug mot pormaskar',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_4_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_4_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Pore_Minimizer&Procedures=PriceClass_4_Procedure_5'
            )
        )
    ),
);

$service_brands_title = 'Märken för vakuumsugning av pormaskar';
$service_brands_text = '<p class="p200">Vi använder HydraFacial för att effektivt suga upp pormaskarna.</p>';
$service_brands = array(

    new Brand(
        label: 'HydraFacial',
        image: 'bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-1.jpg',
        image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-1.jpg',
        image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-1.jpg',
        image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-1.jpg',
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
        image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-2.jpg',
        image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-2.jpg',
        image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-2.jpg',
        image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-2.jpg',
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
        image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-3.jpg',
        image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-3.jpg',
        image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-3.jpg',
        image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-3.jpg',
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
        image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-4.jpg',
        image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-4.jpg',
        image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-4.jpg',
        image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-4.jpg',
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

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering på vakuumsug mot pormaskar',
        image_title: 'Cazzandra Lindberg - Expert på vakuumsug mot pormaskar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på vakuumsug mot pormaskar',
        image_title: 'Veronika Benedik - Specialist inom vakuumsug mot pormaskar'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom vakuumsug mot pormaskar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på vakuumsug mot pormaskar'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot vakuumsug mot pormaskar',
        image_title: 'Vilma Libom - Expert inom vakuumsug mot pormaskar'
    )
);

$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/vakuumsug-pormaskar.php" />

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
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>