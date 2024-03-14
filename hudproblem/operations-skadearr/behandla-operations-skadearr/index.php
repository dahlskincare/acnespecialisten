<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandling av Operations- och Skadeärr - Effektiv Metod | AcneSpecialisten';
$seo_description = 'Utforska de mest effektiva behandlingsmetoderna för operations- och skadeärr. Få skräddarsydda råd, tips och expertis från AcneSpecialisten för att behandla och minska ärr orsakade av operationer och skador.';
$seo_keywords = 'behandling av operationsärr, skadeärrbehandling, metod för skadeärrbehandling, laserbehandling för skadeärr, microneedling, kemisk peeling för skadeärr';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = '/bilder/hudproblem/424x456/arr.webp';

$path_segments = array(
    new PathSegment('Hudproblem', '/hudproblem.php'),
    new PathSegment('Operations- och Skadeärr', '/hudproblem/operations-skadearr'),
    new PathSegment('Behandla Operations- och Skadeärr', '/hudproblem/operations-skadearr/behandla-operations-skadearr'),
);

$image_small = '/bilder/hudproblem/424x324/operations-skadearr.webp';
$image_large = '/bilder/hudproblem/424x456/operations-skadearr.webp';
$image_alt = 'Bild som illustrerar operations- och skadeärr';
$image_title = 'Operations- och skadeärr';

$title = 'Behandling av Operations- och Skadeärr';
$description = 'Här har vi samlat de mest effektiva metoderna för behandling av operations- och skadeärr som hjälper dig att behandla dessa effektivt. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">ärrehandling</a> som bäst passar din hudtyp för att minska synligheten av operations- och skadeärr? Oroa dig inte, boka en kostnadsfri konsultation hos oss på AcneSpecialisten så hjälper vi dig vidare mot en hud med reducerade ärr.';

$booking_link = 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars';
$booking_link_title = 'Boka ärrbehandling';
$consultation_link = 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars';
$consultation_link_title = 'Boka konsultation för ärr';


$nav_buttons = array(
    'about' => 'Info',
    'define' => 'Konsultation',
    'treat' => 'Behandlingar',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister'
);

$about_title = 'Hur vi behandlar och tar bort operations- och skadeärr?';

$about_content = '<p class="p200">Att behandla och minska synligheten av operations- och skadeärr kräver rätt kunskap och erfarenhet. På AcneSpecialisten använder vi avancerade metoder och behandlingar skräddarsydda för att effektivt hantera dessa ärr. Med vår kostnadsfria hudkonsultation identifierar vi skadans djup och omfattning, vilket möjliggör en personligt anpassad behandlingsplan.</p>';


$headline01 = "01. Identifiera dina operations- och skadeärr";

$define_image_alt = 'Hur vi behandlar och tar bort operations- och skadeärr?';
$define_image_title = 'Hur vi behandlar och tar bort operations- och skadeärr?';

$define_content = '<p class="p200">Det första steget i vår process för att behandla operations- och skadeärr är att kartlägga och analysera dina ärrs omfattning och djup. Vi inleder med en kostnadsfri konsultation där vi undersöker din hud och diskuterar dina hudmål samt tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer att du får en konsekvent och anpassad behandling baserat på dina specifika behov och önskemål.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka Gratis Konsultation för operations- och skadeärr";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för operations- och skadeärr";

$headline02 = "02. Behandla operations- och skadeärr";

$treat_image_small = 'https://via.placeholder.com/358x274.jpg';
$treat_image_large = 'https://via.placeholder.com/872x456.jpg';

$treat_content = '<p class="p200">Efter att ha identifierat och analyserat dina operations- och skadeärr, går vi vidare till nästa steg: behandling av ärrbildningen. Målet i denna fas är att reducera synligheten och strukturen av dessa ärr. Beroende på ärrtyp och djup, tillämpar vi olika metoder och tekniker för att säkerställa att varje ärr behandlas effektivt. Genom denna process stimulerar vi hudens naturliga regenerationsförmåga, främjar kollagenproduktionen, och förbättrar hudens struktur och ton. Vi fortsätter att anpassa behandlingsplanen baserat på hur din hud svarar, med syftet att ge bästa möjliga resultat och minskad synlighet av ärr.</p>';

$treat_url = 'gratis-hudkonsultation.php';
$treat_url_label = 'Se behandlingar för operations- och skadeärr';
$treat_url_title = 'klicka här för att se våra behandlingar för operations- och skadeärr';


$services = array(

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Klient som genomgår laserbehandling mot operations- och skadeärr',
        image_alt: 'Bild av laserbehandling mot operations- och skadeärr hos Acnespecialisten',
        title: 'Effektiv laserbehandling mot operations- och skadeärr',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling för operations- och skadeärr hos Acnespecialisten är en avancerad teknik som utnyttjar ljusenergis kraft för att effektivt minska synligheten av ärr. Denna behandlingsmetod riktar sig specifikt mot de djupa hudlagren där ärrbildningen vanligtvis finns. Laserstrålen tränger djupt ner i huden, vilket säkerställer att varje ärr blir behandlat effektivt. Under behandlingsprocessen stimuleras också kollagenproduktionen, vilket är avgörande för hudens elasticitet och förnyelse. Som ett resultat upplever patienter inte bara en minskning av ärrsynlighet, utan också en förbättrad hudton och textur.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot operations- och skadeärr',
        url: '/behandlingar/laser-mot-hudproblem/',
        url_label: 'Läs mer om laser mot operations- och skadeärr',
        url_title: 'Läs mer om laser mot operations- och skadeärr',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot operations- och skadeärr nu',
        short_title: 'Laser mot operations- och skadeärr'
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av kemisk peelingbehandling för operations- och skadeärr',
        image_alt: 'Bild på kemisk peelingbehandling mot operations- och skadeärr hos Acnespecialisten',
        title: 'Kemisk peeling mot operations- och skadeärr',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Kemisk peeling för operations- och skadeärr hos Acnespecialisten är en process där en speciellt formulerad lösning appliceras på huden för att noggrant avlägsna skadade yttre hudskikt. Genom att avlägsna dessa lager avslöjas en ny, friskare och jämnare hud underifrån. Behandlingen fokuserar inte bara på att ta bort det skadade ytskiktet, utan också på att stimulera hudens naturliga förnyelseprocess. Således hjälper det till att reducera ärrbildningens utseende och förbättrar signifikant hudens övergripande textur, lyster och ton.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot operations- och skadeärr',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling mot operations- och skadeärr',
        url_title: 'Läs mer om kemisk peeling mot operations- och skadeärr',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot operations- och skadeärr nu',
        short_title: 'Kemisk Peeling mot operations- och skadeärr'
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av microneedlingbehandling för operations- och skadeärr',
        image_alt: 'Bild på microneedlingbehandling mot operations- och skadeärr hos Acnespecialisten',
        title: 'Effektiv microneedling mot operations- och skadeärr',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Microneedling, som utförs hos Acnespecialisten, är en innovativ och effektiv behandlingsmetod för operations- och skadeärr. Behandlingen involverar användning av en enhet utrustad med små mikronålar som skapar tusentals mikroskopiska kanaler i huden. Dessa små kanaler fungerar som en trigger för hudens naturliga läkningsrespons, vilket leder till ökad kollagen- och elastinproduktion. Denna boost i kollagen fyller effektivt ut och jämnar ut de ärrade områdena, vilket resulterar i en jämnare och friskare hud. Förutom att behandla ärr, bidrar microneedling också till att förbättra hudens elasticitet, textur och övergripande utseende.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot operations- och skadeärr',
        url: '/microneedling.php',
        url_label: 'Läs mer om microneedling mot operations- och skadeärr',
        url_title: 'Läs mer om microneedling mot operations- och skadeärr',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot operations- och skadeärr nu',
        short_title: 'Microneedling mot operations- och skadeärr'
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
            duration: '3 månader',
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
            duration: '2 månader',
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
            duration: '4 månader',
        )
    ),
);

$show_all_results_label = "Se fler resultat mot operations- och skadeärr";
$show_all_results_title = "Resultat mot operations- och skadeärr";

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
            title: 'Vilka är de vanligaste behandlingsmetoderna för operations- och skadeärr?',
            text: '<p class="p200">Det finns flera behandlingsalternativ för operations- och skadeärr, och valet av metod beror på ärrets typ, placering och den enskilda patientens behov. De mest populära metoderna inkluderar laserbehandling, som bryter ner ärrvävnaden och stimulerar hudens naturliga läkningsprocess; microneedling, där små nålar används för att skapa mikroskopiska sår i huden vilket aktiverar kollagenproduktionen; och kemisk peeling, där syror appliceras för att ta bort de yttersta hudlagren och främja ny hudtillväxt.</p>'
        ),
        new Question(
            title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för operations- och skadeärr?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för operations- och skadeärr, inklusive laserbehandling, kemisk peeling och microneedling.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling av operations- och skadeärr hos Acnespecialisten?',
            text: 'En behandling av operations- och skadeärr hos Acnespecialisten tar vanligtvis cirka 30 - 60 minuter.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se resultat på operations- och skadeärr?',
            text: 'Antalet behandlingar som behövs för att se resultat på operations- och skadeärr varierar beroende på ärrskadans omfattning och din hudtyp. Genomsnittligt antal behandlingar är mellan 3-8 stycken.'
        ),
        new Question(
            title: 'Är behandlingarna för operations- och skadeärr smärtsamma?',
            text: 'Behandlingarna för operations- och skadeärr hos Acnespecialisten är utformade för att minimera obehag. När vi behandlar ärrade områden kan det dock uppstå en tillfällig smärta. Denna känsla är dock övergående och försvinner snabbt, så du kan känna dig trygg under behandlingen.'
        ),
        new Question(
            title: 'Kan alla hudtyper behandlas för operations- och skadeärr hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder behandlingar för operations- och skadeärr som passar alla hudtyper.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till behandling av operations- och skadeärr";

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
$skinguide_url_title = "Läs fler guider om behandling av akneärr";

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

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter Specialiserade på operations- och skadeärr";

$brands = array(
    new Brand(
        label: 'Powerlite',
        image: 'images/brands/powerlite.svg',
        image_alt: 'Powerlite',
        image_title: 'Powerlite',
    ),
    new Brand(
        label: 'Dermapen4',
        image: 'images/brands/dermapen4.svg',
        image_alt: 'Dermapen4',
        image_title: 'Dermapen4',
    ),
    new Brand(
        label: 'Cryopen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'Cryopen',
        image_title: 'Cryopen',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'images/brands/lumenis.svg',
        image_alt: 'Lumenis',
        image_title: 'Lumenis',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRXT',
        image: 'images/brands/prxt.svg',
        image_alt: 'PRXT',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'Hydrafacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'Hydrafacial',
        image_title: 'Hydrafacial',
    ),
    new Brand(
        label: 'IP infusion',
        image: 'images/brands/ipinfusion.svg',
        image_alt: 'IP infusion',
        image_title: 'IP infusion',
    ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av operations- och skadeärr";

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
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h500">
                            <?php echo $title ?>
                        </h2>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="<?php echo $consultation_link ?>" title="<?php echo $consultation_link_title ?>" class="button white expand l10n" title="Få gratis konsultation">Få gratis konsultation</a>
                                </div>
                                <div class="column">
                                    <a href="<?php echo $booking_link ?>" title="<?php echo $booking_link_title ?>" class="button white expand l10n" title="Boka behandling">Boka behandling</a>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="mt-xs h600">
                        <?php echo $title ?>
                    </h1>
                    <p class="mt-xs">
                        <?php echo $description ?>
                    </p>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="<?php echo $consultation_link ?>" title="<?php echo $consultation_link_title ?>" class="button b200 white expand l10n" title="Gratis konsultation">Gratis konsultation</a>
                            </div>
                            <div class="column is-half">
                                <a href="<?php echo $booking_link ?>" title="<?php echo $booking_link_title ?>" class="button b200 white expand l10n" title="Boka behandling">Boka behandling</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="green-header-large" class="is-hidden-touch">
                <div class="container">
                    <div class="columns">
                        <div class="column is-half">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                        </div>
                        <div class="column is-half flex-row align-end justify-end">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600">
                            <?php echo $title ?>
                        </h1>
                        <p class="mt-s p200">
                            <?php echo $description ?>
                        </p>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="<?php echo $consultation_link ?>" title="<?php echo $consultation_link_title ?>" class="button b200 white l10n" title="Få gratis konsultation">Få gratis konsultation</a>
                            <a href="<?php echo $booking_link ?>" title="<?php echo $booking_link_title ?>" class="button b200 white l10n" title="Boka behandling">Boka behandling</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="mt-m is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="mt-m is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                        <img src="<?php echo $image_small ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
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
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Omdömen</h2>
                        <div class="flex-row is-hidden-mobile">
                            <div class="step-buttons">
                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                    <?php icon('arrow-left') ?>
                                </button>
                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                    <?php icon('arrow-right') ?>
                                </button>
                            </div>
                            <a href="https://se.trustpilot.com/review/acnespecialisten.se" title="Läs fler omdömen" class="ml-l button compact text">
                                <span class="l10n">Läs fler omdömen</span>
                                <?php icon('navigate-next') ?>
                            </a>
                        </div>

                    </div>
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
                        <h2 class="big l10n">Våra specialister</h2>
                        <a href="specialister" title="Specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla specialister</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="specialister"><?php echo $specialist_url_label ?></a>
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