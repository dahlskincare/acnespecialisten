<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandling av Seborroisk Keratos - Effektiva Metoder';
$seo_description = 'Experter på behandling av seborroisk keratos. Vi erbjuder skonsamma och avancerade metoder för att effektivt hantera dessa hudtillväxter.';
$seo_keywords = 'seborroisk keratos, behandling av seborroisk keratos, hudförändringar, jämn hudton, hudvård, Acnespecialisten, effektiv behandling, hudhälsa';
$seo_image = 'bilder/hudproblem/424x456/hudforandringar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem'),
      new PathSegment('Seborroisk Keratos', '/seborroisk-keratos.php'),
);

$image_small = 'bilder/hudproblem/424x324/hudforandringar.webp';
$image_large = 'bilder/hudproblem/424x456/hudforandringar.webp';
$image_title = 'Skonsam och effektiv behandling av seborroisk keratos';
$image_alt = 'Bild som illustrerar behandling av seborroisk keratos';

$green_banner_content = new GreenBannerContent(
      title: 'Behandling av Seborroisk Keratos',
      description: 'Seborroisk keratos är godartade hudtillväxter som kan variera i storlek och utseende. På denna sida går vi igenom vad seborroisk keratos är och de mest effektiva behandlingsmetoderna. På Acnespecialisten använder vi skonsamma och moderna tekniker för att säkert behandla seborroisk keratos, vilket kan förbättra hudens utseende och textur utan att orsaka obehag.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen', 'Boka gratis Konsultation för Seborroisk Keratos'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=cryopen', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen', 'Boka gratis Konsultation för Seborroisk Keratos'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=cryopen', 'Boka denna behandling'),
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

$nav_buttons = array(
      'about' => 'Om seborroisk keratos',
      'approach' => 'Metoden',
      'areas' => 'Områden',
      'articles' => 'Varför er?',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$description_title = 'Vad är seborroisk keratos?';
$description_text = '<p class="p200">Seborroisk keratos, även känd som åldersvårtor, är godartade hudtillväxter som ofta uppstår hos äldre individer. Dessa vårtliknande hudförändringar varierar i färg från ljusbrun till mörkbrun och har en upphöjd, skrovlig yta. De är helt ofarliga men kan ibland orsaka kosmetisk oro eller irritation.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi behandling av seborroisk keratos. Med hjälp av moderna tekniker som CryoPen kan vi effektivt reducera eller ta bort seborroisk keratos, vilket leder till en förbättrad hudton och texturen på huden.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera seborroisk keratos',
            content: 'Vid din första konsultation hos AcneSpecialisten utförs en grundlig bedömning av dina seborroisk keratos. Våra erfarna hudterapeuter kommer att analysera hudtillväxterna och rekommendera en behandlingsplan som är anpassad efter dina behov och hudtillstånd.',

            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Fodelsemarken',
            url_title: 'Boka din kostnadsfria konsultation för seborroisk keratos idag'
      ),
      new TreatmentStep(
            title: 'Behandla seborroisk keratos',
            content: 'AcneSpecialisten erbjuder en rad behandlingsalternativ för seborroisk keratos, inklusive laserterapi och andra icke-invasiva metoder. Vår målsättning är att ge dig en skonsam, säker och effektiv behandling som minimerar hudförändringarna och förbättrar hudens utseende.',

            url_label: 'Se behandlingar för seborroisk keratos',
            url: 'hudproblem/hudforandringar/behandla-hudforandringar',
            url_title: 'Läs mer om våra behandlingar för seborroisk keratos'
      ),
);

$treatment_link = '<a href="hudproblem/hudforandringar/behandla-hudforandringar" title="Utforska effektiva behandlingar mot seborroisk keratos" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot seborroisk keratos</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Områden för seborroisk keratos',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Seborroisk keratos, även känd som åldersvårtor, är en typ av hudförändringar som ofta uppträder på områden som är utsatta för solen, såsom ansikte, bröst, rygg och armar. Dessa förändringar kännetecknas av en upphöjd, skrovlig yta och kan variera i färg från ljus till mörkbrun.</p>
      <p class="p200 mt-m">Medan seborroisk keratos vanligen är ofarliga, är det viktigt att övervaka för eventuella förändringar i storlek eller färg som kan signalera hudproblem. AcneSpecialisten erbjuder professionell konsultation och behandling för att säkert hantera seborroisk keratos, oavsett om det är av estetiska skäl eller hälsorelaterade orsaker.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp för mina seborroisk keratos?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för mina seborroisk keratos?',
            image_title: 'När ska jag söka hjälp för mina seborroisk keratos?',
            content: '<p class="p200">Även om seborroisk keratos oftast är ofarliga, är det viktigt att vara uppmärksam på förändringar i utseende. Om du märker att en seborroisk keratos förändrar färg, storlek, form, eller börjar blöda, är det viktigt att söka professionell bedömning.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina seborroisk keratos?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina seborroisk keratos?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina seborroisk keratos?',
            content: '<p class="p200">AcneSpecialisten erbjuder avancerade behandlingar för seborroisk keratos, inklusive laserterapi och kryoterapi, för att effektivt och säkert behandla dessa hudförändringar. Vårt team av erfarna hudspecialister arbetar för att ge dig en personligt anpassad behandlingsplan som passar dina specifika behov och hudtillstånd.</p>',
      ),
);

$headline01 = "01. Identifiera dina seborroisk keratos";

$service = new Service(
      title: 'Konsultation för seborroisk keratos',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid en konsultation hos AcneSpecialisten utförs en undersökning av dina seborroisk keratos. Våra hudexperter tar före-bilder och diskuterar med dig de mest lämpliga behandlingsalternativen, som kan inkludera Cryopen eller andra skonsamma metoder, för att skapa en individanpassad behandlingsplan som passar dina unika behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av seborroisk keratos',
      image_title: 'Konsultation för behandling av seborroisk keratos',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för seborroisk keratos',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla seborroisk keratos med CryoPen";

$services = array(
      new Service(
            title: 'Behandling av seborroisk keratos med CryoPen',
            duration: '20 min',
            price: '995 kr',
            content: 'Cryopen är en innovativ behandling som använder kryoterapi för att målinriktat och skonsamt behandla seborroisk keratos. Denna snabba och effektiva metod minimerar obehag och är utmärkt för att reducera synligheten av seborroisk keratos, vilket ger en jämnare och förbättrad hudton.',

            image_small: 'images/services/200x200/cryopen.webp',
            image_large: 'images/services/200x200/cryopen.webp',
            image_alt: 'Bild av Cryopen behandling för seborroisk keratos',
            image_title: 'Cryopen behandling för seborroisk keratos',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling av seborroisk keratos',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen för seborroisk keratos'
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

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generella frågor' => array(
            new Question(
                  title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
                  text: 'Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.'
            ),
            new Question(
                  title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
                  text: 'Under konsultationen kommer en av våra hudspecialister att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.'
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

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Hudförändringar',
            aka: 'gropar & Fläckar',
            image: 'images/problems/200x200/hudforandringar.webp',
            image_alt: 'Bild som visar hudforändringar',
            image_title: 'Hudförändringar',
            url: 'hudproblem/hudforandringar',
            url_title: 'Hudförändringar'
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
            label: 'Alma',
            image: 'bilder/logotyper/alma.svg',
            image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
            image_alt: 'Alma logotyp',
            url: '/varumarken/alma',
            url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
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
                        <section id="nav-buttons">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
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
                              <?php echo $treatment_link ?>

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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $review_url_title ?>" href="https://se.trustpilot.com/review/acnespecialisten.se"><?php echo $review_url_label ?></a>
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