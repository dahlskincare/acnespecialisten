<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Komedoner - Orsaker, Behandling och Förebyggande';
$seo_description = 'Upptäck allt om komedoner, från vad de är till hur man effektivt behandlar och förebygger dem. Få anpassade lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'komedoner akne';
$seo_image = 'bilder/hudproblem/424x456/pormaskar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem'),
      new PathSegment('Komedoner', '/komedoner.php'),
);

$image_small = 'bilder/hudproblem/424x324/pormaskar.webp';
$image_large = 'bilder/hudproblem/424x456/pormaskar.webp';
$image_alt = 'Bild som illustrerar komedoner på huden';
$image_title = 'Effektiv behandling av komedoner';

$green_banner_content = new GreenBannerContent(
      title: 'Komedoner',
      description: 'I denna sektion utforskar vi vad komedoner är, varför de uppstår och hur Acnespecialisten kan bistå dig med effektiv behandling. Vi diskuterar de bakomliggande orsakerna till komedoner och hur vi kan hjälpa dig genom hela behandlingsprocessen för att uppnå en klarare och friskare hud.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones', 'Boka gratis Konsultation för Komedoner'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones', 'Boka gratis Konsultation för Komedoner'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  url: 'pormaskar.php',
                  label: 'Pormaskar',
                  title: 'Allt du behöver veta om pormaskar'
            ),
            new Link(
                  url: 'stora-porer.php',
                  label: 'Stora porer',
                  title: 'Utforska orsaker, symptom och behandlingar av stora porer'
            ),
      ]
);

$floating_box = 'Vi behandlar komedoner effektivt';

$description_title = 'Vad är Komedoner?';
$description_text = '<p class="p200">Komedoner uppstår när porer täpps till av talg och döda hudceller. De kan manifestera sig som svarta eller vita prickar på huden, ofta i områden som ansiktet, näsan och pannan. Komedoner kan vara ett tecken på oren hud och kan leda till ytterligare hudproblem om de inte behandlas korrekt.</p>
<p class="p200 mt-m">Hos AcneSpecialisten erbjuder vi effektiva behandlingar för att hantera komedoner, inklusive djuprengöring och specifika ansiktsbehandlingar. Våra behandlingsmetoder är utformade för att noggrant rengöra porerna och ta bort ansamlingar av talg och hudceller. Genom att kombinera professionella behandlingar med rätt hemmavårdsrutiner, strävar vi efter att ge dig en klarare och friskare hud med färre synliga komedoner.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten blir du matchad med en erfaren hudterapeut som hjälper dig att noggrant identifiera dina komedoner. Tillsammans utarbetar ni en skräddarsydd behandlingsplan för att specifikt adressera och hantera dina komedoner.',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            url_label: 'Boka konsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vår behandling av komedoner involverar skonsamma men effektiva metoder för portömning, anpassade efter dina specifika hudbehov. Målet är att säkert och effektivt eliminera komedoner och förbättra hudens utseende.',
            url: '/hudbehandlingar/pormaskar/',
            url_label: 'Se portömning',
            url_title: 'Utforska våra skräddarsydda portömning'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'För att förhindra nya komedoner, hjälper vi dig att etablera en anpassad hudvårdsrutin. Vi väljer ut produkter som är idealiska för din hudtyp för att effektivt förebygga komedoner och upprätthålla en hälsosam hudbalans.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            url_label: 'Se produkter',
            url_title: 'Hitta de bästa produkterna för att förebygga komedoner'
      ),
);
$treatment_link = '<a href="/hudbehandlingar/pormaskar/" title="Utforska effektiv portömning" class="mt-xl button b200 outline expand auto-width">Läs mer om vår portömning</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår komedoner?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Att förstå uppkomsten av komedoner är viktigt för att effektivt behandla och förebygga dem. En noggrann hudanalys är en avgörande del av konsultationen hos AcneSpecialisten. Under denna initiala bedömning identifierar vi områden med komedoner och analyserar orsakerna bakom dessa hudproblem. Denna förståelse är central för att utforma en individuellt anpassad behandlingsplan för dina specifika hudvårdsbehov.</p>
      <p class="p200 mt-m">Komedoner, ofta kända som pormaskar, uppstår vanligtvis i områden med ökad talgproduktion, såsom ansiktet, näsan och pannan. De orsakas av en kombination av överproduktion av hudolja och ansamling av döda hudceller som blockerar porerna. Komedoner och akne har mycket gemensamt och det är därför vanligt att båda problemen uppstår samtidigt. Våra hudterapeuter ger dig vägledning för att förbereda och vårda din hud inför och efter behandlingar som syftar till att minska komedoner, såsom Dermapen, för att säkerställa en effektiv och trygg behandlingsupplevelse.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina komedoner?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina komedoner?',
            image_title: 'När ska jag söka hjälp med mina komedoner?',
            content: '<p class="p200">komedoner är en av de mest förekommande hudåkommorna och kan drabba personer i alla åldrar. Även om de i många fall är ofarliga och mestadels en estetisk bekymmer, kan de påverka självkänslan och orsaka obehag. Om du märker att dina komedoner börjar påverka ditt välbefinnande, eller om du har provat olika produkter och hemmabehandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att komma ihåg att alla kan söka hjälp, oavsett om du har enstaka komedoner eller ett mer utbrett problem. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård.</p>
            <p class="p200 mt-m">Hos en hudspecialist kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just ditt hudproblem. En expert kan analysera din hudtyp, diskutera möjliga orsaker till dina komedoner och rekommendera den mest effektiva behandlingsmetoden för dig. Detta kan inkludera allt från djuprengöring och portömning till mer avancerade hudvårdsprodukter. Så, om du känner att dina komedoner har blivit en belastning eller om du helt enkelt vill ha en problemfri hy, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot bättre hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten?',
            image_title: 'Varför ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du är ute efter en effektiv och långsiktig lösning på dina komedoner, är AcneSpecialisten det självklara valet. Vi har över 30 års erfarenhet inom hudvård och en specialisering i att behandla komedoner. Oavsett om du har enstaka komedoner eller en mer utbredd problematik, kan vi erbjuda en skräddarsydd lösning som passar just dig.</p>
            <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att du ska få bästa möjliga resultat. Vårt team av hudterapeuter står redo att erbjuda en individuellt anpassad behandlingsplan och att stötta dig genom hela processen. Med regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att du får en långvarig förbättring.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för dina komedoner. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig att uppnå och bibehålla en klar och frisk hud. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val för behandling av komedoner.</p>',
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
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Pormaskar',
            aka: 'Vita & Svarta pormaskar',
            image: 'bilder/hudproblem/200x200/pormaskar.webp',
            image_alt: 'Bild som skildrar pormaskar',
            image_title: 'Pormaskar - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'pormaskar.php',
            url_title: 'Pormaskar'
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