<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Infuzion behandling - AcneSpecialisten';
$seo_description = 'Infuzion ger effekterna hos fillers och skinbooster, utan att använda nålar. Stimulera huden med effektivt serum. Boka en gratis konsultation i dag!';
$seo_keywords = 'mesoterapi, infuzion behandling, infuzion, mesoterapi stockholm';

$seo_image = 'bilder/varumarken/424x456/infuzion.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Infuzion', '/infuzion.php'),
);

$model = new Service(
    title: 'Infuzion behandling - Mesoterapi Stockholm',
    duration: '50 min',
    price: '2595 kr',
    content: '<p class="p200">Infuzion är en avancerad form av mesoterapi utan nålar som effektivt slussar in serum djupt i huden. Omedelbara resultat med utan återhämtningstid, vilket gör den till en populär teknik för de som söker effektiva hudförbättringar utan nålar.</p>',
    image_small: 'bilder/varumarken/358x274/infuzion.webp',
    image_large: 'bilder/varumarken/424x456/infuzion.webp',
    image_alt: 'Infuzion',
    image_title: 'Infuzion',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Infuzion',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=infuzion',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '2595 kr',
            savings: null,
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea&procedures=PriceClass_5_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '6995 kr',
            savings: 'Spara 790 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea&procedures=PriceClass_5_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '9995 kr',
            savings: 'Spara 2980 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea&procedures=PriceClass_5_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$floating_box_title = "Infuzion";
$floating_box = 'En effekt av fillers och skinbooster.';

$description_title = 'Vad är Infuzion?';
$description_text = '<p class="p200">Infuzion är en unik skinbooster-behandling som kombinerar fördelarna med fillers och skinboosters, men helt utan nålars bieffekter eller biverkningar. Detta innovativa koncept använder Cytocare 532, ett serum berikat med hyaluronsyra och 52 vitala vitaminer och mineraler, för att djupgående återfukta huden och stimulera produktionen av kollagen och elastin. Dessa ämnen är avgörande för att bibehålla hudens fyllighet och elasticitet.</p>
<p class="p200 mt-m">Infuzion behandlingen utförs med en specialroller och galvanisk ström, som slussar serumet 3mm djupt in i huden och når varje enskild cell. Denna metod är särskilt effektiv eftersom den tillåter behandling nära ögonen och andra känsliga områden, utan nålar. Behandlingen är idealisk för ansiktet, halsen, dekolletaget och händerna, och erbjuder en rad fördelar, såsom minskning av mörka ringar, utfyllnad under ögonen, förbättrad hudfasthet och elasticitet, samt reduktion av fina linjer och torrhet. Den ger huden en fräschare lyster och en jämnare hudton och textur.</p>
<p class="p200 mt-m">För optimala och långvariga resultat rekommenderas tre behandlingar med en veckas mellanrum, vilket ger effekter som varar i upp till sex månader. Därefter räcker det med en underhållsbehandling var sjätte månad. Vi erbjuder även Multifuzion, en kombination av microneedling och Infuzion, för att öka effekten och möjliggöra djupare penetration av serumet efter microneedling. Denna kombinationsbehandling är särskilt effektiv för att stimulera naturlig proteinproduktion och strama upp åldrande hud.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/infuzion-process.webp',
        image_large: '/bilder/process/872x456/infuzion-process.webp',
        image_alt: 'Hur går behandlingen med Infuzion till?',
        image_title: 'Hur går behandlingen med Infuzion till?',
        content: '<p class="p200">En Infuzion behandling börjar med en noggrann rengöring av huden för att avlägsna smuts och smink Därefter väljs ett av två specifika serum beroende på kundens hudbehov. Volymizer-serumet, som är rikt på ren hyaluronsyra med en molekylmassa på 3000 kDa, syftar till att maximera hudens volym och återfuktning. Boozter-serumet, å andra sidan, kombinerar hyaluronsyra med essentiella vitaminer och antioxidanter med en molekylmassa på 1000 kDa, för att återuppliva och stärka huden.</p>
        <p class="p200 mt-m">När serumet har applicerats används Infuzion teknologin för att slussa ner de aktiva ingredienserna i huden med hjälp av galvanisk ström. Denna metod gör det möjligt för ingredienserna att penetrera betydligt djupare än vanliga hudvårdsprodukter, vilket ger en mer effektiv och långvarig effekt. Behandlingen är helt smärtfri med resultat som kan ses omedelbart efteråt, utan någon återhämtningstid eller svullnad.</p>',
    ),
);

$types_title = '';
$types_description = '';
/*$big_types = array(
    new Service(
        title: 'Multifuzion - Infuzion + Microneedling',
        duration: null,
        price: null,
        content: '<p class="p200"><p class="p200">Multifuzion är en avancerad hudförbättringsmetod som kombinerar microneedling och Infuzion för att erbjuda en omfattande behandling för hudföryngring. Processen börjar med microneedling för att skapa mikroskopiska kanaler i huden, vilket stimulerar kollagenproduktionen och förbättrar hudens struktur.</p>
        <p class="p200 mt-m">Därefter appliceras Infuzion-behandlingen, där hudens förmåga att absorbera de näringsrika serumerna förbättras avsevärt genom de skapade kanalerna. Denna synergistiska effekt ger en intensiv hydrering och näring, vilket resulterar i en slätare, mer strålande hud med minskade tecken på åldrande.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_alt: 'Multizuion - Infuzion + Microneedling',
        image_title: 'Multizuion - Infuzion + Microneedling',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Infuzion',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=infuzion',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka tid för behandling',
        icons: array(),
        procedures: array()
    ),
);*/

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        title: null,
        description: null,
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Infuzion behandling i ansiktet',
                image_title: 'Infuzion behandling i ansiktet',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling i ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Infuzion behandling för halsen',
                image_title: 'Infuzion behandling för halsen',
                title: 'Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling för halsen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Infuzion behandling för dekolletaget',
                image_title: 'Infuzion behandling för dekolletaget',
                title: 'Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling för dekolletaget'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Infuzion behandling för händerna',
                image_title: 'Infuzion behandling för händerna',
                title: 'Händer',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling för händerna'
            ),

        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Kombinera flera områden för ett bättre resultat.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
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
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_2xAreas',
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
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$results_title = 'Infuzion före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
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

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka områden kan behandlas med Infuzion System®?',
            text: '<p class="p200">Infuzion System® är mångsidigt och kan användas för att behandla flera områden, inklusive ansikte, händer, hals och dekolletage. Det är också effektivt för att rikta in sig på specifika problemområden som mörka ringar under ögonen, nasolabialveck, kråksparkar, rynkor runt munnen och för att skapa fylligare läppar.</p>'
        ),

        new Question(
            title: 'Är Infuzion-behandling smärtsam?',
            text: '<p class="p200">Nej, Infuzion-behandling är helt smärtfri. Till skillnad från traditionella metoder som använder nålar för att införa aktiva ingredienser i huden, använder Infuzion en specialanpassad elektrisk ström för att öppna porerna och tillåta en djup penetration utan obehag.</p>'
        ),

        new Question(
            title: 'Hur länge varar resultaten från en Infuzion-behandling?',
            text: '<p class="p200">Resultaten från en Infuzion-behandling kan variera beroende på individens hudtyp och skötsel efter behandlingen. Många klienter observerar omedelbara förbättringar i hudens återfuktning och textur. För att upprätthålla och förbättra dessa resultat rekommenderas regelbundna behandlingar samt en anpassad hudvårdsrutin.</p>'
        ),

        new Question(
            title: 'Vilka är de främsta fördelarna med att välja Infuzion System® jämfört med andra hudförbättringsmetoder?',
            text: '<p class="p200">Infuzion System® erbjuder flera unika fördelar jämfört med andra metoder, inklusive dess förmåga att leverera aktiva ingredienser djupt in i huden utan smärta eller obehag. Det minimerar också risken för irritation, svullnad och blåmärken som kan uppstå med injektionsbaserade behandlingar. Dessutom är Infuzion effektiv för ett brett spektrum av hudtyper och problemområden, vilket gör det till en mångsidig och inkluderande behandling för hudföryngring.</p>'
        ),
        new Question(
            title: 'Vilka hudproblem är infuzion bra mot?',
            text: '<p class="p200">Infuzion System® är utmärkt för en bred variation av hudproblem, tack vare dess förmåga att djupt återfukta huden och förbättra dess övergripande textur och lyster. Det är särskilt effektivt mot fina linjer och rynkor, då det hjälper till att fylla ut och jämnar ut huden för ett mer ungdomligt utseende. Behandlingen är också idealisk för de som kämpar med torrhet eller matt hud, eftersom den införda hyaluronsyran verkar återfuktande på djupet. Vidare är Infuzion ett bra alternativ för dem som vill förebygga hudåldrande eller som söker en mildare, icke-invasiv behandling för hudförbättring. Genom att erbjuda djup hydrering och främja hudens hälsa på cellnivå, är Infuzion System® en omfattande lösning för många olika hudproblem.</p>'
        ),

    )
);
$faq_view_more = 'Se alla frågor & svar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Infuzion-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på Infuzion-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Infuzion',
        image_title: 'Veronika Benedik - Specialist inom Infuzion-vård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom Infuzion-behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på Infuzion'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Infuzion-behandlingar',
        image_title: 'Vilma Libom - Expert inom Infuzion-behandlingar'
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
        label: 'Powerlite Photonova',
        image: '/bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova/',
        url_title: 'Powerlite Photonova',
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

    <link rel="canonical" href="https://www.acnespecialisten.se/infuzion.php" />

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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
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