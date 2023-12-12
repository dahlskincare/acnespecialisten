<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Frysbehandling - Effektiv hudkorrigering | Acnespecialisten';
$seo_description = 'Utforska AcneSpecialistens expertfrysbehandlingar för att selektivt och effektivt ta bort hudförändringar. Dra nytta av behandlingar som använder sig av kryoterapi för att noggrant avlägsna oönskade hudlesioner och främja en slätare hudstruktur.';
$seo_keywords = 'frysbehandling, hudkorrigering, avlägsna vårtor, behandla hudutväxter, reducera pigmentfläckar, kryoterapi, hudläkning, förbättra hudstruktur, estetisk dermatologi, hudvård';

$seo_image = 'images/treatments/large/frysbehandling.jpg';


$model = new Service(
    title: 'Frysbehandling',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Vi är ledande på frysbehandlingar mot hudförändinrgar i Sverige. Denna metod är ett utmärkt alternativ för dig som vill avlägsna hudförändringar och återställa huden till en mer jämn och estetiskt tilltalande struktur. Våra behandlingsprotokoll är noggrant anpassade för att möta olika hudproblem och är utformade för att erbjuda en säker och icke-invasiv väg till förbättrad hudkvalitet.</p>',
    image_small: 'bilder/behandlingar/358x274/frysbehandling.webp',
    image_large: 'bilder/behandlingar/424x456/frysbehandling.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://bokadirekt.se',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://bokadirekt.se',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Fryser effektivt bort hudförändringar utan att skada omkringliggande hud.';

$nav_buttons = array(
    'about' => 'Om frysbehandlingar',
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

$description_title = 'Frysbehandling - vad är det?';
$description_text = '<p class="p200">Frysbehandling, även känd som kryoterapi, är en icke-invasiv metod som använder extrem kyla för att selektivt behandla och avlägsna hudförändringar såsom vårtor, skintags och vissa typer av pigmentfläckar. Behandlingen innebär att vi applicerar kyla direkt på den oönskade hudlesionen, vilket får cellerna att frysa och i slutändan falla av.</p>
    <p class="p200 mt-m">Denna precisionsbehandling är snabb och effektiv, och eftersom den är så riktad kan den minska risken för skador på omgivande vävnader. Frysbehandling är känt för sin snabba och smidiga process och efterlämnar oftast minimala ärr. Det är en säker behandlingsmetod för en mängd hudproblem och kräver oftast ingen lång återhämtningsperiod. Genom att stimulera en naturlig läkningsprocess hjälper det också till att främja en slätare och jämnare hudstruktur efter behandling.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Inför frysbehandling',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Inför frysbehandling',
        image_title: 'Inför frysbehandling',
        content: '<p class="p200">Frysbehandling börjar alltid med en kostnadsfri konsultation där du möter en av våra kvalificerade hudterapeuter. Under denna första konsultation kommer specialisten att noga undersöka dina hudförändringar för att fastställa den mest effektiva behandlingsplanen. Detta är ett viktigt steg för att säkerställa att behandlingen är anpassad efter just dina behov och för att identifiera det mest lämpliga tillvägagångssättet.</p>
        <p class="p200 mt-m">Vi rekommenderar att du inte behandlar eller irriterar området som ska behandlas innan din besök. Det är även bäst att undvika att utsätta huden för solen eller stark kyla innan behandlingen. Vid din konsultation kommer du att få detaljerad information om hur du kan förbereda dig inför behandlingen för att säkerställa bästa möjliga resultat. I många fall kan vi påbörja behandlingen redan vid ditt första besök, förutsatt att din hud är i rätt skick och att inga ytterligare förberedelser krävs.</p>',
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
        title: 'Hur går en frysbehandling till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går en frysbehandling till?',
        image_title: 'Hur går en frysbehandling till?',
        content: '<p class="p200">Frysbehandling, även känd som kryoterapi, är en icke-invasiv metod som använder extrem kyla för att frysa och ta bort oönskade hudförändringar, såsom vårtor och vissa typer av hudfläckar. När du anländer till kliniken för din frysbehandling, börjar vi med att noggrant rengöra huden på och runt området som ska behandlas för att säkerställa en steril miljö.</p>
        <p class="p200 mt-m">Vår erfarna hudterapeut kommer sedan att använda en specifik enhet som riktar en kontrollerad ström av kylmedel direkt på hudförändringen. Denna process är snabb och fokuserad, och kan kännas som en brännande eller stickande känsla, men är övergående. Behandlingen är designad för att omedelbart frysa och förstöra det specifika vävnadsområdet utan att skada omkringliggande hud.</p>
        <p class="p200 mt-m">Efter behandlingen kan det behandlade området bli rött och svullet, och i vissa fall kan en blåsa bildas. Dessa är vanliga reaktioner och en del av läkningsprocessen. Din hudterapeut kommer att ge dig noggranna eftervårdsinstruktioner för att hantera området post-behandling och främja snabb läkning. Över tid kommer den frysta vävnaden att torka ut och naturligt falla av, vilket lämnar frisk hud bakom sig.</p>',
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

$types_title = 'Hudförändringar som behandlas med frysbehandling';
$types_description = 'Frysbehandling, eller kryoterapi, är en väl beprövad metod för att effektivt hantera olika hudförändringar. Genom att tillämpa extrem kyla på specifika områden kan denna behandling målmedvetet frysa och eliminera oönskade hudförändringar.';
$types = array(
    new Service(
        title: 'Frysbehandling mot ansiktsvårtor',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har ansiktsvårtor.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling för ansiktsvårtor',
        image_title: 'Frysbehandling för ansiktsvårtor',
        consultation_url: 'konsultation-ansiktsvartor',
        consultation_url_label: 'Boka konsultation för behandling av ansiktsvårtor',
        consultation_url_title: 'Boka konsultation för behandling av ansiktsvårtor',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för ansiktsvårtor',
        booking_url_title: 'Boka frysbehandling för ansiktsvårtor',
    ),
    new Service(
        title: 'Frysbehandling av fibrom',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har fibrom.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling för fibrom',
        image_title: 'Frysbehandling för fibrom',
        consultation_url: 'konsultation-fibrom',
        consultation_url_label: 'Boka konsultation för behandling av fibrom',
        consultation_url_title: 'Boka konsultation för behandling av fibrom',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för fibrom',
        booking_url_title: 'Boka frysbehandling för fibrom',
    ),
    new Service(
        title: 'Frysbehandling av födelsemärken',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har födelsemärken.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling för födelsemärken',
        image_title: 'Frysbehandling för födelsemärken',
        consultation_url: 'konsultation-fodelsemarken',
        consultation_url_label: 'Boka konsultation för behandling av födelsemärken',
        consultation_url_title: 'Boka konsultation för behandling av födelsemärken',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för födelsemärken',
        booking_url_title: 'Boka frysbehandling för födelsemärken',
    ),
    new Service(
        title: 'Frysbehandling av Hallonmärke - Jordgubbsmärke - Smultronmärke',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har hallonmärken, jordgubbsmärken eller smultromärken.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling av kärlförändringar',
        image_title: 'Frysbehandling av kärlförändringar',
        consultation_url: 'konsultation-karlforandringar',
        consultation_url_label: 'Boka konsultation för kärlförändringar',
        consultation_url_title: 'Boka konsultation för kärlförändringar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för kärlförändringar',
        booking_url_title: 'Boka frysbehandling för kärlförändringar',
    ),
    new Service(
        title: 'Frysbehandling av hemangiom',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har hemangiom.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling för hemangiom',
        image_title: 'Frysbehandling för hemangiom',
        consultation_url: 'konsultation-hemangiom',
        consultation_url_label: 'Boka konsultation för hemangiom',
        consultation_url_title: 'Boka konsultation för hemangiom',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för hemangiom',
        booking_url_title: 'Boka frysbehandling för hemangiom',
    ),

    new Service(
        title: 'Frysbehandling av hudflikar',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har hudflikar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling för hudflikar',
        image_title: 'Frysbehandling för hudflikar',
        consultation_url: 'konsultation-hudflikar',
        consultation_url_label: 'Boka konsultation för behandling av hudflikar',
        consultation_url_title: 'Boka konsultation för behandling av hudflikar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för hudflikar',
        booking_url_title: 'Boka frysbehandling för hudflikar',
    ),
    new Service(
        title: 'Frysbehandling av hudutväxter',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har hudutväxter.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling för hudutväxter',
        image_title: 'Frysbehandling för hudutväxter',
        consultation_url: 'konsultation-hudutvaxter',
        consultation_url_label: 'Boka konsultation för hudutväxter',
        consultation_url_title: 'Boka konsultation för hudutväxter',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för hudutväxter',
        booking_url_title: 'Boka frysbehandling för hudutväxter',
    ),
    new Service(
        title: 'Frysbehandling för leverfläckar',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har leverfläckar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling av leverfläckar',
        image_title: 'Frysbehandling av leverfläckar',
        consultation_url: 'konsultation-leverflackar',
        consultation_url_label: 'Boka konsultation för leverfläckar',
        consultation_url_title: 'Boka konsultation för leverfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för leverfläckar',
        booking_url_title: 'Boka frysbehandling för leverfläckar',
    ),
    new Service(
        title: 'Frysbehandling för mole',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har mole.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling för mole',
        image_title: 'Frysbehandling för mole',
        consultation_url: 'konsultation-mole',
        consultation_url_label: 'Boka konsultation för mole',
        consultation_url_title: 'Boka konsultation för mole',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för mole',
        booking_url_title: 'Boka frysbehandling för mole',
    ),
    new Service(
        title: 'Frysbehandling för seborroisk keratos',
        duration: '15 minuter',
        price: '895 kr',
        content: 'För dig som har seborroisk keratos.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling av seborroisk keratos',
        image_title: 'Frysbehandling av seborroisk keratos',
        consultation_url: 'konsultation-seborroisk-keratos',
        consultation_url_label: 'Boka konsultation för seborroisk keratos',
        consultation_url_title: 'Boka konsultation för seborroisk keratos',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för seborroisk keratos',
        booking_url_title: 'Boka frysbehandling för seborroisk keratos',
    ),
    new Service(
        title: 'Frysbehandling för skintags',
        duration: '15 minuter',
        price: '895 kr',
        content: 'För dig som har skintags.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling av hudflikar',
        image_title: 'Frysbehandling av hudflikar',
        consultation_url: 'konsultation-hudflikar',
        consultation_url_label: 'Boka konsultation för hudflikar',
        consultation_url_title: 'Boka konsultation för hudflikar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för hudflikar',
        booking_url_title: 'Boka frysbehandling för hudflikar',
    ),
    new Service(
        title: 'Frysbehandling för skönhetsfläckar',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har skönhetsfläckar.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling av skönhetsfläckar',
        image_title: 'Frysbehandling av skönhetsfläckar',
        consultation_url: 'konsultation-skonhetsflackar',
        consultation_url_label: 'Boka konsultation för skönhetsfläckar',
        consultation_url_title: 'Boka konsultation för skönhetsfläckar',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för skönhetsfläckar',
        booking_url_title: 'Boka frysbehandling för skönhetsfläckar',
    ),
    new Service(
        title: 'Frysbehandling för åldersvårtor',
        duration: '20 minuter',
        price: '995 kr',
        content: 'För dig som har åldersvårtor.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Frysbehandling av åldersvårtor',
        image_title: 'Frysbehandling av åldersvårtor',
        consultation_url: 'konsultation-aldersvartor',
        consultation_url_label: 'Boka konsultation för åldersvårtor',
        consultation_url_title: 'Boka konsultation för åldersvårtor',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka frysbehandling för åldersvårtor',
        booking_url_title: 'Boka frysbehandling för åldersvårtor',
    ),
);

$treatment_areas_title = 'Behandlingsområden för Frysbehandling';
$treatment_areas_text = '<p class="p200">Frysbehandlingen är en flexibel procedur som kan anpassas för att effektivt ta bort hudförändringar. Behandlingen kan utföras på flera olika områden, inklusive ansikte, hals, axlar och rygg, och är skräddarsydd efter antalet hudförändringar samt deras storlek och placering för bästa möjliga resultat.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Antal hudförändringar',
        image_title: 'Antal hudförändringar',
        title: 'Antal hudförändringar',
        description: '<p class="p200">Behandlingen utgår ifrån antalet hudförändringar du vill behandla..</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '1 st',
                image_title: '1 st',
                title: '1 st',
                duration: '20 min',
                price: '995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid förfrysbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '2 - 3 st',
                image_title: '2 - 3 st',
                title: '2 - 3 st',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid förfrysbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '4 - 6 st',
                image_title: '4 - 6 st',
                title: '4 - 6 st',
                duration: '20 min',
                price: '1995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid förfrysbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '7 - 10 st',
                image_title: '7 - 10 st',
                title: '7 - 10 st',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid förfrysbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '20 st',
                image_title: '20 st',
                title: '20 st',
                duration: '30 min',
                price: '4995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid förfrysbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '50 st',
                image_title: '50 st',
                title: '50 st',
                duration: '70 min',
                price: '9995 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid förfrysbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Återbesök',
                image_title: 'Återbesök',
                title: 'Återbesökt',
                duration: '20 min',
                price: 'Från 250 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid förfrysbehandling'
            ),

        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Efter frysbehandling',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Efter frysbehandling',
    image_title: 'Efter frysbehandlingg',
    content: '<p class="p200">Eftervården är en viktig del av processen när du genomgått en frysbehandling för att ta bort hudförändringar. Direkt efter ingreppet kan det drabbade området visa tecken på irritation såsom rodnad eller svullnad. Det är viktigt att du undviker att röra vid området med orena händer och undviker att lägga på makeup under de första 24 timmarna efter behandlingen för att minska risken för infektion och irritation.</p>
    <p class="p200 mt-m">Under dagarna som följer behandlingen är det bäst att undvika aktiviteter som kan förvärra svullnaden eller irritationen, som till exempel intensiv träning, bastubad och långa, heta duschar. Även om det behandlade området inte är i direkt solljus, är det viktigt att fortsätta använda solskydd för att skydda huden från UV-strålning och främja läkningen.</p>
    <p class="p200 mt-m">Följ de eftervårdsinstruktioner du får från din hudterapeut noga. Om du har några frågor eller känner oro kring ditt tillstånd efter behandlingen, tveka inte att kontakta kliniken. Beroende på hur din hud reagerar kan ytterligare uppföljning eller behandlingar rekommenderas för att uppnå bästa möjliga resultat.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Märken för frysbehandling';
$service_brands_text = '<p class="p200">Vi utför frysbehandling med CryoPen vilket är de modernaste och mest effektiva metoden av sitt slag.</p>';
$service_brands = array(

    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
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
            title: 'Hur lång tid tar det att läka efter en frysbehandling?',
            text: 'Läkningstiden efter en frysbehandling varierar från person till person och beroende på omfattningen av behandlingen. Mindre hudförändringar kan läka inom några dagar, medan större eller flera behandlade områden kan ta några veckor. Svullnad och rodnad är normalt och bör avta inom de första dagarna.'
        ),
        new Question(
            title: 'Kan hudförändringar återkomma efter frysbehandling?',
            text: 'Frysbehandling syftar till att permanent ta bort specifika hudförändringar. Det är dock möjligt att nya hudförändringar kan uppkomma på andra ställen på kroppen. Att följa en god hudvårdsrutin och skydda huden mot solen kan bidra till att minimera risken för nya hudproblem.'
        ),
        new Question(
            title: 'Vad bör jag undvika efter en frysbehandling?',
            text: 'Efter en frysbehandling bör du undvika att röra vid det behandlade området med smutsiga händer, och undvika att utsätta huden för direkt solljus utan solskydd. Det är också rekommenderat att undvika smink på det behandlade området, intensiv träning, bastu, och långa heta duschar under de första 24-48 timmarna för att ge huden bästa möjliga förutsättningar att läka.'
        ),
        new Question(
            title: 'Hur många återbesök kan krävas efter en frysbehandling?',
            text: 'Efter en frysbehandling kan antalet nödvändiga återbesök variera beroende på den enskilda patientens respons på behandlingen. I allmänhet kan man förvänta sig att 1-3 återbesök är tillräckliga för att fullfölja behandlingen av mindre hudförändringar. Detta förutsätter att hudförändringarna är relativt små och att huden läker som förväntat. För större eller mer motståndskraftiga hudförändringar, eller när det finns många hudförändringar att behandla, kan det vara nödvändigt med ytterligare sessioner.'
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