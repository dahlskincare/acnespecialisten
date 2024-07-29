<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Djuprengöring ansikte | AcneSpecialisten';
$seo_description = 'På AcneSpecialisten erbjuder vi djuprengöring för att behandla pormaskar. Djupgående porrengöring för effektiv behandling. Boka tid hos oss idag →';
$seo_keywords = 'djuprengöring, djuprengöring ansikte';

$seo_image = 'images/treatments/large/ansiktsbehandlingar-mot-problemhy.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Djuprengöring', '/djuprengoring.php'),
);

$model = new Service(
    title: 'Djuprengöring ansikte',
    duration: '60 min',
    price: 'Från 799 kr',
    content: '<p class="p200">EEn djuprengörande behandling utformad för att effektivt eliminera pormaskar och balansera hudens talgproduktion genom en noggrann rengöring. Behandlingen inkluderar en intensiv portömning som öppnar upp porerna och rensar dem på djupet, vilket ger en klarare och mer balanserad hud.</p>',
    image_small: 'bilder/behandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp',
    image_large: 'bilder/behandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp',
    image_alt: 'Djuprengöring',
    image_title: 'Djuprengöring',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '995 kr',
            savings: null,
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '2595 kr',
            savings: '865 kr per behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '3995 kr',
            savings: '799 kr per behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$floating_box = 'Effektiv djuprengöring.';

$description_title = 'Vad är en djuprengöring?';
$description_text = '<p class="p200">Våra djuprengöringar är specialiserade porrengöringsbehandlingar som effektivt riktar sig mot pormaskar och ger en omfattande lösning för en klarare och renare hud. Genom att kombinera grundliga rengöringsmetoder och ångbehandling öppnar vi effektivt upp porerna, vilket möjliggör en djupgående rengöring. Detta är särskilt effektivt för att ta bort pormaskar och andra typer av hudtilltäppningar.</p>
<p class="p200 mt-m">AAnpassade för olika hudtyper, inklusive oljig, torr och blandhy, strävar våra djuprengöringsbehandlingar efter att inte bara rena porerna utan också förbättra hudens övergripande hälsa och utseende. Genom att återställa hudens naturliga balans och tillhandahålla essentiell näring, arbetar vi för att förebygga framtida hudproblem och minimera uppkomsten av nya pormaskar.</p>';

$types_title = '';
$types_description = '';
$big_types = array(
    new Service(
        title: 'Djuprengöring',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Vår djuprengöringsprocess börjar med en noggrann rengöring som effektivt avlägsnar smuts och överflödig talg. Därefter appliceras en ångbehandling som mjukgör huden och förbereder den för pormaskborttagning. Genom denna metod kan våra hudterapeuter rengöra porerna mer effektivt.</p>
        <p class="p200 mt-m">Efter den grundliga rengöringen appliceras en lermask som lugnar huden och hjälper till att strama åt porerna. Behandlingen avslutas med en återfuktande kräm som återställer hudens balans och lämnar en jämn och ren yta.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_alt: 'djuprengöring',
        image_title: 'djuprengöring',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
        consultation_url_label: 'Boka hudkonsultation',
        consultation_url_title: 'Boka hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka behandling',
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '995 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '2595 kr',
                savings: '865 per behandling',
                booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '3995 kr',
                savings: '799kr per behandlng',
                booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_5'
            )
        )
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
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i djuprengöring',
        image_title: 'Cazzandra Lindberg - Expert på djuprengöring'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på djuprengöring',
        image_title: 'Veronika Benedik - Specialist inom djuprengöring'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom djuprengöring',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på djuprengöring'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot djuprengöring',
        image_title: 'Vilma Libom - Expert inom djuprengöring'
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

    <link rel="canonical" href="https://www.acnespecialisten.se/djuprengoring.php" />

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
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
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