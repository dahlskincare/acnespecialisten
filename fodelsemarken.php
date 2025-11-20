<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort födelsemärken | AcneSpecialisten';
$seo_description = 'Ta bort födelsemärken hos AcneSpecialisten. Vi tar bort godartade fläckar med effektiv CryoPen-behandling. Boka tid för en gratis hudkonsultation i dag →';
$seo_keywords = 'födelsemärken, behandling av födelsemärken, ta bort födelsemärken';
$seo_image = 'bilder/hudproblem/424x456/hudforandringar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Födelsemärken', '/fodelsemarken.php'),
);

$image_small = 'bilder/hudproblem/358x274/hudforandringar.webp';
$image_large = 'bilder/hudproblem/424x456/hudforandringar.webp';
$image_title = 'Skonsam och effektiv behandling av födelsemärken';
$image_alt = 'Bild som illustrerar behandling av födelsemärken';

$green_banner_content = new GreenBannerContent(
      title: 'Behandling av Födelsemärken',
      description: 'Födelsemärken är pigmenterade hudförändringar som kan variera i storlek, form och färg. Denna sida förklarar hur födelsemärken uppstår och de mest effektiva metoderna för att hantera dem. På Acnespecialisten använder vi skonsamma och avancerade tekniker för att säkert behandla födelsemärken, vilket hjälper till att förbättra hudens övergripande utseende och textur.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles', 'Boka gratis Konsultation för födelsemärken'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles', 'Boka gratis Konsultation för födelsemärken'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Leverfläckar',
                  url: null,
                  title: 'Leverfläckar',
            ),
      ]
);

$floating_box = 'Vi behandlar födelsemärken effektivt och skonsamt';

$description_title = 'Vad är födelsemärken?';
$description_text = '<p class="p200">Födelsemärken är pigmenterade hudförändringar som kan variera i storlek, form och färg. Dessa hudmärken är ofta medfödda eller utvecklas under tidiga levnadsår. De kan vara helt ofarliga, men vissa typer av födelsemärken kan kräva uppmärksamhet, särskilt om de förändras över tid.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi expertbedömning och behandlingar för att säkert hantera födelsemärken. Våra metoder kan inkludera laserbehandling eller andra avancerade tekniker för att effektivt minska eller <a class="b200 underline color-deep-sea-400" href="/cryopen.php" title="Mer information om att ta bort leverfläckar">ta bort leverfläckar</a> och födelsemärken, vilket bidrar till en jämnare och mer enhetlig hudton.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Under din första konsultation med en av våra hudterapeuter görs en detaljerad bedömning av dina födelsemärken. Vi diskuterar dina behov och utformar en personlig behandlingsplan baserad på dina födelsemärkens karaktär och ditt hudtillstånd.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Brand_Fodelsemarken',
            url_title: 'Boka din kostnadsfria konsultation för födelsemärken idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder skräddarsydda behandlingsalternativ för födelsemärken, anpassade efter dina individuella behov och hudtyp. Dessa kan innefatta laserterapi och andra moderna behandlingsmetoder, designade för att ge dig en säker och effektiv behandling.',

            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles',
            url_title: 'Läs mer om våra behandlingar för födelsemärken'
      ),
);

$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Födelsemärken är vanligt förekommande hudförändringar som kan uppstå var som helst på kroppen. De varierar i storlek, form och färg och kan vara platta eller upphöjda. De flesta födelsemärken är ofarliga, men det är viktigt att hålla koll på eventuella förändringar som kan tyda på hudproblem.</p>
      <p class="p200 mt-m">Vissa födelsemärken kan behöva medicinsk uppmärksamhet, tydliga kännetecken på farliga födelsemärken är om de förändras i storlek, form eller färg. AcneSpecialisten erbjuder professionell rådgivning och behandling för att hantera födelsemärken som kan vara av medicinsk eller estetisk betydelse.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för mina födelsemärken?',
            image_title: 'När ska jag söka hjälp för mina födelsemärken?',
            content: '<p class="p200">Födelsemärken är vanligtvis ofarliga, men det är viktigt att hålla koll på dem för eventuella förändringar. Om du märker några förändringar i storlek, form, färg eller om födelsemärken orsakar obehag, bör du söka professionell hjälp. En hudspecialist kan bedöma dina födelsemärken och rekommendera lämplig behandling om det behövs.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina födelsemärken?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina födelsemärken?',
            content: '<p class="p200">På AcneSpecialisten är vi specialiserade på att behandla födelsemärken och andra hudförändringar. Vi erbjuder säkra och effektiva behandlingsalternativ för att hjälpa dig att hantera dina födelsemärken. Vi kan inte göra en bedömning om födelsemärken är farliga eller inte, men vi kan vara ditt första steg i att kolla upp vad du kan göra med dina födelsemärken.</p>',
      ),
);


$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för födelsemärken',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en hudspecialist genomförs en noggrann undersökning av dina födelsemärken. Vi tar före-bilder och diskuterar olika behandlingsalternativ, inklusive möjligheten att använda Cryopen eller andra metoder, för att skräddarsy en behandlingsplan som passar dina specifika behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av födelsemärken',
      image_title: 'Konsultation för behandling av födelsemärken',

      url_label: '',
      url: '',
      url_title: '',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för födelsemärken',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Behandling av födelsemärken med CryoPen',
            duration: '20 min',
            price: '1595 kr',
            content: 'Cryopen är en avancerad och skonsam behandlingsmetod som använder extrem kyla för att målinriktat behandla och ta bort födelsemärken. Denna behandling är effektiv och orsakar minimalt obehag, vilket gör den idealisk för att minska synligheten av födelsemärken.',

            image_small: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_large: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_alt: 'Bild av Cryopen behandling för födelsemärken',
            image_title: 'Cryopen behandling för födelsemärken',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling av födelsemärken',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_fodelsemarken',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen för födelsemärken'
      ),
      new Service(
            title: 'Behandling av födelsemärken med laser',
            duration: '20 min',
            price: '1995 kr',
            content: 'Laser är en snabb och effektiv behandlingsmetod som använder värme via laserljus som behandlar födelsemärkenmed hög precision. Behandlingen är snabb och effektiv med omedelbara resultat.',

            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Kvinna som får laserbehandling mot födelsemärken',
            image_title: 'Laserbehandling mot födelsemärken',

            url_label: 'Läs mer om laser',
            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_title: 'Läs mer om laser mot födelsemärken',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_CO2',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot födelsemärken',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles&method=Method_laser_skin_imperfections',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot födelsemärken',
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
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-lapp.webp',
            image_alt: 'Hudförändring på läppen före och efter behandling',
            image_title: 'Resultat - hudförändring på läppen',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-nyckelben.webp',
            image_alt: 'Hudförändring på nyckelbenet före och efter behandling',
            image_title: 'Resultat - hudförändring på nyckelbenet',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-axel.webp',
            image_alt: 'Hudförändring på axeln före och efter behandling',
            image_title: 'Resultat - hudförändring på axeln',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-nasa.webp',
            image_alt: 'Hudförändring på näsan före och efter behandling',
            image_title: 'Resultat - hudförändring på näsan',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-rygg.webp',
            image_alt: 'Hudförändring på ryggen före och efter behandling',
            image_title: 'Resultat - hudförändring på ryggen',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-vid-orat.webp',
            image_alt: 'Hudförändring vid örat före och efter behandling',
            image_title: 'Resultat - hudförändring vid örat',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/hudforandringar/hudforandringar-resultat-fore-efter-tinning.webp',
            image_alt: 'Hudförändring på tinningen före och efter behandling',
            image_title: 'Resultat - hudförändring på tinningen',
            content: '',
      ),
);

$show_all_results_label = "Se alla resultat";
$show_all_results_title = "se flera behandlingsresultat";



$faq_categories = array(
      'Generella frågor' => array(
            new Question(
                  title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
                  text: 'Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.'
            ),
            new Question(
                  title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
                  text: 'Under konsultationen kommer en av våra hudterapeuter att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.'
            ),
      ),
      'Frågor om behandling' => array(
            new Question(
                  title: 'Vilka behandlingar erbjuder AcneSpecialisten för olika hudproblem?',
                  text: 'På AcneSpecialisten erbjuder vi ett brett utbud av behandlingar anpassade för specifika hudproblem, inklusive avancerad acnebehandling, skonsam rosaceabehandling och noggrann portömning, samt andra specialbehandlingar för olika hudtillstånd.'
            ),
            new Question(
                  title: 'Anpassar ni behandlingarna för olika hudtyper?',
                  text: 'Absolut, på AcneSpecialisten anpassar vi våra behandlingar för att passa en mängd olika hudtyper, från mycket känslig till oljig hy, för att säkerställa den mest effektiva och skonsamma behandlingen.'
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
            label: 'Dermapen',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: 'dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'CryoPen Brand Logo',
            image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'cryopen.php',
            url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'images/brands/prx-t33.svg',
            image_alt: 'PRX-T33 Brand Logo',
            image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
            url: 'prx-t33.php',
            url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial Brand Logo',
            image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
            url: 'hydrafacial.php',
            url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'Infuzion Brand Logo',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
            url: 'infuzion.php',
            url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/fodelsemarken.php" />

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