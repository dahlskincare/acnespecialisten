<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla Mogen Hy - Effektiv Behandling och Förebyggande';
$seo_description = 'Upptäck skräddarsydda behandlingsalternativ för mogen hy. Vår kunskap hjälper dig att behandla och förebygga åldrande hud med effektiva lösningar.';
$seo_keywords = 'mogen hy, hudåldrande, åldrande hud, hudvårdsbehandlingar, åldrande hudbehandling, rynkor, fina linjer, åldrande hudvård';
$seo_image = '/bilder/hudproblem/424x456/mogen-hy.webp';

$path_segments = array(
    new PathSegment('Hudproblem', '/hudproblem'),
    new PathSegment('Mogen hy', '/mogen-hy.php'),
    new PathSegment('Behandla Mogen hy', '/hudproblem/mogen-hy/behandla-mogen-hy/'),
);

$model = new Service(
    title: 'Behandlingar för Mogen Hy',
    duration: null,
    price: null,
    content: 'Upptäck våra skräddarsydda behandlingsalternativ för mogen hy som hjälper dig att effektivt behandla och vårda åldrande hud. Oavsett dina specifika behov, har vi rätt lösningar för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">hudvårdsbehandling</a> som passar bäst för din mogen hy? Oroa dig inte, boka en kostnadsfri konsultation hos oss på AcneSpecialisten så hjälper vi dig vidare mot en friskare och mer ungdomlig hud.',
    image_small: '/bilder/hudproblem/424x324/mogen-hy.webp',
    image_large: '/bilder/hudproblem/424x456/mogen-hy.webp',
    image_alt: 'Bild som illustrerar mogen hy',
    image_title: 'Mogen hy',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Wrinkles',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=facialClassic&FacialType=Service_Facial_AntiStress',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Vi behandlar mogen hy';

$nav_buttons = array(
    'about' => 'Info',
    'define' => 'Konsultation',
    'treat' => 'Behandlingar',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'specialists' => 'Hudterapeuter'
);

$about_title = 'Hur vi vårdar och behandlar mogen hy';

$about_content = '<p class="p200">Mogen hy förtjänar särskild omtanke och behandling. Vi på AcneSpecialisten har lång erfarenhet av att ta hand om mogen hy och bekämpa ålderstecken. Med vår kostnadsfria hudkonsultation skapar vi en skräddarsydd plan för att ta hand om din mogen hy.</p>

<p class="p200 mt-xl">Vi återställer hudens elasticitet och minska synligheten av fina linjer och rynkor, vanliga tecken på mogen hy. Vårt mål är att ge dig en strålande och ungdomligare hy. Vi kommer att guida dig genom skapandet av en personlig hudvårdsrutin med produkter och behandlingar som passar din mogen hy perfekt. Hos Acnespecialisten ser vi fram emot att hjälpa dig på din resa mot en vackrare och friskare hy, oavsett din ålder.</p>';

$headline01 = "01. Identifiera din mogna hy";

$define_image_alt = 'Hur vi tar hand om och behandlar mogen hy?';
$define_image_title = 'Hur vi tar hand om och behandlar mogen hy?';

$define_content = '<p class="p200">För att vårda mogen hy på bästa sätt är det avgörande att fastställa din unika hudtyp och dess behov. Vi erbjuder en kostnadsfri konsultation där vi noggrant analyserar din mogen hy och lyssnar på dina mål och tidigare erfarenheter. Genom att ta förebilder av din hud kan vi följa utvecklingen över tiden och skapa en skräddarsydd hudvårdsplan som passar just din mogen hy. Vår personliga hudterapeut kommer att vara med dig genom hela din resa för att säkerställa att du får den bästa möjliga vården.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för behandling av mogen hy";


$headline02 = "02. Behandla mogen hy";

$treat_content = '<p class="p200">När din hudtyp och dess specifika behov har identifierats, går vi vidare till att behandla och vårda mogen hy. Här är vårt huvudmål att minska ålderstecken och förbättra hudens övergripande hälsa. Vi använder olika anpassade metoder för att optimera resultaten och minimera eventuellt obehag. Genom denna process arbetar vi med att minska synliga tecken på åldrande, förbättra hudens textur och vitalitet samt anpassar behandlingsplanen efter din huds respons.</p>';

$services = array(

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Effektiv Ansiktsbehandling för Mogen Hy på AcneSpecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling för mogen hy utförd på AcneSpecialisten',

        title: 'Ansiktsbehandling för Mogen Hy',
        duration: '60 minuter',
        price: 'Pris från 1199 kr',
        icons: array(),
        content: '<p class="p200">Ansiktsbehandling för mogen hy på Acnespecialisten är särskilt anpassad för att återuppliva och ge näring åt mogen hud. Behandlingen inleds med en skonsam rengöring för att ta bort orenheter och friska upp huden. Efter rengöringen introduceras LED-ljusterapin, känd för sina föryngrande egenskaper, som hjälper till att stimulera kollagenproduktionen och minska synligheten av fina linjer och rynkor. Behandlingen avslutas med en närande mask och en fuktgivande kräm som är speciellt framtagen för mogen hud, vilket ger en ljusare, fastare och mer ungdomlig hud.</p>',

        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Skin_Consultation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Mogen Hy på AcneSpecialisten',

        booking_url: 'https://acnespecialisten.se/book?flow=facialClassic&FacialType=Service_Facial_AntiStress',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling för Mogen Hy på AcneSpecialisten',

        url: '/ansiktsbehandlingar.php',
        url_label: 'Läs mer om ansiktsbehandlingar mot mogen hy',
        url_title: 'Läs mer om ansiktsbehandlingar mot mogen hy',
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Klient som genomgår laserbehandling för mogen hy',
        image_alt: 'Bild av laserbehandling för mogen hy hos Acnespecialisten',
        title: 'Effektiv laserbehandling för mogen hy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling för mogen hy hos Acnespecialisten fungerar genom att använda ljusenergi för att förnya och stimulera hudens kollagenproduktion. Denna metod hjälper till att minska fina linjer, rynkor och ger huden ett upplyft och fräscht utseende.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling för mogen hy',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling för mogen hy nu',
        url: '/hudbehandlingar/laser-mot-hudproblem/',
        url_label: 'Läs mer om laser mot mogen hy',
        url_title: 'Läs mer om laser mot mogen hy',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av kemisk peelingbehandling för mogen hy',
        image_alt: 'Bild på kemisk peelingbehandling för mogen hy hos Acnespecialisten',
        title: 'Kemisk peeling för mogen hy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Kemisk peeling för mogen hy hos Acnespecialisten syftar till att ta bort det översta lagret av döda hudceller och främjar tillväxten av ny, frisk hud. Denna behandling hjälper till att minska tecken på åldrande, som fina linjer och rynkor, samtidigt som den förbättrar hudens textur och lyster.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling för mogen hy',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling mot mogen hy',
        url_title: 'Läs mer om kemisk peeling mot mogen hy',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling för mogen hy nu',
        short_title: 'Kemisk Peeling för Mogen Hy'

    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av microneedlingbehandling för mogen hy',
        image_alt: 'Bild på microneedlingbehandling för mogen hy hos Acnespecialisten',
        title: 'Effektiv microneedling för mogen hy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Microneedling är en framstående behandlingsmetod för mogen hy som används för att öka hudens produktion av kollagen och elastin. Denna teknik använder små mikronålar för att skapa fina kanaler i huden, vilket förbättrar hudens textur, reducerar fina linjer och återupplivar hudens ungdomliga utseende.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling för mogen hy',
        url: '/microneedling.php',
        url_label: 'Läs mer om microneedling mot mogen hy',
        url_title: 'Läs mer om microneedling mot mogen hy',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling för mogen hy nu',
        short_title: 'Microneedling för Mogen Hy'

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

$specialist_url_label = "Se alla hudterapeuter";
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
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
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
                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeut</h2>
                        <a href="/hudterapeut" title="Specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeut</span>
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