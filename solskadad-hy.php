<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla solskadad hud i ansiktet | AcneSpecialisten';
$seo_description = 'Allt om solskadad hy, orsaker, effektiva behandlingar och förebyggand. Få expertvägledning och skräddarsydda lösningar för att hantera och reparera solskadad hy';
$seo_keywords = 'solskadad hud ansikte, solskadad hud behandling, behandla solskadad hud, solskadad hud, solskadad hud kräm, solskadad hud bilder, melasma ansiktet';
$seo_image = 'bilder/hudproblem/424x456/solskadad-hy.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Solskadad Hy', '/solskadad-hy.php'),
);

$image_small = 'bilder/hudproblem/358x274/solskadad-hy.webp';
$image_large = 'bilder/hudproblem/424x456/solskadad-hy.webp';
$image_title = 'Visar en hud med solskadad hy';
$image_alt = 'Bild som illustrerar effekterna av solskadad hy';

$green_banner_content = new GreenBannerContent(
      title: 'Solskadad hud',
      description: 'Om du har märkt av tecken på solskadad hy, såsom solfläckar eller förändrad hudtextur, är du inte ensam. Vi på Acnespecialisten har djupgående kunskap om dessa utmaningar och erbjuder effektiva behandlingar. Upptäck hur vi kan skräddarsy en behandlingsplan som passar just dina behov, och boka en kostnadsfri konsultation idag för att påbörja din väg mot en återhämtad och friskare hud.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Pigmentfläckar',
                  url: 'pigmentflackar.php',
                  title: 'Pigmentfläckar'
            ),
            new Link(
                  label: 'Pigmenteringar',
                  url: null,
                  title: 'Pigmenteringar'
            ),
      ]
);

$floating_box = 'Vi behandlar solskadad hy effektivt';

$description_title = 'Vad är solskadad hud?';
$description_text = '<p class="p200">Solskadad hud kännetecknas ofta av mörka fläckar, ojämn hudton, <a class="b200 underline color-deep-sea-400" href="/melasma.php" title="Mer information om melasma">melasma</a> och ibland förtjockad eller läderartad textur. Detta är resultatet av långvarig och upprepad exponering för solens skadliga UV-strålar. Solskador på huden kan drabba människor i alla åldrar, men är vanligare hos äldre individer eller de som ofta vistas i starkt solsken.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi flera behandlingsalternativ för solskadad hy, inklusive ljusbaserade behandlingar, kemiska peelingar och mikrodermabrasion. Dessa metoder hjälper till att minska synliga tecken på solskador och förbättra hudens övergripande utseende och hälsa. Vi ger också råd om hur du kan skydda din hud från framtida solskador och upprätthålla en hälsosam och strålande hud.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Din resa mot en klarare hud börjar på AcneSpecialisten med en grundlig konsultation. Våra erfarna hudterapeuter undersöker noggrant din hud för att identifiera solskadad hy och skapar en behandlingsplan som är specialanpassad för dina behov och hudtyp.',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
            url_label: 'Boka en gratis konsultation',
            url_title: 'Boka din kostnadsfria konsultation om solskadad hy idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med en skräddarsydd behandlingsplan från AcneSpecialisten, får du tillgång till avancerade och effektiva metoder för att minska dina solskadad hy. Våra specialiserade behandlingar är utformade för att ge dig synliga resultat och återställa hudens naturliga utstrålning.',
            url: 'behandla-pigmentflackar.php',
            url_label: 'Utforska våra behandlingar',
            url_title: 'Upptäck våra unika och effektiva behandlingar för solskadad hy'
      ),
);

$treatment_link = '<a href="behandla-pigmentflackar.php" title="Utforska effektiva behandlingar mot solskadad hy" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';


$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår hudproblemet och varför?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Solskadad hud är vanligast på områden som ofta utsätts för sol, exempelvis ansikte, händer och armar. Skadorna manifesterar sig i form av pigmentförändringar som beror på överproduktion av melanin, hudens naturliga färgämne. Denna överproduktion är ofta ett resultat av långvarig UV-exponering från solen. Ytterligare faktorer såsom hudens åldrande bidrar också, då den över tid blir mindre effektiv på att reparera skador orsakade av solen.</p>
      <p class="p200 mt-m">För att förebygga solskadad hud är det kritiskt att använda solskydd med hög SPF, klä sig i solskyddande kläder och undvika solen när den är som starkast. Kontinuerlig hudvård och specifika behandlingar är också avgörande för att minska risken för solskador, samtidigt som de förbättrar hudens totala utseende och hälsa.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När är det dags att söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När är det dags att söka hjälp för solskadad hy?',
            image_title: 'När är det dags att söka hjälp för solskadad hy?',
            content: '<p class="p200">Solskadad hud är ett vanligt ålderstecken och kan orsaka estetiska bekymmer. Om du upplever att din solskadade hud påverkar ditt självförtroende eller om du är bekymrad över dess tillstånd, kan det vara lämpligt att söka professionell hjälp. Även om solskador i sig inte alltid är farliga, är det viktigt att få en korrekt bedömning för att utesluta andra hudproblem. En hudterapeut kan även erbjuda rådgivning kring effektiva behandlingar och förebyggande åtgärder.</p>',
      ),

      new Article(
            title: 'Varför välja AcneSpecialisten för behandling?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför välja AcneSpecialisten för behandling av solskadad hy?',
            image_title: 'Varför välja AcneSpecialisten för behandling av solskadad hy?',
            content: '<p class="p200">AcneSpecialisten utmärker sig som en föregångare inom hudvårdsbranschen, särskilt inom området för behandling av solskadad hud. Med vår omfattande erfarenhet och till gång till toppmoderna behandlingsmetoder, erbjuder vi individuellt anpassade behandlingsprogram för varje kund. Vår ambition är att inte bara adressera de synliga tecknen på solskador, utan också att förebygga framtida problem med huden.</p>
            <p class="p200 mt-m">Behandlingar hos AcneSpecialisten för solskadad hud baseras på en djupgående förståelse för hudens särskilda behov och användning av den senaste teknologin. Vi använder avancerade metoder och högkvalitativa produkter för att säkerställa optimala resultat. Med personligt anpassade behandlingsplaner och ett dedikerat tillvägagångssätt strävar vi efter att varje kund ska uppnå sina hudvårdsönskemål.</p>',
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
            name: 'Pigmentfläckar',
            aka: 'pigmenteringar',
            image: 'bilder/hudproblem/200x200/pigmentflackar.webp',
            image_alt: 'Pigmentfläckar i ansiktet',
            image_title: 'Läs mer om pigmentfläckar',
            url: 'pigmentflackar.php',
            url_title: 'Pigmentfläckar'
      ),
);

$brands = array(
      new Brand(
            label: 'Powerlite Photonova',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite-photonova/',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
      ),
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
            label: 'Alma',
            image: 'images/brands/alma.svg',
            image_alt: 'Alma Brand Logo',
            image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/solskadad-hy.php" />

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