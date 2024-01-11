<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Svarta Pormaskar - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Utforska allt om svarta pormaskar, från deras uppkomst till effektiva behandlingar och förebyggande strategier. Få skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'svarta pormaskar, behandla svarta pormaskar, orsaker till svarta pormaskar, förebygga svarta pormaskar, eliminera svarta pormaskar, hudvård, ansiktsrengöring, djuprengöring av porer';


// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'bilder/problem/424x456/pormaskar.webp';

$title = 'Svarta pormaskar';

$image_small = 'bilder/problem/424x324/pormaskar.webp';
$image_large = 'bilder/problem/424x456/pormaskar.webp';
$image_alt = 'Bild som illustrerar svarta pormaskar på huden';
$description = 'I denna sektion utforskar vi naturen av svarta pormaskar, deras orsaker och hur Acnespecialisten kan bistå dig med effektiv behandling. Vi diskuterar hur svarta pormaskar bildas och vilka steg du kan ta för att minska dem och förbättra din hudhälsa.';

$akas = [
      new Link(
            url: 'pormaskar.php',
            label: 'Pormaskar',
            title: 'Allt du behöver veta om pormaskar'
      ),
      new Link(
            url: 'stora-porer.php',
            label: 'Stora porer',
            title: 'Utforska orsaker, symptom och behandlingar av stora porer'
      ),
];

$floating_box = 'Vi behandlar pormaskar effektivt';

$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis konsultation för behandling av svarta pormaskar";

$booking_url = "https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Service_Facial_PoreExtraction";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka din tid för behandling av svarta pormaskar";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis konsultation för svarta pormaskar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka din tid för behandling av svarta pormaskar";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis konsultation för svarta pormaskar";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka din tid för behandling av svarta pormaskar";

$nav_buttons = array(
      'about' => 'Om svarta pormaskar',
      'approach' => 'Metoden',
      'areas' => 'Områden',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'När?',
      'articles' => 'Varför er?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$description_title = 'Vad är Svarta Pormaskar?';
$description_text = '<p class="p200">Svarta pormaskar, tekniskt kända som öppna komedoner, bildas när porer blir tilltäppta med en kombination av sebum och döda hudceller. Denna ansamling oxiderar och blir mörk vid kontakt med luft, vilket ger upphov till deras karaktäristiska svarta färg. De förekommer ofta på områden som ansiktet, särskilt näsan och pannan, och kan vara ett tecken på behovet av en bättre hudvårdsrutin.</p>
<p class="p200 mt-m">På AcneSpecialisten erbjuder vi skräddarsydda behandlingar för att effektivt adressera och minska svarta pormaskar. Våra metoder inkluderar djuprengöring, speciella ansiktsbehandlingar och noggrann porrengöring. Dessa behandlingar, i kombination med rätt hudvårdsrutiner hemma, hjälper till att rensa porerna och förebygga framtida uppkomst av svarta pormaskar, vilket resulterar i en klarare och mer strålande hud.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten möter du en erfaren hudterapeut som hjälper dig att noggrant identifiera dina svarta pormaskar. Tillsammans utvecklar ni en skräddarsydd behandlingsplan som är inriktad specifikt på att adressera och behandla dina svarta pormaskar.',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            url_label: 'Få gratis konsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder skonsamma men effektiva behandlingar för att avlägsna svarta pormaskar, anpassade efter dina unika hudbehov. Behandlingen syftar till att säkert och effektivt eliminera svarta pormaskar och ge din hud ett friskare och renare utseende.',
            url: 'problemhy/pormaskar/pormaskbehandling',
            url_label: 'Se portömning',
            url_title: 'Utforska våra skräddarsydda portömning'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att utveckla en anpassad hudvårdsrutin för att förebygga uppkomsten av nya svarta pormaskar. Genom att välja ut produkter som passar just din hudtyp, strävar vi efter att hjälpa dig upprätthålla en hälsosam hudbalans och förebygga framtida hudproblem.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            url_label: 'Se produkter',
            url_title: 'Hitta de bästa produkterna för att förebygga svarta pormaskar'
      ),
);
$treatment_link = '<a href="problem/pormaskar/pormaskbehandling" title="Utforska effektiv portömning" class="mt-xl button b200 outline expand auto-width">Läs mer om vår portömning</a>';

$top_articles = array(
    'areas' => new Article(
        title: 'Var uppstår svarta pormaskar?',
        image_small: null,
        image_large: null,
        image_alt: '',
        image_title: '',
        content: '<p class="p200">Att förstå uppkomsten av svarta pormaskar är viktigt för att effektivt behandla och förebygga dem. En noggrann hudanalys är en avgörande del av konsultationen hos AcneSpecialisten. Under denna initiala bedömning identifierar vi områden med svarta pormaskar och analyserar orsakerna bakom dessa hudproblem. Denna förståelse är central för att utforma en individuellt anpassad behandlingsplan för dina specifika hudvårdsbehov.</p>
      <p class="p200 mt-m">svarta pormaskar, ofta kända som pormaskar, uppstår vanligtvis i områden med ökad talgproduktion, såsom ansiktet, näsan och pannan. De orsakas av en kombination av överproduktion av hudolja och ansamling av döda hudceller som blockerar porerna. För att undvika förvärring av svarta pormaskar är det viktigt att undvika hudirriterande produkter och att skydda huden från skadliga miljöpåverkan, såsom solskador. Våra hudterapeuter ger dig vägledning för att förbereda och vårda din hud inför och efter behandlingar som syftar till att minska svarta pormaskar, såsom Dermapen, för att säkerställa en effektiv och trygg behandlingsupplevelse.</p>',
    ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina svarta pormaskar?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina svarta pormaskar?',
            image_title: 'När ska jag söka hjälp med mina svarta pormaskar?',
            content: '<p class="p200">svarta pormaskar är en av de mest förekommande hudåkommorna och kan drabba personer i alla åldrar. Även om de i många fall är ofarliga och mestadels en estetisk bekymmer, kan de påverka självkänslan och orsaka obehag. Om du märker att dina svarta pormaskar börjar påverka ditt välbefinnande, eller om du har provat olika produkter och hemmabehandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att komma ihåg att alla kan söka hjälp, oavsett om du har enstaka svarta pormaskar eller ett mer utbrett problem. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård.</p>
            <p class="p200 mt-m">Hos en hudspecialist kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just ditt hudproblem. En expert kan analysera din hudtyp, diskutera möjliga orsaker till dina svarta pormaskar och rekommendera den mest effektiva behandlingsmetoden för dig. Detta kan inkludera allt från djuprengöring och portömning till mer avancerade hudvårdsprodukter. Så, om du känner att dina svarta pormaskar har blivit en belastning eller om du helt enkelt vill ha en problemfri hy, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot bättre hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten?',
            image_title: 'Varför ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du är ute efter en effektiv och långsiktig lösning på dina svarta pormaskar, är AcneSpecialisten det självklara valet. Vi har över 30 års erfarenhet inom hudvård och en specialisering i att behandla svarta pormaskar. Oavsett om du har enstaka svarta pormaskar eller en mer utbredd problematik, kan vi erbjuda en skräddarsydd lösning som passar just dig.</p>
            <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att du ska få bästa möjliga resultat. Vårt team av hudterapeuter står redo att erbjuda en individuellt anpassad behandlingsplan och att stötta dig genom hela processen. Med regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att du får en långvarig förbättring.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för dina svarta pormaskar. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig att uppnå och bibehålla en klar och frisk hud. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val för behandling av svarta pormaskar.</p>',
      ),
);

$headline01 = "01. Identifiera dina svarta pormaskar";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en AcneSpecialist utförs en undersökning av dina svarta pormaskar. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för svarta pormaskar',
      image_title: 'Konsultation för svarta pormaskar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      consultation_url_label: 'Boka tid för hudkonsultation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för svarta pormaskar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om vår hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'

);

$headline02 = "02. Behandla svarta pormaskar";

$services = array(

      new Service(
            title: 'Portömning',
            duration: '60 min',
            price: '995 kr',
            content: 'Portömning är en specialiserad ansiktsbehandling som syftar till att effektivt rensa porer från talg och orenheter. Behandlingen utförs genom en försiktig extrahering av svarta pormaskar och kan leda till minskad inflammation och förstorade porer. Detta kan inte bara förbättra hudens textur utan även minska risken för framtida akneutbrott.',
            image_small: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_large: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_alt: 'Bild av en portömning',
            image_title: 'Portömning som behandling för svarta pormaskar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för portömning',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Service_Facial_PoreExtraction',
            booking_url_label: 'Boka tid för portömning',
            booking_url_title: 'Klicka för att boka tid för en portömning',
            url: 'portomning.php',
            url_label: 'Läs mer om portömning',
            url_title: 'Läs mer om portömning'
      ),

);

$headline03 = "03. Förebygg uppkomsten av nya svarta pormaskar";

$products = array(
      new Service(
            title: 'Produkter mot svarta pormaskar',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt bekämpa och förebygga svarta pormaskar är daglig behandling med rätt produkter avgörande. Våra akneprodukter är speciellt utformade för att hålla din hud i balans och förhindra att nya svarta pormaskar uppstår.',
            image_small: 'bilder/behandlingar/200x200/produkter.webp',
            image_large: 'bilder/behandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av svarta pormaskar',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av svarta pormaskar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för portömning',
            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            booking_url_title: 'Klicka för att köpa produktpaket mot pormaskar',
      )
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_alt: 'Akne resultat',
            image_title: 'Akne resultat',
            treatment: new ResultTreatment(
                  duration: '3 månader',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_alt: 'Akne resultat',
            image_title: 'Akne resultat',
            treatment: new ResultTreatment(
                  duration: '2 månader',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_alt: 'Rosacea resultat',
            image_title: 'Rosacea resultat',
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
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: 'images/brands/trustpilot.svg'

      ),
      new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: 'images/brands/google-small.svg'

      ),
      new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
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
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Pormaskar',
            aka: 'Vita & Svarta pormaskar',
            image: 'bilder/problem/200x200/pormaskar.webp',
            image_alt: 'Bild som skildrar pormaskar',
            image_title: 'Pormaskar - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'pormaskar.php',
            url_title: 'Pormaskar'
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
                                    <div>
                                          <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="mt-xs button b50 bright">
                                                <?php echo $aka->label ?>
                                          </a>
                                    </div>
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