<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ansiktsbehandling för Rosacea - Effektiv behandling';
$seo_description = 'Vi erbjuder specialanpassade ansiktsbehandlingar för att lugna och vårda rosacea-drabbad hud. Våra behandlingar är inriktade på att minska rodnad och irritation';
$seo_keywords = 'ansiktsbehandlingar för rosacea, rosaceabehandling, lugnande hudvård, behandla rodnad i ansiktet, AcneSpecialisten, skonsam hudvård, milda ansiktsbehandlingar, rosacealindring, hudvård vid rosacea, minska hudrodnad, lindra rosacea';

$seo_image = '/bilder/hudbehandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar'),
    new PathSegment('Ansiktsbehandling mot rosacea', '/hudbehandlingar/ansiktsbehandling/rosacea/'),
);

$model = new Service(
    title: 'Ansiktsbehandling mot rosacea',
    duration: '60 min',
    price: 'Från 799 kr',
    content: '',
    image_small: 'bilder/hudbehandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp',
    image_large: 'bilder/hudbehandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp',
    image_alt: 'Ansiktsbehandlingar mot rosacea',
    image_title: 'Ansiktsbehandlingar mot rosacea',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '995 kr',
            savings: null,
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '2595 kr',
            savings: '865 kr per behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY&procedures=PriceClass_1_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '3995 kr',
            savings: '799 kr per behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY&procedures=PriceClass_1_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$description_title = 'Vad är ansiktsbehandling för rosacea?';
$description_text = '<p class="p200">Våra ansiktsbehandlingar är specialanpassade för att varsamt behandla och lindra tillståndet rosacea, och erbjuder dig en skonsam väg till en mer balanserad och lugn hud. Vi använder skräddarsydda tekniker som är speciellt utformade för att vara mjuka mot huden, vilket minimerar risken för irritation samtidigt som det bidrar till att minska rodnad och inflammation.</p>
    <p class="p200 mt-m">Anpassade för individer med rosacea, är våra behandlingar framtagen för att behandla och lugna olika hudtyper påverkade av detta tillstånd, vare sig huden är känslig, torr, eller en blandhud. Målet med varje behandling är att förbättra hudens tillstånd och dess förmåga att hantera symptomen på rosacea, återställa hudens naturliga lugn och balans. Vi strävar efter att ge din hud de näringsämnen och den omsorg den behöver för att stärka dess skyddande barriär och minska risken för framtida utbrott.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför ansitksbehandling mot rosacea',
        image_small: null,
        image_large: null,
        image_alt: 'Förberedelser inför ansiktsbehandling mot rosacea',
        image_title: 'Förberedelser inför ansiktsbehandlingar mot rosacea',
        content: '<p class="p200">Du kan alltid besöka AcneSpecialisten för en rosaceabehandling precis som du är utan några särskilda förberedeler. Men för dig som vill göra det där lilla extra för att maximera fördelarna med behandlingen rekommenderar vi att du avstår från att använda hudvårdsprodukter med starka ingredienser eller exfolierande syror några dagar innan din tid. Detta för att undvika onödig irritation och för att göra din hud mer mottaglig för de lugnande behandlingarna.</p>
        <p class="p200 mt-m">Det är inte nödvändigt att du kommer utan smink till din behandling, då vi kan ta hand om att varsamt avlägsna det vid sessionens början. Vi ser fram emot att välkomna dig och sätta ihop en personligt anpassad behandlingsplan.</p>',
    ),
);

$types_title = 'Behandling';
$types_description = 'Vi behandlar rosacea effektivt med hjälp av vår skräddarsydda ansiktsbehandling.';
$big_types = array(
    'process' => new Service(
        title: 'Ansiktsbehandling mot rosacea',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Varje session börjar med en mild rengöring utformad för att förbereda och lugna rosacea-drabbad hud. Vi undviker aggressiv exfoliering och använder istället skonsamma produkter som är anpassade för att minska inflammation och rodnad associerad med rosacea. Vår behandling inkluderar noggrant utvalda lugnande metoder för att stärka hudens barriär utan att framkalla irritation. Om ytterligare exfoliering är nödvändig utförs den med yttersta varsamhet. Behandlingen avslutas med en särskilt utformad lugnande mask som minskar rodnad och ger komfort till huden, följt av en återfuktande kräm som hjälper till att balansera och skydda din känsliga hud. Denna omsorgsfullt anpassade behandlingsmetod bidrar till att lindra symtomen på rosacea och främjar en klarare och mer balanserad hudton.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_alt: 'Ansiktsbehandling mot rosacea',
        image_title: 'Ansiktsbehandling mot rosacea',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Ansiktsbehandling mot rosacea',
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1295 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY&procedures=PriceClass_1_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '2595 kr',
                savings: '865 kr per besök',
                booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY&procedures=PriceClass_1_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                savings: '2595 kr',
                price: '799 kr per besök',
                booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY&procedures=PriceClass_1_Procedure_5'
            )
        )
    ),
);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård och underhåll efter ansiktsbehandling mot rosacea',
        image_small: null,
        image_large: null,
        image_alt: 'Eftervård och underhåll',
        image_title: 'Eftervård och underhåll',
        content: '<p class="p200">Efter din ansiktsbehandling mot rosacea är en konsekvent och rätt anpassad eftervård essentiell för att bevara de resultat som uppnåtts och underlätta hudens återhämtning. Det är viktigt att fortsätta med en daglig hudvårdsrutin som innehåller specialutformade produkter för att vårda och upprätthålla den känsliga huden med rosacea. Vi rekommenderar produkter från DAHL Skincare som är utvecklade för att stödja och bibehålla hudens balans och minska rodnad och irritation associerad med rosacea.</p>
        <p class="p200 mt-m">Personlig hudvård är nyckeln, och vi på Acnespecialisten är dedikerade till att hjälpa dig hitta en hudvårdsrutin som passar just dina behov och hudtyp. Att använda de rätta produkterna efter din ansiktsbehandling för rosacea kan inte bara långsiktigt bevara behandlingens positiva effekter utan även stärka huden för att motstå framtida utbrott. Vi är engagerade i att stödja dig genom din resa mot en bättre hudhälsa och ser fram emot att assistera dig i att uppnå och upprätthålla en sund hud med hjälp av vår expertis. Låt Acnespecialisten vara din partner på vägen mot en effektiv och hållbar hudvårdsrutin för rosacea.</p>',
    ),
);

$treatment_steps = array(
    new TreatmentStep(
        title: 'Identifiera',
        content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rosacea och skapar en individuell behandlingsplan.',
        url_label: 'Få gratis konsultation',
        url: 'gratis-hudkonsultation.php',
        url_title: 'Boka din kostnadsfria hudkonsultation idag'
    ),
    new TreatmentStep(
        title: 'Behandla',
        content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika rosacea, så att du snabbt och säkert blir av med problemet.',
        url_label: 'Se behandlingar',
        url: 'rosaceabehandling.php',
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
        url: 'ytliga-blodkarl.php',
        url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
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
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
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
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
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
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
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
            title: 'Hur ofta bör jag genomgå en ansiktsbehandling mot rosacea?',
            text: 'Frekvensen för ansiktsbehandlingar mot rosacea bör anpassas individuellt. Vissa kan behöva regelbundna sessioner medan andra kanske bara behöver sporadiska underhållsbehandlingar. Det bästa är att konsultera med din hudterapeut för att utarbeta en plan som är skräddarsydd för din huds behov och din rosaceas svårighetsgrad.'
        ),
        new Question(
            title: 'Kan ansiktsbehandlingar mot rosacea helt eliminera min rodnad?',
            text: 'Ansiktsbehandlingar kan avsevärt minska rodnaden och andra symptom associerade med rosacea, men det är en pågående tillstånd som ofta kräver kontinuerlig behandling. Genom att följa din skräddarsydda hudvårdsrutin kan du upprätthålla resultatet och minimera framtida utbrott.'
        ),
        new Question(
            title: 'Hur snabbt kan jag förvänta mig att se resultat efter en ansiktsbehandling för rosacea?',
            text: 'Resultaten kan variera beroende på individens hud och svårighetsgraden av rosacea. Men med rätt kombination av behandlingar och produkter ser många en förbättring redan inom några veckor. Kontinuerlig vård och regelbundna behandlingar rekommenderas för bästa långsiktiga resultat.'
        ),
        new Question(
            title: 'Är ansiktsbehandlingar mot rosacea nödvändiga även för milda fall?',
            text: 'Även mild rosacea kan dra nytta av anpassade ansiktsbehandlingar för att hantera symtom och förhindra försämring. Det är viktigt att konsultera med en hudterapeut för att bedöma dina behov och bestämma den bästa behandlingsstrategin för din hud.'
        ),
    )
);
$faq_view_more = 'Se alla frågor & svar';

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

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/ansiktsbehandling/rosacea/" />
      
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
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
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