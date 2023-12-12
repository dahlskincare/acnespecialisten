<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'PRX-T33 - Revolutionerande Kemisk Peeling | AcneSpecialisten';
$seo_description = 'På AcneSpecialisten erbjuder vi PRX-T33, en banbrytande kemisk peeling som revolutionerar hudvårdsbehandlingar. Denna unika peeling ger djupgående resultat mot rynkor, fina linjer, pigmenteringar och bristningar, utan den avskalning som traditionella peelings medför. Idealisk för alla som söker effektiva lösningar på sina hudproblem med minimal återhämtningstid.';
$seo_keywords = 'PRX-T33, kemisk peeling, hudföryngring, anti-age, pigmenteringar, bristningar, fina linjer, hudförbättring, avancerad hudvård, AcneSpecialisten';

$seo_image = 'images/treatments/large/prx-t33.jpg';

$model = new Service(
    title: 'PRX-T33',
    duration: '30 min',
    price: null,
    content: '<p class="p200">På AcneSpecialisten är vi stolta över att erbjuda PRX-T33, en avancerad form av kemisk peeling som specialiserar sig på att effektivt förbättra hudens utseende och kvalitet. Denna innovativa behandling är särskilt lämplig för dig som vill adressera hudproblem såsom acneärr, bristningar, melasma, pigmentfläckar, pormaskar, stora porer, samt rynkor och fina linjer. Vår PRX-T33-behandling är utformad för att vara både skonsam och kraftfull, vilket möjliggör en betydande förbättring av hudens struktur och ton utan den avskalning som ofta förekommer vid traditionell kemisk peeling.</p>
    <p class="p200 mt-m">Varje PRX-T33-behandling på AcneSpecialisten är anpassad efter klientens individuella hudbehov, med målet att erbjuda en säker och icke-invasiv väg till en klarare, mer jämn och strålande hud. Vårt engagemang för expertis och kvalitet garanterar att varje klient upplever en märkbar förbättring i sin hudkvalitet, tack vare våra effektiva och professionellt genomförda behandlingar.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
    image_alt: 'PRX-T33 behandlingar',
    image_title: 'PRX-T33 behandlingar',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 procedure',
            price: '1995 kr',
            savings: null,
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '4 procedures',
            price: '6995 kr',
            savings: 'Spara 985 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '6 procedures',
            price: '8995 kr',
            savings: 'Spara 2975 kr',
            booking_url: 'https://bokadirekt.se',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$nav_buttons = array(
    'about' => 'Om PRX-T33',
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

$description_title = 'Vad är PRX-T33?';
$description_text = '<p class="p200">PRX-T33, som erbjuds hos AcneSpecialisten, är en banbrytande form av kemisk peeling som revolutionerar hudvårdsbehandlingar. Denna unika peeling kombinerar egenskaperna hos TCA (triklorättiksyra) med väteperoxid, vilket ger en djupgående effekt på huden utan den avskalning och irritation som ofta associeras med traditionella kemiska peelings.</p>
<p class="p200 mt-m">PRX-T33 är särskilt utvecklad för att förbättra hudens struktur och utseende genom att stimulera hudens underliggande strukturer utan att skada dess yttre lager. Detta gör den idealisk för behandling av acneärr, bristningar, melasma, fina linjer, rynkor och pigmentfläckar. PRX-T33 ger synliga resultat redan efter första behandlingen och är lämplig för alla hudtyper, inklusive känslig hud. Behandlingen är smärtfri, kräver ingen återhämtningstid och kan utföras året om, vilket gör den till ett attraktivt val för dem som söker effektiva men skonsamma hudförbättringar.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför PRX-T33-behandling',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför PRX-T33-behandling',
        image_title: 'Förberedelser inför PRX-T33-behandling',
        content: '<p class="p200">För att förbereda dig optimalt för din PRX-T33-behandling hos AcneSpecialisten, rekommenderar vi att du följer några enkla men viktiga steg. Börja med att undvika exfoliering av huden några dagar före din behandling. Eftersom PRX-T33 agerar djupt på huden, är det bäst att låta huden vara så orörd som möjligt innan peelingen.</p>
        <p class="p200 mt-m">Det är också viktigt att skydda din hud mot solen och undvika att använda brun-utan-sol-produkter veckan före din behandling. Denna försiktighetsåtgärd minskar risken för oönskade reaktioner och säkerställer att din hud är i bästa skick för att ta emot behandlingen. Vidare, informera din hudterapeut om eventuella mediciner du använder eller om du har några aktuella hudtillstånd, så att behandlingen kan anpassas på ett säkert och effektivt sätt. Tveka inte att kontakta oss om du har några frågor eller oro inför din PRX-T33-behandling – vi är här för att se till att din upplevelse blir så bekväm och givande som möjligt.</p>',
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
        title: 'Hur går behandling med PRX-T33 till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går behandling med PRX-T33 till?',
        image_title: 'Hur går behandling med PRX-T33 till?',
        content: '<p class="p200">På AcneSpecialisten tar vi hudvården till nästa nivå med PRX-T33, en innovativ kemisk peeling som är skräddarsydd för att återuppliva och förbättra din hud. Vi förstår att varje persons hud är unik, och därför är varje PRX-T33-behandling noggrant anpassad efter dina specifika behov och hudtillstånd.</p>
        <p class="p200 mt-m">Behandlingen inleds med en noggrann rengöring av huden för att skapa en optimal grund för peelingen. Därefter appliceras PRX-T33-lösningen varsamt på huden. Denna unika formula är utformad för att djupgående exfoliera utan att orsaka den avskalning som traditionella kemiska peelings kan ge. Du kan känna en mild stickande känsla, men processen är i stort sett smärtfri tack vare PRX-T33:s avancerade sammansättning.</p>
        <p class="p200 mt-m">Efter att peelingen har verkat i rätt tid, följer en lugnande fas där vi applicerar en återfuktande och lugnande mask för att maximera komforten och minimera eventuell rodnad. Slutligen avslutas behandlingen med en närande kräm som hjälper till att återställa hudens fuktbalans och ger en omedelbar lyster. Med PRX-T33-behandlingen hos AcneSpecialisten kan du förvänta dig en snabb och effektiv förbättring av hudens textur och utseende, utan den nedtid som associeras med traditionell kemisk peeling.</p>',

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
        consultation_url: 'gratis-hudkonsultation',
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

$types_title = 'Hudproblem vi behandlar med PRX-T33';
$types_description = '<p class="p200">Hos AcneSpecialisten använder vi PRX-T33, en avancerad form av kemisk peeling, för att effektivt hantera en mängd hudproblem. Denna banbrytande behandling är särskilt utformad för att ta itu med en rad olika hudutmaningar, inklusive acneärr, aktiv akne, bristningar, melasma och pigmentfläckar. PRX-T33 är också ett utmärkt val för att behandla pormaskar och stora porer samt att minska synligheten av rynkor och fina linjer.</p>';

$types = array(
    new Service(
        title: 'PRX-T33 mot Melasma',
        duration: '30 min',
        price: '1995 kr',
        content: 'Effektiv behandling för att ljusa upp och behandla melasma, vilket ger en jämnare och klarare hudton.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling mot Melasma',
        image_title: 'Kemisk Peeling mot Melasma',
        consultation_url: 'hudkonsultation-melasma',
        consultation_url_label: 'Boka tid för konsultation om Melasma',
        consultation_url_title: 'Boka tid för konsultation om Melasma',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling för Melasma',
        booking_url_title: 'Boka Kemisk Peeling för Melasma',
    ),
    new Service(
        title: 'PRX-T33 mot Pigmentfläckar',
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
        title: 'PRX-T33 mot Bristningar',
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
        title: 'PRX-T33 mot Rynkor & Fina Linjer',
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
        title: 'PRX-T33 mot Solskadad Hy',
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
        title: 'PRX-T33 mot acneärr',
        duration: '30 min',
        price: null,
        content: 'Vår specialanpassade kemiska peeling är utformad för att effektivt behandla och minska synligheten av acneärr. Denna behandling arbetar på djupet för att jämna ut både ytan och hudtonen där ärrbildning har skett.',
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
        title: 'PRX-T33 mot Aktiv Akne',
        duration: '30 min',
        price: '1595 kr',
        content: 'Specialiserad peeling för att behandla aktiv akne. Hjälper till att rengöra porer, minska inflammation och förhindra framtida utbrott.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling mot Aktiv Akne',
        image_title: 'Kemisk Peeling mot Aktiv Akne',
        consultation_url: 'hudkonsultation-aktivakne',
        consultation_url_label: 'Boka tid för konsultation om Aktiv Akne',
        consultation_url_title: 'Boka tid för konsultation om Aktiv Akne',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling mot Aktiv Akne',
        booking_url_title: 'Boka Kemisk Peeling mot Aktiv Akne',
    ),
    new Service(
        title: 'PRX-T33 mot Pormaskar & Stora Porer',
        duration: '30 min',
        price: '1595 kr',
        content: 'Denna behandling är idealisk för att djuprengöra huden, minska synligheten av pormaskar och förminska stora porer, vilket bidrar till en jämnare hudton och textur.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Kemisk Peeling mot Pormaskar och Stora Porer',
        image_title: 'Kemisk Peeling mot Pormaskar och Stora Porer',
        consultation_url: 'hudkonsultation-pormaskar',
        consultation_url_label: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        consultation_url_title: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Kemisk Peeling mot Pormaskar och Stora Porer',
        booking_url_title: 'Boka Kemisk Peeling mot Pormaskar och Stora Porer',
    ),
);

$treatment_areas_title = 'Behandlingsområden för PRX-T33';
$treatment_areas_text = '<p class="p200">PRX-T33 är en avancerad form av kemisk peeling som effektivt används för att behandla och förbättra hudens tillstånd i olika områden. Denna unika behandling är särskilt lämplig för ansiktet, halsen, dekolletaget och ryggen, där den kan bidra till att förbättra hudens textur och utseende.</p>';
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
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för handbehandling'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård vid PRX-T33',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård vid PRX-T33',
    image_title: 'Eftervård vid PRX-T33',
    content: '<p class="p200"><p class="p200">Eftervård är avgörande för att maximera resultaten av din kemiska peeling. För att underhålla och förbättra din hudkvalitet efter behandlingen, är det viktigt att följa en skräddarsydd hudvårdsrutin. Det innebär inte bara att använda rätt produkter, utan också att följa en rutin som är anpassad för din specifika hudtyp och de behov som uppstått efter peelingen.</p>
    <p class="p200 mt-m">På AcneSpecialisten hjälper vi dig att skapa en effektiv eftervårdsplan som passar just din hud. Detta kan innefatta allt från noggrann rengöring och återfuktning till speciella vårdåtgärder som lugnar och främjar hudens läkningsprocess. Vi guidar dig genom varje steg för att försäkra att du ger din hud den optimala vård den behöver för att återhämta sig och bibehålla de positiva effekterna av peelingen. Rätt eftervård är essentiell för att upprätthålla en hälsosam, välvårdad och strålande hud.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för kemisk peeling';
$service_brands_text = '<p class="p200">Utöver PRX-T33 jobbar vi även med Skin Tech för kemisk peeling.</p>';
$service_brands = array(
    new Brand(
        label: 'Skin Tech',
        image: 'images/brands/skin-tech.svg',
        image_alt: 'Skin Tech',
        image_title: 'Skin Tech'
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
            title: 'Är PRX-T33 lämplig för alla hudtyper?',
            text: 'Ja, PRX-T33 är en flexibel kemisk peeling som passar för många olika hudtyper. Denna behandling är skonsam och effektiv, och vi anpassar den individuellt för att säkerställa att den passar dina specifika hudbehov och ger optimala resultat.'
        ),
        new Question(
            title: 'Kan PRX-T33 behandling hjälpa till med acneärr och pigmentfläckar?',
            text: 'Definitivt, PRX-T33 är särskilt effektiv för att behandla acneärr och pigmentfläckar. Denna peeling hjälper till att exfoliera huden och främja cellförnyelse, vilket kan minska synligheten av acneärr och jämna ut pigmentfläckar.'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå en PRX-T33 behandling?',
            text: 'Behandlingsintervall för PRX-T33 varierar beroende på din hudtyp och de problem du vill åtgärda. Vissa kan ha fördel av behandlingar var fjärde till sjätte vecka, medan andra kan behöva behandlas med längre eller kortare mellanrum. Vi kommer att rekommendera en behandlingsplan anpassad efter din personliga hudanalys.'
        ),
        new Question(
            title: 'Vilken typ av PRX-T33 behandling ska jag välja för min hud?',
            text: 'För att bestämma vilken PRX-T33 behandling som är bäst för din hud, rekommenderar vi en konsultation med våra erfarna hudterapeuter. Under konsultationen analyserar vi din hudtyp och dina specifika behov för att kunna rekommendera den mest effektiva behandlingen för dig.'
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