<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Akne på bröstet | AcneSpecialisten';
$seo_description = 'Behandla akne på bröstet hos oss på Acnespecialisten! Vi tar fram en behandlingsplan som utgår från dina problem. Börja med en kostnadsfri konsultation →';
$seo_keywords = 'akne på bröstet, akne på bröstkorgen';
$seo_image = 'bilder/hudproblem/424x456/akne-brost.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Akne bröst', '/acne-brost.php'),
);

$image_small = 'bilder/hudproblem/358x274/akne-brost.webp';
$image_large = 'bilder/hudproblem/424x456/akne-brost.webp';
$image_title = 'Effektiv behandling av bröstakne';
$image_alt = 'Bild som visar behandling och vård av akne på bröstet';

$green_banner_content = new GreenBannerContent(
      title: 'Akne på bröstet',
      description: 'Akne på bröstkorgen, ofta kallad bröstakne, är ett vanligt hudproblem som kan drabba personer i alla åldrar och kön. Denna typ av akne kan visa sig som pormaskar, finnar, cystor och noduler på bröstet och kan vara både besvärande och obekväma. Vanliga orsaker till akne på bröstet inkluderar hormonella förändringar, ökad talgproduktion, tilltäppta porer samt yttre faktorer som stress, svett och kläder som inte andas.
',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
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

$about_title = 'Orsaker, symptom och effektiva behandlingar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är akne på bröstet',
            content: '<p class="p200">Akne på bröstet är en hudåkomma som drabbar många och kan vara lika påfrestande som akne i ansiktet. Det yttrar sig vanligtvis som finnar och pormaskar på bröstområdet, vilket kan vara både smärtsamt och estetiskt besvärande. Ibland kan akne på bröstet även leda till ärrbildning om det inte behandlas korrekt.</p>',

            extended_content: '<p class="p200 mt-xl">Dessutom kan denna form av akne variera i svårighetsgrad från milda utbrott till mer inflammerade och infekterade finnar. Precis som med akne i ansiktet, kan faktorer som hormonella förändringar, genetisk anlag och externa triggers spela en roll i dess uppkomst.</p>

            <p class="p200 mt-xl">Det är viktigt att notera att akne på bröstet inte enbart drabbar tonåringar under puberteten, utan även vuxna kan uppleva problem med detta. Oavsett ålder, kan det vara en källa till obehag och självtvivel. Men med rätt kunskap och behandlingsstrategier, är det möjligt att hantera och minska <a class="b200 underline color-deep-sea-400" href="/finnar-brost.php" title="Mer information om finnar mellan brösten">finnar mellan brösten</a>eller på bröstet effektivt.</p>',

            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man akne på bröstet?',
            content: '<p class="p200">Akne på bröstet kan drabba vem som helst och det finns flera faktorer som kan bidra till dess uppkomst. En av de vanligaste orsakerna är hormonella förändringar. Dessa förändringar kan ibland leda till en ökning av mängden talg (olja) som produceras i huden, vilket i sin tur kan täppa till porerna och skapa en miljö där bakterier trivs.',

            extended_content: '<p class="p200 mt-xl">Ett annat skäl kan vara genetiska faktorer. Om dina föräldrar eller nära släktingar har haft problem med akne, finns det en risk att du också kan drabbas. Dessutom kan stress och dålig kost spela en roll i utvecklingen av akne. Stress kan påverka kroppens hormonbalans negativt medan en kost rik på fett och socker kan bidra till inflammation.</p>

            <p class="p200 mt-xl">Intensiv fysisk aktivitet kan också orsaka akne på bröstet. När du svettas mycket under träning, blandas svetten med olja och smuts på huden och kan täppa igen porerna. Täta och svettiga kläder kan också förvärra tillståndet.</p>

            <p class="p200 mt-xl">Slutligen kan användning av vissa kosmetiska produkter och mediciner orsaka akne. Vissa kroppslotioner, krämer och mediciner kan innehålla ingredienser som täpper till porerna och leder till akneutbrott.</p>',


            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat', 'graviditet' => 'Graviditet')
      ),
      new ProblemTrivia(
            prefix: 'Hur',
            title: ' behandlar man akne på bröstkorgen?',
            content: '<p class="p200">För att effektivt behandla akne på bröstet kan du överväga att besöka en hudterapeut. De kan på ett professionellt sätt klämma ut alla inflammationer, vilket minskar risken för ärrbildning. Utöver detta finns avancerade behandlingar såsom kemisk peeling, microneedling och laser, som kan ge snabba och synbara resultat.</p>',

            extended_content: '<p class="p200 mt-xl">Det är också avgörande att förebygga ny akne genom rätt hudvårdsrutiner. Regelbunden rengöring, användning av produkter anpassade för aknebenägen hud samt undvikande av irriterande ämnen kan göra en stor skillnad. Att ha en välbalanserad kost, hålla stressen nere och motionera regelbundet bidrar också till en bättre hudhälsa.</p>

            <p class="p200 mt-xl">Hos AcneSpecialisten erbjuder vi en kostnadsfri konsultation för att identifiera din hudtyp och akneproblem. Vi tar fram en skräddarsydd behandlingsplan som kan inkludera topikala aknebehandlingar med exfolierande och förebyggande ingredienser, samt professionella behandlingar. En personlig hudvårdsrutin hjälper till att hålla aknen borta på lång sikt. Med rätt vård och behandlingar kan akne på bröstet hanteras effektivt, vilket leder till en klarare och friskare hud. Boka en konsultation hos oss för att få hjälp med att skräddarsy din behandlingsplan.</p>',
            icons: array()
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Få en personlig hudterapeut som analyserar din hud och skapar en skräddarsydd behandlingsplan för just dina behov.',
            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Våra grundliga ansiktsbehandlingar är anpassade för din aknetyp för att effektivt behandla och lindra dina hudproblem.',
            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
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
            url_title: 'Upptäck effektiva behandlingar mot akneärr'
      ),
);

$treatment_link = '<a href="acnebehandling.php" title="Utforska effektiva behandlingar mot akne på bröstet" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';


$treatment_link = '<a href="acnebehandling.php" title="Utforska effektiva behandlingar mot akne" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en acnespecialist undersöks din akne noggrant. Vi tar bilder och rekommenderar en skräddarsydd behandlingsplan anpassad efter dina behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Kvinna får konsultation för akne',
      image_title: 'Konsultation för aknebehandling',

      url_label: 'Läs mer om hudkonsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
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

            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Kvinna som får en ansiktsbehandling',
            image_title: 'Ansiktsbehandling för att behandla akne',

            url_label: 'Läs mer om ansiktsbehandling',
            url: '/hudbehandlingar/ansiktsbehandling/akne/',
            url_title: 'Läs mer om ansiktsbehandling mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
            consultation_url_title: 'Boka en konsultation för ansiktsbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Acne',
            booking_url_title: 'Boka tid för ansiktsbehandling mot akne',
      ),
      new Service(
            title: 'Laser mot akne',
            duration: '50 min',
            price: '2595 kr',
            content: 'Avancerad laserbehandling som effektivt bekämpar aktiv akne genom att rikta sig mot akneorsakande bakterier och minska talgproduktionen.',

            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Kvinna som får en laserbehandling',
            image_title: 'Laserbehandling för att minska akne',

            url_label: 'Läs mer om laser',
            url: 'laser-acne.php',
            url_title: 'Läs mer om laser mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
            consultation_url_title: 'Boka en konsultation för laserbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Acne',
            booking_url_title: 'Boka tid för laserbehandling mot akne',
      ),
      new Service(
            title: 'Kemisk peeling mot akne',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling använder en speciell syra för att exfoliera huden, rensa porer och minska inflammation.',

            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Man som får kemisk peeling',
            image_title: 'Kemisk peeling för att behandla akne',

            url_label: 'Läs mer om kemisk peeling',
            url: 'kemisk-peeling-acne.php',
            url_title: 'Läs mer om kemisk peeling mot akne',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Boka en konsultation för kemisk peeling mot akne',

            booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_Acne',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Boka tid för kemisk peeling mot akne',
      ),

      new Service(
            title: 'Microneedling mot akne',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling skapar små kanaler i huden för att främja läkning och kollagenproduktion, behandla akneutbrott och minska akneärr.',

            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Kvinna som får microneedling behandling',
            image_title: 'Microneedling för att behandla akne',

            url_label: 'Läs mer om microneedling',
            url: 'microneedling-acne.php',
            url_title: 'Läs mer om microneedling mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Microneedling',
            consultation_url_title: 'Boka en konsultation för microneedling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=Problem_Acne',
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

            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Produkter för behandling av akne',
            image_title: 'Effektiva produkter för att bekämpa och förebygga akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
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

            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Kvinna som får behandling för acneärr',
            image_title: 'Behandling för att reparera acneärr',

            url_label: 'Läs mer om behandling',
            url: 'behandla-acnearr.php',
            url_title: 'Läs mer om behandling mot acneärr',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
            consultation_url_title: 'Boka konsultation för behandling av acneärr',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=dermapen&skipable_problem=Problem_AcneScars',
            booking_url_title: 'Boka behandling mot acneärr',
      ),
);

$description_title = 'Vad är akne på bröstet?';
$description_text = '<p class="p200">Akne på bröstet är en hudåkomma som kan drabba individer i alla åldrar, men är särskilt vanlig under tonåren och unga vuxna år. Detta tillstånd kännetecknas av utbrott av finnar, pormaskar och i vissa fall djupare cystor och noduler, som uppkommer på huden över bröstkorgen. Precis som med annan akne, beror akne på bröstet på en kombination av överproduktion av talg, tilltäppning av hårfolliklar med döda hudceller, och förekomsten av acneframkallande bakterier. Behandlingen av akne på bröstet varierar beroende på dess svårighetsgrad och inkluderar hudvårdsprodukter och behandlingar som behandlar och balanserar huden. En viktig komponent är att undvika att pilla eller klämma på utslagen för att förebygga ärrbildning och inflammation.</p>
<p class="p200 mt-m">Problemet kan uppstå oavsett ålder eller kön, så det spelar ingen roll om det är en tjej eller kille, kvinna eller man, alla kan drabbas. Sammanfattningsvis är akne på bröstet ett vanligt men hanterbart hudtillstånd. Med rätt hudvård och behandlingar kan individer effektivt minska utbrott och upprätthålla en klarare och friskare hud på bröstet.</p>';



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

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg hudterapeut',
            image_title: 'Cazzandra Lindberg - Hudterapeut'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik hudterapeut',
            image_title: 'Veronika Benedik - Hudterapeut'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul hudterapeut',
            image_title: 'Amira Maqboul - Hudterapeut'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom hudterapeut',
            image_title: 'Vilma Libom - Hudterapeut'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & fläckar',
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
            url: '/varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/acne-brost.php" />

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

                        <section id="define">
                              <h2 class="h500 l10n"><?php echo $headline01 ?></h2>
                              <hr class="is-hidden-mobile">
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
                        <section id="treatment-solutions">
                              <h2 class="h500"><?php echo $headline04 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($procedures as $scm) { ?>
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
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Varumärken</h2>
                              <a href="varumarken/" title="<?php echo $brands_url_title ?>" class="button compact text is-hidden-mobile">
                                    <span class="l10n"><?php echo $brands_url_label ?></span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken/"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>