<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Akne i ansiktet | AcneSpecialisten';
$seo_description = 'Har du problem med akne i ansiktet, käklinje, kinderna eller på hakan? Läs mer om hur du kan behandla det. Börja med en kostnadsfri konsultation →';
$seo_keywords = 'akne ansikte, akne på hakan, akne på hakan, akne på kinderna, akne i ansiktet, akne i pannan, akne ansiktet, akne på halsen, akne på ansiktet';
$seo_image = 'bilder/hudproblem/424x456/akne-ansikte.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Akne ansikte', '/acne-ansikte.php'),
);

$image_small = 'bilder/hudproblem/424x324/akne-ansikte.webp';
$image_large = 'bilder/hudproblem/424x456/akne-ansikte.webp';
$image_title = 'Behandling av ansiktsakne';
$image_alt = 'Bild som illustrerar ansiktsakne och dess behandling';

$floating_box = '';

$green_banner_content = new GreenBannerContent(
      title: 'Akne i ansiktet',
      description: 'Att ha akne i ansiktet kan vara både påfrestande och frustrerande. Det påverkar inte bara din hy utan kan även ha en påtaglig inverkan på ditt självförtroende och din självkänsla. Men du är inte ensam, och det finns många effektiva sätt att hantera och behandla akne. På denna sida kommer vi utforska vad akne är, varför det uppstår, och de bästa metoderna för att behandla det.',
      links_touch: [
            new Link('Boka konsultation', 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne', 'Boka gratis konsultation för akne i ansiktet'),
            new Link('Boka behandling', 'https://www.acnespecialisten.se/book?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne', 'Boka gratis konsultation för akne i ansiktet'),
            new Link('Boka behandling', 'https://www.acnespecialisten.se/book?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
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

$about_title = 'Din guide till en problemfritt ansikte.';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är akne i ansiktet?',
            content: '<p class="p200">Akne i ansiktet är en vanlig hudåkomma som påverkar miljontals människor världen över, både unga och vuxna. Detta tillstånd kännetecknas av uppkomsten av pormaskar, finnar, papler, pustler och i vissa fall mer allvarliga noduler och cystor. Akne utvecklas främst i områden med högt antal talgkörtlar, såsom ansiktet, bröstet och ryggen.De fysiska symtomen på akne kan leda till både kroppsligt besvär och känslomässig press.</p>',
            extended_content: null,
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man akne?',
            content: '<p class="p200">Akne i ansiktet orsakas av flera faktorer som samverkar. En av de mest framträdande orsakerna är hormonella förändringar, vilket förklarar varför många upplever akne under tonåren och vid vissa perioder i livet, som under menstruationscykeln. Hormonella förändringar leder till ökad produktion av talg (fett), en oljig substans som produceras av talgkörtlarna i huden.',

            extended_content: '<p class="p200 mt-xl">Den ökade talgproduktionen kan blockera porerna, vilket skapar en idealisk miljö för bakterier att växa, särskilt bakterien Cutibacterium acnes. Denna bakterie kan leda till inflammation och utveckling av inflammerade finnar och cystor. Utöver detta kan genetiska faktorer spela en betydande roll, om dina föräldrar har haft akne, ökar chanserna att du också utvecklar det.</p>

            <p class="p200 mt-xl">Det är normalt att känna sig frustrerad och nedstämd över pormaskar, utslag och finnar som påverkar ditt ansikte, särskilt när de dyker upp vid de mest olämpliga tillfällena. För att förstå hur man effektivt kan hantera och behandla akne är det viktigt att först förstå de många olika orsakerna till att den uppstår.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Orsaker',
            title: ' till plötslig akne i ansiktet',

            content: '<p class="p200">Plötslig akne i ansiktet kan vara både frustrerande och bekymmersamt, särskilt om du inte vanligtvis har problem med huden. Det finns flera faktorer som kan leda till en oväntad uppblossning av akne. En av de vanligaste orsakerna är hormonella förändringar, vilket kan ske vid olika tidpunkter i livet, såsom under puberteten, menstruationscykeln, graviditet eller på grund av p-piller.',

            extended_content: '<ul><li class="mt-xl"><strong>Hormonella förändringar</strong> kan även spela en stor roll i uppkomsten av plötslig akne. Under puberteten, menstruationscykler, graviditet och till och med klimakteriet, kan nivåerna av hormoner som testosteron öka. Detta leder till ökad produktion av talg i talgkörtlarna, vilket kan gå över styr och orsaka utslag.</li>

            <li class="mt-xl"><strong>Stress</strong> är en annan viktig faktor som kan påverka din hudhälsa markant. Påfrestande perioder i livet kan resultera i att kroppen producerar mer av stresshormonet kortisol, vilket i sin tur kan trigga igång överdriven talgproduktion och skapa en obalans i huden. Detta skapar en grogrund för akneutbrott, särskilt om du redan är benägen för finnar.</li>

            <li class="mt-xl"><strong>Preventivmedel</strong> kan också spela en roll i plötsliga akneutbrott. Vissa hormonella preventivmedel kan påverka kroppens nivåer av androgener, vilket kan leda till ökad talgproduktion och därmed akne. Om du märker att din hud förändras efter att du börjat med ett nytt preventivmedel, kan det vara värt att diskutera detta med din läkare. Det finns många olika typer av preventivmedel, och det är möjligt att hitta en lösning som är bättre lämpad för din hudtyp och hormonella balans.</li>

            <li class="mt-xl"><strong>Yttre faktorer</strong> som användning av oljebaserade kosmetiska produkter, otillräcklig rengöring av huden, och exponering för föroreningar kan också bidra till plötsliga akneutbrott. Förändringar i väderförhållanden och användningen av feta solkrämer under sommarperioden kan blockera porerna och orsaka akne.</li></ul>

            <p class="p200 mt-xl">Slutligen, om du nyligen har börjat använda nya hudvårdsprodukter eller mediciner, kan dessa också vara utlösande faktorer. Vissa läkemedel, inklusive steroider, är kända för att orsaka akne som en biverkning. Om du upplever plötslig akne, kan det vara bra att tänka igenom om något nyligen har ändrats i din livsstil eller dina vanor.</p>',

            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat', 'graviditet' => 'Graviditet')
      ),

      new ProblemTrivia(
            prefix: 'När',
            title: ' Ska Du Söka Hjälp För Svår Akne?',

            content: '<p class="p200">Att leva med svår akne kan vara extremt påfrestande både fysiskt och känslomässigt. Du kanske har provat ett flertal olika behandlingar utan att se någon förbättring. Det är viktigt att veta när det är dags att söka professionell hjälp för din akne. Här är några tecken att hålla utkik efter:',

            extended_content: '<ul><li class="mt-xl"><strong> Utebliven förbättring:</strong> Om du har använt hudvårdsprodukter under en längre tid utan att uppleva någon märkbar förbättring, kan det vara ett tecken på att du behöver en mer intensiv behandling.</li>

            <li class="mt-xl"><strong>Ärrbildning:</strong> Om du börjar märka att din akne lämnar permanenta ärr efter sig, är det en indikation på att din nuvarande behandling inte är tillräckligt effektiv.</li>

            <li class="mt-xl"><strong>Påverkan på självkänslan:</strong> Akne kan ha en stor inverkan på din mentala hälsa och självkänsla. Om du känner dig deprimerad eller ångestfylld över din hud, är det dags att tala med en specialist.</li>

            <li class="mt-xl"><strong>Fysisk smärta:</strong> Akne som är smärtsam eller inflammerad till den punkt där det påverkar din dagliga funktion är också ett tecken på att du behöver professionell hjälp.</li></ul>',

            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Vart',
            title: ' i ansiktet akne uppstår och dess betydelse',
            content: '<p class="p200">Akne i ansiktet kan uppträda på flera olika sätt, beroende på typ av akne och hudtyp. Vanliga områden där akne ofta förekommer är pannan, näsan, kinderna och hakan. Symtomen kan variera från små, icke-inflammatoriska pormaskar till större, smärtsamma och inflammerade cystor. Det är också bra att veta att akne ofta dyker upp i områden med högt antal talgkörtlar.</p>',

            extended_content: '<ul><li class="mt-xl"><strong>Panna:</strong> Akne i pannan är ofta små finnar eller pormaskar. Dessa kan uppstå på grund av att hårsäckarna täpps igen av överflödig olja, svett eller hårprodukter.</li>

            <li class="mt-xl"><strong>Kinder:</strong> Akne på kinderna kan även bero på hormonella förändringar, särskilt hos kvinnor. Dessa finnar kan vara rödaktiga och inflammerade, och de kan dyka upp som enstaka utbrott eller som en del av ett större område med flera finnar. Hormoner som östrogen och progesteron kan påverka talgproduktionen, vilket leder till att porerna täpps igen och orsakar akne.</li>

            <li class="mt-xl"><strong>Haka:</strong> Akne på hakan är vanligtvis hormonell och ökar ofta under menstruationscykeln. Denna typ av akne kan vara envis och dyka upp samma plats varje månad.</li>

            <li class="mt-xl"><strong>Näsa:</strong> Porerna på näsan är större och blir lättare igentäppta, vilket kan leda till pormaskar eller små finnar. Överflödig olja och bakterier spelar också en stor roll här.</li>

            <li class="mt-xl"><strong>Käklinje:</strong> Akne längs käklinjen är ofta relaterat till hormoner och stress. Dessa finnar är ofta ömma och kan vara djupare under huden.</li>

           <li class="mt-xl"><strong>Hals:</strong> Akne på halsen kan ofta kopplas till hormonella förändringar eller irritation från kläder och smycken. Dessa finnar kan vara smärtsamma och uppstå som resultat av friktion eller svett.</li></ul>

            <p class="p200 mt-xl">Vissa individer kan även uppleva akne över hela ansiktet. Detta kan bero på en kombination av hormonella förändringar, genetiska faktorer och livsstilsval. Det är viktigt att identifiera orsaken till din akne för att hitta den mest effektiva behandlingen.</p>

            <p class="p200 mt-xl">Akne kan också uppstå på bröst och rygg, och det delar ofta samma orsaker som akne i ansiktet. Genom att förstå var och varför du upplever akne kan du bättre anpassa dina behandlingar.</p>',

            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Hur',
            title: ' får man bort akne i ansiktet?',
            content: '<p class="p200">När det kommer till att behandla akne i ansiktet finns det en rad olika metoder som kan hjälpa dig att nå renare och friskare hud. Viktigt är att förstå att det inte finns en universallösning, och ofta kan en kombination av behandlingar vara den mest effektiva strategin.</p>',

            extended_content: '<ul><li class="mt-xl"><strong>Behandlingar hos Hudterapeut:</strong> En licensierad hudterapeut kan erbjuda mer avancerade behandlingar som kemisk peeling och microneedling. Kemisk peeling innebär applicering av en kemisk syra som får huden att fjälla och därmed främja ny, frisk hud att växa fram. Microneedling använder små nålar för att skapa mikrokanaler i huden, vilket stimulerar kollagenproduktionen och förbättrar hudens textur och ton.</li>

            <li class="mt-xl"><strong>Laserbehandling:</strong> Laserbehandling har blivit en populär metod för att hantera både aktiv akne och akneärr. Laserljuset riktas mot talgkörtlarna, vilket minskar talgproduktionen och därmed hindrar nya utbrott. Dessutom kan laserbehandling hjälpa till att minska inflammerade lesioner och förbättra hudens övergripande utseende.</li>

            <li class="mt-xl"><strong>Egenvård och Hudvårdsprodukter:</strong> Att etablera en konsekvent hudvårdsrutin är avgörande. Genom att balansera talgproduktionen kan du minska uppkomsten av akne, eftersom överdriven talgproduktion ofta är orsaken till akne.</li></ul>

            <p class="p200 mt-xl">Oavsett vilken metod du väljer, handlar hudvård om att ta hand om sig själv. Att visa omsorg och engagemang för din hud kan i slutändan leda till förbättrad självkänsla och välmående. Kom ihåg, du är inte ensam och det finns hjälp att få.</p>',

            icons: array()
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Få en personlig hudterapeut som analyserar din hud och skapar en skräddarsydd behandlingsplan för just dina behov.',
            url_label: 'Boka gratis konsultation',
            url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Våra grundliga ansiktsbehandlingar är anpassade för din aknetyp för att effektivt behandla och lindra dina hudproblem.',
            url_label: 'Se behandlingar',
            url: 'https://www.acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
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

$treatment_link = '<a href="acnebehandling.php" title="Utforska effektiva behandlingar mot akne i ansiktet" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

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
      consultation_url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
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
            consultation_url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            consultation_url_title: 'Boka en konsultation för ansiktsbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://www.acnespecialisten.se/book?flow=facialProblem&problem=Problem_Acne',
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
            consultation_url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Boka en konsultation för laserbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://www.acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne',
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

            consultation_url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Boka en konsultation för kemisk peeling mot akne',

            booking_url: 'https://www.acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Acne',
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
            consultation_url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Boka en konsultation för microneedling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://www.acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Acne',
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
            consultation_url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
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
            consultation_url: 'https://www.acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            consultation_url_title: 'Boka konsultation för behandling av acneärr',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://www.acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_AcneScars',
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
            image_title: 'Perioral dermatit (aKne runt munnen) ett hudproblem liknande akne',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/acne-ansikte.php" />

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