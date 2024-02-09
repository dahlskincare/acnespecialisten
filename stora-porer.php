<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Stora Porer - Orsaker, Behandling och Råd | Acnespecialisten';
$seo_description = 'Lär dig allt om stora porer, från dess orsaker till hur man behandlar och minimerar dem. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'stora porer, behandling av stora porer, orsaker till stora porer, minimering av porer, vidgade porer, förstorade porer, hudtextur, sebum, talgproduktion';

// här lägger du bild som du vill skall synas när du länkar i socialamedier eller sms

$seo_image = 'bilder/problem/424x456/stora-porer.webp';

$title = 'Stora Porer';

$image_small = 'bilder/problem/424x324/stora-porer.webp';
$image_large = 'bilder/problem/424x456/stora-porer.webp';
$image_title = 'Visar en hud med stora porer';
$image_alt = 'Bild som illustrerar hur stora porer ser ut på huden';
$description = 'Här förklarar vi vad som kännetecknar stora porer, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom orsakerna bakom vidgade eller förstorade porer och hur vi på Acnespecialisten kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Förstorade porer',
            url: null,
            title: null,
      ),
      new Link(
            label: 'Vidgade porer',
            url: null,
            title: null,
      ),
      new Link(
            label: 'Utvidgade porer',
            url: null,
            title: null,
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores";
$consultation_url_title = "Gratis Konsultation för Stora porer";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_LargePores";
$booking_url_title = "Boka Aknebehandling";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Stora porer";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Aknebehandling";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Stora porer";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka behandling för stora porer";

$nav_buttons = array(
      'about' => 'Om Stora porer',
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
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om stora porer';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är stora porer?',
            content: '<p class="p200">Stora porer, även benämnda som förstorade eller vidgade porer, refererar till de synligt större öppningarna av hårsäckar på huden. Dessa öppningar agerar som kanaler för talgkörtlar, som producerar hudens naturliga olja, kallad talg. När dessa porer blir fyllda eller tilltäppta av talg eller döda hudceller, blir de mer märkbara. I vissa fall kan detta leda till andra hudproblem som pormaskar, whiteheads eller akne. Stora porer kan förändra hudens övergripande textur, vilket kan få huden att se äldre, tröttare eller grovare ut</p>',
            extended_content: '<p class="p200 mt-xl">En annan faktor att beakta är solens inverkan. Ultraviolett strålning kan minska hudens kollagen, vilket gör att porer ser större ut. Hudens förmåga att generera kollagen försämras också med åldrande, vilket gör att porerna kan förlora sin elastiska struktur och därmed bli mer framträdande. Det är därför viktigt att förstå att stora porer inte bara är ett estetiskt problem, utan också kan vara en indikator på hudens tillstånd.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man stora porer?',
            content: '<p class="p200">Förstorade eller vidgade porer kan uppstå av en rad olika orsaker, både genetiska och miljömässiga. En av de främsta orsakerna är överproduktion av talg. När huden producerar för mycket talg kan detta leda till en uppsamling av smuts och döda hudceller i porerna, vilket gör att de expanderar och blir mer synliga. Genetik spelar också en viktig roll. Om dina föräldrar eller nära släktingar har stora porer, är chansen högre att du också kan drabbas. Åldrande är en annan faktor som påverkar porernas storlek. Med tiden minskar hudens elasticitet och kollagenproduktion, vilket leder till att porerna kan tappa sin fasta form och bli större.</p>',
            extended_content: '<p class="p200 mt-xl">Exponering för solen utan lämpligt skydd kan också bidra till större porer. UV-strålning bryter ner hudens kollagen och elastin, vilka är viktiga proteiner som hjälper till att upprätthålla hudens fasthet och struktur. Upprepad exponering utan skydd kan därmed leda till en förlust av hudens spänst, vilket gör att porerna blir mer framträdande. Det är viktigt att regelbundet exfoliera huden för att undvika ackumulering av döda hudceller, vilket kan leda till att porerna vidgas. Slutligen kan även faktorer som rökning, som förhindrar huden från att andas ordentligt, och hormonella förändringar, som kan öka talgproduktionen, vara bidragande orsaker till förstorade porer.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'kyla-varme' => 'Kyla & Värme', 'mat-dryck' => 'Mat & Dryck')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får stora porer?',
            content: '<p class="p200">Förstorade eller vidgade porer kan drabba människor av alla åldrar, kön och hudtyper. Ändå finns det vissa individer som kan vara mer benägna att utveckla detta hudtillstånd baserat på olika faktorer. Genetik är en av de viktigaste faktorerna. Om dina föräldrar eller andra nära släktingar har stora porer, kan du ha en ökad risk att ärva denna egenskap. Gener spelar en betydande roll i hudens struktur och hur den reagerar på olika miljöfaktorer. Hudtypen påverkar också porernas storlek. De med oljig hud är ofta mer benägna att ha förstorade porer eftersom oljig hud tenderar att producera mer talg. Detta kan leda till att porerna blir tilltäppta och expanderar.</p>',
            extended_content: '<p class="p200 mt-xl">Ålder är en annan faktor. Med stigande ålder kan huden förlora sin elasticitet på grund av en minskning av kollagenproduktionen, vilket kan orsaka att porernas struktur förändras och de blir större med tiden. Hormonella förändringar under perioder som puberteten, menstruation, graviditet eller övergångsåldern kan leda till förändringar i talgproduktionen, vilket kan förstora porerna. Dessutom tenderar män att ha större porer jämfört med kvinnor, delvis eftersom mäns hud ofta är oljigare och de har en tjockare hudstruktur.</p>
            <p class="p200 mt-xl">Miljöfaktorer spelar också en roll. De som bor i områden med hög förorening eller hög fuktighet kan uppleva att deras porer blir större. Föroreningar kan ackumuleras på huden och leda till att porerna blir tilltäppta. Livsstilsval, som att röka, kan också påverka porernas storlek eftersom rökning minskar cirkulationen till hudens yta, vilket kan påverka dess hälsa och utseende. Sammanfattningsvis, även om alla kan utveckla förstorade porer till viss grad, är det vissa grupper av människor som kan vara mer benägna baserat på dessa faktorer. Dock kan rätt hudvård hjälpa till att minimera utseendet av stora porer, oavsett orsak.</p>',

            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man stora porer?',
            content: '<p class="p200">Stora porer, även kallade förstorade eller vidgade porer, kan dyka upp på olika delar av kroppen, men de är mest framträdande och märkbara i ansiktet. Näsan är ett av de mest framträdande områdena där förstorade porer kan observeras. Eftersom näsan naturligt producerar en högre mängd talg än andra delar av ansiktet, kan porerna där lätt bli tilltäppta och utvidgade. Pannan är ett annat område där stora porer kan bli särskilt märkbara. Detta beror på pannans närhet till T-zonen, ett område på ansiktet som har en högre koncentration av talgkörtlar. Denna överdrivna talgproduktion kan leda till förstorade porer, särskilt om döda hudceller byggs upp och inte regelbundet exfolieras bort.</p>',
            extended_content: '<p class="p200 mt-xl">Kinderna, särskilt området närmast näsan, kan också visa tecken på förstorade porer. Precis som näsan kan kinderna uppleva ökad talgproduktion, vilket leder till vidgade porer. Utanför ansiktet kan stora porer också dyka upp på bröstet, ryggen och andra delar av kroppen där talgkörtlar är aktiva. Dessa områden kan ibland uppleva akneutbrott, vilket kan förvärra problemet med förstorade porer.</p>
            <p class="p200 mt-xl">Exponering för skadliga miljöfaktorer som solens ultravioletta strålar, föroreningar och smuts kan också bidra till att porer blir större. Solskada, till exempel, kan minska hudens kollagen, vilket i sin tur kan minska hudens fasthet och leda till förstorade porer. Att förstå var och varför stora porer bildas är avgörande för att kunna ta itu med problemet effektivt. Genom att skydda huden mot solen, hålla den ren och välhydrerad samt regelbundet exfoliera bort döda hudceller kan man hjälpa till att förhindra att porerna blir större och förbättra hudens övergripande utseende.</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg', 'kinder' => 'Kinder')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera problemet med dina stora porer och skapar en individuell behandlingsplan.',

            url_label: 'Få gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva behandlingar för stora porer, anpassade för din specifika hudtyp, så att du snabbt och säkert kan minska deras framträdande.',

            url_label: 'Se behandlingar för stora porer',
            url: 'behandla-stora-porer.php',
            url_title: 'Utforska våra skräddarsydda behandlingar för stora porer'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga uppkomsten av stora porer och hålla din hud i balans.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/stora-porer',
            url_title: 'Hitta de bästa produkterna för att förebygga stora porer'
      ),
      new TreatmentStep(
            title: 'Förbättra',
            content: 'När dina porer har minskat i storlek fokuserar vi på att ytterligare förbättra hudens struktur med behandlingsmetoder som laser, microneedling och kemisk peeling för en slät och strålande hud.',

            url_label: 'Se förbättringsbehandlingar',
            url: 'behandla-stora-porer.php',
            url_title: 'Upptäck effektiva behandlingar för att förbättra hudens struktur'
      ),

);
$treatment_link = '<a href="behandla-stora-porer.php" title="Utforska effektiva behandlingar för stora porer" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar för stora porer</a>';

$symptoms_title = 'Stora porer symptom';

$symptoms = array(
      new Symptom(
            name: 'Förstorade öppningar',
            aka: 'Kända som stora porer',
            content: 'Det mest uppenbara tecknet på stora porer är synligt större poröppningar, särskilt i områdena kring näsan, kinderna och pannan.',

            //url_label: 'Läs mer om förstorade öppningar',
            //url: 'problem/stora-porer/typer/forstorade-oppningar',
            //url_title: 'Läs mer om synliga tecken på stora porer',

            image: 'bilder/symptom/102x102/oppna-komedoner.webp',
            image_alt: 'Bild av synligt förstorade porer',
            image_title: 'Synligt förstorade porer'
      ),

      new Symptom(
            name: 'Ojämn hudtextur',
            content: 'Huden kan kännas ojämn eller gropig till följd av de utvidgade porerna.',

            //url_label: 'Läs mer om ojämn hudtextur',
            //url: 'problem/stora-porer/typer/ojamn-hudtextur',
            //url_title: 'Läs mer om hur stora porer påverkar hudens textur',

            image: 'bilder/symptom/102x102/ojamn-hudton.webp',
            image_alt: 'Bild som illustrerar en ojämn hudtextur',
            image_title: 'Ojämn hudtextur'
      ),

      new Symptom(
            name: 'Ökad oljeproduktion',
            content: 'Stora porer är ofta förknippade med fet hud eftersom talgkörtlarna producerar mer olja, vilket kan leda till att porerna vidgas.',

            //url_label: 'Läs mer om ökad oljeproduktion',
            //url: 'problem/stora-porer/typer/okad-oljeproduktion',
            //url_title: 'Läs mer om talgproduktion och dess relation till stora porer',

            image: 'bilder/symptom/102x102/oljig-hy.webp',
            image_alt: 'Bild av fet hud med ökad oljeproduktion',
            image_title: 'Ökad oljeproduktion'
      ),

      new Symptom(
            name: 'Pormaskar och komedoner',
            aka: 'Kända som tilltäppta porer',
            content: 'Förstorade porer kan lätt bli tilltäppta av olja, smuts och döda hudceller, vilket kan resultera i svarta eller vita pormaskar.',

            url_label: 'Läs mer om pormaskar och komedoner',
            url: 'pormaskar.php',
            url_title: 'Läs mer om hur pormaskar och komedoner utvecklas',

            image: 'bilder/symptom/102x102/stangda-komedoner.webp',
            image_alt: 'Bild av pormaskar och komedoner',
            image_title: 'Pormaskar och komedoner'
      ),

);

$headline01 = "01. Identifiera dina stora porer";

$service = new Service(
      title: 'Konsultation för stora porer',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist på stora porer utförs en undersökning av din hud. Vi tar före-bilder på områdena med stora porer och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av stora porer',
      image_title: 'Konsultation för behandling av stora porer',

      url_label: 'Läs mer om vår konsultation för stora porer',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för stora porer',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      consultation_url_title: 'Klicka för att boka tid för en konsultation om stora porer',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla stora porer";

$services = array(
      new Service(
            title: 'Ansiktsbehandling för stora porer',
            duration: '60 min',
            price: '995 kr',
            content: 'Denna behandling är utformad för att minska synligheten av stora porer och förbättra hudens textur. Genom djup rengöring, exfoliering och hydrering kan huden se mer jämn och fräsch ut.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för stora porer',
            image_title: 'Ansiktsbehandling för stora porer',

            url: 'portomning.php',
            url_label: 'Läs mer om portömning mot stora porer',
            url_title: 'Läs mer om portömning mot stora porer',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för stora porer',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Service_Facial_PoreExtraction',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för stora porer'
      ),
      new Service(
            title: 'Laserbehandling för stora porer',
            duration: '50 min',
            price: '2595 kr',
            content: 'Med hjälp av avancerad laserteknik kan denna behandling effektivt minska synligheten av stora porer och förbättra hudens textur. Lasern stimulerar kollagenproduktionen och elastinet i huden vilket resulterar i en jämnare och slätare hudstruktur.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling för stora porer',
            image_title: 'Laserbehandling för stora porer',

            url: '/behandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser mot stora porer',
            url_title: 'Läs mer om laser mot stora porer',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling för stora porer',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_LargePores',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling för stora porer'
      ),
      new Service(
            title: 'Kemisk peeling för stora porer',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla och minska synligheten av stora porer. Genom att använda en speciellt framtagen lösning för att exfoliera huden främjar kemisk peeling cellförnyelse och rensar tilltäppta porer. Resultatet är en jämnare hudton och en förbättrad hudstruktur med mindre synliga porer. Det är en enkel och effektiv strategi för att förbättra din hudhälsa och reducera stora porer.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling för stora porer',
            image_title: 'Kemisk peeling för stora porer behandling',

            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling mot stora porer',
            url_title: 'Läs mer om kemisk peeling mot stora porer',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för stora porer',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_LargePores',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för stora porer behandling'

      ),

      new Service(
            title: 'Microneedling för stora porer',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en innovativ behandlingsmetod för att reducera synligheten av stora porer. Genom att skapa små mikroskopiska kanaler i huden främjar detta hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Denna behandling kan effektivt förbättra hudens struktur och minska synligheten av stora porer. Microneedling är en säker och effektiv strategi för att förbättra din hudhälsa och hantera stora porer.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling för stora porer',
            image_title: 'Microneedling för stora porer behandling',

            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling mot stora porer',
            url_title: 'Läs mer om microneedling mot stora porer',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för stora porer',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_LargePores',
            booking_url_title: 'Klicka för att boka tid för en microneedling för stora porer behandling'
      ),

);

$headline03 = "03. Förebygg uppkomsten av större porer";

$products = array(
      new Service(
            title: 'Produkter för stora porer',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt hantera och förebygga stora porer är daglig behandling med rätt produkter avgörande. Våra produkter för stora porer är speciellt utformade för att hålla din hud i balans och minska porernas synlighet.',

            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för att minska synligheten av stora porer',
            image_title: 'Effektiva produkter för hantering och förebyggande av stora porer',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för stora porer',
            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            booking_url_title: 'Klicka för att köpa produktpaket mot stora porer',
      )
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina stora porer?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina stora porer?',
            image_title: 'När ska jag söka hjälp med mina stora porer?',
            content: '<p class="p200">Stora porer är en vanlig hudbekymmer som kan drabba personer i alla åldrar. Även om de mestadels ses som en estetisk utmaning, kan de påverka självkänslan och ge upphov till obehag. Om du upplever att dina stora porer börjar påverka ditt välbefinnande, eller om du har provat olika produkter och behandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att komma ihåg att alla kan söka hjälp, oavsett om problemet med stora porer är lätt eller mer utbrett. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård.</p>
            <p class="p200 mt-m">Hos en hudterapeut kan du få en personlig konsultation och behandlingsplan skräddarsydd för ditt specifika hudproblem. En expert kan analysera din hudtyp, diskutera möjliga orsaker till dina stora porer och rekommendera den mest effektiva behandlingsmetoden för dig. Detta kan inkludera allt från djuprengöring till avancerade hudvårdsprodukter och tekniker. Så, om du känner att dina stora porer har blivit en belastning eller om du bara vill förbättra din huds utseende, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot en bättre hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina stora porer?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina stora porer?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina stora porer?',
            content: '<p class="p200">Om du är ute efter en effektiv och långsiktig lösning på dina stora porer, är AcneSpecialisten det självklara valet. Vi har över 30 års erfarenhet inom hudvård, inklusive en djup specialisering i att behandla stora porer. Oavsett om du har några enstaka stora porer eller ett mer omfattande problem, kan vi erbjuda en skräddarsydd lösning som passar just dina behov.</p>
            <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att ge dig bästa möjliga resultat. Vårt team av hudterapeuter står redo att erbjuda en individuellt anpassad behandlingsplan och stötta dig genom hela processen. Med regelbundna uppföljningar och skräddarsydda hemmavårdsprogram ser vi till att du uppnår en bestående förbättring av dina porer.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för dina stora porer. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig uppnå och bibehålla en klar och frisk hud. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val när det kommer till behandling av stora porer.</p>',
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera abehandlingsresultat mot stora porer";


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
      'Generellt om stora porer' => array(
            new Question(
                  title: 'Kan miljöfaktorer som solljus eller föroreningar bidra till stora porer?',
                  text: '<p class="p200">Ja, miljöfaktorer kan definitivt påverka storleken på porerna. Solljus, särskilt överdriven exponering utan adekvat solskydd, kan orsaka att huden förlorar kollagen, vilket gör att porerna kan se större ut. Föroreningar, å andra sidan, kan leda till ansamling av smuts och talg i porerna, vilket kan få dem att förstoras. Det är därför det är viktigt att regelbundet rengöra huden och använda solskydd för att skydda den från dessa miljöfaktorer.</p>'
            ),
            new Question(
                  title: 'Hur relaterar stora porer till andra hudåkommor som akne eller oljig hud?',
                  text: '<p class="p200">Stora porer är ofta kopplade till oljig hud eftersom ökad talgproduktion kan få porerna att vidgas. När talget kombineras med döda hudceller kan det leda till blockeringar i porerna, vilket i sin tur kan leda till pormaskar eller akne. Akne kan även förvärras av stora porer, eftersom bakterier har en större yta att kolonisera. Samtidigt kan inflammation från akneutbrott sträcka ut porerna, vilket gör dem mer synliga.</p>'
            ),
            new Question(
                  title: 'Kan stora porer leda till andra hudproblem?',
                  text: '<p class="p200">Ja, stora porer kan leda till andra hudproblem. Förutom ovan nämnda akne kan stora porer fyllas med smuts, talg och döda hudceller, vilket kan leda till komedoner (pormaskar och whiteheads). Om de inte rengörs ordentligt kan dessa blockeringar bli inflammerade och utvecklas till pustler, papler eller cystor. Dessutom kan huden med stora porer ha en grov och ojämn textur, vilket kan påverka dess övergripande utseende och känsla.</p>'
            ),
      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Vilka typer av behandlingar finns för stora porer?',
                  text: '<p class="p200">Det finns flera behandlingsalternativ tillgängliga för stora porer. Traditionella ansiktsbehandlingar kan vara till stor hjälp för att djuprengöra huden och dra samman porerna. Microneedling, även känd som kollageninduktionsterapi, involverar användning av små nålar för att skapa mikroskador i huden, vilket uppmuntrar produktionen av kollagen och kan förbättra hudens textur och minska porstorleken. Laserbehandlingar använder ljusenergi för att effektivt minska porernas storlek och stimulera produktionen av kollagen, vilket ger en jämnare hudton. Kemiska peelingar, som använder syror för att exfoliera huden, kan också rensa ut porerna och stimulera kollagenproduktion, vilket resulterar i mindre och mindre framstående porer. Med rätt behandlingsalternativ kan stora porer behandlas effektivt och ge en klarare, jämnare hudton.</p>'
            ),
            new Question(
                  title: 'Hur ofta bör jag genomgå ansiktsbehandlingar, microneedling, laser och kemisk peeling?',
                  text: '<p class="p200">Frekvensen för behandlingarna varierar beroende på vilken typ du väljer. Regelbundna ansiktsbehandlingar kan rekommenderas månatligen, medan microneedling kan kräva färre sessioner med några veckors mellanrum. Laserbehandlingar kan vara ännu mer sällsynta beroende på intensiteten, och kemiska peelingar kan kräva varierande tidsintervall beroende på styrkan av peelingen. Rådgör alltid med en hudterapeut för att avgöra vad som passar bäst för din hudtyp och dina individuella behov.</p>'
            ),
            new Question(
                  title: 'Är resultaten från ansiktsbehandlingar, microneedling, laser och kemisk peeling permanenta?',
                  text: '<p class="p200">Ingen behandling erbjuder permanenta resultat eftersom huden naturligt förändras med tiden och påverkas av olika faktorer. Men regelbunden behandling och rätt hudvård kan förlänga effekterna av varje session. Medan vissa tekniker, som laserbehandling, kan ge mer långvariga resultat, kommer upprepade behandlingar förmodligen att behövas över tid.</p>'
            ),
            new Question(
                  title: 'Vilka biverkningar kan jag förvänta mig efter ansiktsbehandlingar, microneedling, laser och kemisk peeling?',
                  text: '<p class="p200">Efter ansiktsbehandlingar kan man uppleva lätt rodnad. Microneedling kan leda till svullnad och rodnad. Laserbehandlingar kan orsaka rodnad, svullnad och i sällsynta fall skorpor. Kemiska peelingar kan orsaka rodnad, torrhet, flagning eller i intensiva fall skälning av huden. Det är viktigt att diskutera och förstå alla potentiella biverkningar med din hudspecialist innan du påbörjar någon behandling.</p>'
            ),
            new Question(
                  title: 'Hur länge behöver jag vänta mellan sessioner av ansiktsbehandlingar, microneedling, laser och kemisk peeling?',
                  text: '<p class="p200">Väntetiden mellan sessioner varierar. Ansiktsbehandlingar kan oftast utföras månatligen. Microneedling kan kräva några veckors mellanrum, medan laserbehandlingar kan behöva flera månader beroende på hudens respons och behandlingens intensitet. Kemiska peelingar har också varierande väntetider beroende på deras styrka. En hudspecialist kommer att ge dig en detaljerad plan baserad på den specifika behandlingen och dina huds behov.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till stora porer";

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
$skinguide_url_title = "Läs fler guider om stora porer";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av stora porer',
            image_title: 'Cazzandra Lindberg - Expert på behandling av stora porer'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på stora porer',
            image_title: 'Veronika Benedik - Specialist inom vård av stora porer'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom hantering av stora porer',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på stora porer'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av stora porer',
            image_title: 'Vilma Libom - Expert inom behandling av stora porer'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter Specialiserade på Stora porer";

$related_problems = array(
      new RelatedProblem(
            name: 'Akne',
            aka: 'Finnar',
            image: 'images/problems/102x102/akne.webp',
            image_alt: 'Bild som visar aktiv akne, en vanlig hudåkomma',
            image_title: 'Akne - en vanlig hudåkomma',
            url: 'acne.php',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'acnearr.php',
            url_title: 'Acneärr'
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
$brands_url_title = "Varumärken för behandling av stora porer";

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
                        <section id="products">
                              <h2 class="h500"><?php echo $headline03 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $service) { ?>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>