<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Rosacea behandling, boka gratis konsultation';
$seo_description = 'Behandla din rosacea hos AcneSpecialisten, vi har 30 års erfarenhet av att ta bort rosacea, börja din resa med en gratis konsultation i stockholm eller online';
$seo_keywords = 'rosaceabehandling, rosacea behandling, ta bort orsacea, få bort rosacea';
$seo_image = 'bilder/hudproblem/424x456/rosacea.webp';

$model = new Service(
    title: 'Rosacea behandling',
    duration: null,
    price: null,
    content: 'På Acnespecialisten erbjuder vi effektiva rosaceabehandlingar anpassade för att mildra dina symtom och förbättra din hudhälsa. Med en rad alternativ tillgängliga, är vi här för att hjälpa dig att hitta den metod som bäst passar din hudtyp. Boka en kostnadsfri konsultation hos oss idag, och ta det första steget mot en lugnare och jämnare hy.',
    image_small: 'bilder/hudproblem/424x456/rosacea.webp',
    image_large: 'bilder/hudproblem/424x456/rosacea.webp',
    image_alt: 'Bild på rosaceabehandling',
    image_title: 'Bild av effektiv rosaceabehandling',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar'),
    new PathSegment('Rosacea behandling', '/rosaceabehandling.php'),
);

$about_title = 'Hur behandlar man rosacea?';

$about_content = '<p class="p200">Att behandla och ta bort rosacea kräver rätt behandlingar och produkter. På Acnespecialisten använder vi vår kunskap och de bästa metoderna för att effektivt behandla rosacea. Under vår kostnadsfria hudkonsultation identifierar vi din hudtyp och skapa en individuell behandlingsplan för dig.</p>

    <p class="p200 mt-xl">Vår första prioritet är att lindra inflammationen och rodnaden, de mest framträdande symptomen av rosacea. Vi skapar en anpassad hudvårdsrutin med produkter mot rosacea för att förhindra framtida utbrott. Behandlingen kombineras med IPL för att effektivt ta bort rodnad och ytliga blodkärl. Vi ser fram emot att bli din guide på resan mot att behandla rosacea och uppnå en klarare, lugnare hy.</p>';

$headline01 = "01. Identifiera din rosacea";

$define_image = '/bilder/hudbehandlingar/872x456/gratis-hudkonsultation.webp';
$define_image_alt = 'Hur vi tar bort och behandlar rosacea?';
$define_image_title = 'Hur vi tar bort och behandlar rosacea?';

$define_content = '<p class="p200">Första steget i vår process att behandla rosacea är att identifiera din typ av rosacea. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och diskuterar dina hudmål och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. Din personliga hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en effektiv behandlingsplan anpassad efter dina specifika behov.</p>';

$define_consultation_link = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea";
$define_consultation_link_label = "Boka Gratis Konsultation för Rosacea";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation mot rosacea";


$headline02 = "02. Behandla rosacea";

$treat_content = '<p class="p200">När din typ av rosacea har identifierats, påbörjar vi fas två: behandling av den aktiva rosacean. Här är målet framför allt att lindra inflammationen och rodnaden som är karaktäristiskt för tillståndet. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket optimerar resultaten och minimerar obehaget. Genom denna process minskar vi inflammation, stärker hudens barriär, och balanserar hudens känslighet, vilket över tid leder till en minskning av rosaceasymptomen. Behandlingsplanen anpassas löpande efter din huds respons.</p>';

$services = array(
    new Service(
        image_small: '/bilder/hudbehandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/872x456/ansiktsbehandlingar-mot-problemhy.webp',
        image_title: 'Effektiv Ansiktsbehandling mot Rosacea på Acnespecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot rosacea utförd på Acnespecialisten',

        title: 'Ansiktsbehandling mot Rosacea',
        duration: '60 minuter',
        price: 'Pris från 1295 kr',
        icons: array(),
        content: '<p class="p200">Ansiktsbehandling mot rosacea lugnar huden, minskar rodnad och inflammation. Behandlingen inleds med en skonsam rengöring av huden följt av tömning av inflammerade pustler. Behandlingen avslutas med en lugnande mask och fuktgivande kräm speciellt anpassad för känslig rosacea hud.</p>',

        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Rosacea på Acnespecialisten',

        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea&method=Service_Facial_RosaceaTreatment&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling mot Rosacea på Acnespecialisten',

        url: '/hudbehandlingar/ansiktsbehandling/rosacea/',
        url_label: 'Läs mer om ansiktsbehandling mot rosacea',
        url_title: 'Läs mer om ansiktsbehandling mot rosacea',

        // short_title: 'Ansiktsbehandling'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/358x274/ipl.webp',
        image_large: '/bilder/hudbehandlingar/872x456/ipl.webp',
        image_title: 'Klient som genomgår IPL-behandling mot rosacea',
        image_alt: 'Bild av IPL-behandling mot rosacea hos Acnespecialisten',
        title: 'IPL-behandling mot Rosacea',
        duration: '50 min',
        price: '2595 kr',
        content: '<p class="p200">IPL-behandling är en form av laserbehandling mot rosacea som fungerar genom att använda ljuspulser för att minska rodnad och ytliga blodkärl som ofta förknippas med rosacea. Ljuspulserna riktar sig specifikt mot de röda områdena, vilket minskar inflammationen och förbättrar hudens utseende och hudton.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för IPL-behandling mot rosacea',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea&method=Method_IPL&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din IPL-behandling mot rosacea nu',
        url: 'ipl-rosacea.php',
        url_label: 'Läs mer om IPL-behandlingar',
        url_title: 'Utforska mer om våra IPL-behandlingar mot rosacea',

        // short_title: 'IPL'
    ),

);

$headline03 = "03. Förebygg rosacea";

$products = array(
    new Product(
        image_small: '/bilder/hudbehandlingar/358x274/produkter.webp',
        image_large: '/bilder/hudbehandlingar/872x456/produkter.webp',
        image_title: 'Acnespecialistens effektiva hudvårdsprodukter mot rosacea',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot rosacea',

        url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
        url_label: 'Utforska hudvårdsprodukter mot rosacea',
        url_title: 'Information om Acnespecialistens hudvårdsprodukter mot rosacea',
        price: 'Hudvårdsprodukter mot rosacea - Pris från 1395 kr',
        content: '<p class="p200">Att förebygga rosacea med rätt hudvårdsprodukter är avgörande för att upprätthålla en balanserad och lugn hud utan rodnad. På AcneSpecialisten rekommenderar vi en daglig hudvårdsrutin utformad specifikt för att möta behoven för rosaceabenägen hy. Genom att använda dessa produkter i din dagliga hudvårdsrutin, kan du ta bort rosacea genom att stärka hudens naturliga barriär, minska symtom på rodnad och irritation, och effektivt förhindra förvärring av tillståndet. Denna rutin är lika viktig som regelbundna klinikbesök, eftersom den hjälper till att hålla din hud i bästa möjliga skick och bidrar till en långsiktig lindring av rosacea-symtom.</p>',
    ),
);

$headline04 = '04. Behandla Ytliga Blodkärl från rosacea';

$repair_image_small = '/bilder/hudbehandlingar/358x274/ipl.webp';
$repair_image_large = '/bilder/hudbehandlingar/872x456/ipl.webp';

$repair_content = '<p class="p200">Ytliga blodkärl, även kända som spindelkärl eller brustna blodkärl, kan uppstå efter rosacea och ge ett rodnat och ojämn hudton. På AcneSpecialisten kan vi hjälpa dig att behandla dessa blodkärl med moderna tekniker som laser och IPL. Dessa metoder riktar sig direkt till blodkärlen, vilket får dem att kollapsa och successivt försvinna. Med oss vid din sida kan du känna dig trygg i att du får den bästa möjliga behandlingen och rådgivningen för att återställa en jämn hudton utan störande blodkärl.</p>';

$repair_url = 'ipl-ytliga-blodkarl.php';
$repair_url_label = 'Se behandlingar för ytliga blodkärl';
$repair_url_title = 'Klicka här för att se våra behandlingar för ytliga blodkärl';


$results = array(
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        image_before_title: 'Person som har akne',
        image_before_alt: 'Ansiktet på en person som behandlat svår akne, förebild',
        image_after_title: 'Person som är aknefri',
        image_after_alt: 'Ansiktet på en person som behandlat svår akne och blivit av med den, efterbild',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
        )
    ),
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
        image_before_title: 'Person som har akne',
        image_before_alt: 'Ansiktet på en person som behandlat akne, förebild',
        image_after_title: 'Person som är aknefri',
        image_after_alt: 'Ansiktet på en person som behandlat akne och blivit av med den, efterbild',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
        )
    ),
    new ResultCustomer(
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
        image_before_title: 'Person som har rosacea',
        image_before_alt: 'Ansiktet på en person som behandlat rosacea, förebild',
        image_after_title: 'Person som är rosaceafri',
        image_after_alt: 'Ansiktet på en person som behandlat rosacea och blivit av med den, efterbild',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat mot rosacea";
$show_all_results_title = "Se resultat";

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
            title: '',
            text: ''
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till rosaceabehandling";

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
$skinguide_url_title = "Läs fler guider om rosaceabehandling";

$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i rosaceabehandling',
        image_title: 'Cazzandra Lindberg - Expert på rosaceabehandling'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på rosacea',
        image_title: 'Veronika Benedik - Specialist inom rosaceavård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom rosaceahantering',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på rosacea'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot rosaceabehandling',
        image_title: 'Vilma Libom - Expert inom rosaceabehandling'
    )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Rosacea Specialiserade Hudterapeuter";

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
$brands_url_title = "Varumärken för Rosaceabehandling";

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
                <section id="image" class="mt-m is-hidden-desktop">
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
                            include('hudproblem/widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <section id="repair">
                    <h2 class="h500 l10n"><?php echo $headline04 ?></h2>
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $repair_image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $repair_image_large ?>">
                        <img src="<?php echo $repair_image_large ?>" alt="<?php echo $repair_title ?>" title="<?php echo $repair_title ?>" class=" mt-xl" width="872" height="456" />
                    </picture>
                    <div class="mt-xl"><?php echo $repair_content ?></div>
                    <a href="<?php echo $repair_url ?>" title="<?php echo $repair_url_title ?>" class="mt-xl button outline b200 expand is-hidden-tablet l10n"><?php echo $repair_url_label ?></a>
                    <a href="<?php echo $repair_url ?>" title="<?php echo $repair_url_title ?>" class="mt-xl button compact text b200 is-hidden-mobile">
                        <span class="l10n"><?php echo $repair_url_label ?></span>
                        <?php icon('navigate-next'); ?>
                    </a>
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
                    <?php $faq_categories = array(
                        'Behandling mot rosacea' => array(
                            new Question(
                                title: 'Vad är rosacea behandling med laser?',
                                text: '<p class="p200">Rosacea behandling med laser innebär användning av laserljus för att selektivt målriktat behandla de blodkärl som bidrar till rosaceans rodnad och synlighet. Denna metod hjälper till att minska rodnaden och förbättra hudens övergripande utseende genom att skonsamt och effektivt minska synligheten av blodkärlen. Denna behandlingsmetod hittar du på alla våra kliniker i Stockholm.</p>'
                            ),
                            new Question(
                                title: 'Kan man behandla rosacea under graviditet?',
                                text: '<p class="p200">Under graviditet är det viktigt att närma sig rosaceabehandling med försiktighet, då vissa behandlingsmetoder och produkter kanske inte är lämpliga. Det finns dock milda och säkra alternativ för att hantera rosacea under denna period.</p>'
                            ),
                            new Question(
                                title: 'Hur många behandlingar behövs?',
                                text: '<p class="p200">Antalet behandlingar som behövs för rosacea varierar beroende på individens hudtillstånd och svårighetsgraden av symtomen. Vissa kan uppleva förbättringar efter endast några sessioner, medan andra kan behöva fler behandlingar för optimala resultat.</p>'
                            ),
                            new Question(
                                title: 'Gör behandlingen ont?',
                                text: '<p class="p200">Rosaceabehandlingar är utformade för att vara så bekväma som möjligt. Vissa kunder kan uppleva en lätt stickande känsla under behandlingar som laser, men detta är oftast övergående och hanterbart. Vi strävar efter att göra din behandling så smärtfri som möjligt och kan diskutera smärtlindringsalternativ under din kostnadsfria konsultation.</p>'
                            ),
                            new Question(
                                title: 'Kan jag behandla rosacea hemma?',
                                text: '<p class="p200">Det finns produkter och rutiner för hemmabruk som kan hjälpa till att hantera milda rosaceasymtom. Dessa inkluderar användning av skonsamma hudvårdsprodukter och solskydd. För att få en skräddarsydd rekommendation baserat på dina unika behov.</p>'
                            ),
                            new Question(
                                title: 'Vilken är den bästa rosacea behandlingen?',
                                text: '<p class="p200">Den bästa behandlingen för rosacea beror helt på individens hudtillstånd och symtomens svårighetsgrad. Det finns många effektiva behandlingsalternativ, från laserbehandlingar till hudvårdsprodukter. Upptäck vilken metod som är mest effektiv för dig genom att boka en kostnadsfri konsultation hos AcneSpecialisten, där vi kan erbjuda en personlig behandlingsplan.</p>'
                            ),
                        ),

                    );
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                </section>
                <!--Hudguide-->
                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeuter</h2>
                        <a href="hudterapeut" title="Hudterapeuter" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut"><?php echo $specialist_url_label ?></a>
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