<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla Pigmentfläckar - Effektiva Metoder och Förebyggande | AcneSpecialisten';
$seo_description = 'Lär dig allt om pigmentfläckar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från AcneSpecialisten.';
$seo_keywords = 'pigmentfläckar, behandla pigmentfläckar, orsaker till pigmentfläckar, förebygga pigmentfläckar, reducera pigmentfläckar, solskador, melasma, lentigo, hudfläckar, ojämn hudton';


// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'images/treatments/large/pigmentflackar.jpg';

$image_large = 'images/treatments/large/pigmentflackar.jpg';
$image_small = 'images/treatments/small/pigmentflackar.jpg';
$image_alt = 'Bild som illustrerar pigmentfläckar';
$image_title = 'Pigmentfläckar';

$title = 'Pigmentfläcksbehandlingar';
$description = 'Vi på Acnespecialisten har samlat de mest effektiva metoderna för att behandla och minska pigmentfläckar. Våra pigmentfläcksbehandlingar är skräddarsydda för att effektivt reducera pigmenteringar oavsett dess orsak eller typ. Oavsett ditt specifika behov, har vi den rätta lösningen för att ge dig en klarare och jämnare hudton. Är du osäker på vilken <a href="https://www.acnespecialisten.se/pigmentflacksbehandlingar">pigmentfläcksbehandling</a> som passar din hudtyp bäst? Oroa dig inte, boka en kostnadsfri hudkonsultation hos oss på Acnespecialisten, och våra experter kommer att vägleda dig mot en strålande och friskare hud.';

$booking_link = 'rätt bokningslänk här';
$booking_link_title = 'Boka behandling';
$consultation_link = 'rätt konsultationslänk här';
$consultation_link_title = 'Boka hudkonsultation';


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

$about_title = 'Hur vi reducerar och tar bort pigmentfläckar';

$about_content = '<p class="p200">Att behandla och reducera pigmentfläckar är en process som kräver noggrannhet. På Acnespecialisten använder vi vår expertis och de mest effektiva metoderna för att framgångsrikt behandla och minska pigmentfläckar. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och skapa en individuell behandlingsplan som passar just dig.</p>

    <p class="p200 mt-xl">Med vår kostnadsfria hudkonsultation bestämmer vi den bästa åtgärden för att behandla dina specifika pigmentfläckar. Oavsett om det handlar om en enstaka fläck eller ett mer omfattande område, är vårt huvudsyfte att återge din hud dess naturliga, jämnare utseende. Genom varje steg i processen, från den inledande konsultationen till att uppnå det önskade resultatet, är vårt dedikerade team på AcneSpecialisten här för att stödja dig.</p>';

$headline01 = "01. Identifiera dina pigmentfläckar";

$define_image = 'images/service-categories/large/konsultation.jpg';
$define_image_alt = 'Behandling av Pigmentfläckar';
$define_image_title = 'Behandling av Pigmentfläckar';

$define_content = '<p class="p200">För att kunna hjäpla dig med dina pigmentfläckar är det viktigt att vi förstår ditt specifika hudtillstånd och dina pigmentfläckarnas natur. Vi börjar med en kostnadsfri konsultation där vi analyserar din hud noggrant och diskuterar dina mål samt dina tidigare erfarenheter med pigmentfläckar. Vi tar förebilder för att noga övervaka dina framsteg och skapa en skräddarsydd behandlingsplan som är utformad speciellt för dig. En personlig hudterapeut kommer att vara din följeslagare genom hela din resa mot en klarare hud, vilket garanterar att du får den bästa möjliga vården.</p>';

$define_consultation_link = "https://www.acnespecialisten.se/boka-hudkonsultation";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för behandling av pigmentfläckar";


$headline02 = "02. Behandling av pigmentfläckar";

$treat_content = '<p class="p200">När vi har identifierat dina pigmentfläckar, inleder vi behandlingen för att reducera eller eliminera pigmentfläkcarna för att återställa en jämnare hudton. Vi använder olika metoder och behandlingar som är skräddarsydda efter dina specifika behov. Detta gör att vi kan maximera resultaten och minimera eventuellt obehag. Genom denna process arbetar vi för att minska pigmentfläckarnas synlighet och förbättra hudens utseende över tid.</p>';

$services = array(

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Klient som genomgår IPL-behandling mot pigmentfläckar',
        image_alt: 'Bild av IPL-behandling mot pigmentfläckar hos AcneSpecialisten',
        title: 'Effektiv IPL-behandling mot pigmentfläckar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Effektiv'),
        content: '<p class="p200">IPL-behandling för att reducera pigmentfläckar hos Acnespecialisten använder intensivt pulserande ljus för att noggrant behandla områden med ökad pigmentering. Ljusenergin tränger djupt in i huden och riktar sig mot de områden där pigmentfläckarna är mest synliga. Denna metod minskar produktionen av melanin i huden och hjälper till att återställa en mer jämn hudton.</p>',
        consultation_url: 'konsultation-ipl',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för IPL-behandling mot pigmentfläckar',
        booking_url: 'boka-ipl-behandling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din IPL-behandling mot pigmentfläckar nu',
        url: 'behandlingar/ipl-behandling-mot-pigmentflackar',
        url_label: 'Läs mer om IPL-behandlingar för pigmentfläckar',
        url_title: 'Utforska mer om våra IPL-behandlingar mot pigmentfläckar',
        short_title: 'IPL'
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av kemisk peelingbehandling för pigmentfläckar',
        image_alt: 'Bild på kemisk peelingbehandling mot pigmentfläckar hos Acnespecialisten',
        title: 'Kemisk peeling mot pigmentfläckar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Ljusande'),
        content: '<p class="p200">Kemisk peeling behandlar effektivt pigmentfläckar med hjälp av syror som avlägsnar det yttersta hudlagret. Detta främjar cellförnyelse och bidrar till att reducera synligheten av pigmentfläckar samt förbättra hudens struktur och utseende.</p>',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot pigmentfläckar',
        url: 'behandlingar/kemisk-peeling-mot-pigmentflackar',
        url_label: 'Läs mer om kemisk peeling mot pigmentfläckar',
        url_title: 'Utforska mer om vår kemiska peelingbehandling mot pigmentfläckar',
        booking_url: 'boka-kemisk-peeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot pigmentfläckar nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av microneedlingbehandling för pigmentfläckar',
        image_alt: 'Bild på microneedlingbehandling mot pigmentfläckar hos Acnespecialisten',
        title: 'Effektiv microneedling mot pigmentfläckar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Minskning av ärr'),
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod för att behandla och minska pigmentfläckar. Den använder små mikronålar för att skapa mikroskopiska kanaler i huden, vilket stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin. Detta bidrar till att minska synligheten av pigmentfläckar och främjar en jämnare hudton. Microneedling möjliggör även djupare penetration av aktiva ingredienser som hjälper till att reducera pigmentfläckar.</p>',
        consultation_url: 'microneedling-konsultation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot pigmentfläckar',
        url: 'behandlingar/microneedling-mot-pigmentflackar',
        url_label: 'Läs mer om microneedling mot pigmentfläckar',
        url_title: 'Utforska mer om vår microneedlingbehandling mot pigmentfläckar',
        booking_url: 'boka-microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot pigmentfläckar nu',
        short_title: 'Microneedling'
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Effektiv behandling med CryoPen mot pigmentfläckar på Acnespecialisten',
        image_alt: 'Bild illustrerar en behandling med CryoPen mot pigmentfläckar utförd på Acnespecialisten',

        title: 'Behandling med CryoPen mot pigmentfläckar',
        duration: '30-60 minuter',
        price: 'Pris från 899 kr',
        icons: array('who-infants' => 'Precis', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Effektiv', 'who-adults' => 'Pigmentfläcksreducerande'),
        content: '<p class="p200">CryoPen-behandling för pigmentfläckar på Acnespecialisten använder extrem kyla för att noggrant och skonsamt behandla pigmentfläckar. CryoPen-enheten applicerar kontrollerad kyla på pigmentfläckarna, vilket resulterar i deras nedbrytning och minskad synlighet. Denna metod är effektiv och minimalt invasiv, vilket innebär minimalt obehag och ingen återhämtningstid.</p>',

        consultation_url: 'boka-hudkonsultation-pigmentflackar',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för CryoPen mot pigmentfläckar på Acnespecialisten',

        booking_url: 'boka-cryopen-pigmentflackar',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din CryoPen-behandling mot pigmentfläckar på Acnespecialisten',

        url: 'behandlingar/cryopen-behandling-mot-pigmentflackar',
        url_label: 'Läs Mer om Vår CryoPen-behandling mot pigmentfläckar',
        url_title: 'Mer Information om Vår CryoPen-behandling mot pigmentfläckar',

        short_title: 'CryoPen'
    ),

);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "Se fler resultat mot pigmentfläckar";


$reviews = array(
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Allt gick jätte bra!',
        text: "Allt gick jätte bra, personal var snäll och trevlig med min dotter. Min dotter var orolig för behandling hur ska det vara därför har det varit så lång tid innan vi kommit tillbaka och börjat med behandling. Det var inte lätt för henne men hon är jätte nöjd och glad när hon såg bra resultat /ändring på hennes ansikte. Tack så jätte mycket!!",
        signature: 'Emily'
    ),
    new Review(
        stars: 5,
        brand: 'Google',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Man behöver inte klä av sig',
        text: "Man behöver inte klä av sig för behandling. Behandlaren känns inte stressad, sitter kvar utan att springa iväg för att uträtta annat! Frågar inte ut en. Försöker inte pracka på en produkter. Är trevlig och hjälpsam",
        signature: 'Emily'
    ),
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Otroligt nöjd',
        text: "Efter bara tre månader hos bästa Emma har min hud blivit så mycket bättre! Efter en graviditet och en kombination av hormonell och bakteriell acne så har jag äntligen börjar komma tillbaks till min gamla hy. Är verkligen så himla nöjd. Har gjort ansiktsbehandling mot acne samt kört acnespecialistens produkter och kan bara säga gott om dem!",
        signature: 'Emily'
    ),
    new Review(
        stars: 5,
        brand: 'Google',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Nöjd',
        text: "Ett första besök som absolut kommer leda till ett till. Bra och tydlig information om vad som skulle vara bäst för min hy.",
        signature: 'Emily'
    ),
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Kunniga och bra!',
        text: "Mina tonårsdöttrar har båda gått till acnespecialisten under flera år med både mindre och större problemområden. Vi har alltid fått professionell och kunnig behandling, bra produkter och bra råd, som också hjälper fint!",
        signature: 'Emily'
    ),
);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";


$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka typer av pigmentfläcksbehandlingar erbjuder Acnespecialisten?',
            text: 'Acnespecialisten erbjuder flera olika typer av behandlingar för att reducera och behandla pigmentfläckar, inklusive laserbehandling, kemisk peeling, microneedling och cryopen.'
        ),

        new Question(
            title: 'Hur lång tid tar en pigmentfläcksbehandling hos Acnespecialisten?',
            text: 'En pigmentfläcksbehandling hos Acnespecialisten tar vanligtvis cirka 30-60 minuter, beroende på den specifika behandlingsmetoden.'
        ),

        new Question(
            title: 'Hur många behandlingar behövs för att se resultat vid pigmentfläcksbehandling?',
            text: 'Antalet behandlingar som behövs för att se resultat vid pigmentfläcksbehandling varierar beroende på pigmentfläckarnas svårighetsgrad och din hudtyp. I genomsnitt krävs vanligtvis 3-5 behandlingar.'
        ),

        new Question(
            title: 'Är pigmentfläcksbehandlingar smärtsamma?',
            text: 'Pigmentfläcksbehandlingar hos Acnespecialisten är utformade för att minimera obehag. Vissa behandlingsmetoder kan orsaka en mild känsla av obehag eller stickande under själva behandlingen, men detta är vanligtvis övergående och försvinner snabbt.'
        ),

        new Question(
            title: 'Kan alla hudtyper behandlas för pigmentfläckar hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder pigmentfläcksbehandlingar som kan anpassas för att passa alla hudtyper och hudtoner.'
        ),

    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till pigmentfläcksbehandling";

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
$skinguide_url_title = "Läs fler guider om pigmentfläcksbehandling";

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

$specialist_url_label = "Se alla specialister ";
$specialist_url_title = "Pigmentfläcks Specialiserade Hudterapeuter";

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
$brands_url_title = "Varumärken för pigmentfläcksbehandling";

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
    <link rel="stylesheet" href="problem/treatment.css">
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
                    <img class="mt-xl step-image" src="<?php echo $define_image ?>" alt="<?php echo $define_image_alt ?>" title="<?php echo $define_image_title ?>" width="872" height="456" />
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
                        <a href="faq" title="FAQ" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler frågor & svar</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="faq"><?php echo $faq_url_label ?></a>
                </section>
                <section id="skin-guide">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n">Hudguide</h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="<?php echo $skinguide_url_title ?>"><?php echo $skinguide_url_label ?></a>
                </section>
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
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>