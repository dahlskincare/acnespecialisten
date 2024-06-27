<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Microneedling behandling i Stockholm | AcneSpecialisten';
$seo_description = 'Vår microneedle-behandling i Stockholm sätter igång hudens naturliga läkeprocess. ✓Modern teknik ✓Smärtfritt ✓Effektivt. Boka gratis konsultation här →';
$seo_keywords = 'microneedling, microneedling före efter, microneedling before and after, microneedling risker, microneedling stockholm, microneedling direkt efter, microneedling eftervård, microneedling resultat efter en behandling';
$seo_image = 'images/treatments/large/microneedling.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar'),
    new PathSegment('Microneedling', '/microneedling.php'),
);

$model = new Service(
    title: 'Microneedling behandling i Stockholm',
    duration: null,
    price: null,
    content: '<p class="p200">Som ledande experter på microneedling i Stockholm, erbjuder vi toppmodern behandling för att revitalisera din hud. Genom att försiktigt och strategiskt skapa mikroskopiska skador i hudens yttre lager, kickstartas produktionen av kollagen – ett avgörande protein för att upprätthålla hudens styrka och smidighet.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/microneedling.webp',
    image_large: 'bilder/hudbehandlingar/424x456/microneedling.webp',
    image_alt: 'Microneedling',
    image_title: 'Microneedling',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=microneedling',
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

$floating_box_title = "Microneedling";
$floating_box = 'Microneedling är en innovativ och effektiv behandling för att förbättra hudens kvalitet och adressera en mängd hudproblem.';

$description_title = 'Vad är microneedling?';
$description_text = '<p class="p200">Microneedling är en effektiv och revolutionerande behandlingsmetod anpassad för alla hudtyper som syftar till att förbättra hudens struktur och utseende. Med hjälp av 16 tunna, medicinska engångsnålar skapas tusentals mikroskopiska kanaler i huden, vilket möjliggör djup penetration av uppbyggande och näringsrika serum. Denna process stimulerar hudens egen förmåga till cellförnyelse och återuppbyggnad.</p>
    <p class="p200 mt-m">Den digitala microneedling-tekniken är ett smärtfritt alternativ till traditionella metoder som laser, och erbjuder minimala risker för biverkningar. Det passar en mångfald av hudtillstånd, inklusive men inte begränsat till åldrande hud, ärrbildningar, ojämn hudton och textur. Genom att aktivera hudens egen kollagenproduktion, förbättras spänsten, lystern och hudens utseende, vilket resulterar i en fräschare och mer ungdomlig hy.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Inför microneedling behandling',
        image_small: '/bilder/process/358x272/microneedling-forberedelser.webp',
        image_large: '/bilder/process/872x456/microneedling-forberedelser.webp',
        image_alt: 'Inför microneedling behandling',
        image_title: 'Inför microneedling behandling',
        content: '<p class="p200">Förberedelse inför en microneedling behandling börjar med en noggrann konsultation där du får träffa en av våra erfarna hudterapeuter. Under konsultationen kommer hudterapeuten att genomföra en omfattande undersökning av din hud för att identifiera specifika behov och hudtillstånd. Detta steg är avgörande för att kunna ta fram en personlig och skräddarsydd behandlingsplan som är optimerad för just dina hudvårdsbehov.</p>
        <p class="p200 mt-m">Innan behandlingen är det viktigt att huden inte är solbränd. Dessutom bör du undvika starka hudvårdsprodukter som innehåller syror några dagar före behandlingen för att minimera risken för irritation. Din hudterapeut kommer att ge dig all information du behöver för att förbereda din hud på bästa sätt inför din microneedling session, för att du ska få en så effektiv och säker behandling som möjligt.</p>',
    ),
    'process' => new Article(
        title: 'Hur fungerar microneedling?',
        image_small: '/bilder/process/358x272/microneedling-process.webp',
        image_large: '/bilder/process/872x456/microneedling-process.webp',
        image_alt: 'Hur fungerar microneedling?',
        image_title: 'Hur fungerar microneedling?',
        content: '<p class="p200">Microneedling är en avancerad hudförnyande behandlingsmetod som kickstartar hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. När du anländer till en av våra kliniker för behandling, kommer din hud först att rengöras grundligt för att avlägsna makeup och orenheter.</p>
        <p class="p200 mt-m">Vår speciellt utformade microneedling maskin använder en serie fina, sterila nålar för att skapa mikroskopiska kanaler i huden. Detta initierar hudens egen reparationsmekanism och leder till ökad elastin- och kollagenproduktion. Under behandlingen använder vi också näringsrika serum som slussas in kanalerna i hudenf för att maximera hudens upptagningsförmåga och stimulera förnyelseprocessen. Efter behandlingen kan du förvänta dig en viss rodnad, men detta är normalt och indikerar att hudens läkningsprocess har börjat. Med tiden kommer du att märka en förbättrad hudtextur, minskning av fina linjer och en övergripande mer strålande hy.</p>',
    ),
);

$types_title = 'Microneedling efter hudproblem';
$types_description = 'Microneedling är en mångsidig behandling som kan hantera en rad hudproblem. Denna teknik stimulerar hudens naturliga läkningsprocess och främjar ny kollagenproduktion, vilket är effektivt för att behandla en rad hudtillstånd.';
$types = array(
    new Service(
        title: 'Microneedling mot Acneärr',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår microneedlingbehandling för acneärr stimulerar kollagenproduktion för att minska synligheten av ärr och förbättra hudens textur.',
        image_small: 'bilder/hudproblem/102x102/acnearr.webp',
        image_large: 'bilder/hudproblem/200x200/acnearr.webp',
        image_alt: 'Microneedling för Acneärr',
        image_title: 'Microneedling för Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av acneärr',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka microneedling för acneärr',

        url: '/microneedling-acnearr.php',
        url_label: 'Läs mer om microneedling mot acneärr',
        url_title: 'Läs mer om microneedling mot acneärr',
    ),
    new Service(
        title: 'Microneedling mot Rynkor & Fina Linjer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Utjämna rynkor och fina linjer med vår microneedling som hjälper till att förnya och strama upp huden.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Microneedling för Rynkor & Fina Linjer',
        image_title: 'Microneedling för Rynkor & Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av rynkor och fina linjer',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Wrinkles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka microneedling för rynkor & fina linjer',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),
    new Service(
        title: 'Microneedling mot Stora Porer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Reducera och minska stora porer med våra resultatinriktade microneedlingbehandling som främjar en slätare hud.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Microneedling för Stora Porer',
        image_title: 'Microneedling för Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av stora porer',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka microneedling för stora porer',

        url: '/microneedling-stora-porer.php',
        url_label: 'Läs mer om microneedling mot stora porer',
        url_title: 'Läs mer om microneedling mot stora porer',
    ),
    new Service(
        title: 'Microneedling mot Pigmentfläckar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Minska synligheten av pigmentfläckar och återställ en jämn hudton.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Microneedling för Pigmentfläckar',
        image_title: 'Microneedling för Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka microneedling för pigmentfläckar',

        url: '/pigmentflackar.php',
        url_label: 'Läs mer om pigmentfläckar',
        url_title: 'Läs mer om pigmentfläckar',
    ),
    new Service(
        title: 'Microneedling mot Bristningar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Förbättra bristningarnas utseendet genom att stimulera återuppbyggnaden av kollagen och elastin i huden.',
        image_small: 'bilder/hudproblem/102x102/bristningar.webp',
        image_large: 'bilder/hudproblem/200x200/bristningar.webp',
        image_alt: 'Microneedling för Bristningar',
        image_title: 'Microneedling för Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av bristningar',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka microneedling för bristningar',

        url: '/hudproblem/bristningar/',
        url_label: 'Läs mer om bristningar',
        url_title: 'Läs mer om bristningar',
    ),
    new Service(
        title: 'Microneedling mot Aktiv Acne',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Skapar en kontrollerad skada i huden som påskyndar hudens läkningsprocess för att reducera inflammation och förbättra hudens textur.',
        image_small: 'bilder/hudproblem/102x102/acne.webp',
        image_large: 'bilder/hudproblem/200x200/acne.webp',
        image_alt: 'Microneedling för Aktiv Acne',
        image_title: 'Microneedling för Aktiv Acne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av aktiv acne',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka microneedling för aktiv acne',

        url: '/microneedling-acne.php',
        url_label: 'Läs mer om microneedling mot acne',
        url_title: 'Läs mer om microneedling mot acne',
    ),
);
$big_types = array(
    new Service(
        title: 'Boosta din Microneedling med PRX-T33-behandling',
        duration: null,
        price: null,
        content: '<p class="p200">I strävan efter optimala resultat av din hudvård, erbjuder vår klinik en unik kombinationsbehandling som förstärker effekten av microneedling genom att integrera PRX-T33, en banbrytande biorevitaliserande behandling. Denna synergiska behandlingsstrategi är utformad för att förbättra hudens struktur, elasticitet och lyster utan lång återhämtningstid.</p>
            <p class="p200 mt-m">PRX-T33-behandlingen appliceras efter microneedling-sessionen för att boosta hudens regenerativa processer och kollagenproduktion ännu mer. Eftersom PRX-T33 inte kräver nålar eller orsakar hudskada, är det ett utmärkt komplement för att förstärka och förlänga de positiva effekterna av microneedling. Förbered dig för att se en märkbar skillnad i din hud med en förbättrad ton, textur och en omfattande minskning av fina linjer och ojämnheter.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_alt: 'Boosta din Microneedling med PRX-T33-behandling',
        image_title: 'Boosta din Microneedling med PRX-T33-behandling',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling+PRX-T33-Boost',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka tid för behandling',
        icons: array(),
        procedures: array()
    ),
);

$treatment_areas_title = 'Microneedling efter område';
$treatment_areas_text = '<p class="p200">Microneedling är en mångsidig behandling lämplig för olika delar av ansiktet och kroppen.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Microneedling behandlar och förbättrar huden i ansiktet och kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/nasa.svg',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_Nose',
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
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för kindbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/overlapp.svg',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för överläppsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/haka.svg',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_Chin',
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
        description: '<p class="p200">Med microneedling kan vi behandla flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_Neck',
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
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_Decolletage',
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
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_Back',
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
        description: '<p class="p200">Behandlingen fungerar även utmärkt om du vill kombinera flera olika områden.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_1xArea',
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
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_2xAreas',
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
                url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Microneedling eftervård',
    image_small: '/bilder/process/358x272/microneedling-eftervard.webp',
    image_large: '/bilder/process/872x456/microneedling-eftervard.webp',
    image_alt: 'Microneedling eftervård',
    image_title: 'Microneedling eftervård',
    content: '<p class="p200">Efter en microneedlingbehandling är det flera viktiga steg du bör följa för att främja läkning och optimera resultatet av din behandling. Direkt efter behandlingen är det normalt att huden blir röd och svullen. Det är kritiskt att undvika att röra behandlingsområdet med smutsiga händer och att inte applicera smink de första 24 timmarna för att minimera risken för infektioner eller irritationer.</p>
    <p class="p200 mt-m">Under de första dagarna efter behandlingen, undvika fysisk aktivitet, bastu, och långa varma duschar som kan öka svullnad och irritation i huden. Solskydd är också av yttersta vikt; applicera solskydd med hög SPF dagligen för att skydda din hud mot UV-strålning, som kan vara extra skadlig för den nya känsliga huden efter microneedling. Dessutom rekommenderas att du använder milda, återfuktande produkter utan irriterande ingredienser för att hjälpa till med läkningsprocessen och behålla hudens fuktbalans.</p>
    <p class="p200 mt-m">Följ noggrant de eftervårdsinstruktioner som din behandlare ger dig och tveka inte att kontakta kliniken om du har några frågor eller oro kring din eftervård. En regelbunden microneedling kur rekommenderas för att du ska uppnå de mål du strävar efter med din hudvård.</p>',
    tags: array()
));

$service_brands_title = 'Varumärken för microneedling i Stockholm';
$service_brands_text = '<p class="p200">Vi utför microneedling med Dermapen och Exceed vilket är de modernaste och mest effektiva metoderna på markanden.</p>';
$service_brands = array(

    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Exceed',
        image: 'bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed',
        url_title: 'Exceedn',
    ),
);

$results_title = 'Microneedling före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
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
        image_before_small: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
        image_after_small: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
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
            title: 'Hur ofta kan man göra microneedling?',
            text: '<p class="p200">Rekommenderad frekvens för microneedling-behandlingar varierar beroende på hudens tillstånd och det önskade resultatet, men generellt kan behandlingar utföras med 4-6 veckors mellanrum. Detta intervall möjliggör fullständig läkning och kollagenproduktion mellan sessionerna. Din hudterapeut kommer att skräddarsy en behandlingsplan baserad på en individuell bedömning.</p>'
        ),
        new Question(
            title: 'Vad är microneedling bra för?',
            text: ' <p class="p200">Microneedling är effektivt för att förbättra hudens textur, elasticitet och fasthet. Det minskar synligheten av fina linjer, rynkor, akneärr och stora porer. Behandlingen stimulerar kroppens naturliga kollagen- och elastinproduktion, vilket leder till en friskare, mer ungdomlig hud.</p>'
        ),
        new Question(
            title: 'Hur snabbt kan man se resultat efter microneedling?',
            text: '<p class="p200">De första förbättringarna kan ofta märkas inom några veckor efter behandlingen, men de mest märkbara <a class="b200 underline color-deep-sea-400" href="resultat-microneedling.php">micronnedling resultaten</a> uppnås vanligtvis efter flera behandlingar och över tid, eftersom huden fortsätter att producera nytt kollagen. Fullständiga resultat kan ses efter 3-6 månader, beroende på behandlingsintensitet och hudens respons.</p>'
        ),
        new Question(
            title: 'Kan man göra microneedling hemma?',
            text: '<p class="p200">Även om det finns hemmakit för microneedling, rekommenderar vi inte att utföra behandlingen hemma. Professionella behandlingar använder längre nålar för djupare och mer effektiva resultat, och utförs under sterila förhållanden för att minimera risken för infektion. Det är viktigt att behandlingen utförs av utbildade hudterapeuter för bästa möjliga resultat och säkerhet.</p>'
        ),
        new Question(
            title: 'Kan man göra microneedling på sommaren?',
            text: '<p class="p200">Absolut, microneedling kan utföras även under sommaren. Intressant nog kommer Dermapen, som är världsledande inom microneedling, från Australien där solen skiner året om. Detta understryker vikten av korrekt eftervård, särskilt solskydd. Efter behandlingen är det kritiskt att använda solskyddsmedel med hög SPF och undvika direkt solljus för att skydda huden och säkerställa optimal läkning. Denna försiktighetsåtgärd hjälper till att undvika eventuella komplikationer som kan uppstå på grund av solens strålar.</p>'
        ),
        new Question(
            title: 'Kan man träna efter microneedling?',
            text: '<p class="p200">Det är bäst att undvika intensiv träning och svettning under de första 24-48 timmarna efter en microneedling-behandling. Överdriven svettning kan irritera den nyligen behandlade huden och öka risken för inflammation eller infektion.</p>'
        ),
        new Question(
            title: 'Är microneedling mot ytliga blodkärl effektivt?',
            text: '<p class="p200">Vi använder inte microneedling för att behandla ytliga blodkärl. För denna typ av hudproblem erbjuder vi en mer riktad och effektiv behandling med IPL-teknik, som är specialiserad på att minska synligheten av ytliga blodkärl genom att selektivt behandla de berörda områdena utan att skada omgivande vävnad.</p>'
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
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i microneedling',
        image_title: 'Cazzandra Lindberg - Expert på microneedling'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på microneedling',
        image_title: 'Veronika Benedik - Specialist inom microneedling'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom microneedling',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på microneedling'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot microneedling',
        image_title: 'Vilma Libom - Expert inom microneedling'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/microneedling.php" />
      
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>