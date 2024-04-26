<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla Pigmentfläckar - Effektiva Metoder och Förebyggande';
$seo_description = 'Lär dig allt om pigmentfläckar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från AcneSpecialisten.';
$seo_keywords = 'pigmentfläckar, behandla pigmentfläckar, orsaker till pigmentfläckar, förebygga pigmentfläckar, reducera pigmentfläckar, solskador, melasma, lentigo, hudfläckar, ojämn hudton';


// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'images/treatments/large/ipl.webp';

$image_large = 'bilder/hudproblem/424x456/pigmentflackar.webp';
$image_small = 'bilder/hudproblem/424x456/pigmentflackar.webp';
$image_alt = 'Bild som illustrerar pigmentfläckar';
$image_title = 'Pigmentfläckar';

$title = 'Behandlingar mot pigmentfläckar';
$description = 'Vi på Acnespecialisten har samlat de mest effektiva metoderna för att behandla och minska pigmentfläckar. Våra pigmentfläcksbehandlingar är skräddarsydda för att effektivt reducera pigmenteringar oavsett dess orsak eller typ. Oavsett ditt specifika behov, har vi den rätta lösningen för att ge dig en klarare och jämnare hudton. Är du osäker på vilken pigmentfläcksbehandling som passar din hudtyp bäst? Oroa dig inte, boka en kostnadsfri hudkonsultation hos oss på Acnespecialisten, och våra experter kommer att vägleda dig mot en strålande och friskare hud.';

$booking_link = 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots';
$booking_link_title = 'Boka behandling';
$consultation_link = 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots';
$consultation_link_title = 'Boka hudkonsultation';


$nav_buttons = array(
    'about' => 'Info',
    'define' => 'Konsultation',
    'treat' => 'Behandlingar',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Hudterapeuter'
);

$about_title = 'Hur vi reducerar och tar bort pigmentfläckar';

$about_content = '<p class="p200">Att behandla och reducera pigmentfläckar är en process som kräver noggrannhet. På Acnespecialisten använder vi vår expertis och de mest effektiva metoderna för att framgångsrikt behandla och minska pigmentfläckar. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och skapa en individuell behandlingsplan som passar just dig.</p>

    <p class="p200 mt-xl">Med vår kostnadsfria hudkonsultation bestämmer vi den bästa åtgärden för att behandla dina specifika pigmentfläckar. Oavsett om det handlar om en enstaka fläck eller ett mer omfattande område, är vårt huvudsyfte att återge din hud dess naturliga, jämnare utseende. Genom varje steg i processen, från den inledande konsultationen till att uppnå det önskade resultatet, är vårt dedikerade team på AcneSpecialisten här för att stödja dig.</p>';

$headline01 = "01. Identifiera dina pigmentfläckar";

$define_image_alt = 'Behandling av Pigmentfläckar';
$define_image_title = 'Behandling av Pigmentfläckar';

$define_content = '<p class="p200">För att kunna hjäpla dig med dina pigmentfläckar är det viktigt att vi förstår ditt specifika hudtillstånd och dina pigmentfläckarnas natur. Vi börjar med en kostnadsfri konsultation där vi analyserar din hud noggrant och diskuterar dina mål samt dina tidigare erfarenheter med pigmentfläckar. Vi tar förebilder för att noga övervaka dina framsteg och skapa en skräddarsydd behandlingsplan som är utformad speciellt för dig. En personlig hudterapeut kommer att vara din följeslagare genom hela din resa mot en klarare hud, vilket garanterar att du får den bästa möjliga vården.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för behandling av pigmentfläckar";


$headline02 = "02. Behandling av pigmentfläckar";

$treat_content = '<p class="p200">När vi har identifierat dina pigmentfläckar, inleder vi behandlingen för att reducera eller eliminera pigmentfläkcarna för att återställa en jämnare hudton. Vi använder olika metoder och behandlingar som är skräddarsydda efter dina specifika behov. Detta gör att vi kan maximera resultaten och minimera eventuellt obehag. Genom denna process arbetar vi för att minska pigmentfläckarnas synlighet och förbättra hudens utseende över tid.</p>';

$services = array(

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Klient som genomgår IPL-behandling mot pigmentfläckar',
        image_alt: 'Bild av IPL-behandling mot pigmentfläckar hos AcneSpecialisten',
        title: 'Effektiv IPL-behandling mot pigmentfläckar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">IPL-behandling för att reducera pigmentfläckar hos Acnespecialisten använder intensivt pulserande ljus för att noggrant behandla områden med ökad pigmentering. Ljusenergin tränger djupt in i huden och riktar sig mot de områden där pigmentfläckarna är mest synliga. Denna metod minskar produktionen av melanin i huden och hjälper till att återställa en mer jämn hudton.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för IPL-behandling mot pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din IPL-behandling mot pigmentfläckar nu',
        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om IPL mot pigmentfläckar',
        url_title: 'Läs mer om IPL mot pigmentfläckar',
        short_title: 'IPL'
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av kemisk peelingbehandling för pigmentfläckar',
        image_alt: 'Bild på kemisk peelingbehandling mot pigmentfläckar hos Acnespecialisten',
        title: 'Kemisk peeling mot pigmentfläckar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Kemisk peeling behandlar effektivt pigmentfläckar med hjälp av syror som avlägsnar det yttersta hudlagret. Detta främjar cellförnyelse och bidrar till att reducera synligheten av pigmentfläckar samt förbättra hudens struktur och utseende.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot pigmentfläckar',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling mot pigmentfläckar',
        url_title: 'Läs mer om kemisk peeling mot pigmnetfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot pigmentfläckar nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av microneedlingbehandling för pigmentfläckar',
        image_alt: 'Bild på microneedlingbehandling mot pigmentfläckar hos Acnespecialisten',
        title: 'Effektiv microneedling mot pigmentfläckar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod för att behandla och minska pigmentfläckar. Den använder små mikronålar för att skapa mikroskopiska kanaler i huden, vilket stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin. Detta bidrar till att minska synligheten av pigmentfläckar och främjar en jämnare hudton. Microneedling möjliggör även djupare penetration av aktiva ingredienser som hjälper till att reducera pigmentfläckar.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot pigmentfläckar',
        url: '/microneedling.php',
        url_label: 'Läs mer om microneedling mot pigmentfläckar',
        url_title: 'Läs mer om microneedling mot pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot pigmentfläckar nu',
        short_title: 'Microneedling'
    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Effektiv behandling med CryoPen mot pigmentfläckar på Acnespecialisten',
        image_alt: 'Bild illustrerar en behandling med CryoPen mot pigmentfläckar utförd på Acnespecialisten',

        title: 'Behandling med CryoPen mot pigmentfläckar',
        duration: '30-60 minuter',
        price: 'Pris från 899 kr',
        icons: array(),
        content: '<p class="p200">CryoPen-behandling för pigmentfläckar på Acnespecialisten använder extrem kyla för att noggrant och skonsamt behandla pigmentfläckar. CryoPen-enheten applicerar kontrollerad kyla på pigmentfläckarna, vilket resulterar i deras nedbrytning och minskad synlighet. Denna metod är effektiv och minimalt invasiv, vilket innebär minimalt obehag och ingen återhämtningstid.</p>',

        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för CryoPen mot pigmentfläckar på Acnespecialisten',

        booking_url: 'https://acnespecialisten.se/book?flow=cryopen&skipable_problem=SKIP',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din CryoPen-behandling mot pigmentfläckar på Acnespecialisten',

        url: '/cryopen.php',
        url_label: 'Läs mer om CryoPen mot pigmentfläckar',
        url_title: 'Läs mer om CryoPen mot pigmentfläckar',

        short_title: 'CryoPen'
    ),

);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "Se fler resultat mot pigmentfläckar";

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

$specialist_url_label = "Se alla hudterapeut";
$specialist_url_title = "Pigmentfläcks Specialiserade Hudterapeuter";

$brands = array(
    new Brand(
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRX-T33',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'images/brands/infuzion.svg',
        image_alt: 'Infuzion',
        image_title: 'Infuzion',
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
                                    <a href="<?php echo $consultation_link ?>" title="<?php echo $consultation_link_title ?>" class="button white expand l10n" title="Boka gratis konsultation">Boka gratis konsultation</a>
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
                    <h1 class="h600">
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
                            <a href="<?php echo $consultation_link ?>" title="<?php echo $consultation_link_title ?>" class="button b200 white l10n" title="Boka gratis konsultation">Boka gratis konsultation</a>
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