<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Portömning | AcneSpecialisten';
$seo_description = 'Portömning är en specialisterad ansiktsbehandling som fokuserar på att tömma porerna för att bli av med pormaskar och orenheter.';
$seo_keywords = 'portömning, portömning hemma, portömning stockholm, ansiktsbehandling portömning, portömning behandling, portömning före efter, portömning ansiktsbehandling, portömning behandling, portömning ansikte, portömning näsa';
$seo_image = 'bilder/hudbehandlingar/424x456/portomning.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Portömning', '/portomning.php'),
);

$model = new Service(
    title: 'Portömning i Stockholm',
    duration: null,
    price: null,
    content: '<p class="p200">Portömning är en effektiv ansiktsbehandling som tömmer porerna på talg och döda hudceller, för att bli av med pormaskar och finnar. Denna behandling utförs av professionella hudterapeuter för att säkerställa en effektiv och grundlig djuprengöring av huden. Kan utföras i ansiktet,ryggen eller bröstet.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/portomning.webp',
    image_large: 'bilder/hudbehandlingar/424x456/portomning.webp',
    image_alt: 'Portömning',
    image_title: 'Portömning',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '1295 kr',
            savings: null,
            booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '3495 kr',
            savings: '1165 kr per behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing&procedures=PriceClass_1_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '4995 kr',
            savings: '999 kr per behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing&procedures=PriceClass_1_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$floating_box_title = "Portömning";
$floating_box = 'Ansiktsbehandling som tömmer porerna på talg och döda hudceller, för att bli av med pormaskar och finnar.';

$description_title = 'Vad är portömning?';
$description_text = '<p class="p200">Portömning är en ansiktsbehandling utformad för att djuprengöra porerna genom att noggrant extrahera komedoner (svarta och vita pormaskar) orsakade av talg och döda hudceller. Denna behandling minskar risken för finnar och förbättrar hudens utseende genom att avlägsna orenheter som kan leda till hudproblem. Utförd av professionella hudterapeuter, erbjuder portömning en skonsam och effektiv lösning för att uppnå en klarare, mjukare hud. Den är idealisk för de som kämpar med tilltäppta porer och söker en omfattande rengöring.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/problemhy-process.webp',
        image_large: '/bilder/process/872x456/problemhy-process.webp',
        image_alt: 'Hur går en portömning till?',
        image_title: 'Hur går en portömning till?',
        content: '<p class="p200">Portömning är en noggrann ansiktsbehandling med målet att djuprengöra porerna och avlägsna orenheter som pormaskar, finnar och akne, vilket bidrar till att minimera porernas storlek. Behandlingen påbörjas med att huden varsamt rengörs för att tvätta bort yttre orenheter såsom talg och smuts, följt av en peelingtvätt som exfolierar och tar bort döda hudceller.</p>
        <p class="p200 mt-m">Efter rengöring tillämpas en ångbehandling med hjälp av en Vapozon. Ångan mjukar upp huden och öppnar upp porerna, vilket gör det enklare att klämma ut pormaskar och andra blockeringar. För de mest envisa tilltäppningarna kan en lansett (liten nål) användas för att försiktigt göra en öppning i poren för att kunna extrahera innehållet.</p>
        <p class="p200 mt-m">Sedan applicerar vi en lugnande lermask, som minskar rodnad och dra ihop porerna, vilket efterlämnar en slät och jämn hud. Avslutningsvis återfuktas huden med en närande dagkräm. Denna sista fas av behandlingen är viktig för hudens återhämtning och för att skapa en skyddande barriär mot yttre miljöfaktorer. Genom hela processen är målet inte bara att rengöra porerna utan också att återställa hudens naturliga balans och förebygga framtida hudproblem.</p>',
    ),
);

$treatment_areas_title = 'Behandling baserat på område';
$treatment_areas_text = '<p class="p200">Pormaskar kan uppstå överallt på kroppen där det finns porer. Vi utför därför inte bara behandlingen i ansiktet utan även på brötstet och på ryggen.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        title: null,
        description: null,
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Portömning i ansiktet',
                image_title: 'Portömning i ansiktet',
                title: 'Ansikte',
                duration: '60 min',
                price: '1295 kr',
                url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing',
                url_label: 'Boka',
                url_title: 'Boka tid för portömning i ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/brost.svg',
                image_alt: 'Portömning på bröstet',
                image_title: 'Portömning på bröstet',
                title: 'Bröst',
                duration: '60 min',
                price: '1295 kr',
                url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Chest',
                url_label: 'Boka',
                url_title: 'Boka tid för portömning på bröstet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/rygg.svg',
                image_alt: 'Portömning på ryggen',
                image_title: 'Portömning på ryggen',
                title: 'Rygg',
                duration: '60 min',
                price: '1295 kr',
                url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för portömning på ryggen'
            ),
        )
    ),
);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/problemhy-eftervard.webp',
        image_large: '/bilder/process/872x456/problemhy-eftervard.webp',
        image_alt: 'Eftervård för portömning',
        image_title: 'Eftervård för portömning',
        content: '<p class="p200">Efter en portömning är det viktigt att ge huden den omsorg den behöver för att bevara de uppnådda resultaten och underlätta läkningsprocessen. Detta gör du bäst genom en anpassad hudvårdsrutin, som skyddar huden och ger den näring efter behandlingen. Vi rekommenderar hudvårdsprodukter som är utformade för att behandla och balansera huden för att bibehålla resultatet och förebygga framtida hudproblem. Vi på AcneSpecialisten är engagerade i att stödja dig genom hela processen från behandling till eftervård. Vi säkerställer att du får ut det mesta av din portömning och fortsätter på vägen mot optimal hudhälsa.</p>',
    ),
);

$results_title = 'Portömning före och efter resultat';
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

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Kan jag göra portömning hemma?',
            text: '<p class="p200">Att utföra portömning hemma rekommenderas inte då det ökar risken för infektioner och ärrbildning. Professionella hudterapeuter använder sterila verktyg och rätt metoder för att säkert rensa porerna, vilket minskar risken för hudskador. För bästa resultat och minsta risk, bör du söka hjälp av en utbildad hudterapeut för att hantera porblockeringar och pormaskar.</p>'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå en portömning?',
            text: '<p class="p200">Frekvensen av portömningar varierar beroende på din hudtyp och graden av pormaskar. Ofta behövs ett kortare interval i början och därefter underhålls huden med en behandling varannan månad. För att skapa en anpassad behandlingsplan rekommenderar vi att du bokar en konsultation med en av våra hudterapeuter.</p>'
        ),
        new Question(
            title: 'Kommer pormaskarna tillbaka efter en portömning?',
            text: '<p class="p200">Portömning är effektivt för att ta bort befintliga pormaskar, men det kan inte förhindra nya från att bildas. Det är avgörande att upprätthålla en god hudvårdsrutin efter behandlingen för att minimera risken för nya pormaskar.</p>'
        ),
        new Question(
            title: 'Hur snabbt kan jag se resultat från portömning?',
            text: '<p class="p200">Många kunder ser en förbättring direkt efter första behandlingen, men för att uppnå bästa möjliga resultat kan det krävas flera behandlingar. Kombinationen av regelbundna portömningar och rätt hemmavård är nyckeln till långsiktiga resultat.</p>'
        ),
        new Question(
            title: 'Behöver jag en portömning även om jag bara har några få pormaskar?',
            text: '<p class="p200">Ja, även ett fåtal pormaskar kan behandlas med portömning. Det finns ingen minimumgräns för antalet pormaskar som krävs för att dra nytta av behandlingen. Varje hudtillstånd är unikt och kan dra nytta av en personligt anpassad hudvårdsstrategi.</p>'
        ),
    )
);
$faq_view_more = 'Se alla frågor & svar';



$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i portömning',
        image_title: 'Cazzandra Lindberg - Expert på portömning'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på portömning',
        image_title: 'Veronika Benedik - Specialist inom portömning'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom portömning',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på portömning'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot portömning',
        image_title: 'Vilma Libom - Expert inom portömning'
    )
);


$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Varumärken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech/',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl/',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'bilder/logotyper/cryopen.svg',
        image_alt: 'CryoPen logotyp',
        image_title: 'CryoPen - frysbehandling',
        url: '/cryopen.php',
        url_title: 'CryoPen',
    ),
    new Brand(
        label: 'Splendor X',
        image: 'bilder/logotyper/splendor-x.png',
        image_alt: 'Splendor X logotyp',
        image_title: 'Splendor X - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: 'bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice/',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova/',
        url_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'bilder/logotyper/lumenis.svg',
        image_alt: 'Lumenis logotyp',
        image_title: 'Lumenis - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Lumenis',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
    ),
    new Brand(
        label: 'Exceed',
        image: 'bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed/',
        url_title: 'Exceedn',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: 'bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
    ),
    new Brand(
        label: 'DAHL Skincare',
        image: 'bilder/logotyper/dahl-skincare.webp',
        image_alt: 'DAHL Skincare logotyp',
        image_title: 'DAHL Skincare - hudvårdsprodukter',
        url: 'https://dahlskincare.se',
        url_title: 'DAHL Skincare',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/portomning.php" />

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
                <section id="image" class="mt-m is-hidden-desktop">
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
                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php if (isset($treatment_areas_title)) { ?>
                            <h2 class="big l10n"><?php echo $treatment_areas_title ?></h2>
                        <?php } ?>
                        <?php if (isset($treatment_areas_text)) { ?>
                            <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php } ?>
                        <div class="mt-m">
                            <?php foreach ($treatment_areas as $treatment_area) {
                                if (isset($treatment_area->image_small)) { ?>
                                    <picture>
                                        <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                        <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                        <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                    </picture>
                                <?php }
                                if (isset($treatment_area->title)) { ?>
                                    <h3 class="h300 mt-xl4"><?php echo $treatment_area->title ?></h3>
                                <?php }
                                if (isset($treatment_area->description)) { ?>
                                    <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                            <?php }
                                foreach ($treatment_area->items as $treatment_area_item) {
                                    include('hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
                                }
                            } ?>
                        </div>
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
                <section id="fragor-svar.php" class="large-margin">
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