<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Få bort finnar på ryggen och axlarna | AcneSpecialisten';
$seo_description = 'Utforska orsaker och skräddarsydda behandlingar för finnar på rygg och axlar hos AcneSpecialisten. Boka en gratis hudkonsultation →';
$seo_keywords = 'finnar på axlarna, finnar axlar, få bort finnar på ryggen, finnar rygg, hur får man bort finnar på ryggen, behandla finnar på ryggen, finnar på ryggen';
$seo_image = 'bilder/hudproblem/424x456/finnar-rygg.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Finnar Rygg', '/finnar-rygg.php'),
);

$image_small = 'bilder/hudproblem/424x324/finnar-rygg.webp';
$image_large = 'bilder/hudproblem/424x456/finnar-rygg.webp';
$image_title = 'Visar en hud med finnar på ryggen';
$image_alt = 'Bild som visar hudproblem med finnar på ryggen';

$green_banner_content = new GreenBannerContent(
      title: 'Finnar på ryggen',
      description: 'Denna sektion utforskar finnar på axlarna och ryggen, de vanligaste orsakerna som hormonella förändringar och stress, samt AcneSpecialistens specialanpassade behandlingsmetoder kan hjälpa dig att få bort finnar på ryggen. Vi delar också med oss av individuellt anpassade hudvårdsråd för alla åldersgrupper.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Finnar',
                  url: 'finnar.php',
                  title: 'Allt du behöver veta om finnar och deras behandling'
            ),
            new Link(
                  label: 'Vuxenfinnar',
                  url: 'vuxenacne.php',
                  title: 'Utforska orsaker, symptom och behandlingar av vuxenfinnar'
            ),
            new Link(
                  label: 'Tonårsfinnar',
                  url: 'tonarsacne.php',
                  title: 'Komplett guide om tonårsfinnar: orsaker, förebyggande och lösningar'
            ),
      ]
);

$floating_box = 'Behandla dina finnar på ryggen effektivt.';

$about_title = 'Bli Av Med Finnar På Ryggen: Effektiva tips, produkter Och Behandlingar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man finnar på just ryggen?',
            content: '<p class="p200">Akne kan drabba olika delar av kroppen, men ryggen är särskilt utsatt av flera skäl. För det första har ryggen en hög koncentration av talgkörtlar, vilket kan leda till överskott av olja som täpper till porerna. Dessutom är det svårt att nå och rengöra ryggen ordentligt, vilket kan leda till ansamling av döda hudceller och bakterier.</p>',

            extended_content: '<p class="p200 mt-xl">Faktorer som stramande kläder, särskilt när du svettas mycket, kan också spela in. Träningskläder och andra tättsittande plagg kan gnugga mot huden, vilket irriterar den och gör att bakterier enklare kan komma in i porerna. Detta skapar en perfekt miljö för akneutbrott.</p>

            <p class="p200 mt-xl">Om du upplever mycket stress eller hormonella förändringar kan det också förvärra situationen. Stress kan öka kroppens produktion av hormoner som kortisol, vilket i sin tur kan leda till ökad talgproduktion.</p>

            <p class="p200 mt-xl">Akne på ryggen är resultatet av en kombination av hormonella, hygieniska och yttre faktorer som skapar en gynnsam miljö för finnar att bildas.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Vanliga',
            title: ' Orsaker Till Finnar På Ryggen',
            content: '<p class="p200">Finnar på ryggen är ett vanligt problem som kan drabba dig som tjej eller kille. Det finns flera olika orsaker till varför ryggakne uppstår. Här är några av de vanligaste orsakerna:</p>',

            extended_content: '<ul><li class="mt-xl"><strong>Svett:</strong> Ökad svettproduktion, ofta i samband med träning eller varma kläder, kan täppa igen porerna och leda till finnar.</li>

            <li class="mt-xl"><strong>Hormonella faktorer:</strong> Obalanser i hormonnivåerna, såsom höga testosteronnivåer, graviditet och pubertet, kan stimulera talgproduktionen och utlösa akne.</li>

            <li class="mt-xl"><strong>Hudvårdsprodukter:</strong> Kemikalier från schampo, balsam och andra hårprodukter kan täppa till porerna på ryggen, särskilt om du har långt hår.</li>

            <li class="mt-xl"><strong>Träningsvanor:</strong> Användning av tunga skyddsutrustningar som hos hockeyspelare kan öka friktionen och svettproduktionen, vilket i sin tur kan leda till akne.</li>

            <li class="mt-xl"><strong>Obalans i huden:</strong> Överdriven tvätt kan störa hudens naturliga talgproduktion och orsaka finnar.</li>

            <li class="mt-xl"><strong>Anabola steroider:</strong> Användning av steroider kan leda till ökade testosteronnivåer, vilket i sin tur kan utlösa akne.</li>

            <li class="mt-xl"><strong>Stress:</strong> Emotionella problem och stress kan förvärra akneutbrott.</li>

            <li class="mt-xl"><strong>Bakterieflora:</strong> Annan bakterieflora på ryggen och immunförsvarets respons kan också spela en roll.</li>

            <li class="mt-xl"><strong>Preventivmedel:</strong> Vissa hormonella preventivmedel, som kombinerade p-piller, kan faktiskt hjälpa till att balansera hormonella obalanser som leder till akne. Men för vissa kan preventivmedel förvärra situationen. Om du misstänker att ditt preventivmedel påverkar din hud, rådgör med din läkare för att hitta en bättre lösning.</li></ul>

            <p class="p200 mt-xl">Om du lider av finnar på ryggen, är det viktigt att tänka på flera olika aspekter av din livsstil och behandlingsmetoder för att effektivt hantera problemet. Många misslyckas med behandlingen av sin akne, även om endast 15% söker professionell hjälp.</p>

             <p class="p200 mt-m">Att förstå de olika orsakerna kan vara ett viktigt steg mot att hitta rätt behandlingsmetoder för att eliminera dina finnar.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Tidiga',
            title: ' finnar under graviditeten',
            content: '<p class="p200">Det är inte ovanligt att kvinnor märker finnar tidigt i graviditeten. Hormonnivåerna börjar förändras snabbt efter befruktningen, vilket kan leda till att finnar uppstår redan innan andra graviditetssymtom blir uppenbara. Dessa finnar kan vara en första indikation på graviditet för vissa kvinnor.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Finnar',
            title: ' och kön på barnet',
            content: '<p class="p200">En populär myt är att finnar under graviditeten kan indikera barnets kön. Det finns ingen vetenskaplig grund för detta, men det är en vanlig diskussionspunkt. Oavsett barnets kön är det viktigt att hantera finnarna med rätt hudvårdsrutin.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Vanliga',
            title: ' Orsaker Till Finnar På Ryggen',
            content: '<p class="p200">Graviditetshormoner kan orsaka finnar på olika delar av kroppen:</p>

            <ul><li class="mt-m"><strong>Hakan och käklinjen:</strong> Hormoner kan stimulera talgkörtlarna, vilket leder till finnar på dessa områden.</li>

            <li class="mt-m"><strong>Ryggen och bröstet:</strong> Ökad talgproduktion kan även leda till finnar på ryggen och bröstet.</li>

            <li class="mt-m"><strong>Runt munnen:</strong> Detta område påverkas ofta av hormonförändringar.</li>

            <li class="mt-m"><strong>Magen:</strong> Även om det är mindre vanligt, kan vissa kvinnor få finnar på magen under graviditeten.</li>

            <li class="mt-m"><strong>Halsen och pannan:</strong> Dessa områden kan bli mer utsatta på grund av ökad talgproduktion.</li>

            <li class="mt-m"><strong>Rumpan:</strong> Inte ovanligt under graviditeten, ofta på grund av svett och friktion från kläder.</li></ul>',
            icons: array()
      ),
       new ProblemTrivia(
            prefix: 'Finnar',
            title: ' efter förlossning',
            content: '<p class="p200">Finnar kan kvarstå eller till och med bli värre efter förlossningen när hormonnivåerna återgår till det normala. Finnar efter graviditet är vanligt när kroppen anpassar sig efter att ha burit ett barn. En stadig hudvårdsrutin kan hjälpa till att hantera detta.</p>',
            icons: array()
      ),
       new ProblemTrivia(
            prefix: 'Behandling',
            title: ' av graviditetsrelaterade finnar',
            content: '<p class="p200">Att hantera finnar under graviditeten kräver försiktighet eftersom många vanliga aknebehandlingar bör undvikas. Här är några rekommendationer:</p>

            <p class="p200 mt-xl"><strong>Rekommenderade behandlingar under graviditeten:</strong></p>

             <ul><li class="mt-xl"><strong>Hudvårdsprodukter:</strong> Använd milda, icke-komedogena rengöringar och oljefria fuktkrämer för att hålla huden ren och återfuktad utan irritation.</li>

            <li class="mt-xl"><strong>Ansiktsbehandlingar:</strong> Professionella behandlingar som portömningar kan hjälpa till att minska finnar genom att rengöra porerna på djupet och underhålla huden.</li></ul>

            <p class="p200 mt-xl"><strong>Behandlingar att undvika under graviditeten:</strong></p>

            <ul><li class="mt-xl"><strong>Laser:</strong> Undvik laserbehandlingar då de kan vara skadliga för både dig och barnet.</li>

            <li class="mt-xl"><strong>Kemisk peeling:</strong> Starka kemiska peels kan penetrera huden och vara skadliga under graviditeten.</li>

            <li class="mt-xl"><strong>Microneedling:</strong> Mikronålsbehandlingar bör undvikas eftersom de kan orsaka oönskade effekter på huden och kroppen.</li></ul>

            <p class="p200 mt-xl">Finnar under graviditeten är en vanlig utmaning som många kvinnor möter. Genom att förstå orsakerna och följa lämpliga hudvårdsrutiner kan du effektivt hantera finnar och hålla din hud så klar och hälsosam som möjligt. Om du har svåra problem med akne under graviditeten, tveka inte att söka professionell hjälp genom att boka en kostnadsfri hudkonsultation hos oss på AcneSpecialisten</p>',
            icons: array()
      ),
);



$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'I en personlig konsultation hos AcneSpecialisten kartlägger vi de unika dragen hos dina finnar på både axlarna och ryggen, samt tar fram en behandlingsplan skräddarsydd för dig.',
            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder målinriktade behandlingar för finnar på ryggen, skräddarsydda för att effektivt hantera ditt hudtillstånd. Vårt utbud av behandlingsalternativ är anpassat till din huds unika behov och kondition.',
            url_label: 'Se fbehandlingar',
            url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
            url_title: 'Utforska våra specialanpassade finnarbehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi erbjuder skräddarsydda hudvårdsprodukter och rutiner för att effektivt förebygga framtida utbrott av finnar på ryggen. Dessa produkter är utvecklade för att bevara en sund hudbalans och förhindra nya finnar.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            url_title: 'Hitta de bästa produkterna för att förebygga finnar på ryggen'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'För att återställa huden efter finnar på ryggen och axlarna erbjuder vi behandlingar som minskar ärr och förbättrar hudtexturen.',
            url_label: 'Se behandlingar',
            url: 'behandla-finnar-arr.php',
            url_title: 'Upptäck effektiva behandlingar för ärr från finnar på ryggen'
      ),
);

$treatment_link = '<a href="finnar-behandling.php" title="Utforska effektiva behandlingar mot finnar på ryggen" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Varför uppstår hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Finnar på ryggen kan ofta uppstå genom en samverkan av flera faktorer, inklusive hormonella förändringar som ökar talgproduktionen och leder till tilltäppta porer. En annan betydande bidragande faktor är stress, som kan förvärra hudens tillstånd. Dessutom kan friktion från kläder och sportutrustning, som till exempel skydd vid hockey, skapa ett miljö som främjar utvecklingen av finnar genom ökad svettning och irritation av huden. Även om finnar främst uppträder på ryggen, är det inte ovanligt att de också dyker upp på andra kroppsområden som bröstet. På AcneSpecialisten betonar vi vikten av att förstå din specifika hudtyp och dess behov för att kunna erbjuda de mest effektiva behandlingsalternativen för finnar på ryggen.</p>
            <p class="p200 mt-m">För att effektivt hantera finnar på ryggen är det viktigt att anpassa hudvårdsrutinen till de särskilda utmaningarna som denna typ av finnar innebär. Det är viktigt att välja hudvårdsprodukter som är både skonsamma och effektiva, för att minska irritation och samtidigt upprätthålla hudens naturliga balans. Hos AcneSpecialisten är våra erfarna hudterapeuter redo att ge dig personliga råd och rekommendationer för att skapa en hudvårdsrutin som främjar en hälsosam och balanserad hud, och tar hänsyn till de unika förhållanden som finnar på ryggen kräver.</p>',
      ),
);

$articles = array(
      new Article(
            title: 'Tecken på att det är dags att söka hjälp',
            image_small: null,
            image_large: null,
            image_alt: 'Tecken på att det är dags att söka hjälp för finnar på ryggen',
            image_title: 'Tecken på att det är dags att söka hjälp för finnar på ryggen',
            content: '<p class="p200">Finnar på ryggen kan vara mer än ett estetiskt bekymmer - de kan också vara en källa till både fysiskt och emotionellt obehag. Om dina finnar är ihållande eller förvärras, kan det vara dags att söka professionell hjälp. Tidig behandling är central för att förebygga ärrbildning och andra bestående effekter på huden. Genom att söka professionell rådgivning får du inte bara hjälp med att behandla nuvarande utbrott, utan även värdefulla insikter i förebyggande metoder och anpassade hudvårdsrutiner.</p>',
      ),

      new Article(
            title: 'Anledningar att välja AcneSpecialisten',
            image_small: null,
            image_large: null,
            image_alt: 'Anledningar att välja AcneSpecialisten för behandling av finnar på ryggen',
            image_title: 'Anledningar att välja AcneSpecialisten för behandling av finnar på ryggen',
            content: '<p class="p200">Vi på AcneSpecialisten utformar individuellt anpassade behandlingsplaner för varje kund. Vår målsättning är inte bara att lindra dina aktuella hudproblem, utan även att ge dig kunskapen att upprätthålla en hälsosam hud över tid. Vårt engagemang och expertis gör oss till det självklara valet för dem som söker långsiktiga lösningar på finnar på ryggen, och vi strävar efter att du ska känna dig trygg och tillfreds med din hudvård.</p>',
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



$faq_categories = array(
      'Generella frågor' => array(
            new Question(
                  title: 'Är alla konsultationer kostnadsfria på AcneSpecialisten?',
                  text: 'Ja, vi erbjuder alltid kostnadsfria konsultationer för våra kunder, förutsatt att de närvarar vid den bokade tiden.'
            ),
            new Question(
                  title: 'Vad kan jag förvänta mig under en konsultation hos AcneSpecialisten?',
                  text: 'Under konsultationen kommer en av våra hudterapeuter att noggrant analysera din hudtyp och diskutera dina hudproblem. Vi kommer även att gå igenom din nuvarande hudvårdsrutin och ge personliga rekommendationer för behandlingar och produkter som bäst passar dina behov.'
            ),
      ),
      'Frågor om behandling' => array(
            new Question(
                  title: 'Vilka behandlingar erbjuder AcneSpecialisten för olika hudproblem?',
                  text: 'På AcneSpecialisten erbjuder vi ett brett utbud av behandlingar anpassade för specifika hudproblem, inklusive avancerad acnebehandling, skonsam rosaceabehandling och noggrann portömning, samt andra specialbehandlingar för olika hudtillstånd.'
            ),
            new Question(
                  title: 'Anpassar ni behandlingarna för olika hudtyper?',
                  text: 'Absolut, på AcneSpecialisten anpassar vi våra behandlingar för att passa en mängd olika hudtyper, från mycket känslig till oljig hy, för att säkerställa den mest effektiva och skonsamma behandlingen.'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor";

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
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/finnar-rygg.php" />

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

                        <?php foreach ($top_articles as $id => $article) { ?>
                              <section id="<?php echo $id ?>">
                                    <?php
                                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                                    ?>
                              </section>
                        <?php } ?>

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