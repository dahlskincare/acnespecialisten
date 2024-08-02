<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort skintags, fibrom och hudflikar | AcneSpecialisten';
$seo_description = 'Vi behandlar och avlägsnar oönskade hudflikar och skintags. Effektiv behandling tar bort fibrom och hudflikar. Boka gratis hudkonsultation hos oss!';
$seo_keywords = 'hudflikar, behandling av hudflikar, hudförändringar, jämna ut hudton, ta bort hudflikar, hudvård, Acnespecialisten, effektiv behandling, hudhälsa';
$seo_image = 'bilder/hudproblem/424x456/hudforandringar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Hudflikar', '/hudflikar.php'),
);

$image_small = 'bilder/hudproblem/358x274/hudforandringar.webp';
$image_large = 'bilder/hudproblem/424x456/hudforandringar.webp';
$image_title = 'Skonsam och effektiv behandling av hudflikar';
$image_alt = 'Bild som illustrerar behandling av hudflikar';

$green_banner_content = new GreenBannerContent(
      title: 'Behandling av hudflikar',
      description: 'Hudflikar är små utväxter på huden som ofta förekommer i hudveck eller områden med friktion. På Acnespecialisten förklarar vi hur hudflikar kan behandlas effektivt. Vi använder skonsamma och avancerade tekniker för att säkert ta bort hudflikar, vilket hjälper till att förbättra hudens utseende och textur.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen', 'Boka gratis Konsultation för hudflikar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen', 'Boka gratis Konsultation för hudflikar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Skintags',
                  url: null,
                  title: 'Skintags',
            ),
      ]
);

$floating_box = 'Vi behandlar hudflikar effektivt och skonsamt';

$description_title = 'Vad är hudflikar?';
$description_text = '<p class="p200">Hudflikar, även kända som fibrom, skin tags (skinnflik på svenska), är små, mjuka hud utväxter som ofta sitter på en tunn stjälk. De är vanligtvis hudfärgade eller något mörkare och kan förekomma på olika delar av kroppen, men är vanligast i områden där huden veckar sig eller gnider mot sig själv, såsom på halsen, under armarna, i armhålorna, i ljumskarna, på ögonlocken och under brösten. </p>
<p class="p200 mt-m">Hudflikar är i allmänhet små, vanligtvis mellan några millimeter och upp till två centimeter i storlek. De är godartade, vilket innebär att de inte är cancerogena och sällan orsakar hälsoproblem. Trots detta kan de ibland vara irriterande eller oattraktiva, vilket kan leda till att människor vill ta bort dem av kosmetiska skäl.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Vid din första konsultation hos AcneSpecialisten utförs en grundlig bedömning av dina hudflikar för att avgöra den mest lämpliga behandlingsmetoden. Vi diskuterar dina behov och förväntningar för att utforma en personlig behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags',
            url_title: 'Boka din kostnadsfria konsultation för hudflikar idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder olika behandlingsalternativ för effektiv borttagning av hudflikar. Våra metoder är anpassade efter dina specifika behov och hudtyp, och syftar till att ge en smärtfri upplevelse med minimal återhämtningsperiod.',

            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags',
            url_title: 'Läs mer om våra behandlingar för hudflikar'
      ),
);

$top_articles = array(
      'areas' => new Article(
            title: 'Varför får man hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Orsaken till hudflikar är inte helt klarlagd, men flera faktorer tros bidra till deras uppkomst. En av de vanligaste teorierna är friktion, då de ofta uppträder i områden där huden gnider mot sig själv eller kläder. Genetik kan också spela en roll, eftersom de ibland förekommer i familjer. Hormonella förändringar, såsom de som uppstår under graviditet, kan också öka risken för hudflikar. </p>
      <p class="p200 mt-m">Diabetes är andra faktorer som har kopplats till en högre förekomst av hudflikar. Personer med metaboliskt syndrom, vilket inkluderar högt blodtryck, högt blodsocker och abnorma kolesterolnivåer kan också leda till att fler hudförändringar uppstår. Slutligen kan ålder vara en faktor och blir vanligare med stigande ålder.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När är det dags att söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När är det dags att söka hjälp för hudflikar?',
            image_title: 'När är det dags att söka hjälp för hudflikar?',
            content: '<p class="p200">Hudflikar eller hudfliker är vanligtvis ofarliga men bör övervakas. Om du upplever irritation, obehag eller märker förändringar i storlek, form eller färg, är det lämpligt att konsultera en specialist.</p>',
      ),

      new Article(
            title: 'Fördelar med att besöka AcneSpecialisten',
            image_small: null,
            image_large: null,
            image_alt: 'Fördelar med att besöka AcneSpecialisten för hudflikar',
            image_title: 'Fördelar med att besöka AcneSpecialisten för hudflikar',
            content: '<p class="p200">AcneSpecialisten är experter på att behandla hudflikar, och erbjuder skräddarsydda lösningar. Våra behandlingar är både säkra och effektiva, och vi använder de senaste teknikerna för att uppnå bästa möjliga resultat. Vårt team av specialiserade hudterapeuter tillhandahåller professionell rådgivning och behandling, och hjälper dig att uppnå en slätare och jämnare hudton.</p>',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för hudflikar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under vår konsultation utför vi en detaljerad utvärdering av dina hudflikar. Våra specialister analyserar hudtillståndet, tar före-bilder och diskuterar de mest effektiva behandlingsalternativen, inklusive användning av Cryopen eller andra metoder, för att skapa en behandlingsplan som är anpassad efter dina behov och önskemål.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av hudflikar',
      image_title: 'Konsultation för behandling av hudflikar',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudflikar',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Behandling av hudflikar med CryoPen',
            duration: '20 min',
            price: '995 kr',
            content: 'Med Cryopen-tekniken erbjuder vi en snabb och skonsam behandling för att effektivt reducera och ta bort hudflikar. Cryopen använder extrem kyla för att noggrant och säkert behandla det drabbade området, vilket ger en snabb återhämtning och minimalt obehag.',

            image_small: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_large: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_alt: 'Bild av Cryopen behandling för hudflikar',
            image_title: 'Cryopen behandling för hudflikar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling av hudflikar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen för hudflikar'
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
                  title: 'Hur ser hudflikar ut jämfört med andra vårtor eller fibrom? Finns det några specifika kännetecken?',
                  text: 'Hudflikar är små, mjuka och ofta hudfärgade, medan vårtor kan vara hårdare och ha en ojämn yta. Fibrom är vanligtvis större och hårdare än hudflikar. Hudflikar sitter ofta på en tunn stjälk, vilket skiljer dem från andra utväxter.'
            ),

            new Question(
                  title: 'Kan hudflikar vara farliga eller leda till komplikationer om de inte behandlas?',
                  text: 'Hudflikar är i allmänhet godartade och leder sällan till komplikationer. Dock kan de ibland bli irriterade, blöda eller orsaka obehag om de gnids mot kläder eller smycken. I sådana fall kan borttagning övervägas.'
            ),

            new Question(
                  title: 'Vilka medicinska behandlingar finns tillgängliga för att ta bort hudflikar, och när bör man söka professionell hjälp?',
                  text: 'Medicinska behandlingar för borttagning av hudflikar inkluderar kryoterapi och laserbehandling, . Man bör söka professionell hjälp om hudfliken är stor, sitter på ett känsligt område eller om den orsakar obehag.'
            ),

            new Question(
                  title: 'Finns det några specifika åtgärder man kan vidta för att förhindra uppkomsten av hudflikar?',
                  text: 'För att minska risken för att utveckla hudflikar kan man försöka minska friktionen på huden genom att bära lösa kläder och hålla huden ren och torr. Att upprätthålla en hälsosam vikt och kontrollera blodsockernivåer kan också vara förebyggande åtgärder.'
            ),

            new Question(
                  title: 'Vilka är de mest effektiva metoderna för att ta bort hudflikar på halsen och andra synliga områden?',
                  text: 'De mest effektiva metoderna för att ta bort hudflikar på halsen och andra synliga områden inkluderar kryoterapi och laserbehandling . Det är viktigt att behandlingen utförs av en hudterapeut för att minimera risken för ärrbildning och infektion.'
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
            label: 'Powerlite Photonova',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite-photonova',
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
            url: 'varumarken/alma/',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/hudflikar.php" />

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