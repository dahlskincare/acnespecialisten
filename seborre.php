<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Seborre i ansiktet - Behandling | AcneSpecialisten';
$seo_description = 'Har du seborré? Behandling gör du hos oss på AcneSpecialisten! Boka en gratis hudkonsultation & få en skräddarsydd behandlingsplan. Behandla seborré nu →';
$seo_keywords = 'seborré, seborreiskt eksem, orsaker till seborré, förebygga seborré, ta bort seborré, skalp seborré, ansiktsseborré, seborroisk dermatit, fjällande hud';
$seo_image = 'bilder/hudproblem/424x456/seborre.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Seborré', '/seborre.php'),
);

$image_small = 'bilder/hudproblem/358x274/seborre.webp';
$image_large = 'bilder/hudproblem/424x456/seborre.webp';
$image_title = 'Visar en hud med seborré';
$image_alt = 'Bild som illustrerar hur seborré ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Seborré',
      description: 'Seborré, eller seborroiskt eksem, är en hudåkomma som orsakar fet hy som flagnar. Här diskuterar vi de områden som oftast påverkas, vad som utlöser tillståndet och hur det behandlas effektivt.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Mjälleksem',
                  url: '/mjalleksem.php',
                  title: 'Mjälleksem',
            ),
            new Link(
                  label: 'Seborroiskt Eksem',
                  url: null,
                  title: null,
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är seborré?',
            content: '<p class="p200">Seborré som även kallas <a class="b200 underline color-deep-sea-400" href="/mjalleksem.php" title="Mer information om mjälleksem">mjälleksem</a> är en relativt vanlig hudåkomma som kännetecknas av fläckar av röd, fjällande, ibland kliande hud som kan bli fet eller oljig. Trots sitt utseende och sina ibland obekväma symtom, är seborré helt ofarligt. Det är en kronisk åkomma, vilket innebär att den tenderar att komma och gå under en persons livstid.</p>',
            extended_content: '<p class="p200 mt-xl">På AcneSpecialisten förstår vi att även om seborré inte är farligt, kan dess symptom vara besvärliga och störande. Vi erbjuder ett brett utbud av individuellt anpassade behandlingar och produkter som kan hjälpa till att kontrollera symptomen, minska obehag och förbättra det allmänna utseendet på huden.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man seborré?',
            content: '<p class="p200">Seborré orsakas av flera sammanflätade faktorer. Centrala faktorer som bidrar till uppkomsten av detta hudtillstånd är överproduktion av talg och kroppens svar på den. Talg är en naturligt förekommande fet substans som produceras av hudens talgkörtlar för att hålla huden smidig och skyddad mot uttorkning och infektioner. När talgproduktionen ökar, blir huden mer oljig vilket ger en grogrund för vissa typer av hudbakterier och jästsvampar, detta kan leda till irritation, inflammation och en snabbare cellomsättning vilket resulterar i flagnande hud.</p>',
            extended_content: '<p class="p200 mt-xl">Hormonella förändringar, såsom de som sker under puberteten eller vid vissa tidpunkter i den menstruella cykeln, påverkar talgproduktionen och därmed risken för seborré. Dessutom har stress och brist på sömn en inverkan på huden och kroppens reglering av talgproduktionen vilket kan leda till seborré. På AcneSpecialisten har vi stor erfarenhet av att behandla seborré och vi kan erbjuda individuella behandlingsplaner för att hjälpa till att kontrollera och hantera ditt specifika tillstånd.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'kyla' => 'Kyla',)
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får seborré?',
            content: '<p class="p200">Seborré kan drabba individer i alla åldrar och från alla bakgrunder, men det är särskilt vanligt i två specifika åldersgrupper. För det första är seborré vanligt hos vuxna, särskilt mellan 30 och 60 år. Män har ofta en högre frekvens av seborré än kvinnor, vilket tros vara kopplat till att män har en större mängd talgkörtlar och en högre talgproduktion. De med fet hudtyp har också större benägenhet att drabbas av seborré.</p>',
            extended_content: '<p class="p200 mt-xl">För det andra är det vanligt hos spädbarn, vanligtvis under de första tre månaderna av livet, där det ofta kallas "mjölkskorv". Hos spädbarn presenterar sig seborré oftast som en gulaktig, fjällande skorpbildning på huvudet. På AcneSpecialisten vet vi hur besvärlig seborré kan vara, och vi är här för att hjälpa. Vi erbjuder individuell rådgivning och behandlingar för att hjälpa dig att hantera ditt seborré och förbättra din hudhälsa.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man seborré?',
            content: '<p class="p200">Seborré uppstår ofta i ansiktet, framförallt i områden med hög koncentration av talgkörtlar, vilket resulterar i rodnad, eksem och torra ögonbryn, näsvingarna, pannan och ögonlocken. Här kan tillståndet ge röda, fjällande, oljiga fläckar som kan vara svåra att dölja och orsaka obehag.</p>',
            extended_content: '<p class="p200 mt-xl">Ett annat vanligt område är hårbotten, där överdriven talgproduktion kan leda till mjäll, vilket är orsaken till att hudproblemet ofta kallas mjälleksem. Även områden som öron, bröst och mitten av ryggen kan drabbas, där seborré kan skapa röda, flagnande fläckar. Trots att dessa områden är mest utsatta, kan seborré dyka upp var som helst på kroppen där talgproduktionen är hög. På AcneSpecialisten är vi experter på att hantera seborré. Vi erbjuder ett brett utbud av behandlingar och produkter som kan hjälpa dig att kontrollera dina symptom och förbättra din hudhälsa.</p>',
            icons: array('ansikte' => 'Ansiktet', 'ogonbryn' => 'Ögonbryn', 'harlinje' => 'Hårlinje', 'skagg' => 'Skägget')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten kopplar vi dig med en erfaren hudterapeut som hjälper dig att korrekt identifiera din seborré och utformar en individuell behandlingsplan speciellt för dig.',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
            url_label: 'Boka gratis konsultation',
            url_title: 'Boka en tid för gratis seborré konsultation',
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder en rad skonsamma och effektiva seborrébehandlingar anpassade till din specifika typ av seborré, vilket säkerställer att du snabbt och säkert kan bli av med ditt problem.',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea&method=Method_FacialProblem&area=EMPTY',
            url_label: 'Se behandlingar',
            url_title: 'Utforska alla våra effektiva seborrébehandlingar',
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'På AcneSpecialisten hjälper vi dig att hitta en skräddarsydd hudvårdsrutin och produkter specifikt för att förebygga seborré, och att hålla din hud frisk, balanserad och problemfri.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            url_label: 'Se produkter',
            url_title: 'Se produkterna för att förebygga seborré',
      ),
);

$symptoms_title = 'Symtom';

$symptoms = array(
      new Symptom(
            name: 'Flagnande hy',
            image: 'bilder/symptom/102x102/flagnande-hud-ogonbryn.webp',
            content: 'Det främsta symptomen på seborré är flagnande hud, vilket innebär att det finns små skikt eller flingor av döda hudceller som lossnar från huden. Detta beror på en överproduktion av hudens naturliga oljor (talg), som stör hudens normala avstötningsprocess och orsakar en snabbare cellomsättning.',
            url: null,
            url_title: null,
            url_label: null,
            aka: 'Torr hy',
            image_alt: 'Flagnande hy symptom på seborré',
            image_title: 'Flagnande hy som ett symptom på seborré'
      ),
      new Symptom(
            name: 'Rodnad',
            aka: 'Inflammation',
            content: 'Röd hud kring fjällande områden indikerar inflammation, vanligen orsakad av immunförsvarets reaktion mot jästsvampar som Malassezia. Denna rodnad, som kan förekomma i talgrika områden som ansiktet och hårbotten, kan medföra värme och ömhet.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/rodnad-inflammation-panna.webp',
            image_alt: 'Bild av rodnad och inflammation',
            image_title: 'Rodnad och Inflammation'
      ),
      new Symptom(
            name: 'Klåda',
            image: 'bilder/symptom/102x102/klada-ogonbryn.webp',
            content: 'Seborré kan ofta leda till klåda, särskilt i de områden där det finns en överproduktion av talg. Klådan beror på hudirritation som orsakas av en kombination av överflödig olja och en snabbare hudcellsturnover.',
            url: null,
            url_title: null,
            url_label: null,
            aka: 'Hudirritation',
            image_alt: 'Klåda symptom på seborré',
            image_title: 'Klåda som ett symptom på seborré'
      ),
      new Symptom(
            name: 'Fet hy',
            image: 'bilder/symptom/102x102/oljig-hy-rodnad.webp',
            content: 'Fet hy är ett av de mest utmärkande tecknen på seborré. Detta beror på en överproduktion av talg, vilket gör huden glänsande och oljig, särskilt i områdena kring näsan, pannan och hårbotten.',
            url: null,
            url_title: null,
            url_label: null,
            aka: 'Oljig hy',
            image_alt: 'Fet hy symptom på seborré',
            image_title: 'Fet hy som ett symptom på seborré'
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Seborré Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under ett personligt möte med en av våra hudterapeuter utförs en noggrann undersökning av din hud för att identifiera och förstå din seborré. Vi tar före-bilder på din hud och utifrån denna undersökning rekommenderar vi den mest lämpliga behandlingen för dig.',
      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Seborré Konsultation',
      image_title: 'Seborré Konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Boka din gratis seborré konsultation nu',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om konsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'

);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot seborré',
            duration: '60 min',
            price: '1295 kr',
            content: 'Vår specifika ansiktsbehandling mot seborré innebär en grundlig djuprengöring av huden för att effektivt avlägsna överflödigt talg och döda hudceller. Detta bidrar till att återställa balansen i din hud.',
            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Ansiktsbehandling mot seborré',
            image_title: 'Ansiktsbehandling mot seborré',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Boka gratis konsultation',
            booking_url: "https://boka.acnespecialisten.se?flow=problem&problem=Problem_Seborrea&method=Method_FacialProblem&area=EMPTY",
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka din ansiktsbehandling mot seborré',
            url: '/problemhy.php',
            url_label: 'Läs mer om ansiktsbehanding',
            url_title: 'Läs mer om ansiktsbehanding mot seborré',
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot seborré',
            duration: null,
            price: 'Från 1395 kr',
            content: 'För att effektivt bekämpa och förebygga seborré krävs daglig behandling med de rätta produkterna. Vi rekommenderar produkter som är speciellt utformat för att hjälpa till att återställa och upprätthålla balansen i din hud samt förebygga uppkomsten av ny seborré.',
            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Produkter mot seborré',
            image_title: 'Produkter mot seborré',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Seborrhea',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot seborré',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            booking_url_title: 'Klicka för att köpa produktpaket mot seborré',
      )
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med min seborré?',
            image_title: 'När ska jag söka hjälp med min seborré?',
            content: '<p class="p200">Om du upplever att seborré börjar påverka din dagliga livskvalitet, eller om du har provat olika behandlingar och produkter utan att märka någon bestående förbättring, kan det vara dags att söka professionell hjälp. Att agera tidigt gör att du kan förhindra att problemet utvecklas och får snabbare resultat till en sundare och mer balanserad hud. Vänta inte med att söka hjälp, det första steget kan vara att boka en gratis konsultation.</p>',
      ),
      new Article(
            title: 'Varför ska jag välja AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag välja AcneSpecialisten?',
            image_title: 'Varför ska jag välja AcneSpecialisten?',
            content: '<p class="p200">Vi på AcneSpecialisten välkomnar alla, oavsett om din seborré är lindrig, måttlig eller svår. Genom att erbjuda skräddarsydda behandlingsplaner baserade på dina specifika behov, är vår målsättning att erbjuda effektiva lösningar som hjälper dig att hantera och lindra symptomen på seborré. Vi har ett team av hudterapeuter med lång erfarenhet av att behandla olika typer av hudproblem, inklusive seborré. De står redo att hjälpa dig med råd om vilka produkter och behandlingar som kan vara mest effektiva för just din hudtyp.</p>
            <p class="p200 mt-m">Vänta inte med att söka hjälp, det första steget kan vara att boka en gratis konsultation med oss. Denna kostnadsfria tjänst innebär att vi analyserar din hud och din seborré, och utarbetar en individuell behandlingsplan anpassad för dig. Innan du överväger att besöka en läkare, prova vår klinik först - det kan spara dig från att använda starka mediciner med potentiella biverkningar och påverkan på hela kroppen. Genom att boka en konsultation får du en inblick i hur vi kan hjälpa dig att förbättra din hudhälsa.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

$results_url_label = "Se fler resultat";
$results_url_title = "se flera seborrébehandlingsresultat";



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
                  text: '<p class="p200">Mjäll och seborré är två relaterade men distinkta tillstånd. Mjäll karaktäriseras av vit till gulaktig fjällning på hårbotten, medan seborré kan påverka hårbotten samt andra områden på kroppen där det finns mycket talgkörtlar. Mjäll är vanligtvis inte åtföljt av rödhet eller inflammation, vilket ofta är fallet med seborré.</p>'
            ),
            new Question(
                  title: 'Kan man få seborré på andra delar av kroppen än ansiktet och hårbotten?',
                  text: '<p class="p200">Ja, även om seborré oftast ses i hårbotten och ansiktet, kan det också uppträda på andra områden där det finns många talgkörtlar, såsom bröstkorgen, ryggen och i vissa fall axlarna, armhålorna eller ljumskarna.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra för att minska rödhet och klåda orsakad av seborré?',
                  text: '<p class="p200">På AcneSpecialisten erbjuder vi skräddarsydda behandlingsplaner för att hantera seborré och dess symtom. Beroende på ditt specifika tillstånd kan detta inkludera råd om hudvård, samt specifika behandlingar riktade mot att kontrollera överdriven talgproduktion och reducera inflammation. Vårt mål är att förbättra din hy och livskvalitet genom att hjälpa dig hantera ditt seborré på bästa möjliga sätt.</p>'
            ),
            new Question(
                  title: 'Vilka behandlingar finns tillgängliga för seborré hos AcneSpecialisten?',
                  text: '<p class="p200">Hos AcneSpecialisten erbjuder vi olika behandlingar för att hantera och lindra symtomen på seborré. Efter en noggrann hudanalys och konsultation skräddarsyr vi en behandlingsplan som kan inkludera professionella behandlingar såsom specialanpassade ansiktsbehandlingar och hudvårdsprodukter som balanserar talgproduktionen, reducera inflammation och förbättra hudens textur och utseende.</p>'
            ),
            new Question(
                  title: 'Hur snabbt kan jag förvänta mig att se resultat efter behandling av seborré?',
                  text: '<p class="p200">Resultaten kan variera beroende på olika faktorer, inklusive svårighetsgraden av din seborré, din hudtyp och hur konsekvent du följer din personliga behandlingsplan. Vissa människor märker en förbättring av sina symtom redan efter en vecka. Vi är engagerade i att arbeta med dig för att hitta den mest effektiva behandlingsplanen för att uppnå dina hudvårdsmål.</p>'
            ),
            new Question(
                  title: 'Behöver jag fortsätta behandlingen även när mina symtom förbättras?',
                  text: '<p class="p200">Ja, seborré kan vara ett kroniskt tillstånd för vissa människor, vilket innebär att även om symtomen förbättras kan de komma tillbaka om behandlingen upphör. För att bibehålla dina resultat rekommenderar vi att du fortsätter att följa din skräddarsydda hudvårdsrutin och regelbundet återvänder till oss för professionell vård och rådgivning.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "Läs flera frågor relaterat till seborré";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i seborrébehandling',
            image_title: 'Cazzandra Lindberg - Expert på seborrébehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på seborré',
            image_title: 'Veronika Benedik - Specialist inom seborrévård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom seborréhantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på seborré'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot seborrébehandling',
            image_title: 'Vilma Libom - Expert inom seborrébehandling'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Seborré Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Torr & känslig hy',
            aka: 'reaktiv hy',
            image: 'bilder/hudproblem/102x102/torr-kanslig-hy.webp',
            image_alt: 'Torr & känslig hy i ansiktet',
            image_title: 'Torr & känslig hy - en vanlig hudåkomma',
            url: '/torr-hy.php',
            url_title: 'Torr & känslig hy'
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
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_alt: 'Alma Hybrid logotyp',
            image_title: 'Alma Hybrid CO2',
            url: '/alma-hybrid-co2-laser.php',
            url_title: 'Alma Hybrid',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen logotyp',
            image_title: 'Dermapen - Microneedling',
            url: '/dermapen.php',
            url_title: 'Dermapen',
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
            label: 'HydraFacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'HydraFacial logotyp',
            image_title: 'HydraFacial - Dermabrasion',
            url: '/hydrafacial.php',
            url_title: 'HydraFacial',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_alt: 'Skin Tech logotyp',
            image_title: 'Skin Tech - kemisk peeling',
            url: '/varumarken/skin-tech/',
            url_title: 'Skin Tech',
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
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen logotyp',
            image_title: 'CryoPen - frysbehandling',
            url: '/cryopen.php',
            url_title: 'CryoPen',
      ),
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X logotyp',
            image_title: 'Splendor X - Permanent hårborttagning med laser',
            url: '/varumarken/splendor-x/',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice logotyp',
            image_title: 'Soprano Ice - Permanent hårborttagning med laser',
            url: '/varumarken/soprano-ice/',
            url_title: 'Soprano Ice',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova logotyp',
            image_title: 'Powerlite Photonova - IPL',
            url: '/varumarken/powerlite-photonova/',
            url_title: 'Powerlite Photonova',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion logotyp',
            image_title: 'Infuzion - nålfri skinbooster',
            url: '/infuzion.php',
            url_title: 'Infuzion',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'bilder/logotyper/lumenis.svg',
            image_alt: 'Lumenis logotyp',
            image_title: 'Lumenis - Permanent hårborttagning med laser',
            url: '/varumarken/splendor-x/',
            url_title: 'Lumenis',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33 logotyp',
            image_title: 'PRX-T33 - kemisk peeling',
            url: '/prx-t33.php',
            url_title: 'PRX-T33',
      ),
      new Brand(
            label: 'Exceed',
            image: 'bilder/logotyper/exceed.png',
            image_alt: 'Exceed logotyp',
            image_title: 'Exceed - microneedling',
            url: '/varumarken/exceed/',
            url_title: 'Exceedn',
      ),
      new Brand(
            label: 'Microdermabrasion',
            image: 'bilder/logotyper/microdermabrasion.png',
            image_alt: 'Microdermabrasion logotyp',
            image_title: 'Microdermabrasion - hudslipning',
            url: '/microdermabrasion.php',
            url_title: 'Microdermabrasion',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av seoborré";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/seborre.php" />

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