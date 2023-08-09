<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Ärr från Finnar - Behandlingsmetoder, Orsaker och Hur Man Förebygger | Acnespecialisten';
$seo_description = 'Lär dig allt om ärr som uppstår från finnar, inklusive deras bakomliggande orsaker, effektiva metoder för behandling, och hur du kan förebygga dem. Sök professionell vägledning och skräddarsydda lösningar från Acnespecialisten.';
$seo_keywords = 'ärr från finnar, behandling av ärr från finnar, orsaker till ärr från finnar, förebygga ärr från finnar, minska ärr från finnar, ärrminskning, hudförbättring, behandling av ärr';




$title = 'Ärr från Finnar';

$image_small = 'images/problems/424x324/finnar.webp';
$image_large = 'images/problems/424x456/finnar.webp';
$image_title = 'Visar en hud med ärr från finnar';
$image_alt = 'Bild som illustrerar hur ärr från finnar ser ut på huden';
$description = 'Har du problem med ärr som uppstått från finnar? Vi förstår frustrationen och vill hjälpa dig. Här förklarar vi vad som kännetecknar dessa ärr, hur de kan uppstå, och hur Acnespecialisten kan stödja dig i en personligt anpassad behandlingsprocess. Vårt mål är att återställa din huds släthet och utseende. Tveka inte att boka en tid hos oss för en individuell konsultation och ta steget mot en klarare och friskare hud.';



$akas = [
      new Link(
            label: 'Gropar',
            url: 'problem/arr-fran-finnar/atrofiska-arr',
            title: 'Lär dig mer om atrofiska ärr i form av gropar som uppstått från finnar och upptäck våra specialiserade behandlingsalternativ'
      ),
      new Link(
            label: 'Fläckar',
            url: 'problem/arr-fran-finnar/postinflammatorisk-hyperpigmentering',
            title: 'Utforska orsakerna, symptomen och de effektiva behandlingarna för postinflammatorisk hyperpigmentering i form av fläckar från finnar'
      ),
];



$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis konsultation för behandling av ärr från finnar";

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

            icons: array('who-infants' => 'Inflammerade finnar', 'who-teenagers' => 'Stress', 'who-adults' => 'Pillande', 'who-elders' => 'Felaktig behandling')
      ),


      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får ärr från finnar?',
            content: '<p class="p200">Ärr från finnar är inte begränsat till en viss ålder eller hudtyp. Det kan påverka både män och kvinnor i alla åldrar. Genetik kan spela en roll, och individer med familjemedlemmar som har sådana ärr kan vara mer mottagliga. Mörkare hudtoner kan också vara mer benägna att uppleva postinflammatorisk hyperpigmentering, vilket kan leda till missfärgningar och gropar.</p>',

            extended_content: '<p class="p200 mt-xl">Livsstilsfaktorer som stress och hudvård spelar en nyckelroll i utvecklingen av ärr från finnar. Att upprätthålla en sund livsstil och tidig behandling av finnar kan förhindra både ärrbildning och hyperpigmentering. På Acnespecialisten ser vi varje individ som unik och erbjuder anpassade behandlingsplaner tillsammans med din personliga hudterapeut.</p>

            <p class="p200 mt-xl">Med en omfattande erfarenhet av behandling av olika hudtyper och ärr från finnar, kan Acnespecialisten erbjuda lösningar som är anpassade för dig. Vi ser fram emot att börja din resa mot en klar och sund hud med en kostnadsfri hudkonsultation. Att ta steget mot en sund livsstil och rätt hudvård kan vara avgörande för att förhindra sådana ärr och fläckar. Boka din tid hos oss redan idag!</p>',


            icons: array('who-infants' => 'Kvinnor', 'who-teenagers' => 'Män', 'who-adults' => 'Ungdommar', 'who-elders' => 'Vuxna')
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man ärr från finnar?',
            content: '<p class="p200">Ärr från finnar kan uppstå på områden som har påverkats av finnar. Dessa ärr är vanligast i ansiktet, som kinderna, pannan och hakan, men kan också finnas på ryggen, bröstet, axlarna och nacken. De är inte begränsade till dessa områden och kan uppstå på andra delar av kroppen.</p>',

            extended_content: '<p class="p200 mt-xl">Behandlingen av ärr från finnar kan variera beroende på dess typ och plats. Det kan innefatta allt från laserbehandlingar till kemiska peelingar och microneedling. Hos Acnespecialisten erbjuder vi behandlingar som riktar sig mot ärr oavsett var de befinner sig på kroppen, och vi anpassar behandlingsval efter din unika hudtyp och behov.</p>
            
            <p class="p200 mt-xl">Att behandla ärr från finnar är en process som kan kräva tid och tålamod. Med stöd från Acnespecialisten kan du förvänta dig en personlig och effektiv behandlingsplan. Vi arbetar för att uppfylla dina behov och mål, och vi bjuder in dig till en kostnadsfri konsultation för att börja din resa mot en jämn och vacker hud. Boka din tid hos oss och ta första steget mot en ärrfri hud idag!</p>',

            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlar & Nacke')


      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Diagnostisera',
            content: 'På AcneSpecialisten tar en erfaren hudterapeut hand om dig, undersöker dina hudproblem och identifierar specifika ärr från finnar som gropar och fläckar. Vi tar hänsyn till dina unika behov och skapar en skräddarsydd behandlingsplan för att ge dig de bästa resultaten.',
            url_label: 'Boka en gratis konsultation',
            url: 'hudkonsultation',
            url_title: 'Boka din kostnadsfria konsultation om ärr från finnar idag'
      ),
      new TreatmentStep(
            title: 'Behandlingsprocess',
            content: 'Genom att använda specialiserade metoder för behandling av ärr från finnar, erbjuder vi lösningar som är perfekt anpassade till dina specifika behov. Vår expertis ger en effektiv förbättring av hudens utseende, så att du snabbt kan se resultat och känna dig nöjd med din hud.',
            url_label: 'Utforska våra ärrbehandlingar',
            url: 'arr-fran-finnar-behandling',
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
            url: 'problem/ärr-från-finnar/hypertrfiska-arr',
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
            url: 'problem/ärr-från-finnar/atrofiska-arr',
            url_title: 'Lär dig mer om atrofiska ärr (gropar)',
            url_label: 'Läs mer här',
            image: 'images/symptoms/102x102/atrofiska-arr.webp',
            image_alt: 'Illustration av atrofiska ärr',
            image_title: 'Atrofiska ärr (gropar)'
            ),


);

$headline01 = "01. Identifiera dina akneärr";

$service = new Service(
      id: 'aknearr',
      title: 'Akneärr Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist inom akneärr utförs en noggrann undersökning av dina ärr. Vi tar före-bilder på de drabbade områdena och diskuterar dina mål och förväntningar. En skräddarsydd behandlingsplan anpassad efter dina individuella behov och ärrets typ rekommenderas.',
      image_small: 'images/services/200x200/aknearr-konsultation.webp',
      image_large: 'images/services/200x200/aknearr-konsultation.webp',
      image_alt: 'Bild av en konsultation för akneärrbehandling',
      image_title: 'Konsultation för akneärrbehandling',
      consultation_url: 'aknearr-konsultation',
      consultation_url_label: 'Boka konsultaion',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för akneärr',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'aknearr-konsultation',
      url_label: 'Läs mer om vår konsultation för akneärr',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för akneärr'

);


$headline02 = "02. Behandla dina akneärr";

$services = array(
      new Service(
            id: 'aknearr-laser',
            title: 'Laser mot akneärr',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserbehandling mot akneärr är en effektiv metod som använder koncentrerade ljusstrålar för att behandla och minska ärr som orsakats av akne. Genom att stimulera hudens naturliga kollagenproduktion och ta bort skadade hudceller, kan denna behandling jämna ut hudens textur och minska framträdandet av ärr.',
            image_small: 'images/services/200x200/laserbehandling-aknearr.webp',
            image_large: 'images/services/200x200/laserbehandling-aknearr.webp',
            image_alt: 'Bild av en laserbehandling mot akneärr',
            image_title: 'Laserbehandling mot akneärr',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laser mot akneärr',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/laserbehandling-aknearr-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot akneärr',
            url: 'laserbehandling-aknearr',
            url_label: 'Läs mer om laser mot akneärr',
            url_title: 'Klicka här för att läsa mer om laserbehandling mot akneärr'
      ),
      new Service(
            id: 'aknearr-kemisk-peeling',
            title: 'Kemisk peeling mot akneärr',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling mot akneärr är en framstående behandlingsmetod som används för att förbättra hudens utseende och textur. Denna behandling är särskilt effektiv för ärrtypen fläckar och verkar genom att applicera en kemisk lösning som exfolierar och tar bort det yttersta hudlagret. Detta främjar hudens förnyelse och kan avsevärt minska framträdandet av ärr och fläckar.',
            image_small: 'images/services/200x200/kemisk-peeling-aknearr.webp',
            image_large: 'images/services/200x200/kemisk-peeling-aknearr.webp',
            image_alt: 'Bild av en kemisk peeling mot akneärr',
            image_title: 'Kemisk peeling mot akneärr',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot akneärr',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/kemisk-peeling-aknearr-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot akneärr',
            url: 'kemisk-peeling-aknearr',
            url_label: 'Läs mer om kemisk peeling mot akneärr',
            url_title: 'Klicka här för att läsa mer om kemisk peeling mot akneärr'
      ),
      new Service(
            id: 'aknearr-microneedling',
            title: 'Microneedling mot akneärr',
            duration: '60 min',
            price: '2995 kr',
            content: 'Microneedling mot akneärr är en innovativ behandling som särskilt riktar sig till atrofiska ärr. Med hjälp av små, fina nålar skapas kontrollerade mikroskador i huden, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Detta leder till en jämnare hudtextur och minskat framträdande av atrofiska ärr.',
            image_small: 'images/services/200x200/microneedling-aknearr.webp',
            image_large: 'images/services/200x200/microneedling-aknearr.webp',
            image_alt: 'Bild av en microneedling-behandling mot akneärr',
            image_title: 'Microneedling mot akneärr',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot akneärr',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/microneedling-aknearr-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling mot akneärr',
            url: 'microneedling-aknearr',
            url_label: 'Läs mer om microneedling mot akneärr',
            url_title: 'Klicka här för att läsa mer om microneedling mot akneärr'
      ),
);

$articles = array(
      new Article(
            id: 'pigmentation-causes-and-risk-factors',
            title: 'Hur får man bort akneärr?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Vi erbjuder de senaste behandlingsmetoderna mot alla typer av akneärr. Oavsett om det gäller laserbehandling för de mest envisa ärrtyperna, microneedling som är mest effektiv mot atrofiska ärr, eller kemisk peeling för ärrtypen fläckar, är våra behandlingsalternativ bäst mot akneärr. Vi använder konstant de mest avancerade och skräddarsydda lösningarna som garanterar din tillfredsställelse. </p>

            <p class="p200 mt-m">Din resa med oss börjar med en helt kostnadsfri konsultation. Vi tar oss tiden att analysera ditt unika fall och erbjuder dig en personlig hudterapeut. Din terapeut kommer att vara din guide och stöttepelare från start till mål, och skapa en behandlingsplan som är helt anpassad efter dina behov.</p>',
      ),
      new Article(
            id: 'when-to-see-your-pigmentation-specialist',
            title: 'Varför AcneSpecialisten?!',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">DNär det kommer till att välja rätt behandling för dina akneärr, vet vi hur avgörande det är att finna någon som inte bara förstår ditt problem utan också erbjuder de mest innovativa och effektiva lösningarna. På Acnespecialisten har vi dedikerat över 30 år till att förstå och behandla akneärr. Vår gedigna erfarenhet gör oss till specialister som verkligen lever upp till vårt namn.</p>

            <p class="p200 mt-m">Det som verkligen särskiljer oss är vår fokuserade expertis inom akneärrbehandling. Vi är inte bara experter på akneärr, utan även pionjärer inom ärrreducering, laser mot akneärr och effektiv aknebehandling. Vi ser inte bara till att du får en klarare hud utan även till att du känner dig mer självsäker i din egen hud.</p>

            <p class="p200 mt-m">Genom att välja Acnespecialisten får du tillgång till en värld av expertis och omtanke, där ditt välmående står i centrum. Vi ser fram emot att hjälpa dig på din resa mot en ny början. Boka din kostnadsfria konsultation idag och ta det första steget med oss.</p>',
      ),
);


$results = array(
      new ResultCustomer(
            id: '1',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne"">behandlingar mot akne</a>',
            )
      ),
      new ResultCustomer(
            id: '2',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            url_title: 'Resultat',
            image_alt: 'Resultat',
            image_title: 'Resultat',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>',
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
            title: 'Lasern gjorde susen',
            text: "Var först lite osäker på laserbehandling, men det behövde jag inte vara. Allt förklarades noggrant, och det gjorde inte alls ont. Nu, några veckor senare, är mina akneärr nästan helt borta. Jag är så nöjd och glad över mitt beslut att testa lasern. Tack AcneSpecialisten!",
            signature: 'Lena'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Gropar är ett minne blott!',
            text: "Har länge haft problem med gropar i ansiktet från gamla akneärr. Här kände jag mig direkt trygg och omhändertagen. Personalen förklarade allt och resultatet har varit fantastiskt. Jag känner knappt igen mig själv i spegeln. Så tacksam!",
            signature: 'Fredrik'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Fläckfri och glad',
            text: "Ingen har kunnat ta hand om mina aknefläckar som AcneSpecialisten. Efter bara några besök märker jag redan stor skillnad. Det är så skönt att veta att jag lämnar salongen med en renare och fräschare hy varje gång. Supertrevlig personal dessutom!",
            signature: 'Gustav'
      ),

);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om akne' => array(
            new Question(
                  title: 'Är det möjligt att helt bli av med mina acneärr?',
                  text: '<p class="p200">Ja, det är absolut möjligt att bli av med dina acneärr! Under vår kostnadsfria hudkonsultation kommer vi att noggrant undersöka och identifiera graden av ditt problem för att hjälpa dig att behandla det på bästa möjliga sätt. Genom att följa våra individuella råd och den skräddarsydda behandlingsplan vi rekommenderar, kan dina acneärr försvinna. Det är dock viktigt att förstå att tidsramen kan variera beroende på hur grova eller djupa ärr du har. Vi kommer att arbeta tillsammans med dig för att uppnå det bästa resultatet.</p>'
            ),
            new Question(
                  title: 'Har jag fått ärr eftersom jag har klämt på finnarna?',
                  text: '<p class="p200">Inte nödvändigtvis. Även om det klart kan vara en faktor – särskilt om du har plockat eller klämt på finnar som inte varit mogna – är det inte alltid orsaken till ärrbildning. Ofta handlar det snarare om att aknen inte har behandlats på rätt sätt, vilket har tillåtit den att skada hudens lager. På Acnespecialisten kan vi hjälpa dig att förstå dina specifika förhållanden och behandla dem på ett sätt som minimerar riskerna för framtida ärrbildning.</p>'
            ),
            new Question(
                  title: 'Kan mina ärr komma tillbaka efter behandling?',
                  text: '<p class="p200">Nej, de ärr som du redan har behandlat bort kommer inte tillbaka. Men det är viktigt att förstå att om du inte behandlar själva orsaken till ärrbildningen, det vill säga aknen, kan nya ärr uppstå. På Acnespecialisten fokuserar vi inte bara på att behandla själva ärrbildningen, utan vi ser till att ta itu med roten till problemet och behandlar själva aknen. Detta hjälper dig att förhindra att nya ärr bildas, och ger dig den bästa chansen till en frisk och klar hud.</p>'
            ),
            new Question(
                  title: 'Hur många behandlingar behövs för att ta bort mina akneärr?',
                  text: '<p class="p200">Antalet behandlingar som krävs för att uppnå önskat resultat varierar beroende på typ och svårighetsgrad av ärr, samt den metod som valts för att behandla din specifika hudtyp. På Acnespecialisten tror vi att varje persons hud är unik, och vi skräddarsyr en behandlingsplan baserat på dina individuella behov. Under din kostnadsfria konsultation kommer du att tilldelas en personlig hudterapeut som är med dig hela vägen. Din terapeut kommer att analysera din hud och ta fram en skräddarsydd plan som bäst passar dina behov, och ge dig en uppfattning om hur många behandlingar som kan behövas för att uppnå de bästa resultaten mot dina akneärr.</p>'
            ),
            new Question(
                  title: 'Vilka behandlingsmetoder erbjuder ni för olika typer av akneärr?',
                  text: '<p class="p200">Vi erbjuder en mängd olika behandlingsalternativ för akneärr, inklusive laserbehandling, kemisk peeling och microneedling. Varje metod har sina unika fördelar och är mest effektiva för vissa typer av ärr. Under en kostnadsfri konsultation med en av våra hudterapeuter kan vi utvärdera dina specifika behov och rekommendera den metod som passar din hudtyp och ärr bäst.</p>'
            ),
            new Question(
                  title: 'Är behandlingarna smärtsamma? Vilken eftervård krävs?',
                  text: '<p class="p200">Våra behandlingsmetoder är utformade för att vara så bekväma som möjligt, och vi tar alla nödvändiga steg för att minimera eventuell obehag. Känslan under behandlingen kan variera beroende på metoden och ärrtypen. Eftervården är också individuell och din hudterapeut kommer att ge dig detaljerade instruktioner för hur du tar hand om din hud efter behandlingen för att främja läkning och optimera resultaten.</p>'
            ),
            new Question(
                  title: 'Hur länge behöver jag vänta mellan behandlingarna? Och hur snabbt kommer jag se resultat?',
                  text: '<p class="p200">Tiden mellan behandlingarna och hur snabbt du kommer se resultat beror på den specifika metoden som används och din individuella hudtyp. I allmänhet rekommenderar vi en viss tid mellan sessionerna för att din hud ska få tid att läka ordentligt och för att maximera effektiviteten av behandlingen. Din personliga hudterapeut kommer att gå igenom alla detaljer med dig och skapa en skräddarsydd behandlingsplan som passar dina behov, inklusive en tidslinje för när du kan förvänta dig att se synliga förbättringar.</p>'
            )
      ),

);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till akneärr";

$skin_guide_articles = array(
      new SkinGuideArticle(
            id: 'myter-om-akne',
            url_title: '',
            title: 'Behandlingsalternativ för Akneärr',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'En Fullständig Guide',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'Kemisk Peeling och Akneärr',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'En Expertguide',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'Din Väg till Friskare Hud med Akneärrbehandling',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Steg för Steg Guide',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            url_title: 'How hormones effect?',
            title: 'Tonåringar och Akneärr',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'En Guide för Föräldrar',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
);

$skinguide_url_label = "Läs fler guider";
$skinguide_url_title = "Läs fler guider om akneärr";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut med fokus på akneärr sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i akneärrbehandling',
            image_title: 'Cazzandra Lindberg - Expert på akneärrbehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut med specialisering i akneärr sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på akneärr',
            image_title: 'Veronika Benedik - Specialist inom akneärrvård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut med inriktning mot akneärr sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut specialiserad på akneärrhantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på akneärr'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut med specialisering i akneärr sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot akneärrbehandling',
            image_title: 'Vilma Libom - Expert inom akneärrbehandling'
      )
);


$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialisserade Hudterapeuter med inriktning mot akneärr";

$related_problems = array(
      new RelatedProblem(
            name: 'Aktiv Akne',
            aka: 'Finnar',
            image: 'images/problems/102x102/akne.webp',
            image_alt: 'Bild som visar aktiv akne, en vanlig hudåkomma',
            image_title: 'Aktiv Akne - en vanlig hudåkomma',
            url: 'problem/akne',
            url_title: 'Akne'
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
            label: 'Alma Hybrid CO2',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Alma hybrid CO2 Laser logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/alma-hybrid-co2',
            url_title: 'Läs mer om Alma hybrid CO2 Laser'
      ),
      new Brand(
            label: 'Alma Harmony XL PRO',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen4 - Microneedling Verktyg för Hudföryngring',
            url: 'varumarken/dermapen4',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'SkinTech',
            image: 'images/brands/cryopen.svg',
            image_alt: 'Cryopen Brand Logo',
            image_title: 'Cryopen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'varumarken/cryopen',
            url_title: 'Läs mer om Cryopen Kryoterapi Hudbehandlingar',
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
$brands_url_title = "Varumärken för akneärr";

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
                                                            <a href="hudkonsultation" title="<?php echo $floating_consultation_url_title ?>" class="button white expand l10n"><?php echo $floating_consultation_url_label ?></a>
                                                      </div>
                                                      <div class="column">
                                                            <a href="https://bokadirekt.se" title="<?php echo $floating_booking_url_title ?>" class="button white expand l10n"><?php echo $floating_booking_url_label ?></a>
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
                                                <a href="hudkonsultation" title="<?php echo $mobile_consultation_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_consultation_url_label ?></a>
                                          </div>
                                          <div class="column is-half">
                                                <a href="https://bokadirekt.se" title="<?php echo $mobile_booking_url_title ?>" class="button b200 white expand l10n"><?php echo $mobile_booking_url_label ?></a>
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
                                          <a href="hudkonsultation" title="<?php echo $consultation_url_title ?>" class="button b200 white l10n"><?php echo $consultation_url_label ?></a>
                                          <a href="https://bokadirekt.se" title="B<?php echo $booking_url_title ?>" class="button b200 white l10n"><?php echo $booking_url_label ?></a>
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