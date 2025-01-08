<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Rosacea | AcneSpecialisten';
$seo_description = 'Här hittar du allt om roacea och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'rosacea, vad triggar rosacea, rosacea kinder, rosacea näsa, rosacea panna';
$seo_image = 'bilder/hudproblem/424x456/rosacea.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Rosacea', '/rosacea.php'),
);

$image_small = 'bilder/hudproblem/358x274/rosacea.webp';
$image_large = 'bilder/hudproblem/424x456/rosacea.webp';
$image_title = 'Visar en hud med rosacea';
$image_alt = 'Bild som illustrerar hur rosacea ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Rosacea',
      description: 'Rosacea är en kronisk hudsjukdom som orsakar rodnad, inflammation och ytliga blodkärl i ansiktet. Den här sidan ger en översikt över sjukdomens symptom, stadier och de utlösande faktorer som kan förvärra tillståndet.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea', 'Boka gratis konsultation för rosacea'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea', 'Boka gratis konsultation för rosacea'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är rosacea?',
            content: '<p class="p200">Rosacea är en kronisk inflammatorisk hudsjukdom som kännetecknas av en ihållande rodnad i ansiktet, synliga blodkärl, vätskefyllda blåsor och ibland röda utslag som liknar akne. Sjukdomen har ett kroniskt och ofta cykliskt förlopp, vilket innebär att symtomen fluktuerar över tid, med perioder av försämring följt av perioder av förbättring.</p>',

            extended_content: '<p class="p200 mt-xl">Det finns fyra subtyper av rosacea som varierar i symtom och svårighetsgrad. Dessa inkluderar erythematotelangiectatic rosacea (ETR), som kännetecknas av rodnad och synliga blodkärl; papulopustulös rosacea (PPR), som visar upp rodnad, svullnad och akne-liknande utbrott; phymatous rosacea, som leder till hudförtjockning och en ojämn hudstruktur; och ockulär rosacea, som påverkar ögonen.</p>

            <p class="p200 mt-xl">Varje variant av rosacea kräver en unik behandlingsplan, vilket understryker behovet av att söka professionell vård om du upplever några av dessa symtom. På AcneSpecialisten har vi erfarenhet av att behandla alla typer av rosacea och vi erbjuder individuellt anpassade behandlingsplaner för varje patient, baserat på deras unika behov och livsstil.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man rosacea?',
            content: '<p class="p200">Den exakta orsaken till rosacea är fortfarande något som forskare och läkare försöker förstå, det är dock tydligt att genetik spelar en central roll. Om du har familjemedlemmar med rosacea, ökar sannolikheten att du också kommer att utveckla sjukdomen. Emellertid triggas ofta rosacea av flera kombinerade faktorer. De med rosacea har ofta utvidgade blodkärl, vilket leder till ökat blodflöde i huden och kan orsaka den typiska rodnaden och synliga blodkärlen associerade med tillståndet.</p>',

            extended_content: '<p class="p200 mt-xl">Människor med rosacea har dessutom ofta en högre koncentration av en typ av hårsäckskvalster, kallad demodex, än de utan rosacea. Dessa kvalster kan orsaka inflammatoriska reaktioner som leder till utslag och andra hudsymptom. Hudens skyddsbarriär kan också vara försämrad hos personer med rosacea, vilket resulterar i ökad känslighet och reaktivitet mot olika yttre och inre triggande faktorer.</p>

            <p class="p200 mt-xl">En annan tänkbar bidragande faktor till rosacea är en överreaktion från kroppens immunsystem, vilket kan bidra till inflammation och rodnad i huden. Trots att det finns flera tänkbara utlösande faktorer, ligger den genetiska benägenheten för rosacea till grund för sjukdomen och inget man kan drabbas av om man inte har anlagen. Men varje individs upplevelse av rosacea är unik, och det är därför en anpassad behandlingsplan är nödvändig. På AcneSpecialisten hjälper vi dig att hitta den bästa behandlingen utifrån dina unika behov och utmaningar.</p>',
            icons: array('genetik' => 'Genetik', 'kyla-varme' => 'Kyla & Värme', 'mat-dryck' => 'Mat & Dryck')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får rosacea?',
            content: '<p class="p200">Vanligtvis utvecklas rosacea hos individer mellan 30 och 50 års ålder, även om det också kan dyka upp tidigare eller senare. Rosacea är vanligare hos kvinnor än hos män. Även om kvinnor är mer benägna att få rosacea, utvecklar män ofta mer svåra former av sjukdomen, inklusive rhinophyma, som kännetecknas av förtjockning av huden på näsan. (Potatisnäsa)</p>',

            extended_content: '<p class="p200 mt-xl">Det är också viktigt att notera att personer med en familjehistoria av rosacea eller andra hudsjukdomar, som akne, har en högre risk att utveckla sjukdomen. Dessa individer bör vara särskilt medvetna om symtomen på rosacea och söka professionell hjälp om de misstänker att de har tillståndet.</p>

            <p class="p200 mt-xl">På AcneSpecialisten är vi väl medvetna om att rosacea påverkar individer på olika sätt. Vi arbetar för att skapa en skräddarsydd behandlingsplan som är anpassad till din hudtyp, din livsstil och dina specifika symtom. Vi vill hjälpa dig att hantera din rosacea på bästa möjliga sätt.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', '30+' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man rosacea?',
            content: '<p class="p200">Rosacea är ett hudtillstånd som huvudsakligen påverkar ansiktet, men det kan också spridas till andra områden av huden. I huvudsak är rosacea mest framträdande i mitten av ansiktet i form av ett fjärillsmönster. Rödhet och synliga blodkärl kan först uppträda på näsan och kinderna, men kan sedan sprida sig till pannan och hakan. Rosacea kan ibland även påverka områdena runt ögonen och orsaka inflammation i ögonlocken och ögonvita, ett tillstånd som kallas okulär rosacea.</p>',

            extended_content: '<p class="p200 mt-xl">Näsans vävnad kan också påverkas av rosacea, särskilt hos män, vilket resulterar i en tillstånd som kallas rhinophyma. Rhinophyma är en form av rosacea där huden på näsan blir tjock och knölig. Även om rosacea primärt påverkar ansiktet, kan det i vissa fall sprida sig till hals, bröst, öron och till och med hårbotten.</p>

            <p class="p200 mt-xl">Det är viktigt att påpeka att rosacea varierar från individ till individ, och dess exakta plats på kroppen kan variera beroende på flera faktorer, inklusive din genetiska benägenhet och miljöfaktorer. På AcneSpecialisten är vi experter på att hantera alla former av rosacea, oavsett var de uppträder på kroppen. Vårt team av hudvårdsexperter är redo att erbjuda individualiserad behandling som kommer att hantera dina specifika symtom och förbättra din livskvalitet.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'Kinder', 'nasa' => 'Näsa')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din hudtyp och skapar en individuell behandlingsplan.',
            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva ehandlingar anpassade för din specifika hudtyp.',
            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea',
            url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny rosacea som håller din hy i balans.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            url_title: 'Hitta de bästa produkterna för att förebygga rosacea'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När rosacean är borta fokuserar vi på att ta bort ytliga blodkärl med behandlingsmetoder som IPL för en jämnare hudton och problemfri hud.',
            url_label: 'Se behandlingar',
            url: '/ipl-rosacea.php',
            url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
      ),

);
$treatment_link = '<a href="/rosaceabehandling.php" title="Utforska effektiva rosaceabehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$types_title = 'Olika typer av rosacea';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Baserat på svårighetsgrad',
            content: '<p class="p200">Rosacea är ett hudtillstånd som varierar kraftigt i svårighetsgrad mellan olika individer. Hudtillståndet, som vanligtvis manifesterar sig som rodnad och synliga blodkärl i ansiktet, kan också leda till små, röda, pusfyllda blåsor eller knölar i värre fall. Rosacea klassificeras vanligtvis i fyra olika subtyper baserat på dess symptom och svårighetsgrad.</p>',
            types: array(
                  new BasedType(
                        image_url: '/bilder/hudtyper/232x232/mild-rosacea.webp',
                        image_alt: 'Bild av mild rosacea',
                        image_title: 'Mild rosacea exemplifierad',
                        title: 'Mild rosacea',
                        subtitle: 'Vaskulär rosacea eller erythematotelangiektatisk rosacea',
                  ),
                  new BasedType(
                        image_url: '/bilder/hudtyper/232x232/medelsvar-rosacea.webp',
                        image_alt: 'Bild av medelsvår rosacea',
                        image_title: 'Medelsvår rosacea exemplifierad',
                        title: 'Medelsvår rosacea',
                        subtitle: 'Papulopustulös rosacea eller akne rosacea',
                  ),
                  new BasedType(
                        image_url: '/bilder/hudtyper/232x232/svar-rosacea.webp',
                        image_alt: 'Bild av svår rosacea',
                        image_title: 'Svår rosacea exemplifierad',
                        title: 'Svår rosacea',
                        subtitle: 'Fymatös rosacea eller rhinophyma',
                  ),
            )
      )
);

$factors_title = 'Yttre faktorer';
$factor_icons = [
      'sol' => 'Sol och Vind',
      'mat-dryck' => 'Het mat och dryck',
      'stress' => 'Stress',
      'exfolierande' => 'Alkohol och Koffein',
      'produkter' => 'Hudvårdsprodukter',
      'varme' => 'Höga Temperaturer',
      'traning' => 'Fysisk Ansträngning',
];

$symptoms_title = 'Symptom';

$symptoms = array(
      new Symptom(
            name: 'Rodnad',
            image: '/bilder/symptom/102x102/rodnad-kinder.webp',
            content: 'Rodnad är ett vanligt symptom på rosacea och visar sig ofta som en ihållande röd färg i ansiktet, särskilt på kinderna, näsan, pannan och hakan.',
            aka: 'Erythema',
            image_alt: 'Bild av rodnad orsakad av rosacea',
            image_title: 'Rodnad orsakad av rosacea'
      ),

      new Symptom(
            name: 'Vätskefyllda blåsor',
            image: '/bilder/symptom/102x102/vatskefyllda-blasor.webp',
            content: 'Vätskefyllda blåsor är ett annat symptom på rosacea. De liknar de som uppträder vid akne och finnar.',
            aka: 'Pustler',
            image_alt: 'Bild av vätskefyllda blåsor orsakade av rosacea',
            image_title: 'Vätskefyllda blåsor orsakade av rosacea'
      ),

      new Symptom(
            name: 'Synliga blodkärl',
            image: '/bilder/symptom/102x102/synliga-blodkarl.webp',
            content: 'Vid rosacea kan de små blodkärlen i huden bli mer ytliga och synliga, vilket framträder som tunna röda linjer.',
            aka: 'Telangiektasi',
            image_alt: 'Bild av synliga blodkärl orsakade av rosacea',
            image_title: 'Synliga blodkärl orsakade av rosacea'
      ),

      new Symptom(
            name: 'Papler och pustler',
            image: '/bilder/symptom/102x102/papulopustular-rosacea.webp',
            content: 'Rosacea kan leda till utvecklingen av röda upphöjda papler och pustler som vid akne.',
            aka: 'Papulopustulär rosacea',
            image_alt: 'Bild av papler och pustler orsakade av rosacea',
            image_title: 'Papler och pustler orsakade av rosacea'
      ),

      new Symptom(
            name: 'Hudförtjockning',
            image: '/bilder/symptom/102x102/rhinophyma-rosacea.webp',
            content: 'Hudförtjockning, särskilt på näsan, kan förekomma vid mer allvarliga fall av rosacea. Rhinophyma är vanligare hos män.',
            url_label: 'Läs mer om rhinophyma rosacea',
            url: 'rhinophyma-rosacea.php',
            url_title: 'Läs mer om rhinophyma rosacea',
            aka: 'Rhinophyma',
            image_alt: 'Bild av hudförtjockning orsakad av rosacea',
            image_title: 'Hudförtjockning orsakad av rosacea',
      ),

      new Symptom(
            name: 'Ögonproblem',
            image: '/bilder/symptom/102x102/okular-rosacea.webp',
            content: 'Okulär rosacea är en form av sjukdomen som påverkar ögonen och ögonlocken. Symptom kan inkludera torra ögon, irritation och rinnande ögon.',
            aka: 'Okulär rosacea',
            image_alt: 'Bild av ögonproblem orsakade av rosacea',
            image_title: 'Ögonproblem orsakade av rosacea'
      ),

      new Symptom(
            name: 'Irriterad hy',
            image: '/bilder/symptom/102x102/irriterad-hy.webp',
            content: 'En hettande. brännande eller stickande känsla i huden är ett vanligt symptom på rosacea. Huden kan även klia i form av klåda.',
            aka: 'Brännande och hettande hy',
            image_alt: 'Bild av brännande och hettande hy känsla orsakad av rosacea',
            image_title: 'Brännande och hettande hy orsakad av rosacea'
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist utförs en undersökning av din hud. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
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
      url_label: 'Läs mer konsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot rosacea',
            duration: '60 min',
            price: '1295 kr',
            content: 'En effektiv ansiktsbehandling som fokuserar på att lindra rodnad och inflammation. Genom att använda specialanpassade produkter och tekniker kan denna behandling bidra till att förbättra hudens textur och utseende.',
            image_small: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_large: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot rosacea',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea&method=Service_Facial_RosaceaTreatment&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot rosacea',
            url: 'rosaceabehandling.php',
            url_label: 'Läs mer om ansiktsbehandling',
            url_title: 'Läs mer om ansiktsbehandling för rosacea'
      ),
      new Service(
            title: 'IPL mot rosacea',
            duration: '30-60 min',
            price: '1295 kr',
            content: 'IPL behandling använder intensivt pulserat ljus för att effektivt minska rodnad och inflammation. Denna metod behandlar effektivt rosaceasymptom och främja en jämnare hudton.',
            image_small: 'bilder/behandlingar/200x200/ipl.webp',
            image_large: 'bilder/behandlingar/200x200/ipl.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_IPL',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Boka en konsultation för IPL-behandling mot rosacea',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Rosacea&method=Method_IPL&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka din IPL-behandling mot rosacea nu',
            url: 'ipl-rosacea.php',
            url_label: 'Läs mer om behandlingar',
            url_title: 'Utforska mer om våra IPL-behandlingar mot rosacea',
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot rosacea',
            duration: null,
            price: 'Från 1395 kr',
            content: 'För att effektivt behandla och förebygga hudproblemet är daglig behandling med rätt produkter avgörande. Våra rosacea-produkter är speciellt utformade för att hålla din hud i balans och förhindra att nya rosacea-flare-ups uppstår.',
            image_small: 'bilder/behandlingar/200x200/produkter.webp',
            image_large: 'bilder/behandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av rosacea',
            image_title: 'Effektiva produkter för behandling och förebyggande av rosacea',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Rosacea',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot rosacea',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            booking_url_title: 'Klicka för att köpa produktpaket mot rosacea',
      )
);

$headline04 = "04. Reparera";

$procedures = array(
      new Service(
            title: 'Reparerar ytliga blodkärl',
            duration: '60 min',
            price: 'Från 1595 kr',
            content: 'IPL-behandling minskar effektivt ytliga blodkärl med intensivt pulserat ljus, erbjuder en icke-invasiv lösning för en jämnare hudton och förbättrad hudtextur.',
            image_small: 'bilder/behandlingar/200x200/ipl.webp',
            image_large: 'bilder/behandlingar/200x200/ipl.webp',
            image_alt: 'Behandla rosacea med IPL',
            image_title: 'Behandla rosacea med IPL',

            url: 'ipl-rosacea.php',
            url_label: 'Läs mer om behandlingar mot ytliga blodkärl',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot ytliga blodkärl',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Blood_Vessels',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling mot ytliga blodkärl',

            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_BloodVessels',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för IPL mot ytliga blodkärl',
      ),
);

$articles = array(
      new Article(
            title: 'Varför AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför AcneSpecialisten?',
            image_title: 'Varför AcneSpecialisten?',
            content: '<p class="p200">AcneSpecialisten är din expertpartner i kampen mot rosacea med över 30 års erfarenhet. Vi förstår djupt hudåkommans olika typer och erbjuder skräddarsydda behandlingsplaner baserade på dina unika behov. Vår expertis möjliggör valet av effektiva produkter som både förebygger och behandlar, anpassade till din hudtyp och livsstil.</p>

                  <p class="p200 mt-m">Hos oss får du mer än behandling; ett omfattande stöd genom din resa mot bättre hudhälsa, från första konsultation till uppföljning och långsiktigt underhåll. Vi förstår utmaningarna med rosacea och tillhandahåller de verktyg och den hjälp du behöver för att förbättra din livskvalitet. AcneSpecialisten erbjuder individanpassad, effektiv och stöttande vård för att hjälpa dig uppnå klar och frisk hud. Välkommen till AcneSpecialisten - din dedikerade partner i rosaceavård.</p>',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om din rosacea hindrar dig från att leva fullt ut eller om tidigare behandlingar inte har gett önskad effekt, är det dags att söka dig till AcneSpecialisten. Att tidigt ta itu med din rosacea ökar chansen att förebygga ärrbildning och permanenta hudförändringar. På AcneSpecialisten erbjuder vi expertis och skräddarsydda behandlingsplaner för alla grader, från mild till svår. Vi välkomnar dig till en kostnadsfri konsultation för att påbörja din resa mot en klarare och friskare hud. Våra specialister har omfattande erfarenhet och ger råd om de mest effektiva produkterna och behandlingarna för just din situation, vilket kan hjälpa dig undvika behovet av kraftfulla läkemedel med potentiella biverkningar.</p>

                  <p class="p200 mt-m">Som din partner i rosacea-vård, står AcneSpecialisten vid din sida genom hela behandlingsprocessen, från den första kostnadsfria konsultationen till underhållsbehandlingar och regelbundna uppföljningar. Vi är engagerade i att återställa din livskvalitet och erbjuda den friska, klara hud du strävar efter. Vårt team av experter erbjuder personligt stöd och anpassade lösningar för att möta dina unika behov och hjälpa dig att uppnå långsiktiga resultat.</p>',
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

$results_url_label = "Se fler resultat";
$results_url_title = "se flera rosaceabehandlingsresultat";



$faq_categories = array(
      'Generellt om rosacea' => array(
            new Question(
                  title: 'Hur skiljer sig rosacea från andra hudsjukdomar som akne?',
                  text: '<p class="p200">Rosacea och akne är två distinkta hudtillstånd. Även om de båda kan resultera i röda, inflammerade områden på huden, finns det några viktiga skillnader. Rosacea tenderar att uppträda i mitten av ansiktet (särskilt näsan och kinderna) och kan orsaka synliga blodkärl, röda fläckar samt rodnad. Detta brukar kallas couperosa hy. Rosacea kan också orsaka av en brännande eller stickande känsla med klåda. Akne å andra sidan kan förekomma var som helst på kroppen och karakteriseras av pormaskar, finnar och ibland cystor under huden.</p>'
            ),
            new Question(
                  title: 'Vad triggar rosacea?',
                  text: '<p class="p200">Det finns många potentiella triggande faktorer som kan förvärra rosacea. Dessa kan inkludera alkohol, kryddstark mat, stress, extremt väder (som stark vind eller sol), intensiv fysisk aktivitet, varma drycker och vissa hudvårdsprodukter.</p>

                        <p class="p200 mt-m">Varje person med rosacea kan ha olika triggers, och det kan vara användbart att föra en dagbok för att identifiera vilka faktorer som förvärrar ens egna symptom.</p>'
            ),
            new Question(
                  title: 'Kan man helt bli helt symtomfri från rosacea?',
                  text: '<p class="p200">Rosacea är en kronisk sjukdom, vilket betyder att problemet inte går att bota. Med med rätt behandla kan dinr rosacea bli symptomfri vilket betyder att den inte synns eller känns.</p>'
            ),
            new Question(
                  title: 'Vilka är de möjliga komplikationerna av rosacea om den inte behandlas?',
                  text: '<p class="p200">Om rosacea inte behandlas kan den leda till permanenta förändringar i huden, såsom förtjockning och klumpighet, särskilt på näsan (ett tillstånd som kallas rhinophyma). Synliga och brustna blodkärl uppstår även vanligtvis vid rosacea.</p>'
            ),
            new Question(
                  title: 'Är det någon koppling mellan rosacea, kost och livsstil?',
                  text: '<p class="p200">Ja, vissa individer med rosacea har rapporterat att vissa livsmedel och drycker, som alkohol och kryddstark mat, kan förvärra deras symptom. Undvikande av extrem hetta och kyla samt stark sol kan också vara gynnsamt, då dessa faktorer ofta kan förvärra rosacea. Stresshantering är ytterligare en faktor att ta hänsyn till vid hantering av rosacea.</p>

                        <p class="p200 mt-m">Men vi på AcneSpecialisten förstår att det kan vara en stor utmaning att konstant justera din livsstil för att hantera din rosacea. Därför hjälper vi dig att effektivt behandla rosacean med hjälp av rätt hudvård och behandlingar så att du slipper anpassa ditt liv efter din hy.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till rosacea";

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
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom rosaceahantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på rosacea'
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
$specialist_url_title = "Rosacea Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Ytliga blodkärl',
            aka: 'spindelvener',
            image: 'bilder/hudproblem/200x200/ytliga-blodkarl.webp',
            image_alt: 'Bild som visar ytliga blodkärl som röda linjer i huden',
            image_title: 'Ytliga blodkärl - vanligt på näsa och kinder',
            url: 'ytliga-blodkarl.php',
            url_title: 'Ytliga blodkärl'
      ),
      new RelatedProblem(
            name: 'Akne',
            aka: 'papler & pustler',
            image: 'bilder/hudproblem/200x200/akne.webp',
            image_alt: 'Bild som skildrar akne, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Akne - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'acne.php',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Finnar',
            aka: 'plitor & inkapslingar',
            image: 'bilder/hudproblem/200x200/finnar.webp',
            image_alt: 'Bild som visar finnar, små inflammationer i huden',
            image_title: 'Finnar - vanliga små hudinflammationer',
            url: 'finnar.php',
            url_title: 'Finnar'
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
            label: 'Alma Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Alma Rejuve Dye-VL logotyp',
            image_title: 'Alma Rejuve Dye-VL - IPL',
            url: '/varumarken/rejuve-dye-vl/',
            url_title: 'Alma Rejuve Dye-VL',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_alt: 'Harmony XL Pro logotyp',
            image_title: 'Alma Harmony XL Pro',
            url: '/alma-harmony-xl-pro.php',
            url_title: 'Harmony XL Pro',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova logotyp',
            image_title: 'Powerlite Photonova - IPL',
            url: '/varumarken/powerlite-photonova/',
            url_title: 'Powerlite Photonova',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för Rosaceabehandling";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/rosacea.php" />

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
                                    include('hudproblem/widgets/problem-trivia-card/problem-trivia-card.php');
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
                        <?php if (isset($type_categories) && sizeof($type_categories) > 0) { ?>
                              <section id="types">
                                    <h2 class="h500 l10n"><?php echo $types_title ?></h2>
                                    <div class="is-hidden-tablet">
                                          <div class="mt-m mb-xxl" id="type-category-buttons">
                                                <?php foreach ($type_categories as $type_category) { ?>
                                                      <a href="javascript:;" class="button b50 grey">
                                                            <?php echo $type_category->title ?>
                                                      </a>
                                                <?php } ?>
                                          </div>
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="type-category-cards">
                                                            <?php foreach ($type_category->types as $type) {
                                                                  include('hudproblem/widgets/type-card/type-card.php');
                                                            } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <div class="is-hidden-mobile">
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category-large">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="columns is-3 is-variable is-multiline type-category-large-cards">
                                                            <?php foreach ($type_category->types as $type) { ?>
                                                                  <div class="column is-one-third">
                                                                        <?php include('hudproblem/widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                              </section>
                        <?php } ?>
                        <section id="factor-icons">
                              <h2 class="h500"><?php echo $factors_title ?></h2>
                              <div class="columns is-multiline is-variable is-3">
                                    <?php foreach ($factor_icons as $factor_icon => $factor_label) { ?>
                                          <div class="column is-one-third">
                                                <div class="factor">
                                                      <?php icon($factor_icon) ?>
                                                      <div class="factor-label">
                                                            <?php echo $factor_label ?>
                                                      </div>
                                                </div>
                                          </div>
                                    <?php } ?>
                              </div>
                        </section>
                        <?php if (sizeof($symptoms) > 0) { ?>
                              <section id="symptoms">
                                    <h2 class="h500"><?php echo $symptoms_title ?></h2>
                                    <div class="mt-m is-hidden-tablet" id="symptom-buttons">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <a href="javascript:;" class="button b50 grey">
                                                      <?php echo $symptom->name ?>
                                                </a>
                                          <?php } ?>
                                    </div>
                                    <div class="columns is-multiline is-variable is-3" id="symptom-cards">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <div class="column is-half">
                                                      <?php include('hudproblem/widgets/symptom-card/symptom-card.php'); ?>
                                                </div>
                                          <?php } ?>
                                    </div>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot akne" href="varumarken/">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>