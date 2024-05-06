<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Oljig Hy i Ansiktet - Behandla Oljig Hud | AcneSpecialisten';
$seo_description = 'Läs mer om hur vi effektivt behandlar glansig och oljig hy i pannan och på ansiktet. Här hittar du hudvård för oljig hy. Boka gratis hudkonsultation idag!';
$seo_keywords = 'oljig hy, oljig hud, oljig, oljig hy i pannan, glansig hy';
$seo_image = 'bilder/hudproblem/424x456/blandhy.webp';


$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem'),
      new PathSegment('Oljig Hy', '/oljig-hy.php'),
);

$image_small = 'bilder/hudproblem/424x324/blandhy.webp';
$image_large = 'bilder/hudproblem/424x456/blandhy.webp';
$image_title = 'Visar en hud med oljig hy';
$image_alt = 'Bild som illustrerar utseendet av oljig hy';

$green_banner_content = new GreenBannerContent(
      title: 'Oljig hy i Ansiktet',
      description: 'Glansig och oljig hy i pannan och på ansiktet är ett stort problem. Här berättar vi mer om vad oljig hud är, varför det uppstår och hur vi på AcneSpecialisten kan hjäpla dig att hitta rätt hudvård för oljig hy för att effektivt bli av med hudproblemet.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_CombinationSkin', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_CombinationSkin', 'Boka denna behandling'),
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

$floating_box = 'Behandling av oljig hy.';

$nav_buttons = array(
      'about' => 'Om Blandhy',
      'approach' => 'Metoden',
      'areas' => 'Områden',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'Varför er?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$description_title = 'Vad är oljig hy?';
$description_text = '<p class="p200">Oljig hy kännetecknas av en ökad produktion av talg, vilket resulterar i en glansig, oljig yta. Denna hudtyp kan bidra till problem såsom tilltäppta porer, acne och en ojämn hudton. En effektiv hantering av oljig hy kräver en kombination av rätt hudvårdsprodukter och professionella behandlingar för att reglera oljeproduktionen.</p>
<p class="p200 mt-m">Hos Acnespecialisten erbjuder vi skräddarsydda behandlingar speciellt utformade för oljig hy. Våra tjänster inkluderar grundliga, djuprengörande ansiktsbehandlingar som effektivt avlägsnar överflödigt talg och orenheter. Vi använder också speciellt utvalda hudvård som hjälper till att kontrollera oljeproduktionen, även för dem som upplever problem med extremt oljig hy. Vårt mål är att erbjuda dig en skräddarsydd hudvårdsplan som leder till en balanserad, klar och frisk hud.</p>';


$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Under din första konsultation hos AcneSpecialisten utforskar vi din hud för att identifiera tecken på oljig hy. En anpassad behandlingsplan utformas baserat på din huds unika egenskaper och behov.',

            url_label: 'Boka konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            url_title: 'Boka din gratis konsultation för oljig hy idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Specialiserade behandlingar för oljig hy hos AcneSpecialisten inkluderar djuprengöring för att avlägsna överflödig olja, samt tekniker för att reglera oljeproduktionen.',

            url_label: 'Utforska behandlingar',
            url: 'hudproblem/blandhy/blandhybehandling',
            url_title: 'Ta reda på vilka behandlingar som passar din oljig hy'
      ),
      new TreatmentStep(
            title: 'Förebygg',
            content: 'För att underlätta långsiktig skötsel av oljig hy, ger vi råd om dagliga hudvårdsrutiner och rekommenderar produkter anpassade för denna hudtyp..',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            url_title: 'Bläddra bland våra produkter för oljig hy'
      ),
);

$treatment_link = '<a href="hudproblem/blandhy/blandhybehandling" title="Utforska effektiv oljig hy-behandling" class="mt-xl button b200 outline expand auto-width">Läs mer om vår behandling för oljig hy</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Områden med Oljig Hy',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Oljig hy kännetecknas ofta av en ökad talgproduktion i specifika områden av ansiktet, särskilt i T-zonen som inkluderar pannan, näsan och hakan. Dessa områden har en högre koncentration av talgkörtlar, vilket kan leda till en mer oljig hudton jämfört med andra delar av ansiktet.</p>
      <p class="p200 mt-m">Faktorer som påverkar utvecklingen av oljig hy i dessa områden kan vara genetik, hormonella förändringar, miljöpåverkan samt livsstilsfaktorer såsom stress. Att förstå dessa orsaker är kritiskt för att välja effektiva behandlingsmetoder och hudvårdsprodukter. Hos AcneSpecialisten utförs en grundlig hudanalys för att identifiera dina unika hudbehov och utforma en personlig behandlingsplan för effektiv hantering av oljig hy.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp för oljig hy?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för oljig hy?',
            image_title: 'När ska jag söka hjälp för oljig hy?',
            content: '<p class="p200">Oljig hy är en vanlig hudåkomma som drabbar människor i alla åldrar. Kännetecknat av en ökad sebumproduktion, kan detta tillstånd leda till glansig hud och gör en mer benägen för acne. Om du märker att din oljiga hy leder till hudproblem eller om du inte har haft framgång med att hantera den med vanliga produkter, kan det vara läge att söka professionell hjälp. Det är viktigt att komma ihåg att det är lämpligt att söka hjälp oavsett om symtomen är milda eller svåra.</p>',
      ),

      new Article(
            title: 'Varför ska jag välja AcneSpecialisten för oljig hy?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag välja AcneSpecialisten?',
            image_title: 'Varför ska jag välja AcneSpecialisten?',
            content: '<p class="p200">Om du är ute efter en effektiv och långvarig lösning på problem med oljig hy, är AcneSpecialisten ditt bästa val. Med mer än 30 års erfarenhet inom hudvård och en specialisering på oljig hy, erbjuder vi den expertis som krävs för att skräddarsy en behandling som passar just dina behov.</p>
          <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att ge dig de bästa resultaten. Vårt team av kunniga hudterapeuter arbetar för att skapa en individuellt anpassad behandlingsplan och stödjer dig genom hela din hudvårdsresa. Genom regelbundna uppföljningar och skräddarsydda program för hemmavård ser vi till att din oljiga hy behandlas effektivt och med varaktiga resultat.</p>',
      ),
);

$headline01 = "01. Identifiera oljig hy";

$service = new Service(
      title: 'Konsultation för oljig hy',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under denna konsultation kommer en av våra erfarna hudterapeuter att noggrant analysera din oljiga hy, ta före-bilder och diskutera dina specifika hudvårdsbehov. Vi kommer att rekommendera den mest effektiva behandlingsmetoden för just din hudtyp och utforma en skräddarsydd behandlingsplan för att hantera din oljiga hy.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för oljig hy',
      image_title: 'Konsultation för oljig hy',

      url_label: '',
      url: '',
      url_title: '',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
      consultation_url_title: 'Klicka för att boka tid för en konsultation om oljig hy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla oljig hy";

$services = array(
      new Service(
            title: 'Ansiktsbehandling för oljig hy',
            duration: '60 min',
            price: '995 kr',
            content: 'Vår specialanpassade ansiktsbehandling för oljig hy är utformad för att effektivt tackla de utmaningar som kommer med denna hudtyp. Behandlingen strävar även efter att återställa hudens naturliga balans, minska oljig glans och förbättra hudens textur och utstrålning.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för oljig hy',
            image_title: 'Ansiktsbehandling för oljig hy',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för oljig hy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för oljig hy'
      ),
);

$headline03 = "03. Förebygg uppkomsten av ny oljig hy";

$products = array(
      new Service(
            title: 'Produkter mot oljig hy',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt hantera oljig hy är det viktigt att välja rätt hudvårdsprodukter som kan hjälpa till att kontrollera och balansera talgproduktionen, utan att torka ut huden.',

            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av oljig hy',
            image_title: 'Effektiva produkter för att hantera oljig hy',

            url_label: '',
            url: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot oljig hy',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            booking_url_title: 'Klicka för att köpa produktpaket mot oljig hy',
      )
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
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all oljig hy efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: 'images/brands/trustpilot.svg'

      ),
      new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och oljig hyn är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: 'images/brands/google-small.svg'

      ),
      new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min oljig hy med synliga resultat. Jättetrevlig och kunnig behandlare!",
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
                  title: 'Vad orsakar oljig hy?',
                  text: 'Oljig hy orsakas av överproduktion av talg från talgkörtlarna. Detta kan bero på genetiska faktorer, hormonella förändringar, stress och felaktig hudvård. Att identifiera den underliggande orsaken är ett viktigt steg mot att hantera oljig hy effektivt.'
            ),

            new Question(
                  title: 'Vilka hudprodukter rekommenderas för oljig hy?',
                  text: 'För att behandla oljig hud effektivt rekommenderar vi en skräddarsydd hudvårdsrutin av rätt produkter för just din hy. På så sätt kan du effektivt behandla och balansera din hy för att bli av med glansigheten. Med rätt hudvård för oljig hy behöver du inte anpassa dina övriga produkter, och behöver därmed inte välja en primer eller foundation för oljig hy utan kan välja den produkt som passar dina preferenser.'
            ),

            new Question(
                  title: 'Hur ofta ska jag tvätta mitt ansikte om jag har oljig hy?',
                  text: 'Personer med oljig hy bör tvätta ansiktet två gånger dagligen, morgon och kväll, med en mild rengöring för att kontrollera oljeproduktionen utan att torka ut huden. Att överdriva rengöringen kan leda till ökad oljeproduktion som en reaktion på hudirritation eller uttorkning.'
            ),

            new Question(
                  title: 'Kan oljig hy dra nytta av ansiktsmasker, och i så fall vilka typer?',
                  text: 'Ja, ansiktsmasker kan vara fördelaktiga för oljig hy, särskilt de som innehåller lera, eftersom de hjälper till att absorbera överflödig olja. Ansiktsmask oljig hy bör användas regelbundet, men inte för ofta, för att undvika att huden torkar ut.'
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
$specialist_url_title = "oljig hy Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'bilder/hudproblem/200x200/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter oljig hy',
            image_title: 'Acneärr - en vanlig följd av oljig hy',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med oljig hy',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med oljig hy',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'oljig hy runt munnen',
            image: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med oljig hy',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande oljig hy',
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
                        <section id="products">
                              <h2 class="h500"><?php echo $headline03 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $service) { ?>
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