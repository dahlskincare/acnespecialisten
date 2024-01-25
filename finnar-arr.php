<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Ärr från Finnar - Behandlingsmetoder, Orsaker och Hur Man Förebygger | Acnespecialisten';
$seo_description = 'Lär dig allt om ärr som uppstår från finnar, inklusive deras bakomliggande orsaker, effektiva metoder för behandling, och hur du kan förebygga dem. Sök professionell vägledning och skräddarsydda lösningar från Acnespecialisten.';
$seo_keywords = 'ärr från finnar, behandling av ärr från finnar, orsaker till ärr från finnar, förebygga ärr från finnar, minska ärr från finnar, ärrminskning, hudförbättring, behandling av ärr';




$title = 'Ärr från Finnar';

$image_small = 'bilder/problem/424x324/arr-fran-finnar.webp';
$image_large = 'bilder/problem/424x456/arr-fran-finnar.webp';
$image_title = 'Visar en hud med ärr från finnar';
$image_alt = 'Bild som illustrerar hur ärr från finnar ser ut på huden';
$description = 'Har du problem med ärr som uppstått från finnar? Vi förstår frustrationen och vill hjälpa dig. Här förklarar vi vad som kännetecknar dessa ärr, hur de kan uppstå, och hur Acnespecialisten kan stödja dig i en personligt anpassad behandlingsprocess. Vårt mål är att återställa din huds släthet och utseende. Tveka inte att boka en tid hos oss för en individuell konsultation och ta steget mot en klarare och friskare hud.';



$akas = [
      new Link(
            label: 'Fläckar',
            url: 'problem/arr-fran-finnar/postinflammatorisk-hyperpigmentering',
            title: 'Utforska orsakerna, symptomen och de effektiva behandlingarna för postinflammatorisk hyperpigmentering i form av fläckar från finnar'
      ),
      new Link(
            label: 'Gropar',
            url: 'problem/arr-fran-finnar/atrofiska-arr',
            title: 'Lär dig mer om atrofiska ärr i form av gropar som uppstått från finnar och upptäck våra specialiserade behandlingsalternativ'
      ),

];


$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis konsultation för behandling av ärr från finnar";

$booking_url = "https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka din tid för behandling av ärr från finnar";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis konsultation för ärr från finnar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka din tid för behandling av ärr från finnar";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis konsultation för ärr från finnar";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka din tid för behandling av ärr från finnar";

$nav_buttons = array(
      'about' => 'Om Ärrbildning',
      'approach' => 'Metoden',
      'symptoms' => 'Typer',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om ärr från finnar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är ärr från finnar?',
            content: '<p class="p200">Ärr från finnar i form av gropar och fläckar kan uppstå när en inflammation skadar hudlagren. Detta kan hända när porerna täpps till och inte kan göra sig av med sitt innehåll. Ärrbildningen som uppstår kan vara en varaktig påminnelse om tidigare hudproblem och kan variera i form och storlek, påverka både utseendet och känslan på huden.</p>',
            extended_content: '<p class="p200 mt-xl">Ärr i form av gropar och fläckar kan visa sig på olika sätt. Vid milda fall kan det resultera i färgförändringar på huden, medan mer allvarliga fall kan leda till gropar och permanent ärrbildning. Gropar är exempel på atrofiska ärr, som kan delas in i olika typer som ispickar, rullande ärr och lådformade ärr. Varje typ kräver en unik behandlingsmetod.</p>
            <p class="p200 mt-xl">Hos oss på Acnespecialisten, med över 30 års erfarenhet av att behandla ärr från finnar, erbjuder vi de mest effektiva metoderna. Behandlingen måste skräddarsys efter din hudtyp och dina specifika ärr. Våra specialister står redo att erbjuda dig en kostnadsfri hudkonsultation för att identifiera din ärrtyp och utforma en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som stöttar dig genom hela behandlingsprocessen, från start till mål.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man ärr från finnar?',
            content: '<p class="p200">Ärr från finnar kan uppstå när en finne orsakar en inflammation som fräter på huden. Såren som skapas kan leda till missfärgningar och, om de fortsätter att skada huden under en längre tid, kan de förändra hudstrukturen och orsaka gropar. Inflammerade finnar som tränger djupt in i huden kan också skada vävnaden nedanför, vilket leder till ärrbildning i form av både gropar och fläckar.</p>',
            extended_content: '<p class="p200 mt-xl">Både för mycket och för lite kollagen vid läkningen kan resultera i olika typer av ärr. Felaktig hantering av finnar, som att peta och klämma, kan förvärra ärrbildningen, och felaktig behandling kan orsaka permanenta ärr. Förebyggande åtgärder, som rätt hudvård och tidig behandling, kan minska risken för ärrbildning.</p>
            <p class="p200 mt-xl">På Acnespecialisten koncentrerar vi oss på att förstå ditt specifika behov och hudtillstånd. Med 30 års erfarenhet och de mest effektiva metoderna för att behandla ärr från finnar, arbetar vi för att minimera och förebygga permanenta märken på din hud. Att ta första steget med en kostnadsfri konsultation hos oss kan vara starten på din väg till en sund och klar hud. Våra hudvårdsexperter arbetar tillsammans med dig för att skapa en behandlingsplan som passar just din hud.</p>',
            icons: array()
      ),


      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får ärr från finnar?',
            content: '<p class="p200">Ärr från finnar är inte begränsat till en viss ålder eller hudtyp. Det kan påverka både män och kvinnor i alla åldrar. Genetik kan spela en roll, och individer med familjemedlemmar som har sådana ärr kan vara mer mottagliga. Mörkare hudtoner kan också vara mer benägna att uppleva postinflammatorisk hyperpigmentering, vilket kan leda till missfärgningar och gropar.</p>',
            extended_content: '<p class="p200 mt-xl">Livsstilsfaktorer som stress och hudvård spelar en nyckelroll i utvecklingen av ärr från finnar. Att upprätthålla en sund livsstil och tidig behandling av finnar kan förhindra både ärrbildning och hyperpigmentering. På Acnespecialisten ser vi varje individ som unik och erbjuder anpassade behandlingsplaner tillsammans med din personliga hudterapeut.</p>
            <p class="p200 mt-xl">Med en omfattande erfarenhet av behandling av olika hudtyper och ärr från finnar, kan Acnespecialisten erbjuda lösningar som är anpassade för dig. Vi ser fram emot att börja din resa mot en klar och sund hud med en kostnadsfri hudkonsultation. Att ta steget mot en sund livsstil och rätt hudvård kan vara avgörande för att förhindra sådana ärr och fläckar. Boka din tid hos oss redan idag!</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man ärr från finnar?',
            content: '<p class="p200">Ärr från finnar kan uppstå på områden som har påverkats av finnar. Dessa ärr är vanligast i ansiktet, som kinderna, pannan och hakan, men kan också finnas på ryggen, bröstet, axlarna och nacken. De är inte begränsade till dessa områden och kan uppstå på andra delar av kroppen.</p>',
            extended_content: '<p class="p200 mt-xl">Behandlingen av ärr från finnar kan variera beroende på dess typ och plats. Det kan innefatta allt från laserbehandlingar till kemiska peelingar och microneedling. Hos Acnespecialisten erbjuder vi behandlingar som riktar sig mot ärr oavsett var de befinner sig på kroppen, och vi anpassar behandlingsval efter din unika hudtyp och behov.</p>
            <p class="p200 mt-xl">Att behandla ärr från finnar är en process som kan kräva tid och tålamod. Med stöd från Acnespecialisten kan du förvänta dig en personlig och effektiv behandlingsplan. Vi arbetar för att uppfylla dina behov och mål, och vi bjuder in dig till en kostnadsfri konsultation för att börja din resa mot en jämn och vacker hud. Boka din tid hos oss och ta första steget mot en ärrfri hud idag!</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Diagnostisera',
            content: 'På AcneSpecialisten tar en erfaren hudterapeut hand om dig, undersöker dina hudproblem och identifierar specifika ärr från finnar som gropar och fläckar. Vi tar hänsyn till dina unika behov och skapar en skräddarsydd behandlingsplan för att ge dig de bästa resultaten.',
            url_label: 'Boka en gratis konsultation',
            url: 'gratis-hudkonsultation.php',
            url_title: 'Boka din kostnadsfria konsultation om ärr från finnar idag'
      ),
      new TreatmentStep(
            title: 'Behandlingsprocess',
            content: 'Genom att använda specialiserade metoder för behandling av ärr från finnar, erbjuder vi lösningar som är perfekt anpassade till dina specifika behov. Vår expertis ger en effektiv förbättring av hudens utseende, så att du snabbt kan se resultat och känna dig nöjd med din hud.',
            url_label: 'Utforska våra ärrbehandlingar',
            url: 'behandla-finnar-arr.php',
            url_title: 'Upptäck våra unika och effektiva behandlingar för ärr från finnar'
      ),
);


$treatment_link = '<a href="problem/aknearr/aknearrbehandling" title="Utforska effektiva behandlingar mot ärr" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot ärr</a>';

$symptoms_title = 'Olika typer av ärr';

$symptoms = array(
      new Symptom(
            name: 'Hyperpigmentering efter inflammation (PIH)',
            aka: 'Också refererad som mörka eller bruna märken',
            content: 'Denna sort av fläckar uppstår som följd av inflammation i huden orsakad av akne. Det är inte egentliga ärr utan representerar en ökning av pigmentet melanin som ger huden dess kulör. När huden reparerar sig själv, kan det leda till en ökad melaninproduktion, vilket ger mörkare märken. De kan variera i färg från brun till svart och till och med blå, beroende på hudtyp. Fläckarna ligger plant mot huden, till skillnad från förhöjda eller intryckta akneärr.',
            url: 'problem/aknearr/hyperpigmentering-efter-inflammation',
            url_title: 'Lär dig mer om hyperpigmentering efter inflammation',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/hyperpigmentering_efter_inflammation.webp',
            image_alt: 'Bild som visar hyperpigmentering efter inflammation',
            image_title: 'Hyperpigmentering efter inflammation'
      ),
      new Symptom(
            name: 'Djupa "ice-pick" ärr',
            aka: 'Liknande små gropar eller hål gjorda med en ishacka',
            content: 'Dessa små och djupa ärr som påminner om en ishackas märken sträcker sig in i huden. De börjar smalt vid ytan och vidgas nedåt. Denna djupa hålighet ger ärret dess speciella utseende. Detta är en ärrtyp som ofta följer efter cystisk akne eller infektioner i huden och kan vara utmanande att behandla på grund av deras djup. De kan finnas var som helst där akne har varit, men är mest förekommande på kinderna.',
            url: 'problem/aknearr/djupa-arr',
            url_title: 'Lär dig mer om djupa "ice-pick" ärr',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/djupa-icepick-arr.webp',
            image_alt: 'Bild som visar djupa "ice-pick" ärr',
            image_title: 'Djupa "ice-pick" ärr'
      ),
      new Symptom(
            name: 'Erytem efter inflammation (PIE)',
            aka: 'Visar sig som rosa eller lila fläckar eller missfärgningar',
            content: 'Erytem efter inflammation manifesterar sig som rosa eller lila märken på huden efter en inflammation orsakad av akne. Denna missfärgning beror på skador eller förstöring av blodkärlen under inflammationsprocessen. Fläckarna kan vara ömma eller klia och bleknar vanligtvis med tiden. De är dock mer ihärdiga hos personer med ljusare hudton och kan ibland misstas för ärrvävnad, även om det inte är äkta ärr.',
            url: 'problem/aknearr/erytem-efter-inflammation',
            url_title: 'Lär dig mer om erytem efter inflammation',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/erytem_efter_inflammation.webp',
            image_alt: 'Bild som visar erytem efter inflammation',
            image_title: 'Erytem efter inflammation'
      ),

      new Symptom(
            name: '"Boxcar" ärr av atrofisk typ',
            aka: 'Jämförbara med gropar eller brännskador',
            content: 'Dessa är karakteristiska akneärr som framträder som runda eller ovala fördjupningar med skarpt definierade kanter. Ärr av denna typ skapas när akne bryter ner hudens kollagen, vilket resulterar i en påtaglig sänkning. Storlek och djup kan variera, och de har likheter med ärr orsakade av vattkoppor. Denna ärrtyp är vanligtvis belägen på kinder och tinningar och kan vara mycket iögonfallande om de är omfattande.',
            url: 'problem/aknearr/boxcar-arr',
            url_title: 'Lär dig mer om "Boxcar" ärr av atrofisk typ',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/boxcar.webp',
            image_alt: 'Bild som visar "Boxcar" ärr av atrofisk typ',
            image_title: '"Boxcar" ärr av atrofisk typ'
      ),
      new Symptom(
            name: 'Hypopigmentering efter inflammation',
            aka: 'Representeras av ljusa eller vita märken',
            content: 'Hypopigmentering efter inflammation sker när huden tappar pigmentering på platser där en inflammatorisk hudsjukdom, som akne, har läkt. Detta skapar ljusare fläckar som kan vara tydliga beroende på hudfärgen. Det är inte ett äkta ärr, utan en temporär minskning av pigment och brukar normalisera sig med tiden eller med rätt behandling.',
            url: 'problem/aknearr/hypopigmentering-efter-inflammation',
            url_title: 'Lär dig mer om hypopigmentering efter inflammation',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/hypopigmentering_efter_inflammation.webp',
            image_alt: 'Bild som visar hypopigmentering efter inflammation',
            image_title: 'Hypopigmentering efter inflammation'
      ),
      new Symptom(
            name: 'Atrofiska "rolling" ärr',
            aka: 'Liknande små fördjupningar eller vågor i huden',
            content: 'Denna typ av akneärr kännetecknas av dess oregelbundna form och utseendet av fördjupningar som ger huden en rullande eller vågig yta. De uppstår när underliggande stödstrukturer i huden bryts ner, vilket resulterar i en förlust av stöd och struktur. Denna förändring i hudens yta ger ett intryck av slätta, skålformade fördjupningar som flyter samman. Ärr av denna typ kan behandlas, men kräver ofta en kombination av tekniker på grund av deras komplexa natur.',
            url: 'problem/aknearr/atrofiska-rolling-arr',
            url_title: 'Lär dig mer om atrofiska "rolling" ärr',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/atrofiska_rolling_arr.webp',
            image_alt: 'Bild som visar atrofiska "rolling" ärr',
            image_title: 'Atrofiska "rolling" ärr'
      ),

      new Symptom(
            name: 'Hypertrofiska Ärr',
            aka: 'Även benämnda keloid ärr',
            content: 'Hypertrofiska ärr, som är både tjocka och upphöjda, bildas i regel som svar på en skada, operation eller finnar. De skiljer sig från keloidärr genom att de inte sträcker sig utanför det område där skadan ursprungligen inträffade. Dessa ärr är ofta rödaktiga eller rosafärgade och kan kännas känsliga eller klia. Med tiden kan de minska i framträdande, även om deras konsistens och nyans kan skifta beroende på sårläkning och hudtyp.',
            url: 'problem/arr-fran-finnar/hypertrfiska-arr',
            url_title: 'Få mer information om hypertrofiska ärr',
            url_label: 'Läs mer här',
            image: 'images/symptoms/102x102/hypertrophic-scars.webp',
            image_alt: 'En bild som visar hypertrofiska ärr',
            image_title: 'Hypertrofiska ärr (keloid ärr)'
      ),
      new Symptom(
            name: 'Atrofiska Ärr',
            aka: 'Ibland refererade till som gropar',
            content: 'Atrofiska ärr framträder ofta efter akne eller inflammation i huden och de visar sig som små inbuktningar eller fördjupningar i hudytan. De kan likna små hål eller dalar och uppstår när det sker en minskning av kollagen och stödjevävnad under ytan, vilket får området att sjunka in. Storleken och formen på dessa ärr kan variera, och de är mest framträdande i ansiktet, där de kan ge huden en ojämn textur.',
            url: 'problem/arr-fran-finnar/atrofiska-arr',
            url_title: 'Lär dig mer om atrofiska ärr (gropar)',
            url_label: 'Läs mer här',
            image: 'images/symptoms/102x102/atrofiska-arr.webp',
            image_alt: 'Illustration av atrofiska ärr',
            image_title: 'Atrofiska ärr (gropar)'
      ),


);

$headline01 = "01. Identifiera dina ärr från finnar";

$service = new Service(
      title: 'Konsultation för Ärr från Finnar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en persnolig konsultation med en specialist inom ärr från finnar genomförs en detaljerad analys av dina specifika ärr. Vi fotograferar de berörda områdena och går igenom dina mål och förväntningar. En personlig behandlingsplan utformas, anpassad till dina unika behov och ärrtypen som du har.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av ärr från finnar',
      image_title: 'Konsultation för behandling av ärr från finnar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för ärr från finnar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: '',
      url_label: '',
      url_title: '',
);



$headline02 = "02. Behandling av dina ärr som uppstått från finnar";

$services = array(
      new Service(
            title: 'Laserbehandling för Ärr från Finnar',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserterapi för ärr som orsakats av finnar utnyttjar fokuserade ljusstrålar för att behandla och reducera dessa ärr. Behandlingen främjar hudens kollagenproduktion och tar bort skadade hudceller, vilket resulterar i en jämnare hud och mindre synliga ärr.',
            image_small: 'images/services/200x200/laserbehandling.webp',
            image_large: 'images/services/200x200/laserbehandling.webp',
            image_alt: 'Bild av en laserterapi för ärr som orsakats av finnar',
            image_title: 'Laserterapi för ärr från finnar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserterapi för ärr från finnar',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserterapi för ärr som uppstått från finnar',
            url: '',
            url_label: '',
            url_title: '',
      ),
      new Service(
            title: 'Kemisk Peeling för Ärr från Finnar',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling för ärr som bildats av finnar är en beprövad metod som förnyar och förbättrar hudens yta. Behandlingen används för att målinriktat exfoliera och ta bort det yttersta hudlagret, vilket bidrar till hudens återväxt och synligt reducerar ärr och ojämnheter.',
            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling för ärr orsakade av finnar',
            image_title: 'Kemisk Peeling för Ärr från Finnar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för ärr från finnar',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för ärr som uppstått från finnar',
            url: '',
            url_label: '',
            url_title: '',
      ),
      new Service(
            title: 'Microneedling för Ärr från Finnar',
            duration: '60 min',
            price: '2995 kr',
            content: 'Microneedling för ärr som bildats av finnar är en avancerad teknik som behandlar speciellt atrofiska ärr. Små, fina nålar används för att orsaka kontrollerade skador i huden, vilket igångsätter hudens läkningsprocess och kollagenproduktion. Resultatet blir en förbättrad hudtextur och mindre framträdande ärr.',
            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling för ärr som orsakats av finnar',
            image_title: 'Microneedling för Ärr från Finnar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för ärr från finnar',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling för ärr som bildats av finnar',
            url: '',
            url_label: '',
            url_title: '',
      ),
);


$articles = array(
      new Article(
            title: 'Hur behandlar man ärr som uppstått från finnar?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför välja oss för behandling av ärr från finnar?',
            image_title: 'Varför välja oss för behandling av ärr från finnar?',
            content: '<p class="p200">Vi på AcneSpecialisten erbjuder de mest innovativa och effektiva metoderna för att behandla ärr orsakade av finnar. Oavsett ärrtyp har vi lösningar – laserterapi för komplexa fall, microneedling för atrofiska ärr och kemisk peeling för mindre ojämnheter. Vår styrka ligger i att leverera individualiserade behandlingar, där din tillfredsställelse står i fokus.</p>
            <p class="p200 mt-m">Börja din resa mot en klarare hud med en helt kostnadsfri konsultation. Vi analyserar ditt specifika fall och kopplar dig med en personlig hudterapeut som kommer att stödja och vägleda dig genom processen, med en behandlingsplan som är skräddarsydd för just dig. Boka din konsultation idag!</p>',
      ),
      new Article(
            title: 'Varför AcneSpecialisten för ärr från finnar?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka AcneSpecialisten för ärr från finnar?',
            image_title: 'När ska jag besöka AcneSpecialisten för ärr från finnar?',
            content: '<p class="p200">Välja rätt behandling för ärr som uppstått från finnar kan vara en utmaning. Hos AcneSpecialisten har vi över 30 års erfarenhet av att förstå och behandla denna typ av hudproblem. Vi är inte bara experter utan även pionjärer inom ärrreducering och laserbehandling.</p>
            <p class="p200 mt-m">Det som gör oss unika är vår specialiserade kunskap och dedikation. Vi ser inte bara till att förbättra din hud utan strävar också efter att stärka ditt självförtroende och välmående. </p>
            <p class="p200 mt-m">När du väljer AcneSpecialisten, får du inte bara behandling, utan en partner på din resa mot en ny början. Ta första steget med oss och boka din kostnadsfria konsultation idag. Vår professionella och erfarna team väntar på att få hjälpa dig.</p>',
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
$results_url_title = "se flera behandlingsresultat från akneärr";


$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'En behandling som fungerar!',
            text: "Var osäker först, men kliniken förklarade allt tydligt och resultatet blev bättre än förväntat. Tack för ert professionella bemötande!",
            signature: 'Erik'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Äntligen ett resultat jag kan se!',
            text: "Har testat olika behandlingar utan framgång sen hitta jag AcneSpecialisten. Nu känner jag mig som en ny person. Mycket nöjd med resultatet och personalen!",
            signature: 'Anna'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Proffsigt och effektivt!',
            text: "Endast gjort 2 behandlingar men det har redan gett mig hopp, Jag känner mig trygg med deras kunskap och har redan sett fantastiska förbättringar. En klinik jag verkligen rekommenderar.",
            signature: 'Jonas'
      ),
);


$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Allt du behöver veta om ärr av finnar' => array(
            new Question(
                  title: 'Kan jag helt bli fri från ärr som orsakats av finnar?',
                  text: '<p class="p200">Absolut, ärr som uppstått från finnar kan behandlas. Efter en grundlig analys av din hud sätter vi upp en behandlingsplan som är skräddarsydd för dig. Vi samarbetar tätt för att se till att dina ärr försvinner, även om behandlingstiden kan variera.</p>'
            ),
            new Question(
                  title: 'Kommer ärrbildningen från att jag klämt på finnarna?',
                  text: '<p class="p200">Att klämma på finnar kan bidra, men är inte den enda orsaken till ärrbildning. Ibland beror det på att finnar inte blivit korrekt behandlade. Vi kan identifiera ditt unika fall och arbeta för att förhindra framtida ärr.</p>'
            ),
            new Question(
                  title: 'Är det möjligt att ärr som behandlats kommer tillbaka?',
                  text: '<p class="p200">En gång behandlade ärr kommer inte att återuppstå. Men utan korrekt behandling av finnar, kan nya ärr uppstå. Vårt fokus ligger på både att behandla ärr och förhindra nya finnar.</p>'
            ),
            new Question(
                  title: 'Hur många sessioner behövs för att radera mina ärr från finnar?',
                  text: '<p class="p200">Det finns ingen standardmängd sessioner, då detta beror på din hud och dina ärr. Vi gör en individuell plan och din hudterapeut kommer att guida dig genom processen och ge dig en uppskattning av hur många behandlingar som behövs.</p>'
            ),
            new Question(
                  title: 'Vilka tekniker används för att behandla olika ärr från finnar?',
                  text: '<p class="p200">Beroende på din hud och ärrtyp erbjuder vi olika metoder, inklusive laser, peeling och microneedling. Vi kommer att rekommendera den bästa metoden för just dig under en kostnadsfri konsultation.</p>'
            ),
            new Question(
                  title: 'Är det smärtsamt att behandla ärr från finnar? Hur ser eftervård ut?',
                  text: '<p class="p200">Vi gör vårt bästa för att minimera obehag. Eftervården är anpassad till varje individ och du får fullständiga instruktioner för hudvård efter varje behandling.</p>'
            ),
            new Question(
                  title: 'Vilken tid behöver jag mellan behandlingar? När kommer jag att se förbättringar?',
                  text: '<p class="p200">Behandlingsintervaller och tiden till synliga resultat varierar beroende på din situation. Din hudterapeut kommer att fastställa en plan inklusive en tidslinje som är anpassad för just dig.</p>'
            )
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
            title: 'Hudterapeut specialiserad på behandling av ärr orsakade av finnar sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med expertis i ärr av finnar',
            image_title: 'Cazzandra Lindberg - Expert på behandling av ärr från finnar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Erfaren hudterapeut inriktad på ärr som uppstått från finnar sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut fokuserad på ärr av finnar',
            image_title: 'Veronika Benedik - Specialist inom behandling av ärr som uppstått av finnar'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut med inriktning mot ärr bildade av finnar sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut specialiserad på behandling av ärr orsakade av finnar',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på ärr från finnar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut med expertis inom ärr som uppstått genom finnar sedan 2019',
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
            aka: 'Finnar',
            image: 'images/problems/102x102/akne.webp',
            image_alt: 'Bild som visar aktiv akne, en vanlig hudåkomma',
            image_title: 'Aktiv Akne - en vanlig hudåkomma',
            url: 'akne.php',
            url_title: 'Akne'
      ),

      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);
$brands = array(
      new Brand(
            label: 'Powerlite Photonova',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite-photonova',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
      ),
      new Brand(
            label: 'Dermapen',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: 'dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'CryoPen Brand Logo',
            image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'cryopen.php',
            url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
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
            image: 'images/brands/prx-t33.svg',
            image_alt: 'PRX-T33 Brand Logo',
            image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
            url: 'prx-t33.php',
            url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial Brand Logo',
            image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
            url: 'hydrafacial.php',
            url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'Infuzion Brand Logo',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
            url: 'infuzion.php',
            url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för ärr";

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
                                          <a href="<?php echo $booking_url ?>" title="B<?php echo $booking_url_title ?>" class="button b200 white l10n"><?php echo $booking_url_label ?></a>
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