<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Akneärr - Behandling, Orsaker och Förebyggande | Acnespecialisten';
$seo_description = 'Utforska allt om akneärr, från de underliggande orsakerna till effektiva behandlingsmetoder och förebyggande åtgärder. Få professionell hjälp och individuella lösningar från Acnespecialisten.';
$seo_keywords = 'akneärr, behandling av akneärr, orsaker till akneärr, förebygga akneärr, ta bort akneärr, ärrreducering, hudförnyelse, ärrbehandling';



$title = 'Akneärr';

$image_small = 'bilder/problem/424x324/aknearr.webp';
$image_large = 'bilder/problem/424x456/aknearr.webp';
$image_title = 'Visar en hud med akneärr';
$image_alt = 'Bild som illustrerar hur akneärr ser ut på huden';
$description = 'Här förklarar vi vad som kännetecknar akneärr, hur dessa ärr kan uppstå efter akne och hur vi kan hjälpa dig med behandling för att reducera dem. Vi går även igenom hur vi identifierar olika typer av akneärr, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess för att återställa hudens släthet och utseende.';


$akas = [
      new Link(
            label: 'Gropar',
            url: 'atrofiska-arr.php',
            title: 'Allt du behöver veta om atrofiska ärr i form av gropar från akne och deras behandling'
      ),
      new Link(
            label: 'Fläckar',
            url: 'postinflammatorisk-hyperpigmentering.php',
            title: 'Utforska orsaker, symptom och behandlingar av post inflammatorisk hyperpigmentering i form av fläckar från akne'
      ),
];

$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis Konsultation för Akneärr";

$booking_url = "https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka behandling mot akneärr";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Akneärr";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Akneärr-behandling";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Akneärr";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka behandling mot akneärr";

$nav_buttons = array(
      'about' => 'Om Akneärr',
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

$about_title = 'Om akneärr';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är akneärr?',
            content: '<p class="p200">Akneärr och ärr från finnar uppstår när talget omvandlas till en syra som fräter på hudlagren. Denna omvandling sker när porerna täpps till och inte kan göra sig av med allt sitt innehåll. Ärr som uppstår som en följd av allvarlig eller långvarig akne representerar permanenta texturförändringar i huden och är ofta en påminnelse om tidigare akneutbrott. Det kan variera i form och storlek och påverka både utseendet och känslan på huden.</p>',
            extended_content: '<p class="p200 mt-xl">Fläckarna och ärrbildningen kan uppenbara sig på olika sätt, beroende på hur allvarlig acne man tidigare lidit av. Vid mild acne blir det ofta bara röda eller mörkare fläckar på huden, medan huden får så kallade gropar och blir ärrig efter svårare acne. Dessa gropar är exempel på atrofiska ärr (Gropar), som kan delas in i tre huvudtyper: ispickar, rullande ärr och lådformade ärr. Varje typ kräver en specifik behandlingsmetod, och det finns även andra former som postinflammatoriska hyperpigmenteringar (Fläckar).</p>
            <p class="p200 mt-xl">Hos Acnespecialisten, som har över 30 års erfarenhet av akneärr, erbjuder vi de senaste och mest effektiva metoderna för att behandla dessa ärr. Behandlingen av akneärr är ofta komplex och måste skräddarsys efter individens hudtyp och ärr. Det är av yttersta vikt att först hantera och behandla aktiv akne innan man går vidare med ärrbehandling, då nya akneutbrott kan leda till fler ärr. Vi har specialister som är redo att erbjuda dig en kostnadsfri hudkonsultation för att fastställa vilken typ av akneärr du har och lägga upp en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som är med dig hela vägen från start till mål.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man akneärr?',
            content: '<p class="p200">Akneärr uppstår som en följd av aktiv acne som bryter ner huden. Aggressiv fettsyra som skapas i varje finne fräter på huden och orsakar sår, vilket inledningsvis skapar en missfärgning. Denna mörka fläck i huden finns kvar efter att finnen försvunnit. Om problemet pågår under en längre period, kan hudstrukturen skadas och leda till gropar. Vidare kan allvarlig akne som cystor och noduler tränga djupt in i huden och orsaka skador på vävnaden nedanför, vilket leder till ärrbildning.</p>',
            extended_content: '<p class="p200 mt-xl">För mycket eller för lite kollagen på skadestället kan leda till upphöjda ärr eller gropar i huden. Felaktig hantering av akne, såsom att peta och klämma på finnar, kan också förvärra ärrbildningen, och felaktig behandling kan leda till permanenta märken och fläckar. Förebyggande åtgärder, som tidig behandling av akne och rätt hudvård, kan minska risken för ärrbildning.</p>
            <p class="p200 mt-xl">På Acnespecialisten fokuserar vi på att förstå ditt unika tillstånd och behov. Med 30 års erfarenhet och med de bästa metoderna för att behandla akneärr, arbetar vi med att minska och förhindra permanenta märken på din hud. Att ta första steget med en kostnadsfri acneärr konsultation hos oss kan vara starten på din väg till en sund och klar hud. Förståelse för ens egen hudtyp och att arbeta tillsammans med en av våra hudvårdsexperter kan hjälpa till att utforma en effektiv behandlingsplan.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får akneärr?',
            content: '<p class="p200">Personer som har eller har haft allvarlig akne är mest benägna att utveckla akneärr. Det är inte begränsat till en viss ålder eller kön, utan kan påverka människor genom hela livet. Genetik, ålder och kön spelar också en roll, och om familjemedlemmar har akneärr, kan risken öka. Om problemet pågår under en längre period, kan det skada hudstrukturen och leda till gropar i huden. Mörkare hudtoner kan vara mer benägna att uppleva postinflammatorisk hyperpigmentering.</p>',
            extended_content: '<p class="p200 mt-xl">Livsstilsfaktorer och hudvård spelar också en viktig roll. En sund livsstil och tidig behandling av akne kan förhindra både akne och efterföljande ärrbildning. Det är också viktigt att notera att livsstilsfaktorer som stress kan påverka akne, och därmed även risken för ärrbildning. På Acnespecialisten förstår vi att varje individ är unik och erbjuder anpassade behandlingsplaner med din personliga hudterapeut vid din sida.</p>
            <p class="p200 mt-xl">Acnespecialisten har en omfattande erfarenhet av att behandla olika hudtyper och akneärr. Med vår expertis och förståelse för din hud kan vi erbjuda skräddarsydda lösningar som passar dig. Vi ser fram emot att börja din resa mot en klar och sund hud med en kostnadsfri hudkonsultation. Att ta steget att engagera sig i en sund livsstil tillsammans med rätt hudvård kan vara avgörande för att förhindra både akne och efterföljande ärrbildning.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man akneärr?',
            content: '<p class="p200">Akneärr kan bildas på alla områden där akne har uppstått. De är mest vanliga i ansiktet, särskilt på kinderna, pannan och hakan, men de kan också uppträda på ryggen, bröstet, axlarna och nacken. Även om de oftast finns på dessa områden, är de inte begränsade till dem och kan förekomma på andra delar av kroppen också.</p>',
            extended_content: '<p class="p200 mt-xl">Beroende på typen och omfattningen av ärrbildningen kan olika behandlingsmetoder vara nödvändiga. Detta kan inkludera allt från laserbehandlingar och kemiska peelingar till mer invasiva kirurgiska metoder. Hos Acnespecialisten erbjuder vi omfattande behandlingar som tar itu med akneärr oavsett var de befinner sig på kroppen. Behandlingsval beror på individens unika behov och måste göras med en kvalificerad hudvårdsexpert.</p>
            <p class="p200 mt-xl">Det är också viktigt att betona att behandlingen av akneärr är en process som kan ta tid. Även om vissa metoder kan ge omedelbara förbättringar, kräver ärrbehandling ofta en långsiktig strategi och tålamod från patientens sida. Samarbete med en erfaren specialist, som Acnespecialisten, kan säkerställa att processen skräddarsys för att möta individens behov och mål. Kontakta oss för en kostnadsfri konsultation och börja din resa mot en hälsosam och klar hud idag!</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du omhändertagen av en personlig hudterapeut som noga undersöker och identifierar dina akneärr. Tillsammans kartlägger vi din unika ärrtyp och skapar en individuell behandlingsplan, skräddarsydd för just dina behov.',
            url_label: 'Få gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            url_title: 'Boka din kostnadsfria ärrkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med målinriktade och effektiva akneärrbehandlingar, skräddarsyr vi en lösning som är perfekt anpassad för din specifika ärrtyp. Vår expertis säkerställer en snabb och säker förbättring av hudens utseende, så att du kan känna dig trygg och nöjd med ditt resultat.',
            url_label: 'Se ärrbehandlingar',
            url: 'behandla-acnearr.php',
            url_title: 'Utforska våra skräddarsydda behandlingar för akneärr'
      ),
);

$treatment_link = '<a href="behandla-acnearr.php" title="Utforska effektiva behandlingar för akneärr" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar för akneärr</a>';


$symptoms_title = 'Olika typer av akneärr';

$symptoms = array(
      new Symptom(
            name: 'Postinflammatorisk hyperpigmentering (PIH)',
            aka: 'Kända som mörka/bruna fläckar',
            content: 'Postinflammatorisk hyperpigmentering (PIH) uppstår som ett resultat av inflammation i huden efter akne. Denna typ av mörka fläckar är inte faktiska ärr utan är ett exempel på överpigmentering. När huden läker från en inflammation, kan det hända att melanin, som ger huden dess färg, produceras i överflöd vilket resulterar i mörkare fläckar eller fläckar. Dessa kan vara brunaktiga, svarta eller till och med blåaktiga beroende på hudtyp och färg. PIH är vanligtvis platt mot huden, till skillnad från upphöjda eller indragna akneärr.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Läs mer om postinflammatorisk hyperpigmentering',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/postinflammatorisk-hyperpigmentering.webp',
            image_alt: 'Bild av postinflammatorisk hyperpigmentering',
            image_title: 'Postinflammatorisk hyperpigmentering'
      ),
      new Symptom(
            name: 'Atrofiska "ice-pick" ärr',
            aka: 'Kända som gropar eller nålstick-liknande ärr',
            content: 'Atrofiska "ice-pick" ärr är små, men djupa ärr som sträcker sig in i huden, och har ett utseende som påminner om skador orsakade av en ishacka. Dessa ärr är ofta smala vid ytan och vidgar sig nedåt in i dermis. Det är den djupa punktering som ger ärret dess karakteristiska utseende. Denna typ av ärrbildning uppstår oftast efter cystisk akne eller andra hudinfektioner och kan vara särskilt utmanande att behandla på grund av deras djup. Ice-pick ärr kan uppträda överallt där akne har varit, men de är vanligast på kinderna.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska "ice-pick" ärr',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-ice-pick-arr.webp',
            image_alt: 'Bild av atrofiska "ice-pick" ärr',
            image_title: 'Atrofiska "ice-pick" ärr'
      ),
      new Symptom(
            name: 'Atrofiska "Boxcar" ärr',
            aka: 'Kända som gropar eller skålliknande ärr',
            content: 'Atrofiska "Boxcar" ärr är en typ av akneärr som kännetecknas av rundade eller ovala gropar med skarpa vertikala kanter. Dessa ärr uppstår när aknen förstör kollagen i huden, och lämnar en märkbar depression. Ärr av denna typ kan variera i djup och storlek, och de är ofta jämförda med ärr som orsakas av varicella (vattkoppor). De förekommer oftast på kinderna och tinningarna och kan vara mycket märkbara om de är omfattande.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska "Boxcar" ärr',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-boxcar-arr.webp',
            image_alt: 'Bild av atrofiska "Boxcar" ärr',
            image_title: 'Atrofiska "Boxcar" ärr (gropar)'

      ),
      new Symptom(
            name: 'Postinflammatorisk hypopigmentering',
            aka: 'Kända som vita fläckar',
            content: 'Postinflammatorisk hypopigmentering uppstår när huden förlorar pigment (färg) på områden där en inflammatorisk hudsjukdom, som akne, har läkt. Detta leder till ljusare fläckar eller områden som kan vara iögonfallande beroende på din hudton. Det är inte ett ärr, utan en tillfällig brist på pigment och brukar återgå till normalt med tiden eller med behandling.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Läs mer om postinflammatorisk hypopigmentering',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/postinflammatorisk-hypopigmentering.webp',
            image_alt: 'Bild av postinflammatorisk hypopigmentering',
            image_title: 'Postinflammatorisk hypopigmentering (vita fläckar)'
      ),
      new Symptom(
            name: 'Atrofiska "rolling" ärr',
            aka: 'Kända som gropar',
            content: 'Atrofiska "rolling" ärr är en typ av akneärr som kännetecknas av skålformade fördjupningar i huden. De får sitt namn från deras något vågiga eller "rullande" utseende. Dessa ärr uppstår när underliggande hudstrukturer förändras och orsakar ett förlust av stöd. Det resulterar i en rörlig och ojämn hudyta. Atrofiska "rolling" ärr kan behandlas med olika metoder, som laserbehandling och dermabrasion.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska "rolling" ärr',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-rolling-arr.webp',
            image_alt: 'Bild av atrofiska "rolling" ärr',
            image_title: 'Atrofiska "rolling" ärr (gropar)'
      ),
      new Symptom(
            name: 'Postinflammatorisk erytem (PIE)',
            aka: 'Kända som rosa/lila fläckar eller missfärgning',
            content: 'Postinflammatorisk erytem uppstår som en reaktion på inflammation efter en akneinfektion och visar sig som rosa eller lila fläckar på huden. Denna missfärgning är resultatet av skadade eller förstörda blodkärl under en inflammatorisk reaktion. Fläckarna kan vara känsliga eller klia, och de bleknar oftast över tid, men kan bli mer ihållande för personer med ljusare hudton. De förekommer oftast på platser där akne har läkt, och kan förväxlas med ärrvävnad även om det inte är en riktig ärrbildning.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Läs mer om postinflammatorisk erytem',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/postinflammatorisk-erytem.webp',
            image_alt: 'Bild av postinflammatorisk erytem',
            image_title: 'Postinflammatorisk erytem (rosa/lila fläckar)'
      ),
      new Symptom(
            name: 'Hypertrofiska ärr',
            aka: 'Kända som keloid ärr',
            content: 'Hypertrofiska ärr är tjocka och upphöjda ärr som oftast bildas som en reaktion på en skada, kirurgi eller akne. Till skillnad från keloidärr, som kan växa utöver det ursprungligt skadade området, begränsas hypertrofiska ärr till skadans gränser. De är vanligen röda eller rosa till färgen och kan vara känsliga eller klia. Med tiden kan dessa ärr ofta bli mindre framträdande, men deras textur och färg kan variera beroende på individens hudtyp och hur sårläkningen har gått till.',
            //url: 'problem/aknearr/hypertrfiska-arr',
            //url_title: 'Läs mer om hypertrofiska ärr',
            //url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/hypertrofiska-arr.webp',
            image_alt: 'Bild av hypertrofiska ärr',
            image_title: 'Hypertrofiska ärr (keloid ärr)'
      ),
      new Symptom(
            name: 'Atrofiska ärr',
            aka: 'Kända som gropar',
            content: 'Atrofiska ärr är en typ av ärrbildning som ofta uppstår som en följd av akne eller andra inflammatoriska hudskador. De kännetecknas av en försänkning eller inbuktning i huden och kan likna små gropar eller håligheter. Denna typ av ärr uppstår när det finns en förlust av kollagen och stödjevävnad under huden, vilket leder till att området sjunker in. Atrofiska ärr kan variera i storlek och form och är vanligtvis belägna på ansiktet, där de kan påverka utseendet och ge en ojämn hudstruktur.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska ärr (gropar)',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-arr.webp',
            image_alt: 'Bild av atrofiska ärr (gropar)',
            image_title: 'Atrofiska ärr (gropar)'
      ),

);

$headline01 = "01. Identifiera dina akneärr";

$service = new Service(
      title: 'Akneärr Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist inom akneärr utförs en noggrann undersökning av dina ärr. Vi tar före-bilder på de drabbade områdena och diskuterar dina mål och förväntningar. En skräddarsydd behandlingsplan anpassad efter dina individuella behov och ärrets typ rekommenderas.',
      image_small: 'bilder/behandlingar/200x200/konsultation.webp',
      image_large: 'bilder/behandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för akneärrbehandling',
      image_title: 'Konsultation för akneärrbehandling',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      consultation_url_label: 'Boka konsultaion',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för akneärr',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: '',
      url_label: '',
      url_title: ''

);


$headline02 = "02. Behandla dina akneärr";

$services = array(
      new Service(
            title: 'Laser mot akneärr',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserbehandling mot akneärr är en effektiv metod som använder koncentrerade ljusstrålar för att behandla och minska ärr som orsakats av akne. Genom att stimulera hudens naturliga kollagenproduktion och ta bort skadade hudceller, kan denna behandling jämna ut hudens textur och minska framträdandet av ärr.',
            image_small: 'bilder/behandlingar/200x200/laser.webp',
            image_large: 'bilder/behandlingar/200x200/laser.webp',
            image_alt: 'Bild av en laserbehandling mot akneärr',
            image_title: 'Laserbehandling mot akneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laser mot akneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot akneärr',
            url: '',
            url_label: '',
            url_title: '',
      ),
      new Service(
            title: 'Kemisk peeling mot akneärr',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling mot akneärr är en framstående behandlingsmetod som används för att förbättra hudens utseende och textur. Denna behandling är särskilt effektiv för ärrtypen fläckar och verkar genom att applicera en kemisk lösning som exfolierar och tar bort det yttersta hudlagret. Detta främjar hudens förnyelse och kan avsevärt minska framträdandet av ärr och fläckar.',
            image_small: 'bilder/behandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/behandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling mot akneärr',
            image_title: 'Kemisk peeling mot akneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot akneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot akneärr',
            url: '',
            url_label: '',
            url_title: '',
      ),
      new Service(
            title: 'Microneedling mot akneärr',
            duration: '60 min',
            price: '2995 kr',
            content: 'Microneedling mot akneärr är en innovativ behandling som särskilt riktar sig till atrofiska ärr. Med hjälp av små, fina nålar skapas kontrollerade mikroskador i huden, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Detta leder till en jämnare hudtextur och minskat framträdande av atrofiska ärr.',
            image_small: 'bilder/behandlingar/200x200/microneedling.webp',
            image_large: 'bilder/behandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling mot akneärr',
            image_title: 'Microneedling mot akneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot akneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling mot akneärr',
            url: '',
            url_label: '',
            url_title: '',
      ),
);

$articles = array(
      new Article(
            title: 'Hur får man bort akneärr?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Vi erbjuder de senaste behandlingsmetoderna mot alla typer av akneärr. Oavsett om det gäller laserbehandling för de mest envisa ärrtyperna, microneedling som är mest effektiv mot atrofiska ärr, eller kemisk peeling för ärrtypen fläckar, är våra behandlingsalternativ bäst mot akneärr. Vi använder konstant de mest avancerade och skräddarsydda lösningarna som garanterar din tillfredsställelse. </p>
            <p class="p200 mt-m">Din resa med oss börjar med en helt kostnadsfri konsultation. Vi tar oss tiden att analysera ditt unika fall och erbjuder dig en personlig hudterapeut. Din terapeut kommer att vara din guide och stöttepelare från start till mål, och skapa en behandlingsplan som är helt anpassad efter dina behov.</p>',
      ),
      new Article(
            title: 'Varför AcneSpecialisten?!',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">DNär det kommer till att välja rätt behandling för dina akneärr, vet vi hur avgörande det är att finna någon som inte bara förstår ditt problem utan också erbjuder de mest innovativa och effektiva lösningarna. På Acnespecialisten har vi dedikerat över 30 år till att förstå och behandla akneärr. Vår gedigna erfarenhet gör oss till specialister som verkligen lever upp till vårt namn.</p>
            <p class="p200 mt-m">Det som verkligen särskiljer oss är vår fokuserade expertis inom akneärrbehandling. Vi är inte bara experter på akneärr, utan även pionjärer inom ärrreducering, laser mot akneärr och effektiv aknebehandling. Vi ser inte bara till att du får en klarare hud utan även till att du känner dig mer självsäker i din egen hud.</p>
            <p class="p200 mt-m">Genom att välja Acnespecialisten får du tillgång till en värld av expertis och omtanke, där ditt välmående står i centrum. Vi ser fram emot att hjälpa dig på din resa mot en ny början. Boka din kostnadsfria konsultation idag och ta det första steget med oss.</p>',
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
            logo_url: 'bilder/varumarken/trustpilot.svg',
            title: 'Lasern gjorde susen',
            text: "Var först lite osäker på laserbehandling, men det behövde jag inte vara. Allt förklarades noggrant, och det gjorde inte alls ont. Nu, några veckor senare, är mina akneärr nästan helt borta. Jag är så nöjd och glad över mitt beslut att testa lasern. Tack AcneSpecialisten!",
            signature: 'Lena'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'bilder/varumarken/google-small.svg',
            title: 'Gropar är ett minne blott!',
            text: "Har länge haft problem med gropar i ansiktet från gamla akneärr. Här kände jag mig direkt trygg och omhändertagen. Personalen förklarade allt och resultatet har varit fantastiskt. Jag känner knappt igen mig själv i spegeln. Så tacksam!",
            signature: 'Fredrik'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'bilder/varumarken/bokadirekt-small.svg',
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
$skinguide_url_title = "Läs fler guider om akneärr";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut med fokus på akneärr sedan 2015',
            image: 'bilder/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i akneärrbehandling',
            image_title: 'Cazzandra Lindberg - Expert på akneärrbehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut med specialisering i akneärr sedan 1999',
            image: 'bilder/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på akneärr',
            image_title: 'Veronika Benedik - Specialist inom akneärrvård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut med inriktning mot akneärr sedan 2017',
            image: 'bilder/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut specialiserad på akneärrhantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på akneärr'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut med specialisering i akneärr sedan 2019',
            image: 'bilder/specialists/312x312/hudterapeut-vilma.webp',
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
            image: 'bilder/problems/102x102/akne.webp',
            image_alt: 'Bild som visar aktiv akne, en vanlig hudåkomma',
            image_title: 'Aktiv Akne - en vanlig hudåkomma',
            url: 'akne.php',
            url_title: 'Akne'
      ),

      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'bilder/problems/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);
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