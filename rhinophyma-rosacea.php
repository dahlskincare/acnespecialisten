<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Rhinophyma och Rosacea - Orsaker, Behandlingar och Förebyggande | Acnespecialisten';
$seo_description = 'Upptäck viktiga fakta om rhinophyma, en avancerad form av rosacea, och hur det påverkar huden. Få insikter i effektiva behandlingar och omsorgsmetoder med Acnespecialistens expertis.';
$seo_keywords = 'rhinophyma, rosacea, rhinophyma behandling, orsaker till rhinophyma, förebygga rhinophyma, ta bort rhinophyma, avancerad rosacea, hudsjukdomar, rosaceaärr, förtjockad hud på näsan';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'bilder/problem/424x456/rosacea.webp';

$title = 'Rhinophyma Rosacea';

$image_small = 'bilder/problem/424x324/rosacea.webp';
$image_large = 'bilder/problem/424x456/rosacea.webp';
$image_title = 'Visar en hud med rhinophyma rosacea';
$image_alt = 'Bild som illustrerar hur rhinophyma rosacea ser ut på huden';
$description = 'Utforska vad som kännetecknar rhinophyma rosacea, ett tillstånd som involverar kronisk inflammation och förtjockning av huden på näsan. Vi diskuterar varför tillståndet uppstår och hur AcneSpecialisten kan stödja dig genom behandlingsprocessen.';

$floating_box = 'En översikt om rhinophyma rosacea och dess behandling';

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne";
$consultation_url_title = "Gratis Konsultation för rosacea";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Acne";
$booking_url_title = "Boka rosaceabehandling";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för rosacea";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka rosaceabehandling";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för rosacea";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka rosaceabehandling";

$nav_buttons = array(
      'about' => 'Om rhinophyma rosacea',
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

$description_title = 'Vad är rhinophyma rosacea?';
$description_text = '<p class="p200">Rhinophyma rosacea är en särskilt svår form av rosacea som huvudsakligen påverkar näsan. Det kännetecknas av en signifikant förtjockning och rödhet av huden, ofta med en ojämn, knölig yta. Tillståndet utvecklas vanligtvis över tid och är mer frekvent hos män, särskilt de som är mitt i livet eller äldre.</p>
<p class="p200 mt-m">Orsaken till rhinophyma rosacea är genetiskto och även om tillståndet främst är estetiskt störande kan det i allvarligare fall leda till andningssvårigheter. Hos AcneSpecialisten fokuserar vi på att förstå varje individs unika situation och erbjuda skräddarsydda behandlingsplaner.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rhinophyma rosacea och skapar en individuell behandlingsplan.',
            url_label: 'Få gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika rhinophyma rosacea, så att du snabbt och säkert blir av med problemet.',
            url_label: 'Se behandlingar',
            url: 'rosaceabehandling.php',
            url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny rhinophyma rosacea och hålla din hud i balans.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            url_title: 'Hitta de bästa produkterna för att förebygga rosacea'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När rosacean är borta fokuserar vi på att reducera eventuella ytliga blodkärl med behandlingsmetoder som IPL för en jämn och problemfri hud.',
            url_label: 'Se IPL-behandlingar',
            url: 'ipl-rosacea.php',
            url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
      ),

);
$treatment_link = '<a href="problem/rosacea/rosaceabehandling" title="Utforska effektiva aknebehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra rosaceabehandlingar</a>';

$top_articles = array(
    'omraden' => new Article(
        title: 'Rhinophyma Rosacea områden',
        image_small: '',
        image_large: '',
        image_alt: '',
        image_title: '',
        content: '<p class="p200">Rhinophyma rosacea är en särskild och avancerad form av rosacea som påverkar näsan. Det kännetecknas av en betydande förtjockning och rödhet av näshuden, och kan resultera i en knölig, ojämn yta. Denna tillstånd uppträder uteslutande på näsan och är känt för att gradvis förändra dess form och storlek. Rhinophyma utvecklas över tid och är oftare sett hos män än hos kvinnor. Även om det är en sällsyntare manifestation av rosacea, är det viktigt att korrekt identifiera och behandla rhinophyma för att förhindra ytterligare progression och förbättra patientens livskvalitet.</p>
      <p class="p200 mt-m">För att förstå ditt specifika tillstånd och utforska behandlingsalternativ, är en konsultation med en hudterapeut nödvändig. En hudterapeut kan ge en personlig bedömning och rekommendera en behandlingsplan anpassad för dina behov.</p>',
      tags: array(new ArticleTag(
            icon: 'man',
            label: 'Män'
        ), new ArticleTag(
            icon: 'nasa',
            label: 'Näsa'
        ))
    ),
);

$articles = array(

      new Article(
            title: 'När ska jag söka hjälp med min rhinophyma rosacea?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag söka hjälp med min rhinophyma rosacea?',
            image_title: 'När ska jag söka hjälp med min rhinophyma rosacea?',
            content: '<p class="p200">Om du upplever några tecken på rhinophyma rosacea, såsom en gradvis förtjockning eller förändring i formen på näsan, är det viktigt att omedelbart söka professionell hjälp. Tidiga stadier kan vara svåra att skilja från vanlig rosacea, men att ignorera symtomen kan leda till att tillståndet förvärras och blir svårare att behandla.</p>
            <p class="p200 mt-m">En tidig konsultation hos en hudterapeut är avgörande för att bedöma tillståndet och diskutera de bästa behandlingsalternativen. Ju tidigare du identifierar problemet och påbörjar lämplig behandling, desto större är chansen att effektivt hantera tillståndet och förhindra ytterligare progression. Att söka behandling snabbt kan också bidra till att minska eventuella psykologiska påfrestningar och förbättra din livskvalitet. Oavsett om rhinophyma är i ett tidigt eller mer avancerat skede, är professionell rådgivning och behandling nyckeln till att hantera detta tillstånd effektivt.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för min rhinophyma rosacea?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför ska jag besöka AcneSpecialisten för min rhinophyma rosacea?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för min rhinophyma rosacea?',
            content: '<p class="p200">Om du söker en expert på behandling av rhinophyma rosacea, är AcneSpecialisten det självklara valet. Med vårt engagemang för kvalitet och vår omfattande erfarenhet inom avancerad hudvård, står vi redo att erbjuda dig den expertis som krävs för att hantera detta komplexa tillstånd effektivt.</p>
            <p class="p200 mt-m">På AcneSpecialisten använder vi oss av de senaste och mest avancerade behandlingsmetoderna och teknologierna specifikt anpassade för rhinophyma. Vårt team av kvalificerade hudterapeuter är utbildade att noggrant utvärdera och behandla rhinophyma rosacea, med ett fokus på att minimera symptomen och förbättra både utseendet och funktionen av din hud.</p>
            <p class="p200 mt-m">När du väljer att besöka AcneSpecialisten för din rhinophyma får du inte bara tillgång till skräddarsydda behandlingsplaner, utan också en partner i din hudvårdsresa. Vi tror på en holistisk behandlingsansats, vilket innebär att vi erbjuder support och vägledning genom hela processen, från första konsultationen till uppföljning och underhåll. Vårt mål är att du ska känna dig informerad, omhändertagen och säker på att du får den bästa möjliga vård för din hud.</p>',
      ),

);

$headline01 = "01. Identifiera din rosacea";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist på rosacea utförs en undersökning av din hud. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'bilder/behandlingar/200x200/gratis-hudkonsultation.webp',
      image_large: 'bilder/behandlingar/200x200/gratis-hudkonsultation.webp',
      image_alt: 'Bild av en konsultation för rosaceabehandling',
      image_title: 'Konsultation för rosaceabehandling',
      consultation_url: 'consultation-booking?problem=rosacea',
      consultation_url_label: 'Boka tid för hudkonsultation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för rosacea',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om vår hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'
);

$headline02 = "02. Behandla aktiv rosacea";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot rosacea',
            duration: '60 min',
            price: '995 kr',
            content: 'En effektiv ansiktsbehandling mot rosacea fokuserar på att lindra rodnad och inflammation. Genom att använda specialanpassade produkter och tekniker kan denna behandling bidra till att förbättra hudens textur och utseende.',
            image_small: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_large: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',
            consultation_url: 'consultation-booking?problem=rosacea&service=classicFacials',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot rosacea',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/rosacea-konsultation-1643922',
            booking_url_label: 'Boka tid för ansiktsbehandling mot rosacea',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot rosacea',
            url: 'rosaceabehandling.php',
            url_label: 'Läs mer om ansiktsbehandling för rosacea',
            url_title: 'Läs mer om ansiktsbehandling för rosacea'
      ),
);

$headline03 = "03. Förebygg uppkomsten av ny rosacea";

$products = array(
      new Service(
            title: 'Produkter mot rosacea',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt behandla och förebygga rosacea är daglig behandling med rätt produkter avgörande. Våra rosacea-produkter är speciellt utformade för att hålla din hud i balans och förhindra att nya rosacea-flare-ups uppstår.',
            image_small: 'bilder/behandlingar/200x200/produkter.webp',
            image_large: 'bilder/behandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av rosacea',
            image_title: 'Effektiva produkter för behandling och förebyggande av rosacea',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            url_label: 'Läs mer om produkter mot rosacea',
            url_title: 'Klicka här för att läsa mer om produkter mot rosacea'
      )
);

$headline04 = "04. Reparera post-rosacea";

$procedures = array(
      new Service(
            title: 'Reparerar ytliga blodkärl',
            duration: '60 minuter',
            price: 'Pris från 1595 kr',
            content: 'Rosacea är en kronisk hudåkomma som kan leda till rodnad, utslag, och i vissa fall svullnad i ansiktet. Intense Pulsed Light (IPL) kan användas för att effektivt behandla rosacea genom att minska rodnad och synliga blodkärl. Klicka här för att läsa mer om hur du kan behandla din rosacea med IPL.',
            image_small: 'bilder/behandlingar/200x200/ipl.webp',
            image_large: 'bilder/behandlingar/200x200/ipl.webp',
            image_alt: 'Behandla rosacea med IPL',
            image_title: 'Behandla rosacea med IPL',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'ipl-rosacea.php',
            url_label: 'Läs mer om behandlingar mot ytliga blodkärl',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot ytliga blodkärl'
      ),
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
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all rosacea efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: 'images/brands/trustpilot.svg'

      ),
      new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och rosacean är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: 'images/brands/google-small.svg'

      ),
      new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min rosacea med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily',
            stars: 5,
            logo_url: 'images/brands/bokadirekt-small.svg'
      ),

);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om rhinophyma rosacea' => array(
            new Question(
                title: 'Vilka är de vanligaste symtomen på rhinophyma?',
                text: '<p class="p200">De vanligaste symtomen på rhinophyma inkluderar en markant förtjockning av huden på näsan, en röd, svullen och knölig yta, samt förstorade porer och talgkörtlar. Detta kan leda till en synlig deformation av näsan och i vissa fall orsaka andningsproblem. Symtomen utvecklas gradvis och kan förvärras utan behandling.</p>'
            ),

            new Question(
                title: 'Är rhinophyma ärftligt?',
                text: '<p class="p200">Även om den exakta orsaken till rhinophyma inte är fullständigt känd, finns det bevis som tyder på att genetiska faktorer kan spela en roll. Personer med en familjehistoria av rosacea eller rhinophyma kan vara mer benägna att utveckla tillståndet.</p>'
            ),

            new Question(
                title: 'Hur kan jag skydda min hud från solen om jag har rhinophyma?',
                text: '<p class="p200">Skydd mot solen är avgörande om du har rhinophyma. Använd en bredspektrum solskyddskräm dagligen, bär skyddande kläder och hatt, och undvik att vara ute i starkt solljus, särskilt mitt på dagen. Detta hjälper inte bara till att skydda huden utan också till att förebygga förvärring av symtomen.</p>'
            ),

            new Question(
                title: 'På vilka sätt skiljer sig rhinophyma från andra hudtillstånd som påverkar näsan?',
                text: '<p class="p200">Rhinophyma är unikt genom sin uttalade förtjockning och grovhet av huden på näsan, vilket inte ses i andra hudtillstånd. Till skillnad från akne, som också kan påverka näsan, karaktäriseras rhinophyma av en permanent förändring av hudens struktur snarare än temporära utbrott.</p>'
            ),

            new Question(
                title: 'Finns det några kända triggers som kan förvärra rhinophyma?',
                text: '<p class="p200">Ja, vissa faktorer kan förvärra rhinophyma, inklusive stark sol, extrema temperaturer, stark mat och alkohol, stress och vissa hudvårdsprodukter. Att undvika dessa triggers kan hjälpa till att hantera tillståndet och förhindra att det förvärras.</p>'
            ),
      ),
      'Behandling mot rosacea' => array(
            new Question(
                title: 'Vilka är de mest effektiva behandlingarna för rhinophyma?',
                text: '<p class="p200">De mest effektiva behandlingarna för rhinophyma innefattar en kombination av rätt hudvårdsprodukter och behandlignar som behandlar och balanserar huden. Dessa behandlingar syftar till att jämna ut hudens yta och förbättra näsans utseende.</p>'
            ),

            new Question(
                title: 'Vad är de potentiella riskerna och biverkningarna av rhinophyma?',
                text: '<p class="p200">De potentiella riskerna och biverkningarna av rhinophyma-behandlingar kan inkludera infektion, ärrbildning, pigmentförändringar och ojämnheter i hudens textur. En noggrann konsultation och uppföljning med erfaren hudspecialist är avgörande för att minimera dessa risker.</p>'
            ),

            new Question(
                title: 'Finns det något jag kan göra för att förhindra att mitt rhinophyma blir värre?',
                text: '<p class="p200">Först och främst är det viktigt att identifiera och behandla problemet tidigt innan de hinner utvecklas och bli värre. När det väl brutit ut är det viktigt att förhindra att rhinophyma blir värre är det viktigt att skydda huden mot solen, undvika kända triggers som stark mat och alkohol, och följa en skonsam hudvårdsrutin. Regelbundna hudkonsultationer och tidig behandling av rosaceasymtom kan också bidra till att förebygga utvecklingen av rhinophyma.</p>'
            ),

      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till rhinophyma rosacea";

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
$skinguide_url_title = "Läs fler guider om rhinophyma rosacea";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i rosaceabehandling',
            image_title: 'Cazzandra Lindberg - Expert på rosaceabehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på rosacea',
            image_title: 'Veronika Benedik - Specialist inom rosaceavård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom rosaceahantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på rosacea'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot rosaceabehandling',
            image_title: 'Vilma Libom - Expert inom rosaceabehandling'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "rhinophyma rosacea Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/problem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med rosacea',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med rosacea',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
);
$brands = array(
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite-photonova',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: 'dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen Brand Logo',
            image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'cryopen.php',
            url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
      ),
      new Brand(
            label: 'Alma',
            image: 'bilder/logotyper/alma.svg',
            image_alt: 'Alma Brand Logo',
            image_title: 'Alma - Laser, IPL och RF (Radiofrekvens) Teknologi för Hudföryngring',
            url: 'varumarken/alma',
            url_title: 'Läs mer om Alma Laser, IPL och RF Hudvårdsteknologi',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33 Brand Logo',
            image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
            url: 'prx-t33.php',
            url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'Hydrafacial Brand Logo',
            image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
            url: 'hydrafacial.php',
            url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion Brand Logo',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
            url: 'infuzion.php',
            url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för rhinophyma rosaceabehandling";

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
                        <section id="treatment-solutions">
                              <h2 class="h500"><?php echo $headline04 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($procedures as $service) { ?>
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