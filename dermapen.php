<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Dermapen 4 Behandling i Stockholm';
$seo_description = 'Dermapen 4 behandling är en effektiv form av microneedling i Stockholm, som sätter igång hudens kollagenproduktion och behandlar flera typer av hudproblem.';
$seo_keywords = 'dermapen, dermapend 4, dermapen före efter, dermapen behandling, microneedling stockholm';

$seo_image = 'images/treatments/large/dermapen.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Dermapen', '/dermapen.php'),
);

$model = new Service(
    title: 'Dermapen 4 behandling Stockholm',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Vi är störst i Sverige på Dermapen 4 som är den senaste microneedling tekniken. Optimal för dig som vill förbättra hudens struktur och elasticitet, minska synligheten av ärr, rynkor och linjer.</p>',
    image_small: 'bilder/varumarken/358x274/dermapen.webp',
    image_large: 'bilder/varumarken/424x456/dermapen.webp',
    image_alt: 'Dermapen',
    image_title: 'Dermapen',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=dermapen',
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

$floating_box = 'Förbättrar hudens struktur med nålbehandling.';

$nav_buttons = array(
    'about' => 'Om Dermapen',
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

$description_title = 'Dermapen 4 - en innovativ microneedling behandling';
$description_text = '<p class="p200">Dermapen är en framstående och effektiv microneedlingmetod som är lämplig för alla hudtyper, inriktad på att vitalisera och föryngra huden. Med en patenterad teknologi använder Dermapen4 avancerade mikronålar för att skapa fina, precisionsinriktade mikrokanaler i huden. Detta underlättar djupgående absorption av aktiva serum som är rika på näringsämnen och stimulerar hudens kollagenproduktion och naturliga läkningsprocess.</p>
    <p class="p200 mt-m">Denna digitala och kontrollerade microneedling-teknik erbjuder en nästan smärtfri upplevelse i jämförelse med äldre mtekniker. Dermapen är mångsidig och kan effektivt behandla en rad hudåkommor, inklusive rynkor, ärr, stora porer, ojämn hudton och struktur. Genom att stimulera hudens egna reparationsprocesser förbättras dess elasticitet, lyster och övergripande hälsa, vilket ger en märkbart yngre och mer strålande hud.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Dermapen behandling',
        image_small: '/bilder/process/358x272/dermapen-forberedelser.webp',
        image_large: '/bilder/process/872x456/dermapen-forberedelser.webp',
        image_alt: 'Förberedelser inför Dermapen behandling',
        image_title: 'Förberedelser inför Dermapen behandling',
        content: '<p class="p200">Att förbereda sig för en Dermapen behandling innebär att först genomgå en detaljerad konsultation med en av våra hudterapeuter. Under konsultationen utförs en noggrann bedömning av din hud för att identifiera individuella behov och särskilda hudproblem. Denna initiala analys är kritisk för att utforma en personlig behandlingsplan som är perfekt anpassad för dina unika hudvårdsbehov.</p>
        <p class="p200 mt-m">För optimala resultat bör huden inte vara solbränd vid tidpunkten för behandlingen. Vi rekommenderar också att du avstår från att använda hudirriterande produkter som innehåller starka syror några dagar före behandlingen. Vår hudterapeut kommer att ge dig fullständig vägledning för att förbereda din hud inför behandlingen med Dermapen, för att säkerställa en effektiv och trygg upplevelse.</p>',
    ),
    'process' => new Article(
        title: 'Hur går Dermapen 4 behandling till?',
        image_small: '/bilder/process/358x272/dermapen-process.webp',
        image_large: '/bilder/process/872x456/dermapen-process.webp',
        image_alt: 'Dermapen behandlingsprocess',
        image_title: 'Dermapen behandlingsprocess',
        content: '<p class="p200">När du kommer till en av våra kliniker börjar behandlingen med en grundlig rengöring av ditt ansikte för att ta bort smink och smuts. Dermapen-apparaten, utrustad med små, fina, sterila nålar, glider över huden för att punktera den med mikroskopiska hål.</p>
        <p class="p200 mt-m">Dessa mikro-skador stimulerar hudens egen läkningsförmåga och leder till nyproduktion av kollagen och elastin. Under behandlingen appliceras även specialanpassade serum för att ge näring och främja en effektiv läkning. Efter behandlingen är det vanligt med en viss rodnad och svullnad, men detta är ett tecken på att återhämtningsprocessen har startat. Resultatet över tid blir en märkbart slätare, fastare och mer lysterrik hud. För att ett bra resultat krävs en microneedling kur.</p>',
    ),
);

$types_title = 'Hudproblem som Dermapen kan behandla';
$types_description = 'Dermapen hjälper till att avsevärt förbättra många olika hudåkommor. Utforska vilka hudproblem som kan behandlas och lindras med Dermapen här.';
$types = array(
    new Service(
        title: 'Dermapen mot Acneärr',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Dermapen mot acneärr använder mikronålar för att skapa små skador i huden, vilket kickstartar kroppens naturliga läkning och kollagenbildning, vilket jämnar ut ärr och förbättrar hudens struktur.',
        image_small: 'bilder/hudproblem/102x102/acnearr.webp',
        image_large: 'bilder/hudproblem/200x200/acnearr.webp',
        image_alt: 'Dermapen mot Acneärr',
        image_title: 'Dermapen mot Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av acneärr',
        booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Dermapen för acneärr',

        url: '/dermapen-acnearr.php',
        url_label: 'Läs mer om Dermapen mot acneärr',
        url_title: 'Läs mer om Dermapen mot acneärr',
    ),
    new Service(
        title: 'Dermapen mot Stora Porer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Dermapen för stora porer stimulerar huden på djupet för att öka kollagenproduktionen, vilket kan bidra till att dra åt och minska utseendet av förstorade porer, och ger en jämnare hudstruktur.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Dermapen mot Stora Porer',
        image_title: 'Dermapen mot Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av stora porer',
        booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Dermapen mot stora porer',

        url: '/pigmentflackar.php',
        url_label: 'Läs mer om pigmentfläckar',
        url_title: 'Läs mer om pigmentfläckar',
    ),
    new Service(
        title: 'Dermapen mot Rynkor & Fina Linjer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Dermapen mot rynkor och fina linjer använder mikronålning för att stimulera hudens föryngringsprocess, vilket resulterar i ökad kollagenproduktion och en slätare, mer ungdomlig hudtextur.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Dermapen mot Rynkor & Fina Linjer',
        image_title: 'Dermapen mot Rynkor & Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av rynkor och fina linjer',
        booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_Wrinkles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Dermapen mot rynkor & fina linjer',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),
    new Service(
        title: 'Dermapen mot Pigmentfläckar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Dermapen mot pigmentfläckar främjar hudens förnyelseprocess och hjälper till att bryta ned pigmentansamlingar, vilket leder till en mer enhetlig hudton och minskade pigmenteringar.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Dermapen mot Pigmentfläckar',
        image_title: 'Dermapen mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Dermapen mot pigmentfläckar',

        url: '/pigmentflackar.php',
        url_label: 'Läs mer om pigmentfläckar',
        url_title: 'Läs mer om pigmentfläckar',
    ),
    new Service(
        title: 'Dermapen mot Bristningar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Dermapen stimulerar hudens förmåga att läka och producera nytt kollagen och elastin, vilket kan minska utseendet av bristningar genom att förbättra hudens struktur och elasticitet.',
        image_small: 'bilder/hudproblem/102x102/bristningar.webp',
        image_large: 'bilder/hudproblem/200x200/bristningar.webp',
        image_alt: 'Dermapen mot Bristningar',
        image_title: 'Dermapen mot Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av bristningar',
        booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Dermapen mot bristningar',

        url: '/hudproblem/bristningar/',
        url_label: 'Läs mer om bristningar',
        url_title: 'Läs mer om bristningar',
    ),
    new Service(
        title: 'Dermapen mot Aktiv Acne',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Dermapen behandlar aktiv acne genom att använda mikronålar för att stimulera hudens egen läkningsförmåga, vilket reducerar inflammation och hjälper till att förebygga framtida utbrott.',
        image_small: 'bilder/hudproblem/102x102/acne.webp',
        image_large: 'bilder/hudproblem/200x200/acne.webp',
        image_alt: 'Dermapen mot Aktiv Acne',
        image_title: 'Dermapen mot Aktiv Acne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av aktiv acne',
        booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Dermapen mot aktiv acne',

        url: '/dermapen-acne.php',
        url_label: 'Läs mer om Dermapen mot acne',
        url_title: 'Läs mer om Dermapen mot acne',
    ),
);

$big_types = array(
    new Service(
        title: 'Boosta din Dermapen behandling med PRX-T33-behandling',
        duration: null,
        price: null,
        content: '<p class="p200">För att ta din Dermapen behandling till nästa nivå erbjuder vi en specialiserad booster med PRX-T33, en nyskapande behandling som intensifierar hudföryngringseffekten. Denna kombination är idealisk för dig som vill utöka resultatet utan att förlänga återhämtningstiden. Genom att kombinera PRX-T33 med Dermapen, förstärker och förlänger vi de positiva resultaten. Den kombinerade behandlingen ger en märkbar förbättring av hudens ton och struktur, samt minskar synbart fina linjer och ojämnheter. Resultatet är en jämnare och ungdomligare hud, som får dig att stråla.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'Boosta din Dermapen behandling med PRX-T33-behandling',
        image_title: 'Boosta din Dermapen behandling med PRX-T33-behandling',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Dermapen',
        consultation_url_label: 'Boka hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling+PRX-T33-Boost',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka tid för behandling',
        icons: array(),
        procedures: array()
    ),
);

$treatment_areas_title = 'Dermapen baserat på område';
$treatment_areas_text = '';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Dermapen behandlar och förbättrar huden i ansiktet och kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/nasa.svg',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för näsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/kinder.svg',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Kinder',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för kindbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/overlapp.svg',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för överläppsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/haka.svg',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_Chin',
                url_label: 'Boka',
                url_title: 'Boka tid för hakbehandling'
            ),

        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'Kropp',
        description: '<p class="p200">Dermapen är anpassningsbar för behandling av olika kroppsdelar.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/rygg.svg',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Dermapen är effektiv för att behandla flera områden samtidigt.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x områdes',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '70 min',
                price: '3595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=SKIP&area=Microneedling_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Dermapen eftervård',
    image_small: '/bilder/process/358x272/dermapen-eftervard.webp',
    image_large: '/bilder/process/872x456/dermapen-eftervard.webp',
    image_alt: 'Dermapen eftervård',
    image_title: 'Dermapen eftervård',
    content: '<p class="p200">Eftervården spelar en stor roll för framgången med din Dermapenbehandling. Det är helt normalt att uppleva rödhet och svullnad efter behandlingen. Det är viktigt att hålla behandlingsområdet rent och avstå från att applicera smink under det första dygnet för att minska risken för infektioner och irritation.</p>
    <p class="p200 mt-m">För att underlätta läkningen bör du undvika intensiv träning, bastubad, och varma duschar de första dagarna som kan förvärra svullnad och irritation. Vikten av solskydd kan inte understrykas nog, använd ett högkvalitativt solskyddsfaktor dagligen för att skydda den nybehandlade huden mot solens strålar.</p>
    <p class="p200 mt-m">Följ de instruktioner för eftervård du får från din behandlare noggrant. Om du har några frågor eller bekymmer, är du alltid välkommen att kontakta din klinik. Baserat på hur din hud reagerar kan ytterligare uppföljning och behandlingar vara nödvändiga för att uppnå dina hudvårdsambitioner.</p>',
));

$service_brands_title = 'Andra märken för microneedling';
$service_brands_text = '<p class="p200">Utöver Dermapen utför vi även microneedling med Exceed.</p>';
$service_brands = array(

    new Brand(
        label: 'Exceed',
        image: 'images/brands/exceed.png',
        image_alt: 'Exceed',
        image_title: 'Exceed'
    ),
);

$results_title = 'Dermapen 4 före och efter resultat';
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

$reviews_title = 'Dermapen Omdömen';
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
            title: 'Dermapen och microneedling, hur många behandlingar?',
            text: '<p class="p200">Frekvensen för Dermapen-behandlingar varierar beroende på individens hudtyp, det specifika hudtillståndet som behandlas, och den önskade effekten. Generellt rekommenderas en serie av 3-8 behandlingar med 4-6 veckors mellanrum för optimala resultat. Därefter kan underhållsbehandlingar genomföras vid behov, vanligtvis var sjätte till tolfte månad. Det är viktigt att konsultera med en kvalificerad hudvårdsspecialist för att fastställa den bästa behandlingsplanen för just din hud.</p>'
        ),
        new Question(
            title: 'Vad gör Dermapen?',
            text: '<p class="p200">Dermapen är en form av microneedling-behandling som använder en specialdesignad enhet med 16 små nålar för att skapa mikroskopiska punkteringar i hudens ytskikt. Denna process stimulerar hudens naturliga läkningsprocess och produktionen av kollagen och elastin. Resultatet är en förbättring av hudens textur och fasthet samt en minskning av ärr, fina linjer, rynkor, och stora porer. Behandlingen kan också effektivt minska hyperpigmentering och ge huden en mer jämn ton.</p>'
        ),
        new Question(
            title: 'Vad är Dermapen?',
            text: '<p class="p200">Dermapen är en avancerad teknik inom hudvård som använder microneedling för att behandla en mängd hudproblem. Den består av en pennliknande enhet utrustad med fina nålar som skapar små punkteringar i hudens yta. Dessa kontrollerade skador stimulerar kroppens naturliga sårhelande processer, vilket leder till ny kollagen- och elastinproduktion. Denna teknik används för att förbättra hudens textur, minska ärrbildning, och bekämpa tecken på åldrande.</p>'
        ),
        new Question(
            title: 'Dermapen fungerar inte?',
            text: '<p class="p200">Om du inte ser de resultat du förväntade dig från din Dermapen-behandling, kan det finnas flera faktorer som spelar in. Resultat kan variera beroende på individens hudtyp, ålder, det specifika hudtillståndet, och antalet genomförda behandlingar. Det är också viktigt att besöka en klinik som har lång erfarenhet av att utföra Dermapen behandlingar effektivt. För att säkerställa effektiviteten av Dermapen-behandling är det avgörande att utföraren är utbildad hudterapeut och certifierad av Dermapen World. Ett kritiskt moment under behandlingen är kontinuerlig justering av nåldjupet för att anpassa sig till den unika hudtypen och de specifika behoven hos varje individ. Alla har vi olika hudtyper, och det är därför viktigt att behandlaren skräddarsyr nåldjupet efter just din hud för att uppnå optimala resultat. Om dessa viktiga aspekter förbises kan behandlingen bli ineffektiv. Microneedling resultat efter en behandling är också begränsat, och det krävs en microneedling kur för att få ett fullständigt resultat. Vi rekommenderar att du väljer en klinik med den kunskap och erfarenhet som krävs för att justera behandlingen för just din hud.</p>'
        ),
        new Question(
            title: 'Är Dermapen och microneedling samma sak?',
            text: '<p class="p200">Dermapen är en typ av microneedling, vilket är en metod som använder små nålar för att skapa mikroskopiska skador i huden och därigenom stimulera hudens naturliga läkningsprocess och produktion av kollagen och elastin. Medan Dermapen är ett varumärkesnamn för en specifik enhet som används för denna typ av behandling, refererar microneedling till själva tekniken oavsett vilken enhet som används. Dermapen är känd för sin precision och förmåga att justera nåldjupet, vilket gör det möjligt att anpassa behandlingen efter olika hudtyper och tillstånd.</p>'
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
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Dermapen behandling',
        image_title: 'Cazzandra Lindberg - Expert på Dermapen behandling'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Dermapen',
        image_title: 'Veronika Benedik - Specialist inom Dermapen behandling'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom Dermapen behandling',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på Dermapen'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Dermapen behandling',
        image_title: 'Vilma Libom - Expert inom Dermapen behandling'
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
                                include('behandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specialister"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>