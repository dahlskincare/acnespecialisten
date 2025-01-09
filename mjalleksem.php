<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Mjälleksem - Behandling | AcneSpecialisten';
$seo_description = 'Med vår behandling mot mjälleksem kan bli av med dina problem. Boka en gratis hudkonsultation hos AcneSpecialisten så tar vi fram en behandlingsplan till dig!';
$seo_keywords = 'mjälleksem, behandling av mjälleksem, orsaker till mjälleksem, förebygga mjälleksem, seborroisk dermatit, skalpmjälleksem, ansiktsmjälleksem, flagnande hud, oljig hud';
$seo_image = 'bilder/hudproblem/424x456/seborre.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Mjälleksem', '/mjalleksem.php'),
);

$image_small = 'bilder/hudproblem/358x274/seborre.webp';
$image_large = 'bilder/hudproblem/424x456/seborre.webp';
$image_title = 'Visar en hud med seborre';
$image_alt = 'Bild som illustrerar mjälleksem på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Mjälleksem',
      description: 'Mjälleksem i ansiktet, framförallt i ögonbrynen och i hårfästet är ett vanligt hudproblem. I den här sektionen utforskar vi vad mjälleksem är, varför det uppstår och hur AcneSpecialisten kan hjälpa dig med behandling. Vi diskuterar orsakerna till mjälleksem, hur det skiljer sig från andra hudtillstånd och hur vi kan stödja dig genom din behandlingsprocess.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea', 'Boka gratis Konsultation för Mjälleksem'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea', 'Boka gratis Konsultation för Mjälleksem'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Seborre',
                  url: null,
                  title: null,
            ),
            new Link(
                  label: 'Seborroiskt Eksem',
                  url: null,
                  title: null,
            ),
      ]
);

$description_title = 'Vad är mjälleksem?';
$description_text = '<p class="p200">Mjälleksem, även känt som seborroisk dermatit, är en vanlig hudåkomma som kännetecknas av röda, flagnande och ofta oljiga hudpartier. Det drabbar vanligtvis skalpen, ansiktet och andra oljerika områden på kroppen. Även om det är en kronisk tillstånd, finns det flera effektiva behandlingar som kan lindra symtomen.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi specialiserade behandlingar för mjälleksem. Vår <a class="b200 underline color-deep-sea-400" href="/seborre.php" title="Mer information om seborré">seborré</a> behandling är anpassade för att lugna huden, minska inflammation och flagnande samt att kontrollera överproduktionen av hudolja. Genom en noggrann analys av ditt hudtillstånd och livsstil, utformar vi en personlig behandlingsplan som inte bara behandlar symptomen, utan också tar itu med de bakomliggande orsakerna.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten kopplar vi dig med en erfaren hudterapeut som hjälper dig att korrekt identifiera ditt hudproblem och utformar en individuell behandlingsplan speciellt för dig. Att förstå din specifika form av mjälleksem är avgörande för en effektiv behandling.',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
            url_label: 'Boka din gratis konsultation',
            url_title: 'Boka en tid för gratis mjälleksem konsultation',
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder en rad skonsamma men effektiva behandlingar anpassade för din specifika hudtyp, vilket säkerställer att du på ett tryggt och effektivt sätt kan hantera ditt mjälleksem.',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea&method=Method_FacialProblem&area=EMPTY',
            url_label: 'Våra behandlingar',
            url_title: 'Våra effektiva mjälleksembehandlingar',
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'På AcneSpecialisten hjälper vi dig att hitta en skräddarsydd hudvårdsrutin och produkter specifikt för att förebygga mjälleksem, och att hålla din hud frisk och balanserad.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            url_label: 'Upptäck produkterna',
            url_title: 'Se produkterna för att förebygga mjälleksem',
      ),
);


$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">När det gäller mjälleksem, är det viktigt att förstå varför och var det vanligtvis uppstår för att kunna hantera det effektivt. Mjälleksem, även känt som seborroisk dermatit, drabbar ofta områden med hög densitet av talgkörtlar som skalpen, ansiktet i ögonbrynen och på vid näsan, öronkanalerna och bröstet. Under din konsultation hos AcneSpecialisten, utförs en noggrann hudanalys för att identifiera dessa problemområden och förstå de underliggande orsakerna till ditt hudproblem.</p>
      <p class="p200 mt-m">Det är viktigt att skydda dessa känsliga områden från ytterligare irritation. Vi rekommenderar att undvika hudirriterande produkter och starka syror, särskilt i de drabbade områdena. Dessa förberedelser är avgörande för att säkerställa att eventuella behandlingar blir så effektiva och skonsamma som möjligt. Våra hudterapeuter kommer att ge dig skräddarsydda råd och vägledning för att förbereda och behandla ditt mjälleksem på bästa sätt.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för mitt mjälleksem?',
            image_title: 'När ska jag söka hjälp för mitt mjälleksem?',
            content: '<p class="p200">Mjälleksem är en hudåkomma som kan påverka både vuxna och barn, kännetecknat av röd, inflammerad och flagnande hud, ofta i hårbotten eller andra oljerika områden. Om du upplever att ditt mjälleksem orsakar obehag, påverkar din livskvalitet, eller om du har provat olika produkter och hemmabehandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att förstå att hjälp finns tillgänglig, oavsett om ditt mjälleksem är mild eller svår.</p>
            <p class="p200 mt-m">Genom att besöka en hudterapeut kan du få en skräddarsydd behandlingsplan anpassad efter dina unika behov. En expert kan analysera din hudtyp, diskutera de möjliga orsakerna till ditt mjälleksem och rekommendera de mest effektiva behandlingsmetoderna. Dessa kan inkludera specialiserade hudvårdsprodukter eller andra behandlingar som är anpassade för att hantera mjälleksem effektivt. Att ta hand om din hud och få professionell hjälp är avgörande för att kontrollera symtomen och förbättra din hudhälsa.</p>',
      ),

      new Article(
            title: 'Varför ska jag välja AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag välja AcneSpecialisten?',
            image_title: 'Varför ska jag välja AcneSpecialisten?',
            content: '<p class="p200">För en effektiv och långsiktig lösning på mjälleksem, är AcneSpecialisten det självklara valet. Med vår gedigna erfarenhet inom hudvård och specialisering inom behandling av mjälleksem, är vi välutrustade för att hantera din specifika situation.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste metoderna och teknologierna inom hudvård för att ge dig bästa möjliga resultat. Vårt team av erfarna hudterapeuter är redo att skapa en personligt anpassad behandlingsplan och stötta dig genom hela din hudvårdsresa. Med regelbundna uppföljningar och anpassade hudvårdsprogram ser vi till att ditt mjälleksem hanteras effektivt och att du uppnår en långvarig förbättring av din hud.</p>',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Mjälleksem Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under ett personligt möte med en av våra AcneSpecialister utförs en noggrann undersökning av din hud för att identifiera och förstå ditt hudproblem. Vi tar före-bilder på din hud och utifrån denna undersökning rekommenderar vi den mest lämpliga behandlingen för dig, och skräddarsyr en individuell behandlingsplan som bäst passar dina specifika behov och livsstil.',
      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Mjälleksem Konsultation',
      image_title: 'Mjälleksem Konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Boka din gratis mjälleksem konsultation nu',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om vår hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot mjälleksem',
            duration: '60 min',
            price: '1295 kr',
            content: 'En grundlig djuprengöring av huden för att effektivt hantera överflödigt talg och döda hudceller. Behandlingen inkluderar antiinflammatoriska och lugnande moment för att lindra inflammation och rodnad, vilket i sin tur hjälper till att lugna huden och minska symtom på mjälleksem.',
            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Ansiktsbehandling mot mjälleksem',
            image_title: 'Ansiktsbehandling mot mjälleksem',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Boka gratis konsultation',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Seborrea',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka din ansiktsbehandling mot mjälleksem',
            url: null,
            url_label: 'Läs mer om ansiktsbehandling mot mjälleksem',
            url_title: 'Klicka här för att läsa mer om ansiktsbehandling mot mjälleksem'
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot mjälleksem',
            duration: null,
            price: 'Från 1495 kr',
            content: 'För att effektivt bekämpa och förebygga hudproblemet krävs daglig behandling med rätt produkter. Produkterna är speciellt utformat för att hjälpa till att återställa och upprätthålla balansen i din hud samt förebygga uppkomsten av nya hudproblem.',
            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Produkter mot mjälleksem',
            image_title: 'Produkter mot mjälleksem',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot mjälleksem',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            booking_url_title: 'Klicka för att köpa produktpaket mot mjälleksem',
      )
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

$show_all_results_label = "Se fler resultat";
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
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul hudterapeut',
            image_title: 'Amira Maqboul - Hudterapeut'
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
$specialist_url_title = "mjalleksem Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Seborré',
            aka: 'flagnande hy',
            image: 'bilder/hudproblem/200x200/seborre.webp',
            image_alt: 'Flagnande hy på ögonbrynen',
            image_title: 'Seborré',
            url: 'seborre.php',
            url_title: 'Seborré'
      ),
);

$brands = array(
      new Brand(
            label: 'DAHL Skincare',
            image: 'bilder/logotyper/dahl-skincare.webp',
            image_alt: 'DAHL Skincare logotyp',
            image_title: 'DAHL Skincare - hudvårdsprodukter',
            url: 'https://dahlskincare.se',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/mjalleksem.php" />

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
                              <hr class="mt-xl3 is-hidden-mobile">

                        </section>

                        <?php foreach ($top_articles as $id => $article) { ?>
                              <section id="<?php echo $id ?>">
                                    <?php
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                                    ?>
                              </section>
                        <?php } ?>

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
                        <section id="products">
                              <h2 class="h500"><?php echo $headline03 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $scm) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="articles">
                              <?php foreach ($articles as $article) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                              <?php } ?>
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
                        <section id="related-problems">
                              <h2 class="big l10n">Relaterade hudproblem</h2>
                              <dig class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('hudproblem/widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </dig>
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