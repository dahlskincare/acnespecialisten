<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL behandling i Stockholm - Effektiv hudförbättring';
$seo_description = 'Upptäck Stockholms ledande klinik för IPL-behandlingar. Våra hudterapeuter erbjuder skräddarsydda behandlingsplaner som förbättrar hudton och textur.';
$seo_keywords = 'ipl, ipl laser, ipl behandling, ipl ansikte före efter, ipl ansikte';

$seo_image = '/images/treatments/large/ipl.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('IPL', '/hudbehandlingar/ipl/'),
);

$model = new Service(
    title: 'IPL behandling',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Vi erbjuder den bästa IPL behandlingen för effektiv hudföryngring i Stockholm. Vår expertis och avancerade teknik garanterar resultat som förbättrar hudens utseende och kvalitet. Oavsett om du söker permanenta lösningar för pigmentfläckar, ytliga kärl eller ojämn hudton, är vår IPL-behandling anpassad för att möta dina behov.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/ipl.webp',
    image_large: 'bilder/hudbehandlingar/424x456/ipl.webp',
    image_alt: 'IPL',
    image_title: 'IPL',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_IPL',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=ipl',
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

$floating_box = 'Effektiv ljusbehandling för en rad olika hudproblem såsom pigmenteringar, ytliga blodkärl och rosacea.';

$description_title = 'Vad är IPL?';
$description_text = '<p class="p200">IPL, som står för Intensivt Pulserande Ljus, är en ljusbaserad behandlingsmetod som används för att förbättra hudens färg och textur. Behandlingen använder ljuspulser som tränger igenom huden och behandlar olika tillstånd genom att rikta in sig på melanin i pigmentfläckar och hemoglobin i blodkärl. Denna teknik är särskilt effektiv för att reducera ytliga blodkärl, pigmentfläckar och symtom på rosacea.</p>
    <p class="p200 mt-m">IPL-teknologin är mångsidig och kan anpassas efter kundens individuella hudförhållanden, vilket gör det möjligt att behandla en rad hudproblem med precision. Behandlingen är vanligtvis skonsam med få biverkningar, och kunder kan återgå till sina normala aktiviteter kort efter en behandling. Det är en populär behandlingsmetod för att främja en mer jämn hudton, minska rödhet och bruna fläckar, samt att förbättra hudens övergripande utseende.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/ipl-forberedelser.webp',
        image_large: '/bilder/process/872x456/ipl-forberedelser.webp',
        image_alt: 'Förberedelser inför behandling med IPL',
        image_title: 'Förberedelser inför behandling med IPL',
        content: '<p class="p200">Inför en IPL behandling är det viktigt att följa några grundläggande steg för att säkerställa att din hud är i bästa möjliga skick och redo för behandlingen. En konsultation med en erfaren hudterapeut är det första steget, där huden noggrant analyseras och en individuell behandlingsplan utformas för att uppnå optimala resultat med IPL-tekniken.</p>
        <p class="p200 mt-m">För att förbereda huden bör du undvika solning och inte använda självbrunande produkter (brun-utan-sol) minst två veckor före behandlingen för att minska risken för pigmentförändringar. IPL behandling kräver att huden är så naturligt i sin ton som möjligt för att ljuspulserna ska kunna rikta sig korrekt mot oönskade pigment eller blodkärl. Det är också viktigt att undvika produkter med retinol eller andra starka exfolierande ingredienser under veckan innan din behandling. Din hudterapeut kommer att informera dig om ytterligare förberedelser och ge dig råd om hur du bäst tar hand om din hud både före och efter din IPL behandling för att säkerställa en trygg behandling och effektiv läkning.</p>',
    ),
    'process' => new Article(
        title: 'Hur går en behandling till?',
        image_small: '/bilder/process/358x272/ipl-process.webp',
        image_large: '/bilder/process/872x456/ipl-process.webp',
        image_alt: 'Hur går en IPL behandling till?',
        image_title: 'Hur går en IPL behandling till?',
        content: '<p class="p200">IPL behandling är en effektiv metod för hudföryngring och korrigering av olika hudproblem såsom pigmentfläckar, ytliga blodkärl och rosacea. När du anländer till en av våra kliniker, kommer din hud att rengöras grundligt för att avlägsna makeup och orenheter. Därefter appliceras ett särskilt skydd på dina ögon för att säkerställa att de inte utsätts för det intensiva ljuset.</p>
        <p class="p200 mt-m">Vår IPL-enhet justeras sedan för att anpassa ljuspulsernas intensitet och våglängd beroende på ditt specifika hudtillstånd och behandlingsområde. Under behandlingen avges korta, intensiva pulser av ljus som tränger in i huden. Dessa ljuspulser riktar in sig på pigmentfläckar, blodkärl och rodnaden som omvandlar ljusenergin till värme, vilket bryter ner det oönskade pigmentet eller ta bort blodkärlen utan att skada den omgivande huden.</p>
        <p class="p200 mt-m">Efter behandlingen kan du uppleva en viss rodnad och värme i huden, liknande en mild solbränna, men detta är vanligt och bör avta inom kort. Resultaten av IPL-behandlingen utvecklas över tid, och du kan förvänta dig att se en gradvis förbättring av hudens utseende med minskning av ojämnheter, en jämnare hudton och en övergripande förbättrad hudkvalitet. Efter behandlingen kommer din hudterapeut att ge dig rekommendationer för eftervård för att maximera resultatet och främja en snabb läkning.</p>',
    ),
);

$types_title = 'Hudproblem vi behandlar';
$types_description = 'En mångsidig och effektiv behandlingsmetod som används för att adressera en rad olika hudproblem. Här kan du utforska de olika hudtillstånden som vi framgångsrikt behandlar med vår IPL-teknik.';
$types = array(
    new Service(
        title: 'IPL-behandling mot Rosacea',
        duration: '50 min',
        price: '2595 kr',
        content: 'Effektiv behandling av rosacea med vår avancerade IPL-teknik. Genom att använda målinriktade ljuspulser kan vi mildra rodnad och andra symtom associerade med rosacea, vilket ger en jämnare hudton och en förbättrad hudkvalitet.',
        image_small: 'bilder/hudproblem/102x102/rosacea.webp',
        image_large: 'bilder/hudproblem/200x200/rosacea.webp',
        image_alt: 'IPL-behandling för Rosacea',
        image_title: 'IPL-behandling för Rosacea',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av rosacea',
        booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_Rosacea&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för rosacea',

        url: '/ipl-rosacea.php',
        url_label: 'Läs mer om IPL mot rosacea',
        url_title: 'Läs mer om IPL mot rosacea',
    ),

    new Service(
        title: 'IPL-behandling mot Ytliga Blodkärl',
        duration: '20 - 50 min',
        price: 'Från 995 kr',
        content: 'Effektiv IPL-behandling för att minska synligheten av ytliga blodkärl. Denna behandling används för att selektivt behandla de drabbade blodkärlen, vilket resulterar i en klarare och mer enhetlig hudton.',
        image_small: 'bilder/hudproblem/102x102/ytliga-blodkarl.webp',
        image_large: 'bilder/hudproblem/200x200/ytliga-blodkarl.webp',
        image_alt: 'IPL-behandling för Ytliga Blodkärl',
        image_title: 'IPL-behandling för Ytliga Blodkärl',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av ytliga blodkärl',
        booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för ytliga blodkärl',

        url: '/ipl-ytliga-blodkarl.php',
        url_label: 'Läs mer om IPL mot ytliga blodkärl',
        url_title: 'Läs mer om IPL mot ytliga blodkärl',
    ),

    new Service(
        title: 'IPL-behandling mot Pigmentfläckar',
        duration: '20 - 50 min',
        price: 'Från 995 kr',
        content: 'Minska och ta bort pigmentfläckar med vår IPL-behandling. Denna metod är idealisk för att effektivt och målinriktat reducera mörka fläckar och ojämnheter i hudtonen, vilket ger en jämnare hudton.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'IPL-behandling för Pigmentfläckar',
        image_title: 'IPL-behandling för Pigmentfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av pigmentfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för pigmentfläckar',

        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om IPL mot pigmentfläckar',
        url_title: 'Läs mer om IPL mot pigmentfläckar',
    ),

    new Service(
        title: 'Laserbehandling mot Melasma',
        duration: '50 min',
        price: '2595 kr',
        content: 'Behandla melasma effektivt med laser. Vår behandling hjälper till att ljusa upp och jämna ut hudtonen genom att selektivt behandla de hyperpigmenterade områdena, vilket ger en märkbar förbättring i hudens utseende.',
        image_small: 'bilder/hudproblem/102x102/melasma.webp',
        image_large: 'bilder/hudproblem/200x200/melasma.webp',
        image_alt: 'IPL-behandling för Melasma',
        image_title: 'IPL-behandling för Melasma',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av melasma',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Melasma&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för melasma',

        url: '/melasma.php',
        url_label: 'Läs mer om melasma',
        url_title: 'Läs mer om melasma',
    ),

);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">IPL (Intensivt Pulserande Ljus) är en flexibel behandlingsmetod som passar för en rad olika områden på kroppen, inklusive ansikte, hals, händer och bröst.</p>';
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
                title: 'IPL hudföryngring - Hela ansiktet',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/panna.svg',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'IPL - Panna',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Forehead',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av pannan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/nasa.svg',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'IPL - Näsa',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/kinder.svg',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'IPL - Kinder',
                duration: '20 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av kinderna'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/overlapp.svg',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'IPL - Överläpp',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av överläppen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/haka.svg',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'IPL - Haka',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Chin',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av hakan'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'Kropp',
        description: '<p class="p200">IPL kan behandla flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'IPL - Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av halsen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'IPL - Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av dekolletaget'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'IPL - Händer',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_Hands',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av händerna'
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
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_1xZone',
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
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_2xZones',
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
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_1xArea',
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
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_2xAreas',
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
                url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=SKIP&area=IPL_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: '/bilder/process/358x272/ipl-eftervard.webp',
    image_large: '/bilder/process/872x456/ipl-eftervard.webp',
    image_alt: 'Att tänka på efter IPL behandling',
    image_title: 'Att tänka på efter IPL behandling',
    content: '<p class="p200">Eftervården efter en IPL-behandling är avgörande för att uppnå bästa resultat och säkerställa en effektiv läkningsprocess. Efter behandlingen kan det vara normalt att uppleva viss rodnad och svullnad i det behandlade området. Det är viktigt att du undviker att röra området med orena händer och att inte applicera makeup eller starka produkter under de första 24 timmarna för att minimera risken för irritation eller infektioner.</p>
    <p class="p200 mt-m">Under de första dagarna efter behandlingen bör du undvika intensiv fysisk aktivitet, bastu och långa varma duschar som kan förvärra svullnad och irritation. Användning av solskydd är kritiskt; det är viktigt att regelbundet applicera en hög SPF för att skydda huden mot UV-strålning, vilket är särskilt viktigt för det behandlade området. Vi rekommenderar även att du använder milda och återfuktande hudvårdsprodukter utan starka ingredienser för att främja läkningsprocessen och upprätthålla hudens fuktbalans.</p>
    <p class="p200 mt-m">Se till att följa de specifika eftervårdsinstruktioner som din hudterapeut ger dig, och tveka inte att kontakta kliniken om du har frågor eller funderingar kring din eftervård.</p>',
));

$service_brands_title = 'Varumärken för IPL i Stockholm';
$service_brands_text = '';
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
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova/',
        url_title: 'Powerlite Photonova',
    ),
);

$results_title = 'IPL ansikte före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-1.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-1.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-1.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-1.jpg',
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
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-2.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-2.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-2.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-2.jpg',
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
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-3.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-3.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-3.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-3.jpg',
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
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-4.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-4.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-4.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-4.jpg',
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
    'Vanliga Frågor för IPL' => array(
        new Question(
            title: 'Hur fungerar IPL hårborttagning?',
            text: '<p class="p200">Vi erbjuder inte IPL för hårborttagning, utan fokuserar på laserbehandlingar för detta ändamål. Laserbehandling är en mer avancerad och effektiv metod för permanent hårborttagning. Den är designad för att vara snabbare, mindre smärtsam, och kräver färre behandlingar för att uppnå önskat resultat. IPL, som var en tidig metod för ljusbaserad hårborttagning, har med tiden blivit mindre populär jämfört med de nyare och mer effektiva lasermetoderna.</p>'
        ),
        new Question(
            title: 'Hur fungerar IPL?',
            text: '<p class="p200">IPL, eller Intensivt Pulsat Ljus, kan liknas vid laser men använder ett brett spektrum av ljus för att målriktat behandla olika hudtillstånd. Till skillnad från laser som använder en specifik våglängd, skickar IPL ut ljus i flera våglängder som kan tränga igenom olika djup av huden. Detta gör IPL till en mångsidig behandling som kan anpassas för att adressera en rad olika hudproblem, inklusive pigmentfläckar, ytliga blodkärl, och hudföryngring genom att stimulera kollagenproduktionen.</p>'
        ),
        new Question(
            title: 'Hur många IPL-behandlingar behövs?',
            text: '<p class="p200">Antalet IPL-behandlingar varierar beroende på individens hudtillstånd och det specifika problem som behandlas. Generellt rekommenderas 3-5 behandlingar för att uppnå optimala resultat. Under den kostnadsfria konsultationen kommer en hudterapeut att noggrant undersöka ditt hudtillstånd och skapa en personlig behandlingsplan. Denna plan anpassas efter dina specifika behov och mål, för att säkerställa de bästa möjliga resultaten.</p>'
        ),
        new Question(
            title: 'Vad står IPL för?',
            text: '<p class="p200">IPL står för Intensivt Pulsat Ljus. Denna teknik använder ett brett ljusspektrum för att behandla en rad olika hudtillstånd. Genom att anpassa ljusets intensitet och våglängd kan IPL effektivt målriktat adressera specifika hudproblem som pigmentförändringar, ytliga blodkärl, och tecken på hudåldring. Denna flexibla och anpassningsbara metod gör IPL till en populär val för icke-invasiv hudförbättring.<a class="b200 underline color-deep-sea-400" href="/permanent-harborttagning.php">Läs mer om Permanent Hårborttagning här</a></p>'
        ),
        new Question(
            title: 'Hur snabbt kan jag se ett resultat av IPL-behandling?',
            text: '<p class="p200">Resultaten av IPL-behandling kan variera beroende på vilket hudproblem som behandlas. För pigmenteringar och solskador kan vissa patienter märka en ljusare och jämnare hudton redan efter en behandling, medan andra kan behöva flera behandlingar för att se fullständiga resultat. Vid behandling av ytliga blodkärl kan förbättringar ofta ses direkt efter behandlingen, även om det kan krävas ytterligare behandlingar för att helt eliminera kärlen. Det är viktigt att ha realistiska förväntningar och diskutera med din hudterapeut hur behandlingsprocessen ser ut och när du kan förvänta dig att se resultat.</p>'
        ),
        new Question(
            title: 'Kan jag genomgå en IPL-behandling om jag är gravid eller ammar?',
            text: '<p class="p200">Nej, det rekommenderas inte att genomgå IPL-behandlingar under graviditet eller amningsperioden. Detta är en försiktighetsåtgärd för att undvika eventuella risker för både mor och barn, eftersom det inte finns tillräckligt med forskning som bekräftar säkerheten för dessa grupper.</p>'
        ),
        new Question(
            title: 'Är IPL-behandling lämplig för alla hudtyper?',
            text: '<p class="p200">IPL-behandlingar kan vara effektiva för många hudtyper, men de är inte lämpliga för mycket mörka hudtyper. Mörkare hudtyper har en högre risk för pigmentförändringar på grund av den intensiva ljuspulsen. En konsultation med en specialist är nödvändig för att bedöma din hudtyp och avgöra om IPL är en lämplig behandlingsmetod för dig.</p>'
        ),
        new Question(
            title: 'Kan jag genomföra IPL-behandling om jag nyligen har solat?',
            text: '<p class="p200">Det rekommenderas att undvika direkt solljus och solbränna minst två veckor före en IPL-behandling. Solbränd hud ökar risken för oönskade biverkningar som hyperpigmentering. Det är viktigt att skydda behandlingsområdet från solen både före och efter behandlingen för att uppnå de bästa resultaten.</p>'
        ),
        new Question(
            title: 'Kan jag genomföra IPL-behandling om jag nyligen har solat?',
            text: '<p class="p200">Det rekommenderas att undvika direkt solljus och solbränna minst två veckor före en IPL-behandling. Solbränd hud ökar risken för oönskade biverkningar som hyperpigmentering. Det är viktigt att skydda behandlingsområdet från solen både före och efter behandlingen för att uppnå de bästa resultaten.</p>'
        ),
        new Question(
            title: ' Kan jag genomgå en IPL-behandling om jag tar medicin som gör mig ljuskänslig?',
            text: '<p class="p200">Om du tar mediciner som ökar din ljuskänslighet, även kända som fotosensibiliserande mediciner, är det viktigt att du informerar din behandlare om detta innan du genomgår en IPL-behandling. Fotosensibiliserande mediciner kan inkludera vissa typer av antibiotika, antiinflammatoriska läkemedel, och mediciner för aknebehandling såsom Roaccutan. Dessa mediciner kan öka risken för biverkningar från IPL-behandlingen, såsom brännskador eller pigmentförändringar.</p>'
        ),
    ),
);
$faq_view_more = 'Se alla frågor & svar';



$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i IPL-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på IPL-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på IPL',
        image_title: 'Veronika Benedik - Specialist inom IPL-vård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom IPL-behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på IPL'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot IPL-behandlingar',
        image_title: 'Vilma Libom - Expert inom IPL-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/ipl/" />

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
                                include('../widgets/treatment-area-item-card/treatment-area-item-card.php');
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