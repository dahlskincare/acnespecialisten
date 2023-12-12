<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Klassiska Ansiktsbehandlingar - Professionell Hudvård | AcneSpecialisten';
$seo_description = 'Upptäck AcneSpecialistens klassiska ansiktsbehandlingar för optimal hudvård. Med vår expertis ger vi din hud den bästa omvårdnaden den förtjänar. Professionella behandlingar och rådgivning endast ett steg bort.';
$seo_keywords = 'klassiska ansiktsbehandlingar, hudvård, förebyggande hudvård, professionell hudvård, hudförbättring, återfuktning, hudrengöring, AcneSpecialisten';


$seo_image = 'images/treatments/large/ansiktsbehandlingar-klassiska.jpg';


$model = new Service(
    title: 'Klassiska ansiktsbehandlingar',
    duration: null,
    price: 'Från 799 kr',
    content: '<p class="p200">Hos oss på AcneSpecialisten erbjuder vi ett brett utbud av klassiska ansiktsbehandlingar anpassade för varje individs unika behov. Oavsett om du befinner dig på Östermalm, Södermalm eller i Sundbyberg, kan du välja den behandling som bäst matchar din hudtyp och dina önskemål. Vare sig du är ute efter att ge din mogen hy lite extra omsorg, vill återfukta huden eller bara vill unna dig själv en stunds lyx – vi har något för alla.</p>',
    image_small: 'bilder/behandlingar/358x274/klassiska-ansiktsbehandlingar.webp',
    image_large: 'bilder/behandlingar/424x456/klassiska-ansiktsbehandlingar.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Klassiska ansiktsbehandlingar som passar alla.';

$nav_buttons = array(
    'about' => 'Om ansiktsbehandlingar mot problemhy',
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

$description_title = 'Vad är klassiska ansiktsbehandlingar?';
$description_text = '<p class="p200">Klassiska ansiktsbehandlingar är en grundsten inom hudvård och erbjuder en upplevelse av avkoppling samtidigt som huden får den vård den behöver. Behandlingarna går ut på att rengöra, återfukta, balansera och revitalisera huden, samt att hantera specifika hudproblem.</p>
<p class="p200 mt-m">Hos oss på AcneSpecialisten kan du välja mellan flera typer av klassiska ansiktsbehandlingar. Vi erbjuder allt från den traditionella Klassisk ansiktsbehandling till Antistress, där fokus ligger på avslappning. Hudterapeutens val anpassas helt efter dina behov, medan Peel, Boost & Glow siktar på att ge huden en extra boost. För den som vill ha det lilla extra erbjuder vi Lyx behandlingen. Oavsett vilken behandling du väljer, är vårt mål att ge din hud den bästa möjliga omsorgen.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför klassiska ansiktsbehandlingar',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelse inför klassiska ansiktsbehandlingar',
        image_title: 'Förberedelse inför klassiska ansiktsbehandlingar',
        content: '<p class="p200">Hos AcneSpecialisten är vårt främsta mål att du ska känna dig bekväm och väl omhändertagen. Om du vill kan du vidta vissa förberedande åtgärder innan din ansiktsbehandling, såsom att undvika starka hudprodukter eller direkt solljus. Men det är viktigt att betona att du alltid kan komma precis som du är. Vi förstår att varje individ är unik, och vi anpassar varje behandling efter dina specifika behov och önskemål.</p>
        <p class="p200 mt-m">Om du har några specifika bekymmer eller frågor inför din behandling, tveka inte att meddela oss. Vår prioritet är din komfort och att leverera den bästa möjliga behandlingen för dig. Välkommen till en avslappnande och förnyande upplevelse hos oss på AcneSpecialisten!</p>',
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
        title: 'Processen för klassiska ansiktsbehandlingar',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Processen för klassiska ansiktsbehandlingar',
        image_title: 'Processen för klassiska ansiktsbehandlingar',
        content: '<p class="p200">Hos AcneSpecialisten anpassas varje ansiktsbehandling efter den specifika behandling du väljer, men det finns vissa gemensamma steg som ingår i de flesta av våra klassiska ansiktsbehandlingar. Behandlingen inleds alltid med en rengöring av huden för att avlägsna smuts, talg och orenheter. Detta förbereder huden för de följande stegen och säkerställer att den kan dra nytta av de produkter och metoder som används.</p>
    <p class="p200 mt-m">Efter rengöringen kan en exfoliering genomföras för att ta bort döda hudceller och främja cellförnyelse. En ångbehandling kan också inkluderas för att öppna upp porerna och underlätta extraktion av pormaskar och akne. Därefter kan individuellt anpassade masker och serum appliceras baserat på hudens behov. Behandlingen avslutas ofta med en fuktighetskräm eller solskydd. Genom hela processen prioriteras din huds välbefinnande och komfort, och varje steg är skräddarsytt för att ge optimala resultat.</p>',
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

$types_title = 'Våra klassiska ansiktsbehandlingar';
$types_description = 'Här hittar du vårt utbud av klassiska ansiktsbehandlingar.';
$big_types = array(
    new Service(
        title: 'Klassisk',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Vår klassiska ansiktsbehandling är idealisk för alla, oavsett hudtyp. Den rengör, vårdar och återfuktar huden för att ge den ny lyster. Behandlingsprocessen inleds med rengöring, följt av en exfoliering som tar bort döda hudceller. Efter en varsam ångprocess som öppnar porerna, utför vi en försiktig porrengöring och brynplockning. Slutligen appliceras en närande ansiktsmask och en återfuktande dagkräm, skräddarsydd för just din hud.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Klassisk',
        image_title: 'Klassisk',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka klassisk behandling',
        booking_url_title: 'Boka klassisk behandling',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '995 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '2595 kr',
                savings: '865 kr per besök',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '2595 kr',
                savings: '799 kr per besök',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Ansiktsbehandling - Antistress',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Unna dig en paus från vardagens hektik med vår Ansiktsbehandling Antistress. Den börjar med en lätt rengöring för att varsamt fräscha upp huden. Den vitaliserande oljemassagen ger en känsla av avkoppling och balans. Behandlingen avslutas med vår skräddarsydda LED-ljusterapi och en närande kräm, allt för att säkerställa en total känsla av välbefinnande.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Ansiktsbehandling - Antistress',
        image_title: 'Ansiktsbehandling - Antistress',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en Antistress ansiktsbehandling',
        booking_url_title: 'Boka en Antistress ansiktsbehandling',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1295 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
        )
    ),
    new Service(
        title: 'Hudterapeutens val',
        duration: '60 min',
        price: null,
        content: '<p class="p200">En ansiktsbehandling som skräddarsys helt efter dina behov och vår hudterapeuts rekommendationer. Behandlingen inkluderar en Lumafuse med LED-mask och kompletteras med olika moment som bäst passar din hudtyp. Exempelvis kan detta inkludera en djuprengöring med peel, boost & glow, brynstyling samt olika masker och serum som är särskilt utvalda för dig.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hudterapeutens val',
        image_title: 'Hudterapeutens val',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka en behandling enligt hudterapeutens val',
        booking_url_title: 'Boka en behandling enligt hudterapeutens val',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'spara 790 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: 'spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Peel, Boost & Glow',
        duration: '60 min',
        price: null,
        content: '<p class="p200">För en uppfriskande och lystergivande upplevelse, prova vår Peel, Boost & Glow behandling. Den här sessionen är idealisk för dig som söker en intensiv fuktboost kombinerat med en omedelbar lyster. Vi använder oss av avancerade syrabaserade produkter för att noggrant rena huden och minimera porerna. Brynplock ingår också i behandlingen för att fullända din look. Avslutningsvis applicerar vi en djupt återfuktande sheetmask och använder LED-ljusteknik för att främja anti-age effekter och förbättra mikrocirkulationen i huden.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Peel, Boost & Glow',
        image_title: 'Peel, Boost & Glow',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Peel, Boost & Glow behandling',
        booking_url_title: 'Boka Peel, Boost & Glow behandling',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '3995 kr',
                savings: 'spara 790 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '5995 kr',
                savings: 'spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Luxury',
        duration: '90 min',
        price: null,
        content: '<p class="p200">Unna dig vår mest exklusiva och avkopplande ansiktsbehandling – Luxury Facial. Denna omfattande session börjar med en grundlig djuprengöring av huden, följd av en avslappnande massage för ansikte och dekolletage med en närande ansiktsolja som stimulerar cellförnyelsen och förbättrar kollagensyntesen. En lyxig exfoliering med syra förfinar huden och förbättrar dess elasticitet, fasthet och ton. Ögonbrynen och fransarna får också extra omsorg med en professionell färgning och formning som passar ditt ansikte. Behandlingen avslutas med en intensivt återfuktande sheetmask och en avancerad LED-mask som stimulerar blodcirkulationen, främjar hudens naturliga reparationsprocess och verkar anti-inflammatoriskt. Det är en fulländad upplevelse som inte bara förskönar utan också ger djup avslappning.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Ansiktsbehandling Lyx',
        image_title: 'Ansiktsbehandling Lyx',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka Ansiktsbehandling Lyx',
        consultation_url_title: 'Boka Ansiktsbehandling Lyx',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Ansiktsbehandling Lyx',
        booking_url_title: 'Boka Ansiktsbehandling Lyx',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '4995 kr',
                savings: 'spara 990 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '7995 kr',
                savings: 'spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Porrengöring',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Vår porrengöringsbehandling är speciellt framtagen för att effektivt rensa tilltäppta porer och främja en klarare hud. Behandlingen börjar med en djupgående rengöring som förbereder huden för exfoliering. Efter exfolieringen tillämpas en mjukgörande ångprocess för att öppna upp och mjuka upp porerna. Noggrann manuell porrengöring följer för att varsamt avlägsna orenheter och komedoner. Vi avslutar med en lugnande ansiktsmask och lägger på en återfuktande kräm som är anpassad för din hudtyp.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Porrengöring',
        image_title: 'Porrengöring',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka porrengöringsbehandling',
        booking_url_title: 'Boka porrengöringsbehandling',
        icons: array(
            'who-teenagers' => 'Teenagers',
            'who-adults' => 'Adults'
        ),
        procedures: array(
            new Procedure(
                label: '1 porrengöringsbehandling',
                price: '1095 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '3 porrengöringsbehandlingar',
                price: '2995 kr',
                savings: '795 kr per besök',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 porrengöringsbehandlingar',
                price: '4795 kr',
                savings: '1199 kr per besök',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),

);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård och underhåll',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård och underhåll',
    image_title: 'Eftervård och underhåll',
    content: '<p class="p200">Våra klassiska ansiktsbehandlingar erbjuder en grundlig rengöring och uppfräschning av huden. Efter din behandling är det viktigt att följa några enkla eftervårdsinstruktioner för att bibehålla resultatet. Undvik starkt solsken och använd en hög SPF för att skydda huden. Vi rekommenderar också att du undviker tung makeup och hudirriterande ämnen de första 24 timmarna efter behandlingen. Fortsätt att återfukta huden väl och använd de produkter som rekommenderats av din hudterapeut för att stödja hudens läkning och förbättring.</p>
    <p class="p200 mt-m">För dig som gjort en lite mer resultatinriktad behandling är det viktigt att komma ihåg att inte plocka eller skrapa på huden om det skulle uppstå några orenheter efter behandlingen. Om du fick en kemisk peeling eller exfoliering, se till att vara extra varsam med huden och undvik exfolierande produkter ett tag. Drick mycket vatten och fortsätt med en balanserad kost för att stödja huden inifrån och ut. Om du har några frågor om din eftervård, tveka inte att kontakta oss för personliga råd.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

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
            title: 'Hur många behandlingar behövs?',
            text: 'Antalet behandlingar kan variera beroende på individens hudtyp och hudens tillstånd. Generellt rekommenderas en serie av behandlingar för bästa möjliga resultat och sedan underhållsbehandlingar för långsiktig effekt.'
        ),
        new Question(
            title: 'Hur ofta ska jag boka en klassisk ansiktsbehandling?',
            text: 'För att upprätthålla resultat och hudens hälsa, rekommenderar vi en klassisk ansiktsbehandling var fjärde till sjätte vecka. Det kan justeras beroende på personliga behov och hudens tillstånd.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig direkt efter behandlingen?',
            text: 'Efter en klassisk ansiktsbehandling kan huden vara lite rosig och kännas extra mjuk och återfuktad. Det är viktigt att följa eftervårdsinstruktionerna för att maximera behandlingens effekt. I de fall där en mer resultatinriktad behandling gjorts kan upplevelsen av huden variera.'
        ),
        new Question(
            title: 'Behövs speciell eftervård efter en klassisk ansiktsbehandling?',
            text: 'Eftervård är viktigt för att bevara resultatet av din ansiktsbehandling. Det innefattar solskydd, mild hudvård, och att undvika starka hudirriterande ämnen ett par dagar efter behandlingen.'
        )
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