<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Akne - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om akne, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'akne, aknebehandling, orsaker till akne, förebygga akne, ta bort akne, vuxenakne, tonårsakne, akneärr, finnar, pormaskar';


$title = 'Akne';

$image_small = 'images/problems/424x324/akne.webp';
$image_large = 'images/problems/424x456/akne.webp';
$image_title = 'Visar en hud med akne';
$image_alt = 'Bild som illustrerar hur akne ser ut på huden';

$description = 'Här förklarar vi vad som kännetecknar akne, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av akne, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            url: 'problem/finnar',
            label: 'Finnar',
            title: 'Allt du behöver veta om finnar och deras behandling'
      ),
      new Link(
            url: 'problem/vuxenakne',
            label: 'Vuxenakne',
            title: 'Utforska orsaker, symptom och behandlingar av vuxenakne'
      ),
      new Link(
            url: 'problem/tonarsakne',
            label: 'Tonårsakne',
            title: 'Komplett guide om tonårsakne: orsaker, förebyggande och lösningar'
      ),
];

$nav_buttons = array(
      'about' => 'Om akne',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'Risker',
      'articles' => 'Varför AS?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om akne';

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
            icons: array('who-infants' => 'Hormoner', 'who-teenagers' => 'Stress', 'who-adults' => 'Genetik', 'who-elders' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får rosacea?',
            content: '<p class="p200">Vanligtvis utvecklas rosacea hos individer mellan 30 och 50 års ålder, även om det också kan dyka upp tidigare eller senare. Rosacea är vanligare hos kvinnor, men män tenderar att uppleva mer svår rosacea. Även om kvinnor är mer benägna att få rosacea, utvecklar män ofta mer svåra former av sjukdomen, inklusive rhinophyma, som kännetecknas av förtjockning av huden på näsan.</p>',
            extended_content: '<p class="p200 mt-xl">Det är också viktigt att notera att personer med en familjehistoria av rosacea eller andra hudsjukdomar, som akne, har en högre risk att utveckla sjukdomen. Dessa individer bör vara särskilt medvetna om symtomen på rosacea och söka professionell hjälp om de misstänker att de har tillståndet.</p>
            <p class="p200 mt-xl">På AcneSpecialisten är vi väl medvetna om att rosacea påverkar individer på olika sätt. Vi arbetar för att skapa en skräddarsydd behandlingsplan som är anpassad till din hudtyp, din livsstil och dina specifika symtom. Vi vill hjälpa dig att hantera din rosacea på bästa möjliga sätt.</p>',
            icons: array('who-infants' => 'Barn', 'who-teenagers' => 'Ungdommar', 'who-adults' => 'Vuxna', 'who-elders' => 'Män & Kvinnor')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man rosacea?',
            content: '<p class="p200">Rosacea är ett hudtillstånd som huvudsakligen påverkar ansiktet, men det kan också spridas till andra områden av huden. Så var exakt uppträder rosacea på kroppen? I huvudsak är rosacea mest framträdande i mitten av ansiktet. Rödhet och synliga blodkärl kan först uppträda på näsan och kinderna, men kan sedan sprida sig till pannan och hakan. Rosacea kan ibland även påverka områdena runt ögonen och orsaka inflammation i ögonlocken och ögonvita, ett tillstånd som kallas okulär rosacea.</p>',
            extended_content: '<p class="p200 mt-xl">Näsans vävnad kan också påverkas av rosacea, särskilt hos män, vilket resulterar i en tillstånd som kallas rhinophyma. Rhinophyma är en form av rosacea där huden på näsan blir tjock och knölig. Även om rosacea primärt påverkar ansiktet, kan det i vissa fall sprida sig till hals, bröst, öron och till och med hårbotten. Så, medan ansiktet är det mest typiska området för rosacea att dyka upp, kan det uppträda var som helst på överkroppen.</p>
            <p class="p200 mt-xl">Det är viktigt att påpeka att rosaceas manifestationer varierar från individ till individ, och dess exakta plats på kroppen kan variera beroende på flera faktorer, inklusive din genetiska predisposition och miljöfaktorer. På AcneSpecialisten är vi experter på att hantera alla former av rosacea, oavsett var de uppträder på kroppen. Vårt team av hudvårdsexperter är redo att erbjuda individualiserad behandling som kommer att hantera dina specifika symtom och förbättra din livskvalitet.</p>',
            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlarna')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rosacea och skapar en individuell behandlingsplan.',
            url: 'hudkonsultation',
            url_label: 'Få gratis konsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika rosacea, så att du snabbt och säkert blir av med problemet.',
            url: 'aknebehandling',
            url_label: 'Se aknebehandlingar',
            url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny rosacea och hålla din hud i balans.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            url_label: 'Se produkter',
            url_title: 'Hitta de bästa produkterna för att förebygga rosacea'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När rosacean är borta fokuserar vi på att reducera eventuella ytliga blodkärl med behandlingsmetoder som IPL för en jämn och problemfri hud.',
            url: 'aknearr-behandling',
            url_label: 'Se IPL-behandlingar',
            url_title: 'Upptäck effektiva behandlingar för ytliga blodkärl'
      ),

);
$treatment_link = '<a href="problem/rosacea/rosaceabehandling" title="Utforska effektiva aknebehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra rosaceabehandlingar</a>';

$types_title = 'Olika typer av rosacea';

$type_categories = array(
      new BasedTypeCategory(
            id: 'category-severity',
            title: 'Rosacea baserat på svårighetsgrad',
            content: '<p class="p200">Rosacea är ett hudtillstånd som varierar kraftigt i svårighetsgrad mellan olika individer. Hudtillståndet, som vanligtvis manifesterar sig som rodnad och synliga blodkärl i ansiktet, kan också leda till små, röda, pusfyllda blåsor eller knölar i värre fall. Rosacea klassificeras vanligtvis i fyra olika subtyper baserat på dess symptom och svårighetsgrad.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/mild-rosacea.webp',
                        image_alt: 'Bild av mild rosacea',
                        image_title: 'Mild rosacea exemplifierad',
                        title: 'Mild rosacea',
                        subtitle: 'även kallat vaskulär rosacea eller erythematotelangiektatisk rosacea',
                        content: 'Karaktäriseras av frekventa rodnader, ihållande rodnad och synliga blodkärl. Huden kan också kännas torr och stram.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/medelsvar-rosacea.webp',
                        image_alt: 'Bild av medelsvår rosacea',
                        image_title: 'Medelsvår rosacea exemplifierad',
                        title: 'Medelsvår rosacea',
                        subtitle: 'Även kallat papulopustulös rosacea eller akne rosacea',
                        content: 'Utöver rodnad och synliga blodkärl kan det också finnas små, röda, vättskefyllda blåsor.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/svar-rosacea.webp',
                        image_alt: 'Bild av svår rosacea',
                        image_title: 'Svår rosacea exemplifierad',
                        title: 'Svår rosacea',
                        subtitle: 'Även kallat fymatös rosacea eller rhinophyma',
                        content: 'Huden blir tjock och får en ojämn yta. Detta beror på överväxt av talgkörtlar och bindväv. Näsan kan bli större och få en knölig yta.',
                        url: '',
                        url_title: ''
                  ),
            )
      ),
      new BasedTypeCategory(
            id: 'category-reason',
            title: 'Yttre faktorer som förvärrar rosacea',
            content: '<p class="p200">Rosacea kan förvärras eller till och med utlösas av en rad yttre faktorer. Genom att förstå och hantera dessa faktorer kan individer potentiellt minska frekvensen och svårighetsgraden av deras rosacea-utbrott.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/sol-vind.webp',
                        image_alt: 'Bild av sol och vind',
                        image_title: 'Exempel på på sol och vind',
                        title: 'Sol och vind',
                        subtitle: 'Sol och vind påverkan på rosacea',
                        content: 'Exponering för sol och vind kan orsaka eller förvärra rosacea. Dessa faktorer kan irritera huden och orsaka inflammation, vilket i sin tur kan leda till uppkomsten av rosacea.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/het-mat-dryck.webp',
                        image_alt: 'Bild av het mat och dryck',
                        image_title: 'Het mat och dryck',
                        title: 'Het mat och dryck',
                        subtitle: 'Het mat och drycks påverkan på rosacea',
                        content: 'Konsumtion av varm mat och dryck kan också orsaka eller förvärra rosacea. De kan öka blodflödet till hudens yta, vilket kan orsaka rodnad och inflammation.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/stress.webp',
                        image_alt: 'Bild av stress',
                        image_title: 'Stress',
                        title: 'Stress och Starka Känslor',
                        subtitle: 'Stressens påverkan på rosacea',
                        content: 'Stress och starka känslor kan leda till att blodflödet till hudens yta ökar, vilket kan orsaka eller förvärra rosacea.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/alkohol-koffein.webp',
                        image_alt: 'Bild av alkohol och koffein',
                        image_title: 'Alkohol och Koffein',
                        title: 'Alkohol och Koffein',
                        subtitle: 'Alkohol och koffeins påverkan på rosacea',
                        content: 'Även om alkohol och koffein inte nödvändigtvis orsakar rosacea, har studier visat att de kan förvärra symptomen på sjukdomen.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/hudvardsprodukter.webp',
                        image_alt: 'Bild av hudvårdsprodukter',
                        image_title: 'Hudvårdsprodukter',
                        title: 'Hudvårdsprodukter',
                        subtitle: 'Hudvårdsprodukters påverkan på rosacea',
                        content: 'Vissa hudvårdsprodukter kan irritera huden och orsaka eller förvärra rosacea. Detta inkluderar produkter som innehåller alkohol, trollhassel, pepparmynta, eukalyptusolja och andra potentiellt irriterande ingredienser.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/hoga-temperaturer.webp',
                        image_alt: 'Bild av termometer',
                        image_title: 'Höga Temperaturer',
                        title: 'Höga Temperaturer',
                        subtitle: 'Höga temperaturers påverkan på rosacea',
                        content: 'Rosacea kan också förvärras av höga temperaturer, inklusive bastubad och varma bad.',
                        url: '',
                        url_title: ''
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/fysisk-anstrangning.webp',
                        image_alt: 'Bild av en person som utför fysisk ansträngning',
                        image_title: 'Fysisk Ansträngning',
                        title: 'Fysisk Ansträngning',
                        subtitle: 'Fysisk ansträngnings påverkan på rosacea',
                        content: 'Hård fysisk ansträngning, inklusive tunga lyft och intensiv konditionsträning, kan också orsaka eller förvärra rosacea.',
                        url: '',
                        url_title: ''
                  ),
            )
      ),
      new BasedTypeCategory(
            id: 'category-area',
            title: 'Rosacea baserat på område',
            content: '<p class="p200">Rosacea manifesterar sig vanligtvis på vissa specifika områden i ansiktet. De vanligaste områdena inkluderar näsan, kinderna, pannan och hakan. Men rosacea kan även uppträda runt ögonen och mindre vanligt på halsen och bröstet. Placeringen av rosacea kan hjälpa till att identifiera dess specifika typ och styra valet av behandling.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/rosacea-ansikte.webp',
                        image_alt: 'Bild av rosacea i ansiktet',
                        image_title: 'Exempel på rosacea i ansiktet',
                        title: 'Rosacea i ansiktet',
                        subtitle: 'Vanligaste området för rosacea',
                        content: 'Rosacea uppstår oftast i ansiktet, och kan omfatta rodnad, synliga blodkärl, och ibland små, röda, pusfyllda blåsor eller knölar.',
                        url: 'problem/rosacea/typer/rosacea-ansiktet',
                        url_title: 'Läs mer om rosacea i ansiktet och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/rosacea-nasa.webp',
                        image_alt: 'Bild av rosacea på näsan',
                        image_title: 'Exempel på rosacea på näsan',
                        title: 'Rosacea på näsan',
                        subtitle: 'Även kallat rhinophyma vid svår rosacea',
                        content: 'Rosacea kan specifikt manifestera sig på näsan, vilket kan leda till en förtjockad och röd näsa, känd som rhinophyma i mer allvarliga fall.',
                        url: 'problem/rosacea/typer/rosacea-nasan',
                        url_title: 'Läs mer om rosacea på näsan och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/rosacea-kinder.webp',
                        image_alt: 'Bild av rosacea på kinderna',
                        image_title: 'Exempel på rosacea på kinderna',
                        title: 'Rosacea på kinderna',
                        subtitle: 'Ett vanligt område för rosacea',
                        content: 'Rosacea kan även uppstå på kinderna, och kan resultera i en ständig rodnad och synliga blodkärl.',
                        url: 'problem/rosacea/typer/rosacea-kinder',
                        url_title: 'Läs mer om rosacea på kinderna och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/rosacea-panna.webp',
                        image_alt: 'Bild av rosacea på pannan',
                        image_title: 'Exempel på rosacea på pannan',
                        title: 'Rosacea på pannan',
                        subtitle: 'Ett område som kan drabbas',
                        content: 'Rosacea kan manifestera sig på pannan, och kan innebära bestående rodnad och synliga blodkärl.',
                        url: 'problem/rosacea/typer/rosacea-pannan',
                        url_title: 'Läs mer om rosacea på pannan och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/rosacea-haka.webp',
                        image_alt: 'Bild av rosacea på hakan',
                        image_title: 'Exempel på rosacea på hakan',
                        title: 'Rosacea på hakan',
                        subtitle: 'Ett möjligt område för rosacea',
                        content: 'Rosacea kan uppstå på hakan, vilket kan leda till en konstant rodnad och synliga blodkärl.',
                        url: 'problem/rosacea/typer/rosacea-hakan',
                        url_title: 'Läs mer om rosacea på hakan och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/rosacea-ogon.webp',
                        image_alt: 'Bild av rosacea runt ögonen',
                        image_title: 'Exempel på rosacea runt ögonen',
                        title: 'Rosacea runt ögonen',
                        subtitle: 'Även kallat okulär rosacea',
                        content: 'Okulär rosacea är en form av rosacea som drabbar ögonområdet. Det kan leda till en rad symptom, inklusive rodnad, torrhet, klåda, brännande känsla, ljuskänslighet och synproblem.',
                        url: 'problem/rosacea/typer/rosacea-ogon',
                        url_title: 'Läs mer om rosacea runt ögonen och dess potentiella behandlingar'
                  ),

            )
      )

);

$types_url = '<a href="typer" title="Lär dig mer om olika typer av rosacea och deras behandling" class="mt-xl button b200 outline expand l10n is-hidden-tablet">Läs mer om olika typer av rosacea</a>
              <a href="typer" title="Lär dig mer om olika typer av rosacea och deras behandling" class="mt-xl button b200 outline l10n is-hidden-mobile">Läs mer om olikta typer av rosacea</a>';

$symptoms_title = 'Rosacea symptom';

$symptoms = array(
            new Symptom(
            name: 'Rodnad',
            image: 'images/symptoms/102x102/rosacea-rodnad.webp',
            content: 'Rodnad är ett vanligt symptom på rosacea och visar sig ofta som en ihållande röd färg i ansiktet, särskilt på kinderna, näsan, pannan och hakan.',
            url: 'problem/rosacea/symtom/rodnad',
            url_title: 'Läs mer om rodnad som symptom vid rosacea',
            url_label: 'Läs mer om rodnad',
            aka: 'Känd som Erythema',
            image_alt: 'Bild av rodnad orsakad av rosacea',
            image_title: 'Rodnad orsakad av rosacea'
      ),

      new Symptom(
            name: 'Vätskefyllda blåsor',
            image: 'images/symptoms/102x102/rosacea-vaskefyllda-blasor.webp',
            content: 'Vätskefyllda blåsor är ett annat symptom på rosacea. De liknar de som uppträder vid akne.',
            url: 'problem/rosacea/symtom/vaskefyllda-blasor',
            url_title: 'Läs mer om vätskefyllda blåsor som symptom vid rosacea',
            url_label: 'Läs mer om vätskefyllda blåsor',
            aka: 'Känd som Pustler',
            image_alt: 'Bild av vätskefyllda blåsor orsakade av rosacea',
            image_title: 'Vätskefyllda blåsor orsakade av rosacea'
      ),

      new Symptom(
            name: 'Synliga blodkärl',
            image: 'images/symptoms/102x102/rosacea-blodkarl.webp',
            content: 'Vid rosacea kan de små blodkärlen i huden bli mer synliga, vilket framträder som tunna röda linjer.',
            url: 'problem/rosacea/symtom/synliga-blodkarl',
            url_title: 'Läs mer om synliga blodkärl som symptom vid rosacea',
            url_label: 'Läs mer om synliga blodkärl',
            aka: 'Känd som Telangiectasier',
            image_alt: 'Bild av synliga blodkärl orsakade av rosacea',
            image_title: 'Synliga blodkärl orsakade av rosacea'
      ),

      new Symptom(
            name: 'Papler och pustler',
            image: 'images/symptoms/102x102/rosacea-papler-pustler.webp',
            content: 'Rosacea kan leda till utvecklingen av röda upphöjda papler och pustler som vid akne.',
            url: 'problem/rosacea/symtom/papler-pustler',
            url_title: 'Läs mer om papler och pustler som symptom vid rosacea',
            url_label: 'Läs mer om papler och pustler',
            aka: 'Känd som Papulopustulär rosacea',
            image_alt: 'Bild av papler och pustler orsakade av rosacea',
            image_title: 'Papler och pustler orsakade av rosacea'
      ),

      new Symptom(
            name: 'Hudförtjockning',
            image: 'images/symptoms/102x102/rosacea-hudfortjockning.webp',
            content: 'Hudförtjockning, särskilt runt näsan (en tillstånd kallad rhinophyma), kan förekomma vid mer allvarliga fall av rosacea. Rhinophyma är vanligare hos män.',
            url: 'problem/rosacea/symtom/hudfortjockning',
            url_title: 'Läs mer om hudförtjockning som symptom vid rosacea',
            url_label: 'Läs mer om hudförtjockning',
            aka: 'Känd som Rhinophyma',
            image_alt: 'Bild av hudförtjockning orsakad av rosacea',
            image_title: 'Hudförtjockning orsakad av rosacea'
      ),

      new Symptom(
            name: 'Ögonproblem',
            image: 'images/symptoms/102x102/rosacea-ogonproblem.webp',
            content: 'Okulär rosacea är en form av sjukdomen som påverkar ögonen och ögonlocken. Symptom kan inkludera torra ögon, irritation och rinnande ögon.',
            url: 'problem/rosacea/symtom/ogonproblem',
            url_title: 'Läs mer om ögonproblem som symptom vid rosacea',
            url_label: 'Läs mer om ögonproblem',
            aka: 'Känd som Okulär rosacea',
            image_alt: 'Bild av ögonproblem orsakade av rosacea',
            image_title: 'Ögonproblem orsakade av rosacea'
      ),

      new Symptom(
            name: 'Brännande eller stickande känsla',
            image: 'images/symptoms/102x102/rosacea-brannande-stickande.webp',
            content: 'En brännande eller stickande känsla i huden är ett vanligt symptom på rosacea.',
            url: 'problem/rosacea/symtom/brannande-stickande',
            url_title: 'Läs mer om brännande eller stickande känsla som symptom vid rosacea',
            url_label: 'Läs mer om brännande eller stickande känsla',
            aka: 'Känd som Brännande eller stickande känsla',
            image_alt: 'Bild av brännande eller stickande känsla orsakad av rosacea',
            image_title: 'Brännande eller stickande känsla orsakad av rosacea'
      ),
);

$headline01 = "01. Identifiera din rosacea";

$service = new Service(
      id: 'rosacea',
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist på rosacea utförs en undersökning av din hud. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för rosaceabehandling',
      image_title: 'Konsultation för rosaceabehandling',
      consultation_url: 'hudkonsultation',
      consultation_url_label: 'Boka tid för hudkonsultation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för rosacea',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'hudkonsultation',
      url_label: 'Läs mer om vår hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'
);


$headline02 = "02. Behandla aktiv rosacea";

$services = array(
      new Service(
            id: 'rosacea',
            title: 'Ansiktsbehandling mot rosacea',
            duration: '60 min',
            price: '995 kr',
            content: 'En effektiv ansiktsbehandling mot rosacea fokuserar på att lindra rodnad och inflammation. Genom att använda specialanpassade produkter och tekniker kan denna behandling bidra till att förbättra hudens textur och utseende.',
            image_small: 'images/services/200x200/ansiktsbehandling-rosacea.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-rosacea.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot rosacea',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/rosacea-konsultation-1643922',
            booking_url_label: 'Boka tid för ansiktsbehandling mot rosacea',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot rosacea',
            url: 'ansiktsbehandling-rosacea',
            url_label: 'Läs mer om ansiktsbehandling för rosacea',
            url_title: 'Läs mer om ansiktsbehandling för rosacea'

      ),
);


$headline03 = "03. Förebygg uppkomsten av ny rosacea";

$products = array(
      new Service(
            id: 'produkter-mot-rosacea',
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
            booking_url_title: null
      )
);


$headline04 = "04. Reparera post-rosacea";

$procedures = array(
      new Service(
            id: 'ipl-for-rosacea',
            title: 'Behandla rosacea',
            duration: '60 minuter',
            price: 'Pris från 995 kr',
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
            booking_url_title: null
      ),
);

$articles = array(
      new Article(
            id: 'rosacea-causes-and-risk-factors',
            title: 'Varför AcneSpecialisten?!',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Du som vill ha det som är bäst mot rosacea bör välja AcneSpecialisten eftersom vi är experter på att behandla rosacea och har över 30 års erfarenhet av att ha arbetat med olika typer av rosacea. Vi lever upp till vårt namn genom att erbjuda personlig och professionell hjälp för att hjälpa dig att uppnå en klar och frisk hud. Vi skräddarsyr behandlingar baserade på dina individuella problem och behov, vi rekommenderar de bästa rosaceaprodukterna för att förebygga och behandla din hud och rosacea. </p><p class="p200 mt-m">Genom att välja AcneSpecialisten får du den mest effektiva behandlingen för ditt specifika fall och en hudvårdspartner som stöttar dig genom hela processen.</p>',
      ),
      new Article(
            id: 'when-to-see-your-rosacea-specialist',
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Du bör besöka RosaceaSpecialisten när du känner att din rosacea påverkar din livskvalitet eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar. Ju tidigare du söker hjälp, desto större är chansen att undvika ärrbildning och långvariga hudproblem. RosaceaSpecialisten är här för att erbjuda dig expertis och skräddarsydda behandlingar oavsett om du har lindrig, måttlig eller svår rosacea. Tveka inte att kontakta oss för att boka en kostnadsfri konsultation och ta det första steget mot en klarare och friskare hud.</p><p class="p200 mt-m">Välj RosaceaSpecialisten innan du går till en läkare, eftersom vi erbjuder en kostnadsfri konsultation där vi analyserar din rosacea och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla rosacea och kan ge dig råd om vilka produkter och behandlingar som är bäst för just din hudtyp. Att prova RosaceaSpecialisten först kan hjälpa dig att undvika att använda tunga mediciner som kan ha biverkningar och påverka hela kroppen. Genom att boka en gratis konsultation hos oss får du en chans att se hur vi kan hjälpa dig att förbättra din hudhälsa innan du tar steget att besöka en läkare.</p>',
      ),
);
$results = array(
      new ResultCustomer(
            id: '1',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne"">behandlingar mot akne</a>',
            )
      ),
      new ResultCustomer(
            id: '2',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>',
            )
      ),
);
$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
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
            text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily'
      ),

);
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
                  title: 'Vilka är fördelarna med att använda specifika hudvårdsprodukter i kombination med IPL-behandlingar för att behandla rosacea?',
                  text: '<p class="p200">De fungerar genom att minska inflammation, rodnad och ojämn hudton som ofta förknippas med rosacea. Dessutom kan solskyddsmedel hjälpa till att skydda huden från solskador, vilket kan förvärra rosacea.</p>'
            ),
            new Question(
                  title: 'Vilka är fördelarna med att använda specifika hudvårdsprodukter i kombination med IPL-behandlingar för att behandla rosacea?',
                  text: '<p class="p200">Användning av specifika hudvårdsprodukter i kombination med IPL-behandlingar för att behandla rosacea kan ge förbättrade resultat. Hudvårdsprodukterna kan hjälpa till att lugna huden, minska rodnad och inflammation och förbereda huden för IPL-behandling. IPL-behandlingen i sin tur kan hjälpa till att minska synliga blodkärl och jämnar ut hudtonen, vilket ger en mer omfattande lösning på rosacea-problemet.</p>'
            ),
            new Question(
                  title: 'Hur kan IPL-behandlingar komplettera hudvård och ansiktsbehandlingar för att ge en mer omfattande behandling av rosacea?',
                  text: '<p class="p200">Eftervården efter en aknebehandling hos Acnespecialisten är lika viktig som själva behandlingen. När aknen är utklämd och borta är det viktigt att förebygga uppkomsten av ny akne. Om du inte följer din eftervårdsplan kommer du att få resultat, men det kommer inte vara bestående, eftersom akneproduktionen sätter igång igen kort tid efter behandlingen.</p>

                  <p class="p200 mt-m">För att hålla huden i kontroll och balans är det viktigt att följa de råd och rekommendationer vi ger dig angående hudvårdsrutin och produkter. Kontinuerlig behandling och förebyggande åtgärder är avgörande för att uppnå och bibehålla en klar och frisk hud. Kom ihåg att vi på Acnespecialisten alltid finns här för att hjälpa och stötta dig genom hela processen, både under och efter din behandling.</p>',
            ),
      ),
);
$skin_guide_articles = array(
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
);
$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg',
            image_title: 'Cazzandra Lindberg'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik',
            image_title: 'Veronika Benedik'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul',
            image_title: 'Amira Maqboul'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom',
            image_title: 'Vilma Libom'
      )
);
$related_problems = array(
      new RelatedProblem(
            id: 'acnearr',
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: '',
            image_title: '',
      ),
      new RelatedProblem(
            id: 'rosacea',
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: '',
            image_title: '',
      ),
      new RelatedProblem(
            id: 'perioral-dermatit',
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: '',
            image_title: '',
      ),
);
$brands = array(
      new Brand(
            label: 'Powerlite',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite',
            image_title: 'Powerlite',
            url: 'varumarken/powerlite',
            url_title: 'Powerlite',
      ),
      new Brand(
            label: 'Dermapen4',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen4',
            image_title: 'Dermapen4',
            url: 'varumarken/dermapen4',
            url_title: 'Dermapen4',
      ),
      new Brand(
            label: 'Cryopen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'Cryopen',
            image_title: 'Cryopen',
            url: 'varumarken/cryopen',
            url_title: 'Cryopen',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'images/brands/lumenis.svg',
            image_alt: 'Lumenis',
            image_title: 'Lumenis',
            url: 'varumarken/lumenis',
            url_title: 'Lumenis',
      ),
      new Brand(
            label: 'Alma',
            image: 'images/brands/alma.svg',
            image_alt: 'Alma',
            image_title: 'Alma',
            url: 'varumarken/alma',
            url_title: 'Alma',
      ),
      new Brand(
            label: 'PRXT',
            image: 'images/brands/prxt.svg',
            image_alt: 'PRXT',
            image_title: 'PRXT',
            url: 'varumarken/prxt',
            url_title: 'PRXT',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial',
            image_title: 'Hydrafacial',
            url: 'varumarken/hydrafacial',
            url_title: 'Hydrafacial',
      ),
      new Brand(
            label: 'IP infusion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'IP infusion',
            image_title: 'IP infusion',
            url: 'varumarken/ip-infusion',
            url_title: 'IP infusion',
      ),
);
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
                                          <span class="p200 l10n">Även kallat</span>
                                          <?php foreach ($akas as $aka) { ?>
                                                <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                          <?php } ?>
                                          <div class="mt-xl">
                                                <div class="columns is-2 is-variable">
                                                      <div class="column">
                                                            <a href="hudkonsultation" title="Vår hudkonsultation" class="button white expand l10n">Få gratis konsultation</a>
                                                      </div>
                                                      <div class="column">
                                                            <a href="https://bokadirekt.se" title="Boka behandling" class="button white expand l10n">Boka behandling</a>
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
                                                <a href="hudkonsultation" title="Gratis hudkonsultation" class="button b200 white expand l10n">Gratis konsultation</a>
                                          </div>
                                          <div class="column is-half">
                                                <a href="https://bokadirekt.se" title="Boka behandling" class="button b200 white expand l10n">Boka behandling</a>
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
                                    <div class="mt-s">
                                          <span class="h200 l10n">Även känt som:</span>
                                          <?php foreach ($akas as $aka) { ?>
                                                <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                          <?php } ?>
                                    </div>
                                    <p class="mt-s p200"><?php echo $description ?></p>
                                    <div class="mt-xl flex-row" id="book-buttons">
                                          <a href="hudkonsultation" title="Gratis hudkonsultation" class="button b200 white l10n">Få gratis konsultation</a>
                                          <a href="https://bokadirekt.se" title="Boka behandling" class="button b200 white l10n">Boka behandling</a>
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
                        <?php if (sizeof($type_categories) > 0) { ?>
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
                                                <div class="type-category" id="<?php echo $type_category->id ?>">
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
                                                <div class="type-category-large" id="<?php echo $type_category->id ?>">
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
                                    <?php echo $types_url ?>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Omdömen" href="https://se.trustpilot.com/review/acnespecialisten.se">Läs fler omdömen</a>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Frågor och svar" href="faq">Läs fler frågor & Svar</a>
                        </section>
                        <section id="skin-guide">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Hudguide</h2>
                                    <div class="is-hidden-touch">
                                          <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="Läs fler guider">Läs fler guider</a>
                        </section>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Specialister" href="specialister">Se alla specialister</a>
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
                              <a href="varumarken" title="Varumärken" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Varumärken" href="varumarken">Se alla varumärken</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>