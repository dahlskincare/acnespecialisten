<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Få Bort Acneärr med Microneedling & Laser | AcneSpecialisten';
$seo_description = 'Behandla din acneärr hos AcneSpecialisten, 30 års erfarenhet av att ta bort acneärr med microneedling, laser eller kemisk peeling. Boka gratis konsultation →';
$seo_keywords = 'få bort acneärr, microneedling acne, microneedling acne, acneärr, acneärr, microneedling acneärr';
$seo_image = 'bilder/hudproblem/424x456/acnearr.webp';

$model = new Service(
    title: 'Få bort acneärr',
    duration: null,
    price: null,
    content: '<p class="p200">Vi har samlat de bästa och mest effektiva metoderna för att ta bort acneärr. Oavsett om du vill få bort röda fläckar eller djupa gropar, erbjuder vi lösningar med microneedling, laser eller kemisk peeling. Är du osäker på vilken behandling som passar din ärrtyp bäst? Boka en kostnadsfri konsultation hos oss på AcneSpecialisten, så skräddarsyr vi en personlig behandlingsplan för dig.</p>',
    image_small: 'bilder/hudproblem/358x274/acnearr.webp',
    image_large: 'bilder/hudproblem/424x456/acnearr.webp',
    image_alt: 'Bild som illustrerar acne',
    image_title: 'Acne',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Behandla acneärr', '/behandla-acnearr.php'),
);

$about_title = 'Hur vi behandlar och tar bort acneärr';

$about_content = '<p class="p200">Att behandla och reducera acneärr kräver både expertis och en genomtänkt strategi. På AcneSpecialisten använder vi avancerade, skräddarsydda metoder för att effektivt eliminera acneärr. Under vår kostnadsfria hudkonsultation bedömer vi ärrets djup och omfattning för att skapa en anpassad behandlingsplan.</p>

    <p class="p200 mt-xl">Vi tar bort ärrvävnaden för att återställa hudens jämna yta och hjälper dig att bli av med ärr i ansiktet, på bröstet eller ryggen. Om du har aktiva acneutbrott, rekommenderar vi behandlingar för att förhindra ytterligare ärrbildning. Våra hudterapeuter stödjer dig genom hela processen för att nå önskat resultat.</p>';

$headline01 = "01. Identifiera";

$define_image = '/bilder/hudbehandlingar/872x456/gratis-hudkonsultation.webp';
$define_image_alt = 'Hur vi tar bort och behandlar acenärr?';
$define_image_title = 'Hur vi tar bort och behandlar acneärr?';

$define_image_alt = 'Hur vi behandlar och tar bort acneärr?';
$define_image_title = 'Hur vi behandlar och tar bort acneärr?';

$define_content = '<p class="p200">Det första steget i vår process för att behandla acneärr är att noggrant kartlägga och analysera omfattning, färg och djup på dina ärr. Vi börjar med en kostnadsfri konsultation där vi undersöker din hud, diskuterar dina hudmål och tidigare erfarenheter. Vi tar förebilder för att följa dina framsteg och justera behandlingsplanen efter behov. En personlig hudterapeut följer dig genom hela behandlingsresan och säkerställer att du får konsekvent och anpassad vård utifrån dina specifika behov.</p>';

$define_consultation_link = "https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars";
$define_consultation_link_label = "Boka Gratis Konsultation för acneärr";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för acneärr";

$headline02 = "02. Behandla";

$treat_content = '<p class="p200">Efter att vi identifierat och analyserat dina acneärr, påbörjar vi behandlingsfasen med målet att få bort ärren och förbättra hudstrukturen. Beroende på ärrens typ och djup använder vi skräddarsydda metoder för effektiv behandling. Genom att stimulera hudens naturliga reparationsförmåga och främja kollagenproduktionen, arbetar vi för att förbättra hudens textur och ton. Vi anpassar kontinuerligt behandlingsplanen baserat på hur din hud svarar för att uppnå bästa möjliga resultat och minska ärrens synlighet.</p>';

$treat_url = '/laser-acnearr.php';
$treat_url_label = 'Se ärrbehandlingar';
$treat_url_title = 'Klicka här för att se våra ärrbehandlingar';

$services = array(

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_title: 'Kund som genomgår laserbehandling mot acneärr',
        image_alt: 'Bild av laserbehandling mot acneärr hos Acnespecialisten',
        title: 'Laser mot acneärr',
        duration: '90 min',
        price: '4595 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling är en effektiv metod för att behandla atrofiska ärr (gropar), som ofta uppstår efter aktiv akne. Genom att rikta in sig på de djupare lagren av huden, bränner lasern små mikroskopiska kanaler. Hudens respons på dessa kanaler är att börja läka hålen och samtidigt fylla ut själva gropen. Denna process stimulerar kollagenproduktionen och främjar hudens förnyelse, vilket hjälper till att “fylla ut” groparna och förbättra hudens struktur. Resultatet blir en jämnare och slätare hud.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot acneärr',
        url: '/laser-acnearr.php',
        url_label: 'Läs mer om laser',
        url_title: 'Läs mer om laser mot acneärr',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars&method=Method_LaserProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot acneärr nu',
        short_title: 'Laser mot acneärr'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för acneärr',
        image_alt: 'Bild på kemisk peelingbehandling mot acneärr hos Acnespecialisten',
        title: 'Kemisk peeling mot acneärr',
        duration: '30 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Kemisk peeling är en idealisk behandling för postinflammatorisk hyperpigmentering (fläckar), vilket innebär mörka eller rodnade fläckar som kvarstår efter akne. Behandlingen använder en specialutvecklad syra för att exfoliera och avlägsna de skadade och missfärgade yttersta hudlagren. Detta uppmuntrar tillväxten av ny, frisk hud, vilket avsevärt minskar synligheten av dessa missfärgningar. Resultatet är en mer enhetlig hudton och förbättrad hudtextur. Genom att stimulera hudens naturliga förnyelseprocess hjälper kemisk peeling till att ge huden ett klarare och jämnare utseende.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot acneärr',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling',
        url_title: 'Läs mer om kemisk peeling mot acneärr',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars&method=Method_ChemicalPeeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot acneärr nu',
        short_title: 'Kemisk Peeling mot ärr'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för acneärr',
        image_alt: 'Bild på microneedlingbehandling mot acneärr hos Acnespecialisten',
        title: 'Microneedling mot acneärr',
        duration: '50 min',
        price: '2595 kr',
        icons: array(),
        content: '<p class="p200">Microneedling är en mångsidig behandlingsmetod mot acneärr, särskilt effektiv för både postinflammatorisk hyperpigmentering (fläckar) och atrofiska ärr (gropar). Behandlingen använder fina mikronålar för att skapa små punkteringar i huden, vilket aktiverar kroppens naturliga läkningsprocess och stimulerar kollagenproduktionen. Hos AcneSpecialisten leder detta till en märkbar minskning av ärr och förbättring av hudens textur. Resultatet är en jämnare och mer enhetlig hudbild, som hjälper dig att uppnå en klarare och friskare hud.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot acneärr',
        url: '/microneedling-acnearr.php',
        url_label: 'Läs mer om microneedling',
        url_title: 'Läs mer om microneedling mot acneärr',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars&method=Method_Microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot acneärr nu',
        short_title: 'Microneedling mot ärr'
    ),
);

$results_title = 'Behandla acneärr före och efter resultat';
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "Resultat mot acneärr";



$faq_categories = array(
    '' => array(
        new Question(
            title: 'Kan man få bort röda acneärr?',
            text: 'Ja, det är möjligt att minska eller få bort röda acneärr. Röda ärr, ofta ett resultat av postinflammatorisk hyperpigmentering, kan behandlas med olika metoder såsom kemisk peeling, laserbehandling och microneedling som bidrar till att ljusa upp huden och minska rodnaden. Det är viktigt att konsultera med en hudterapeut för att bestämma den mest effektiva behandlingen baserat på din hudtyp och ärrbildningens svårighetsgrad.'
        ),
        new Question(
            title: 'Vilken metod är bäst mot acneärr?',
            text: 'Den bästa metoden mot acneärr beror på ärrbildningens typ och djup. Laserbehandlingar är ofta effektiva för atrofiska ärr (gropar), medan kemisk peeling kan vara mer fördelaktigt för hyperpigmentering (fläckar). Microneedling är en annan behandling som kan vara effektiv för olika typer av acneärr genom att stimulera hudens naturliga läkningsprocess och öka kollagenproduktionen. Det är viktigt att konsultera med en hudvårdsspecialist för att fastställa vilken metod som är mest lämplig för just dina behov.'
        ),
        new Question(
            title: 'Finns det kräm mot acneärr?',
            text: 'Ja, det finns krämer som är utformade för att behandla acneärr såsom Cyspera Creme. Dessa krämer kan innehålla ingredienser som retinol, vitamin C, glykolsyra, och salicylsyra, vilka alla kan hjälpa till att ljusa upp ärr och främja hudförnyelse. Krämer kan vara särskilt effektiva för lättare ärr och missfärgningar. För bästa resultat är det ofta rekommenderat att använda dessa krämer som en del av en omfattande hudvårdsrutin och i kombination med professionella behandlingar.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att få bort sina acneärr?',
            text: 'Antalet behandlingar som krävs för att få bort acneärr varierar beroende på ärrtyp, djup, och den valda behandlingsmetoden. Generellt sett kan lättare ärr kräva några få behandlingar, medan djupare ärr kan kräva flera sessioner för att uppnå önskade resultat. Det är viktigt att ha realistiska förväntningar och diskutera en behandlingsplan med din hudvårdsspecialist, som kan ge en uppskattning baserad på din specifika situation.'
        ),
        new Question(
            title: 'Gör det ont att ta bort acneärr?',
            text: 'Upplevelsen av smärta eller obehag varierar beroende på behandlingsmetod och individuell smärttolerans. Vissa behandlingar, såsom laser och microneedling, kan orsaka en viss nivå av obehag under proceduren, men smärtlindring i form av lokalbedövning kan ofta användas för att minska obehaget. Kemisk peeling och användning av krämer orsakar generellt sett mindre obehag. Din hudvårdsspecialist kan informera dig om vad du kan förvänta dig av behandlingen och hur eventuellt obehag hanteras.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till behandling av acneärr";


$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut med fokus på acneärr sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i acneärrbehandling',
        image_title: 'Cazzandra Lindberg - Expert på acneärrbehandling'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut med specialisering i acneärr sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på acneärr',
        image_title: 'Veronika Benedik - Specialist inom acneärrvård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut med inriktning mot acneärr sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut specialiserad på acneärrhantering',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på acneärr'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut med specialisering i acneärr sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot acneärrbehandling',
        image_title: 'Vilma Libom - Expert inom acneärrbehandling'
    )
);

$specialist_url_label = "Se alla hudterapeuter";
$specialist_url_title = "acneärr Specialiserade Hudterapeuter";

$brands = array(
    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_title: 'Alma Hybrid - CO2 laser',
        image_alt: 'Alma Hybrid logotyp',
        url: 'alma-hybrid-co2-laser.php',
        url_title: 'Läs mer om Alma Hybrid CO2 laser',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_title: 'Harmony XL Pro - Laser & IPL',
        image_alt: 'Harmony XL Pro logotyp',
        url: 'alma-harmony-xl-pro.php',
        url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen Brand Logo',
        image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
        url: 'dermapen.php',
        url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
    ),
    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_title: 'Skin Tech - Professionella kemiska peelingar',
        image_alt: 'Skin Tech logotyp',
        url: 'varumarken/skin-tech',
        url_title: 'Läs mer om Skin Techs kemiska peelingar',
    ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av acneärr";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/behandla-acnearr.php" />

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

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="hudproblem/treatment.css">
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
                <section id="image" class="is-hidden-desktop mt-xl">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $about_title; ?></h2>
                    <div class="mt-xl"><?php echo $about_content ?></div>
                </section>
                <section id="define">
                    <h2 class="h500 l10n"><?php echo $headline01; ?></h2>
                    <img class="mt-xl step-image" src="<?php echo $define_image ?>" alt="<?php echo $define_image_alt ?>" title="<?php echo $define_image_title ?>" width="872" height="456" />
                    <div class="mt-xl"><?php echo $define_content ?></div>
                    <a href="<?php echo $define_consultation_link ?>" title="<?php echo $define_consultation_link_title ?>" class="mt-xl button b200 l10n"><?php echo $define_consultation_link_label ?></a>
                </section>
                <section id="treat">
                    <h2 class="h500 l10n"><?php echo $headline02 ?></h2>
                    <div class="mt-xs">
                        <?php echo $treat_content ?>
                        </p>
                        <?php foreach ($services as $scm) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php');
                        } ?>
                </section>
                <section id="results">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                </section>
                <section id="reviews">
                    <h2 class="big l10n">Omdömen</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                </section>
                <section id="faq">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Frågor & Svar</h2>
                        <a href="fragor-svar.php" title="FAQ" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler frågor & svar</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                </section>
                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeuter</h2>
                        <a href="/hudterapeut/" title="Specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut/"><?php echo $specialist_url_label ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken/" title="Varumärken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" title="Varumärken" href="varumarken/">Se alla varumärken</a>
            </section>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>