<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Rhinophyma rosacea på näsan | AcneSpecialisten';
$seo_description = 'Om rhinophyma, en avancerad form av rosacea, och hur det påverkar huden. Få insikter i effektiva behandlingar och metoder.';
$seo_keywords = 'rhinophyma, rosacea, rhinophyma behandling, orsaker till rhinophyma, förebygga rhinophyma, ta bort rhinophyma, avancerad rosacea, hudsjukdomar, rosaceaärr, förtjockad hud på näsan';
$seo_image = 'bilder/hudproblem/424x456/rosacea.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Rhinophyma Rosacea', '/rhinophyma-rosacea.php'),
);

$image_small = 'bilder/hudproblem/358x274/rosacea.webp';
$image_large = 'bilder/hudproblem/424x456/rosacea.webp';
$image_title = 'Visar en hud med rhinophyma rosacea';
$image_alt = 'Bild som illustrerar hur rhinophyma rosacea ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Rhinophyma Rosacea',
      description: 'Utforska vad som kännetecknar rhinophyma rosacea, ett tillstånd som involverar kronisk inflammation och förtjockning av huden på näsan, vilket ofta kallas potatisnäsa eller portvinsnäsa. Vi diskuterar varför tillståndet uppstår och hur AcneSpecialisten kan stödja dig genom behandlingsprocessen.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
);

$floating_box = 'En översikt över rhinophyma rosacea och dess behandling';

$description_title = 'Vad är rhinophyma rosacea?';
$description_text = '<p class="p200">Rhinophyma rosacea är en särskilt svår form av rosacea som sätter sig på näsan. Den långvariga inflammationen får talgkörtlar och bindväv att växa till, så att huden gradvis blir tjockare, rödare och ofta får en ojämn, knölig yta. Förändringen kommer långsamt över tid och drabbar oftare män, särskilt i medelåldern och uppåt.</p>
<p class="p200 mt-m">Rhinophyma rosacea har en ärftlig komponent, och även om tillståndet främst är estetiskt störande kan det i allvarligare fall leda till andningssvårigheter. Hos AcneSpecialisten börjar vi med att bedöma hur långt förtjockningen gått och lägger upp behandlingen efter det. Här hittar du våra resultat i form av <a class="b200 underline color-deep-sea-400" href="/resultat-rosacea.php" title="Mer information om rosacea bilder på näsan">rosacea bilder på näsan</a>.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rhinophyma rosacea och skapar en individuell behandlingsplan.',
            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma behandlingar anpassade efter din rhinophyma rosacea, för att lindra symtomen och jämna ut huden.',
            url_label: 'Se behandlingar',
            url: 'rosaceabehandling.php',
            url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp, för att förebygga ny rhinophyma rosacea och hålla huden lugn.',
            url_label: 'Se produkter',
            url: 'https://www.dahlskincare.com/sv/produktkategorier/produktpaket/rosacea',
            url_title: 'Se produkter som förebygger rosacea'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När rosacean är under kontroll reducerar vi eventuella ytliga blodkärl med behandlingsmetoder som IPL, för en jämnare hud.',
            url_label: 'Se IPL behandlingar',
            url: 'ipl-rosacea.php',
            url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
      ),

);
$treatment_link = '<a href="rosaceabehandling.php" title="Utforska våra rosaceabehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra rosaceabehandlingar</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår problemet?',
            image_small: null,
            image_large: null,
            image_alt: null,
            image_title: null,
            content: '<p class="p200"><a class="b200 underline color-deep-sea-400" href="/rosacea.php" title="Mer information om rosacea på näsan">Rosacea på näsan</a> kan i sällsynta fall utvecklas till rhinophyma, som uppträder uteslutande på näsan och med tiden förändrar både dess form och storlek. Upptäcks förändringen tidigt är den lättare att behandla, innan förtjockningen hunnit bli omfattande.</p>
      <p class="p200 mt-m">Vill du veta var du står börjar det med en konsultation: hudterapeuten undersöker näsans hud, bedömer hur långt förändringen gått och lägger upp en behandlingsplan utifrån det.</p>',
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
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med min rhinophyma rosacea?',
            image_title: 'När ska jag söka hjälp med min rhinophyma rosacea?',
            content: '<p class="p200">Märker du att huden på näsan gradvis blir tjockare eller att formen börjar förändras är det läge att boka en bedömning. Tidiga stadier kan vara svåra att skilja från vanlig rosacea, och ju tidigare behandlingen börjar, desto lättare är tillståndet att bromsa.</p>
            <p class="p200 mt-m">Vid konsultationen bedömer hudterapeuten vilket stadium förtjockningen är i och går igenom behandlingsalternativen med dig. Många upplever också att det lättar att ha en plan: näsan sitter mitt i ansiktet, och tillståndet kan tynga mer än man visar. Behandling går att inleda oavsett om rhinophyman är i ett tidigt eller mer framskridet skede.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för min rhinophyma rosacea?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för min rhinophyma rosacea?',
            content: '<p class="p200">Söker du en expert på behandling av rhinophyma rosacea? Med mer än 30 års erfarenhet inom hudvård och rosacea i alla dess former har AcneSpecialisten den expertis som krävs för det här komplexa tillståndet.</p>
            <p class="p200 mt-m">Behandlingen läggs upp efter hur långt rhinophyman gått: ansiktsbehandlingar som lindrar inflammationen, produkter som håller huden i balans och IPL mot rodnad och ytliga kärl. Våra hudterapeuter utvärderar huden vid varje steg, med sikte på att dämpa symtomen och förbättra både näsans utseende och hudens funktion.</p>
            <p class="p200 mt-m">Din personliga hudterapeut följer dig hela vägen, från första konsultationen till uppföljning och underhåll. Du ska alltid veta vad nästa steg är och varför.</p>',
      ),

);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist på rosacea utförs en undersökning av din hud. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'bilder/behandlingar/200x200/gratis-hudkonsultation.webp',
      image_large: 'bilder/behandlingar/200x200/gratis-hudkonsultation.webp',
      image_alt: 'Bild av en konsultation för rosaceabehandling',
      image_title: 'Konsultation för rosaceabehandling',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för rosacea',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot rosacea',
            duration: '60 min',
            price: '1595 kr',
            content: 'Ansiktsbehandlingen mot rosacea kan lindra rodnad och inflammation och med tiden förbättra hudens textur och utseende. Produkterna och teknikerna är anpassade för rosaceahud.',
            image_small: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_large: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot rosacea',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Rosacea&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot rosacea',
            url: 'rosaceabehandling.php',
            url_label: 'Läs mer om ansiktsbehandling',
            url_title: 'Läs mer om ansiktsbehandling för rosacea'
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot rosacea',
            duration: null,
            price: 'Från 1495 kr',
            content: 'Daglig behandling med rätt produkter hjälper till att hålla rosacean i schack mellan behandlingarna. Produkterna är framtagna för rosaceahud och kan minska risken för nya utbrott.',
            image_small: 'bilder/behandlingar/200x200/produkter.webp',
            image_large: 'bilder/behandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av rosacea',
            image_title: 'Effektiva produkter för behandling och förebyggande av rosacea',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot rosacea',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://www.dahlskincare.com/sv/produktkategorier/produktpaket/rosacea',
            booking_url_title: 'Klicka för att köpa produktpaket mot rosacea',
      )
);

$headline04 = "04. Reparera";

$procedures = array(
      new Service(
            title: 'IPL mot ytliga blodkärl',
            duration: '20-70 min',
            price: 'Från 1995 kr',
            content: 'När rosacean är under kontroll kan kvarvarande rodnad och ytliga blodkärl behandlas med IPL, intensivt pulserande ljus. Ljuset riktar in sig på de små blodkärlen som ger rodnaden och kan minska både rodnaden och de synliga kärlen.',
            image_small: 'bilder/behandlingar/200x200/ipl.webp',
            image_large: 'bilder/behandlingar/200x200/ipl.webp',
            image_alt: 'Behandla rosacea med IPL',
            image_title: 'Behandla rosacea med IPL',

            url: 'ipl-rosacea.php',
            url_label: 'Läs mer om behandlingarna',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot ytliga blodkärl',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling mot ytliga blodkärl',

            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_BloodVessels',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för IPL mot ytliga blodkärl',
      ),
);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-1.jpg',
            image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-1.jpg',
            image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-1.jpg',
            image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-1.jpg',
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
            image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-2.jpg',
            image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-2.jpg',
            image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-2.jpg',
            image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-2.jpg',
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
            image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-3.jpg',
            image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-3.jpg',
            image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-3.jpg',
            image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-3.jpg',
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
            image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-4.jpg',
            image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-4.jpg',
            image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-4.jpg',
            image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-4.jpg',
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
            image_before_small: '/bilder/resultat/rosacea/resultat-rosacea-fore-5.jpg',
            image_after_small: '/bilder/resultat/rosacea/resultat-rosacea-efter-5.jpg',
            image_before_large: '/bilder/resultat/rosacea/resultat-rosacea-fore-5.jpg',
            image_after_large: '/bilder/resultat/rosacea/resultat-rosacea-efter-5.jpg',
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

$results_images = array(
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-nasan.webp',
            image_alt: 'Rhinophyma rosacea på näsan före och efter behandling',
            image_title: 'Rhinophyma resultat - näsan',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-nasvingar.webp',
            image_alt: 'Rhinophyma rosacea på näsvingarna före och efter behandling',
            image_title: 'Rhinophyma resultat - näsvingar',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-nasa-kinder.webp',
            image_alt: 'Rhinophyma rosacea på näsa och kinder före och efter behandling',
            image_title: 'Rhinophyma resultat - näsa och kinder',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-svar-ansikte.webp',
            image_alt: 'Svår rhinophyma rosacea i ansiktet före och efter behandling',
            image_title: 'Rhinophyma resultat - svår rosacea',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-mycket-ansikte.webp',
            image_alt: 'Mycket rhinophyma rosacea i ansiktet före och efter behandling',
            image_title: 'Rhinophyma resultat - mycket rosacea',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-ansikte.webp',
            image_alt: 'Rhinophyma rosacea i ansiktet före och efter behandling',
            image_title: 'Rhinophyma resultat - ansikte',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-omfattande-rodnad-ansikte.webp',
            image_alt: 'Omfattande rodnad från rhinophyma före och efter behandling',
            image_title: 'Rhinophyma resultat - omfattande rodnad',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-kinder-nasa-rodnad.webp',
            image_alt: 'Rodnad på kinder och näsa från rhinophyma före och efter behandling',
            image_title: 'Rhinophyma resultat - kinder och näsa',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-rodnad.webp',
            image_alt: 'Rodnad från rhinophyma rosacea före och efter behandling',
            image_title: 'Rhinophyma resultat - rodnad',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/rosacea/rosacea-resultat-fore-efter-hela-ansiktet.webp',
            image_alt: 'Rhinophyma rosacea i hela ansiktet före och efter behandling',
            image_title: 'Rhinophyma resultat - hela ansiktet',
            content: '',
      ),
);

$results_url = '/resultat-rosacea.php';
$show_all_results_label = "Se alla resultat";
$show_all_results_title = "Se fler behandlingsresultat";



$faq_categories = array(
      'Generellt om rhinophyma rosacea' => array(
            new Question(
                  title: 'Vilka är de vanligaste symtomen på rhinophyma?',
                  text: '<p class="p200">De vanligaste symtomen är att huden på näsan förtjockas och blir röd, svullen och knölig, och att porer och talgkörtlar förstoras. Med tiden kan näsans form påverkas synligt, och vid kraftig förtjockning även andningen. Förändringen kommer gradvis och kan förvärras utan behandling.</p>'
            ),

            new Question(
                  title: 'Är rhinophyma ärftligt?',
                  text: '<p class="p200">Ärftligheten spelar en central roll: har du rosacea eller rhinophyma i släkten är risken högre att du utvecklar tillståndet. Exakt hur mekanismen ser ut är däremot inte helt klarlagd.</p>'
            ),

            new Question(
                  title: 'Hur kan jag skydda min hud från solen om jag har rhinophyma?',
                  text: '<p class="p200">Solen är en av de starkaste triggerna, så skydda huden varje dag: använd solskyddskräm med brett spektrum, bär skyddande kläder och hatt och undvik starkt solljus mitt på dagen. Det skyddar huden och förhindrar att symtomen förvärras.</p>'
            ),

            new Question(
                  title: 'På vilka sätt skiljer sig rhinophyma från andra hudtillstånd som påverkar näsan?',
                  text: '<p class="p200">Det som skiljer rhinophyma från andra hudtillstånd är den uttalade förtjockningen och grovheten i näsans hud. Akne kan också sätta sig på näsan, men går i skov, medan rhinophyma gradvis förändrar hudens struktur och inte går tillbaka av sig själv.</p>'
            ),

            new Question(
                  title: 'Finns det några kända triggers som kan förvärra rhinophyma?',
                  text: '<p class="p200">Ja. Stark sol, extrema temperaturer, kryddstark mat, alkohol, stress och vissa hudvårdsprodukter är kända triggers som kan förvärra rhinophyma. Att undvika sina triggers hjälper till att hålla tillståndet stabilt.</p>'
            ),
      ),
      'Behandling mot rosacea' => array(
            new Question(
                  title: 'Vilka är de mest effektiva behandlingarna för rhinophyma?',
                  text: '<p class="p200">En kombination av rätt hudvårdsprodukter hemma och behandlingar på kliniken. Vad som passar avgörs på konsultationen, utifrån hur utvecklat tillståndet är. Målet är att jämna ut hudens yta och förbättra näsans utseende.</p>'
            ),

            new Question(
                  title: 'Vilka risker och biverkningar har behandling av rhinophyma?',
                  text: '<p class="p200">Behandlingar av rhinophyma kan medföra risker som infektion, ärrbildning, pigmentförändringar och ojämnheter i hudens textur. Vi minskar riskerna genom noggrann konsultation och uppföljning hos en erfaren hudterapeut.</p>'
            ),

            new Question(
                  title: 'Finns det något jag kan göra för att förhindra att mitt rhinophyma blir värre?',
                  text: '<p class="p200">Fånga upp och behandla problemet tidigt, innan det hinner utvecklas. Har rhinophyman väl börjat utvecklas gäller det att skydda huden mot solen, undvika sina kända triggers och följa en skonsam hudvårdsrutin. Regelbundna hudkonsultationer och tidig behandling av rosaceasymtom kan också bromsa utvecklingen.</p>'
            ),

      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "Läs fler frågor om rhinophyma rosacea";

$specialists = array(
      new Specialist(
            name: 'Cazzandra L',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra L, hudterapeut med specialisering i rosaceabehandling',
            image_title: 'Cazzandra L - Expert på rosaceabehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på rosacea',
            image_title: 'Veronika Benedik - Specialist inom rosaceavård'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom rosaceahantering',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på rosacea'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot rosaceabehandling',
            image_title: 'Vilma Libom - Expert inom rosaceabehandling'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter specialiserade på rhinophyma rosacea";

$related_problems = array(
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, hudsjukdomen som rhinophyma utvecklas ur',
            image_title: 'Rosacea, hudsjukdomen bakom rhinophyma',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
);

$brands = array(
      new Brand(
            label: 'DAHL Skincare',
            image: 'bilder/logotyper/dahl-skincare.webp',
            image_alt: 'DAHL Skincare logotyp',
            image_title: 'DAHL Skincare - hudvårdsprodukter',
            url: 'https://www.dahlskincare.com/sv/',
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
            image_alt: 'Dermapen logotyp',
            image_title: 'Dermapen - microneedlingverktyg för hudföryngring',
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
$brands_url_title = "Varumärken för rhinophyma rosaceabehandling";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/rhinophyma-rosacea.php" />

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
                        <section id="treatment-solutions">
                              <h2 class="h500"><?php echo $headline04 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($procedures as $scm) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>

                        <section id="results">
                              <?php
                              $results_title = 'Rhinophyma före och efter bilder';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results_grid/results_grid.php');
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
                              <div class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('hudproblem/widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </div>
                        </section>
                        <section id="results-narrow" class="large-margin">
                              <?php
                              $results_title = 'Jämför resultaten';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php');
                              ?>
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