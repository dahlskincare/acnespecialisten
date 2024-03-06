<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är rosacea? -Symptom, orsak och behandling | AcneSpecialisten';
$seo_description = 'Här hittar du allt om roacea och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'rosacea, rosaceabehandling, orsaker till rosacea, förebygga rosacea, behandla rosacea, vuxenrosacea, rosacearodnad, kärlutvidgningar, rodnad, inflammation';

$title = 'Rosacea';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem.php'),
      new PathSegment('Rosacea', '/rosacea.php'),
);

$image_small = 'bilder/problem/424x324/rosacea.webp';
$image_large = 'bilder/problem/424x456/rosacea.webp';
$image_title = 'Visar en hud med rosacea';
$image_alt = 'Bild som illustrerar hur rosacea ser ut på huden';

$description = 'Rosacea är en kronisk hudsjukdom som orsakar rodnad, inflammation och ytliga blodkärl i ansiktet. Den här sidan ger en översikt över sjukdomens symptom, stadier och de utlösande faktorer som kan förvärra tillståndet.';


$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea";
$consultation_url_label = "Boka gratis konsultation";
$consultation_url_title = "Gratis Konsultation för Rosacea";

$booking_url = "https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka rosaceabehandling";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Rosacea";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Rosaceabehandling";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Rosacea";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Rosaceabehandling";

$nav_buttons = array(
      'about' => 'Om rosacea',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om rosacea';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är rosacea?',
            content: '<p class="p200">Rosacea är en kronisk inflammatorisk hudsjukdom som kännetecknas av en ihållande rodnad i ansiktet, synliga blodkärl, vätskefyllda blåsor och ibland röda utslag som liknar akne. Sjukdomen har ett kroniskt och ofta cykliskt förlopp, vilket innebär att symtomen fluktuerar över tid, med perioder av försämring följt av perioder av förbättring.</p>',

            extended_content: '<p class="p200 mt-xl">Det finns fyra subtyper av rosacea som varierar i symtom och svårighetsgrad. Dessa inkluderar erythematotelangiectatic rosacea (ETR), som kännetecknas av rodnad och synliga blodkärl; papulopustulös rosacea (PPR), som visar upp rodnad, svullnad och akne-liknande utbrott; phymatous rosacea, som leder till hudförtjockning och en ojämn hudstruktur; och ockulär rosacea, som påverkar ögonen.</p>

            <p class="p200 mt-xl">Varje variant av rosacea kräver en unik behandlingsplan, vilket understryker behovet av att söka professionell vård om du upplever några av dessa symtom. På AcneSpecialisten har vi erfarenhet av att behandla alla typer av rosacea och vi erbjuder individuellt anpassade behandlingsplaner för varje patient, baserat på deras unika behov och livsstil.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man rosacea?',
            content: '<p class="p200">Den exakta orsaken till rosacea är fortfarande något som forskare och läkare försöker förstå, det är dock tydligt att genetik spelar en central roll. Om du har familjemedlemmar med rosacea, ökar sannolikheten att du också kommer att utveckla sjukdomen. Emellertid triggas ofta rosacea av flera kombinerade faktorer. De med rosacea har ofta utvidgade blodkärl, vilket leder till ökat blodflöde i huden och kan orsaka den typiska rodnaden och synliga blodkärlen associerade med tillståndet.</p>',

            extended_content: '<p class="p200 mt-xl">Människor med rosacea har dessutom ofta en högre koncentration av en typ av hårsäckskvalster, kallad demodex, än de utan rosacea. Dessa kvalster kan orsaka inflammatoriska reaktioner som leder till utslag och andra hudsymptom. Hudens skyddsbarriär kan också vara försämrad hos personer med rosacea, vilket resulterar i ökad känslighet och reaktivitet mot olika yttre och inre triggande faktorer.</p>

            <p class="p200 mt-xl">En annan tänkbar bidragande faktor till rosacea är en överreaktion från kroppens immunsystem, vilket kan bidra till inflammation och rodnad i huden. Trots att det finns flera tänkbara utlösande faktorer, ligger den genetiska benägenheten för rosacea till grund för sjukdomen och inget man kan drabbas av om man inte har anlagen. Men varje individs upplevelse av rosacea är unik, och det är därför en anpassad behandlingsplan är nödvändig. På AcneSpecialisten hjälper vi dig att hitta den bästa behandlingen utifrån dina unika behov och utmaningar.</p>',
            icons: array('genetik' => 'Genetik', 'kyla-varme' => 'Kyla & Värme', 'mat-dryck' => 'Mat & Dryck')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får rosacea?',
            content: '<p class="p200">Vanligtvis utvecklas rosacea hos individer mellan 30 och 50 års ålder, även om det också kan dyka upp tidigare eller senare. Rosacea är vanligare hos kvinnor än hos män. Även om kvinnor är mer benägna att få rosacea, utvecklar män ofta mer svåra former av sjukdomen, inklusive rhinophyma, som kännetecknas av förtjockning av huden på näsan. (Potatisnäsa)</p>',

            extended_content: '<p class="p200 mt-xl">Det är också viktigt att notera att personer med en familjehistoria av rosacea eller andra hudsjukdomar, som akne, har en högre risk att utveckla sjukdomen. Dessa individer bör vara särskilt medvetna om symtomen på rosacea och söka professionell hjälp om de misstänker att de har tillståndet.</p>

            <p class="p200 mt-xl">På AcneSpecialisten är vi väl medvetna om att rosacea påverkar individer på olika sätt. Vi arbetar för att skapa en skräddarsydd behandlingsplan som är anpassad till din hudtyp, din livsstil och dina specifika symtom. Vi vill hjälpa dig att hantera din rosacea på bästa möjliga sätt.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', '30+' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man rosacea?',
            content: '<p class="p200">Rosacea är ett hudtillstånd som huvudsakligen påverkar ansiktet, men det kan också spridas till andra områden av huden. I huvudsak är rosacea mest framträdande i mitten av ansiktet i form av ett fjärillsmönster. Rödhet och synliga blodkärl kan först uppträda på näsan och kinderna, men kan sedan sprida sig till pannan och hakan. Rosacea kan ibland även påverka områdena runt ögonen och orsaka inflammation i ögonlocken och ögonvita, ett tillstånd som kallas okulär rosacea.</p>',

            extended_content: '<p class="p200 mt-xl">Näsans vävnad kan också påverkas av rosacea, särskilt hos män, vilket resulterar i en tillstånd som kallas rhinophyma. Rhinophyma är en form av rosacea där huden på näsan blir tjock och knölig. Även om rosacea primärt påverkar ansiktet, kan det i vissa fall sprida sig till hals, bröst, öron och till och med hårbotten.</p>

            <p class="p200 mt-xl">Det är viktigt att påpeka att rosacea varierar från individ till individ, och dess exakta plats på kroppen kan variera beroende på flera faktorer, inklusive din genetiska benägenhet och miljöfaktorer. På AcneSpecialisten är vi experter på att hantera alla former av rosacea, oavsett var de uppträder på kroppen. Vårt team av hudvårdsexperter är redo att erbjuda individualiserad behandling som kommer att hantera dina specifika symtom och förbättra din livskvalitet.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'Kinder', 'nasa' => 'Näsa')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rosacea och skapar en individuell behandlingsplan.',
            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva rosaceabehandlingar anpassade för din specifika rosacea.',
            url_label: 'Se behandlingar',
            url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea',
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
            url_label: 'Se IPL-behandlingar',
            url: '/ipl-rosacea.php',
            url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
      ),

);
$treatment_link = '<a href="/rosaceabehandling.php" title="Utforska effektiva rosaceabehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra rosaceabehandlingar</a>';

$types_title = 'Olika typer av rosacea';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Rosacea baserat på svårighetsgrad',
            content: '<p class="p200">Rosacea är ett hudtillstånd som varierar kraftigt i svårighetsgrad mellan olika individer. Hudtillståndet, som vanligtvis manifesterar sig som rodnad och synliga blodkärl i ansiktet, kan också leda till små, röda, pusfyllda blåsor eller knölar i värre fall. Rosacea klassificeras vanligtvis i fyra olika subtyper baserat på dess symptom och svårighetsgrad.</p>',
            types: array(
                  new BasedType(
                        image_url: '/bilder/symptom/102x102/rodnad.webp',
                        image_alt: 'Bild av mild rosacea',
                        image_title: 'Mild rosacea exemplifierad',
                        title: 'Mild rosacea',
                        subtitle: 'Vaskulär rosacea eller erythematotelangiektatisk rosacea',
                  ),
                  new BasedType(
                        image_url: '/bilder/symptom/102x102/papular-rosacea.webp',
                        image_alt: 'Bild av medelsvår rosacea',
                        image_title: 'Medelsvår rosacea exemplifierad',
                        title: 'Medelsvår rosacea',
                        subtitle: 'Papulopustulös rosacea eller akne rosacea',
                  ),
                  new BasedType(
                        image_url: '/bilder/symptom/102x102/rhinophyma-rosacea.webp',
                        image_alt: 'Bild av svår rosacea',
                        image_title: 'Svår rosacea exemplifierad',
                        title: 'Svår rosacea',
                        subtitle: 'Fymatös rosacea eller rhinophyma',
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Yttre faktorer som förvärrar rosacea',
            content: '<p class="p200">Rosacea kan förvärras eller till och med utlösas av en rad yttre faktorer. Genom att förstå och hantera dessa faktorer kan individer potentiellt minska frekvensen och svårighetsgraden av deras rosacea-utbrott.</p>',
            types: array(
                  new BasedType(
                        image_url: '/icons/sol.svg',
                        image_alt: 'Ikon av sol och vind',
                        image_title: 'Exempel på på sol och vind',
                        title: 'Sol och vind',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: '/icons/mat-dryck.svg',
                        image_alt: 'Ikon av het mat och dryck',
                        image_title: 'Het mat och dryck',
                        title: 'Het mat och dryck',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: '/icons/stress.svg',
                        image_alt: 'Ikon av stress',
                        image_title: 'Stress',
                        title: 'Stress',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: '/icons/exfolierande.svg',
                        image_alt: 'Ikon av alkohol och koffein',
                        image_title: 'Alkohol och Koffein',
                        title: 'Alkohol och Koffein',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: '/icons/produkter.svg',
                        image_alt: 'Ikon av hudvårdsprodukter',
                        image_title: 'Hudvårdsprodukter',
                        title: 'Hudvårdsprodukter',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: '/icons/varme.svg',
                        image_alt: 'Ikon av termometer',
                        image_title: 'Höga Temperaturer',
                        title: 'Höga Temperaturer',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: '/icons/traning.svg',
                        image_alt: 'Ikon av en person som utför fysisk ansträngning',
                        image_title: 'Fysisk Ansträngning',
                        title: 'Fysisk Ansträngning',
                        subtitle: '',
                  ),
            )
      ),

);

$symptoms_title = 'Rosacea symptom';

$symptoms = array(
      new Symptom(
            name: 'Rodnad',
            image: 'images/problems/102x102/rodnad.webp',
            content: 'Rodnad är ett vanligt symptom på rosacea och visar sig ofta som en ihållande röd färg i ansiktet, särskilt på kinderna, näsan, pannan och hakan.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Erythema',
            image_alt: 'Bild av rodnad orsakad av rosacea',
            image_title: 'Rodnad orsakad av rosacea'
      ),

      new Symptom(
            name: 'Vätskefyllda blåsor',
            image: 'images/problems/102x102/papular-rosacea.webp',
            content: 'Vätskefyllda blåsor är ett annat symptom på rosacea. De liknar de som uppträder vid akne och finnar.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Pustler',
            image_alt: 'Bild av vätskefyllda blåsor orsakade av rosacea',
            image_title: 'Vätskefyllda blåsor orsakade av rosacea'
      ),

      new Symptom(
            name: 'Synliga blodkärl',
            image: 'images/problems/102x102/synliga-blodkarl.webp',
            content: 'Vid rosacea kan de små blodkärlen i huden bli mer ytliga och synliga, vilket framträder som tunna röda linjer.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Telangiektasi',
            image_alt: 'Bild av synliga blodkärl orsakade av rosacea',
            image_title: 'Synliga blodkärl orsakade av rosacea'
      ),

      new Symptom(
            name: 'Papler och pustler',
            image: 'images/problems/102x102/papulopustular-rosacea.webp',
            content: 'Rosacea kan leda till utvecklingen av röda upphöjda papler och pustler som vid akne.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Papulopustulär rosacea',
            image_alt: 'Bild av papler och pustler orsakade av rosacea',
            image_title: 'Papler och pustler orsakade av rosacea'
      ),

      new Symptom(
            name: 'Hudförtjockning',
            image: 'images/problems/102x102/rhinophyma-rosacea.webp',
            content: 'Hudförtjockning, särskilt på näsan, kan förekomma vid mer allvarliga fall av rosacea. Rhinophyma är vanligare hos män.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Rhinophyma',
            image_alt: 'Bild av hudförtjockning orsakad av rosacea',
            image_title: 'Hudförtjockning orsakad av rosacea'
      ),

      new Symptom(
            name: 'Ögonproblem',
            image: 'images/problems/102x102/okular-rosacea.webp',
            content: 'Okulär rosacea är en form av sjukdomen som påverkar ögonen och ögonlocken. Symptom kan inkludera torra ögon, irritation och rinnande ögon.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Okulär rosacea',
            image_alt: 'Bild av ögonproblem orsakade av rosacea',
            image_title: 'Ögonproblem orsakade av rosacea'
      ),

      new Symptom(
            name: 'Irriterad hy',
            image: 'images/problems/102x102/irriterad-hy.webp',
            content: 'En hettande. brännande eller stickande känsla i huden är ett vanligt symptom på rosacea. Huden kan även klia i form av klåda.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Brännande och hettande hy',
            image_alt: 'Bild av brännande och hettande hy känsla orsakad av rosacea',
            image_title: 'Brännande och hettande hy orsakad av rosacea'
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
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för rosacea',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer konsultation mot rosacea',
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
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot rosacea',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea&method=Service_Facial_RosaceaTreatment&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot rosacea',
            url: 'rosaceabehandling.php',
            url_label: 'Läs mer om ansiktsbehandling för rosacea',
            url_title: 'Läs mer om ansiktsbehandling för rosacea'
      ),
      new Service(
            title: 'IPL mot rosacea',
            duration: '30-60 min',
            price: '1295 kr',
            content: 'IPL-behandling mot rosacea använder intensivt pulserat ljus för att effektivt minska rodnad och inflammation. Denna metod behandlar effektivt rosaceasymptom och främja en jämnare hudton.',
            image_small: 'bilder/behandlingar/200x200/ipl.webp',
            image_large: 'bilder/behandlingar/200x200/ipl.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Boka en konsultation för IPL-behandling mot rosacea',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Rosacea&method=Method_IPL&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka din IPL-behandling mot rosacea nu',
            url: 'ipl-rosacea.php',
            url_label: 'Läs mer om IPL-behandlingar',
            url_title: 'Utforska mer om våra IPL-behandlingar mot rosacea',
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
            
            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Rosacea',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot rosacea',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            booking_url_title: 'Klicka för att köpa produktpaket mot rosacea',
      )
);

$headline04 = "04. Reparera post-rosacea (synliga blodkärl)";

$procedures = array(
      new Service(
            title: 'Reparerar ytliga blodkärl',
            duration: '60 minuter',
            price: 'Pris från 1595 kr',
            content: 'IPL-behandling minskar effektivt ytliga blodkärl med intensivt pulserat ljus, erbjuder en icke-invasiv lösning för en jämnare hudton och förbättrad hudtextur.',
            image_small: 'bilder/behandlingar/200x200/ipl.webp',
            image_large: 'bilder/behandlingar/200x200/ipl.webp',
            image_alt: 'Behandla rosacea med IPL',
            image_title: 'Behandla rosacea med IPL',

            url: 'ipl-rosacea.php',
            url_label: 'Läs mer om behandlingar mot ytliga blodkärl',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot ytliga blodkärl',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_BloodVessels',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling mot ytliga blodkärl',

            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_BloodVessels',
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
            content: '<p class="p200">AcneSpecialisten är din expertpartner i kampen mot rosacea med över 30 års erfarenhet. Vi förstår djupt hudåkommans olika typer och erbjuder skräddarsydda behandlingsplaner baserade på dina unika behov. Vår expertis möjliggör valet av effektiva produkter som både förebygger och behandlar rosacea, anpassade till din hudtyp och livsstil.</p>

                  <p class="p200 mt-m">Hos oss får du mer än behandling; ett omfattande stöd genom din resa mot bättre hudhälsa, från första konsultation till uppföljning och långsiktigt underhåll. Vi förstår utmaningarna med rosacea och tillhandahåller de verktyg och den hjälp du behöver för att förbättra din livskvalitet. AcneSpecialisten erbjuder individanpassad, effektiv och stöttande vård för att hjälpa dig uppnå klar och frisk hud. Välkommen till AcneSpecialisten - din dedikerade partner i rosaceavård.</p>',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om din rosacea hindrar dig från att leva fullt ut eller om tidigare behandlingar inte har gett önskad effekt, är det dags att söka dig till AcneSpecialisten. Att tidigt ta itu med din rosacea ökar chansen att förebygga ärrbildning och permanenta hudförändringar. På AcneSpecialisten erbjuder vi expertis och skräddarsydda behandlingsplaner för alla grader av rosacea, från mild till svår. Vi välkomnar dig till en kostnadsfri konsultation för att påbörja din resa mot en klarare och friskare hud. Våra specialister har omfattande erfarenhet och ger råd om de mest effektiva produkterna och behandlingarna för just din situation, vilket kan hjälpa dig undvika behovet av kraftfulla läkemedel med potentiella biverkningar.</p>

                  <p class="p200 mt-m">Som din partner i rosacea-vård, står AcneSpecialisten vid din sida genom hela behandlingsprocessen, från den första kostnadsfria konsultationen till underhållsbehandlingar och regelbundna uppföljningar. Vi är engagerade i att återställa din livskvalitet och erbjuda den friska, klara hud du strävar efter. Vårt team av experter erbjuder personligt stöd och anpassade lösningar för att möta dina unika behov och hjälpa dig att uppnå långsiktiga resultat.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat svår akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_title: 'Person som har rosacea',
            image_alt: 'Ansiktet på en person som behandlat rosacea, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

$results_url_label = "Se fler resultat";
$results_url_title = "se flera rosaceabehandlingsresultat";


$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all rosacea efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
            signature: 'Lovisa'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min rosacea med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily'
      ),

);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om rosacea' => array(
            new Question(
                  title: 'Hur skiljer sig rosacea från andra hudsjukdomar som akne?',
                  text: '<p class="p200">Rosacea och akne är två distinkta hudtillstånd. Även om de båda kan resultera i röda, inflammerade områden på huden, finns det några viktiga skillnader. Rosacea tenderar att uppträda i mitten av ansiktet (särskilt näsan och kinderna) och kan orsaka synliga blodkärl, röda fläckar samt rodnad. Rosacea kan också orsaka av en brännande eller stickande känsla med klåda. Akne å andra sidan kan förekomma var som helst på kroppen och karakteriseras av pormaskar, finnar och ibland cystor under huden.</p>'
            ),
            new Question(
                  title: 'Är det några särskilda triggers som kan förvärra rosacea?',
                  text: '<p class="p200">Ja, det finns många potentiella triggers som kan förvärra rosacea. Dessa kan inkludera alkohol, kryddstark mat, stress, extremt väder (som stark vind eller sol), intensiv fysisk aktivitet, varma drycker och vissa hudvårdsprodukter.</p>

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

$skin_guide_articles = array(
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
$skinguide_url_title = "Läs fler guider om rosacea";

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
$specialist_url_title = "Rosacea Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Ytliga blodkärl',
            aka: 'Spindelvener',
            image: 'bilder/problem/200x200/ytliga-blodkarl.webp',
            image_alt: 'Bild som visar ytliga blodkärl som röda linjer i huden',
            image_title: 'Ytliga blodkärl - vanligt på näsa och kinder',
            url: 'ytliga-blodkarl.php',
            url_title: 'Ytliga blodkärl'
      ),
      new RelatedProblem(
            name: 'Akne',
            aka: 'Papler & Pustler',
            image: 'bilder/problem/200x200/akne.webp',
            image_alt: 'Bild som skildrar akne, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Akne - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'acne.php',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Finnar',
            aka: 'Plitor & Inkapslingar',
            image: 'bilder/problem/200x200/finnar.webp',
            image_alt: 'Bild som visar finnar, små inflammationer i huden',
            image_title: 'Finnar - vanliga små hudinflammationer',
            url: 'finnar.php',
            url_title: 'Finnar'
      ),
);

$brands = array(
      new Brand(
            label: 'Alma Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Alma Rejuve Dye-VL logotyp',
            image_title: 'Alma Rejuve Dye-VL - IPL',
            url: '/varumarken/alma/rejuve-dye-vl',
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
            url: '/varumarken/powerlite-photonova',
            url_title: 'Powerlite Photonova',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för Rosaceabehandling";

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
      <meta property="og:image" content="<?php echo $image_large ?>" />
      <meta property="twitter:title" content="<?php echo $seo_title ?>" />
      <meta property="twitter:description" content="<?php echo $seo_description ?>" />
      <meta property="twitter:image" content="<?php echo $image_large ?>" />
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
                                          <a href="<?php echo $booking_url ?>" title="B<?php echo $booking_url_title ?>" class="button b200 white l10n"><?php echo $booking_url_label ?></a>
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
                              <h2 class="h500 l10n"><?php echo $about_title ?></h2>
                              <?php foreach ($trivias as $trivia) {
                                    echo '<hr>';
                                    include('problem/widgets/problem-trivia-card/problem-trivia-card.php');
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
                                                                  include('problem/widgets/type-card/type-card.php');
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
                                                                        <?php include('problem/widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                              </section>
                        <?php } ?>
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
                                                      <?php include('problem/widgets/symptom-card/symptom-card.php'); ?>
                                                </div>
                                          <?php } ?>
                                    </div>
                              </section>
                        <?php } ?>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot akne" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>