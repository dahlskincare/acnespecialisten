<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Melasma | AcneSpecialisten';
$seo_description = 'Vi hjälper dig att behandla oönskade melasma. Läs mer och boka tid för behandling eller en gratis konsultation i dag!';
$seo_keywords = 'melasma behandling, behandling melasma, melasma, melasma ansikte';
$seo_image = 'bilder/hudproblem/424x456/melasma.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Melasma', '/melasma.php'),
);

$image_small = 'bilder/hudproblem/358x274/melasma.webp';
$image_large = 'bilder/hudproblem/424x456/melasma.webp';
$image_title = 'Visar en hud med melasma';
$image_alt = 'Bild som visar melasma på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Melasma',
      description: 'Har du märkt mörkare, ojämna hudförändringar i ansiktet som blivit mer framträdande under graviditet, klimakteriet eller efter långvarig solexponering? Melasma är en hormonellt betingad hyperpigmentering som ofta visar sig på kinder, panna, haka eller överläpp. Våra hudexperter förstår dessa utmaningar och erbjuder beprövade behandlingsmetoder för att minska synligheten av melasma och återställa en jämnare hudton. Boka en gratis konsultation idag och ta det första steget mot en klarare hud.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation för melasma'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation för melasma'),
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
                  label: 'Kloasma, Gravidmask',
                  url: null,
                  title: 'Kloasma, Gravidmask'
            ),
      ]
);

$floating_box = 'Vi behandlar melasma effektivt';

$description_title = 'Fakta';
$description_text = '<p class="p200">Melasma, även kallat kloasma eller “graviditetsmask”, är en hormonellt betingad hyperpigmentering som ofta visar sig som mörkare, oregelbundna och symmetriska fläckar i ansiktet. Vanliga områden där melasma uppstår inkluderar kinder, panna, näsrygg, haka och överläpp. Tillståndet är mer förekommande hos kvinnor, särskilt under graviditet och klimakteriet, men kan även triggas av hormonella preventivmedel och östrogenbehandlingar. Utöver hormonella faktorer spelar UV-exponering en betydande roll – långvarig solexponering kan både utlösa och förvärra melasma.</p>
      
      <p class="p200 mt-m">Hos AcneSpecialisten erbjuder vi individanpassade behandlingsalternativ för att minska synligheten av melasma och jämna ut hudtonen. Vi arbetar bland annat med laser och kemiska peelingar för att stimulera cellförnyelse och reducera oönskade pigmentfläckar. Dessutom ger vi råd om hur du bäst skyddar dig mot solen, samt tips på hudvårdsrutiner och livsstilsfaktorer som kan bidra till att förebygga och underhålla en jämn, frisk och lysterrik hud.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Din resa mot en jämnare hud börjar hos AcneSpecialisten med en noggrann hudanalys. Våra erfarna hudterapeuter bedömer omfattningen av din melasma och lägger grunden för en individanpassad behandlingsplan.',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
            url_label: 'Boka en kostnadsfri konsultation',
            url_title: 'Boka din kostnadsfria konsultation för melasma idag',
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Utifrån din diagnos erbjuder AcneSpecialisten avancerade, skräddarsydda metoder för att minska hyperpigmentering och ojämn hudton. Vårt mål är att ge dig en jämnare, klarare och mer välmående hud.',
            url: 'behandla-pigmentflackar.php',
            url_label: 'Upptäck våra behandlingsalternativ',
            url_title: 'Upptäck våra unika och effektiva behandlingar för melasma',
      ),
);

$treatment_link = '<a href="behandla-pigmentflackar.php" title="Utforska effektiva behandlingar mot melasma" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlinga</a>';


$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår hudproblemet och varför?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Melasma uppträder oftast i ansiktet, exempelvis på kinder, panna, näsa och överläpp, eftersom dessa områden regelbundet exponeras för solen. Även om det är mindre vanligt kan melasma ibland förekomma på andra solutsatta kroppsdelar, såsom underarmar. Hyperpigmenteringen orsakas av en ökad melaninproduktion, ofta utlöst av långvarig UV-exponering. Hormoner spelar också en roll, vilket gör att graviditet, hormonella preventivmedel eller klimakteriet kan påverka uppkomsten. Med stigande ålder försämras dessutom hudens förmåga att återhämta sig från solskador, vilket ytterligare kan bidra till utvecklingen av melasma.</p>',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för melasma',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under vår konsultation utför vi en detaljerad utvärdering av din hy. Våra specialister analyserar hudtillståndet, tar före-bilder och diskuterar de mest effektiva behandlingsalternativen för att skapa en behandlingsplan som är anpassad efter dina behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av hudflikar',
      image_title: 'Konsultation för behandling av hudflikar',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för melasma',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Kemisk peeling mot melasma',
            duration: '40 min',
            price: '1995 kr',
            content: 'Kemisk peeling är en effektiv metod som genom att använda en speciellt framtagen syra för att exfoliera huden, främjar kemisk peeling cellförnyelse och jämnar ut hudtonen.',

            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Man som får kemisk peeling',
            image_title: 'Kemisk peeling behandling',

            url_label: 'Läs mer om kemisk peeling',
            url: 'kemisk-peeling.php',
            url_title: 'Läs mer om kemisk peeling',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot melasma',

            booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_Melasma&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot melasma',
      ),
      new Service(
            title: 'Laser mot melasma',
            duration: '50 min',
            price: '2595 kr',
            content: 'Laserbehandling mot melasma är en effektiv metod där kontrollerade laserpulser används för att minska pigmentförändringar och jämna ut hudtonen. Genom att rikta in sig på melasmadrabbade områden stimuleras cellförnyelsen, vilket ger en klarare och jämnare hud.',

            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Kvinna som får laserbehandling mot melasma',
            image_title: 'Laserbehandling mot melasma',

            url_label: 'Läs mer om laser mot melasma',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Läs mer om laser mot melasma',

            consultation_url: 'https://boka.acnespecialisten.se/?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Harmony',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot melasma',

            booking_url: 'https://boka.acnespecialisten.se/?flow=laserProblem&skipable_problem=Problem_Melasma&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för laserbehandling mot melasma',
      ),
);      

$articles = array(
      new Article(
            title: 'När bör du söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När bör du söka hjälp för Melasma?',
            image_title: 'När bör du söka hjälp för Melasma?',
            content: '<p class="p200">Melasma är i sig inte skadligt, men kan påverka ditt självförtroende och välbefinnande. Om du upplever att de mörka pigmenteringarna i ansiktet gör dig obekväm eller om du är osäker på om det rör sig om melasma eller ett annat hudtillstånd, är det klokt att söka professionell rådgivning. En noggrann bedömning av en hudterapeut kan hjälpa dig att hitta rätt behandlingsstrategi.</p>',
      ),

      new Article(
            title: 'Varför AcneSpecialisten är ditt bästa val för behandling?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför välja AcneSpecialisten för din behandling?',
            image_title: 'Varför AcneSpecialisten är ditt bästa val för behandling av Melasma',
            content: '<p class="p200">AcneSpecialisten har lång erfarenhet av att behandla melasma, med fokus på individuella lösningar baserade på din unika hudtyp och situation. Genom vetenskapligt förankrade metoder, avancerad teknik och högkvalitativa produkter arbetar vi för att minska synligheten av melasma och stärka din hudhälsa på lång sikt. Vårt mål är inte bara att ta itu med befintliga pigmentförändringar, utan också att förebygga framtida problem och hjälpa dig att återfå en jämnare, mer balanserad hudton.</p>',
      ),
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

      <link rel="canonical" href="https://www.acnespecialisten.se/melasma.php" />

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