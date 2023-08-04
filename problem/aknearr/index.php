<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Akneärr - Behandling, Orsaker och Förebyggande | Acnespecialisten';
$seo_description = 'Utforska allt om akneärr, från de underliggande orsakerna till effektiva behandlingsmetoder och förebyggande åtgärder. Få professionell hjälp och individuella lösningar från Acnespecialisten.';
$seo_keywords = 'akneärr, behandling av akneärr, orsaker till akneärr, förebygga akneärr, ta bort akneärr, ärrreducering, hudförnyelse, ärrbehandling';



$title = 'Akneärr';

$image_small = 'images/problems/424x324/akne.webp';
$image_large = 'images/problems/424x456/akne.webp';
$image_title = 'Visar en hud med akneärr';
$image_alt = 'Bild som illustrerar hur akneärr ser ut på huden';
$description = 'Här förklarar vi vad som kännetecknar akneärr, hur dessa ärr kan uppstå efter akne och hur vi kan hjälpa dig med behandling för att reducera dem. Vi går även igenom hur vi identifierar olika typer av akneärr, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess för att återställa hudens släthet och utseende.';


$akas = [
      new Link(
            label: 'Gropar',
            url: 'problem/gropar',
            title: 'Allt du behöver veta om atrofiska ärr i form av gropar från akne och deras behandling'
      ),
      new Link(
            label: 'Fläckar',
            url: 'problem/fläckar',
            title: 'Utforska orsaker, symptom och behandlingar av post inflammatorisk hyperpigmentering i form av fläckar från akne'
      ),
];


$consultation_url_label ="Få gratis konsultation";
$consultation_url_title ="Gratis Konsultation för Akneärr";

$booking_url_label ="Boka behandling";
$booking_url_title ="Boka behandling mot akneärr";

$mobile_consultation_url_label ="Få gratis konsultation";
$mobile_consultation_url_title ="Gratis Konsultation för Akneärr";

$mobile_booking_url_label ="Boka behandling";
$mobile_booking_url_title ="Boka Akneärr-behandling";

$floating_consultation_url_label ="Få gratis konsultation";
$floating_consultation_url_title ="Gratis Konsultation för Akneärr";

$floating_booking_url_label ="Boka behandling";
$floating_booking_url_title ="Boka behandling mot akneärr";

$nav_buttons = array(
      'about' => 'Om Akneärr',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'Risker',
      'articles' => 'Varför AS?',
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

            icons: array('who-infants' => 'Inflammerad akne', 'who-teenagers' => 'Stress', 'who-adults' => 'Pillande', 'who-elders' => 'Felaktig behandling')
      ),

      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får akneärr?',
            content: '<p class="p200">Personer som har eller har haft allvarlig akne är mest benägna att utveckla akneärr. Det är inte begränsat till en viss ålder eller kön, utan kan påverka människor genom hela livet. Genetik, ålder och kön spelar också en roll, och om familjemedlemmar har akneärr, kan risken öka. Om problemet pågår under en längre period, kan det skada hudstrukturen och leda till gropar i huden. Mörkare hudtoner kan vara mer benägna att uppleva postinflammatorisk hyperpigmentering.</p>',

            extended_content: '<p class="p200 mt-xl">Livsstilsfaktorer och hudvård spelar också en viktig roll. En sund livsstil och tidig behandling av akne kan förhindra både akne och efterföljande ärrbildning. Det är också viktigt att notera att livsstilsfaktorer som stress kan påverka akne, och därmed även risken för ärrbildning. På Acnespecialisten förstår vi att varje individ är unik och erbjuder anpassade behandlingsplaner med din personliga hudterapeut vid din sida.</p>

            <p class="p200 mt-xl">Acnespecialisten har en omfattande erfarenhet av att behandla olika hudtyper och akneärr. Med vår expertis och förståelse för din hud kan vi erbjuda skräddarsydda lösningar som passar dig. Vi ser fram emot att börja din resa mot en klar och sund hud med en kostnadsfri hudkonsultation. Att ta steget att engagera sig i en sund livsstil tillsammans med rätt hudvård kan vara avgörande för att förhindra både akne och efterföljande ärrbildning.</p>',

            icons: array('who-infants' => 'Kvinnor', 'who-teenagers' => 'Män', 'who-adults' => 'Ungdommar', 'who-elders' => 'Vuxna')
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man akneärr?',
            content: '<p class="p200">Akneärr kan bildas på alla områden där akne har uppstått. De är mest vanliga i ansiktet, särskilt på kinderna, pannan och hakan, men de kan också uppträda på ryggen, bröstet, axlarna och nacken. Även om de oftast finns på dessa områden, är de inte begränsade till dem och kan förekomma på andra delar av kroppen också.</p>',
            
            extended_content: '<p class="p200 mt-xl">Beroende på typen och omfattningen av ärrbildningen kan olika behandlingsmetoder vara nödvändiga. Detta kan inkludera allt från laserbehandlingar och kemiska peelingar till mer invasiva kirurgiska metoder. Hos Acnespecialisten erbjuder vi omfattande behandlingar som tar itu med akneärr oavsett var de befinner sig på kroppen. Behandlingsval beror på individens unika behov och måste göras med en kvalificerad hudvårdsexpert.</p>
            
            <p class="p200 mt-xl">Det är också viktigt att betona att behandlingen av akneärr är en process som kan ta tid. Även om vissa metoder kan ge omedelbara förbättringar, kräver ärrbehandling ofta en långsiktig strategi och tålamod från patientens sida. Samarbete med en erfaren specialist, som Acnespecialisten, kan säkerställa att processen skräddarsys för att möta individens behov och mål. Kontakta oss för en kostnadsfri konsultation och börja din resa mot en hälsosam och klar hud idag!</p>',

            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlar & Nacke')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du omhändertagen av en personlig hudterapeut som noga undersöker och identifierar dina akneärr. Tillsammans kartlägger vi din unika ärrtyp och skapar en individuell behandlingsplan, skräddarsydd för just dina behov.',
            url_label: 'Få gratis konsultation',
            url: 'hudkonsultation',
            url_title: 'Boka din kostnadsfria ärrkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med målinriktade och effektiva akneärrbehandlingar, skräddarsyr vi en lösning som är perfekt anpassad för din specifika ärrtyp. Vår expertis säkerställer en snabb och säker förbättring av hudens utseende, så att du kan känna dig trygg och nöjd med ditt resultat.',
            url_label: 'Se ärrbehandlingar',
            url: 'aknearr-behandling',
            url_title: 'Utforska våra skräddarsydda behandlingar för akneärr'
      ),
);

$treatment_link = '<a href="problem/aknearr/aknearrbehandling" title="Utforska effektiva behandlingar för akneärr" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar för akneärr</a>';


$symptoms_title = 'Olika typer av akneärr';

$symptoms = array(
            new Symptom(
            name: 'Postinflammatorisk hyperpigmentering (PIH)',
            aka: 'Kända som mörka/bruna fläckar',
            content: 'Postinflammatorisk hyperpigmentering (PIH) uppstår som ett resultat av inflammation i huden efter akne. Denna typ av mörka fläckar är inte faktiska ärr utan är ett exempel på överpigmentering. När huden läker från en inflammation, kan det hända att melanin, som ger huden dess färg, produceras i överflöd vilket resulterar i mörkare fläckar eller fläckar. Dessa kan vara brunaktiga, svarta eller till och med blåaktiga beroende på hudtyp och färg. PIH är vanligtvis platt mot huden, till skillnad från upphöjda eller indragna akneärr.',
            url: 'problem/akne/typer/post-inflammatory-hyperpigmentaion',
            url_title: 'Läs mer om postinflammatorisk hyperpigmentering',
            url_label: 'Läs mer om postinflammatorisk hyperpigmentering',
            image: 'images/symptoms/102x102/postinflammatorisk_hyperpigmentering.webp',
            image_alt: 'Bild av postinflammatorisk hyperpigmentering',
            image_title: 'Postinflammatorisk hyperpigmentering'
),
      new Symptom(
            name: 'Atrofiska "ice-pick" ärr',
            aka: 'Kända som gropar eller nålstick-liknande ärr',
            content: 'Atrofiska "ice-pick" ärr är små, men djupa ärr som sträcker sig in i huden, och har ett utseende som påminner om skador orsakade av en ishacka. Dessa ärr är ofta smala vid ytan och vidgar sig nedåt in i dermis. Det är den djupa punktering som ger ärret dess karakteristiska utseende. Denna typ av ärrbildning uppstår oftast efter cystisk akne eller andra hudinfektioner och kan vara särskilt utmanande att behandla på grund av deras djup. Ice-pick ärr kan uppträda överallt där akne har varit, men de är vanligast på kinderna.',
            url: 'problem/akne/typer/atrophic-icepick-scars',
            url_title: 'Läs mer om atrofiska "ice-pick" ärr',
            url_label: 'Läs mer om ice-pick ärr',
            image: 'images/symptoms/102x102/atrofiska-icepick-ar.webp',
            image_alt: 'Bild av atrofiska "ice-pick" ärr',
            image_title: 'Atrofiska "ice-pick" ärr'
),
          new Symptom(
            name: 'Postinflammatorisk erytem (PIE)',
            aka: 'Kända som rosa/lila fläckar eller missfärgning',
            content: 'Postinflammatorisk erytem uppstår som en reaktion på inflammation efter en akneinfektion och visar sig som rosa eller lila fläckar på huden. Denna missfärgning är resultatet av skadade eller förstörda blodkärl under en inflammatorisk reaktion. Fläckarna kan vara känsliga eller klia, och de bleknar oftast över tid, men kan bli mer ihållande för personer med ljusare hudton. De förekommer oftast på platser där akne har läkt, och kan förväxlas med ärrvävnad även om det inte är en riktig ärrbildning.',
            url: 'problem/akne/typer/postinflammatory-erythema',
            url_title: 'Läs mer om postinflammatorisk erytem',
            url_label: 'Läs mer om rosa/lila fläckar',
            image: 'images/symptoms/102x102/postinflammatorisk-erytem.webp',
            image_alt: 'Bild av postinflammatorisk erytem',
            image_title: 'Postinflammatorisk erytem (rosa/lila fläckar)'
),

            new Symptom(
            name: 'Atrofiska "Boxcar" ärr',
            aka: 'Kända som gropar eller skålliknande ärr',
            content: 'Atrofiska "Boxcar" ärr är en typ av akneärr som kännetecknas av rundade eller ovala gropar med skarpa vertikala kanter. Dessa ärr uppstår när aknen förstör kollagen i huden, och lämnar en märkbar depression. Ärr av denna typ kan variera i djup och storlek, och de är ofta jämförda med ärr som orsakas av varicella (vattkoppor). De förekommer oftast på kinderna och tinningarna och kan vara mycket märkbara om de är omfattande.',
            url: 'problem/akne/typer/atrophic-boxcar-scars',
            url_title: 'Läs mer om atrofiska "Boxcar" ärr',
            url_label: 'Läs mer om gropar',
            image: 'images/symptoms/102x102/boxcar.webp',
            image_alt: 'Bild av atrofiska "Boxcar" ärr',
            image_title: 'Atrofiska "Boxcar" ärr (gropar)'

),
       new Symptom(
            name: 'Postinflammatorisk hypopigmentering',
            aka: 'Kända som vita fläckar',
            content: 'Postinflammatorisk hypopigmentering uppstår när huden förlorar pigment (färg) på områden där en inflammatorisk hudsjukdom, som akne, har läkt. Detta leder till ljusare fläckar eller områden som kan vara iögonfallande beroende på din hudton. Det är inte ett ärr, utan en tillfällig brist på pigment och brukar återgå till normalt med tiden eller med behandling.',
            url: 'problem/akne/typer/postinflammatory-hypopigmentation',
            url_title: 'Läs mer om postinflammatorisk hypopigmentering',
            url_label: 'Läs mer om vita fläckar',
            image: 'images/symptoms/102x102/hypopigmentering.webp',
            image_alt: 'Bild av postinflammatorisk hypopigmentering',
            image_title: 'Postinflammatorisk hypopigmentering (vita fläckar)'
),
      new Symptom(
            name: 'Atrofiska "rolling" ärr',
            aka: 'Kända som gropar',
            content: 'Atrofiska "rolling" ärr är en typ av akneärr som kännetecknas av skålformade fördjupningar i huden. De får sitt namn från deras något vågiga eller "rullande" utseende. Dessa ärr uppstår när underliggande hudstrukturer förändras och orsakar ett förlust av stöd. Det resulterar i en rörlig och ojämn hudyta. Atrofiska "rolling" ärr kan behandlas med olika metoder, som laserbehandling och dermabrasion.',
            url: 'problem/akne/typer/atrophic-rolling-scars',
            url_title: 'Läs mer om atrofiska "rolling" ärr',
            url_label: 'Läs mer om "rolling" ärr',
            image: 'images/symptoms/102x102/rolling-scars.webp',
            image_alt: 'Bild av atrofiska "rolling" ärr',
            image_title: 'Atrofiska "rolling" ärr (gropar)'
),

      new Symptom(
            name: 'Hypertrofiska ärr',
            aka: 'Kända som keloid ärr',
            content: 'Hypertrofiska ärr är tjocka och upphöjda ärr som oftast bildas som en reaktion på en skada, kirurgi eller akne. Till skillnad från keloidärr, som kan växa utöver det ursprungligt skadade området, begränsas hypertrofiska ärr till skadans gränser. De är vanligen röda eller rosa till färgen och kan vara känsliga eller klia. Med tiden kan dessa ärr ofta bli mindre framträdande, men deras textur och färg kan variera beroende på individens hudtyp och hur sårläkningen har gått till.',
            url: 'problem/akne/typer/hypertrophic-keloid',
            url_title: 'Läs mer om hypertrofiska ärr',
            url_label: 'Läs mer om hypertrofiska ärr',
            image: 'images/symptoms/102x102/hypertrophic-scars.webp',
            image_alt: 'Bild av hypertrofiska ärr',
            image_title: 'Hypertrofiska ärr (keloid ärr)'
),

      new Symptom(
            name: 'Atrofiska ärr',
            aka: 'Kända som gropar',
            content: 'Atrofiska ärr är en typ av ärrbildning som ofta uppstår som en följd av akne eller andra inflammatoriska hudskador. De kännetecknas av en försänkning eller inbuktning i huden och kan likna små gropar eller håligheter. Denna typ av ärr uppstår när det finns en förlust av kollagen och stödjevävnad under huden, vilket leder till att området sjunker in. Atrofiska ärr kan variera i storlek och form och är vanligtvis belägna på ansiktet, där de kan påverka utseendet och ge en ojämn hudstruktur.',
            url: 'problem/akne/typer/atrofiska-arr',
            url_title: 'Läs mer om atrofiska ärr (gropar)',
            url_label: 'Läs mer om atrofiska ärr',
            image: 'images/symptoms/102x102/atrofiska-arr.webp',
            image_alt: 'Bild av atrofiska ärr (gropar)',
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
      consultation_url_label: 'Boka tid för akneärrkonsultation',
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
            consultation_url_label: 'Boka tid för hudkonsultation för laserbehandling mot akneärr',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laser mot akneärr',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/laserbehandling-aknearr-1643922',
            booking_url_label: 'Boka tid för laserbehandling mot akneärr',
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
            consultation_url_label: 'Boka tid för hudkonsultation för kemisk peeling mot akneärr',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot akneärr',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/kemisk-peeling-aknearr-1643922',
            booking_url_label: 'Boka tid för kemisk peeling mot akneärr',
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
            consultation_url_label: 'Boka tid för hudkonsultation för microneedling mot akneärr',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot akneärr',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/microneedling-aknearr-1643922',
            booking_url_label: 'Boka tid för microneedling mot akneärr',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling mot akneärr',
            url: 'microneedling-aknearr',
            url_label: 'Läs mer om microneedling mot akneärr',
            url_title: 'Klicka här för att läsa mer om microneedling mot akneärr'
      ),
);

$headline03 = "03. Förebygg uppkomsten av ny akne";

$products = array(
      new Service(
            id: 'produkter-mot-akne',
            title: 'Produkter mot akne',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt bekämpa och förebygga akne är daglig behandling med rätt produkter avgörande. Våra akneprodukter är speciellt utformade för att hålla din hud i balans och förhindra att ny akne uppstår.',
            image_small: 'images/services/200x200/produkter-akne.webp',
            image_large: 'images/services/200x200/produkter-akne.webp',
            image_alt: 'Bild av produkter designade för behandling av akne',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av akne',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'produkter-akne',
            url_label: 'Läs mer om produkter mot akne',
            url_title: 'Klicka här för att läsa mer om produkter mot akne'
      )
);

$headline04 = "04. Reparera post-akne";

$procedures = array(
      new Service(
            id: 'microneedling-for-acne',
            title: 'Reparera acneärr',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Efter aktiv akne kan man uppleva post-akne, vilket innebär ärr i form av gropar i olika former och fläckar i olika färger på huden där aknen tidigare varit. Olika typer av ärr behandlas med olika metoder. Klicka här för att läsa mer om hur du kan reparera din hud och ta hand om post-akne.',
            image_small: 'images/services/200x200/microneedling-aknearr.webp',
            image_large: 'images/services/200x200/microneedling-aknearr.webp',
            image_alt: 'Reparera acneärr',
            image_title: 'Reparera acneärr',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'behandling/aknearr',
            url_label: 'Läs mer om behandlingar mot akneärr',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot akneärr'
      ),
);
$articles = array(
      new Article(
            id: 'pigmentation-causes-and-risk-factors',
            title: 'Varför AcneSpecialisten?!',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Du som vill ha det som är bäst mot akne bör välja Acnespecialisten eftersom vi är experter på att behandla akne och har över 30 års erfarenhet av att ha arbetat med olika typer av akne. Vi lever upp till vårt namn genom att erbjuda personlig och professionell hjälp för att hjälpa dig att uppnå en klar och frisk hud. Vi skräddarsyr behandlingar baserade på dina individuella problem och behov, vi rekommenderar de bästa akneprodukterna för att förebygga och behandla din hud och akne. </p><p class="p200 mt-m">Genom att välja Acnespecialisten får du den mest effektiva behandlingen för ditt specifika fall och en hudvårdspartner som stöttar dig genom hela processen.</p>',
      ),
      new Article(
            id: 'when-to-see-your-pigmentation-specialist',
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Du bör besöka Acnespecialisten när du känner att din akne påverkar din livskvalitet eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar. Ju tidigare du söker hjälp, desto större är chansen att undvika ärrbildning och långvariga hudproblem. Acnespecialisten är här för att erbjuda dig expertis och skräddarsydda behandlingar oavsett om du har lindrig, måttlig eller svår akne. Tveka inte att kontakta oss för att boka en kostnadsfri konsultation och ta det första steget mot en klarare och friskare hud.</p><p class="p200 mt-m">Välj Acnespecialisten innan du går till en läkare, eftersom vi erbjuder en kostnadsfri konsultation där vi analyserar din akne och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla akne och kan ge dig råd om vilka produkter och behandlingar som är bäst för just din hudtyp. Att prova Acnespecialisten först kan hjälpa dig att undvika att använda tunga mediciner som kan ha biverkningar och påverka hela kroppen. Genom att boka en gratis konsultation hos oss får du en chans att se hur vi kan hjälpa dig att förbättra din hudhälsa innan du tar steget att besöka en läkare.</p>',
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

$results_url_label ="Se fler resultat";
$results_url_title ="se flera aknbehandlingsresultat";


$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all akne efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och aknen är betydligt mildare",
            signature: 'Lovisa'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min akne med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily'
      ),

);

$review_url_label ="Läs fler omdömen";
$review_url_title ="AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om akne' => array(
            new Question(
                  title: 'Hur blir jag av med min akne snabbt?',
                  text: '<p class="p200">Att bli av med akne snabbt är en utmaning, eftersom det inte finns någon quickfix när det gäller akne. Effektiv behandling kräver att du tar hand om din hud genom att använda rätt behandlingar och produkter som passar din specifika hudtyp och akne. För att få en skräddarsydd behandlingsplan som hjälper dig att bli av med aknen så snabbt som möjligt, rekommenderar vi att du bokar en kostnadsfri hudkonsultation hos oss. Under konsultationen kommer vi att analysera din hud och hjälpa dig att utforma en anpassad behandlingsrutin som ger dig de bästa förutsättningarna för att snabbt och effektivt behandla din akne.</p>'
            ),
            new Question(
                  title: 'Har jag akne även om jag bara har en finne?',
                  text: '<p class="p200">ja, du har tekniskt sett akne även om du bara har en enstaka finne. Akne kan ta sig många olika former och innefattar alla typer av finnar, oavsett om det är enstaka eller flera, stora eller små, papler eller pustler. Många tror att de inte har akne om de endast upplever enstaka finnar då och då, men faktum är att alla dessa fall kategoriseras som akne.</p>'
            ),
            new Question(
                  title: 'Ska jag klämma mina finnar?',
                  text: '<p class="p200">Vi på Acnespecialisten rekommenderar att du inte klämmer finnar själv, eftersom felaktig teknik kan leda till ärrbildning och förvärra inflammationen genom att införa bakterier från dina fingrar. Det är dock sant att finnar kan behöva klämmas, men det måste göras på rätt sätt för att undvika skador på huden. Om du undviker att klämma helt kan ärrbildning också uppstå, eftersom fettsyran i finnen fortsätter att fräta på huden.</p>

                        <p class="p200 mt-m">För att klämma finnar korrekt krävs både rätt utrustning och teknik. På Acnespecialisten har vi erfarna hudterapeuter som kan hjälpa dig att behandla dina finnar på ett säkert och effektivt sätt. Genom att vända dig till oss får du den expertis och omsorg du behöver för att hantera din akne på bästa sätt. Du kan läsa mer om våra aknebehandlingar och hur de kan hjälpa dig här.</p>'
            ),
            new Question(
                  title: 'Försvinner aknen efter tonåren?',
                  text: '<p class="p200">Det är svårt att ge ett entydigt svar på den frågan eftersom det varierar från person till person. För vissa kan akne vara ett tonårsproblem som försvinner när de blir äldre, medan det för andra kan övergå till vuxenakne. Det är inte säkert att aknen försvinner efter tonåren, och det kan variera beroende på individuella faktorer som hormoner, genetik och livsstil.</p>

                        <p class="p200 mt-m">Akne kan uppstå i olika faser av livet och dess svårighetsgrad varierar från person till person. Vissa individer upplever akne under tonåren, som sedan försvinner när de når vuxen ålder. Andra kan vara aknefria under tonåren, men drabbas av akne som vuxna. Den mest besvärliga situationen är när någon drabbas av akne under tonåren som sedan övergår till vuxenakne.</p>

                        <p class="p200 mt-m">När man når vuxen ålder och aknen fortfarande inte har försvunnit, är det stor risk att aknen har lett till ärrbildning. Det är därför viktigt att behandla akne i alla åldrar för att förebygga och minimera risken för att drabbas av acneärr. Oavsett ålder och fas av akne, bör man söka hjälp för att behandla och kontrollera sitt tillstånd, för att minska risken för långsiktiga hudproblem som ärrbildning.</p>'
            ),
            new Question(
                  title: 'Kan jag ha akne även om jag är vuxen?',
                  text: '<p class="p200">Ja, akne kan drabba vuxna och det är faktiskt ganska vanligt. Vuxenakne drabbar cirka 12-22% av alla kvinnor och 3% av alla män. Den kan uppkomma vid 20-, 30- och 40-årsåldern, och ibland ännu senare. Det kallas då för vuxenakne och har också med hormonerna i din kropp att göra, men faktorerna som triggar igång din akne är lite annorlunda än vid tonårsakne.</p>

                        <p class="p200 mt-m">Vid tonårsakne ökar produktionen av det manliga könshormonet i din kropp. Det, i kombination med fettproduktionen, kan leda till att du drabbas av akne. Vid vuxen ålder däremot, kan aknen bero på sådant som graviditet, menstruation, alkohol, stress och preventivmedel. Alltså, yttre faktorer som triggar igång dina hormoner och får aknen att blomma upp.</p>

                       <p class="p200 mt-m">Vuxenakne kan orsakas av flera faktorer, såsom hormonella förändringar, stress, genetik och användning av olämpliga hudvårdsprodukter. Hos kvinnor kan akne ofta vara kopplad till menstruationscykeln eller hormonella förändringar i samband med graviditet och menopaus.</p>

                       <p class="p200 mt-m">Sammanfattningsvis kan akne drabba personer i alla åldrar, och det är viktigt att vara medveten om att akne inte bara är ett tonårsproblem.</p>'
            ),
            new Question(
                  title: 'Förvärras min akne av att jag äter choklad?',
                  text: '<p class="p200">Nej, det är en myt att choklad direkt skulle leda till akne. Ingen vetenskaplig forskning har tydligt påvisat ett direkt samband mellan chokladkonsumtion och uppkomsten av finnar. Det som potentiellt kan påverka din akne är stress. Om du upplever stress över att du ätit choklad, kan det i sin tur bidra till akneutbrott. Men en bit choklad då och då bör inte orsaka akneutbrott hos de flesta människor.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra för att bli av med min akne?',
                  text: '<p class="p200">Att bekämpa akne effektivt kräver en individuellt anpassad strategi som kombinerar lämpliga behandlingar och hudvårdsprodukter, utformade för att passa dina unika behov och din huds specifika tillstånd. På Acnespecialisten, erbjuder vi kostnadsfria hudkonsultationer där vi kan utvärdera ditt specifika fall av akne och hjälpa till att skräddarsy en effektiv behandlingsrutin.</p>'
            )
      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Hur många behandlingar behövs?',
                  text: '<p class="p200">Antalet behandlingar som behövs varierar från person till person och beror på flera faktorer, som din hudtyp, svårighetsgraden av din akne och din respons på behandlingen. Vanligtvis kan du se en förbättring efter 1 till 3 veckors regelbunden behandling.</p>

                       <p class="p200 mt-m">Det är viktigt att påpeka att behandlingen hos oss inte fungerar i isolering. En väsentlig del av din framgång ligger i den dagliga användningen av de rekommenderade produkterna hemma. Det är kombinationen av professionell behandling och hemmavård som ger bästa möjliga resultat.</p>

                        <p class="p200 mt-m">Om du inte upplever de förväntade förbättringarna efter en tid, uppmanar vi dig att ta kontakt med din personliga hudterapeut. Tillsammans kan vi se över dina hudvårdsrutiner och de produkter du använder, för att optimera din behandlingsplan.</p>'
            ),
            new Question(
                  title: 'Finns det en risk att min akne återkommer?',
                  text: '<p class="p200">Ja, det finns en risk att akne återkommer, eftersom akne kan påverkas av flera faktorer såsom genetik, hormoner, livsstil och hudvård. Personer med en genetisk benägenhet för akne kan uppleva att aknen återkommer, särskilt under perioder av hormonella förändringar som pubertet, graviditet eller menstruation. Även faktorer som stress, kost och användning av olämpliga hudvårdsprodukter kan bidra till att aknen återkommer.</p>
                       
                       <p class="p200 mt-m">Det är dock viktigt att komma ihåg att regelbunden och korrekt hudvård kan hålla aknen i schack. Precis som vi borstar tänderna varje dag för att hålla karies borta, behöver vi underhålla vår hud för att hålla aknen borta. Det innebär att följa en anpassad hudvårdsrutin, hantera stress och upprätthålla en hälsosam livsstil. Så länge du tar hand om din hud regelbundet och på rätt sätt, kan du förhindra att aknen återkommer.</p>'
            ),
            new Question(
                  title: 'Vilken är den bästa behandlingen mot akne?',
                  text: '<p class="p200">Vilken behandling som är bäst för akne varierar beroende på individens hudtyp, aknens svårighetsgrad och orsaker till akne. Den bästa behandlingen är en skräddarsydd behandlingsplan som kombinerar rätt behandlingar, produkter och rutiner för att effektivt ta itu med den aktiva aknen och förhindra att nya utbrott uppstår. Genom att först behandla och bli av med den aktiva aknen kan du uppnå en klarare hud. Därefter är det viktigt att bibehålla resultaten med lämpliga produkter och rutiner för att motverka att nya finnar uppstår och hålla aknen under kontroll. Det rekommenderas att konsultera en av våra specialister för att få en personlig och effektiv behandlingsplan som passar just din hud och akne.</p>'
            ),
            new Question(
                  title: 'Gör aknebehandlingen ont?',
                  text: '<p class="p200">vi strävar efter att göra aknebehandlingen så behaglig som möjligt för våra klienter. Det är sant att akne ibland innebär inflammation i porerna och kan göra ont när de öppnas upp och töms. Men vi vill påpeka att smärtupplevelsen kan variera från person till person och bero på behandlingsmetoden som används. Vår erfarna personal är välutbildad och tar stor hänsyn till din komfort under behandlingen. Om du känner någon obehag, tveka inte att informera din acnespecialist så att de kan justera behandlingen efter dina behov.</p>'
            ),
            new Question(
                  title: 'Vad ska jag tänka på innan behandlingen?',
                  text: '<p class="p200">Vi vill att din behandling ska vara så smidig och bekväm som möjligt, och vi strävar efter att göra processen enkel för dig. Du behöver inte förbereda något särskilt inför ditt besök hos oss. Kom precis som du är, och vi tar hand om resten. Vi kommer att genomföra en grundlig hudanalys och skräddarsy en behandlingsplan som passar just dig och din hudtyp. Så, du kan lita på oss och bara slappna av inför din aknebehandling.</p>'
            ),
            new Question(
                  title: 'Vad ska jag tänka på efter behandling?',
                  text: '<p class="p200">Efter din aknebehandling hos Acnespecialisten kan du uppleva att huden blir något röd och irriterad. Detta är helt normalt och en del av hudens naturliga läkningsprocess. Rödheten och irritationen kommer att avta under dagarna efter behandlingen. Det är viktigt att du fortsätter att följa den hudvårdsrutin och de produktrekommendationer vi gett dig för att stödja hudens återhämtning och maximera resultaten av behandlingen.</p>
                        
                        <p class="p200 mt-m">Undvik att peta eller klämma på behandlade områden för att undvika eventuell ärrbildning och infektion. Dessutom är det bra att skydda huden från solen, då den kan vara extra känslig efter behandling. Använd solskyddsmedel och undvik direkt solljus så mycket som möjligt. Kom ihåg att vi på Acnespecialisten alltid finns här för dig om du har några frågor eller funderingar efter din behandling.</p>'
            ),
            new Question(
                  title: 'Eftervård efter behandlingen?',
                  text: '<p class="p200">Eftervården efter en aknebehandling hos Acnespecialisten är lika viktig som själva behandlingen. När aknen är utklämd och borta är det viktigt att förebygga uppkomsten av ny akne. Om du inte följer din eftervårdsplan kommer du att få resultat, men det kommer inte vara bestående, eftersom akneproduktionen sätter igång igen kort tid efter behandlingen.</p>

                  <p class="p200 mt-m">För att hålla huden i kontroll och balans är det viktigt att följa de råd och rekommendationer vi ger dig angående hudvårdsrutin och produkter. Kontinuerlig behandling och förebyggande åtgärder är avgörande för att uppnå och bibehålla en klar och frisk hud. Kom ihåg att vi på Acnespecialisten alltid finns här för att hjälpa och stötta dig genom hela processen, både under och efter din behandling.</p>',
            ),
      ),
);

$faq_url_label ="Läs fler frågor & svar";
$faq_url_title ="läs flera frågor relaterat till akne";

$skin_guide_articles = array(
      new SkinGuideArticle(
            id: 'myter-om-akne',
            url_title: '',
            title: 'Myter om Akne',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Akne',
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
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
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
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
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
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            image_alt: 'Hormones effect',
            image_title: 'Hormones effect',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
);

$skinguide_url_label ="Läs fler guider";
$skinguide_url_title ="Läs fler guider om akne";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i aknebehandling',
            image_title: 'Cazzandra Lindberg - Expert på aknebehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på akne',
            image_title: 'Veronika Benedik - Specialist inom aknevård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom aknehantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på akne'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot aknebehandling',
            image_title: 'Vilma Libom - Expert inom aknebehandling'
      )
);

$specialist_url_label ="Se alla specialister";
$specialist_url_title ="Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'problem/acnearr',
            url_title: 'Acneärr'
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
            label: 'Powerlite',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
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
            label: 'Cryopen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'Cryopen Brand Logo',
            image_title: 'Cryopen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'varumarken/cryopen',
            url_title: 'Läs mer om Cryopen Kryoterapi Hudbehandlingar',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'images/brands/lumenis.svg',
            image_alt: 'Lumenis Brand Logo',
            image_title: 'Lumenis - Laser och Intensivt Pulserat Ljus (IPL) Teknologi för Hudvård',
            url: 'varumarken/lumenis',
            url_title: 'Läs mer om Lumenis Laser och IPL Hudvårdslösningar',
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

$brands_url_label ="Se alla varumärken";
$brands_url_title ="Varumärken för Aknebehandling";

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