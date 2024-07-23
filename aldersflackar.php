<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla åldersfläckar och hyperpigmentering | AcneSpecialisten';
$seo_description = 'Allt om åldersfläckar, inklusive orsakerna bakom dem, effektiva behandlingsmetoder och hur du kan få bort dem.';
$seo_keywords = 'åldersfläckar ansikte, åldersfläckar, åldersfläckar i ansiktet, hyperpigmentering ansikte, hyperpigmentering, åldersfläckar på huden';
$seo_image = 'bilder/hudproblem/424x456/pigmentflackar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Åldersfläckar', '/aldersflackar.php'),
);

$image_small = 'bilder/hudproblem/424x324/pigmentflackar.webp';
$image_large = 'bilder/hudproblem/424x456/pigmentflackar.webp';
$image_title = 'Visar en hud med åldersfläckar';
$image_alt = 'Bild som visar åldersfläckar på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Åldersfläckar',
      description: 'Har du märkt av åldersfläckar, också kända som hyperpigmentering i form av solfläckar eller leverfläckar, på din hud? Vi förstår dessa utmaningar och har effektiva lösningar för dig. Upptäck mer om dessa fläckar, varför de uppstår, och hur våra specialister kan skräddarsy en behandling specifikt för dina behov. Boka en kostnadsfri konsultation idag och starta din resa mot en jämnare och friskare hud.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Pigmentfläckar',
                  url: 'pigmentflackar.php',
                  title: 'Pigmentfläckar'
            ),
            new Link(
                  label: 'Solfläckar',
                  url: 'solskadad-hy.php',
                  title: 'Solfläckar'
            ),
      ]
);

$floating_box = 'Vi behandlar åldersfläckar effektivt';

$description_title = 'Vad är åldersfläckar?';
$description_text = '<p class="p200">Åldersfläckar, ofta ett resultat av huden som åldras och långvarig exponering för solen, är små, mörka områden på huden. De är vanligast hos personer över 50 år men kan också dyka upp hos yngre individer som spenderar mycket tid i solen.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi en rad behandlingar för att hantera åldersfläckar. Våra metoder inkluderar allt från Laser till kemiska peelingar och mikrodermabrasion. Dessa behandlingar är utformade för att ta bort åldersfläckar och ge din hud en mer enhetlig och jämn ton. Vi erbjuder också råd om hur du kan förebygga nya fläckar och hålla din hud hälsosam och strålande.</p>';

$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår hudproblemet och varför?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Åldersfläckar i ansiktet är vanligt på grund av dess frekventa exponering av sol, de kan uppstå på både händerna och armarna av samma anledning. Denna hyperpigmentering är ett resultat av ökad melaninproduktion, det pigment som ger hud dess färg, vilket ofta orsakas av långvarig exponering för UV-strålar från solen. Hudens naturliga åldringsprocess bidrar också, då dess förmåga att återhämta sig från solskador minskar över tiden.</p>',
      ),
);



$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten startar din resa till en enhetlig hud med en grundlig konsultation. Våra kunniga hudterapeuter utför en detaljerad hudanalys för att fastställa graden och omfattningen av dina åldersfläckar. Denna initiala bedömning är avgörande för att kunna skapa en effektiv och personlig behandlingsplan, anpassad för just dina behov.',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
            url_label: 'Boka en gratis konsultation',
            url_title: 'Boka din kostnadsfria konsultation mot åldersfläckar'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Efter att ha identifierat dina specifika behov erbjuder AcneSpecialisten skräddarsydda behandlingsalternativ för att aktivt åtgärda åldersfläckar. Våra behandlingsmetoder omfattar avancerade tekniker som är speciellt utformade för att adressera och reducera hyperpigmentering och ojämn hudton, och arbetar för att förbättra hudens struktur och utseende.',
            url: 'behandla-pigmentflackar.php',
            url_label: 'Utforska våra behandlingarna',
            url_title: 'Upptäck våra unika och effektiva behandlingar mot åldersfläckar'
      ),
);

$treatment_link = '<a href="behandla-pigmentflackar.php" title="Utforska effektiva behandlingar mot åldersfläckar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';



$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för åldersfläckar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en specialist genomförs en detaljerad analys av dina åldersfläckar. Vi fotograferar de berörda områdena och går igenom dina mål och förväntningar.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av åldersfläckar',
      image_title: 'Konsultation för behandling av åldersfläckar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för åldersfläckar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer konsultation',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för åldersfläckar'
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'IPL-behandling mot åldersfläckar',
            duration: '60 min',
            price: '2595 kr',
            content: 'IPL-behandling använder ljuspulser för att bryta ner melanineti fläckarna, vilket gör att de bleknar och försvinner.',
            image_small: 'images/services/200x200/ipl.webp',
            image_large: 'images/services/200x200/ipl.webp',
            image_alt: 'Bild av en IPL-behandling för åldersfläckar',
            image_title: 'IPL-behandling för åldersfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling av åldersfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en IPL-behandling för åldersfläckar',
            url: 'ipl-pigmentflackar.php',
            url_label: 'Läs mer om IPL behandling',
            url_title: 'Klicka här för att läsa mer om IPL-behandling för åldersfläckar'
      ),
      new Service(
            title: 'Kemisk Peeling mot åldersfläckar',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling förnyar och förbättrar hudens yta. Behandlingen används för att exfoliera och ta bort det yttersta hudlagret, vilket reducerar fläckarna och förbättrar hudens utseende.',
            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling för åldersfläckar',
            image_title: 'Kemisk Peeling för åldersfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling av åldersfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för åldersfläckar',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot åldersfläckar'
      ),
      new Service(
            title: 'Laserbehandling mot åldersfläckar',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laser mot åldersfläckar och ojämn pigmentering använder precisa ljusstrålar för att bryta ned den överdrivna pigmenteringen i huden.',
            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av en laserbehandling mot åldersfläckar',
            image_title: 'Laserbehandling för åldersfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot åldersfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot åldersfläckar',
            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot åldersfläckar'
      ),

      new Service(
            title: 'Microneedling mot åldersfläckar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Denna process hjälper till att bryta ner hyperpigmentering och främjar cellförnyelse, vilket resulterar i en jämnare hudton och minskad synlighet av åldersfläckar.',
            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling för åldersfläckar',
            image_title: 'Microneedling för åldersfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling av åldersfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling för åldersfläckar',
            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot åldersfläckar'
      ),
);

$articles = array(
      new Article(
            title: 'När ska du överväga att söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska du överväga att få hjälp med åldersfläckar?',
            image_title: 'När ska du överväga att få hjälp med åldersfläckar?',
            content: '<p class="p200">Åldersfläckar är en naturlig del av hudens åldrande och kan orsaka kosmetiska bekymmer. Om dina åldersfläckar börjar påverka ditt självförtroende eller om du har bekymmer över hur de ser ut, kan det vara läge att söka expertis. Medan åldersfläckar oftast är ofarliga, är det viktigt att få dem bedömda för att utesluta andra hudförhållanden. En specialist kan erbjuda vägledning om effektiva behandlingar och förebyggande strategier.</p>',
      ),

      new Article(
            title: 'Fördelarna med att välja AcneSpecialisten',
            image_small: null,
            image_large: null,
            image_alt: 'Fördelarna med att välja AcneSpecialisten för åldersfläcksbehandling',
            image_title: 'Fördelarna med att välja AcneSpecialisten för åldersfläcksbehandling',
            content: '<p class="p200">AcneSpecialisten har lång erfarenhet av åldersfläcksbehandling. Tack vare vår expertis och tillgång till de bästa metoderna, erbjuder vi personligt anpassade behandlingar för varje klient. Vårt mål sträcker sig längre än att bara behandla åldrandets synliga effekter; vi siktar också på att förebygga framtida hudproblem.</p>
                  <p class="p200 mt-m">Vi tillämpar behandlingar som är grundade på en omfattande förståelse för hudens unika behov och använder oss av avancerade tekniker och förstklassiga produkter. Detta säkerställer optimala resultat för dig som kund. Med individuellt anpassade behandlingsplaner och ett engagerat förhållningssätt ser vi till att våra kunder når sina önskade hudvårdsresultat.</p>',
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

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Pigmentfläckar',
            aka: 'Pigmenteringar',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/aldersflackar.php" />

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