<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandling av Stora Porer - Effektiv Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om stora porer, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'stora porer, behandling av stora porer, orsaker till stora porer, förebygga stora porer, minska porer, öppna porer, förstorade porer, hudtextur';

$seo_image = 'images/treatments/large/stora-porer.jpg';

$image_large = 'images/treatments/large/stora-porer.jpg';
$image_small = 'images/treatments/small/stora-porer.jpg';
$image_alt = 'Bild på behandling för stora porer';
$image_title = 'Behandling för stora porer';

$title = 'Behandlingar för Stora Porer';
$description = 'Här har vi samlat de mest effektiva metoderna för behandling av stora porer som hjälper dig att effektivt minska porernas storlek. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken <a href="https://www.acnespecialisten.se">behandling för stora porer</a> som bäst passar din hudtyp? Oroa dig inte, boka en kostnadsfri konsultation hos oss på Acnespecialisten så hjälper vi dig vidare mot en jämnare och slätare hud.';

$booking_link = 'rätt bokningslänk här';
$booking_link_title = 'Boka behandling';
$consultation_link = 'rätt konsultationslänk här';
$consultation_link_title = 'Boka hudkonsultation';


$nav_buttons = array(
    'about' => 'Info',
    'define' => 'Konsultation',
    'treat' => 'Behandlingar',
    'prevent' => 'Produkter',
    'repair' => 'Reducera',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister'
);

$about_title = 'Hur vi behandlar och minskar stora porer?';

$about_content = '<p class="p200">Att behandla stora porer kräver en genomtänkt och individuell behandlingsplan. På Acnespecialisten använder vi vår erfarenhet och kunskap i kombination med de bästa behandlingarna och verktygen för att effektivt och regelbundet minska synligheten av stora porer. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och ta fram en individuell behandlingsplan.</p>

    <p class="p200 mt-xl">Vi behandlar stora porer oavsett orsak och kan hjäpla dig med anpassade produkter och behandlingar för att reducera porerna och motverka att de vidgas. Om porerna har skapat ojämnheter eller andra hudproblem, har vi lösningar för att förbättra huden. Vi ser fram emot att bli din guide på resan mot att minska stora porer och återfå en jämnare och mer strålande hy.</p>';

$headline01 = "01. Identifiera dina stora porer";

$define_image = 'images/service-categories/large/konsultation.jpg';
$define_image_alt = 'Hur vi behandlar och minskar stora porer?';
$define_image_title = 'Hur vi behandlar och minskar stora porer?';

$define_content = '<p class="p200">Första steget i vår process att behandla stora porer är att kartlägga din hud och porstorlek. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och berättar om orsaken till dina stora porer samt hur vi effektivt kan behandla dem. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en konsekvent omsorg anpassad efter dina specifika behov.</p>';

$define_consultation_link = "https://www.acnespecialisten.se/boka-hudkonsultation";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation mot stora porer";



$headline02 = "02. Behandla stora porer";

$treat_content = '<p class="p200">När din hudtyp och storleken på dina porer har identifierats, inleder vi fas två: behandling av stora porer. Här är målet framför allt att djuprengöra och minska porernas synlighet som kan påverka hudens textur och utseende. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket gör att vi kan maximera resultaten och minimera obehaget. Genom denna process rengör vi porerna, tar bort döda hudceller och överflödig talg, och balanserar talgproduktionen. Vi utför också porsammandragande behandlingar som minskar porernas storlek och jämnar ut hudytan. Vi anpassar behandlingsplanen efter din huds respons.</p>';

$services = array(
    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Effektiv Ansiktsbehandling mot Stora Porer på AcneSpecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot stora porer utförd på AcneSpecialisten',

        title: 'Ansiktsbehandling mot Stora Porer',
        duration: '60 minuter',
        price: 'Pris från 799 kr',
        icons: array('who-infants' => 'Djuprengörande', 'who-elders' => 'Hudbalanserande', 'who-teenagers' => 'Porreducerande', 'who-adults' => 'Refining'),
        content: '<p class="p200">Ansiktsbehandling mot stora porer är en djuprengöring av huden som minimerar porernas utseende och renar dem från smuts och olja. Behandlingen inleds med en rengöring, följt av ångning för att öppna upp porerna. Därefter görs en omfattande porrengöring. Behandlingen avslutas med en pore-minimerande mask och fuktgivande kräm anpassad för din hudtyp.</p>',

        consultation_url: 'boka-hudkonsultation-porer',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Stora Porer på AcneSpecialisten',

        booking_url: 'boka-djuprengörande-ansiktsbehandling-porer',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling mot Stora Porer på AcneSpecialistenn',

        url: 'behandlingar/ansiktsbehandlingar-problemhy/porebehandling',
        url_label: 'Läs Mer om Vår Ansiktsbehandling mot Stora Porer',
        url_title: 'Mer Information om Vår Ansiktsbehandling mot Stora Porer',
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Klient som genomgår laserbehandling mot stora porer',
        image_alt: 'Bild av laserbehandling mot stora porer hos AcneSpecialisten',
        title: 'Effektiv laserbehandling mot stora porer',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Precision', 'who-elders' => 'Icke-invasiv', 'who-teenagers' => 'Snabb', 'who-adults' => 'Effektiv'),
        content: '<p class="p200">Laserbehandling för stora porer fungerar genom att använda ljusenergi för att minskar storleken och synligheten av porerna. Laserstrålen tränger ner i huden och stimulerar kollagenproduktionen vilket bidrar till att porerna krymper.</p>',
        consultation_url: 'konsultation-laser-porer',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot stora porer',
        booking_url: 'boka-laserbehandling-porer',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot stora porer nu',
        url: 'behandlingar/laserbehandling-mot-porer',
        url_label: 'Läs mer om laserbehandlingar mot stora porer',
        url_title: 'Utforska mer om våra laserbehandlingar mot stora porer',
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av kemisk peelingbehandling för stora porer',
        image_alt: 'Bild på kemisk peelingbehandling mot stora porer hos AcneSpecialisten',
        title: 'Kemisk peeling mot stora porer',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Exfolierande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Uppfräschande', 'who-adults' => 'Poreförminskande'),
        content: '<p class="p200">Kemisk peeling är en effektiv metod för att behandla stora porer. Vi använder en speciell lösning som appliceras på huden för att avlägsna det översta lagret. Detta hjälper till att minska synligheten av stora porer och ger plats åt ny, frisk hud att växa fram, vilket förbättrar hudens textur och utseende.</p>',
        consultation_url: 'hudkonsultation-porer',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot stora porer',
        url: 'behandlingar/kemisk-peeling-mot-porer',
        url_label: 'Läs mer om kemisk peeling mot stora porer',
        url_title: 'Utforska mer om vår kemiska peelingbehandling mot stora porer',
        booking_url: 'boka-kemisk-peeling-porer',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot stora porer nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/852x456.jpg',
        image_title: 'Utförande av microneedlingbehandling för stora porer',
        image_alt: 'Bild på microneedlingbehandling mot stora porer hos AcneSpecialisten',
        title: 'Effektiv microneedling mot stora porer',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array('who-infants' => 'Stimulerande', 'who-elders' => 'Förnyande', 'who-teenagers' => 'Djupgående', 'who-adults' => 'Poreförminskande'),
        content: '<p class="p200">Microneedling är en effektiv behandlingsmetod mot stora porer som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin, vilket bidrar till att minska synligheten av stora porer och förbättrar hudens textur och ton.</p>',
        consultation_url: 'microneedling-konsultation-porer',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot stora porer',
        url: 'behandlingar/microneedling-mot-porer',
        url_label: 'Läs mer om microneedling mot stora porer',
        url_title: 'Utforska mer om vår microneedlingbehandling mot stora porer',
        booking_url: 'boka-microneedling-porer',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot stora porer nu',
        short_title: 'Microneedling'
    ),

);

$headline03 = "03. Förebygg stora porer";

$products = array(
    new Product(
        image_small: 'https://via.placeholder.com/358x274.jpg',
        image_large: 'https://via.placeholder.com/872x456.jpg',
        image_title: 'Acnespecialistens effektiva hudvårdsprodukter mot stora porer',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot stora porer',

        url: 'produkter/stora-porer',
        url_label: 'Utforska våra hudvårdsprodukter mot stora porer',
        url_title: 'Information om Acnespecialistens hudvårdsprodukter mot stora porer',
        price: 'Acnespecialistens hudvårdsprodukter mot stora porer - Pris från 1295 kr',
        content: '<p class="p200">Att förebygga och minska synligheten av stora porer är avgörande för att uppnå en jämn och klar hud. Vi erbjuder en daglig hudvårdsrutin med specifika produkter mot stora porer. Denna rutin hjälper till att hålla din hy ren, balanserad och minskar risken för tilltäppningar. Regelbunden användning av dessa produkter, tillsammans med våra behandlingar, ger bäst resultat för att hantera stora porer.</p>',
    ),
);

$headline04 = '04. Reducera stora porer';

$repair_image_small = 'https://via.placeholder.com/358x274.jpg';
$repair_image_large = 'https://via.placeholder.com/872x456.jpg';

$repair_content = '<p class="p200">Efter framgångsrik behandling av stora porer kan det fortfarande vara nödvändigt att förbättra hudstrukturen ytterligare. På Acnespecialisten erbjuder vi olika tekniker, som laserteknik och microneedling, som hjälper till att förbättra hudens textur och utseende efter behandling av stora porer. Dessa metoder stöder hudens egen regenerering och främjar en jämnare och fräschare hud. Vår expertis säkerställer att du får bästa möjliga resultat.</p>';

$repair_url = 'treatments/pores';
$repair_url_label = 'Se behandlingar för hudstruktur';
$repair_url_title = 'Klicka här för att se våra behandlingar för hudstruktur';


$results = array(
    new ResultCustomer(
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        image_alt: 'Resultat',
        image_title: 'Resultat',

        treatment: new ResultTreatment(
            duration: 'Efter 3 månaders <a href="behandlingar/stora-porer" title="Stora porer"">behandlingar mot stora porer/a>'
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
            duration: 'Efter 3 månaders <a href="behandlingar/stora-porer" title="Stora porer">behandlingar mot stora porer</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat mot stora porer";
$show_all_results_title = "Resultat mot stora porer";


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
            title: 'Vilka typer av behandlingar erbjuder AcneSpecialisten för stora porer?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för stora porer, inklusive porförminskning, djuprengöring och specialiserad portömning.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling för stora porer hos Acnespecialisten?',
            text: 'En behandling för stora porer hos Acnespecialisten tar vanligtvis cirka 30 - 90 minuter.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se resultat vid stora porer?',
            text: 'Antalet behandlingar som behövs för att se en förbättring i stora porer varierar beroende på din hudtyp och hur framträdande porerna är. Genomsnittligt antal behandlingar är mellan 3-5 stycken.'
        ),
        new Question(
            title: 'Är behandlingarna för stora porer smärtsamma?',
            text: 'Behandlingarna hos Acnespecialisten är utformade för att minimera obehag. När vi behandlar områden med särskilt stora porer och utför djuprengöring kan det dock uppstå en tillfällig känsla av obehag. Denna känsla är dock kortvarig, så du kan känna dig bekväm under behandlingen.'
        ),
        new Question(
            title: 'Kan alla hudtyper behandlas hos AcneSpecialisten för stora porer?',
            text: 'Ja, AcneSpecialisten erbjuder behandlingar mot stora porer som passar alla hudtyper.'
        ),

    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till behandling av stora porer";

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
$skinguide_url_title = "Läs fler guider om behandling av stora porer";

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
$specialist_url_title = "Hudterapeuter Specialiserade på stora porer";

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
$brands_url_title = "Varumärken för behandling av Stora porer";

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