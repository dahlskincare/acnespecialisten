<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Rosacea - Orsaker, Behandling och Förebyggande | AcneSpecialisten';
$seo_description = 'Lär dig allt om rosacea, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från AcneSpecialisten.';
$seo_keywords = 'rosacea, rosaceabehandling, orsaker till rosacea, förebygga rosacea, behandla rosacea, vuxenrosacea, rosacearodnad, kärlutvidgningar, rodnad, inflammation';

$title = 'Rosacea';

$image_small = 'bilder/problem/424x324/rosacea.webp';
$image_large = 'bilder/problem/424x456/rosacea.webp';
$image_title = 'Visar en hud med rosacea';
$image_alt = 'Bild som illustrerar hur rosacea ser ut på huden';

$description = 'Här förklarar vi vad som kännetecknar rosacea, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av rosacea, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';


$consultation_url = "consultation-booking?problem=rosacea";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis Konsultation för Rosacea";

$booking_url = "treatment-booking?problem=rosacea";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka Aknebehandling";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Rosacea";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Rosaceabehandling";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Rosacea";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Rosaceabehandling";

$nav_buttons = array(
      'about' => 'Om akne',
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

            <p class="p200 mt-xl">Varje variant av rosacea kräver en unik behandlingsplan, vilket understryker behovet av att söka professionell vård om du upplever några av dessa symtom. På AcneSpecialisten har vi erfarenhet av att behandla alla typer av rosacea och vi strävar efter att erbjuda individuellt anpassade behandlingsplaner för varje patient, baserat på deras unika behov och livsstil.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man rosacea?',
            content: '<p class="p200">Det exakta orsakssambandet till rosacea fortfarande är något som forskare och läkare försöker förstå, är det tydligt att genetik spelar en central roll. Om du har familjemedlemmar med rosacea, ökar sannolikheten att du också kommer att utveckla sjukdomen. Emellertid triggas ofta rosacea av flera kombinerade faktorer. En sådan faktor är abnormiteter i blodkärlen i ansiktet. De med rosacea har ofta utvidgade blodkärl, vilket leder till ökat blodflöde i ansiktshuden och kan orsaka den typiska rodnaden och synliga blodkärlen associerade med tillståndet.</p>',

            extended_content: '<p class="p200 mt-xl">Människor med rosacea har dessutom ofta en högre koncentration av en typ av hårsäckskvalster, kallad demodex, än de utan sjukdomen. Dessa kvalster kan orsaka inflammatoriska reaktioner som leder till utslag och andra hudsymptom. Hudens skyddsbarriär kan också vara störd hos personer med rosacea, vilket resulterar i ökad känslighet och reaktivitet mot olika yttre och inre triggande faktorer.</p>

            <p class="p200 mt-xl">En annan tänkbar bidragande faktor till rosacea är en överreaktion från kroppens immunsystem, vilket kan bidra till inflammation och rodnad i huden. Trots att det finns flera tänkbara utlösande faktorer, ligger den genetiska predispositionen för rosacea till grund för sjukdomen och inget man kan drabbas av om man inte har anlagen. Men varje individs upplevelse av rosacea är unik, och det är därför en anpassad behandlingsplan är nödvändig. På AcneSpecialisten hjälper vi dig att hitta den bästa behandlingen utifrån dina unika behov och utmaningar.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat', 'kyla' => 'Kyla', 'varme' => 'varme', 'mat-dryck' => 'Mat & Dryck')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får rosacea?',
            content: '<p class="p200">Vanligtvis utvecklas rosacea hos individer mellan 30 och 50 års ålder, även om det också kan dyka upp tidigare eller senare. Rosacea är vanligare hos kvinnor, men män tenderar att uppleva mer svår rosacea. Även om kvinnor är mer benägna att få rosacea, utvecklar män ofta mer svåra former av sjukdomen, inklusive rhinophyma, som kännetecknas av förtjockning av huden på näsan.</p>',

            extended_content: '<p class="p200 mt-xl">Det är också viktigt att notera att personer med en familjehistoria av rosacea eller andra hudsjukdomar, som akne, har en högre risk att utveckla sjukdomen. Dessa individer bör vara särskilt medvetna om symtomen på rosacea och söka professionell hjälp om de misstänker att de har tillståndet.</p>

            <p class="p200 mt-xl">På AcneSpecialisten är vi väl medvetna om att rosacea påverkar individer på olika sätt. Vi arbetar för att skapa en skräddarsydd behandlingsplan som är anpassad till din hudtyp, din livsstil och dina specifika symtom. Vi vill hjälpa dig att hantera din rosacea på bästa möjliga sätt.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man rosacea?',
            content: '<p class="p200">Rosacea är ett hudtillstånd som huvudsakligen påverkar ansiktet, men det kan också spridas till andra områden av huden. Så var exakt uppträder rosacea på kroppen? I huvudsak är rosacea mest framträdande i mitten av ansiktet. Rödhet och synliga blodkärl kan först uppträda på näsan och kinderna, men kan sedan sprida sig till pannan och hakan. Rosacea kan ibland även påverka områdena runt ögonen och orsaka inflammation i ögonlocken och ögonvita, ett tillstånd som kallas okulär rosacea.</p>',

            extended_content: '<p class="p200 mt-xl">Näsans vävnad kan också påverkas av rosacea, särskilt hos män, vilket resulterar i en tillstånd som kallas rhinophyma. Rhinophyma är en form av rosacea där huden på näsan blir tjock och knölig. Även om rosacea primärt påverkar ansiktet, kan det i vissa fall sprida sig till hals, bröst, öron och till och med hårbotten. Så, medan ansiktet är det mest typiska området för rosacea att dyka upp, kan det uppträda var som helst på överkroppen.</p>

            <p class="p200 mt-xl">Det är viktigt att påpeka att rosaceas manifestationer varierar från individ till individ, och dess exakta plats på kroppen kan variera beroende på flera faktorer, inklusive din genetiska predisposition och miljöfaktorer. På AcneSpecialisten är vi experter på att hantera alla former av rosacea, oavsett var de uppträder på kroppen. Vårt team av hudvårdsexperter är redo att erbjuda individualiserad behandling som kommer att hantera dina specifika symtom och förbättra din livskvalitet.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'Kinder', 'nasa' => 'Näsa')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rosacea och skapar en individuell behandlingsplan.',
            url_label: 'Få gratis konsultation',
            url: 'gratis-hudkonsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika rosacea, så att du snabbt och säkert blir av med problemet.',
            url_label: 'Se behandlingar',
            url: 'behandlingar/rosacea',
            url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny rosacea och hålla din hud i balans.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            url_title: 'Hitta de bästa produkterna för att förebygga rosacea'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När rosacean är borta fokuserar vi på att reducera eventuella ytliga blodkärl med behandlingsmetoder som IPL för en jämn och problemfri hud.',
            url_label: 'Se IPL-behandlingar',
            url: 'behandlingar/rosacea',
            url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
      ),

);
$treatment_link = '<a href="problem/rosacea/rosaceabehandling" title="Utforska effektiva aknebehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra rosaceabehandlingar</a>';
/*
$types_title = 'Olika typer av rosacea';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Rosacea baserat på svårighetsgrad',
            content: '<p class="p200">Rosacea är ett hudtillstånd som varierar kraftigt i svårighetsgrad mellan olika individer. Hudtillståndet, som vanligtvis manifesterar sig som rodnad och synliga blodkärl i ansiktet, kan också leda till små, röda, pusfyllda blåsor eller knölar i värre fall. Rosacea klassificeras vanligtvis i fyra olika subtyper baserat på dess symptom och svårighetsgrad.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/mild-rosacea.webp',
                        image_alt: 'Bild av mild rosacea',
                        image_title: 'Mild rosacea exemplifierad',
                        title: 'Mild rosacea',
                        subtitle: 'även kallat vaskulär rosacea eller erythematotelangiektatisk rosacea',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/medelsvar-rosacea.webp',
                        image_alt: 'Bild av medelsvår rosacea',
                        image_title: 'Medelsvår rosacea exemplifierad',
                        title: 'Medelsvår rosacea',
                        subtitle: 'Även kallat papulopustulös rosacea eller akne rosacea',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/svar-rosacea.webp',
                        image_alt: 'Bild av svår rosacea',
                        image_title: 'Svår rosacea exemplifierad',
                        title: 'Svår rosacea',
                        subtitle: 'Även kallat fymatös rosacea eller rhinophyma',
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Yttre faktorer som förvärrar rosacea',
            content: '<p class="p200">Rosacea kan förvärras eller till och med utlösas av en rad yttre faktorer. Genom att förstå och hantera dessa faktorer kan individer potentiellt minska frekvensen och svårighetsgraden av deras rosacea-utbrott.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/sol-vind.webp',
                        image_alt: 'Bild av sol och vind',
                        image_title: 'Exempel på på sol och vind',
                        title: 'Sol och vind',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/het-mat-dryck.webp',
                        image_alt: 'Bild av het mat och dryck',
                        image_title: 'Het mat och dryck',
                        title: 'Het mat och dryck',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/stress.webp',
                        image_alt: 'Bild av stress',
                        image_title: 'Stress',
                        title: 'Stress och Starka Känslor',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/alkohol-koffein.webp',
                        image_alt: 'Bild av alkohol och koffein',
                        image_title: 'Alkohol och Koffein',
                        title: 'Alkohol och Koffein',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/hudvardsprodukter.webp',
                        image_alt: 'Bild av hudvårdsprodukter',
                        image_title: 'Hudvårdsprodukter',
                        title: 'Hudvårdsprodukter',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/hoga-temperaturer.webp',
                        image_alt: 'Bild av termometer',
                        image_title: 'Höga Temperaturer',
                        title: 'Höga Temperaturer',
                        subtitle: '',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/fysisk-anstrangning.webp',
                        image_alt: 'Bild av en person som utför fysisk ansträngning',
                        image_title: 'Fysisk Ansträngning',
                        title: 'Fysisk Ansträngning',
                        subtitle: '',
                  ),
            )
      ),

);
*/
$symptoms_title = 'Rosacea symptom';

$symptoms = array(
      new Symptom(
            name: 'Rodnad',
            image: 'images/symptoms/102x102/rosacea-rodnad.webp',
            content: 'Rodnad är ett vanligt symptom på rosacea och visar sig ofta som en ihållande röd färg i ansiktet, särskilt på kinderna, näsan, pannan och hakan.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Känd som Erythema',
            image_alt: 'Bild av rodnad orsakad av rosacea',
            image_title: 'Rodnad orsakad av rosacea'
      ),

      new Symptom(
            name: 'Vätskefyllda blåsor',
            image: 'images/symptoms/102x102/rosacea-vaskefyllda-blasor.webp',
            content: 'Vätskefyllda blåsor är ett annat symptom på rosacea. De liknar de som uppträder vid akne.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Känd som Pustler',
            image_alt: 'Bild av vätskefyllda blåsor orsakade av rosacea',
            image_title: 'Vätskefyllda blåsor orsakade av rosacea'
      ),

      new Symptom(
            name: 'Synliga blodkärl',
            image: 'images/symptoms/102x102/rosacea-blodkarl.webp',
            content: 'Vid rosacea kan de små blodkärlen i huden bli mer synliga, vilket framträder som tunna röda linjer.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Känd som Telangiectasier',
            image_alt: 'Bild av synliga blodkärl orsakade av rosacea',
            image_title: 'Synliga blodkärl orsakade av rosacea'
      ),

      new Symptom(
            name: 'Papler och pustler',
            image: 'images/symptoms/102x102/rosacea-papler-pustler.webp',
            content: 'Rosacea kan leda till utvecklingen av röda upphöjda papler och pustler som vid akne.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Känd som Papulopustulär rosacea',
            image_alt: 'Bild av papler och pustler orsakade av rosacea',
            image_title: 'Papler och pustler orsakade av rosacea'
      ),

      new Symptom(
            name: 'Hudförtjockning',
            image: 'images/symptoms/102x102/rosacea-hudfortjockning.webp',
            content: 'Hudförtjockning, särskilt runt näsan (en tillstånd kallad rhinophyma), kan förekomma vid mer allvarliga fall av rosacea. Rhinophyma är vanligare hos män.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Känd som Rhinophyma',
            image_alt: 'Bild av hudförtjockning orsakad av rosacea',
            image_title: 'Hudförtjockning orsakad av rosacea'
      ),

      new Symptom(
            name: 'Ögonproblem',
            image: 'images/symptoms/102x102/rosacea-ogonproblem.webp',
            content: 'Okulär rosacea är en form av sjukdomen som påverkar ögonen och ögonlocken. Symptom kan inkludera torra ögon, irritation och rinnande ögon.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Känd som Okulär rosacea',
            image_alt: 'Bild av ögonproblem orsakade av rosacea',
            image_title: 'Ögonproblem orsakade av rosacea'
      ),

      new Symptom(
            name: 'Brännande eller stickande känsla',
            image: 'images/symptoms/102x102/rosacea-brannande-stickande.webp',
            content: 'En brännande eller stickande känsla i huden är ett vanligt symptom på rosacea.',
            url: '',
            url_title: '',
            url_label: '',
            aka: 'Känd som Brännande eller stickande känsla',
            image_alt: 'Bild av brännande eller stickande känsla orsakad av rosacea',
            image_title: 'Brännande eller stickande känsla orsakad av rosacea'
      ),
);

$headline01 = "01. Identifiera din rosacea";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist på rosacea utförs en undersökning av din hud. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för rosaceabehandling',
      image_title: 'Konsultation för rosaceabehandling',
      consultation_url: 'consultation-booking?problem=rosacea',
      consultation_url_label: 'Boka tid för hudkonsultation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för rosacea',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation',
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
            image_small: 'images/services/200x200/ansiktsbehandling-rosacea.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-rosacea.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',
            consultation_url: 'consultation-booking?problem=rosacea&service=classicFacials',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot rosacea',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/rosacea-konsultation-1643922',
            booking_url_label: 'Boka tid för ansiktsbehandling mot rosacea',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot rosacea',
            url: 'problem/rosacea/behandling',
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
            image_small: 'images/services/200x200/produkter-rosacea.webp',
            image_large: 'images/services/200x200/produkter-rosacea.webp',
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
            image_small: 'images/services/200x200/ipl-rosacea.webp',
            image_large: 'images/services/200x200/ipl-rosacea.webp',
            image_alt: 'Behandla rosacea med IPL',
            image_title: 'Behandla rosacea med IPL',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'behandlingar/ipl-rosacea',
            url_label: 'Läs mer om behandlingar mot ytliga blodkärl',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot ytliga blodkärl'
      ),
);

$articles = array(
      new Article(
            title: 'Varför AcneSpecialisten?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför AcneSpecialisten?',
            image_title: 'Varför AcneSpecialisten?',
            content: '<p class="p200">Om du har problem med rosacea och letar efter den bästa lösning, är AcneSpecialisten ditt självklara val. Med över 30 års erfarenhet inom området har vi utvecklat en djup förståelse för denna hudåkomma, dess olika typer och de mest effektiva behandlingsmetoderna. Vi är mer än bara en klinik, vi är din partner i kampen mot rosacea.</p>

                  <p class="p200 mt-m">Vi tar oss tid att förstå just dina behov och skräddarsyr en behandlingsplan som passar just dig. Vår expertis inom rosacea gör att vi kan identifiera de mest effektiva produkterna för att förebygga och behandla din rosacea, samtidigt som vi ser till att de passar din individuella hudtyp och livsstil. </p>

                  <p class="p200 mt-m">AcneSpecialisten erbjuder mer än bara behandling. Vi erbjuder ett omfattande stöd genom hela din resa, från första konsultation till uppföljning och underhåll. Vi vet att att hantera rosacea kan vara en utmaning och därför är vi här för att ge dig den hjälp och de verktyg du behöver för att hantera dina symptom och förbättra din livskvalitet. </p>

                  <p class="p200 mt-m">Genom att välja AcneSpecialisten kan du lita på att du får den mest effektiva, individanpassade och stöttande behandlingen för din rosacea. Vi är här för att hjälpa dig uppnå klar och frisk hud. Välkommen till AcneSpecialisten - din partner i rosaceavård.</p>',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du känner att din rosacea hindrar dig från att leva fullt ut, eller om du har testat olika behandlingar och produkter som inte ger någon långvarig förbättring, är det dags att vända dig till AcneSpecialisten. Ju tidigare du tar itu med din rosacea, desto större chans har du att förebygga ärrbildning och permanenta hudförändringar. Oavsett om du lider av mild, måttlig eller svår rosacea, kan vi på AcneSpecialisten ge dig den expertis och de skräddarsydda behandlingsplaner du behöver. Vi bjuder in dig till en kostnadsfri konsultation där vi kan börja din resa mot en klarare, friskare hud.</p>

                  <p class="p200 mt-m">Innan du överväger att uppsöka en läkare för din rosacea, överväg AcneSpecialisten. Vi erbjuder en kostnadsfri konsultation där vi noggrant utvärderar din rosacea och föreslår en individanpassad behandlingsplan. Våra specialister har omfattande erfarenhet av att behandla rosacea och kan ge dig råd om de mest effektiva produkterna och behandlingarna för just din hud. Genom att vända dig till AcneSpecialisten först, kan du undvika att behöva förlita dig på kraftfulla läkemedel som kan ha biverkningar och påverka hela kroppen. Med en kostnadsfri konsultation kan du se vad vi kan göra för din hud, innan du tar steget att uppsöka läkarvård.</p>

                  <p class="p200 mt-m">AcneSpecialisten är mer än bara en klinik - vi är en partner i din rosacea-vård. Vårt team av experter står vid din sida genom varje steg av din behandlingsresa, från den första konsultationen till underhållsbehandlingar och uppföljningar. Vi är engagerade i att hjälpa dig att återfå din livskvalitet och att ge dig den friska och klara hud du förtjänar.</p>',
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
                  text: '<p class="p200">Rosacea och akne är två distinkta hudtillstånd. Även om de båda kan resultera i röda, inflammerade områden på huden, finns det några viktiga skillnader. Rosacea tenderar att uppträda i mitten av ansiktet (särskilt näsan och kinderna) och kan orsaka synliga blodkärl, röda fläckar och ibland ögonproblem. Rosacea kan också åtföljas av en brännande eller stickande känsla. Akne å andra sidan kan förekomma var som helst på kroppen och karakteriseras av pormaskar, whiteheads, och ibland cystor eller knutor under huden.</p>'
            ),
            new Question(
                  title: 'Är det några särskilda triggers som kan förvärra rosacea?',
                  text: '<p class="p200">Ja, det finns många potentiella triggers som kan förvärra rosacea. Dessa kan inkludera alkohol, kryddstark mat, stress, extremt väder (som stark vind eller sol), intensiv fysisk aktivitet, varma drycker och vissa hudvårdsprodukter.</p>

                        <p class="p200 mt-m">Varje person med rosacea kan ha olika triggers, och det kan vara användbart att föra en dagbok för att identifiera vilka faktorer som förvärrar ens egna symptom.</p>'
            ),
            new Question(
                  title: 'Kan man helt bli av med rosacea, eller är det en kronisk sjukdom?',
                  text: '<p class="p200">Rosacea är en kronisk sjukdom, vilket betyder att den är långvarig. Även om det inte finns något botemedel, kan symptom kontrolleras och minskas betydligt med rätt behandling.</p>'
            ),
            new Question(
                  title: 'Vilka är de möjliga komplikationerna av rosacea om den inte behandlas?',
                  text: '<p class="p200">Om rosacea inte behandlas kan den leda till permanenta förändringar i huden, såsom förtjockning och klumpighet, särskilt runt näsan (en tillstånd som kallas rhinophyma). Rosacea kan också orsaka allvarliga ögonproblem, inklusive infektioner och inflammation i ögonlocket och hornhinnan, vilket kan leda till synskador om det inte behandlas.</p>'
            ),
            new Question(
                  title: 'Är det någon koppling mellan rosacea och kost, och finns det några livsstilsförändringar som kan hjälpa till att hantera sjukdomen?',
                  text: '<p class="p200">Ja, vissa individer med rosacea har rapporterat att vissa livsmedel och drycker, som alkohol och kryddstark mat, kan förvärra deras symptom. Undvikande av extrem hetta och kyla samt stark sol kan också vara gynnsamt, då dessa faktorer ofta kan förvärra rosacea. Stresshantering är ytterligare en faktor att ta hänsyn till vid hantering av rosacea.</p>

                        <p class="p200 mt-m">Men vi på AcneSpecialisten förstår att det kan vara en stor utmaning att konstant justera din livsstil för att hantera din rosacea. Vi är här för att hjälpa. Genom att erbjuda effektiva behandlingar mot rosacea strävar vi efter att du ska kunna leva ditt liv som du vill, utan att behöva oroa dig för dina symptom. Ta gärna kontakt med oss för mer information om hur vi kan hjälpa dig att hantera din rosacea.</p>'
            ),
      ),
      'Behandling mot rosacea' => array(
            new Question(
                  title: 'Vilka är de mest effektiva hudvårdsprodukterna för att lindra symtom på rosacea?',
                  text: '<p class="p200">De mest effektiva hudvårdsprodukterna för att lindra rosaceasymptom är ofta de som lugnar huden och minskar inflammation. Dessutom kan produkter med solskyddsfaktor (SPF) hjälpa till att skydda huden mot UV-strålar, vilket kan förvärra rosaceasymptom.</p>'
            ),
            new Question(
                  title: 'Vilka typer av ansiktsbehandlingar är mest fördelaktiga för personer med rosacea och varför?',
                  text: '<p class="p200">Vissa ansiktsbehandlingar kan vara särskilt fördelaktiga för personer med rosacea. Milt rengörande behandlingar kan hjälpa till att ta bort orenheter från huden utan att irritera den. Behandlingar som innehåller antiinflammatoriska ingredienser kan hjälpa till att minska inflammation och rodnad.</p>

                  <p class="p200 mt-m">Hydrerande behandlingar kan hjälpa till att återfukta och stärka hudbarriären, vilket kan minska hudens känslighet. Det är dock viktigt att undvika behandlingar som är för hårda eller irriterande, eftersom de kan förvärra rosaceasymptomen.</p>'
            ),
            new Question(
                  title: 'Hur kan regelbundna ansiktsbehandlingar förbättra tillståndet hos en person med rosacea?',
                  text: '<p class="p200">Regelbundna ansiktsbehandlingar kan spela en nyckelroll i hanteringen av rosacea. De kan hjälpa till att hålla huden ren, minska inflammation och rodnad, återfukta huden och stärka hudbarriären. Genom att göra dessa behandlingar till en regelbunden del av din hudvårdsrutin kan du hjälpa till att hålla dina rosaceasymptom under kontroll.</p>'
            ),
            new Question(
                  title: 'Finns det några särskilda steg man ska följa i sin hudvårdsrutin om man har rosacea och använder specialprodukter och ansiktsbehandlingar?',
                  text: '<p class="p200">Ja, det finns några särskilda steg du bör följa om du har rosacea och använder specialprodukter och ansiktsbehandlingar. Det första steget är att rengöra huden varsamt med en mild rengöringsprodukt. Använd sedan en toner utan alkohol för att balansera hudens pH. Efter det, applicera eventuella medicinska krämer eller geler som du har fått utskrivna för att behandla din rosacea.</p>

                  <p class="p200 mt-m">Därefter, applicera en återfuktande kräm för att hjälpa till att återfukta huden och stärka hudbarriären. Slutligen, applicera ett solskyddsmedel med bred spektrum för att skydda huden mot solens strålar. Om du använder ansiktsbehandlingar bör de passa in i denna rutin på ett sätt som passar din hud och dina specifika behov.</p>'
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
            image: 'images/problems/102x102/ytliga-blodkarl.webp',
            image_alt: 'Bild som visar ytliga blodkärl som röda linjer i huden',
            image_title: 'Ytliga blodkärl - vanligt på näsa och kinder',
            url: 'problem/ytliga-blodkarl',
            url_title: 'Ytliga blodkärl'
      ),
      new RelatedProblem(
            name: 'Akne',
            aka: 'Papler & Pustler',
            image: 'images/problems/200x200/akne.webp',
            image_alt: 'Bild som skildrar akne, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Akne - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'akne',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Finnar',
            aka: 'Plitor & Inkapslingar',
            image: 'images/problems/200x200/finnar.webp',
            image_alt: 'Bild som visar finnar, små inflammationer i huden',
            image_title: 'Finnar - vanliga små hudinflammationer',
            url: 'finnar',
            url_title: 'Finnar'
      ),
);
$brands = array(
      new Brand(
            label: 'Powerlite',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
      ),
      new Brand(
            label: 'Dermapen',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen4 - Microneedling Verktyg för Hudföryngring',
            url: 'varumarken/dermapen4',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'Cryopen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'Cryopen Brand Logo',
            image_title: 'Cryopen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'varumarken/cryopen',
            url_title: 'Läs mer om Cryopen Kryoterapi Hudbehandlingar',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'images/brands/lumenis.svg',
            image_alt: 'Lumenis Brand Logo',
            image_title: 'Lumenis - Laser och Intensivt Pulserat Ljus (IPL) Teknologi för Hudvård',
            url: 'varumarken/lumenis',
            url_title: 'Läs mer om Lumenis Laser och IPL Hudvårdslösningar',
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
            image: 'images/brands/prxt.svg',
            image_alt: 'PRX-T33 Brand Logo',
            image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
            url: 'varumarken/prxt',
            url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial Brand Logo',
            image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
            url: 'varumarken/hydrafacial',
            url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'Infuzion Brand Logo',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
            url: 'varumarken/infuzion',
            url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
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
                                    include('../widgets/problem-trivia-card/problem-trivia-card.php');
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
                        <!--<?php if (isset($type_categories) && sizeof($type_categories) > 0) { ?>
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
                                                                  include('../widgets/type-card/type-card.php');
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
                                                                        <?php include('../widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                              </section>
                        <?php } ?>-->
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
                                                      <?php include('../widgets/symptom-card/symptom-card.php'); ?>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="faq"><?php echo $faq_url_label ?></a>
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
                                                <?php include('../widgets/related-problem-card/related-problem-card.php'); ?>
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