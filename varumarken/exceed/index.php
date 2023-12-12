<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Exceed - Avancerad microneedling | Acnespecialisten';
$seo_description = 'Utforska AcneSpecialistens Exceed-behandlingar, framkantstekniken för avancerad microneedling som effektivt tar itu med ålderstecken och hudens textur. Genom våra experter och anpassade behandlingsplaner, främjar vi hudens naturliga regenereringsprocess för att återställa dess fasthet och lyster.';
$seo_keywords = 'Exceed, avancerad microneedling, behandla hudtextur, minska ålderstecken, främja kollagenproduktion, hudförbättringar, förbättrad hudstruktur, jämn hudton, förbättrad hudelasticitet, hudförnyelse';

$seo_image = 'images/treatments/large/exceed.jpg';


$model = new Service(
    title: 'Exceed',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Exceed är idealisk för den som siktar på att förhöja hudens kvalitet och spänst, dämpa framträdandet av ärrvävnad, rynkor och fina linjer, samt återställa hudens naturliga vitalitet och utstrålning. Våra Exceed-behandlingar är skräddarsydda för att tillgodose en bredd av hudtillstånd och är noggrant framtagen för att optimera hudens återhämtningsförmåga och ungdomliga framtoning.</p>',
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

$floating_box = 'Med Exceed kan vi behandla flera olika hudåkommor såsom ärr, rynkor & fina linjer.';

$nav_buttons = array(
    'about' => 'Om Exceed',
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

$description_title = 'Exceed - en ledande teknik inom avancerad hudförbättring';
$description_text = '<p class="p200">Exceed är en toppmodern behandling som passar alla hudtyper, utformad för att vitalisera och förbättra hudens kvalitet. Denna avancerade metod använder preciserade mikronålar för att skapa små, exakta mikrokanaler i huden, vilket främjar djupt upptag av näringsrika serum och stimulerar hudens naturliga kollagenproduktion och läkningsmekanismer.</p>
    <p class="p200 mt-m">Som en digitalt styrd microneedling-teknik, erbjuder Exceed en behandling med minimal obehag jämfört med traditionella metoder. Exceed är anpassningsbar och kan målinriktat förbättra en mängd hudtillstånd som rynkor, ärr, ojämn hudton och textur. Genom att aktivera hudens egna reparationsförmåga ökas dess elasticitet och lyster, vilket resulterar i en synbart yngre och mer strålande hud.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför behandling med Exceed',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför behandling med Exceed',
        image_title: 'Förberedelser inför behandling med Exceed',
        content: '<p class="p200">För att få så bra resultat av Exceed som möjligt rekommenderar vi alltid att man börjar med en detaljerad konsultation hos en av våra hudterapeuter. Konsultationen innebär en djupgående hudanalys där vi identifierar dina specifika behov och eventuella hudproblem. Denna initiala bedömning är avgörande för att skräddarsy en behandlingsplan som är unikt anpassad efter din huds egna förutsättningar.</p>
        <p class="p200 mt-m">För att säkerställa att du får de bästa möjliga resultaten, är det viktigt att din hud inte uppvisar tecken på solskador vid tiden för behandlingen. Vi råder också till att undvika hudretande produkter med starka syror eller andra irritanter några dagar innan din session. Vår hudterapeut kommer att ge dig omfattande råd och instruktioner om hur du på bästa sätt förbereder din hud för Exceed-behandlingen, vilket ger en både effektiv och säker behandlingsupplevelse.</p>',
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
        title: 'Exceed behandlingsprocess',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Exceed behandlingsprocess',
        image_title: 'Exceed behandlingsprocess',
        content: '<p class="p200">Exceed-behandlingen är en innovativ metod inom mikronålning som effektivt jobbar för att revitalisera och förbättra din huds struktur och utseende. Vid ankomst till vår klinik påbörjar vi processen med en omfattande rengöring av ditt ansikte för att avlägsna orenheter och smuts, vilket förbereder huden för behandlingen.</p>
        <p class="p200 mt-m">Under behandlingen använder vi Exceed-apparaten som är försedd med fina, sterila mikronålar. Denna apparat används för att skapa kontrollerade mikro-perforeringar i huden, vilket startar hudens naturliga läkningsmekanismer. Genom dessa mikro-skador stimuleras produktionen av kollagen och elastin, vitala komponenter för hudens ungdomlighet och spänst. Specifikt utformade serum appliceras under proceduren för att ytterligare nära huden och stödja den helande processen. Efter behandlingen kan du uppleva en lätt rodnad och svullnad, vilket är normala tecken på att hudens återhämtning är i gång. Över tid leder behandlingen till att huden blir jämnare, stramare och får en förhöjd lyster.</p>',
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
    'boost' => new Article(
        title: 'Boosta din Exceed-behandling med PRX-T33-behandling',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Boosta Exceed-behandling effekten med PRX-T33',
        image_title: 'Exceed-behandling effekten med PRX-T33',
        content: '<p class="p200">För att maximera effekterna av din Exceed-behandling, kan du välja att addera en PRX-T33 booster, vilket är en avancerad behandlingsform som förstärker och fördjupar de föryngrande resultaten. Denna unika förstärkningsbehandling kompletterar Exceed genom att stimulera huden utan nålar och erbjuder en effektiv förbättring utan behovet av återhämtningsperiod. PRX-T33 arbetar på hudens yta för att ge en omedelbar uppstramande effekt och förbättrar hudtonen, medan Exceed arbetar i hudens djupare lager för att stimulera långvarig kollagenproduktion. Tillsammans skapar de en omfattande behandlingsupplevelse som dramatiskt minskar fina linjer, utjämnar hudtonen och ger en övergripande förfinad hudstruktur för en ungdomligare och mer strålande hud.</p>',
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

$types_title = 'Hudåkommor som Exceed kan adressera';
$types_description = 'Exceed systematiskt tar itu med en bred spektrum av hudutmaningar genom att initiera hudens inre läkningsmekanismer med dess mikronålsteknologi. Denna metod framkallar små, precisa perforeringar i huden, vilket kickstartar kroppens egna reparerande processer och stimulerar produktionen av kollagen och elastin. Exceeds förmåga att penetrera hudens djupare lager gör det möjligt att signifikant förbättra olika typer av hudproblem. Upptäck de hudåkommor som Exceed effektivt kan minska och föryngra här.';
$types = array(
    new Service(
        title: 'Exceed för Aktiv Acne',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Genom en innovativ användning av mikronålar aktiverar Exceed behandlingen hudens självläkande mekanismer, vilket minskar inflammationen som är förknippad med aktiv acne och bidrar till att förebygga nya utbrott.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Exceed för Aktiv Acne',
        image_title: 'Exceed för Aktiv Acne',
        consultation_url: 'konsultation-aktiv-acne',
        consultation_url_label: 'Boka konsultation för behandling av aktiv acne',
        consultation_url_title: 'Boka konsultation för behandling av aktiv acne',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Exceed för aktiv acne',
        booking_url_title: 'Boka Exceed för aktiv acne',
    ),

    new Service(
        title: 'Exceed för Acneärr',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Exceed-terapi för acneärr använder precisionsmikronålar för att inducera minimala hudskador, vilket startar kroppens läkande processer och stimulerar ny kollagenbildning för att mjuka upp ärrvävnad och förbättra hudens textur.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Exceed för Acneärr',
        image_title: 'Exceed för Acneärr',
        consultation_url: 'konsultation-acnearr',
        consultation_url_label: 'Boka konsultation för behandling av acneärr',
        consultation_url_title: 'Boka konsultation för behandling av acneärr',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Exceed för acneärr',
        booking_url_title: 'Boka Exceed för acneärr',
    ),

    new Service(
        title: 'Exceed för Rynkor & Fina Linjer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Exceed-behandling för rynkor och fina linjer tillämpar mikronålingsteknik för att kickstarta hudens föryngringsmekanismer, vilket leder till en förhöjd kollagenproduktion och ger en slätare, föryngrad hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Exceed för Rynkor & Fina Linjer',
        image_title: 'Exceed för Rynkor & Fina Linjer',
        consultation_url: 'konsultation-rynkor-fina-linjer',
        consultation_url_label: 'Boka konsultation för behandling av rynkor och fina linjer',
        consultation_url_title: 'Boka konsultation för behandling av rynkor och fina linjer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Exceed för rynkor & fina linjer',
        booking_url_title: 'Boka Exceed för rynkor & fina linjer',
    ),

    new Service(
        title: 'Exceed för Stora Porer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Exceed-metoden för stora porer riktar sig in på hudens djupare lager för att stimulera kollagenförnyelse, vilket effektivt kan minska synligheten av stora porer och förfina hudens övergripande struktur.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Exceed för Stora Porer',
        image_title: 'Exceed för Stora Porer',
        consultation_url: 'konsultation-stora-porer',
        consultation_url_label: 'Boka konsultation för behandling av stora porer',
        consultation_url_title: 'Boka konsultation för behandling av stora porer',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Exceed för stora porer',
        booking_url_title: 'Boka Exceed för stora porer',
    ),

    new Service(
        title: 'Exceed för Pigmentfläckar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Exceed-behandling för pigmentfläckar optimerar hudens naturliga förnyelsecykel och stödjer nedbrytningen av pigmentkoncentrationer, vilket resulterar i en jämnare hudton och ljusare pigmentfläckar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Exceed för Pigmentfläckar',
        image_title: 'Exceed för Pigmentfläckar',
        consultation_url: 'konsultation-pigmentflackar',
        consultation_url_label: 'Boka konsultation för behandling av pigmentfläckar',
        consultation_url_title: 'Boka konsultation för behandling av pigmentfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Exceed för pigmentfläckar',
        booking_url_title: 'Boka Exceed för pigmentfläckar',
    ),

    new Service(
        title: 'Exceed för Bristningar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Exceed-behandling mot bristningar vitaliserar hudens egen reparationsförmåga och kollagen- samt elastinproduktion, vilket effektivt kan minska synligheten av bristningar och förbättra hudens textur och elasticitet.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Exceed för Bristningar',
        image_title: 'Exceed för Bristningar',
        consultation_url: 'konsultation-bristningar',
        consultation_url_label: 'Boka konsultation för behandling av bristningar',
        consultation_url_title: 'Boka konsultation för behandling av bristningar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Exceed för bristningar',
        booking_url_title: 'Boka Exceed för bristningar',
    ),

);

$treatment_areas_title = 'Områden som förbättras med Exceed';
$treatment_areas_text = '<p class="p200">Exceed erbjuder anpassningsbar behandling för diverse områden inklusive ansiktet, nacken, dekolletaget och andra kroppsdelar. Denna teknik är expert på att förbättra hudens textur och ge en ökad lyster genom att aktivera kollagenproduktionen och stödja naturliga läkningsprocesser, skräddarsydd för varje specifikt hudområde.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Exceed förfinar och revitaliserar ansiktshuden och kan appliceras över hela ansiktet eller riktas mot specifika områden efter behov.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för näsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Kinder',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för kindbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för överläppsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '30 min',
                price: '1295 kr',
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
        description: '<p class="p200">Exceed är flexibel och kan skräddarsys för att behandla många olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Exceed kan effektivt rikta in sig på flera behandlingsområden samtidigt.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x områdes',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '70 min',
                price: '3595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård Exceed behandling',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård Exceed behandling',
    image_title: 'Eftervård Exceed behandling',
    content: '<p class="p200">Eftervården är avgörande för att säkerställa bästa möjliga resultat från din Exceed-behandling. En lätt rodnad och svullnad är vanliga reaktioner efter behandlingen, och det är kritiskt att du håller det behandlade området rent och undviker att applicera smink under de första 24 timmarna för att minimera risken för infektion och irritation.</p>
    <p class="p200 mt-m">Det är även rekommenderat att du avstår från aktiviteter som intensiv fysisk träning, besök i bastu, och varma duschar de första dagarna efter behandlingen, eftersom detta kan öka svullnad och irritation. Användning av hög SPF-solskydd är essentiellt för att skydda den känsliga huden mot solens strålar post-behandling.</p>
    <p class="p200 mt-m">Följ noga de eftervårdsinstruktioner som din hudterapeut ger dig, och tveka inte att kontakta din klinik om du har några frågor eller funderingar angående återhämtningen. Beroende på din huds respons på behandlingen kan ytterligare uppföljningar och sessioner rekommenderas för att nå dina hudvårds mål.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Andra märken för microneedling';
$service_brands_text = '<p class="p200">Utöver exceed utför vi även microneeding med Dermapen.</p>';
$service_brands = array(

    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen'
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
                title: 'Hur ofta bör jag genomgå Exceed microneedling?',
                text: 'Antalet Exceed microneedling sessioner som rekommenderas varierar baserat på individens hudtillstånd och de mål man vill uppnå. Generellt sett kan man förvänta sig att behöva mellan 3 och 8 behandlingar, med 4 till 6 veckors mellanrum, för att nå önskvärt resultat. En skräddarsydd behandlingsplan kommer att utarbetas under din initiala konsultation.'
            ),
            new Question(
                title: 'Finns det risk för att mina hudproblem kommer tillbaka efter Exceed-behandling?',
                text: 'Medan Exceed-behandling kan ge betydande förbättringar i hudens tillstånd, kan den inte garantera att nya hudproblem inte uppstår i framtiden. Det är viktigt med en kontinuerlig hudvårdsrutin och möjligtvis ytterligare uppföljningsbehandlingar för att bibehålla och skydda resultaten på lång sikt.'
            ),
            new Question(
                title: 'Hur snabbt kan jag se resultat efter en Exceed-behandling?',
                text: 'Resultaten från Exceed-behandling kan variera från person till person. En del kan se förbättringar redan inom några dagar, medan andra kanske behöver vänta flera veckor för att se full effekt. Huden kan fortsätta att förbättras och kollagenproduktionen kan öka under flera månader efter behandlingen.'
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
        label: 'Exceed4',
        image: 'images/brands/Exceed4.svg',
        image_alt: 'Exceed4',
        image_title: 'Exceed4',
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