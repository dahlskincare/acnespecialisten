<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Alma Rejuve Dye-VL: Specialiserad IPL-teknik för Hudförbättring | AcneSpecialisten';
$seo_description = 'På AcneSpecialisten introducerar vi Alma Rejuve Dye-VL, en avancerad version av IPL-tekniken, specialdesignad för att effektivt behandla pigmentfläckar, ytliga blodkärl och rosacea. Dye-VL-tekniken använder en unik ljusvåglängd som är optimal för att selektivt rikta sig mot och behandla hudens ojämnheter, vilket leder till en betydande förbättring i hudens ton och textur för en klarare och mer enhetlig hudton.';
$seo_keywords = 'Alma Rejuve Dye-VL, specialiserad IPL-behandling, pigmentfläckar behandling, reducera ytliga blodkärl, rosacea-behandling, Dye-VL teknik, hudförbättring, avancerad hudföryngring, jämn hudton, AcneSpecialisten';

$seo_image = 'images/treatments/large/alma-rejuve-dye-vl.jpg';


$model = new Service(
    title: 'Alma Rejuve Dye-VL',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Alma Rejuve Dye-VL är den optimala lösningen för dig som önskar en jämnare hudton och vill reducera pigmenteringar, ytliga blodkärl eller lindra symtomen på rosacea. Denna avancerade IPL-teknik är skräddarsydd för att passa dina specifika hudbehov. Med sin unika Dye-VL-teknologi stimulerar Alma Rejuve effektivt hudens naturliga läkningsprocesser och bidrar till en markant förbättring av hudens övergripande kvalitet och utseende.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'IPL',
    image_title: 'IPL',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Rejuve',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=almarejuve',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Modern och effektiv IPL-maskin för en lång rad hudproblem.';

$nav_buttons = array(
    'about' => 'Om Rejuve Dye-VL',
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

$description_title = 'Vad är Alma Rejuve Dye-VL?';
$description_text = '<p class="p200">Alma Rejuve Dye-VL representerar en specialiserad form av IPL (Intensivt Pulserande Ljus)-teknik, utvecklad för att förbättra hudens ton och textur. Denna avancerade version av IPL använder en unik Dye-VL-teknologi, vilken är optimal för att effektivt behandla hudtillstånd genom att målinrikta melanin i pigmentfläckar och hemoglobin i blodkärl. Detta gör Dye-VL särskilt effektivt för att reducera pigmentfläckar, ytliga blodkärl och symtom på rosacea.</p>
    <p class="p200 mt-m">Alma Rejuve Dye-VL skiljer sig från traditionella IPL-behandlingar genom sin förmåga att mer specifikt och effektivt behandla olika hudproblem. Med sin anpassningsbara teknologi kan den skräddarsys för individuella hudförhållanden, vilket ger en precis och skonsam behandling med minimala biverkningar. Patienter kan återgå till sina dagliga aktiviteter snabbt efter behandlingen. Alma Rejuve Dye-VL är idealisk för att uppnå en jämnare hudton, minska synliga hudproblem och förbättra den övergripande hudkvaliteten.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Rejuve Dye-VL',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför Rejuve Dye-VL',
        image_title: 'Förberedelser inför Rejuve Dye-VL',
        content: '<p class="p200">Förberedelserna inför en Rejuve Dye-VL-behandling är avgörande för att din hud ska vara i optimalt skick för behandlingen. Det första steget är en konsultation med en erfaren hudterapeut, där din hudtyp och specifika behov noggrant analyseras. Här skapas en personligt anpassad behandlingsplan med Dye-VL-tekniken för att säkerställa bästa möjliga resultat.</p>
        <p class="p200 mt-m">För att förbereda din hud, bör du undvika solning och användning av självbrunande produkter minst två veckor innan behandlingen. Detta minskar risken för pigmentförändringar eftersom Dye-VL-behandlingen kräver att huden är i sin mest naturliga ton för effektivt riktad behandling av pigment och blodkärl. Undvik även hudvårdsprodukter som innehåller kraftiga exfolierande ingredienser veckan före din behandling. Din hudterapeut kommer att ge dig detaljerade instruktioner om ytterligare förberedelser och råd om hur du tar hand om din hud både före och efter din Rejuve Dye-VL-session, för att garantera en säker behandling och effektiv läkningsprocess.</p>',
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
        title: 'Hur går en Rejuve Dye-VL behandling till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går en Rejuve Dye-VL behandling till?',
        image_title: 'Hur går en Rejuve Dye-VL behandling till?',
        content: '<p class="p200">Rejuve Dye-VL-behandling är en framstående metod för att förbättra hudens utseende, speciellt anpassad för att korrigera problem som pigmentfläckar, ytliga blodkärl och rosacea. När du anländer till vår klinik börjar vi med att rengöra din hud grundligt för att avlägsna alla spår av makeup och orenheter. Ett speciellt skydd placeras över dina ögon för att skydda dem från det intensiva ljuset under behandlingen.</p>
        <p class="p200 mt-m">Vår Rejuve Dye-VL-enhet justeras sedan noggrant för att matcha ljuspulsernas intensitet och våglängd med ditt unika hudtillstånd och de specifika områdena som ska behandlas. Behandlingen involverar korta, intensiva ljuspulser som tränger in i huden. Dessa pulser är precist riktade för att behandla pigmentfläckar och blodkärl, där ljusenergin omvandlas till värme för att effektivt bryta ner det oönskade pigmentet eller minska blodkärlen, utan att skada omgivande hud.</p>
        <p class="p200 mt-m">Efter behandlingen är det normalt att känna en lätt rodnad och uppleva en värmande känsla i huden, liknande en mild solbränna. Dessa symptom är övergående och avtar vanligtvis snabbt. Resultaten från en Rejuve Dye-VL-behandling utvecklas gradvis. Du kan förvänta dig att se en kontinuerlig förbättring av din hud, med minskade ojämnheter, en jämnare hudton och förbättrad övergripande hudkvalitet. Efter behandlingen ger din hudterapeut dig skräddarsydda råd för eftervård för att maximera resultatet och främja snabb läkning.</p>',
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

$types_title = 'Hudtillstånd behandlade med Rejuve Dye-VL';
$types_description = 'Alma Rejuve Dye-VL erbjuder en högspecialiserad form av IPL (Intensivt Pulserande Ljus)-behandling, anpassad för att effektivt hantera en mängd olika hudproblem. Upptäck vilka hudtillstånd som kan förbättras och behandlas framgångsrikt med vår avancerade Dye-VL-teknologi.';
$types = array(
    new Service(
        title: 'Rejuve Dye-VL behandling för Rosacea',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Utnyttja kraften i Rejuve Dye-VL för att effektivt behandla rosacea. Denna specialiserade IPL-metod fokuserar på att mildra rodnad och andra symtom associerade med rosacea, för att skapa en jämnare hudton och förbättra hudens kvalitet.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Rejuve Dye-VL behandling för Rosacea',
        image_title: 'Rejuve Dye-VL behandling för Rosacea',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Rejuve',
        consultation_url_label: 'Boka konsultation för Rejuve Dye-VL behandling av rosacea',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av rosacea',
        booking_url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=Problem_Rosacea',
        booking_url_label: 'Boka Rejuve Dye-VL behandling för rosacea',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för rosacea',
    ),

    new Service(
        title: 'Rejuve Dye-VL behandling för Ytliga Blodkärl',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Rejuve Dye-VL erbjuder en skonsam och effektiv lösning för att minska synligheten av ytliga blodkärl. Denna behandling är idealisk för att selektivt målriktad och behandla drabbade områden, vilket resulterar i en klarare och jämnare hudton.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Rejuve Dye-VL behandling för Ytliga Blodkärl',
        image_title: 'Rejuve Dye-VL behandling för Ytliga Blodkärl',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Rejuve',
        consultation_url_label: 'Boka konsultation för Rejuve Dye-VL behandling av ytliga blodkärl',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av ytliga blodkärl',
        booking_url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka Rejuve Dye-VL behandling för ytliga blodkärl',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för ytliga blodkärl',
    ),

    new Service(
        title: 'Rejuve Dye-VL behandling för Pigmentfläckar',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Använd fördelarna med Rejuve Dye-VL för att effektivt minska och ljusa upp pigmentfläckar. Denna metod är idealisk för att målriktat behandla mörka fläckar och ojämnheter i hudtonen, vilket ger en jämnare och strålande hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Rejuve Dye-VL behandling för Pigmentfläckar',
        image_title: 'Rejuve Dye-VL behandling för Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Rejuve',
        consultation_url_label: 'Boka konsultation för Rejuve Dye-VL behandling av pigmentfläckar',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka Rejuve Dye-VL behandling för pigmentfläckar',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för pigmentfläckar',
    ),

    new Service(
        title: 'Rejuve Dye-VL behandling för Melasma',
        duration: '30 minuter',
        price: '1995 kr',
        content: 'Med Rejuve Dye-VL kan du effektivt behandla melasma. Denna teknik hjälper till att ljusa upp och jämna ut hudtonen genom att selektivt rikta in sig på hyperpigmenterade områden, vilket bidrar till en märkbar förbättring av hudens utseende.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Rejuve Dye-VL behandling för Melasma',
        image_title: 'Rejuve Dye-VL behandling för Melasma',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Rejuve',
        consultation_url_label: 'Boka konsultation för Rejuve Dye-VL behandling av melasma',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av melasma',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Rejuve Dye-VL behandling för melasma',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för melasma',
    ),

);

$treatment_areas_title = 'Behandlingsområden för Rejuve Dye-VL';
$treatment_areas_text = '<p class="p200">Rejuve Dye-VL, en avancerad form av IPL (Intensivt Pulserande Ljus), erbjuder mångsidig behandling för olika områden på kroppen. Denna specialiserade teknik är särskilt effektiv för ansikte, hals, händer och bröst, där den kan målriktat behandla hudproblem som pigmentfläckar, ytliga blodkärl och ojämn hudton.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Rejuve Dye-VL kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Rejuve Dye-VL för Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'Rejuve Dye-VL för Panna',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Forehead',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av pannan'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Rejuve Dye-VL för Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Rejuve Dye-VL för Kinder',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av kinderna'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Rejuve Dye-VL för Överläpp',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av överläppen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Rejuve Dye-VL för Haka',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Chin',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av hakan'
            ),
        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'Kropp',
        description: '<p class="p200">Rejuve Dye-VL kan behandla flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Rejuve Dye-VL för Hals',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av halsen'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Rejuve Dye-VL för Dekolletage',
                duration: '40 min',
                price: '2295 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av dekolletaget'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Rejuve Dye-VL för Händer',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_Hands',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av händerna'
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
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_2xZones',
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
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_2xAreas',
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
                url: 'https://acnespecialisten.se/book?flow=almarejuve&skipable_problem=SKIP&area=IPL_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Efter behandling med Rejuve Dye-VL',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Efter behandling med Rejuve Dye-VL',
    image_title: 'Efter behandling med Rejuve Dye-VL',
    content: '<p class="p200">Eftervården är en viktig del av processen efter en Rejuve Dye-VL-behandling för att uppnå optimala resultat och en smidig läkningsprocess. Det är vanligt att uppleva en viss rodnad och svullnad i det behandlade området direkt efter sessionen. För att minimera risken för irritation och infektioner är det viktigt att inte röra området med smutsiga händer och att undvika att applicera makeup eller parfymerade produkter under de första 24 timmarna.</p>
    <p class="p200 mt-m">Under de första dagarna efter din Alma Rejuve Dye-VL-behandling är det rekommenderat att undvika intensiva fysiska aktiviteter, bastu och långa varma duschar, eftersom dessa kan öka svullnad och irritation. Regelbunden användning av solskydd med hög SPF är essentiellt för att skydda huden mot UV-strålning, särskilt på de behandlade områdena. Vi råder också att använda milda och återfuktande hudvårdsprodukter utan starka ingredienser för att främja läkningsprocessen och bibehålla hudens fuktbalans.</p>
    <p class="p200 mt-m">Det är viktigt att du följer de specifika eftervårdsinstruktionerna som ges av din behandlare noggrant. Om du har några frågor eller oro kring din eftervård, tveka inte att kontakta kliniken. Ytterligare behandlingar kan rekommenderas baserat på din huds respons för att uppnå och bibehålla de bästa resultaten från din behandling med Alma Rejuve Dye-VL.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Andra märken för IPL';
$service_brands_text = '<p class="p200">Utöver Rejuve DyeVL använder vi även Alma Harmony XL och Photonova som är de bästa maskinerna på marknaden för IPL.</p>';
$service_brands = array(

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
            duration: 'Efter 3 månaders behandling av <a href="/problme/akne/aknebehandling" title="akne">akne</a>',
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
            duration: 'Efter 2 månaders behandling av <a href="/problme/akne/aknebehandling" title="akne">akne</a>',
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
        image_alt: 'Rosacea resultat',
        image_title: 'Rosacea resultat',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: 'Efter 4 månaders behandling av <a href="/problme/rosacea/rosaceabehandling" title="akne">akne</a>',
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
            title: 'Hur många behandlingar med Rejuve Dye-VL krävs vanligtvis?',
            text: 'Antalet behandlingar med Rejuve Dye-VL som behövs varierar beroende på individens unika hudtillstånd och de önskade målen. Vanligtvis kan det krävas mellan 3-8 sessioner med cirka 4 veckors mellanrum för att uppnå bästa möjliga resultat. En skräddarsydd behandlingsplan utformas under din initiala konsultation, anpassad efter dina specifika hudbehov.'
        ),
        new Question(
            title: 'Kan hudproblem återkomma efter en Rejuve Dye-VL-behandling?',
            text: 'Även om Rejuve Dye-VL är effektiv för att behandla befintliga hudproblem som pigmentfläckar, ytliga blodkärl och rosacea, kan nya problem uppstå på grund av externa faktorer såsom åldrande och solskador. Regelbunden hudvård och solskydd är avgörande för att underhålla resultaten. Ytterligare Rejuve Dye-VL-behandlingar kan rekommenderas för att bevara effekterna över tid.'
        ),
        new Question(
            title: 'Hur snabbt ser jag resultat efter en Rejuve Dye-VL-behandling?',
            text: 'Resultaten från en Rejuve Dye-VL-behandling varierar mellan individer. Många ser en förbättring efter den första behandlingen, men de mest påtagliga resultaten framträder ofta efter en fullständig serie av behandlingar. Förbättringar i hudens utseende och kvalitet fortsätter vanligtvis att utvecklas både under behandlingsförloppet och efter avslutade sessioner.'
        ),
    )
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="Se alla frågor"><?php echo $faq_view_more ?></a>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specialister"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>