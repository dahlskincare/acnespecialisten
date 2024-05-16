<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandling av Ärr från Finnar - Effektiv Behandling';
$seo_description = 'Utforska de mest effektiva behandlingsmetoderna för ärr från finnar. Få skräddarsydda råd, tips, och expertis från oss för att behandla och minska ärr.';
$seo_keywords = 'behandling av ärr från finnar, ärr från finnar, metod för behandling av finnärr, laserbehandling för finnärr, microneedling, kemisk peeling';
$seo_image = 'images/treatments/large/acne-scars.jpg';

$model = new Service(
    title: 'Behandling av Ärr från Finnar',
    duration: null,
    price: 'Från 1595 kr',
    content: 'Här har vi samlat de mest effektiva metoderna för behandling av ärr från finnar som hjälper dig att effektivt hantera dessa märken. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">ärrehandling</a> som bäst passar din hudtyp för att ta hand om ärr orsakade av finnar? Oroa dig inte, boka en kostnadsfri konsultation hos oss på AcneSpecialisten så hjälper vi dig vidare mot en hy fri från märken orsakade av finnar.',
    image_small: 'images/treatments/small/acne-scars.jpg',
    image_large: 'images/treatments/large/acne-scars.jpg',
    image_alt: 'Bild som illustrerar ärr från finnar',
    image_title: 'Ärr frånf innar',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar'),
    new PathSegment('Behandla acneärr', '/behandla-acnearr.php'),
);

$about_title = 'Hur vi behandlar och tar bort ärr från finnar?';

$about_content = '<p class="p200">Att behandla och minska synligheten av ärr från finnar kräver expertis och en genomtänkt strategi. På AcneSpecialisten använder vi avancerade metoder och behandlingar skräddarsydda för att effektivt hantera dessa ärr. Med vår kostnadsfria hudkonsultation identifierar vi ärrskadans djup och omfattning, vilket möjliggör en personligt anpassad behandlingsplan.</p>

    <p class="p200 mt-xl">Vår första prioritet är att effektivt behandla och reducera ärrvävnaden för att återställa hudens jämna yta. Efter att vi har behandlat de direkta ärrvävnaderna hjälper vi dig med en anpassad hudvårdsrutin som kan bidra till att förbättra hudens textur och elasticitet över tid. Om du också har aktiva finnutbrott, kommer vi att rekommendera lösningar för att hantera dessa, eftersom obehandlade finnar kan bidra till ytterligare ärrbildning. Vårt team på Acnespecialisten är dedikerade till att stödja dig genom hela processen, från första konsultationen till att uppnå önskat resultat.</p>';

$headline01 = "01. Identifiera dina ärr från finnar";

$define_image_alt = 'Hur vi behandlar och tar bort ärr från finnar?';
$define_image_title = 'Hur vi behandlar och tar bort ärr från finnar?';

$define_content = '<p class="p200">Det första steget i vår process för att behandla ärr från finnar är att kartlägga och analysera dina ärrs omfattning och djup. Vi inleder med en kostnadsfri konsultation där vi undersöker din hud och diskuterar dina hudmål samt tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer att du får en konsekvent och anpassad omsorg baserat på dina specifika behov och önskemål.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka Gratis Konsultation för Ärr från Finnar";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för ärr från finnar";

$headline02 = "02. Behandla ärr från finnar";

$treat_image_small = 'https://via.placeholder.com/358x274.jpg';
$treat_image_large = 'https://via.placeholder.com/872x456.jpg';

$treat_content = '<p class="p200">Efter att ha identifierat och analyserat dina ärr från finnar, går vi vidare till nästa steg: behandling av ärrbildningen. Målet i denna fas är att reducera synligheten och strukturen av dessa ärr. Beroende på ärrtyp och djup, tillämpar vi olika metoder och tekniker för att säkerställa att varje ärr behandlas effektivt. Genom denna process stimulerar vi hudens naturliga regenerationsförmåga, främjar kollagenproduktionen, och förbättrar hudens struktur och ton. Vi fortsätter att anpassa behandlingsplanen baserat på hur din hud svarar, med syftet att ge bästa möjliga resultat och minskad synlighet av ärr från finnar.</p>';

$treat_url = 'gratis-hudkonsultation.php';
$treat_url_label = 'Se behandlingar för ärr från finnar';
$treat_url_title = 'klicka här för att se våra behandlingar för ärr från finnar';


$services = array(

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Klient som genomgår laserbehandling mot ärr från finnar',
        image_alt: 'Bild av laserbehandling mot ärr från finnar hos Acnespecialisten',
        title: 'Effektiv laserbehandling mot ärr från finnar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Effektiv'),
        content: '<p class="p200">Laserbehandling för ärr från finnar hos Acnespecialisten fungerar genom att använda ljusenergi för att minska synligheten av ärrbildning. Laserstrålen tränger ner och behandlar de djupa lager där ärrbildningen sitter, stimulerar kollagenproduktionen och förnyelsen av hudceller.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot ärr från finnar',
        url: '/laser-arr.php',
        url_label: 'Läs mer om laser mot ärr från finnar',
        url_title: 'Läs mer om laser mot ärr från finnar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars&method=Method_LaserProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot ärr från finnar nu',
        short_title: 'Laser mot ärr från finnar'
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av kemisk peelingbehandling för ärr från finnar',
        image_alt: 'Bild på kemisk peelingbehandling mot ärr från finnar hos Acnespecialisten',
        title: 'Kemisk peeling mot ärr från finnar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Ljusande'),
        content: '<p class="p200">Kemisk peeling för ärr från finnar på Acnespecialisten använder en speciell lösning som appliceras på huden för att avlägsna skadade yttre skikt, vilket ger plats åt ny, jämnare hud att växa fram. Detta bidrar till att reducera utseendet av ärrbildning och förbättrar hudens textur.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot ärr från finnar',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling mot ärr från finnar',
        url_title: 'Läs mer om kemisk peeling mot ärr från finnar',
        booking_url: 'bhttps://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars&method=Method_ChemicalPeeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot ärr från finnar nu',
        short_title: 'Kemisk Peeling mot ärr från finnar'
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av microneedlingbehandling för ärr från finnar',
        image_alt: 'Bild på microneedlingbehandling mot ärr från finnar hos Acnespecialisten',
        title: 'Effektiv microneedling mot ärr från finnar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Minskning av ärr'),
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod mot ärr från finnar som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen, vilket hjälper till att fylla ut och jämna ut ärrade områden.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot ärr från finnar',
        url: '/microneedling-acnearr.php',
        url_label: 'Läs mer om microneedling mot ärr från finnar',
        url_title: 'Läs mer om microneedling mot ärr från finnar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars&method=Method_Microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot ärr från finnar nu',
        short_title: 'Microneedling mot ärr från finnar'
    ),
);

$results = array(
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
        )
    ),
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
        )
    ),
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat mot ärr från finnar";
$show_all_results_title = "Resultat mot ärr från finnar";

$reviews = array(
    new Review(
        brand: 'Trustpilot',
        title: 'Supernöjd',
        text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
        signature: 'Sofia',
        stars: 5,
        logo_url: 'images/brands/trustpilot.svg'

    ),
    new Review(
        brand: 'Google',
        title: 'Jag är mycket nöjd..',
        text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
        signature: 'Lovisa',
        stars: 5,
        logo_url: 'images/brands/google-small.svg'

    ),
    new Review(
        brand: 'Bokadirekt',
        title: 'Rekommenderar varmt!',
        text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
        signature: 'Emily',
        stars: 5,
        logo_url: 'images/brands/bokadirekt-small.svg'
    ),

);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";


$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för ärr orsakade av finnar?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för ärr som uppstått på grund av finnar, inklusive laserbehandling, kemisk peeling och microneedling.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling av ärr från finnar hos Acnespecialisten?',
            text: 'En behandling av ärr som uppstått på grund av finnar hos Acnespecialisten tar vanligtvis cirka 30 - 60 minuter.'
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

$skinguide_url_label = "Läs fler guider";
$skinguide_url_title = "Läs fler guider om behandling av ärr från finnar";

$specialists = array(
    new Specialist(
        name: 'Cassandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_title: 'Cassandra Lindberg, Hudterapeut hos Acnespecialisten sedan 2015',
        image_alt: 'Cassandra Lindberg - Erfaren Hudterapeut hos Acnespecialisten'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_title: 'Veronika Benedik, Erfaren Hudterapeut på Acnespecialisten',
        image_alt: 'Veronika Benedik, hudterapeut sedan 1999 på Acnespecialisten'
    ),
    new Specialist(
        name: 'Jennifer Eklund',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_title: 'Amira Maqboul, Hudterapeut på Acnespecialisten',
        image_alt: 'Amira Maqboul, hudterapeut sedan 2017 på Acnespecialisten'

    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
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
        url: 'https://dahlskincare.se',
        url_title: 'DAHL Skincare',
    ),
    new Brand(
        label: 'Alma',
        image: 'bilder/logotyper/alma.svg',
        image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
        image_alt: 'Alma logotyp',
        url: '/varumarken/alma',
        url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
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
        url: '/varumarken/skin-tech',
        url_title: 'Läs mer om Skin Techs kemiska peelingar',
    ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av ärr från finnar";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
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
                        <?php foreach ($services as $service) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php');
                        } ?>
                </section>
                <?php if (isset($products) && sizeof($products) > 0) { ?>
                    <section id="prevent">
                        <h2 class="h500 l10n"><?php echo $headline03 ?></h2>
                        <?php foreach ($products as $product) {
                            include('../../widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <section id="results">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                </section>
                <section id="reviews">
                    <h2 class="big l10n">Omdömen</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $review_url_title ?>" href="https://se.trustpilot.com/review/acnespecialisten.se"><?php echo $review_url_label ?></a>
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
                <!--Hudguide-->
                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeuter</h2>
                        <a href="/hudterapeut" title="Specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut"><?php echo $specialist_url_label ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken" title="Varumärken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" title="Varumärken" href="varumarken">Se alla varumärken</a>
            </section>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>