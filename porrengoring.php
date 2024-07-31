<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Porrengöring | AcneSpecialisten';
$seo_description = 'På AcneSpecialisten erbjuder vi porrengöring för att behandla pormaskar. Denna djupgående rengör och exfolierar porerna effektivt. Boka tid hos oss idag →';
$seo_keywords = 'porrengöring, porrengörare, por rengöring';

$seo_image = 'bilder/hudbehandlingar/424x456/portomning.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Porrengöring', '/porrengoring.php'),
);

$model = new Service(
    title: 'Porrengöring',
    duration: '60 min',
    price: 'Från 799 kr',
    content: '<p class="p200">En ansiktsbehandling mot porer för dig som vill ta bort pormaskar eller balansera hudens talgproduktion genom att rengöra porerna. Behandlingen består av en djupgående portömning som öppnar upp och rensar porerna.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/portomning.webp',
    image_large: 'bilder/hudbehandlingar/424x456/portomning.webp',
    image_alt: 'Porrengöring',
    image_title: 'Porrengöring',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '1295 kr',
            savings: null,
            booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '3495 kr',
            savings: '1165 kr per behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Chest&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '4995 kr',
            savings: '999 kr per behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Back&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$floating_box = 'Effektiv porrengöring.';

$description_title = 'Vad är porrengöring?';
$description_text = '<p class="p200">Porrengöring är en ansiktsbehandling utformad för att rensa porerna från talg, smuts och döda hudceller som bidrar till bildandet av pormaskar. Denna noggranna rengöringsprocess fokuserar på att effektivt avlägsna de blockeringar som kan leda till hudproblem såsom pormaskar och akne, samtidigt som den bidrar till en mer balanserad hud. Behandlingen är särskilt fördelaktig för personer med en benägenhet för oljig hud och de som regelbundet upplever tilltäppta porer.</p>
<p class="p200 mt-m">Under en porrengöring utförs en serie steg för att varsamt men grundligt rensa hudens yta, inklusive en exfoliering som hjälper till att lösgöra och avlägsna döda hudceller samt en djuprengöring för att direkt ta itu med och rensa ut talg och orenheter från porerna. Denna metod bidrar till att minska risken för inflammationer och stödjer en klarare, mer strålande hud. För dem som strävar efter att bibehålla en ren och frisk hud, erbjuder porrengöring en djupgående lösning som lämnar huden ren, återfuktad och med en märkbar minskning av synliga pormaskar.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/problemhy-process.webp',
        image_large: '/bilder/process/872x456/problemhy-process.webp',
        image_alt: 'Hur går en porrengöring till?',
        image_title: 'Hur går en porrengöring till?',
        content: '<p class="p200">Porrengöring är en djupgående ansiktsbehandling designad för att effektivt rensa porerna från orenheter såsom pormaskar, finnar och andra former av akne. Denna process bidrar till att minska synligheten av porer genom att avlägsna talg, smuts och döda hudceller. Behandlingen inleds med en varsam rengöring som syftar till att avlägsna yttre orenheter och förbereda huden för ytterligare rengöringssteg.</p>
        <p class="p200 mt-m">Därefter utförs en ångbehandling med hjälp av en Vapozon. Ångan mjukar upp hudytan och bidrar till att öppna porerna, vilket gör det lättare att varsamt avlägsna blockeringar och rensa ut innehållet på ett skonsamt sätt. För de mest ihärdiga blockeringarna kan en specialanpassad lansett, användas för att försiktigt göra en liten öppning i poren, vilket möjliggör en noggrann extraktion av innehållet.</p>
        <p class="p200 mt-m">Efter den noggranna rengöringen appliceras en lugnande lermask som verkar för att minska rodnad och strama åt porerna, lämnande huden slät och jämn. Behandlingen avslutas med återfuktning genom en närande dagkräm som hjälper till att återställa hudens fuktbalans och skapa en skyddande barriär mot externa miljöpåverkningar. Målet med porrengöring är inte enbart att djuprengöra porerna utan även att främja hudens hälsa genom att återställa dess naturliga balans och förebygga framtida hudåkommor.</p>',
    ),
);

$treatment_areas_title = 'Behandlingar efter område';
$treatment_areas_text = '<p class="p200">Behandlingen kan utföras på ansiktet, på brötstet och på ryggen.</p>';
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
                image_alt: 'Porrengöring i ansiktet',
                image_title: 'Porrengöring i ansiktet',
                title: 'Ansikte',
                duration: '60 min',
                price: '1295 kr',
                url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för porrengöring i ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/brost.svg',
                image_alt: 'Porrengöring på bröstet',
                image_title: 'Porrengöring på bröstet',
                title: 'Bröst',
                duration: '60 min',
                price: '1295 kr',
                url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Chest',
                url_label: 'Boka',
                url_title: 'Boka tid för porrengöring på bröstet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/rygg.svg',
                image_alt: 'Porrengöring på ryggen',
                image_title: 'Porrengöring på ryggen',
                title: 'Rygg',
                duration: '60 min',
                price: '1295 kr',
                url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Comedones&area=Facial_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för porrengöring på ryggen'
            ),
        )
    ),
);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/problemhy-eftervard.webp',
        image_large: '/bilder/process/872x456/problemhy-eftervard.webp',
        image_alt: 'Eftervård för porrengöring',
        image_title: 'Eftervård för porrengöring',
        content: '<p class="p200">För att bibehålla resultatet och stödja återhämtning efter en porrengöring är det viktigt att fortsätta att ta hand om huden efter behandlingen. En skräddarsydd hudvårdsrutin är nyckeln till att skydda och nära huden. På AcneSpecialisten rekommenderar vi specifikt utvalda hudvårdsprodukter som är framtagda för att vårda och balansera din hud. Dessa produkter är essentiella för att upprätthålla de positiva effekterna av din behandling och för att hjälpa till att förhindra framtida hudutmaningar. Vårt åtagande är att vägleda och stödja dig genom hela din hudvårdsresa, från den initiala behandlingen till den fortsatta eftervården, för att säkerställa att du uppnår och behåller en optimal hudhälsa.</p>',
    ),
);

$results_title = 'Porrengöring före och efter resultat';
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
            title: 'Är porrengöring lämplig för alla hudtyper?',
            text: '<p class="p200">Ja, porrengöring kan anpassas för att passa olika hudtyper, inklusive känslig hud. Det är dock viktigt att konsultera med en hudvårdsexpert som kan anpassa behandlingen efter din specifika hudtyp och behov för att undvika irritation och maximera resultatet.</p>'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå en porrengöring?',
            text: '<p class="p200">Hur ofta man bör göra porrengöringar beror på din hudtyp och dess behov, men i de flesta fallen rekommenderas en kur mot pormaskar. Inledningsvis rekommenderas en behandling var fjärde till sjätte vecka för att upprätthålla en klar och ren hud. Därefter kan resultatet ofta bibehållas med behandlingar var 1-3 månad. Din hudterapeut kan ge dig råd om det bästa intervaller för just din hud.</p>'
        ),
        new Question(
            title: 'Hur skiljer sig porrengöring från andra ansiktsbehandlingar?',
            text: '<p class="p200">Porrengöring fokuserar specifikt på att djuprengöra porerna och avlägsna orenheter som pormaskar och talg, vilket skiljer den från andra ansiktsbehandlingar som kan inriktas mer på återfuktning, exfoliering eller anti-aging. Porrengöring är särskilt effektiv för att förebygga och behandla akne.</p>'
        ),
        new Question(
            title: 'Kan jag utföra en porrengöring hemma?',
            text: '<p class="p200">Nej, för bästa resultat och säkerhet rekommenderas det att porrengöring utförs av en professionell hudterapeut. Hemmabehandlingar kan riskera att irritera huden eller orsaka mer skada om de inte utförs korrekt. Professionella behandlingar säkerställer en djup och säker rengöring med minimal risk för biverkningar.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i porrengöring',
        image_title: 'Cazzandra Lindberg - Expert på porrengöring'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på porrengöring',
        image_title: 'Veronika Benedik - Specialist inom porrvård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom porrengöring',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på porrengöring'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot porrengöring',
        image_title: 'Vilma Libom - Expert inom porrengöring'
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
        url: '/varumarken/skin-tech',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl',
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
        url: '/varumarken/splendor-x',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: 'bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova',
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
        url: '/varumarken/splendor-x',
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
        url: '/varumarken/exceed',
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

    <link rel="canonical" href="https://www.acnespecialisten.se/porrengoring.php" />

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