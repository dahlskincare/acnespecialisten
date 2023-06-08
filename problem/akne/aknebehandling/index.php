<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$image_large = 'images/treatments/large/acne-scars.jpg';
$image_small = 'images/treatments/small/acne-scars.jpg';
$problem = 'acne scars';
$title = 'Aknebehandlingar';
$description = 'Här har vi samlat de mest effektiva behandlingsmetoderna för alla typer av akne. Oavsett ditt specifika behov har vi lösningen för dig. Är du osäker på vilken aknebehandling som passar din hudtyp bäst? Oroa dig inte, boka en kostnadsfri konsultation hos oss på Acnespecialisten så hjälper vi dig vidare mot en klarare och friskare hy.';
$nav_buttons = array(
    'about' => 'Overview',
    'define' => 'Define problem',
    'treat' => 'Treatment solutions',
    'prevent' => 'Prevent problem',
    'repair' => 'Repair',
    'results' => 'Cases',
    'reviews' => 'Reviews',
    'faq' => 'Questions and answers',
    'skin-guide' => 'Skin guide',
    'specialists' => 'Specialists'
);
$about_title = 'Hur behandlar man akne?';
$about_content = '<p class="p200">På Acnespecialisten har vi expertisen och verktygen för att hjälpa dig att effektivt behandla och kontrollera akne. Vår omfattande strategi för aknebehandling börjar med att vi identifierar ditt specifika problem genom en kostnadsfri hudkonsultation. Vi tar oss tid att förstå din hud och din akne innan vi skräddarsyr en behandlingsplan anpassad just för dig. Våra behandlingar omfattar allt från avancerade ansiktsbehandlingar till avancerade lasertekniker, alla utformade för att effektivt behandla akne.</p>

    <p class="p200 mt-m">I nästa steg fokuserar vi på att behandla din akne med de mest effektiva metoderna anpassade till ditt specifika fall. Vi använder beprövade tekniker såsom kemisk peeling och microneedling för att både behandla befintlig akne och minska risken för framtida utbrott. För att förebygga ytterligare utbrott och upprätthålla resultaten från behandlingarna hjälper vi dig att utveckla en skräddarsydd hudvårdsrutin med produkter specifikt utvalda för att behndla akne. Slutligen riktar vi in oss på att reparera eventuella ärr som aknen kan ha lämnat efter sig. Oavsett svårighetsgraden av din akne, är vi på Acnespecialisten här för att hjälpa dig att återfå en klar, hälsosam hy. Låt oss bli din guide och personliga hudterapeut på din resa mot en aknefri hy!</p>';

$define_content = '<p class="p200">Det första steget i vår process är att identifiera din specifika typ av akne. Varje individs hud är unik, och det är därför viktigt att förstå exakt vilken typ av akne du har för att kunna erbjuda den mest effektiva behandlingen. Vi börjar med en kostnadsfri hudkonsultation där våra erfarna hudterapeuter analyserar din hud och dess specifika behov. Vi tar oss tid att diskutera dina hudproblem, dina mål med behandlingen och eventuella tidigare erfarenheter av hudvård eller aknebehandling. Genom denna noggranna analys kan vi skräddarsy en behandlingsplan som är skräddarsydd för just dig och din hud.</p>

    <p class="p200 mt-xl">Som en del av denna första fas tar vi även förebilder på din hud. Dessa bilder hjälper oss att tydligt följa din huds framsteg och anpassa din behandlingsplan när vi ser hur din hud svarar på behandlingen. En annan viktig aspekt av detta första steg är tilldelningen av en personlig hudterapeut. Din hudterapeut kommer att vara med dig genom hela din behandlingsresa, från den första konsultationen till ditt slutliga resultat. Denna konsekventa omsorg säkerställer att du alltid har en expert vid din sida som förstår din hud och dina specifika behov. Identifiering är avgörande eftersom alla typer av akne inte svarar likadant på behandlingar. Olika typer av akne kan kräva olika behandlingsmetoder, så förståelsen för din specifika akne är grunden för vår behandlingsprocess. Hos Acnespecialisten är vi dedikerade till att ge dig den bästa möjliga behandlingen för din akne, och det börjar med att noggrant identifiera och förstå din unika hud.</p>';

$treat_content = '<p class="p200">Efter att vi noggrant har identifierat din aknetyp och hudtillstånd, följer nästa fas i vår process: att behandla den aktiva aknen. På Acnespecialisten använder vi en rad effektiva behandlingsmetoder för att effektivt behandla och kontrollera akne. Från beprövade tekniker som ansiktsbehandlingar och kemisk peeling, till avancerade metoder som laserbehandling och microneedling. Varje behandlingsmetod väljs utifrån din unika hudtyp och aknebehov för att maximera resultaten och minimera obehaget.</p>

<p class="p200 mt-m">Din personliga hudterapeut, som följer dig genom hela din aknebehandlingsresa, kommer att applicera behandlingarna med största omsorg och precision. Dessa behandlingsmetoder är utformade för att minska inflammationen i huden, rensa bort döda hudceller, kontrollera överproduktionen av talg och, över tid, minska och förhindra bildandet av akne. Vi förstår att varje individs hud reagerar olika på olika behandlingar, och vi anpassar därför behandlingsplanen kontinuerligt baserat på hur din hud svarar.</p>

<p class="p200 mt-m">Målet med denna andra fas är att effektivt reducera din aktiva akne och förbereda din hud för nästa steg i processen: förebyggande och underhåll. Med Acnespecialisten vid din sida, kan du känna dig trygg i vetskapen att du får den mest effektiva och anpassade aknebehandlingen för just dig och din hud.</p>';

$define_consultation_url = 'hudkonsultation';
$services = array(
    new Service(
        id: 'ansiktsbehandling-mot-akne',
        title: 'Ansiktsbehandling mot akne',
        duration: '60 min',
        price: 'Pris från 799 kr',
        content: '<p class="p200">Ansiktsbehandling mot akne på Acnespecialisten är en djuprengöring av huden som tar bort döda hudceller och frigör tilltäppta porer. Behandlingen inleds med en rengöring, följt av ångning för att öppna upp porerna. Därefter följer en djup porrengöring där orenheter och akne elimineras. Behandlingen avslutas med en lugnande mask och fuktgivande kräm anpassad för din hudtyp.</p>',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_alt: 'Ansiktsbehandling mot akne',
        image_title: 'Ansiktsbehandling mot akne',
        consultation_url: 'konsultation-akne',
        consultation_url_title: 'konsultation mot akne',
        booking_url: 'boka-ansiktsbehandling-akne',
        booking_url_title: 'Boka behandling',
        icons: array('who-infants' => 'Djuprengörande', 'who-elders' => 'Hudbalanserande', 'who-teenagers' => 'Porrensande', 'who-adults' => 'Anti-inflammatorisk'),
        short_title: 'Microneedling'
    ),
    new Service(
        id: 'laser-mot-akne',
        title: 'Laser mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        content: '<p class="p200">Laserbehandling för akne hos Acnespecialisten fungerar genom att använda ljusenergi för att behandla inflammationen i huden som orsakar akne. Laserstrålen tränger ner i huden och behandlar de djupa lager där akne börjar. Denna metod reducerar oljeproduktionen i huden och dödar bakterier som bidrar till akneutbrott.</p>',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_alt: 'Laser mot akne',
        image_title: 'Laser mot akne',
        consultation_url: 'konsultation-laser',
        consultation_url_title: 'Konsultation mot akne',
        booking_url: 'Boka behandling',
        booking_url_title: 'Boka laser mot akne',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Effektiv'),
        short_title: 'Laser'
    ),
    new Service(
        id: 'kemisk-peeling-mot-akne',
        title: 'Kemisk peeling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        content: '<p class="p200">Kemisk peeling är en av de mest effektiva metoderna för att behandla akne. På Acnespecialisten använder vi en speciell lösning som appliceras på huden för att avlägsna det översta lagret. Detta ger plats åt ny, frisk hud att växa fram, vilket bidrar till att reducera utseendet av akneärr och att förbättra hudens textur och utseende.</p>',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_alt: 'Chemical peeling for acne scars',
        image_title: 'Chemical peeling for acne scars',
        consultation_url: 'hudkonsultation',
        consultation_url_title: 'Book a consultation',
        booking_url: null,
        booking_url_title: null,
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Ljusande'),
        short_title: 'Chemical peeling'
    ),
    new Service(
        id: 'microneedling-mot-akne',
        title: 'Mironeedling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod mot akne som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin. Microneedling behandlar även de underliggande problemen med akne genom att tillåta aktiva ingredienser att tränga djupare in i huden.</p>',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_alt: 'Microneedling mot akne',
        image_title: 'Microneedling mot akne',
        consultation_url: 'microneedling-konsultation',
        consultation_url_title: 'Boka konsultation',
        booking_url: 'Boka behandling',
        booking_url_title: 'Boka microneedling mot akne ',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Minskning av ärr'),
        short_title: 'Chemical peeling'
    ),
);
$products = array(
    new Product(
        url: 'PRODUKT-URL-HÄR',
        url_label: 'Läs mer',
        url_title: 'Balancing cleanser',
        price: 'Pris från 995 kr',
        content: '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_alt: 'Balancing cleanser',
        image_title: 'Balancing cleanser',
    ),
);
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$repair_title = '04. Repair post acne';
$repair_content = '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>';
$repair_image_small = 'https://via.placeholder.com/358x274.jpg';
$repair_image_large = 'https://via.placeholder.com/872x456.jpg';
$repair_url = 'treatments/acne';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">
        Acnespecialisten |
        <?php echo $title ?>
    </title>
    <meta name="description" content="" class="l10n">
    <meta name="title" content="" class="l10n">
    <meta name="keywords" content="" class="l10n">

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
                                    <a href="hudkonsultation" class="button white expand l10n">Få gratis konsultation</a>
                                </div>
                                <div class="column">
                                    <a href="https://bokadirekt.se" class="button white expand l10n">Boka behandling</a>
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
                                <a href="hudkonsultation" class="button b200 white expand l10n">Gratis konsultation</a>
                            </div>
                            <div class="column is-half">
                                <a href="https://bokadirekt.se" class="button b200 white expand l10n">Boka behandling</a>
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
                            <a href="hudkonsultation" class="button b200 white l10n">Få gratis konsultation</a>
                            <a href="https://bokadirekt.se" class="button b200 white l10n">Boka behandling</a>
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
                        <img src="<?php echo $image_small ?>" alt="<?php echo $title ?>" width="358" height="274" />
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
                    <h2 class="h500 l10n">01. Identifiera din akne</h2>
                    <picture>
                        <source media="(max-width: 799px)" srcset="images/service-categories/medium/consultation.jpg">
                        <source media="(min-width: 800px)" srcset="images/service-categories/large/consultation.jpg">
                        <img class="mt-xl step-image" src="images/service-categories/large/consultation.jpg" alt="<?php echo $title ?>" title="<?php echo $title ?>" width="872" height="456" />
                    </picture>
                    <div class="mt-xl"><?php echo $define_content ?></div>
                    <a href="<?php echo $define_consultation_url ?>" title="Konsultation" class="mt-xl button b200 l10n">Få gratis konsultation</a>
                </section>
                <section id="treat">
                    <h2 class="h500 l10n">02. Behandla aktiv akne</h2>
                    <div class="mt-xs">
                        <?php echo $treat_content ?>
                        </p>
                        <div id="service-buttons" class="mt-m flex-row is-hidden-tablet">
                            <?php foreach ($services as $service) { ?>
                                <button class="grey" onclick="scrollToElement('#service-card-<?php echo $service->id ?>')"><?php echo $service->short_title ?></button>
                            <?php } ?>
                        </div>
                        <?php foreach ($services as $service) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php');
                        } ?>
                </section>
                <?php if (isset($products) && sizeof($products) > 0) { ?>
                    <section id="prevent">
                        <h2 class="h500 l10n">03. Motverka ...</h2>
                        <?php foreach ($products as $product) {
                            include('../../widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <?php if (isset($repair_title) && isset($repair_content) && isset($repair_image_small) && isset($repair_image_large) && isset($repair_url)) { ?>
                    <section id="repair">
                        <h2 class="h500 l10n">04. Repair</h2>
                        <picture>
                            <source media="(max-width: 799px)" srcset="<?php echo $repair_image_small ?>">
                            <source media="(min-width: 800px)" srcset="<?php echo $repair_image_large ?>">
                            <img src="<?php echo $repair_image_large ?>" alt="<?php echo $repair_title ?>" title="<?php echo $repair_title ?>" class=" mt-xl" width="872" height="456" />
                        </picture>
                        <div class="mt-xl"><?php echo $repair_content ?></div>
                        <a href="<?php echo $repair_url ?>" class="mt-xl button outline b200 expand is-hidden-tablet l10n">
                            View treatment
                        </a>
                        <a href="<?php echo $repair_url ?>" class="mt-xl button compact text b200 is-hidden-mobile">
                            <span class="l10n">View treatment</span>
                            <?php icon('navigate-next'); ?>
                        </a>
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
                            <a href="https://se.trustpilot.com/review/acnespecialisten.se" class="ml-l button compact text">
                                <span class="l10n">Läs fler omdömen</span>
                                <?php icon('navigate-next') ?>
                            </a>
                        </div>

                    </div>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="https://se.trustpilot.com/review/acnespecialisten.se">View all reviews</a>
                </section>
                <section id="faq">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Frågor & Svar</h2>
                        <a href="faq" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler frågor & svar</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                </section>
                <section id="skin-guide">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Hudguide</h2>
                        <a href="skin-guide" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler hudguider</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide.php'); ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="skin-guide">Läs fler hudguider</a>
                </section>
                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra specialister</h2>
                        <a href="specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla specialister</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists.php');
                    ?>
                    <a class="mt-xl button outline expand is-hidden-tablet l10n" href="specialister">Se alla specialister</a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" href="varumarken">Se alla varumärken</a>
            </section>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>