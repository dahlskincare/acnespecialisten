<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla Blandhy - Effektiv Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om blandhy, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'blandhy, behandling av blandhy, orsaker till blandhy, förebygga blandhy, ta hand om blandhy, hudvård för blandhy, torra partier, oljiga partier';


// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'images/treatments/large/blandhy.jpg';

$image_large = 'images/treatments/large/blandhy.jpg';
$image_small = 'images/treatments/small/blandhy.jpg';
$image_alt = 'Bild som illustrerar blandhy';
$image_title = 'Blandhy';

$title = 'Blandhybehandling';
$description = 'Upptäck vårt urval av metoder speciellt utformade för att behandla blandhy, där målet är att ge din hud den bästa balansen mellan torra och oljiga områden. Oavsett din huds unika krav kan vi guida dig till den optimala lösningen. Undrar du över vilken <a href="https://www.acnespecialisten.se">behandling för blandhy</a> som skulle vara mest gynnsam för just dig? Tveka inte att boka en kostnadsfri konsultation med Acnespecialisten. Låt oss vara din partner på vägen till en balanserad och strålande hy.';

$booking_link = 'rätt bokningslänk här';
$booking_link_title = 'Boka behandling';
$consultation_link = 'rätt konsultationslänk här';
$consultation_link_title = 'Boka hudkonsultation';


$nav_buttons = array(
    'about' => 'Info',
    'define' => 'Konsultation',
    'treat' => 'Behandlingar',
    'prevent' => 'Produkter',
    'repair' => 'Reparera',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister'
);

$about_title = 'Hur vi balanserar och behandlar blandhy';

$about_content = '<p class="p200">Blandhy ställer unika krav på behandling med en kombination av de besta metoderna och vår djupgående erfarenhet för att ge dig den balans du söker. Med vår kostnadsfria konsultation utforskar vi din huds nyanser och utformar en handlingsplan som svarar mot dess unika behov.</p>

    <p class="p200 mt-xl">Vi siktar på att skapa en perfekt balans mellan de oljiga och torra delarna av ditt ansikte, undvika utbrott och maximera hudens naturliga lyster. Oavsett dina tidigare hudutmaningar, står vi redo att förvandla din hud. Tillsammans hjälper vi dig från början tills du uppnått den balanserade hy du förtjänar!</p>';


$headline01 = "01. Identifiera din blandhy";

$define_image = 'images/service-categories/large/konsultation.jpg';
$define_image_alt = 'Vår process för att balansera och behandla blandhy';
$define_image_title = 'Vår process för att balansera och behandla blandhy';

$define_content = '<p class="p200">Det första steget i vår process att balansera blandhy är att kartlägga dina specifika behov. Vi börjar med en kostnadsfri konsultation där vi analyserar din hud, diskuterar dina mål med huden och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och justera din behandlingsplan över tid. Din personliga hudterapeut står vid din sida genom hela resan, säkerställande en konsekvent och individanpassad omsorg.</p>';

$define_consultation_link = "https://www.acnespecialisten.se/boka-hudkonsultation";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "klicka här för att boka din kostnadsfria hudkonsultation för blandhy";


$headline02 = "02. Behandla blandhy";

$treat_content = '<p class="p200">Efter att ha förstått dina behov inlder vi processen av att behandla och balansera din blandhy. Vårt mål är att hitta rätt balans där din hy blir symtomfri så att du slipper tänka på din blandhy. Vi använder metoder skräddarsydda för dina unika behov, vilket ger optimala resultat. Genom denna behandlingsprocess minskar vi obalanser, främjar cellförnyelse och optimerar hudens fuktbalans. Behandlingsplanen anpassas efter hur din hud reagerar och utvecklas.</p>';


$services = array(
    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Ansiktsbehandling för Blandhy hos Acnespecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling för blandhy utförd på Acnespecialisten',

        title: 'Ansiktsbehandling för Blandhy',
        duration: '60 minuter',
        price: 'Pris från 799 kr',
        icons: array('who-infants' => 'Balanserande', 'who-elders' => 'Hudbalanserande', 'who-teenagers' => 'Porrensande', 'who-adults' => 'Fuktgivande'),
        content: '<p class="p200">Ansiktsbehandling för blandhy hos Acnespecialisten fokuserar på att balansera hudens oljiga och torra områden. Behandlingen inleds med en rengöring, följt av ångning för att öppna upp porerna. Därefter utförs en mild exfoliering för att jämna ut hudtonen och en djup porrengöring för att rensa orenheter. Avslutningsvis appliceras en lugnande mask och en fuktgivande kräm anpassad för blandhy.</p>',

        consultation_url: 'boka-hudkonsultation-blandhy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Blandhy hos Acnespecialisten',

        booking_url: 'boka-balanserande-ansiktsbehandling-blandhy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling för Blandhy hos Acnespecialisten',

        url: 'behandlingar/ansiktsbehandlingar-problemhy/blandhybehandling',
        url_label: 'Läs Mer om Vår Ansiktsbehandling för Blandhy',
        url_title: 'Mer Information om Vår Ansiktsbehandling för Blandhy',

        // short_title: 'Ansiktsbehandling'

    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Klient som genomgår laserbehandling för Blandhy',
        image_alt: 'Bild av laserbehandling för blandhy hos Acnespecialisten',
        title: 'Effektiv laserbehandling för Blandhy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Balanserande'),
        content: '<p class="p200">Laserbehandling för blandhy hos Acnespecialisten syftar till att balansera hudens torra och oljiga områden. Med hjälp av ljusenergi stimuleras huden att producera kollagen och balansera talgproduktionen. Resultatet är en jämnare och mer balanserad hudstruktur.</p>',
        consultation_url: 'konsultation-laser-blandhy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling för Blandhy',
        booking_url: 'boka-laserbehandling-blandhy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling för Blandhy nu',
        url: 'behandlingar/laserbehandling-mot-blandhy',
        url_label: 'Läs mer om laserbehandlingar för Blandhy',
        url_title: 'Utforska mer om våra laserbehandlingar för Blandhy',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av kemisk peelingbehandling för blandhy',
        image_alt: 'Bild på kemisk peelingbehandling för blandhy hos Acnespecialisten',
        title: 'Kemisk peeling för blandhy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Balanserande'),
        content: '<p class="p200">Kemisk peeling är en effektiv metod för att behandla och balansera blandhy. På Acnespecialisten använder vi en speciell lösning som appliceras på huden för att avlägsna det översta lagret. Detta ger plats åt ny, frisk hud att växa fram, vilket bidrar till en jämnare hudton och förbättrad textur.</p>',
        consultation_url: 'hudkonsultation-blandhy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling för blandhy',
        url: 'behandlingar/kemisk-peeling-for-blandhy',
        url_label: 'Läs mer om kemisk peeling för blandhy',
        url_title: 'Utforska mer om vår kemiska peelingbehandling för blandhy',
        booking_url: 'boka-kemisk-peeling-blandhy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling för blandhy nu',
        short_title: 'Kemisk Peeling'

    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av microneedlingbehandling för blandhy',
        image_alt: 'Bild på microneedlingbehandling för blandhy hos Acnespecialisten',
        title: 'Effektiv microneedling för blandhy',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Balanserande'),
        content: '<p class="p200">Microneedling för blandhy stimulerar hudens naturliga förnyelseprocess för att balansera torra och oljiga områden. Genom att skapa mikroskopiska kanaler i huden, ökar behandlingen produktionen av kollagen och elastin. Dessutom tillåter microneedling aktiva ingredienser att tränga djupare in i huden, vilket hjälper till att balansera hudens textur och ton.</p>',
        consultation_url: 'microneedling-konsultation-blandhy',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling för blandhy',
        url: 'behandlingar/microneedling-for-blandhy',
        url_label: 'Läs mer om microneedling för blandhy',
        url_title: 'Utforska mer om vår microneedlingbehandling för blandhy',
        booking_url: 'boka-microneedling-blandhy',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling för blandhy nu',
        short_title: 'Microneedling'

    ),

);

$headline03 = "03. Förebygg akne";

$products = array(
    new Product(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_title: 'Acnespecialistens effektiva hudvårdsprodukter mot akne',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot akne',

        url: 'produkter/mot-akne',
        url_label: 'Utforska våra hudvårdsprodukter mot akne',
        url_title: 'Information om Acnespecialistens hudvårdsprodukter mot akne',
        price: 'Acnespecialistens hudvårdsprodukter mot akne - Pris från 1295 kr',
        content: '<p class="p200">Att förebygga akne är en viktig del av processen för att hålla din hud aknefri, lika viktig som behandlingarna. För detta ändamål erbjuder vi en daglig hudvårdsrutin med specifika produkter mot akne. Denna rutin hjälper till att hålla din hy ren, balanserad och fri från överflödigt talg och bakterier. Denna dagliga vård hjälper till att förhindra framtida utbrott och är lika viktig som regelbundna besök hos oss på Acnespecialisten.</p>',



    ),
);

$headline04 = '04. Reparera post-akne (Acneärr)';

$repair_image_small = 'https://via.placeholder.com/358x274.jpg';
$repair_image_large = 'https://via.placeholder.com/872x456.jpg';

$repair_content = '<p class="p200">När din akne har behandlats och aknen tagits bort, kan det hända att den lämnar ärr bakom sig. På Acnespecialisten kan vi hjälpa dig att reparera dessa ärr genom olika tekniker som laserteknik och microneedling. Dessa metoder främjar hudens egen regenerering, hjälper till att återställa en jämn hudstruktur och minska synligheten av ärr. Med oss vid din sida kan du känna att du har stödet du behöver för att ta bort akne och njuta av en klarare, friskare hy.</p>';

$repair_url = 'treatments/acne';
$repair_url_label = 'Se ärrbehandlingar';
$repair_url_title = 'klicka här för att se våra ärrbehandlingar';


$results = array(
    new ResultCustomer(
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        image_alt: 'Resultat',
        image_title: 'Resultat',

        treatment: new ResultTreatment(
            duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>'
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
            duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat blablalba";
$show_all_results_title = "KLICKA PÅ MIG";


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

$specialist_url_label = "Se alla specialister hej hej hej";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

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
                            include('../../widgets/product-card/product-card.php');
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