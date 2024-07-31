<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandling mot stora porer | AcneSpecialisten';
$seo_description = 'Skräddarsydd stora porer-behandling i Stockholm. ✓Behandla stora porer med 3 olika metoder ✓Paketpris ✓Boka en kostnadsfri konsultation →';
$seo_keywords = 'behandling av stora porer, orsaker till stora porer, förebygga stora porer, minska porer, få bort stora porer i ansiktet, förstorade porer';
$seo_image = 'bilder/hudproblem/424x456/stora-porer.webp';

$model = new Service(
    title: 'Hudbehandlingar för stora porer',
    duration: null,
    price: null,
    content: '<p class="p200">Här har vi samlat de mest effektiva metoderna för behandling av stora porer för att hjälpa dig att effektivt minska deras storlek. Oavsett dina specifika behov har vi rätt lösning för dig. Är du osäker på vilken behandling som bäst passar din hudtyp? Oroa dig inte, boka en kostnadsfri konsultation hos oss på Acnespecialisten. Vi hjälper dig vidare mot en jämnare och slätare hud.</p>',
    image_small: 'bilder/hudproblem/358x274/stora-porer.webp',
    image_large: 'bilder/hudproblem/424x456/stora-porer.webp',
    image_alt: 'Bild på behandling för stora porer',
    image_title: 'Behandling för stora porer',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Behandla stora porer', '/behandla-stora-porer.php'),
);

$about_title = 'Hur vi behandlar och minskar stora porer';

$about_content = '<p class="p200">Att behandla stora porer kräver en genomtänkt och individuell behandlingsplan. På Acnespecialisten kombinerar vi vår erfarenhet och kunskap med de bästa behandlingarna och verktygen för att effektivt minska synligheten av porer. Genom vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och skapa en skräddarsydd behandlingsplan.</p>

    <p class="p200 mt-xl">Vi behandlar stora porer oavsett orsak och erbjuder anpassade produkter och behandlingar för att reducera porernas storlek och förhindra att de vidgas. Om porerna har orsakat ojämnheter eller andra hudproblem har vi lösningar för att förbättra hudens utseende. Vi ser fram emot att vara din guide på resan mot att minska stora porer och återfå en jämnare och mer strålande hy.</p>';

$headline01 = "01. Identifiera";

$define_image_alt = 'Hur vi behandlar och minskar stora porer?';
$define_image_title = 'Hur vi behandlar och minskar stora porer?';

$define_content = '<p class="p200">Första steget i vår process att reducera stora porer i ansiktet och på kroppen är att kartlägga din hud och porstorlek. Vi börjar med en kostnadsfri konsultation där vi analyserar din hud och diskuterar orsakerna till dina stora porer samt hur vi effektivt kan behandla dem. Förebilder tas för att kunna följa din huds framsteg och anpassa behandlingsplanen över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer att du får konsekvent och noggrann hjälp anpassad efter dina specifika behov.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka gratis konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation mot stora porer";

$headline02 = "02. Behandla";

$treat_content = '<p class="p200">När din hudtyp och storleken på dina porer har identifierats, påbörjar vi behandlingen av stora porer. Målet är att djuprengöra och minska porernas synlighet, vilket kan påverka hudens textur och utseende. Vi tillämpar olika metoder anpassade efter dina unika behov, för att maximera resultaten och minimera obehaget.</p>
<p class="p200>Under denna process rengör vi porerna, tar bort döda hudceller och överflödig talg samt balanserar talgproduktionen. Vi utför även porsammandragande behandlingar som minskar porernas storlek och jämnar ut hudytan. Behandlingsplanen anpassas kontinuerligt efter hur din hud svarar på behandlingen, för att säkerställa bästa möjliga resultat.</p>';

$services = array(
    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_title: 'Effektiv Ansiktsbehandling mot Stora Porer på AcneSpecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot stora porer utförd på AcneSpecialisten',

        title: 'Ansiktsbehandling mot Stora Porer',
        duration: '60 min',
        price: 'Från 799 kr',
        icons: array(),
        content: '<p class="p200">Behandlingen, som ofta kallas porrengöring eller portömning, riktar sig specifikt mot stora porer och syftar till att djuprengöra och minimera deras utseende. Den börjar med en noggrann rengöring, följt av ångning för att öppna upp porerna. Sedan utförs en omfattande rengöring där vi manuellt klämmer ut det som samlats i porerna, såsom döda hudceller och talg, som orsakar att porerna vidgas. Behandlingen avslutas med en mask som drar ihop porernas storlek och en fuktgivande kräm som väljs utifrån din specifika hudtyp.</p>',

        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Stora Porer på AcneSpecialisten',

        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Service_Facial_PoreExtraction',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din Ansiktsbehandling mot Stora Porer på AcneSpecialistenn',

        url: '/problemhy.php',
        url_label: 'Läs mer om ansiktsbehandling',
        url_title: 'Läs mer om ansiktsbehandling mot pormaskar',
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_title: 'Klient som genomgår laserbehandling mot stora porer',
        image_alt: 'Bild av laserbehandling mot stora porer hos AcneSpecialisten',
        title: 'Effektiv laserbehandling mot stora porer',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling är en effektiv metod för att reducera storleken på stora porer och få dem att se mindre ut. Genom att använda fokuserad ljusenergi tränger laserstrålen djupt ner i huden och värmer upp de djupare lagren. Denna värme stimulerar kollagenproduktionen och omstrukturerar hudens stödvävnad. När kollagenproduktionen ökar, stramas huden upp, vilket får porerna att dra ihop sig och krympa. Resultatet är en jämnare hudtextur och minskad synlighet av porer, vilket ger huden ett friskare och mer ungdomligt utseende.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot stora porer',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Method_LaserProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot stora porer nu',
        url: '/hudbehandlingar/laser-mot-hudproblem/',
        url_label: 'Läs mer om laser',
        url_title: 'Läs mer om laser mot stora porer',
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för stora porer',
        image_alt: 'Bild på kemisk peelingbehandling mot stora porer hos AcneSpecialisten',
        title: 'Kemisk peeling mot stora porer',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">För dem med stora porer är kemisk peeling en framstående behandlingsmetod. Genom att använda kraftfulla syror tränger behandlingen ner i huden och porerna, där den löser upp porblockeringar som gör att porerna ser större ut. Genom att effektivt avlägsna döda hudceller och överskott av talg, hjälper kemisk peeling till att förminska porernas synlighet. Detta skapar utrymme för ny, frisk hud att komma fram, vilket leder till en jämnare hudtextur och ökad klarhet.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot stora porer',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling',
        url_title: 'Läs mer om kemisk peeling mot stora porer',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Method_ChemicalPeeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot stora porer nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för stora porer',
        image_alt: 'Bild på microneedlingbehandling mot stora porer hos AcneSpecialisten',
        title: 'Effektiv microneedling mot stora porer',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Microneedling är en beprövad metod för att behandla problem med stora porer. Genom att använda tunna mikronålar skapas små kanaler i huden. Denna process aktiverar hudens naturliga läkningsmekanism och stimulerar produktionen av kollagen och elastin. När produktionen av dessa viktiga proteiner ökar, stramas huden upp och porernas synlighet minskar. Resultatet är en övergripande förbättring av hudens kvalitet och ton, med en jämnare och mer strålande hudtextur.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot stora porer',
        url: '/microneedling-stora-porer.php',
        url_label: 'Läs mer om microneedling',
        url_title: 'Läs mer om microneedling mot stora porer',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Method_Microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot stora porer nu',
        short_title: 'Microneedling'
    ),

);

$headline03 = "03. Förebygg";

$products = array(
    new Product(
        image_small: null,
        image_large: null,
        image_title: 'Produkter för stora porer',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot stora porer',

        url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
        url_label: 'Köp produkterna',
        url_title: 'Produkter för stora porer',
        price: 'Från 1395 kr',
        content: '<p class="p200">Att förebygga och minska synligheten av stora porer är avgörande för att uppnå en jämn och klar hud. Vi erbjuder en daglig hudvårdsrutin med specifika produkter mot stora porer. Denna rutin hjälper till att hålla din hy ren, balanserad och minskar risken för tilltäppningar. Regelbunden användning av dessa produkter, tillsammans med våra behandlingar, ger bäst resultat för att hantera stora porer.</p>',
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
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
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
            duration: '<a href="acne.php" title="Akne">Akne</a>',
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
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
        )
    ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "Resultat mot stora porer";



$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka typer av behandlingar erbjuder AcneSpecialisten för stora porer?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för stora porer, inklusive porförminskning, djuprengöring och specialiserad portömning.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling för stora porer hos Acnespecialisten?',
            text: 'En behandling för stora porer hos Acnespecialisten tar vanligtvis cirka 30 - 90 min.'
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

$specialist_url_label = "Se alla hudterapeuter på stora porer";
$specialist_url_title = "Hudterapeuter Specialiserade på stora porer";

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
$brands_url_title = "Varumärken för behandling av Stora porer";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/behandla-stora-porer.php" />

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
                <section id="image" class="is-hidden-desktop mt-xl">
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
                        <?php foreach ($services as $scm) {
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
                <section id="results">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                </section>
                <section id="reviews">
                    <h2 class="big l10n">Omdömen</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
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