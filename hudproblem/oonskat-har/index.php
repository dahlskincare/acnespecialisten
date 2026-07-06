<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort oönskat hår! Läs om symptom, orsak och behandling';
$seo_description = 'Här hittar du allt om oönskat hår och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'ta bort oönskat hår, oönskat hår i ansiktet, ta bort oönskat hår i ansiktet, oönskat hår';
$seo_image = '/bilder/hudproblem/424x456/oonskat-har.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Oönskat Hår', '/hudproblem/oonskat-har/'),
);

$image_small = 'bilder/hudproblem/424x324/oonskat-har.webp';
$image_large = 'bilder/hudproblem/424x456/oonskat-har.webp';
$image_title = 'Visar en hud med oönskat hår';
$image_alt = 'Bild som illustrerar hur oönskat hår ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Oönskat Hår',
      description: 'Oönskat hår kan påverka olika delar av kroppen och ansiktet. Denna sida utforskar de underliggande orsakerna till oönskad hårväxt och de olika metoder som finns tillgängliga för hårborttagning.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=laserHair', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=laserHair', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är oönskat hår?',
            content: '<p class="p200">Oönskat hår är hårväxt som du själv upplever som onödig eller icke önskvärd. Mängden kan vara helt normal eller överdriven. Den överdrivna formen kallas kliniskt för hirsutism. Alla människor har kroppshår, men när mängden, tjockleken, längden eller placeringen avviker från det du uppfattar som normalt blir håret "oönskat". Det kan vara allt från mjukt, fjunigt och nästan osynligt till grovt, mörkt och framträdande, och växa där hår är väntat, som på ben, armar och underarmar, eller där det sällan förväntas: i ansiktet, på ryggen eller på bröstet.</p>',
            extended_content: '<p class="p200 mt-xl">Uppfattningen om vad som är oönskat hår varierar kraftigt från person till person. Därför finns det också många metoder att ta bort håret med, från rakning och vaxning till permanenta lösningar som laser.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man oönskat hår?',
            content: '<p class="p200">Oönskat hår uppstår framför allt av två skäl: hormoner och gener. Hårväxten styrs till stor del av hormoner. Stiger nivåerna, till exempel vid PCOS, kan håret börja växa på de delar av kroppen där män vanligtvis har hår, som ansiktet och bröstet. Generna verkar på ett annat sätt: vissa ärver helt enkelt tjockare och mörkare kroppshår. Det betyder inte nödvändigtvis att de har en hormonell obalans, utan snarare en genetisk benägenhet för sådan hårväxt.</p>',
            extended_content: '<p class="p200 mt-xl">Förändringar i hormonnivåerna, som kan inträffa under graviditet, klimakteriet, PCOS eller till följd av vissa mediciner, kan också leda till tillfällig överdriven hårväxt. I andra fall ligger sjukdomar i binjurarna eller hypofysen, som producerar hormoner, bakom. Utöver detta kan vissa steroider, antikonvulsiva medel och vissa mediciner mot högt blodtryck förorsaka överdriven hårväxt som en biverkning. Även vissa kosmetiska produkter, särskilt de som innehåller hormoner, kan påverka hårväxten.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får oönskat hår?',
            content: '<p class="p200">Har dina föräldrar eller nära släktingar kraftig hårväxt är risken större att du också får det, eftersom genetiken är en av de främsta orsakerna. Hormonerna är den andra. Kvinnor kan få hår där det annars mest växer på män: i ansiktet, på bröstet och på ryggen. Det händer till exempel i samband med graviditet, klimakteriet eller medicinsk behandling. När östrogennivåerna sjunker kan påverkan av manliga hormoner bli mer framträdande. Och det spelar ingen roll vem du är: oönskat hår kan drabba alla, oavsett kön och ålder.</p>',
            extended_content: '<p class="p200 mt-xl">Män kan också påverkas. Till exempel kan män som tar vissa mediciner eller har vissa medicinska tillstånd uppleva ökad hårväxt på oväntade ställen. Begreppet "oönskat hår" är dessutom kulturellt och individuellt bestämt. Vad som anses vara "oönskat" i en kultur eller för en individ kan anses vara attraktivt eller önskvärt i en annan. Oavsett normer är du inte ensam, och det finns många behandlingsalternativ för den som vill minska eller ta bort oönskat hår.</p>',

            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man oönskat hår?',
            content: '<p class="p200">Ansiktet är ett av de vanligaste områdena där kvinnor upplever oönskat hår: överläppen, kinderna, hakan och området runt näsan. Vid hormonella förändringar kan hårväxten i de här områdena öka markant. Oönskat hår kan annars dyka upp på nästan vilken del av kroppen som helst.</p>',
            extended_content: '<p class="p200 mt-xl">På kroppen upplever både män och kvinnor oönskat hår i områden som underarmarna, benen, armarna och ryggen. Bröst och mage är också vanliga områden där oönskat hår kan uppstå. Bikiniområdet är en annan plats där många kvinnor upplever ökad hårväxt, särskilt runt bikinilinjen. Denna ökade hårväxt kan vara särskilt problematisk under sommarmånaderna eller när man bär badkläder.</p>
            <p class="p200 mt-xl">Likaså kan hårväxt på intima områden som runt vagina och anus upplevas som oönskad av många. Sådan hårväxt är helt naturlig och varierar i omfattning, tjocklek och färg från person till person. Hårväxten i dessa områden fyller en biologisk funktion, bland annat att skydda de känsliga områdena mot friktion och infektioner. Trots dess naturliga funktion väljer många att ta bort håret i dessa områden av estetiska skäl eller för en känsla av renhet och komfort.</p>
            <p class="p200 mt-xl">Även om det kan verka mindre vanligt, finns det människor som upplever hårväxt på ovansidan av sina händer och fötter. Dessutom kan hormonella obalanser, genetik och vissa medicinska tillstånd orsaka att hår växer på oväntade platser, såsom inuti öronen, inuti näsan eller till och med på pannan. Oavsett var på kroppen det oönskade håret växer, varierar dess tjocklek och färg. Medan några kan ha tunt, ljust hår som är knappt märkbart, kan andra ha tjockt, mörkt hår som är mycket synligt.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kropp' => 'Kroppen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten får du träffa en expert som hjälper dig identifiera ditt behov av laserbehandling och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
            url_title: 'Boka din kostnadsfria konsultation för laserbehandling idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför effektiva laserbehandlingar anpassade för din hårtyp och hudton, så att du på ett säkert sätt kan bli av med ditt oönskade hår.',

            url_label: 'Se laserbehandlingar',
            url: 'permanent-harborttagning.php',
            url_title: 'Utforska våra skräddarsydda laserbehandlingar för permanent hårborttagning'
      ),
);

$treatment_link = '<a href="permanent-harborttagning.php" title="Utforska effektiv laser mot oönskat hår" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en hårborttagningsspecialist utförs en undersökning av ditt oönskade hår. Vi rekommenderar en lämplig laserbehandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för hårborttagning med laser',
      image_title: 'Konsultation för hårborttagning med laser',

      url_label: 'Läs mer om gratis konsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot oönskat hår',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för hårborttagning',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Laser för hårborttagning',
            duration: '50 min',
            price: 'Från 995 kr',
            content: 'Avancerad laserbehandling för hårborttagning erbjuder en effektiv lösning för att ta bort oönskat hår permanent. Lasertekniken riktar sig mot hårstråets melanin, vilket förstör hårsäcken och förhindrar framtida hårväxt.',

            image_small: 'bilder/hudbehandlingar/200x200/permanent-harborttagning.webp',
            image_large: 'bilder/hudbehandlingar/200x200/permanent-harborttagning.webp',
            image_alt: 'Bild av laserbehandling för hårborttagning',
            image_title: 'Laserbehandling för hårborttagning',

            url_label: 'Läs mer om laser',
            url: '/permanent-harborttagning.php',
            url_title: 'Läs mer om laser mot oönskat hår',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_LaserHairRemoval',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för laserbehandling för hårborttagning',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserHair',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling för hårborttagning'
      )
);


$articles = array(
      new Article(
            title: 'När bör du söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När bör du söka hjälp för oönskat hår?',
            image_title: 'När bör du söka hjälp för oönskat hår?',
            content: '<p class="p200">Rakning och vaxning tar bort oönskad hårväxt för stunden, men håret växer tillbaka och ger ofta återkommande besvär och hudirritation. Påverkar den oönskade hårväxten dessutom din självkänsla är det ett tecken på att tillfälliga lösningar inte räcker. Då finns laser, som tar bort håret permanent: ljusenergin inaktiverar hårfolliklarna och stoppar hårets återväxt.</p>
            <p class="p200 mt-m">Att ta professionell hjälp med oönskat hår handlar för många lika mycket om självbilden som om huden. Hos en erfaren specialist på laserhårborttagning håller resultatet, och skillnaden märks i både utseende och livskvalitet. Börja med en kostnadsfri konsultation.</p>',
      ),
      new Article(
            title: 'Varför välja AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför välja AcneSpecialisten för behandling av oönskat hår?',
            image_title: 'Varför välja AcneSpecialisten för behandling av oönskat hår?',
            content: '<p class="p200">Hos AcneSpecialisten görs behandlingen av oönskat hår med lasrar som Splendor X och Soprano Ice. Våra hudterapeuter har lång erfarenhet av hårborttagning och väljer laser och behandlingsupplägg efter din hår- och hudtyp, så att behandlingen blir både effektiv och säker. Du får personlig service och uppföljning, och vi hjälper dig hela vägen till en slät och hårfri hud.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.webp',
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

$show_all_results_label = "Se alla resultat";
$show_all_results_title = "se flera behandlingsresultat";



$faq_categories = array(
      'Generellt om oönskat hår' => array(
            new Question(
                  title: 'Vad är oönskat hår och varför uppstår det?',
                  text: '<p class="p200">Oönskat hår är allt hår på kroppen som inte är önskvärt och kan uppstå av olika anledningar som genetik, hormonella obalanser eller vissa medicinska tillstånd. Det kan visa sig på olika delar av kroppen där man normalt inte önskar hårväxt, som ansiktet, bröstet eller ryggen.</p>'
            ),
            new Question(
                  title: 'Vilka är de mest effektiva professionella behandlingarna för att permanent minska oönskat hår?',
                  text: '<p class="p200">Professionella behandlingar som laserhårborttagning har visat sig vara effektiva för permanent hårborttagning. Dessa metoder måste utföras av certifierade specialister och kräver flera behandlingar för bästa resultat.</p>'
            ),
            new Question(
                  title: 'Är laserhårborttagning säker för alla hudtyper?',
                  text: '<p class="p200">Laserhårborttagning är säker för de flesta hudtyper, men rådgör med en specialist om vilken typ av laser som passar din hudton och hårfärg bäst. Vissa lasrar är mer lämpade för ljusare hud med mörkt hår, medan andra är säkrare för mörkare hudtyper. På AcneSpecialisten har vi de senaste maskinerna som passar alla hudtoner och hårfärger som går att behandla.</p>'
            ),
            new Question(
                  title: 'Kan oönskat hår orsaka hudproblem?',
                  text: '<p class="p200">Oönskat hår i sig orsakar sällan hudproblem, men de metoder som används för att ta bort det kan ibland leda till hudirritation, inåtväxande hår och andra hudåkommor. Genom att behandla hårväxten med laser kan vi få bort den utan att orsaka dessa bieffekter.</p>'
            ),
            new Question(
                  title: 'Hur viktig är eftervård efter hårborttagningsbehandling?',
                  text: '<p class="p200">Eftervård är mycket viktig för att minimera risken för biverkningar och maximera behandlingens effektivitet. Det kan innebära att undvika solen, applicera lugnande krämer eller geler och undvika vissa hudvårdsprodukter eller aktiviteter som kan irritera behandlade områden.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat";



$specialists = array(
      new Specialist(
            name: 'Cazzandra L',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra L, hudterapeut med specialisering i behandling mot oönskat hår',
            image_title: 'Cazzandra L - Expert på oönskat hår'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på oönskat hår',
            image_title: 'Veronika Benedik - Specialist inom oönskat hår'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom behandling av oönskat hår',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på oönskat hår'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av oönskat hår',
            image_title: 'Vilma Libom - Expert inom behandling av oönskat hår'
      )
);

$specialist_url_label = "Se alla hudterapeuter";
$specialist_url_title = "Specialiserade Hudterapeuter";

$brands = array(
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X logotyp',
            image_title: 'Splendor X - Permanent hårborttagning med laser',
            url: '/varumarken/splendor-x/',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice logotyp',
            image_title: 'Soprano Ice - Permanent hårborttagning med laser',
            url: '/varumarken/soprano-ice/',
            url_title: 'Soprano Ice',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för oönskat hår";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/hudproblem/oonskat-har/" />

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
                              <h2 class="h500 l10n"><?php echo $about_title ?></h2>
                              <?php foreach ($trivias as $trivia) {
                                    echo '<hr>';
                                    include('../widgets/problem-trivia-card/problem-trivia-card.php');
                              } ?>
                              <hr>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut/"><?php echo $specialist_url_label ?></a>
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