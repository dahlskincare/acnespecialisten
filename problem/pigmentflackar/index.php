<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Pigmentfläckar - Behandlingsmetoder, Orsaker och Hur Man Förebygger | Acnespecialisten';
$seo_description = 'Lär dig allt om pigmentfläckar, inklusive deras bakomliggande orsaker, effektiva metoder för behandling, och hur du kan förebygga dem. Sök professionell vägledning och skräddarsydda lösningar för hyperpigmentering och hudfläckar från Acnespecialisten.';
$seo_keywords = 'pigmentfläckar, behandling av pigmentfläckar, orsaker till pigmentfläckar, förebygga pigmentfläckar, minska pigmentfläckar, hyperpigmentering, hudfläckar, behandling av hyperpigmentering, pigmenteringar';





$title = 'Pigmentfläckar';

$description = 'Lider du av pigmentfläckar, även kända som hyperpigmenteringar? Vi känner till utmaningarna och har lösningen för dig. Lär dig mer om dessa hudfläckar, deras orsaker och hur våra specialiserade terapeuter kan skräddarsy en behandling för just dig. Boka en kostnadsfri konsultation nu och påbörja din väg mot en fläckfri och frisk hud.';

$image_small = 'images/problems/424x324/pigmentflackar.webp'; // Ersätt med lämplig bild för pigmentfläckar
$image_large = 'images/problems/424x456/pigmentflackar.webp'; // Ersätt med lämplig bild för pigmentfläckar
$image_title = 'Visar en hud med pigmentfläckar';
$image_alt = 'Bild som illustrerar hur pigmentfläckar kan se ut på huden';




$akas = [
      new Link(
            label: 'Pigmentförändringar',
            url: 'problem/arr-fran-finnar/postinflammatorisk-hyperpigmentering',
            title: 'Utforska orsakerna, symptomen och de effektiva behandlingarna för postinflammatorisk hyperpigmentering i form av fläckar från finnar'
      ),
      new Link(
            label: 'Hudfläckar',
            url: 'problem/arr-fran-finnar/atrofiska-arr',
            title: 'Lär dig mer om atrofiska ärr i form av gropar som uppstått från finnar och upptäck våra specialiserade behandlingsalternativ'
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
            title: 'är pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, kända som hyperpigmentering, är områden på huden som har blivit mörkare än den omgivande huden. Denna mörkfärgning beror på en överproduktion av melanin, hudens naturliga pigment. Fläckarna kan variera i färg, storlek och form och kan finnas var som helst på kroppen. De är oftast ofarliga men kan påverka huden estetiskt och känslomässigt, speciellt om de är synliga på utsatta områden som ansikte och händer.</p>',

            extended_content: '<p class="p200 mt-xl">Pigmentfläckar kan visa sig på olika sätt. Vissa är bara milda färgförändringar, medan andra kan vara mörkare och mer framträdande. De kan klassificeras i olika typer som leverfläckar, solfläckar och melasma. Varje typ kräver en unik behandlingsmetod.</p>

            <p class="p200 mt-xl">Hos oss, med över 30 års erfarenhet av att behandla pigmentfläckar, erbjuder vi de mest effektiva metoderna. Behandlingen måste skräddarsys efter din hudtyp och dina specifika fläckar. Våra specialister står redo att erbjuda dig en kostnadsfri hudkonsultation för att analysera din situation och utforma en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som stöttar dig genom hela behandlingsprocessen, från start till mål.</p>',
            icons: array()
      ),


      new ProblemTrivia(
            prefix: 'Varför',
            title: 'uppstår pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar eller hyperpigmentering uppstår när melanin produceras ojämnt i huden, vilket skapar mörkare fläckar. Detta kan orsakas av solskador, åldrande, hormonella obalanser eller vissa mediciner och hälsoförhållanden. Vissa typer av pigmentfläckar kan bli permanenta om de inte behandlas korrekt.</p>',

            extended_content: '<p class="p200 mt-xl">Förståelse för typen av pigmentfläck och dess orsak är nyckeln till effektiv behandling. Felaktig behandling kan förvärra tillståndet, medan tidig diagnos och rätt behandling kan förhindra att fläckarna blir permanenta. Kunskap om hudvård och förebyggande åtgärder är också avgörande.</p>

            <p class="p200 mt-xl">Med över 30 års erfarenhet i branschen, specialiserar vi oss på att förstå och behandla pigmentfläckar. Vi erbjuder en kostnadsfri konsultation för att analysera din hud och utforma en individuell behandlingsplan. Genom att arbeta tillsammans med dig, strävar vi efter att förbättra och bevara din huds hälsa och utseende. Boka en tid idag och ta steget mot en klarare och friskare hud.</p>',

            icons: array('who-infants' => 'Solskador', 'who-teenagers' => 'Hormonella obalanser', 'who-adults' => 'Åldrande', 'who-elders' => 'Felaktig behandling')
      ),



      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, även kända som hyperpigmentering, är ett fenomen som inte begränsas till en viss ålder, kön eller hudton. Individer med mörkare hud och de som har en familjehistoria av pigmentfläckar kan dock vara mer benägna att utveckla dessa märken. Hormonella förändringar, som de som kan inträffa under graviditet, kan också bidra till deras uppkomst.</p>',

            extended_content: '<p class="p200 mt-xl">Solskadad hy är en av de vanligaste orsakerna till att pigmentfläckar uppkommer. Långvarig exponering för solens strålar kan leda till en ökad produktion av melanin, vilket i sin tur kan resultera i ojämna mörka fläckar på huden. Åldrande kan också leda till ojämn melaninproduktion, där hudens förmåga att jämnt fördela melanin förändras med tiden. Detta resulterar i olika typer och nyanser av pigmentfläckar.</p>

            <p class="p200 mt-xl">Även om pigmentfläckar i ansiktet och på kroppen är helt ofarliga, kan de vara störande ur ett estetiskt perspektiv. Dessa fläckar kan variera i storlek, form och färg, och kan vara både mörkt bruna, ljust bruna och helt vita. Eftersom de ofta uppenbarar sig i ansiktet, på kinderna och pannan, kan de påverka självkänslan hos många. Att söka professionell hjälp för att behandla och minimera deras utseende kan vara ett effektivt sätt att återställa huden till ett mer enhetligt och klart utseende.</p>',


            icons: array('who-infants' => 'Kvinnor', 'who-teenagers' => 'Män', 'who-adults' => 'Ungdommar', 'who-elders' => 'Vuxna')
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, eller hyperpigmentering, uppstår ofta i ansiktet, där de vanligtvis påverkar områden som kinder och panna. Exponering för solen utan ordentligt skydd kan snabbt leda till dessa missfärgningar, särskilt i områden som är mest utsatta för solljuset.</p>',

            extended_content: '<p class="p200 mt-xl">Bortom ansiktet kan pigmentfläckar även dyka upp på andra delar av kroppen, inklusive halsen, dekolletaget och händerna. Platser som ofta exponeras för solen är mer benägna att drabbas. Den ojämna produktionen av melanin som resulterar i fläckarna kan manifesteras var som helst på huden.</p>
            
            <p class="p200 mt-xl">Om du vill ta bort dina pigmentfläckar och vill förstå mer om din specifika situation är det viktigt med professionell hjälp. Hos oss får du möjlighet att boka en kostnadsfri konsultation med en dedikerad hudterapeut som kan identifiera typen av pigmentfläckar du har och lägga upp en individuell behandlingsplan. Denna personliga analys hjälper oss att skräddarsy den mest effektiva metoden för att behandla dina pigmentfläckar och hjälpa dig att återfå en jämn och klar hudton.</p>',

            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'händerna')


      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Diagnostisera',
            content: 'På AcneSpecialisten tar en erfaren hudterapeut hand om dig, undersöker dina hudproblem och identifierar specifika pigmentfläckar. Vi tar hänsyn till dina unika behov och skapar en skräddarsydd behandlingsplan för att ge dig de bästa resultaten.',
            url_label: 'Boka en gratis konsultation',
            url: 'hudkonsultation',
            url_title: 'Boka din kostnadsfria konsultation om pigmentfläckar idag'
      ),
      new TreatmentStep(
            title: 'Behandlingsprocess',
            content: 'Genom att använda specialiserade metoder för behandling av pigmentfläckar, erbjuder vi lösningar som är perfekt anpassade till dina specifika behov. Vår expertis ger en effektiv förbättring av hudens utseende, så att du snabbt kan se resultat och känna dig nöjd med din hud.',
            url_label: 'Utforska våra behandlingar för pigmentfläckar',
            url: 'pigmentflackar-behandling',
            url_title: 'Upptäck våra unika och effektiva behandlingar för pigmentfläckar'
      ),
);



$treatment_link = '<a href="problem/aknearr/aknearrbehandling" title="Utforska effektiva behandlingar mot pigmentfläckar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot pigmentfläckar</a>';


$symptoms_title = 'Olika typer av pigmentfläckar';

$symptoms = array(
      new Symptom(
            name: 'Melasma',
            aka: 'Känd som graviditetsmask eller chloasma',
            content: 'Melasma visar sig som mörka, oregelbundna fläckar främst i ansiktet. Det kan vara kopplat till hormonella förändringar som graviditet eller användning av p-piller, och exponering för solen kan förvärra tillståndet.',
            url: 'problem/pigmentflackar/melasma',
            url_title: 'Lär dig mer om Melasma',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/melasma.webp',
            image_alt: 'Bild som visar Melasma',
            image_title: 'Melasma'
      ),
      new Symptom(
            name: 'Freckles (Fräknar)',
            aka: 'Vetenskapligt kända som Ephelides',
            content: 'Fräknar är små bruna fläckar som oftast förekommer på ljus hud. De är ofarliga och är vanligtvis ett resultat av genetik och exponering för solen.',
            url: 'problem/pigmentflackar/freckles',
            url_title: 'Lär dig mer om Fräknar',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/freckles.webp',
            image_alt: 'Bild som visar Fräknar',
            image_title: 'Fräknar'
      ),
      new Symptom(
            name: 'Vitiligo',
            aka: 'Hudblekning, depigmenterade fläckar',
            content: 'Vitiligo orsakar förlust av hudfärg i fläckar och kan påverka alla delar av huden. Det är en autoimmun sjukdom, och de exakta orsakerna är okända.',
            url: 'problem/pigmentflackar/vitiligo',
            url_title: 'Lär dig mer om Vitiligo',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/vitiligo.webp',
            image_alt: 'Bild som visar Vitiligo',
            image_title: 'Vitiligo'
      ),

      new Symptom(
            name: 'Postinflammatorisk Hyperpigmentering (PIH)',
            aka: 'Mörka fläckar efter akne eller inflammation',
            content: 'PIH uppstår som ett resultat av inflammation, inklusive akne. Ökad melaninproduktion leder till mörkare märken som kan variera i färg. Behandling kan inkludera topiska produkter som ljusar fläckarna över tid.',
            url: 'problem/pigmentflackar/postinflammatorisk-hyperpigmentering',
            url_title: 'Lär dig mer om Postinflammatorisk Hyperpigmentering',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/pih.webp',
            image_alt: 'Bild som visar Postinflammatorisk Hyperpigmentering',
            image_title: 'Postinflammatorisk Hyperpigmentering'
      ),
      new Symptom(
            name: 'Solfläckar (Solar Lentigines)',
            aka: 'även känt som Solskadad hud (Actinic Keratosis)',
            content: 'Solskadad hud, eller Actinic Keratosis, sker när huden utsätts för alltför mycket solstrålning utan lämpligt skydd. Detta kan leda till en rad olika förändringar i huden, inklusive ålderfläckar, solfläckar (Solar Lentigines), och i värre fall även hudcancer. Solskador kan vara permanenta, men det finns behandlingar som kan ta bort pigmenfläckarna.',
            url: 'problem/solskador/solskadad-hud',
            url_title: 'Lär dig mer om solskadad hud och solfläckar',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/solskadad_hud.webp',
            image_alt: 'Bild som visar solskadad hud och solfläckar',
            image_title: 'Solskadad hud'
      ),
      new Symptom(
            name: 'Åldersfläckar',
            aka: 'även känt som Solskadad hud (Actinic Keratosis)',
            content: 'Solskadad hud, eller Actinic Keratosis, sker när huden utsätts för alltför mycket solstrålning utan lämpligt skydd. Detta kan leda till en rad olika förändringar i huden, inklusive ålderfläckar, solfläckar (Solar Lentigines), och i värre fall även hudcancer. Solskador kan vara permanenta, men det finns behandlingar som kan ta bort pigmenfläckarna.',
            url: 'problem/solskador/solskadad-hud',
            url_title: 'Lär dig mer om solskadad hud och solfläckar',
            url_label: 'Läs mer',
            image: 'images/symptoms/102x102/solskadad_hud.webp',
            image_alt: 'Bild som visar solskadad hud och solfläckar',
            image_title: 'Solskadad hud'
      ),



);

$headline01 = "01. Identifiera dina Pigmentfläckar";

$service = new Service(
      id: 'arr-fran-finnar',
      title: 'Konsultation för Ärr från Finnar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en persnolig konsultation med en specialist inom ärr från finnar genomförs en detaljerad analys av dina specifika ärr. Vi fotograferar de berörda områdena och går igenom dina mål och förväntningar. En personlig behandlingsplan utformas, anpassad till dina unika behov och ärrtypen som du har.',
      image_small: 'images/services/200x200/arr-fran-finnar-konsultation.webp',
      image_large: 'images/services/200x200/arr-fran-finnar-konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av ärr från finnar',
      image_title: 'Konsultation för behandling av ärr från finnar',
      consultation_url: 'arr-fran-finnar-konsultation',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för ärr från finnar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'arr-fran-finnar-konsultation',
      url_label: 'Läs mer om vår konsultation för ärr från finnar',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för ärr från finnar'
);



$headline02 = "02. Behandling av dina ärr som uppstått från finnar";

$services = array(
      new Service(
            id: 'arr-fran-finnar-laser',
            title: 'Laserbehandling för Ärr från Finnar',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserterapi för ärr som orsakats av finnar utnyttjar fokuserade ljusstrålar för att behandla och reducera dessa ärr. Behandlingen främjar hudens kollagenproduktion och tar bort skadade hudceller, vilket resulterar i en jämnare hud och mindre synliga ärr.',
            image_small: 'images/services/200x200/laserbehandling-arr-fran-finnar.webp',
            image_large: 'images/services/200x200/laserbehandling-arr-fran-finnar.webp',
            image_alt: 'Bild av en laserterapi för ärr som orsakats av finnar',
            image_title: 'Laserterapi för ärr från finnar',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserterapi för ärr från finnar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/laserbehandling-arr-fran-finnar-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserterapi för ärr som uppstått från finnar',
            url: 'laserbehandling-arr-fran-finnar',
            url_label: 'Läs mer om laserterapi för ärr från finnar',
            url_title: 'Klicka här för att läsa mer om laserbehandling för ärr som orsakats av finnar'
      ),
      new Service(
            id: 'arr-fran-finnar-kemisk-peeling',
            title: 'Kemisk Peeling för Ärr från Finnar',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling för ärr som bildats av finnar är en beprövad metod som förnyar och förbättrar hudens yta. Behandlingen används för att målinriktat exfoliera och ta bort det yttersta hudlagret, vilket bidrar till hudens återväxt och synligt reducerar ärr och ojämnheter.',
            image_small: 'images/services/200x200/kemisk-peeling-arr-fran-finnar.webp',
            image_large: 'images/services/200x200/kemisk-peeling-arr-fran-finnar.webp',
            image_alt: 'Bild av en kemisk peeling för ärr orsakade av finnar',
            image_title: 'Kemisk Peeling för Ärr från Finnar',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för ärr från finnar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/kemisk-peeling-arr-fran-finnar-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för ärr som uppstått från finnar',
            url: 'kemisk-peeling-arr-fran-finnar',
            url_label: 'Läs mer om kemisk peeling för ärr från finnar',
            url_title: 'Klicka här för att läsa mer om kemisk peeling för ärr orsakade av finnar'
      ),
      new Service(
            id: 'arr-fran-finnar-microneedling',
            title: 'Microneedling för Ärr från Finnar',
            duration: '60 min',
            price: '2995 kr',
            content: 'Microneedling för ärr som bildats av finnar är en avancerad teknik som behandlar speciellt atrofiska ärr. Små, fina nålar används för att orsaka kontrollerade skador i huden, vilket igångsätter hudens läkningsprocess och kollagenproduktion. Resultatet blir en förbättrad hudtextur och mindre framträdande ärr.',
            image_small: 'images/services/200x200/microneedling-arr-fran-finnar.webp',
            image_large: 'images/services/200x200/microneedling-arr-fran-finnar.webp',
            image_alt: 'Bild av en microneedling-behandling för ärr som orsakats av finnar',
            image_title: 'Microneedling för Ärr från Finnar',
            consultation_url: 'hudkonsultation',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för ärr från finnar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/microneedling-arr-fran-finnar-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling för ärr som bildats av finnar',
            url: 'microneedling-arr-fran-finnar',
            url_label: 'Läs mer om microneedling för ärr från finnar',
            url_title: 'Klicka här för att läsa mer om microneedling-behandling för ärr som uppstått från finnar'
      ),
);


$articles = array(
      new Article(
            id: 'pigmentation-causes-and-risk-factors',
            title: 'Hur behandlar man ärr som uppstått från finnar?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför välja oss för behandling av ärr från finnar?',
            image_title: 'Varför välja oss för behandling av ärr från finnar?',
            content: '<p class="p200">Vi på AcneSpecialisten erbjuder de mest innovativa och effektiva metoderna för att behandla ärr orsakade av finnar. Oavsett ärrtyp har vi lösningar – laserterapi för komplexa fall, microneedling för atrofiska ärr och kemisk peeling för mindre ojämnheter. Vår styrka ligger i att leverera individualiserade behandlingar, där din tillfredsställelse står i fokus.</p>

            <p class="p200 mt-m">Börja din resa mot en klarare hud med en helt kostnadsfri konsultation. Vi analyserar ditt specifika fall och kopplar dig med en personlig hudterapeut som kommer att stödja och vägleda dig genom processen, med en behandlingsplan som är skräddarsydd för just dig. Boka din konsultation idag!</p>',
      ),
      new Article(
            id: 'when-to-see-your-pigmentation-specialist',
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
            id: 'scar-prevention',
            url_title: 'scar-prevention-from-acne',
            title: 'Förebyggande av Ärr från Finnar',
            subtitle: 'Förstå hur du kan förhindra ärrbildning efter finnar genom korrekt hudvård och behandling.',
            problem: 'En Fullständig Guide',
            description: "Lär dig de bästa metoderna för att förhindra ärrbildning efter finnar. Upptäck vilka produkter och behandlingar som är mest effektiva.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Scar prevention',
            image_title: 'Scar prevention',
            category_id: 'scar-category',
            subcategory_id: 'scar-subcategory'
      ),
      new SkinGuideArticle(
            id: 'scar-treatment-options',
            url_title: 'scar-treatment-options-from-acne',
            title: 'Behandlingsalternativ för Ärr från Finnar',
            subtitle: 'En översikt över olika metoder för att behandla ärr som orsakas av finnar.',
            problem: 'En Expertguide',
            description: "Utforska olika behandlingsalternativ för att ta hand om ärr orsakade av finnar, inklusive kliniska och hemmabehandlingar.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Scar treatment',
            image_title: 'Scar treatment',
            category_id: 'scar-category',
            subcategory_id: 'scar-subcategory'
      ),
      new SkinGuideArticle(
            id: 'teenagers-and-scars',
            url_title: 'teenagers-and-scars-from-acne',
            title: 'Tonåringar och Ärr från Finnar',
            subtitle: 'Guide för föräldrar och ungdomar för att hantera och behandla ärr från finnar.',
            problem: 'En Guide för Föräldrar',
            description: "Förstå hur tonåringars hud reagerar på akne och hur man kan hantera och behandla ärr som kan uppstå efter finnar.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Teenagers and scars',
            image_title: 'Teenagers and scars',
            category_id: 'scar-category',
            subcategory_id: 'scar-subcategory'
      ),
      new SkinGuideArticle(
            id: 'natural-remedies',
            url_title: 'natural-remedies-for-scars-from-acne',
            title: 'Naturliga Behandlingsmetoder för Ärr från Finnar',
            subtitle: 'En guide till naturliga och skonsamma sätt att behandla ärr som orsakas av finnar.',
            problem: 'En Praktisk Guide',
            description: "Upptäck naturliga metoder och hemlagade lösningar för att minska och behandla ärr som orsakas av finnar.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Natural remedies for scars',
            image_title: 'Natural remedies for scars',
            category_id: 'scar-category',
            subcategory_id: 'scar-subcategory'
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