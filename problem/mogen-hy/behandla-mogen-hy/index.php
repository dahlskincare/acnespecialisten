<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla Mogen Hy - Effektiv Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Upptäck skräddarsydda behandlingsalternativ för mogen hy hos Acnespecialisten. Vår kunskap hjälper dig att behandla och förebygga åldrande hud med effektiva lösningar.';
$seo_keywords = 'mogen hy, hudåldrande, åldrande hud, hudvårdsbehandlingar, åldrande hudbehandling, rynkor, fina linjer, åldrande hudvård';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'images/treatments/large/mogen-hy.jpg';

$image_large = 'images/treatments/large/mogen-hy.jpg';
$image_small = 'images/treatments/small/mogen-hy.jpg';
$image_alt = 'Bild som illustrerar mogen hy';
$image_title = 'Mogen hy';

$title = 'Behandlingar för Mogen Hy';
$description = 'Upptäck våra skräddarsydda behandlingsalternativ för mogen hy som hjälper dig att effektivt behandla och vårda åldrande hud. Oavsett dina specifika behov, har vi rätt lösningar för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">hudvårdsbehandling</a> som passar bäst för din mogen hy? Oroa dig inte, boka en kostnadsfri konsultation hos oss på AcneSpecialisten så hjälper vi dig vidare mot en friskare och mer ungdomlig hud.';

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

$about_title = 'Hur vi vårdar och behandlar mogen hy';

$about_content = '<p class="p200">Mogen hy förtjänar särskild omtanke och behandling. Vi på AcneSpecialisten har lång erfarenhet av att ta hand om mogen hy och bekämpa ålderstecken. Med vår kostnadsfria hudkonsultation skapar vi en skräddarsydd plan för att ta hand om din mogen hy.</p>

<p class="p200 mt-xl">Vi återställer hudens elasticitet och minska synligheten av fina linjer och rynkor, vanliga tecken på mogen hy. Vårt mål är att ge dig en strålande och ungdomligare hy. Vi kommer att guida dig genom skapandet av en personlig hudvårdsrutin med produkter och behandlingar som passar din mogen hy perfekt. Hos Acnespecialisten ser vi fram emot att hjälpa dig på din resa mot en vackrare och friskare hy, oavsett din ålder.</p>';

$headline01 = "01. Identifiera din mogna hy";

$define_image = 'images/service-categories/large/konsultation.jpg';
$define_image_alt = 'Hur vi tar hand om och behandlar mogen hy?';
$define_image_title = 'Hur vi tar hand om och behandlar mogen hy?';

$define_content = '<p class="p200">För att vårda mogen hy på bästa sätt är det avgörande att fastställa din unika hudtyp och dess behov. Vi erbjuder en kostnadsfri konsultation där vi noggrant analyserar din mogen hy och lyssnar på dina mål och tidigare erfarenheter. Genom att ta förebilder av din hud kan vi följa utvecklingen över tiden och skapa en skräddarsydd hudvårdsplan som passar just din mogen hy. Vår personliga hudterapeut kommer att vara med dig genom hela din resa för att säkerställa att du får den bästa möjliga vården.</p>';

$define_consultation_link = "https://www.acnespecialisten.se/boka-hudkonsultation";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för behandling av mogen hy";


$headline02 = "02. Behandla mogen hy";

$treat_content = '<p class="p200">När din hudtyp och dess specifika behov har identifierats, går vi vidare till att behandla och vårda mogen hy. Här är vårt huvudmål att minska ålderstecken och förbättra hudens övergripande hälsa. Vi använder olika anpassade metoder för att optimera resultaten och minimera eventuellt obehag. Genom denna process arbetar vi med att minska synliga tecken på åldrande, förbättra hudens textur och vitalitet samt anpassar behandlingsplanen efter din huds respons.</p>';

$services = array(

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Effektiv Ansiktsbehandling för Mogen Hy på AcneSpecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling för mogen hy utförd på AcneSpecialisten',

        title: 'Ansiktsbehandling för Mogen Hy',
        duration: '60 minuter',
        price: 'Pris från 1199 kr',
        icons: array('who-infants' => 'Djuprengörande', 'who-elders' => 'Hudbalanserande', 'who-teenagers' => 'Porrensande', 'who-adults' => 'Anti-åldrande'),
        content: '<p class="p200">Ansiktsbehandling för mogen hy på Acnespecialisten är särskilt anpassad för att återuppliva och ge näring åt mogen hud. Behandlingen inleds med en skonsam rengöring för att ta bort orenheter och friska upp huden. Efter rengöringen introduceras LED-ljusterapin, känd för sina föryngrande egenskaper, som hjälper till att stimulera kollagenproduktionen och minska synligheten av fina linjer och rynkor. Behandlingen avslutas med en närande mask och en fuktgivande kräm som är speciellt framtagen för mogen hud, vilket ger en ljusare, fastare och mer ungdomlig hud.</p>',

        consultation_url: 'boka-hudkonsultation-mogen-hy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Mogen Hy på AcneSpecialisten',

        booking_url: 'boka-djuprengörande-ansiktsbehandling-mogen-hy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling för Mogen Hy på AcneSpecialisten',

        url: 'behandlingar/ansiktsbehandlingar-problemhy/mogen-hy-behandling',
        url_label: 'Läs Mer om Vår Ansiktsbehandling för Mogen Hy',
        url_title: 'Mer Information om Vår Ansiktsbehandling för Mogen Hy'
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Klient som genomgår laserbehandling för mogen hy',
        image_alt: 'Bild av laserbehandling för mogen hy hos Acnespecialisten',
        title: 'Effektiv laserbehandling för mogen hy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Effektiv'),
        content: '<p class="p200">Laserbehandling för mogen hy hos Acnespecialisten fungerar genom att använda ljusenergi för att förnya och stimulera hudens kollagenproduktion. Denna metod hjälper till att minska fina linjer, rynkor och ger huden ett upplyft och fräscht utseende.</p>',
        consultation_url: 'konsultation-laser-mogen-hy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling för mogen hy',
        booking_url: 'boka-laserbehandling-mogen-hy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling för mogen hy nu',
        url: 'behandlingar/laserbehandling-for-mogen-hy',
        url_label: 'Läs mer om laserbehandlingar för mogen hy',
        url_title: 'Utforska mer om våra laserbehandlingar för mogen hy',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av kemisk peelingbehandling för mogen hy',
        image_alt: 'Bild på kemisk peelingbehandling för mogen hy hos Acnespecialisten',
        title: 'Kemisk peeling för mogen hy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Ljusande'),
        content: '<p class="p200">Kemisk peeling för mogen hy hos Acnespecialisten syftar till att ta bort det översta lagret av döda hudceller och främjar tillväxten av ny, frisk hud. Denna behandling hjälper till att minska tecken på åldrande, som fina linjer och rynkor, samtidigt som den förbättrar hudens textur och lyster.</p>',
        consultation_url: 'hudkonsultation-for-mogen-hy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling för mogen hy',
        url: 'behandlingar/kemisk-peeling-for-mogen-hy',
        url_label: 'Läs mer om kemisk peeling för mogen hy',
        url_title: 'Utforska mer om vår kemiska peelingbehandling för mogen hy',
        booking_url: 'boka-kemisk-peeling-for-mogen-hy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling för mogen hy nu',
        short_title: 'Kemisk Peeling för Mogen Hy'

    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av microneedlingbehandling för mogen hy',
        image_alt: 'Bild på microneedlingbehandling för mogen hy hos Acnespecialisten',
        title: 'Effektiv microneedling för mogen hy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Förbättring av hudstruktur'),
        content: '<p class="p200">Microneedling är en framstående behandlingsmetod för mogen hy som används för att öka hudens produktion av kollagen och elastin. Denna teknik använder små mikronålar för att skapa fina kanaler i huden, vilket förbättrar hudens textur, reducerar fina linjer och återupplivar hudens ungdomliga utseende.</p>',
        consultation_url: 'microneedling-konsultation-for-mogen-hy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling för mogen hy',
        url: 'behandlingar/microneedling-for-mogen-hy',
        url_label: 'Läs mer om microneedling för mogen hy',
        url_title: 'Utforska mer om vår microneedlingbehandling för mogen hy',
        booking_url: 'boka-microneedling-for-mogen-hy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling för mogen hy nu',
        short_title: 'Microneedling för Mogen Hy'

    ),

);

$results = array(
    new ResultCustomer(
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        image_alt: 'Resultat',
        image_title: 'Resultat',

        treatment: new ResultTreatment(
            duration: 'Efter 3 månaders <a href="behandlingar/mogen-hy" title="Mogen hy">behandlingar mot mogen hy</a>'
        ),
    ),
    new ResultCustomer(
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        image_alt: 'Resultat',
        image_title: 'Resultat',

        treatment: new ResultTreatment(
            duration: 'Efter 3 månaders <a href="behandlingar/mogen-hy" title="Mogen hy">behandlingar mot mogen hy</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "Resultat på behandling av mogen hy";

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
            title: 'Vilka typer av behandlingar erbjuder AcneSpecialisten för mogen hy?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för mogen hy, inklusive kemisk peeling, microneedling, laser och anti-aging-behandlingar.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling för mogen hy hos Acnespecialisten?',
            text: 'En behandling för mogen hy hos AcneSpecialisten tar vanligtvis cirka 60 - 90 minuter, beroende på behandlingstyp.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se resultat på mogen hy?',
            text: 'Antalet behandlingar som behövs för att se resultat på mogen hy varierar beroende på ditt specifika hudtillstånd och dina mål. Genomsnittligt antal behandlingar för mogen hy är mellan 3-5 stycken.'
        ),
        new Question(
            title: 'Är behandlingarna för mogen hy smärtsamma?',
            text: 'Behandlingarna för mogen hy hos Acnespecialisten är utformade för att minimera obehag. Några procedurer kan dock medföra en lätt stickande känsla eller värme, men detta är oftast övergående. Vårt team ser till att du är bekväm under hela processen.'
        ),
        new Question(
            title: 'Kan alla hudtyper med tecken på åldrande behandlas hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder behandlingar som är anpassade för alla hudtyper med tecken på åldrande.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till behandling för mogen hy";

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
$skinguide_url_title = "Läs fler guider om behandling för mogen hy";

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
$specialist_url_title = "Mogen hy Specialiserade Hudterapeuter";

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
$brands_url_title = "Varumärken för behandling av mogen hy";

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
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>