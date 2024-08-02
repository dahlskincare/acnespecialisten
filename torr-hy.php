<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Torr hy i ansiktet – Behandling | AcneSpecialisten';
$seo_description = 'Torr hy är en vanlig typ av hudproblem. På AcneSpecialisten hjälper vi dig att behandla torr hy med skräddarsydda lösningar. Läs mer och boka tid i dag →';
$seo_keywords = 'torr hud, torr hud ansikte, fjällar, torr i ansiktet, torrt ansikte, torr hy, torr hud i ansiktet flagnar, flagnar i ansiktet, varför flagnar huden, huden flagnar, torr hy finnar, torr hy med acne, torr t zon';
$seo_image = 'bilder/hudproblem/424x456/torr-kanslig-hy.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Torr & Känslig hy', '/torr-hy.php'),
);

$image_small = 'bilder/hudproblem/358x274/torr-kanslig-hy.webp';
$image_large = 'bilder/hudproblem/424x456/torr-kanslig-hy.webp';
$image_title = 'Visar en hy som är torr och känslig';
$image_alt = 'Bild som illustrerar hur torr och känslig hy ser ut';

$green_banner_content = new GreenBannerContent(
      title: 'Torr och Känslig Hy',
      description: 'Känslig och torr fjällande hud i ansiktet är något många lider av. Flagnande hud har lättare att få problem med acne och finnar och kan utöver ansiktet även påverka specifika områden som panna, t-zon, eller hakan. Här får du mer information mer information om hudproblemet samt hur denna hudtyp kan bäst behandlas.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_DrySensetiveSkin&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_DrySensetiveSkin&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Stram hy',
                  url: null,
                  title: 'Stram hy',
            ),
            new Link(
                  label: 'Fjällig hy',
                  url: null,
                  title: 'Fjällig hy',
            ),
            new Link(
                  label: 'Reaktiv hy',
                  url: null,
                  title: 'Reaktiv hy',
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är torr och känslig hy?',
            content: '<p class="p200">Torr och känslig hy är mer än bara ett kosmetisk besvär; det är en hudtillstånd som kan ha både fysiska och psykologiska effekter på dem som lider av det. Denna hudtyp kännetecknas av en brist på tillräcklig fukt, vilket leder till en försvagad hudbarriär. Detta gör huden mindre effektiv på att hålla kvar fukt och mer benägen att reagera på olika yttre faktorer som temperaturändringar, kosmetiska produkter och till och med kranvatten. Symptomen kan inkludera klåda, rodnad, fjällning och en obehaglig känsla av stramhet i huden.</p>',
            extended_content: '<p class="p200 mt-xl">Torr hud tenderar att åldras snabbare än oljig eller normal hud på grund av flera faktorer. När huden är torr saknar den fukt och talg (olja), vilket är avgörande för att bibehålla hudens elasticitet och smidighet. Här är en närmare förklaring av processen:</p>
            <p class="p200 mt-xl">Minskad oljeproduktion:<br />Torr hud producerar mindre talg, den naturliga oljan som hjälper till att behålla fukten i huden. När talgproduktionen minskar, kan huden inte behålla fukt lika effektivt, vilket leder till att den blir torr och stram.</p>
            <p class="p200 mt-xl">Försämrad fuktbarriär:<br />Hudens yttre lager, kallat stratum corneum, fungerar som en barriär som skyddar kroppen mot yttre påverkan och hjälper till att behålla fukt. Torr hud har ofta en skadad eller försämrad barriär, vilket gör den mer sårbar för miljöskador som solstrålning och föroreningar. Detta kan accelerera hudens åldrandeprocess.</p>
            <p class="p200 mt-xl">Ökad tendens till fina linjer och rynkor:<br />När huden är torr och uttorkad, blir fina linjer och rynkor mer framträdande. Fuktighet är avgörande för att ge huden dess fylliga, elastiska utseende. Utan tillräcklig fuktighet kan huden inte "plumpas upp" från insidan, vilket gör att tecken på åldrande blir mer synliga.</p>
            <p class="p200 mt-xl">Känslighet för irritation:<br />Torr hud är mer benägen att bli irriterad, vilket kan leda till inflammation och hud som svider. Kronisk inflammation kan bryta ner kollagen och elastin i huden, vilket är proteiner som är viktiga för hudens struktur och elasticitet. När dessa proteiner bryts ner, förlorar huden sin fasthet och rynkor bildas lättare.</p>
            <p class="p200 mt-xl">Långsam cellomsättning:<br />Torr hud kan också ha en långsammare cellomsättning eller cellförnyelse. Detta innebär att gamla, döda hudceller stannar kvar på hudytan längre, vilket kan ge huden ett tråkigt, åldrat utseende.</p>
            <p class="p200 mt-xl">För att motverka de åldrande effekterna av torr hud är det viktigt att fokusera på återfuktning och näring. Detta kan inkludera användning av återfuktande behandlngar och hudvårdsprodukter, dricka tillräckligt med vatten, och skydda huden från solen med hjälp av solskydd. Genom att bibehålla hudens fuktighetsnivåer och skydda den mot yttre påfrestningar kan man hjälpa till att sakta ner åldrandeprocessen.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man torr och känslig hy?',
            content: '<p class="p200">Det finns flera faktorer som kan bidra till utvecklingen av torr och känslig hy. Klimatförhållanden såsom kyla under vintern med låg luftfuktighet kan avsevärt minska hudens fuktighetsnivåer och plötsligt orsaka torr hud. Inomhusförhållanden, såsom centralvärme och luftkonditionering, kan också torka ut huden. Vissa hudvårdsprodukters irriterande ämnen kan störa hudens naturliga pH-balans och därmed förvärra tillståndet. Vidare kan hudsjukdomar som seborré i ansiktet, psoriasis och eksem, bidra till problemet, eller att man får torr hy med acne eller finnar. Vissa produkter och behandlingar kan också påverka hudens fuktbalans.</p>',
            extended_content: '<p class="p200 mt-xl">Livsstilsfaktorer som dålig kost och brist på vattenintag kan också spela en roll. En diet som är låg i essentiella fettsyror och vitaminer som vitamin E kan påverka hudens förmåga att behålla fukt. Stress och brist på sömn har också visat sig förvärra hudens känslighet och kan leda till ytterligare uttorkning och irritation. Det är viktigt att förstå att en kombination av dessa faktorer oftast ligger bakom problemet, och därför kan en holistisk plan till behandling och förebyggande vara mest effektiv.</p>',
            icons: array('produkter' => 'Produkter', 'stress' => 'Stress', 'klimat' => 'Klimat')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får torr och känslig hy?',
            content: '<p class="p200">Torr och känslig hy är inte begränsad till en specifik demografisk grupp, det kan drabba personer i alla åldrar och kön. Det är dock viktigt att förstå att vissa faktorer gör vissa människor mer benägna att utveckla denna hudtyp. Ålder är en av de mest framstående faktorerna. Med åldern minskar hudens naturliga talgproduktion och dess förmåga att behålla fukt, vilket gör äldre personer mer mottagliga för torr och känslig hud.</p>',
            extended_content: '<p class="p200 mt-xl">Individer med tillstånd som eksem, rosacea eller seborré är också särskilt utsatta, eftersom de ofta medför en kronisk torrhet och känslighet i huden. Hormonella förändringar som sker under graviditet, klimakteriet eller menstruationscykler påverkar hudens tillstånd och göra den mer känslig eller torr.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man torr och känslig hy?',
            content: '<p class="p200">Känslig och torr hud i ansiktet kan särskilt påverka vissa områden mer än andra, vilket gör det viktigt att förstå hur man tar hand om varje specifikt parti. Här är en närmare titt på de mest utsatta områdena i ansiktet:</p>',
            extended_content: '<p class="p200 mt-xl">Ögonområdet:<br />Huden runt ögonen är extremt tunn och saknar talgkörtlar, vilket gör den särskilt mottaglig för torrhet och irritation. Torra linjer och rynkor kan bli mer framträdande här på grund av hudens känslighet.</p>
            <p class="p200 mt-xl">Torr T zon:<br />Om man upplever en torr panna i kombination med torr näsa så formar detta område t zonen som ofta kan bli torr med flagnande hud.</p>
            <p class="p200 mt-xl">Kinderna och kindbenen:<br />Dessa områden kan lida av torrhet, särskilt under vintermånaderna när kall luft och centralvärme bidrar till fuktighetsförlust. Torr hud här kan kännas stram och flagnande.</p>
            <p class="p200 mt-xl"Näsan:<br />Trots att näsan ofta kan upplevas som oljig, kan sidorna och området under näsan bli torrt och irriterat, särskilt vid förkylningar eller allergier när man ofta använder näsdukar som irriterar huden. Man kan även uppleva att man blir torr vid näsvingarna.</p>
            <p class="p200 mt-xl">Hakan och området runt munnen:<br />Dessa områden är benägna att bli torra och spruckna, delvis på grund av rörelser när vi talar eller äter, och påverkas negativt av såväl väder som vissa livsmedel och drycker.</p>
            <p class="p200 mt-xl">Att hantera torr fjällande hud i ansiktet kräver en skonsam men effektiv hudvårdsrutin och skräddarsydda behandlingar. Det börjar med milda rengöringsprodukter som inte strippar huden på dess naturliga oljor, följt av återfuktande produkter som är fria från irriterande ämnen för att undvika flagnande hud. Att vara uppmärksam på hur olika områden i ansiktet reagerar på produkter och miljöförändringar är nyckeln till att upprätthålla en hälsosam, återfuktad och lugn hud.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'Kinder', 'panna' => 'Panna')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten får du träffa en hudterapeut som hjälper dig att identifiera din torra och känsliga hy, samt skapar en individuell behandlingsplan för dig.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder milda och effektiva behandlingar specialanpassade för torr och känslig hud, som syftar till att återfukta och lugna din hud på ett säkert och effektivt sätt.',

            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_DrySensetiveSkin&method=Method_FacialProblem&area=EMPTY',
            url_title: 'Utforska våra skräddarsydda behandlingar för torr och känslig hud'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin som är anpassade för torr och känslig hud, för att förhindra framtida hudproblem och behålla hudens fuktbalans.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/day-n-night-duo',
            url_title: 'Hitta de bästa produkterna för att förebygga hudproblem för torr och känslig hud'
      )

);
/*
$types_title = 'Olika typer av torr & känslig hy';

$type_categories = array(
      new BasedTypeCategory(
              title: 'Torr och Känslig Hy baserat på Ålder',
              content: '<p class="p200">Torr och känslig hud är en åkomma som kan påverka människor i alla åldrar, från spädbarn till äldre. Denna hudtyp är känslig för en rad faktorer, inklusive klimatförändringar, livsstil och hormonella förändringar. Oavsett ålder är det viktigt att identifiera och behandla symptomen för att återställa hudens naturliga balans.</p>',
              types: array(
                  new BasedType(
                  title: 'Spädbarns- och Småbarnshud',
                  subtitle: 'Benägen för torrhet',

                  image_url: 'images/problems/102x102/barn-torr-kanslig-hy.webp',
                  image_alt: 'Bild av spädbarns- och småbarnshud',
                  image_title: 'Hud hos spädbarn och små barn',

                  url: null,
                  url_title: 'Utforska information om spädbarns- och småbarnshud'
                ),
                new BasedType(
                  title: 'Tonårshud',
                  subtitle: 'Hormonella förändringar',

                  image_url: 'images/problems/102x102/tonaring-torr-kanslig-hy.webp',
                  image_alt: 'Bild av tonårshud',
                  image_title: 'Hud hos tonåringar',

                  url: null,
                  url_title: 'Utforska information om tonårshud'
                ),
                new BasedType(
                  title: 'Vuxen Hud i 20- och 30-årsåldern',
                  subtitle: 'Livsstilsfaktorer',

                  image_url: 'images/problems/102x102/vuxen-torr-kanslig-hy.webp',
                  image_alt: 'Bild av vuxen hud',
                  image_title: 'Hud hos vuxna',

                  url: null,
                  url_title: 'Utforska information om vuxen hud i 20- och 30-årsåldern'
                ),
                new BasedType(
                  title: 'Mogen Hud (40-60 år)',
                  subtitle: 'Åldersrelaterad torrhet',

                  image_url: 'images/problems/102x102/mogen-hy-torr-kanslig-hy.webp',
                  image_alt: 'Bild av mogen hud',
                  image_title: 'Hud hos mogen hy',

                  url: null,
                  url_title: 'Utforska information om mogen hud'
                ),
                new BasedType(
                  title: 'Äldre Hud (60+ år)',
                  subtitle: 'Tunnare och torrare',

                  image_url: 'images/problems/102x102/aldre-hud-torr-kanslig-hy.webp',
                  image_alt: 'Bild av äldre hud',
                  image_title: 'Hud hos äldre',

                  url: null,
                  url_title: 'Utforska information om äldre hud'
                ),

            )
      ),
      new BasedTypeCategory(
            title: 'Torr och Känslig Hy baserat på Yttre Faktorer',
            content: '<p class="p200">Yttre faktorer som klimat, kost, kemiska ämnen, arbetsmiljö och stress kan starkt påverka torr och känslig hy. Dessa faktorer kan irritera huden, förändra hudens fuktbalans, och leda till symptom som torrhet, sprickor och irritation.</p>',
            types: array(
                  new BasedType(
                        title: 'Klimatpåverkad',
                        subtitle: 'Även kallat Klimatinducerad Dermatit',

                        image_url: 'images/problems/102x102/klimatpaverkad.webp',
                        image_alt: 'Bild av klimatpåverkad hud',
                        image_title: 'Exempel på klimatpåverkad hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Kostrelaterad',
                        subtitle: 'Även kallat Dietinducerad Dermatit',

                        image_url: 'images/problems/102x102/kostrelaterad.webp',
                        image_alt: 'Bild av kostrelaterad hud',
                        image_title: 'Exempel på kostrelaterad hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Kemiskt Utsatt',
                        subtitle: 'Även kallat Kontaktdermatit',

                        image_url: 'images/problems/102x102/kemiskt-utsatt.webp',
                        image_alt: 'Bild av kemiskt utsatt hud',
                        image_title: 'Exempel på kemiskt utsatt hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Arbetsrelaterad',
                        subtitle: 'Även kallat Yrkesdermatit',

                        image_url: 'images/problems/102x102/arbetsrelaterad.webp',
                        image_alt: 'Bild av arbetsrelaterad hud',
                        image_title: 'Exempel på arbetsrelaterad hud',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Stressinducerad',
                        subtitle: 'Även kallat Stressrelaterad Dermatit',

                        image_url: 'images/problems/102x102/stressinducerad.webp',
                        image_alt: 'Bild av stressinducerad hud',
                        image_title: 'Exempel på stressinducerad hud',

                        url: null,
                        url_title: null,
                  )
            )
      ),
      new BasedTypeCategory(
            title: 'Torr och känslig hy baserat på område i ansiktet',
            content: '<p class="p200">Torr och känslig hy kan variera beroende på vilket område av ansiktet det rör sig om. Olika delar av ansiktet som pannan, ögonområdet, kinderna, näsan, munområdet och hakan kan vara särskilt känsliga och benägna att torrhet. Att förstå var problemet är lokaliserat kan hjälpa dig att skräddarsy din hudvårdsrutin.</p>',
            types: array(
                  new BasedType(
                        title: 'Torrhet i pannan',
                        subtitle: 'Även kallat Frontal xeros',

                        image_url: 'images/problems/102x102/torr-panna.webp',
                        image_alt: 'Bild av torr panna',
                        image_title: 'Exempel på torr panna',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Känslighet runt ögonen',
                        subtitle: 'Även kallat Periorbital Sensitivity',

                        image_url: 'images/problems/102x102/kansligt-ogonomrade.webp',
                        image_alt: 'Bild av känsligt ögonområde',
                        image_title: 'Exempel på känsligt ögonområde',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Torrhet på kinderna',
                        subtitle: 'Även kallat Buccal xeros',

                        image_url: 'images/problems/102x102/torra-kinder.webp',
                        image_alt: 'Bild av torra kinder',
                        image_title: 'Exempel på torra kinder',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Torrhet runt näsan',
                        subtitle: 'Även kallat Nasal xeros',

                        image_url: 'images/problems/102x102/torr-nasa.webp',
                        image_alt: 'Bild av torr näsa',
                        image_title: 'Exempel på torr näsa',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Känslighet runt munnen',
                        subtitle: 'Även kallat Perioral Sensitivity',

                        image_url: 'images/problems/102x102/kanslig-mun.webp',
                        image_alt: 'Bild av känslig mun',
                        image_title: 'Exempel på känslig mun',

                        url: null,
                        url_title: null,
                  ),

            )
      ),

);
*/

$symptoms_title = 'Symtom';

$symptoms = array(
      new Symptom(
            name: 'Fjällande Hud',
            aka: 'Hudflagor',
            content: 'Det är vanligt att få små hudflagor, vilket är ett tecken på extrem torrhet. Huden kan även kännas stram. Fjällande hud uppstår när de yttre hudcellerna lossnar på grund av brist på fukt, vilket ofta resulterar i en grov och ojämn yta.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/flagnande-hud.webp',
            image_alt: 'Bild av hud med hudflagor eller fjällande hud',
            image_title: 'Hudflagor eller Fjällande Hud'
      ),
      new Symptom(
            name: 'Rodnad',
            aka: 'Rödflammig hud',
            content: 'Huden kan visa tecken på rodnad, särskilt efter exponering för väder eller kosmetiska produkter. Rodnad är ett tecken på inflammation eller irritation och kan vara lokaliserad i fläckar eller över större hudområden, vilket gör huden röd och känslig.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/rodnad.webp',
            image_alt: 'Bild av hud med rodnad',
            image_title: 'Rödhet i huden'
      ),
      new Symptom(
            name: 'Klåda',
            aka: 'Irriterad hud',
            content: 'Torr och känslig hy kan vara mycket irriterande och klåda är en vanlig känsla. Klåda uppstår när huden är torr och inflammerad, vilket triggar kroppens reaktion att klia för att försöka lindra obehaget, men det kan leda till ytterligare irritation och skador.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/klada-ansikte.webp',
            image_alt: 'Bild av hud med klåda',
            image_title: 'Klåda'
      ),
      new Symptom(
            name: 'Brännande Känsla',
            aka: 'Stickande känsla',
            content: 'Det kan kännas som att huden bränner, särskilt efter applicering av hudvårdsprodukter eller exponering för vissa miljöfaktorer. Brännande känsla är ofta ett resultat av att hudens barriär är skadad och nervändarna blir mer känsliga, vilket leder till en obehaglig, brännande upplevelse.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/irriterad-hy.webp',
            image_alt: 'Bild av hud med brännande känsla',
            image_title: 'Brännande Känsla'
      ),
      new Symptom(
            name: 'Ökad reaktivitet',
            aka: 'Reaktiv hud',
            content: 'Huden kan reagera mer än normalt på väderförändringar, som värme, kyla, eller vind. Ökad reaktivitet innebär att huden blir extra känslig och lätt inflammerad eller irriterad vid yttre påfrestningar, vilket kan resultera i rodnad, klåda och obehag.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/rodnad-kinder.webp',
            image_alt: 'Bild av hud med ökad reaktivitet',
            image_title: 'Ökad reaktivitet'
      ),
      new Symptom(
            name: 'Ojämn hudton',
            aka: 'Hyperpigmentering',
            content: 'I vissa fall kan torr och känslig hud leda till ojämn hudton eller mörka fläckar. Ojämn hudton uppstår när inflammatoriska processer påverkar pigmentproduktionen i huden, vilket kan orsaka hyperpigmentering eller fläckar med olika nyanser.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/ojamn-hudton.webp',
            image_alt: 'Bild av hud med ojämn ton eller hyperpigmentering',
            image_title: 'Ojämn hudton eller hyperpigmentering'
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för Torr och Känslig Hy',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist inom torr och känslig hy utförs en hudanalys. Vi rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina unika behov och hudtyp.',

      image_small: '/bilder/behandlingar/200x200/konsultation.webp',
      image_large: '/bilder/behandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av torr och känslig hy',
      image_title: 'Konsultation för Torr och Känslig Hy',

      url_label: 'Läs mer om konsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för torr och känslig hy',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för torr och känslig hy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling för torr och känslig hy',
            duration: '60 min',
            price: '1295 kr',
            content: 'Behandlingen innehåller djup rengöring, fuktgivande masker och serum som hjälper till att återställa hudens naturliga fuktbalans och minska irritation.',

            image_small: '/bilder/behandlingar/200x200/ansiktsbehandling.webp',
            image_large: '/bilder/behandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling för torr och känslig hy',
            image_title: 'Ansiktsbehandling för torr och känslig hy',

            url: '/problemhy.php',
            url_label: 'Läs mer om ansiktsbehandlingar',
            url_title: 'Läs mer om ansiktsbehandlingar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling för torr och känslig hy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_DrySensetiveSkin&method=Method_FacialProblem&area=EMPTY',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för torr och känslig hy'
      ),
      new Service(
            title: 'Infuzion för torr och känslig hy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Infuzion behandlingen är speciellt framtagen för att återfukta och lugna huden. Genom en unik process införs fuktbindande ämnen djupt in i huden utan nålar, vilket ger en omedelbar förbättring av hudens hydrering och minskar irritation.',

            image_small: '/bilder/behandlingar/200x200/infuzion.webp',
            image_large: '/bilder/behandlingar/200x200/infuzion.webp',
            image_alt: 'Bild av Infuzion behandling för torr och känslig hy',
            image_title: 'Infuzion behandling för torr och känslig hy',

            url: '/infuzion.php',
            url_label: 'Läs mer om Infuzion',
            url_title: 'Läs mer om Infuzion',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_Infuzion',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för Infuzion behandling för torr och känslig hy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion',
            booking_url_title: 'Klicka för att boka tid för en Infuzion behandling för torr och känslig hy'
      ),
      new Service(
            title: 'HydraFacial för torr och känslig hy',
            duration: '40 min',
            price: '1595 kr',
            content: 'HydraFacial behandlingen erbjuder en skonsam men effektiv exfoliering samt djup återfuktning. Tekniken renar huden och tillför antioxidanter, vilket lämnar huden återfuktad, mjuk och med en fräsch lyster.',

            image_small: '/bilder/behandlingar/200x200/hydrafacial.webp',
            image_large: '/bilder/behandlingar/200x200/hydrafacial.webp',
            image_alt: 'Bild av HydraFacial behandling för torr och känslig hy',
            image_title: 'HydraFacial behandling för torr och känslig hy',

            url: '/hydrafacial.php',
            url_label: 'Läs mer om HydraFacial',
            url_title: 'Läs mer om HydraFacial',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HydraFacial',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för HydraFacial behandling för torr och känslig hy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=hydrafacial',
            booking_url_title: 'Klicka för att boka tid för en HydraFacial behandling för torr och känslig hy'
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter för torr och känslig hy',
            duration: null,
            price: 'Från 645 kr',
            content: 'För att effektivt lindra symtom av torr och känslig hud är det viktigt med en daglig hudvårdsrutin. Våra produkter för torr och känslig hy är speciellt utformade för att återfukta huden, minska irritation och återställa hudens naturliga barriär.',

            image_small: '/bilder/behandlingar/200x200/produkter.webp',
            image_large: '/bilder/behandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av torr och känslig hy',
            image_title: 'Effektiva produkter för lindring och vård av torr och känslig hy',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_DrySensetiveSkin',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot torr och känslig hy',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/day-n-night-duo',
            booking_url_title: 'Klicka för att köpa produktpaket mot torr och känslig hy',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för min torra och känsliga hy?',
            image_title: 'När ska jag söka hjälp för min torra och känsliga hy?',
            content: '<p class="p200">Torr och känslig hud är en utmaning som många människor drabbas av. Denna hudtyp kan kännas obekväm, stram och kan även flagna eller bli röd. Även om dessa symtom i många fall kan hanteras med rätt hudvårdsrutin, kan det för vissa bli en källa till stress eller obehag. Om du känner att din hud inte svarar väl på de produkter du använder, eller om din hudrutin inte verkar göra någon skillnad, kan det vara dags att överväga professionell hjälp.</p>
            <p class="p200 mt-m">Genom att konsultera en hudspecialist kan du få en skräddarsydd lösning som matchar din huds unika behov. En expert kan bedöma din hud, diskutera orsakerna bakom torrheten och känsligheten, och rekommendera en behandlingsplan. Detta kan inkludera inriktade produkter, behandlingar eller båda. Om du känner att din torra och känsliga hud har blivit ett problem, eller om du helt enkelt vill återställa hudens lyster och komfort, bör du inte tveka att söka professionell rådgivning. Det är aldrig för tidigt eller för sent att ta steget mot en hälsosam hud.</p>',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du känner att din torra och känsliga hud påverkar din livskvalitet, eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar, bör du överväga att besöka AcneSpecialisten. Ju tidigare du får professionell hjälp, desto snabbare kan du återställa huden fuktbalans. AcneSpecialisten är här för att erbjuda dig skräddarsydda lösningar, oavsett om du har milda eller mer allvarliga hudproblem. Tveka inte att boka en kostnadsfri konsultation och ta det första steget mot en mjukare och mer komfortabel hud.</p>
            <p class="p200 mt-m">Vi erbjuder en kostnadsfri konsultation där vi analyserar din hud och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla torr och känslig hud och kan rekommendera vilka produkter och behandlingar som är bäst för just din hudtyp.</p>',

            image_small: null,
            image_large: null,
            image_alt: 'När ska jag besöka Specialisten för Torr & Känslig Hy?',
            image_title: 'När ska jag besöka Specialisten för Torr & Känslig Hy?',
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

$results_url_label = "Se fler resultat";
$results_url_title = "se flera behandlingsresultat";



$faq_categories = array(
      'Generellt om torr och känslig hy' => array(
            new Question(
                  title: 'Vad är de vanligaste orsakerna till torr och känslig hud?',
                  text: '<p class="p200">Det finns flera faktorer som kan bidra till torr och känslig hud. Dessa inkluderar genetiska anlag, miljöfaktorer som kallt eller torrt klimat, och kemiska faktorer som användning av starka hudvårdsprodukter. Medicinska tillstånd som eksem, seborré, och rosacea kan också orsaka eller förvärra torr och känslig hud. Hormonella förändringar, som de som upplevs under graviditet eller klimakteriet, kan också påverka huden.</p>'
            ),
            new Question(
                  title: 'Hur kan man skilja mellan torr och känslig hud?',
                  text: '<p class="p200">Torr hud kännetecknas ofta av en brist på fukt, vilket kan leda till fjällning, klåda och en känsla av stramhet. Känslig hud å andra sidan, är mer en reaktion på vissa triggers som hudvårdsprodukter eller miljöfaktorer. Symptomen på känslig hud inkluderar rodnad, irritation, och ibland utslag. Det är också möjligt att ha både torr och känslig hud, vilket kan komplicera diagnos och behandling.</p>'
            ),
            new Question(
                  title: 'Vilka är de vanligaste symtomen på torr och känslig hud?',
                  text: '<p class="p200">Torr hud uppvisar ofta symtom som stramhet, fjällning och ibland klåda. I mer allvarliga fall kan huden bli sprucken.. Känslig hud kan reagera med symtom som rodnad, brännande, stickningar och ibland utslag när den utsätts för irriterande ämnen eller miljöfaktorer. Ofta upplever personer med känslig hud att deras hud "reagerar" snabbt och lätt blir irriterad och röd.</p>'
            ),
            new Question(
                  title: 'Hur påverkar årstiderna hudens torrhet och känslighet?',
                  text: '<p class="p200">Under vintermånaderna kan den kalla utomhusluften och den torra inomhusluften från uppvärmningssystem leda till torrare hud. Sommaren har sin egen uppsättning utmaningar, inklusive ökad exponering för solen och salt eller klorerat vatten, vilket kan torka ut huden och göra den mer känslig. Vissa personer finner att deras hud är känsligare under perioder med hög pollenproduktion eller andra miljömässiga förändringar.</p>'
            ),
            new Question(
                  title: 'Hur kan man skilja på torr hud och andra hudåkommor som eksem eller psoriasis?',
                  text: '<p class="p200">Det kan vara svårt att skilja på torr hud och andra hudåkommor som eksem eller seborré utan professionell diagnos. Torr hud är generellt sett karakteriserad av torrhet och flagnande hud, medan eksem och seborré oftast innefattar rodnad, inflammation och ibland klåda. Om du är osäker, är det bäst att söka professionell rådgivning för att fastställa den exakta orsaken och få en anpassad behandlingsplan.</p>'
            ),
            new Question(
                  title: 'Varför flagnar och fjällar huden?',
                  text: '<p class="p200">Hudflagnande är ett tecken på att kroppen avlägsnar döda hudceller från ytan för att ge plats åt nya celler. Detta kan orsakas av flera faktorer, inklusive torr hud, solbränna, allergiska reaktioner, vissa hudsjukdomar som eksem eller psoriasis, och efter vissa hudbehandlingar som kemiska peelingar. Att hålla huden återfuktad är viktigt för att minska risken för fjällande hud i ansiktet och på andra delar av kroppen. Om du upplever kraftig eller ihållande flagnande bör du konsultera en hudterapeut för att utesluta underliggande hudtillstånd och få lämplig behandling.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till torr och känslig hy";

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
$skinguide_url_title = "Läs fler guider om torr och känslig hy";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av torr och känslig hy',
            image_title: 'Cazzandra Lindberg - Expert på behandling av torr och känslig hy'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på torr och känslig hy',
            image_title: 'Veronika Benedik - Specialist inom torr och känslig hy'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom hantering av torr och känslig hy',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på torr och känslig hy'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av torr och känslig hy',
            image_title: 'Vilma Libom - Expert inom behandling av torr och känslig hy'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Blandhy',
            aka: 'kombinationshy',
            image: 'bilder/hudproblem/102x102/blandhy.webp',
            image_alt: 'Bild som visar blandhy, en typ av hudproblem där vissa områden är torra medan andra är oljiga',
            image_title: 'Blandhy - en komplex hudtyp som kräver specialiserad vård',
            url: 'blandhy.php',
            url_title: 'Blandhy'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);

$brands = array(
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_alt: 'Alma Hybrid logotyp',
            image_title: 'Alma Hybrid CO2',
            url: '/alma-hybrid-co2-laser.php',
            url_title: 'Alma Hybrid',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen logotyp',
            image_title: 'Dermapen - Microneedling',
            url: '/dermapen.php',
            url_title: 'Dermapen',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_alt: 'Harmony XL Pro logotyp',
            image_title: 'Alma Harmony XL Pro',
            url: '/alma-harmony-xl-pro.php',
            url_title: 'Harmony XL Pro',
      ),
      new Brand(
            label: 'HydraFacial',
            image: 'bilder/logotyper/hydrafacial.svg',
            image_alt: 'HydraFacial logotyp',
            image_title: 'HydraFacial - Dermabrasion',
            url: '/hydrafacial.php',
            url_title: 'HydraFacial',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_alt: 'Skin Tech logotyp',
            image_title: 'Skin Tech - kemisk peeling',
            url: '/varumarken/skin-tech',
            url_title: 'Skin Tech',
      ),
      new Brand(
            label: 'Alma Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Alma Rejuve Dye-VL logotyp',
            image_title: 'Alma Rejuve Dye-VL - IPL',
            url: '/varumarken/rejuve-dye-vl',
            url_title: 'Alma Rejuve Dye-VL',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen logotyp',
            image_title: 'CryoPen - frysbehandling',
            url: '/cryopen.php',
            url_title: 'CryoPen',
      ),
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X logotyp',
            image_title: 'Splendor X - Permanent hårborttagning med laser',
            url: '/varumarken/splendor-x',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice logotyp',
            image_title: 'Soprano Ice - Permanent hårborttagning med laser',
            url: '/varumarken/soprano-ice',
            url_title: 'Soprano Ice',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova logotyp',
            image_title: 'Powerlite Photonova - IPL',
            url: '/varumarken/powerlite-photonova',
            url_title: 'Powerlite Photonova',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'bilder/logotyper/infuzion.svg',
            image_alt: 'Infuzion logotyp',
            image_title: 'Infuzion - nålfri skinbooster',
            url: '/infuzion.php',
            url_title: 'Infuzion',
      ),
      new Brand(
            label: 'Lumenis',
            image: 'bilder/logotyper/lumenis.svg',
            image_alt: 'Lumenis logotyp',
            image_title: 'Lumenis - Permanent hårborttagning med laser',
            url: '/varumarken/splendor-x',
            url_title: 'Lumenis',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'bilder/logotyper/prx-t33.svg',
            image_alt: 'PRX-T33 logotyp',
            image_title: 'PRX-T33 - kemisk peeling',
            url: '/prx-t33.php',
            url_title: 'PRX-T33',
      ),
      new Brand(
            label: 'Exceed',
            image: 'bilder/logotyper/exceed.png',
            image_alt: 'Exceed logotyp',
            image_title: 'Exceed - microneedling',
            url: '/varumarken/exceed',
            url_title: 'Exceedn',
      ),
      new Brand(
            label: 'Microdermabrasion',
            image: 'bilder/logotyper/microdermabrasion.png',
            image_alt: 'Microdermabrasion logotyp',
            image_title: 'Microdermabrasion - hudslipning',
            url: '/microdermabrasion.php',
            url_title: 'Microdermabrasion',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av torr och känslig hy";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/torr-hy.php" />

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
                        <?php if (isset($symptoms) && sizeof($symptoms) > 0) { ?>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot torr och känslig hy" href="varumarken/">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>