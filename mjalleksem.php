<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Mjälleksem - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Utforska allt om mjälleksem, från dess orsaker till effektiva behandlingsmetoder och förebyggande åtgärder. Få expertis och skräddarsydda lösningar från Acnespecialisten.';
$seo_keywords = 'mjälleksem, behandling av mjälleksem, orsaker till mjälleksem, förebygga mjälleksem, seborroisk dermatit, skalpmjälleksem, ansiktsmjälleksem, flagnande hud, oljig hud';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'bilder/problem/424x456/seborre.webp';

$title = 'Mjälleksem';

$image_small = 'bilder/problem/424x324/seborre.webp';
$image_large = 'bilder/problem/424x456/seborre.webp';
$image_title = 'Visar en hud med seborre';
$image_alt = 'Bild som illustrerar mjälleksem på huden';
$description = 'I den här sektionen utforskar vi vad mjälleksem innebär, varför det uppstår och hur Acnespecialisten kan hjälpa dig med behandling. Vi diskuterar orsakerna till mjälleksem, hur det skiljer sig från andra hudtillstånd och hur vi kan stödja dig genom din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Seborre',
            url: null,
            title: null,
      ),
      new Link(
            label: 'Seborroiskt Eksem',
            url: null,
            title: null,
      ),
];

$floating_box = 'Text på floating box';

$consultation_url_label = "Boka gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea";
$consultation_url_title = "Gratis Konsultation för mjalleksem";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Seborrea";
$booking_url_title = "Boka mjalleksembehandling";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för mjalleksem";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka mjalleksembehandling";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för mjalleksem";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka mjalleksembehandling";

$nav_buttons = array(
      'about' => 'Om mjälleksem',
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

$description_title = 'Vad är Mjälleksem?';
$description_text = '<p class="p200">Mjälleksem, även känt som seborroisk dermatit, är en vanlig hudåkomma som kännetecknas av röda, flagnande och ofta oljiga hudpartier. Det drabbar vanligtvis skalpen, ansiktet och andra oljerika områden på kroppen. Även om det är en kronisk tillstånd, finns det flera effektiva behandlingar som kan lindra symtomen.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi specialiserade behandlingar för mjälleksem. Våra behandlingar är anpassade för att lugna huden, minska inflammation och flagnande samt att kontrollera överproduktionen av hudolja. Genom en noggrann analys av ditt hudtillstånd och livsstil, utformar vi en personlig behandlingsplan som inte bara behandlar symptomen, utan också tar itu med de bakomliggande orsakerna.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten kopplar vi dig med en erfaren hudterapeut som hjälper dig att korrekt identifiera ditt mjälleksem och utformar en individuell behandlingsplan speciellt för dig. Att förstå din specifika form av mjälleksem är avgörande för en effektiv behandling.',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea',
            url_label: 'Boka din gratis konsultation nu',
            url_title: 'Boka en tid för gratis mjälleksem konsultation',
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder en rad skonsamma men effektiva behandlingar anpassade för din specifika typ av mjälleksem, vilket säkerställer att du på ett tryggt och effektivt sätt kan hantera ditt mjälleksem.',
            url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Seborrea',
            url_label: 'Utforska våra mjälleksembehandlingar',
            url_title: 'Utforska alla våra effektiva mjälleksembehandlingar',
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'På AcneSpecialisten hjälper vi dig att hitta en skräddarsydd hudvårdsrutin och produkter specifikt för att förebygga mjälleksem, och att hålla din hud frisk, balanserad och fri från mjälleksem.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            url_label: 'Upptäck produkterna',
            url_title: 'Se produkterna för att förebygga mjälleksem',
      ),
);


$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår mjälleksem?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">När det gäller mjälleksem, är det viktigt att förstå varför och var det vanligtvis uppstår för att kunna hantera det effektivt. Mjälleksem, även känt som seborroisk dermatit, drabbar ofta områden med hög densitet av talgkörtlar som skalpen, ansiktet (särskilt näsan och ögonbrynen), öronkanalerna och bröstet. Under din konsultation hos AcneSpecialisten, utförs en noggrann hudanalys för att identifiera dessa problemområden och förstå de underliggande orsakerna till ditt mjälleksem.</p>
      <p class="p200 mt-m">Det är viktigt att skydda dessa känsliga områden från ytterligare irritation. Vi rekommenderar att undvika hudirriterande produkter och starka syror, särskilt i de drabbade områdena. Dessa förberedelser är avgörande för att säkerställa att eventuella behandlingar blir så effektiva och skonsamma som möjligt. Våra hudterapeuter kommer att ge dig skräddarsydda råd och vägledning för att förbereda och behandla ditt mjälleksem på bästa sätt.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp för mitt mjälleksem?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för mitt mjälleksem?',
            image_title: 'När ska jag söka hjälp för mitt mjälleksem?',
            content: '<p class="p200">Mjälleksem är en hudåkomma som kan påverka både vuxna och barn, kännetecknat av röd, inflammerad och flagnande hud, ofta i hårbotten eller andra oljerika områden. Om du upplever att ditt mjälleksem orsakar obehag, påverkar din livskvalitet, eller om du har provat olika produkter och hemmabehandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att förstå att hjälp finns tillgänglig, oavsett om ditt mjälleksem är mild eller svår.</p>
            <p class="p200 mt-m">Genom att besöka en hudterapeut kan du få en skräddarsydd behandlingsplan anpassad efter dina unika behov. En expert kan analysera din hudtyp, diskutera de möjliga orsakerna till ditt mjälleksem och rekommendera de mest effektiva behandlingsmetoderna. Dessa kan inkludera specialiserade hudvårdsprodukter eller andra behandlingar som är anpassade för att hantera mjälleksem effektivt. Att ta hand om din hud och få professionell hjälp är avgörande för att kontrollera symtomen och förbättra din hudhälsa.</p>',
      ),

      new Article(
            title: 'Varför ska jag välja AcneSpecialisten för mitt mjälleksem?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag välja AcneSpecialisten?',
            image_title: 'Varför ska jag välja AcneSpecialisten?',
            content: '<p class="p200">För en effektiv och långsiktig lösning på mjälleksem, är AcneSpecialisten det självklara valet. Med vår gedigna erfarenhet inom hudvård och specialisering inom behandling av mjälleksem, är vi välutrustade för att hantera din specifika situation.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste metoderna och teknologierna inom hudvård för att ge dig bästa möjliga resultat. Vårt team av erfarna hudterapeuter är redo att skapa en personligt anpassad behandlingsplan och stötta dig genom hela din hudvårdsresa. Med regelbundna uppföljningar och anpassade hudvårdsprogram ser vi till att ditt mjälleksem hanteras effektivt och att du uppnår en långvarig förbättring av din hud.</p>',
      ),
);

$headline01 = "01. Identifiera ditt mjälleksem";

$service = new Service(
      title: 'Mjälleksem Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under ett personligt möte med en av våra AcneSpecialister utförs en noggrann undersökning av din hud för att identifiera och förstå ditt mjälleksem. Vi tar före-bilder på din hud och utifrån denna undersökning rekommenderar vi den mest lämpliga behandlingen för dig, och skräddarsyr en individuell behandlingsplan som bäst passar dina specifika behov och livsstil.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Mjälleksem Konsultation',
      image_title: 'Mjälleksem Konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea',
      consultation_url_label: 'Boka din gratis mjälleksem konsultation nu',
      consultation_url_title: 'Boka din gratis mjälleksem konsultation nu',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om vår hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'
);

$headline02 = "02. Behandla mjälleksem";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot mjälleksem',
            duration: '60 min',
            price: '995 kr',
            content: 'Vår ansiktsbehandling mot mjälleksem innefattar en grundlig djuprengöring av huden för att effektivt hantera överflödigt talg och döda hudceller. Behandlingen inkluderar antiinflammatoriska och lugnande moment för att lindra inflammation och rodnad, vilket i sin tur hjälper till att lugna huden och minska symtom på mjälleksem.',
            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Ansiktsbehandling mot mjälleksem',
            image_title: 'Ansiktsbehandling mot mjälleksem',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Seborrea',
            consultation_url_label: 'Boka gratis konsultation',
            consultation_url_title: 'Boka gratis konsultation',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Seborrea',
            booking_url_label: 'Boka din ansiktsbehandling mot mjälleksem',
            booking_url_title: 'Boka din ansiktsbehandling mot mjälleksem',
            url: null,
            url_label: 'Läs mer om ansiktsbehandling mot mjälleksem',
            url_title: 'Klicka här för att läsa mer om ansiktsbehandling mot mjälleksem'
      ),
);

$headline03 = "03. Förebygg uppkomsten av nytt mjälleksem";

$products = array(
      new Service(
            title: 'Produkter mot mjälleksem',
            duration: null,
            price: 'Pris från 1295 kr',
            content: 'För att effektivt bekämpa och förebygga mjälleksem krävs daglig behandling med rätt produkter. Vårt sortiment av mjälleksemsprodukter är speciellt utformat för att hjälpa till att återställa och upprätthålla balansen i din hud samt förebygga uppkomsten av nytt mjälleksem.',
            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Produkter mot mjälleksem',
            image_title: 'Produkter mot mjälleksem',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            url_label: 'Köp produkter mot mjälleksem',
            url_title: 'Köp produkter mot mjälleksem',
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


$reviews = array(
      new Review(
            brand: 'Trustpilot',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all mjalleksem efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: 'images/brands/trustpilot.svg'

      ),
      new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och mjalleksemn är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: 'images/brands/google-small.svg'

      ),
      new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min mjalleksem med synliga resultat. Jättetrevlig och kunnig behandlare!",
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
$specialist_url_title = "mjalleksem Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'bilder/problem/200x200/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter mjalleksem',
            image_title: 'Acneärr - en vanlig följd av mjalleksem',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/problem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med mjalleksem',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med mjalleksem',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'mjalleksem runt munnen',
            image: 'bilder/problem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med mjalleksem',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande mjalleksem',
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
            url: 'varumarken/alma',
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
      <link rel="stylesheet" href="problem/problem.css">
      <script src="problem/widgets/problem-trivia-card/problem-trivia-card.js"></script>
</head>

<body>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
      <div class="is-hidden-touch is-hidden-desktop-only transition" id="floater">
            <div class="container">
                  <div id="floating-picture" style="background-image: url('<?php echo $image_large ?>')">
                        <div id="overlay">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                              <div>
                                    <h2 class="h600"><?php echo $title ?></h2>
                                    <div class="mt-m aka">
                                          <span class="p200 l10n">Även kallat</span>
                                          <?php foreach ($akas as $aka) { ?>
                                                <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                          <?php } ?>
                                          <div class="mt-m"><?php echo $floating_box ?></div>
                                          <div class="mt-xl">
                                                <div class="columns is-2 is-variable">
                                                      <div class="column">
                                                            <a href="<?php echo $consultation_url ?>" title="<?php echo $floating_consultation_url_title ?>" class="button white expand l10n"><?php echo $floating_consultation_url_label ?></a>
                                                      </div>
                                                      <div class="column">
                                                            <a href="<?php echo $booking_url ?>" title="<?php echo $floating_booking_url_title ?>" class="button white expand l10n"><?php echo $floating_booking_url_label ?></a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <main>
            <section id="header" class="sticky-badges-target">
                  <div id="green-header-small" class="is-hidden-desktop">
                        <div class="container">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                              <h1 class="h600"><?php echo $title ?></h1>
                              <h3 class="mt-xs p100 l10n">Även känt som:</h3>
                              <?php foreach ($akas as $aka) { ?>
                                    <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="mt-xs button b50 bright">
                                          <?php echo $aka->label ?>
                                    </a>
                              <?php } ?>

                              <hr class="mt-xl" />
                              <p class="mt-m p200">
                                    <?php echo $description ?>
                              </p>
                              <div class="mt-xl">
                                    <div class="columns is-mobile">
                                          <div class="column is-half">
                                                <a href="<?php echo $consultation_url ?>" title="<?php echo $mobile_consultation_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_consultation_url_label ?></a>
                                          </div>
                                          <div class="column is-half">
                                                <a href="<?php echo $booking_url ?>" title="<?php echo $mobile_booking_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_booking_url_label ?></a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div id="green-header-large" class="is-hidden-touch">
                        <div class="container">
                              <div class="columns">
                                    <div class="column is-half">
                                          <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                                    </div>
                                    <div class="column is-half flex-row justify-end">
                                          <div class="mt-xl">
                                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                                          </div>
                                    </div>
                              </div>
                              <div id="green-header-large-text" class="mt-xxs">
                                    <h1 class="h600"><?php echo $title ?></h1>
                                    <p class="mt-s p200"><?php echo $description ?></p>
                                    <div class="mt-xl flex-row" id="book-buttons">
                                          <a href="<?php echo $consultation_url ?>" title="<?php echo $consultation_url_title ?>" class="button b200 white l10n"><?php echo $consultation_url_label ?></a>
                                          <a href="<?php echo $booking_url ?>" title="<?php echo $booking_url_title ?>" class="button b200 white l10n"><?php echo $booking_url_label ?></a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
            <div class="container">
                  <div id="content">
                        <section id="badges" class="is-hidden-desktop mt-s mb-s">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </section>
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
                              <div class="flex-row align-end justify-space-between">
                                    <h2 class="big l10n">Omdömen</h2>
                                    <div class="flex-row is-hidden-mobile">
                                          <div class="step-buttons">
                                                <button class="round-large grey" onclick="Reviews.scroll(-1)">
                                                      <?php icon('arrow-left') ?>
                                                </button>
                                                <button class="round-large grey" onclick="Reviews.scroll(1)">
                                                      <?php icon('arrow-right') ?>
                                                </button>
                                          </div>
                                    </div>
                              </div>
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
                                    <h2 class="big l10n">Våra specialister</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="specialister"><?php echo $specialist_url_label ?></a>
                        </section>
                        <section id="related-problems">
                              <h2 class="big l10n">Relaterade hudproblem</h2>
                              <dig class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('problem/widgets/related-problem-card/related-problem-card.php'); ?>
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