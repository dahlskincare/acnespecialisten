<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Seborré - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om seborré, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'seborré, seborrébehandling, orsaker till seborré, förebygga seborré, ta bort seborré, skalp seborré, ansiktsseborré, seborroisk dermatit, fjällande hud, oljig hud';

$title = 'Seborré';

$image_small = 'bilder/problem/424x324/seborre.webp';
$image_large = 'bilder/problem/424x456/seborre.webp';
$image_title = 'Visar en hud med seborré';
$image_alt = 'Bild som illustrerar hur seborré ser ut på huden';
$description = 'Här förklarar vi vad som kännetecknar seborré , varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av seborré, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Mjälleksem',
            url: null,
            title: null,
      ),
      new Link(
            label: 'Seborroiskt Eksem',
            url: null,
            title: null,
      ),
];

$consultation_url = "consultation-booking?problem=seborre";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis Konsultation för Seborré";

$booking_url = "treatment-booking?problem=seborre";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka din tid för behandling av seborré";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för seborré";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Seborrébehandling";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för seborré";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka din tid för behandling av seborré";

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

$about_title = 'Om seborré';

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
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'kyla' => 'Kyla',)
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får seborré?',
            content: '<p class="p200">Seborré kan drabba individer i alla åldrar och från alla bakgrunder, men det är särskilt vanligt i två specifika åldersgrupper. För det första är seborré vanligt hos vuxna, särskilt mellan 30 och 60 år. Män har ofta en högre frekvens av seborré än kvinnor, vilket tros vara kopplat till att män har en större mängd talgkörtlar och en högre talgproduktion. De med fet hudtyp har också större benägenhet att drabbas av seborré.</p>',
            extended_content: '<p class="p200 mt-xl">För det andra är det vanligt hos spädbarn, vanligtvis under de första tre månaderna av livet, där det ofta kallas "mjölkskorv". Hos spädbarn presenterar sig seborré oftast som en gulaktig, fjällande skorpbildning på huvudet.</p>
            <p class="p200 mt-xl">På AcneSpecialisten vet vi hur besvärlig seborré kan vara, och vi är här för att hjälpa. Vi erbjuder individuell rådgivning och behandlingar för att hjälpa dig att hantera ditt seborré och förbättra din hudhälsa.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man seborré?',
            content: '<p class="p200">Seborré uppstår ofta i ansiktet, framförallt i områden med hög koncentration av talgkörtlar, såsom runt näsan, ögonbrynen, pannan och ögonlocken. Här kan tillståndet ge röda, fjällande, oljiga fläckar som kan vara svåra att dölja och orsaka obehag.</p>',
            extended_content: '<p class="p200 mt-xl">Ett annat vanligt område är hårbotten, där överdriven talgproduktion kan leda till mjäll. Även områden som öron, bröst och mitten av ryggen kan drabbas, där seborré kan skapa röda, flagnande fläckar. Trots att dessa områden är mest utsatta, kan seborré dyka upp var som helst på kroppen där talgproduktionen är hög. </p>
            <p class="p200 mt-xl">På AcneSpecialisten är vi experter på att hantera seborré. Vi erbjuder ett brett utbud av behandlingar och produkter som kan hjälpa dig att kontrollera dina symptom och förbättra din hudhälsa.</p>',
            icons: array('ansikte' => 'Ansiktet', 'ogonbryn' => 'Ögonbryn', 'harlinje' => 'Hårlinje', 'skagg' => 'I skägget')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten kopplar vi dig med en erfaren hudterapeut som hjälper dig att korrekt identifiera din seborré och utformar en individuell seborrébehandlingsplan speciellt för dig.',
            url: 'gratis-hudkonsultation',
            url_label: 'Boka din gratis konsultation nu',
            url_title: 'Boka en tid för gratis seborré konsultation',
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder en rad skonsamma och effektiva seborrébehandlingar anpassade till din specifika typ av seborré, vilket säkerställer att du snabbt och säkert kan bli av med ditt seborréproblem.',
            url: 'behandlingar/seborre',
            url_label: 'Utforska våra seborrébehandlingar',
            url_title: 'Utforska alla våra effektiva seborrébehandlingar',
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'På AcneSpecialisten hjälper vi dig att hitta en skräddarsydd hudvårdsrutin och produkter specifikt för att förebygga seborré, och att hålla din hud frisk, balanserad och seborréfri.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            url_label: 'Upptäck produkterna',
            url_title: 'Se produkterna för att förebygga seborré',
      ),
);

$symptoms_title = 'Seborré symptom';

$symptoms = array(
      new Symptom(
            name: 'Flagnande hy',
            image: 'images/symptoms/102x102/komedoner-oppna.webp',
            content: 'Det främsta symptomen på seborré är flagnande hud, vilket innebär att det finns små skikt eller flingor av döda hudceller som lossnar från huden. Detta beror på en överproduktion av hudens naturliga oljor (talg), som stör hudens normala avstötningsprocess och orsakar en snabbare cellomsättning.',
            url: null,
            url_title: null,
            url_label: null,
            aka: 'Även kallat fjällande hy',
            image_alt: 'Flagnande hy symptom på seborré',
            image_title: 'Flagnande hy som ett symptom på seborré'
      ),
      new Symptom(
            name: 'Mjäll',
            image: 'images/symptoms/102x102/komedoner-stangda.webp',
            content: 'Mjäll är vita till gula, små flagor av döda hudceller som lossnar från huden, specifikt från områden med hårväxt såsom ögonbryn, skäggväxt och hårbotten. Detta är en typ av flagnande som är vanligt i seborré och är oftast mer uttalad än normalt flagnande.',
            url: null,
            url_title: null,
            url_label: null,
            aka: 'Även kallat fjäll',
            image_alt: 'Mjäll symptom på seborré',
            image_title: 'Mjäll som ett symptom på seborré'
      ),
      new Symptom(
            name: 'Klåda',
            image: 'images/symptoms/102x102/papler.webp',
            content: 'Seborré kan ofta leda till klåda, särskilt i de områden där det finns en överproduktion av talg. Klådan beror på hudirritation som orsakas av en kombination av överflödig olja och en snabbare hudcellsturnover.',
            url: null,
            url_title: null,
            url_label: null,
            aka: 'Även kallat hudirritation',
            image_alt: 'Klåda symptom på seborré',
            image_title: 'Klåda som ett symptom på seborré'
      ),
      new Symptom(
            name: 'Fet hy',
            image: 'images/symptoms/102x102/papler.webp',
            content: 'Fet hy är ett av de mest utmärkande tecknen på seborré. Detta beror på en överproduktion av talg, vilket gör huden glänsande och oljig, särskilt i områdena kring näsan, pannan och hårbotten.',
            url: null,
            url_title: null,
            url_label: null,
            aka: 'Även kallat oljig hy',
            image_alt: 'Fet hy symptom på seborré',
            image_title: 'Fet hy som ett symptom på seborré'
      ),
);

$headline01 = "01. Identifiera din seborré";

$service = new Service(
      title: 'Seborré Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under ett personligt möte med en av våra AcneSpecialister utförs en noggrann undersökning av din hud för att identifiera och förstå din seborré. Vi tar före-bilder på din hud och utifrån denna undersökning rekommenderar vi den mest lämpliga seborrébehandlingen för dig, och skräddarsyr en individuell behandlingsplan som bäst passar dina specifika behov och livsstil.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Seborré Konsultation',
      image_title: 'Seborré Konsultation',
      consultation_url: 'consultation-booking?problem=seborrhea',
      consultation_url_label: 'Boka din gratis seborré konsultation nu',
      consultation_url_title: 'Boka din gratis seborré konsultation nu',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation',
      url_label: 'Läs mer om vår hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'

);

$headline02 = "02. Behandla seborré";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot seborré',
            duration: '60 min',
            price: '995 kr',
            content: 'Vår specifika ansiktsbehandling mot seborré innebär en grundlig djuprengöring av huden för att effektivt avlägsna överflödigt talg och döda hudceller. Detta bidrar till att återställa balansen i din hud. Dessutom innehåller behandlingen antiinflammatoriska och lugnande steg som lindrar inflammation och rodnad, vilket i sin tur hjälper till att lugna huden och minska symtom på seborré.',
            image_small: 'images/services/200x200/ansiktsbehandling-seborre.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-seborre.webp',
            image_alt: 'Ansiktsbehandling mot seborré',
            image_title: 'Ansiktsbehandling mot seborré',
            consultation_url: 'consultation-booking?problem=seborrhea&service=classicFacials',
            consultation_url_label: 'Boka gratis konsultation',
            consultation_url_title: 'Boka gratis konsultation',
            booking_url: null,
            booking_url_label: 'Boka din ansiktsbehandling mot seborré',
            booking_url_title: 'Boka din ansiktsbehandling mot seborré',
            url: null,
            url_label: 'Läs mer om ansiktsbehandling mot seborré',
            url_title: 'Klicka här för att läsa mer om ansiktsbehandling mot seborré'
      ),
);

$headline03 = "03. Förebygg uppkomsten av ny seborré";

$products = array(
      new Service(
            title: 'Produkter mot seborré',
            duration: null,
            price: 'Pris från 1295 kr',
            content: 'För att effektivt bekämpa och förebygga seborré krävs daglig behandling med de rätta produkterna. Vårt sortiment av seborréprodukter är speciellt utformat för att hjälpa till att återställa och upprätthålla balansen i din hud samt förebygga uppkomsten av ny seborré.',
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
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/seborre',
            url_label: 'Köp produkter mot seborré',
            url_title: 'Köp produkter mot seborré',
      )
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med min seborré?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag söka hjälp med min seborré?',
            image_title: 'När ska jag söka hjälp med min seborré?',
            content: '<p class="p200">Om du upplever att seborré börjar påverka din dagliga livskvalitet, eller om du har provat olika behandlingar och produkter utan att märka någon bestående förbättring, kan det vara dags att söka professionell hjälp. Att agera tidigt ökar chanserna att förhindra långvariga hudproblem och att uppnå en sundare och mer balanserad hud.</p>
            <p class="p200 mt-m">Vänta inte med att söka hjälp, det första steget kan vara att boka en gratis konsultation med oss.</p>',
      ),
      new Article(
            title: 'När ska jag söka hjälp med min seborré?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför ska jag välja AcneSpecialisten?',
            image_title: 'Varför ska jag välja AcneSpecialisten?',
            content: '<p class="p200">Vi på AcneSpecialisten välkomnar alla, oavsett om din seborré är lindrig, måttlig eller svår. Genom att erbjuda skräddarsydda behandlingsplaner baserade på dina specifika behov, är vår målsättning att erbjuda effektiva lösningar som hjälper dig att hantera och lindra symptomen på seborré. Vi har ett team av hudterapeuter med lång erfarenhet av att behandla olika typer av hudproblem, inklusive seborré. De står redo att hjälpa dig med råd om vilka produkter och behandlingar som kan vara mest effektiva för just din hudtyp.</p>
            <p class="p200 mt-m">Vänta inte med att söka hjälp, det första steget kan vara att boka en gratis konsultation med oss. Denna kostnadsfria tjänst innebär att vi analyserar din hud och din seborré, och utarbetar en individuell behandlingsplan anpassad för dig. Innan du överväger att besöka en läkare, prova vår klinik först - det kan spara dig från att använda starka mediciner med potentiella biverkningar och påverkan på hela kroppen. Genom att boka en konsultation får du en inblick i hur vi kan hjälpa dig att förbättra din hudhälsa.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne"">behandlingar mot akne</a>'
            ),
      ),
      new ResultCustomer(
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>',
            )
      ),
);


$results_url_label = "Se fler resultat";
$results_url_title = "se flera seborrébehandlingsresultat";


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

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

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
            ),
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

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "Läs flera frågor relaterat till seborré";

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
$skinguide_url_title = "Läs fler guider om seborré";

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
            name: 'Akne',
            aka: 'Finnar',
            image: 'images/problems/102x102/akne.webp',
            image_alt: 'Bild som visar akne, en vanlig hudåkomma',
            image_title: 'Akne - en vanlig hudåkomma',
            url: 'problem/akne',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'problem/rosacea',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit',
            url_title: 'Perioral dermatit',
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
$brands_url_title = "Varumärken för Aknebehandling";

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
                                          <?php foreach ($akas as $aka) {
                                                if (isset($aka->url)) { ?>
                                                      <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                                <?php } else { ?>
                                                      <span class="b200 aka"><?php echo $aka->label ?></span>
                                          <?php }
                                          } ?>
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
                                          <?php if (isset($aka->url)) { ?>
                                                <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="mt-xs button b50 bright"><?php echo $aka->label ?></a>
                                          <?php } else { ?>
                                                <span class="mt-xs button b50 bright"><?php echo $aka->label ?></span>
                                          <?php } ?>
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
                                    <div class="mt-s">
                                          <span class="h200 l10n">Även känt som:</span>
                                          <?php foreach ($akas as $aka) {
                                                if (isset($aka->url)) { ?>
                                                      <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                                <?php } else { ?>
                                                      <span class="b200 aka"><?php echo $aka->label ?></span>
                                          <?php }
                                          } ?>
                                    </div>
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