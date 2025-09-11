<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort operationsärr och skadeärr - Symptom och information';
$seo_description = 'Här hittar du allt om operations- och skadeärr och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'operationsärr, skadeärr, orsaker till ärr, förebygga ärr, ta bort ärr';
$seo_image = '/bilder/hudproblem/424x456/arr.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Operations- och Skadeärr', '/hudproblem/operations-skadearr/'),
);

$image_small = 'bilder/hudproblem/424x324/operations-skadearr.webp';
$image_large = 'bilder/hudproblem/424x456/operations-skadearr.webp';
$image_title = 'Visar en hud med operations- och skadeärr';
$image_alt = 'Bild som illustrerar hur operations- och skadeärr ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Operations- och skadeärr',
      description: 'Ärrbildning är en naturlig del av läkningsprocessen efter skada eller operation. Här hittar du detaljerad information om hur ärr bildas och de olika typerna av ärr som kan uppstå.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars', 'Boka gratis konsultation för ärr'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars', 'Boka gratis konsultation för ärr'),
            new Link('Boka behanding', 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Kirurgiska ärr',
                  url: null,
                  title: 'irurgiska ärr'
            ),
            new Link(
                  label: 'Hypertrofiska ärr',
                  url: null,
                  title: 'Hypertrofiska ärr'
            ),
            new Link(
                  label: 'Atrofiska ärr',
                  url: null,
                  title: 'Atrofiska ärr'
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är ärr?',
            content: '<p class="p200">Ärr är permanenta förändringar i hudstrukturen som uppstår som en del av kroppens naturliga läkningsprocess efter skada på huden, speciellt när det påverkar dermis, hudens mellersta lager. När huden skadas, oavsett om det är på grund av en olycka, kirurgi, brännskada eller sjukdom, initierar kroppen en snabb respons för att börja reparationsprocessen. Denna process involverar produktionen av kollagen, ett protein som finns naturligt i vår hud. Kollagenets huvudsyfte under läkningen är att binda såret samman, och beroende på hur detta kollagen arrangeras samt mängden som produceras, kan huden som läker anta ett annat utseende än omgivande hud, vilket resulterar i ett ärr. Om huden producerar för mycket kollagen, kan man få ett upphöjt ärr (hpertrofiska ärr), medan otillräcklig kollagenproduktion kan leda till nedsjunkna ärr (atrofiska ärr).</p>',
            extended_content: '<p class="p200 mt-xl">Det finns flera typer av ärr, och deras utseende kan variera beroende på skadans omfattning, läkningstid, individens ålder, genetik och flera andra faktorer. Atrofiska ärr, till exempel, sjunker ner under hudytan och orsakas ofta av förlust av hudvävnad, vilket är vanligt efter akne eller vattkoppor. Hypertrofiska ärr är tjocka, upphöjda och röda i färg, men begränsade till skadans område. De uppstår när det finns en överproduktion av kollagen under läkningsprocessen. Keloidärr liknar hypertrofiska ärr, men dessa växer utöver skadans ursprungliga område. Keloider kan fortsätta att växa under lång tid och kan orsaka klåda eller vara smärtsamma. Kontrakturärr är ofta resultatet av brännskador och drar ihop huden, vilket kan begränsa rörelseförmågan.</p>
            <p class="p200 mt-xl">Det är också viktigt att notera att ärrbildning kan påverka inte bara det fysiska utseendet utan också en individs emotionella och psykologiska välbefinnande. Många människor söker behandlingar för att minska synligheten av sina ärr, inte bara av estetiska skäl utan också för att hjälpa till med det emotionella trauma som ärr kan medföra.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man ärr?',
            content: '<p class="p200">Ärrbildning är en naturlig del av kroppens läkningsprocess och uppstår när hudens dermis (det djupare, tjockare lagret av huden) skadas. Varje gång huden skadas – antingen genom skär-, stick-, bränn- eller skrapsår, genom kirurgiska ingrepp eller infektioner – aktiverar kroppen en biologisk reparationssystem för att läka skadan. När huden börjar läka över en sårskada, produceras kollagenfibrer för att reparera skadan. Kollagen är det huvudsakliga proteinet i huden, och dess produktion ökar i samband med läkningsprocessen. Denna överdrivna produktion av kollagen kan ibland leda till att huden läker med en tjockare, tätare struktur, vilket resulterar i ett ärr. Hur mycket kollagen som produceras och hur det organiserar sig avgör utseendet på ärret.</p>',
            extended_content: '<p class="p200 mt-xl">Faktorer som kan påverka ärrbildningen inkluderar djupet och storleken på skadan, dess placering på kroppen, ålder, kön, etnicitet och genetiska faktorer. Till exempel tenderar yngre hud att producera mer kollagen än äldre hud, vilket kan leda till mer framträdande ärr. Vissa kroppsområden, som bröstet eller ryggen, kan också vara mer benägna att utveckla stora, upphöjda ärr. Dessutom kan människor med mörkare hudtoner vara mer benägna att utveckla hypertrofiska ärr eller keloider. Genetiska faktorer spelar också en roll, eftersom vissa individer kan ha en familjehistoria av distinkt ärrbildning, som keloidärr.</p>
            <p class="p200 mt-xl">Utöver fysiska skador kan andra orsaker såsom inflammerad hud vid akne och vattkoppor orsaka ärr när det läker. Det är också viktigt att notera att rätt vård av ett sår kan göra stor skillnad i hur ärret blir senare.</p>',
            icons: array('livsstil' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får ärr?',
            content: '<p class="p200">Ärrbildning är en universell biologisk funktion som kan drabba alla efter en skada eller operation på huden. Dock påverkas omfattningen och typen av ärrbildning av flera olika faktorer. Ålder spelar en viktig roll i hur vår hud läker. Barns och ungdomars hud har en tendens att läka snabbare och kan ibland bilda tjockare ärr än hos vuxna eftersom de har en högre kollagenproduktion. Äldre individer kan däremot uppleva en långsammare läkningsprocess på grund av minskad kollagenproduktion och hudelasticitet, vilket kan resultera i tunnare och plattare ärr.</p>',
            extended_content: '<p class="p200 mt-xl">Genetik påverkar också ärrbildningens omfattning och karaktär. Vissa individer har en genetisk benägenhet att utveckla specifika ärrtyper, som keloider eller hypertrofiska ärr. Sådana ärr går ofta i släkten, vilket innebär att om dina föräldrar eller syskon har utvecklat denna typ av ärr, finns det en större chans att du också kommer att göra det. Etnicitet och hudtyp kan också spela en roll. Till exempel är keloidärr mer vanliga hos personer med mörkare hudtoner.</p>
            <p class="p200 mt-xl">Platsen för skadan eller traumat på kroppen kan påverka ärrbildningen. Vissa områden, som bröstet eller ryggen, har en tendens att bilda tjockare och mer framträdande ärr, medan andra områden, som ansiktet, ofta läker med mindre synliga ärr. Till sist kan faktorer som den initiala skadans svårighetsgrad, typen av skada eller komplikationer, som till exempel infektion under läkningsprocessen kan alla påverka ärrbildningsprocessen. Det är viktigt att notera att även om vissa personer kan vara mer benägna att utveckla distinkta eller framträdande ärr än andra, har ingen individ helt immunitet mot ärrbildning, eftersom det är kroppens naturliga sätt att läka efter en skada.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna', '65+' => 'Aldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man ärr?',
            content: '<p class="p200">Ärr kan bildas på nästan vilken del av kroppen som helst efter en skada i huden. Hur ärret kommer att se ut påverkas av hur och var ärret orsakats. När vi tänker på ärrbildning, kan vi tänka på allt från skrapor och skärsår till djupare skador. Ytliga skador som skrapsår eller mindre brännskador kan ofta ge upphov till mindre framträdande ärr som med tiden kan blekna. Ett exempel på detta är när man skär sig på fingertoppen vid matlagning; resultatet blir ofta ett litet, linjärt ärr som bleknar över tiden. För djupare sårskador, sådana som orsakas av olyckor eller kirurgiska ingrepp, kan ärrbildningen bli mer framträdande. Sådana ärr kan variera i utseende, från att vara tjocka, upphöjda eller nedsjunkna, beroende på skadans omfattning och kroppens läkningsprocess.</p>',
            extended_content: '<p class="p200 mt-xl">Brännskador ger en annan typ av ärrbildning. De kan resultera i tjocka, strama ärr, kallade kontrakturer, som kan begränsa rörligheten. Platsen för brännskadan kommer att påverka typen och utseendet på ärret. Även om bristningar tekniskt sett inte räknas som ärr, relateras de till ärrbildning eftersom de uppstår från en snabb utsträckning av huden, vilket kan ske på platser som buken, låren, höfterna eller brösten med mera.</p>
            <p class="p200 mt-xl">Platsen på kroppen spelar också en viktig roll. Till exempel kan en skada nära en rörlig led, som knäet, resultera i ett tjockare ärr på grund av den konstanta rörelsen i det området. Sjukdomar som vattkoppor eller infektioner kan också leda till ärrbildning. En vattkoppsblåsa som blir infekterad eller kliad kan lämna ett ärr, och kirurgiska sår som blir infekterade kan leda till större och mer framstående ärr. Att ta hand om sår på rätt sätt och följa medicinska rekommendationer kan bidra till att minska risken för framträdande ärrbildning.</p>',
            icons: array('kropp' => 'Kroppen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten får du träffa en specialist inom ärrbehandling. De hjälper dig att identifiera typen av operations- och skadeärr och sätter upp en individuell behandlingsplan anpassad för dina behov.',

            url_label: 'Boka gratis konsultation',
            url: 'gratis-hudkonsultation.php',
            url_title: 'Boka din kostnadsfria konsultation gällande ärrbehandling idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder avancerade behandlingar för olika typer av operations- och skadeärr, framtagna för att effektivt minska ärrvävnadens framträdande och förbättra hudens utseende.',

            url_label: 'Se ärrbehandlingar',
            url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY',
            url_title: 'Se ärrbehandlingar',
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för ärr',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist utförs en undersökning av din hud. Vi tar före-bilder på det drabbade området och rekommenderar en lämplig behandlingsmetod, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för ärrbehandling',
      image_title: 'Konsultation för ärrbehandling',

      url_label: 'Läs mer om gratis hudkonsultation',
      url: '/gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot ärr',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
      consultation_url_title: 'Klicka för att boka tid för en ärrkonsultation',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Laserbehandling för ärr',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserbehandling erbjuder en effektiv metod för att minska ärrbildning och förbättra hudens struktur. Lasertekniken stimulerar kollagenproduktionen och cellförnyelse, vilket leder till att ärr blir mindre framträdande och hudens textur förbättras.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling för ärr',
            image_title: 'Laserbehandling för ärr',

            url_label: 'Läs mer om laser',
            url: '/laser-arr.php',
            url_title: 'Läs mer om laser mot ärr',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för laserbehandling av ärr',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling av ärr'
      ),
      /*new Service(
            title: 'Kemisk peeling för ärr',
            duration: '40 min',
            price: '1995 kr',
            content: 'Kemisk peeling kan effektivt behandla och minska ärrbildning. Genom att exfoliera huden främjar kemisk peeling cellförnyelse, vilket leder till att ärr och ojämn hudton förbättras.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling för ärr',
            image_title: 'Kemisk peeling för ärr behandling',

            url_label: 'Läs mer om kemisk peeling mot ärr',
            url: '/kemisk-peeling.php',
            url_title: 'Läs mer om kemisk peeling mot ärr',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för kemisk peeling av ärr',

            booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling av ärr behandling'
      ),*/

      /*new Service(
            title: 'Microneedling för ärr',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en effektiv behandlingsmetod för ärr. Genom att skapa små mikroskopiska kanaler i huden stimuleras hudens naturliga läkningsprocess och kollagenproduktionen.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling för ärr',
            image_title: 'Microneedling för ärr behandling',

            url_label: 'Läs mer om microneedling mot ärr',
            url: '/microneedling.php',
            url_title: 'Läs mer om microneedling mot ärr',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Scars',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för microneedling av ärr',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=Problem_AcneScars',
            booking_url_title: 'Klicka för att boka tid för en microneedling av ärr behandling'
      ),*/
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina operations- och skadeärr?',
            image_title: 'När ska jag söka hjälp med mina operations- och skadeärr?',
            content: '<p class="p200">Operations- och skadeärr kan uppstå efter skador på huden, operationer, brännskador eller andra trauma. Även om de flesta ärr är ofarliga, kan de orsaka estetiska bekymmer, obehag eller rörelsebegränsning. Om du känner att ditt ärr börjar påverka ditt välbefinnande, eller om det ger fysiska besvär, kan det vara dags att söka professionell hjälp. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård för dina ärr.</p>
          <p class="p200 mt-m">Hos en hudterapeut kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just ditt ärr. Experter kan analysera ditt ärr, diskutera möjliga behandlingsalternativ och rekommendera den mest effektiva metoden för dig. Behandlingsmetoder kan variera från laserbehandling, kemisk peeling och microneedling. Om du känner att dina ärr på något sätt påverkar ditt liv negativt, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot en bättre hudkvalitet och ökat välbefinnande.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina operations- och skadeärr?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina operations- och skadeärr?',
            content: '<p class="p200">Letar du efter en pålitlig och långvarig lösning för dina operations- och skadeärr? Då är AcneSpecialisten det optimala alternativet. Med en gedigen bakgrund på över 30 år inom hud- och skönhetsvård, och med en djupgående specialisering i ärrbehandling, är vi väl förberedda för att möta dina behov. Vi har kompetensen att hantera allt från mindre skadeärr till större operationsärr med personligt anpassade behandlingsalternativ.</p>
          <p class="p200 mt-m">Genom att implementera de senaste framstegen och teknikerna inom hudvård siktar vi på att leverera överlägsna resultat. Vårt kvalificerade team av hudterapeuter är redo att skapa en behandlingsplan skräddarsydd för dig, och ge dig stöd genom hela behandlingsförloppet. Med regelbundna behandlingar efter en specialanpassad behandlingsplan, strävar vi efter att reducera och eliminera dina ärr.</p>
          <p class="p200 mt-m">Väljer du AcneSpecialisten får du inte bara tillgång till den mest framstående och effektiva ärrbehandlingen. Vårt omfattande engagemang, expertis och långvariga erfarenhet positionerar oss som det självklara valet för den som söker professionell behandling av operations- och skadeärr.</p>',
      ),

);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/arr/resultat-arr-fore.webp',
            image_after_small: '/bilder/resultat/arr/resultat-arr-efter.webp',
            image_before_large: '/bilder/resultat/arr/resultat-arr-fore.webp',
            image_after_large: '/bilder/resultat/arr/resultat-arr-efter.webp',
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
            image_before_small: '/bilder/resultat/arr/resultat-arr-fore-2.webp',
            image_after_small: '/bilder/resultat/arr/resultat-arr-efter-2.webp',
            image_before_large: '/bilder/resultat/arr/resultat-arr-fore-2.webp',
            image_after_large: '/bilder/resultat/arr/resultat-arr-efter-2.webp',
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
            image_before_small: '/bilder/resultat/arr/resultat-arr-fore-3.webp',
            image_after_small: '/bilder/resultat/arr/resultat-arr-efter-3.webp',
            image_before_large: '/bilder/resultat/arr/resultat-arr-fore-3.webp',
            image_after_large: '/bilder/resultat/arr/resultat-arr-efter-3.webp',
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

$faq_categories = array(
      'Generellt om operations- och skadeärr' => array(
            new Question(
                  title: 'När bleknar ärr?',
                  text: '<p class="p200">Ärr kan blekna över tid. Faktorer som ålder, placering, storlek och typ av skada påverkar alla tiden det tar för ett ärr att blekna. Generellt kan ärr på ansiktet blekna snabbare jämfört med de på kroppen. Yngre hud har också en tendens att läka snabbare än äldre hud. Även om vissa ärr kan blekna betydligt inom några månader, kan andra ta flera år och vissa kan aldrig helt försvinna utan behandling. Regelbunden återfuktning och solskydd kan hjälpa till att påskynda blekningsprocessen.</p>'
            ),
            new Question(
                  title: 'Finns det olika typer av ärr?',
                  text: '<p class="p200">Ja, det finns flera olika typer av ärr, var och en med sina egna egenskaper. Keloidärr är tjocka, upphöjda ärr som bildas när kroppen överproducerar kollagen efter en hudskada. Dessa kan växa större än såret och kan orsaka klåda eller smärta. Hypertrofiska ärr liknar keloider men växer inte utanför sårets gränser. De är upphöjda, röda och kan också vara smärtsamma. Atrofiska ärr är försänkta ärr som ofta kommer från akne eller vattkoppor. De har en gropig yta och kan likna små kratrar. Kontrakturärr är ett resultat av förlust av ett stort hudområde, oftast från brännskador och kan begränsa rörelseförmågan på grund av hudens sammandragning.</p>'
            ),
            new Question(
                  title: 'Hur kan genetik påverka ärrbildningen?',
                  text: '<p class="p200">Genetik spelar en viktig roll i ärrbildning och kan påverka hur en person läker. Vissa genetiska faktorer kan göra en person mer benägen att utveckla tjocka, upphöjda ärr som keloider eller hypertrofiska ärr. Förståelse av familjens ärrhistoria kan ge insikt i hur en person kan förväntas läka efter en skada.</p>'
            ),
            new Question(
                  title: 'Kan solen påverka hur ett ärr läker eller dess utseende över tid?',
                  text: '<p class="p200">Solen har en stor inverkan på ärrs läkning och utseende. Direkt solexponering kan leda till att nybildade ärr mörknar eller hyperpigmenterar, vilket kan göra dem mer framträdande. Solskador på ärr kan också minska hudens elasticitet, vilket kan förvärra ärrbildningens textur och kvalitet. Det är därför avgörande att använda solskydd, som solkräm eller kläder, för att skydda ärret från solen, särskilt under dess tidiga läkningsfaser.</p>'
            ),
            new Question(
                  title: 'Är det vanligt att känna smärta eller obehag runt ett ärr?',
                  text: '<p class="p200">Ja, många individer upplever smärta, klåda eller obehag i och runt ärrvävnaden. Särskilt under de tidiga stadierna av läkning kan kollagenfibrerna bli strama, vilket ger en dragande eller klämmande känsla. Smärta eller obehag kan också vara kopplat till nervskada, irritation eller inflammation i området. Med tiden tenderar dessa känslor att minska för de flesta ärr.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till operations- och skadeärr";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av operation- och skadeärr',
            image_title: 'Cazzandra Lindberg - Expert på behandling av operation- och skadeärr'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på operation- och skadeärr',
            image_title: 'Veronika Benedik - Specialist inom vård av operation- och skadeärr'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom hantering av operation- och skadeärr',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på operation- och skadeärr'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av operation- och skadeärr',
            image_title: 'Vilma Libom - Expert inom behandling av operation- och skadeärr'
      )
);

$specialist_url_label = "Se alla hudterapeuter";
$specialist_url_title = "Ärr Specialiserade Hudterapeuter";

$brands = array(
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_title: 'Alma Hybrid - CO2 laser',
            image_alt: 'Alma Hybrid logotyp',
            url: 'alma-hybrid-co2-laser.php',
            url_title: 'Läs mer om Alma Hybrid CO2 laser',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_title: 'Harmony XL Pro - Laser & IPL',
            image_alt: 'Harmony XL Pro logotyp',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
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
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_title: 'Skin Tech - Professionella kemiska peelingar',
            image_alt: 'Skin Tech logotyp',
            url: 'varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för operations- och skadeärr behandling";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/hudproblem/operations-skadearr/" />

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

                        </section>
                        <?php if (isset($type_categories) && sizeof($type_categories) > 0) { ?>
                              <section id="types">
                                    <h2 class="h500 l10n"><?php echo $types_title ?></h2>
                                    <div class="is-hidden-tablet">
                                          <div class="mt-m mb-xxl" id="type-category-buttons">
                                                <?php foreach ($type_categories as $type_category) { ?>
                                                      <a href="javascript:;" class="button b50 grey">
                                                            <?php echo $type_category->title ?>
                                                      </a>
                                                <?php } ?>
                                          </div>
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="type-category-cards">
                                                            <?php foreach ($type_category->types as $type) {
                                                                  include('../widgets/type-card/type-card.php');
                                                            } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <div class="is-hidden-mobile">
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category-large">
                                                      <h3 class="h300"><?php echo $type_category->title ?></h3>
                                                      <div class="mt-xxs type-category-content"><?php echo $type_category->content ?></div>
                                                      <div class="columns is-3 is-variable is-multiline type-category-large-cards">
                                                            <?php foreach ($type_category->types as $type) { ?>
                                                                  <div class="column is-one-third">
                                                                        <?php include('../widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <?php echo $types_url ?>
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
                        <section id="articles">
                              <?php foreach ($articles as $article) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                              <?php } ?>
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
                                    <h2 class="big l10n">Våra hudterapeut</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut/"><?php echo $specialist_url_label ?></a>
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