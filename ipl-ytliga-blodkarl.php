<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'IPL behandling - Ta bort ytliga blodkärl i ansiktet';
$seo_description = 'Bli av med ytliga blodkärl. Läs mer om vår IPL-behandling och boka en gratis konsultation hos AcneSpecialisten →';
$seo_keywords = 'ipl behandling, ipl ansikte, ipl laser ansikte, ipl behandling ytliga blodkärl, laser blodkärl ansikte, ipl behandling ansikte, ipl näsa, ta bort blodkärl i ansiktet, behandling av ytliga blodkärl i ansiktet, ytliga blodkärl i ansiktet laser';

$seo_image = 'images/treatments/large/ipl.webp';

$path_segments = array(
    new PathSegment('Hudbehandlingar', '/hudbehandlingar/'),
    new PathSegment('IPL mot ytliga blodkärl', '/ipl-ytliga-blodkarl.php'),
);


$model = new Service(
    title: 'IPL mot ytliga blodkärl',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">Med vår IPL behandling kan du effektivt minska synligheten av ytliga blodkärl och uppnå en jämnare hudton. Denna ljusbaserade terapi är skonsam men kraftfull och riktar in sig specifikt på blodkärlen, vilket gör den särskilt lämplig för behandling av rosacea och relaterade hudtillstånd. Genom att skräddarsy varje session efter dina unika hudbehov, ser vi till att ge din hud den vård och uppmärksamhet den förtjänar för optimala resultat.</p>',
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

$description_title = 'Vad är IPL behandling mot ytliga blodkärl?';
$description_text = '<p class="p200">IPL, som betyder Intensivt Pulserande Ljus, är en framstående och icke-invasiv metod för att effektivt behandla ytliga blodkärl. Denna avancerade ljusbaserade teknologi avger specifika ljuspulser som målmedvetet tränger igenom huden för att minska synligheten av blodkärlen. IPL behandling riktar sig direkt mot de blodkärl som orsakar ojämn hudton och synliga kärl på hudytan. IPL liknar laser behandling och kaneffektivt utföras i ansiktet för att ta bort ytliga blodkärl.</p>
    <p class="p200 mt-m">Genom att specifikt behandla dessa blodkärl, bidrar IPL inte bara till en mer jämn hudton, utan förbättrar också hudens övergripande utseende och kvalitet. Varje behandling är individuellt anpassad för att uppnå bästa möjliga resultat baserat på patientens unika hudbehov. IPL behandling är känd för att vara både skonsam och effektiv, med minimal risk för biverkningar. Många patienter ser märkbara förbättringar efter endast några sessioner, vilket gör detta till en uppskattad behandlingsmetod för dem som önskar reducera synligheten av ytliga blodkärl.</p>';

$treatment_steps = array(
    new TreatmentStep(
        title: 'Identifiera',
        content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rosacea och skapar en individuell behandlingsplan.',
        url_label: 'Boka gratis konsultation',
        url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
        url_title: 'Boka din kostnadsfria hudkonsultation idag'
    ),
    new TreatmentStep(
        title: 'Behandla',
        content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika rosacea, så att du snabbt och säkert blir av med problemet.',
        url_label: 'Se behandlingar',
        url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels',
        url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
    ),
);

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför behandlingen',
        image_small: null,
        image_large: null,
        image_alt: 'Förberedelser inför behandling med IPL mot Ytliga Blodkärl',
        image_title: 'Förberedelser inför behandling med IPL mot Ytliga Blodkärl',
        content: '<p class="p200">Att förbereda sig inför en IPL behandling för ytliga blodkärl innebär att följa vissa steg för att maximera behandlingens effektivitet och säkerhet. Det börjar med en detaljerad konsultation med en erfaren hudterapeut som utvärderar din hudtyp och de områden där ytliga blodkärl är framträdande. Under denna konsultation skapas en behandlingsplan anpassad efter dina unika behov.</p>
        <p class="p200 mt-m">Inför din IPL behandling är det viktigt att undvika sol och självbrunande produkter minst två veckor i förväg. Detta för att minska risken för oönskad pigmentering eftersom behandlingen riktar sig mot pigment och blodkärl i huden. Du bör också undvika produkter som innehåller retinol, starka syror eller exfolierande ämnen dagarna före din behandling för att undvika överkänslighet eller irritation. Din hudterapeut kommer att ge dig noggranna instruktioner om hur du förbereder dig inför behandlingen och viktiga steg för eftervården för att främja en lyckad läkningsprocess.</p>',
    ),
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: null,
        image_large: null,
        image_alt: 'Hur går en IPL mot Ytliga Blodkärl till?',
        image_title: 'Hur går en IPL mot Ytliga Blodkärl till',
        content: '<p class="p200">IPL-behandling mot ytliga blodkärl är en avancerad procedur som använder Intensivt Pulserande Ljus för att effektivt minska synligheten av dessa blodkärl. När du anländer till kliniken, kommer vi först att rengöra din hud noggrant för att avlägsna makeup och orenheter. Dina ögon kommer också att skyddas med speciella skyddsglasögon för att säkerställa att de inte exponeras för det intensiva ljuset.</p>
        <p class="p200 mt-m">Vi anpassar vår IPL enhet för att justera ljuspulsens intensitet och våglängd till ditt hudtillstånd. Under behandlingen appliceras korta och intensiva ljuspulser direkt på de hudområden där ytliga blodkärl är synliga. Ljuset absorberas av blodkärlen, vilket minskar deras synlighet och förbättrar hudens utseende utan att skada omkringliggande vävnad.</p>
        <p class="p200 mt-m">Efter behandlingen kan det behandlade området kännas varmt och se något rött ut, liknande en mild solbränna. Dessa symtom är vanligtvis temporära och avtar inom några timmar till dagar. Resultaten av IPL behandlingen mot ytliga blodkärl blir ofta märkbara över tid, med en gradvis minskning av synligheten av blodkärlen och en förbättring av hudens allmänna skick. Din hudterapeut kommer att ge dig råd om eftervård och kan rekommendera uppföljningsbehandlingar för att bibehålla och förstärka effekterna av din IPL behandling.</p>',
    ),
);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">Behandla hela eller delar av ansiktet.</p>';
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
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'IPL för Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL behandling av ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/nasa.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'IPL för Näsa',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL behandling av näsan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/kinder.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'IPL för Kinder',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL behandling av kinderna',
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Enskilda kärl',
        image_title: 'Enskilda kärl',
        title: 'Enskilda kärl',
        description: '<p class="p200">Behandla enskilda kärl.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: '1 st Ytligt blodkärl',
                image_title: '1 st Ytligt blodkärl',
                title: 'IPL för 1 st Ytligt blodkärl',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_BloodVessels&area=IPL_1x_spot_yb',
                url_label: 'Boka',
                url_title: 'Boka tid för IPL behandling av 1 st Ytligt blodkärl',
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: null,
    image_large: null,
    image_alt: 'Eftervård för IPL behandling mot ytliga blodkärl',
    image_title: 'Eftervård för IPL mot ytliga blodkärl',
    content: '<p class="p200">Eftervården är en central del av återhämtningsprocessen efter en IPL behandling mot ytliga blodkärl. Efter behandlingen kan det förekomma en viss rodnad och ibland en mild svullnad i de behandlade områdena. Dessa reaktioner är vanliga och bör avta relativt snabbt. Det är viktigt för att undvika irritation och infektion att inte röra det behandlade området med smutsiga händer och att undvika att applicera makeup eller parfymerade produkter under de första 24 timmarna efter behandlingen.</p>
    <p class="p200 mt-m">Under de första dagarna efter din IPL behandling är det rekommenderat att du avstår från intensiv fysisk aktivitet, bastubad och långa varma duschar, eftersom dessa kan öka svullnad och irritation. Det är också viktigt att skydda huden mot solen. Använd solskyddskräm med hög SPF regelbundet, särskilt på de behandlade områdena, för att förhindra ytterligare solskador och främja läkning. Använd gärna milda, återfuktande hudvårdsprodukter som inte innehåller irriterande ämnen för att lugna huden och bibehålla dess fuktbalans.</p>
    <p class="p200 mt-m">Följ noggrant de eftervårdsinstruktioner du får från din hudterapeut. Om du har några frågor eller bekymmer om din återhämtning efter behandlingen, tveka inte att kontakta din klinik. Ytterligare uppföljningsbehandlingar kan rekommenderas för att bibehålla och förbättra resultaten av din IPL behandling mot ytliga blodkärl.</p>',
));

$service_brands_title = 'Märken för IPL';
$service_brands_text = '<p class="p200">Vi utför IPL med Alma Rejuve DyeVL, Alma Harmony XL, Photonova som är de bästa maskinerna på marknaden.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: 'bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova',
        url_title: 'Powerlite Photonova',
    ),
);

$results_title = 'IPL ansikte före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-1.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-1.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-1.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-1.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-2.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-2.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-2.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-2.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-3.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-3.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-3.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-3.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-4.jpg',
        image_after_small: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-4.jpg',
        image_before_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-fore-4.jpg',
        image_after_large: '/bilder/resultat/ytliga-blodkarl/resultat-ytliga-blodkarl-efter-4.jpg',
        url_title: 'Resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 1,
        gender: '',
        problem: '',
        type: '',
        treatment: new ResultTreatment(
            duration: '',
            procedures: array(
                new ResultProcedure(
                    image: '',
                    name: '',
                    count: ''
                ),
            ),
            product: new ResultProduct(
                image: '',
                name: '',
            ),
            employee: new ResultEmployee(
                image: '',
                name: ''
            ),
        )
    ),
);

$reviews_title = 'Omdömen';

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur behandlas ytliga blodkärl?',
            text: '<p class="p200">Ytliga blodkärl behandlas med hjälp av intensivt pulserat ljus, eller IPL. Denna teknologi fungerar genom att sända ut en serie av ljuspulser över en rad olika våglängder som absorberas av de röda blodkärlen. Värmen från ljuset får blodkärlen att koagulera och brytas ner, vilket resulterar i att de gradvis försvinner eller blir mindre framträdande. Eftersom IPL använder en bredare våglängd jämfört med laser, kan det vara mer anpassningsbart och användbart för att behandla olika typer av ytliga blodkärl. IPL betraktas som en icke-invasiv behandlingsform och har därför kortare återhämtningstid jämfört med kirurgiska alternativ.</p>'
        ),
        new Question(
            title: 'Hur många behandlingar med IPL krävs för att behandla ytliga blodkärl?',
            text: 'Antalet IPL behandlingar som krävs för att effektivt minska ytliga blodkärl varierar beroende på individens hudtillstånd och omfattningen av blodkärlen. Vanligtvis kan det krävas mellan 3-8 behandlingar, med intervaller på cirka 4 veckor, för att uppnå märkbar förbättring. Din hudterapeut kommer att skapa en anpassad behandlingsplan baserad på en initial konsultation.'
        ),
        new Question(
            title: 'Kan ytliga blodkärl återkomma efter en IPL behandling?',
            text: 'IPL-behandling kan effektivt minska synligheten av ytliga blodkärl, men det är viktigt att komma ihåg att vissa livsstilsfaktorer, som sol exponering och genetiska förutsättningar, kan påverka deras återkomst. Regelbundna uppföljningsbehandlingar och adekvat hudvård kan behövas för att bibehålla resultaten över tid.'
        ),
        new Question(
            title: 'När börjar jag se resultat efter IPL behandling mot ytliga blodkärl?',
            text: 'De första resultaten av IPL behandling mot ytliga blodkärl kan ofta ses inom några dagar till en vecka efter behandlingen, med fortsatt förbättring efter varje session. Många patienter rapporterar en gradvis minskning av synligheten av blodkärl efter varje behandling. Fullständiga och långsiktiga resultat kan dock variera beroende på individens hudtillstånd och antal genomförda behandlingar.'
        ),
        new Question(
            title: 'Kan jag behandla ytliga blodkärl med hemmabehandlingar?',
            text: '<p class="p200">Tyvärr saknas en effektiv hemmabehandling för att behandla ytliga blodkärl. Orsaken är att kärlen ligger under hudytan dit hemmavårdsprodukter inte når utan att potentiellt skada huden. Det är alltid bäst att konsultera en hudterapeut för att diskutera dina behandlingsalternativ och för att säkerställa att du får en behandling som är både effektiv och säker för din hudtyp.</p>'
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

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/ipl-ytliga-blodkarl.php" />

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
    <link rel="stylesheet" href="/hudbehandlingar/service.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/treatment_floater.php'); ?>
    <main>
        <section id="header">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/treatment_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $description_title ?></h2>
                    <div class="mt-xl"><?php echo $description_text ?></div>
                </section>

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
                            <?php if (isset($treatment_area->image_small)) { ?>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl4"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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
                    <h2 class="big l10n"><?php echo $reviews_title ?></h2>
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

                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
                        <div class="is-hidden-touch">
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>