<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Microneedling - Avancerad hudförbättring | Acnespecialisten';
$seo_description = 'Upptäck AcneSpecialistens avancerade microneedling-behandlingar som revitaliserar och förbättrar hudens utseende. Få tillgång till expertkunskap och behandlingar anpassade för att stimulera hudens naturliga läkningsprocess och främja en jämn, fast och klar hud.';
$seo_keywords = 'microneedling, hudföryngring, behandla ärr, reducera fina linjer, stimulera kollagenproduktion, hudförbättring, hudstruktur, förbättra hudton, elastisk hud, föryngra huden';

$seo_image = 'images/treatments/large/microneedling.jpg';


$model = new Service(
    title: 'Microneedling',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Som ledande experter på microneedling i Sverige, erbjuder vi toppmodern behandling för att revitalisera din hud. Oavsett var du är, från Östermalm till Södermalm eller Sundbyberg, har du tillgång till denna effektiva metod som genom en kontrollerad process stimulerar huden att reparera sig själv. Detta uppnås genom att försiktigt och strategiskt inducera mikroskopiska skador i hudens yttre lager, vilket kickstartar produktionen av kollagen – ett avgörande protein för att upprätthålla hudens styrka och smidighet.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
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

$floating_box = 'Microneedling är en innovativ och effektiv behandling för att förbättra hudens kvalitet och adressera en mängd hudproblem.';

$nav_buttons = array(
    'about' => 'Om microneedling',
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

$description_title = 'Microneedling - vad är det?';
$description_text = '<p class="p200">Microneedling är en skonsam och revolutionerande behandlingsmetod anpassad för alla hudtyper som syftar till att förbättra hudens struktur och utseende. Med hjälp av 16 tunna, medicinska engångsnålar skapas tusentals mikroskopiska kanaler i huden, vilket möjliggör djup penetration av uppbyggande och näringsrika serum. Denna process stimulerar hudens egen förmåga till förnyelse och reparationsmekanismer.</p>
    <p class="p200 mt-m">Den här helt digitala microneedling-tekniken är ett smärtfritt alternativ till traditionella metoder som laser, och erbjuder minimala risker för biverkningar. Det passar en mångfald av hudtillstånd, inklusive men inte begränsat till åldrande hud, ärrbildningar, ojämn hudton och textur. Genom att aktivera hudens egen kollagenproduktion, förbättras spänsten, lystern och konditionen i huden, vilket resulterar i en fräschare och mer ungdomlig hy.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Microneedling-behandling',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför Microneedling-behandling',
        image_title: 'Förberedelser inför Microneedling-behandling',
        content: '<p class="p200">Förberedelse inför en Microneedling-behandling börjar med en noggrann konsultation där du får träffa en av våra erfarna hudterapeuter. Under konsultationen kommer hudterapeuten att genomföra en omfattande undersökning av din hud för att identifiera specifika behov och hudtillstånd. Detta steg är avgörande för att kunna ta fram en personlig och skräddarsydd behandlingsplan som är optimerad för just dina hudvårdsbehov.</p>
        <p class="p200 mt-m">Innan behandlingen är det viktigt att huden inte är solbränd. Dessutom bör du undvika starka hudvårdsprodukter som innehåller syror några dagar före behandlingen för att minimera risken för irritation. Din hudterapeut kommer att ge dig all information du behöver för att förbereda din hud på bästa sätt inför din Microneedling-session, säkerställandes att du får en så effektiv och säker behandling som möjligt.</p>',
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
        title: 'Microneedling behandlingsprocess',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Microneedling behandlingsprocess',
        image_title: 'Microneedling behandlingsprocess',
        content: '<p class="p200">Microneedling är en avancerad hudförnyande behandlingsmetod som kickstartar hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. När du anländer till kliniken, kommer din hud att rengöras grundligt för att avlägsna makeup och orenheter. Därefter appliceras en bedövningskräm för att minska eventuellt obehag under behandlingen.</p>
        p class="p200 mt-m">Vår speciellt utformade microneedling-enhet använder en serie fina, sterila nålar för att skapa mikroskopiska kanaler i huden. Detta initierar hudens egen reparationsmekanism och leder till ökad elastin- och kollagenproduktion. Under behandlingen använder vi också en näringsrik serum för att maximera hudens upptagningsförmåga och stimulera förnyelseprocessen. Efter behandlingen kan du förvänta dig en viss rodnad, men detta är normalt och indikerar att hudens läkningsprocess har börjat. Med tiden kommer du att märka en förbättrad hudtextur, minskning av fina linjer och en övergripande mer strålande hy.</p>',
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
    'boost' => new Article(
        title: 'Boosta din Microneedling med PRX-T33-behandling',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Boosta Microneedling effekten med PRX-T33',
        image_title: 'Boosta Microneedling effekten med PRX-T33',
        content: '<p class="p200">I strävan efter optimala resultat av din hudvård, erbjuder vår klinik en unik kombinationsbehandling som förstärker effekten av microneedling genom att integrera PRX-T33, en banbrytande biorevitaliserande behandling. Denna synergiska behandlingsstrategi är utformad för att förbättra hudens struktur, elasticitet och lyster utan lång återhämtningstid.</p>
                <p class="p200 mt-m">Inför din microneedling-behandling är det viktigt att undvika produkter som kan irritera huden, som exfolierande syror och retinol. PRX-T33-behandlingen appliceras efter microneedling-sessionen för att boosta hudens regenerativa processer och kollagenproduktion ännu mer. Eftersom PRX-T33 inte kräver nålar eller orsakar hudskada, är det ett utmärkt komplement för att förstärka och förlänga de positiva effekterna av microneedling. Förbered dig för att se en märkbar skillnad i din hud med en förbättrad ton, textur och en dramatisk minskning av fina linjer och ojämnheter.</p>',
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

$types_title = 'Hudproblem som behandlas med microneedling';
$types_description = 'Microneedling är en mångsidig behandling som kan hantera en rad hudproblem. Denna teknik stimulerar hudens naturliga läkningsprocess och främjar ny kollagenproduktion, vilket är effektivt för att behandla en rad hudtillstånd. Microneedling kan användas för att adressera och förbättra tillstånd och du hittar alla problem vi behandlar här.';
$types = array(
    new Service(
        title: 'Microneedling för Aktiv Acne',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Effektivt målinriktad behandling av aktiv acne med vår microneedlingmetod. Denna teknik använder små nålar för att försiktigt sticka i huden, vilket främjar läkning och minskar förekomsten av acne.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Microneedling för Aktiv Acne',
        image_title: 'Microneedling för Aktiv Acne',
        consultation_url: 'konsultation-aktiv-acne',
        consultation_url_label: 'Boka konsultation för behandling av aktiv acne',
        consultation_url_title: 'Boka konsultation för behandling av aktiv acne',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka microneedling för aktiv acne',
        booking_url_title: 'Boka microneedling för aktiv acne',
    ),

    new Service(
        title: 'Microneedling för Acneärr',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår microneedlingbehandling för acneärr stimulerar kollagenproduktion för att minska synligheten av ärr och förbättra hudens textur.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Microneedling för Acneärr',
        image_title: 'Microneedling för Acneärr',
        consultation_url: 'konsultation-acnearr',
        consultation_url_label: 'Boka konsultation för behandling av acneärr',
        consultation_url_title: 'Boka konsultation för behandling av acneärr',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka microneedling för acneärr',
        booking_url_title: 'Boka microneedling för acneärr',
    ),

    new Service(
        title: 'Microneedling för Rynkor & Fina Linjer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Utjämna rynkor och fina linjer med vår microneedlingbehandling som hjälper till att förnya och strama upp huden.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Microneedling för Rynkor & Fina Linjer',
        image_title: 'Microneedling för Rynkor & Fina Linjer',
        consultation_url: 'konsultation-rynkor-fina-linjer',
        consultation_url_label: 'Boka konsultation för behandling av rynkor och fina linjer',
        consultation_url_title: 'Boka konsultation för behandling av rynkor och fina linjer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka microneedling för rynkor & fina linjer',
        booking_url_title: 'Boka microneedling för rynkor & fina linjer',
    ),

    new Service(
        title: 'Microneedling för Stora Porer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Förfining och minskning av stora porer med våra riktade microneedlingbehandlingar som främjar en slätare hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Microneedling för Stora Porer',
        image_title: 'Microneedling för Stora Porer',
        consultation_url: 'konsultation-stora-porer',
        consultation_url_label: 'Boka konsultation för behandling av stora porer',
        consultation_url_title: 'Boka konsultation för behandling av stora porer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka microneedling för stora porer',
        booking_url_title: 'Boka microneedling för stora porer',
    ),

    new Service(
        title: 'Microneedling för Pigmentfläckar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Minska synligheten av pigmentfläckar och återställ en jämn hudton med vår microneedlingbehandling.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Microneedling för Pigmentfläckar',
        image_title: 'Microneedling för Pigmentfläckar',
        consultation_url: 'konsultation-pigmentflackar',
        consultation_url_label: 'Boka konsultation för behandling av pigmentfläckar',
        consultation_url_title: 'Boka konsultation för behandling av pigmentfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka microneedling för pigmentfläckar',
        booking_url_title: 'Boka microneedling för pigmentfläckar',
    ),

    new Service(
        title: 'Microneedling för Bristningar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Förbättra utseendet på bristningar med vår microneedlingbehandling som hjälper till att återuppbygga kollagen och elastin i huden.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Microneedling för Bristningar',
        image_title: 'Microneedling för Bristningar',
        consultation_url: 'konsultation-bristningar',
        consultation_url_label: 'Boka konsultation för behandling av bristningar',
        consultation_url_title: 'Boka konsultation för behandling av bristningar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka microneedling för bristningar',
        booking_url_title: 'Boka microneedling för bristningar',
    ),

);

$treatment_areas_title = 'Behandlingsområden för Microneedling';
$treatment_areas_text = '<p class="p200">Microneedling är en mångsidig behandling lämplig för ansikte, axlar, rygg och bröst. Den förbättrar hudens struktur och lyster genom att stimulera kollagenproduktion och läkning, anpassad efter varje unikt hudtillstånd och område.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Microneedling behandlar och förbättrar huden i ansiktet och kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för näsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Kinder',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för kindbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för överläppsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för hakbehandling'
            ),

        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'Kropp',
        description: '<p class="p200">Med microneedling kan vi behandla flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
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
                duration: '70 min',
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
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Efter microneedling behandling',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Efter microneedling behandling',
    image_title: 'Efter microneedling behandling',
    content: '<p class="p200">Efter en microneedlingbehandling är det flera viktiga steg du bör följa för att främja läkning och optimera resultatet av din behandling. Direkt efter proceduren är det normalt att huden blir röd och svullen. Det är kritiskt att undvika att röra behandlingsområdet med smutsiga händer och att inte applicera makeup de första 24 timmarna för att minimera risken för infektioner eller irritationer.</p>
    <p class="p200 mt-m">Under de första dagarna efter behandlingen, undvik kraftig motion, bastu, och långa varma duschar som kan öka svullnad och irritation i huden. Solskydd är också av yttersta vikt; applicera en bredspektrum solskyddsfaktor dagligen för att skydda din hud mot UV-strålning, som kan vara extra skadlig för den nya känsliga huden efter microneedling. Dessutom rekommenderas att du använder milda, återfuktande produkter utan parfym eller andra irriterande ingredienser för att hjälpa till med läkningsprocessen och behålla hudens fuktbalans.</p>
    <p class="p200 mt-m">Följ noggrant de eftervårdsinstruktioner som din behandlare ger dig och tveka inte att kontakta kliniken om du har några frågor eller oro kring din eftervård. Regelbunden uppföljning och eventuellt ytterligare behandlingar kan rekommenderas beroende på din huds individuella svar och de mål du strävar efter med din hudvård.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för microneedling';
$service_brands_text = '<p class="p200">Vi utför microneedling med Dermapen och Exceed vilket är de modernaste och mest effektiva metoderna på markanden.</p>';
$service_brands = array(

    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen'
    ),
    new Brand(
        label: 'Exceed',
        image: 'images/brands/exceed.svg',
        image_alt: 'Exceed',
        image_title: 'Exceed'
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
            title: 'Hur många microneedling behandlingar behövs?',
            text: 'Antalet microneedling behandlingar som behövs varierar beroende på individens hudtillstånd och de mål man önskar uppnå. Generellt rekommenderas en serie på 3-8 behandlingar med intervaller på 4-6 veckor mellan varje session för bästa resultat. Ditt hudvårdsteam kan ge dig en personlig rekommendation efter en initial konsultation.'
        ),
        new Question(
            title: 'Kan mina hudproblem återkomma efter microneedling?',
            text: 'Medan microneedling behandlar vi befintliga hudproblem effektivt men vi kan inte motverka uppkomsten av att nya uppstår. Därför är det viktigt att kombinera microneedling behandlingen med behandlingar och produkter som motverkar uppkomsten av det ursprungliga problemet. En fortsatt hudvårdsrutin och eventuellt uppföljande behandlingar kan vara nödvändiga för att underhålla resultaten.'
        ),
        new Question(
            title: 'Hur snabbt kan jag se resultat efter en microneedling behandling?',
            text: 'Resultatet efter microneedling varierar från person till person. Vissa kan märka förbättringar så tidigt som några dagar efter behandlingen, medan andra kan behöva vänta några veckor för att se fullständiga resultat. Hudens naturliga kollagenproduktion kan ta tid, och förbättringar fortsätter ofta under flera månader efter behandlingen.'
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specilaister"><?php echo $specialists_view_more ?></a>
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