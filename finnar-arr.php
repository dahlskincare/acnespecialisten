<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort ärr från finnar huden | AcneSpecialisten';
$seo_description = 'Lär dig allt om ärr som uppstår från finnar. Vi har behandlat ärr från finnar i 30 år. Boka tid för en gratis hudkonsultation så hjälper vi dig!';
$seo_keywords = 'ärr från finnar, ärr från finnar Stockholm, ärr från finnar gropar, orsaker till ärr från finnar, vad är ärr från finnar, orsaker till ärr från finnar, varför får man ärr från finnar, var ärr från finnar, varför ärr från finnar';
$seo_image = 'bilder/hudproblem/424x324/arr-fran-finnar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Ärr från finnar', '/finnar-arr.php'),
);

$image_small = 'bilder/hudproblem/358x274/arr-fran-finnar.webp';
$image_large = 'bilder/hudproblem/424x456/arr-fran-finnar.webp';
$image_title = 'Visar en hud med ärr från finnar';
$image_alt = 'Närbild på ärr från finnar  i ansiktet';

$green_banner_content = new GreenBannerContent(
      title: 'Ärr från finnar',
      description: 'Ärr efter finnar bildas när inflammationen skadar hudens kollagen, vilket påverkar både struktur och utseende. Här förklarar vi processen bakom ärrbildning och presenterar behandlingsmetoder för att förbättra hudens textur.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för är från finnar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för ärr från finnar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Fläckar',
                  url: 'postinflammatorisk-hyperpigmentering.php',
                  title: 'Utforska orsakerna, symptomen och de effektiva behandlingarna för postinflammatorisk hyperpigmentering i form av fläckar från finnar'
            ),
            new Link(
                  label: 'Gropar',
                  url: 'atrofiska-arr.php',
                  title: 'Lär dig mer om atrofiska ärr i form av gropar som uppstått från finnar och upptäck våra specialiserade behandlingsalternativ'
            ),

      ],
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är ärr från finnar?',
            content: '<p class="p200">Ärr från finnar i form av fläckar och gropar kan uppstå när en inflammation skadar hudlagren. Detta kan hända när porerna täpps till och inte kan göra sig av med sitt innehåll. Ärrbildningen som uppstår kan vara en varaktig påminnelse om tidigare hudproblem och kan variera i form och storlek, påverka både utseendet och känslan på huden.</p>',
            extended_content: '<p class="p200 mt-xl">Ärr i form av gropar och fläckar kan visa sig på olika sätt. Vid milda fall kan det resultera i färgförändringar på huden, medan mer allvarliga fall kan leda till gropar och permanent ärrbildning. Gropar är exempel på atrofiska ärr, som kan delas in i olika typer som ispickar, rullande ärr och lådformade ärr. Varje typ kräver en unik behandlingsmetod.</p>
            <p class="p200 mt-xl">Hos oss på Acnespecialisten, med över 30 års erfarenhet av att behandla ärr från finnar, erbjuder vi de mest effektiva metoderna. Behandlingen måste skräddarsys efter din hudtyp och dina specifika ärr. Våra specialister står redo att erbjuda dig en kostnadsfri hudkonsultation för att identifiera din ärrtyp och utforma en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som stöttar dig genom hela behandlingsprocessen, från start till mål.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man ärr från finnar?',
            content: '<p class="p200">Ärr från finnar kan uppstå när en finne orsakar en inflammation som fräter på huden. Såren som skapas kan leda till missfärgningar och, om de fortsätter att skada huden under en längre tid, kan de förändra hudstrukturen och orsaka gropar. Inflammerade finnar som tränger djupt in i huden kan också skada vävnaden nedanför, vilket leder till ärrbildning i form av gropar.</p>',
            extended_content: '<p class="p200 mt-xl">Både för mycket och för lite kollagen vid läkningen kan resultera i olika typer av ärr. Felaktig hantering av finnar, som att peta och klämma, kan förvärra ärrbildningen, och felaktig behandling kan orsaka permanenta ärr. Förebyggande åtgärder, som rätt hudvård och tidig behandling, kan minska risken för ärrbildning.</p>
            <p class="p200 mt-xl">På Acnespecialisten koncentrerar vi oss på att förstå ditt specifika behov och hudtillstånd. Med 30 års erfarenhet och de mest effektiva metoderna för att behandla ärr från finnar, arbetar vi för att minimera och förebygga permanenta märken på din hud. Att ta första steget med en kostnadsfri konsultation hos oss kan vara starten på din väg till en sund och klar hud. Våra hudvårdsexperter arbetar tillsammans med dig för att skapa en behandlingsplan som passar just din hud.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får ärr från finnar?',
            content: '<p class="p200">Ärr från finnar är inte begränsat till en viss ålder eller hudtyp. Det kan påverka både män och kvinnor i alla åldrar. Genetik kan spela en roll, och individer med familjemedlemmar som har sådana ärr kan vara mer mottagliga. Mörkare hudtoner kan också vara mer benägna att uppleva postinflammatorisk hyperpigmentering, vilket kan leda till missfärgningar och gropar.</p>',
            extended_content: '<p class="p200 mt-xl">Livsstilsfaktorer som stress och hudvård spelar en nyckelroll i utvecklingen av ärr från finnar. Att upprätthålla en sund livsstil och tidig behandling av dina finnar kan förhindra både ärrbildning i form av postinflammatorisk hyperpigmentering (fläckar) och atrofiska ärr (gropar). På Acnespecialisten ser vi varje individ som unik och erbjuder anpassade behandlingsplaner tillsammans med din personliga hudterapeut.</p>
            <p class="p200 mt-xl">Med en omfattande erfarenhet av behandling av olika hudtyper och ärr från finnar, kan Acnespecialisten erbjuda lösningar som är anpassade för dig. Vi ser fram emot att börja din resa mot en klar och sund hud med en kostnadsfri hudkonsultation. Boka din tid hos oss redan idag!</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man ärr från finnar?',
            content: '<p class="p200">Ärr från finnar kan uppstå på områden som har påverkats av finnar. Dessa ärr är vanligast i ansiktet, som kinderna, pannan och hakan, men kan också finnas på ryggen, bröstet, axlarna och nacken. De är inte begränsade till dessa områden och kan uppstå på andra delar av kroppen.</p>',
            extended_content: '<p class="p200 mt-xl">Behandlingen av ärr från finnar kan variera beroende på dess typ och plats. Det kan innefatta allt från laserbehandlingar till kemiska peelingar och microneedling. Hos Acnespecialisten erbjuder vi behandlingar som riktar sig mot ärr oavsett var de befinner sig på kroppen, och vi anpassar behandlingsval efter din unika hudtyp och behov.</p>
            <p class="p200 mt-xl">Att behandla ärr från finnar är en process som kan kräva tid och tålamod. Med stöd från Acnespecialisten kan du förvänta dig en personlig och effektiv behandlingsplan. Vi arbetar för att uppfylla dina behov och mål, och vi bjuder in dig till en kostnadsfri konsultation för att börja din resa mot en jämn och vacker hud. Boka din tid hos oss och ta första steget mot en ärrfri hud idag!</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten tar en erfaren hudterapeut hand om dig, undersöker dina hudproblem och identifierar specifika ärr från finnar som fläckar och gropar. Vi tar hänsyn till dina unika behov och skapar en skräddarsydd behandlingsplan för att ge dig de bästa resultaten.',
            url_label: 'Boka en gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            url_title: 'Boka din kostnadsfria konsultation om ärr från finnar idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Genom att använda specialiserade metoder för behandling av ärr från finnar, erbjuder vi lösningar som är perfekt anpassade till dina specifika behov. Vår expertis ger en effektiv förbättring av hudens utseende, så att du snabbt kan se resultat och känna dig nöjd med din hud.',
            url_label: 'Utforska våra behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_AcneScars',
            url_title: 'Upptäck våra unika och effektiva behandlingar för ärr från finnar'
      ),
);

$treatment_link = '<a href="behandla-finnar-arr.php" title="Utforska effektiva behandlingar mot ärr" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$symptoms_title = 'Olika typer av ärr';

$symptoms = array(
      new Symptom(
            name: 'Hyperpigmentering efter inflammation (PIH)',
            aka: 'Mörka eller bruna märken',
            content: 'Mörkare fläckar som uppstår efter hudinflammation, ökar melanin och ger fläckar i olika mörka nyanser. De är platta mot huden och skiljer sig från akneärr.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Lär dig mer om hyperpigmentering efter inflammation',
            url_label: 'Läs mer',
            image: 'bilder/hudtyper/232x232/postinflammatorisk-hyperpigmentering.webp',
            image_alt: 'Bild som visar hyperpigmentering efter inflammation',
            image_title: 'Hyperpigmentering efter inflammation'
      ),
      new Symptom(
            name: 'Atrofiska "ice-pick" ärr',
            aka: 'Små spetsiga gropar',
            content: 'Små, djupa ärr liknande ishacksmärken som ofta uppstår efter inflammerade finnar. Utmanande att behandla på grund av deras djup, är vanliga på kinderna.',
            url: 'atrofiska-arr.php',
            url_title: 'Lär dig mer om djupa "ice-pick" ärr',
            url_label: 'Läs mer',
            image: 'bilder/hudtyper/232x232/atrofiska-ice-pick-arr.webp',
            image_alt: 'Bild som visar djupa "ice-pick" ärr',
            image_title: 'Djupa "ice-pick" ärr'
      ),

      new Symptom(
            name: 'Atrofiska "Boxcar" ärr',
            aka: 'Fyrkantiga gropar',
            content: 'Boxliknande fördjupningar med skarpt definierade kanter. Ärr av denna typ skapas när akne bryter ner hudens kollagen, vilket resulterar i en påtaglig sänkning där storlek och djup kan variera. Denna ärrtyp är vanligtvis belägen på kinder och tinningar.',
            url: 'atrofiska-arr.php',
            url_title: 'Lär dig mer om "Boxcar" ärr av atrofisk typ',
            url_label: 'Läs mer',
            image: 'bilder/hudtyper/232x232/atrofiska-boxcar-arr.webp',
            image_alt: 'Bild som visar "Boxcar" ärr av atrofisk typ',
            image_title: '"Boxcar" ärr av atrofisk typ'
      ),
      new Symptom(
            name: 'Postinflammatorisk hypopigmentering',
            aka: 'Ljusa eller vita märken',
            content: 'Ljusare fläckar där hud har förlorat pigment efter akneinflammation, vilket skapar en tydlig kontrast. Detta skapar ljusare fläckar som kan vara tydliga beroende på hudfärgen efter att finnarna har läkt.',
            image: 'bilder/hudtyper/232x232/postinflammatorisk-hypopigmentering.webp',
            url: null,
            url_title: null,
            url_label: null,
            image_alt: 'Bild som visar hypopigmentering efter inflammation',
            image_title: 'Hypopigmentering efter inflammation'
      ),
      new Symptom(
            name: 'Atrofiska "rolling" ärr',
            aka: 'Runda skålformade gropar',
            content: 'Skålformade ärr som karaktäriseras av sin vågiga eller rullande yta på huden. De uppstår när underliggande hudvävnad förlorar sin stödstruktur, vilket resulterar i ojämna fördjupningar och en oregelbunden hudtextur.',
            url: 'atrofiska-arr.php',
            url_title: 'Lär dig mer om atrofiska "rolling" ärr',
            url_label: 'Läs mer',
            image: 'bilder/hudtyper/232x232/atrofiska-rolling-arr.webp',
            image_alt: 'Bild som visar atrofiska "rolling" ärr',
            image_title: 'Atrofiska "rolling" ärr'
      ),
      new Symptom(
            name: 'Postinflammatorisk erytem (PIE)',
            aka: 'Roöda, rosa eller lila fläckar',
            content: 'Hudtillstånd som karaktäriseras av röda till lila fläckar på huden, vilka uppstår som en följd av inflammation eller skada, exempelvis efter akneutbrott. Detta tillstånd beror på dilaterade eller skadade blodkärl under huden, vilket ger upphov till de distinkta röda fläckarna.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Lär dig mer om erytem efter inflammation',
            url_label: 'Läs mer',
            image: 'bilder/hudtyper/232x232/postinflammatorisk-erytem.webp',
            image_alt: 'Bild som visar erytem efter inflammation',
            image_title: 'Erytem efter inflammation'
      ),
      new Symptom(
            name: 'Hypertrofiska Ärr',
            aka: 'Keloid ärr',
            content: 'Tjocka, upphöjda ärr som bildas efter hudskada eller finnar, vanligtvis rödaktiga och kan kännas känsliga. Dessa ärr minskar över tid men kan ändra textur och färg.',
            //url: 'hudproblem/arr-fran-finnar/hypertrfiska-arr',
            //url_title: 'Få mer information om hypertrofiska ärr',
            //url_label: 'Läs mer här',
            image: 'bilder/symptom/102x102/hypertrofiska-arr.webp',
            image_alt: 'En bild som visar hypertrofiska ärr',
            image_title: 'Hypertrofiska ärr (keloid ärr)'
      ),
      new Symptom(
            name: 'Atrofiska Ärr',
            aka: 'Gropar',
            content: 'Fördjupningar i huden efter finnar, liknande små hål, orsakade av minskad kollagenproduktion. Dessa ger en ojämn hudtextur, särskilt i ansiktet.',
            url: 'atrofiska-arr.php',
            url_title: 'Lär dig mer om atrofiska ärr (gropar)',
            url_label: 'Läs mer här',
            image: 'bilder/hudtyper/232x232/atrofiska-arr.webp',
            image_alt: 'Illustration av atrofiska ärr',
            image_title: 'Atrofiska ärr (gropar)'
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för Ärr från Finnar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en specialist inom ärr från finnar genomförs en detaljerad analys av dina specifika ärr. Vi fotograferar de berörda områdena och går igenom dina mål och förväntningar. En personlig behandlingsplan utformas som är anpassad för just dina ärr.',
      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av ärr från finnar',
      image_title: 'Konsultation för behandling av ärr från finnar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för ärr från finnar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: '/gratis-hudkonsultation.php',
      url_label: 'Läs mer om konsultation',
      url_title: 'Läs mer om gratis hudkonsultation mot ärr från finnar',
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Laserbehandling för Ärr från Finnar',
            duration: '90 min',
            price: '4595 kr',
            content: 'Fokuserade ljusstrålar används för att behandla och reducera dessa ärr. Behandlingen främjar hudens kollagenproduktion och tar bort skadade hudceller, vilket resulterar i en jämnare hud och mindre synliga ärr.',
            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Bild av en laserterapi för ärr som orsakats av finnar',
            image_title: 'Laserterapi för ärr från finnar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserterapi för ärr från finnar',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserterapi för ärr som uppstått från finnar',
            url: '/laser-acnearr.php',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot ärr från finnar',
      ),
      new Service(
            title: 'Kemisk Peeling för Ärr från Finnar',
            duration: '30 min',
            price: '1995 kr',
            content: 'Förnyar och förbättrar hudens yta. Behandlingen används för att målinriktat exfoliera och ta bort det yttersta hudlagret, vilket bidrar till hudens återväxt och synligt reducerar ärr och ojämnheter.',
            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling för ärr orsakade av finnar',
            image_title: 'Kemisk Peeling för Ärr från Finnar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för ärr från finnar',
            booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för ärr som uppstått från finnar',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot ärr från finnar',
      ),
      new Service(
            title: 'Microneedling för Ärr från Finnar',
            duration: '60 min',
            price: '2995 kr',
            content: 'Avancerad teknik som behandlar speciellt atrofiska ärr. Små, fina nålar skapas för att orsaka kontrollerade skador i huden, vilket igångsätter hudens läkningsprocess och kollagenproduktion. Resultatet blir en förbättrad hudtextur och mindre framträdande ärr.',
            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling för ärr som orsakats av finnar',
            image_title: 'Microneedling för Ärr från Finnar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för ärr från finnar',
            booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling för ärr som bildats av finnar',
            url: '/microneedling-acnearr.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot ärr från finnar',
      ),
);


$articles = array(
      new Article(
            title: 'Hur får man bort ärren?',
            image_small: null,
            image_large: null,
            image_alt: 'Hur får man bort ärr från finnar?',
            image_title: 'Hur får man bort ärr från finnar?',
            content: '<p class="p200">Vi på AcneSpecialisten erbjuder de mest innovativa och effektiva metoderna för att behandla ärr orsakade av finnar. Oavsett ärrtyp har vi lösningar – laserterapi för komplexa fall, microneedling för atrofiska ärr och kemisk peeling för missfärgning. Vår styrka ligger i att leverera individualiserade behandlingar, där ditt resultat står i fokus.</p>
            <p class="p200 mt-m">Börja din resa mot en klarare hud med en helt kostnadsfri konsultation. Vi analyserar ditt specifika fall och tilldelar dig en personlig hudterapeut som kommer att stödja och vägleda dig genom processen, med en behandlingsplan som är skräddarsydd för just dig. Boka din konsultation idag!</p>',
      ),
      new Article(
            title: 'Varför AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför AcneSpecialisten?',
            image_title: 'Varför AcneSpecialisten?',
            content: '<p class="p200">Att välja rätt behandling för ärr kan vara en utmaning. Hos AcneSpecialisten har vi över 30 års erfarenhet av att förstå och behandla denna typ av hudproblem. Vi är inte bara experter utan även pionjärer inom ärrreducering och laserbehandling.</p>
            <p class="p200 mt-m">Det som gör oss unika är vår specialiserade kunskap och dedikation. Vi ser inte bara till att förbättra din hud utan strävar också efter att stärka ditt självförtroende och välmående. </p>
            <p class="p200 mt-m">När du väljer AcneSpecialisten, får du inte bara behandling, utan en partner på din resa mot en ny början. Ta första steget med oss och boka din kostnadsfria konsultation idag. Vår professionella och erfarna team väntar på att få hjälpa dig.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
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
$results_url_title = "se flera behandlingsresultat från akneärr";



$faq_categories = array(
      'Allt du behöver veta om ärr av finnar' => array(
            new Question(
                  title: 'Kan jag helt bli fri från ärr som orsakats av finnar?',
                  text: '<p class="p200">Absolut, ärr som uppstått från finnar kan behandlas. Efter en grundlig analys av din hud sätter vi upp en behandlingsplan som är skräddarsydd för dig. Vi samarbetar tätt för att se till att dina ärr försvinner.</p>'
            ),
            new Question(
                  title: 'Kommer ärrbildningen från att jag klämt på finnarna?',
                  text: '<p class="p200">Att klämma på finnar kan bidra, men är inte den enda orsaken till ärrbildning. Ibland beror det på att finnarna inte blivit korrekt behandlade. Vi kan identifiera ditt unika fall och arbeta för att bli av med befintliga ärr och förhindra framtida ärr.</p>'
            ),
            new Question(
                  title: 'Är det möjligt att ärr som behandlats kommer tillbaka?',
                  text: '<p class="p200">Behandlade ärr kommer inte att komma tillbaka. Men utan korrekt behandling av aktiva finnar, kan nya ärr uppstå. Vårt fokus ligger på att behandla och förebygga både finnar och ärren från finnarna.</p>'
            ),
            new Question(
                  title: 'Hur många behandlingar behövs för att radera mina ärr från finnar?',
                  text: '<p class="p200">Det finns ingen specifikt antal behandlingar, då detta beror på behandlingsmetod, din hud och dina ärr. Vi gör en individuell plan och din hudterapeut kommer att guida dig genom processen och ge dig en uppskattning av hur många behandlingar som behövs.</p>'
            ),
            new Question(
                  title: 'Vilka behandlingsmetoder används för att behandla olika ärr från finnar?',
                  text: '<p class="p200">Beroende på din hud och ärrtyp erbjuder vi olika metoder, inklusive laser, kemisk peeling och microneedling. Vi kommer att rekommendera den bästa metoden för just dig under en kostnadsfri konsultation.</p>'
            ),
            new Question(
                  title: 'Är det smärtsamt att behandla ärr från finnar? Hur ser eftervård ut?',
                  text: '<p class="p200">Vi gör vårt bästa för att minimera obehag och för våra mest smärtsamma behandlingar erbjuder vi bedövningskräm som appliceras 30 min innan behandling så att du inte känner någonting. Eftervården är anpassad till varje individ och du får fullständiga instruktioner för hudvård efter varje behandling.</p>'
            ),
            new Question(
                  title: 'Hur lång tid behöver jag mellan behandlingar? När kommer jag att se förbättringar?',
                  text: '<p class="p200">Behandlingsintervaller och tiden till synliga resultat varierar beroende på metoden och din huds förutsättningar. Din hudterapeut kommer att fastställa en plan inklusive en tidslinje som är anpassad för just dig.</p>'
            ),
      ),

);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till ärr";

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
$skinguide_url_title = "Läs fler guider om ärr från finnar";


$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med expertis i ärr av finnar',
            image_title: 'Cazzandra Lindberg - Expert på behandling av ärr från finnar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeutsedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut fokuserad på ärr av finnar',
            image_title: 'Veronika Benedik - Specialist inom behandling av ärr som uppstått av finnar'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut specialiserad på behandling av ärr orsakade av finnar',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på ärr från finnar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av ärr bildade av finnar',
            image_title: 'Vilma Libom - Expert inom behandling av ärr orsakade av finnar'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialiserade Hudterapeuter med inriktning mot ärr bildade av finnar";


$related_problems = array(
      new RelatedProblem(
            name: 'Aktiv Akne',
            aka: 'finnar',
            image: 'bilder/hudproblem/102x102/akne.webp',
            image_alt: 'Ansikte med aktiv akne',
            image_title: 'Aktiv Akne - en vanlig hudåkomma',
            url: 'acne.php',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Finnar',
            aka: 'akne',
            image: 'bilder/hudproblem/102x102/finnar.webp',
            image_alt: 'Ansikte med finnar',
            image_title: 'Finnar - ett vanligt hudproblem',
            url: 'finnar.php',
            url_title: 'Finnar'
      ),
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & fläckar',
            image: 'bilder/hudproblem/102x102/acnearr.webp',
            image_alt: 'Ansikte med ärr från acneärr',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'acnearr.php',
            url_title: 'Acneärr'
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
$brands_url_title = "Varumärken för ärr";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/finnar-arr.php" />

      <title><?php echo $seo_title ?></title>
      <meta name="description" content="<?php echo $seo_description ?>">
      <meta name="keywords" content="<?php echo $seo_keywords ?>">

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