<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL mot Pigmentfläckar | AcneSpecialisten';
$seo_description = 'Ta bort pigmentfläckar och åldersfläckar med hjälp av IPL. Läs mer om vår behandling & boka in en kostnadsfri konsultation →';
$seo_keywords = 'IPL-behandling, pigmentfläckar, minska pigmentering, jämn hudton, ljusbaserad hudförbättring, hudjämnhet, ljusa upp huden, harmonisk hudton, avancerad hudvård, AcneSpecialisten';

$seo_image = 'images/treatments/large/ipl.webp';


$model = new Service(
    title: 'IPL mot pigmentfläckar',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">IPL utgör en effektiv lösning för dig som önskar en jämnare hudton genom att effektivt reducera pigmentfläckar. Denna behandling passar utmärkt för att ljusa upp och jämna ut områden med överpigmentering. Våra IPL-behandlingar är individuellt anpassade efter dina unika hudbehov. De är utformade för att inte bara minska synligheten av pigmentfläckar, utan också för att stimulera hudens egna läkningsprocesser och därmed förbättra hudens övergripande hälsa och utseende.</p>',
    image_small: 'bilder/behandlingar/358x274/ipl.webp',
    image_large: 'bilder/behandlingar/424x456/ipl.webp',
    image_alt: 'IPL mot pigmentfläckar',
    image_title: 'IPL mot pigmentfläckar',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Effektiv ljusbehandling som reducerar rosacea.';

$nav_buttons = array(
    'about' => 'Om IPL mot pigmentfläckar',
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

$description_title = 'Vad är IPL av pigmentfläckar?';
$description_text = '<p class="p200">IPL, som står för Intensivt Pulserande Ljus, är en ljusbaserad behandlingsmetod som effektivt förbättrar hudens färg och textur utan behov av kirurgiska ingrepp. Denna teknik innefattar användning av ljuspulser som penetrerar huden och selektivt riktar sig mot melanin i pigmentfläckar. IPL är därmed särskilt effektivt för att reducera och ljusa upp pigmentfläckar och för att ge en jämnare hudton.</p>
<p class="p200 mt-m">Med sin mångsidighet kan IPL-teknologin anpassas efter varje patients unika hudtillstånd, vilket gör det möjligt att behandla pigmentfläckar med precision. Behandlingen är skonsam och medför få biverkningar, vilket tillåter patienter att snabbt återgå till sina dagliga aktiviteter efter en session. IPL är en populär metod för att effektivt minska synligheten av pigmentfläckar och främja en mer harmonisk och klar hudton.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Inför behandling med IPL mot pigmentfläckar',
        image_small: null,
        image_large: null,
        image_alt: 'Inför behandling med IPL mot pigmentfläckar',
        image_title: 'Inför behandling med IPL mot pigmentfläckar',
        content: '<p class="p200">Att förbereda sig inför en IPL-behandling för att reducera pigmentfläckar innebär att följa viktiga steg för att säkerställa att din hud är optimalt förberedd för proceduren. En initial konsultation med en kvalificerad hudterapeut är avgörande. Under detta möte kommer din hud att noggrant analyseras för att skapa en skräddarsydd behandlingsplan som är inriktad på att minska dina pigmentfläckar med IPL-teknik.</p>
        <p class="p200 mt-m">För att förbereda din hud är det viktigt att undvika direkt sol exponering och inte använda självbrunande produkter minst två veckor före behandlingen. Detta är för att minska risken för ojämn pigmentering, eftersom IPL-behandlingen är mest effektiv när huden är i sin naturligaste ton. Dessutom bör du undvika hudvårdsprodukter som innehåller retinol eller andra starka exfolierande ingredienser under veckan före din behandling. Din hudterapeut kommer att ge dig fullständiga instruktioner om ytterligare förberedelser och råd om hur du kan ta hand om din hud både före och efter din IPL-behandling för att säkerställa optimala resultat och en säker läkningsprocess.</p>',
    ),
    'process' => new Article(
        title: 'Hur går IPL mot pigmentfläckar till?',
        image_small: null,
        image_large: null,
        image_alt: 'Hur går IPL mot pigmentfläckar till?',
        image_title: 'Hur går IPL mot pigmentfläckar till?',
        content: '<p class="p200">IPL-behandling är en framstående metod för att effektivt minska pigmentfläckar och förbättra hudens övergripande utseende. Vid ditt besök på vår klinik börjar vi med att noggrant rengöra din hud för att ta bort alla makeuprester och orenheter. Ett speciellt ögonskydd appliceras för att skydda dina ögon från det intensiva ljuset under behandlingen.</p>
        <p class="p200 mt-m">Vår IPL-enhet justeras noggrant för att anpassa ljuspulsernas intensitet och våglängd specifikt till dina pigmentfläckar och hudtyp. Under behandlingen avges korta, intensiva pulser av ljus som tränger djupt in i huden. Dessa ljuspulser är riktade mot pigmentfläckarna och omvandlar ljuset till värme, vilket effektivt bryter ner det oönskade pigmentet utan att skada omkringliggande hudvävnad.</p>
        <p class="p200 mt-m">Efter behandlingen är det vanligt att känna en lätt rodnad och värme i huden, liknande känslan efter en mild solbränna, men dessa symtom är övergående och bör avta ganska snabbt. Resultaten utvecklas över tid, och du kan förvänta dig att gradvis se en minskning av pigmentfläckarna och en jämnare, klarare hudton. Din hudterapeut kommer att ge dig specifika råd om eftervård för att säkerställa de bästa möjliga resultaten och främja en effektiv läkningsprocess.</p>',
    ),
);

$treatment_areas_title = 'Behandlingsområden för IPL mot pigmentfläckar';
$treatment_areas_text = '<p class="p200">Med IPL kan vi effektivt behandla en rad olika områden på kroppen, inklusive ansikte, hals, händer och bröst.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">IPL mot pigmentfläckar kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'IPL för Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/panna.webp',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'IPL för Panna',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Forehead',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av pannan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/nasa.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'IPL för Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/kinder.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'IPL för Kinder',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av kinderna'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/overlapp.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'IPL för Överläpp',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av överläppen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/haka.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'IPL för Haka',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Chin',
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
        description: '<p class="p200">IPL mot pigmentfläckar kan behandla flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hals.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'IPL för Hals',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av halsen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/dekolletage.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'IPL för Dekolletage',
                duration: '40 min',
                price: '2295 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av dekolletaget'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hander.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'IPL för Händer',
                duration: '30 min',
                price: '1895 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_Hands',
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
                image_alt: '1 Pigmentfläck',
                image_title: '1 Pigmentfläck',
                title: 'IPL för 1 pigmentfläck',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_1x_spot_pf',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av 1 pigmentfläck'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '1x zon',
                image_title: '1x zon',
                title: '1x zon',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_1xZone',
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
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_2xZones',
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
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_1xArea',
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
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_2xAreas',
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
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots&area=IPL_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Efter IPL mot pigmentfläckar',
    image_small: null,
    image_large: null,
    image_alt: 'Efter IPL mot pigmentfläckar',
    image_title: 'Efter IPL mot pigmentfläckar',
    content: '<p class="p200">Eftervården är en kritisk del för att säkerställa framgångsrika resultat och en smidig läkningsprocess efter en IPL-behandling mot pigmentfläckar. Det är inte ovanligt att känna av viss rodnad och svullnad i det behandlade området direkt efter behandlingen. För att minska risken för irritation och infektioner, bör du undvika att röra området med smutsiga händer och avstå från att använda makeup eller parfymerade produkter under de första 24 timmarna.</p>
    <p class="p200 mt-m">Under de första dagarna post-behandling är det också viktigt att undvika intensiv fysisk aktivitet, bastubad och långa varma duschar, som kan förstärka svullnad och irritation. Användning av hög SPF-solskydd är avgörande för att skydda huden mot UV-strålning, särskilt i det behandlade området. Dessutom rekommenderas att använda milda, återfuktande hudvårdsprodukter utan starka ingredienser för att stödja läkningsprocessen och bevara hudens fuktbalans.</p>
    <p class="p200 mt-m">Följ noga de specifika eftervårdsinstruktionerna som ges av din behandlare. Vid frågor eller bekymmer, tveka inte att kontakta din klinik. Ytterligare behandlingar kan rekommenderas baserat på din huds respons för att uppnå och bibehålla de bästa resultaten från din IPL-behandling mot pigmentfläckar.</p>',
));

$service_brands_title = 'Märken för IPL';
$service_brands_text = '<p class="p200">Vi utför IPL mot pigmentfläckar med Alma Rejuve DyeVL, Alma Harmony XL, Photonova som är de bästa maskinerna på marknaden.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/alma/rejuve-dye-vl',
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
        url: '/varumarken/powerlite-photonova',
        url_title: 'Powerlite Photonova',
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
            title: 'Hur många behandlingar med IPL krävs vanligtvis för att behandla pigmentfläckar?',
            text: 'Antalet IPL-behandlingar som behövs för att effektivt minska pigmentfläckar varierar beroende på individens hudtillstånd och de specifika målen med behandlingen. Oftast krävs 3-8 behandlingar, med intervaller på ungefär 4 veckor, för att uppnå önskade resultat. En personlig behandlingsplan utformas under den initiala konsultationen, anpassad efter dina unika hudbehov.'
        ),
        new Question(
            title: 'Kan pigmentfläckar återkomma efter en IPL-behandling?',
            text: 'Medan IPL-behandlingar är effektiva för att minska befintliga pigmentfläckar, kan nya fläckar utvecklas över tid, särskilt om huden utsätts för faktorer som solskador och åldrande. För att underhålla resultaten är det viktigt med en bra hudvårdsrutin och regelbundet solskydd. Ibland kan ytterligare behandlingar rekommenderas för att bevara effekterna över tid.'
        ),
        new Question(
            title: 'Hur snabbt kan jag se resultat efter en IPL-behandling mot pigmentfläckar?',
            text: 'Resultaten från en IPL-behandling mot pigmentfläckar varierar mellan individer. Många ser en förbättring efter den första behandlingen, men de fullständiga resultaten framträder oftast mer tydligt efter en serie behandlingar. Förbättringar i hudens utseende och kvalitet fortsätter vanligtvis att utvecklas under behandlingsserien och de efterföljande veckorna.'
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

$specialists_title = 'Våra hudterapeuter';
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
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'images/brands/infuzion.svg',
        image_alt: 'Infuzion',
        image_title: 'Infuzion',
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
    <link rel="stylesheet" href="/hudbehandlingar/service.css">
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
                    <h1 class="h600">
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
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