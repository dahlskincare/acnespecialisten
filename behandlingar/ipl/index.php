<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Bästa IPL behandling i Stockholm - Effektiv Hudförbättring';
$seo_description = 'Upptäck Stockholms ledande klinik för IPL-behandlingar. Våra hudterapeuter erbjuder skräddarsydda lösningar för hudföryngring, pigmentering, och mer. Boka en kostnadsfri konsultation idag för att uppleva den bästa IPL behandlingen i Stockholm.';
$seo_keywords = 'IPL ehandling, Intensivt Pulserande Ljus, IPL Stockholm, Vad är IPL?';

$seo_image = '/images/treatments/large/ipl.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/behandlingar.php'),
    new PathSegment('IPL', '/behandlingar/ipl/'),
);

$model = new Service(
    title: 'IPL behandling',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Vi erbjuder den bästa IPL-behandlingen för effektiv hudföryngring i Stockholm. Vår expertis och avancerade teknik garanterar resultat som förbättrar hudens utseende och kvalitet. Oavsett om du söker permanenta lösningar för pigmentfläckar, ytliga kärl eller ojämn hudton, är vår IPL-behandling anpassad för att möta dina behov.</p>',
    image_small: 'bilder/behandlingar/358x274/ipl.webp',
    image_large: 'bilder/behandlingar/424x456/ipl.webp',
    image_alt: 'IPL',
    image_title: 'IPL',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=ipl',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '2595 kr',
            savings: null,
            booking_url: null,
            booking_url_label:null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '6995 kr',
            savings: 'Spara 790 kr',
            booking_url: null,
            booking_url_label:null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '9995 kr',
            savings: 'Spara 2980 kr',
            booking_url: null,
            booking_url_label:null,
            booking_url_title: null,
        )
    ),
);

$floating_box = 'Effektiv ljusbehandling för en rad olika hudproblem såsom pigmenteringar, ytliga blodkärl och rosacea.';

$nav_buttons = array(
    'about' => 'Om IPL',
    'preparing' => 'Förberedelser',
    'process' => 'Processen',
    'types' => 'Typer',
    'treatment-areas' => 'Områden',
    'aftercare' => 'Eftervård',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister',
    'service-brands' => 'Märken',
);

$description_title = 'Vad är IPL?';
$description_text = '<p class="p200">IPL, som står för Intensivt Pulserande Ljus, är en ljusbaserad behandlingsmetod som används för att förbättra hudens färg och textur. Behandlingen använder ljuspulser som tränger igenom huden och behandlar olika tillstånd genom att rikta in sig på melanin i pigmentfläckar och hemoglobin i blodkärl. Denna teknik är särskilt effektiv för att reducera ytliga blodkärl, pigmentfläckar och symtom på rosacea.</p>
    <p class="p200 mt-m">IPL-teknologin är mångsidig och kan anpassas efter kundens individuella hudförhållanden, vilket gör det möjligt att behandla en rad hudproblem med precision. Behandlingen är vanligtvis skonsam med få biverkningar, och kunder kan återgå till sina normala aktiviteter kort efter en behandling. Det är en populär behandlingsmetod för att främja en mer jämn hudton, minska rödhet och bruna fläckar, samt att förbättra hudens övergripande utseende.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför behandling med IPL',
        image_small: '/bilder/process/358x272/ipl-forberedelser.webp',
        image_large: '/bilder/process/872x456/ipl-forberedelser.webp',
        image_alt: 'Förberedelser inför behandling med IPL',
        image_title: 'Förberedelser inför behandling med IPL',
        content: '<p class="p200">Inför en IPL behandling är det viktigt att följa några grundläggande steg för att säkerställa att din hud är i bästa möjliga skick och redo för behandlingen. En konsultation med en erfaren hudterapeut är det första steget, där huden noggrant analyseras och en individuell behandlingsplan utformas för att uppnå optimala resultat med IPL-tekniken.</p>
        <p class="p200 mt-m">För att förbereda huden bör du undvika solning och inte använda självbrunande produkter (brun-utan-sol) minst två veckor före behandlingen för att minska risken för pigmentförändringar. IPL behandling kräver att huden är så naturligt i sin ton som möjligt för att ljuspulserna ska kunna rikta sig korrekt mot oönskade pigment eller blodkärl. Det är också viktigt att undvika produkter med retinol eller andra starka exfolierande ingredienser under veckan innan din behandling. Din hudterapeut kommer att informera dig om ytterligare förberedelser och ge dig råd om hur du bäst tar hand om din hud både före och efter din IPL behandling för att säkerställa en trygg behandling och effektiv läkning.</p>',
    ),
    'process' => new Article(
        title: 'Hur går en IPL behandling till?',
        image_small: '/bilder/process/358x272/ipl-process.webp',
        image_large: '/bilder/process/872x456/ipl-process.webp',
        image_alt: 'Hur går en IPL behandling till?',
        image_title: 'Hur går en IPL behandling till?',
        content: '<p class="p200">IPL behandling är en effektiv metod för hudföryngring och korrigering av olika hudproblem såsom pigmentfläckar, ytliga blodkärl och rosacea. När du anländer till en av våra kliniker, kommer din hud att rengöras grundligt för att avlägsna makeup och orenheter. Därefter appliceras ett särskilt skydd på dina ögon för att säkerställa att de inte utsätts för det intensiva ljuset.</p>
        <p class="p200 mt-m">Vår IPL-enhet justeras sedan för att anpassa ljuspulsernas intensitet och våglängd beroende på ditt specifika hudtillstånd och behandlingsområde. Under behandlingen avges korta, intensiva pulser av ljus som tränger in i huden. Dessa ljuspulser riktar in sig på pigmentfläckar, blodkärl och rodnaden som omvandlar ljusenergin till värme, vilket bryter ner det oönskade pigmentet eller ta bort blodkärlen utan att skada den omgivande huden.</p>
        <p class="p200 mt-m">Efter behandlingen kan du uppleva en viss rodnad och värme i huden, liknande en mild solbränna, men detta är vanligt och bör avta inom kort. Resultaten av IPL-behandlingen utvecklas över tid, och du kan förvänta dig att se en gradvis förbättring av hudens utseende med minskning av ojämnheter, en jämnare hudton och en övergripande förbättrad hudkvalitet. Efter behandlingen kommer din hudterapeut att ge dig rekommendationer för eftervård för att maximera resultatet och främja en snabb läkning.</p>',
    ),
);

$types_title = 'Hudproblem som behandlas med IPL';
$types_description = 'IPL (Intensivt Pulserande Ljus) är en mångsidig och effektiv behandlingsmetod som används för att adressera en rad olika hudproblem. Här kan du utforska de olika hudtillstånden som vi framgångsrikt behandlar med vår IPL-teknik.';
$types = array(
    new Service(
        title: 'IPL-behandling för Rosacea',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Effektiv behandling av rosacea med vår avancerade IPL-teknik. Genom att använda målinriktade ljuspulser kan vi mildra rodnad och andra symtom associerade med rosacea, vilket ger en jämnare hudton och en förbättrad hudkvalitet.',
        image_small: 'bilder/problem/102x102/rosacea.webp',
        image_large: 'bilder/problem/200x200/rosacea.webp',
        image_alt: 'IPL-behandling för Rosacea',
        image_title: 'IPL-behandling för Rosacea',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av rosacea',
        booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_Rosacea',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för rosacea',
    ),

    new Service(
        title: 'IPL-behandling för Ytliga Blodkärl',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Effektiv IPL-behandling för att minska synligheten av ytliga blodkärl. Denna behandling används för att selektivt behandla de drabbade blodkärlen, vilket resulterar i en klarare och mer enhetlig hudton.',
        image_small: 'bilder/problem/102x102/ytliga-blodkarl.webp',
        image_large: 'bilder/problem/200x200/ytliga-blodkarl.webp',
        image_alt: 'IPL-behandling för Ytliga Blodkärl',
        image_title: 'IPL-behandling för Ytliga Blodkärl',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av ytliga blodkärl',
        booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för ytliga blodkärl',
    ),

    new Service(
        title: 'IPL-behandling för Pigmentfläckar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Minska och ta bort pigmentfläckar med vår IPL-behandling. Denna metod är idealisk för att effektivt och målinriktat reducera mörka fläckar och ojämnheter i hudtonen, vilket ger en jämnare hudton.',
        image_small: 'bilder/problem/102x102/pigmentflackar.webp',
        image_large: 'bilder/problem/200x200/pigmentflackar.webp',
        image_alt: 'IPL-behandling för Pigmentfläckar',
        image_title: 'IPL-behandling för Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för pigmentfläckar',
    ),

    new Service(
        title: 'IPL-behandling för Melasma',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Behandla melasma effektivt med IPL. Vår behandling hjälper till att ljusa upp och jämna ut hudtonen genom att selektivt behandla de hyperpigmenterade områdena, vilket ger en märkbar förbättring i hudens utseende.',
        image_small: 'bilder/problem/102x102/melasma.webp',
        image_large: 'bilder/problem/200x200/melasma.webp',
        image_alt: 'IPL-behandling för Melasma',
        image_title: 'IPL-behandling för Melasma',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Melasma',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för IPL-behandling av melasma',
        booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_Melasma',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka IPL-behandling för melasma',
    ),

);

$treatment_areas_title = 'Behandlingsområden för IPL';
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
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'IPL hudföryngring - hela ansiktet',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/panna.webp',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'IPL - Panna',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Forehead',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av pannan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/nasa.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'IPL - Näsa',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/kinder.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'IPL - Kinder',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av kinderna'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/overlapp.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'IPL - Överläpp',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av överläppen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/haka.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'IPL - Haka',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Chin',
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
                image: '/bilder/omraden/92x92/hals.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'IPL - Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av halsen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/dekolletage.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'IPL - Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av dekolletaget'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hander.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'IPL - Händer',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_Hands',
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
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_1xZone',
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
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_2xZones',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2x zoner.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '60 min',
                price: '3595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '70 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=SKIP&area=IPL_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Att tänka på efter IPL behandling',
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
        label: 'Alma Rejuve DyeVL',
        image: 'images/brands/rejuve-dyevl.svg',
        image_alt: 'Alma Rejuve DyeVL',
        image_title: 'Alma Rejuve DyeVL',
    ),
    new Brand(
        label: 'Alma Harmony XL Pro',
        image: 'images/brands/alma-harmony-xl-pro.png',
        image_alt: 'Alma Harmony XL Pro',
        image_title: 'Alma Harmony XL Pro',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
        url_title: 'Rosacea resultat',
        image_alt: 'Rosacea resultat',
        image_title: 'Rosacea resultat',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">IPL ansikte före och efter</a>',
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
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        url_title: 'Akne resultat',
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
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
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
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
            text: '<p class="p200">IPL, eller Intensivt Pulsat Ljus, fungerar genom att använda ett brett spektrum av ljus för att målriktat behandla olika hudtillstånd. Till skillnad från laser som använder en specifik våglängd, skickar IPL ut ljus i flera våglängder som kan tränga igenom olika djup av huden. Detta gör IPL till en mångsidig behandling som kan anpassas för att adressera en rad olika hudproblem, inklusive pigmentfläckar, ytliga blodkärl, och hudföryngring genom att stimulera kollagenproduktionen.</p>'
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
            text: '<p class="p200">Om du tar mediciner som ökar din ljuskänslighet, även kända som fotosensibiliserande mediciner, är det viktigt att du informerar din behandlare om detta innan du genomgår en IPL-behandling. Fotosensibiliserande mediciner kan inkludera vissa typer av antibiotika, antiinflammatoriska läkemedel, och mediciner för aknebehandling såsom isotretinoin. Dessa mediciner kan öka risken för biverkningar från IPL-behandlingen, såsom brännskador eller pigmentförändringar.</p>'
        ),
    ),
);
$faq_view_more = 'Se alla frågor & svar';

$skin_guide_title = 'Hudguiden';
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
);
$skin_guide_view_more = 'Se alla artiklar';

$specialists_title = 'Våra hudterpaueter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

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

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="/behandlingar/service.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $model->image_large ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h500">
                            <?php echo $model->title ?>
                        </h2>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-m">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <div class="mt-m"><?php echo $floating_box ?></div>
                        <?php if (isset($model->procedures)) { ?>
                            <div id="floating-procedures" class="mt-xl">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="floating-procedure">
                                        <div class="p200">
                                            <?php echo $procedure->label ?>
                                        </div>
                                        <div class="floating-procedure-price">
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                                </div>
                                <div class="column">
                                    <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                                </div>
                            </div>
                        </div>
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
                        <?php echo $model->title ?>
                    </h1>
                    <?php if (isset($model->duration)) { ?>
                        <h3 class="mt-xs p200 l10n">Längd: <?php echo $model->duration ?></h3>
                    <?php } ?>
                    <?php if (strlen($model->content) > 0) { ?>
                        <div class="mt-xs"><?php echo $model->content ?></div>
                    <?php } ?>
                    <?php if (isset($model->procedures)) { ?>
                        <div class="procedures mt-xl">
                            <?php foreach ($model->procedures as $procedure) { ?>
                                <div class="procedure">
                                    <div class="p200"><?php echo $procedure->label ?></div>
                                    <div>
                                        <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                        <span class="p200"><?php echo $procedure->savings ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            </div>
                            <div class="column is-half">
                                <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
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
                            <?php echo $model->title ?>
                        </h1>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-xs">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-s"><?php echo $model->content ?></div>
                        <?php } ?>
                        <?php if (isset($model->procedures)) { ?>
                            <div class="mt-xl large-procedures flex-row">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="large-procedure">
                                        <div class="p200 l10n"><?php echo $procedure->label ?></div>
                                        <div>
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="mt-m mb-s is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
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
                            <?php foreach ($types as $service) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $service) { ?>
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
                                    <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl"><?php echo $treatment_area->title ?></h3>
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
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                        <div class="flex-row is-hidden-mobile">
                            <div class="step-buttons">
                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                    <?php icon('arrow-left') ?>
                                </button>
                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                    <?php icon('arrow-right') ?>
                                </button>
                            </div>
                        </div>
                    </div>
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
                <!--Hudguide-->
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specilaister"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>