<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$image_small = 'images/problems/424x324/seborre.webp';
$image_large = 'images/problems/424x456/seborre.webp';

$description = 'Här förklarar vi vad som kännetecknar seborré, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av seborré, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';
$akas = ['problem/mjalleksem' => 'Mjälleksem', 'problem/seborroiskt-eksem' => 'Seborroiskt Eksem'];
$nav_buttons = array(
      'about' => 'Om seborré',
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
      'related-problems' => 'Relaterade problem'
);
$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är seborré?',
            content: '<p class="p200">Seborré är en relativt vanlig hudåkomma som kännetecknas av fläckar av röd, fjällande, ibland kliande hud som kan bli fet eller oljig. Trots sitt utseende och sina ibland obekväma symtom, är seborré helt ofarligt. Det är en kronisk åkomma, vilket innebär att den tenderar att komma och gå under en persons livstid.</p>',

            extended_content: '<p class="p200 mt-xl">På AcneSpecialisten förstår vi att även om seborré inte är farligt, kan dess symptom vara besvärliga och störande. Vi erbjuder ett brett utbud av individuellt anpassade behandlingar och produkter som kan hjälpa till att kontrollera symptomen, minska obehag och förbättra det allmänna utseendet på huden.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man seborré?',
            content: '<p class="p200">Seborré orsakas av flera sammanflätade faktorer. Centrala faktorer som bidrar till uppkomsten av detta hudtillstånd är överproduktion av talg och kroppens svar på den. Talg är en naturligt förekommande fet substans som produceras av hudens talgkörtlar för att hålla huden smidig och skyddad mot uttorkning och infektioner. När talgproduktionen ökar, blir huden mer oljig vilket ger en grogrund för vissa typer av hudbakterier och jästsvampar, detta kan leda till irritation, inflammation och en snabbare cellomsättning vilket resulterar i flagnande hud.</p>',

            extended_content: '<p class="p200 mt-xl">Hormonella förändringar, såsom de som sker under puberteten eller vid vissa tidpunkter i den menstruella cykeln, påverkar talgproduktionen och därmed risken för seborré. Dessutom har stress och brist på sömn en inverkan på huden och kroppens reglering av talgproduktionen vilket kan leda till seborré.</p>

            <p class="p200 mt-xl">På AcneSpecialisten har vi stor erfarenhet av att behandla seborré och vi kan erbjuda individuella behandlingsplaner för att hjälpa till att kontrollera och hantera ditt specifika tillstånd.</p>',
            icons: array('who-infants' => 'Hormoner', 'who-teenagers' => 'Stress', 'who-adults' => 'Genetik', 'who-elders' => 'Livsstil', 'who-elders' => 'Kyla')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får seborré?',
            content: '<p class="p200">Seborré kan drabba individer i alla åldrar och från alla bakgrunder, men det är särskilt vanligt i två specifika åldersgrupper. För det första är seborré vanligt hos vuxna, särskilt mellan 30 och 60 år. Män har ofta en högre frekvens av seborré än kvinnor, vilket tros vara kopplat till att män har en större mängd talgkörtlar och en högre talgproduktion. De med fet hudtyp har också större benägenhet att drabbas av seborré.</p>',

            extended_content: '<p class="p200 mt-xl">För det andra är det vanligt hos spädbarn, vanligtvis under de första tre månaderna av livet, där det ofta kallas "mjölkskorv". Hos spädbarn presenterar sig seborré oftast som en gulaktig, fjällande skorpbildning på huvudet.</p>

            <p class="p200 mt-xl">På AcneSpecialisten vet vi hur besvärlig seborré kan vara, och vi är här för att hjälpa. Vi erbjuder individuell rådgivning och behandlingar för att hjälpa dig att hantera ditt seborré och förbättra din hudhälsa.</p>',
            icons: array('who-infants' => 'Barn', 'who-adults' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man seborré?',
            content: '<p class="p200">Seborré uppstår ofta i ansiktet, framförallt i områden med hög koncentration av talgkörtlar, såsom runt näsan, ögonbrynen, pannan och ögonlocken. Här kan tillståndet ge röda, fjällande, oljiga fläckar som kan vara svåra att dölja och orsaka obehag.</p>',

            extended_content: '<p class="p200 mt-xl">Ett annat vanligt område är hårbotten, där överdriven talgproduktion kan leda till mjäll. Även områden som öron, bröst och mitten av ryggen kan drabbas, där seborré kan skapa röda, flagnande fläckar. Trots att dessa områden är mest utsatta, kan seborré dyka upp var som helst på kroppen där talgproduktionen är hög. </p>

            <p class="p200 mt-xl">På AcneSpecialisten är vi experter på att hantera seborré. Vi erbjuder ett brett utbud av behandlingar och produkter som kan hjälpa dig att kontrollera dina symptom och förbättra din hudhälsa.</p>',
            icons: array('who-infants' => 'Ögonbryn', 'who-teenagers' => 'Näsa', 'who-adults' => 'Panna', 'who-elders' => 'Hårbotten')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din seborré och skapar en individuell behandlingsplan.',
            url: 'hudkonsultation',
            url_label: 'Få gratis konsultation',
            url_title: 'Boka tid för gratis konsultation',
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva seborrébehandlingar anpassade för din specifika typ av seborré, så att du snabbt och säkert blir av med problemet.',
            url: 'ansiktsbehandlingar-problemhy',
            url_label: 'Se seborrébehandlingar',
            url_title: 'Se seborrébehandlingar',
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny seborré och hålla din hud i balans.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            url_label: 'Se produkter',
            url_title: 'Se produkter',
      ),
);
$symptoms = array(
      new Symptom(
            url: '',
            name: 'Flagnande hy',
            aka: '',
            image: 'images/symptoms/102x102/komedoner-stangda.webp',
            content: 'Det främsta symptomen på seborré är flagnande hud, vilket innebär att det finns små skikt eller flingor av döda hudceller som lossnar från huden. Detta beror på en överproduktion av hudens naturliga oljor (talg), som stör hudens normala avstötningsprocess och orsakar en snabbare cellomsättning.'
      ),
      new Symptom(
            url: '',
            name: 'Mjäll',
            aka: '',
            image: 'images/symptoms/102x102/komedoner-stangda.webp',
            content: 'Mjäll är vita till gula, små flagor av döda hudceller som lossnar från huden, specifikt från områden med hårväxt såsom ögonbryn, skäggväxt och hårbotten. Detta är en typ av flagnande som är vanligt i seborré och är oftast mer uttalad än normalt flagnande.'
      ),
      new Symptom(
            url: '',
            name: 'Klåda',
            aka: '',
            image: 'images/symptoms/102x102/komedoner-oppna.webp',
            content: 'Seborré kan ofta leda till klåda, särskilt i de områden där det finns en överproduktion av talg. Klådan beror på hudirritation som orsakas av en kombination av överflödig olja och en snabbare hudcellsturnover.'
      ),
      new Symptom(
            url: '',
            name: 'Fet hy',
            aka: '',
            image: 'images/symptoms/102x102/komedoner-stangda.webp',
            content: 'Fet hy är ett av de mest utmärkande tecknen på seborré. Detta beror på en överproduktion av talg, vilket gör huden glänsande och oljig, särskilt i områdena kring näsan, pannan och hårbotten.'
      ),
);
$service = new Service(
      id: 'konsultation',
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en AcneSpecialist utförs en undersökning av din seborré. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Konsultation',
      image_title: 'Konsultation',
      consultation_url: 'hudkonsultation',
      consultation_url_label: 'Boka gratis konsultation',
      consultation_url_title: 'Boka gratis konsultation',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
);
$services = array(
      new Service(
            id: 'seborre',
            title: 'Ansiktsbehandling mot seborré',
            duration: '60 min',
            price: '995 kr',
            content: 'Under en ansiktsbehandling mot seborré utförs en djuprengöring av huden för att avlägsna överflödigt talg och döda hudceller, vilket bidrar till att balansera huden. Behandlingen lindrar inflammation och rodnad, vilket hjälper till att lugna huden och minska symtom på seborré.',
            image_small: 'images/services/200x200/ansiktsbehandling-seborre.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-seborre.webp',
            image_alt: 'Ansiktsbehandling mot seborré',
            image_title: 'Ansiktsbehandling mot seborré',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka gratis konsultation',
            consultation_url_title: 'Boka gratis konsultation',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922',
            booking_url_label: 'Boka ansiktsbehandling mot seborré',
            booking_url_title: 'Boka ansiktsbehandling mot seborré'
      ),
);
$products = array(
      new Service(
            id: 'produkter-mot-seborre',
            title: 'Produkter mot seborré',
            duration: null,
            price: 'Pris från 1295 kr',
            content: 'För att effektivt bekämpa och förebygga seborré är daglig behandling med rätt produkter avgörande. Våra seborréprodukter är speciellt utformade för att hålla din hud i balans och förhindra att ny seborré uppstår.',
            image_small: 'images/services/200x200/produkter-seborre.webp',
            image_large: 'images/services/200x200/produkter-seborre.webp',
            image_alt: 'Produkter mot seborré',
            image_title: 'Produkter mot seborré',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
      )
);
$articles = array(
      new Article(
            id: 'pigmentation-causes-and-risk-factors',
            title: 'Hur behandlar man seborré i ansiktet?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Hur behandlar man seborré i ansiktet?',
            image_title: 'Hur behandlar man seborré i ansiktet?',
            content: '<p class="p200">Du som söker det bästa mot seborré bör välja AcneSpecialisten eftersom vi är experter på att behandla seborré och har över 30 års erfarenhet av att ha arbetat med olika hudproblem, inklusive seborré. Vi skräddarsyr behandlingar baserade på dina individuella problem och behov, vi rekommenderar de bästa produkterna för att förebygga och behandla din hud och seborré.</p>
            <p class="p200 mt-m">Genom att välja Acnespecialisten får du den mest effektiva behandlingen för ditt specifika fall och en hudvårdspartner som stöttar dig genom hela processen.</p>',
      ),
      new Article(
            id: 'when-to-see-your-pigmentation-specialist',
            title: 'När ska jag söka hjälp med min seborré?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag söka hjälp med min seborré?',
            image_title: 'När ska jag söka hjälp med min seborré?',
            content: '<p class="p200">Om du upplever att seborré börjar påverka din dagliga livskvalitet, eller om du har provat olika behandlingar och produkter utan att märka någon bestående förbättring, kan det vara dags att söka professionell hjälp. Att agera tidigt ökar chanserna att förhindra långvariga hudproblem och att uppnå en sundare och mer balanserad hud.</p>
            <p class="p200 mt-m">Vi på AcneSpecialisten välkomnar alla, oavsett om din seborré är lindrig, måttlig eller svår. Genom att erbjuda skräddarsydda behandlingsplaner baserade på dina specifika behov, är vår målsättning att erbjuda effektiva lösningar som hjälper dig att hantera och lindra symptomen på seborré. Vi har ett team av hudterapeuter med lång erfarenhet av att behandla olika typer av hudproblem, inklusive seborré. De står redo att hjälpa dig med råd om vilka produkter och behandlingar som kan vara mest effektiva för just din hudtyp.</p>
            <p class="p200 mt-m">Vänta inte med att söka hjälp, det första steget kan vara att boka en gratis konsultation med oss. Denna kostnadsfria tjänst innebär att vi analyserar din hud och din seborré, och utarbetar en individuell behandlingsplan anpassad för dig. Innan du överväger att besöka en läkare, prova vår klinik först - det kan spara dig från att använda starka mediciner med potentiella biverkningar och påverkan på hela kroppen. Genom att boka en konsultation får du en inblick i hur vi kan hjälpa dig att förbättra din hudhälsa.</p>',
      ),
);
$results = array(
      new ResultCustomer(
            id: '1',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            age: 18,
            gender: 'Female',
            problem: 'Seborré',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/seborre" title="Seborré"">behandlingar mot seborré</a>',
            )
      ),
      new ResultCustomer(
            id: '2',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            age: 18,
            gender: 'Female',
            problem: 'Seborré',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/seborre" title="Seborré">behandlingar mot seborré</a>',
            )
      ),
);
$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all seborré efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och seborren är betydligt mildare",
            signature: 'Lovisa'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min seborré med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily'
      ),

);
$faq_categories = array(
      'Generellt om seborré' => array(
            new Question(
                  title: 'Vad erbjuder AcneSpecialisten för behandling av seborré?',
                  text: '<p class="p200">På AcneSpecialisten erbjuder vi skräddarsydda behandlingsplaner för att hantera seborré och dess symtom. Beroende på ditt specifika tillstånd kan detta inkludera råd om hudvård och behandlingar riktade mot att kontrollera överdriven talgproduktion och reducera inflammation. Vårt mål är att förbättra din hy och livskvalitet genom att hjälpa dig hantera ditt seborré på bästa möjliga sätt.</p>'
            ),
            new Question(
                  title: 'Kan man förebygga seborré?',
                  text: '<p class="p200">Ja, att ta hand om sin hy spelar en viktig roll i att hantera och mildra symtomen. På AcneSpecialisten kan vi ge råd om den bästa hudvårdsrutinen för din specifika hudtyp och behov. Regelbunden behandling med hudvårdsprodukter för seborré hjäpler till att balansera hudens naturliga oljor och hålla symptomen i schack.</p>'
            ),
            new Question(
                  title: 'Kan seborré bli värre under vissa tider på året?',
                  text: '<p class="p200">Ja, det är mycket möjligt. För många personer kan symtomen på seborré bli värre under vintermånaderna eller i torrt, kallt väder. Detta kan bero på att huden tenderar att bli torrare i sådana förhållanden, vilket kan irriterar och inflammera hudområdena som påverkas av seborré.</p>'
            ),
            new Question(
                  title: 'Är seborré kopplat till kost?',
                  text: '<p class="p200">Nej, det är ingen klar vetenskaplig konsensus om en direkt koppling mellan kost och seborré, men vissa individer rapporterar att deras symtom förvärras av vissa livsmedel eller brist på vissa näringsämnen. Vår målsättning är dock att behandla din seborré med hudvårdsprodukter så att du inte behöver anpassa din kost efter din hy.</p>'
            ),
            new Question(
                  title: 'Är seborré samma som mjäll?',
                  text: '<p class="p200">Mjäll och seborré är två relaterade men distinkta tillstånd. Mjäll karaktäriseras av en skalig, vit till gulaktig fjällning på hårbotten, medan seborré kan påverka hårbotten samt andra områden på kroppen där det finns mycket talgkörtlar. Mjäll är vanligtvis inte åtföljt av rödhet eller inflammation, vilket ofta är fallet med seborré.</p>'
            ),
            new Question(
                  title: 'Kan man få seborré på andra delar av kroppen än ansiktet och hårbotten?',
                  text: '<p class="p200">Ja, även om seborré oftast ses i hårbotten och ansiktet, kan det också uppträda på andra områden där det finns många talgkörtlar, såsom bröstkorgen, ryggen och i vissa fall axlarna, armhålorna eller ljumskarna.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra för att minska rödhet och klåda orsakad av seborré?',
                  text: '<p class="p200">På AcneSpecialisten erbjuder vi skräddarsydda behandlingsplaner för att hantera seborré och dess symtom. Beroende på ditt specifika tillstånd kan detta inkludera råd om hudvård och livsstil, samt specifika behandlingar riktade mot att kontrollera överdriven talgproduktion och reducera inflammation. Vårt mål är att förbättra din hy och livskvalitet genom att hjälpa dig hantera ditt seborré på bästa möjliga sätt.</p>'
            )
      ),
      'Behandling mot seborré' => array(
            new Question(
                  title: 'Vilka behandlingar finns tillgängliga för seborré hos AcneSpecialisten?',
                  text: '<p class="p200">Hos AcneSpecialisten erbjuder vi olika behandlingar för att hantera och lindra symtomen på seborré. Efter en noggrann hudanalys och konsultation skräddarsyr vi en behandlingsplan som kan inkludera professionella behandlingar såsom specialanpassade ansiktsbehandlingar och hudvårdsprodukter som balanserar talgproduktionen, reducera inflammation och förbättra hudens textur och utseende.</p>'
            ),
            new Question(
                  title: 'Hur snabbt kan jag förvänta mig att se resultat efter behandling av seborré?',
                  text: '<p class="p200">Resultaten kan variera beroende på olika faktorer, inklusive svårighetsgraden av din seborré, din hudtyp och hur konsekvent du följer din personliga behandlingsplan. Vissa människor märker en förbättring av sina symtom redan efter en vecka, medan det för andra kan ta ett par veckor innan de ser märkbara resultat. Vi är engagerade i att arbeta med dig för att hitta den mest effektiva behandlingsplanen för att uppnå dina hudvårdsmål.</p>'
            ),
            new Question(
                  title: 'Hur länge varar resultaten från behandlingarna?',
                  text: '<p class="p200">Varaktigheten av resultaten från seborrébehandlingar kan variera beroende på flera faktorer, inklusive din individuella hudtyp, svårighetsgraden av dina symtom, din livsstil och hur noggrant du följer din eftervårdsplan. Precis som med alla hudvårdsrutiner kräver seborré ofta daglig uppmärksamhet. Genom att bibehålla en daglig hudvårdsrutin som omfattar rengöring, återfuktning och regelbundna behandlingar kan vi effektivt behandla seborré och förebygga återkommande symptom.</p>

                        <p class="p200 mt-m">Att förstå att det handlar om daglig skötsel, snarare än en engångsbehandling, är nyckeln till framgång när det gäller att hantera seborré. På AcneSpecialisten arbetar vi tillsammans med dig för att utveckla en rutin som passar ditt liv och dina behov, och ger dig verktygen och kunskapen för att uppnå och behålla hälsosam hud.</p>'
            ),
            new Question(
                  title: 'Är behandlingarna för seborré säkra?',
                  text: '<p class="p200">Ja, behandlingar för seborré på AcneSpecialisten är säkra. Vi använder bara beprövade metoder och tekniker, och alla våra behandlingar utförs av välutbildade hudterapeuter. Vi prioriterar alltid säkerheten och komforten för våra kunder och arbetar för att säkerställa att du känner dig trygg och omhändertagen under hela behandlingsprocessen.</p>'
            ),
            new Question(
                  title: 'Behöver jag fortsätta behandlingen även när mina symtom förbättras?',
                  text: '<p class="p200">Ja, seborré kan vara ett kroniskt tillstånd för vissa människor, vilket innebär att även om symtomen förbättras kan de komma tillbaka om behandlingen upphör. För att bibehålla dina resultat rekommenderar vi att du fortsätter att följa din skräddarsydda hudvårdsrutin och regelbundet återvänder till oss för professionell vård och rådgivning.</p>'
            ),
            new Question(
                  title: 'Vilka produkter ska jag använda hemma för att komplettera mina behandlingar?',
                  text: '<p class="p200">Vi erbjuder ett brett sortiment av produkter som du kan använda hemma för att stödja och komplettera dina professionella behandlingar. Dessa inkluderar specialiserade ansiktsrengöringsmedel, fuktighetskrämer, exfolianter och produkter för att kontrollera talgproduktionen. Under din konsultation kommer vi att rekommendera de bästa produkterna för din hudtyp och tillstånd.</p>'
            ),
            new Question(
                  title: 'Kommer min seborré att försvinna helt efter behandling?',
                  text: '<p class="p200">Seborré kan vara ett kroniskt tillstånd, och det är möjligt att du kan behöva fortsätta behandlingar och hudvård för att hålla symtomen under kontroll. Vårt mål på AcneSpecialisten är att hjälpa dig att hantera ditt tillstånd på bästa möjliga sätt och att förbättra din hudhälsa och självkänsla. Vi är engagerade i att arbeta med dig för att hitta den mest effektiva behandlingsplanen för att uppnå dina hudvårdsmål.</p>',
            ),
      ),
);
$skin_guide_articles = array(
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: '',
            problem: 'Acne',
            description: "",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: '',
            problem: 'Acne',
            description: "",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      )
);
$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg',
            image_title: 'Cazzandra Lindberg',
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik',
            image_title: 'Veronika Benedik',
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul',
            image_title: 'Amira Maqboul',
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom',
            image_title: 'Vilma Libom',
      )
);
$brands = array(
      new Brand(
            label: 'Powerlite',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite',
            image_title: 'Powerlite',
      ),
      new Brand(
            label: 'Dermapen4',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen4',
            image_title: 'Dermapen4',
      ),
      new Brand(
            label: 'Cryopen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'Cryopen',
            image_title: 'Cryopen',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'images/brands/lumenis.svg',
            image_alt: 'Lumenis',
            image_title: 'Lumenis',
      ),
      new Brand(
            label: 'Alma',
            image: 'images/brands/alma.svg',
            image_alt: 'Alma',
            image_title: 'Alma',
      ),
      new Brand(
            label: 'PRXT',
            image: 'images/brands/prxt.svg',
            image_alt: 'PRXT',
            image_title: 'PRXT',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial',
            image_title: 'Hydrafacial',
      ),
      new Brand(
            label: 'IP infusion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'IP infusion',
            image_title: 'IP infusion',
      ),
);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">
            Vad är seborré? Vanliga frågor och svar | AcneSpecialisten
      </title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">

      <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->
      <meta property="og:title" content="Acnespecialisten" />
      <meta property="og:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="og:image" content="images/about-desktop.jpg" />
      <meta property="twitter:title" content="Acnespecialisten" />
      <meta property="twitter:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="twitter:image" content="images/about-desktop.jpg" />
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
                                    <h2 class="h600">Seborré</h2>
                                    <div class="mt-m aka">
                                          <span class="p200 l10n">Även kallat</span>
                                          <?php
                                          $length = sizeof(($akas));
                                          $values = array_values($akas);
                                          $keys = array_keys($akas);
                                          for ($i = 0; $i < $length; $i++) { ?>
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
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
                              <h1 class="h600">Seborré</h1>
                              <h3 class="mt-xs p100 l10n">Även känt som:</h3>
                              <?php foreach ($akas as $key => $aka) { ?>
                                    <div>
                                          <a href="<?php echo $key ?>" title="<?php echo $aka ?>" class="mt-xs button b50 bright">
                                                <?php echo $aka ?>
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
                                    <h1 class="h600">Seborré</h1>
                                    <div class="mt-s">
                                          <span class="h200 l10n">Även känt som:</span>
                                          <?php
                                          $length = sizeof(($akas));
                                          $values = array_values($akas);
                                          $keys = array_keys($akas);
                                          for ($i = 0; $i < $length; $i++) { ?>
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
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
                                    <img src="<?php echo $image_large ?>" alt="Seborré" title="Seborré" width="358" height="274" />
                              </picture>
                        </section>
                        <section id="nav-buttons">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                        </section>
                        <section id="about">
                              <h2 class="h500 l10n">Om Seborré</h2>
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
                              <a href="problem/seborre/behandling" title="Om seborrébehandlingar" class="mt-xl button b200 outline expand auto-width l10n">Läs mer om seborrébehandlingar</a>
                        </section>
                        <?php if (sizeof($symptoms) > 0) { ?>
                              <section id="symptoms">
                                    <h2 class="h500">Seborré symptom</h2>
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
                              <h2 class="h500 l10n">01. Identifiera din seborré</h2>
                              <hr class="is-hidden-mobile">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                              <hr class="is-hidden-mobile">
                        </section>
                        <section id="treatments">
                              <h2 class="h500">02. Behandla aktiv seborré</h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($services as $service) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="products">
                              <h2 class="h500">03. Förebygg uppkomsten av ny seborré</h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $service) { ?>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide">Läs fler guider</a>
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