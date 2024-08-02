<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Blandhy – Hudvård | AcneSpecialisten';
$seo_description = 'Här hittar du allt om blandhy och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'blandhy, , kombinerad hud, kombinerad hudtyp, torr t zon, t zon';
$seo_image = 'bilder/hudproblem/424x456/blandhy.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Blandhy', '/blandhy.php'),
);

$image_small = 'bilder/hudproblem/358x274/blandhy.webp';
$image_large = 'bilder/hudproblem/424x456/blandhy.webp';
$image_title = 'Visar en hud med blandhy';
$image_alt = 'Bild som illustrerar hur en blandhy ser ut';

$green_banner_content = new GreenBannerContent(
      title: 'Blandhy',
      description: 'Blandhy kännetecknas av en kombinerad hudtyp med både torra och oljiga områden. Blandhy innebär ofta en blandning av olika hudproblem, såsom finnar, pormaskar, torrhet och överdriven oljeproduktion. Här hittar du mer information om hur du hanterar och behandlar blandhy för att uppnå en balanserad och hälsosam hud.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Kombinerad hud',
                  url: null,
                  title: 'Kombinerad hud'
            ),
            new Link(
                  label: 'Fet hy',
                  url: 'fet-hy.php',
                  title: 'Fet hy'
            ),
            new Link(
                  label: 'Oljig hy',
                  url: 'fet-hy.php',
                  title: 'Oljig hy'
            ),
            new Link(
                  label: 'Yttorr hy',
                  url: null,
                  title: 'Yttorr hy',
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är blandhy?',
            content: '<p class="p200">Blandhy är en hudtyp som kännetecknas av att ha både torra och oljiga områden i ansiktet. Typiskt för blandhy är att T-zonen, som inkluderar panna, näsa och haka, tenderar att vara oljig medan kinderna kan vara torra eller normala. Detta medför att porerna i T-zonen ofta är förstorade, medan de kan vara mindre synliga på kinderna.</p>',

            extended_content: '<p class="p200 mt-xl">Personer med blandhy kan uppleva både glansighet i de oljigare områdena och en stram känsla i de torrare partierna. Det är också vanligt att finnar och pormaskar uppstår i de oljiga områdena.</p> 
            
            <p class="p200 mt-xl">Trots dessa varierande egenskaper hos blandhy är det viktigt att komma ihåg att varje individs hud är unik. Vissa kan ha mer uttalade oljiga områden, medan andra upplever mer torrhet. Därför bör hudvårdsrutinen anpassas individuellt för att möta varje persons unika behov och för att upprätthålla en balanserad hudhälsa.</p>',

            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man blandhy?',
            content: '<p class="p200">Blandhy beror på en kombination av genetik, hormonella svängningar och yttre miljöfaktorer. Obalansen mellan torra och oljiga områden uppstår när vissa delar av huden producerar en optimal mängd talg medan andra delar underproducerar. Denna ojämnhet kan förstärkas av genetiska anlag, där familjemedlemmar också har haft liknande hudmönster.</p>',

            extended_content: '<p class="p200 mt-xl">Hormonella förändringar, som de som inträffar under puberteten, graviditet eller menstruationscykeln, kan också spela en stor roll i uppkomsten av blandhy. Hormonförändringar kan leda till att vissa delar av huden, som T-zonen, producerar mer talg än normalt.</p>

            <p class="p200">Yttre faktorer som klimat, årstidens växlingar och luftfuktighet kan också påverka hudens talgproduktion och fuktighetsnivå. Till exempel kan kalla vintermånader leda till torra kinder samtidigt som inomhusuppvärmning kan öka oljigheten i T-zonen.</p>
            
            <p class="p200 mt-xl">Det är väsentligt att förstå de underliggande orsakerna till blandhy för att kunna anpassa en skräddarsydd hudvårdsrutin. Genom att identifiera dessa faktorer kan vi bättre adressera och balansera huden, vilket leder till en mer jämn och hälsosam hudton. Hos oss på AcneSpecialisten får du vägledning om vilka produkter och rutiner som passar bäst för att balansera din unika blandning av hudförhållanden.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat')
      ),

      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får blandhy?',
            content: '<p class="p200">Blandhy är en av de mest förekommande hudtyperna och kan drabba människor i alla åldrar, oavsett kön och etnicitet. Det är inte ovanligt att ungdomar upplever blandhy när hormoner börjar fluktuera under puberteten, vilket leder till att vissa delar av ansiktet blir oljigare medan andra förblir torra. Denna kombination av torra och oljiga områden, ofta med en oljig T-zon (panna, näsa och haka) och torra kinder, kan vara en källa till frustration för många.</p>',

            extended_content: '<p class="p200 mt-xl">Trots att blandhy ofta förknippas med tonåringar, kan den fortsätta eller till och med börja under vuxen ålder. Hormonella förändringar som uppstår under graviditet, menstruationscykeln eller klimakteriet kan också leda till uppkomst av blandhy hos vuxna kvinnor. Män kan också uppleva blandhy, särskilt om de har genetiska anlag för det.</p>
            
            <p class="p200 mt-xl">Externa faktorer som klimat, miljö och hudvårdsrutiner kan också påverka hudtypen. Personer som bor i områden med skiftande årstider kan märka att deras hud känns oljigare på sommaren och torrare på vintern. För att adressera de specifika behoven hos blandhy rekommenderar vi en individuell hudvårdsrutin som tar hänsyn till de olika zonerna i ansiktet och balanserar dem effektivt.</p>

            <p class="p200 mt-xl">Hos AcneSpecialisten erbjuder vi skräddarsydda lösningar för att hantera blandhy, så att du kan uppnå en frisk och balanserad hud. Boka en kostnadsfri konsultation med oss idag för att få en personlig hudanalys och rekommendationer som passar just din hudtyp.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man blandhy?',
            content: '<p class="p200">Blandhy kan visa sig på olika platser i ansiktet, där vissa områden känns oljigare än andra. De vanligaste zonerna för blandhy är den centrala delen av ansiktet, även känd som T-zonen, som inkluderar panna, näsa och haka. Samtidigt kan andra delar av ansiktet, som kinderna, upplevas torra eller normala.</p>',

            extended_content: '<p class="p200 mt-xl">När det gäller blandhy är ansiktets T-zon en av de mest talande indikatorerna. Den här zonen har en högre koncentration av talgkörtlar, vilket kan förklara varför den blir oljig snabbare. Kinderna, å andra sidan, kan kännas torra eftersom de har färre talgkörtlar. Detta skapar en känsla av obalans i huden, där vissa områden behöver fukt medan andra behöver kontrollera överproduktionen av talg.</p>

            <p class="p200 mt-xl">Även om blandhy främst observeras i ansiktet, kan den unika kombinationen av torra och oljiga områden förekomma var som helst på kroppen. För att tillgodose de specifika behoven hos blandhy rekommenderar vi att du konsulterar en hudterapeut för att skräddarsy en hudvårdsrutin som ger balans och välbefinnande till din hud.</p>',
            icons: array('ansikte' => 'Ansiktet')
      ),

);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Vid ditt första besök hos AcneSpecialisten bedömer en hudterapeut din hud noggrant och identifierar tecknen på blandhy.',

            url_label: 'Boka konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            url_title: 'Boka din gratis konsultation för blandhy idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Oavsett om det är oljiga fläckar, torrhet eller båda, erbjuder vi specialiserade behandlingar som tar itu med dina specifika problemområden.',

            url_label: 'Utforska behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin',
            url_title: 'Ta reda på vilka behandlingar som passar din blandhy'
      ),
      new TreatmentStep(
            title: 'Förebygg',
            content: 'För att bibehålla resultaten av behandlingarna är det viktigt med rätt hudvård hemma. Vi rekommenderar produkter speciellt anpassade för blandhy.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            url_title: 'Bläddra bland våra produkter för blandhy'
      ),

);

$treatment_link = '<a href="https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin" title="Utforska effektiv blandhybehandling" class="mt-xl button b200 outline expand auto-width">Läs mer om behandling</a>';


$symptoms_title = 'Symtom';

$symptoms = array(
      new Symptom(
            name: 'Oljig & fet hy',
            aka: 'Yttorr hy',
            content: 'Karaktäriseras av en ökad produktion av talg, vilket ger huden en ständigt glansig eller fet yta. Denna hudtyp är särskilt märkbar i T-zonen (panna, näsa, haka) men kan påverka hela ansiktet. Överflödig talg kan leda till att huden ser oljig ut och känns fet vid beröring.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/oljig-hy.webp',
            image_alt: 'Oljig & fet hy i ansiktet',
            image_title: 'Oljig & fet hy'
      ),
      new Symptom(
            name: 'Torr hy',
            aka: 'Stram hy',
            content: 'Områden av huden, ofta kinderna, känns torra och strama. Detta beror på brist på fukt, vilket gör att huden inte kan behålla sin naturliga smidighet.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/torr-hy.webp',
            image_alt: 'Torr hy i ansiktet',
            image_title: 'Torr hy'
      ),
      new Symptom(
            name: 'Känslig hy',
            aka: 'Reaktiv & röd hy',
            content: 'Huden reagerar lätt på produkter eller miljöförändringar, vilket kan leda till irritation, rodnad och ibland klåda. Känsligheten beror på en försvagad hudbarriär.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/kanslig-hy.webp',
            image_alt: 'Känslighy i ansiktet',
            image_title: 'Känslig hy'
      ),
      new Symptom(
            name: 'Pormaskar',
            aka: 'Komedoner',
            content: 'Synliga små svarta eller vita punkter, framför allt i T-zonen (panna, näsa, haka), som uppstår när talg och döda hudceller täpper till porerna.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/pormaskar.webp',
            image_alt: 'Pormaskar i ansiktet',
            image_title: 'Pormaskar'
      ),
      new Symptom(
            name: 'Finnar',
            aka: 'Akne',
            content: 'Inflammation i hudens porer, vilket resulterar i röda knottror, varfyllda finnar eller djupare cystor. Kan förekomma på grund av överproduktion av talg, bakterietillväxt eller inflammation.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/finnar.webp',
            image_alt: 'Finnar i ansiktet',
            image_title: 'Finnar'
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en hudterapeut utförs en undersökning av din blandhy. Vi tar före-bilder på din hud och rekommenderar rätt behandlingsmetod för just din hy samt tar fram en skräddarsydd behandlingsplan för just dig.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för blandhy',
      image_title: 'Konsultation för blandhy',

      url_label: 'Läs mer om gratis hudkonsultation',
      url: '/gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot blandhy',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
      consultation_url_title: 'Klicka för att boka tid för en konsultation om blandhy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot blandhy',
            duration: '60 min',
            price: '1295 kr',
            content: 'Denna skräddarsydda ansiktsrengöring för blandhy tar sikte på hudens specifika behov, särskilt de torra och oljiga partierna. Genom djup rengöring, rätt exfoliering och intensiv återfuktning ger behandlingen huden en harmoniserad känsla, förbättrad textur och en naturlig lyster.',

            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för blandhy',
            image_title: 'Ansiktsbehandling för blandhy',

            url: '/problemhy.php',
            url_label: 'Läs mer om ansiktsbehandling',
            url_title: 'Läs mer om ansiktsbehandling mot blandhy',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för blandhy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin&method=Method_FacialProblem&area=Facial_Face',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för blandhy'
      ),

      new Service(
            title: 'Kemisk peeling mot blandhy',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling anpassad för blandhy använder sig av en unik syra framtagen för att exfoliera och återfukta hudens särskilda behov. Den främjar en accelererad cellförnyelse, vilket bidrar till att balansera både oljiga och torra partier av huden.',

            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling för blandhy',
            image_title: 'Kemisk peeling för blandhy behandling',

            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot blandhy',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för blandhy',

            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin&method=Method_ChemicalPeeling&area=ChemicalPeeling_Face',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för blandhy behandling'

      ),

      new Service(
            title: 'Microneedling mot blandhy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling för blandhy adresserar hudens komplexa behov. Genom att skapa fina kanaler i huden, förbättrar behandlingen hudens förmåga att läka samt stimulerar kollagenproduktion. Denna process hjälper till att jämna ut både torra och oljiga områden, vilket förbättrar hudens yta och återställer en naturliga balans.',

            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling för blandhy',
            image_title: 'Microneedling för blandhy behandling',

            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot blandhy',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för blandhy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_CombinationSkin&method=Method_Microneedling&area=Microneedling_Face',
            booking_url_title: 'Klicka för att boka tid för en microneedling för blandhy behandling'
      ),

);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot blandhy',
            duration: null,
            price: 'Från 1495 kr',
            content: 'Att hantera blandhy kräver speciellt utvalda produkter som kan balansera huden och ta hand om både dess torra och oljiga delar. Med daglig användning av våra produkter med ansiktskrämer för blandad hy kan du uppnå en balanserad hud som både känns och ser bättre ut.',

            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av blandhy',
            image_title: 'Effektiva produkter för balansering av blandhy',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_CombinationSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot blandhy',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/blandhy',
            booking_url_title: 'Klicka för att köpa produktpaket mot blandhy',
      )
);

$articles = array(

      new Article(
            title: 'När ska jag söka hjälp med min hy?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med min blandhy?',
            image_title: 'När ska jag söka hjälp med min blandhy?',
            content: '<p class="p200">Blandhy, känd för sin kombination av torra och oljiga områden, utgör en unik utmaning och kan påverka individer i alla åldrar. Denna hudtyp kan leda till ökad känslighet, ojämn hudton och andra komplikationer som kan påverka din självkänsla och hudhälsa. Om du märker att din blandhy påverkar ditt dagliga välbefinnande eller om du inte lyckas behandla din hy själv, kan det vara dags att söka professionell hjälp. Att få en individanpassad behandlingsplan från en specialist är ett viktigt steg för att effektivt åtgärda din hud.</p>
            <p class="p200 mt-m">En hudterapeut kan erbjuda en konsultation där din hud noggrant analyseras för att identifiera de bästa behandlingsmetoderna för just dina behov. Från balanserande hudvårdsrutiner till specifika behandlingar som harmoniserar hudens olika områden, finns ett brett utbud av behandlingar för att hantera utmaningarna med blandhy. Om du strävar efter en mer enhetlig hudton och en hälsosam hudbalans, tveka inte att kontakta oss för professionell vägledning och behandling.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för min blandhy?',
            content: '<p class="p200">Med vår djupgående expertis och över tre decenniers erfarenhet inom hudvård, särskilt med fokus på blandhy och andra hudtillstånd, erbjuder vi personligt anpassade behandlingsplaner som ger resultat. Vi använder de bästa metoderna inom hudvård för att säkerställa optimala resultat för din hud. Vårt team av certifierade hudterapeuter engagerar sig för att skapa en behandlingsplan som är perfekt anpassad efter din huds unika behov. Detta kompletteras med uppföljningar och skräddarsydda hemvårdsprogram för att säkerställa en bestående förbättring av din hud.</p>
            <p class="p200 mt-m">Att välja oss innebär inte bara tillgång till framstående behandlingar för blandhy; vi blir också din partner i resan mot en balanserad och hälsosam hud. Vårt engagemang och vår expertis gör AcneSpecialisten till det optimala valet för alla som önskar hantera sin blandhy med omsorg, kunskap och effektivitet.</p>',
      ),

);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/blandhy/resultat-blandhy-fore-1.jpg',
            image_after_small: '/bilder/resultat/blandhy/resultat-blandhy-efter-1.jpg',
            image_before_large: '/bilder/resultat/blandhy/resultat-blandhy-fore-1.jpg',
            image_after_large: '/bilder/resultat/blandhy/resultat-blandhy-efter-1.jpg',
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
            image_before_small: '/bilder/resultat/blandhy/resultat-blandhy-fore-2.jpg',
            image_after_small: '/bilder/resultat/blandhy/resultat-blandhy-efter-2.jpg',
            image_before_large: '/bilder/resultat/blandhy/resultat-blandhy-fore-2.jpg',
            image_after_large: '/bilder/resultat/blandhy/resultat-blandhy-efter-2.jpg',
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
            image_before_small: '/bilder/resultat/blandhy/resultat-blandhy-fore-3.jpg',
            image_after_small: '/bilder/resultat/blandhy/resultat-blandhy-efter-3.jpg',
            image_before_large: '/bilder/resultat/blandhy/resultat-blandhy-fore-3.jpg',
            image_after_large: '/bilder/resultat/blandhy/resultat-blandhy-efter-3.jpg',
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
$results_url_title = "se flera behandlingsresultat";



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
                  text: '<p class="p200">Ja, din hudtyp kan förändras över tid beroende på flera faktorer. Åldrande är en stor faktor, eftersom huden tenderar att bli torrare med tiden. Hormonella förändringar, som de som uppstår under graviditet eller klimakteriet, kan också påverka hudtypen. Dessutom kan faktorer som klimat, användning av vissa mediciner och hur du sköter om din hud alla leda till förändringar i hudtyp över tid.</p>'
            ),
            new Question(
                  title: 'Hur påverkar årstiderna och klimatet blandhy?',
                  text: '<p class="p200">Årstider och klimat kan ha en stor inverkan på blandhy. Till exempel kan kallt och torrt vinterklimat göra att huden känns torrare, medan fuktigt och varmt sommarklimat kan öka oljeproduktionen. Det är viktigt för personer med blandhy att anpassa sin hudvårdsrutin efter årstiderna för att bäst ta hand om de varierande behoven hos deras hud.</p>'
            ),
            new Question(
                  title: 'Vad är den mest effektiva behandlingsmetoden för blandhy?',
                  text: '<p class="p200">Blandhy är unik eftersom det innebär att man har både torra och oljiga områden på huden, oftast torra kinder och en oljig T-zon (panna, näsa och haka). Den mest effektiva behandlingsmetoden är därför ofta en kombination av produkter och behandlingar. Det handlar om att använda återfukta och balansera huden effektivt för att reglera både de oljia och torra partierna.</p>'
            ),
            new Question(
                  title: 'Är det viktigt att använda en fuktkräm även på de oljiga delarna av mitt ansikte?',
                  text: '<p class="p200">Ja, det är viktigt. Många tror felaktigt att de oljiga delarna av ansiktet har ett överskott av fukt och därför inte behöver återfuktning. Men i själva verket är oljiga partier och fukt två helt olika saker. Oljan är i själva verket talg som produceras av huden för att skydda och återfukta torr hud. Därför är det viktigt att återfukta både oljiga och torra delar av huden för att reglera och reducera talgproduktionen.</p>'
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
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i blandhybehandling',
            image_title: 'Cazzandra Lindberg - Expert på blandhybehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på blandhy',
            image_title: 'Veronika Benedik - Specialist inom blandhyvård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom blandhyhantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på blandhy'
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
            aka: 'papler & pustler',
            image: 'bilder/hudproblem/200x200/akne.webp',
            image_alt: 'Bild som skildrar akne, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Akne - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'acne.php',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Pormaskar',
            aka: 'komedoner',
            image: 'bilder/hudproblem/200x200/pormaskar.webp',
            image_alt: 'Bild som visar pormaskar, en vanlig hudåkomma',
            image_title: 'Pormaskar - en vanlig hudåkomma',
            url: 'pormaskar.php',
            url_title: 'Pormaskar'
      ),
      new RelatedProblem(
            name: 'Stora porer',
            aka: 'utvidgade porer',
            image: 'bilder/hudproblem/200x200/stora-porer.webp',
            image_alt: 'Ansikte med stora porer',
            image_title: 'Stora porer',
            url: 'stora-porer.php',
            url_title: 'Utvidgade porer',
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
            url: '/varumarken/skin-tech',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för Blandhybehandling";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/blandhy.php" />

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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut"><?php echo $specialist_url_label ?></a>
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