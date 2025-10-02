<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ansiktsbehandling Stockholm | AcneSpecialisten';
$seo_description = 'Stockholms bästa ansiktsbehandlingar på Östermalm, Södermalm & Sundbyberg. Skräddarsydda behandlingar för alla hudtyper - från återfuktning till lyxbehandlingar.';
$seo_keywords = 'ansiktsbehandling, ansiktsbehandling stockholm, ansiktsbehandling östermalm, ansiktsbehandling södermalm, ansiktsbehandling sundbyberg, bästa ansiktsbehandling stockholm, bästa ansiktsbehandlning stockholm, ansiktsbehandling man';

$seo_image = 'bilder/hudbehandlingar/424x456/klassiska-ansiktsbehandlingar.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Ansiktsbehandlingar', '/ansiktsbehandlingar.php'),
);

$model = new Service(
    title: 'Ansiktsbehandling Stockholm',
    duration: null,
    price: 'Från 799 kr',
    content: '<p class="p200">Vi erbjuder ett brett utbud av klassiska ansiktsbehandlingar i Stockholm anpassade för varje individs unika behov. Vare sig du är ute efter att ge din mogna hy lite extra omsorg, vill återfukta huden eller bara vill unna dig själv en stunds lyx – vi har något för alla.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/klassiska-ansiktsbehandlingar.webp',
    image_large: 'bilder/hudbehandlingar/424x456/klassiska-ansiktsbehandlingar.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Klassiska ansiktsbehandlingar som passar alla.';

$description_title = 'Vad är klassiska ansiktsbehandlingar?';
$description_text = '<p class="p200">Klassiska ansiktsbehandlingar är en grundsten inom hudvård och erbjuder en upplevelse av avkoppling samtidigt som huden får den vård den behöver. Behandlingarna går ut på att rengöra, återfukta, balansera och revitalisera huden, samt att hantera specifika hudproblem.</p>
<p class="p200 mt-m">Hos oss på AcneSpecialisten kan du välja mellan flera typer av ansiktsbehandlingar. Vi erbjuder allt från den traditionella klassiska ansiktsbehandlingen till Antistress, där fokus ligger på avslappning. Hudterapeutens val anpassas helt efter dina behov, medan Peel, Boost & Glow siktar på att ge huden en extra boost. För den som vill ha det lilla extra erbjuder vi Lyx behandlingen. Oavsett vilken behandling du väljer, är vårt mål att ge din hud den bästa möjliga omsorgen.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingarna till?',
        image_small: '/bilder/process/358x272/ansiktsbehandlingar-process.webp',
        image_large: '/bilder/process/872x456/ansiktsbehandlingar-process.webp',
        image_alt: 'Processen för klassiska ansiktsbehandlingar',
        image_title: 'Processen för klassiska ansiktsbehandlingar',
        content: '<p class="p200">Hos AcneSpecialisten anpassas varje behandling efter den specifika behandling du väljer, men det finns vissa gemensamma steg som ingår i de flesta av våra klassiska ansiktsbehandlingar. Behandlingen inleds alltid med en rengöring av huden för att avlägsna smuts, talg och orenheter. Detta förbereder huden för de följande stegen och säkerställer att den kan dra nytta av de produkter och metoder som används.</p>
    <p class="p200 mt-m">Efter rengöringen kan en exfoliering genomföras för att ta bort döda hudceller och främja cellförnyelse. En ångbehandling kan också inkluderas för att öppna upp porerna och underlätta extraktion av pormaskar och akne. Därefter kan individuellt anpassade masker och serum appliceras baserat på hudens behov. Behandlingen avslutas ofta med att återfukta och balansera huden. Genom hela processen prioriteras din huds välbefinnande och komfort, och varje steg är skräddarsytt för att ge optimala resultat.</p>',
    ),
);

$types_title = 'Våra behandlingar';
$types_description = 'Här hittar du vårt utbud av klassiska ansiktsbehandlingar på Östermalm, Södermalm och Sundbyberg.';
$big_types = array(
    new Service(
        title: 'Klassisk Ansiktsbehandling',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Vår klassiska ansiktsbehandling är idealisk för alla, oavsett hudtyp. Den rengör, vårdar och återfuktar huden för att ge den ny lyster. Behandlingsprocessen inleds med rengöring som exfolierar bort döda hudceller. Efter en varsam ångprocess som öppnar porerna, utför vi en lättare porrengöring och brynplockning. Slutligen appliceras en lugnande ansiktsmask och en återfuktande dagkräm, skräddarsydd för just din hud.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-klassisk.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-klassisk.webp',
        image_alt: 'Klassisk',
        image_title: 'Klassisk',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1295 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_Classic&procedures=PriceClass_2_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3495 kr',
                savings: '1165 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_Classic&procedures=PriceClass_2_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '4995 kr',
                savings: '999 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_Classic&procedures=PriceClass_2_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'Ansiktsbehandling - Antistress',
        duration: '70 min',
        price: null,
        content: '<p class="p200">Unna dig en paus från vardagens stress med vår Ansiktsbehandling Antistress. Den börjar med en lätt rengöring för att varsamt fräscha upp huden. Den vitaliserande oljemassagen ger en känsla av avkoppling och balans. Behandlingen avslutas med vår skräddarsydda LED-ljusterapi och en riktligt återfuktande kräm, allt för att säkerställa en total känsla av välbefinnande.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-antistress.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-antistress.webp',
        image_alt: 'Ansiktsbehandling - Antistress',
        image_title: 'Ansiktsbehandling - Antistress',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array('rengoring' => 'Lätt rengöring', 'mild' => 'Ansiktsmassage', 'led' => 'LED'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_AntiStress&procedures=PriceClass_3_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: '1332 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_AntiStress&procedures=PriceClass_3_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: '1199 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_AntiStress&procedures=PriceClass_3_Procedure_5'
            ),
        )
    ),
    new Service(
        title: 'Hudterapeutens val',
        duration: '60 min',
        price: null,
        content: '<p class="p200">En ansiktsbehandling som skräddarsys helt efter dina behov och vår hudterapeuts rekommendationer. Behandlingen inkluderar en sheetmask i kombination med LED-mask och kompletteras med olika moment som bäst passar din hudtyp. Exempelvis kan detta inkludera exfoliering, vapozon, tömning av porer, brynformning och serum som är särskilt utvalda för dig.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-hudterapeutens-val.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-hudterapeutens-val.webp',
        image_alt: 'Hudterapeutens val',
        image_title: 'Hudterapeutens val',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: '1332 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: '1199 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_TherapistsChoice&procedures=PriceClass_3_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'Peel, Boost & Glow',
        duration: '60 min',
        price: null,
        content: '<p class="p200">För en uppfriskande och lystergivande hudupplevelse, prova vår Peel, Boost & Glow behandling. Den här behandling är idealisk för dig som söker en intensiv fuktboost kombinerat med en omedelbar lyster. Vi använder oss av avancerade syrabaserade produkter för att noggrant rena huden och minimera porerna. Brynplock ingår också i behandlingen för att fullända din look. Avslutningsvis applicerar vi en djupt återfuktande sheetmask och använder LED-ljusteknik för att främja anti-age effekter och förbättra mikrocirkulationen i huden.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-peel-boost-glow.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-peel-boost-glow.webp',
        image_alt: 'Peel, Boost & Glow',
        image_title: 'Peel, Boost & Glow',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PeelBoostGlow&procedures=PriceClass_3_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: '1332 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PeelBoostGlow&procedures=PriceClass_3_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: '1199 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PeelBoostGlow&procedures=PriceClass_3_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'Lyx',
        duration: '90 min',
        price: null,
        content: '<p class="p200">Unna dig vår mest exklusiva och avkopplande ansiktsbehandling. Denna omfattande behandling börjar med en grundlig djuprengöring av huden, följd av en avslappnande massage för ansikte och dekolletage med en vårdande ansiktsolja som stimulerar cellförnyelsen och förbättrar kollagensyntesen. En effektiv exfoliering med syra förfinar huden och förbättrar dess elasticitet, fasthet och ton. Ögonbrynen och fransarna får också extra omsorg med en professionell färgning och formning som passar ditt ansikte. Behandlingen avslutas med en intensivt återfuktande sheetmask och en avancerad LED-mask som stimulerar blodcirkulationen, främjar hudens naturliga reparationsprocess och verkar anti-inflammatoriskt. Det är en fulländad upplevelse som inte bara förskönar utan också ger djup avslappning.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-lyx.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-lyx.webp',
        image_alt: 'Ansiktsbehandling Lyx',
        image_title: 'Ansiktsbehandling Lyx',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_Luxury&procedures=PriceClass_4_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: '1665 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_Luxury&procedures=PriceClass_4_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: '1599 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_Luxury&procedures=PriceClass_4_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'Porrengöring',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Vår porrengöringsbehandling är speciellt framtagen för att effektivt rensa tilltäppta porer och främja en klarare hud. Behandlingen börjar med en exfolierande rengöring och mjukgörande ångbehandlingför att öppna upp och mjuka upp porerna. Noggrann manuell porrensning följer för att varsamt avlägsna orenheter och pormaskar. Vi avslutar med en lugnande ansiktsmask och lägger på en återfuktande kräm som är anpassad för din hudtyp.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-porrengoring.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandling-porrengoring.webp',
        image_alt: 'Porrengöring',
        image_title: 'Porrengöring',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        url: '/porrengoring.php',
        url_label: 'Läs mer om porrengöring',
        url_title: 'Läs mer om porrengöring',
        icons: array('rengoring' => 'Rengöring', 'anga' => 'Ånga', 'extraktion' => 'Extraktion', 'mask' => 'Mask'),
        procedures: array(
            new Procedure(
                label: '1 porrengöring',
                price: '1295 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing&procedures=PriceClass_2_Procedure_1'
            ),
            new Procedure(
                label: '3 porrengöringar',
                price: '3495 kr',
                savings: '1165 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing&procedures=PriceClass_2_Procedure_3'
            ),
            new Procedure(
                label: '5 porrengöringar',
                price: '4995 kr',
                savings: '999 kr per behandling',
                booking_url: 'https://boka.acnespecialisten.se?flow=facialClassic&FacialType=Service_Facial_PoreCleansing&procedures=PriceClass_2_Procedure_5'
            )
        )
    ),

);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård och underhåll',
    image_small: '/bilder/process/358x272/ansiktsbehandlingar-eftervard.webp',
    image_large: '/bilder/process/872x456/ansiktsbehandlingar-eftervard.webp',
    image_alt: 'Eftervård och underhåll',
    image_title: 'Eftervård och underhåll',
    content: '<p class="p200">Våra klassiska ansiktsbehandlingar erbjuder en grundlig rengöring och uppfräschning av huden. Efter din behandling är det viktigt att följa några enkla eftervårdsinstruktioner för att bibehålla resultatet. Undvik starkt solsken och använd en hög SPF för att skydda huden. Vi rekommenderar också att du undviker tung makeup och hudirriterande ämnen de första 24 timmarna efter behandlingen. Fortsätt att återfukta huden väl och använd de produkter som rekommenderats av din hudterapeut för att stödja hudens läkning och förbättring.</p>
    <p class="p200 mt-m">För dig som gjort en lite mer resultatinriktad behandling är det viktigt att komma ihåg att inte klämma och pilla på huden. Om du har några frågor om din eftervård, tveka inte att kontakta oss för personliga råd.</p>',
));

$results_title = 'Ansiktsbehandlingar före och efter resultat';
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
            title: 'Varför ska man göra ansiktsbehandling?',
            text: '<p class="p200">Ansiktsbehandlingar erbjuder en rad fördelar för huden, inklusive djuprengöring, återfuktning, och exfoliering, vilket kan hjälpa till att förbättra hudens textur och utseende. Regelbundna behandlingar kan även minska tecken på åldrande, behandla akne och minska synligheten av porer. Genom att anpassa behandlingen efter din specifika hudtyp och behov, kan en ansiktsbehandling också bidra till en friskare, mer strålande hud med förbättrad elasticitet och fasthet.</p>'
        ),
        new Question(
            title: 'Hur ofta ska man göra ansiktsbehandling?',
            text: '<p class="p200">Frekvensen för ansiktsbehandlingar kan variera beroende på flera faktorer, såsom din hudtyp, hudens tillstånd, och specifika hudproblem. Generellt rekommenderas det att göra en ansiktsbehandling var 4:e till 6:e vecka för att stödja hudens naturliga förnyelsecykel och uppnå bästa möjliga resultat. Det är dock viktigt att konsultera med en hudterapeut som kan ge råd baserat på dina individuella behov.</p>'
        ),
        new Question(
            title: 'Vad kostar en ansiktsbehandling?',
            text: '<p class="p200">Priset för en ansiktsbehandling hos oss varierar beroende på vilken typ av behandling du väljer. Vi erbjuder ett brett utbud av ansiktsbehandlingar, utformade för att möta olika hudvårdsbehov och önskemål. Våra priser börjar från 995 kr för grundläggande behandlingar och kan gå upp till 1995 kr för mer avancerade alternativ. För att se de specifika priserna för varje behandling, vänligen referera till prislistan i texten ovanför. Vi strävar efter att erbjuda behandlingar av högsta kvalitet, anpassade efter dina individuella behov, för att säkerställa att du får bästa möjliga resultat och valuta för pengarna.</p>'
        ),
        new Question(
            title: 'Vilken ansiktsbehandling är bäst?',
            text: '<p class="p200">Det finns ingen "bästa" ansiktsbehandling som passar alla eftersom varje persons hud är unik, med olika behov och problem. Populära behandlingar inkluderar hydrerande ansiktsbehandlingar, anti-aging behandlingar, och djuprengörande behandlingar för aknebenägen hud. För att hitta den bästa behandlingen för just dig, rekommenderas det att du konsulterar med en professionell hudterapeut som kan analysera din hudtyp, diskutera dina hudvårdsbehov, och rekommendera en skräddarsydd behandlingsplan.</p>

            <p class="p200 mt-xl">Dessa svar är designade för att vara både informativa och engagerande, och bör anpassas ytterligare för att passa den specifika tonen och stilen på din webbsida. Det är också viktigt att uppdatera informationen regelbundet för att återspegla eventuella förändringar i behandlingar, priser, och hudvårdstrender.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i ansiktsbehandlingar',
        image_title: 'Cazzandra Lindberg - Expert på ansiktsbehandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på ansiktsbehandlingar',
        image_title: 'Veronika Benedik - Specialist inom ansiktsvård'
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund, hudterapeut med kunskap inom ansiktsbehandlingar',
        image_title: 'Julia Eklund - Hudterapeut specialiserad på ansiktsbehandlingar'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot ansiktsbehandlingar',
        image_title: 'Vilma Libom - Expert inom ansiktsbehandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Alma Hybrid',
        image: '/bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Dermapen',
        image: '/bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: '/bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
    new Brand(
        label: 'HydraFacial',
        image: '/bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Skin Tech',
        image: '/bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech/',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: '/bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl/',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'CryoPen',
        image: '/bilder/logotyper/cryopen.svg',
        image_alt: 'CryoPen logotyp',
        image_title: 'CryoPen - frysbehandling',
        url: '/cryopen.php',
        url_title: 'CryoPen',
    ),
    new Brand(
        label: 'Splendor X',
        image: '/bilder/logotyper/splendor-x.png',
        image_alt: 'Splendor X logotyp',
        image_title: 'Splendor X - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: '/bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice/',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Infuzion',
        image: '/bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
    new Brand(
        label: 'Lumenis',
        image: '/bilder/logotyper/lumenis.svg',
        image_alt: 'Lumenis logotyp',
        image_title: 'Lumenis - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x/',
        url_title: 'Lumenis',
    ),
    new Brand(
        label: 'PRX-T33',
        image: '/bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
    ),
    new Brand(
        label: 'Exceed',
        image: '/bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed/',
        url_title: 'Exceedn',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: '/bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
    ),
);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/ansiktsbehandlingar.php" />

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
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken/" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken/" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>