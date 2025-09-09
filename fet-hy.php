<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla oljig hy och fet hy | AcneSpecialisten';
$seo_description = 'Läs mer om oljig hud och fet hy i ansiktet. Hos oss hittar du hudvård för oljig hy som innehåller ansiktskräm mot fet hy, Boka konsultation idag!';
$seo_keywords = 'oljig hy, ansiktskräm fet hy, fet hy, oljig hud, oljig, fet hud, hudvård för oljig hy, extremt oljig hy, fet hy i ansiktet, flottig, hudvård för fet hy, oljig hy i pannan, fet och torr hy, glansig hy';
$seo_image = 'bilder/hudproblem/424x456/blandhy.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Fet Hy', '/fet-hy.php'),
);

$image_small = 'bilder/hudproblem/358x274/blandhy.webp';
$image_large = 'bilder/hudproblem/424x456/blandhy.webp';
$image_title = 'Visar en hud med fet hy';
$image_alt = 'Bild som illustrerar utseendet av fet hy';

$green_banner_content = new GreenBannerContent(
      title: 'Oljig & fet hy i ansiktet',
      description: 'Kan också beskrivas som oljig hy i t-zon, glansig hy eller blank hy. Här förklarar vi vad som kännetecknar fet hy, varför problemet uppstår och hur vi kan hjälpa dig.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Blandhy',
                  url: 'blandhy.php',
                  title: 'Blandhy'
            ),
      ]
);


$floating_box = 'Behandling av fet hy.';

$description_title = 'Vad är fet hy?';
$description_text = '<p class="p200">Fet hy, även kallad flottig hud, är en av de vanligaste hudtyperna. Den kännetecknas av överproduktion av talg, vilket resulterar i en oljig yta som kan leda till tilltäppta porer och acne. Fet hy uppstår när porerna producerar för mycket talg, vilket är kroppens naturliga fett som hjälper till att återfukta huden. En naturlig reaktion är att sluta återfukta huden för att minska talgproduktionen, men detta kan istället leda till att huden blir ännu fetare.</p>

<p class="p200 mt-m">Orsakerna till fet hy kan vara många, inklusive långvarig användning av uttorkande hudvårdsprodukter, vilket triggar en överproduktion av talg som kompensation. Dessutom kan fet hy vara ärftlig eller hormonellt betingad, vilket är en vanlig anledning till att problemen ofta uppstår i tonåren. Miljöpåverkan kan också spela en roll, särskilt under vinterhalvåret när huden tenderar att bli torrare. Mäns talgproduktion påverkas också i mindre utsträckning av hormonella förändringar jämfört med kvinnor, vilket kan göra kvinnors hy mer benägen att bli oljig.</p>

<p class="p200 mt-m">På AcneSpecialisten erbjuder vi anpassade behandlingar för att balansera och förbättra hudens tillstånd. Dessa inkluderar djuprengörande ansiktsbehandlingar, specialprodukter för att reglera talgproduktionen, och behandlingar som effektivt tar itu med akne och andra hudproblem kopplade till fet hy. Vårt mål är att hjälpa dig uppnå en balanserad, klar och frisk hud.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Under din första konsultation hos AcneSpecialisten analyserar en hudterapeut din hud för att identifiera tecken på hudproblemet. Vi skapar en anpassad behandlingsplan baserad på din huds specifika behov.',

            url_label: 'Boka konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin',
            url_title: 'Boka din gratis konsultation för fet hy idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder hudvård som är specifikt utformade för att hantera utmaningarna som hudproblemet orsakar, inklusive djuprengöring och reglering av talgproduktion.',

            url_label: 'Utforska behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin',
            url_title: 'Ta reda på vilka behandlingar som passar din fet hy'
      ),
      new TreatmentStep(
            title: 'Förebygg',
            content: 'Vi ger råd om hudvårdsrutiner och produkter som är idealiska för fet hy, för att hjälpa dig att förebygga framtida hudproblem och bibehålla en hälsosam hudton.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            url_title: 'Bläddra bland våra produkter för fet hy'
      ),
);

$treatment_link = '<a href="https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_CombinationSkin" title="Utforska effektiv fet hy-behandling" class="mt-xl button b200 outline expand auto-width">Läs mer om vår behandling för fet hy</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Hudproblemet kännetecknas ofta av en ökad talgproduktion i vilket leder till blank hud i ansiktet, problemet är vanligast i T-zonen med oljig hy i pannan, på näsan och på hakan. Dessa områden har en högre koncentration av talgkörtlar, vilket kan leda till en mer oljig hudton jämfört med andra delar av ansiktet.</p>
      <p class="p200 mt-m">Orsaken till fet hy i dessa områden kan variera och inkluderar faktorer som genetik, hormonella förändringar och yttre miljöpåverkan. Att förstå de specifika orsakerna och hur de påverkar din hud är avgörande för att kunna välja rätt behandlingsmetoder och hudvårdsprodukter. Hos AcneSpecialisten genomför vi en noggrann hudanalys för att identifiera dina unika hudbehov och utforma en personlig behandlingsplan för att hantera fet hy effektivt.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med fet hy?',
            image_title: 'När ska jag söka hjälp med fet hy?',
            content: '<p class="p200">Fet hy är en vanlig hudåkomma som kan påverka individer i alla åldrar. Detta tillstånd, som kännetecknas av ökad talgproduktion, kan leda till en glansig hud och ökad benägenhet för acneutbrott. Om du märker att din fet hy bidrar till hudproblem eller om du har försökt hantera det med olika produkter utan framgång, kan det vara dags att överväga professionell hjälp. Kom ihåg, det är lämpligt att söka hjälp oavsett om du upplever milda eller allvarliga symptom.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten?',
            image_title: 'Varför ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du söker en effektiv och hållbar lösning för din fet hy, är AcneSpecialisten det självklara valet. Med över 30 års erfarenhet inom hudvård och en specialisering i behandling av fet hy, har vi den expertis som behövs för att anpassa behandlingen efter dina unika behov.</p>
          <p class="p200 mt-m">Vi använder oss av de senaste metoderna och teknologierna inom hudvård för att säkerställa de bästa möjliga resultaten för din hud. Vårt team av erfarna hudterapeuter är beredda att skapa en individuellt anpassad behandlingsplan och ge dig stöd genom hela din hudvårdsresa. Med regelbundna uppföljningar och skräddarsydda hemmavårdsprogram ser vi till att din fet hy får en varaktig förbättring.</p>',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för fet hy',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under konsultationen får du träffa en av våra hudterapeuter som analyserar din feta hy, tar före-bilder, och rekommenderar den mest effektiva behandlingsmetoden för din hudtyp och utformar en anpassad behandlingsplan specifikt för dig.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för fet hy',
      image_title: 'Konsultation för fet hy',

      url_label: '',
      url: '',
      url_title: '',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin',
      consultation_url_title: 'Klicka för att boka tid för en konsultation om fet hy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$treat_content = '<p class="p200">När din hudtyp och storleken på dina porer har identifierats, påbörjar vi behandlingen av stora porer. Målet är att djuprengöra och minska porernas synlighet, vilket kan påverka hudens textur och utseende. Vi tillämpar olika metoder anpassade efter dina unika behov, för att maximera resultaten och minimera obehaget.</p>
<p class="p200">Under denna process rengör vi porerna, tar bort döda hudceller och överflödig talg samt balanserar talgproduktionen. Vi utför även porsammandragande behandlingar som minskar porernas storlek och jämnar ut hudytan. Behandlingsplanen anpassas kontinuerligt efter hur din hud svarar på behandlingen, för att säkerställa bästa möjliga resultat.</p>';

$services = array(
      new Service(
            title: 'Ansiktsbehandling för fet hy',
            duration: '60 min',
            price: '1295 kr',
            content: 'Denna anpassade ansiktsbehandling är särskilt utvecklad för att möta de unika utmaningarna med fet hy. Vi fokuserar på att noggrant rengöra huden för att ta bort överflödig talg och föroreningar, samtidigt som vi använder specialiserade exfolieringsmetoder för att förebygga tilltäppta porer.',

            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för fet hy',
            image_title: 'Ansiktsbehandling för fet hy',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för fet hy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin&method=Method_FacialProblem',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för fet hy'
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot fet hy',
            duration: null,
            price: 'Från 1495 kr',
            content: 'Noggrannt utvalda produkter som effektivt kan reglera och balansera talgproduktionen utan att överdriva huden. Genom daglig användning produkter såsom ansiktsrengöring, ansiktskräm och dagkräm för fet hy kan du uppnå en mer balanserad hudton, minskad oljighet och förbättrad hudhälsa.',

            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av fet hy',
            image_title: 'Effektiva produkter för att hantera fet hy',

            url_label: '',
            url: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Combination_Skin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot fet hy',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            booking_url_title: 'Klicka för att köpa produktpaket mot fet hy',
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
                  title: 'Hur kan jag kontrollera glansighet orsakad av fet hy?',
                  text: 'För att kontrollera glansighet orsakad av fet hy är daglig användning av en ansiktsrengöring, dagkräm och ansiktskräm mot fet hy hjälper för att behandla och balansera huden effektivt. Regelbunden exfoliering för att avlägsna döda hudceller och rengöra porerna kan även bidra till mindre talgproduktion.'
            ),

            new Question(
                  title: 'Vilka typer av ansiktsrengöring är bäst för fet hy?',
                  text: 'För fet hy är det bäst att använda ansiktsrengöringar som effektivt kan avlägsna överflödig olja utan att torka ut huden. Produkter som innehåller ingredienser såsom salicylsyra kan också hjälpa till att hålla porerna rena och minska oljighet. Det är viktigt att välja produkter som är milda nog för daglig användning för att undvika irritation och överproduktion av olja som en försvarsmekanism.'
            ),

            new Question(
                  title: 'Kan stress orsaka eller förvärra fet hy?',
                  text: 'Ja, stress kan definitivt orsaka eller förvärra fet hy. Stress leder till ökad produktion av hormon som kan stimulera talgkörtlarna att producera mer talg. Att hantera stress genom avslappningstekniker, motion och tillräcklig sömn kan hjälpa till att minska hudens talgproduktion och förbättra hudens övergripande tillstånd.'
            ),

            new Question(
                  title: 'Är det möjligt att förändra hudtyp från fet till normal?',
                  text: 'Ja, det är möjligt att balansera och förbättra hudens tillstånd så att den blir mindre fet. Genom en lämplig hudvårdsrutin kan man minska talgproduktionen och närma sig en mer balanserad och "normal" hudtyp.'
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
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2017',
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
$specialist_url_title = "fet hy Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & fläckar',
            image: 'bilder/hudproblem/200x200/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter fet hy',
            image_title: 'Acneärr - en vanlig följd av fet hy',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med fet hy',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med fet hy',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'fet hy runt munnen',
            image: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med fet hy',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande fet hy',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/fet-hy.php" />

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
                        <section id="products">
                              <h2 class="h500"><?php echo $headline03 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $scm) { ?>
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