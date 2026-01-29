<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla ärr från finnar | AcneSpecialisten';
$seo_description = 'Utforska de mest effektiva behandlingsmetoderna för ärr från finnar. Få skräddarsydda råd, tips, och expertis från oss för att behandla och minska ärr.';
$seo_keywords = 'behandling av ärr från finnar, ärr från finnar, metod för behandling av finnärr, laserbehandling för finnärr, microneedling, kemisk peeling';
$seo_image = 'bilder/hudproblem/424x456/arr-fran-finnar.webp';

$model = new Service(
    title: 'Behandling av Ärr från Finnar',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Vi har samlat de mest effektiva behandlingarna för att minska ärr från finnar. Oavsett dina specifika behov, har vi den rätta behandlingen för dig. Om du är osäker på vilken behandling som bäst passar din hudtyp och hjälper till att ta bort ärr från finnar, boka en kostnadsfri konsultation hos oss på AcneSpecialisten. Vi hjälper dig mot en klarare hy, fri från ärr.</p>',
    image_small: 'bilder/hudproblem/358x274/arr-fran-finnar.webp',
    image_large: 'bilder/hudproblem/424x456/arr-fran-finnar.webp',
    image_alt: 'Bild som illustrerar ärr från finnar',
    image_title: 'Ärr frånf innar',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Behandla finnar ärr', '/behandla-finnar-arr.php'),
);

$about_title = 'Hur vi behandlar och tar bort ärr från finnar?';

$about_content = '<p class="p200">Att behandla och minska synligheten av <a class="b200 underline color-deep-sea-400" href="/acnearr.php" title="Mer information om ärr av finnar">ärr av finnar</a> kräver expertis och en genomtänkt strategi. På AcneSpecialisten använder vi avancerade metoder och behandlingar skräddarsydda för att effektivt minska dessa ärr. Med vår kostnadsfria hudkonsultation identifierar vi ärrens djup och omfattning för att skapa en personligt anpassad behandlingsplan.</p>

    <p class="p200 mt-xl">Vår första prioritet är att behandla och reducera ärrvävnaden för att återställa hudens jämna yta. Efter behandling av ärren hjälper vi dig med en anpassad hudvårdsrutin för att förbättra hudens textur och elasticitet. Om du också har aktiva finnar, rekommenderar vi lösningar för att hantera dessa, då obehandlade finnar kan leda till fler ärr. Vårt team på AcneSpecialisten stödjer dig genom hela processen, från första konsultationen till att uppnå önskat resultat.</p>';

$headline01 = "01. Identifiera";

$define_image_alt = 'Hur vi behandlar och tar bort ärr från finnar?';
$define_image_title = 'Hur vi behandlar och tar bort ärr från finnar?';

$define_content = '<p class="p200">Det första steget i vår process för att behandla ärr från finnar är att kartlägga och analysera dina ärrs omfattning och djup. Vi börjar med en kostnadsfri konsultation där vi undersöker din hud och diskuterar dina mål samt eventuella tidigare behandlingar. Vi tar före-bilder för att följa din huds framsteg och justerar behandlingsplanen vid behov. En personlig hudterapeut följer dig genom hela processen, vilket säkerställer att du får konsekvent och anpassad behandling utifrån dina behov och önskemål.</p>';

$define_consultation_link = "https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars";
$define_consultation_link_label = "Boka gratis konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för ärr från finnar";

$headline02 = "02. Behandla";

$treat_image_small = 'https://via.placeholder.com/358x274.jpg';
$treat_image_large = 'https://via.placeholder.com/872x456.jpg';

$treat_content = '<p class="p200">Efter att ha identifierat och analyserat dina ärr, går vi vidare till behandlingsfasen. Målet här är att minska synligheten av ärr och förbättra hudens struktur, oavsett om det rör sig om fläckar eller gropar. Beroende på ärrtyp och djup, använder vi olika metoder för att säkerställa effektiv behandling. Denna process stimulerar hudens naturliga regenerering, ökar kollagenproduktionen och förbättrar hudens struktur och ton. Vi anpassar kontinuerligt behandlingsplanen baserat på hur din hud svarar, med målet att uppnå bästa möjliga resultat och få bort ärren.</p>';

$treat_url = 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars';
$treat_url_label = 'Se behandlingar för ärr från finnar';
$treat_url_title = 'Klicka här för att se våra behandlingar för ärr från finnar';


$services = array(

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_title: 'Klient som genomgår laserbehandling mot ärr från finnar',
        image_alt: 'Bild av laserbehandling mot ärr från finnar hos Acnespecialisten',
        title: 'Laser mot ärr (Gropar & Fläckar)',
        duration: '90 min',
        price: '5595 kr',
        content: '<p class="p200">Laserbehandling är en effektiv metod för att reducera synligheten av ärr från finnar. Laserstrålen tränger djupt ner i huden och skapar mikroskopiska kanaler, vilket stimulerar hudens naturliga kollagenproduktion och cellförnyelse. Denna process hjälper till att fylla ut gropar och jämna ut hudens textur. Dessutom minskar den missfärgningar och fläckar genom att bryta ner pigmenterade celler. Laserbehandlingen är precis och kraftfull, vilket resulterar i en jämnare hud och en friskare hy.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot ärr från finnar',
        url: '/laser-arr.php',
        url_label: 'Läs mer om laser',
        url_title: 'Läs mer om laser mot ärr från finnar',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars&method=Method_LaserProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot ärr från finnar nu',
        short_title: 'Laser mot ärr från finnar'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för ärr från finnar',
        image_alt: 'Bild på kemisk peelingbehandling mot ärr från finnar hos Acnespecialisten',
        title: 'Kemisk peeling mot ärr (Fläckar)',
        duration: '40 min',
        price: '1995 kr',
        content: '<p class="p200">Kemisk peeling är en effektiv behandling för att reducera ärr från finnar. En specialformulerad syra appliceras på huden för att exfoliera det översta hudlagret där fläckar och gropar finns. Denna process stimulerar hudens naturliga förnyelse och tillväxt av ny hud. Genom att ta bort de yttre lagren av döda hudceller bidrar kemisk peeling till att minska synligheten av ärrbildning och förbättra hudens textur, vilket resulterar i en jämnare och klarare hud.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot ärr från finnar',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling',
        url_title: 'Läs mer om kemisk peeling mot ärr från finnar',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars&method=Method_ChemicalPeeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot ärr från finnar nu',
        short_title: 'Kemisk Peeling mot ärr från finnar'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för ärr från finnar',
        image_alt: 'Bild på microneedlingbehandling mot ärr från finnar hos Acnespecialisten',
        title: 'Microneedling mot ärr (Fläckar & Gropar)',
        duration: '50 min',
        price: '2595 kr',
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod mot ärr från finnar som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen, vilket hjälper till att fylla ut och jämna ut ärrade områden. Microneedling förbättrar även hudens struktur och ton, vilket leder till en mer jämn och klar hy.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot ärr från finnar',
        url: '/microneedling-acnearr.php',
        url_label: 'Läs mer om microneedling',
        url_title: 'Läs mer om microneedling mot ärr från finnar',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars&method=Method_Microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot ärr från finnar nu',
        short_title: 'Microneedling mot ärr från finnar'
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

$show_all_results_label = "Se alla resultat";
$show_all_results_title = "Resultat mot ärr från finnar";

$results_images = array(
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-brostet.webp',
        image_alt: 'Ärr på bröstet före och efter behandling',
        image_title: 'Resultat - ärr på bröstet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-gropar.webp',
        image_alt: 'Gropar och ärr före och efter behandling',
        image_title: 'Resultat - gropar och ärr',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-ansikte-vanster.webp',
        image_alt: 'Ärr i ansiktet från vänster sida före och efter behandling',
        image_title: 'Resultat - ärr i ansiktet',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-tinning.webp',
        image_alt: 'Ärr på tinningen före och efter behandling',
        image_title: 'Resultat - ärr på tinningen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-ryggen.webp',
        image_alt: 'Ärr på ryggen före och efter behandling',
        image_title: 'Resultat - ärr på ryggen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-flackar.webp',
        image_alt: 'Ärr och fläckar före och efter behandling',
        image_title: 'Resultat - ärr och fläckar',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-tinning-man.webp',
        image_alt: 'Ärr på tinningen hos man före och efter behandling',
        image_title: 'Resultat - ärr på tinningen',
        content: '',
    ),
    new LabelImage(
        image_url: '/bilder/resultat/832x476/arr/arr-resultat-fore-efter-kind.webp',
        image_alt: 'Ärr på kinden före och efter behandling',
        image_title: 'Resultat - ärr på kinden',
        content: '',
    ),
);


$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för ärr orsakade av finnar?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för ärr som uppstått på grund av finnar, inklusive laserbehandling, kemisk peeling och microneedling.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling av ärr från finnar hos Acnespecialisten?',
            text: 'En behandling av ärr som uppstått på grund av finnar hos Acnespecialisten tar vanligtvis cirka 30 - 60 min.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se resultat på ärr orsakade av finnar?',
            text: 'Antalet behandlingar som behövs för att se resultat på ärr som uppstått av finnar varierar beroende på ärrskadans omfattning och din hudtyp. Genomsnittligt antal behandlingar är mellan 3-8 stycken.'
        ),
        new Question(
            title: 'Är behandlingarna för ärr orsakade av finnar smärtsamma?',
            text: 'Behandlingarna för ärr som uppstått av finnar hos Acnespecialisten är utformade för att minimera obehag. När vi behandlar ärrade områden kan det dock uppstå en tillfällig smärta. Denna känsla är dock övergående och försvinner snabbt, så du kan känna dig trygg under behandlingen.'
        ),
        new Question(
            title: 'Kan alla hudtyper behandlas för ärr orsakade av finnar hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder behandlingar för ärr som uppstått av finnar som passar alla hudtyper.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till behandling av ärr från finnar";

$specialists = array(
    new Specialist(
        name: 'Cassandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_title: 'Cassandra Lindberg, Hudterapeut hos Acnespecialisten sedan 2015',
        image_alt: 'Cassandra Lindberg - Erfaren Hudterapeut hos Acnespecialisten'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_title: 'Veronika Benedik, Erfaren Hudterapeut på Acnespecialisten',
        image_alt: 'Veronika Benedik, hudterapeut sedan 1999 på Acnespecialisten'
    ),
    new Specialist(
        name: 'Jennifer Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_title: 'Julia Eklund, Hudterapeut på Acnespecialisten',
        image_alt: 'Julia Eklund, Hudterapeut sedan 2021 på Acnespecialisten'

    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_title: 'Vilma Libom, Hudterapeut på Acnespecialisten',
        image_alt: 'Vilma Libom, hudterapeut sedan 2019 på Acnespecialisten'
    )
);

$specialist_url_label = "Se alla hudterapeut";
$specialist_url_title = "På ärr från finnar Specialiserade Hudterapeuter";

$brands = array(
    new Brand(
        label: 'DAHL Skincare',
        image: 'bilder/logotyper/dahl-skincare.webp',
        image_alt: 'DAHL Skincare logotyp',
        image_title: 'DAHL Skincare - hudvårdsprodukter',
        url: 'https://www.dahlskincare.com/sv/',
        url_title: 'DAHL Skincare',
    ),
    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_title: 'Alma Hybrid - CO2 laser',
        image_alt: 'Alma Hybrid logotyp',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Läs mer om Alma Hybrid CO2 laser',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_title: 'Harmony XL Pro - Laser & IPL',
        image_alt: 'Harmony XL Pro logotyp',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen Brand Logo',
        image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
        url: '/dermapen.php',
        url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
    ),
    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_title: 'Skin Tech - Professionella kemiska peelingar',
        image_alt: 'Skin Tech logotyp',
        url: '/varumarken/skin-tech/',
        url_title: 'Läs mer om Skin Techs kemiska peelingar',
    ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av ärr från finnar";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/behandla-finnar-arr.php" />

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
                <?php if (isset($products) && sizeof($products) > 0) { ?>
                    <section id="prevent">
                        <h2 class="h500 l10n"><?php echo $headline03 ?></h2>
                        <?php foreach ($products as $product) {
                            include('hudproblem/widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results_grid/results_grid.php') ?>
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
                <section id="results-narrow" class="large-margin">
                    <?php
                    $results_title = 'Jämför resultaten';
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php');
                    ?>
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