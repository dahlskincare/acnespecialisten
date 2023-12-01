<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Fillerbehandlingar för Fina Resultat | AcneSpecialisten';
$seo_description = 'Upplev skillnaden med AcneSpecialistens fillerbehandlingar. Vi är experter på att skapa en mer ungdomlig och harmonisk utstrålning. Genom säker och skonsam behandling reducerar vi linjer och återskapar volym för ett naturligt och förfinat utseende.';
$seo_keywords = 'fillerbehandlingar, ålderslinjer, volymåterställning, naturliga resultat, ansiktsförfining, AcneSpecialisten, estetisk hudvård';

$seo_image = 'images/treatments/large/fillers.jpg';

$model = new Service(
    title: 'Fillers',
    duration: null,
    price: 'Från 3595 kr',
    content: '<p class="p200">På AcneSpecialisten erbjuder vi avancerade fillersbehandlingar för att elegant förbättra ditt ansiktes naturliga skönhet. Dessa behandlingar är noggrant utformade för att smidigt reducera fina linjer och rynkor samt återge och förbättra ansiktets volym och konturer på ett naturligt sätt. Vårt team av experter inom estetisk hudvård är specialiserade på att skapa harmoniska och balanserade resultat.</p>
    <p class="p200 mt-m">Våra fillersbehandlingar är särskilt lämpade för dig som önskar att framhäva din naturliga skönhet, vare sig det gäller att ge läpparna en fylligare form, definiera kindbenen eller mjuka upp uttryckslinjer. Vi tar oss tid att förstå varje klients unika behov och målsättningar, och varje behandling anpassas för att uppnå individuella önskemål. Oavsett om ditt mål är att föryngra din hud eller skapa en mer definierad ansiktskontur, erbjuder våra fillersbehandlingar en skonsam och effektiv metod för att förhöja ditt utseende.</p>',
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

$floating_box = 'Våra fillersbehandlingar fyller effektivt ut huden.';

$nav_buttons = array(
    'about' => 'Om fillers',
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

$description_title = 'Vad är Injektionsbehandlingar?';
$description_text = '<p class="p200">På AcneSpecialisten erbjuder vi fillers som är noga och icke-kirurgisk metod för att framhäva och förbättra hudens kvalitet och estetik. Dessa behandlingar innebär noggrant utförda injektioner med specialiserade produkter som effektivt reducerar fina linjer och rynkor samt återställer eller förhöjer hudens naturliga volym och konturer.</p>
<p class="p200 mt-m">Vår approach är att skapa en diskret förfining, harmoniserat anpassad till varje individs unika ansiktsdrag och önskemål. Vi utnyttjar diverse tekniker för att noggrant behandla områden som läppar, kindben, panna och andra ansiktsdelar där åldersrelaterade förändringar eller volymförlust kan vara tydlig. Varje behandling är skräddarsydd med målet att uppnå resultat som både känns och ser naturliga ut.</p>
<p class="p200 mt-m">Injektionsbehandlingarna hos AcneSpecialisten ger en omedelbar förbättring av hudens utseende på ett säkert och effektivt sätt, utan kirurgiska ingrepp. Med vårt erfarna team och användning av premiumprodukter, siktar vi på att förbättra din hudhälsa och stärka ditt självförtroende genom subtila och naturliga förändringar.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelse inför fillers',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelse inför fillers',
        image_title: 'Förberedelse inför fillers',
        content: '<p class="p200">På AcneSpecialisten börjar din resa mot förbättrad hudhälsa med en grundlig konsultation inför din fillersbehandling. Denna initiala konsultation, följt av en 48 timmars betänketid, är avgörande för att skapa en skräddarsydd plan som speglar dina unika behov och estetiska mål. Under denna tid diskuterar vi dina förväntningar och tidigare erfarenheter, för att säkerställa att behandlingen blir så framgångsrik som möjligt.</p>
        <p class="p200 mt-m">För att förbereda dig inför behandlingen, rekommenderar vi att du undviker direkt solljus och avstår från att använda produkter som kan irritera huden, såsom retinol eller exfolierande syror, under dagarna före din session. Denna försiktighet hjälper till att minimera risken för irritation eller oönskade reaktioner. Vi uppmuntrar dig att komma till din behandling med en klar förståelse av processen och realistiska förväntningar på resultatet.</p>
        <p class="p200 mt-m">Vårt team på AcneSpecialisten är här för att ge dig vägledning och stöd genom hela din behandlingsprocess. Din komfort och säkerhet är vår högsta prioritet, och vi strävar efter att ge dig en behandling som är både skonsam och effektiv. Vi välkomnar alla dina frågor och funderingar under konsultationen och ser fram emot att hjälpa dig att uppnå dina skönhetsmål.</p>',
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
        title: 'Hur går fillersbehandlingar till?',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Hur går fillersbehandlingar till?',
    image_title: 'Hur går fillersbehandlingar till?',
    content: '<p class="p200">Vid AcneSpecialisten är varje steg i vår fillersbehandling omsorgsfullt planerad för att säkerställa bästa resultat. Din behandlingsresa inleds med en omfattande konsultation där vi utforskar dina estetiska mål och noggrant analyserar din hud. Denna viktiga dialog följs av en betänketid på 48 timmar, vilket ger dig tid att överväga behandlingen noggrant.</p>
    <p class="p200 mt-m">När du väl bestämt dig för att gå vidare, börjar behandlingsdagen med en grundlig rengöring av det valda området. Vi markerar sedan specifikt var behandlingen ska utföras för att garantera precision. Behandlingen, som utförs med största omsorg, innefattar användningen av avancerade injektionstekniker som inte bara uppfyller dina önskemål utan också minimerar eventuellt obehag.</p>
    <p class="p200 mt-m">Direkt efter behandlingen får du utförliga eftervårdsanvisningar för att underlätta en smidig återhämtning och optimera resultatet. Lätt rodnad eller svullnad i behandlingsområdet är normalt och bör snart avta. För att säkerställa att du är helt nöjd med resultatet erbjuder vi uppföljningssessioner där vi kan göra eventuella justeringar. Vi är engagerade i att ge dig en trygg och tillfredsställande upplevelse från start till slut.</p>',
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

$treatment_areas_title = 'Behandlingsområden för Fillers';
$treatment_areas_text = '<p class="p200">Vi anpassar alltid mängden fillers efter dina behov och önskemål.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Fillers',
        image_title: 'Fillers',
        title: 'Fillers',
        description: '<p class="p200">Vi utför även fillers, lägg till 2000 kronor per mililiter.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 1 ml',
                image_title: 'Fillers 1 ml',
                title: 'Fillers 1 ml',
                duration: '40 min',
                price: '3595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 1 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 2 ml',
                image_title: 'Fillers 2 ml',
                title: 'Fillers 2 ml',
                duration: '40 min',
                price: '5595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 2 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 3 ml',
                image_title: 'Fillers 3 ml',
                title: 'Fillers 3 ml',
                duration: '60 min',
                price: '7595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 3 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 4 ml',
                image_title: 'Fillers 4 ml',
                title: 'Fillers 4 ml',
                duration: '90 min',
                price: '9995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 4 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 5 ml',
                image_title: 'Fillers 5 ml',
                title: 'Fillers 5 ml',
                duration: '90 min',
                price: '12995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling med 5 ml.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                image_title: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                title: 'Fillers - 1 ml Påfyllnig (Inom 2 månader)',
                duration: '30 min',
                price: '2395 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för påfyllning.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers - Hyalase (Borttagning av fillers)',
                image_title: 'Fillers - Hyalase (Borttagning av fillers)',
                title: 'Fillers - Hyalase (Borttagning av fillers)',
                duration: '60 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för hyalase.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers - Hyalase (Återbesök & Kontroll)',
                image_title: 'Fillers - Hyalase (Återbesök & Kontroll)',
                title: 'Fillers - Hyalase (Återbesök & Kontroll)',
                duration: '60 min',
                price: 'Gratis',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för återbesök och kontroll.'
            ),
        ),
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Kombinera fillers med injektionsbehandlingar.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 1 ml + Injektion 1x Område',
                image_title: 'Fillers 1 ml + Injektion 1x Område',
                title: 'Fillers 1 ml + Injektion 1x Område',
                duration: '50 min',
                price: '5595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 1 ml + Injektion 1x Område.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 1 ml + Injektion 2x Områden',
                image_title: 'Fillers 1 ml + Injektion 2x Områden',
                title: 'Fillers 1 ml + Injektion 2x Områden',
                duration: '50 min',
                price: '6095 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 1 ml + Injektion 2x Områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 1 ml + Injektion 3x Områden',
                image_title: 'Fillers 1 ml + Injektion 3x Områden',
                title: 'Fillers 1 ml + Injektion 3x Områden',
                duration: '50 min',
                price: '6595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 1 ml + Injektion 3x Områden.'
            ),

            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 2 ml + Injektion 1x Område',
                image_title: 'Fillers 2 ml + Injektion 1x Område',
                title: 'Fillers 2 ml + Injektion 1x Område',
                duration: '50 min',
                price: '8495 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 2 ml + Injektion 1x Område.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 2 ml + Injektion 2x Områden',
                image_title: 'Fillers 2 ml + Injektion 2x Områden',
                title: 'Fillers 2 ml + Injektion 2x Områden',
                duration: '50 min',
                price: '8995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 2 ml + Injektion 2x Områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 2 ml + Injektion 3x Områden',
                image_title: 'Fillers 2 ml + Injektion 3x Områden',
                title: 'Fillers 2 ml + Injektion 3x Områden',
                duration: '50 min',
                price: '9495 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 2 ml + Injektion 3x Områden.'
            ),

            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 3 ml + Injektion 1x Område',
                image_title: 'Fillers 3 ml + Injektion 1x Område',
                title: 'Fillers 3 ml + Injektion 1x Område',
                duration: '70 min',
                price: '11395 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 3 ml + Injektion 1x Område.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 3 ml + Injektion 2x Områden',
                image_title: 'Fillers 3 ml + Injektion 2x Områden',
                title: 'Fillers 3 ml + Injektion 2x Områden',
                duration: '70 min',
                price: '11895 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 3 ml + Injektion 2x Områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Fillers 3 ml + Injektion 3x Områden',
                image_title: 'Fillers 3 ml + Injektion 3x Områden',
                title: 'Fillers 3 ml + Injektion 3x Områden',
                duration: '70 min',
                price: '12395 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för Fillers 3 ml + Injektion 3x Områden.'
            ),
        ),
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård och underhåll efter fillers',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård och underhåll efter fillers',
    image_title: 'Eftervård och underhåll efter fillers',
    content: '<p class="p200">Efter din fillersbehandling på AcneSpecialisten är det avgörande att du noggrant följer våra rekommendationer för eftervård för att optimera och bevara behandlingens effekter. Direkt efter behandlingen är det viktigt att minimera exponering för starkt solljus och alltid använda ett solskydd med hög SPF för att skydda det behandlade området.</p>
    <p class="p200 mt-m">Det är vanligt med en viss grad av svullnad eller blåmärken efter behandlingen. Det är viktigt att undvika att röra eller massera det behandlade området under de första kritiska dagarna. Vid behov kan en kall kompress användas för att lindra eventuell svullnad. Vi rekommenderar även att du håller huden återfuktad med de hudvårdsprodukter som vi rekommenderar, för att stödja och påskynda läkningsprocessen.</p>
    <p class="p200 mt-m">En hälsosam kost och tillräckligt med vätskeintag är viktiga komponenter för din huds återhämtning och allmänna välbefinnande. Undvik alkohol och var försiktig med användningen av blodförtunnande medel, som kan öka risken för blåmärken. För att underhålla och förlänga effekten av din behandling kan regelbundna uppföljningsbesök vara nödvändiga. Om du har några frågor om din eftervård, tveka inte att kontakta oss på AcneSpecialisten för personliga råd och vägledning.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

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
            title: 'Hur ofta bör jag genomföra fillersbehandlingar?',
            text: 'Frekvensen för fillersbehandlingar beror på dina individuella estetiska mål och hur din hud reagerar på behandlingen. Vanligtvis rekommenderas en initial behandlingsserie följt av underhållsbehandlingar var 3-6 månader för att bibehålla och förstärka resultatet.'
        ),

        new Question(
            title: 'Vilka omedelbara effekter kan jag förvänta mig efter fillersbehandling?',
            text: 'Efter en fillersbehandling kan du märka omedelbara effekter som lätt svullnad och kanske lite rodnad i det behandlade området. Dessa reaktioner är vanligen milda och övergående. De slutgiltiga resultaten framträder tydligare när eventuell svullnad lagt sig, oftast inom några dagar.'
        ),

        new Question(
            title: 'När är det säkert att återuppta mina vanliga aktiviteter efter fillersbehandling?',
            text: 'De flesta klienter kan återgå till sitt normala liv direkt efter en fillersbehandling. Vi rekommenderar dock att du undviker kraftig fysisk aktivitet och direkt exponering för solen under de första 24 timmarna efter behandlingen för att minska risken för svullnad och blåmärken.'
        ),

        new Question(
            title: 'Finns det några speciella eftervårdsinstruktioner jag bör följa efter fillersbehandling?',
            text: 'Efter din fillersbehandling är det viktigt att följa specifika eftervårdsinstruktioner för optimal läkning. Det innefattar att inte röra behandlingsområdet och att använda solskydd samt milda hudvårdsprodukter för att skydda och lugna huden. Vi kommer att ge dig detaljerade instruktioner anpassade efter din behandling.'
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