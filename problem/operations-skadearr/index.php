<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Operations- och Skadeärr - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om operations- och skadeärr, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'operationsärr, skadeärr, behandling av ärr, orsaker till ärr, förebygga ärr, ta bort ärr, ärrbehandling';

// här lägger du bild som du vill skall synas när du länkar i socialamedier eller sms

$seo_image = '/bilder/problem/424x456/arr.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem.php'),
      new PathSegment('Operations- och Skadeärr', '/problem/operations-skadearr'),
);

$title = 'Operations- och Skadeärr';

$image_small = 'bilder/problem/424x324/operations-skadearr.webp';
$image_large = 'bilder/problem/424x456/operations-skadearr.webp';
$image_title = 'Visar en hud med operations- och skadeärr';
$image_alt = 'Bild som illustrerar hur operations- och skadeärr ser ut på huden';
$description = 'Ärrbildning är en naturlig del av läkningsprocessen efter skada eller operation. Här hittar du detaljerad information om hur ärr bildas och de olika typerna av ärr som kan uppstå.';

$akas = [
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
];

$consultation_url_label = "Boka gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars";
$consultation_url_title = "Gratis Konsultation för Ärr";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars";
$booking_url_title = "Boka Ärrbehandling";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Ärr";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Ärrbehandling";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Ärr";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Ärrbehandling";

$nav_buttons = array(
      'about' => 'Om ärr',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'Varför AS?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
);

$about_title = 'Om operations- och skadeärr';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är ärr?',
            content: '<p class="p200">Ärr är permanenta förändringar i hudstrukturen som uppstår som en del av kroppens naturliga läkningsprocess efter skada på huden, speciellt när det påverkar dermis, hudens mellersta lager. När huden skadas, oavsett om det är på grund av en olycka, kirurgi, brännskada eller sjukdom, initierar kroppen en snabb respons för att börja reparationsprocessen. Denna process involverar produktionen av kollagen, ett protein som finns naturligt i vår hud. Kollagenets huvudsyfte under läkningen är att binda såret samman, och beroende på hur detta kollagen arrangeras samt mängden som produceras, kan huden som läker anta ett annat utseende än omgivande hud, vilket resulterar i ett ärr. Om huden producerar för mycket kollagen, kan man få ett upphöjt ärr, medan otillräcklig kollagenproduktion kan leda till indragna ärr.</p>',
            extended_content: '<p class="p200 mt-xl">Det finns flera typer av ärr, och deras utseende kan variera beroende på skadans omfattning, läkningstid, individens ålder, genetik och flera andra faktorer. Atrofiska ärr, till exempel, sjunker ner under hudytan och orsakas ofta av förlust av hudvävnad, vilket är vanligt efter akne eller vattkoppor. Hypertrofiska ärr är tjocka, upphöjda och röda i färg, men begränsade till skadans område. De uppstår när det finns en överproduktion av kollagen under läkningsprocessen. Keloidärr liknar hypertrofiska ärr, men dessa växer utöver skadans ursprungliga område. Keloider kan fortsätta att växa under lång tid och kan vara klåda eller smärtsamma. Kontrakturärr är ofta resultatet av brännskador och drar ihop huden, vilket kan begränsa rörelseförmågan.</p>       
            <p class="p200 mt-xl">Det är också viktigt att notera att ärrbildning kan påverka inte bara det fysiska utseendet utan också en individs emotionella och psykologiska välbefinnande. Många människor söker behandlingar för att minska synligheten av sina ärr, inte bara av estetiska skäl utan också för att hjälpa till med det emotionella trauma som ärr kan medföra.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man ärr?',
            content: '<p class="p200">Ärrbildning är en naturlig del av kroppens läkningsprocess och uppstår när hudens dermis (det djupare, tjockare lagret av huden) skadas. Varje gång huden skadas – antingen genom skär-, stick-, bränn-, skrap-, eller trycksår, genom kirurgiska ingrepp eller infektioner – aktiverar kroppen en biologisk reparationssystem för att läka skadan. När huden börjar läka över en sårskada, produceras kollagenfibrer för att reparera skadan. Kollagen är det huvudsakliga proteinet i huden, och dess produktion ökar i samband med läkningsprocessen. Denna överdrivna produktion av kollagen kan ibland leda till att huden läker med en tjockare, tätare struktur, vilket resulterar i ett ärr. Hur mycket kollagen som produceras och hur det organiserar sig avgör utseendet på ärret.</p>',
            extended_content: '<p class="p200 mt-xl">Faktorer som kan påverka ärrbildningen inkluderar djupet och storleken på skadan, dess placering på kroppen, ålder, kön, etnicitet och genetiska faktorer. Till exempel tenderar yngre hud att producera mer kollagen än äldre hud, vilket kan leda till mer framträdande ärr. Vissa kroppsområden, som bröstet eller ryggen, kan också vara mer benägna att utveckla stora, upphöjda ärr. Dessutom kan människor med mörkare hudtoner vara mer benägna att utveckla hypertrofiska ärr eller keloider. Genetiska faktorer spelar också en roll, eftersom vissa individer kan ha en familjehistoria av distinkt ärrbildning, som keloidärr.</p>
            <p class="p200 mt-xl">Utöver fysiska skador kan andra orsaker till ärr inkludera akne, vattkoppor eller sjukdomar som kopporna. Även inflammerad hud, som vid svår akne, kan lämna ärr när det läker. Det är också viktigt att notera att rätt vård av ett sår kan göra stor skillnad i hur ärret blir senare. Rengöring av sår, undvikande av solskador under läkning och användning av silikonplåster eller geler kan påverka slutresultatet av ärrbildningen.</p>',
            icons: array('livsstil' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får ärr?',
            content: '<p class="p200">Ärrbildning är en universell mänsklig upplevelse som kan drabba alla efter en skada eller operation på huden. Dock påverkas omfattningen och typen av ärrbildning av flera olika faktorer. Ålder spelar en viktig roll i hur vår hud läker. Barns och ungdomars hud har en tendens att läka snabbare och kan ibland bilda tjockare ärr än hos vuxna eftersom de har en högre kollagenproduktion. Äldre individer kan däremot uppleva en långsammare läkningsprocess på grund av minskad kollagenproduktion och hudelasticitet, vilket kan resultera i tunnare och plattare ärr.</p>',
            extended_content: '<p class="p200 mt-xl">Genetik påverkar också ärrbildningens omfattning och karaktär. Vissa individer har en genetisk predisposition att utveckla specifika ärrtyper, som keloider eller hypertrofiska ärr. Sådana ärr går ofta i släkten, vilket innebär att om dina föräldrar eller syskon har utvecklat denna typ av ärr, finns det en större chans att du också kommer att göra det. Etnicitet och hudtyp kan också spela en roll. Till exempel är keloidärr mer vanliga hos personer med mörkare hudtoner, inklusive afrikanska, afrokaribiska och sydasiatiska befolkningsgrupper.</p>
            <p class="p200 mt-xl">Platsen för skadan eller incisionen på kroppen kan påverka ärrbildningen. Vissa områden, som bröstet eller skuldran, har en tendens att bilda tjockare och mer framträdande ärr, medan andra områden, som ansiktet, ofta läker med mindre synliga ärr. Till sist kan faktorer som den initiala skadans svårighetsgrad, typen av skada (brännskada, skärsår, skrapa), infektioner eller komplikationer under läkningsprocessen och enskilda hälsoförhållanden alla påverka ärrbildningsprocessen. Det är viktigt att notera att även om vissa personer kan vara mer benägna att utveckla distinkta eller framträdande ärr än andra, har ingen individ helt immunitet mot ärrbildning, eftersom det är kroppens naturliga sätt att läka efter en skada.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna', '65+' => 'Aldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man ärr?',
            content: '<p class="p200">Ärr kan bildas på nästan vilken del av kroppen som helst efter en skada i huden. Hur och var ärr bildas hänger samman med skadans karaktär, dess djup och kroppens unika sätt att läka. När vi tänker på ärrbildning, kan vi tänka på allt från skrapor och skärsår till djupare skador. Ytliga skador som skrapor eller mindre brännskador kan ofta ge upphov till mindre framträdande ärr som med tiden kan blekna. Ett exempel på detta är när man skär sig på fingertoppen vid matlagning; resultatet blir ofta ett litet, linjärt ärr som bleknar över tiden. För djupare sårskador, sådana som orsakas av olyckor eller kirurgiska ingrepp, kan ärrbildningen bli mer framträdande. Sådana ärr kan variera i utseende, från att vara tjocka, upphöjda, indragna eller till och med böljande, beroende på skadans omfattning och kroppens läkningsprocess.</p>',
            extended_content: '<p class="p200 mt-xl">Akne, å andra sidan, kan lämna efter sig märken eller gropar på huden, särskilt om den varit svår eller om finnar har klämts på fel sätt. Ofta kan man finna akneärr i ansiktet, nacken, bröstet, ryggen eller axlarna. Brännskador ger en annan typ av ärrbildning. De kan resultera i tjocka, strama ärr, kallade kontrakturer, som kan begränsa rörligheten. Platsen för brännskadan kommer att påverka typen och utseendet på ärret. Även om stretchmärken tekniskt sett inte räknas som ärr, relateras de till ärrbildning eftersom de uppstår från en snabb utsträckning av huden, vilket kan ske på platser som buken, låren, höfterna eller brösten.</p>
            <p class="p200 mt-xl">Platsen på kroppen spelar också en viktig roll. Till exempel kan en skada nära en rörlig led, som knäet, resultera i ett tjockare ärr på grund av den konstanta rörelsen i det området. Sjukdomar som vattkoppor eller infektioner kan också leda till ärrbildning. En vattkoppsblåsa som blir infekterad eller kliad kan lämna ett ärr, och kirurgiska sår som blir infekterade kan leda till större och mer framstående ärr. Att ta hand om sår på rätt sätt och följa medicinska rekommendationer kan bidra till att minska risken för framträdande ärrbildning.</p>',
            icons: array('kropp' => 'Kroppen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten kopplas du ihop med en specialist inom ärrbehandling. De hjälper dig att identifiera typen av operations- och skadeärr och sätter upp en individuell behandlingsplan anpassad för dina behov.',

            url_label: 'Få gratis konsultation',
            url: 'gratis-hudkonsultation.php',
            url_title: 'Boka din kostnadsfria konsultation gällande ärrbehandling idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder avancerade och skonsamma behandlingar för olika typer av operations- och skadeärr, designade för att effektivt minska ärrvävnadens framträdande och förbättra hudens utseende.',

            url_label: 'Se ärrbehandlingar',
            url: 'problem/operations-skadearr/behandla-operations-skadearr',
            url_title: 'Utforska våra specialanpassade behandlingar för operations- och skadeärr'
      ),
);

$treatment_link = '<a href="problem/operations-skadearr/behandla-operations-skadearr" title="Utforska effektiva behandlingar mot operations- och skadeärr" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot operations- och skadeärr</a>';

/*
$types_title = 'Olika typer av operations- och skadeärr';

$type_categories = array(

      new BasedTypeCategory(
            title: 'Operations- och skadeärr baserat på svårighetsgrad',
            content: '<p class="p200">Operations- och skadeärr kan variera i svårighetsgrad från ytliga till djupa och omfattande ärr. Ytliga ärr är ofta mindre i storlek och djup, medan djupare ärr kan ha ett inbuktat eller upphöjt utseende och kan vara större och mer framträdande. Svårighetsgraden av ett ärr kan påverka både estetiken och funktionen av det drabbade området. Korrekt vård och behandling av ärr baserat på dess svårighetsgrad är avgörande för att minimera synligheten och potentiella komplikationer.</p>',
            types: array(
                  new BasedType(
                        title: 'Ytliga ärr',
                        subtitle: 'Mindre i storlek och djup',

                        image_url: 'images/problems/102x102/ytliga-arr.webp',
                        image_alt: 'Bild av ytliga ärr',
                        image_title: 'Ytliga ärr exemplifierade',

                        url: 'problem/arr/svarighetsgrad/ytliga-arr',
                        url_title: 'Utforska information om ytliga ärr',
                  ),
                  new BasedType(
                        title: 'Mellan djupa ärr',
                        subtitle: 'Kan ha ett lätt inbuktat eller upphöjt utseende',

                        image_url: 'images/problems/102x102/mellandjupa-arr.webp',
                        image_alt: 'Bild av mellan djupa ärr',
                        image_title: 'Mellan djupa ärr exemplifierade',

                        url: 'problem/arr/svarighetsgrad/mellandjupa-arr',
                        url_title: 'Utforska information om mellan djupa ärr',
                  ),
                  new BasedType(
                        title: 'Djupa och omfattande ärr',
                        subtitle: 'Stora, framträdande och kan påverka rörelse',

                        image_url: 'images/problems/102x102/djupa-arr.webp',
                        image_alt: 'Bild av djupa och omfattande ärr',
                        image_title: 'Djupa och omfattande ärr exemplifierade',

                        url: 'problem/arr/svarighetsgrad/djupa-arr',
                        url_title: 'Utforska information om djupa och omfattande ärr',
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Operations- och skadeärr baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer kan bidra till uppkomsten av operations- och skadeärr. Sådana faktorer inkluderar trauma från olyckor, kirurgiska ingrepp, brännskador, snabb hudsträckning som orsakar sträckmärken, och exponering för starka kemikalier eller extrema temperaturer. Ärr som bildas på grund av dessa faktorer kan variera i form, storlek och färg beroende på skadans omfattning och hur kroppen läker.</p>',
            types: array(
                  new BasedType(
                        title: 'Traumatiska ärr',
                        subtitle: 'Resultat av yttre skador',

                        image_url: 'images/problems/102x102/traumatic-scar.webp',
                        image_alt: 'Bild av traumatiskt ärr',
                        image_title: 'Exempel på traumatiskt ärr',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Kirurgiska ärr',
                        subtitle: 'Efter kirurgiska ingrepp',

                        image_url: 'images/problems/102x102/surgical-scar.webp',
                        image_alt: 'Bild av kirurgiskt ärr',
                        image_title: 'Exempel på kirurgiskt ärr',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Brännskadeärr',
                        subtitle: 'Från termiska, kemiska eller solbrännskador',

                        image_url: 'images/problems/102x102/burn-scar.webp',
                        image_alt: 'Bild av brännskadeärr',
                        image_title: 'Exempel på brännskadeärr',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Ärr från bett eller stick',
                        subtitle: 'Efter insektsbett, djurbett eller växtstick',

                        image_url: 'images/problems/102x102/bite-scar.webp',
                        image_alt: 'Bild av ärr från bett eller stick',
                        image_title: 'Exempel på ärr från bett eller stick',

                        url: null,
                        url_title: null,
                  ),
            )
      ),

);
*/
$headline01 = "01. Identifiera ditt ärr";

$service = new Service(
      title: 'Konsultation för ärr',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en ärrspecialist utförs en undersökning av ditt ärr. Vi tar före-bilder på det drabbade området och rekommenderar en lämplig behandlingsmetod, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för ärrbehandling',
      image_title: 'Konsultation för ärrbehandling',

      url_label: 'Läs mer om gratis hudkonsultation mot ärr',
      url: '/gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot ärr',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
      consultation_url_title: 'Klicka för att boka tid för en ärrkonsultation',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla ditt ärr";

$services = array(
      new Service(
            title: 'Laserbehandling för ärr',
            duration: '50 min',
            price: '2595 kr',
            content: 'Laserbehandling för ärr erbjuder en effektiv metod för att minska ärrbildning och förbättra hudens struktur. Lasertekniken stimulerar kollagenproduktionen och cellförnyelse, vilket leder till att ärr blir mindre framträdande och hudens textur förbättras.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling för ärr',
            image_title: 'Laserbehandling för ärr',

            url_label: 'Läs mer om laser mot ärr',
            url: '/laser-arr.php',
            url_title: 'Läs mer om laser mot ärr',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för laserbehandling av ärr',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling av ärr'
      ),
      new Service(
            title: 'Kemisk peeling för ärr',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling kan effektivt behandla och minska ärrbildning. Genom att exfoliera huden främjar kemisk peeling cellförnyelse, vilket leder till att ärr och ojämn hudton förbättras. Det är en effektiv strategi för att förbättra din hudhälsa och reducera ärr.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling för ärr',
            image_title: 'Kemisk peeling för ärr behandling',

            url_label: 'Läs mer om kemisk peeling mot ärr',
            url: '/kemisk-peeling.php',
            url_title: 'Läs mer om kemisk peeling mot ärr',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för kemisk peeling av ärr',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling av ärr behandling'
      ),

      new Service(
            title: 'Microneedling för ärr',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en effektiv behandlingsmetod för ärr. Genom att skapa små mikroskopiska kanaler i huden stimuleras hudens naturliga läkningsprocess och kollagenproduktionen. Denna behandling kan effektivt minska ärrbildning, förbättra hudens struktur och textur. Microneedling är en säker och effektiv metod för att förbättra din hudhälsa och reducera ärr.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling för ärr',
            image_title: 'Microneedling för ärr behandling',

            url_label: 'Läs mer om microneedling mot ärr',
            url: '/microneedling.php',
            url_title: 'Läs mer om microneedling mot ärr',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Scars',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för microneedling av ärr',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
            booking_url_title: 'Klicka för att boka tid för en microneedling av ärr behandling'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina operations- och skadeärr?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina operations- och skadeärr?',
            image_title: 'När ska jag söka hjälp med mina operations- och skadeärr?',
            content: '<p class="p200">Operations- och skadeärr kan uppstå efter skador på huden, operationer, brännskador eller andra trauma. Även om de flesta ärr är ofarliga, kan de orsaka estetiska bekymmer, obehag eller rörelsebegränsning. Om du känner att ditt ärr börjar påverka ditt välbefinnande, eller om det ger fysiska besvär, kan det vara dags att söka professionell hjälp. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård för dina ärr.</p>
          <p class="p200 mt-m">Hos en hudterapeut kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just ditt ärr. Experter kan analysera ditt ärr, diskutera möjliga behandlingsalternativ och rekommendera den mest effektiva metoden för dig. Behandlingsmetoder kan variera från laserbehandling, kemisk peeling och microneedling. Om du känner att dina ärr på något sätt påverkar ditt liv negativt, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot en bättre hudkvalitet och ökat välbefinnande.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina operations- och skadeärr?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina operations- och skadeärr?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina operations- och skadeärr?',
            content: '<p class="p200">Om du söker en effektiv och långsiktig lösning för dina operations- och skadeärr, är AcneSpecialisten det självklara valet. Vi har över 30 års erfarenhet inom hud och udvård med en specialisering i att behandla ärr. Oavsett om du har mindre skadeärr eller mer omfattande operationsärr, kan vi erbjuda en skräddarsydd lösning för dig.</p>
          <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att ge dig bästa möjliga resultat. Vårt team av hudterapeuter är redo att erbjuda en individuell behandlingsplan och att stötta dig genom hela processen, med regelbundna uppföljningar och anpassade behandlingsplaner säkerställer vi en långvarig förbättring av ditt ärrs utseende.</p>
          <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för dina operations- och skadeärr. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val för behandling av ärr.</p>',
      ),

);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat svår akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_title: 'Person som har rosacea',
            image_alt: 'Ansiktet på en person som behandlat rosacea, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat mot ärr";


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
      'Generellt om operations- och skadeärr' => array(
            new Question(
                  title: 'Kan ärr blekna över tid?',
                  text: '<p class="p200">Ärr kan definitivt blekna över tid. Faktorer som ålder, hudens placering, storlek och typ av skada påverkar alla tiden det tar för ett ärr att blekna. Generellt kan ärr på ansiktet blekna snabbare jämfört med de på kroppen. Yngre hud har också en tendens att läka snabbare än äldre hud. Även om vissa ärr kan blekna betydligt inom några månader, kan andra ta flera år och vissa kan aldrig helt försvinna utan behandling. Regelbunden återfuktning och solskydd kan hjälpa till att påskynda blekningsprocessen.</p>'
            ),
            new Question(
                  title: 'Finns det olika typer av ärr?',
                  text: '<p class="p200">Ja, det finns flera olika typer av ärr, var och en med sina egna egenskaper. Keloidärr är tjocka, upphöjda ärr som bildas när kroppen överproducerar kollagen efter en hudskada. Dessa kan växa större än såret och kan vara klåda eller smärtsamt. Hypertrofiska ärr liknar keloider men växer inte utanför sårets gränser. De är upphöjda, röda och kan också vara smärtsamma. Atrofiska ärr är försänkta ärr som ofta kommer från akne eller vattkoppor. De har en gropig yta och kan likna små kratrar. Kontrakturärr är ett resultat av förlust av ett stort hudområde, oftast från brännskador och kan begränsa rörelseförmågan på grund av hudens sammandragning.</p>'
            ),
            new Question(
                  title: 'Hur kan genetik påverka ärrbildningen?',
                  text: '<p class="p200">Genetik spelar en viktig roll i ärrbildning och kan påverka hur en person läker. Vissa genetiska faktorer kan göra en person mer benägen att utveckla tjocka, upphöjda ärr som keloider eller hypertrofiska ärr. Etnicitet kan också spela en roll, med vissa befolkningar som har en högre risk att utveckla dessa typer av ärr. Förståelse av familjens ärrhistoria kan ge insikt i hur en person kan förväntas läka efter en skada.</p>'
            ),
            new Question(
                  title: 'Kan solen påverka hur ett ärr läker eller dess utseende över tid?',
                  text: '<p class="p200">Solen har en signifikant inverkan på ärrs läkning och utseende. Direkt sol exponering kan leda till att nybildade ärr mörknar eller hyperpigmenterar, vilket kan göra dem mer framträdande. Solskador på ärr kan också minska hudens elasticitet, vilket kan förvärra ärrbildningens textur och kvalitet. Det är därför avgörande att använda solskydd, som solkräm eller kläder, för att skydda ärret från solen, särskilt under dess tidiga läkningsfaser.</p>'
            ),
            new Question(
                  title: 'Är det vanligt att känna smärta eller obehag runt ett ärr?',
                  text: '<p class="p200">Ja, många individer upplever smärta, klåda eller obehag i och runt ärrvävnaden. Särskilt under de tidiga stadierna av läkning kan kollagenfibrerna bli strama, vilket ger en dragande eller klämmande känsla. Smärta eller obehag kan också vara kopplat till nervskada, irritation eller inflammation i området. Med tiden tenderar dessa känslor att minska för de flesta ärr, men om smärtan kvarstår eller är svår, bör medicinsk rådgivning sökas.</p>'
            ),
            new Question(
                  title: 'Vilka är de vanligaste behandlingsmetoderna för operations- och skadeärr?',
                  text: '<p class="p200">Det finns flera behandlingsalternativ för operations- och skadeärr, och valet av metod beror på ärrets typ, placering och den enskilda patientens behov. De mest populära metoderna inkluderar laserbehandling, som bryter ner ärrvävnaden och stimulerar hudens naturliga läkningsprocess; microneedling, där små nålar används för att skapa mikroskopiska sår i huden vilket aktiverar kollagenproduktionen; och kemisk peeling, där syror appliceras för att ta bort de yttersta hudlagren och främja ny hudtillväxt.</p>'
            ),

      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till operations- och skadeärr";

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
$skinguide_url_title = "Läs fler guider om operations- och skadeärr";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av operation- och skadeärr',
            image_title: 'Cazzandra Lindberg - Expert på behandling av operation- och skadeärr'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på operation- och skadeärr',
            image_title: 'Veronika Benedik - Specialist inom vård av operation- och skadeärr'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom hantering av operation- och skadeärr',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på operation- och skadeärr'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av operation- och skadeärr',
            image_title: 'Vilma Libom - Expert inom behandling av operation- och skadeärr'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Ärr Specialiserade Hudterapeuter";

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
$brands_url_title = "Varumärken för operations- och skadeärr behandling";

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
      <meta property="og:image" content="<?php echo $seo_image ?>" />

      <meta property="twitter:title" content="<?php echo $seo_title ?>" />
      <meta property="twitter:description" content="<?php echo $seo_description ?>" />
      <meta property="twitter:image" content="<?php echo $seo_image ?>" />
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