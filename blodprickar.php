<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort hemangiom och smultronmärken | AcneSpecialisten';
$seo_description = 'Vi hjälper dig att ta bort hemangiom, blodprickar och smultronmärken. Boka tid för en gratis hudkonsultation hos AcneSpecialisten →';
$seo_keywords = 'röda blodprickar, blodprickar i huden, hemangiom vuxen, blodprickar på huden, smultronmärke vuxen, ta bort hemangiom, blodprickar, smultronmärke vuxna, hemangiom vuxen ta bort, röd prick på huden';
$seo_image = 'bilder/hudproblem/424x456/hudforandringar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Blodprickar', '/blodprickar.php'),
);

$image_small = 'bilder/hudproblem/358x274/hudforandringar.webp';
$image_large = 'bilder/hudproblem/424x456/hudforandringar.webp';
$image_title = 'Effektiv behandling av blodprickar';
$image_alt = 'Bild som illustrerar behandling av blodprickar';

$green_banner_content = new GreenBannerContent(
      title: 'Behandling av hemangiom (Blodprickar)',
      description: 'Röda blodprickar i huden, även kända som hemangiom eller smultronmärken, är små, röda hudförändringar som ofta uppkommer i vuxen ålder. I detta avsnitt förklarar vi hur blodprickar uppstår och de mest effektiva behandlingsmetoderna för att ta bort dem. På AcneSpecialisten använder vi avancerade tekniker för att säkert och effektivt behandla blodprickar, vilket ger dig en jämnare och klarare hudton.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen', 'Boka gratis Konsultation för blodprickar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_smultronmarke', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen', 'Boka gratis Konsultation för blodprickar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_smultronmarke', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Jordgubbsmärke',
                  url: null,
                  title: 'Jordgubbsmärke',
            ),
            new Link(
                  label: 'Smultronmärken',
                  url: null,
                  title: 'Smultronmärken',
            ),
      ]
);

$floating_box = '';

$description_title = 'Vad är blodprickar?';
$description_text = '<p class="p200">Blodprickar, jordgubbsmärken eller hemangiom som är den medicinska termen, syns som röda prickar på huden. De varierar lite i färg från klarröda till mörkt röda eller mer åt det lila hållet och ibland likna röda födelsemärken hos dig som är vuxen. De varierar i storlek. Det kan vara från ett par millimeter till en eller flera centimeter. De kan vara både släta och upphöjda.</p>
<p class="p200 mt-m">Blodprickar är godartade blodkärlstumörer. De uppkommer för att en större samling blodkärl bildats under det område på huden där märket finns. Det är särskilt vanligt hos mindre barn men förekommer även hos både tonåringar och vuxna. I regel är det ofarligt och försvinner ofta av sig självt, men det kan ta flera år. Därför behandlar man dem, men i synnerhet hos vuxna och inte mindre barn. Chansen är nämligen större att de försvinner av sig självt ju yngre man är.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Vid ditt första besök får du en konsultation med en av våra erfarna hudterapeuter, som noggrant identifierar och bedömer dina blodprickar. Vi diskuterar dina önskemål och skapar en individuell behandlingsplan anpassad för din specifika situation.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
            url_title: 'Boka din kostnadsfria konsultation för blodprickar idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder effektiva och skonsamma behandlingsalternativ för blodprickar, inklusive laser och andra moderna metoder. Våra behandlingar är anpassade för att ge optimala resultat samtidigt som din hudkomfort prioriteras.',

            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_smultronmarke',
            url_title: 'Läs mer om behandlingar för blodprickar'
      ),
);

$top_articles = array(
      'areas' => new Article(
            title: 'Hur går behandlingen till?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">I regel är smultronmärken ofarliga, men det kan vara bra att hålla koll på dem så att de inte växer eller förändras i färgen. Även om de inte är farliga kan de upplevas som estetiskt störande och därför vilja tas bort.</p>
      <p class="p200 mt-m">Att ta bort blodprickar eller fläckar är inte komplicerat. På AcneSpecialisten börjar vi med en kostnadsfri hudkonsultation för att säkerställa vilken typ av hudproblem du vill behandla. När det gäller blodprickar, smultronmärken, hemangiom eller angiom använder vi oss av två effektiva behandlingsmetoder: CryoPen och laser.</p>
      <p class="p200 mt-m">CryoPen-behandlingen innebär att man fryser ner det drabbade området för att effektivt reducera blodprickarna med hjälp av kyla. Det krävs oftast 1-3 behandlingar för att uppnå önskat resultat. Laserbehandling är ett annat alternativ som ofta räcker med endast ett besök för att uppnå de bästa resultaten.</p>
      <p class="p200 mt-m">Observera att vi på AcneSpecialisten endast kan behandla godartade hudförändringar. Vi har tyvärr inte möjlighet att utföra provtagningar och rekommenderar därför att du vänder dig till en läkare om du är osäker på huruvida din hudåkomma är ofarlig.</p>',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för blodprickar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en hudspecialist utförs en grundlig undersökning av dina blodprickar. Vi tar före-bilder och diskuterar lämpliga behandlingsalternativ för att skräddarsy en behandlingsplan som passar dina specifika behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av blodprickar',
      image_title: 'Konsultation för behandling av blodprickar',

      url_label: '',
      url: '',
      url_title: '',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för blodprickar',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'CryoPen',
            duration: '20 min',
            price: 'Från 1595 kr',
            content: 'Cryopen är en effektiv behandlingsmetod som använder extrem kyla för att målinriktat behandla och ta bort hemangiom och blodprickar. Behandlingen är snabb och ger minimalt obehag.',

            image_small: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_large: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_alt: 'Bild av Cryopen behandling för blodprickar',
            image_title: 'Cryopen behandling för blodprickar',

            url: '/cryopen.php',
            url_label: 'Läs mer om CryoPen',
            url_title: 'Läs mer om CryoPen',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling av blodprickar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_smultronmarke',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen för blodprickar'
      ),

      new Service(
            title: 'Laser',
            duration: '40 min',
            price: 'Från 1995 kr',
            content: 'Laserbehandling riktar högintensivt ljus mot hemangiom och blodprickar, vilket effektivt avlägsnar dem genom att omvandla ljuset till värme. Denna metod ger ofta omedelbara resultat',

            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Kvinna som får laserbehandling mot hudförändringar',
            image_title: 'Laserbehandling mot hudförändringar',

            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot hudförändringar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot hudförändringar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Moles&area=EMPTY',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot hudförändringar',
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat";



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
            aka: 'leverfläckar & födelsemärken',
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
            image: 'images/brands/infuzion.svg',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/blodprickar.php" />

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
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                        </section>
                        <section id="reviews">
                              <h2 class="big l10n">Omdömen</h2>
                              <?php
                              $reviews_narrow = true;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                              ?>
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