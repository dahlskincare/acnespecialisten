<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Blandhy - Förståelse, Behandling och Råd | Acnespecialisten';
$seo_description = 'Dyk djupt in i blandhyens karaktär med Acnespecialisten. Lär dig hur man hanterar både torra och oljiga partier för att uppnå en harmoniserad hudbalans.';
$seo_keywords = 'blandhy, hudbalans, behandla blandhy, råd för blandhy, torra och oljiga partier, fet hy, Acnespecialistens tips, oljig hy';

$seo_image = 'bilder/problem/424x456/blandhy.webp';

$title = 'Blandhy';

$description = 'Här går vi igenom blandhys särskilda utmaningar, där huden kan vara både torr och oljig på olika ställen. Läs om varför blandhy uppstår och hur våra expertlösningar kan ge dig konkreta resultat. Vi är fokuserade på att erbjuda dig effektiva behandlingar för en problemfri hud.';

$image_small = 'bilder/problem/424x324/blandhy.webp';
$image_large = 'bilder/problem/424x456/blandhy.webp';
$image_title = 'Visar en hud med blandhy';
$image_alt = 'Bild som illustrerar hur en blandhy ser ut';


$akas = [
      new Link(
            label: 'Oljig & torr hy',
            url: null,
            title: 'Oljig & torr hy'
      ),
      new Link(
            label: 'Yttorr hy',
            url: null,
            title: 'Yttorr hy'
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin";
$consultation_url_title = "Gratis Konsultation för Blandhy";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_CombinationSkin";
$booking_url_title = "Boka Behandling för Blandhy";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Blandhy";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Behandling för Blandhy";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Blandhy";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Behandling för Blandhy";


$nav_buttons = array(
      'about' => 'Om Blandhy',
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

$about_title = 'Om Blandhy';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är blandhy?',
            content: '<p class="p200">Blandhy är en hudtyp som kännetecknas av att ha både torra och oljiga områden på ansiktet. Typiskt för blandhy är att T-zonen, som inkluderar panna, näsa och haka, tenderar att vara oljig medan kinderna kan vara torra eller normala. Detta medför att porerna i T-zonen ofta är förstorade medan de kan vara mindre synliga på kinderna.</p>',

            extended_content: '<p class="p200 mt-xl">En person med blandhy kan uppleva både glansighet i de oljigare områdena och en stram känsla i de torra partierna. Det kan även förekomma finnar eller pormaskar i de oljiga områdena.</p> 
            
            <p class="p200 mt-xl">Trots dessa varierande egenskaper hos blandhy, är det viktigt att komma ihåg att varje individs hud är unik. Vissa kan ha tydligare oljiga områden medan andra upplever mer torrhet. Detta betyder att hudvårdsrutinen bör anpassas individuellt för att möta varje persons unika behov och för att upprätthålla en balanserad hudhälsa.</p>',

            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man blandhy?',
            content: '<p class="p200">Blandhy kan härledas till en kombination av genetik, hormonella svängningar och yttre miljöfaktorer. En obalans mellan torra och oljiga områden uppstår när vissa delar av huden producerar en optimal mängd talg medan andra delar underproducerar. Denna ojämnhet kan förstärkas genom genetiska predispositioner där familjemedlemmar också har haft liknande hudmönster.</p>',

            extended_content: '<p class="p200 mt-xl">Hormonella förändringar, som de som inträffar under puberteten, graviditet eller menstruationscykeln, kan också spela en stor roll i uppkomsten av blandhy. Hormonförändringarna kan leda till att vissa delar av huden, som T-zonen, producerar mer talg än normalt. Yttre faktorer som klimat, årstidens växlingar och luftfuktighet kan också påverka hudens talgproduktion och fuktighetsnivå. Till exempel kan kalla vintermånader leda till torra kinder samtidigt som inomhusuppvärmning kan öka oljighet i T-zonen.</p>
            
            <p class="p200 mt-xl">Det är väsentligt att förstå de underliggande orsakerna till blandhy för att kunna anpassa en skräddarsydd hudvårdsrutin. Genom att identifiera dessa faktorer kan vi bättre adressera och balansera huden, vilket leder till en mer jämn och hälsosam hudton. Hos oss får du vägledning om vilka produkter och rutiner som passar bäst för att balansera din unika blandning av hudförhållanden.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat')
      ),

      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får blandhy?',
            content: '<p class="p200">Blandhy är en av de mest förekommande hudtyperna och kan drabba människor i alla åldrar, oavsett kön och etnicitet. Det är inte ovanligt att ungdomar upplever blandhy när hormoner börjar fluktuera under puberteten, vilket leder till att vissa delar av ansiktet blir oljigare medan andra förblir torra. Denna kombination av torra och oljiga områden, ofta med oljig T-zon (panna, näsa och haka) och torra kinder, kan vara en källa till frustration för många.</p>',

            extended_content: '<p class="p200 mt-xl">Medan blandhy ofta förknippas med tonåringar, kan det fortsätta eller till och med börja under vuxen ålder. Hormonella förändringar som de under graviditet, menstruationscykeln eller menopaus kan också leda till en uppkomst av blandhy hos vuxna kvinnor. Män kan också uppleva blandhy, särskilt om de har en genetisk predisposition för det.</p>
            
            <p class="p200 mt-xl">Externa faktorer som klimat, miljö och hudvård kan också påverka hudtypen. Personer som bor i områden med skiftande årstider kan märka att deras hud känns oljigare på sommaren och torrare på vintern. För att adressera de specifika behoven hos blandhy rekommenderar vi en individuell hudvårdsrutin som tar hänsyn till de olika zonerna i ansiktet och balanserar dem effektivt.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man blandhy?',

            content: '<p class="p200">Blandhy kan manifestera sig på olika platser i ansiktet, med vissa områden som känns oljigare än andra. De vanligaste zonerna för blandhy är den centrala delen av ansiktet – även känd som T-zonen, som inkluderar panna, näsa och haka. Samtidigt kan andra delar av ansiktet, som kinderna, upplevas torra eller normala.</p>',

            extended_content: '<p class="p200 mt-xl">När det gäller blandhy är ansiktets T-zon en av de mest talande indikatorerna. Den här zonen har en högre koncentration av talgkörtlar, vilket kan förklara varför den blir oljig snabbare. Kinderna, å andra sidan, kan kännas torra eftersom de har färre talgkörtlar. Detta kan skapa en känsla av obalans i huden, där vissa områden behöver fukt och andra behöver kontrollera överproduktion av olja.</p>

            <p class="p200 mt-xl">Det är också värt att notera att andra delar av kroppen, som nacke eller décolletage, kan visa tecken på blandhy, särskilt om man använder produkter som är oljebaserade. Medan blandhy främst observeras i ansiktet, kan den unika kombinationen av torra och oljiga områden dyka upp var som helst. För att adressera de specifika behoven hos blandhy rekommenderar vi att du konsulterar med en hudspecialist för att skräddarsy en hudvårdsrutin som ger balans och välbefinnande till din hud.</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),

);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Vid din första konsultation hos AcneSpecialisten bedömer en hudterapeut din hud och identifierar tecknen på blandhy. Genom att förstå din unika kombination av oljiga och torra zoner kan vi skräddarsy en behandlingsplan just för dig.',

            url_label: 'Boka konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            url_title: 'Boka din gratis konsultation för blandhy idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Oavsett om det är oljiga fläckar, torrhet eller båda, erbjuder vi specialiserade behandlingar som tar itu med dina specifika problemområden, för att återställa balansen i din hud.',

            url_label: 'Utforska behandlingar',
            url: 'problem/blandhy/blandhybehandling',
            url_title: 'Ta reda på vilka behandlingar som passar din blandhy'
      ),
      new TreatmentStep(
            title: 'Förebygg',
            content: 'För att bibehålla resultaten av behandlingarna är det viktigt med rätt hudvård hemma. Vi rekommenderar produkter som är speciellt anpassade för blandhy, som hjälper till att hålla huden återfuktad och oljebalansen i schack.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            url_title: 'Bläddra bland våra produkter för blandhy'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'Blandhy kan också lämna efter sig oönskade märken som fläckar eller ojämn hudstruktur. Vi erbjuder avancerade behandlingsmetoder för att återställa hudens jämnhet och lyster, som laserterapi, microneedling och kemisk peeling.',

            url_label: 'Ärrbehandlingar',
            url: 'behandla-acnearr.php',
            url_title: 'Se våra behandlingsalternativ för ärr orsakade av blandhy'
      ),

);

$treatment_link = '<a href="problem/blandhy/blandhybehandling" title="Utforska effektiv blandhybehandling" class="mt-xl button b200 outline expand auto-width">Läs mer om vår blandhybehandling</a>';


$symptoms_title = 'Blandhy symptom';

$symptoms = array(
      new Symptom(
            name: 'Oljig & Fet hy',
            aka: 'Även kallat glansig hy',
            content: 'Den mest framträdande egenskapen för blandhy är ofta en oljig T-zon, vilket innebär att pannan, näsan och hakan kan kännas och se glansiga eller fetare ut jämfört med andra delar av ansiktet. Särskilt efter en lång dag eller under sommarmånaderna, när värmen kan förstärka oljeproduktionen, kan huden börja se extra glansig ut på grund av en kombination av talg och svett.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/komedoner-oppna.webp',
            image_alt: 'Bild av öppna komedoner (pormaskar)',
            image_title: 'Öppna komedoner (pormaskar)'
      ),
      new Symptom(
            name: 'Torr hy',
            aka: 'Även kallat stram hy',
            content: 'Medan T-zonen kan vara oljig, särskilt under de varmare månaderna, kan kinderna antingen vara torra eller ha en normal konsistens. Under vinterhalvåret, när kylan kan göra huden mer utsatt, kan vissa områden bli torrare. Trots oljighet i vissa områden kan andra delar av huden kännas torr och stram, särskilt efter tvätt. Det kan även uppstå torra fläckar som fjällar, särskilt på kinderna.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/komedoner-stangda.webp',
            image_alt: 'Bild av stängda komedoner (whiteheads)',
            image_title: 'Stängda komedoner (whiteheads)'
      ),
      new Symptom(
            name: 'Känslig hy',
            aka: 'Även kallat reaktiv & röd hy',
            content: 'Känslig hy är ett symptom där huden lätt kan reagera på olika stimuli, såsom vissa hudvårdsprodukter, miljöfaktorer eller förändringar i klimatet. Denna hudtyp tenderar att bli röd, irriterad eller klående snabbare än andra hudtyper. Det kan också vara vanligt med en brännande känsla eller en känsla av stramhet, särskilt efter att huden har kommit i kontakt med potentiellt irriterande ämnen.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/papler.webp',
            image_alt: 'Bild av papler (röda finnar)',
            image_title: 'Papler (röda finnar)'
      ),
      new Symptom(
            name: 'Pormaskar',
            aka: 'Även känt som vidgade porer',
            content: 'Pustuler är röda och inflammerade blemmor som innehåller var (en blandning av döda bakterier, vita blodkroppar och döda hudceller). De ser ut som papuler men har en vit eller gul prick i mitten. Pustuler kan vara smärtsamma och är vanligt förekommande på ansiktet, nacken, bröstet och ryggen.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/pustler.webp',
            image_alt: 'Bild av pustler (gula finnar)',
            image_title: 'Pustler (gula finnar)'
      ),
      new Symptom(
            name: 'Finnar',
            aka: 'Även kallat akne',
            content: 'Noduler är större, djupare och ofta smärtsamma inflammerade blemmor som uppstår när en hårsäck blir kraftigt infekterad och inflammationen sprider sig till det omgivande vävnaden. De är vanligtvis större än 5 mm i diameter och kan vara fasta och ömma vid beröring. Noduler är vanligt förekommande på ansiktet, nacken, bröstet, ryggen och ibland även på överarmarna och skinkorna.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/noduler.webp',
            image_alt: 'Bild av noduler (innåtfinnar)',
            image_title: 'Noduler (innåtfinnar)'
      ),
      new Symptom(
            name: 'Cystor',
            aka: 'Kända som bölder',
            content: 'Cystor är stora, inflammerade och smärtsamma blemmor som är fyllda med var och bildas när en hårsäck blir mycket infekterad och inflammationen sprider sig djupt in i huden. De kan vara runda och mjuka eller fasta och ömma vid beröring. Cystor kan vara större än 5 mm i diameter och är vanligt förekommande på ansiktet, nacken, bröstet och ryggen. Cystisk akne kan leda till ärrbildning och kräver ofta professionell behandling.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/cystor.webp',
            image_alt: 'Bild av cystor (bölder)',
            image_title: 'Cystor (bölder)'
      ),
);

$headline01 = "01. Identifiera din blandhy";

$service = new Service(
      title: 'Konsultation för blandhy',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vi börjar med ett personligt möte med en hudterapeut från AcneSpecialisten utförs en undersökning av din blandhy. Vi tar före-bilder på din hud och rekommenderar rätt behandlingsmetod för just din hy samt tar fram en skräddarsydd behandlingsplan för just dig.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för blandhy',
      image_title: 'Konsultation för blandhy',

      url_label: '',
      url: '',
      url_title: '',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
      consultation_url_title: 'Klicka för att boka tid för en konsultation om blandhy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla blandhy";

$services = array(
      new Service(
            title: 'Ansiktsbehandling för blandhy',
            duration: '60 min',
            price: '995 kr',
            content: 'Denna skräddarsydda ansiktsbehandling för blandhy tar sikte på hudens specifika behov, särskilt de torra och oljiga partierna. Genom djup rengöring, rätt exfoliering och intensiv återfuktning ger behandlingen huden en harmoniserad känsla, förbättrad textur och en naturlig lyster.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för blandhy',
            image_title: 'Ansiktsbehandling för blandhy',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för blandhy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_CombinationSkin&method=Method_FacialProblem',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för blandhy'
      ),
      new Service(
            title: 'Laserbehandling för blandhy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Laserbehandling för blandhy utnyttjar avancerad laserteknik för att specifikt adressera hudens ojämnheter. Den arbetar målinriktat för att reducera överproduktion av talg samtidigt som den boostar fuktnivåerna i torra partier. Efter behandlingen framstår huden mer balanserad med en förnyad lyster och jämnare yta.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling för blandhy',
            image_title: 'Laserbehandling för blandhy',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling för blandhy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling för blandhy'
      ),

      new Service(
            title: 'Kemisk peeling för blandhy',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling anpassad för blandhy använder sig av en unik lösning designad för att exfoliera och återfukta hudens särskilda behov. Den främjar en accelererad cellförnyelse, vilket bidrar till att balansera både oljiga och torra partier av huden.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling för blandhy',
            image_title: 'Kemisk peeling för blandhy behandling',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för blandhy',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för blandhy behandling'

      ),

      new Service(
            title: 'Microneedling för blandhy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling för blandhy är en banbrytande teknik som direkt adresserar hudens komplexa behov. Genom att skapa fina kanaler i huden, boostar behandlingen hudens förmåga att läka samt stimulerar kollagenproduktion. Denna process hjälper till att jämna ut både torra och oljiga regioner, vilket förbättrar hudens yta och återställer en naturliga balans.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling för blandhy',
            image_title: 'Microneedling för blandhy behandling',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för blandhy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP',
            booking_url_title: 'Klicka för att boka tid för en microneedling för blandhy behandling'
      ),

);

$headline03 = "03. Förebygg uppkomsten av ny blandhy";

$products = array(
      new Service(
            title: 'Produkter mot blandhy',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'Att hantera blandhy kräver speciellt utvalda produkter som kan balansera huden och ta hand om både dess torra och oljiga delar. Med daglig användning av våra produkter för blandhy kan du uppnå en balanserad hud som både känns och ser bättre ut.',

            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av blandhy',
            image_title: 'Effektiva produkter för balansering av blandhy',

            url_label: '',
            url: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot blandhy',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            booking_url_title: 'Klicka för att köpa produktpaket mot blandhy',
      )
);

$headline04 = "04. Reparera huden";

$procedures = array(
      new Service(
            title: 'Reparera huden',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Med blandhy kan det ibland uppkomma fläckar och en ojämn hudstruktur. För att hantera dessa utmaningar har vi olika behandlingsmetoder som effektivt riktar sig mot både pigmentfläckar och ojämn hudstruktur. Klicka här för att läsa mer om hur du kan förbättra din hud med våra skräddarsydda behandlingar.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Behandlingar för fläckar och ojämn hudstruktur',
            image_title: 'Behandlingar för en jämnare hudton',

            url_label: '',
            url: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för blandhy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP',
            booking_url_title: 'Klicka för att boka tid för en microneedling för blandhy behandling'
      ),
);

$articles = array(

      new Article(
            title: 'När ska jag söka hjälp med min blandhy?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med min blandhy?',
            image_title: 'När ska jag söka hjälp med min blandhy?',
            content: '<p class="p200">Blandhy är en vanlig hudtyp och kan drabba personer i alla åldrar. Även om det mestadels är en estetisk bekymmer, kan det påverka självkänslan och leda till andra hudproblem. Om du känner att din blandhy börjar påverka ditt välbefinnande, eller om du har testat olika produkter utan framgång, kan det vara dags att söka professionell hjälp. Det är aldrig för tidigt eller försent att få rätt hjälp.</p>
            <p class="p200 mt-m">Hos en hudterapeut kan du få en personlig konsultation och behandlingsplan skräddarsydd för din unika hudtyp. En expert kan analysera din hud, identifiera de specifika problemområdena och rekommendera den mest effektiva behandlingsmetoden. Detta kan inkludera allt från balanserande hudvårdsprodukter till specialbehandlingar för att jämna ut hudens textur. Om du känner att din blandhy har blivit en utmaning eller om du bara strävar efter en jämnare hudton, tveka inte att ta steget mot professionell rådgivning och vård.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            content: '<p class="p200">Om du strävar efter en effektiv och långsiktig lösning för din blandhy, är AcneSpecialisten det självklara valet. Med över 30 års erfarenhet inom hudvård och en specialisering i att behandla olika hudproblem, inklusive blandhy, är vi experter på att erbjuda skräddarsydda lösningar för varje enskild individs behov.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste metoderna och teknologierna inom hudvård för att säkerställa bästa möjliga resultat. Vårt dedikerade team av hudterapeuter är redo att erbjuda en individuellt anpassad behandlingsplan och att stötta dig genom hela processen. Genom regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att din blandhy får en hållbar förbättring.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för din blandhy. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig att uppnå och bibehålla en balanserad och strålande hud. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val när det kommer till behandling av blandhy.</p>',
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
$results_url_title = "se flera behandlingsresultat";


$reviews = array(
      new Review(
            brand: 'Trustpilot',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: 'images/brands/trustpilot.svg'

      ),
      new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: 'images/brands/google-small.svg'

      ),
      new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily',
            stars: 5,
            logo_url: 'images/brands/bokadirekt-small.svg'
      ),

);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om blandhy' => array(
            new Question(
                  title: 'Varför har vissa delar av mitt ansikte torra fläckar medan andra är oljiga?',
                  text: '<p class="p200">Blandhy kännetecknas av en kombination av både torra och oljiga områden i ansiktet. Vanligtvis tenderar den så kallade T-zonen (panna, näsa och haka) att vara mer oljig medan kinderna kan vara torrare. Denna variation beror på distributionen av talgkörtlar i ansiktet. Områden med fler talgkörtlar producerar mer olja, medan områden med färre talgkörtlar kan kännas torra.</p>'
            ),
            new Question(
                  title: 'Är blandhy genetiskt eller orsakat av yttre faktorer?',
                  text: '<p class="p200">Blandhy är i grunden genetiskt, vilket betyder att om dina föräldrar eller nära släktingar har blandhy, kan du också ha en större benägenhet för det. För den som har dessa anlag kan yttre faktorer påverka huden och orsaka att blandhy uppstår. Faktorer som klimat, användning av vissa hudvårdsprodukter, hormonella förändringar och livsstil kan alla påverka balansen mellan oljiga och torra områden på huden.</p>'
            ),
            new Question(
                  title: 'Kan jag förändra min hudtyp över tid?',
                  text: '<p class="p200">Ja, din hudtyp kan förändras över tid beroende på flera faktorer. Åldrande är en stor faktor, eftersom huden tenderar att bli torrare med tiden. Hormonella förändringar, som de som uppstår under graviditet eller menopaus, kan också påverka hudtypen. Dessutom kan faktorer som klimat, användning av vissa mediciner och hur du sköter om din hud alla leda till förändringar i hudtyp över tid.</p>'
            ),
            new Question(
                  title: 'Hur påverkar årstiderna och klimatet blandhy?',
                  text: '<p class="p200">Årstider och klimat kan ha en stor inverkan på blandhy. Till exempel kan kallt och torrt vinterklimat göra att huden känns torrare, medan fuktigt och varmt sommarklimat kan öka oljeproduktionen. Det är viktigt för personer med blandhy att anpassa sin hudvårdsrutin efter årstiderna för att bäst ta hand om de varierande behoven hos deras hud.</p>'
            ),
      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Vad är den mest effektiva behandlingsmetoden för blandhy?',
                  text: '<p class="p200">Blandhy är unik eftersom det innebär att man har både torra och oljiga områden på huden, oftast torra kinder och en oljig T-zon (panna, näsa och haka). Den mest effektiva behandlingsmetoden är därför ofta en kombination av produkter och behandlingar. Det handlar om att använda återfukta och balansera huden effektivt för att reklera både de oljia och torra partierna.</p>'
            ),
            new Question(
                  title: 'Är det viktigt att använda en fuktkräm även på de oljiga delarna av mitt ansikte?',
                  text: '<p class="p200">Ja, det är viktigt. Många tror felaktigt att de oljiga delarna av ansiktet har ett överskott av fukt ochdärför inte behöver återfuktning. Men i själva verket är oljiga partier och fukt två helt olika saker. Oljan är i själva verket talg som produceras av huden för att skydda och återfukta torr hud. Därför är det viktigt att återfukta både oljiga och torra delar av huden för att reglera och reducera talgproduktionen.</p>'
            ),
            new Question(
                  title: 'Finns det några professionella behandlingar som är särskilt bra för blandhy?',
                  text: '<p class="p200">Ja, det finns flera professionella behandlingar som kan vara effektiva för blandhy. Exempelvis kan mikrodermabrasion vara effektivt för att avlägsna döda hudceller och stimulera cellförnyelse, vilket kan balansera hudens textur och ton. Kemiska peelingar kan också anpassas för att behandla både de torra och oljiga områdena på huden. Hydrafacial är en annan populär behandling som kombinerar exfoliering, rengöring och återfuktning i ett och kan anpassas för blandhy. Det bästa är att konsultera en hudspecialist eller estetiker för att diskutera de bästa behandlingsalternativen för din specifika hudtyp.</p>'
            ),
            new Question(
                  title: 'Hur många behandlingar behövs?',
                  text: '<p class="p200">Solskydd är avgörande för alla hudtyper, inklusive blandhy. Solens UV-strålar kan orsaka för tidigt åldrande, pigmentfläckar och öka risken för hudcancer. För personer med blandhy är det ofta bäst att välja en solkräm med bred spektrum (skydd mot både UVA- och UVB-strålar).  Det viktiga är att hitta en solkräm som är anpassad för huden i ansiktet och att använda den dagligen, oavsett väder.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till blandhy";

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
$skinguide_url_title = "Läs fler guider om blandhy";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i aknebehandling',
            image_title: 'Cazzandra Lindberg - Expert på aknebehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på akne',
            image_title: 'Veronika Benedik - Specialist inom aknevård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom aknehantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på akne'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot aknebehandling',
            image_title: 'Vilma Libom - Expert inom aknebehandling'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Blandhy Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Akne',
            aka: 'Papler & Pustler',
            image: 'images/problems/200x200/akne.webp',
            image_alt: 'Bild som skildrar akne, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Akne - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'akne.php',
            url_title: 'Akne'
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
$brands_url_title = "Varumärken för Blandhybehandling";

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
                                          <?php foreach ($akas as $aka) { ?>
                                                <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="b200 underline aka"><?php echo $aka->label ?></a>
                                          <?php } ?>
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