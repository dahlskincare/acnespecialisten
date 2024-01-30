<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Akne - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om akne, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'akne, aknebehandling, orsaker till akne, förebygga akne, ta bort akne, vuxenakne, tonårsakne, akneärr, finnar, pormaskar';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'images/treatments/large/acne-scars.jpg';

$image_large = 'images/treatments/large/acne-scars.jpg';
$image_small = 'images/treatments/small/acne-scars.jpg';
$image_alt = 'Bild som illustrerar akne';
$image_title = 'Akne';

$title = 'Aknebehandlingar';
$description = 'Här har vi samlat de mest effektiva metoderna för aknebehandling som hjälper dig att effektivt få bort akne oavsett typ. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">aknebehandling</a> som bäst passar din hudtyp för att få bort akne? Oroa dig inte, boka en kostnadsfri konsultation hos oss på Acnespecialisten så hjälper vi dig vidare mot en klarare och friskare hy.';

$booking_link = 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne';
$booking_link_title = 'Boka behandling';
$consultation_link = 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne';
$consultation_link_title = 'Boka hudkonsultation';


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

$headline01 = "01. Identifiera din akne";

$define_image = 'images/service-categories/large/konsultation.jpg';
$define_image_alt = 'Hur vi tar bort och behandlar akne?';
$define_image_title = 'Hur vi tar bort och behandlar akne?';

$define_content = '<p class="p200">Första steget i vår process att få bort akne är att kartlägga din aknetyp. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och diskuterar dina hudmål och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en konsekvent omsorg anpassad efter dina specifika behov.</p>';

$define_consultation_link = "https://www.acnespecialisten.se/boka-hudkonsultation";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "klicka här för att boka din kostnadsfria hudkonsultation mot akne";



$headline02 = "02. Behandla aktiv akne";

$treat_content = '<p class="p200">När din aknetyp har identifierats, inleder vi fas två: behandling av den aktiva aknen. Här är målet framför allt att få bort inflammationerna och finnarna som riskerar att skada huden och leda till ärr. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket gör att vi kan maximera resultaten och minimera obehaget. Genom denna process minskar vi inflammation, rensar bort döda hudceller, och kontrollerar talgproduktionen, vilket över tid leder till minskad akne och dess förekomst. Vi anpassar behandlingsplanen efter din huds respons.</p>';

$services = array(
    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Effektiv Ansiktsbehandling mot Akne på Acnespecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot akne utförd på Acnespecialisten',

        title: 'Ansiktsbehandling mot Akne',
        duration: '60 minuter',
        price: 'Pris från 799 kr',
        content: '<p class="p200">Ansiktsbehandling mot akne på Acnespecialisten är en djuprengöring av huden som tar bort döda hudceller och frigör tilltäppta porer. Behandlingen inleds med en rengöring, följt av ångning för att öppna upp porerna. Därefter följer en djup porrengöring där orenheter och akne elimineras. Behandlingen avslutas med en lugnande mask och fuktgivande kräm anpassad för din hudtyp.</p>',

        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Akne på Acnespecialisten',

        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling mot Akne på Acnespecialisten',

        url: '',
        url_label: '',
        url_title: '',

        // short_title: 'Ansiktsbehandling'

    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Klient som genomgår laserbehandling mot akne',
        image_alt: 'Bild av laserbehandling mot akne hos Acnespecialisten',
        title: 'Effektiv laserbehandling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('precision' => 'Precision', 'icke-invasiv' => 'Icke-invasiv', 'snabb' => 'Snabb', 'effektiv' => 'Effektiv'),
        content: '<p class="p200">Laserbehandling för akne hos Acnespecialisten fungerar genom att använda ljusenergi för att behandla inflammationen i huden som orsakar akne. Laserstrålen tränger ner i huden och behandlar de djupa lager där akne börjar. Denna metod reducerar talgproduktionen i huden och dödar bakterier som bidrar till akneutbrott.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot akne',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot akne nu',
        url: '',
        url_label: '',
        url_title: '',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av kemisk peelingbehandling för akne',
        image_alt: 'Bild på kemisk peelingbehandling mot akne hos Acnespecialisten',
        title: 'Kemisk peeling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('exfolierande' => 'Exfolierande'),
        content: '<p class="p200">Kemisk peeling är en av de mest effektiva metoderna för att behandla akne. På Acnespecialisten använder vi en speciell lösning som appliceras på huden för att avlägsna det översta lagret. Detta ger plats åt ny, frisk hud att växa fram, vilket bidrar till att reducera utseendet av akneärr och att förbättra hudens textur och utseende.</p>',
        consultation_url: 'ghttps://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot akne',
        url: '',
        url_label: '',
        url_title: '',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot akne nu',
        short_title: 'Kemisk Peeling'

    ),

    new Service(
        image_small: null,
        image_large: null,
        image_title: 'Utförande av microneedlingbehandling för akne',
        image_alt: 'Bild på microneedlingbehandling mot akne hos Acnespecialisten',
        title: 'Effektiv microneedling mot akne',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('fornyande' => 'Förnyande', 'maskin' => 'Djupgående', 'multi-funktion' => 'Minskning av ärr'),
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod mot akne som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin. Microneedling behandlar även de underliggande problemen med akne genom att tillåta aktiva ingredienser att tränga djupare in i huden.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot akne',
        url: '',
        url_label: '',
        url_title: '',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot akne nu',
        short_title: 'Microneedling'

    ),
);

$headline03 = "03. Förebygg akne";

$products = array(
    new Product(
        image_small: null,
        image_large: null,
        image_title: 'Acnespecialistens effektiva hudvårdsprodukter mot akne',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot akne',

        url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
        url_label: 'Utforska våra hudvårdsprodukter mot akne',
        url_title: 'Information om Acnespecialistens hudvårdsprodukter mot akne',
        price: 'Acnespecialistens hudvårdsprodukter mot akne - Pris från 1295 kr',
        content: '<p class="p200">Att förebygga akne är en viktig del av processen för att hålla din hud aknefri, lika viktig som behandlingarna. För detta ändamål erbjuder vi en daglig hudvårdsrutin med specifika produkter mot akne. Denna rutin hjälper till att hålla din hy ren, balanserad och fri från överflödigt talg och bakterier. Denna dagliga vård hjälper till att förhindra framtida utbrott och är lika viktig som regelbundna besök hos oss på Acnespecialisten.</p>',



    ),
);

$headline04 = '04. Reparera post-akne (Acneärr)';

$repair_image_small = null;
$repair_image_large = null;

$repair_content = '<p class="p200">När din akne har behandlats och aknen tagits bort, kan det hända att den lämnar ärr bakom sig. På Acnespecialisten kan vi hjälpa dig att reparera dessa ärr genom olika tekniker som laserteknik och microneedling. Dessa metoder främjar hudens egen regenerering, hjälper till att återställa en jämn hudstruktur och minska synligheten av ärr. Med oss vid din sida kan du känna att du har stödet du behöver för att ta bort akne och njuta av en klarare, friskare hy.</p>';

$repair_url = 'behandla-acnearr.php';
$repair_url_label = 'Se ärrbehandlingar';
$repair_url_title = 'klicka här för att se våra ärrbehandlingar';

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat svår akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="akne.php" title="Svår akne">Svår akne</a>',
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
                  duration: '<a href="akne.php" title="Akne">Akne</a>',
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "Se fler resultat";

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
            title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för olika hudproblem?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för hudproblem, inklusive acnebehandling, rosaceabehandling och portömning.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling hos Acnespecialisten?',
            text: 'En behandling hos Acnespecialisten tar vanligtvis cirka 60 - 90 minuter.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se resultat?',
            text: 'Antalet behandlingar som behövs för att se resultat varierar beroende på ditt specifika hudproblem och din hudtyp. Genomsnittligt antal behandlingar är mellan 2-4 stycken.'
        ),
        new Question(
            title: 'Är behandlingarna smärtsamma?',
            text: 'Behandlingarna hos Acnespecialisten är utformade för att minimera obehag. När vi behandlar inflammerade områden och utför extraktioner kan det dock uppstå en tillfällig smärta. Denna känsla är dock övergående och försvinner snabbt, så du kan känna dig trygg under behandlingen.'
        ),
        new Question(
            title: 'Kan alla hudtyper behandlas hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder behandlingar som passar alla hudtyper.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till aknebehandling";

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
$skinguide_url_title = "Läs fler guider om aknebehandling";

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
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

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
$brands_url_title = "Varumärken för Aknebehandling";

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
                            include('problem/widgets/product-card/product-card.php');
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