<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'MicroDermabrasion - Effektiv hudslipning';
$seo_description = 'Hudslipning eller dermabrasion ger dig en friskare hud med ökad lyster. Vi utför behandlingar i Stockholm. Boka tid för en gratis hudkonsultation →';
$seo_keywords = 'microdermabrasion, mikrodermabrasion, vad är microdermabrasion, microdermabrasion resultat, microdermabrasion före efter';
$seo_image = '/bilder/varumarken/424x456/microdermabrasion.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Microdermabrasion', '/microdermabrasion.php'),
);

$model = new Service(
    title: 'MicroDermabrasion',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Genom att använda mikrokristaller och en diamantborste slipar denna teknik varsamt det yttersta hudlagret, vilket uppmuntrar till ny celltillväxt och främjar en friskare, mer strålande hud.</p>',
    image_small: 'bilder/varumarken/358x274/microdermabrasion.webp',
    image_large: 'bilder/varumarken/424x456/microdermabrasion.webp',
    image_alt: 'Microdermabrasion',
    image_title: 'Microdermabrasion',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Dermabrasion',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=microdermabrasion',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '2595 kr',
            savings: null,
            booking_url: 'https://boka.acnespecialisten.se?flow=microdermabrasion&area=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '6995 kr',
            savings: 'Spara 790 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=microdermabrasion&area=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '9995 kr',
            savings: 'Spara 2980 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=microdermabrasion&area=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$description_title = 'Vad är MicroDermabrasion?';
$description_text = '<p class="p200">MicroDermabrasion på AcneSpecialisten är en effektiv behandlingsmetod för att föryngra och vitalisera huden. Denna process fokuserar på att varsamt slipa bort det yttersta lagret av döda hudceller, vilket stimulerar huden att påbörja en naturlig läkningsprocess. Genom denna slipning avlägsnas gamla hudceller och ger plats åt nya, fräscha hudceller, vilket bidrar till en starkare, friskare och mer strålande hud. Behandlingen är framtagen för att kickstarta hudens förnyelse och är särskilt effektiv för att skapa en jämnare hudton och förbättra hudens övergripande kvalitet.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/mimass-process.webp',
        image_large: '/bilder/process/872x456/mimass-process.webp',
        image_alt: 'Processen för Microdermabrasion',
        image_title: 'Processen för Microdermabrasion',
        content: '<p class="p200">MicroDermabrasion är en noggrant utformad behandling som syftar till att förbättra hudens kvalitet genom en skonsam men effektiv mekanisk exfoliering. Behandlingen inleds med en grundlig rengöring av huden för att avlägsna smuts, olja och orenheter. Detta steg är viktigt för att förbereda huden för microdermabrasion.</p>
        <p class="p200 mt-m">Nästa steg i processen är själva slipningen, där vi använder ett hudslipningsmunstycke för att skonsamt men djupgående exfoliera hudens yttre lager. Denna teknik använder mikrokristaller och en diamantspets för att försiktigt slipa bort döda hudceller, vilket främjar cellförnyelse och förbättrar hudens textur och lyster.</p>
        <p class="p200 mt-m">Efter exfolieringen appliceras specifika serum för att ytterligare förbättra hudens hälsa och utseende. Dessa produkter är utvalda för att passa din specifika hudtyp och behov, och kan innefatta ingredienser som hyaluronsyra, antioxidanter och vitaminer. Behandlingen avslutas med applicering av en lugnande mask och en återfuktande kräm för att maximera hudens återhämtning och skydda den från yttre påverkan.</p>',
    ),
);

$types_title = '';
$types_description = '';
$big_types = array(
    new Service(
        title: 'MicroDermabrasion',
        duration: '40 min',
        price: null,
        content: '',
        image_small: '/bilder/hudbehandlingar/200x200/dermabrasion.webp',
        image_large: '/bilder/hudbehandlingar/200x200/dermabrasion.webp',
        image_alt: 'MicroDermabrasion',
        image_title: 'MicroDermabrasion',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '2595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Method_MicroDermabrasion&type=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '6995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Method_MicroDermabrasion&type=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '9995 kr',
                savings: 'Spara 2980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Method_MicroDermabrasion&type=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_5'
            )
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför behandling',
        image_small: '/bilder/process/358x272/mimass-forberedelser.webp',
        image_large: '/bilder/process/872x456/mimass-forberedelser.webp',
        image_alt: 'Förberedelse inför Microdermabrasiona ansiktsbehandlingar',
        image_title: 'Förberedelse inför Microdermabrasiona ansiktsbehandlingar',
        content: '<p class="p200">När du förbereder dig för din Microdermabrasion-behandling hos AcneSpecialisten, är det viktigt att ta vissa steg för att din hud ska vara i bästa möjliga skick. För att säkerställa att du är fullständigt informerad och bekväm med processen, erbjuder vi en kostnadsfri konsultation där vi går igenom allt du behöver veta inför din Microdermabrasion-behandling. Under konsultationen kommer vi att diskutera din hudtyp, eventuella specifika bekymmer och vad du kan förvänta dig av behandlingen. Detta är också ett utmärkt tillfälle för dig att ställa frågor och uttrycka eventuella funderingar. Vår prioritet är att du känner dig helt trygg och förberedd inför din behandling hos oss.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/mimass-eftervard.webp',
        image_large: '/bilder/process/872x456/mimass-eftervard.webp',
        image_alt: 'Eftervård för Microdermabrasion',
        image_title: 'Eftervård för Microdermabrasion',
        content: '<p class="p200">Efter en Microdermabrasion-behandling är det essentiellt att du följer våra eftervårdsinstruktioner för att säkerställa bästa möjliga resultat. Det är viktigt att behandla din hud med omsorg under de första dagarna efter behandlingen. Börja med att skydda huden från solen och använd ett högkvalitativt solskydd med hög SPF för att förebygga skador från UV-strålar.</p>
        <p class="p200 mt-m">Om du har några frågor eller behöver ytterligare rådgivning angående din eftervård, är du alltid välkommen att kontakta oss på AcneSpecialisten. Vi är här för att stödja dig i din resa mot en friskare och mer strålande hud.</p>',
    ),
);

$service_brands_title = 'Andra varumärken för Dermabrasion';
$service_brands_text = '<p class="p200">Utöver Microdermabrasion jobbar vi även med HydraFacial som är en typ av HydroDermabrasion.</p>';
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

$results_title = 'Microdermabrasion före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
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
            title: 'Är microdermabrasion bra mot ärr?',
            text: 'Ja, microdermabrasion är bra mot ärr och särskilt effektivt mot acneärr. Denna behandling hjälper till att minska synligheten av ärr genom att slipa bort det yttersta hudlagret, vilket främjar hudens naturliga läkningsprocess och cellförnyelse. Det kan leda till en jämnare hudton och förbättrad hudtextur.'
        ),
        new Question(
            title: 'Hur snabbt ser man resultat efter Microdermabrasion?',
            text: 'De flesta kunder märker en omedelbar förbättring i hudens lyster och känsla direkt efter en Microdermabrasion-behandling. För långsiktiga och mer dramatiska förbättringar rekommenderas regelbundna sessioner, som ger progressiv förbättring av hudens utseende och kvalitet.'
        ),
        new Question(
            title: 'Är det säkert att göra Microdermabrasion på regelbunden basis?',
            text: 'Ja, Microdermabrasion är en skonsam behandling som är säker att utföra regelbundet. Den är utformad för att varsamt men effektivt förbättra hudens yta utan att orsaka skador, vilket gör den idealisk för kontinuerlig användning i en hudvårdsrutin.'
        ),
        new Question(
            title: 'Kan Microdermabrasion behandla specifika hudåkommor?',
            text: 'Absolut. Microdermabrasion är effektiv för att behandla en rad hudproblem som fina linjer, lättare pigmentförändringar och torrhet. Den kan skräddarsys för att fokusera på dina specifika hudbehov och problemområden.'
        ),
        new Question(
            title: 'Vad är de huvudsakliga fördelarna med Microdermabrasion jämfört med andra hudvårdsbehandlingar?',
            text: 'En av de största fördelarna med Microdermabrasion är dess förmåga att effektivt exfoliera och förnya huden utan aggressivitet. Detta gör behandlingen särskilt lämplig för känsliga hudtyper och dem som söker en mild men effektiv hudförbättring. Dessutom ger Microdermabrasion snabba resultat med minimal återhämtningstid jämfört med vissa mer invasiva behandlingsalternativ.'
        ),
    )
);

$faq_view_more = 'Se alla frågor & svar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i MicroDermabrasion',
        image_title: 'Cazzandra Lindberg - Expert på MicroDermabrasion'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på MicroDermabrasion',
        image_title: 'Veronika Benedik - Specialist inom MicroDermabrasion'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom MicroDermabrasion',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på MicroDermabrasion'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot MicroDermabrasion',
        image_title: 'Vilma Libom - Expert inom MicroDermabrasion'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/microdermabrasion.php" />

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

                <?php foreach ($top_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
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
                                include('../widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
                    </section>

                <?php } ?>
                <?php foreach ($bottom_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>