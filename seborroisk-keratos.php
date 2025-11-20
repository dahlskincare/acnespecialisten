<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort seborroisk keratos | AcneSpecialisten';
$seo_description = 'Experter på behandling av seborroisk keratos. Vi erbjuder skonsamma och avancerade metoder för att effektivt hantera dessa hudtillväxter.';
$seo_keywords = 'seborroisk keratos, behandling av seborroisk keratos, hudförändringar, jämn hudton, hudvård, Acnespecialisten, effektiv behandling, hudhälsa';
$seo_image = 'bilder/hudproblem/424x456/hudforandringar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Seborroisk Keratos', '/seborroisk-keratos.php'),
);

$image_small = 'bilder/hudproblem/358x274/hudforandringar.webp';
$image_large = 'bilder/hudproblem/424x456/hudforandringar.webp';
$image_title = 'Skonsam och effektiv behandling av seborroisk keratos';
$image_alt = 'Bild som illustrerar behandling av seborroisk keratos';

$green_banner_content = new GreenBannerContent(
      title: 'Behandling av Seborroisk Keratos',
      description: 'Seborroisk keratos, även kallat åldersvårtor är godartade hudtillväxter som kan variera i storlek och utseende. På denna sida går vi igenom vad seborroisk keratos är och de mest effektiva behandlingsmetoderna. På Acnespecialisten använder vi skonsamma och moderna tekniker för att säkert behandla seborroisk keratos, vilket kan förbättra hudens utseende och textur utan att orsaka obehag.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen', 'Boka gratis Konsultation för seborroisk keratos'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_seborroisk_keratos', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen', 'Boka gratis Konsultation för seborroisk keratos'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_seborroisk_keratos', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Hudförändringar',
                  url: null,
                  title: 'Hudförändringar',
            ),
      ]
);

$floating_box = 'Vi behandlar seborroisk keratos effektivt och skonsamt';

$description_title = 'Vad är seborroisk keratos?';
$description_text = '<p class="p200">Seborroisk keratos är en vanlig, godartad hudåkomma som kännetecknas av vårtlika, bruna till svarta upphöjda fläckar på huden. Dessa fläckar som ser ut som vårtor kan vara skrovliga eller vaxartade i utseende och varierar i storlek från några millimeter till flera centimeter. De förekommer oftast på områden som bröstet, ryggen, ansiktet eller halsen, men kan dyka upp var som helst på kroppen utom på handflator och fotsulor.</p>
<p class="p200 mt-m">Seborroisk keratos utvecklas vanligtvis hos äldre vuxna och är helt ofarliga, även om de kan vara kosmetiskt besvärande. I vissa fall kan fläckarna klia eller bli irriterade, särskilt om de utsätts för friktion från kläder eller smycken.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Vid din första konsultation hos AcneSpecialisten utförs en grundlig bedömning av dina seborroisk keratos. Våra erfarna hudterapeuter kommer att analysera hudtillväxterna och rekommendera en behandlingsplan som är anpassad efter dina behov och hudtillstånd.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
            url_title: 'Boka din kostnadsfria konsultation för seborroisk keratos idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'AcneSpecialisten erbjuder en rad behandlingsalternativ för seborroisk keratos, inklusive laserterapi och andra icke-invasiva metoder. Vår målsättning är att ge dig en skonsam, säker och effektiv behandling som minimerar hudförändringarna och förbättrar hudens utseende.',

            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_seborroisk_keratos',
            url_title: 'Läs mer om våra behandlingar för seborroisk keratos'
      ),
);

$top_articles = array(
      'areas' => new Article(
            title: 'Varför uppstår hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Orsaken till seborroisk keratos är inte helt klarlagd, men det finns flera faktorer som tros bidra till deras utveckling. Ålder är den mest betydande faktorn, då seborroisk keratos blir vanligare med stigande ålder och sällan ses hos unga människor. Genetiska faktorer spelar också en viktig roll, eftersom tillståndet ofta förekommer i familjer.</p>
      <p class="p200 mt-m">UV-strålning från solen har också föreslagits som en möjlig bidragande faktor, eftersom seborroisk keratos ofta uppträder på solutsatta områden av huden. Trots dessa möjliga bidragande faktorer finns det ingen exakt utlösare för seborroisk keratos, och de kan utvecklas hos individer oavsett hudtyp eller livsstil.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina seborroisk keratos?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina seborroisk keratos?',
            content: '<p class="p200">AcneSpecialisten erbjuder avancerade behandlingar för att ta bort seborroisk keratos, inklusive laserterapi och kryoterapi, för att effektivt och säkert behandla dessa hudförändringar. Vårt team av erfarna hudspecialister arbetar för att ge dig en personligt anpassad behandlingsplan som passar dina specifika behov och hudtillstånd.</p>',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för seborroisk keratos',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid en konsultation hos AcneSpecialisten utförs en undersökning av din hy. Våra hudexperter tar före-bilder och diskuterar med dig de mest lämpliga behandlingsalternativen, som kan inkludera Cryopen eller andra skonsamma metoder, för att skapa en individanpassad behandlingsplan som passar dina unika behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av seborroisk keratos',
      image_title: 'Konsultation för behandling av seborroisk keratos',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för seborroisk keratos',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Behandling av seborroisk keratos med CryoPen',
            duration: '20 min',
            price: '995 kr',
            content: 'CryoPen är en innovativ behandling som använder kryoterapi för att målinriktat och effektiv behandling. Denna snabba och effektiva metod minimerar obehag och är utmärkt för att reducera synligheten av seborroisk keratos, vilket ger en jämnare och förbättrad hudton.',

            image_small: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_large: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_alt: 'Bild av Cryopen behandling för seborroisk keratos',
            image_title: 'Cryopen behandling för seborroisk keratos',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling av seborroisk keratos',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_seborroisk_keratos',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen för seborroisk keratos'
      ),
);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-1.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-1.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-1.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-1.webp',
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
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-2.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-2.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-2.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-2.webp',
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
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-3.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-3.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-3.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-3.webp',
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
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-5.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-5.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-5.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-5.webp',
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

$results_images = array(
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-tinning.webp',
            image_alt: 'Hudförändring på tinningen före och efter behandling',
            image_title: 'Resultat - hudförändring på tinningen',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-vid-orat.webp',
            image_alt: 'Hudförändring vid örat före och efter behandling',
            image_title: 'Resultat - hudförändring vid örat',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-axel.webp',
            image_alt: 'Hudförändring på axeln före och efter behandling',
            image_title: 'Resultat - hudförändring på axeln',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-lapp.webp',
            image_alt: 'Hudförändring på läppen före och efter behandling',
            image_title: 'Resultat - hudförändring på läppen',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-rygg.webp',
            image_alt: 'Hudförändring på ryggen före och efter behandling',
            image_title: 'Resultat - hudförändring på ryggen',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-nyckelben.webp',
            image_alt: 'Hudförändring på nyckelbenet före och efter behandling',
            image_title: 'Resultat - hudförändring på nyckelbenet',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-nasa.webp',
            image_alt: 'Hudförändring på näsan före och efter behandling',
            image_title: 'Resultat - hudförändring på näsan',
            content: '',
      ),
);

$show_all_results_label = "Se alla resultat";
$show_all_results_title = "se flera behandlingsresultat";



$faq_categories = array(
      'Generella frågor' => array(
            new Question(
                  title: 'Hur kan man identifiera seborroisk keratos?',
                  text: 'Seborroisk keratos kan identifieras genom dess karakteristiska vårtlika, upphöjda fläckar som är bruna till svarta i färgen. De är ofta skrovliga eller vaxartade och kan variera i storlek. Fläckarna är vanligast på bröstet, ryggen, ansiktet eller halsen.'
            ),

            new Question(
                  title: 'Är seborroisk keratos farligt?',
                  text: 'Seborroisk keratos är en godartad hudåkomma och är inte farlig. De är ofarliga och leder sällan till komplikationer, även om de kan vara kosmetiskt besvärande och ibland klia eller bli irriterade.'
            ),

            new Question(
                  title: 'Kan seborroisk keratos lossna av sig själv?',
                  text: 'Ibland kan seborroisk keratos lossna av sig själv, särskilt om de utsätts för friktion från kläder eller smycken. Men de flesta förblir på plats och kräver behandling om man vill ta bort dem.'
            ),

            new Question(
                  title: 'Vilka behandlingsalternativ finns för att ta bort seborroisk keratos?',
                  text: 'Behandlingsalternativ för att ta bort seborroisk keratos inkluderar kryoterapi (frysning) och  laserbehandling. Det är bäst att rådgöra med en hudläkare för att bestämma den mest lämpliga metoden.'
            ),

            new Question(
                  title: 'Kan man behandla seborroisk keratos själv hemma?',
                  text: 'Det rekommenderas inte att behandla seborroisk keratos själv hemma, eftersom det kan leda till infektion eller ärrbildning. Professionell behandling av en läkare eller hudläkare är att föredra för att säkerställa säker och effektiv borttagning.'
            ),

            new Question(
                  title: 'Hur skiljer sig seborroisk keratos från andra hudåkommor som vårtor och åldersfläckar?',
                  text: 'Seborroisk keratos skiljer sig genom att de är godartade, vårtlika och ofta upphöjda med en skrovlig eller vaxartad yta. Åldersfläckar är platta och pigmenterade, medan vårtor är orsakade av virus och ofta har en ojämn yta.'
            ),

            new Question(
                  title: 'Finns det några risker eller biverkningar med att ta bort seborroisk keratos?',
                  text: 'Borttagning av seborroisk keratos är generellt säkert och effektivt sätt, men som med alla ingrepp finns det risker för biverkningar som infektion, ärrbildning och pigmentförändringar. Det är viktigt att följa hudterapeuten råd och eftervårdsinstruktioner noggrant.'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg hudterapeut',
            image_title: 'Cazzandra Lindberg - Hudterapeut'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik hudterapeut',
            image_title: 'Veronika Benedik - Hudterapeut'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund hudterapeut',
            image_title: 'Julia Eklund - Hudterapeut'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom hudterapeut',
            image_title: 'Vilma Libom - Hudterapeut'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Hudförändringar',
            aka: 'gropar & fläckar',
            image: 'images/problems/200x200/hudforandringar.webp',
            image_alt: 'Bild som visar hudforändringar',
            image_title: 'Hudförändringar',
            url: 'hudproblem/hudforandringar/',
            url_title: 'Hudförändringar'
      ),
);

$brands = array(
      new Brand(
            label: 'DAHL Skincare',
            image: 'bilder/logotyper/dahl-skincare.webp',
            image_alt: 'DAHL Skincare logotyp',
            image_title: 'DAHL Skincare - hudvårdsprodukter',
            url: 'https://www.dahlskincare.com/sv/',
            url_title: 'DAHL Skincare',
      ),
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_title: 'Alma Hybrid - CO2 laser',
            image_alt: 'Alma Hybrid logotyp',
            url: '/alma-hybrid-co2-laser.php',
            url_title: 'Läs mer om Alma Hybrid CO2 laser',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_title: 'Harmony XL Pro - Laser & IPL',
            image_alt: 'Harmony XL Pro logotyp',
            url: '/alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: '/dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_title: 'Skin Tech - Professionella kemiska peelingar',
            image_alt: 'Skin Tech logotyp',
            url: '/varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/seborroisk-keratos.php" />

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
      <link rel="stylesheet" href="hudproblem/problem.css">
      <script src="hudproblem/widgets/problem-trivia-card/problem-trivia-card.js"></script>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/floater.php'); ?>
      <main>
            <section id="header">
                  <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/green_header_banner.php'); ?>
            </section>
            <div class="container">
                  <div id="content">
                        <section id="image" class="is-hidden-desktop">
                              <picture>
                                    <source media="(max-width: 449px)" srcset="<?php echo $image_small ?>">
                                    <source media="(min-width: 450px)" srcset="<?php echo $image_large ?>">
                                    <img src="<?php echo $image_large ?>" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>" width="358" height="274" />
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

                        <section id="articles">
                              <?php foreach ($articles as $article) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                              <?php } ?>
                        </section>
                        <section id="define">
                              <h2 class="h500 l10n"><?php echo $headline01 ?></h2>
                              <?php
                              $scm = $service;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php')
                              ?>
                              <hr class="is-hidden-mobile">
                        </section>
                        <section id="treatments">
                              <h2 class="h500"><?php echo $headline02 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($services as $scm) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>


                        <section id="results">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results_grid/results_grid.php'); ?>
                        </section>
                        <section id="reviews">
                              <h2 class="big l10n">Omdömen</h2>
                              <?php
                              $reviews_narrow = true;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                              ?>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                        </section>
                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Våra hudterapeuter</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut/"><?php echo $specialist_url_label ?></a>
                        </section>
                        <section id="results-narrow">
                              <?php
                              $results_title = 'Jämför resultaten';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php');
                              ?>
                        </section>
                        <section id="related-problems">
                              <h2 class="big l10n">Relaterade hudproblem</h2>
                              <div class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('hudproblem/widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </div>
                        </section>
                  </div>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Varumärken</h2>
                              <a href="varumarken/" title="<?php echo $brands_url_title ?>" class="button compact text is-hidden-mobile">
                                    <span class="l10n"><?php echo $brands_url_label ?></span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken/"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>