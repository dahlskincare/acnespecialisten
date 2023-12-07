<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Bristningar - Orsaker, Behandling och Förebyggande | Bristningsspecialisten';
$seo_description = 'Lär dig allt om bristningar, från dess orsaker till hur man behandlar och förebygger dem. Skräddarsydda lösningar och expertis från Bristningsspecialisten.';
$seo_keywords = 'bristningar, behandling av bristningar, orsaker till bristningar, förebygga bristningar, ta bort bristningar, graviditetsbristningar, tillväxtbristningar, hudärr, hudskador';

// här lägger du bild som du vill skall synas när du länkar i socialamedier eller sms

$seo_image = 'images/treatments/large/bristningar.jpg';

$title = 'Bristningar';

$image_small = 'bilder/problem/424x324/bristningar.webp';
$image_large = 'bilder/problem/424x456/bristningar.webp';
$image_title = 'Visar en hud med bristningar';
$image_alt = 'Bild som illustrerar hur bristningar ser ut på huden';
$description = 'Här förklarar vi vad som kännetecknar bristningar, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av bristningar, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Striae',
            url: null,
            title: null,
      ),
      new Link(
            label: 'Hudärr',
            url: null,
            title: null,
      ),
      new Link(
            label: 'Stretchmärken',
            url: null,
            title: null,
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "consultation-booking?problem=bristningar";
$consultation_url_title = "Gratis Konsultation för Bristningar";

$booking_url_label = "Boka behandling";
$booking_url = "treatment-booking?problem=bristningar";
$booking_url_title = "Boka Bristningsbehandling";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Bristningar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Bristningsbehandling";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Bristningar";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Bristningsbehandling";

$nav_buttons = array(
      'about' => 'Om bristningar',
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

$about_title = 'Om bristningar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är bristningar?',
            content: '<p class="p200">Bristningar, vetenskapligt benämnda som striae, är märkbara, ojämna linjer eller band på huden som uppstår när bindväv under huden tänjs ut över sin flexibilitetsgräns. Denna tänjning leder till en störning av huden där den har blivit tunnare och förlorat en del av sin elastiska förmåga. Denna förändring beror på skador i hudens kollagen och elastinfibrer, de proteiner som är ansvariga för hudens fasthet och elasticitet. När bristningar först uppträder kan de ofta ha en röd, blåaktig eller lila nyans på grund av de brustna blodkärlen under huden. Med tiden läker dessa blodkärl, vilket gör att bristningarna gradvis övergår till en ljusare nyans av hudtonen. Men förutom den rena färgförändringen kan ytan av bristningarna vara något räfflad eller gropig, vilket skiljer dem från den omgivande huden.</p>',
            extended_content: '<p class="p200 mt-xl">Mikroskopiskt sett kan man se att bristningar inte bara är ytliga skador. De är faktiskt små ärrbildningar i dermis, det mellersta skiktet av huden. Denna störning av kollagenproduktionen orsakar också en förtunning av epidermis, det yttersta hudlagret. Bristningars utseende och utveckling kan variera beroende på enskilda genetiska faktorer, hudtyp och även beroende på var på kroppen de uppträder. Med moderna behandlingsmetoder kan bristningar reduceras för att minska deras synlighet.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man bristningar?',
            content: '<p class="p200">Bristningar uppstår när huden snabbt tänjs ut och överstiger sin naturliga förmåga att anpassa sig till denna snabba förändring. Denna översträckning orsakar skador på kollagenfibrerna, de viktiga proteinerna som ger huden dess styrka och elasticitet. När dessa fibrer bryts ner och inte kan återbildas i samma takt som de skadas, resulterar det i de synliga märkena på huden som vi känner till som bristningar. Flertalet faktorer bidrar till utvecklingen av bristningar. Hormonella förändringar spelar en central roll i bildandet av bristningar. Speciellt kortisol, som kroppen producerar i större mängder under stress eller vid vissa medicinska tillstånd, kan minska hudens elasticitet. Förändringar i hormonnivåerna under graviditet, pubertet och till och med vissa medicinska behandlingar kan göra huden mer mottaglig för att utveckla bristningar.</p>',
            extended_content: '<p class="p200 mt-xl">En av de vanligaste orsakerna till bristningar är graviditet. Som buken expanderar för att rymma det växande fostret, utsätts huden för snabb tänjning. Hormonella förändringar under denna period förstärker också risken. Utöver detta kan en snabb förändring i kroppsvikt, antingen en ökning eller minskning, leda till bristningar. Detta gäller särskilt för kroppar i utveckling, som hos tonåringar under tillväxtspurten. Snabb muskeltillväxt, särskilt från intensiv styrketräning, kan också sträcka huden och leda till bristningar.</p>',
            icons: array('who-infants' => 'Hormoner', 'who-teenagers' => 'Stress', 'who-adults' => 'Genetik', 'who-elders' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får bristningar?',
            content: '<p class="p200">Bristningar skiljer inte mellan kön, ålder eller hudtyp; de kan påverka nästan vem som helst. Dock är vissa grupper mer benägna att utveckla dem än andra. Till exempel upplever många kvinnor bristningar under graviditet när buken snabbt expanderar för att rymma ett växande foster. Hormonella förändringar som inträffar under denna tid förstärker huden, vilket gör den mer mottaglig för att tänjas ut och därmed utveckla bristningar. Ungdomar genomgår en period av snabb tillväxt och kroppslig förändring under puberteten. Denna snabba tillväxt kan leda till att huden sträcks snabbt, vilket resulterar i bristningar. Detta är särskilt vanligt bland tonårsflickor på höfter, lår och bröst samt tonårspojkar på ryggen och axlarna.</p>',
            extended_content: '<p class="p200 mt-xl">Personer som snabbt ökar eller minskar i vikt kan också få bristningar. På liknande sätt kan snabb viktnedgång, särskilt om den är dramatisk, orsaka att huden förlorar sin elasticitet, vilket kan resultera i bristningar. Idrottare, särskilt de som bedriver styrketräning eller bodybuilding, kan också uppleva bristningar. När muskler växer snabbt kan huden tänjas ut snabbare än den kan anpassa sig, vilket leder till dessa märken. Människor som använder steroider, antingen medicinskt eller för kroppsbyggande, kan också se en ökning av bristningar eftersom dessa ämnen kan minska hudens elasticitet.</p>
            <p class="p200 mt-xl">Genetik spelar också en viktig roll i utvecklingen av bristningar. Om det finns en familjehistoria av bristningar, särskilt hos nära släktingar som en mor eller syster, kan risken för att utveckla dem vara högre. Dessutom kan personer med vissa genetiska sjukdomar, som Marfans syndrom, ha en högre risk på grund av förändringar i huden eller bindväven. Det är också värt att notera att även om alla kan utveckla bristningar, är de mer framträdande hos personer med mörkare hudtoner. Medan de kan blekna över tid, kan bristningar fortfarande vara en källa till självmedvetenhet för många, oavsett var eller varför de uppträder.</p>',

            icons: array('who-infants' => 'Barn', 'who-teenagers' => 'Ungdommar', 'who-adults' => 'Vuxna', 'who-elders' => 'Män & Kvinnor')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man bristningar?',
            content: '<p class="p200">Bristningar kan dyka upp på nästan vilken del av kroppen som helst, men det finns vissa områden som är särskilt mottagliga för dessa hudförändringar. Ett av de vanligaste områdena där bristningar uppträder är på buken. Detta är särskilt vanligt hos kvinnor under graviditet, när buken expanderar snabbt för att rymma ett växande foster. Men även personer som upplever snabb viktökning kan finna att deras bukområde utvecklar dessa linjer. Brösten är ett annat område där bristningar ofta framträder. Detta kan ske under pubertet när brösten växer snabbt, under graviditet när de förändras i storlek på grund av mjölkproduktion, eller till och med som en bieffekt av snabb viktökning eller förlust. Män som upplever en snabb ökning av bröststorlek, antingen på grund av medicinska tillstånd som gynecomastia eller snabb viktökning, kan också märka bristningar här.</p>',
            extended_content: '<p class="p200 mt-xl">Höfter och lår är även de platser där bristningar ofta uppträder, särskilt hos kvinnor. Dessa områden kan bli påverkade under perioder av snabb tillväxt under puberteten, under graviditet, eller på grund av snabba förändringar i kroppsvikt. Bristningarna kan sträcka sig från höft till knä, vilket visar var huden har dragits ut mest. Skinkorna, överarmarna och axlarna är också vanliga ställen för bristningar att dyka upp. Intensiv styrketräning kan leda till bristningar på överarmarna, särskilt om muskelväxten är snabb. Skinkorna kan drabbas av samma skäl som höfterna och låren – snabb tillväxt, viktökning eller förlust. Vad gäller axlarna, är det särskilt vanligt bland manliga kroppsbyggare och tonårspojkar under pubertet.</p>
            <p class="p200 mt-xl">Det bör noteras att även om bristningar oftast associeras med kvinnor, på grund av graviditet och andra hormonella förändringar, är det väldigt vanligt förekommnade hos män. Till sist, oavsett var på kroppen de uppträder, är det viktigt att förstå att bristningar är en naturlig del av hudens respons på snabb sträckning. De kan blekna över tid, men de representerar ingen hälsorisk och är ofta bara en estetisk bekymmer för den drabbade.</p>',
            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlarna')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera omfattningen och typen av dina bristningar och skapar en individuell behandlingsplan.',

            url_label: 'Få gratis konsultation',
            url: 'gratis-hudkonsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva bristningsbehandlingar anpassade för din specifika hud och bristningstyp, så att du snabbt och säkert kan minska synligheten av dina bristningar.',

            url_label: 'Se bristningsbehandlingar',
            url: 'behandlingar/bristningar',
            url_title: 'Utforska våra skräddarsydda bristningsbehandlingar'
      ),
);

$treatment_link = '<a href="problem/bristningar/behandla-bristningar" title="Utforska effektiva behandlingar mot bristningar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot bristningar</a>';
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
$headline01 = "01. Identifiera dina bristningar";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist för bristningar utförs en undersökning av dina bristningar. Vi tar före-bilder på de drabbade områdena och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för bristningsbehandling',
      image_title: 'Konsultation för bristningsbehandling',

      url_label: 'Läs mer om vår konsultation',
      url: 'konsultation',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation',

      consultation_url_label: 'Boka tid för hudkonsultation',
      consultation_url: 'consultation-booking?problem=stretchmarks',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för bristningar',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla bristningar";

$services = array(
      new Service(
            title: 'Laser mot bristningar',
            duration: '50 min',
            price: '2595 kr',
            content: 'En avancerad laserbehandling mot bristningar erbjuder en effektiv lösning för att behandla och minska utseendet av bristningar. Lasertekniken stimulerar kollagenproduktionen i huden, vilket hjälper till att förbättra hudens struktur och minska synligheten av bristningar.',

            image_small: 'images/services/200x200/laser-bristningar.webp',
            image_large: 'images/services/200x200/laser-bristningar.webp',
            image_alt: 'Bild av laserbehandling mot bristningar',
            image_title: 'Laserbehandling mot bristningar',

            url_label: 'Läs mer om laser mot bristningar',
            url: 'behandlingar/laser-bristningar',
            url_title: 'Klicka här för att läsa mer om laserbehandling mot bristningar',

            consultation_url_label: 'Boka tid för konsultation',
            consultation_url: 'consultation-booking?problem=stretchmarks&service=laser',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för laserbehandling mot bristningar',

            booking_url_label: 'Boka tid för laserbehandling mot bristningar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/bristningsspecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/bristning-konsultation-1643922',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot bristningar'
      ),
      new Service(
            title: 'Kemisk peeling mot bristningar',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla bristningar. Genom att exfoliera huden, främjar kemisk peeling cellförnyelse och ökar kollagenproduktionen. Detta kan hjälpa till att förbättra hudens struktur och minska synligheten av bristningar. Kemisk peeling är en enkel och effektiv strategi för att förbättra utseendet av dina bristningar.',

            image_small: 'images/services/200x200/kemisk-peeling-bristningar.webp',
            image_large: 'images/services/200x200/kemisk-peeling-bristningar.webp',
            image_alt: 'Bild av kemisk peeling mot bristningar',
            image_title: 'Kemisk peeling mot bristningar',

            url: 'behandlingar/kemisk-peeling-bristningar',
            url_label: 'Läs mer om kemisk peeling mot bristningar',
            url_title: 'Klicka här för att läsa mer om kemisk peeling mot bristningar',

            consultation_url: 'consultation-booking?problem=stretchmarks&service=chemicalPeeling',
            consultation_url_label: 'Boka tid för konsultation',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för kemisk peeling mot bristningar',

            booking_url: 'https://www.bokadirekt.se/boka-tjanst/bristningsspecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/bristning-konsultation-1643922',
            booking_url_label: 'Boka tid för kemisk peeling mot bristningar',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot bristningar behandling'
      ),
      new Service(
            title: 'Microneedling mot bristningar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en innovativ behandlingsmetod för bristningar. Genom att skapa små mikroskopiska kanaler i huden stimuleras hudens naturliga läkningsprocess och kollagenproduktionen ökar. Denna behandling kan effektivt förbättra hudens struktur och minska synligheten av bristningar. Microneedling är en säker och effektiv strategi för att förbättra utseendet av dina bristningar.',

            image_small: 'images/services/200x200/microneedling-bristningar.webp',
            image_large: 'images/services/200x200/microneedling-bristningar.webp',
            image_alt: 'Bild av microneedling mot bristningar',
            image_title: 'Microneedling mot bristningar',

            url: 'behandlingar/microneedling-bristningar',
            url_label: 'Läs mer om microneedling mot bristningar',
            url_title: 'Klicka här för att läsa mer om microneedling mot bristningar',

            consultation_url_label: 'Boka tid för konsultation',
            consultation_url: 'consultation-booking?problem=stretchmarks&service=microneedling',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för microneedling mot bristningar',

            booking_url_label: 'Boka tid för microneedling mot bristningar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/bristningsspecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/bristning-konsultation-1643922',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot bristningar behandling'
      ),
);

$articles = array(

      new Article(
            title: 'När ska jag söka hjälp med mina bristningar?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag söka hjälp med mina bristningar?',
            image_title: 'När ska jag söka hjälp med mina bristningar?',
            content: '<p class="p200">Bristningar är en av de vanligaste hudförändringarna som kan påverka både kvinnor och män, oavsett ålder. Även om de är helt ofarliga, kan bristningar orsaka självmedvetenhet och påverka ens självkänsla. Om du känner att dina bristningar stör dig estetiskt eller om du har försökt olika produkter och hemmabehandlingar utan framgång, kan det vara lämpligt att överväga professionell behandling.</p>
            <p class="p200 mt-m">En hudterapeut kan bedöma svårighetsgraden av dina bristningar, diskutera potentiella behandlingsalternativ och rekommendera den bästa metoden för just din situation. Oavsett om bristningarna är nya och röda eller gamla och vita, finns det behandlingsmetoder som kan förbättra hudens utseende. Om du känner att bristningarna påverkar hur du känner för din kropp, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att arbeta mot en hud du trivs med.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina bristningar?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina bristningar?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina bristningar?',
            content: '<p class="p200">Om du är ute efter en effektiv och långsiktig lösning på dina bristningar, är AcneSpecialisten det självklara valet. Med över 30 års erfarenhet inom hudvård och en särskild expertis i att behandla bristningar, är vi väl rustade att hjälpa dig. Oavsett om du har några få bristningar eller områden med mer omfattande bristningar, kan vi erbjuda en skräddarsydd behandling för dig.</p>
            <p class="p200 mt-m">Vi använder oss av de senaste behandlingsmetoderna och teknologierna inom hudvård för att ge dig bästa möjliga resultat. Vårt team av professionella hudterapeuter är redo att skapa en individuell behandlingsplan och stödja dig genom hela behandlingsprocessen. Med regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att dina bristningar förbättras avsevärt.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för dina bristningar. Men vårt engagemang sträcker sig längre än så. Vi ser dig som en partner på din hudvårdsresa och är dedikerade till att hjälpa dig uppnå och bibehålla en smidig och jämn hud. Vår passion, kunskap och långa erfarenhet gör oss till ditt bästa val när det gäller behandling av bristningar.</p>',
      ),

);


$results = array(
      new ResultCustomer(
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            image_alt: 'Resultat',
            image_title: 'Resultat',

            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne"">behandlingar mot akne</a>'
            ),
      ),
      new ResultCustomer(
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            image_alt: 'Resultat',
            image_title: 'Resultat',

            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>',
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

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om bristningar' => array(
            new Question(
                  title: 'Vilka är de vanligaste områdena på kroppen som är mer benägna att utveckla bristningar?',
                  text: '<p class="p200">Bristningar kan uppträda på olika delar av kroppen, men de vanligaste områdena där de uppträder är buken, brösten, höfterna, skinkorna och låren. Dessa områden är mer mottagliga för bristningar på grund av deras större potentiella tillväxt och utsträckning, särskilt under perioder som graviditet, snabb viktökning eller intensiv muskeltillväxt.</p>'
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
                  text: '<p class="p200">Ja, bristningarnas utseende kan förändras över tiden. När de först uppträder kan de vara röda, lila eller rosa, men med tiden bleknar de ofta till en ljusare, pärlemorfärg eller till en vit eller silveraktig nyans. Även om de inte helt försvinner kan de bli mindre framträdande över åren.</p>'
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
      'Behandling mot bristningar' => array(
            new Question(
                  title: 'Vilka behandlingsalternativ finns tillgängliga för bristningar?',
                  text: '<p class="p200">Det finns olika behandlingsalternativ för att ta itu med bristningar, bland dessa är laserterapi, kemisk peeling och microneedling de mest populära. Laserterapi fungerar genom att stimulera produktionen av kollagen och elastin i huden, vilket kan förbättra bristningens utseende. Kemisk peeling använder syror för att exfoliera det översta hudlagret, vilket kan minska synligheten av yngre bristningar. Microneedling, å andra sidan, skapar mikroskopiska sår i huden för att stimulera hudens naturliga läkningsprocess och öka kollagenproduktionen. Valet av behandlingsmetod beror på individens specifika behov, bristningens ålder och svårighetsgrad, samt andra faktorer. En konsultation med en hudterapeut rekommenderas för att bestämma den bästa behandlingsplanen.</p>'
            ),
            new Question(
                  title: 'Hur effektiv är laserbehandling för bristningar?',
                  text: '<p class="p200">Laserbehandling kan vara mycket effektivt för vissa typer av bristningar, särskilt de som är nyare och har en röd eller lila färg. Laserterapi fungerar genom att stimulera produktionen av kollagen och elastin i huden, vilket kan hjälpa till att återställa hudens struktur och minska utseendet av bristningarna. Äldre, blekta bristningar kan vara svårare att behandla med laser, men vissa förbättringar kan fortfarande ses. Som alltid är det viktigt att ha realistiska förväntningar och rådgöra med en hudterapeut för att bestämma den bästa behandlingsplanen.</p>'
            ),
            new Question(
                  title: 'Hur lång tid tar det att se resultat efter en bristningsbehandling?',
                  text: '<p class="p200">Tiden det tar att se resultat efter en bristningsbehandling kan variera beroende på typen av behandling och individens specifika hudkarakteristik. Generellt sett kan det ta flera veckor till månader innan fulla resultat syns, särskilt med behandlingar som stimulerar kollagenproduktionen som laser eller mikronålning. För vissa behandlingar, som mikrodermabrasion eller kemiska peelingar, kan man se snabbare förbättringar. Det är viktigt att följa alla eftervårdsinstruktioner och att ha tålamod eftersom hudförnyelse kan ta tid.</p>'
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

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter specialiserade på bristningar";

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

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av bristningar";

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
                        <?php if (sizeof($type_categories) > 0) { ?>
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
                                                                  include('../widgets/type-card/type-card.php');
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
                                                                        <?php include('../widgets/type-card/type-card-large.php') ?>
                                                                  </div>
                                                            <?php } ?>
                                                      </div>
                                                </div>
                                          <?php } ?>
                                    </div>
                                    <!--<?php echo $types_url ?>-->
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>