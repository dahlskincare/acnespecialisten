<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$image_large = 'images/treatments/large/acne-scars.jpg';
$image_small = 'images/treatments/small/acne-scars.jpg';
$title = 'Aknebehandlingar';
$description = 'Här har vi samlat de mest effektiva metoderna för aknebehandling som hjälper dig att effektivt få bort akne oavsett typ. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken aknebehandling som bäst passar din hudtyp för att få bort akne? Oroa dig inte, boka en kostnadsfri konsultation hos oss på Acnespecialisten så hjälper vi dig vidare mot en klarare och friskare hy.';
$nav_buttons = array(
    'about' => 'Info',
    'define' => 'Konsultation',
    'treat' => 'Behandlingar',
    'prevent' => 'Produkter',
    'repair' => 'Akneärr',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister'
);
$about_title = 'Hur vi tar bort och behandlar akne?';
$about_content = '<p class="p200">Att behandla och ta bort akne är ingen quickfix. På Acnespecialisten använder vi vår expertis och de bästa verktygen för att effektivt och regelbundet få bort akne. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och ta fram en individuell behandlingsplan.</p>

    <p class="p200 mt-xl">Vår första prioritet är att få bort inflammationen och finnarna, de huvudsakliga orsakerna till ärrbildning. Efter att den aktiva aknen har behandlats hjälper vi dig att skapa en anpassad hudvårdsrutin med produkter mot akne för att förebygga framtida utbrott. Om aknen har lämnat ärr bakom sig, har vi lösningar för att reparera huden. Vi ser fram emot att bli din guide på resan mot att ta bort akne och återfå en klarare, friskare hy.</p>';

$define_content = '<p class="p200">Första steget i vår process att få bort akne är att kartlägga din aknetyp. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och diskuterar dina hudmål och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en konsekvent omsorg anpassad efter dina specifika behov.</p>';

$treat_content = '<p class="p200">När din aknetyp har identifierats, inleder vi fas två: behandling av den aktiva aknen. Här är målet framför allt att få bort inflammationerna och finnarna som riskerar att skada huden och leda till ärr. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket gör att vi kan maximera resultaten och minimera obehaget. Genom denna process minskar vi inflammation, rensar bort döda hudceller, och kontrollerar talgproduktionen, vilket över tid leder till minskad akne och dess förekomst. Vi anpassar behandlingsplanen efter din huds respons.</p>';

$services = array(
    new Service(
        id: 'ansiktsbehandling-mot-akne',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Effektiv Ansiktsbehandling mot Akne på Acnespecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot akne utförd på Acnespecialisten',
        title: 'Ansiktsbehandling mot Akne',
        duration: '60 minuter',
        price: 'Pris från 799 kr',
        icons: array('who-infants' => 'Djuprengörande', 'who-elders' => 'Hudbalanserande', 'who-teenagers' => 'Porrensande', 'who-adults' => 'Anti-inflammatorisk'),
        content: '<p class="p200">Ansiktsbehandling mot akne på Acnespecialisten är en djuprengöring av huden som tar bort döda hudceller och frigör tilltäppta porer. Behandlingen inleds med en rengöring, följt av ångning för att öppna upp porerna. Därefter följer en djup porrengöring där orenheter och akne elimineras. Behandlingen avslutas med en lugnande mask och fuktgivande kräm anpassad för din hudtyp.</p>',
        consultation_url: 'boka-hudkonsultation-akne',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Akne på Acnespecialisten',
        booking_url: 'boka-djuprengörande-ansiktsbehandling-akne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling mot Akne på Acnespecialisten',
        url: 'behandlingar/ansiktsbehandlingar-problemhy/acnebehandling',
        url_label: 'Läs Mer om Vår Ansiktsbehandling mot Akne',
        url_title: 'Mer Information om Vår Ansiktsbehandling mot Akne',
        short_title: 'Ansiktsbehandling'

    ),

    new Service(
        id: 'behandlingar/laser-mot-akne',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Klient som genomgår laserbehandling mot akne',
        image_alt: 'Bild av laserbehandling mot akne hos Acnespecialisten',
        title: 'Effektiv laserbehandling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Effektiv'),
        content: '<p class="p200">Laserbehandling för akne hos Acnespecialisten fungerar genom att använda ljusenergi för att behandla inflammationen i huden som orsakar akne. Laserstrålen tränger ner i huden och behandlar de djupa lager där akne börjar. Denna metod reducerar oljeproduktionen i huden och dödar bakterier som bidrar till akneutbrott.</p>',
        consultation_url: 'konsultation-laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot akne',
        booking_url: 'boka-laserbehandling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot akne nu',
        url: 'behandlingar/laserbehandling-mot-akne',
        url_label: 'Läs mer om laserbehandlingar',
        url_title: 'Utforska mer om våra laserbehandlingar mot akne',
        short_title: 'Laser'

    ),

    new Service(
        id: 'behandlingar/kemisk-peeling-mot-akne',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av kemisk peelingbehandling för akne',
        image_alt: 'Bild på kemisk peelingbehandling mot akne hos Acnespecialisten',
        title: 'Kemisk peeling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Ljusande'),
        content: '<p class="p200">Kemisk peeling är en av de mest effektiva metoderna för att behandla akne. På Acnespecialisten använder vi en speciell lösning som appliceras på huden för att avlägsna det översta lagret. Detta ger plats åt ny, frisk hud att växa fram, vilket bidrar till att reducera utseendet av akneärr och att förbättra hudens textur och utseende.</p>',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot akne',
        url: 'behandlingar/kemisk-peeling-mot-akne',
        url_label: 'Läs mer om kemisk peeling mot akne',
        url_title: 'Utforska mer om vår kemiska peelingbehandling mot akne',
        booking_url: 'boka-kemisk-peeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot akne nu',
        short_title: 'Kemisk Peeling'

    ),

    new Service(
        id: 'behandlingar/microneedling-mot-akne',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av microneedlingbehandling för akne',
        image_alt: 'Bild på microneedlingbehandling mot akne hos Acnespecialisten',
        title: 'Effektiv microneedling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Minskning av ärr'),
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod mot akne som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin. Microneedling behandlar även de underliggande problemen med akne genom att tillåta aktiva ingredienser att tränga djupare in i huden.</p>',
        consultation_url: 'microneedling-konsultation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot akne',
        url: 'behandlingar/microneedling-mot-akne',
        url_label: 'Läs mer om microneedling mot akne',
        url_title: 'Utforska mer om vår microneedlingbehandling mot akne',
        booking_url: 'boka-microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot akne nu',
        short_title: 'Microneedling'

    ),
);
$products = array(
    new Product(
        url: 'produkter/mot-akne',
        url_label: 'Utforska våra hudvårdsprodukter mot akne',
        url_title: 'Information om Acnespecialistens hudvårdsprodukter mot akne',
        price: 'Acnespecialistens hudvårdsprodukter mot akne - Pris från 1295 kr',
        content: '<p class="p200">Att förebygga akne är en viktig del av processen för att hålla din hud aknefri, lika viktig som behandlingarna. För detta ändamål erbjuder vi en daglig hudvårdsrutin med specifika produkter mot akne. Denna rutin hjälper till att hålla din hy ren, balanserad och fri från överflödigt talg och bakterier. Denna dagliga vård hjälper till att förhindra framtida utbrott och är lika viktig som regelbundna besök hos oss på Acnespecialisten.</p>',
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_title: 'Acnespecialistens effektiva hudvårdsprodukter mot akne',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot akne',
        

    ),
);
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Erfaren Hudterapeut hos Acnespecialisten sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_title: 'Cazzandra Lindberg, Hudterapeut hos Acnespecialisten sedan 2015',
        image_alt: 'Cazzandra Lindberg - Erfaren Hudterapeut hos Acnespecialisten',
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Erfaren Hudterapeut sedan 1999 på Acnespecialisten',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, hudterapeut sedan 1999 på Acnespecialisten',
        image_title: 'Veronika Benedik, Erfaren Hudterapeut på Acnespecialisten'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017 på Acnespecialisten',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut sedan 2017 på Acnespecialisten',
        image_title: 'Amira Maqboul, Hudterapeut på Acnespecialisten'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019 på Acnespecialisten',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut sedan 2019 på Acnespecialisten',
        image_title: 'Vilma Libom, Hudterapeut på Acnespecialisten'
        )
);
$repair_title = '04. Reparera post-akne (Acneärr)';
$repair_content = '<p class="p200">När din akne har behandlats och aknen tagits bort, kan det hända att den lämnar ärr bakom sig. På Acnespecialisten kan vi hjälpa dig att reparera dessa ärr genom olika tekniker som laserteknik och microneedling. Dessa metoder främjar hudens egen regenerering, hjälper till att återställa en jämn hudstruktur och minska synligheten av ärr. Med oss vid din sida kan du känna att du har stödet du behöver för att ta bort akne och njuta av en klarare, friskare hy.</p>';
$repair_image_small = 'https://via.placeholder.com/358x274.jpg';
$repair_image_large = 'https://via.placeholder.com/872x456.jpg';
$repair_url = 'treatments/acne';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <!-- TODO: Set title and meta tags -->
    <title class="l10n">
        Aknebehandling stockholm | AcneSpecialisten
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
                    <a href="hudkonsultation" title="Konsultation" class="mt-xl button b200 l10n">Få gratis konsultation</a>
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
                        <h2 class="h500 l10n">03. Förebygg akne</h2>
                        <?php foreach ($products as $product) {
                            include('../../widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <?php if (isset($repair_title) && isset($repair_content) && isset($repair_image_small) && isset($repair_image_large) && isset($repair_url)) { ?>
                    <section id="repair">
                        <h2 class="h500 l10n">04. Reparera post akne (Acneärr)</h2>
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