<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Dermabrasion | AcneSpecialisten';
$seo_description = 'Effektiv förbättring av hudens textur och utseende. Med avancerad teknik och expertis får du djupgående hudförnyelse och återuppbyggnad.';
$seo_keywords = 'dermabrasion';

$seo_image = '/images/treatments/large/dermabrasion.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Dermabrasion', '/hudbehandlingar/dermabrasion/'),
);

$model = new Service(
    title: 'Dermabrasion',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Dermabrasion är en effektiv behandling som slipar huden för att förbättra hudens textur och utseende. Vår dermabrasion-teknik skräddarsys för att passa din hudtyp och ger en djup exfoliering som främjar hudens förnyelse och kollagenproduktion.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/dermabrasion.webp',
    image_large: 'bilder/hudbehandlingar/424x456/dermabrasion.webp',
    image_alt: 'Dermabrasion',
    image_title: 'Dermabrasion',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Dermabrasion',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Hudslipning som jämnar hudens yta.';

$description_title = 'Vad är dermabrasion?';
$description_text = '<p class="p200">Dermabrasion är en djupgående hudföryngrande behandling som effektivt förbättrar hudens yta och textur. Genom en mekanisk exfolieringsprocess avlägsnas döda hudceller, vilket stimulerar hudens förnyelse och ger en märkbar föryngring av huden.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi dermabrasion som en skräddarsydd behandling för att möta olika hudbehov. Detta inkluderar att minska acneärr, fina linjer, och pigmentfläckar samt förbättra hudens övergripande utseende. Vår dermabrasion-behandling är skonsam men effektiv, vilket gör den lämplig för olika hudtyper. Genom att stimulera kollagenproduktionen och cellförnyelsen, bidrar behandlingen till en fräschare, mjukare och mer strålande hud. Dermabrasion är en idealisk behandling för dig som söker en konkret förbättring av din hudkvalitet.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hydra-dermabrasion VS micro-dermabrasion',
        image_small: '/bilder/process/358x272/dermabrasion-process.webp',
        image_large: '/bilder/process/872x456/dermabrasion-process.webp',
        image_alt: 'Hydra-Dermabrasion VS Micro-Dermabrasion',
        image_title: 'Hydra-Dermabrasion VS Micro-Dermabrasion',
        content: '<p class="p200">Microdermabrasion och hydradermabrasion (ofta marknadsförd som Hydrafacial) är två populära hudvårdsbehandlingar som erbjuder föryngring och förbättring av hudens utseende. Trots likheter i deras syfte att förbättra hudens hälsa och utseende, skiljer sig metoderna åt i tillvägagångssätt, teknik och fördelar.</p>
    <p class="p200 mt-m">När det gäller att välja mellan microdermabrasion och hydradermabrasion, beror det på individens hudtyp, hudtillstånd och de specifika målen med behandlingen. Microdermabrasion kan vara ett bättre val för de som söker en mer intensiv exfoliering och har hud som tål denna typ av behandling, medan hydradermabrasion (Hydrafacial) är ett utmärkt alternativ för de som föredrar en skonsammare behandling som inte bara rengör och exfolierar utan också återfuktar och tillför näring till huden.</p>
    <p class="p200 mt-m">Båda behandlingarna erbjuder fördelar som förbättrad hudtextur och ton, minskning av fina linjer och rynkor, samt en friskare och mer strålande hud. Valet mellan microdermabrasion och hydradermabrasion bör baseras på en professionell hudvårdspecialists rekommendationer, som kan bedöma hudens behov och rekommendera den mest lämpliga behandlingen för att uppnå önskade resultat.</p>',
    ),
);

$types_title = '';
$types_description = '';
$big_types = array(
    new Service(
        title: 'HydraDermabrasion - Standard',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Hydradermabrasion är skonsam behandling som kombinerar exfoliering, djuprengöring och återfuktning av huden. Istället för kristaller använder hydradermabrasion en ström av vatten och aktiva serum under högt tryck för att rengöra porerna och avlägsna döda hudceller samtidigt som huden återfuktas och närs med olika serum anpassade efter hudtyp och specifika hudproblem.</p>
        <p class="p200 mt-m">Denna metod är känd för sin förmåga att omedelbart förbättra hudens hydrering, minska synligheten av fina linjer och rynkor, och ge en övergripande lyster. Hydradermabrasion är särskilt populär för sin förmåga att behandla en mängd hudproblem utan irritation, vilket gör den lämplig för nästan alla hudtyper, inklusive känslig hud.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/hydrafacial-standard.webp',
        image_large: '/bilder/hudbehandlingar/200x200/hydrafacial-standard.webp',
        image_alt: 'HydraDermabrasion - Standard',
        image_title: 'HydraDermabrasion - Standard',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Standard&procedures=PriceClass_4_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'Spara 790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Standard&procedures=PriceClass_4_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Standard&procedures=PriceClass_4_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'HydraDermabrasion - Boost & Glow',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Upptäck vår specialanpassade Hydrafacial-behandling för mogen hy. Vi använder ett unikt serum berikat med två kraftfulla peptider som aktiverar hudens egna proteiner, essentiella för elasticitet och fasthet. Denna djupgående behandling penetrerar huden för att stärka dess struktur, vilket minskar synligheten av rynkor och fina linjer för en omedelbar boost och strålande lyster.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/hydrafacial-boost-glow.webp',
        image_large: '/bilder/hudbehandlingar/200x200/hydrafacial-boost-glow.webp',
        image_alt: 'HydraDermabrasion - Boost & Glow',
        image_title: 'HydraDermabrasion - Boost & Glow',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Boost_Glow&procedures=PriceClass_5_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Boost_Glow&procedures=PriceClass_5_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Boost_Glow&procedures=PriceClass_5_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'HydraDermabrasion - Mot Pormaskar',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Vår Hydrafacial-behandling för problemhy är skräddarsydd för att effektivt bekämpa pormaskar och finnar. Genom att använda en intensiv peeling med två specifika syror tar vi målmedvetet bort orenheter och överflödigt talg som bidrar till problemhy. Denna djuprengörande process minskar pormaskar och finnar, lämnar huden ren och klar med förbättrad hudtextur.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/hydrafacial-pormaskar.webp',
        image_large: '/bilder/hudbehandlingar/200x200/hydrafacial-pormaskar.webp',
        image_alt: 'HydraDermabrasion - Mot Pormaskar',
        image_title: 'HydraDermabrasion - Mot Pormaskar',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Pore_Minimizer'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Pore_Minimizer'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Brand_HydraFacial&type=Hydrafacial_Pore_Minimizer'
            )
        )
    ),
    new Service(
        title: 'MicroDermabrasion',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Microdermabrasion är en icke-invasiv mekanisk peelingbehandling som använder mikrokristaller eller en diamantspets för att varsamt exfoliera det yttersta lagret av döda hudceller från epidermis. Genom att avlägsna döda hudceller främjar behandlingen cellförnyelse, vilket leder till en jämnare hudton, minskning av fina linjer, och en allmän förbättring av hudens textur och utseende.</p>
        <p class="p200 mt-m">Microdermabrasion är effektiv för att behandla ljusare ärrbildningar, åldersfläckar och andra yttre hudproblem. Behandlingen stimulerar även blodcirkulationen vilket kan bidra till en förbättrad hudhälsa över tid.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/microdermabrasion.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microdermabrasion.webp',
        image_alt: 'MicroDermabrasion',
        image_title: 'MicroDermabrasion',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Method_MicroDermabrasion&type=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'Spara 990 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Method_MicroDermabrasion&type=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: 'Spara 1980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=dermabrasion&method=Method_MicroDermabrasion&type=Microdermabrasion_1xArea&procedures=PriceClass_5_Procedure_5'
            )
        )
    ),
);

$service_brands_title = 'Märken för Dermabrasion';
$service_brands_text = '<p class="p200">Vi utför dermabrasion med HydraFacial och Microdermabrasion vilket är de modernaste och mest effektiva metoderna på markanden.</p>';
$service_brands = array(

    new Brand(
        label: 'HydraFacial',
        image: 'bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: 'bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
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
            title: 'Hur många dermabrasion-behandlingar krävs för att se resultat?',
            text: 'Antalet dermabrasion-behandlingar som krävs varierar från person till person, beroende på hudtyp och de specifika hudproblem som ska adresseras. Oftast rekommenderas en serie av behandlingar för att uppnå önskade resultat, med regelbundna underhållsbehandlingar för att bibehålla hudens förbättrade tillstånd.'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå dermabrasion?',
            text: 'Det rekommenderas att genomgå dermabrasion regelbundet för att upprätthålla resultat. För de flesta är en behandling var fjärde till sjätte vecka idealisk, men frekvensen kan anpassas efter individuella behov och hudens respons på behandlingen.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig efter en dermabrasion-behandling?',
            text: 'Efter en dermabrasion-behandling kan du uppleva en viss rodnad och en känsla av mjukhet i huden. Det är viktigt att följa eftervårdsinstruktionerna för att främja läkning och optimera resultatet. Vid mer intensiva behandlingar kan hudens reaktion vara mer märkbar, såsom lätt svullnad eller känslighet.'
        ),
        new Question(
            title: 'Krävs särskild vård efter en dermabrasion-behandling?',
            text: 'Ja, eftervård är viktig för att underhålla resultaten av en dermabrasion-behandling. Detta inkluderar användning av solskydd, undvikande av direkta solstrålar, och att hålla sig till en mild hudvårdsrutin. Undvik även att använda irriterande eller exfolierande produkter under de första dagarna efter behandlingen.'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i dermabrasion',
        image_title: 'Cazzandra Lindberg - Expert på dermabrasion'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på dermabrasion',
        image_title: 'Veronika Benedik - Specialist inom dermabrasion'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom dermabrasion',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på dermabrasion'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot dermabrasion',
        image_title: 'Vilma Libom - Expert inom dermabrasion'
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

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/dermabrasion/" />

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