<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL laser behandling - Powerlite Photonova';
$seo_description = 'Powerlite Photonova är en effektiv IPL laser behandling utformad för att effektivt behandla allt från pigmentfläckar, ytliga blodkärl till rosacea.';
$seo_keywords = 'powerlite, photonova';

$seo_image = '/images/treatments/large/powerlite-photonova.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Powerlite Photonova', '/varumarken/powerlite-photonova/'),
);

$model = new Service(
    title: 'IPL Laser - Powerlite Photonova',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Powerlite Photonova erbjuder effektiv IPL behandling för dig som strävar efter en jämnare hudton och önskar behandla hudproblem som pigmentfläckar, ytliga blodkärl eller lindra symtomen på rosacea.</p>',
    image_small: 'bilder/varumarken/358x274/powerlite-photonova.webp',
    image_large: 'bilder/varumarken/424x456/powerlite-photonova.webp',
    image_alt: 'IPL',
    image_title: 'IPL',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Photonova',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=powerlite',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '2595 kr',
            savings: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '6995 kr',
            savings: 'Spara 790 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '9995 kr',
            savings: 'Spara 2980 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        )
    ),
);

$floating_box = 'Effektiv IPL behandling som eliminerar ytliga blodkärl, jämnar ut pigmentfläckar och reducerar rosacea.';

$description_title = 'Vad är Powerlite Photonova?';
$description_text = '<p class="p200">Powerlite är varumärket bakom Photonova, en avancerad Svensk IPL-maskin, framtagen för att effektivt förbättra hudens ton och textur. Photonova, som är en del av Powerlites produktlinje, använder Svensktillverkad IPL-teknik skräddarsydd för att behandla en rad hudtillstånd, såsom pigmentfläckar, ytliga blodkärl och rosacea, genom att specifikt rikta in sig på och behandla melanin och hemoglobin i huden.</p>
<p class="p200 mt-m">Photonova-maskinen under Powerlite-varumärket skiljer sig från traditionella IPL-behandlingar genom sin avancerade teknologi som möjliggör mer preciserade och effektiva behandlingar av olika hudproblem. Med dess förmåga att finjusteras efter varje individs hudbehov, erbjuder Photonova en säker och skonsam upplevelse med minimala biverkningar. Denna behandlingsmetod möjliggör snabb återgång till vardagsaktiviteter och är idealisk för de som önskar en jämnare hudton och en förbättrad övergripande hudkvalitet.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/powerlite-photonova-process.webp',
        image_large: '/bilder/process/872x456/powerlite-photonova-process.webp',
        image_alt: 'Hur går en IPL laser behandling i ansiktet till?',
        image_title: 'Hur går en IPL laser behandling i ansiktet till?',
        content: '<p class="p200">När du kommer till en av våra kliniker inleder vi med att noggrant rengöra din hud för att avlägsna alla spår av smink och orenheter. Dina ögon skyddas sedan med speciella skyddsglasögon för att förhindra exponering för det intensiva IPL-ljuset under behandlingen.</p>
        <p class="p200 mt-m">Vår Powerlite Photonova-enhet kalibreras omsorgsfullt för att anpassa ljuspulsernas intensitet och våglängd till ditt specifika hudtillstånd och de områden som ska behandlas. Behandlingen består av korta, intensiva ljuspulser som penetrerar huden. Dessa pulser är riktade för att precist behandla pigmentfläckar, blodkärl och andra hudproblem, där ljusenergin omvandlas till värme för att effektivt reducera oönskat pigment och blodkärl utan att skada den omgivande huden.</p>
        <p class="p200 mt-m">Efter behandlingen är det vanligt att uppleva en viss rodnad och en värmande känsla i huden, liknande den efter en mild solbränna. Dessa reaktioner är övergående och bör avta inom kort tid. Resultaten av Powerlite Photonova-behandlingen utvecklas gradvis, och du kan förvänta dig en fortsatt förbättring av din hud över tid, med en minskning av ojämnheter och en jämnare och förbättrad hudton.</p>',
    ),
);

$types_title = 'Hudtillstånd vi behandlar';
$types_description = '';
$types = array(
    new Service(
        title: 'IPL laser mot Rosacea',
        duration: '50 min',
        price: '2595 kr',
        content: 'Denna avancerade IPL-metod är inriktad på att mildra rodnad och andra symtom associerade med rosacea, vilket resulterar i en jämnare hudton och förbättrad hudkvalitet.',
        image_small: 'bilder/hudproblem/102x102/rosacea.webp',
        image_large: 'bilder/hudproblem/200x200/rosacea.webp',
        image_alt: 'Powerlite Photonova behandling för Rosacea',
        image_title: 'Powerlite Photonova behandling för Rosacea',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Photonova',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Powerlite Photonova behandling av rosacea',
        booking_url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=Problem_Rosacea&area=EMPTY',
        booking_url_label: 'Bokabehandling',
        booking_url_title: 'Boka Powerlite Photonova behandling för rosacea',

        url: '/ipl-rosacea.php',
        url_label: 'Läs mer om IPL laser mot rosacea',
        url_title: 'Läs mer om IPL laser mot rosacea',
    ),

    new Service(
        title: 'IPL laser mot Ytliga Blodkärl',
        duration: '50 min',
        price: '2595 kr',
        content: 'Denna IPL-behandling är skräddarsydd för att selektivt och skonsamt behandla de berörda områdena, vilket leder till en klarare och mer enhetlig hudton.',
        image_small: 'bilder/hudproblem/102x102/ytliga-blodkarl.webp',
        image_large: 'bilder/hudproblem/200x200/ytliga-blodkarl.webp',
        image_alt: 'Powerlite Photonova behandling för Ytliga Blodkärl',
        image_title: 'Powerlite Photonova behandling för Ytliga Blodkärl',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Photonova',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Powerlite Photonova behandling av ytliga blodkärl',
        booking_url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Powerlite Photonova behandling för ytliga blodkärl',

        url: '/ipl-ytliga-blodkarl.php',
        url_label: 'Läs mer om IPL laser mot ytliga blodkärl',
        url_title: 'Läs mer om IPL laser mot ytliga blodkärl',
    ),

    new Service(
        title: 'IPL laser mot Pigmentfläckar',
        duration: '50 min',
        price: '2595 kr',
        content: 'Denna skonsamma, men effektiva IPL-metod är perfekt för att målriktat behandla mörka fläckar och ojämnheter i hudtonen, vilket ger en jämnare och strålande hud.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Powerlite Photonova behandling för Pigmentfläckar',
        image_title: 'Powerlite Photonova behandling för Pigmentfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Photonova',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Powerlite Photonova behandling av pigmentfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Powerlite Photonova behandling för pigmentfläckar',

        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om IPL laser mot pigmentfläckar',
        url_title: 'Läs mer om IPL laser mot pigmentfläckar',
    ),

    new Service(
        title: 'IPL laser mot Melasma',
        duration: '50 min',
        price: '2595 kr',
        content: 'Denna teknik är inriktad på att ljusa upp och jämna ut hudtonen genom att selektivt behandla hyperpigmenterade områden, vilket bidrar till en märkbar förbättring av hudens utseende.',
        image_small: 'bilder/hudproblem/102x102/melasma.webp',
        image_large: 'bilder/hudproblem/200x200/melasma.webp',
        image_alt: 'Powerlite Photonova behandling för Melasma',
        image_title: 'Powerlite Photonova behandling för Melasma',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Photonova',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Powerlite Photonova behandling av melasma',
        booking_url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=Problem_Melasma',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Powerlite Photonova behandling för melasma',

        url: '/melasma.php',
        url_label: 'Läs mer om melasma',
        url_title: 'Läs mer om melasma',
    ),

);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'IPL laser Ansikte',
        description: '',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/panna.svg',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'Panna',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Forehead',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av pannan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/nasa.svg',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/kinder.svg',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Kinder',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av kinderna'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/overlapp.svg',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av överläppen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/haka.svg',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Chin',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av hakan'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'IPL laser Kropp',
        description: '<p class="p200">Powerlite Photonova kan även behandla olika av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '50 min',
                price: '1895 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med Powerlite Photonova på halsen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med Powerlite Photonova på dekolletaget'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_Hands',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med Powerlite Photonova på händerna'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Behandlingen fungerar även utmärkt om du vill kombinera flera olika områden.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: '1x zon',
                image_title: '1x zon',
                title: '1x zon',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_1xZone',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 zon.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '2x zoner',
                image_title: '2x zoner',
                title: '2x zoner',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_2xZones',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2x zoner.'
            ),
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: '/icons/2x.svg',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '60 min',
                price: '3595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: '/icons/3x.svg',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '70 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=powerlite&skipable_problem=SKIP&area=IPL_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/powerlite-photonova-forberedelser.webp',
        image_large: '/bilder/process/872x456/powerlite-photonova-forberedelser.webp',
        image_alt: 'Förberedelser inför behandling',
        image_title: 'Förberedelser inför behandling',
        content: '<p class="p200">Att förbereda sig inför en behandling är ett viktigt steg för att säkerställa att din hud är i bästa möjliga skick. Det första steget är en konsultation med en erfaren hudterapeut där din hudtyp och dina unika behov noggrant utvärderas. Under denna konsultation skapas en individuellt anpassad behandlingsplan för att uppnå de bästa resultaten.</p>
        <p class="p200 mt-m">För att förbereda din hud bör du undvika solning och inte använda självbrunande produkter minst två veckor före behandlingen för att minska risken för oönskade pigmentförändringar. Detta är viktigt eftersom behandlingen är mest effektiv när huden är i sin naturliga hudton. Undvik även hudvårdsprodukter som innehåller starka exfolierande ingredienser under veckan innan din behandling. Din hudterapeut kommer att ge dig omfattande råd och instruktioner för förberedelser och eftervård, för att säkerställa en säker behandlingsupplevelse och en effektiv återhämtningsprocess.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/powerlite-photonova-eftervard.webp',
        image_large: '/bilder/process/872x456/powerlite-photonova-eftervard.webp',
        image_alt: 'Eftervård',
        image_title: 'Eftervård',
        content: '<p class="p200">Eftervården är en viktigt del av processen för att säkerställa ett bra resultat och en effektiv återhämtningsprocess. Efter behandlingen är det vanligt att uppleva en viss rodnad och svullnad i det behandlade området. För att minska risken för irritation och infektioner, bör du undvika att röra området med orena händer och avstå från att applicera smink eller irriterande produkter under de första 24 timmarna.</p>
        <p class="p200 mt-m">Det är rekommenderat att undvika intensiva fysiska aktiviteter, bastubad och långa varma duschar under de första dagarna efter din IPL-behandling, eftersom dessa kan förvärra svullnad och irritation. Användning av solskydd med hög SPF är också viktigt för att skydda huden från UV-strålning, särskilt på de behandlade områdena. Vi råder att använda milda och återfuktande hudvårdsprodukter utan starka ingredienser för att stödja läkningsprocessen och bevara hudens fuktbalans.</p>
        <p class="p200 mt-m">Det är viktigt att du noggrant följer de eftervårdsinstruktioner som ges av din behandlare. Vid frågor eller funderingar kring din eftervård, tveka inte att kontakta kliniken. Baserat på hur din hud reagerar, kan ytterligare behandlingar med Powerlite Photonova rekommenderas för att uppnå och bibehålla optimala resultat.</p>',
    ),
);

$service_brands_title = 'Våra IPL maskinsmärken';
$service_brands_text = '<p class="p200">Utöver Powerlite Photonova använder vi även Alma Harmony XL och Rejuve Dye-VL.</p>';
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
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
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
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
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
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.webp',
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

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur många behandlingar krävs vanligtvis?',
            text: '<p class="p200">Antalet Powerlite Photonova-behandlingar varierar beroende på dina hudbehov och mål, men vanligtvis rekommenderas 3-8 sessioner med 4 veckors mellanrum. En skräddarsydd behandlingsplan skapas vid din första konsultation för att möta dina unika hudförhållanden.</p>'
        ),
        new Question(
            title: 'Kan hudproblem återkomma efter en behandling?',
            text: '<p class="p200">Även om Powerlite Photonova effektivt minskar hudproblem som pigmentering och rosacea, kan nya problem uppstå på grund av åldrande eller UV-exponering. Regelbunden hudvård och solskydd hjälper till att bevara resultaten, med möjlighet för ytterligare behandlingar vid behov.</p>'
        ),
        new Question(
            title: 'Hur snabbt kan jag se resultat efter en behandling?',
            text: '<p class="p200">Resultat från Powerlite Photonova kan synas efter första behandlingen, men optimala effekter uppnås vanligtvis efter en full behandlingsserie. Hudförbättringarna fortsätter att utvecklas genom hela behandlingsprocessen och även efter sista sessionen.</p>'
        ),
        new Question(
            title: 'Kan jag göra IPL laser hemma?',
            text: '<p class="p200">Nej, det är inte rekommenderat att utföra IPL laserbehandling hemma. Maskinerna som är avsedda för hemmabruk har ofta inte den kraft eller effektivitet som krävs för att uppnå önskade resultat. Dessutom är det av största vikt att en utbildad hudterapeut utför dessa behandlingar. En professionell hudterapeut har den kunskap och erfarenhet som krävs för att säkerställa att behandlingen blir både effektiv och säker. Korrekt användning av IPL-teknologi är avgörande för att undvika potentiella hudskador och för att uppnå de bästa möjliga resultaten.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Powerlite Photonova behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på Powerlite Photonova behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Powerlite Photonova',
        image_title: 'Veronika Benedik - Specialist inom Powerlite Photonova behandlingar'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom Powerlite Photonova behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på Powerlite Photonova'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Powerlite Photonova behandlingar',
        image_title: 'Vilma Libom - Expert inom Powerlite Photonova behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/varumarken/powerlite-photonova/" />

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
                                include($_SERVER['DOCUMENT_ROOT'] . '/hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
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
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>