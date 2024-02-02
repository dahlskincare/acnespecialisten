<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Pormaskar - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om pormaskar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'pormaskar, behandling av pormaskar, orsaker till pormaskar, förebygga pormaskar, ta bort pormaskar, hudvård, ansiktsrengöring, porrengöring';

$title = 'Pormaskar';

$image_small = 'bilder/problem/424x324/pormaskar.webp';
$image_large = 'bilder/problem/424x456/pormaskar.webp';
$image_title = 'Visar en hud med pormaskar';
$image_alt = 'Bild som illustrerar hur pormaskar ser ut på huden';

$description = 'Här förklarar vi vad som kännetecknar pormaskar, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar pormaskar, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            url: 'komedoner.php',
            label: 'Komedoner',
            title: 'Allt du behöver veta om komedoner (öppna och stängda pormaskar) och deras behandling'
      ),
      new Link(
            url: 'stora-porer.php',
            label: 'Stora porer',
            title: 'Utforska orsaker, symptom och behandlingar av stora porer'
      ),
];

$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis konsultation för behandling av pormaskar";

$booking_url = "https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka din tid för behandling av pormaskar";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis konsultation för pormaskar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka din tid för behandling av pormaskar";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis konsultation för pormaskar";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka din tid för behandling av pormaskar";

$nav_buttons = array(
      'about' => 'Om pormaskar',
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

$about_title = 'Om pormaskar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är pormaskar?',
            content: '<p class="p200">Pormaskar, även kända som komedoner, är små hudutslag som tillhör aknefamiljen. De uppstår när öppningarna av dina hårsäckar blir tilltäppta av en blandning av talg och döda hudceller. Talg är en naturlig olja som produceras av talgkörtlarna i huden, och dess primära funktion är att hålla huden och håret mjukt och hydratiserat. Döda hudceller är normala biprodukter av hudens ständiga förnyelseprocess.</p>',
            extended_content: '<p class="p200 mt-xl">Det finns två typer av pormaskar: öppna och stängda. De öppna pormaskarna, kända som svarta pormaskar, ser ut som små svarta prickar på huden. Denna svarta färg orsakas inte av smuts, som många tror, utan av oxidation. När talg och döda hudceller utsätts för luft, oxideras de, vilket leder till att de mörknar. De stängda pormaskarna, å andra sidan, är vita eller hudfärgade och kallas vita pormaskar eller slutna komedoner. I dessa fall är hårsäckens öppning täckt av hud, vilket förhindrar oxidation och behåller därför den ljusa färgen.</p>
            <p class="p200 mt-xl">En intressant fakta är att termen "pormask" är något av en felbenämning. De tilltäppta öppningarna är faktiskt hårsäckar och inte hudporer. Varje hårsäck innehåller en hårsäck, talgkörtlar och hår. När talgkörteln producerar för mycket talg kan det bli svårt för talgen att komma ut till huden, vilket resulterar i en ansamling av olja och döda hudceller som bildar en pormask.</p>
            <p class="p200 mt-xl">Pormaskar är en mycket vanlig hudåkomma, och trots att de kan vara irriterande och estetiskt störande är de i allmänhet inte skadliga för huden. Det är dock viktigt att inte klämma pormaskar, eftersom detta kan leda till hudskador och ärrbildning.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man pormaskar?',
            content: '<p class="p200">Pormaskar beror på flera olika faktorer som bidrar till deras bildning. En av de främsta orsakerna är överproduktion av talg, som är hudens naturliga olja. Talgkörtlar som blir överaktiva kan leda till en ansamling av olja på hudytan, och när denna olja kombineras med döda hudceller, smuts eller makeup, kan porerna lätt blockeras. Hormonella förändringar är en annan kritisk faktor i bildningen av pormaskar. Under puberteten upplever nästan alla någon form av hudproblem, inklusive pormaskar, på grund av ökade nivåer av androgener som stimulerar talgkörtlar. Detta är inte enbart en ungdomsfråga; många kvinnor upplever även hudproblem under menstruationscykler, graviditet eller menopaus, på grund av hormonella fluktuationer.</p>',
            extended_content: '<p class="p200 mt-xl">Miljöfaktorer, inklusive klimat och luftkvalitet, kan också spela en roll. Höga nivåer av fuktighet och värme kan stimulera talgproduktionen och skapa en gynnsam miljö för pormaskar. Föroreningar i luften, som tungmetaller och skadliga gaser, kan också bidra till att porer blockeras.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat', 'graviditet' => 'Graviditet')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får pormaskar?',
            content: '<p class="p200">Det är en vanlig missuppfattning att pormaskar endast drabbar tonåringar eller personer med fet hud. I verkligheten är det en hudåkomma som kan påverka personer i alla åldrar och hudtyper. Här är en djupgående titt på de olika grupperna som är mest benägna att utveckla pormaskar. För det första är ungdomar i puberteten särskilt utsatta. Hormonella förändringar under dessa formella år leder ofta till överaktiv talgproduktion, vilket i sin tur kan bidra till pormaskar. Även om det kan verka som att pormaskar försvinner med åldern, är det inte alltid fallet. Vuxna, särskilt de i åldrarna 30 till 50, kan också uppleva pormaskar, ofta som ett resultat av hormonella förändringar relaterade till menstruation, graviditet eller menopaus.</p>',
            extended_content: '<p class="p200 mt-xl">Personer med fet hud är mer benägna att utveckla pormaskar eftersom deras talgkörtlar producerar mer olja, men även de med kombinationshud eller till och med torr hud kan drabbas. Detta beror på att även torr hud kan bli blockerad av döda hudceller eller externa föroreningar. Ärftlighet spelar också en roll. Om dina föräldrar eller syskon har eller har haft pormaskar eller andra former av akne, är chansen större att du också kommer att drabbas.</p>
            <p class="p200 mt-xl">Slutligen, stress kan vara utlösande faktorer för många människor. När man är stressad, producerar kroppen mer androgener, vilka är hormoner som stimulerar talgkörtlarna och hårsäckarna i huden, vilket kan leda till pormaskar. Sammanfattningsvis är pormaskar ett mycket vanligt hudproblem som kan drabba nästan vem som helst, oberoende av ålder, kön, hudtyp eller livsstil. Emellertid är vissa grupper mer benägna än andra på grund av en rad olika faktorer, inklusive hormonella förändringar, arbetsmiljö, genetik och livsstilsval.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'barn' => 'Barn', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man pormaskar?',
            content: '<p class="p200">Pormaskar uppstår oftast i ansiktet, särskilt i områden som näsan och pannan, men det är inte den enda platsen där de kan förekomma. Här är en djupgående översikt över de olika områdena på kroppen där pormaskar vanligtvis kan utvecklas. Den mest kända zonen för pormaskar är T-zonen i ansiktet, som inkluderar pannan, näsan och hakan. Detta område har en högre koncentration av talgkörtlar, vilket gör det till en idealisk plats för pormaskar att utvecklas. Många människor upplever också pormaskar på kinderna, även om de är mindre vanliga där.</p>',
            extended_content: '<p class="p200 mt-xl">Förutom ansiktet kan pormaskar också förekomma på ryggen, bröstet och axlarna. Dessa områden är också rika på talgkörtlar och är ofta utsatta för svett, vilket kan leda till blockering av porerna. Särskilt för personer som tränar mycket eller bär tighta kläder som inte låter huden andas, kan dessa områden vara problematiska. Pormaskar kan även dyka upp på oväntade ställen som öronen, nacken eller till och med på armarna. I dessa fall kan faktorer som dålig hygien, ansamling av döda hudceller eller användning av oljebaserade hudprodukter vara utlösande faktorer.</p>
            <p class="p200 mt-xl">Intressant nog kan även livsstilsval och vanor påverka var pormaskar uppträder. Till exempel kan personer som ofta använder huvudbonader som kepsar och bandanas märka att de får fler pormaskar på pannan eller runt hårlinjen. Likaså kan de som ofta talar i telefon eller använder hörlurar uppleva en ökning av pormaskar där huden kommer i kontakt med enheten. Ett annat område som inte bör ignoreras är nacken, särskilt om man ofta har långt hår eller bär kläder som är strama runt detta område. Håroljor och produkter kan komma i kontakt med huden och blockera porerna, vilket kan leda till utveckling av pormaskar.</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera dina pormaskar och skapar en individuell behandlingsplan.',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            url_label: 'Få gratis konsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva portömning anpassade för dina pormaskar, så att du snabbt och säkert blir av med problemet.',
            url: 'problem/pormaskar/pormaskbehandling',
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
$treatment_link = '<a href="problem/pormaskar/pormaskbehandling" title="Utforska effektiv portömning" class="mt-xl button b200 outline expand auto-width">Läs mer om vår pormaskbehandling</a>';
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
                        subtitle: 'Otillräcklig eller felaktig rengöring kan leda till upphopning av döda hudceller och olja, vilket kan orsaka pormaskar.',
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
            content: 'Öppna komedoner, ofta kallade svarta pormaskar, är små mörka fläckar som ofta förekommer i ansiktet, särskilt på näsan och pannan. De bildas när porer blockeras av talg och döda hudceller och utsätts för luft.',
            aka: 'Även kända som svarta pormaskar',
            image_alt: 'Bild av öppna komedoner',
            image_title: 'Öppna Komedoner'
      ),

      new Symptom(
            name: 'Stängda Komedoner',
            image: 'bilder/symptom/102x102/stangda-komedoner.webp',
            content: 'Stängda komedoner, eller vita pormaskar, är små, hudfärgade upphöjningar som bildas när talg och döda hudceller blockar en por. De är täckta av hud och oxideras inte, vilket håller dem vita eller hudfärgade.',
            aka: 'Även kända som vita pormaskar',
            image_alt: 'Bild av stängda komedoner',
            image_title: 'Stängda Komedoner'
      ),

      new Symptom(
            name: 'Ojämn Hudtextur',
            image: 'bilder/symptom/102x102/ojamn-hudton.webp',
            content: 'Områden som är drabbade av pormaskar kan ha en ojämn, nästan sandpappersliknande textur.',
            aka: 'Känns som grusig hud',
            image_alt: 'Bild av ojämn hudtextur',
            image_title: 'Ojämn Hudtextur'
      ),

      new Symptom(
            name: 'Förstorade Porer',
            image: 'bilder/symptom/102x102/forstorade-porer.webp',
            content: 'När porer blockeras av pormaskar kan de se större och mer framträdande ut.',
            aka: 'Synligt större porer',
            image_alt: 'Bild av förstorade porer',
            image_title: 'Förstorade Porer'
      ),

      new Symptom(
            name: 'Rödhet Runt Pormaskar',
            image: 'bilder/symptom/102x102/rodnad.webp',
            content: 'Ett område runt en pormask kan bli rött och inflammerat, särskilt om det har utsatts för mekanisk påverkan som att klämmas eller skrapas.',
            aka: 'Lokaliserad rodnad',
            image_alt: 'Bild av rödhet runt pormaskar',
            image_title: 'Rödhet Runt Pormaskar'
      ),

      new Symptom(
            name: 'Överflödig Oljighet',
            image: 'bilder/symptom/102x102/oljig-hy.webp',
            content: 'Områden med många pormaskar kan känna sig oljigare än resten av huden på grund av överproduktion av talg.',
            aka: 'Ökad sebumproduktion',
            image_alt: 'Bild av överflödig oljighet',
            image_title: 'Överflödig Oljighet'
      ),

      new Symptom(
            name: 'Klåda',
            image: 'bilder/symptom/102x102/klada.webp',
            content: 'Vissa kan uppleva en lätt klåda kring områden med pormaskar.',
            aka: 'Mild irritation eller klåda',
            image_alt: 'Bild av klåda',
            image_title: 'Klåda'
      ),

      new Symptom(
            name: 'Mindre Inflammation',
            image: 'bilder/symptom/102x102/mindre-inflammation.webp',
            content: 'I vissa fall kan pormaskar utvecklas till mindre inflammationer och små röda bultar, särskilt om de inte behandlas korrekt.',
            aka: 'Mindre inflammatoriska fläckar',
            image_alt: 'Bild av mindre inflammation',
            image_title: 'Mindre Inflammation'
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
            content: 'Portömning är en specialiserad ansiktsbehandling som syftar till att effektivt rensa porer från talg och orenheter. Behandlingen utförs genom en försiktig extrahering av pormaskar och kan leda till minskad inflammation och förstorade porer. Detta kan inte bara förbättra hudens textur utan även minska risken för framtida akneutbrott.',
            image_small: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_large: 'bilder/behandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
            image_alt: 'Bild av en portömning',
            image_title: 'Portömning som behandling för pormaskar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för portömning',
            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Comedones&method=Service_Facial_PoreExtraction',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en portömning',
            url: 'portomning.php',
            url_label: 'Läs mer om portömning som behandling för pormaskar',
            url_title: 'Läs mer om portömning som behandling för pormaskar'
      ),
      new Service(
            title: 'Laser mot Pormaskar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Vår avancerade laserbehandling är en effektiv metod för att minska pormaskar. Denna teknik använder lasrar för att försiktigt rengöra porerna och minska talgproduktionen. Det hjälper till att rensa pormaskarna och förebygga nya utbrott, vilket ger en klarare och mer ren hud.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling mot pormaskar',
            image_title: 'Laserbehandling mot pormaskar',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot pormaskar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_LargePores',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot pormaskar',
      ),
      new Service(
            title: 'Kemisk peeling mot Pormaskar',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en utmärkt behandling för att effektivt rengöra porer och minska pormaskar. Genom att använda speciella lösningar som exfolierar huden, rengör vi tilltäppta porer och främjar cellförnyelse, vilket leder till en klarare hud med färre synliga pormaskar.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling mot pormaskar',
            image_title: 'Kemisk peeling mot pormaskar',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot pormaskar',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_LargePores',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot pormaskar',

      ),
      new Service(
            title: 'Microneedling mot Pormaskar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en effektiv metod för att minska synligheten av pormaskar. Genom att skapa små mikroskopiska kanaler i huden, stimulerar denna behandling hudens naturliga läkningsprocess och främjar ny kollagenproduktion. Detta bidrar till att rensa och förfina porerna, vilket reducerar pormaskarnas storlek och förbättrar hudens övergripande textur. Microneedling är en säker och skonsam lösning för att minska pormaskar och förbättra hudens utseende och hälsa.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling mot pormaskar',
            image_title: 'Microneedling mot pormaskar',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot pormaskar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_LargePores',
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
            image_small: 'bilder/behandlingar/200x200/produkter.webp',
            image_large: 'bilder/behandlingar/200x200/produkter.webp',
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
            content: '<p class="p200">Pormaskar är en av de mest förekommande hudåkommorna och kan drabba personer i alla åldrar. Även om de i många fall är ofarliga och mestadels en estetisk bekymmer, kan de påverka självkänslan och orsaka obehag. Om du märker att dina pormaskar börjar påverka ditt välbefinnande, eller om du har provat olika produkter och hemmabehandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att komma ihåg att alla kan söka hjälp, oavsett om du har enstaka pormaskar eller ett mer utbrett problem. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård.</p>
            <p class="p200 mt-m">Hos en hudspecialist kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just ditt hudproblem. En expert kan analysera din hudtyp, diskutera möjliga orsaker till dina pormaskar och rekommendera den mest effektiva behandlingsmetoden för dig. Detta kan inkludera allt från djuprengöring och portömning till mer avancerade hudvårdsprodukter. Så, om du känner att dina pormaskar har blivit en belastning eller om du helt enkelt vill ha en problemfri hy, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot bättre hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten?',
            image_title: 'Varför ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du är ute efter en effektiv och långsiktig lösning på dina pormaskar, är AcneSpecialisten det självklara valet. Vi har över 30 års erfarenhet inom hudvård och en specialisering i att behandla pormaskar. Oavsett om du har enstaka pormaskar eller en mer utbredd problematik, kan vi erbjuda en skräddarsydd lösning som passar just dig.</p>
            <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att du ska få bästa möjliga resultat. Vårt team av hudterapeuter står redo att erbjuda en individuellt anpassad behandlingsplan och att stötta dig genom hela processen. Med regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att du får en långvarig förbättring.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för dina pormaskar. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig att uppnå och bibehålla en klar och frisk hud. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val för behandling av pormaskar.</p>',
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
                  title: 'Varför får man pormaskar?',
                  text: '<p class="p200">Pormaskar uppstår när porer i huden blir igentäppta av överflödig talg (hudens naturliga olja) och döda hudceller. Denna tilltäppning kan oxidera när den kommer i kontakt med luft, vilket ger pormaskar deras karakteristiska mörka färg. Faktorer som kan bidra till ökad produktion av talg inkluderar genetiska faktorer, hormonella förändringar, fuktig och varm klimat.</p>
                <p class="p200 mt-m">En obalanserad i huden till följd av kosmetiska produkter och stress kan också påverka talgproduktionen och bidra till uppkomsten av pormaskar. Det är viktigt att komma ihåg att pormaskar inte uppstår på grund av smuts, utan snarare från kroppens naturliga processer.</p>'
            ),
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
                  text: '<p class="p200">Pormaskar är en typ av aknelesion. Akne kan manifestera sig i olika former, inklusive pormaskar, finnar, papler och cystor. Alla dessa är resultat av igentäppta porer, men de skiljer sig i utseende och svårighetsgrad.</p>
                <p class="p200 mt-m">Pormaskar, särskilt om de inte tas om hand, kan utvecklas till inflammerade finnar när bakterier infekterar den igentäppta porstrukturen. Detta leder till rödhet, svullnad och eventuellt pusfyllda finnar.</p>'
            ),
            new Question(
                  title: 'Kan man förebygga uppkomsten av pormaskar?',
                  text: '<p class="p200">Ja, regelbunden rengöring, exfoliering och användning av icke-komedogena produkter kan minska risken för att utveckla pormaskar. Detta hjälper till att reglera talgproduktionen. Dessutom är det klokt att skydda huden från solens strålar med solskydd, eftersom UV-strålning kan försämra hudens tillstånd och förvärra pormaskar och andra hudproblem.</p>'
            ),
            new Question(
                  title: 'Är pormaskar farliga eller kan de leda till andra hudproblem?',
                  text: '<p class="p200">Pormaskar i sig är inte farliga, men om de inte behandlas kan de utvecklas till inflammerad akne. Dessutom kan felaktig hantering eller klämning av pormaskar leda till inflammation, infektion och ärrbildning.</p>
                <p class="p200 mt-m">Det är också viktigt att notera att pormaskar kan vara ett tidigt tecken på andra hudproblem som rosacea eller dermatit. Därför kan tidig behandling och en noggrann hudvårdsrutin inte bara förhindra pormaskar, men även minska risken för andra mer allvarliga hudproblem.</p>'
            ),

      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Vilka är de mest effektiva behandlingarna för pormaskar?',
                  text: '<p class="p200">De mest effektiva behandlingarna för att ta hand om pormaskar kan variera från person till person, men det finns flera allmänt erkända metoder som har visat sig vara effektiva. Hudvårdsprodukter i kombination med portömning utförd av kvalificerade hudterapeuter behandlar effektivt pormaskar. Detta är en omedelbar lösning och resultat kan ses direkt efter behandlingen, även om uppföljande behandlingar ofta är nödvändiga för långsiktiga resultat.</p>'
            ),
            new Question(
                  title: 'Är det bra eller dåligt att klämma pormaskar?',
                  text: '<p class="p200">Det är generellt inte rekommenderat att själv klämma pormaskar eftersom det kan leda till infektion, inflammation och potentiell ärrbildning. Professionella portömningar utförda av en hudvårdsspecialist är ett säkrare alternativ.</p>
                <p class="p200 mt-m">När du klämmer en pormask, riskerar du att trycka ned bakterier och olja djupare in i huden, vilket kan leda till en allvarligare infektion. Därför är det bäst att låta en professionell hudvårdsterapeut hantera det för att minimera risken för komplikationer.</p>'
            ),
            new Question(
                  title: 'Vilka risker finns det med att behandla pormaskar själv?',
                  text: '<p class="p200">Behandla pormaskar själv kan leda till skada på huden, inklusive infektioner, ärrbildning, och ökad inflammation. Dessutom kanske man inte väljer den mest effektiva behandlingen för sin hudtyp eller problem.</p>
                <p class="p200 mt-m">Felaktig användning av verktyg eller produkter, såsom pormaskborttagare, kan också skada huden och förvärra tillståndet. För att undvika dessa risker är det viktigt att konsultera en kvalificerad hudvårdsspecialist.</p>'
            ),
            new Question(
                  title: 'Hur ofta bör man gå på professionell behandling för pormaskar?',
                  text: '<p class="p200">Det beror på svårighetsgraden av ens pormaskar och vilken typ av behandling man väljer. Många hudterapeuter rekommenderar månatliga besök för optimala resultat.</p>
                <p class="p200 mt-m">Frekvensen kan också variera beroende på din hudtyp, ålder och livsstil. En regelbunden uppföljning med en hudterapeut kommer inte bara att hjälpa dig att upprätthålla en frisk hud utan också justera din behandlingsplan baserat på hur din hud svarar.</p>'
            ),
            new Question(
                  title: 'Finns det några huskurer som faktiskt fungerar?',
                  text: '<p class="p200">Vissa tror att ingredienser som honung, äggvita och havregryn kan hjälpa till att dra ut pormaskar, men vetenskapliga bevis för dessa metoder är begränsade. Även om vissa huskurer kan vara skonsamma, är det alltid bäst att konsultera med en hudvårdsexpert innan man provar dem.</p>
                <p class="p200 mt-m">En del huskurer kan faktiskt förvärra situationen, särskilt om du har känslig eller reaktiv hud. I vissa fall kan naturliga ingredienser som citron eller äppelcidervinäger vara irriterande och leda till mer skada än nytta.</p>'
            ),
            new Question(
                  title: 'Kan man helt bli av med pormaskar?',
                  text: '<p class="p200">Det kan vara svårt att helt och hållet eliminera pormaskar eftersom de kan uppstå på grund av en rad olika faktorer som hormoner, diet, och hudvård. Men genom en kombination av professionella behandlingar och rätt hudvårdsrutin kan du dramatiskt minska deras förekomst och förhindra nya från att uppstå.</p>
                <p class="p200 mt-m">Det är också viktigt att ha realistiska förväntningar. Medan professionell behandling kan minimera och kontrollera pormaskar, kräver det ofta en långsiktig plan och konsekvent hudvård för att upprätthålla resultaten.</p>'
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
            image_alt: 'Cazzandra Lindberg',
            image_title: 'Cazzandra Lindberg'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik',
            image_title: 'Veronika Benedik'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul',
            image_title: 'Amira Maqboul'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom',
            image_title: 'Vilma Libom'
      )
);
$related_problems = array(
      new RelatedProblem(
            name: 'Akne',
            aka: 'Papler & Pustler',
            image: 'images/problems/200x200/akne.webp',
            image_alt: 'Bild som skildrar akne, en hudåkomma som drabbar många ungdomar och vuxna',
            image_title: 'Akne - ett vanligt hudproblem bland både ungdomar och vuxna',
            url: 'acne.php',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: '',
            image_title: '',
            url: 'acnearr.php',
            url_title: 'Acneärr',
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: '',
            image_title: '',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit'
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
$brands_url_title = "Varumärken förpormaskar";

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
                                                                  include('problem/widgets/type-card/type-card.php');
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
                                                                        <?php include('problem/widgets/type-card/type-card-large.php') ?>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Omdömen" href="https://se.trustpilot.com/review/acnespecialisten.se">Läs fler omdömen</a>
                        </section>
                        <section id="fragor-svar.php">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Frågor och svar" href="fragor-svar.php">Läs fler frågor & Svar</a>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Specialister" href="specialister">Se alla specialister</a>
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