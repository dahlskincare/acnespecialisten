<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Hudterapeutens val - Personlig ansiktsbehandling';
$seo_description = 'Ansiktsbehandling som är unikt anpassad av våra erfarna hudterapeuter baserat på din hudtyp och behov.';
$seo_keywords = 'Hudterapeutens Val, skräddarsydd hudvård';

$seo_image = '/bilder/hudbehandlingar/424x456/klassiska-ansiktsbehandlingar.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Klassiska Ansiktsbehandlingar', '/ansiktsbehandlingar.php'),
    new PathSegment('Hudterapeutens Val', '/hudbehandlingar/ansiktsbehandling/hudterapeutens-val/'),
);

$model = new Service(
    title: 'Ansiktsbehandling - Hudterapeutens val',
    duration: '70 min',
    price: 'Från 1595 kr',
    content: '',
    image_small: 'bilder/hudbehandlingar/358x274/klassiska-ansiktsbehandlingar.webp',
    image_large: 'bilder/hudbehandlingar/424x456/klassiska-ansiktsbehandlingar.webp',
    image_alt: 'Hudterapeutens Val',
    image_title: 'Hudterapeutens Val',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '1595 kr',
            savings: null,
            booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling',
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '3995 kr',
            savings: 'Spara 790 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling',
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '5995 kr',
            savings: 'Spara 1980 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling',
        )
    ),
);

$description_title = 'Hur går behandlingen till?';
$description_text = '<p class="p200">Hudterapeutens val är en högst personlig ansiktsbehandling för skräddarsydd hudvård där varje moment för att passa just din hudtyp och dina specifika behov. Denna behandling kan inkludera allt från Lumafuse med LED-mask för att förstärka hudens lyster till djuprengöring med Peel2glow som skonsamt avlägsnar orenheter och ger huden ny energi.</p>
    <p class="p200 mt-m">Varje behandling är unikt komponerad efter en noggrann hudanalys utförd av din hudterapeut. Beroende på din huds tillstånd och dina önskemål kan behandlingen även innefatta brynstyling, applicering av närande masker och potenta serum anpassade för just din hud. Vårt mål är att inte enbart adressera aktuella hudutmaningar utan också att förbättra din huds övergripande hälsa och välmående över tid.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: null,
        image_large: null,
        image_alt: 'Förberedelser inför hudterapeutens val',
        image_title: 'Förberedelser inför hudterapeutens val',
        content: '<p class="p200">Inför behandlingen "Hudterapeutens Val" behöver du inte vidta några speciella förberedelser. Vår expertis ligger i att anpassa behandlingen till din unika hudtyp och de behov som framkommer vid konsultationen. Vi utgår från hudens aktuella skick vid behandlingstillfället och anpassar våra metoder därefter.</p>
        <p class="p200 mt-m">Det är helt okej att du anländer med makeup om så önskas; vi börjar alltid med en grundlig och skonsam rengöring för att säkerställa att din hud är redo för behandling. Varje steg i processen är skräddarsytt för att ge dig de bästa möjliga resultaten, skonsamt och effektivt, utan förutbestämda förberedelser från din sida.</p>',
    ),
);

$types_title = '';
$types_description = '';
$big_types = array(
    'process' => new Service(
        title: 'Hudterapeutens val',
        duration: '70 min',
        price: null,
        content: '<p class="p200">Din ansiktsbehandling börjar med en rengöring samtidigt som hudterapeuten går igenom din huds unika behov och behandlngsmöjligheter. Beroende på din huds tillstånd och behov kan vi välja att integrera en mild exfoliering eller andra skräddarsydda metoder som syftar till att förbättra hudens struktur och lyster.</p>
        <p class="p200 mt-m">Vi fortsätter med att tillämpa specialiserade tekniker, som kan inkludera en Lumafuse-behandling med LED-mask för att främja hudens hälsa och läkning. Andra moment, såsom Peel2glow, brynstyling och applicering av noga utvalda masker och serum, väljs ut för att matcha exakt vad din hud kräver för den dagen. Genom hela sessionen är fokus på att skräddarsy varje steg för att passa dig, vilket resulterar i en personligt anpassad behandlingsupplevelse. Efter behandlingen avslutar vi med att applicera produkter som lugnar och återfuktar huden, för att säkerställa att du lämnar med en känsla av förnyelse och vitalitet.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
        image_alt: 'Hudterapeutens val',
        image_title: 'Hudterapeutens val',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka behandling',
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_5'
            )
        )
    ),
);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: null,
        image_large: null,
        image_alt: 'Efter hudterapeutens val',
        image_title: 'Efter hudterapeutens val',
        content: '<p class="p200">Efter din personligt anpassade ansiktsbehandling är ett individuellt anpassat eftervårdsprogram nyckeln till att förlänga de positiva effekterna och stödja din huds hälsa. Din hudterapeut kommer att ge dig skräddarsydda råd för hemvård baserat på de specifika behandlingar som har utförts, eftersom varje behandling är unik för just din hudtyp och dina behov.</p>
        <p class="p200 mt-m">Du kommer att få rekommendationer om lämpliga produkter som kompletterar den behandling du har fått och råd om hur du bäst implementerar dem i din dagliga hudvårdsrutin. Detta kan innefatta allt från hur du ska återfukta och skydda huden till vilka ingredienser som är viktiga för just din hudprofil. Eftervårdsprogrammet siktar inte bara på att underhålla de omedelbara resultaten från din behandling, utan också att ge dig verktygen och kunskapen för att hantera din hud och dess behov över tid. Att följa hudterapeutens eftervårdsråd säkerställer att du får ut det mesta av din skräddarsydda behandling långt efter att du har lämnat salongen.</p>',
    ),
);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '5 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Cazzandra Lindberg'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
        url_title: 'Rosacea resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Rosaceabehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår rosacea',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
);

$reviews_title = 'Omdömen';
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
$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur ofta bör jag boka in för hudterapeutens val ansiktsbehandling?',
            text: 'Frekvensen för hudterapeutens val ansiktsbehandlingar anpassas efter dina specifika hudbehov. Vissa kan dra nytta av månatliga sessioner, medan andra kanske behöver komma mer sällan. Din hudterapeut kommer att hjälpa dig att bestämma en behandlingsplan baserad på en initial bedömning av din huds hälsotillstånd och dina individuella mål.'
        ),
        new Question(
            title: 'Kommer mina hudproblem att komma tillbaka efter hudterapeutens val ansiktsbehandling?',
            text: 'Även om hudterapeutens val ansiktsbehandling är skräddarsydd för att adressera dina hudproblem, är det viktigt att följa en regelbunden hemvårdsrutin för att upprätthålla resultaten. Livsstilsval och genetiska faktorer kan också påverka din huds tillstånd över tid, så regelbunden kommunikation med din hudterapeut för påföljande behandlingar och justeringar i din hudvård är rekommenderat.'
        ),
        new Question(
            title: 'Hur snabbt kan jag se resultat från hudterapeutens val ansiktsbehandling?',
            text: 'Många klienter märker förbättring direkt efter behandlingen, men beroende på dina individuella hudbehov kan det ibland krävas fler sessioner för att nå dina hudvårdsmål. Hudterapeuten kommer att arbeta med dig för att skapa en plan som ger de bästa långsiktiga resultaten.'
        ),
        new Question(
            title: 'Behöver jag hudterapeutens val ansiktsbehandling även om jag inte har stora hudproblem?',
            text: 'Ja, hudterapeutens val ansiktsbehandling är utformad för att vara förebyggande samt att behandla befintliga hudproblem. Oavsett om din hud redan är i gott skick eller om du bara har mindre hudbekymmer, kan behandlingen anpassas för att bibehålla och förbättra hudens hälsa och utseende.'
        ),

    )
);
$faq_view_more = 'Se alla frågor & svar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering inom hudvårdsbehandlingar',
        image_title: 'Cazzandra Lindberg - Expert på hudvårdsbehandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på hudvårdsbehandlingar',
        image_title: 'Veronika Benedik - Specialist inom hudvårdsbehandlingar'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med omfattande kunskap inom hudvårdsbehandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på hudvårdsbehandlingar'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot hudvårdsbehandlingar',
        image_title: 'Vilma Libom - Expert inom hudvårdsbehandlingar'
    )
);


$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech/',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl/',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'bilder/logotyper/cryopen.svg',
        image_alt: 'CryoPen logotyp',
        image_title: 'CryoPen - frysbehandling',
        url: '/cryopen.php',
        url_title: 'CryoPen',
    ),
    new Brand(
        label: 'Splendor X',
        image: 'bilder/logotyper/splendor-x.png',
        image_alt: 'Splendor X logotyp',
        image_title: 'Splendor X - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: 'bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice/',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova/',
        url_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'bilder/logotyper/lumenis.svg',
        image_alt: 'Lumenis logotyp',
        image_title: 'Lumenis - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Lumenis',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
    ),
    new Brand(
        label: 'Exceed',
        image: 'bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed/',
        url_title: 'Exceedn',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: 'bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/ansiktsbehandling/hudterapeutens-val/" />

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

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/hudbehandlingar/service.css">
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
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $description_title ?></h2>
                    <div class="mt-xl"><?php echo $description_text ?></div>
                </section>

                <?php foreach ($top_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php if (isset($treatment_areas_title)) { ?>
                            <h2 class="big l10n"><?php echo $treatment_areas_title ?></h2>
                        <?php } ?>
                        <?php if (isset($treatment_areas_text)) { ?>
                            <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php } ?>
                        <?php foreach ($treatment_areas as $treatment_area) { ?>
                            <?php if (isset($treatment_area->image_small)) { ?>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img loading="lazy" class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl4"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('../../widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
                    </section>
                <?php } ?>
                <?php if (isset($types_title)) { ?>
                    <section id="types" class="large-margin">
                        <h2 class="h500"><?php echo $types_title; ?></h2>
                        <?php if (isset($types_description)) { ?>
                            <p class="p200 mt-xs"><?php echo $types_description ?></p>
                        <?php } ?>
                        <div class="mt-xl"></div>
                        <?php if (isset($types)) { ?>
                            <?php foreach ($types as $scm) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $scm) { ?>
                                <div class="big-type">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php') ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($combos) && isset($combos_title)) { ?>
                    <section id="combos" class="large-margin">
                        <h2 class="big l10n"><?php echo $combos_title ?></h2>
                        <?php foreach ($combos as $combo) { ?>
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_combo/service_combo.php') ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php foreach ($bottom_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($service_brands)) { ?>
                    <section id="service-brands" class="large-margin">
                        <?php if (isset($service_brands_title)) { ?>
                            <h2 class="h500"><?php echo $service_brands_title ?></h2>
                        <?php } ?>
                        <?php if (isset($service_brands_text)) { ?>
                            <div class="mt-xs"><?php echo $service_brands_text ?></div>
                        <?php } ?>
                        <div class="mt-xl">
                            <?php
                            $brands = $service_brands;
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                            ?>
                        </div>
                    </section>
                <?php } ?>

                <section id="reviews" class="large-margin">
                    <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor"><?php echo $faq_view_more ?></a>
                </section>
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>