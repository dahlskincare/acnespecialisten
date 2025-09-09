<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'HydraFacial Stockholm | AcneSpecialisten';
$seo_description = 'HydraFacial behandling är en mångsidig behandling som kombinerar djup rengöring, exfoliering, avlägsnande av orenheter och återfuktning.';
$seo_keywords = 'hydrafacial, hydrafacial stockholm, hydrafacial före efter, hydrafacial behandling, hydrafacial acne';

$seo_image = 'bilder/varumarken/424x456/hydrafacial.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('HydraFacial', '/hydrafacial.php'),
);

$model = new Service(
    title: 'Hydrafacial behandling i Stockholm',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">HydraFacial är en djupgående hudvårdsbehandling som kombinerar rengöring, exfoliering, avlägsnar orenheter och återfuktar huden.</p>',
    image_small: 'bilder/varumarken/358x274/hydrafacial.webp',
    image_large: 'bilder/varumarken/424x456/hydrafacial.webp',
    image_alt: 'HydraFacial',
    image_title: 'HydraFacial',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Hydrafacial',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial',
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

$floating_box_title = "HydraFacial";
$floating_box = 'Rengöring, exfoliering, avlägsnande av orenheter och återfuktning med HydraFacial.';

$description_title = 'Vad är HydraFacial?';
$description_text = '<p class="p200">HydraFacial är en innovativ maskinbehandling som kombinerar rengöring, exfoliering, avlägsnande av orenheter och intensiv återfuktning för att förnya och vitalisera huden. Denna behandling använder en pattenterad  teknik som kallas "vortex-fusion", där ett spiralformat munstycke möjliggör djuprengöring samtidigt som den tillför antioxidanter, peptider och hyaluronsyra.</p>
<p class="p200 mt-m">Våra <a class="b200 underline color-deep-sea-400" href="/" title="Mer information om hudterapeuter i Stockholm">hudterapeuter i Stockholm</a> anpassar vi varje behandling efter individuella hudbehov. Behandlingen är effektiv för att minska synliga tecken på åldrande, som fina linjer och rynkor, samt att hantera problem som acne, förstorade porer och hyperpigmentering. Dessutom förbättras hudens övergripande hälsa och lyster genom att öka fuktnivåerna i en torr och känslig hy. HydraFacial är en perfekt lösning för alla som vill ha en direkt synlig förbättring av sin hudkvalitet utan någon återhämtningstid.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/hydrafacial-process.webp',
        image_large: '/bilder/process/872x456/hydrafacial-process.webp',
        image_alt: 'Processen för HydraFacial',
        image_title: 'Processen för HydraFacial',
        content: '<p class="p200">En HydraFacial-behandling följer en välstrukturerad process som består av fyra huvudsakliga faser för att revitalisera och föryngra huden.</p>
    <p class="p200 mt-m">Fas 1 - Grundlig Rengöring och Hudslipning<br /> Initialt behandlas huden med en grundlig rengöring och en skonsam exfoliering som öppnar upp porerna och avlägsnar döda hudceller, vilket gör huden redo för de nästkommande stegen och lämnar den fräsch och förberedd.</p>
    <p class="p200 mt-m">Fas 2 - Skonsam Peeling<br /> Denna fas inbegriper en mild peeling med glykol- eller salicylsyra som effektivt mjukar upp och löser upp orenheter inuti porerna, utan att vara för hård mot huden.</p>
    <p class="p200 mt-m">Fas 3 - Utrensning av Orenheter<br /> I detta viktiga steg använder behandlingen en avancerad vakuumsugningsteknik för att djuprengöra porerna och extrahera orenheter från hudens djupare lager, vilket bidrar till en klarare hudton.</p>
    <p class="p200 mt-m">Fas 4 - Hydrering och Näringsboost<br /> Slutligen berikas huden med en kraftfull infusion av antioxidanter och hyaluronsyra, vilket intensivt återfuktar huden, stärker dess skyddsbarriär och gör den mjuk och smidig. Detta steg säkerställer att huden inte bara ser, utan också känner sig, återvitaliserad med en varaktig lyster.</p>
    <p class="p200 mt-m">Varje steg i denna process är noga utformat för att ge din hud en optimal behandlingsupplevelse som går utöver traditionell hudvård, och lämnar dig med en strålande, hälsosam hud utan någon nedtid.</p>',
    ),
);

$types_title = 'Fördelar';
$types_description = '<p class="p200">HydraFacial kan effektivt användas för att adressera och förbättra en rad hudtillstånd, inklusive:</p>
    <p class="p200 mt-m">- Minska synligheten av fina linjer och rynkor.</p>
    <p class="p200 mt-m">- Öka hudens spänst och elasticitet.</p>
    <p class="p200 mt-m">- Ge huden en förnyad lyster samt jämnare hudton.</p>
    <p class="p200 mt-m">- Djuprengöra fet och aknebenägen hud, vilket bidrar till hudförbättringar.</p>
    <p class="p200 mt-m">- Återställa och balansera hudens naturliga fuktnivåer.</p>
    <p class="p200 mt-m">- Minska storleken på stora porer och göra dem mindre framträdande.</p>
    <p class="p200 mt-m">Denna mångsidiga behandling erbjuder en skräddarsydd lösning för en rad hudbekymmer, vilket gör det till ett utmärkt val för alla som önskar förbättra sitt hudtillstånd på ett märkbart sätt. Vi anpassar även behandlingen efter dina hudvårdsproblem och mål.</p>';
$big_types = array(
    new Service(
        title: 'HydraFacial - Standard',
        duration: '40 min',
        price: null,
        content: '',
        image_small: '/bilder/hudbehandlingar/200x200/hydrafacial-standard.webp',
        image_large: '/bilder/hudbehandlingar/200x200/hydrafacial-standard.webp',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_3_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_3_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Standard&Procedures=PriceClass_3_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'HydraFacial - Boost & Glow',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Dermabuilder Serum är en exceptionell upplevelse för den mogna huden. Detta avancerade serum är särskilt framtaget för att djupt vitalisera och stärka huden. Med en kraftfull blandning av två aktiva peptider, arbetar serumet för att stimulera produktionen av hudens egna proteiner, vilket är avgörande för hudens elasticitet och fasthet.</p>
        <p class="p200 mt-m">I denna behandling tränger Dermabuilder Serum in i hudens djupare lager för att effektivt bygga upp och stärka hudstrukturen inifrån. Detta bidrar till att synbart minska rynkor och fina linjer, och ger ansiktet en fastare och mer ungdomlig profil. Behandlingen är perfekt för dig som vill återställa och bevara hudens ungdomliga utstrålning och vitalitet.</p>
        <p class="p200 mt-m">Med HydraFacial och Dermabuilder Serum får du inte bara en slätare och jämnare hud, utan också en mer motståndskraftig och välvårdad hudkvalitet. Detta serum är en idealisk lösning för att ge din mogen hud en omedelbar boost.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/hydrafacial-boost-glow.webp',
        image_large: '/bilder/hudbehandlingar/200x200/hydrafacial-boost-glow.webp',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
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
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Boost_Glow&Procedures=PriceClass_4_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Boost_Glow&Procedures=PriceClass_4_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial&Type=Hydrafacial_Boost_Glow&Procedures=PriceClass_4_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'HydraFacial - Mot Pormaskar',
        duration: '40 min',
        price: null,
        content: '<p class="p200 mt-m">Glycal Acid Peel är en kraftfull kombination av aktiva syror som tränger djupt in i hudlagren för att lösgöra och avlägsna inbyggda orenheter. Denna intensiva exfolieringsprocess renar effektivt porerna, vilket minskar synligheten av pormaskar och finnar och bidrar till en klarare och jämnare hudton.</p>
        <p class="p200 mt-m">Denna <a class="b200 underline color-deep-sea-400" href="/vakuumsug-pormaskar.php">vakuumsug för pormaskar</a> är idealisk för dig som söker en djupgående lösning på problemhy. Med vår Glycal Acid Peel får du inte bara en yttre rengöring, utan en behandling som aktivt arbetar för att rena huden på djupet. Resultatet är en ren, förnyad hud som är fri från de vanligaste orsakerna till problemhy.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/hydrafacial-pormaskar.webp',
        image_large: '/bilder/hudbehandlingar/200x200/hydrafacial-pormaskar.webp',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
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

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Inför behandlingen',
        image_small: null,
        image_large: null,
        image_alt: 'Inför en HydraFacial behandling',
        image_title: 'Inför en HydraFacial behandling',
        content: '<p class="p200">Innan du genomgår en HydraFacial behandling är det viktigt att förbereda din hud på rätt sätt. Det innebär att du bör undvika användning av:</p>
        <p class="p200 mt-m">- Starka syror och intensiva exfolierande behandlingar under de två veckorna före din session.</p>
        <p class="p200 mt-m">- Exponering för direkt solljus minst tre dygn före din behandling.</p>
        <p class="p200 mt-m">- Kraftfulla hudvårdsprodukter två dagar före din behandling.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: null,
        image_large: null,
        image_alt: 'Eftervård',
        image_title: 'Eftervård',
        content: '<p class="p200">Efter att ha genomgått en HydraFacial-behandling kommer du att märka att din hud omedelbart känns renare och mer strålande. För att maximera resultatet och undvika irritation är det viktigt att:</p>
        <p class="p200 mt-m">- Undvika solen i minst 72 timmar för att skydda din nybehandlade hud.</p>
        <p class="p200 mt-m">- Avstå från att använda starka hudvårdsprodukter under cirka 48 timmar efter behandlingen för att låta din hud återhämta sig naturligt.</p>
        <p class="p200 mt-m">Genom att följa dessa enkla riktlinjer säkerställer du att din hud återhämtar sig optimalt efter din HydraFacial-behandling, och du kommer att kunna njuta av dina resultat längre.</p>',
    ),
);

$service_brands_title = 'Andra märken för Dermabrasion';
$service_brands_text = '<p class="p200">Utöver HydraFacial jobbar vi även med Microdermabrasion.</p>';
$service_brands = array(

    new Brand(
        label: 'Microdermabrasion',
        image: 'bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
    ),
);

$results_title = 'HydraFacial före och efter resultat';
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
            title: 'Hur lång tid tar det att se resultat efter en HydraFacial?',
            text: 'Resultaten från en HydraFacial kan ofta ses omedelbart efter behandlingen, där många upplever en mer strålande och jämn hudton. För att uppnå och upprätthålla optimala resultat rekommenderas regelbundna behandlingar anpassade efter individens hudbehov.'
        ),
        new Question(
            title: 'Är det säkert att göra HydraFacial regelbundet?',
            text: 'Ja, HydraFacial är en säker och skonsam behandling som kan utföras regelbundet. Den är utformad för att vara skonsam mot huden samtidigt som den erbjuder effektiva resultat, vilket gör den till en idealisk lösning för kontinuerlig hudvård och underhåll.'
        ),
        new Question(
            title: 'Kan HydraFacial hjälpa mot specifika hudproblem?',
            text: 'Ja, HydraFacial är effektiv för en mängd olika hudproblem, inklusive torrhet, fina linjer, acne och hyperpigmentering. Behandlingen är anpassningsbar, vilket gör det möjligt att rikta in sig på specifika problemområden och hudtillstånd.'
        ),
        new Question(
            title: 'Vilka är de främsta fördelarna med HydraFacial jämfört med andra hudvårdsbehandlingar?',
            text: 'HydraFacial utmärker sig genom sin förmåga att djuprengöra, exfoliera och återfukta huden på ett skonsamt sätt. Dess unika teknik och anpassningsförmåga gör den effektiv för en rad olika hudtyper och problem, med mindre risk för irritation jämfört med mer aggressiva behandlingar.'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i HydraFacial',
        image_title: 'Cazzandra Lindberg - Expert på HydraFacial'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på HydraFacial',
        image_title: 'Veronika Benedik - Specialist inom HydraFacial-behandlingar'
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2017',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund, hudterapeut med kunskap inom HydraFacial',
        image_title: 'Julia Eklund - Hudterapeut specialiserad på HydraFacial'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot HydraFacial',
        image_title: 'Vilma Libom - Expert inom HydraFacial-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hydrafacial.php" />

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