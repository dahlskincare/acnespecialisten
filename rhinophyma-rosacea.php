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
      description: 'Utforska vad som kännetecknar rhinophyma rosacea, ett tillstånd som involverar kronisk inflammation och förtjockning av huden på näsan vilket ofta brukar kallas potatisnäsa eller portvinsnäsa. Vi diskuterar varför tillståndet uppstår och hur AcneSpecialisten kan stödja dig genom behandlingsprocessen.',
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

$floating_box = 'En översikt om rhinophyma rosacea och dess behandling';

$description_title = 'Vad är rhinophyma rosacea?';
$description_text = '<p class="p200">Rhinophyma rosacea är en särskilt svår form av rosacea som huvudsakligen påverkar näsan. Det kännetecknas av en signifikant förtjockning och rödhet av huden, ofta med en ojämn, knölig yta. Tillståndet utvecklas vanligtvis över tid och är mer frekvent hos män, särskilt de som är mitt i livet eller äldre.</p>
<p class="p200 mt-m">Orsaken till rhinophyma rosacea är genetiskto och även om tillståndet främst är estetiskt störande kan det i allvarligare fall leda till andningssvårigheter. Hos AcneSpecialisten fokuserar vi på att förstå varje individs unika situation och erbjuda skräddarsydda behandlingsplaner. Här hittar du våra resultat i form av <a class="b200 underline color-deep-sea-400" href="/resultat-rosacea.php" title="Mer information om rosacea bilder på näsan">rosacea bilder på näsan</a>.</p>';

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
            content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika rhinophyma rosacea, så att du snabbt och säkert blir av med problemet.',
            url_label: 'Se behandlingar',
            url: 'rosaceabehandling.php',
            url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny rhinophyma rosacea och hålla din hud i balans.',
            url_label: 'Se produkter',
            url: 'https://www.dahlskincare.com/sv/produktkategorier/produktpaket/rosacea',
            url_title: 'Hitta de bästa produkterna för att förebygga rosacea'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När rosacean är borta fokuserar vi på att reducera eventuella ytliga blodkärl med behandlingsmetoder som IPL för en jämn och problemfri hud.',
            url_label: 'Se IPL behandlingar',
            url: 'ipl-rosacea.php',
            url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
      ),

);
$treatment_link = '<a href="rosaceabehandling.php" title="Utforska effektiva aknebehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra rosaceabehandlingar</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Var uppstår problemet?',
            image_small: null,
            image_large: null,
            image_alt: null,
            image_title: null,
            content: '<p class="p200"><a class="b200 underline color-deep-sea-400" href="/rosacea.php" title="Mer information om rosacea på näsan">Rosacea på näsan</a> är en särskild och avancerad form som kännetecknas av en betydande förtjockning och rödhet av näshuden, och kan resultera i en knölig, ojämn yta. Denna tillstånd uppträder uteslutande på näsan och är känt för att gradvis förändra dess form och storlek. Rhinophyma utvecklas över tid och är oftare sett hos män än hos kvinnor. Även om det är en sällsyntare manifestation av rosacea, är det viktigt att korrekt identifiera och behandla rhinophyma för att förhindra ytterligare progression och förbättra patientens livskvalitet.</p>
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
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med min rhinophyma rosacea?',
            image_title: 'När ska jag söka hjälp med min rhinophyma rosacea?',
            content: '<p class="p200">Om du upplever några tecken på rhinophyma rosacea, såsom en gradvis förtjockning eller förändring i formen på näsan, är det viktigt att omedelbart söka professionell hjälp. Tidiga stadier kan vara svåra att skilja från vanlig rosacea, men att ignorera symtomen kan leda till att tillståndet förvärras och blir svårare att behandla.</p>
            <p class="p200 mt-m">En tidig konsultation hos en hudterapeut är avgörande för att bedöma tillståndet och diskutera de bästa behandlingsalternativen. Ju tidigare du identifierar problemet och påbörjar lämplig behandling, desto större är chansen att effektivt hantera tillståndet och förhindra ytterligare progression. Att söka behandling snabbt kan också bidra till att minska eventuella psykologiska påfrestningar och förbättra din livskvalitet. Oavsett om rhinophyma är i ett tidigt eller mer avancerat skede, är professionell rådgivning och behandling nyckeln till att hantera detta tillstånd effektivt.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för min rhinophyma rosacea?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för min rhinophyma rosacea?',
            content: '<p class="p200">Om du söker en expert på behandling av rhinophyma rosacea, är AcneSpecialisten det självklara valet. Med vårt engagemang för kvalitet och vår omfattande erfarenhet inom avancerad hudvård, står vi redo att erbjuda dig den expertis som krävs för att hantera detta komplexa tillstånd effektivt.</p>
            <p class="p200 mt-m">På AcneSpecialisten använder vi oss av de senaste och mest avancerade behandlingsmetoderna och teknologierna specifikt anpassade för rhinophyma. Vårt team av kvalificerade hudterapeuter är utbildade att noggrant utvärdera och behandla rhinophyma rosacea, med ett fokus på att minimera symptomen och förbättra både utseendet och funktionen av din hud.</p>
            <p class="p200 mt-m">När du väljer att besöka AcneSpecialisten för din rhinophyma får du inte bara tillgång till skräddarsydda behandlingsplaner, utan också en partner i din hudvårdsresa. Vi tror på en holistisk behandlingsansats, vilket innebär att vi erbjuder support och vägledning genom hela processen, från första konsultationen till uppföljning och underhåll. Vårt mål är att du ska känna dig informerad, omhändertagen och säker på att du får den bästa möjliga vård för din hud.</p>',
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
            price: '1295 kr',
            content: 'En effektiv ansiktsbehandling mot rosacea fokuserar på att lindra rodnad och inflammation. Genom att använda specialanpassade produkter och tekniker kan denna behandling bidra till att förbättra hudens textur och utseende.',
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
            content: 'För att effektivt behandla och förebygga rosacea är daglig behandling med rätt produkter avgörande. Våra rosacea-produkter är speciellt utformade för att hålla din hud i balans och förhindra att nya rosacea-flare-ups uppstår.',
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
            title: 'Reparerar ytliga blodkärl',
            duration: '20-50 min',
            price: 'Från 1595 kr',
            content: 'Rosacea är en kronisk hudåkomma som kan leda till rodnad, utslag, och i vissa fall svullnad i ansiktet. Intense Pulsed Light (IPL) kan användas för att effektivt behandla rosacea genom att minska rodnad och synliga blodkärl. Klicka här för att läsa mer om hur du kan behandla din rosacea med IPL.',
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat";



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

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i rosaceabehandling',
            image_title: 'Cazzandra Lindberg - Expert på rosaceabehandling'
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
$specialist_url_title = "Hudterapeuter specialiserade på Rhinophyma Rosacea";

$related_problems = array(
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med rosacea',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med rosacea',
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
            url: 'https://www.dahlskincare.com/sv/,
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