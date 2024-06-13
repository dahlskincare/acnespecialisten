<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är Pormaskar & Stängda Komedoner? | AcneSpecialisten';
$seo_description = 'Här hittar du allt om pormaskar och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'pormaskar, orsaker till pormaskar, förebygga pormaskar, ta bort pormaskar, hudvård';
$seo_image = 'bilder/hudproblem/424x456/pormaskar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem'),
      new PathSegment('Pormaskar', '/pormaskar.php'),
);

$image_small = 'bilder/hudproblem/424x324/pormaskar.webp';
$image_large = 'bilder/hudproblem/424x456/pormaskar.webp';
$image_title = 'Visar en hud med pormaskar';
$image_alt = 'Bild som illustrerar hur pormaskar ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Pormaskar',
      description: 'Pormaskar bildas när porer täpps till av talg och döda hudceller. Denna sida utforskar de två huvudtyperna av pormaskar (öppna och stängda), deras orsaker och hur de påverkar hudhälsan.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  url: 'komedoner.php',
                  label: 'Komedoner',
                  title: 'Allt du behöver veta om öppna och stängda komedoner och deras behandling'
            ),
            new Link(
                  url: 'stora-porer.php',
                  label: 'Stora porer',
                  title: 'Utforska orsaker, symptom och behandlingar av stora porer'
            ),
      ]
);

$about_title = 'Om pormaskar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är pormaskar?',
            content: '<p class="p200">Pormaskar, även kända som komedoner, är små svarta eller vita prickar som tillhör aknefamiljen. De uppstår när öppningarna av dina porer blir tilltäppta av en blandning av talg och döda hudceller. Talg är en naturlig olja som produceras av talgkörtlarna nere i porerna, och dess primära funktion är att hålla huden och håret mjukt och återfuktat. Döda hudceller är normala biprodukter av hudens ständiga förnyelseprocess.</p>',
            extended_content: '<p class="p200 mt-xl">Det finns två typer av pormaskar: öppna och stängda. De öppna pormaskarna, kända som svarta pormaskar, ser ut som små svarta prickar på huden. Denna svarta färg orsakas inte av smuts, som många tror, utan av oxidation. När talg och döda hudceller utsätts för luft, oxideras de, vilket leder till att de mörknar. De stängda pormaskarna, å andra sidan, är vita eller hudfärgade och kallas vita pormaskar eller slutna komedoner. I dessa fall är hårsäckens öppning täckt av tunn hud, vilket förhindrar oxidation och behåller därför den ljusa färgen. Detta resulterar i pormaskar som inte går att klämma.</p>
            <p class="p200 mt-xl">Det är intressant att notera att termen "pormask" egentligen är missvisande. Det vi kallar för pormaskar är i själva verket tilltäppta hårsäckar, inte porer. Inom varje hårsäck finns en talgkörtel och ett hårstrå. Om talgkörteln producerar för mycket talg kan detta talg ha svårt att nå hudytan. Detta leder till att talg tillsammans med döda hudceller samlas och bildar det vi känner som en pormask.</p>
            <p class="p200 mt-xl">Pormaskar är en vanlig hudproblem som ofta kan vara irriterande och påverka utseendet negativt. Även om de inte vanligtvis är skadliga, är det kritiskt att hantera dem på rätt sätt. Att klämma pormaskar på egen hand kan leda till inflammationer och ärrbildning om det inte görs korrekt. Därför är det viktigt att låta en utbildad hudterapeut utföra pormaskklämning genom en professionell porrengöring. En expert kan säkerställa att behandlingen sker på ett säkert och hygieniskt sätt, vilket minimerar risken för hudskador och främjar en frisk hud.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man pormaskar?',
            content: '<p class="p200">Pormaskar beror på flera olika faktorer som bidrar till deras bildning. En av de främsta orsakerna är överproduktion av talg, som är hudens naturliga olja. Talgkörtlar som blir överaktiva kan leda till en ansamling av talg på hudytan, och när denna talg kombineras med döda hudceller kan porerna lätt blockeras. Hormonella förändringar är en annan kritisk faktor i bildningen av pormaskar. Under puberteten upplever nästan alla någon form av hudproblem, inklusive pormaskar, på grund av ökade nivåer av androgener som stimulerar talgkörtlar. Detta är inte enbart en ungdomsfråga; många kvinnor upplever även hudproblem under menstruationscykler, graviditet eller klimakteriet, på grund av hormonella fluktuationer.</p>',
            extended_content: '<p class="p200 mt-xl">Miljöfaktorer, inklusive klimat och luftkvalitet, kan också spela en roll. Höga nivåer av fuktighet och värme kan stimulera talgproduktionen och skapa en gynnsam miljö för pormaskar. Fel hudvårdsprodukter kan också bidra till pormaskar då de rubbar hudens naturliga balans och får den att producera mer talg.Slutligen, stress kan vara utlösande faktorer för många människor. När man är stressad, producerar kroppen mer androgener, vilka är hormoner som stimulerar talgkörtlarna och hårsäckarna i huden, vilket kan leda till pormaskar.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'produkter' => 'Fel hudvård', 'klimat' => 'Klimat')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får pormaskar?',
            content: '<p class="p200">Det är en vanlig missuppfattning att pormaskar endast drabbar tonåringar eller personer med fet hud. I verkligheten är det en hudåkomma som kan påverka personer i alla åldrar och hudtyper. Här är en djupgående titt på de olika grupperna som är mest benägna att utveckla pormaskar. För det första är ungdomar i puberteten särskilt utsatta. Hormonella förändringar under dessa år leder ofta till överaktiv talgproduktion, vilket i sin tur kan bidra till pormaskar. Även om det kan verka som att pormaskar försvinner med åldern, är det inte alltid fallet. Vuxna, särskilt de i åldrarna 30 till 50, kan också uppleva pormaskar, ofta som ett resultat av hormonella förändringar relaterade till menstruation, graviditet eller klimakteriet.</p>',
            extended_content: '<p class="p200 mt-xl">Personer med fet hud är mer benägna att utveckla pormaskar eftersom deras talgkörtlar producerar mer talg, men även de med kombinationshud eller till och med torr hud kan drabbas. Detta beror på att även torr hud kan bli blockerad av döda hudceller eller externa föroreningar. Ärftlighet spelar också en roll. Om dina föräldrar eller syskon har eller har haft pormaskar eller andra former av akne, är chansen större att du också kommer att drabbas.</p>
            <p class="p200 mt-xl">Sammanfattningsvis är pormaskar ett mycket vanligt hudproblem som kan drabba nästan vem som helst, oberoende av ålder, kön, hudtyp eller livsstil. Emellertid är vissa grupper mer benägna än andra på grund av en rad olika faktorer, inklusive hormonella förändringar, arbetsmiljö, genetik och livsstilsval.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man pormaskar?',
            content: '<p class="p200">Pormaskar uppstår oftast i ansiktet, särskilt i områden som näsan och pannan, men det är inte den enda platsen där de kan förekomma. Här är en djupgående översikt över de olika områdena på kroppen där pormaskar vanligtvis kan utvecklas. Den mest kända området för pormaskar är T-zonen i ansiktet, som inkluderar pannan, näsan och hakan. Detta område har en högre koncentration av talgkörtlar, vilket gör det till en idealisk plats för pormaskar att utvecklas. Många människor upplever också pormaskar på kinderna.</p>',
            extended_content: '<p class="p200 mt-xl">Förutom ansiktet kan pormaskar också förekomma på ryggen, bröstet och axlarna. Dessa områden är också rika på talgkörtlar och är ofta utsatta för svett, vilket kan leda till blockering av porerna. Särskilt för personer som tränar mycket eller bär tighta kläder som inte låter huden andas, kan dessa områden vara problematiska. Pormaskar kan även dyka upp på oväntade ställen som öronen, nacken eller till och med på armarna.</p>
            <p class="p200 mt-xl">Intressant nog kan även livsstilsval och vanor påverka var pormaskar uppträder. Till exempel kan personer som ofta använder huvudbonader som kepsar och bandanas märka att de får fler pormaskar på pannan eller runt hårlinjen. Likaså kan de som ofta talar i telefon eller använder hörlurar uppleva en ökning av pormaskar där huden kommer i kontakt med enheten. Ett annat område som inte bör ignoreras är nacken, särskilt om man ofta har långt hår eller bär kläder som är strama runt detta område. Håroljor och produkter kan komma i kontakt med huden och blockera porerna, vilket kan leda till utveckling av pormaskar.</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos får du en personlig hudterapeut som hjälper dig identifiera dina pormaskar och skapar en individuell behandlingsplan.',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            url_label: 'Boka gratis konsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför effektiva portömning anpassade för dina pormaskar, så att du snabbt och säkert blir av med problemet.',
            url: '/hudbehandlingar/pormaskar/',
            url_label: 'Se portömning',
            url_title: 'Utforska våra skräddarsydda portömning'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga nya pormaskar och hålla din hud i balans.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            url_label: 'Se produkter',
            url_title: 'Hitta de bästa produkterna för att förebygga pormaskar'
      ),

);
$treatment_link = '<a href="/hudbehandlingar/pormaskar/" title="Utforska effektiv portömning" class="mt-xl button b200 outline expand auto-width">Läs mer om behandlingar mot pormaskar</a>';
/*
$types_title = 'Olika typer av pormaskar';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Pormaskar baserat på utseende',
            content: '<p class="p200">Pormaskar är en typ av akne som kan drabba individer i alla åldrar, från ungdomar till vuxna. Denna hudåkomma uppstår ofta när porer i huden blir tilltäppta. Det finns två huvudtyper av pormaskar: öppna och slutna komedoner. Förståelsen av dessa två typer är viktig för en effektiv behandling och förebyggande.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/svarta-pormaskar.webp',
                        image_alt: 'Bild av öppna komedoner',
                        image_title: 'Öppna komedoner eller svarta pormaskar',
                        title: 'Svarta pormaskar',
                        subtitle: 'Även kallat öppna komedoner',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/vita-pormaskar.webp',
                        image_alt: 'Bild av slutna komedoner',
                        image_title: 'Slutna komedoner eller vita pormaskar',
                        title: 'Vita pormaskar',
                        subtitle: 'Även kallat stängda komedoner',
                  ),

            )
      ),
      new BasedTypeCategory(
            title: 'Pormaskar baserat på svårighetsgrad',
            content: '<p class="p200">Pormaskar kan variera i svårighetsgrad från milda till allvarliga fall. I milda fall består problemen oftast av små, ytliga komedoner som är lätta att behandla. Måttliga fall kan inkludera större, mer framträdande pormaskar, medan allvarliga fall innebär stora och ofta inflammerade pormaskar som kan ge upphov till smärta och obehag. Svårighetsgraden påverkar vilken behandlingsmetod som är mest effektiv. Det är viktigt att identifiera och behandla pormaskar utifrån deras svårighetsgrad för att uppnå bästa möjliga resultat och minimera risken för ärr och andra hudskador.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/mild-pormaskar.webp',
                        image_alt: 'Bild av milda pormaskar',
                        image_title: 'Milda pormaskar eller ytliga komedoner',
                        title: 'Milda pormaskar',
                        subtitle: 'Ofta ytliga och lätta att behandla',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/måttlig-pormaskar.webp',
                        image_alt: 'Bild av måttliga pormaskar',
                        image_title: 'Måttliga pormaskar eller något djupare komedoner',
                        title: 'Måttliga pormaskar',
                        subtitle: 'Kan vara större och mer framträdande',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/allvarlig-pormaskar.webp',
                        image_alt: 'Bild av allvarliga pormaskar',
                        image_title: 'Allvarliga pormaskar med inflammation',
                        title: 'Allvarliga pormaskar',
                        subtitle: 'Ofta inflammerade och kan ge smärta och obehag',
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Pormaskar baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer kan påverka uppkomsten av pormaskar. Genom att förstå och hantera dessa faktorer kan individer potentiellt minska frekvensen och svårighetsgraden av deras pormaskar.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/svett.webp',
                        image_alt: 'Bild av svett',
                        image_title: 'Svett förvärrar pormaskar',
                        title: 'Svett',
                        subtitle: 'Svett kan förvärra pormaskar, särskilt i varmt klimat och under fysisk aktivitet.',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/oregelbunden-rengoring.webp',
                        image_alt: 'Bild av oregelbunden rengöring',
                        image_title: 'Oregelbunden rengöring',
                        title: 'Oregelbunden rengöring',
                        subtitle: 'Otillräcklig eller felaktig rengöring kan leda till upphopning av döda hudceller och talg, vilket kan orsaka pormaskar.',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/solbranna.webp',
                        image_alt: 'Bild av solbränna',
                        image_title: 'Solbränna och solning',
                        title: 'Solbränna och solning',
                        subtitle: 'UV-strålar kan förvärra hudproblem och potentiellt förvärra pormaskar.',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/stress.webp',
                        image_alt: 'Bild av stress',
                        image_title: 'Stress',
                        title: 'Stress',
                        subtitle: 'Även om det är kontroversiellt, tror vissa att stress kan utlösa hormonella förändringar som leder till ökad oljeproduktion och pormaskar.',
                  ),
            )
      ),


      new BasedTypeCategory(
            title: 'Pormaskar baserat på område',
            content: '<p class="p200">Pormaskar kan uppträda på olika områden av kroppen, inte bara i ansiktet. De kan också förekomma på näsan, pannan, hakan, ryggen och bröstet. Placeringen av pormaskar kan ge en indikation på dess orsak, såsom irritation från kläder eller andra yttre faktorer.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/pormaskar-ansikte.webp',
                        image_alt: 'Bild av pormaskar i ansiktet',
                        image_title: 'Exempel på pormaskar i ansiktet',
                        title: 'Pormaskar i ansiktet',
                        subtitle: 'Ofta relaterat till hormonella förändringar',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/pormaskar-rygg.webp',
                        image_alt: 'Bild av pormaskar på ryggen',
                        image_title: 'Exempel på pormaskar på ryggen',
                        title: 'Pormaskar på ryggen',
                        subtitle: 'Kan förvärras av svett och friktion',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/pormaskar-brost.webp',
                        image_alt: 'Bild av pormaskar på bröstet',
                        image_title: 'Exempel på pormaskar på bröstet',
                        title: 'Pormaskar på bröstet',
                        subtitle: 'Ofta orsakat av svett och värme',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/pormaskar-axlar.webp',
                        image_alt: 'Bild av pormaskar på axlarna',
                        image_title: 'Exempel på pormaskar på axlarna',
                        title: 'Pormaskar på axlarna',
                        subtitle: 'Påverkas ofta av kläder och kroppsvärme',
                  )
            )
      ),

);
*/
$symptoms_title = 'Pormaskar symptom';

$symptoms = array(
      new Symptom(
            name: 'Öppna Komedoner',
            image: 'bilder/symptom/102x102/oppna-komedoner.webp',
            content: 'Öppna komedoner, ofta kallade svarta pormaskar, är små mörka prickar som ofta förekommer i ansiktet, särskilt på näsan och pannan. De bildas när porer blockeras av talg och döda hudceller och utsätts för luft.',
            aka: 'Svarta pormaskar',
            image_alt: 'Bild av öppna komedoner',
            image_title: 'Öppna Komedoner',

            url_label: 'Läs mer om öppna komedoner',
            url: 'svarta-pormaskar.php',
            url_title: 'Läs mer om Svarta pormaskar (svarta pormaskar)',
      ),

      new Symptom(
            name: 'Stängda Komedoner',
            image: 'bilder/symptom/102x102/stangda-komedoner.webp',
            content: 'Stängda komedoner, eller vita pormaskar, är små, hudfärgade upphöjningar som bildas när talg och döda hudceller blockar en por. De är täckta av hud och oxideras inte, vilket håller dem vita eller hudfärgade.',
            aka: 'Vita pormaskar',
            image_alt: 'Bild av stängda komedoner',
            image_title: 'Stängda Komedoner',

            url_label: 'Läs mer om stängda komedoner',
            url: 'vita-pormaskar.php',
            url_title: 'Läs mer om stängda komedoner (vita pormaskar)',
      ),

      new Symptom(
            name: 'Förstorade Porer',
            image: 'bilder/symptom/102x102/forstorade-porer.webp',
            content: 'När porer blockeras av pormaskar kan de se större och mer framträdande ut.',
            aka: 'Vidgade porer',
            image_alt: 'Bild av förstorade porer',
            image_title: 'Förstorade Porer',

            url_label: 'Läs mer om stora porer',
            url: 'stora-porer.php',
            url_title: 'Läs mer om stora porer',
      ),

      new Symptom(
            name: 'Oljig & fet hy',
            image: 'bilder/symptom/102x102/oljig-hy-ansikte.webp',
            content: 'Områden med många pormaskar kan känna sig oljigare än resten av huden på grund av överproduktion av talg.',
            aka: 'Fet hy',
            image_alt: 'Bild av överflödig oljighet',
            image_title: 'Överflödig Oljighet',

            url_label: 'Läs mer om oljig & fet hy',
            url: 'fet-hy.php',
            url_title: 'Läs mer om oljig & fet hy',
      ),

);

$headline01 = "01. Identifiera dina pormaskar";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en AcneSpecialist utförs en undersökning av dina pormaskar. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för pormaskar',
      image_title: 'Konsultation för pormaskar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för pormaskar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om vår hudkonsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation'

);

$headline02 = "02. Behandla pormaskar";

$services = array(

      new Service(
            title: 'Portömning',
            duration: '60 min',
            price: '995 kr',
            content: 'Portömning är en inriktad ansiktsbehandling som fokuserar på att effektivt rensa porena från talg och orenheter. Behandlingen utförs genom en noga extrahering av pormaskar och kan leda till förebygga förstorade porer.',
            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_alt: 'Bild av en portömning',
            image_title: 'Portömning som behandling för pormaskar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för portömning',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Service_Facial_PoreExtraction',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en portömning',
            url: 'portomning.php',
            url_label: 'Läs mer om portömning mot pormaskar',
            url_title: 'Läs mer om portömning mot pormaskar'
      ),
      new Service(
            title: 'Laser mot Pormaskar',
            duration: '90 min',
            price: '4595 kr',
            content: 'Vår avancerade laserbehandling är en effektiv metod för att minska pormaskar. Denna teknik använder laser för att bränna bort det översta hudlagret för att bli av med porblockerna. Det hjälper till att rensa porerna vilket ger en klarare och renare hud.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling mot pormaskar',
            image_title: 'Laserbehandling mot pormaskar',

            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser mot pormaskar',
            url_title: 'Läs mer om laser mot pormaskar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot pormaskar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Method_LaserProblem',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot pormaskar',
      ),
      new Service(
            title: 'Kemisk peeling mot Pormaskar',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en utmärkt behandling för att effektivt rengöra porer och minska pormaskar. Genom att använda speciella syror som exfolierar huden och luckrar upp pormaskarna porer, vilket leder till en klarare hud.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling mot pormaskar',
            image_title: 'Kemisk peeling mot pormaskar',

            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling mot pormaskar',
            url_title: 'Läs mer om kemisk peeling mot pormaskar',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot pormaskar',

            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Method_ChemicalPeeling',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot pormaskar',

      ),
      new Service(
            title: 'Microneedling mot Pormaskar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en effektiv metod för att minska synligheten av pormaskar. Genom att skapa små mikroskopiska kanaler i huden, stimulerar denna behandling hudens naturliga läkningsprocess. Detta bidrar till att rensa och förfina porerna, vilket reducerar porernas storlek och förbättrar hudens övergripande textur.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling mot pormaskar',
            image_title: 'Microneedling mot pormaskar',

            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling mot pormaskar',
            url_title: 'Läs mer om microneedling mot pormaskar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot pormaskar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Method_Microneedling',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot pormaskar behandling',
      ),

);

$headline03 = "03. Förebygg uppkomsten av nya pormaskar";

$products = array(
      new Service(
            title: 'Produkter mot pormaskar',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt bekämpa och förebygga pormaskar är daglig behandling med rätt produkter avgörande. Våra akneprodukter är speciellt utformade för att hålla din hud i balans och förhindra att nya pormaskar uppstår.',
            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av pormaskar',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av pormaskar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för portömning',
            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/pormaskar',
            booking_url_title: 'Klicka för att köpa produktpaket mot pormaskar',
      )
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina pormaskar?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina pormaskar?',
            image_title: 'När ska jag söka hjälp med mina pormaskar?',
            content: '<p class="p200">Pormaskar är en av de mest förekommande hudåkommorna och kan drabba personer i alla åldrar. Även om de är ofarliga och bara ett estetisk bekymmer, kan de påverka självkänslan och orsaka obehag. Om du märker att dina pormaskar börjar påverka ditt välbefinnande, eller om du har provat olika produkter och hemmabehandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att komma ihåg att alla kan söka hjälp, oavsett om du har enstaka pormaskar eller ett mer utbrett problem. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård.</p>
            <p class="p200 mt-m">Hos en hudspecialist kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just ditt hudproblem. En expert kan analysera din hudtyp, diskutera möjliga orsaker till dina pormaskar och rekommendera den mest effektiva behandlingsmetoden för dig. Detta kan inkludera allt från djuprengöring och portömning till mer avancerade behandlingar. Så, om du känner att dina pormaskar har blivit en belastning eller om du helt enkelt vill ha en problemfri hy, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot bättre hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten?',
            image_title: 'Varför ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du är ute efter en effektiv och långsiktig lösning på dina pormaskar, är AcneSpecialisten det självklara valet. Vi har över 30 års erfarenhet inom hudvård och är specialiserade på att behandla pormaskar. Oavsett om du har enstaka pormaskar eller en mer utbredd problematik, kan vi erbjuda en skräddarsydd lösning som passar just dig.</p>
            <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att du ska få bästa möjliga resultat. Vårt team av hudterapeuter står redo att erbjuda en individuellt anpassad behandlingsplan och att stötta dig genom hela processen. Med regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att du får en långvarig förbättring.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för dina pormaskar. Men det är inte allt. Vi blir din partner i din hudvårdsresa och är dedikerade till att hjälpa dig att uppnå och bibehålla en klar och frisk hud. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val för behandling av pormaskar.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

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

$faq_categories = array(
      'Generellt om pormaskar' => array(
            new Question(
                  title: 'Är pormaskar ett tecken på dålig hygien?',
                  text: '<p class="p200">Nej, pormaskar är inte ett tecken på dålig hygien. Även om regelbunden rengöring av huden kan hjälpa till att minska risken för pormaskar.Det är en missuppfattning att pormaskar beror på smuts eller dålig hygien. Faktum är att överdriven tvättning eller skrubbande av huden kan orsaka irritation och faktiskt öka risken för att utveckla pormaskar.</p>'
            ),
            new Question(
                  title: 'Vad är skillnaden mellan en öppen och en sluten komedon?',
                  text: '<p class="p200">En öppen komedon, ofta kallad svart pormask, är en pormask där poröppningen är vidöppen. Detta gör att ytan av det blockerande materialet oxiderar och blir mörkt. Denna oxidation orsakas av exponering för luft. En sluten komedon, känd som vit pormask, har en sluten poröppning, vilket hindrar materialet inuti från att oxidera, så det förblir vit eller hudfärgad.</p>
                <p class="p200 mt-m">Skillnaden i färg beror alltså inte på närvaro eller frånvaro av smuts, utan på huruvida komedonen är öppen eller sluten och därmed exponerad för luft eller inte.</p>'
            ),
            new Question(
                  title: 'Hur är pormaskar relaterade till akne?',
                  text: '<p class="p200">Pormaskar är en typ av aknelesion. Akne kan uppstå i olika former, inklusive pormaskar, finnar, papler och pustler. Alla dessa är resultat av igentäppta porer, men de skiljer sig i utseende och svårighetsgrad.</p>
                <p class="p200 mt-m">Pormaskar, särskilt om de inte tas om hand, kan utvecklas till inflammerade finnar när bakterier infekterar den igentäppta porstrukturen. Detta leder till rödhet, svullnad och eventuellt varfyllda finnar.</p>'
            ),
            new Question(
                  title: 'Kan man förebygga uppkomsten av pormaskar?',
                  text: '<p class="p200">Ja, regelbunden rengöring, exfoliering och användning av icke-komedogena produkter kan minska risken för att utveckla pormaskar. Detta hjälper till att reglera talgproduktionen. Dessutom är det klokt att skydda huden från solens strålar med solskydd, eftersom UV-strålning kan försämra hudens tillstånd och förvärra pormaskar och andra hudproblem.</p>'
            ),
            new Question(
                  title: 'Är pormaskar farliga eller kan de leda till andra hudproblem?',
                  text: '<p class="p200">Pormaskar i sig är inte farliga, men om de inte behandlas kan de utvecklas till inflammerad akne. Dessutom kan felaktig hantering eller klämning av pormaskar leda till inflammation, infektion och ärrbildning.</p>
                <p class="p200 mt-m">Det är också viktigt att notera att pormaskar kan vara ett tidigt tecken på andra hudproblem som akne. Därför kan tidig behandling och en noggrann hudvårdsrutin inte bara förhindra pormaskar, men även minska risken för andra mer allvarliga hudproblem.</p>'
            ),

      ),
);
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
$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i pormaskbehandling',
            image_title: 'Cazzandra Lindberg - Expert på pormaskbehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på pormaskar',
            image_title: 'Veronika Benedik - Specialist inom pormaskvård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom pormaskhantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på pormaskar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot pormaskbehandling',
            image_title: 'Vilma Libom - Expert inom pormaskbehandling'
      )
);

$related_problems = array(
      new RelatedProblem(
            name: 'Stora porer',
            aka: 'Förstorade porer',
            image: 'bilder/hudproblem/200x200/stora-porer.webp',
            image_alt: 'Ansikte med stora porer',
            image_title: 'Stora porer',
            url: 'stora-porer.php',
            url_title: 'Stora porer',
      ),
      new RelatedProblem(
            name: 'Blandhy',
            aka: 'Oljig och torr hy',
            image: 'bilder/hudproblem/200x200/blandhy.webp',
            image_alt: 'Bild som skildrar oljig och torr hy, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Blandhy - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'blandhy.php',
            url_title: 'Blandhy'
      ),
      new RelatedProblem(
            name: 'Akne',
            aka: 'Papler & Pustler',
            image: 'bilder/hudproblem/200x200/akne.webp',
            image_alt: 'Bild som skildrar akne, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Akne - ett vanligt hudproblem bland både ungdomar och vuxna',
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
            url: '/varumarken/skin-tech',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för pormaskar";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/pormaskar.php" />
      
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
                                                                  include('hudproblem/widgets/type-card/type-card.php');
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
                                                                        <?php include('hudproblem/widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <?php echo $types_url ?>
                              </section>
                        <?php } ?>
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
                              <h2 class="big l10n">Omdömen</h2>
                              <?php
                              $reviews_narrow = true;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                              ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Omdömen" href="https://se.trustpilot.com/review/acnespecialisten.se">Läs fler omdömen</a>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Frågor och svar" href="fragor-svar.php">Läs fler frågor & Svar</a>
                        </section>
                        <!--Hudguide-->
                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Våra hudterapeuter</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Specialister" href="hudterapeut">Se alla hudterapeuter</a>
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
                              <a href="varumarken" title="Varumärken" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Varumärken" href="varumarken">Se alla varumärken</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>