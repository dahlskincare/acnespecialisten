<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL mot rosacea | AcneSpecialisten';
$seo_description = 'Bli av med rosacea. Läs mer om vår IPL-behandling och boka en gratis konsultation hos AcneSpecialisten →';
$seo_keywords = 'IPL-behandling för rosacea, reducera rodnad, behandling av rosacea, ljusbaserad hudterapi, förbättra hudton, minska symtom på rosacea, jämn hudton, avancerad hudvård, specialister på rosacea';

$seo_image = 'bilder/hudbehandlingar/424x456/ipl.webp';

$path_segments = array(
    new PathSegment('Hudbehandlingar', '/hudbehandlingar/'),
    new PathSegment('IPL Rosacea', '/ipl-rosacea.php'),
);

$model = new Service(
    title: 'IPL mot rosacea',
    duration: '60 min',
    price: 'Från 1595 kr',
    content: '',
    image_small: 'bilder/hudbehandlingar/358x274/ipl.webp',
    image_large: 'bilder/hudbehandlingar/424x456/ipl.webp',
    image_alt: 'IPL mot rosacea',
    image_title: 'IPL mot rosacea',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_IPL',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_Rosacea&area=EMPTY',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 procedure',
            price: '2595 kr',
            savings: null,
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 procedures',
            price: '6995 kr',
            savings: 'Spara 790 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 procedures',
            price: '9995 kr',
            savings: 'Spara 2980 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$floating_box = 'Effektiv ljusbehandling som reducerar rosacea.';

$description_title = 'Vad är IPL behandling mot rosacea?';
$description_text = '<p class="p200">IPL, som står för Intensivt Pulserande Ljus, är en effektiv och icke-invasiv behandlingsmetod speciellt användbar för att hantera symtom på rosacea. Denna ljusbaserade teknik som liknar laserbehandling sänder ut pulser av ljus som varsamt tränger igenom huden och behandlar rosacea genom att minska rodnad och inflammation. IPL verkar genom att rikta in sig på de små blodkärlen som bidrar till rosaceas karakteristiska rodnad och synliga blodkärl.</p>
    <p class="p200 mt-m">IPL för <a class="b200 underline color-deep-sea-400" href="/rosacea.php" title="Mer information om rosacea i ansiktet">rosacea i ansiktet</a> hjälper inte bara till att minska rodnad och förbättra hudens ton, utan kan även lugna huden och minska frekvensen av rosaceautbrott. IPL är en <a class="b200 underline color-deep-sea-400" href="/rosaceabehandling.php" title="Mer information om rosaceabehandlingr">rosacea behandling</a> som anpassas individuellt för att passa varje kunds unika hudförhållanden och är känd för att vara effektiv med minimala risker för biverkningar. Många kunder upplever omfattande förbättringar och reducerade ytliga blodkärl efter bara några <a class="b200 underline color-deep-sea-400" href="/ipl-ytliga-blodkarl.php" title="Mer information om IPL behandling">IPL behandlingar</a>, vilket gör IPL till en populär och effektiv lösning för dem som kämpar med symtom på rosacea.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Inför behandlingen',
        image_small: '/bilder/process/358x272/ipl-rosacea-forberedelser.webp',
        image_large: '/bilder/process/872x456/ipl-rosacea-forberedelser.webp',
        image_alt: 'Förberedelser inför behandling med IPL mot rosacea',
        image_title: 'Förberedelser inför behandling med IPL mot rosacea',
        content: '<p class="p200">Att förbereda sig inför en IPL-behandling mot rosacea innebär att vidta vissa försiktighetsåtgärder för att optimera behandlingens effektivitet och säkerhet. Din förberedelse börjar med en noggrann konsultation hos en erfaren hudterapeut som kommer att utvärdera din hudtyp och rosaceas tillstånd. Under denna konsultation diskuteras en skräddarsydd behandlingsplan som är anpassad för att ge bästa möjliga resultat.</p>
        <p class="p200 mt-m">För att förbereda din hud för behandlingen är det viktigt att du undviker solning och användning av självbrunande produkter minst två veckor före din session. Detta är för att minska risken för ojämn pigmentering, då IPL behandlar pigment och blodkärl i huden. Du bör även undvika hudvårdsprodukter som innehåller retinol, starka syror eller andra exfolierande ämnen under veckan före behandlingen. Detta för att säkerställa att din hud inte är överkänslig eller irriterad vid behandlingstillfället. Din hudterapeut kommer att ge dig fullständiga instruktioner om hur du bäst förbereder dig inför din IPL-behandling, och vilka steg du bör ta efteråt för att främja en smidig och effektiv läkningsprocess.</p>',
    ),
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/ipl-rosacea-process.webp',
        image_large: '/bilder/process/872x456/ipl-rosacea-process.webp',
        image_alt: 'Hur går en IPL mot rosacea till?',
        image_title: 'Hur går en IPL mot rosacea till',
        content: '<p class="p200">IPL-behandling mot rosacea är en speciell procedur som använder Intensivt Pulserande Ljus för att effektivt minska rodnad och andra symptom associerade med rosacea. När du kommer till någon av våra kliniker i Stockholm, kommer vi först att rengöra din hud noggrant för att avlägsna eventuell makeup och orenheter. Dina ögon skyddas också med speciella glasögon för att förhindra exponering för det intensiva ljuset.</p>
        <p class="p200 mt-m">Vår IPL-enhet ställs sedan in för att skräddarsy ljuspulsens intensitet och våglängd till ditt specifika hudtillstånd. Under behandlingen appliceras korta, intensiva ljuspulser direkt på de områden av huden som påverkas av rosacea. Ljuset absorberas av de blodkärl som bidrar till rodnad, vilket minskar deras framträdande och lindrar andra symptom på rosacea utan att skada den omgivande huden.</p>
        <p class="p200 mt-m">Efter behandlingen kan det behandlade området kännas varmt och se något rött ut, vilket liknar känslan av en mild solbränna. Dessa symtom är vanligtvis övergående och bör lindras inom några timmar till några dagar. Resultaten av IPL-behandlingen blir ofta synliga över tid, med en gradvis minskning av hudrodnad och förbättring av hudens övergripande tillstånd. Din hudterapeut kommer att ge dig råd om lämplig eftervård och rekommendera eventuella uppföljningsbehandlingar för att upprätthålla och förbättra resultaten från din IPL-behandling mot rosacea.</p>',
    ),
);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">Vi kan behandla både hela och delar av ansiktet.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">IPL kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'IPL för Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/nasa.svg',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'IPL för Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/kinder.svg',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'IPL för Kinder',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av kinderna',
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: '/bilder/process/358x272/ipl-rosacea-eftervard.webp',
    image_large: '/bilder/process/872x456/ipl-rosacea-eftervard.webp',
    image_alt: 'Eftervård för IPL-behandling mot rosacea',
    image_title: 'Eftervård för IPL-behandling mot rosacea',
    content: '<p class="p200">Eftervården är en viktig del av din återhämtningsprocess efter en IPL-behandling mot rosacea. Omedelbart efter behandlingen kan det behandlade området uppvisa viss rodnad och i vissa fall en lätt svullnad. Dessa reaktioner är normala och bör avta inom kort. För att minimera risken för irritation och infektion är det viktigt att du inte rör området med smutsiga händer och undviker att applicera makeup eller parfymerade produkter under de första 24 timmarna efter behandlingen.</p>
    <p class="p200 mt-m">Under de första dagarna efter din IPL-behandling rekommenderas det att du undviker stark fysisk ansträngning, bastubad och långa heta duschar, då dessa aktiviteter kan förvärra svullnad och irritation. Det är även viktigt att skydda din hud mot solen. Använd en solskyddskräm med hög SPF regelbundet, särskilt på det behandlade området, för att undvika ytterligare solskador och stödja läkningsprocessen. Använd gärna milda och återfuktande hudvårdsprodukter som inte innehåller irriterande ingredienser för att lugna huden och upprätthålla dess fuktbalans.</p>
    <p class="p200 mt-m">Följ noga de eftervårdsinstruktioner som du får från din hudterapeut. Om du har några frågor eller funderingar kring din återhämtning efter behandlingen, tveka inte att kontakta din klinik. Ytterligare uppföljande behandlingar kan rekommenderas för att bibehålla och förbättra resultaten av din IPL-behandling mot rosacea.</p>',
));

$service_brands_title = 'Märken för IPL';
$service_brands_text = '<p class="p200">Vi utför IPL mot rosacea med Alma Rejuve DyeVL och Alma Harmony XL som är de bästa maskinerna på marknaden.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl/',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-1.jpg',
        image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-1.jpg',
        image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-1.jpg',
        image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-1.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-2.jpg',
        image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-2.jpg',
        image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-2.jpg',
        image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-2.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-3.jpg',
        image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-3.jpg',
        image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-3.jpg',
        image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-3.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-4.jpg',
        image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-4.jpg',
        image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-4.jpg',
        image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-4.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-5.jpg',
        image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-5.jpg',
        image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-5.jpg',
        image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-5.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
);

$results_images = array(
      new LabelImage(
            image_url: '/bilder/resultat/832x476/ytliga-blodkarl/ytliga-blodkarl-resultat-fore-efter-ansikte.webp',
            image_alt: 'IPL behandling mot ytliga blodkärl från rosacea före och efter',
            image_title: 'IPL rosacea resultat - ytliga blodkärl',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-rodnad.webp',
            image_alt: 'IPL behandling mot rodnad från rosacea före och efter',
            image_title: 'IPL rosacea resultat - rodnad',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-omfattande-rodnad-ansikte.webp',
            image_alt: 'IPL mot omfattande rodnad från rosacea före och efter',
            image_title: 'IPL rosacea resultat - omfattande rodnad',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinder-nasa-rodnad.webp',
            image_alt: 'IPL behandling av rodnad på kinder och näsa före och efter',
            image_title: 'IPL rosacea resultat - kinder och näsa',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinder.webp',
            image_alt: 'IPL mot rosacea på kinder före och efter behandling',
            image_title: 'IPL rosacea resultat - kinder',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-rott-ansikte.webp',
            image_alt: 'IPL behandling av rött ansikte från rosacea före och efter',
            image_title: 'IPL rosacea resultat - rött ansikte',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte.webp',
            image_alt: 'IPL mot rosacea i ansiktet före och efter behandling',
            image_title: 'IPL rosacea resultat - ansikte',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinderna.webp',
            image_alt: 'IPL behandling av rosacea på kinderna före och efter',
            image_title: 'IPL rosacea resultat - kinderna',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-panna-kinder.webp',
            image_alt: 'IPL mot rosacea på panna och kinder före och efter',
            image_title: 'IPL rosacea resultat - panna och kinder',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-hela-ansiktet.webp',
            image_alt: 'IPL behandling av rosacea i hela ansiktet före och efter',
            image_title: 'IPL rosacea resultat - hela ansiktet',
            content: '',
      ),
);

$results_url = '/resultat-rosacea.php';

$reviews_title = 'Omdömen';

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur många behandlingar med IPL krävs för att behandla rosacea?',
            text: 'Antalet IPL-behandlingar för rosacea varierar beroende på hudens tillstånd och svårighetsgraden av rosacea. Generellt kan det krävas 3-8 behandlingar med intervaller på ungefär 4 veckor för att se en märkbar förbättring. Din hudterapeut kommer att utforma en personligt anpassad behandlingsplan under den initiala konsultationen.'
        ),
        new Question(
            title: 'Kan symtomen på rosacea återkomma efter en IPL-behandling?',
            text: 'IPL-behandling kan ge betydande förbättringar av rosaceas symtom, men det är viktigt att förstå att rosacea är en kronisk hudåkomma som kan kräva kontinuerlig hantering. Även om IPL kan minska rodnad och blodkärl associerade med rosacea, kan regelbundna uppföljningsbehandlingar behövas för att upprätthålla resultaten, särskilt om nya symtom uppstår.'
        ),
        new Question(
            title: 'När börjar jag se resultat efter IPL-behandling mot rosacea?',
            text: 'De första resultaten av IPL-behandling mot rosacea kan ofta märkas inom några dagar till en vecka efter behandlingen, med fortsatt förbättring över tid. De flesta patienter upplever en gradvis minskning av rodnad och synligheten av blodkärl efter varje behandling. Fullständiga resultat och den långsiktiga effekten kan dock variera, och det kan krävas flera behandlingar för att uppnå optimala resultat.'
        ),
    )
);
$faq_view_more = 'Se fler frågor & svar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund',
        image_title: 'Julia Eklund'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/ipl-rosacea.php" />

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
                                include('hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
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

                <section id="results" class="large-margin">
                    <?php
                    $results_title = 'Resultat IPL mot Rosacea';
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results_grid/results_grid.php');
                    ?>
                </section>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se fler frågor"><?php echo $faq_view_more ?></a>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>