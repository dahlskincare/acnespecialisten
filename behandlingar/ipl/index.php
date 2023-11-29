<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL för Blodkärl, Pigmentfläckar & Rosacea | Acnespecialisten';
$seo_description = 'Specialiserade på att behandla ytliga blodkärl, pigmentfläckar och rosacea, erbjuder AcneSpecialisten avancerade IPL-behandlingar. Denna ljusbaserade teknologi riktar sig selektivt mot hudens ojämnheter, reducerar synligheten av blodkärl, pigmentering och symtom på rosacea för en klarare och mer harmonisk hudton.';
$seo_keywords = 'IPL-behandling, ytliga blodkärl, pigmentfläckar, rosacea-behandling, ljusbaserad hudföryngring, hudjämnhetsförbättring, reducera rödhet, ljusa upp pigmentering, harmonisk hudton, avancerad hudvård';

$seo_image = 'images/treatments/large/ipl.jpg';


$model = new Service(
    title: 'IPL',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">IPL är en idealisk lösning för dig som söker en jämnare hudton genom att reducera pigmenteringar och ytliga blodkärl eller strävar efter att lindra symtomen på rosacea. Våra behandlingar är skräddarsydda och anpassade efter dina specifika hudbehov, och utformade för att effektivt stimulera hudens egna läkningsmekanismer och förbättra hudens övergripande kondition.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'IPL',
    image_title: 'IPL',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

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

$description_title = 'IPL - vad är det?';
$description_text = '<p class="p200">IPL, som står för Intensivt Pulserande Ljus, är en ljusbaserad behandlingsmetod som används för att förbättra hudens färg och textur utan kirurgi. Behandlingen innebär användning av ljuspulser som genomtränger huden och behandlar olika tillstånd genom att rikta in sig på melanin i pigmentfläckar och hemoglobin i blodkärl. Denna teknik är särskilt effektiv för att reducera ytliga blodkärl, pigmentfläckar och symtom på rosacea.</p>
    <p class="p200 mt-m">IPL-teknologin är mångsidig och kan anpassas efter patientens individuella hudförhållanden, vilket gör det möjligt att behandla en rad hudproblem med precision. Behandlingen är vanligtvis skonsam med få biverkningar, och patienter kan återgå till sina normala aktiviteter kort efter en session. Det är en populär behandlingsmetod för att främja en mer jämn hudton, minska rödhet och bruna fläckar, samt att förbättra hudens övergripande utseende.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför behandling med IPL',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför behandling med IPL',
        image_title: 'Förberedelser inför behandling med IPL',
        content: '<p class="p200">Inför en IPL-behandling är det viktigt att följa några grundläggande steg för att säkerställa att din hud är i bästa möjliga skick och redo för behandlingen. En konsultation med en erfaren hudterapeut är det första steget, där hudens kondition noggrant analyseras och en individuell behandlingsplan utformas för att uppnå optimala resultat med IPL-tekniken.</p>
        <p class="p200 mt-m">För att förbereda huden bör du undvika solning och inte använda självbrunande produkter minst två veckor före behandlingen för att minska risken för pigmentförändringar. IPL-behandling kräver att huden är så naturligt i sin ton som möjligt för att ljuspulserna ska kunna rikta sig korrekt mot oönskade pigment eller blodkärl. Det är också viktigt att undvika produkter med retinol eller andra starka exfolierande ingredienser under veckan innan din behandling. Din hudterapeut kommer att informera dig om ytterligare förberedelser och ge dig råd om hur du bäst tar hand om din hud både före och efter din IPL-session för att säkerställa en trygg behandling och effektiv läkning.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Steam'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraction'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Cleansing'
        ))
    ),
    'process' => new Article(
        title: 'Hur går en IPL behandling till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går en IPL behandling till?',
        image_title: 'Hur går en IPL behandling till?',
        content: '<p class="p200">IPL-behandling är en effektiv metod för hudföryngring och korrigering av olika hudproblem såsom pigmentfläckar, ytliga blodkärl och rosacea. När du anländer till vår klinik, kommer din hud att rengöras grundligt för att avlägsna makeup och orenheter. Därefter appliceras ett särskilt skydd på dina ögon för att säkerställa att de inte utsätts för det intensiva ljuset.</p>
        <p class="p200 mt-m">Vår IPL-enhet justeras sedan för att anpassa ljuspulsernas intensitet och våglängd beroende på ditt specifika hudtillstånd och behandlingsområde. Under behandlingen avges korta, intensiva pulser av ljus som tränger in i huden. Dessa ljuspulser målriktar pigmentfläckar, blodkärl eller hårfolliklar och omvandlar ljusenergin till värme, vilket bryter ner det oönskade pigmentet eller krymper blodkärlen utan att skada den omgivande huden.</p>
        <p class="p200 mt-m">Efter behandlingen kan du uppleva en viss rodnad och värme i huden, liknande en mild solbränna, men detta är vanligt och bör avta inom kort. Resultaten av IPL-behandlingen utvecklas över tid, och du kan förvänta dig att se en gradvis förbättring av hudens utseende med minskning av ojämnheter, en jämnare hudton och en övergripande förbättrad hudkvalitet. Efter behandlingen kommer din hudterapeut att ge dig rekommendationer för eftervård för att maximera resultatet och främja en snabb läkning.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Steam'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraction'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Cleansing'
        ))
    ),
);

$types_title = 'Hudproblem som behandlas med IPL';
$types_description = 'IPL (Intensivt Pulserande Ljus) är en mångsidig och effektiv behandlingsmetod som används för att adressera en rad olika hudproblem. Här kan du utforska de olika hudtillstånden som vi framgångsrikt behandlar med vår IPL-teknik.';
$types = array(
    new Service(
        title: 'IPL-behandling för Rosacea',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Effektiv behandling av rosacea med vår avancerade IPL-teknik. Genom att använda målinriktade ljuspulser kan vi mildra rodnad och andra symtom associerade med rosacea, vilket ger en jämnare hudton och en förbättrad hudkvalitet.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'IPL-behandling för Rosacea',
        image_title: 'IPL-behandling för Rosacea',
        consultation_url: 'konsultation-rosacea',
        consultation_url_label: 'Boka konsultation för IPL-behandling av rosacea',
        consultation_url_title: 'Boka konsultation för IPL-behandling av rosacea',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka IPL-behandling för rosacea',
        booking_url_title: 'Boka IPL-behandling för rosacea',
    ),

new Service(
        title: 'IPL-behandling för Ytliga Blodkärl',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Effektiv och skonsam IPL-behandling för att minska synligheten av ytliga blodkärl. Denna behandling används för att selektivt målriktad de drabbade blodkärlen, vilket resulterar i en klarare och mer enhetlig hudton.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'IPL-behandling för Ytliga Blodkärl',
        image_title: 'IPL-behandling för Ytliga Blodkärl',
        consultation_url: 'konsultation-ytliga-blodkarl',
        consultation_url_label: 'Boka konsultation för IPL-behandling av ytliga blodkärl',
        consultation_url_title: 'Boka konsultation för IPL-behandling av ytliga blodkärl',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka IPL-behandling för ytliga blodkärl',
        booking_url_title: 'Boka IPL-behandling för ytliga blodkärl',
    ),

new Service(
        title: 'IPL-behandling för Pigmentfläckar',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Minska och ljusa upp pigmentfläckar med vår IPL-behandling. Denna metod är idealisk för att effektivt målriktad och reducera mörka fläckar och ojämnheter i hudtonen, vilket ger en jämnare och mer strålande hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'IPL-behandling för Pigmentfläckar',
        image_title: 'IPL-behandling för Pigmentfläckar',
        consultation_url: 'konsultation-pigmentflackar',
        consultation_url_label: 'Boka konsultation för IPL-behandling av pigmentfläckar',
        consultation_url_title: 'Boka konsultation för IPL-behandling av pigmentfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka IPL-behandling för pigmentfläckar',
        booking_url_title: 'Boka IPL-behandling för pigmentfläckar',
    ),

new Service(
        title: 'IPL-behandling för Melasma',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Behandla melasma effektivt med IPL. Vår behandling hjälper till att ljusa upp och jämna ut hudtonen genom att selektivt behandla de hyperpigmenterade områdena, vilket ger en märkbar förbättring i hudens utseende.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'IPL-behandling för Melasma',
        image_title: 'IPL-behandling för Melasma',
        consultation_url: 'konsultation-melasma',
        consultation_url_label: 'Boka konsultation för IPL-behandling av melasma',
        consultation_url_title: 'Boka konsultation för IPL-behandling av melasma',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka IPL-behandling för melasma',
        booking_url_title: 'Boka IPL-behandling för melasma',
    ),

);

$treatment_areas_title = 'Behandlingsområden för IPL';
$treatment_areas_text = '<p class="p200">IPL (Intensivt Pulserande Ljus) är en flexibel behandlingsmetod som passar för en rad olika områden på kroppen, inklusive ansikte, hals, händer och bröst.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">IPL kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'IPL för Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'IPL för Panna',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av pannan'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'IPL för Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'IPL för Kinder',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av kinderna'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'IPL för Överläpp',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av överläppen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'IPL för Haka',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av hakan'
            ),
        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'Kropp',
        description: '<p class="p200">IPL kan behandla flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'IPL för Hals',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av halsen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'IPL för Dekolletage',
                duration: '40 min',
                price: '2295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av dekolletaget'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'IPL för Händer',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av händerna'
            ),
        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Behandlingen fungerar även utmärkt om du vill kombinera flera olika områden.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '1x zon',
                image_title: '1x zon',
                title: '1x zon',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 zon.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '2x zoner',
                image_title: '2x zoner',
                title: '2x zoner',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2x zoner.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '60 min',
                price: '3595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '70 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Efter IPL-behandling',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Efter IPL-behandling',
    image_title: 'Efter IPL-behandling',
    content: '<p class="p200">Eftervården efter en IPL-behandling är avgörande för att uppnå bästa resultat och säkerställa en effektiv läkningsprocess. Efter behandlingen kan det vara normalt att uppleva viss rodnad och svullnad i det behandlade området. Det är viktigt att du undviker att röra området med orena händer och att inte applicera makeup eller parfymerade produkter under de första 24 timmarna för att minimera risken för irritation eller infektioner.</p>
    <p class="p200 mt-m">Under de första dagarna efter behandlingen bör du undvika intensiv fysisk aktivitet, bastu och långa varma duschar som kan förvärra svullnad och irritation. Användning av solskydd är kritiskt; det är viktigt att regelbundet applicera en hög SPF för att skydda huden mot UV-strålning, vilket är särskilt viktigt för det behandlade området. Vi rekommenderar även att du använder milda och återfuktande hudvårdsprodukter utan starka ingredienser för att främja läkningsprocessen och upprätthålla hudens fuktbalans.</p>
    <p class="p200 mt-m">Se till att följa de specifika eftervårdsinstruktioner som din behandlare ger dig, och tveka inte att kontakta kliniken om du har frågor eller funderingar kring din eftervård. Beroende på din huds respons kan uppföljande behandlingar rekommenderas för att uppnå och underhålla önskade resultat.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för IPL';
$service_brands_text = '<p class="p200">Vi utför IPL med Alma Rejuve DyeVL, Alma Harmony XL, Photonova som är de bästa maskinerna på marknaden.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Rejuve DyeVL',
        image: 'images/brands/alma-rejuve-dyevl.svg',
        image_alt: 'Alma Rejuve DyeVL',
        image_title: 'Alma Rejuve DyeVL',
    ),
    new Brand(
        label: 'Alma Harmony XL Pro',
        image: 'images/brands/alma-harmony-xl-pro.svg',
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
        url: 'resultat/details-1',
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        url_title: 'Resultat',
        image_alt: 'Resultat',
        image_title: 'Resultat',
        age: 18,
        gender: 'Female',
        problem: 'Acne',
        type: 'Severe',
        treatment: new ResultTreatment(
            duration: '3 months',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Problem skin facials',
                    count: '3 times'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Product bundle for light acne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Patrick Minogue'
            ),
        )
    ),
    new ResultCustomer(
        url: 'resultat/details-1',
        image_before_small: 'https://via.placeholder.com/358x358.webm',
        image_after_small: 'https://via.placeholder.com/358x358.webm',
        image_before_large: 'https://via.placeholder.com/424x424.webm',
        image_after_large: 'https://via.placeholder.com/424x424.webm',
        url_title: 'Resultat',
        image_alt: 'Resultat',
        image_title: 'Resultat',
        age: 18,
        gender: 'Female',
        problem: 'Acne',
        type: 'Severe',
        treatment: new ResultTreatment(
            duration: '3 months',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Problem skin facials',
                    count: '3 times'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Product bundle for light acne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Patrick Minogue'
            ),
        )
    ),
);

$reviews_title = 'Omdömen';
$reviews = array(
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Got rid of my pigment spots on',
        text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
        signature: 'Emily'
    ),
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Got rid of my pigment spots on',
        text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
        signature: 'Emily'
    )
);
$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    'Vanliga Frågor' => array(
        new Question(
            title: 'Hur många IPL-behandlingar behövs vanligtvis?',
            text: 'Antalet IPL-behandlingar som krävs varierar beroende på individens specifika hudtillstånd och de mål som satts upp. Generellt sett kan man behöva 3-8 behandlingar med ungefär 4 veckors mellanrum för att uppnå optimala resultat. En individuell behandlingsplan upprättas under din initiala konsultation baserat på dina unika hudbehov.'
        ),
        new Question(
            title: 'Kan mina hudproblem återkomma efter en IPL-behandling?',
            text: 'IPL-behandlingar är mycket effektiva för att adressera befintliga hudproblem som pigmentfläckar, ytliga blodkärl och rosacea. Men det är viktigt att notera att nya hudproblem kan uppstå på grund av faktorer som åldrande och solskador. En regelbunden hudvårdsrutin och skydd mot solen är viktigt för att underhålla resultaten, och ytterligare behandlingar kan behövas för att upprätthålla effekterna över tid.'
        ),
        new Question(
            title: 'Hur snabbt kan jag se resultat efter en IPL-behandling?',
            text: 'Resultaten från en IPL-behandling kan variera från person till person. Många upplever en synlig förbättring redan efter den första behandlingen, men de fullständiga effekterna blir ofta tydligare efter en serie behandlingar. Förändringar i hudens utseende och kvalitet fortsätter vanligtvis att utvecklas och förbättras under veckorna mellan behandlingarna och efter behandlingsserien är avslutad.'
        ),
    ),
    'Kontraindikationer' => array(
        new Question(
            title: 'Graviditet och amning',
            text: 'IPL-behandlingar rekommenderas inte under graviditet eller amning då säkerheten för dessa tillstånd inte är tillräckligt studerad.'
        ),
        new Question(
            title: 'Ljuskänsliggörande mediciner',
            text: 'Personer som tar mediciner som ökar hudens ljuskänslighet, som vissa antibiotika eller retinoider, bör undvika IPL-behandlingar.'
        ),
        new Question(
            title: 'Aktiv solbränna eller nyligen solariumanvändning',
            text: 'IPL-behandlingar är inte lämpliga för nyligen solbränd hud eller hud som exponerats för UV-strålar i solarium.'
        ),
        new Question(
            title: 'Historik av keloidärrbildning eller onormal ärrbildning',
            text: 'Personer med en historik av keloider eller onormal ärrbildning bör undvika IPL-behandlingar på grund av risken för ytterligare ärrbildning.'
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

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
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
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-m"><?php echo $model->content ?></div>
                        <?php } ?>
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
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                            </picture>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="View all questions"><?php echo $faq_view_more ?></a>
                </section>
                <section id="skin-guide" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $skin_guide_title ?></h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="View all articles"><?php echo $faq_view_more ?></a>
                </section>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="View all specialists"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla märken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>