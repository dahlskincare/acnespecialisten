<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL hudföryngring - Alma Rejuve Dye-VL';
$seo_description = 'En avancerad version av IPL-tekniken, utvecklad för att effektivt behandla pigmentfläckar, ytliga blodkärl och rosacea med en unik ljusvåglängd.';
$seo_keywords = 'ipl hudföryngring, ipl hudföryngring före efter';

$seo_image = '/images/treatments/large/alma-rejuve-dye-vl.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Rejuve Dye-VL', '/varumarken/rejuve-dye-vl/'),
);

$model = new Service(
    title: 'IPL för hudföryngring - Rejuve Dye-VL',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Alma Rejuve Dye-VL är den optimala lösningen för dig som önskar en jämnare hudton och vill reducera pigmenteringar, ytliga blodkärl eller lindra symtomen på rosacea. Denna avancerade IPL-teknik är skräddarsydd för att passa dina specifika hudbehov.</p>',
    image_small: 'bilder/varumarken/358x274/alma-rejuve-dye-vl.webp',
    image_large: 'bilder/varumarken/424x456/alma-rejuve-dye-vl.webp',
    image_alt: 'IPL',
    image_title: 'IPL',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Rejuve',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=almarejuve',
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

$floating_box_title = "Rejuve Dye-VL";
$floating_box = 'Modern och effektiv IPL-maskin för en lång rad hudproblem.';

$description_title = 'Vad är Alma Rejuve Dye-VL?';
$description_text = '<p class="p200">Alma Rejuve Dye-VL representerar en specialiserad form av IPL (Intensivt Pulserande Ljus)-teknik, utvecklad för att förbättra hudens ton och textur. Denna avancerade version av IPL använder en unik Dye-VL-teknologi, vilken är optimal för att effektivt behandla hudtillstånd genom att målinrikta melanin i pigmentfläckar och hemoglobin i blodkärl. Detta gör Dye-VL särskilt effektivt för att reducera pigmentfläckar, ytliga blodkärl och symtom på rosacea.</p>
    <p class="p200 mt-m">Alma Rejuve Dye-VL skiljer sig från traditionella IPL-behandlingar genom sin förmåga att mer specifikt och effektivt behandla olika hudproblem. Med sin anpassningsbara teknologi kan den skräddarsys för individuella hudförhållanden, vilket ger en precis och skonsam behandling med minimala biverkningar. Kunden kan återgå till sina dagliga aktiviteter snabbt efter behandlingen. Alma Rejuve Dye-VL är idealisk för att uppnå en jämnare hudton, minska synliga hudproblem och förbättra den övergripande hudkvaliteten.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går en behandling till?',
        image_small: '/bilder/process/358x272/rejuve-process.webp',
        image_large: '/bilder/process/872x456/rejuve-process.webp',
        image_alt: 'Hur går en Rejuve Dye-VL behandling till?',
        image_title: 'Hur går en Rejuve Dye-VL behandling till?',
        content: '<p class="p200">När du anländer till en av våra kliniker börjar vi med att rengöra din hud grundligt för att avlägsna alla spår av smink och orenheter. Du får ett par skyddsglasögon som skyddar ögonen från det intensiva ljuset under behandlingen.</p>
        <p class="p200 mt-m">Vår Rejuve Dye-VL-enhet justeras sedan noggrant för att matcha ljuspulsernas intensitet och våglängd med ditt unika hudtillstånd och de specifika områdena som ska behandlas. Behandlingen involverar korta, intensiva ljuspulser som tränger in i huden. Dessa pulser är precist riktade för att behandla pigmentfläckar och blodkärl, där ljusenergin omvandlas till värme för att effektivt bryta ner det oönskade pigmentet eller minska blodkärlen, utan att skada omgivande hud.</p>
        <p class="p200 mt-m">Efter behandlingen är det normalt att känna en lätt rodnad och uppleva en värmande känsla i huden, liknande en mild solbränna. Dessa symptom är övergående och avtar vanligtvis snabbt. Resultaten från en Rejuve Dye-VL-behandling utvecklas gradvis. Du kan förvänta dig att se en kontinuerlig förbättring av din hud, med minskade ojämnheter, en jämnare hudton och förbättrad övergripande hudkvalitet. Efter behandlingen ger din hudterapeut dig skräddarsydda råd för eftervård för att maximera resultatet och främja snabb läkning.</p>',
    ),
);

$types_title = 'Hudtillstånd som behandlas';
$types_description = '';
$types = array(
    new Service(
        title: 'Rejuve Dye-VL mot Rosacea',
        duration: '50 min',
        price: '2595 kr',
        content: 'Denna specialiserade IPL-metod fokuserar på att mildra rodnad och andra symtom associerade med rosacea, för att skapa en jämnare hudton och förbättra hudens kvalitet.',
        image_small: 'bilder/hudproblem/102x102/rosacea.webp',
        image_large: 'bilder/hudproblem/200x200/rosacea.webp',
        image_alt: 'Rejuve Dye-VL behandling för Rosacea',
        image_title: 'Rejuve Dye-VL behandling för Rosacea',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Rejuve',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av rosacea',
        booking_url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=Problem_Rosacea&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för rosacea',

        url: '/ipl-rosacea.php',
        url_label: 'Läs mer om IPL mot rosacea',
        url_title: 'Läs mer om IPL mot rosacea',
    ),

    new Service(
        title: 'Rejuve Dye-VL mot Ytliga Blodkärl',
        duration: '20 - 50 min',
        price: 'Från 995 kr',
        content: 'En skonsam och effektiv lösning för att minska synligheten av ytliga blodkärl. Denna behandling är idealisk för att selektivt målriktad och behandla drabbade områden, vilket resulterar i en klarare och jämnare hudton.',
        image_small: 'bilder/hudproblem/102x102/ytliga-blodkarl.webp',
        image_large: 'bilder/hudproblem/200x200/ytliga-blodkarl.webp',
        image_alt: 'Rejuve Dye-VL behandling för Ytliga Blodkärl',
        image_title: 'Rejuve Dye-VL behandling för Ytliga Blodkärl',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Rejuve',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av ytliga blodkärl',
        booking_url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för ytliga blodkärl',

        url: '/ipl-ytliga-blodkarl.php',
        url_label: 'Läs mer om IPL mot ytliga blodkärl',
        url_title: 'Läs mer om IPL mot ytliga blodkärl',
    ),

    new Service(
        title: 'Rejuve Dye-VL mot Pigmentfläckar',
        duration: '20 - 50 min',
        price: 'Från 995 kr',
        content: 'Effektiv minskning och uppljusning av pigmentfläckar. Denna metod är idealisk för att målriktat behandla mörka fläckar och ojämnheter i hudtonen, vilket ger en jämnare och strålande hud.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Rejuve Dye-VL behandling för Pigmentfläckar',
        image_title: 'Rejuve Dye-VL behandling för Pigmentfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Rejuve',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av pigmentfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för pigmentfläckar',

        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om IPL mot pigmentfläckar',
        url_title: 'Läs mer om IPL mot pigmentfläckar',
    ),

    new Service(
        title: 'Rejuve Dye-VL mot Melasma',
        duration: '20 - 50 min',
        price: 'Från 995 kr',
        content: 'Effektivt behandling melasma. Denna teknik hjälper till att ljusa upp och jämna ut hudtonen genom att selektivt rikta in sig på hyperpigmenterade områden, vilket bidrar till en märkbar förbättring av hudens utseende.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Rejuve Dye-VL behandling för Melasma',
        image_title: 'Rejuve Dye-VL behandling för Melasma',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Rejuve',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för Rejuve Dye-VL behandling av melasma',
        booking_url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Rejuve Dye-VL behandling för melasma',

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
        title: 'Ansikte',
        description: '<p class="p200">Rejuve Dye-VL kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/panna.svg',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'Panna',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Forehead',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av pannan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/nasa.svg',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Nose',
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
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av kinderna'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/overlapp.svg',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av överläppen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/haka.svg',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Chin',
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
        title: 'Kropp',
        description: '<p class="p200">Rejuve Dye-VL kan behandla flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av halsen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '40 min',
                price: '2295 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av dekolletaget'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_Hands',
                url_label: 'Boka',
                url_title: 'Boka tid för Rejuve Dye-VL-behandling av händerna'
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
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_1xArea',
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
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_2xAreas',
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
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '1x zon',
                image_title: '1x zon',
                title: '1x zon',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_1xZone',
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
                url: 'https://boka.acnespecialisten.se?flow=almarejuve&skipable_problem=SKIP&area=IPL_2xZones',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2x zoner.'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/rejuve-forberedelser.webp',
        image_large: '/bilder/process/872x456/rejuve-forberedelser.webp',
        image_alt: 'Förberedelser inför Rejuve Dye-VL',
        image_title: 'Förberedelser inför Rejuve Dye-VL',
        content: '<p class="p200">Förberedelserna inför en Rejuve Dye-VL-behandling är avgörande för att din hud ska vara i optimalt skick för behandlingen. Det första steget är en konsultation med en erfaren hudterapeut, där din hudtyp och specifika behov noggrant analyseras. Här skapas en personligt anpassad behandlingsplan med Dye-VL-tekniken för att säkerställa bästa möjliga resultat.</p>
        <p class="p200 mt-m">För att förbereda din hud, bör du undvika solning och användning av självbrunande produkter minst två veckor innan behandlingen. Detta minskar risken för pigmentförändringar eftersom Dye-VL-behandlingen kräver att huden är i sin mest naturliga ton för effektivt riktad behandling av pigment och blodkärl. Undvik även hudvårdsprodukter som innehåller kraftiga exfolierande ingredienser veckan före din behandling. Din hudterapeut kommer att ge dig detaljerade instruktioner om ytterligare förberedelser och råd om hur du tar hand om din hud både före och efter din Rejuve Dye-VL-session, för att garantera en säker behandling och effektiv läkningsprocess.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/rejuve-eftervard.webp',
        image_large: '/bilder/process/872x456/rejuve-eftervard.webp',
        image_alt: 'Eftervår för Rejuve Dye-VL',
        image_title: 'Eftervår för Rejuve Dye-VL',
        content: '<p class="p200">Eftervården är en viktig del av processen efter en Rejuve Dye-VL-behandling för att uppnå optimala resultat och en smidig läkningsprocess. Det är vanligt att uppleva en viss rodnad och svullnad i det behandlade området direkt efter sessionen. För att minimera risken för irritation och infektioner är det viktigt att inte röra området med smutsiga händer och att undvika att applicera smink eller irriterande produkter under de första 24 timmarna.</p>
        <p class="p200 mt-m">Under de första dagarna efter din Alma Rejuve Dye-VL-behandling är det rekommenderat att undvika intensiva fysiska aktiviteter, bastu och långa varma duschar, eftersom dessa kan öka svullnad och irritation. Regelbunden användning av solskydd med hög SPF är essentiellt för att skydda huden mot UV-strålning, särskilt på de behandlade områdena. Vi råder också att använda milda och återfuktande hudvårdsprodukter utan starka ingredienser för att främja läkningsprocessen och bibehålla hudens fuktbalans.</p>
        <p class="p200 mt-m">Det är viktigt att du följer de specifika eftervårdsinstruktionerna som ges av din behandlare noggrant. Om du har några frågor eller oro kring din eftervård, tveka inte att kontakta kliniken. Ytterligare behandlingar kan rekommenderas baserat på din huds respons för att uppnå och bibehålla de bästa resultaten från din behandling med Alma Rejuve Dye-VL.</p>',
    ),
);

$service_brands_title = 'Andra märken för IPL';
$service_brands_text = '<p class="p200">Utöver Rejuve DyeVL använder vi även Alma Harmony XL och Photonova som är de bästa maskinerna på marknaden för IPL.</p>';
$service_brands = array(

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

$results_title = 'IPL hudföryngring före efter';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.webp',
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
            title: 'Hur många behandlingar med Rejuve Dye-VL krävs vanligtvis?',
            text: '<p class="p200">Antalet behandlingar med Rejuve Dye-VL som behövs varierar beroende på individens unika hudtillstånd och de önskade målen. Vanligtvis kan det krävas mellan 3-8 sessioner med cirka 4 veckors mellanrum för att uppnå bästa möjliga resultat. En skräddarsydd behandlingsplan utformas under din initiala konsultation, anpassad efter dina specifika hudbehov.</p>'
        ),
        new Question(
            title: 'Kan hudproblem återkomma efter en Rejuve Dye-VL-behandling?',
            text: '<p class="p200">Även om Rejuve Dye-VL är effektiv för att behandla befintliga hudproblem som pigmentfläckar, ytliga blodkärl och rosacea, kan nya problem uppstå på grund av externa faktorer såsom åldrande och solskador. Regelbunden hudvård och solskydd är avgörande för att underhålla resultaten. Ytterligare Rejuve Dye-VL-behandlingar kan rekommenderas för att bevara effekterna över tid.</p>'
        ),
        new Question(
            title: 'Hur snabbt ser jag resultat efter en Rejuve Dye-VL-behandling?',
            text: '<p class="p200">Resultaten från en Rejuve Dye-VL-behandling varierar mellan individer. Många ser en förbättring efter den första behandlingen, men de mest påtagliga resultaten framträder ofta efter en fullständig serie av behandlingar. Förbättringar i hudens utseende och kvalitet fortsätter vanligtvis att utvecklas både under behandlingsförloppet och efter avslutade sessioner.</p>'
        ),
    )
);
$faq_view_more = 'Se alla frågor & svar';



$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Rejuve-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på Rejuve-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Rejuve',
        image_title: 'Veronika Benedik - Specialist inom Rejuve-vård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom Rejuve-behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på Rejuve'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Rejuve-behandlingar',
        image_title: 'Vilma Libom - Expert inom Rejuve-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/varumarken/rejuve-dye-vl/" />

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