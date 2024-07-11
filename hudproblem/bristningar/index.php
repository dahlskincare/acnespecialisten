<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla bristningar - Symptom, orsak och behandling';
$seo_description = 'Här hittar du allt om bristningar och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'strechmarks, bristningar, bristningar gravid, behandla bristningar, bristningar hud, bristningar i huden, bristningar mage, bristningar på magen';
$seo_image = '/bilder/hudproblem/424x456/bristningar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Bristningar', '/hudproblem/bristningar/'),
);

$image_small = 'bilder/hudproblem/424x324/bristningar.webp';
$image_large = 'bilder/hudproblem/424x456/bristningar.webp';
$image_title = 'Visar en hud med bristningar';
$image_alt = 'Bild som illustrerar hur bristningar ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Bristningar',
      description: 'Bristningar är linjer på huden som uppstår när huden tänjs ut snabbt. På den här sidan förklarar vi varför bristningar bildas och vilka faktorer som kan påverka deras utveckling.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_StrechMarks', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_StrechMarks', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_StrechMarks', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_StrechMarks', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Striae',
                  url: null,
                  title: null,
            ),
            new Link(
                  label: 'Stretchmarks',
                  url: null,
                  title: null,
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är bristningar?',
            content: '<p class="p200">Bristningar, vetenskapligt benämnda som striae, är märkbara, ojämna linjer eller band på huden som uppstår när bindväv under huden tänjs ut över sin flexibilitetsgräns. Det engelska begreppet stretchmarks används också väldigt ofta. Denna tänjning leder till en skada i huden där den har blivit tunnare och förlorat en del av sin elastiska förmåga. Denna förändring beror på skador i hudens kollagen och elastinfibrer, de proteiner som är ansvariga för hudens fasthet och elasticitet. När bristningar först uppträder kan de ofta ha en röd, blåaktig eller lila nyans på grund av de brustna blodkärlen under huden. Med tiden läker dessa blodkärl, vilket gör att bristningarna gradvis övergår till en ljusare nyans av hudtonen. Men förutom den rena färgförändringen kan ytan av bristningarna vara något räfflad eller gropig, vilket skiljer dem från den omgivande huden.</p>',
            extended_content: '<p class="p200 mt-xl">Mikroskopiskt sett kan man se att bristningar inte bara är ytliga skador. De är faktiskt små ärrbildningar i dermis, det mellersta skiktet av huden. Denna störning av kollagenproduktionen orsakar också en förtunning av epidermis, det yttersta hudlagret. Bristningars utseende och utveckling kan variera beroende på enskilda genetiska faktorer, hudtyp och även beroende på var på kroppen de uppträder. Med moderna behandlingsmetoder kan bristningar reduceras för att minska deras synlighet.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man bristningar?',
            content: '<p class="p200">Bristningar, även kända som striae, uppstår när huden sträcks ut snabbare än vad den kan anpassa sig till. Detta leder till att kollagen- och elastinfibrerna i huden brister, vilket resulterar i synliga linjer eller band på huden. Det finns flera anledningar till varför man kan få bristningar, inklusive:</p>',
            extended_content: '<p class="p200 mt-xl">Snabb tillväxt under puberteten<br />Under tonåren kan snabb tillväxt leda till att bristningar uppstår, ofta på platser som höfter, bröst, lår och rumpa.</p>
            <p class="p200 mt-xl">Snabb viktuppgång eller viktnedgång<br />Stora förändringar i kroppsvikt på kort tid kan orsaka bristningar. Detta gäller både för snabb viktuppgång och för snabb viktminskning.</p>
            <p class="p200 mt-xl">Graviditet<br />Många kvinnor upplever bristningar under graviditeten, särskilt under de sista månaderna, när huden sträcks ut för att rymma den växande bebisen.</p>
            <p class="p200 mt-xl">Kroppsbyggnad och styrketräning<br />Snabb muskeltillväxt kan också leda till bristningar, särskilt på armar, axlar och bröst.</p>
            <p class="p200 mt-xl">Hormonella förändringar<br />Hormonella förändringar i kroppen kan påverka hudens elasticitet och öka risken för bristningar. Detta kan inkludera pubertet, graviditet och hormonbehandling.</p>
            <p class="p200 mt-xl">Genetik<br />Benägenheten att utveckla bristningar kan också vara genetisk. Om dina föräldrar eller syskon har bristningar, är chansen större att du också får det.</p>
            <p class="p200 mt-xl">Även om bristningar är helt naturliga och inte skadliga för hälsan, kan de påverka hur man känner för sitt utseende. Det finns behandlingar som kan minska synligheten av bristningar.</p>',
            icons: array('vaxt' => 'Tillväxt', 'traning' => 'Träning', 'livsstil' => 'Livsstil', 'graviditet' => 'Graviditet')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får bristningar?',
            content: '<p class="p200">Bristningar skiljer inte mellan kön, ålder eller hudtyp; de kan påverka nästan vem som helst. Dock är vissa grupper mer benägna att utveckla dem än andra. Till exempel upplever många kvinnor bristningar under graviditet när buken snabbt expanderar för att rymma ett växande foster. Ungdomar genomgår en period av snabb tillväxt och kroppslig förändring under puberteten. Denna snabba tillväxt kan leda till att huden tänjs ut snabbt, vilket resulterar i bristningar.</p>',
            extended_content: '<p class="p200 mt-xl">Personer som snabbt ökar eller minskar i vikt kan också få bristningar. På liknande sätt kan snabb viktnedgång, särskilt om den är dramatisk, orsaka att huden förlorar sin elasticitet, vilket kan resultera i bristningar. Idrottare, särskilt de som utövar styrketräning eller bodybuilding, kan också uppleva bristningar. När muskler växer snabbt kan huden tänjas ut snabbare än den kan anpassa sig, vilket leder till dessa märken. Människor som använder steroider, antingen medicinskt eller för kroppsbyggande, kan också se en ökning av bristningar eftersom dessa ämnen kan minska hudens elasticitet.</p>
            <p class="p200 mt-xl">Genetik spelar också en viktig roll i utvecklingen av bristningar. Om det finns en familjehistoria av bristningar, särskilt hos nära släktingar som en mor eller syster, kan risken för att utveckla dem vara högre. Dessutom kan personer med vissa genetiska sjukdomar orsaka en högre risk på grund av förändringar i huden eller bindväven. Det är också värt att notera att även om alla kan utveckla bristningar, är de mer framträdande hos personer med mörkare hudtoner. Medan de kan blekna över tid, kan bristningar fortfarande vara en källa till självmedvetenhet för många, oavsett var eller varför de uppträder.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna', '65+' => 'Aldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man bristningar?',
            content: '<p class="p200">Bristningar kan dyka upp på nästan vilken del av kroppen som helst, men det finns vissa områden som är särskilt mottagliga för dessa hudförändringar. Ett av de vanligaste områdena där bristningar uppträder är på buken. Detta är särskilt vanligt hos kvinnor under graviditet, när buken expanderar snabbt för att rymma ett växande foster. Men även personer som upplever snabb viktökning kan finna att deras bukområde utvecklar dessa linjer. Brösten är ett annat område där bristningar ofta framträder. Detta kan ske under pubertet när brösten växer snabbt, under graviditet när de förändras i storlek på grund av mjölkproduktion.</p>',
            extended_content: '<p class="p200 mt-xl">Höfter och lår är även de platser där bristningar ofta uppträder, särskilt hos kvinnor. Dessa områden kan bli påverkade under perioder av snabb tillväxt under puberteten, under graviditet, eller på grund av snabba förändringar i kroppsvikt. Bristningarna kan sträcka sig från höft till knä, vilket visar var huden har dragits ut mest. Skinkorna, överarmarna och axlarna är också vanliga områden för bristningar att dyka upp. Intensiv styrketräning kan leda till bristningar på överarmarna, särskilt om muskelväxten är snabb. Skinkorna kan drabbas av samma skäl som höfterna och låren – snabb tillväxt, viktökning. Vad gäller axlarna, är det särskilt vanligt bland manliga kroppsbyggare och tonårspojkar under pubertet.</p>
            <p class="p200 mt-xl">Det bör noteras att även om bristningar oftast associeras med kvinnor, på grund av graviditet och andra hormonella förändringar, är det väldigt vanligt förekommnade hos män. Till sist, oavsett var på kroppen de uppträder, är det viktigt att förstå att bristningar är en naturlig del av hudens respons på snabb utsträckning. De kan blekna över tid, men de representerar ingen hälsorisk och är ofta bara en estetisk bekymmer för den drabbade.</p>',
            icons: array('kropp' => 'Kroppen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten får du en personlig hudterapeut som hjälper dig identifiera omfattningen och typen av dina bristningar och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'gratis-hudkonsultation.php',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför effektiva behandlingar anpassade för din specifika hud så att du snabbt och säkert kan minska synligheten av dina bristningar.',

            url_label: 'Se behandlingar',
            url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_StrechMarks',
            url_title: 'Utforska våra skräddarsydda behandlingar'
      ),
);

/*
$types_title = 'Olika typer av bristningar';

$type_categories = array(
      new BasedTypeCategory(
          title: 'Bristningar baserat på ålder',
          content: '<p class="p200">Bristningar, kända som striae, kan uppträda i olika åldrar. Dessa ärrliknande linjer uppstår ofta som ett resultat av snabb tillväxt, hormonella förändringar eller snabba förändringar i kroppsvikten. Under tonåren kan bristningar uppstå på grund av tillväxtspurten som ofta följer med puberteten. I vuxenålder kan de uppstå till följd av bland annat snabba viktändringar. Äldre vuxna kan också drabbas, särskilt i samband med hudens förlorade elasticitet över tiden.</p>',
          types: array(
              new BasedType(
                  title: 'Bristningar under tonåren',
                  subtitle: 'Vanligt under tillväxtspurten',

                  image_url: 'images/problems/102x102/bristningar-tonaringar.webp',
                  image_alt: 'Bild av bristningar hos tonåringar',
                  image_title: 'Bristningar under tonåren',

                  url: null,
                  url_title: null,
              ),
              new BasedType(
                  title: 'Bristningar i vuxenålder',
                  subtitle: 'Kan kopplas till viktändringar eller hormonförändringar',

                  image_url: 'images/problems/102x102/bristningar-vuxna.webp',
                  image_alt: 'Bild av bristningar hos vuxna',
                  image_title: 'Bristningar i vuxenålder',

                  url: null,
                  url_title: null,
              ),
              new BasedType(
                  title: 'Bristningar hos äldre vuxna',
                  subtitle: 'På grund av förlorad hudelasticitet',

                  image_url: 'images/problems/102x102/bristningar-aldre.webp',
                  image_alt: 'Bild av bristningar hos äldre vuxna',
                  image_title: 'Bristningar hos äldre vuxna',

                  url: null,
                  url_title: null,
              ),
          )
      ),

      new BasedTypeCategory(
          title: 'Bristningar baserat på svårighetsgrad',
          content: '<p class="p200">Bristningar kan variera i svårighetsgrad baserat på deras djup, längd och färgintensitet. I milda fall av bristningar är de ofta tunna och ljusa, mindre synliga. Medelsvåra bristningar kan vara mörkare och mer framstående, medan svåra bristningar är mycket djupa, långa och har en distinkt färg. Svårighetsgraden kan påverka ens självkänsla och önskan om behandling. Det är viktigt att identifiera svårighetsgraden av bristningarna för att bestämma den mest effektiva behandlingen och förstå hur de kan utvecklas över tiden.</p>',
          types: array(
              new BasedType(
                  title: 'Milda bristningar',
                  subtitle: 'Tunna och ljusa linjer',

                  image_url: 'images/problems/102x102/milda-bristningar.webp',
                  image_alt: 'Bild av milda bristningar',
                  image_title: 'Milda bristningar exemplifierade',

                  url: null,
                  url_title: null,
              ),
              new BasedType(
                  title: 'Medelsvåra bristningar',
                  subtitle: 'Mörkare och mer framstående linjer',

                  image_url: 'images/problems/102x102/medelsvara-bristningar.webp',
                  image_alt: 'Bild av medelsvåra bristningar',
                  image_title: 'Medelsvåra bristningar exemplifierade',

                  url: null,
                  url_title: null,
              ),
              new BasedType(
                  title: 'Svåra bristningar',
                  subtitle: 'Djupa, långa och med distinkt färg',

                  image_url: 'images/problems/102x102/svara-bristningar.webp',
                  image_alt: 'Bild av svåra bristningar',
                  image_title: 'Svåra bristningar exemplifierade',

                  url: null,
                  url_title: null,
              ),
          )
      ),

      new BasedTypeCategory(
            title: 'Bristningar baserat på yttre faktorer',
            content: '<p class="p200">Bristningar kan påverkas eller framkallas av olika yttre faktorer. Dessa kan sträcka huden snabbare än den kan anpassa sig, vilket leder till uppkomsten av bristningar. Några vanliga yttre faktorer inkluderar snabb viktökning, hormonella förändringar, och vissa medicinska och kosmetiska behandlingar.</p>',
            types: array(
                  new BasedType(
                      title: 'Viktrelaterade bristningar',
                      subtitle: 'Följd av snabb viktökning eller -minskning',
                      image_url: 'images/bristningar/102x102/vikt-bristningar.webp',
                      image_alt: 'Bild av viktrelaterade bristningar',
                      image_title: 'Exempel på bristningar orsakade av viktändringar',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hormonella bristningar',
                      subtitle: 'Bristningar orsakade av hormonfluktuationer',
                      image_url: 'images/bristningar/102x102/hormonella-bristningar.webp',
                      image_alt: 'Bild av hormonella bristningar',
                      image_title: 'Exempel på bristningar orsakade av hormonella förändringar',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Medicinska bristningar',
                      subtitle: 'Bristningar från medicinska behandlingar eller mediciner',
                      image_url: 'images/bristningar/102x102/medicinska-bristningar.webp',
                      image_alt: 'Bild av medicinska bristningar',
                      image_title: 'Exempel på bristningar orsakade av mediciner eller behandlingar',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Träningsrelaterade bristningar',
                      subtitle: 'Från intensiv muskeltillväxt',
                      image_url: 'images/bristningar/102x102/traning-bristningar.webp',
                      image_alt: 'Bild av träningsrelaterade bristningar',
                      image_title: 'Exempel på bristningar orsakade av snabb muskeltillväxt',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Graviditetsbristningar',
                      subtitle: 'Uppstår under graviditet',
                      image_url: 'images/bristningar/102x102/graviditet-bristningar.webp',
                      image_alt: 'Bild av graviditetsbristningar',
                      image_title: 'Exempel på bristningar under graviditet',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Bristningar från snabb tillväxt',
                      subtitle: 'Vanligt under puberteten',
                      image_url: 'images/bristningar/102x102/pubertet-bristningar.webp',
                      image_alt: 'Bild av bristningar från snabb tillväxt',
                      image_title: 'Exempel på bristningar från tillväxtspurter',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Bristningar från kosmetiska ingrepp',
                      subtitle: 'Efter ingrepp som fettsugning eller implantat',
                      image_url: 'images/bristningar/102x102/kosmetiska-ingrepp-bristningar.webp',
                      image_alt: 'Bild av bristningar från kosmetiska ingrepp',
                      image_title: 'Exempel på bristningar efter kosmetiska behandlingar',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Bristningar från hudsammandragande behandlingar',
                      subtitle: 'Exempelvis vissa hudlyft',
                      image_url: 'images/bristningar/102x102/hudsammandragande-behandlingar.webp',
                      image_alt: 'Bild av bristningar från hudsammandragande behandlingar',
                      image_title: 'Exempel på bristningar orsakade av behandlingar som stramar åt huden',
                      url: null,
                      url_title: null,
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Bristningar baserat på område',
            content: '<p class="p200">Bristningar kan uppträda på olika områden på kroppen. Vanliga områden inkluderar mage, lår, höfter, bröst och överarmar. Uppkomsten av bristningar kan vara kopplad till snabb viktökning, graviditet, hormonella förändringar eller tillväxtspurtar under tonåren.</p>',
            types: array(
                  new BasedType(
                        title: 'Bristningar på magen',
                        subtitle: 'Vanligtvis kopplad till graviditet eller viktökning',

                        image_url: 'images/problems/102x102/bristningar-mage.webp',
                        image_alt: 'Bild av bristningar på magen',
                        image_title: 'Exempel på bristningar på magen',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Bristningar på lår',
                        subtitle: 'Ofta kopplat till snabb viktökning eller tillväxt',

                        image_url: 'images/problems/102x102/bristningar-lar.webp',
                        image_alt: 'Bild av bristningar på lår',
                        image_title: 'Exempel på bristningar på lår',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Bristningar på bröstet',
                        subtitle: 'Kan vara resultat av graviditet, amning eller snabb tillväxt',

                        image_url: 'images/problems/102x102/bristningar-brost.webp',
                        image_alt: 'Bild av bristningar på bröstet',
                        image_title: 'Exempel på bristningar på bröstet',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Bristningar på höfterna',
                        subtitle: 'Ofta kopplat till graviditet eller snabb viktökning',

                        image_url: 'images/problems/102x102/bristningar-hip.webp',
                        image_alt: 'Bild av bristningar på höfterna',
                        image_title: 'Exempel på bristningar på höfterna',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Bristningar på överarmarna',
                        subtitle: 'Kan uppkomma på grund av snabb viktuppgång eller styrketräning',

                        image_url: 'images/problems/102x102/bristningar-arm.webp',
                        image_alt: 'Bild av bristningar på överarmarna',
                        image_title: 'Exempel på bristningar på överarmarna',

                        url: null,
                        url_title: null,
                  ),
            )
      )

);
*/
/*
$symptoms_title = 'Bristningar symptom';

$symptoms = array(
      new Symptom(
            name: 'Färgförändringar',
            aka: 'Kända som början på bristningar',
            content: 'Nya bristningar börjar ofta som rodnade, blåaktiga eller lila linjer.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/fargforandringar.webp',
            image_alt: 'Bild av bristningar med färgförändringar',
            image_title: 'Färgförändringar på bristningar'
      ),

      new Symptom(
            name: 'Ändrad hudtextur',
            aka: 'Kända som textur av bristningar',
            content: 'Bristningar kan kännas något upphöjda eller gropiga vid beröring.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/hudtextur.webp',
            image_alt: 'Bild av ändrad hudtextur på bristningar',
            image_title: 'Ändrad hudtextur av bristningar'
      ),

      new Symptom(
            name: 'Linjära ärr',
            aka: 'Kända som ärrade bristningar',
            content: 'Med tiden kan bristningarna blekna till en ljusare, ärrliknande färg, oftast ljusare än omgivande hud.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/linjara.arr.webp',
            image_alt: 'Bild av linjära ärr från bristningar',
            image_title: 'Linjära ärr från bristningar'
      ),

      new Symptom(
            name: 'Klåda',
            aka: 'Kända som klåda kring bristningar',
            content: 'I vissa fall kan området runt bristningarna klia, särskilt när de först börjar bildas.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/klada.webp',
            image_alt: 'Bild av område med klåda kring bristningar',
            image_title: 'Klåda kring bristningar'
      ),

      new Symptom(
            name: 'Brännande känsla',
            aka: 'Kända som brännskada av bristningar',
            content: 'Vissa människor rapporterar en lätt brännande känsla i området med bristningar.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/brannande.kansla.webp',
            image_alt: 'Bild av område med brännande känsla från bristningar',
            image_title: 'Brännande känsla från bristningar'
      ),

      new Symptom(
            name: 'Utsträckning av huden',
            aka: 'Kända som spänd hud',
            content: 'Bristningar är ofta föregångna av en känsla av spänning eller sträckning i huden.',

            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/utstrackning.webp',
            image_alt: 'Bild av utsträckt eller spänd hud',
            image_title: 'Utsträckt eller spänd hud'
      ),

);
*/
$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist på bristningar utförs en undersökning av din hy. Vi tar före-bilder på de drabbade områdena och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för bristningsbehandling',
      image_title: 'Konsultation för bristningsbehandling',

      url_label: 'Läs mer om gratis hudkonsultation',
      url: '/gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot bristningar',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_StrechMarks',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för bristningar',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Laser mot bristningar',
            duration: '50 min',
            price: '2595 kr',
            content: 'En avancerad laserbehandling erbjuder en effektiv lösning för att behandla och minska utseendet av bristningar. Lasertekniken stimulerar kollagenproduktionen i huden, vilket hjälper till att förbättra hudens struktur och minska synligheten av bristningar.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling mot bristningar',
            image_title: 'Laserbehandling mot bristningar',

            url_label: 'Läs mer om laser',
            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_title: 'Läs mer om laser mot bristningar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för laserbehandling mot bristningar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_StrechMarks',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot bristningar'
      ),
      new Service(
            title: 'Kemisk peeling mot bristningar',
            duration: '30 min',
            price: '1595 kr',
            content: 'Genom att exfoliera huden, främjar kemisk peeling cellförnyelse och ökar kollagenproduktionen.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling mot bristningar',
            image_title: 'Kemisk peeling mot bristningar',

            url_label: 'Läs mer om kemisk peeling',
            url: '/kemisk-peeling.php',
            url_title: 'Läs mer om kemisk peeling mot bristningar',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för kemisk peeling mot bristningar',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_StrechMarks',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot bristningar behandling'
      ),
      new Service(
            title: 'Microneedling mot bristningar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Genom att skapa små mikroskopiska skador i huden stimuleras hudens naturliga läkningsprocess och kollagenproduktionen ökar.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling mot bristningar',
            image_title: 'Microneedling mot bristningar',

            url_label: 'Läs mer om microneedling',
            url: '/microneedling.php',
            url_title: 'Läs mer om microneedling mot bristningar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för microneedling mot bristningar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_StrechMarks',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot bristningar behandling'
      ),
);

$articles = array(

      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina bristningar?',
            image_title: 'När ska jag söka hjälp med mina bristningar?',
            content: '<p class="p200">Bristningar är en av de vanligaste hudförändringarna som kan påverka både kvinnor och män, oavsett ålder. Även om de är helt ofarliga, kan bristningar orsaka självmedvetenhet och påverka ens självkänsla. Om du känner att dina bristningar stör dig estetiskt eller om du har försökt olika produkter och behandlingar utan framgång, kan det vara lämpligt att överväga professionell behandling.</p>
            <p class="p200 mt-m">En hudterapeut kan bedöma svårighetsgraden av dina bristningar, diskutera potentiella behandlingsalternativ och rekommendera den bästa metoden för just din situation. Oavsett om bristningarna är nya och röda eller gamla och ljusa, finns det behandlingsmetoder som kan förbättra hudens utseende. Om du känner att bristningarna påverkar hur du känner för din kropp, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot en hud du trivs med.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina bristningar?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina bristningar?',
            content: '<p class="p200">Letar du efter en effektiv lösning för dina bristningar? AcneSpecialisten står som det självklara valet. Med mer än 30 års expertis inom hudvård och en specialiserad förmåga att behandla bristningar, är vi perfekt utrustade för att möta dina behov. Oavsett om dina bristningar är få eller omfattande, utformar vi behandlingar som är anpassade just för dig.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste behandlingsteknikerna för att effektivt reducera och eliminera dina bristningar. Vårt team av erfarna hudterapeuter skapar en personlig behandlingsplan och erbjuder stöd genom hela din behandlingsresa. Vi dedikerar oss till att assistera dig i din strävan efter en slät och jämn hud. Vår passion, expertis och långa erfarenhet gör oss till det självklara valet för dig som söker behandling av bristningar.</p>',
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat för bristningar";


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

$faq_categories = array(
      'Generellt om bristningar' => array(
            new Question(
                  title: 'Vilka är de vanligaste områdena på kroppen som är mer benägna att utveckla bristningar?',
                  text: '<p class="p200">Bristningar kan uppträda på olika delar av kroppen, men de vanligaste områdena där de uppträder är buken, brösten, höfterna, rumpan och låren. Dessa områden är mer mottagliga för bristningar på grund av deras större potentiella tillväxt och utsträckning, särskilt under perioder som graviditet, snabb viktökning eller intensiv muskeltillväxt.</p>'
            ),
            new Question(
                  title: 'Är det vanligt att man får bristningar under graviditet?',
                  text: '<p class="p200">Ja, det är mycket vanligt att kvinnor utvecklar bristningar under graviditet. Detta beror på den snabba utsträckning av huden, särskilt på buken, samt hormonella förändringar som kan påverka hudens elasticitet. Många kvinnor upplever att bristningarna uppträder under tredje trimestern när den snabbaste tillväxten av magen sker.</p>'
            ),
            new Question(
                  title: 'Kan både män och kvinnor få bristningar?',
                  text: '<p class="p200">Ja, både män och kvinnor kan utveckla bristningar. Även om det är mer vanligt hos kvinnor, särskilt under graviditet, kan män också få bristningar, särskilt vid snabb viktökning, snabb muskeltillväxt eller vid hormonella obalanser.</p>'
            ),
            new Question(
                  title: 'Förändras bristningarnas utseende över tid?',
                  text: '<p class="p200">Ja, bristningarnas utseende kan förändras över tiden. När de först uppträder kan de vara röda, lila eller rosa, men med tiden bleknar de ofta till en ljusare, pärlemorfärg eller till en vit eller silveraktig nyans. Även om de inte helt försvinner kan de bli mindre framträdande med åren.</p>'
            ),
            new Question(
                  title: 'Vilka faktorer kan öka risken för att utveckla bristningar?',
                  text: '<p class="p200">Flera faktorer kan öka risken att utveckla bristningar. Dessa inkluderar genetik, snabb viktökning, graviditet, användning av vissa mediciner.</p>'
            ),
            new Question(
                  title: 'Är bristningar farliga eller skadliga för hälsan?',
                  text: '<p class="p200">Nej, bristningar är inte farliga eller skadliga för hälsan. De är mestadels en estetisk bekymmer för många människor. Även om de kan vara irriterande eller orsaka obehag, särskilt när de först uppträder, representerar de inget hot mot personens hälsa.</p>'
            ),

      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till bristningar";

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
$skinguide_url_title = "Läs fler guider om bristningar";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av bristningar',
            image_title: 'Cazzandra Lindberg - Expert på behandling av bristningar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på bristningar',
            image_title: 'Veronika Benedik - Specialist inom vård av bristningar'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom hantering av bristningar',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på bristningar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av bristningar',
            image_title: 'Vilma Libom - Expert inom behandling av bristningar'
      )
);

$specialist_url_label = "Se alla hudterapeuter";
$specialist_url_title = "Hudterapeuter specialiserade på bristningar";

$brands = array(
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_title: 'Alma Hybrid - CO2 laser',
            image_alt: 'Alma Hybrid logotyp',
            url: 'alma-hybrid-co2-laser.php',
            url_title: 'Läs mer om Alma Hybrid CO2 laser',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_title: 'Harmony XL Pro - Laser & IPL',
            image_alt: 'Harmony XL Pro logotyp',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
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
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_title: 'Skin Tech - Professionella kemiska peelingar',
            image_alt: 'Skin Tech logotyp',
            url: 'varumarken/skin-tech',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av bristningar";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/hudproblem/bristningar/" />

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

                        </section>
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
                                    <h2 class="big l10n">Våra hudterapeut</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut"><?php echo $specialist_url_label ?></a>
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