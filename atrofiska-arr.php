<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Atrofiska ärr - Gropar i huden | AcneSpecialisten';
$seo_description = 'Läs mer om atrofiska ärr och effektiva behandlingsmetoder. Vi på AcneSpecialisten har behandlat acneärr i 30 år. Boka tid för en gratis hudkonsultation →';
$seo_keywords = 'atrofiska ärr, atrofisk ärrbildning, acneärr gropar, gropar i huden';
$seo_image = 'bilder/hudproblem/424x456/aknearr.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Atrofiska Ärr', '/atrofiska-arr.php'),
);

$image_small = 'bilder/hudproblem/358x274/aknearr.webp';
$image_large = 'bilder/hudproblem/424x456/aknearr.webp';
$image_title = 'Visar hud med atrofiska ärr';
$image_alt = 'Bild som illustrerar atrofiska ärr på huden';


$green_banner_content = new GreenBannerContent(
      title: 'Atrofiska ärr',
      description: 'Atrofiska ärr är en form av ärrbildning som ser ut som gropar eller fördjupningar i huden, vilket är en vanlig följd av akne. Denna typ av ärrbildning sker när huden inte lyckas producera tillräckligt med kollagen vid läkningen från finnar, vilket resulterar i att området sjunker inåt istället för att bilda en jämn yta.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Gropar i huden',
                  url: null,
                  title: null,
            ),
      ]
);

$floating_box = 'Information om atrofiska ärr';

$description_title = 'Vad är atrofisk ärrbildning?';
$description_text = '<p class="p200">Atrofiska ärr kännetecknas av fördjupningar och <a class="b200 underline color-deep-sea-400" href="/acnearr.php" title="Mer information om gropar i huden">gropar i huden</a> och är ofta resultatet från akne. Dessa ärr uppstår när huden inte kan återskapa tillräckligt med kollagen under läkningsprocessen efter en akneutbrott. Detta leder till att ärrvävnad bildas under hudens normala ytnivå. Vanliga typer av atrofiska ärr inkluderar:</p>

<ul><li>Ice Pick ärr - Små, smala djupa stickhål i huden</li>
<li>Boxcar ärr - Fyrkantiga, breda, boxliknande gropar </li>
<li>Rolling ärr - Vågliknande skålformade fördjupningar</li></ul>

<p class="p200 mt-m">Atrofiska ärr är särskilt vanliga efter inflammerad akne, men kan också uppstå efter t.ex vattkoppor, kirurgiska ingrepp eller andra hudtrauman.</p>

<p class="p200 mt-m">På AcneSpecialisten erbjuder vi främst två olika behandlingsmetoder mot atrofiska ärr, laser och mikroneedling. Dessa behandlingar är utformade för att stimulera hudens kollagenproduktion och därmed minska ärrvävnadens synlighet. Våra hudterapeuter skräddarsyr varje behandling efter dina specifika behov för att uppnå bästa möjliga resultat och hjälper dig att återställa en jämnare hudtextur och förbättrat utseende.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten får du personlig hjälp från en erfaren hudterapeut med expertis på atrofiska ärr. Vi genomför en noggrann analys av dina ärr och tar fram en skräddarsydd behandlingsplan anpassad efter just dina behov och din ärrtyp.',
            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            url_title: 'Boka din kostnadsfria konsultation för atrofiska ärr'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder specialiserade behandlingar för atrofiska ärr som är både effektiva och skonsamma. Med vår expertis och målinriktade metoder arbetar vi för att förbättra hudens struktur och utseende, så att du kan känna dig säker och nöjd med ditt hudtillstånd.',
            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_AcneScars',
            url_title: 'Upptäck våra anpassade behandlingar för atrofiska ärr'
      ),
);

$treatment_link = '<a href="behandla-acnearr.php" title="Utforska effektiva behandlingar för atrofiska ärr" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Varför uppstår atrofiska ärr?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Atrofiska ärr uppstår när hudens läkningsprocess störs och inte producerar tillräckligt med kollagen för att fylla ut det skadade området. Detta kan hända av flera skäl, inklusive svår inflammation, infektion eller omfattande hudskador. När huden skadas, triggas en inflammationsprocess som syftar till att reparera vävnaden.</p>
      <p class="p200 mt-m">Om denna process avbryts eller är ineffektiv, blir kollagenproduktionen otillräcklig, vilket resulterar i fördjupningar eller gropar i huden. Personer med svår eller långvarig acne är särskilt benägna att utveckla atrofiska ärr, eftersom den omfattande inflammationen kan leda till skador på huden och underliggande vävnad. Genetiska faktorer kan också spela en roll i hur väl huden kan läka och producera kollagen, vilket påverkar risken för att utveckla atrofiska ärr.</p>',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Hudkonsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid en personlig konsultation med en specialist på atrofiska ärr utförs en noggrann undersökning av dina ärr. Vi tar före-bilder och diskuterar dina mål. En skräddarsydd behandlingsplan rekommenderas baserat på dina individuella behov och ärrtyp.',
      image_small: 'bilder/behandlingar/200x200/konsultation.webp',
      image_large: 'bilder/behandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för acneärrbehandling',
      image_title: 'Konsultation för acneärrbehandling',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
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
            title: 'Laser mot atrofika ärr',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserbehandling är en effektiv metod för att ta bort acneärr och gropar i ansiktet. Genom att använda koncentrerade ljusstrålar stimulerar behandlingen kollagenproduktionen och avlägsnar skadade hudceller. Detta jämnar ut hudens textur och minskar synligheten av ärr',
            image_small: 'bilder/behandlingar/200x200/laser.webp',
            image_large: 'bilder/behandlingar/200x200/laser.webp',
            image_alt: 'Bild av en laserbehandling mot acneärr',
            image_title: 'Laserbehandling mot acneärr',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laser mot acneärr',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot acneärr',
            url: '/laser-acnearr.php',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot acneärr',
      ),

      new Service(
            title: 'Microneedling mot atrofiska ärr',
            duration: '60 min',
            price: '2595 kr',
            content: 'Microneedling är en effektiv behandling för atrofiska ärr. Genom att använda små, fina nålar skapas mikroskador i huden, vilket stimulerar kollagenproduktionen och hudens naturliga läkningsprocess. Detta resulterar i en jämnare hudtextur och minskad synlighet av atrofiska ärr.',
            image_small: 'bilder/behandlingar/200x200/microneedling.webp',
            image_large: 'bilder/behandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling mot acneärr',
            image_title: 'Microneedling mot acneärr',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot acneärr',
            booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=Problem_AcneScars',
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
                  duration: '3 månader',
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
                  duration: '2 månader',
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
                  duration: '4 månader',
            )
      ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat";



$faq_categories = array(
      'Generella frågor' => array(
            new Question(
                  title: 'Kan atrofiska ärr försvinna naturligt över tid?',
                  text: 'Atrofiska ärr kan blekna något över tid, men de försvinner sällan helt utan behandling. Gradvis kan vissa ytliga ärr bli mindre märkbara, men djupare ärr kräver ofta specifika behandlingsmetoder för att signifikant minska deras utseende.'
            ),
            new Question(
                  title: 'Vilka är de mest effektiva behandlingsmetoderna för atrofiska ärr?',
                  text: 'De mest effektiva behandlingsmetoderna för atrofiska ärr inkluderar laser och mikroneedling. Dessa behandlingar stimulerar hudens naturliga läkningsprocess och kollagenproduktion för att minska ärrvävnadens djup och förbättra hudtexturen.'
            ),
            new Question(
                  title: 'Hur kan laserbehandlingar minska utseendet på atrofiska ärr?',
                  text: 'Laserbehandlingar minskar utseendet på atrofiska ärr genom att rikta in sig på och bryta ner ärrvävnaden samtidigt som de stimulerar hudens kollagenproduktion. Detta kan hjälpa till att jämna ut huden och fylla ut de fördjupningar som orsakas av ärr, vilket gör dem mindre märkbara.'
            ),
            new Question(
                  title: 'Är dermaroller en effektiv behandling för atrofiska ärr?',
                  text: 'Nej, vi rekommenderar inte dermaroller för hemmabruk på grund av dess tendens att skapa slitande skador i huden, vilket kan vara skadligt och kontraproduktivt. Dessutom är nåldjupet ofta för lågt för att ge effektiva resultat. Istället rekommenderar vi användningen av microneedling med en modern penna som skapar raka, kontrollerade kanaler i huden. Denna metod, utförd av en utbildad hudterapeut, säkerställer en säker och steril behandling och är betydligt mer effektiv för att minska utseendet på atrofiska ärr genom att stimulera hudens kollagenproduktion på ett kontrollerat sätt.'
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
            name: 'Acneärr',
            aka: 'gropar & fläckar',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/atrofiska-arr.php" />

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