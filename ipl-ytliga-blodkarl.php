<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL-behandling mot Ytliga Blodkärl | AcneSpecialisten';
$seo_description = 'AcneSpecialisten specialiserar sig på IPL-teknik för att effektivt behandla ytliga blodkärl. Vår precision med målinriktat ljus gör det möjligt att minskar synligheten av blodkärl och förbättrar hudtonen, vilket ger en klarare och mer enhetlig hudbild.';
$seo_keywords = 'IPL-behandling ytliga blodkärl, minska synligheten av blodkärl, ljusbaserad hudvård, förbättra hudton, behandling av blodkärl, avancerad hudvårdsteknik, AcneSpecialisten hudexperter, jämnare hudbild';

$seo_image = 'images/treatments/large/ipl-blood-vessels.jpg';


$model = new Service(
    title: 'IPL mot ytliga blodkärl',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Med vår IPL-behandling kan du effektivt minska synligheten av ytliga blodkärl och uppnå en jämnare hudton. Denna ljusbaserade terapi är skonsam men kraftfull och riktar in sig specifikt på blodkärlen, vilket gör den särskilt lämplig för behandling av rosacea och relaterade hudtillstånd. Genom att skräddarsy varje session efter dina unika hudbehov, ser vi till att ge din hud den vård och uppmärksamhet den förtjänar för optimala resultat.</p>',
    image_small: 'bilder/behandlingar/358x274/ipl.webp',
    image_large: 'bilder/behandlingar/424x456/ipl.webp',
    image_alt: 'IPL mot ytliga blodkärl',
    image_title: 'IPL mot ytliga blodkärl',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Effektiv ljusbehandling som eliminerar ytliga blodkärl.';

$nav_buttons = array(
    'about' => 'Om IPL mot ytliga blodkärl',
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

$description_title = 'Vad är IPL-behandling mot Ytliga Blodkärl?';
$description_text = '<p class="p200">IPL, som betyder Intensivt Pulserande Ljus, är en framstående och icke-invasiv metod för att effektivt behandla ytliga blodkärl. Denna avancerade ljusbaserade teknologi avger specifika ljuspulser som målmedvetet tränger igenom huden för att minska synligheten av blodkärlen. IPL-behandling riktar sig direkt mot de blodkärl som orsakar ojämn hudton och synliga kärl på hudytan.</p>
    <p class="p200 mt-m">Genom att specifikt behandla dessa blodkärl, bidrar IPL inte bara till en mer jämn hudton, utan förbättrar också hudens övergripande utseende och kvalitet. Varje behandling är individuellt anpassad för att uppnå bästa möjliga resultat baserat på patientens unika hudbehov. IPL-behandling för ytliga blodkärl är känd för att vara både skonsam och effektiv, med minimal risk för biverkningar. Många patienter ser märkbara förbättringar efter endast några sessioner, vilket gör detta till en uppskattad behandlingsmetod för dem som önskar reducera synligheten av ytliga blodkärl.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför behandling med IPL mot Ytliga Blodkärl',
        image_small: null,
        image_large: null,
        image_alt: 'Förberedelser inför behandling med IPL mot Ytliga Blodkärl',
        image_title: 'Förberedelser inför behandling med IPL mot Ytliga Blodkärl',
        content: '<p class="p200">Att förbereda sig inför en IPL-behandling för ytliga blodkärl innebär att följa vissa steg för att maximera behandlingens effektivitet och säkerhet. Det börjar med en detaljerad konsultation med en erfaren hudterapeut som utvärderar din hudtyp och de områden där ytliga blodkärl är framträdande. Under denna konsultation skapas en behandlingsplan anpassad efter dina unika behov.</p>
        <p class="p200 mt-m">Inför din IPL-behandling är det viktigt att undvika sol och självbrunande produkter minst två veckor i förväg. Detta för att minska risken för oönskad pigmentering eftersom behandlingen riktar sig mot pigment och blodkärl i huden. Du bör också undvika produkter som innehåller retinol, starka syror eller exfolierande ämnen dagarna före din behandling för att undvika överkänslighet eller irritation. Din hudterapeut kommer att ge dig noggranna instruktioner om hur du förbereder dig inför behandlingen och viktiga steg för eftervården för att främja en lyckad läkningsprocess.</p>',
    ),
    'process' => new Article(
        title: 'Hur går en IPL mot Ytliga Blodkärl till?',
        image_small: null,
        image_large: null,
        image_alt: 'Hur går en IPL mot Ytliga Blodkärl till?',
        image_title: 'Hur går en IPL mot Ytliga Blodkärl till',
        content: '<p class="p200">IPL-behandling mot ytliga blodkärl är en avancerad procedur som använder Intensivt Pulserande Ljus för att effektivt minska synligheten av dessa blodkärl. När du anländer till kliniken, kommer vi först att rengöra din hud noggrant för att avlägsna makeup och orenheter. Dina ögon kommer också att skyddas med speciella skyddsglasögon för att säkerställa att de inte exponeras för det intensiva ljuset.</p>
        <p class="p200 mt-m">Vi anpassar vår IPL-enhet för att justera ljuspulsens intensitet och våglängd till ditt hudtillstånd. Under behandlingen appliceras korta och intensiva ljuspulser direkt på de hudområden där ytliga blodkärl är synliga. Ljuset absorberas av blodkärlen, vilket minskar deras synlighet och förbättrar hudens utseende utan att skada omkringliggande vävnad.</p>
        <p class="p200 mt-m">Efter behandlingen kan det behandlade området kännas varmt och se något rött ut, liknande en mild solbränna. Dessa symtom är vanligtvis temporära och avtar inom några timmar till dagar. Resultaten av IPL-behandlingen mot ytliga blodkärl blir ofta märkbara över tid, med en gradvis minskning av synligheten av blodkärlen och en förbättring av hudens allmänna skick. Din hudterapeut kommer att ge dig råd om eftervård och kan rekommendera uppföljningsbehandlingar för att bibehålla och förstärka effekterna av din IPL-behandling.</p>',
    ),
);

$treatment_areas_title = 'Behandlingsområden för IPL mot ytliga blodkärl';
$treatment_areas_text = '<p class="p200">Med IPL behandlar vi ytliga blodkärl i ansiktet.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">IPL kan utföras i hela ansiktet eller på utvalda zoner.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'IPL för Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'IPL för Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'IPL för Kinder',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av kinderna',
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: '1 st Ytligt blodkärl',
                image_title: '1 st Ytligt blodkärl',
                title: 'IPL för 1 st Ytligt blodkärl',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_1x_spot_yb',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL-behandling av 1 st Ytligt blodkärl',
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för IPL mot ytliga blodkärl',
    image_small: null,
    image_large: null,
    image_alt: 'Eftervård för IPL-behandling mot ytliga blodkärl',
    image_title: 'Eftervård för IPL mot ytliga blodkärl',
    content: '<p class="p200">Eftervården är en central del av återhämtningsprocessen efter en IPL-behandling mot ytliga blodkärl. Efter behandlingen kan det förekomma en viss rodnad och ibland en mild svullnad i de behandlade områdena. Dessa reaktioner är vanliga och bör avta relativt snabbt. Det är viktigt för att undvika irritation och infektion att inte röra det behandlade området med smutsiga händer och att undvika att applicera makeup eller parfymerade produkter under de första 24 timmarna efter behandlingen.</p>
    <p class="p200 mt-m">Under de första dagarna efter din IPL-behandling är det rekommenderat att du avstår från intensiv fysisk aktivitet, bastubad och långa varma duschar, eftersom dessa kan öka svullnad och irritation. Det är också viktigt att skydda huden mot solen. Använd solskyddskräm med hög SPF regelbundet, särskilt på de behandlade områdena, för att förhindra ytterligare solskador och främja läkning. Använd gärna milda, återfuktande hudvårdsprodukter som inte innehåller irriterande ämnen för att lugna huden och bibehålla dess fuktbalans.</p>
    <p class="p200 mt-m">Följ noggrant de eftervårdsinstruktioner du får från din hudterapeut. Om du har några frågor eller bekymmer om din återhämtning efter behandlingen, tveka inte att kontakta din klinik. Ytterligare uppföljningsbehandlingar kan rekommenderas för att bibehålla och förbättra resultaten av din IPL-behandling mot ytliga blodkärl.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$treatment_steps = array(
    new TreatmentStep(
        title: 'Identifiera',
        content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rosacea och skapar en individuell behandlingsplan.',
        url_label: 'Få gratis konsultation',
        url: 'gratis-hudkonsultation',
        url_title: 'Boka din kostnadsfria hudkonsultation idag'
    ),
    new TreatmentStep(
        title: 'Behandla',
        content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika rosacea, så att du snabbt och säkert blir av med problemet.',
        url_label: 'Se behandlingar',
        url: 'behandlingar/rosacea',
        url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
    ),
    new TreatmentStep(
        title: 'Förebygga',
        content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny rosacea och hålla din hud i balans.',
        url_label: 'Se produkter',
        url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
        url_title: 'Hitta de bästa produkterna för att förebygga rosacea'
    ),
    new TreatmentStep(
        title: 'Reparera',
        content: 'När rosacean är borta fokuserar vi på att reducera eventuella ytliga blodkärl med behandlingsmetoder som IPL för en jämn och problemfri hud.',
        url_label: 'Se IPL-behandlingar',
        url: 'behandlingar/rosacea',
        url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
    ),

);

$service_brands_title = 'Märken för IPL';
$service_brands_text = '<p class="p200">Vi utför IPL mot ytliga blodkärl med Alma Rejuve DyeVL, Alma Harmony XL, Photonova som är de bästa maskinerna på marknaden.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Rejuve DyeVL',
        image: 'images/brands/alma-rejuve-dyevl.svg',
        image_alt: 'Alma Rejuve DyeVL',
        image_title: 'Alma Rejuve DyeVL',
    ),
    new Brand(
        label: 'Alma Harmony XL Pro',
        image: 'images/brands/alma-harmony-xl-pro.svg',
        image_alt: 'Alma Harmony XL Pro',
        image_title: 'Alma Harmony XL Pro',
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
            duration: 'Efter 3 månaders behandling av <a href="/problem/akne/aknebehandling" title="akne">akne</a>',
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
            duration: 'Efter 2 månaders behandling av <a href="/problem/akne/aknebehandling" title="akne">akne</a>',
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
            duration: 'Efter 4 månaders behandling av <a href="/problem/rosacea/rosaceabehandling" title="akne">akne</a>',
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
            title: 'Hur många behandlingar med IPL krävs för att behandla ytliga blodkärl?',
            text: 'Antalet IPL-behandlingar som krävs för att effektivt minska ytliga blodkärl varierar beroende på individens hudtillstånd och omfattningen av blodkärlen. Vanligtvis kan det krävas mellan 3-8 behandlingar, med intervaller på cirka 4 veckor, för att uppnå märkbar förbättring. Din hudterapeut kommer att skapa en anpassad behandlingsplan baserad på en initial konsultation.'
        ),
        new Question(
            title: 'Kan ytliga blodkärl återkomma efter en IPL-behandling?',
            text: 'IPL-behandling kan effektivt minska synligheten av ytliga blodkärl, men det är viktigt att komma ihåg att vissa livsstilsfaktorer, som sol exponering och genetiska förutsättningar, kan påverka deras återkomst. Regelbundna uppföljningsbehandlingar och adekvat hudvård kan behövas för att bibehålla resultaten över tid.'
        ),
        new Question(
            title: 'När börjar jag se resultat efter IPL-behandling mot ytliga blodkärl?',
            text: 'De första resultaten av IPL-behandling mot ytliga blodkärl kan ofta ses inom några dagar till en vecka efter behandlingen, med fortsatt förbättring efter varje session. Många patienter rapporterar en gradvis minskning av synligheten av blodkärl efter varje behandling. Fullständiga och långsiktiga resultat kan dock variera beroende på individens hudtillstånd och antal genomförda behandlingar.'
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
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'images/brands/infuzion.svg',
        image_alt: 'Infuzion',
        image_title: 'Infuzion',
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
                    <h1 class="h600">
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
                                include('behandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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
                <section id="approach">
                    <h2 class="h500 l10n">Metoden</h2>
                    <hr class="mt-xl mb-xl3 is-hidden-mobile">
                    <div class="columns is-variable is-2">
                        <?php for ($i = 0; $i < sizeof($treatment_steps); $i++) {
                            echo '<div class="column">';
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/treatment_step_card/treatment_step_card.php');
                            echo '</div>';
                        } ?>
                    </div>
                </section>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor"><?php echo $faq_view_more ?></a>
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