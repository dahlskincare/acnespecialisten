<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Kemisk Peeling - Effektiva Hudförbättrande Behandlingar | AcneSpecialisten';
$seo_description = 'Upptäck AcneSpecialistens expertutbud av kemiska peelings för att förbättra hudens utseende och hälsa. Våra anpassade peelingar behandlar allt från akne till åldrande, och erbjuder djupgående lösningar för diverse hudproblem. Med vår specialkunskap och avancerade behandlingar är din väg till en klarare och mer strålande hud inom räckhåll.';
$seo_keywords = 'kemisk peeling, hudföryngring, aknebehandling, hudtonsförbättring, hudproblem, exfoliering, fina linjer, pigmentering, hudens textur, professionell hudvård';

$seo_image = 'images/treatments/large/kemisk-peeling.jpg';

$model = new Service(
    title: 'Kemisk Peeling',
    duration: '30 min',
    price: null,
    content: '<p class="p200">På AcneSpecialisten är vi specialister på kemisk peeling för att effektivt behandla olika typer av hudproblem. Vår metod är idealisk för dig som önskar att förbättra hudens utseende genom att minska akne, acneärr, bristningar, melasma, pigmentfläckar, pormaskar, stora porer, rynkor, fina linjer och solskador. Våra behandlingsprotokoll är skräddarsydda och noggrant anpassade för att erbjuda en säker och icke-invasiv behandling, som ger en jämnare och mer estetiskt tilltalande hudstruktur. Vi på AcneSpecialisten strävar efter att ge varje klient en förbättrad hudkvalitet med våra professionella och effektiva kemiska peelingbehandlingar.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'Kemisk peeling behandlingar',
    image_title: 'Kemisk peeling behandlingar',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$nav_buttons = array(
    'about' => 'Om Kemisk Peeling',
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

$description_title = 'Vad är kemisk peeling?';
$description_text = '<p class="p200">Kemisk peeling hos AcneSpecialisten innefattar en rad avancerade behandlingar som är speciellt utformade för att effektivt hantera olika hudproblem och förbättra hudens kvalitet på djupet. Genom att tillämpa specialiserade tekniker som Easy Phytic Peel, Easy Droxy Versicolor Peel, Easy TCA Pain Control och PRX-T33, arbetar vi på cellnivå för att varsamt exfoliera, förnya och vitalisera huden.</p>
<p class="p200 mt-m">Våra behandlingar är idealiska för att ta itu med ett brett spektrum av hudproblem. Från att mildra acneärr och bekämpa aktiv akne, till att effektivt minska bristningar, melasma och pigmentfläckar. Dessutom är de mycket effektiva mot pormaskar och stora porer, rynkor och fina linjer samt solskadad hy. Varje kemisk peeling vi erbjuder är skräddarsydd för att matcha individens unika hudtyp och problem, och syftar till att återställa hudens naturliga balans. Vårt mål är att ge varje klient en hud som inte bara ser jämnare och klarare ut, utan som också känns friskare och mer ungdomlig.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför kemisk peeling',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför kemisk peeling',
        image_title: 'Förberedelser inför kemisk peeling',
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
        title: 'Hur går kemisk peeling behandlingar till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går kemisk peeling behandlingar till?',
        image_title: 'Hur går kemisk peeling behandlingar till?',
        content: '<p class="p200">På AcneSpecialisten erbjuder vi specialiserade kemiska peelingbehandlingar som är anpassade för att möta en mängd olika hudproblem. Vi förstår att varje persons hud är unik och skräddarsyr därför varje behandling för att passa just dina individuella behov och hudtillstånd. Våra erfarna hudterapeuter använder sin expertis och djupgående kunskap för att ge dig den bästa möjliga vård och resultat.</p>
        <p class="p200 mt-m">Varje kemisk peelingbehandling inleds med en grundlig rengöring för att förbereda huden. Detta följs av appliceringen av en specifikt utvald peelinglösning, som är anpassad efter din hudtyp och de hudproblem som ska behandlas. Denna lösning arbetar för att exfoliera de övre hudlagren och stimulerar hudens naturliga förnyelseprocess. Beroende på behandlingens intensitet, kan du uppleva en lätt stickande känsla under denna fas. Efter att peelingen har verkat tillräckligt länge neutraliseras den noggrant för att säkerställa din komfort och säkerhet. Avslutningsvis appliceras en lugnande och återfuktande mask för att lugna huden och minska eventuell rodnad eller irritation. Behandlingen avslutas med en återfuktande kräm som hjälper din hud att känna sig återupplivad och förnyad.</p>',

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
        content: '<p class="p200">Skin Tech Easy Phytic Peel är perfekt för dig som vill behandla orenheter, igentäppt hy och pigmenteringar, då den passar för alla hudtyper. Denna milda peeling ger en fördjupad rengöring och förbättrar hudens övergripande utseende utan att kräva en lång återhämtningsperiod. Den unika formulan i Easy Phytic Peel exfolierar försiktigt hudens yttre lager, vilket bidrar till en minskning av synliga ojämnheter och en förnyelse av hudcellerna.</p>
        <p class="p200 mt-m">Efter appliceringen av peelingen får huden en chans att återhämta sig med en lugnande behandling som återinför fukt och lindrar eventuell rodnad. En av de största fördelarna med Easy Phytic Peel är att den inte kräver neutralisering eller avtvättning, vilket gör behandlingsprocessen smidig och enkel. Resultatet är en betydligt klarare, jämnare och mer strålande hud. Skin Tech Easy Phytic Peel är perfekt för dig som söker en effektiv lösning på hudproblem utan att kompromissa med hudens känslighet eller komfort.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Skin Tech Easy Phytic Peel',
        image_title: 'Skin Tech Easy Phytic Peel',
        consultation_url: 'hudkonsultation',
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
        content: '<p class="p200">Skin Tech Easy Droxy Versicolor Peel är en utmärkt behandling för dig som söker en uppfräschning av huden och en effektiv lösning mot pigmenteringar. Denna peeling är skonsam och passar för en mängd olika hudtyper, och är särskilt effektiv för att ge huden en fräschare, klarare och mer ungdomlig utstrålning. Den arbetar genom att varsamt exfoliera hudens yttre lager, vilket hjälper till att reducera ojämnheter och främja en jämn hudton.</p>
        <p class="p200 mt-m">Easy Droxy Versicolor Peel är designad för att ge maximal komfort under behandlingen och kräver ingen neutralisering. Efter behandlingen återställs hudens fuktbalans och rodnad minskas, vilket gör att huden känns lugn och återfuktad. Denna peeling är idealisk för de som önskar synliga resultat utan en lång återhämtningsperiod. Användningen av Easy Droxy Versicolor Peel är ett effektivt steg mot en mer strålande och jämn hud, och den är ett utmärkt val för alla som vill ge sin hud en snabb och effektiv uppfräschning.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Skin Tech Easy Droxy Versicolor Peel',
        image_title: 'Skin Tech Easy Droxy Versicolor Peel',
        consultation_url: 'hudkonsultation',
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
        content: '<p class="p200">Skin Tech Easy TCA Pain Control är en avancerad kemisk peeling som erbjuder kraftfulla resultat i kampen mot åldrande, ojämn hudstruktur och hudton, samt missfärgningar. Denna peeling är särskilt utformad för att erbjuda en djupgående förnyelse av huden, vilket gör den perfekt för de som söker märkbara förbättringar i hudens utseende och kvalitet.</p>
        <p class="p200 mt-m">Under behandlingen appliceras Easy TCA Pain Control varsamt för att behandla hudens djupare lager, vilket stimulerar cellförnyelse och kollagenproduktion. Denna process bidrar till att dramatiskt reducera synliga tecken på åldrande som fina linjer och rynkor, och hjälper till att jämnar ut hudtonen och strukturen. En av de stora fördelarna med Easy TCA Pain Control är dess förmåga att kontrollera obehag under behandlingen, vilket säkerställer en bekvämare upplevelse för patienten. Efter peelingen får huden nödvändig vård för att återhämta sig och för att maximera behandlingseffekten. Skin Tech Easy TCA Pain Control är idealisk för de som önskar en djup och effektiv behandling för att återställa hudens ungdomliga glöd.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Skin Tech Easy Droxy Versicolor Peel',
        image_title: 'Skin Tech Easy Droxy Versicolor Peel',
        consultation_url: 'hudkonsultation',
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
    new Service(
        title: 'PRX-T33',
        duration: '30 min',
        price: null,
        content: '<p class="p200">PRX-T33 är en innovativ kemisk peeling som erbjuder exceptionella resultat för att bekämpa tecken på åldrande, som rynkor, fina linjer, pigmenteringar och bristningar. Denna avancerade behandling är utformad för att ge intensiv förnyelse och förbättring av hudens struktur och ton utan den avskalning som traditionella peelings kan medföra.</p>
        <p class="p200 mt-m">Under PRX-T33-behandlingen appliceras en speciell lösning som verkar djupt in i huden för att stimulera kollagenproduktionen och förnya hudcellerna. Detta bidrar till att effektivt minska tecken på åldrande och förbättra hudens övergripande utseende. Unikt för PRX-T33 är dess förmåga att ge dramatiska resultat utan längre återhämtningstid, vilket gör den idealisk för de som önskar snabba, märkbara förbättringar.</p>
        <p class="p200 mt-m">PRX-T33 är särskilt lämplig för de som vill återställa hudens lyster och ungdomliga utstrålning. Dess skonsamma men effektiva formula säkerställer en behaglig behandlingsupplevelse, vilket gör den till ett utmärkt val för de som söker en kraftfull men icke-invasiv lösning för att förbättra hudens kvalitet.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'PRX-T33',
        image_title: 'PRX-T33',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka PRX-T33',
        booking_url_title: 'Boka PRX-T33',
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

$types_title = 'Hudproblem vi behandlar med kemisk peeling';
$types_description = '<p class="p200">På AcneSpecialisten erbjuder vi skräddarsydda kemiska peelings för en rad hudproblem. Våra behandlingar är specifikt utformade för att effektivt hantera allt från acneärr och aktiv akne till bristningar, melasma och pigmentfläckar. Vi tar även hand om pormaskar, stora porer, samt rynkor och fina linjer. Genom att välja rätt typ av kemisk peeling för varje specifikt hudproblem, kan vi erbjuda behandlingar som inte bara förbättrar hudens utseende, utan också dess övergripande hälsa och vitalitet.</p>';
$types = array(
    new Service(
        title: 'Kemisk Peeling mot Melasma',
        duration: '30 min',
        price: '1995 kr',
        content: 'Effektiv behandling för att ljusa upp och behandla melasma, vilket ger en jämnare och klarare hudton.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling för Melasma',
        image_title: 'Kemisk Peeling för Melasma',
        consultation_url: 'hudkonsultation-melasma',
        consultation_url_label: 'Boka tid för konsultation om Melasma',
        consultation_url_title: 'Boka tid för konsultation om Melasma',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling för Melasma',
        booking_url_title: 'Boka Kemisk Peeling för Melasma',
    ),
    new Service(
        title: 'Kemisk Peeling mot Pigmentfläckar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna behandling riktar sig mot pigmentfläckar, vilket hjälper till att jämföra hudton och reducera synliga fläckar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling mot Pigmentfläckar',
        image_title: 'Kemisk Peeling mot Pigmentfläckar',
        consultation_url: 'hudkonsultation-pigmentflackar',
        consultation_url_label: 'Boka tid för konsultation om Pigmentfläckar',
        consultation_url_title: 'Boka tid för konsultation om Pigmentfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling mot Pigmentfläckar',
        booking_url_title: 'Boka Kemisk Peeling mot Pigmentfläckar',
    ),
    new Service(
        title: 'Kemisk Peeling mot Bristningar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna peelingbehandling hjälper till att minska synligheten av bristningar, vilket förbättrar hudens struktur och utseende.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling mot Bristningar',
        image_title: 'Kemisk Peeling mot Bristningar',
        consultation_url: 'hudkonsultation-bristningar',
        consultation_url_label: 'Boka tid för konsultation om Bristningar',
        consultation_url_title: 'Boka tid för konsultation om Bristningar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling mot Bristningar',
        booking_url_title: 'Boka Kemisk Peeling mot Bristningar',
    ),
    new Service(
        title: 'Kemisk Peeling mot Rynkor & Fina Linjer',
        duration: '30 min',
        price: '1995 kr',
        content: 'Anpassad för att behandla åldrande hud, denna peeling minskar rynkor och fina linjer, vilket ger en mer ungdomlig och slät hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        image_title: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        consultation_url: 'hudkonsultation-rynkor',
        consultation_url_label: 'Boka tid för konsultation om Rynkor och Fina Linjer',
        consultation_url_title: 'Boka tid för konsultation om Rynkor och Fina Linjer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling mot Rynkor och Fina Linjer',
        booking_url_title: 'Boka Kemisk Peeling mot Rynkor och Fina Linjer',
    ),
    new Service(
        title: 'Kemisk Peeling mot Solskadad Hy',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna peeling riktar sig specifikt mot solskadad hud och hjälper till att reparera och förbättra hudens utseende efter solens påverkan.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling mot Solskadad Hy',
        image_title: 'Kemisk Peeling mot Solskadad Hy',
        consultation_url: 'hudkonsultation-solskadadhy',
        consultation_url_label: 'Boka tid för konsultation om Solskadad Hy',
        consultation_url_title: 'Boka tid för konsultation om Solskadad Hy',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling mot Solskadad Hy',
        booking_url_title: 'Boka Kemisk Peeling mot Solskadad Hy',
    ),
    new Service(
        title: 'Kemisk peeling mot acneärr',
        duration: '30 min',
        price: null,
        content: 'Vår specialanpassade kemiska peeling är utformad för att effektivt behandla och minska synligheten av acneärr. Denna behandling arbetar på djupet för att jämna ut både ytan och hudtonen där ärrbildning har skett.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk peeling mot acneärr',
        image_title: 'Kemisk peeling mot acneärr',
        consultation_url: 'hudkonsultation',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka kemisk peeling mot acneärr',
        booking_url_title: 'Boka kemisk peeling mot acneärr',
    ),
    new Service(
        title: 'Kemisk Peeling mot Aktiv Akne',
        duration: '30 min',
        price: '1595 kr',
        content: 'Specialiserad peeling för att behandla aktiv akne. Hjälper till att rengöra porer, minska inflammation och förhindra framtida utbrott.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling för Aktiv Akne',
        image_title: 'Kemisk Peeling för Aktiv Akne',
        consultation_url: 'hudkonsultation-aktivakne',
        consultation_url_label: 'Boka tid för konsultation om Aktiv Akne',
        consultation_url_title: 'Boka tid för konsultation om Aktiv Akne',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling för Aktiv Akne',
        booking_url_title: 'Boka Kemisk Peeling för Aktiv Akne',
    ),
    new Service(
        title: 'Kemisk Peeling mot Pormaskar & Stora Porer',
        duration: '30 min',
        price: '1595 kr',
        content: 'Denna behandling är idealisk för att djuprengöra huden, minska synligheten av pormaskar och förminska stora porer, vilket bidrar till en jämnare hudton och textur.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling för Pormaskar och Stora Porer',
        image_title: 'Kemisk Peeling för Pormaskar och Stora Porer',
        consultation_url: 'hudkonsultation-pormaskar',
        consultation_url_label: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        consultation_url_title: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling för Pormaskar och Stora Porer',
        booking_url_title: 'Boka Kemisk Peeling för Pormaskar och Stora Porer',
    ),
);

$treatment_areas_title = 'Behandlingsområden för Kemisk Peeling';
$treatment_areas_text = '<p class="p200">Kemisk peeling är en mångsidig behandlingsmetod som är lämplig för att förbättra hudens tillstånd i ansiktet, på halsen, dekolletaget och ryggen.</p>';
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
    title: 'Eftervård för kemisk peeling',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård för kemisk peeling',
    image_title: 'Eftervård för kemisk peeling',
    content: '<p class="p200"><p class="p200">Eftervård är avgörande för att maximera resultaten av din kemiska peeling. För att underhålla och förbättra din hudkvalitet efter behandlingen, är det viktigt att följa en skräddarsydd hudvårdsrutin. Det innebär inte bara att använda rätt produkter, utan också att följa en rutin som är anpassad för din specifika hudtyp och de behov som uppstått efter peelingen.</p>
    <p class="p200 mt-m">På AcneSpecialisten hjälper vi dig att skapa en effektiv eftervårdsplan som passar just din hud. Detta kan innefatta allt från noggrann rengöring och återfuktning till speciella vårdåtgärder som lugnar och främjar hudens läkningsprocess. Vi guidar dig genom varje steg för att försäkra att du ger din hud den optimala vård den behöver för att återhämta sig och bibehålla de positiva effekterna av peelingen. Rätt eftervård är essentiell för att upprätthålla en hälsosam, välvårdad och strålande hud.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för kemisk peeling';
$service_brands_text = '<p class="p200">Vi utför kemisk peeling med Skin Tech och PRX-T33.</p>';
$service_brands = array(

    new Brand(
        label: 'Skin Tech',
        image: 'images/brands/skin-tech.svg',
        image_alt: 'Skin Tech',
        image_title: 'SkinTech',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRX-T33'
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

$reviews_title = 'Reviews';
$reviews = array(
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Got rid of my pigment spots on',
        text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
        signature: 'Emily'
    ),
    new Review(
        stars: 5,
        brand: 'Trustpilot',
        logo_url: 'images/brands/trustpilot.svg',
        title: 'Got rid of my pigment spots on',
        text: "Got rid of my pigment spots on my face completely after two treatments. I received treatment from Amira who is warm, pleasant, caring and very professional. I am very pleased for the fine job you have done. I did't think",
        signature: 'Emily'
    )
);
$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Är kemisk peeling lämplig för alla hudtyper?',
            text: 'Ja, vi erbjuder olika typer av kemiska peelings som är anpassade för olika hudtyper. Vi anpassar varje behandling individuellt för att säkerställa att den passar dina hudbehov och ger bästa möjliga resultat.'
        ),
        new Question(
            title: 'Kan kemisk peeling hjälpa till med acneärr och pigmentfläckar?',
            text: 'Absolut, kemisk peeling är en effektiv metod för att behandla acneärr och pigmentfläckar. Genom att exfoliera och främja cellförnyelse kan dessa behandlingar signifikant förbättra hudens textur och minska synligheten av ärr och fläckar.'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå en kemisk peeling?',
            text: 'Frekvensen av kemisk peeling beror på din hudtyp och de specifika problem du vill adressera. En del kan behöva behandlingar var fjärde till sjätte vecka, medan andra kan ha behov av mer eller mindre frekventa sessioner. Våra experter kommer att rekommendera en behandlingsplan baserad på din hudanalys.'
        ),
        new Question(
            title: 'Vilken typ av kemisk peeling ska jag välja för min hud?',
            text: 'För att hitta den bästa kemiska peelingen för din hud rekommenderar vi en personlig konsultation. Under denna tid kommer våra hudterapeuter att analysera din hudtyp och behov, och rekommendera den mest effektiva behandlingen, vare sig det är Easy Phytic Peel, Easy TCA Pain Control, PRX-T33, eller någon annan.'
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
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-m"><?php echo $model->content ?></div>
                        <?php } ?>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="View all reviews"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="View all questions"><?php echo $faq_view_more ?></a>
                </section>
                <section id="skin-guide" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $skin_guide_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="View all articles"><?php echo $faq_view_more ?></a>
                </section>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="View all specialists"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla märken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="View all brands">View all brands</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="includes/scripts/floating-image.js"></script>
</body>

</html>