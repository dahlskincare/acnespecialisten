<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Postinflammatorisk Hyperpigmentering | AcneSpecialisten';
$seo_description = 'Ta bort postinflammatorisk hyperpigmentering, vi hjälper dig med rätt behandling för hyperpigmentering! Boka tid för en gratis hudkonsultation →';
$seo_keywords = 'post akne, fläckar i ansiktet efter finnar, postinflammatorisk hyperpigmentering, hyperpigmentering behandling';
$seo_image = 'bilder/hudproblem/424x456/aknearr.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Postinflammatorisk Hyperpigmentering', '/postinflammatorisk-hyperpigmentering.php'),
);

$image_small = 'bilder/hudproblem/424x324/aknearr.webp';
$image_large = 'bilder/hudproblem/424x456/aknearr.webp';
$image_title = 'Exempel på postinflammatorisk hyperpigmentering';
$image_alt = 'Bild som visar effekterna av postinflammatorisk hyperpigmentering på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Postinflammatorisk Hyperpigmentering',
      description: 'Postinflammatorisk hyperpigmentering (PIH) uppstår när huden blir mörkare eller fläckig efter en inflammation från t.ex finnar eller akneutbrott. Dessa mörka fläckar i ansiktet kan vara svårt att få bort på egen hand, men med rätt behandling kan vi reducera och ta bort problemet. Här hittar du mer information om PIH och hur vi effektivt kan hjäpla dig.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Fläckar på huden',
                  url: null,
                  title: null,
            ),
      ]
);

$description_title = 'Vad är postinflammatorisk hyperpigmentering?';
$description_text = '<p class="p200">Postinflammatorisk hyperpigmentering (PIH) är en tillfällig hudåkomma där huden blir mörkare efter inflammation eller skada. Detta uppstår ofta efter akne, eksem, psoriasis eller hudskador som solbränna eller kemiska irritationer. PIH visar sig som mörka fläckar som kan vara rosa, röda, bruna, lila eller svarta beroende på hudton och skadans allvarlighet. Trots att PIH inte är farligt, kan det vara kosmetiskt störande och påverka självförtroendet.</p>
<p class="p200 mt-m">På AcneSpecialisten behandlar vi PIH med individuellt anpassade metoder, som laser, microneedling och kemiska peelingar, för att jämna ut hudtonen och ge en klarare och fläckfri hud.</p>';

$top_articles = array(
      'areas' => new Article(
            title: 'Varför uppstår hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Postinflammatorisk hyperpigmentering uppstår när huden reagerar på inflammation eller skada genom att överproducera melanin, det pigment som ger huden dess färg. När huden försöker läka sig själv efter en inflammation kan inflammationsprocessen störa de melaninproducerande cellerna (melanocyterna), vilket leder till ojämn pigmentfördelning.</p>
            <p class="p200 mt-m">Faktorer som kan bidra till utvecklingen av PIH inkluderar akne, eksem, psoriasis, skärsår, brännskador, och till och med vissa medicinska behandlingar eller kosmetiska procedurer. Det är viktigt att skydda huden mot ytterligare irritation och använda solskydd för att förhindra att hyperpigmenteringen förvärras. Dessutom kan PIH uppstå om man klämmer fel eller pillar på sina finnar, vilket förvärrar inflammationen och leder till ökad melaninproduktion.</p>',
      ),
);


$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten får du professionell hjälp av en hudterapeut som är expert på hudproblem. Vi utför en grundlig analys av din hud för att identifiera områden med hyperpigmentering och skapar en behandlingsplan som är unikt anpassad för din hudtyp och specifika behov.',
            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            url_title: 'Boka din kostnadsfria konsultation för postinflammatorisk hyperpigmentering'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder avancerade behandlingar som effektivt tar bort mörka fläckar och förbättrar hudens ton och utseende. Våra metoder inkluderar laser, kemiska peelingar och microneedling, alla utvalda för att ge bästa möjliga resultat för din hud.',
            url_label: 'Se behandlingar',
            url: 'behandla-acnearr.php',
            url_title: 'Upptäck våra anpassade behandlingar för postinflammatorisk hyperpigmentering'
      ),
);

$treatment_link = '<a href="behandla-acnearr.php" title="Utforska effektiva behandlingar för postinflammatorisk hyperpigmentering" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Acneärr Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist inom acneärr utförs en noggrann undersökning av dina ärr. Vi tar före-bilder på de drabbade områdena och diskuterar dina mål och förväntningar. En skräddarsydd behandlingsplan anpassad efter dina individuella behov och ärrets typ rekommenderas.',
      image_small: 'bilder/behandlingar/200x200/konsultation.webp',
      image_large: 'bilder/behandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för acneärrbehandling',
      image_title: 'Konsultation för acneärrbehandling',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      consultation_url_label: 'Boka konsultaion',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för acneärr',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: '/gratis-hudkonsultation.php',
      url_label: 'Läs mer om gratis hudkonsultation',
      url_title: 'Läs mer om gratis hudkonsultation'
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Laser mot PIH',
            duration: '90 min',
            price: '4595 kr',
            content: 'LLaserbehandling är en effektiv metod för att minska postinflammatorisk hyperpigmentering (PIH) genom att använda koncentrerade ljusstrålar. Denna behandling stimulerar hudens naturliga kollagenproduktion och avlägsnar skadade hudceller, vilket jämnar ut hudens ton och minskar synligheten av mörka fläckar.',
            image_small: 'bilder/behandlingar/200x200/laser.webp',
            image_large: 'bilder/behandlingar/200x200/laser.webp',
            image_alt: 'Bild av en laserbehandling mot acneärr',
            image_title: 'Laserbehandling mot acneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laser mot acneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot acneärr',
            url: '/laser-acnearr.php',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot acneärr',
      ),
      new Service(
            title: 'Kemisk peeling mot PIH',
            duration: '30 min',
            price: '1995 kr',
            content: 'KKemisk peeling är en effektiv behandling för att förbättra hudens utseende och textur genom användning av syror. Denna metod är särskilt bra för att behandla fläckar från postinflammatorisk hyperpigmentering (PIH). En kemisk lösning appliceras på huden, vilket exfolierar och avlägsnar det yttersta hudlagret. Detta främjar hudens förnyelse och minskar synligheten av både ärr och fläckar.',
            image_small: 'bilder/behandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/behandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling mot acneärr',
            image_title: 'Kemisk peeling mot acneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot acneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot acneärr',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot acneärr',
      ),
      new Service(
            title: 'Microneedling mot PIH',
            duration: '60 min',
            price: '2595 kr',
            content: 'Microneedling är en populär behandling för att minska fläckar och postinflammatorisk hyperpigmentering (PIH). Genom att använda små, fina nålar skapas kontrollerade mikroskador i huden, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Detta bidrar till att jämna ut hudtonen och reducera synligheten av mörka fläckar och pigmentförändringar. Behandlingen resulterar i en klarare och mer enhetlig hud.',
            image_small: 'bilder/behandlingar/200x200/microneedling.webp',
            image_large: 'bilder/behandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling mot acneärr',
            image_title: 'Microneedling mot acneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot acneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling mot acneärr',
            url: '/microneedling-acnearr.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot acneärr',
      ),
);



$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
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
                  title: 'Kan postinflammatorisk hyperpigmentering vara permanent?',
                  text: 'Postinflammatorisk hyperpigmentering (PIH) är vanligtvis inte permanent. Med rätt behandling och hudvårdsrutiner kan de mörka fläckarna blekna över tid. Dock kan processen vara långsam, och utan rätt behandling kan PIH kvarstå i flera år.'
            ),
            new Question(
                  title: 'Vilka är de första stegen i att behandla hyperpigmentering?',
                  text: 'Det första steget i att behandla postinflammatorisk hyperpigmentering (PIH) är att boka en konsultation hos en hudterapeut. En expert kan utvärdera din hud och ta fram en skräddarsydd hudvårdsrutin. Denna rutin kan inkludera både produkter och professionella behandlingar som är effektiva för att reducera och potentiellt eliminera hyperpigmentering.'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor";

$skin_guide_articles = array(
      new SkinGuideArticle(
            title: 'How hormones effect?',
            problem: 'Acne',

            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',

            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',
      ),
      new SkinGuideArticle(
            title: 'How hormones effect?',
            problem: 'Acne',

            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',

            url: 'skin-guide/category-here/subcategory-here/how-hormones-effect',
            url_title: 'How hormones effect?',


      ),
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

$skinguide_url_label = "Läs fler guider";
$skinguide_url_title = "Läs fler guider";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg hudterapeut',
            image_title: 'Cazzandra Lindberg - Hudterapeut'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik hudterapeut',
            image_title: 'Veronika Benedik - Hudterapeut'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul hudterapeut',
            image_title: 'Amira Maqboul - Hudterapeut'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom hudterapeut',
            image_title: 'Vilma Libom - Hudterapeut'
      )
);

$specialist_url_label = "Se alla hudterapeuter";
$specialist_url_title = "Se alla hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'bilder/hudproblem/200x200/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
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
            url: '/varumarken/skin-tech',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/postinflammatorisk-hyperpigmentering.php" />

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
      <?php
      $floater_small_text = true;
      include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/floater.php');
      ?>
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

                              <?php foreach ($top_articles as $id => $article) { ?>
                              <section id="<?php echo $id ?>">
                                    <?php
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                                    ?>
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
                              <hr class="mt-xl3 is-hidden-mobile">
                              <?php echo $treatment_link ?>

                        </section>

                        <section id="define">
                              <h2 class="h500 l10n"><?php echo $headline01 ?></h2>
                              <hr class="is-hidden-mobile">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                              <hr class="is-hidden-mobile">
                        </section>

                        <section id="treatments">
                              <h2 class="h500"><?php echo $headline02 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($services as $service) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>


                  

                        <section id="results">
                              <?php
                              $results_title = 'Resultat';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php');
                              ?>
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
                        <!--Hudguide-->
                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Våra hudterapeuter</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut"><?php echo $specialist_url_label ?></a>
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
                              <a href="varumarken" title="<?php echo $brands_url_title ?>" class="button compact text is-hidden-mobile">
                                    <span class="l10n"><?php echo $brands_url_label ?></span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>