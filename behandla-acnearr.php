<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandling av acneärr - Effektiv Behandling | AcneSpecialisten';
$seo_description = 'Utforska de mest effektiva behandlingsmetoderna för acneärr. Få skräddarsydda råd, tips, och expertis från Acnespecialisten för att behandla och minska acneärr.';
$seo_keywords = 'behandling av acneärr, acneärrbehandling, metod för acneärrbehandling, laserbehandling för acneärr, microneedling, kemisk peeling';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'images/treatments/large/acne-scars.jpg';

$image_large = 'images/treatments/large/acne-scars.jpg';
$image_small = 'images/treatments/small/acne-scars.jpg';
$image_alt = 'Bild som illustrerar acneärr';
$image_title = 'Acneärr';

$path_segments = array(
      new PathSegment('Behandlingar', '/behandlingar.php'),
      new PathSegment('Behandla acneärr', '/behandla-acnearr.php'),
);

$title = 'Få bort acneärr';
$description = 'Här har vi samlat de mest effektiva metoderna för att ta bort acneärr. Oavsett om du vill få bort röda acneärr eller gropar i huden, har vi rätt lösning för dig. Är du osäker på vilken behandling som bäst passar din ärrtyp är du välkommen att boka en kostnadsfri konsultation hos oss på AcneSpecialisten så hjälper vi dig vidare mot en hy fri från acneärr.';

$booking_link = 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars';
$booking_link_title = 'Boka behandling';
$consultation_link = 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars';
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

$about_title = 'Hur vi behandlar och tar bort acneärr';

$about_content = '<p class="p200">Att behandla och minska synligheten av acneärr kräver expertis och en genomtänkt strategi. På AcneSpecialisten använder vi avancerade metoder och behandlingar skräddarsydda för att effektivt hantera acneärr. Med vår kostnadsfria hudkonsultation identifierar vi ärrets djup och omfattning, vilket möjliggör en personligt anpassad behandlingsplan.</p>

    <p class="p200 mt-xl">Vi behandlar och tar bort ärrvävnaden effektivt för att återställa hudens jämna yta. Om du också har aktiva akneutbrott, kommer vi att rekommendera lösningar för att hantera dessa, eftersom obehandlad akne kan bidra till ytterligare ärrbildning. Våra hudterapeuter på AcneSpecialisten är dedikerade till att stödja dig genom hela processen, från första konsultationen till att uppnå önskat resultat.</p>';

$headline01 = "01. Identifiera dina acneärr";

$define_image = '/bilder/behandlingar/872x456/gratis-hudkonsultation.webp';
$define_image_alt = 'Hur vi tar bort och behandlar acenärr?';
$define_image_title = 'Hur vi tar bort och behandlar acneärr?';

$define_image_alt = 'Hur vi behandlar och tar bort acneärr?';
$define_image_title = 'Hur vi behandlar och tar bort acneärr?';

$define_content = '<p class="p200">Det första steget i vår process för att behandla acneärr är att kartlägga och analysera dina ärrs omfattning, färg och djup. Vi inleder med en kostnadsfri konsultation där vi undersöker din hud och diskuterar dina hudmål samt tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer att du får en konsekvent och anpassad omsorg baserat på dina specifika behov och önskemål.</p>';

$define_consultation_link = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars";
$define_consultation_link_label = "Boka Gratis Konsultation för acneärr";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för acneärr";

$headline02 = "02. Behandla acneärr";

$treat_content = '<p class="p200">Efter att ha identifierat och analyserat dina acneärr, går vi vidare till nästa steg: behandling av ärrbildningen. Målet i denna fas är att reducera synligheten och strukturen av dessa ärr. Beroende på ärrtyp och djup, tillämpar vi olika metoder och tekniker för att säkerställa att varje ärr behandlas effektivt. Genom denna process stimulerar vi hudens naturliga reparationsförmåga, främjar kollagenproduktionen, och förbättrar hudens struktur och hudton. Vi fortsätter att anpassa behandlingsplanen baserat på hur din hud svarar, med syftet att ge bästa möjliga resultat och minskad synlighet av ärr.</p>';

$treat_url = '/laser-acnearr.php';
$treat_url_label = 'Se ärrbehandlingar';
$treat_url_title = 'klicka här för att se våra ärrbehandlingar';


$services = array(

    new Service(
        image_small: '/bilder/behandlingar/358x274/laser-mot-hudproblem.webp',
        image_large: '/bilder/behandlingar/872x456/laser-mot-hudproblem.webp',
        image_title: 'Kund som genomgår laserbehandling mot acneärr',
        image_alt: 'Bild av laserbehandling mot acneärr hos Acnespecialisten',
        title: 'Laser mot acneärr',
        duration: '90 min',
        price: '4595 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling för acneärr hos Acnespecialisten fungerar genom att använda ljusenergi för att minska synligheten av ärrbildning. Laserstrålen tränger ner och behandlar de djupa lager där ärrbildningen sitter, stimulerar kollagenproduktionen och förnyelsen av hudceller.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot acneärr',
        url: '/laser-arr.php',
        url_label: 'Läs mer om laser mot acneärr',
        url_title: 'Läs mer om laser mot acneärr',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars&method=Method_LaserProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot acneärr nu',
        short_title: 'Laser mot ärr'
    ),

    new Service(
        image_small: '/bilder/behandlingar/358x274/kemisk-peeling.webp',
        image_large: '/bilder/behandlingar/872x456/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för acneärr',
        image_alt: 'Bild på kemisk peelingbehandling mot acneärr hos Acnespecialisten',
        title: 'Kemisk peeling mot acneärr',
        duration: '30 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Kemisk peeling för acneärr på Acnespecialisten använder en speciell lösning som appliceras på huden för att avlägsna skadade yttre skikt, vilket ger plats åt ny, jämnare hud att växa fram. Detta bidrar till att reducera utseendet av ärrbildning och förbättrar hudens textur.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot acneärr',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling mot acneärr',
        url_title: 'Läs mer om kemisk peeling mot acneärr',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars&method=Method_ChemicalPeeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot acneärr nu',
        short_title: 'Kemisk Peeling mot ärr'
    ),

    new Service(
        image_small: '/bilder/behandlingar/358x274/microneedling.webp',
        image_large: '/bilder/behandlingar/872x456/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för acneärr',
        image_alt: 'Bild på microneedlingbehandling mot acneärr hos Acnespecialisten',
        title: 'Microneedling mot acneärr',
        duration: '50 min',
        price: '2595 kr',
        icons: array(),
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod mot acneärr som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen, vilket hjälper till att fylla ut och jämna ut ärrade områden.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot acneärr',
        url: '/microneedling-acnearr.php',
        url_label: 'Läs mer om microneedling mot acneärr',
        url_title: 'Läs mer om microneedling mot acneärr',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars&method=Method_Microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot acneärr nu',
        short_title: 'Microneedling mot ärr'
    ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat svår akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_title: 'Person som har rosacea',
            image_alt: 'Ansiktet på en person som behandlat rosacea, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

$show_all_results_label = "Se fler resultat mot acneärr";
$show_all_results_title = "Resultat mot acneärr";


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
            title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för acneärr?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för acneärr, inklusive laserbehandling, kemisk peeling och microneedling.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling av acneärr hos Acnespecialisten?',
            text: 'En behandling av acneärr hos Acnespecialisten tar vanligtvis cirka 30 - 60 minuter.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se resultat på acneärr?',
            text: 'Antalet behandlingar som behövs för att se resultat på acneärr varierar beroende på ärrskadans omfattning och din hudtyp. Genomsnittligt antal behandlingar är mellan 3-8 stycken.'
        ),
        new Question(
            title: 'Är behandlingarna för acneärr smärtsamma?',
            text: 'Behandlingarna för acneärr hos Acnespecialisten är utformade för att minimera obehag. När vi behandlar ärrade områden kan det dock uppstå en tillfällig smärta. Denna känsla är dock övergående och försvinner snabbt, så du kan känna dig trygg under behandlingen.'
        ),
        new Question(
            title: 'Kan alla hudtyper behandlas för acneärr hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder behandlingar för acneärr som passar alla hudtyper.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till behandling av acneärr";

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
$skinguide_url_title = "Läs fler guider om behandling av acneärr";

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

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "acneärr Specialiserade Hudterapeuter";

$brands = array(
      new Brand(
            label: 'Alma',
            image: 'bilder/logotyper/alma.svg',
            image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
            image_alt: 'Alma logotyp',
            url: 'varumarken/alma',
            url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
      ),
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