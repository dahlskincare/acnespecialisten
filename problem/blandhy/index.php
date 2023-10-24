<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Blandhy - Förståelse, Behandling och Råd | Acnespecialisten';
$seo_description = 'Dyk djupt in i blandhyens karaktär med Acnespecialisten. Lär dig hur man hanterar både torra och oljiga partier för att uppnå en harmoniserad hudbalans.';
$seo_keywords = 'blandhy, hudbalans, behandla blandhy, råd för blandhy, torra och oljiga partier, fet hy, Acnespecialistens tips, oljig hy';



$title = 'Blandhy';

$description = 'Här går vi igenom blandhys särskilda utmaningar, där huden kan vara både torr och oljig på olika ställen. Läs om varför blandhy uppstår och hur våra expertlösningar kan ge dig konkreta resultat. Vi är fokuserade på att erbjuda dig effektiva behandlingar för en problemfri hud.';

$image_small = 'images/problems/424x324/blandhy.webp';
$image_large = 'images/problems/424x456/blandhy.webp';
$image_title = 'Visar en hud med blandhy';
$image_alt = 'Bild som illustrerar hur en blandhy ser ut';


$akas = [
      new Link(
            label: 'Finnar',
            url: 'problem/finnar',
            title: 'Allt du behöver veta om finnar och deras behandling'
      ),
      new Link(
            label: 'Vuxenakne',
            url: 'problem/vuxenakne',
            title: 'Utforska orsaker, symptom och behandlingar av vuxenakne'
      ),
      new Link(
            label: 'Tonårsakne',
            url: 'problem/tonarsakne',
            title: 'Komplett guide om tonårsakne: orsaker, förebyggande och lösningar'
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "consultation-booking?problem=combination-skin";
$consultation_url_title = "Gratis Konsultation för Blandhy";

$booking_url_label = "Boka behandling";
$booking_url = "treatment-booking?problem=combination-skin";
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

            icons: array('who-infants' => 'Hormoner', 'who-teenagers' => 'Genetik', 'who-adults' => 'Klimat', 'who-elders' => 'Yttre miljöfaktorer')
      ),

new ProblemTrivia(
            prefix: 'Vem',
            title: 'får blandhy?',
            content: '<p class="p200">Blandhy är en av de mest förekommande hudtyperna och kan drabba människor i alla åldrar, oavsett kön och etnicitet. Det är inte ovanligt att ungdomar upplever blandhy när hormoner börjar fluktuera under puberteten, vilket leder till att vissa delar av ansiktet blir oljigare medan andra förblir torra. Denna kombination av torra och oljiga områden, ofta med oljig T-zon (panna, näsa och haka) och torra kinder, kan vara en källa till frustration för många.</p>',
            
            extended_content: '<p class="p200 mt-xl">Medan blandhy ofta förknippas med tonåringar, kan det fortsätta eller till och med börja under vuxen ålder. Hormonella förändringar som de under graviditet, menstruationscykeln eller menopaus kan också leda till en uppkomst av blandhy hos vuxna kvinnor. Män kan också uppleva blandhy, särskilt om de har en genetisk predisposition för det.</p>
            
            <p class="p200 mt-xl">Externa faktorer som klimat, miljö och hudvård kan också påverka hudtypen. Personer som bor i områden med skiftande årstider kan märka att deras hud känns oljigare på sommaren och torrare på vintern. För att adressera de specifika behoven hos blandhy rekommenderar vi en individuell hudvårdsrutin som tar hänsyn till de olika zonerna i ansiktet och balanserar dem effektivt.</p>',
            
            icons: array('who-infants' => 'Ungdomar', 'who-teenagers' => 'Tonåringar', 'who-adults' => 'Vuxna', 'who-elders' => 'Män & Kvinnor')
      ),
new ProblemTrivia(
            prefix: 'Var',
            title: 'får man blandhy?',

            content: '<p class="p200">Blandhy kan manifestera sig på olika platser i ansiktet, med vissa områden som känns oljigare än andra. De vanligaste zonerna för blandhy är den centrala delen av ansiktet – även känd som T-zonen, som inkluderar panna, näsa och haka. Samtidigt kan andra delar av ansiktet, som kinderna, upplevas torra eller normala.</p>',

            extended_content: '<p class="p200 mt-xl">När det gäller blandhy är ansiktets T-zon en av de mest talande indikatorerna. Den här zonen har en högre koncentration av talgkörtlar, vilket kan förklara varför den blir oljig snabbare. Kinderna, å andra sidan, kan kännas torra eftersom de har färre talgkörtlar. Detta kan skapa en känsla av obalans i huden, där vissa områden behöver fukt och andra behöver kontrollera överproduktion av olja.</p>

            <p class="p200 mt-xl">Det är också värt att notera att andra delar av kroppen, som nacke eller décolletage, kan visa tecken på blandhy, särskilt om man använder produkter som är oljebaserade. Medan blandhy främst observeras i ansiktet, kan den unika kombinationen av torra och oljiga områden dyka upp var som helst. För att adressera de specifika behoven hos blandhy rekommenderar vi att du konsulterar med en hudspecialist för att skräddarsy en hudvårdsrutin som ger balans och välbefinnande till din hud.</p>',
            
            icons: array('who-infants' => 'T-zonen', 'who-teenagers' => 'Kinderna', 'who-adults' => 'Nacken', 'who-elders' => 'Décolletage')
      ),

);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Vid din första konsultation hos AcneSpecialisten bedömer en hudterapeut din hud och identifierar tecknen på blandhy. Genom att förstå din unika kombination av oljiga och torra zoner kan vi skräddarsy en behandlingsplan just för dig.',

            url_label: 'Boka konsultation',
            url: 'hudkonsultation',
            url_title: 'Boka din gratis konsultation för blandhy idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Oavsett om det är oljiga fläckar, torrhet eller båda, erbjuder vi specialiserade behandlingar som tar itu med dina specifika problemområden, för att återställa balansen i din hud.',

            url_label: 'Utforska behandlingar',
            url: 'behandlingar/blandhy',
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
            url: 'behandlingar/blandhyarr',
            url_title: 'Se våra behandlingsalternativ för ärr orsakade av blandhy'
      ),

);

$treatment_link = '<a href="problem/blandhy/blandhybehandlingar" title="Utforska effektiv blandhybehandling" class="mt-xl button b200 outline expand auto-width">Läs mer om vår blandhybehandling</a>';


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

      image_small: 'images/services/200x200/konsultation_blandhy.webp',
      image_large: 'images/services/200x200/konsultation_blandhy.webp',
      image_alt: 'Bild av en konsultation för blandhy',
      image_title: 'Konsultation för blandhy',

      url_label: 'Läs mer om vår konsultation för blandhy',
      url: 'hudkonsultation-blandhy',
      url_title: 'Klicka här för att läsa mer om konsultation för blandhy',

      consultation_url_label: 'Boka tid för konsultation om blandhy',
      consultation_url: 'consultation-booking?problem=blandhy',
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

            image_small: 'images/services/200x200/ansiktsbehandling-blandhy.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-blandhy.webp',
            image_alt: 'Bild av en ansiktsbehandling för blandhy',
            image_title: 'Ansiktsbehandling för blandhy',

            url: 'behandlingar/ansiktsbehandling-blandhy',
            url_label: 'Läs mer om ansiktsbehandling för blandhy',
            url_title: 'Klicka här för att läsa mer om ansiktsbehandling för blandhy',

            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url: 'consultation-booking?problem=blandhy&service=classicFacials',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för blandhy',

            booking_url_label: 'Boka tid för ansiktsbehandling för blandhy',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/blandhy-konsultation',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för blandhy'
      ),
      new Service(
            title: 'Laserbehandling för blandhy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Laserbehandling för blandhy utnyttjar avancerad laserteknik för att specifikt adressera hudens ojämnheter. Den arbetar målinriktat för att reducera överproduktion av talg samtidigt som den boostar fuktnivåerna i torra partier. Efter behandlingen framstår huden mer balanserad med en förnyad lyster och jämnare yta.',

            image_small: 'images/services/200x200/laser-blandhy.webp',
            image_large: 'images/services/200x200/laser-blandhy.webp',
            image_alt: 'Bild av laserbehandling för blandhy',
            image_title: 'Laserbehandling för blandhy',

            url_label: 'Läs mer om laser för blandhy',
            url: 'behandlingar/laser-blandhy',
            url_title: 'Klicka här för att läsa mer om laserbehandling för blandhy',

            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url: 'consultation-booking?problem=blandhy&service=laser',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling för blandhy',

            booking_url_label: 'Boka tid för laserbehandling för blandhy',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/blandhy-laser-konsultation',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling för blandhy'
      ),

      new Service(
            title: 'Kemisk peeling för blandhy',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling anpassad för blandhy använder sig av en unik lösning designad för att exfoliera och återfukta hudens särskilda behov. Den främjar en accelererad cellförnyelse, vilket bidrar till att balansera både oljiga och torra partier av huden.',

            image_small: 'images/services/200x200/kemisk-peeling-blandhy.webp',
            image_large: 'images/services/200x200/kemisk-peeling-blandhy.webp',
            image_alt: 'Bild av kemisk peeling för blandhy',
            image_title: 'Kemisk peeling för blandhy behandling',

            url: 'behandlingar/kemisk-peeling-blandhy',
            url_label: 'Läs mer om kemisk peeling för blandhy',
            url_title: 'Klicka här för att läsa mer om kemisk peeling för blandhy',

            consultation_url: 'consultation-booking?problem=blandhy&service=chemicalPeeling',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för blandhy',

            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/blandhy-peeling-konsultation',
            booking_url_label: 'Boka tid för kemisk peeling för blandhy',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för blandhy behandling'

      ),

      new Service(
            title: 'Microneedling för blandhy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling för blandhy är en banbrytande teknik som direkt adresserar hudens komplexa behov. Genom att skapa fina kanaler i huden, boostar behandlingen hudens förmåga att läka samt stimulerar kollagenproduktion. Denna process hjälper till att jämna ut både torra och oljiga regioner, vilket förbättrar hudens yta och återställer en naturliga balans.',

            image_small: 'images/services/200x200/microneedling-blandhy.webp',
            image_large: 'images/services/200x200/microneedling-blandhy.webp',
            image_alt: 'Bild av microneedling för blandhy',
            image_title: 'Microneedling för blandhy behandling',

            url: 'behandlingar/microneedling-blandhy',
            url_label: 'Läs mer om microneedling för blandhy',
            url_title: 'Klicka här för att läsa mer om microneedling för blandhy',

            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url: 'consultation-booking?problem=blandhy&service=microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för blandhy',

            booking_url_label: 'Boka tid för microneedling för blandhy',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/blandhy-microneedling-konsultation',
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

            image_small: 'images/services/200x200/produkter-blandhy.webp',
            image_large: 'images/services/200x200/produkter-blandhy.webp',
            image_alt: 'Bild av produkter designade för behandling av blandhy',
            image_title: 'Effektiva produkter för balansering av blandhy',

            url_label: 'Läs mer om produkter för blandhy',
            url: 'https://dahlskincare.se',
            url_title: 'Klicka här för att läsa mer om produkter för blandhy',

            consultation_url_label: null,
            consultation_url: null,
            consultation_url_title: null,

            booking_url_label: null,
            booking_url: null,
            booking_url_title: null,
      )
);

$headline04 = "04. Reparera huden";

$procedures = array(
      new Service(
            title: 'Reparera huden',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Med blandhy kan det ibland uppkomma fläckar och en ojämn hudstruktur. För att hantera dessa utmaningar har vi olika behandlingsmetoder som effektivt riktar sig mot både pigmentfläckar och ojämn hudstruktur. Klicka här för att läsa mer om hur du kan förbättra din hud med våra skräddarsydda behandlingar.',

            image_small: 'images/services/200x200/behandlingar-ojamnhud.webp',
            image_large: 'images/services/200x200/behandlingar-ojamnhud.webp',
            image_alt: 'Behandlingar för fläckar och ojämn hudstruktur',
            image_title: 'Behandlingar för en jämnare hudton',

            url_label: 'Läs mer om behandlingar för ojämn hudstruktur',
            url: 'behandlingar/ojamnhud',
            url_title: 'Klicka här för att läsa mer om våra behandlingar för ojämn hudstruktur',

            consultation_url_label: null,
            consultation_url: null,
            consultation_url_title: null,

            booking_url_label: null,
            booking_url: null,
            booking_url_title: null,
      ),
);

$articles = array(

      new Article(
            title: 'När ska jag söka hjälp med min blandhy?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag söka hjälp med min blandhy?',
            image_title: 'När ska jag söka hjälp med min blandhy?',
            content: '<p class="p200">Blandhy, som kännetecknas av både torra och oljiga partier, är en vanlig hudtyp och kan drabba personer i alla åldrar. Även om det mestadels är en estetisk bekymmer, kan det påverka självkänslan och leda till andra hudproblem. Om du känner att din blandhy börjar påverka ditt välbefinnande, eller om du har testat olika produkter utan framgång, kan det vara dags att söka professionell hjälp. Det finns ingen "minsta gräns" för när det är lämpligt att söka råd från en specialist.</p>
            <p class="p200 mt-m">Hos en hudspecialist kan du få en personlig konsultation och behandlingsplan skräddarsydd för din unika hudtyp. En expert kan analysera din hud, identifiera de specifika problemområdena och rekommendera den mest effektiva behandlingsmetoden. Detta kan inkludera allt från balanserande hudvårdsprodukter till specialbehandlingar för att jämna ut hudens textur. Om du känner att din blandhy har blivit en utmaning eller om du bara strävar efter en jämnare hudton, tveka inte att ta steget mot professionell rådgivning och vård. Det är aldrig för tidigt eller för sent att investera i din hudhälsa.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            content: '<p class="p200">Om du strävar efter en effektiv och långsiktig lösning för din blandhy, är AcneSpecialisten det självklara valet. Med över 30 års erfarenhet inom hudvård och en specialisering i att behandla olika hudproblem, inklusive blandhy, är vi experter på att erbjuda skräddarsydda lösningar för varje enskild individs behov.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste metoderna och teknologierna inom hudvård för att säkerställa bästa möjliga resultat. Vårt dedikerade team av hudterapeuter är redo att erbjuda en individuellt anpassad behandlingsplan och att stötta dig genom hela processen. Genom regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att din blandhy får en hållbar förbättring.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för din blandhy. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig att uppnå och bibehålla en balanserad och strålande hud. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val när det kommer till behandling av blandhy.</p>',
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
$results_url_title = "se flera aknebehandlingsresultat";


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
      'Generellt om akne' => array(
            new Question(
                  title: 'Hur blir jag av med min akne snabbt?',
                  text: '<p class="p200">Att bli av med akne snabbt är en utmaning, eftersom det inte finns någon quickfix när det gäller akne. Effektiv behandling kräver att du tar hand om din hud genom att använda rätt behandlingar och produkter som passar din specifika hudtyp och akne. För att få en skräddarsydd behandlingsplan som hjälper dig att bli av med aknen så snabbt som möjligt, rekommenderar vi att du bokar en kostnadsfri hudkonsultation hos oss. Under konsultationen kommer vi att analysera din hud och hjälpa dig att utforma en anpassad behandlingsrutin som ger dig de bästa förutsättningarna för att snabbt och effektivt behandla din akne.</p>'
            ),
            new Question(
                  title: 'Har jag akne även om jag bara har en finne?',
                  text: '<p class="p200">ja, du har tekniskt sett akne även om du bara har en enstaka finne. Akne kan ta sig många olika former och innefattar alla typer av finnar, oavsett om det är enstaka eller flera, stora eller små, papler eller pustler. Många tror att de inte har akne om de endast upplever enstaka finnar då och då, men faktum är att alla dessa fall kategoriseras som akne.</p>'
            ),
            new Question(
                  title: 'Ska jag klämma mina finnar?',
                  text: '<p class="p200">Vi på Acnespecialisten rekommenderar att du inte klämmer finnar själv, eftersom felaktig teknik kan leda till ärrbildning och förvärra inflammationen genom att införa bakterier från dina fingrar. Det är dock sant att finnar kan behöva klämmas, men det måste göras på rätt sätt för att undvika skador på huden. Om du undviker att klämma helt kan ärrbildning också uppstå, eftersom fettsyran i finnen fortsätter att fräta på huden.</p>

                        <p class="p200 mt-m">För att klämma finnar korrekt krävs både rätt utrustning och teknik. På Acnespecialisten har vi erfarna hudterapeuter som kan hjälpa dig att behandla dina finnar på ett säkert och effektivt sätt. Genom att vända dig till oss får du den expertis och omsorg du behöver för att hantera din akne på bästa sätt. Du kan läsa mer om våra aknebehandlingar och hur de kan hjälpa dig här.</p>'
            ),
            new Question(
                  title: 'Försvinner aknen efter tonåren?',
                  text: '<p class="p200">Det är svårt att ge ett entydigt svar på den frågan eftersom det varierar från person till person. För vissa kan akne vara ett tonårsproblem som försvinner när de blir äldre, medan det för andra kan övergå till vuxenakne. Det är inte säkert att aknen försvinner efter tonåren, och det kan variera beroende på individuella faktorer som hormoner, genetik och livsstil.</p>

                        <p class="p200 mt-m">Akne kan uppstå i olika faser av livet och dess svårighetsgrad varierar från person till person. Vissa individer upplever akne under tonåren, som sedan försvinner när de når vuxen ålder. Andra kan vara aknefria under tonåren, men drabbas av akne som vuxna. Den mest besvärliga situationen är när någon drabbas av akne under tonåren som sedan övergår till vuxenakne.</p>

                        <p class="p200 mt-m">När man når vuxen ålder och aknen fortfarande inte har försvunnit, är det stor risk att aknen har lett till ärrbildning. Det är därför viktigt att behandla akne i alla åldrar för att förebygga och minimera risken för att drabbas av acneärr. Oavsett ålder och fas av akne, bör man söka hjälp för att behandla och kontrollera sitt tillstånd, för att minska risken för långsiktiga hudproblem som ärrbildning.</p>'
            ),
            new Question(
                  title: 'Kan jag ha akne även om jag är vuxen?',
                  text: '<p class="p200">Ja, akne kan drabba vuxna och det är faktiskt ganska vanligt. Vuxenakne drabbar cirka 12-22% av alla kvinnor och 3% av alla män. Den kan uppkomma vid 20-, 30- och 40-årsåldern, och ibland ännu senare. Det kallas då för vuxenakne och har också med hormonerna i din kropp att göra, men faktorerna som triggar igång din akne är lite annorlunda än vid tonårsakne.</p>

                        <p class="p200 mt-m">Vid tonårsakne ökar produktionen av det manliga könshormonet i din kropp. Det, i kombination med fettproduktionen, kan leda till att du drabbas av akne. Vid vuxen ålder däremot, kan aknen bero på sådant som graviditet, menstruation, alkohol, stress och preventivmedel. Alltså, yttre faktorer som triggar igång dina hormoner och får aknen att blomma upp.</p>

                       <p class="p200 mt-m">Vuxenakne kan orsakas av flera faktorer, såsom hormonella förändringar, stress, genetik och användning av olämpliga hudvårdsprodukter. Hos kvinnor kan akne ofta vara kopplad till menstruationscykeln eller hormonella förändringar i samband med graviditet och menopaus.</p>

                       <p class="p200 mt-m">Sammanfattningsvis kan akne drabba personer i alla åldrar, och det är viktigt att vara medveten om att akne inte bara är ett tonårsproblem.</p>'
            ),
            new Question(
                  title: 'Förvärras min akne av att jag äter choklad?',
                  text: '<p class="p200">Nej, det är en myt att choklad direkt skulle leda till akne. Ingen vetenskaplig forskning har tydligt påvisat ett direkt samband mellan chokladkonsumtion och uppkomsten av finnar. Det som potentiellt kan påverka din akne är stress. Om du upplever stress över att du ätit choklad, kan det i sin tur bidra till akneutbrott. Men en bit choklad då och då bör inte orsaka akneutbrott hos de flesta människor.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra för att bli av med min akne?',
                  text: '<p class="p200">Att bekämpa akne effektivt kräver en individuellt anpassad strategi som kombinerar lämpliga behandlingar och hudvårdsprodukter, utformade för att passa dina unika behov och din huds specifika tillstånd. På Acnespecialisten, erbjuder vi kostnadsfria hudkonsultationer där vi kan utvärdera ditt specifika fall av akne och hjälpa till att skräddarsy en effektiv behandlingsrutin.</p>'
            )
      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Hur många behandlingar behövs?',
                  text: '<p class="p200">Antalet behandlingar som behövs varierar från person till person och beror på flera faktorer, som din hudtyp, svårighetsgraden av din akne och din respons på behandlingen. Vanligtvis kan du se en förbättring efter 1 till 3 veckors regelbunden behandling.</p>

                       <p class="p200 mt-m">Det är viktigt att påpeka att behandlingen hos oss inte fungerar i isolering. En väsentlig del av din framgång ligger i den dagliga användningen av de rekommenderade produkterna hemma. Det är kombinationen av professionell behandling och hemmavård som ger bästa möjliga resultat.</p>

                        <p class="p200 mt-m">Om du inte upplever de förväntade förbättringarna efter en tid, uppmanar vi dig att ta kontakt med din personliga hudterapeut. Tillsammans kan vi se över dina hudvårdsrutiner och de produkter du använder, för att optimera din behandlingsplan.</p>'
            ),
            new Question(
                  title: 'Finns det en risk att min akne återkommer?',
                  text: '<p class="p200">Ja, det finns en risk att akne återkommer, eftersom akne kan påverkas av flera faktorer såsom genetik, hormoner, livsstil och hudvård. Personer med en genetisk benägenhet för akne kan uppleva att aknen återkommer, särskilt under perioder av hormonella förändringar som pubertet, graviditet eller menstruation. Även faktorer som stress, kost och användning av olämpliga hudvårdsprodukter kan bidra till att aknen återkommer.</p>
                       
                       <p class="p200 mt-m">Det är dock viktigt att komma ihåg att regelbunden och korrekt hudvård kan hålla aknen i schack. Precis som vi borstar tänderna varje dag för att hålla karies borta, behöver vi underhålla vår hud för att hålla aknen borta. Det innebär att följa en anpassad hudvårdsrutin, hantera stress och upprätthålla en hälsosam livsstil. Så länge du tar hand om din hud regelbundet och på rätt sätt, kan du förhindra att aknen återkommer.</p>'
            ),
            new Question(
                  title: 'Vilken är den bästa behandlingen mot akne?',
                  text: '<p class="p200">Vilken behandling som är bäst för akne varierar beroende på individens hudtyp, aknens svårighetsgrad och orsaker till akne. Den bästa behandlingen är en skräddarsydd behandlingsplan som kombinerar rätt behandlingar, produkter och rutiner för att effektivt ta itu med den aktiva aknen och förhindra att nya utbrott uppstår. Genom att först behandla och bli av med den aktiva aknen kan du uppnå en klarare hud. Därefter är det viktigt att bibehålla resultaten med lämpliga produkter och rutiner för att motverka att nya finnar uppstår och hålla aknen under kontroll. Det rekommenderas att konsultera en av våra specialister för att få en personlig och effektiv behandlingsplan som passar just din hud och akne.</p>'
            ),
            new Question(
                  title: 'Gör aknebehandlingen ont?',
                  text: '<p class="p200">vi strävar efter att göra aknebehandlingen så behaglig som möjligt för våra klienter. Det är sant att akne ibland innebär inflammation i porerna och kan göra ont när de öppnas upp och töms. Men vi vill påpeka att smärtupplevelsen kan variera från person till person och bero på behandlingsmetoden som används. Vår erfarna personal är välutbildad och tar stor hänsyn till din komfort under behandlingen. Om du känner någon obehag, tveka inte att informera din acnespecialist så att de kan justera behandlingen efter dina behov.</p>'
            ),
            new Question(
                  title: 'Vad ska jag tänka på innan behandlingen?',
                  text: '<p class="p200">Vi vill att din behandling ska vara så smidig och bekväm som möjligt, och vi strävar efter att göra processen enkel för dig. Du behöver inte förbereda något särskilt inför ditt besök hos oss. Kom precis som du är, och vi tar hand om resten. Vi kommer att genomföra en grundlig hudanalys och skräddarsy en behandlingsplan som passar just dig och din hudtyp. Så, du kan lita på oss och bara slappna av inför din aknebehandling.</p>'
            ),
            new Question(
                  title: 'Vad ska jag tänka på efter behandling?',
                  text: '<p class="p200">Efter din aknebehandling hos Acnespecialisten kan du uppleva att huden blir något röd och irriterad. Detta är helt normalt och en del av hudens naturliga läkningsprocess. Rödheten och irritationen kommer att avta under dagarna efter behandlingen. Det är viktigt att du fortsätter att följa den hudvårdsrutin och de produktrekommendationer vi gett dig för att stödja hudens återhämtning och maximera resultaten av behandlingen.</p>
                        
                        <p class="p200 mt-m">Undvik att peta eller klämma på behandlade områden för att undvika eventuell ärrbildning och infektion. Dessutom är det bra att skydda huden från solen, då den kan vara extra känslig efter behandling. Använd solskyddsmedel och undvik direkt solljus så mycket som möjligt. Kom ihåg att vi på Acnespecialisten alltid finns här för dig om du har några frågor eller funderingar efter din behandling.</p>'
            ),
            new Question(
                  title: 'Eftervård efter behandlingen?',
                  text: '<p class="p200">Eftervården efter en aknebehandling hos Acnespecialisten är lika viktig som själva behandlingen. När aknen är utklämd och borta är det viktigt att förebygga uppkomsten av ny akne. Om du inte följer din eftervårdsplan kommer du att få resultat, men det kommer inte vara bestående, eftersom akneproduktionen sätter igång igen kort tid efter behandlingen.</p>

                  <p class="p200 mt-m">För att hålla huden i kontroll och balans är det viktigt att följa de råd och rekommendationer vi ger dig angående hudvårdsrutin och produkter. Kontinuerlig behandling och förebyggande åtgärder är avgörande för att uppnå och bibehålla en klar och frisk hud. Kom ihåg att vi på Acnespecialisten alltid finns här för att hjälpa och stötta dig genom hela processen, både under och efter din behandling.</p>',
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till akne";

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
$skinguide_url_title = "Läs fler guider om akne";

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
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: '/problem/acnearr',
            url_title: 'Acneärr'
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="<?php echo $skinguide_url_title ?>"><?php echo $skinguide_url_label ?></a>
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
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>