<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är stora porer? | AcneSpecialisten';
$seo_description = 'Stora porer kallas även för förstorade porer & vidgade porer. Vi erbjuder en skräddarsydd behandling mot problemet. Boka en kostnadsfri konsultation →';
$seo_keywords = 'stora porer, vidgade porer, förstorade porer, orsaker till stora porer, minimering av porer, vidgade porer, förstorade porer';
$seo_image = 'bilder/hudproblem/424x456/stora-porer.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Stora porer', '/stora-porer.php'),
);

$image_small = 'bilder/hudproblem/358x274/stora-porer.webp';
$image_large = 'bilder/hudproblem/424x456/stora-porer.webp';
$image_title = 'Visar en hud med stora porer';
$image_alt = 'Bild som illustrerar hur stora porer ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Stora Porer',
      description: 'Stora porer är ofta resultatet av genetiska faktorer, åldrande och ökad talgproduktion. Här hittar du information och orsakar som påverkar porernas storlek, utseende och hur de påverkar hudens struktur.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Förstorade porer',
            ),
            new Link(
                  label: 'Vidgade porer',
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är stora porer?',
            content: '<p class="p200">Stora porer, även benämnda som förstorade eller vidgade porer, refererar till de synligt större öppningarna av hårsäckar på huden. Dessa öppningar agerar som kanaler för talgkörtlar, som producerar hudens naturliga olja, kallad talg. När dessa <a class="b200 underline color-deep-sea-400" href="/pormaskar.php" title="Mer information om porer">porer</a> blir fyllda eller tilltäppta av talg eller döda hudceller, töjs dem ut. I vissa fall kan detta leda till andra hudproblem som stora pormaskar eller akne. Stora porer kan förändra hudens övergripande textur, vilket kan få huden att se äldre, tröttare eller grövre ut.</p>',
            extended_content: '<p class="p200 mt-xl">En annan faktor att beakta är solens inverkan. Ultraviolett strålning kan minska hudens kollagen, vilket gör att porer ser större ut. Hudens förmåga att generera kollagen försämras också med åldrande, vilket gör att porerna kan förlora sin elastiska struktur och därmed bli mer framträdande. Det är därför viktigt att förstå att stora porer inte bara är ett estetiskt problem, utan också kan vara en indikator på hudens tillstånd. Detta för att kunna identifiera rätt typ av <a class="b200 underline color-deep-sea-400" href="/behandla-stora-porer.php" title="Mer information om stora porer behandling">stora porer behandling</a> för just dina behov.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man stora porer?',
            content: '<p class="p200">Förstorade eller vidgade porer kan uppstå av en rad olika orsaker, både genetiska och miljömässiga. En av de främsta orsakerna är överproduktion av talg. När huden producerar för mycket talg kan detta leda till en uppsamling av talg och döda hudceller i porerna, vilket gör att de expanderar och blir mer synliga. Genetik spelar också en viktig roll. Om dina föräldrar eller nära släktingar har stora porer, är chansen högre att du också kan drabbas. Åldrande är en annan faktor som påverkar porernas storlek. Med tiden minskar hudens elasticitet och kollagenproduktion, vilket leder till att porerna kan tappa sin fasta form och bli större.</p>',
            extended_content: '<p class="p200 mt-xl">Exponering för solen utan lämpligt skydd kan också bidra till större porer. UV-strålning bryter ner hudens kollagen och elastin, vilka är viktiga proteiner som hjälper till att upprätthålla hudens fasthet och struktur. Upprepad exponering utan skydd kan därmed leda till en förlust av hudens spänst, vilket gör att porerna blir mer framträdande. Det är viktigt att regelbundet exfoliera huden för att undvika ansamling av döda hudceller, vilket kan leda till att porerna vidgas. Slutligen kan även faktorer som rökning, som förhindrar huden från att andas ordentligt, och hormonella förändringar, som kan öka talgproduktionen, vara bidragande orsaker till förstorade porer.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'sol' => 'Sol', 'aldrande' => 'Åldrande')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får stora porer?',
            content: '<p class="p200">Förstorade eller vidgade porer kan drabba människor av alla åldrar, kön och hudtyper. Ändå finns det vissa individer som kan vara mer benägna att utveckla detta hudtillstånd baserat på olika faktorer. Genetik är en av de viktigaste faktorerna. Om dina föräldrar eller andra nära släktingar har stora porer, kan du ha en ökad risk att ärva denna egenskap. Gener spelar en betydande roll i hudens struktur och hur den reagerar på olika miljöfaktorer. Hudtypen påverkar också porernas storlek. De med oljig hud är ofta mer benägna att ha förstorade porer eftersom oljig hud tenderar att producera mer talg. Detta kan leda till att porerna blir tilltäppta och expanderar.</p>',
            extended_content: '<p class="p200 mt-xl">Med stigande ålder kan huden förlora sin elasticitet på grund av en minskning av kollagenproduktionen, vilket kan orsaka att porernas struktur förändras och de blir större med tiden. Hormonella förändringar under perioder som puberteten, menstruation, graviditet eller övergångsåldern kan leda till förändringar i talgproduktionen, vilket kan förstora porerna. Dessutom tenderar män att ha större porer jämfört med kvinnor, delvis eftersom mäns hud ofta är oljigare och de har en tjockare hudstruktur.</p>
            <p class="p200 mt-xl">Miljöfaktorer spelar också en roll. De som bor i områden med hög förorening eller hög fuktighet kan uppleva att deras porer blir större. Föroreningar kan fastna på huden och leda till att porerna blir tilltäppta. Livsstilsval, som att röka, kan också påverka porernas storlek eftersom rökning minskar cirkulationen till hudens yta, vilket kan påverka porernas storlek och utseende. Sammanfattningsvis, även om alla kan utveckla förstorade porer till viss grad, är det vissa grupper av människor som kan vara mer benägna baserat på dessa faktorer. Dock kan rätt hudvård hjälpa till att minimera utseendet av stora porer, oavsett orsak.</p>',

            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man stora porer?',
            content: '<p class="p200">Stora porer, även kallade förstorade eller vidgade porer, kan dyka upp på olika delar av kroppen, men de är mest framträdande och märkbara i ansiktet. Näsan är ett av de mest framträdande områdena där förstorade porer kan observeras. Eftersom näsan naturligt producerar en högre mängd talg än andra delar av ansiktet, kan porerna där lätt bli tilltäppta och utvidgade. Kinderna, särskilt området närmast näsan, kan också visa tecken på förstorade porer. Precis som näsan kan kinderna uppleva ökad talgproduktion, vilket leder till vidgade porer.</p>',
            extended_content: '<p class="p200 mt-xl"> Utanför ansiktet kan stora porer också dyka upp på bröstet, ryggen och andra delar av kroppen där talgkörtlar är aktiva. Att förstå var och varför stora porer bildas är avgörande för att kunna ta itu med problemet effektivt. Genom att skydda huden mot solen, hålla den ren och välhydrerad samt regelbundet exfoliera bort döda hudceller kan man hjälpa till att förhindra att porerna blir större och förbättra hudens övergripande utseende.</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg', 'kinder' => 'Kinder')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos oss får du en personlig hudterapeut som hjälper dig identifiera problemet med dina stora porer och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför effektiva behandlingar för stora porer, anpassade för din specifika hudtyp, så att du snabbt och säkert kan minska porernas storlek.',

            url_label: 'Se behandlingar',
            url: 'behandla-stora-porer.php',
            url_title: 'Utforska våra skräddarsydda behandlingar för stora porer'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi tar fram en hudvårdsrutin och produkter som är anpassade efter din hudtyp. Målet är att förebygga stora porer och bibehålla en balanserad hud.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            url_title: 'Hitta de bästa produkterna för att förebygga stora porer'
      ),

);
$treatment_link = '<a href="behandla-stora-porer.php" title="Utforska effektiva behandlingar för stora porer" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$symptoms_title = 'Symtom';

$symptoms = array(
      new Symptom(
            name: 'Vidgade porer',
            aka: 'Förstorade porer',
            content: 'Det mest uppenbara tecknet på stora porer är synligt större poröppningar, särskilt i områdena kring näsan, kinderna och pannan.',

            //url_label: 'Läs mer om förstorade öppningar',
            //url: 'hudproblem/stora-porer/typer/forstorade-oppningar',
            //url_title: 'Läs mer om synliga tecken på stora porer',

            image: 'bilder/symptom/102x102/vidgade-porer.webp',
            image_alt: 'Bild av synligt förstorade porer',
            image_title: 'Synligt förstorade porer'
      ),

      new Symptom(
            name: 'Ojämn hudtextur',
            aka: 'Apelsinhud',
            content: 'Huden kan kännas ojämn eller gropig till följd av de utvidgade porerna.',

            //url_label: 'Läs mer om ojämn hudtextur',
            //url: 'hudproblem/stora-porer/typer/ojamn-hudtextur',
            //url_title: 'Läs mer om hur stora porer påverkar hudens textur',

            image: 'bilder/symptom/102x102/ojamn-hudtextur.webp',
            image_alt: 'Bild som illustrerar en ojämn hudtextur',
            image_title: 'Ojämn hudtextur'
      ),

      new Symptom(
            name: 'Ökad talgproduktion',
            aka: 'Fet hy',
            content: 'Stora porer är ofta förknippade med fet hud eftersom talgkörtlarna producerar mer olja, vilket kan leda till att porerna vidgas.',

            //url_label: 'Läs mer om ökad oljeproduktion',
            //url: 'hudproblem/stora-porer/typer/okad-oljeproduktion',
            //url_title: 'Läs mer om talgproduktion och dess relation till stora porer',

            image: 'bilder/symptom/102x102/okad-talgproduktion.webp',
            image_alt: 'Bild av fet hud med ökad oljeproduktion',
            image_title: 'Ökad oljeproduktion'
      ),

      new Symptom(
            name: 'Pormaskar och komedoner',
            aka: 'Tilltäppta porer',
            content: 'Förstorade porer kan lätt bli tilltäppta av talg och döda hudceller, vilket kan resultera i svarta eller vita pormaskar.',

            url_label: 'Läs mer om pormaskar och komedoner',
            url: 'pormaskar.php',
            url_title: 'Läs mer om hur pormaskar och komedoner utvecklas',

            image: 'bilder/symptom/102x102/tilltapta-porer.webp',
            image_alt: 'Bild av pormaskar och komedoner',
            image_title: 'Pormaskar och komedoner'
      ),

);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för stora porer',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist utförs en undersökning av din hud. Vi tar före-bilder på områdena med stora porer och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av stora porer',
      image_title: 'Konsultation för behandling av stora porer',

      url_label: 'Läs mer om konsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för stora porer',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      consultation_url_title: 'Klicka för att boka tid för en konsultation om stora porer',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling för stora porer',
            duration: '60 min',
            price: '1295 kr',
            content: 'Denna behandling är utformad för att minska synligheten av stora porer och förbättra hudens textur. Genom djup rengöring, exfoliering och hydrering kan huden se mer jämn och fräsch ut.',

            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för stora porer',
            image_title: 'Ansiktsbehandling för stora porer',

            url_label: 'Läs mer om ansiktsbehandling',
            url: '/portomning.php',
            url_title: 'Läs mer om ansiktsbehandling mot stora porer',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Large_Pores',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för stora porer',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Service_Facial_PoreExtraction',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för stora porer'
      ),
      new Service(
            title: 'Laserbehandling för stora porer',
            duration: '90 min',
            price: '4595 kr',
            content: 'Med hjälp av avancerad laserteknik kan denna behandling effektivt minska synligheten av stora porer och förbättra hudens textur. Lasern stimulerar kollagenproduktionen och elastinet i huden vilket resulterar i en jämnare och slätare hudstruktur.',

            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling för stora porer',
            image_title: 'Laserbehandling för stora porer',

            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot stora porer',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling för stora porer',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Method_LaserProblem',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling för stora porer'
      ),
      new Service(
            title: 'Kemisk peeling för stora porer',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla och minska synligheten av stora porer. Genom att använda en speciellt framtagen syra för att exfoliera huden främjar kemisk peeling cellförnyelse och rensar tilltäppta porer. Resultatet är en jämnare hudton och en förbättrad hudstruktur med mindre synliga porer.',

            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling för stora porer',
            image_title: 'Kemisk peeling för stora porer behandling',

            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot stora porer',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för stora porer',

            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Method_ChemicalPeeling',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för stora porer behandling'

      ),
      new Service(
            title: 'Microneedling för stora porer',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en behandlingsmetod som reducerar synliga stora porer. Genom att skapa små mikroskopiska kanaler i huden främjar detta hudens naturliga läkningsprocess och stimulerar kollagenproduktionen.',

            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling för stora porer',
            image_title: 'Microneedling för stora porer behandling',

            url: '/microneedling-stora-porer.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot stora porer',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för stora porer',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_LargePores&method=Method_Microneedling',
            booking_url_title: 'Klicka för att boka tid för en microneedling för stora porer behandling'
      ),

);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter för stora porer',
            duration: null,
            price: 'Från 1395 kr',
            content: 'För att effektivt hantera och förebygga stora porer är daglig behandling med rätt produkter avgörande. Våra produkter för stora porer är speciellt utformade för att hålla din hud i balans och minska porernas synlighet.',

            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för att minska synligheten av stora porer',
            image_title: 'Effektiva produkter för hantering och förebyggande av stora porer',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för stora porer',
            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            booking_url_title: 'Klicka för att köpa produktpaket mot stora porer',
      )
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina stora porer?',
            image_title: 'När ska jag söka hjälp med mina stora porer?',
            content: '<p class="p200">Stora porer kan vara en källa till oro för många och påverkar inte bara hudens utseende utan även självkänslan. Om du finner att dina stora porer är en anledning till missnöje, eller om du har testat diverse hudvårdsprodukter och metoder utan önskat resultat, är det kanske dags att vända sig till en expert. Det är väsentligt att förstå att det inte finns någon specifik tröskel för när det är rätt att söka professionell hjälp för ditt hudtillstånd.</p>
            <p class="p200 mt-m">En hudspecialist kan erbjuda en skräddarsydd lösning anpassad efter just dina behov. Genom en detaljerad hudanalys och en genomgång av potentiella orsaker bakom dina stora porer, kan specialisten föreslå den mest effektiva behandlingsplanen för just dig. Behandlingsalternativen varierar från grundlig rengöring till mer avancerade metoder, beroende på din unika situation.</p>
            <p class="p200 mt-m">Om stora porer är något som tynger dig eller om du helt enkelt önskar förbättra din hudbild, är det alltid en god idé att konsultera en professionell. Att ta hand om din hud och sträva efter en bättre hy är en resa som varken är bunden av tid eller graden av hudbekymmer.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina stora porer?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina stora porer?',
            content: '<p class="p200">Söker du en effektiv och hållbar lösning för dina stora porer? AcneSpecialisten är ditt självklara alternativ. Med mer än 30 års erfarenhet inom hudvård och en djupgående specialisering i behandling av stora porer, erbjuder vi skräddarsydda lösningar som möter dina specifika behov.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste metoderna och teknologierna för att erbjuda dig de bästa resultaten. Vårt team av erfarna hudterapeuter utarbetar en personligt anpassad behandlingsplan och stödjer dig genom hela din behandlingsresa. Genom regelbundna uppföljningar och anpassade program för hemmavård säkerställer vi att du uppnår långsiktiga förbättringar av dina porers utseende.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten ger dig tillgång till den mest avancerade behandlingen tillgänglig för stora porer. Men vårt erbjudande slutar inte där. Vårt dedikerade arbete, omfattande kunskap och långa erfarenhet gör oss till det bästa valet för dig som vill behandla stora porer.</p>',
      ),

);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-1.jpg',
            image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-1.jpg',
            image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-1.jpg',
            image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-1.jpg',
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
            image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-2.jpg',
            image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-2.jpg',
            image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-2.jpg',
            image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-2.jpg',
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
            image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-3.jpg',
            image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-3.jpg',
            image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-3.jpg',
            image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-3.jpg',
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
            image_before_small: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-4.jpg',
            image_after_small: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-4.jpg',
            image_before_large: '/bilder/resultat/pormaskar/resultat-pormaskar-fore-4.jpg',
            image_after_large: '/bilder/resultat/pormaskar/resultat-pormaskar-efter-4.jpg',
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
$show_all_results_title = "se flera abehandlingsresultat mot stora porer";



$faq_categories = array(
      'Generellt om stora porer' => array(
            new Question(
                  title: 'Är det möjligt att minska eller krympa storleken på stora porer?',
                  text: '<p class="p200">Ja, det är möjligt att minska synligheten av stora porer med rätt hudvårdsrutin och behandlingar. Användning av produkter som rengör och exfolierar huden rensar porerna och gör dem mindre synliga. Professionella behandlingar som kemiska peelingar, laser, och mikroneedling kan också effektivt minska storleken på porerna genom att förbättra hudens kvalitet och elasticitet.</p>'
            ),
            new Question(
                  title: 'Kan oren hy leda till större porer?',
                  text: '<p class="p200">Ja, oren hy kan bidra till större porer. När huden producerar överskott av talg och döda hudceller samlas, kan det leda till att porerna täpps till och vidgas. Regelbunden rengöring, exfoliering och användning av icke-komedogena produkter kan hjälpa till att hålla porerna rena och därmed mindre synliga.</p>'
            ),
            new Question(
                  title: 'Hur påverkar åldrandet storleken på porerna?',
                  text: '<p class="p200">Åldrandet kan påverka porernas storlek eftersom huden förlorar sin elasticitet och fasthet med tiden. Detta kan göra att porerna ser större ut. Hudvårdsprodukter och behandlingar som främjar kollagenproduktionen kan hjälpa till att förbättra hudens struktur och göra porerna mindre märkbara.</p>'
            ),
            new Question(
                  title: 'Bidrar solen till större porer?',
                  text: '<p class="p200">Ja, långvarig exponering för solen utan adekvat skydd kan skada huden och försämra dess elasticitet, vilket kan leda till större och mer synliga porer. Det är viktigt att alltid använda solskydd med hög SPF för att skydda huden mot solens skadliga UV-strålar och förebygga att porerna blir större.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till stora porer";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av stora porer',
            image_title: 'Cazzandra Lindberg - Expert på behandling av stora porer'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på stora porer',
            image_title: 'Veronika Benedik - Specialist inom vård av stora porer'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom hantering av stora porer',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på stora porer'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av stora porer',
            image_title: 'Vilma Libom - Expert inom behandling av stora porer'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter Specialiserade på Stora porer";

$related_problems = array(
      new RelatedProblem(
            name: 'Pormaskar',
            aka: 'komedoner',
            image: 'bilder/hudproblem/200x200/pormaskar.webp',
            image_alt: 'Bild som visar pormaskar, en vanlig hudåkomma',
            image_title: 'Pormaskar - en vanlig hudåkomma',
            url: 'pormaskar.php',
            url_title: 'Pormaskar'
      ),
      new RelatedProblem(
            name: 'Blandhy',
            aka: 'oljig och torr hy',
            image: 'bilder/hudproblem/200x200/blandhy.webp',
            image_alt: 'Blandhy i ansiktet',
            image_title: 'Blandhy - en vanlig hudåkomma',
            url: 'blandhy.php',
            url_title: 'Blandhy'
      ),
      new RelatedProblem(
            name: 'Akne',
            aka: 'finnar',
            image: 'bilder/hudproblem/200x200/akne.webp',
            image_alt: 'Bild som visar aktiv akne, en vanlig hudåkomma',
            image_title: 'Akne - en vanlig hudåkomma',
            url: 'acne.php',
            url_title: 'Akne'
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
            url: '/varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av stora porer";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/stora-porer.php" />

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
                        <section id="products">
                              <h2 class="h500"><?php echo $headline03 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $scm) { ?>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut/"><?php echo $specialist_url_label ?></a>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken/"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>