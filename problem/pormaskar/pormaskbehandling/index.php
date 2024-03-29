<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla Pormaskar - Effektiv Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om behandlingen av pormaskar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'pormaskar, portömning, pormaskbehandling, orsaker till pormaskar, förebygga pormaskar, ta bort pormaskar, djupa porer, rengöring av porer, svarta prickar, vita pormaskar';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'images/treatments/large/pormaskar.jpg';

$image_large = 'images/treatments/large/pormaskar.jpg';
$image_small = 'images/treatments/small/pormaskar.jpg';
$image_alt = 'Bild som illustrerar pormaskar';
$image_title = 'Pormaskar';

$title = 'Pormaskbehandling';
$description = 'Här har vi samlat de mest effektiva metoderna för behandling av pormaskar som hjälper dig att effektivt reducera synligheten av porer och få bort pormaskar. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">pormaskbehandling</a> som bäst passar din hudtyp för att rengöra och förminska porer? Oroa dig inte, boka en kostnadsfri konsultation hos oss på Acnespecialisten så hjälper vi dig vidare mot en klarare och friskare hy.';

$booking_link = 'rätt bokningslänk här';
$booking_link_title = 'Boka behandling';
$consultation_link = 'rätt konsultationslänk här';
$consultation_link_title = 'Boka hudkonsultation';


$nav_buttons = array(
    'about' => 'Info',
    'define' => 'Konsultation',
    'treat' => 'Behandlingar',
    'prevent' => 'Produkter',
    'repair' => 'Pormaskar',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister'
);

$about_title = 'Hur vi reducerar och behandling av pormaskar';

$about_content = '<p class="p200">Att behandla och reducera pormaskar kräver rätt behandlingar och produkter. På AcneSpecialisten använder vi vår långa erfarenhet och expertis för att effektivt och regelbundet minska synligheten och få bort pormaskar. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och ta fram en individuell behandlingsplan.</p>

    <p class="p200 mt-xl">Vår första prioritet är att rensa och minimera porerna, vilket förhindrar ansamling av talg och döda hudceller. Efter att porerna har behandlats hjälper vi dig att skapa en anpassad hudvårdsrutin med produkter mot pormaskar för att förhindra att de blir blockerade igen. Om dina pormaskar har lett till andra hudproblem, har vi lösningar för att förbättra huden. Vi ser fram emot att bli din guide på resan mot att reducera pormaskar och återfå en klarare, friskare hy.</p>';

$headline01 = "01. Identifiera dina pormaskar";

$define_image = 'images/service-categories/large/konsultation.jpg';
$define_image_alt = 'Hur vi reducerar och behandlar pormaskar?';
$define_image_title = 'Hur vi reducerar och behandlar pormaskar?';

$define_content = '<p class="p200">Första steget i vår process att behandla pormaskar är att kartlägga omfattningen av dina pormaskar. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och diskuterar dina hudmål och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. Din personliga hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en konsekvent omsorg anpassad efter dina specifika behov.</p>';

$define_consultation_link = "https://www.acnespecialisten.se/boka-hudkonsultation";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "klicka här för att boka din kostnadsfria hudkonsultation mot pormaskar";

$headline02 = "02. Behandla pormaskar";

$treat_content = '<p class="p200">Här är målet framför allt att rensa och rengöra porerna på djupet. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket gör att vi kan maximera resultaten och minimera obehaget. Genom denna process rensar vi bort döda hudceller, kontrollerar talgproduktionen och säkerställer att porerna förblir rena.</p>';

$services = array(
    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Effektiv Ansiktsbehandling mot Pormaskar på Acnespecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot pormaskar utförd på Acnespecialisten',

        title: 'Ansiktsbehandling mot Pormaskar',
        duration: '60 minuter',
        price: 'Pris från 799 kr',
        icons: array('who-infants' => 'Djuprengörande', 'who-elders' => 'Hudbalanserande', 'who-teenagers' => 'Porrensande', 'who-adults' => 'Anti-inflammatorisk'),
        content: '<p class="p200">Ansiktsbehandling mot pormaskar på Acnespecialisten är speciellt framtagen för att djuprengöra huden, avlägsna döda hudceller och bekämpa tilltäppta porer. Processen börjar med en rengöring, följt av ångning för att mjuka upp och öppna porerna. Därefter görs en noggrann porrengöring där pormaskar och andra orenheter avlägsnas. Behandlingen avrundas med en lugnande mask och en fuktgivande kräm som är anpassad för din hudtyp.</p>',

        consultation_url: 'boka-hudkonsultation-pormaskar',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Pormaskar på Acnespecialisten',

        booking_url: 'boka-djuprengörande-ansiktsbehandling-pormaskar',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling mot Pormaskar på Acnespecialisten',

        url: 'behandlingar/ansiktsbehandlingar-problemhy/pormaskarbehandling',
        url_label: 'Läs Mer om Vår Ansiktsbehandling mot Pormaskar',
        url_title: 'Mer Information om Vår Ansiktsbehandling mot Pormaskar',

        // short_title: 'Ansiktsbehandling'

    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Klient som genomgår laserbehandling mot pormaskar',
        image_alt: 'Bild av laserbehandling mot pormaskar hos Acnespecialisten',
        title: 'Effektiv laserbehandling mot pormaskar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Effektiv'),
        content: '<p class="p200">Laserbehandling riktad mot pormaskar hos AcneSpecialisten använder ljusenergi för att specifikt behandla och minska pormaskarnas synlighet. Laserstrålens penetration i huden fokuserar på de områden där pormaskarna dominerar, balanserar hudens talgproduktion och minskar ansamlingen av döda hudceller, vilket ofta är orsaken till pormaskar.</p>',
        consultation_url: 'konsultation-laser-pormaskar',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot pormaskar',
        booking_url: 'boka-laserbehandling-pormaskar',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot pormaskar nu',
        url: 'behandlingar/laserbehandling-mot-pormaskar',
        url_label: 'Läs mer om laserbehandlingar mot pormaskar',
        url_title: 'Utforska mer om våra laserbehandlingar mot pormaskar',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av kemisk peelingbehandling för pormaskar',
        image_alt: 'Bild på kemisk peelingbehandling mot pormaskar hos Acnespecialisten',
        title: 'Kemisk peeling mot pormaskar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Ljusande'),
        content: '<p class="p200">För att effektivt behandla pormaskar starka syror under en kemisk peeling behandling. Vi applicerar en särskilt framtagen lösning på huden som avlägsnar det översta lagret av hudceller och luckra upp tilltäpta porer. Genom att ge plats för ny, frisk hud att framträda, minskas synligheten av pormaskar samtidigt som hudens textur och utseende förbättras betydligt.</p>',
        consultation_url: 'hudkonsultation-pormaskar',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot pormaskar',
        url: 'behandlingar/kemisk-peeling-mot-pormaskar',
        url_label: 'Läs mer om kemisk peeling mot pormaskar',
        url_title: 'Utforska mer om vår kemiska peelingbehandling mot pormaskar',
        booking_url: 'boka-kemisk-peeling-pormaskar',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot pormaskar nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av microneedlingbehandling för pormaskar',
        image_alt: 'Bild på microneedlingbehandling mot pormaskar hos Acnespecialisten',
        title: 'Effektiv microneedling mot pormaskar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Minskning av porstorlek'),
        content: '<p class="p200">Microneedling erbjuds som en kraftfull metod för att bekämpa pormaskar. Genom att använda mikronålar skapas små kanaler i huden, vilket uppmuntrar hudens naturliga läkning och ökar kollagen- och elastinproduktionen. Microneedling adresserar även de bakomliggande orsakerna till pormaskar genom att tillåta aktiva ingredienser att penetrera djupare in i huden, vilket aktivt bidrar till att minska både storlek och mängd av pormaskar.</p>',
        consultation_url: 'microneedling-konsultation-pormaskar',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot pormaskar',
        url: 'behandlingar/microneedling-mot-pormaskar',
        url_label: 'Läs mer om microneedling mot pormaskar',
        url_title: 'Utforska mer om vår microneedlingbehandling mot pormaskar',
        booking_url: 'boka-microneedling-pormaskar',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot pormaskar nu',
        short_title: 'Microneedling'
    ),

);

$headline03 = "03. Förebygg pormaskar";

$products = array(
    new Product(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_title: 'AcneSpecialistens effektiva hudvårdsprodukter mot pormaskar',
        image_alt: 'Bild på AcneSpecialistens hudvårdsprodukter mot pormaskar',

        url: 'produkter/pormaskar',
        url_label: 'Utforska våra hudvårdsprodukter mot pormaskar',
        url_title: 'Information om AcneSpecialistens hudvårdsprodukter mot pormaskar',
        price: 'AcneSpecialistens hudvårdsprodukter mot pormaskar - Pris från 1295 kr',
        content: '<p class="p200">Bekämpning av pormaskar kräver en riktad strategi, och att använda rätt hudvårdsprodukter är kärnan i denna process. Hos AcneSpecialisten förstår vi detta behov och erbjuder en skräddarsydd daglig hudvårdsrutin designad specifikt för att hantera pormaskar. Med rätt produkter ser denna rutin till att din hud är ren, balanserad, och framför allt, fri från det som orsakar pormaskar. Med konsekvent användning kan du inte bara minska befintliga pormaskar men också effektivt förhindra nya från att uppträda. Genom att följa denna rutin kompletterar du perfekt de behandlingar du gör hos oss på AcneSpecialisten.</p>',
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
            duration: 'Efter 3 månaders <a href="behandlingar/pormaskar title="Pormaskar>behandlingar mot pormaskar</a>'
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
            duration: 'Efter 3 månaders <a href="behandlingar/pormaskar" title="Pormaskar">behandlingar mot pormaskar</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat mot pormaskar";
$show_all_results_title = "Resultat mot pormaskar";

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
            title: 'Vilka behandlingar erbjuder AcneSpecialisten för pormaskar?',
            text: 'AcneSpecialisten erbjuder en rad olika behandlingar specifikt riktade mot pormaskar, inklusive portömning, laser, kemisk peeling, microneedling och specialiserade produkter för daglig hudvård.'
        ),
        new Question(
            title: 'Hur lång tid tar en pormaskbehandling hos Acnespecialisten?',
            text: 'En pormaskbehandling hos Acnespecialisten tar vanligtvis mellan 30 - 90 minuter.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se en minskning av pormaskar?',
            text: 'Antalet behandlingar som krävs för att se en märkbar minskning av pormaskar varierar beroende på hur omfattande problemet är samt din hudtyp. De flesta klienter ser resultat efter 3-5 behandlingar.'
        ),
        new Question(
            title: 'Är behandlingarna mot pormaskar smärtsamma?',
            text: 'De behandlingar som erbjuds av AcneSpecialisten är utformade för att minimera obehag. Vid portömning kan det uppstå en tillfällig smärta, men denna känsla är kortvarig och många finner den hanterbar.'
        ),
        new Question(
            title: 'Kan pormaskar på alla hudtyper behandlas hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder behandlingar mot pormaskar som är lämpliga för alla hudtyper.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till pormaskbehandling";

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
$skinguide_url_title = "Läs fler guider om pormaskbehandling";

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

$specialist_url_label = "Se alla specialister på pormaskar";
$specialist_url_title = "Pormask Specialiserade Hudterapeuter";

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
$brands_url_title = "Varumärken för pormaskbehandling";

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
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>