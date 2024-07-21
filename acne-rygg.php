<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Akne på ryggen | AcneSpecialisten';
$seo_description = 'Behandla akne på rygg och axlar (även kallat backne) hos oss på AcneSpecialisten! Boka in en kostnadsfri konsultation & få en skräddarsydd behandlingsplan →';
$seo_keywords = 'akne på rygg, akne på ryggen, akne rygg, rygg akne, akne på rygg, akne på ryggen, akne rygg, akne ryggen';
$seo_image = 'bilder/hudproblem/424x456/akne-rygg.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Akne rygg', '/acne-rygg.php'),
);

$image_small = 'bilder/hudproblem/424x324/akne-rygg.webp';
$image_large = 'bilder/hudproblem/424x456/akne-rygg.webp';
$image_title = 'Effektiv Behandling av Ryggakne';
$image_alt = 'Bild som illustrerar behandling och vård av akne på ryggen';

$green_banner_content = new GreenBannerContent(
      title: 'Akne på ryggen',
      description: 'Akne på ryggen kan vara svårare att behandla på grund av dess läge, men vi har samlat den information och de resurser du behöver för att effektivt hantera detta tillstånd. Från djupgående ryggbehandlingar till hemåtgärder, utforskar vi olika behandlingar som kan hjälpa dig att bli av med utbrott och förebygga framtida problem. Upptäck hur du kan uppnå och bibehålla en ren och klar rygg, fri från akne.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Akne',
                  url: 'acne.php',
                  title: 'Allt du behöver veta om akne och deras behandling'
            ),
            new Link(
                  label: 'Vuxenakne',
                  url: 'vuxenacne.php',
                  title: 'Utforska orsaker, symptom och behandlingar av vuxenakne'
            ),
            new Link(
                  label: 'Tonårsakne',
                  url: 'tonarsacne.php',
                  title: 'Komplett guide om tonårsakne: orsaker, förebyggande och lösningar'
            ),
      ]
);


$articles = array(
      new Article(
            title: 'Hur Du Blir Fri Från Akne På Ryggen: Effektiva Behandlingar, Produkter och Tips',
            content: '<p class="p200">Akne på ryggen, även kallad “bacne,” kan vara både frustrerande och smärtsamt. Precis som ansiktsakne uppstår ryggakne när hårsäckarna täpps till av döda hudceller och talg. Bakterier växer i dessa tilltäppta hårsäckar, vilket leder till inflammation och finnar.</p>
              <p class="p200 mt-m">För att effektivt hantera och behandla akne på ryggen är det viktigt att förstå dess orsaker. Hormonella förändringar, genetik, svett och friktion från kläder är vanliga bidragande faktorer. På grund av ryggens stora yta och svåråtkomliga läge kan behandlingen vara utmanande. En kombination av daglig hudvårdsrutin och specialiserade behandlingar kan hjälpa till att minska och förebygga akne på ryggen.</p>',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
      ),
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är akne på ryggen?',
            content: '<p class="p200">Ryggakne är en hudåkomma som påminner om ansiktsakne. Det uppstår när hårsäckarna blockeras av talg och döda hudceller, vilket skapar en miljö där bakterier kan frodas. Denna blockering leder till pormaskar, finnar och inflammerade cystor. Ryggen är särskilt utsatt på grund av sin höga koncentration av talgkörtlar och stora porer. Detta gör den mer benägen att utveckla akne.</p>

            <p class="p200 mt-m">Akne på ryggen kan variera från milda utslag till grov akne på ryggen med smärtsamma cystor som kan leda till ärrbildning om de inte behandlas korrekt. Det är dock viktigt att förstå att ryggakne är ett vanligt problem och kan påverka människor i alla åldrar, särskilt tonåringar och unga vuxna som genomgår hormonella förändringar.</p>',
            extended_content: null,
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man Akne på Ryggen?',
            content: '<p class="p200">ryggakne orsakas av flera olika faktorer. En viktig faktor är överproduktion av talg, ett oljigt ämne som utsöndras av talgkörtlarna i huden. När talg blandas med döda hudceller kan det blockera porerna, vilket leder till finnar och pormaskar.</p>

            <p class="p200 mt-m">Friktion från tighta kläder, tunga ryggsäckar och olika sportsutrustningar kan också leda till akne på ryggen. Dessutom kan användning av vissa hudvårdsprodukter bidra till problem genom att förorena porerna eller irritera huden. </p>',
            extended_content: '<p class="p200 mt-xl">Hormonella förändringar, stress och överdriven rengöring är ytterligare faktorer som kan förvärra akne. Hormoner kan öka talgproduktionen, medan stress påverkar kroppens immunförsvar och inflammationsnivåer. Överdriven skrubbning kan irritera huden och leda till mer akne.</p>

            <p class="p200 mt-xl">En annan vanlig orsak är follikulär hyperkeratos, en process där överflödig keratin gör att hudens yta blir förtjockad och porerna blockeras. Bakterier, särskilt Cutibacterium acnes, trivs i dessa tilltäppta porer och kan förvärra inflammationen.</p>

            <p class="p200 mt-xl"><strong>Grundorsaker till akne på ryggen inkluderar:</strong></p>

            <ul><li class="mt-xl"><strong>Friktion och Tryck:</strong> thighta kläder, ryggsäckar eller idrottsutrustning kan orsaka finnar.</li>
            <li class="mt-xl"><strong>Genetik:</strong> Akne kan vara ärftligt.</li>
            <li class="mt-xl"><strong>Hormonella förändringar:</strong> Speciellt under tonåren eller stressiga perioder.</li></ul>',

            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat',)
      ),

      new ProblemTrivia(
            prefix: 'Orsaker',
            title: ' till Akne I Nacken och på Axlarna',
            content: '<p class="p200">Akne i nacken och på axlarna uppstår av liknande orsaker som akne på ryggen. Några av de huvudsakliga orsakerna inkluderar:</p>',
            extended_content: 

            '<ul><li class="mt-xl"><strong>Överproduktion av talg:</strong> Talget kan täppa igen porerna och leda till akne.</li>

            <li class="mt-xl"><strong>Friktion:</strong> Kläder, axelremmar och ryggsäckar kan skapa friktion och irritation som förvärrar akne.</li>

            <li class="mt-xl"><strong>Follikulär hyperkeratos:</strong> Döda hudceller kan blockera hårsäckarna och orsaka inflammation.</li>

            <li class="mt-xl"><strong>Bakterier:</strong> Bakterien cuticutem acnes kan trivas i täppta hårsäckar och utlösa akne.</li>

            <li class="mt-xl"><strong>Hormoner:</strong> Hormonförändringar under puberteten, menstruation eller vid användning av hormonella preventivmedel kan öka risken för akne.</li>

            <li class="mt-xl"><strong>Stress:</strong> Psykologisk stress kan påverka hormonbalansen och försämra akne.</li>

            <li class="mt-xl"><strong>Tajta kläder:</strong> Kläder som sitter tätt kan öka risken för friktion och svettning, vilket förvärrar akne.</li>

            <li class="mt-xl"><strong>Felaktig hudvård:</strong> Vissa hudvårdsprodukter kan irritera huden och blockera porerna.</li></ul>

            <p class="p200 mt-xl">Att förstå orsakerna kan hjälpa dig att förebygga och behandla akne i dessa områden mer effektivt. En del enkla justeringar i din dagliga rutin kan göra stor skillnad. Till exempel, undvik att bära tajta kläder under långa perioder och se till att duscha efter träning för att avlägsna svett och smuts som kan täppa till porerna.</p>',

            icons: array()
      ),


      new ProblemTrivia(
            prefix: 'Hur',
            title: ' Får Man Bort Akne På Ryggen hemma?',
            content: '<p class="p200">Att få bort akne på ryggen kan vara en utmanande process, men med rätt strategi och tålamod kan du bli av med aknen. Här kommer några konkreta tips och behandlingsmetoder som kan hjälpa dig att bli av med dessa irriterande finnar.</p>',
            extended_content: 

            '<ul><li class="mt-xl"><strong>Daglig Rengöring:</strong> En av de mest effektiva stegen för behandling av akne på ryggen är att rengöra huden regelbundet. Använd en akne-rengöring som innehåller exfolierande ingredienser som är bra på att hålla huden och porerna rena.</li>

            <li class="mt-xl"><strong>Undvik tighta Klädesplagg:</strong> Friktion från tätt åtsittande kläder kan förvärra akne på ryggen. Försök att bära löst sittande kläder i andningsbara material för att minimera hudirritation.</li>

            <li class="mt-xl"><strong>Behandlande produkter:</strong> Produkter som innehåller ingredienser som är antiinflammatoriska och bakteridödande kan vara effektiva för att behandla akne på ryggen. Applicera dessa produkter enligt anvisningarna och se till att hålla dig till en konsekvent rutin.</li>

            <li class="mt-xl"><strong>Håll Huden Hydrerad:</strong> Ibland kan torkar ut huden leda till ökad talgproduktion, vilket kan förvärra akne. Använd en oljefri fuktighetskräm för att hålla huden i balans.</li>

            <li class="mt-xl"><strong>Undvik Att Peta och pilla på Finnarna:</strong> Det kan vara frestande att klämma eller peta på akne, men detta kan leda till inflammation och ärrbildning. Låt produkterna göra sitt jobb och undvik att manipulera finnarna.</li>

            <li class="mt-xl"><strong>Konsultera med en AcneSpecialist:</strong> Om ingen av dessa metoder ger resultat, eller om du har grov akne på ryggen, är det bäst att söka professionell hjälp. Vi på AcneSpecialisten kan rekommendera behandlingar och effektiva hudvårdsprodukter.</li></ul>

            
            <p class="p200 mt-xl">Genom att följa dessa riktlinjer och vara konsekvent i din hudvårdsrutin, kan du gradvis få bort akne på ryggen och förbättra din hudhälsa.</p>',

            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Profisionella',
            title: ' Behandlingar Mot Akne På Ryggen',
            content: '<p class="p200">Vi har över 30 års erfarenhet av att behandla akne på ryggen använder vi metoder anpassade till din specifika typ av ryggakne.</p>

            <p class="p200 mt-m">Det finns flera avancerade behandlingar som kan hjälpa dig att bli av med akne på ryggen. Här är några av de mest effektiva metoderna:</p>',
            extended_content: 

            '<ul><li class="mt-xl"><strong>Grundlig portömning:</strong> En populär behandling av akne på ryggen. En hudterapeut använder verktyg för att noggrant tömma porerna på ackumulerad olja och smuts. Detta hjälper till att minska pormaskar och minskar risken för inflammation och utbrott.</li>

            <li class="mt-xl"><strong>Kemisk peeling:</strong> Denna metod involverar applicering av kemiska syror som exfolierar huden och avlägsnar döda hudceller. Behandlingen är effektiv för att minska akne på ryggen och förbättrar hudens textur. Klarare och jämnare hud är ett av resultaten.</li>

            <li class="mt-xl"><strong>Microneedling:</strong> En teknik där små nålar punkterar huden för att stimulera kollagenproduktionen. Detta kan hjälpa till att läka akneärr och reducera förekomsten av grov akne på ryggen. Dessutom kan det förbättra hudens elasticitet och struktur.</li>

            <li class="mt-xl"><strong>Laser:</strong> Användningen av laserljus penetrerar huden och riktar sig mot akne orsakad av överdriven talgproduktion. Denna behandling dödar bakterier och minskar inflammation, vilket gör det till en effektiv lösning för att få bort akne på ryggen. Resultatet är en renare och friskare hud.</li></ul>',
            icons: array()
      ),


      new ProblemTrivia(
            prefix: 'Produkter',
            title: ' mot rygg-akne',
            content: '<p class="p200">En av nycklarna till en framgångsrik behandling av akne på ryggen är att använda rätt produkter. Produkter som hjälper till att exfoliera huden och reducera porer är mycket effektiva. En annan viktig egenskap i de bästa produkterna är antibakteriella egenskaper, vilket kan vara skonsammare för huden.</p>

            <p class="p200 mt-m">DSe till att produkterna du skall behandla med har följande egenskaper:</p>

            <ul><li class="mt-xl">Förebygger framtida utbrott</li>

            <li class="mt-xl">Behandlar existerande akne</li>

            <li class="mt-xl">Reducerar inflammation och rodnad</li>

            <li class="mt-xl">Reparerar huden och främjar läkning</li></ul>',
            extended_content: 

            '<p class="p200 mt-xl">För att få bort akne på ryggen bör du överväga produkter som specifikt riktar sig mot ryggakne. Dessa produkter finns ofta i form av serum, krämer eller rengöringsprodukter som kan hjälpa till att exfoliera och behandla huden djupt. Daglig användning av dessa kan bidra till att minimera och förebygga utbrott.</p>

            <p class="p200 mt-xl">Om du har problem med akne på axlar eller i nacken kan samma typer av produkter användas på dessa områden. Att hålla huden ren och återfuktad är centralt, och produkter som är speciellt utformade för att behandla och förebygga akne kan vara en viktig del av din dagliga hudvårdsrutin.</p>',
            icons: array()
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Få en personlig hudterapeut som analyserar din hud och skapar en skräddarsydd behandlingsplan för just dina behov.',
            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Våra grundliga ansiktsbehandlingar är anpassade för din aknetyp för att effektivt behandla och lindra dina hudproblem.',
            url_label: 'Se behandlingar',
            url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
            url_title: 'Utforska våra skräddarsydda aknebehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Genom en anpassad hudvårdsrutin och rätt produkter kan vi effektivt förebygga akneutbrott och balansera din hud.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            url_title: 'Hitta de bästa produkterna för att förebygga akne'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'Vi behandlar akneärr med metoder som hjälper till att reparera huden, så att du blir av med ärr och får en jämnare hudton.',
            url_label: 'Se ärrbehandlingar',
            url: 'behandla-acnearr.php',
            url_title: 'Upptäck effektiva behandlingar för ärr från akne'
      ),
);

$treatment_link = '<a href="acnebehandling.php" title="Utforska effektiva behandlingar mot akne" class="mt-xl button b200 outline expand auto-width">Läs mer om behandling av akne på ryggen</a>';

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en acnespecialist undersöks din akne noggrant. Vi tar bilder och rekommenderar en skräddarsydd behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Kvinna får konsultation för akne',
      image_title: 'Konsultation för aknebehandling',

      url_label: 'Läs mer om hudkonsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Boka tid för hudkonsultation',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot akne',
            duration: '60 min',
            price: '1295 kr',
            content: 'En effektiv behandling som noggrant extraherar orenheter, förebygger ärrbildning och främjar snabb läkning.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Kvinna som får en ansiktsbehandling',
            image_title: 'Ansiktsbehandling för att behandla akne',

            url_label: 'Läs mer om ansiktsbehandling',
            url: '/hudbehandlingar/ansiktsbehandling/akne/',
            url_title: 'Läs mer om ansiktsbehandling mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            consultation_url_title: 'Boka en konsultation för ansiktsbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Acne',
            booking_url_title: 'Boka tid för ansiktsbehandling mot akne',
      ),
      new Service(
            title: 'Laser mot akne',
            duration: '50 min',
            price: '2595 kr',
            content: 'Avancerad laserbehandling som effektivt bekämpar aktiv akne genom att rikta sig mot akneorsakande bakterier och minska talgproduktionen.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Kvinna som får en laserbehandling',
            image_title: 'Laserbehandling för att minska akne',

            url_label: 'Läs mer om laser',
            url: 'laser-acne.php',
            url_title: 'Läs mer om laser mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Boka en konsultation för laserbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne',
            booking_url_title: 'Boka tid för laserbehandling mot akne',
      ),
      new Service(
            title: 'Kemisk peeling mot akne',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling använder en speciell syra för att exfoliera huden, rensa porer och minska inflammation.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Man som får kemisk peeling',
            image_title: 'Kemisk peeling för att behandla akne',

            url_label: 'Läs mer om kemisk peeling',
            url: 'kemisk-peeling-acne.php',
            url_title: 'Läs mer om kemisk peeling mot akne',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Boka en konsultation för kemisk peeling mot akne',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Acne',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka tid för kemisk peeling mot akne',
      ),

      new Service(
            title: 'Microneedling mot akne',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling skapar små kanaler i huden för att främja läkning och kollagenproduktion, behandla akneutbrott och minska akneärr.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Kvinna som får microneedling behandling',
            image_title: 'Microneedling för att behandla akne',

            url_label: 'Läs mer om microneedling',
            url: 'microneedling-acne.php',
            url_title: 'Läs mer om microneedling mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Boka en konsultation för microneedling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Acne',
            booking_url_title: 'Boka tid för microneedling mot akne',
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot akne',
            duration: null,
            price: 'Från 1395 kr',
            content: 'Daglig behandling med rätt produkter är avgörande för att bekämpa och förebygga akne. Våra produkter är speciellt utformade för att hålla huden i balans och förhindra nya utbrott.',

            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Produkter för behandling av akne',
            image_title: 'Effektiva produkter för att bekämpa och förebygga akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            consultation_url_title: 'Boka konsultation för hudvårdsprodukter mot akne',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            booking_url_title: 'Köp produktpaket mot akne',
      )
);

$headline04 = "04. Reparera";

$procedures = array(
      new Service(
            title: 'Reparera acneärr',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Acneärr visar sig som gropar och fläckar på huden. Vi erbjuder olika metoder för att behandla dessa ärr och återställa hudens utseende.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Kvinna som får behandling för acneärr',
            image_title: 'Behandling för att reparera acneärr',

            url_label: 'Läs mer om behandling',
            url: 'behandla-acnearr.php',
            url_title: 'Läs mer om behandling mot acneärr',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            consultation_url_title: 'Boka konsultation för behandling av acneärr',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_AcneScars',
            booking_url_title: 'Boka behandling mot acneärr',
      ),
);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-1.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-1.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-1.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-1.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-2.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-2.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-2.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-2.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-3.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-3.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-3.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-3.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-4.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-4.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-4.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-4.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-5.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-5.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-5.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-5.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-6.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-6.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-6.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-6.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-7.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-7.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-7.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-7.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-8.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-8.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-8.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-8.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-9.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-9.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-9.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-9.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-10.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-10.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-10.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-10.jpg',
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat";


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
$skinguide_url_title = "Läs fler guider";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg hudterapeut',
            image_title: 'Cazzandra Lindberg - Hudterapeut'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik hudterapeut',
            image_title: 'Veronika Benedik - Hudterapeut'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul hudterapeut',
            image_title: 'Amira Maqboul - Hudterapeut'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom hudterapeut',
            image_title: 'Vilma Libom - Hudterapeut'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'bilder/hudproblem/200x200/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (akne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
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
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/acne-rygg.php" />

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

                        <section id="articles">
                                 <?php foreach ($articles as $article) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                              <?php } ?>
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
                        <!--Hudguide-->
                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Våra hudterapeuter</h2>
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
                              <a href="varumarken" title="<?php echo $brands_url_title ?>" class="button compact text is-hidden-mobile">
                                    <span class="l10n"><?php echo $brands_url_label ?></span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>