<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Skin Tech - Avancerade Kemiska Peelings | AcneSpecialisten';
$seo_description = 'AcneSpecialisten är stolta över att erbjuda Skin Techs sortiment av avancerade kemiska peelings. Dessa högkvalitativa behandlingar är designade för att effektivt hantera en rad hudproblem, inklusive acneärr, åldrande hud, hyperpigmentering och mycket mer. Skin Techs innovativa peelingar ger märkbara resultat med fokus på säkerhet och kundnöjdhet.';
$seo_keywords = 'Skin Tech, kemisk peeling, hudproblem, acneärr, åldrande hud, hyperpigmentering, hudföryngring, AcneSpecialisten, avancerad hudvård';

$seo_image = 'images/treatments/large/skin-tech.jpg';

$model = new Service(
    title: 'Skin Tech',
    duration: '30 min',
    price: null,
    content: '<p class="p200">Skin Tech erbjuder en sofistikerad serie av kemiska peelings för omfattande hudvårdsbehandlingar. Vår specialisering inom Skin Tech är utformad för att effektivt hantera en rad hudåkommor, från acneärr till åldrande och hyperpigmentering. Dessa behandlingar kombinerar varsamhet och kraftfullhet, vilket gör dem idealiska för en djupgående hudförbättring.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'Skin Tech behandlingar',
    image_title: 'Skin Tech behandlingar',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Ett brett utbud av moderna kemiska peeling behandlingar för en lång rad hudproblem.';

$nav_buttons = array(
    'about' => 'Om Skin Tech',
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

$description_title = 'Vad är Skin Tech?';
$description_text = '<p class="p200">Skin Tech representerar en innovativ kollektion av kemiska peelings anpassade för olika hudproblem. Dessa behandlingar använder specialformulerade lösningar för att exfoliera och vitalisera huden på djupet. Med produkter som Easy Phytic Peel, Easy Droxy Versicolor Peel, Easy TCA Pain Control, fokuserar vi på att förbättra hudens textur, ton och allmänna hälsa.</p>
<p class="p200 mt-m">Behandlingarna är skräddarsydda för att hantera specifika utmaningar såsom acneärr, aktiv akne, bristningar, melasma och pigmentfläckar, samt effektivt reducera synligheten av pormaskar, stora porer, rynkor och fina linjer. De är även effektiva mot solskadad hud. Varje Skin Tech-peeling anpassas individuellt, för att erbjuda personliga och effektiva lösningar som resulterar i förnyad och ungdomlig hud.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför behandling med Skin Tech',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför behandling med Skin Tech',
        image_title: 'Förberedelser inför behandling med Skin Tech',
        content: '<p class="p200">När du förbereder dig för en kemisk peeling hos AcneSpecialisten finns det några enkla steg du kan följa för att optimera din behandlingsupplevelse. För det första är det bra att undvika att exfoliera huden några dagar före din behandling, då själva peelingen kommer att ta hand om detta. Det är också viktigt att inte sola eller använda brun-utan-sol-produkter veckan innan behandlingen för att minska risken för hudirritationer.</p>
        <p class="p200 mt-m">Dessutom är det viktigt att informera din hudterapeut om eventuella mediciner du tar eller om du har aktiva hudåkommor, så att vi kan anpassa behandlingen på bästa sätt. Kom ihåg att det viktigaste är att du känner dig bekväm och trygg, så om du har några frågor eller funderingar, tveka inte att kontakta oss före din behandling.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Ånga'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraktion'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Rengöring'
        ))
    ),
    'process' => new Article(
        title: 'Hur går behandlingar med Skin Tech till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går behandlingar med Skin Tech till?',
        image_title: 'Hur går behandlingar med Skin Tech till?',
        content: '<p class="p200">Hos AcneSpecialisten erbjuder vi Skin Techs avancerade kemiska peelingbehandlingar, skräddarsydda för att möta en rad olika hudproblem. Vi förstår att varje klients hud är unik och anpassar därför varje behandling individuellt. Våra erfarna hudterapeuter kombinerar sin expertis med Skin Techs innovativa metoder för att leverera exceptionella resultat.</p>
        <p class="p200 mt-m">En Skin Tech-behandling börjar med en noggrann rengöring av huden för att skapa optimala förutsättningar för peelingen. Efter rengöringen appliceras den specifika Skin Tech-peelinglösningen, noggrant utvald för att matcha din hudtyp och adressera dina specifika hudproblem. Denna peeling arbetar för att varsamt men effektivt exfoliera hudens yttre lager och stimulerar cellförnyelsen, vilket resulterar i en friskare och mer vital hud.</p>
        <p class="p200 mt-m">Under behandlingen kan du känna en mild stickande känsla, vilket är ett tecken på att peelingen aktiverar hudens förnyelseprocess. Efter att peelingen har fått verka i lämplig tid, neutraliseras den försiktigt för att säkerställa maximal komfort och säkerhet. Behandlingen avslutas med en lugnande mask och återfuktande krämer för att ytterligare lugna och återställa huden. Resultatet är en betydligt förbättrad hudkvalitet med förnyad lyster och jämnhet, tack vare Skin Techs specialanpassade peelingbehandlingar.</p>',

        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Ånga'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraktion'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Rengöring'
        ))
    ),
);

$big_types = array(
    new Service(
        title: 'Skin Tech Easy Phytic Peel',
        duration: '30 min',
        price: null,
        content: '<p class="p200">Skin Tech Easy Phytic Peel är en idealisk behandling för dig som önskar att adressera hudproblem som orenheter, tilltäpptheter och pigmentfläckar, eftersom den är lämplig för alla hudtyper. Denna skonsamma peeling erbjuder en grundlig rengöring och hjälper till att förbättra hudens allmänna utseende, utan att orsaka lång återhämtningstid. Formulan i Easy Phytic Peel arbetar försiktigt med att avlägsna det yttersta hudlagret, vilket leder till en minskning av ojämnheter och en främjande av cellförnyelse.</p>
        <p class="p200 mt-m">Behandlingen fortsätter sedan med en lugnande process där huden återfuktas och eventuell rodnad lindras. En av de främsta fördelarna med Easy Phytic Peel är att den inte behöver neutraliseras eller sköljas bort, vilket gör processen praktisk och okomplicerad. Efter behandlingen kan du förvänta dig en hud som är märkbart klarare, jämnare och mer strålande. Skin Tech Easy Phytic Peel är det perfekta valet för den som vill ha en effektiv hudbehandling som är skonsam mot känslig hud.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Skin Tech Easy Phytic Peel',
        image_title: 'Skin Tech Easy Phytic Peel',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech Easy Phytic Peel',
        booking_url_title: 'Boka Skin Tech Easy Phytic Peel',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '5595 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '7595 kr',
                savings: 'Spara 1975 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
        )
    ),
    new Service(
        title: 'Skin Tech Easy Droxy Versicolor Peel',
        duration: '30 min',
        price: null,
        content: '<p class="p200">Skin Tech Easy Droxy Versicolor Peel är den perfekta lösningen för dig som vill revitalisera din hud och effektivt minska pigmenteringar. Denna peelingbehandling är skonsam nog för olika hudtyper och är särskilt bra på att förbättra hudens klarhet, fräschör och ungdomliga glans. Behandlingen fungerar genom att försiktigt ta bort det yttersta hudlagret, vilket bidrar till att minska ojämnheter och främja en enhetlig hudton.</p>
        <p class="p200 mt-m">Easy Droxy Versicolor Peel är utvecklad för att ge en bekväm behandlingsupplevelse och kräver inte neutralisering. Efter avslutad behandling återställs och återfuktas huden, vilket reducerar rodnad och skapar en känsla av lugn och fukt. Denna peeling är ett utmärkt alternativ för dem som söker märkbara förbättringar utan behov av lång återhämtningsperiod. Att välja Easy Droxy Versicolor Peel innebär att ta ett steg mot en ljusare och jämnare hudton, vilket gör den till ett idealiskt val för alla som vill ge sin hud en snabb och effektiv uppfräschning.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Skin Tech Easy Droxy Versicolor Peel',
        image_title: 'Skin Tech Easy Droxy Versicolor Peel',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech Easy Droxy Versicolor Peel',
        booking_url_title: 'Boka Skin Tech Easy Droxy Versicolor Peel',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '5595 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '7595 kr',
                savings: 'Spara 1975 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
        )
    ),
    new Service(
        title: 'Skin Tech Easy TCA Pain Control',
        duration: '30 min',
        price: null,
        content: '<p class="p200">Skin Tech Easy TCA Pain Control är en framstående kemisk peeling som levererar betydande resultat mot åldrande, ojämn hudstruktur och ton, samt mot hudens missfärgningar. Denna peeling är särskilt framtagen för att ge en omfattande hudförnyelse, vilket gör den till ett utmärkt val för de som eftersträvar tydliga förbättringar i både hudens utseende och kvalitet.</p>
        <p class="p200 mt-m">Under behandlingen appliceras Easy TCA Pain Control metodiskt för att nå hudens djupare skikt. Detta stimulerar både cellförnyelsen och kollagenproduktionen. Processen är utformad för att kraftfullt minska de synliga ålderstecknen såsom fina linjer och rynkor, och arbetar för att jämna ut hudens ton och struktur. En unik fördel med Easy TCA Pain Control är dess förmåga att minimera obehag under behandlingen, vilket säkerställer en bekväm upplevelse för dig som klient. Efter peelingen behandlas huden med vårdande produkter för optimal återhämtning och för att maximera effekten av behandlingen. Skin Tech Easy TCA Pain Control är den idealiska lösningen för dig som söker en djupgående och kraftfull behandling för att återfå hudens ungdomliga lyster.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Skin Tech Easy Droxy Versicolor Peel',
        image_title: 'Skin Tech Easy Droxy Versicolor Peel',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech Easy Droxy Versicolor Peel',
        booking_url_title: 'Boka Skin Tech Easy Droxy Versicolor Peel',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '6995 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '8995 kr',
                savings: 'Spara 2975 kr',
                booking_url: 'https://www.bokadirekt.se'
            ),
        )
    ),

);

$types_title = 'Hudproblem vi behandlar med Skin Tech';
$types_description = '<p class="p200"> Våra specialiserade behandlingar är skräddarsydda för att möta utmaningar som acneärr, aktiv akne, bristningar, melasma, pigmentfläckar, pormaskar, stora porer, samt rynkor och fina linjer. Genom att noggrant välja den mest lämpliga kemiska peelingen för varje unikt hudproblem, strävar vi efter att inte bara förbättra hudens utseende utan också dess hälsotillstånd och vitalitet.</p>';
$types = array(
    new Service(
        title: 'Skin Tech mot Melasma',
        duration: '30 min',
        price: '1995 kr',
        content: 'Ljusar upp och jämnar ut hudtonen med Skin Tech.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Skin Tech för Melasma',
        image_title: 'Skin Tech för Melasma',
        consultation_url: 'hudkonsultation-melasma',
        consultation_url_label: 'Boka tid för konsultation om Melasma',
        consultation_url_title: 'Boka tid för konsultation om Melasma',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech för Melasma',
        booking_url_title: 'Boka Skin Tech för Melasma',
    ),
    new Service(
        title: 'Skin Tech mot Pigmentfläckar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Reducera och eliminera pigmentfläckar med hjälp av Skin Tech.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Skin Tech mot Pigmentfläckar',
        image_title: 'Skin Tech mot Pigmentfläckar',
        consultation_url: 'hudkonsultation-pigmentflackar',
        consultation_url_label: 'Boka tid för konsultation om Pigmentfläckar',
        consultation_url_title: 'Boka tid för konsultation om Pigmentfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech mot Pigmentfläckar',
        booking_url_title: 'Boka Skin Tech mot Pigmentfläckar',
    ),
    new Service(
        title: 'Skin Tech mot Bristningar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Minskar synligheten av bristningar med Skin Tech',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Skin Tech mot Bristningar',
        image_title: 'Skin Tech mot Bristningar',
        consultation_url: 'hudkonsultation-bristningar',
        consultation_url_label: 'Boka tid för konsultation om Bristningar',
        consultation_url_title: 'Boka tid för konsultation om Bristningar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech mot Bristningar',
        booking_url_title: 'Boka Skin Tech mot Bristningar',
    ),
    new Service(
        title: 'Skin Tech mot Rynkor & Fina Linjer',
        duration: '30 min',
        price: '1995 kr',
        content: 'Jämnar ut hudytan för att bekämpa rynkor och fina linjer med Skin Tech.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Skin Tech mot Rynkor och Fina Linjer',
        image_title: 'Skin Tech mot Rynkor och Fina Linjer',
        consultation_url: 'hudkonsultation-rynkor',
        consultation_url_label: 'Boka tid för konsultation om Rynkor och Fina Linjer',
        consultation_url_title: 'Boka tid för konsultation om Rynkor och Fina Linjer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech mot Rynkor och Fina Linjer',
        booking_url_title: 'Boka Skin Tech mot Rynkor och Fina Linjer',
    ),
    new Service(
        title: 'Skin Tech mot Solskadad Hy',
        duration: '30 min',
        price: '1995 kr',
        content: 'Reparerar och återställer solskadad hy med hjälp av Skin Tech.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Skin Tech mot Solskadad Hy',
        image_title: 'Skin Tech mot Solskadad Hy',
        consultation_url: 'hudkonsultation-solskadadhy',
        consultation_url_label: 'Boka tid för konsultation om Solskadad Hy',
        consultation_url_title: 'Boka tid för konsultation om Solskadad Hy',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech mot Solskadad Hy',
        booking_url_title: 'Boka Skin Tech mot Solskadad Hy',
    ),
    new Service(
        title: 'Skin Tech mot acneärr',
        duration: '30 min',
        price: null,
        content: 'Jämnar ut både hudtonen och hudytan med hjälp av Skin Tech mot acneärr.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk peeling mot acneärr',
        image_title: 'Kemisk peeling mot acneärr',
        consultation_url: 'gratis-hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka kemisk peeling mot acneärr',
        booking_url_title: 'Boka kemisk peeling mot acneärr',
    ),
    new Service(
        title: 'Skin Tech mot Aktiv Akne',
        duration: '30 min',
        price: '1595 kr',
        content: 'Bekämpa aktiv akne med hjälp av exolierande syror från Skin Tech.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Skin Tech mot Aktiv Akne',
        image_title: 'Skin Tech mot Aktiv Akne',
        consultation_url: 'hudkonsultation-aktivakne',
        consultation_url_label: 'Boka tid för konsultation om Aktiv Akne',
        consultation_url_title: 'Boka tid för konsultation om Aktiv Akne',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech mot Aktiv Akne',
        booking_url_title: 'Boka Skin Tech mot Aktiv Akne',
    ),
    new Service(
        title: 'Skin Tech mot Pormaskar & Stora Porer',
        duration: '30 min',
        price: '1595 kr',
        content: 'Exfolierar och reducerar pormaskar och stora porer med hjälp av Skin Tech.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Skin Tech mot Pormaskar och Stora Porer',
        image_title: 'Skin Tech mot Pormaskar och Stora Porer',
        consultation_url: 'hudkonsultation-pormaskar',
        consultation_url_label: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        consultation_url_title: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Skin Tech mot Pormaskar och Stora Porer',
        booking_url_title: 'Boka Skin Tech mot Pormaskar och Stora Porer',
    ),
);

$treatment_areas_title = 'Områden som Behandlas med Skin Tech Peeling';
$treatment_areas_text = '<p class="p200">Skin Techs kemiska peelingar erbjuder mångsidiga lösningar för hudförbättring i olika områden, inklusive ansiktet, halsen, dekolletaget och ryggen. Dessa behandlingar är anpassade för att effektivt hantera specifika hudproblem i varje område.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Ansikte & kropp',
        image_title: 'Ansikte & kropp',
        title: 'Ansikte & kropp',
        description: '<p class="p200">Vår kemiska peeling kan appliceras på flera olika områden, anpassad efter dina behov.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Skin Techs eftervård',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Skin Techs eftervård',
    image_title: 'Skin Techs eftervård',
    content: '<p class="p200">Att följa rätt eftervårdsrutin är kritiskt efter en kemisk peeling med Skin Tech för att säkerställa de bästa och mest hållbara resultaten. En korrekt eftervårdsplan hjälper inte bara din hud att återhämta sig efter behandlingen, utan främjar även en fortsatt hudförbättring.</p>
    <p class="p200 mt-m">Vid AcneSpecialisten är vi dedikerade till att stödja dig genom din hudvårdsresa efter din peeling. Vi skapar en personlig eftervårdsplan som inkluderar allt från skonsam rengöring och intensiv återfuktning till produkter som effektivt lugnar och stödjer hudens återhämtningsprocess. Genom att följa våra rekommenderade eftervårdsinstruktioner kan du förlänga och förstärka de fördelar som kemisk peeling med Skin Tech ger, för en bestående och strålande hudhälsa.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för kemisk peeling';
$service_brands_text = '<p class="p200">Utöver Skin Tech jobbar vi även med PRX-T33 för kemisk peeling.</p>';
$service_brands = array(
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRX-T33'
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

$reviews_title = 'Reviews';
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

$faq_title = 'Frågor & svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Passar Skin Techs kemiska peelingar för alla hudtyper?',
            text: 'Absolut, vårt utbud av Skin Techs kemiska peelingar är anpassat för att passa en mängd olika hudtyper. Varje behandling anpassas individuellt för att ge optimala resultat baserat på dina specifika hudbehov.'
        ),

        new Question(
            title: 'Är Skin Techs kemiska peeling effektiv mot acneärr och pigmentfläckar?',
            text: 'Ja, våra Skin Techs kemiska peelingbehandlingar är utmärkta för att minska synligheten av acneärr och pigmentfläckar. De arbetar genom att exfoliera och främja cellförnyelsen, vilket leder till förbättrad hudtextur och minskad synlighet av ojämnheter.'
        ),

        new Question(
            title: 'Vilken frekvens rekommenderas för Skin Techs kemiska peeling?',
            text: 'Behandlingsfrekvensen för Skin Techs kemiska peeling varierar beroende på individens hudtyp och specifika behov. I vissa fall rekommenderas behandling var fjärde till sjätte vecka, medan andra kan behöva anpassade intervaller. Vi kommer att ge dig en personlig rekommendation efter en noggrann hudanalys.'
        ),

        new Question(
            title: 'Hur väljer jag rätt Skin Tech kemisk peeling för min hud?',
            text: 'För att bestämma vilken Skin Tech kemisk peeling som är bäst för din hud, erbjuder vi en konsultation där våra hudterapeuter analyserar din hud och diskuterar dina mål. Baserat på detta ger vi rekommendationer om lämpliga behandlingar, från Easy Phytic Peel till Easy TCA Pain Control eller PRX-T33.'
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
$skin_guide_view_more = 'Visa alla artiklar';

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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specialister"><?php echo $specialists_view_more ?></a>
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