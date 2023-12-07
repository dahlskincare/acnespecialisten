<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Dermabrasion - Avancerad Hudförnyelse | AcneSpecialisten';
$seo_description = 'Utforska AcneSpecialistens dermabrasion-behandlingar för att dramatiskt förbättra hudens textur och utseende. Med vår avancerade teknik och expertis ger vi dig en djupgående hudförnyelse och återuppbyggnad. Upplev skillnaden med professionell dermabrasion.';
$seo_keywords = 'dermabrasion, hudföryngring, acneärrbehandling, hudslipning, hudförbättring, avancerad hudvård, fina linjer, hyperpigmentering, AcneSpecialisten';

$seo_image = 'images/treatments/large/dermabrasion.jpg';

$model = new Service(
    title: 'Dermabrasion',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Dermabrasion hos AcneSpecialisten är en effektiv behandling för att förbättra hudens textur och utseende. Denna metod är särskilt användbar för att behandla acneärr, fina linjer och pigmentering, vilket ger en slätare och mer jämn hudton. Vår dermabrasion-teknik skräddarsys för att passa din hudtyp och ger en djup exfoliering som främjar hudens förnyelse och kollagenproduktion.</p>',
    image_small: 'bilder/behandlingar/358x274/dermabrasion.webp',
    image_large: 'bilder/behandlingar/424x456/dermabrasion.webp',
    image_alt: 'Dermabrasion',
    image_title: 'Dermabrasion',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Hudslipning som jämnar hudens ytan.';

$nav_buttons = array(
    'about' => 'Om Dermabrasion',
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

$description_title = 'Vad är Dermabrasion?';
$description_text = '<p class="p200">Dermabrasion är en djupgående hudföryngrande behandling som effektivt förbättrar hudens yta och textur. Genom en mekanisk exfolieringsprocess avlägsnas döda hudceller, vilket stimulerar hudens förnyelse och ger en märkbar föryngring av huden.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi dermabrasion som en skräddarsydd behandling för att möta olika hudbehov. Detta inkluderar att minska acneärr, fina linjer, och pigmentfläckar samt förbättra hudens övergripande utseende. Vår dermabrasion-behandling är skonsam men effektiv, vilket gör den lämplig för olika hudtyper. Genom att stimulera kollagenproduktionen och cellförnyelsen, bidrar behandlingen till en fräschare, mjukare och mer strålande hud. Dermabrasion är en idealisk behandling för dig som söker en konkret förbättring av din hudkvalitet.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför dermabrasion',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelse inför dermabrasion',
        image_title: 'Förberedelse inför dermabrasion',
        content: '<p class="p200">Inför din dermabrasion-behandling på AcneSpecialisten är det viktigt att förbereda huden för att maximera resultatet. Vi rekommenderar att du undviker att använda starka hudvårdsprodukter, såsom exfolierande syror, några dagar innan behandlingen. Detta för att minska risken för irritation och göra huden mer mottaglig för behandlingen.</p>
        <p class="p200 mt-m">Det är också klokt att skydda din hud från stark sol och undvika solbränna innan din session. Solbränd hud kan vara mer känslig och kan påverka resultatet av dermabrasion. Om du tar mediciner som påverkar huden, eller om du har några hudrelaterade tillstånd, informera oss gärna om detta i förväg så att vi kan anpassa behandlingen efter dina behov. Kom ihåg att det är viktigt att du känner dig trygg och bekväm, så tveka inte boka en kostnadsfri dermabrasion konsultation hos oss.</p>',
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
        title: 'Processen för dermabrasion',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Processen för dermabrasion',
        image_title: 'Processen för dermabrasion',
        content: '<p class="p200">Vid en dermabrasion-behandling på AcneSpecialisten inleds sessionen med att noggrant rengöra huden för att eliminera smuts, olja och andra orenheter. Denna rengöringsprocess är avgörande för att säkerställa att huden är fullständigt förberedd för dermabrasionens exfolierande effekter.</p>
    <p class="p200 mt-m">Efter rengöringen utförs själva dermabrasionen, en mekanisk peeling där ett specialverktyg används för att försiktigt men effektivt slipa bort det yttersta lagret av döda hudceller. Denna process stimulerar hudens naturliga förnyelseprocess, vilket kan förbättra hudens textur och ton samt minska synligheten av fina linjer, ärr och hyperpigmentering.</p>
    <p class="p200 mt-m">Efter dermabrasionen kan en lugnande och återfuktande mask appliceras för att lugna huden och minska eventuell rodnad eller irritation. Behandlingen avslutas med en närande fuktighetskräm som skyddar och återställer huden. Vår expertpersonal ser till att varje steg i din dermabrasion-behandling är skräddarsytt för att passa din specifika hudtyp och dina behov, med målet att ge dig en friskare, mer strålande hud.</p>',
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

$types_title = 'Dermabrasion och tillval';
$types_description = 'Dermabrasion är en effektiv behandling som anpassas efter dina behov.';
$big_types = array(
    new Service(
        title: 'Dermabrasion',
        duration: '40 min',
        price: null,
        content: '<p class="p200">Vår dermabrasion-behandling är en effektiv lösning för att förbättra hudens utseende och struktur. Denna behandling är lämplig för många hudtyper och fokuserar på att varsamt slipa bort det yttersta hudlagret. Processen börjar med en grundlig rengöring för att förbereda huden, vilket är avgörande för behandlingens framgång.</p>
        <p class="p200 mt-m">Efter rengöringen påbörjas själva dermabrasionen, där vi använder specialutrustning för att försiktigt men effektivt exfoliera huden. Detta hjälper till att avlägsna döda hudceller och stimulerar hudens förnyelseprocess, vilket kan minska synligheten av ärr, fina linjer och hyperpigmenteringar. Denna metod är djupgående och bidrar till en jämnare och mer strålande hudton.</p>
        <p class="p200 mt-m">Behandlingen avslutas med en återfuktande och lugnande behandling för att återställa och skydda huden. Efter dermabrasionen är det viktigt att huden får den vård den behöver för att optimera och förlänga resultaten av behandlingen. Vi erbjuder en skräddarsydd eftervårdsplan för att säkerställa att din hud får den näring och skydd den behöver.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Dermabrasion',
        image_title: 'Dermabrasion',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka behandling',
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
                savings: 'Spara 790 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '5995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Dermabrasion - Dermabuilder Serum - Boost & Glow',
        duration: '40 min',
        price: null,
        content: '<p class="p200">För att ge mogen hud ett riktigt lyft, inkluderar vi Dermabuilder serum i vår behandling. Detta specialserum är en riktig kraftkälla, särskilt utvecklad för att vitalisera och förstärka huden inifrån. Med en potentiell blandning av två aktiva peptider stimulerar det hudens naturliga proteinproduktion, vilket är avgörande för att bibehålla hudens elasticitet och fasthet.</p>
        <p class="p200 mt-m">Under behandlingen slussas Dermabuilder serum djupt in i huden, där det arbetar för att återuppbygga och förstärka hudstrukturen. Denna process bidrar till att fylla ut och reducera uppkomsten av rynkor och fina linjer, vilket ger ansiktet en mer ungdomlig och fast kontur. Det är en idealisk behandling för dig som vill återskapa hudens ungdomliga glöd och vitalitet.</p>
        <p class="p200 mt-m">Resultatet är inte bara en synligt jämnare och slätare hud, utan även en förstärkt och mer motståndskraftig hudkvalitet. Vårt Dermabuilder serum ger en effektiv boost och glow, och är en perfekt lösning för dem som vill ge sin mogen hud den extra vård och uppmärksamhet den förtjänar.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Dermabrasion - Dermabuilder Serum - Boost & Glow',
        image_title: 'Dermabrasion - Dermabuilder Serum - Boost & Glow',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka behandling',
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
                savings: 'Spara 990 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '7995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
    new Service(
        title: 'Dermabrasion - Glycal Acid Peel - Mot Pormaskar',
        duration: '40 min',
        price: null,
        content: '<p class="p200">För att effektivt ta itu med problemhud som pormaskar och finnar, erbjuder vi en specialiserad hydrafacial med Glycal Acid Peel. Denna behandling är speciellt utformad för att djuprengöra huden och hantera överproduktionen av talg, vilket ofta ligger bakom dessa hudproblem.</p>
        <p class="p200 mt-m">Vår Glycal Acid Peel kombinerar kraften av två aktiva syror för att penetrera huden på djupet. Denna intensiva peelingprocess hjälper till att lösa upp och avlägsna orenheter, vilket resulterar i en grundlig rengöring av porerna. Denna metod är effektiv för att minska uppkomsten av pormaskar och finnar, samtidigt som den bidrar till en klarare och mer balanserad hudton.</p>
        <p class="p200 mt-m">Behandlingen är idealisk för dig som kämpar med problemhy och söker en lösning som inte bara rengör på ytan, utan även arbetar aktivt på djupet. Med Glycal Acid Peel får du en rengjord och förnyad hud, fri från de vanligaste orsakerna till problemhy.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Dermabrasion - Glycal Acid Peel - Mot Pormaskar',
        image_title: 'Dermabrasion - Glycal Acid Peel - Mot Pormaskar',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka behandling',
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
                savings: 'Spara 990 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '7995 kr',
                price: 'Spara 1980 kr',
                booking_url: 'https://www.bokadirekt.se'
            )
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för Dermabrasion',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård för Dermabrasion',
    image_title: 'Eftervård för Dermabrasion',
    content: '<p class="p200">Efter din dermabrasion-behandling är det avgörande att följa rätt eftervårdsrutiner för att säkerställa och förlänga resultaten. Det är viktigt att vara extra försiktig med huden direkt efter behandlingen. Undvik direkt exponering för solen och applicera solskydd med hög SPF för att skydda den behandlade huden. Det är också klokt att avstå från att använda irriterande hudprodukter under de första 24 timmarna.</p>
    <p class="p200 mt-m">För att främja läkning och bibehålla hudens kondition, rekommenderar vi att du återfuktar huden regelbundet med de produkter som din hudterapeut har rådgivit. Om din behandling inkluderade en kemisk peeling eller intensiv exfoliering, bör du vara försiktig och undvika att skrubba eller plocka på huden, även om du upplever några mindre orenheter. Det är även viktigt att upprätthålla en god vätskebalans genom att dricka mycket vatten och hålla en hälsosam kost för att stödja huden från insidan. Om du har några ytterligare frågor eller funderingar kring din eftervård, är du alltid välkommen att kontakta oss för skräddarsydda råd.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för Dermabrasion';
$service_brands_text = '<p class="p200">Vi utför dermabrasion med HydraFacial och Microdermabrasion vilket är de modernaste och mest effektiva metoderna på markanden.</p>';
$service_brands = array(

    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial'
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: 'images/brands/microdermabrasion.svg',
        image_alt: 'Microdermabrasion',
        image_title: 'Microdermabrasion'
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