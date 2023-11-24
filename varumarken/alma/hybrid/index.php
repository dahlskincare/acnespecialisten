<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Alma Hybrid - Avancerad Laserbehandling för Hudförnyelse | AcneSpecialisten';
$seo_description = 'AcneSpecialisten introducerar Alma Hybrid, en banbrytande laserbehandling som kombinerar CO2 och non-ablative lasrar för att effektivt hantera ett brett spektrum av hudproblem. Idealisk för acneärr, ojämn hudton, rynkor och fina linjer, erbjuder Alma Hybrid en omfattande lösning för hudföryngring och texturutjämning.';
$seo_keywords = 'Alma Hybrid, laserbehandling, hudföryngring, acneärr, hudton, hudtextur, avancerad hudvård, AcneSpecialisten, effektiv hudbehandling, hudförnyelse';

$seo_image = 'images/treatments/large/alma-hybrid.jpg';

$model = new Service(
    title: 'Alma Hybrid',
    duration: null,
    price: 'Från 4595 kr',
    content: '<p class="p200">Alma Hybrid hos AcneSpecialisten representerar nästa generation av laserbehandlingar, kombinerar effektiviteten av CO2-laser med mångsidigheten hos non-ablative lasrar. Denna innovativa behandling är utformad för att effektivt hantera en rad hudproblem, inklusive acneärr, rynkor, fina linjer och ojämn hudton. Med Alma Hybrid upplever du en betydande förbättring av hudens textur och lyster.</p>
    <p class="p200 mt-m">Vår Alma Hybrid-teknik arbetar genom att noggrant och kontrollerat skapa mikroskopiska skador i hudens yttre lager, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Denna process resulterar i en märkbar föryngring av huden, vilket minskar synligheten av ärr och förbättrar hudens övergripande struktur och utseende. Alma Hybrid är det perfekta valet för dem som söker en omfattande och avancerad lösning för hudföryngring och förbättring av hudkvalitet.</p>',
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
);

$nav_buttons = array(
    'about' => 'Om Alma Hybrid',
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

$description_title = 'Vad är Alma Hybrid?';
$description_text = '<p class="p200">Alma Hybrid på AcneSpecialisten representerar en banbrytande teknik inom laserbehandling, som kombinerar den fraktionerade, ablativa CO2-lasern med icke-ablativ laserteknik. Denna avancerade metod erbjuder en omfattande och mångsidig lösning för ett brett spektrum av hudproblem, inklusive acneärr, rynkor, bristningar, ojämn hudton och stora porer. Genom att kombinera dessa två lasertekniker uppnår vi överlägsna resultat med minskad återhämtningstid.</p>
<p class="p200 mt-m">CO2-lasern arbetar genom att skapa kontrollerade mikroskopiska skador i hudens yttre lager, vilket främjar hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Denna process hjälper till att förbättra hudens struktur, minska ärr och rynkor, och ge en övergripande hudföryngring. Samtidigt arbetar den icke-ablativa lasertekniken med att förbättra hudens elasticitet och textur på ett djupare plan, utan att skada hudens yttre lager. Detta möjliggör en effektiv behandling med minimal återhämtningstid.</p>
<p class="p200 mt-m">Alma Hybrid är känd för sin förmåga att leverera snabba och synliga resultat redan efter en session, vilket gör den till en idealisk lösning för dem som söker en effektiv och tidsbesparande behandling. Dessutom är säkerheten alltid en prioritet, med förbättrade säkerhetsåtgärder som säkerställer en trygg och behaglig upplevelse. Våra skräddarsydda Alma Hybrid-behandlingar på AcneSpecialisten erbjuder en effektiv väg mot en fräschare, jämnare och mer vital hud.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Alma Hybrid',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför laser mot problemhy',
        image_title: 'Förberedelser inför laser mot problemhy',
        content: '<p class="p200">Inför din Alma Hybrid-behandling hos AcneSpecialisten, erbjuder vi en kostnadsfri konsultation. Under denna session kommer vi att gå igenom behandlingsprocessen i detalj och skapa en personlig behandlingsplan för att uppnå bästa möjliga resultat. Det är ett viktigt steg för att säkerställa att du är fullständigt informerad och bekväm med behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen diskuterar vi också specifika förberedelser som är nödvändiga för just din hudtyp och ditt individuella tillstånd. Vi betonar vikten av att undvika solbränna och stark sol några veckor före behandlingen, då detta kan påverka hudens känslighet och behandlingens effektivitet. Vidare rekommenderas att du undviker hudvårdsprodukter med starka aktiva ingredienser som exfolierande syror minst en vecka före behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen tar vi även upp din hudhistorik som kan påverka behandlingen. Detta är en viktig del av processen för att skräddarsy behandlingen efter dina behov och för att säkerställa att du får den mest effektiva och säkra behandlingen. Vi ser fram emot att arbeta tillsammans med dig och hjälpa dig att uppnå din önskade hudkvalitet med Alma Hybrid-behandling.</p>',
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
        title: 'Hur går behandling med Alma Hybrid till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går behandling med Alma Hybrid till?',
        image_title: 'Hur går behandling med Alma Hybrid till?',
        content: '<p class="p200">Att genomgå en Alma Hybrid-behandling hos AcneSpecialisten innebär en noggrann och avancerad process för att effektivt behandla problemhy. Behandlingen inleds med en grundlig rengöring av det område som ska behandlas för att säkerställa att huden är optimalt förberedd för laserterapin.</p>
        <p class="p200 mt-m">Alma Hybrid använder en unik kombination av laser-teknologier för att målinriktat behandla olika hudproblem. Under behandlingen använder vi fraktionerad CO2-laser som arbetar genom att skapa små mikroskopiska skador i hudens lager. Denna process stimulerar hudens naturliga läkning och tillväxt av nytt kollagen och elastin, vilket är avgörande för hudens hälsa och ungdomlighet.</p>
        <p class="p200 mt-m">Behandlingen är speciellt effektiv för att minska synligheten av olika typer av ärr, inklusive acneärr och operationsärr. Den är också idealisk för att behandla rynkor, fina linjer och för att utföra huduppfräschning och hudresurfacing. Värmen från lasern kan upplevas som en värmande känsla på huden, men vi använder effektiva kylmetoder och bedövning för att göra behandlingen så behaglig som möjligt.</p>
        <p class="p200 mt-m">Efter behandlingen är det normalt att uppleva viss rodnad och svullnad. Detta är en del av kroppens naturliga läkningsprocess. Vi ger dig detaljerade instruktioner om eftervård för att maximera återhämtningen och säkerställa att din hud läker ordentligt. Resultaten från Alma Hybrid-behandlingen utvecklas gradvis, och du kan förvänta dig att se en kontinuerlig förbättring av din hudkvalitet över tid.</p>',
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

$types_title = 'Hudproblem som behandlas med Alma Hybrid';
$types_description = '<p class="p200">Vår laserbehandling är effektiv för en rad olika hudproblem, tack vare dess förmåga att stimulera hudens egen läkningsprocess och kollagenproduktion. Nedan listar vi de hudproblem som vi effektivt behandlar med vår lasermetod.</p>';
$types = array(
    new Service(
        title: 'Laserbehandling för Acneärr',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Vår laserbehandling är särskilt effektiv för att minska synligheten av acneärr. Genom att använda fraktionerad CO2-laser stimuleras hudens naturliga läkningsprocess, vilket bidrar till en jämnare hudstruktur och minskning av ärr.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Acneärr',
        image_title: 'Laserbehandling för Acneärr',
        consultation_url: 'konsultation-acnearr',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Rynkor och Fina Linjer',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Denna laserbehandling syftar till att föryngra huden genom att minska uppkomsten av rynkor och fina linjer. Med hjälp av fraktionerad CO2-laser stimuleras kollagenproduktionen, vilket resulterar i en fastare och mer ungdomlig hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Rynkor och Fina Linjer',
        image_title: 'Laserbehandling för Rynkor och Fina Linjer',
        consultation_url: 'konsultation-rynkor-fina-linjer',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Bristningar',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Vår laserbehandling erbjuder en effektiv lösning för att reducera synligheten av bristningar. Genom att använda fraktionerad CO2-laser, behandlas de berörda områdena för att främja hudens naturliga läkningsprocess och förbättra hudens textur.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Bristningar',
        image_title: 'Laserbehandling för Bristningar',
        consultation_url: 'konsultation-bristningar',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Ärr (Skade- och Operationsärr)',
        duration: '30 minuter',
        price: '2995 kr',
        content: 'Denna laserbehandling är speciellt anpassad för att minska synligheten av skade- och operationsärr. Genom att använda avancerad CO2-laser stimuleras hudens förnyelseprocess för att mjuka upp och släta ut ärrvävnad.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Ärr',
        image_title: 'Laserbehandling för Ärr',
        consultation_url: 'konsultation-arr',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Pigmentfläckar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår laserbehandling riktar sig mot pigmentfläckar och ojämn hudton. Med fraktionerad CO2-laser behandlas områden med hyperpigmentering för att jämna ut hudtonen och återställa en naturlig lyster i huden.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Pigmentfläckar',
        image_title: 'Laserbehandling för Pigmentfläckar',
        consultation_url: 'konsultation-pigmentflackar',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Melasma',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår laserbehandling mot melasma använder CO2-laser för att effektivt ljusa upp och behandla mörka fläckar orsakade av melasma, vilket leder till en mer jämn och klar hudton.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Melasma',
        image_title: 'Laserbehandling för Melasma',
        consultation_url: 'konsultation-melasma',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Ytliga Blodkärl',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Effektiv behandling av ytliga blodkärl med vår fraktionerad CO2-laser. Denna metod fokuserar på att minska synligheten av ytliga blodkärl och förbättra hudens övergripande utseende.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Ytliga Blodkärl',
        image_title: 'Laserbehandling för Ytliga Blodkärl',
        consultation_url: 'konsultation-ytliga-blodkarl',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Rosacea',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Avancerad laserbehandling som effektivt reducerar symtomen av rosacea. Fraktionerad CO2-laser används för att lugna huden och minska rodnad och inflammation associerad med detta tillstånd.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Rosacea',
        image_title: 'Laserbehandling för Rosacea',
        consultation_url: 'konsultation-rosacea',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Aktiv Acne',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår laserbehandling för aktiv acne använder fraktionerad CO2-laser för att effektivt behandla acneutbrott. Denna metod riktar sig mot bakterier som orsakar acne och minskar inflammation, vilket leder till en minskning av acne och förhindrar nya utbrott.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Aktiv Acne',
        image_title: 'Laserbehandling för Aktiv Acne',
        consultation_url: 'konsultation-aktiv-acne',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Stora Porer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Denna behandling är inriktad på att förminska och förbättra utseendet av stora porer. Genom att använda fraktionerad CO2-laser stimuleras huden för att dra ihop porerna, vilket resulterar i en mer jämn och förfinad hudtextur.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Stora Porer',
        image_title: 'Laserbehandling för Stora Porer',
        consultation_url: 'konsultation-stora-porer',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling för Hudutväxter',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Fraktionerad CO2-laserbehandling för säker och effektiv borttagning av hudutväxter. Denna metod ger en skonsam behandling som minimerar risken för ärrbildning och ger ett slätt, jämnt resultat.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Laserbehandling för Hudutväxter',
        image_title: 'Laserbehandling för Hudutväxter',
        consultation_url: 'konsultation-hudutvaxter',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka laserbehandling',
        booking_url_title: 'Boka laserbehandling',
    ),
);

$treatment_areas_title = 'Behandlingsområden för Laser';
$treatment_areas_text = '<p class="p200">Vår laserbehandling är anpassningsbar för en rad olika områden, vilket gör den idealisk för att adressera specifika hudproblem på olika delar av kroppen. Vi använder fraktionerad CO2-laser för att behandla hudområden som ansikte, hals, dekolletage, rygg och händer, samt specifika ansiktsområden som panna, näsa, kinder, överläpp och haka. Denna teknik möjliggör precisionsbehandling för att förbättra hudens kvalitet och utseende, oavsett område.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Vi behandlar både hela och delar av ansiktet med laser.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'Panna',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling i pannan'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för näsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Kinder',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för kindbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för överläppsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '20 min',
                price: '1595 kr',
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
        description: '<p class="p200">Vi behandlar flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för handbehandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Kombinera flera områden för bättre effekt..</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '90 min',
                price: '5595 kr',
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
                price: '6595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för laserbehandling',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård för laserbehandling',
    image_title: 'Eftervård för laserbehandling',
    content: '<p class="p200">Eftervård är en avgörande del av din laserbehandlingsprocess för att säkerställa bästa möjliga resultat och snabb återhämtning. Omedelbart efter din laserbehandling kan du uppleva rodnad och viss svullnad i det behandlade området, vilket är normalt. Det är viktigt att inte röra området med orena händer och att undvika att applicera makeup under de första 24 timmarna för att förhindra irritation och infektioner.</p>
    <p class="p200 mt-m">Under återhämtningsperioden, undvik intensiv fysisk aktivitet, heta duschar och bastu, då detta kan förvärra svullnad och rodnad. Användning av hög SPF-solskydd är avgörande för att skydda den känsliga huden från solskador. Välj milda, återfuktande hudvårdsprodukter utan parfym eller irriterande ämnen för att hjälpa till med läkningsprocessen och bevara hudens fuktighet.</p>
    <p class="p200 mt-m">Följ de specifika eftervårdsinstruktionerna som ges av din hudterapeut noggrant. Om du har några frågor eller funderingar efter din behandling, tveka inte att kontakta din klinik för råd. Regelbundna uppföljningar och ytterligare behandlingar kan rekommenderas baserat på din hudtyp och de mål du har för din hudvård.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för laser mot problemhy';
$service_brands_text = '<p class="p200">Vi har ett stort utbud av lasermaskiner för att kunna välja rätt metod för just dina behov.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Hybrid',
        image: 'images/brands/alma-hybrid.svg',
        image_alt: 'Alma HybridL',
        image_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Alma Rejuve DyeVL',
        image: 'images/brands/alma-rejuve-dyevl.svg',
        image_alt: 'Alma Rejuve DyeVL',
        image_title: 'Alma Rejuve DyeVL',
    ),
    new Brand(
        label: 'Alma Harmony XL',
        image: 'images/brands/alma-harmony-xl.svg',
        image_alt: 'Alma Harmony XL',
        image_title: 'Alma Harmony XL',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
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

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur många laserbehandlingar mot problemhy krävs?',
            text: 'Antalet laserbehandlingar för problemhy varierar beroende på individens specifika hudtillstånd och mål. Ofta rekommenderas en serie av 3-5 behandlingar med några veckors mellanrum. En individuell behandlingsplan och rekommendationer kommer att ges under en konsultation.'
        ),
        new Question(
            title: 'Är resultaten från laserbehandling mot problemhy bestående?',
            text: 'Laserbehandlingar kan ge långsiktiga förbättringar, men det är viktigt att komma ihåg att hudens åldrande och yttre faktorer kan påverka hållbarheten av resultaten. En kontinuerlig hudvårdsrutin och eventuellt periodiska uppföljningsbehandlingar kan behövas för att bibehålla effekterna.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig direkt efter en laserbehandling mot problemhy?',
            text: 'Efter en laserbehandling mot problemhy kan du uppleva viss rodnad, svullnad eller känslighet i det behandlade området. Dessa reaktioner är normala och bör avta inom några dagar. Det är viktigt att följa eftervårdsinstruktionerna och skydda huden mot solen.'
        ),
        new Question(
            title: 'Behöver jag speciell eftervård efter en laserbehandling mot problemhy?',
            text: 'Eftervård är viktig för att upprätthålla resultaten av din laserbehandling. Det innefattar användning av solskydd, undvikande av direkt solstrålning och användning av milda hudvårdsprodukter. Din hudterapeut kommer att ge dig specifika råd baserade på din behandling och hudtyp.'
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