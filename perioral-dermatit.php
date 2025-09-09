<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Perorial dermatit - Behandling | AcneSpecialisten';
$seo_description = 'Har du utslag runt munnen? Då kan det vara perioral dermatit. Boka en gratis hudkonsultation så skräddarsyr vi rätt behandling →';
$seo_keywords = 'perioral dermatit, finnar på hakan, finnar runt munnen, perioral dermatit behandling, utslag runt munnen, perioral dermatit bilder, perioral dermatit produkter, perioral dermatit näsan, behandla perioral dermatit, utslag perioral dermatit, varför får man perioral dermatit';
$seo_image = 'bilder/hudproblem/424x456/perioral-dermatit.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Perioral Dermatit', '/perioral-dermatit.php'),
);

$image_small = 'bilder/hudproblem/358x274/perioral-dermatit.webp';
$image_large = 'bilder/hudproblem/424x456/perioral-dermatit.webp';
$image_title = 'Visar en hud med perioral dermatit';
$image_alt = 'Bild som illustrerar hur perioral dermatit ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Perioral Dermatit',
      description: 'Perioral dermatit kan beskrivas som utslag och eksem runt munnen, men kan också uppstå som finnar som kliar i ansiktet. Här hittar du mer information om vad som kännetecknar perioral dermatit, varför problemet uppstår och hur vi kan hjälpa dig att behandla det.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PerioralDermatitis&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PerioralDermatitis&method=Method_FacialProblem&area=EMPTY', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Acne runt munnen',
                  url: null,
                  title: 'Allt du behöver veta om perioral hudirritation och dess behandling'
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är perioral dermatit?',
            content: '<p class="p200">Perioral dermatit är en inflammatorisk hudsjukdom som främst påverkar ansiktet, särskilt områdena runt munnen och näsan. Denna hudsjukdom visar sig som små röda eller rosa paplera. Utslagen kan omges av områden av rodnad och kan också åtföljas av torrhet, känslighry och flagnande hy. Tillståndet kan vara kroniskt, med perioder av förbättring följt av skov.</p>',
            extended_content: '<p class="p200 mt-xl">Perioral dermatit kan lätt förväxlas med andra hudsjukdomar som akne, rosacea eller seborré, vilket gör det viktigt att få en korrekt diagnos för effektiv behandling. Denna hudsjukdom kan vara episodisk, vilket innebär att symptomen kan försvinna för en tid och sedan återkomma. En sådan episodisk natur gör det svårt att förutsäga hudens förändring och kräver ofta långsiktig hantering. Förutom de fysiska symptomen kan perioral dermatit ha en betydande psykisk inverkan. Eftersom symptomen är mycket synliga kan det leda till självmedvetenhet och stress, vilket i sin tur kan förvärra tillståndet.</p>
            <p class="p200 mt-xl">Tillståndet kan också vara resistenta mot behandling, och felaktig behandling kan faktiskt förvärra symptomen. Därför är det av yttersta vikt att söka professionell rådgivning för att identifiera problemet och få en individuellt anpassad behandlingsplan. Ofta inkluderar detta att undvika vissa utlösande faktorer, som topiska steroider, och det kan också inkludera orala antibiotika eller andra antiinflammatoriska medel.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man perioral dermatit?',
            content: '<p class="p200">Orsakerna till perioral dermatit är inte fullständigt kartlagda, men det finns flera faktorer som antas bidra till dess utveckling. Problemet är i grunden hormonellt och genetiskt. Användning av topiska steroidkrämer på ansiktet har också varit förknippad med perioral dermatit och kan i vissa fall förvärra symptomen. Faktorer som stress, sol, hormonella förändringar, till exempel menstruationscykeln, graviditet, eller användning av hormonella preventivmedel. Dessa faktorer kan inte direkt orsaka perioral dermatit, men de kan förvärra befintliga symptom eller utlösa ett utbrott.</p>',
            extended_content: '<p class="p200 mt-xl">Många experter menar att en kombination av olika faktorer snarare än en enskild utlösande faktor troligtvis bidrar till utvecklingen av perioral dermatit. Detta inkluderar en benägenhetav genetik, miljöfaktorer som klimat och livsstil, samt potentiella irriterande preparat såsom kosmetika.</p>
            <p class="p200 mt-xl">Överdriven hygien kan också störa hudens naturliga barriärfunktion och bidra till irritation och inflammation. På grund av den multifaktoriella naturen av perioral dermatit, är det ofta nödvändigt med en holistisk strategi för diagnos och behandling som tar hänsyn till individens medicinska historia, livsstil och eventuella utlösande faktorer. En sådan omfattande syn på problemet kan bidra till att identifiera och behandla orsakerna effektivare.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får perioral dermatit?',
            content: '<p class="p200">Perioral dermatit påverkar främst kvinnor, särskilt de i åldrarna 20 till 45, även om män också kan drabbas. Hormonella förändringar, som graviditet och menstruation, kan göra kvinnor mer mottagliga för perioral dermatit. Det har också föreslagits att användning av hormonella preventivmedel som p-piller kan vara en bidragande faktor till utvecklingen av detta hudproblem. Det verkar också finnas en genetisk faktor, vilket innebär att personer med familjemedlemmar som har haft perioral dermatit eller liknande hudtillstånd som rosacea kan vara mer benägna att drabbas.</p>',
            extended_content: '<p class="p200 mt-xl">Vissa yrken och miljöer kan öka risken för perioral dermatit. Arbete i miljöer med starka kemikalier eller konstant hudirritation kan göra huden mer mottaglig för tillståndet. Detta inkluderar yrken som kräver användning av personlig skyddsutrustning som täcker ansiktet, såsom masker och visir. Vidare har livsstilsfaktorer som stress och dålig sömnkvalitet också kopplats till perioral dermatit. Stress och sömnbrist kan påverka immunsystemet och därmed hudens förmåga att försvara sig mot inflammation och infektion.</p>
            <p class="p200 mt-xl"> Vissa underliggande medicinska tillstånd och behandlingar, såsom läkemedel som påverkar immunförsvaret eller långvarig antibiotikabehandling, kan också göra huden mer sårbar för perioral dermatit. Sammanfattningsvis är det en komplex kombination av genetiska, hormonella, yrkesmässiga, och livsstilsrelaterade faktorer som kan göra en person mer mottaglig för perioral dermatit. Det är viktigt att en individuell utvärdering görs för varje person för att förstå de specifika faktorer som kan bidra till deras tillstånd.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man perioral dermatit?',
            content: '<p class="p200">Perioral dermatit är ett hudtillstånd som oftast ger utslag runt munnen och på nedre delen av ansiktet, men det kan även spridas till områden kring näsan och ibland runt ögonen. Det är därför det kallas "perioral", vilket betyder "runt munnen". På grund av detta brukar det ofta beskrivas som finnar eller akne runt munnen. Faktorer som påverkar var på huden tillståndet uppstår inkluderar lokal irritation från kosmetiska produkter eller hudvårdsbehandlingar. Ingredienser i tandkräm, munvatten och ansiktskrämer kan ibland förvärra eller utlösa tillståndet. Därför är det viktigt att vara medveten om de produkter man använder och hur de kan påverka ens hud.</p>',
            extended_content: '<p class="p200 mt-xl">Tillståndet kan också påverkas av klimat och väderförhållanden. Till exempel, fuktiga och varma klimat har observerats att förvärra symptomen av perioral dermatit hos vissa individer. Å andra sidan kan mycket torra miljöer leda till hudirritation som kan vara en utlösande faktor. I vissa fall kan användningen av ansiktsmasker eller annan personlig skyddsutrustning leda till en förvärring av tillståndet. Den ökade fuktigheten, friktionen och värmen under masken kan förvärra perioral dermatit.</p>',
            icons: array('mun' => 'Runt Munnen', 'ansikte' => 'Ansiktet')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten får du träffa en erfaren hudterapeut som hjälper dig identifiera din specifika hudtyp och utvecklar en personlig behandlingsplan just för dig.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
            url_title: 'Boka din kostnadsfria hudkonsultation för perioral dermatit idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder noggrant anpassade och effektiva behandlingar. Dessa behandlingsplaner är utformade för att lindra symptomen snabbt och säkert.',

            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PerioralDermatitis&method=Method_FacialProblem&area=EMPTY',
            url_title: 'Utforska våra specialanpassade behandlingar för perioral dermatit'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att finna en hudvårdsrutin och rekommenderar produkter speciellt anpassade för hudtypen.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/perioral-dermatit',
            url_title: 'Hitta de bästa produkterna för att förebygga perioral dermatit',
      ),
);
/*
$types_title = 'Olika typer av perioral dermatit';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Perioral Dermatit baserat på ålder',
            content: '<p class="p200">Perioral dermatit är en hudåkomma som kan drabba individer i alla åldrar, men det är vanligast bland kvinnor i 20-50-årsåldern. Hos barn är tillståndet relativt ovanligt men kan förekomma i mildare former. Tonåringar och unga vuxna kan också drabbas, särskilt i samband med hormonella förändringar. Oavsett ålder är det viktigt att förstå att perioral dermatit kan påverka människor i olika livsstadier.</p>',
            types: array(
                  new BasedType(
                        title: 'Perioral Dermatit hos barn',
                        subtitle: 'Mild till måttlig',

                        image_url: 'images/problems/102x102/perioral-dermatit-barn.webp',
                        image_alt: 'Bild av perioral dermatit hos barn',
                        image_title: 'Perioral Dermatit hos barn',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Perioral Dermatit hos vuxna',
                        subtitle: 'Vanligast bland kvinnor',

                        image_url: 'images/problems/102x102/perioral-dermatit-vuxna.webp',
                        image_alt: 'Bild av perioral dermatit hos vuxna',
                        image_title: 'Perioral Dermatit hos vuxna',

                        url: null,
                        url_title: null,
                  )
            )
      ),
      new BasedTypeCategory(
            title: 'Perioral Dermatit baserat på svårighetsgrad',
            content: '<p class="p200">Perioral dermatit kan variera i svårighetsgrad från milda fall med små röda utslag kring munnen till allvarliga fall med flera pustler och kraftig rodnad som även kan sprida sig till andra delar av ansiktet eller halsen. Svårighetsgraden av sjukdomen påverkar behandlingsval och kan ha en inverkan på patientens livskvalitet.</p>',
            types: array(
                  new BasedType(
                        title: 'Mild perioral dermatit',
                        subtitle: 'Små, röda utslag eller fläckar runt munnen och eventuellt näsan',

                        image_url: 'images/problems/102x102/mild-perioral-dermatit.webp',
                        image_alt: 'Bild av mild perioral dermatit',
                        image_title: 'Mild perioral dermatit exemplifierad',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Måttlig perioral dermatit',
                        subtitle: 'Utslag plus klåda eller brännande känsla, eventuellt med enstaka pustler',

                        image_url: 'images/problems/102x102/moderate-perioral-dermatit.webp',
                        image_alt: 'Bild av måttlig perioral dermatit',
                        image_title: 'Måttlig perioral dermatit exemplifierad',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Allvarlig perioral dermatit',
                        subtitle: 'Flera pustler, kraftig rodnad och kanske även spridning till andra delar av ansiktet eller halsen',

                        image_url: 'images/problems/102x102/severe-perioral-dermatit.webp',
                        image_alt: 'Bild av allvarlig perioral dermatit',
                        image_title: 'Allvarlig perioral dermatit exemplifierad',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Perioral Dermatit baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer kan spela en viktig roll i utvecklingen och förvärringen av perioral dermatit. Dessa kan inkludera allt från kosmetiska produkter och hygienartiklar till miljömässiga förhållanden som kyla eller fuktighet. Det är viktigt att förstå hur dessa faktorer kan interagera med din hud för att bäst hantera och behandla tillståndet.</p>',
            types: array(
                  new BasedType(
                        title: 'Kosmetiska produkter',
                        subtitle: 'Användning av olämpliga kosmetiska produkter',

                        image_url: 'images/problems/102x102/cosmetic-products.webp',
                        image_alt: 'Bild av kosmetiska produkter',
                        image_title: 'Kosmetiska produkter och perioral dermatit',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Miljömässiga faktorer',
                        subtitle: 'Kyla, värme, fuktighet och torr luft',

                        image_url: 'images/problems/102x102/environmental-factors.webp',
                        image_alt: 'Bild av miljömässiga faktorer',
                        image_title: 'Miljömässiga faktorer och perioral dermatit',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Hygienartiklar',
                        subtitle: 'Tandkräm, munskölj och andra produkter',

                        image_url: 'images/problems/102x102/hygiene-products.webp',
                        image_alt: 'Bild av hygienartiklar',
                        image_title: 'Hygienartiklar och perioral dermatit',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Perioral Dermatit baserat på område',
            content: '<p class="p200">Perioral dermatit är mest känd för att påverka området runt munnen, men det kan också förekomma runt näsan, ögonen eller till och med på andra delar av ansiktet. Placeringen av symptomen kan variera från person till person och kan ge insikter om eventuella yttre faktorer som kan påverka tillståndet.</p>',
            types: array(
                  new BasedType(
                        title: 'Runt munnen',
                        subtitle: 'Vanligast förekommande',

                        image_url: 'images/problems/102x102/perioral-mun.webp',
                        image_alt: 'Bild av perioral dermatit runt munnen',
                        image_title: 'Perioral Dermatit runt munnen',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Runt näsan',
                        subtitle: 'Mindre vanligt men förekommande',

                        image_url: 'images/problems/102x102/perioral-nasa.webp',
                        image_alt: 'Bild av perioral dermatit runt näsan',
                        image_title: 'Perioral Dermatit runt näsan',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Runt ögonen',
                        subtitle: 'Ännu mer sällsynt',

                        image_url: 'images/problems/102x102/perioral-ogon.webp',
                        image_alt: 'Bild av perioral dermatit runt ögonen',
                        image_title: 'Perioral Dermatit runt ögonen',

                        url: null,
                        url_title: null,
                  )
            )
      ),

);
*/
$symptoms_title = 'Symptom';

$symptoms = array(
      new Symptom(
            name: 'Utslag runt munnen',
            aka: 'Papler eller pustler',
            content: 'Röda, inflammerade utslag är det mest framträdande symptomet av perioral dermatit. Dessa utslag uppstår oftast runt munnen och näsan.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/utslag-runt-munnen.webp',
            image_alt: 'Bild av röda utslag',
            image_title: 'Röda Utslag'
      ),
      new Symptom(
            name: 'Klåda',
            aka: 'Kliande hud',
            content: 'Vissa individer upplever klåda i det drabbade området, även om detta symptom inte är universellt för alla som har perioral dermatit.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/klada-ansikte.webp',
            image_alt: 'Bild av hud som kliar',
            image_title: 'Klåda'
      ),
      new Symptom(
            name: 'Svidande Känsla',
            aka: 'Hettande hud',
            content: 'En brännande eller svidande känsla är också vanlig vid perioral dermatit och kan förvärras när huden kommer i kontakt med vatten eller hudvårdsprodukter.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/svidande-kansla.webp',
            image_alt: 'Bild av hud med brännande eller svidande känsla',
            image_title: 'Brännande eller Svidande Känsla'
      ),
      new Symptom(
            name: 'Hudfjällning',
            aka: 'Flagnande hud',
            content: 'I vissa fall kan huden runt de drabbade områdena börja fjälla eller flagna, vilket kan likna symptom av eksem. Huden är torr och kan kännas stram.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/flagnande-hud-runt-munnen.webp',
            image_alt: 'Bild av hudfjällning',
            image_title: 'Hudfjällning'
      ),
      new Symptom(
            name: 'Rodnad och Inflammation',
            aka: 'Erytem och inflammation',
            content: 'Området kring de drabbade delarna kan vara kraftigt rött och inflammerat, särskilt i svårare fall av perioral dermatit.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'bilder/symptom/102x102/rodnad-inflammation-nasvingar.webp',
            image_alt: 'Bild av rodnad och inflammation',
            image_title: 'Rodnad och Inflammation'
      ),
);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för Perioral Dermatit',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en hudspecialist utförs en undersökning av ditt tillstånd av perioral dermatit. Vi tar före-bilder på de drabbade områdena och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av perioral dermatit',
      image_title: 'Konsultation för behandling av perioral dermatit',

      url_label: 'Läs mer om konsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för perioral dermatit',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);


$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot Perioral Dermatit',
            duration: '60 min',
            price: '1295 kr',
            content: 'Behandlingen syftar till att lindra symtom och förbättra hudens skick genom en skonsam och noggrann rengöring av de drabbade områdena.',

            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling mot perioral dermatit',
            image_title: 'Ansiktsbehandling mot perioral dermatit',

            url: '/problemhy.php',
            url_label: 'Läs mer om behanding',
            url_title: 'Läs mer om ansiktsbehanding mot perioral dermatit',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot perioral dermatit',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PerioralDermatitis&method=Method_FacialProblem&area=EMPTY',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot perioral dermatit'
      ),
);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Perioral Dermatit Produkter',
            duration: null,
            price: 'Från 1495 kr',
            content: 'Daglig skötsel av huden är viktig för att hålla ditt hudproblem i schack. Vi rekommenderar produkter är speciellt utformade för att lindra symtom och förhindra ytterligare utbrott.',

            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av perioral dermatit',
            image_title: 'Effektiva produkter för lindring och förebyggande av perioral dermatit',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Perioral_Dermatitis',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot perioral dermatit',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/perioral-dermatit',
            booking_url_title: 'Klicka för att köpa produktpaket mot perioral dermatit',
      )
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för min perioral dermatit?',
            image_title: 'När ska jag söka hjälp för min perioral dermatit?',
            content: '<p class="p200">Perioral dermatit är en hudsjukdom som oftast påverkar området runt munnen och näsan. Detta tillstånd kan vara smärtsamt, obehagligt och estetiskt störande.</p>
            <p class="p200 mt-m">Om du upplever att din perioral dermatit inte förbättras eller om det påverkar din livskvalitet, kan det vara dags att söka professionell hjälp. En hudterapeut kan identifiera din hudtyp och utforma en skräddarsydd behandlingsplan, vilken kan inkludera specialanpassade produkter och behandlingar. Om du är bekymrad över din perioral dermatit, tveka inte att söka professionell rådgivning. Det är aldrig för tidigt eller för sent att ta kontroll över din hy.</p>',
      ),

      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du märker att din perioral dermatit påverkar din livskvalitet, eller om du har provat olika behandlingsalternativ och produkter utan framgång, är det dags att söka professionell hjälp. Ju tidigare du agerar, desto snabbare kan vi effektivt behandla och hantera ditt tillstånd. Vi är specialister inom hudvård och kan erbjuda skräddarsydda behandlingsplaner som är anpassade till just ditt hudproblem.</p>
            <p class="p200 mt-m">Vi erbjuder en kostnadsfri konsultation där vi analyserar din hud och föreslår en individuell behandlingsplan. Våra specialister har omfattande erfarenhet av att behandla perioral dermatit och kan rekommendera de bästa produkterna och behandlingarna för din unika hudtyp. Tveka inte att boka en gratis konsultation för att ta första steget mot en friskare och mer komfortabel hud.</p>',

            image_small: null,
            image_large: null,
            image_alt: 'När ska jag besöka Specialisten för Perioral Dermatit?',
            image_title: 'När ska jag besöka Specialisten för Perioral Dermatit?',
      ),

);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.webp',
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
      'Generellt om perioral dermatit' => array(
            new Question(
                  title: 'Vad är perioral dermatit och hur skiljer det sig från andra hudåkommor?',
                  text: '<p class="p200">Perioral dermatit är en inflammatorisk hudsjukdom som oftast uppträder runt munnen och näsan. Det kännetecknas av små röda prickar, pustler och flagnande hud. Tillståndet kan vara kroniskt och tenderar att återkomma. Det skiljer sig från akne genom att det oftast inte inkluderar komedoner (svarta och vita pormaskar) och från rosacea genom att det oftast är centrerat kring munnen snarare än på kinderna och näsan. Det kan också förväxlas med eksem, men behandlingar som ofta används för eksem, som kortison, kan faktiskt förvärra perioral dermatit.</p>'
            ),
            new Question(
                  title: 'Vilka är de vanligaste symptomen på perioral dermatit?',
                  text: '<p class="p200">De vanligaste symptomen inkluderar en utslagsliknande utbrott av små, röda, inflammerade papler eller pustler vanligtvis centrerade runt munnen. Detta kan åtföljas av mild till måttlig klåda, brännande känsla och flagnande hud. Utslagen kan ibland sprida sig till områden runt och på näsan.</p>'
            ),
            new Question(
                  title: 'Är perioral dermatit relaterat till andra hudtillstånd, som exempelvis rosacea eller akne?',
                  text: '<p class="p200">Perioral dermatit är ett unikt dermatologiskt tillstånd, men det har vissa likheter med både rosacea och akne. Det kan vara svårt att diagnostisera eftersom dess symptom liknar dem för andra hudsjukdomarna. Vissa forskare tror att det kan ha en koppling till rosacea på grund av liknande inflammatoriska processer.</p>'
            ),
            new Question(
                  title: 'Kan perioral dermatit vara en reaktion på kosmetika eller hudvårdsprodukter?',
                  text: '<p class="p200">Det är möjligt. Yttre faktorer som starka hudvårdsprodukter, hormonella förändringar och även vissa kosmetika kan utlösa eller förvärra perioral dermatit. Dock är den exakta orsaken ofta okänd, och det kan vara en kombination av flera faktorer som bidrar till utvecklingen av detta tillstånd.</p>'
            ),
            new Question(
                  title: 'Vilka behandlingsalternativ finns tillgängliga för perioral dermatit?',
                  text: '<p class="p200">Det finns flera behandlingsalternativ beroende på svårighetsgraden av tillståndet. Problemet behandlas effektivt med en skräddarsydd hudvårdsrutin i kombination med ansiktsbehandlingar. Det är också viktigt att undvika utlösande faktorer, såsom vissa produkter eller topiska steroider. I dessa fall rekommenderas en så kallad "nollbehandling" där man undviker samliga produkter för att identifiera och eliminera det som triggat igång problemet.</p>'
            ),
            new Question(
                  title: 'Finns det något sätt att förebygga återkommande episoder av perioral dermatit?',
                  text: '<p class="p200">Eftersom den exakta orsaken till perioral dermatit inte alltid är känd, kan det vara svårt att förebygga återkommande episoder helt och hållet. Undvikande av kända utlösande faktorer, såsom topiska steroider och vissa hudvårdsprodukter, kan dock minska risken för återfall. Genom att behandla huden med effektiva hudvårdsprodukter kan du anpassa behandlingens intensitet beroende på huden.</p>'
            ),
            new Question(
                  title: 'Fungerar äppelcidervinäger mot perioral dermatiti?',
                  text: '<p class="p200">Äppelcidervinäger har diskuterats som en naturlig behandling för olika hudtillstånd, inklusive perioral dermatiti. Vissa personer rapporterar en lindring av symtomen genom att använda utspädd äppelcidervinäger lokalt. Det är dock viktigt att komma ihåg att det vetenskapliga stödet för dess effektivitet är begränsat och att äppelcidervinäger kan irritera huden, särskilt de med känslig hud som är vanligt för hudtypen. Vi rekommenderar att du konsulterar med en hudterapeut innan du testar hembehandlingar för perioral dermatiti, som kan ge dig råd om säkra och effektiva behandlingsalternativ anpassade för just din hud.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till perioral dermatit";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av perioral dermatit',
            image_title: 'Cazzandra Lindberg - Expert på behandling av perioral dermatit'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på perioral dermatit',
            image_title: 'Veronika Benedik - Specialist inom perioral dermatit vård'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2017',
            image: 'bilder/hudterapeut/312x312/hudterapeut-amira.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom aknehantering',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på perioral dermatit'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av perioral dermatit',
            image_title: 'Vilma Libom - Expert inom behandling av perioral dermatit'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Perioral dermatit Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Aktiv Akne',
            aka: 'finnar',
            image: 'bilder/hudproblem/102x102/akne.webp',
            image_alt: 'Ansikte med aktiv akne',
            image_title: 'Aktiv Akne - en vanlig hudåkomma',
            url: 'acne.php',
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
$brands_url_title = "Varumärken för behandling av perioral dermatit";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/perioral-dermatit.php" />

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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot akne" href="varumarken/">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>