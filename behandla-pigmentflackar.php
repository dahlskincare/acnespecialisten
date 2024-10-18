<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort pigmentfläckar - Effektiva metoder och behandlingar';
$seo_description = 'Lär dig allt om pigmentfläckar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från AcneSpecialisten.';
$seo_keywords = 'behandla pigmentfläckar';
$seo_image = 'bilder/hudproblem/424x456/pigmentflackar.webp';

$model = new Service(
    title: 'Behandlingar mot pigmentfläckar',
    duration: null,
    price: null,
    content: '<p class="p200">Vi erbjuder de mest effektiva metoderna för att behandla och ta bort pigmentfläckar. Våra skräddarsydda behandlingar reducerar pigmenteringar oavsett typ eller orsak, vilket ger dig en klarare och jämnare hudton. Om du är osäker på vilken behandling som passar din hudtyp bäst, boka en kostnadsfri hudkonsultation. Våra experter kommer att vägleda dig mot en fläckfri hud.</p>',
    image_small: 'bilder/hudproblem/358x274/pigmentflackar.webp',
    image_large: 'bilder/hudproblem/424x456/pigmentflackar.webp',
    image_alt: 'Bild som illustrerar pigmentfläckar',
    image_title: 'Pigmentfläckar',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Behandla pigmentfläckar', '/behandla-pigmentflackar.php'),
);

$about_title = 'Hur vi behandlar och tar bort pigmentfläckar';

$about_content = '<p class="p200">Att behandla pigmentfläckar kräver noggrannhet och expertis. Vi använder de mest effektiva och moderna metoderna för att framgångsrikt reducera pigmentfläckar. Vid vår kostnadsfria hudkonsultation identifierar vi din hudtyp och skapar en skräddarsydd behandlingsplan just för dig.</p>

<p class="p200 mt-xl">Under konsultationen utvärderar vi dina specifika behov och bestämmer den bästa åtgärden för att behandla dina pigmentfläckar, oavsett om det handlar om enstaka fläckar eller större områden. Vårt mål är att återställa din hud till dess naturliga och jämna utseende.</p>

    <p class="p200 mt-xl">Genom hela behandlingsprocessen, från första konsultation till slutgiltiga resultat, finns vårt dedikerade team här för att stödja och guida dig. Vi är här för att säkerställa att du får den bästa möjliga vården och att du känner dig trygg och väl omhändertagen.</p>';

$headline01 = "01. Identifiera";

$define_image_alt = 'Behandling av Pigmentfläckar';
$define_image_title = 'Behandling av Pigmentfläckar';

$define_content = '<p class="p200">För att kunna hjälpa dig med dina pigmentfläckar är det viktigt att vi förstår ditt specifika hudtillstånd och dina pigmentfläckars natur. Vi börjar med en kostnadsfri konsultation där vi noggrant analyserar din hud och diskuterar dina mål samt tidigare erfarenheter med pigmentfläckar. Vi tar före-bilder för att noggrant övervaka dina framsteg och skapa en skräddarsydd behandlingsplan som är utformad speciellt för dig. En personlig hudterapeut kommer att vara din följeslagare genom hela din resa mot en klarare hud, vilket garanterar att du får den bästa möjliga vården.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka gratis konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation för behandling av pigmentfläckar";


$headline02 = "02. Behandla";

$treat_content = '<p class="p200">När vi har identifierat dina pigmentfläckar inleder vi behandlingen för att reducera eller eliminera dem och återställa en jämnare hudton. Vi använder en rad olika metoder som är skräddarsydda efter dina specifika behov, inklusive <a class="b200 underline color-deep-sea-400" href="/kemisk-peeling.php" title="Mer information om kemisk peeling i stockholm">kemisk peeling stockholm</a>, laserbehandling och microneedling. Dessa effektiva metoder gör det möjligt att snabbt och effektivt behandla pigmentfläckar och förbättra hudens utseende. Vårt mål är att uppnå bästa möjliga resultat med minimal påverkan och obehag för dig.</p>';

$services = array(

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/ipl.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ipl.webp',
        image_title: 'Klient som genomgår IPL-behandling mot pigmentfläckar',
        image_alt: 'Bild av IPL-behandling mot pigmentfläckar hos AcneSpecialisten',
        title: 'IPL mot pigmentfläckar',
        duration: '20-60 min',
        price: 'Från 1595 kr',
        icons: array(),
        content: '<p class="p200">På Acnespecialisten använder vi IPL-behandling (Intensivt Pulserande Ljus) för att effektivt reducera pigmentfläckar. IPL-behandlingen använder ljusenergi som tränger djupt in i huden och riktar sig mot områden med ökad pigmentering. Denna metod hjälper till att bryta ner melanin, vilket minskar synligheten av pigmentfläckar och återställer en jämnare hudton. Vår noggranna behandling säkerställer att resultatet blir både effektivt och skonsamt för din hud.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_IPL',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för IPL-behandling mot pigmentfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din IPL-behandling mot pigmentfläckar nu',
        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om IPL',
        url_title: 'Läs mer om IPL mot pigmentfläckar',
        short_title: 'IPL'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för pigmentfläckar',
        image_alt: 'Bild på kemisk peelingbehandling mot pigmentfläckar hos Acnespecialisten',
        title: 'Kemisk peeling mot pigmentfläckar',
        duration: '30 min',
        price: '1995 kr',
        icons: array(),
        content: '<p class="p200">Kemisk peeling behandlar effektivt pigmentfläckar genom att använda syror för att avlägsna det yttersta hudlagret. Denna process främjar cellförnyelse och bidrar till att reducera synligheten av pigmentfläckar samt förbättra hudens struktur och utseende. Genom att stimulera hudens naturliga förnyelseprocess får du en jämnare och mer strålande hudton.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot pigmentfläckar',
        url: '/kemisk-peeling.php',
        url_label: 'Läs mer om kemisk peeling',
        url_title: 'Läs mer om kemisk peeling mot pigmnetfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot pigmentfläckar nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_title: 'Utförande av laserbehandling för pigmentfläckar',
        image_alt: 'Bild på laserbehandling mot pigmentfläckar hos Acnespecialisten',
        title: 'Laser mot pigmentfläckar',
        duration: '20-50 min',
        price: 'Från 2595 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling är en mycket effektiv metod för att reducera pigmentfläckar. På Acnespecialisten använder vi avancerad laserteknologi som riktar sig specifikt mot områden med ökad pigmentering. Lasern arbetar genom att sända ut ljuspulser som bryter ner pigmentet i fläckarna, vilket minskar deras synlighet och främjar en jämnare hudton. Denna metod är noggrant kontrollerad för att maximera resultatet samtidigt som den minimerar obehag och återhämtningstid. Laserbehandling erbjuder en snabb och precis lösning för att förbättra hudens utseende och jämnhet.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laser mot pigmentfläckar',
        url: '/hudbehandlingar/laser-mot-hudproblem/',
        url_label: 'Läs mer om laser',
        url_title: 'Läs mer om laser mot pigmentfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=laser&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot pigmentfläckar nu',
        short_title: 'Laser'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för pigmentfläckar',
        image_alt: 'Bild på microneedlingbehandling mot pigmentfläckar hos Acnespecialisten',
        title: 'Microneedling mot pigmentfläckar',
        duration: '20-50 min',
        price: 'Från 1595 kr',
        icons: array(),
        content: '<p class="p200">Microneedling är en effektiv metod för att behandla och få bort pigmentfläckar. Genom att använda små mikronålar skapas mikroskopiska kanaler i huden, vilket stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin. Detta bidrar till att reducera synligheten av pigmentfläckar och främjar en jämnare hudton. Dessutom möjliggör microneedling djupare penetration av aktiva ingredienser, vilket ytterligare hjälper till att reducera pigmentfläckar och förbättra hudens utseende.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot pigmentfläckar',
        url: '/microneedling.php',
        url_label: 'Läs mer om microneedling',
        url_title: 'Läs mer om microneedling mot pigmentfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot pigmentfläckar nu',
        short_title: 'Microneedling'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/frysbehandling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/frysbehandling.webp',
        image_title: 'Effektiv behandling med CryoPen mot pigmentfläckar på Acnespecialisten',
        image_alt: 'Bild illustrerar en behandling med CryoPen mot pigmentfläckar utförd på Acnespecialisten',

        title: 'CryoPen mot pigmentfläckar',
        duration: '20-70 min',
        price: 'Från 995 kr',
        icons: array(),
        content: '<p class="p200">På Acnespecialisten använder vi CryoPen-behandling för att noggrant och skonsamt behandla pigmentfläckar. CryoPen-enheten applicerar extrem kyla på pigmentfläckarna, vilket resulterar i deras nedbrytning och minskad synlighet. Denna metod är både effektiv och minimalt invasiv, vilket innebär minimalt obehag och ingen återhämtningstid. CryoPen-behandlingen erbjuder en snabb och precis lösning för att förbättra din hudton och reducera pigmentfläckar.</p>',

        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för CryoPen mot pigmentfläckar på Acnespecialisten',

        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=SKIP',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Din CryoPen-behandling mot pigmentfläckar på Acnespecialisten',

        url: '/cryopen.php',
        url_label: 'Läs mer om CryoPen',
        url_title: 'Läs mer om CryoPen mot pigmentfläckar',

        short_title: 'CryoPen'
    ),

);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "Se fler resultat mot pigmentfläckar";



$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka typer av pigmentfläcksbehandlingar erbjuder Acnespecialisten?',
            text: 'Acnespecialisten erbjuder flera olika typer av behandlingar för att reducera och behandla pigmentfläckar, inklusive laserbehandling, kemisk peeling, microneedling och cryopen.'
        ),

        new Question(
            title: 'Hur lång tid tar en pigmentfläcksbehandling hos Acnespecialisten?',
            text: 'En pigmentfläcksbehandling hos Acnespecialisten tar vanligtvis cirka 30-60 min, beroende på den specifika behandlingsmetoden.'
        ),

        new Question(
            title: 'Hur många behandlingar behövs för att se resultat vid pigmentfläcksbehandling?',
            text: 'Antalet behandlingar som behövs för att se resultat vid pigmentfläcksbehandling varierar beroende på pigmentfläckarnas svårighetsgrad och din hudtyp. I genomsnitt krävs vanligtvis 3-5 behandlingar.'
        ),

        new Question(
            title: 'Är pigmentfläcksbehandlingar smärtsamma?',
            text: 'Pigmentfläcksbehandlingar hos Acnespecialisten är utformade för att minimera obehag. Vissa behandlingsmetoder kan orsaka en mild känsla av obehag eller stickande under själva behandlingen, men detta är vanligtvis övergående och försvinner snabbt.'
        ),

        new Question(
            title: 'Kan alla hudtyper behandlas för pigmentfläckar hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder pigmentfläcksbehandlingar som kan anpassas för att passa alla hudtyper och hudtoner.'
        ),

    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till pigmentfläcksbehandling";

$specialists = array(
    new Specialist(
        name: 'Cassandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_title: 'Cassandra Lindberg, Hudterapeut hos Acnespecialisten sedan 2015',
        image_alt: 'Cassandra Lindberg - Erfaren Hudterapeut hos Acnespecialisten'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_title: 'Veronika Benedik, Erfaren Hudterapeut på Acnespecialisten',
        image_alt: 'Veronika Benedik, hudterapeut sedan 1999 på Acnespecialisten'
    ),
    new Specialist(
        name: 'Jennifer Eklund',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_title: 'Amira Maqboul, Hudterapeut på Acnespecialisten',
        image_alt: 'Amira Maqboul, hudterapeut sedan 2017 på Acnespecialisten'

    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_title: 'Vilma Libom, Hudterapeut på Acnespecialisten',
        image_alt: 'Vilma Libom, hudterapeut sedan 2019 på Acnespecialisten'
    )
);

$specialist_url_label = "Se alla hudterapeut";
$specialist_url_title = "Pigmentfläcks Specialiserade Hudterapeuter";

$brands = array(
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
        image_title: 'PRX-T33',
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

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för pigmentfläcksbehandling";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/behandla-pigmentflackar.php" />

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

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="hudproblem/treatment.css">
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
                <section id="image" class="is-hidden-desktop mt-xl">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $about_title; ?></h2>
                    <div class="mt-xl"><?php echo $about_content ?></div>
                </section>
                <section id="define">
                    <h2 class="h500 l10n"><?php echo $headline01; ?></h2>
                    <div class="mt-xl"><?php echo $define_content ?></div>
                    <a href="<?php echo $define_consultation_link ?>" title="<?php echo $define_consultation_link_title ?>" class="mt-xl button b200 l10n"><?php echo $define_consultation_link_label ?></a>
                </section>
                <section id="treat">
                    <h2 class="h500 l10n"><?php echo $headline02 ?></h2>
                    <div class="mt-xs">
                        <?php echo $treat_content ?>
                        </p>
                        <?php foreach ($services as $scm) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php');
                        } ?>
                </section>
                <section id="results">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                </section>
                <section id="reviews">
                    <h2 class="big l10n">Omdömen</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                </section>
                <section id="faq">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Frågor & Svar</h2>
                        <a href="fragor-svar.php" title="FAQ" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler frågor & svar</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                </section>

                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeut</h2>
                        <a href="/hudterapeut/" title="Specialister" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeut</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut/"><?php echo $specialist_url_label ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken/" title="Varumärken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" title="Varumärken" href="varumarken/">Se alla varumärken</a>
            </section>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>