<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är finnar? - Orsaker, Behandling och Förebyggande | AcneSpecialisten';
$seo_description = 'Här hittar du allt om finnar och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'finnar, vad är finnar, orsaker till finnar, varför får man finnar, var finnar, varför finnar';

$title = 'Finnar';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem.php'),
      new PathSegment('Finnar', '/finnar.php'),
);

$image_small = 'bilder/problem/424x324/finnar.webp';
$image_large = 'bilder/problem/424x456/finnar.webp';
$image_title = 'Visar en hud med finnar';
$image_alt = 'Bild som illustrerar hur finnar kan se ut på huden';
$description = 'Finnar visar sig som röda eller gula inflammationer i huden. Denna sida förklarar vad finnar är, varför de uppstår och hur de skiljer sig från andra hudutslag.';

$akas = [
      new Link(
            label: 'Vuxenfinnar',
            url: 'vuxenfinnar.php',
            title: 'Utforska de vanligaste orsakerna, symptomen och behandlingsalternativen för finnar hos vuxna'
      ),
      new Link(
            label: 'Tonårsfinnar',
            url: 'tonarsfinnar.php',
            title: 'Komplett guide till tonårsfinnar: orsaker, förebyggande åtgärder och effektiva lösningar'
      ),
      new Link(
            label: 'Akne',
            url: 'acne.php',
            title: 'Allt du behöver veta om akne och de mest effektiva behandlingsmetoderna'
      )

];

$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis Konsultation mot Finnar";

$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Pimples";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka behandling mot finnar";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för finnar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka behandling för finnar";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för finnar";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka behandling mot finnar";

$nav_buttons = array(
      'about' => 'Om Finnar',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om Finnar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är finnar?',
            content: '<p class="p200">Finnar är små hudutslag som ofta ses som knottror eller bölder på huden. De bildas när hudens porer blir blockerade av talg och döda hudceller. Detta leder till en ansamling av bakterier och efterföljande inflammation. Denna process skapar de typiska utslagen vi känner igen som finnar, vilka kan variera i storlek, form och grad av rodnad eller smärta.</p>',
            extended_content: '<p class="p200 mt-xl">Denna hudåkomma är mest vanlig under tonåren på grund av de hormonella förändringarna som sker i kroppen, men den kan även påverka vuxna. Finnar presenterar sig i flera olika former, från lindriga tillstånd som svarta och vita pormaskar till mer intensiva utbrott som cystor och noduler. Oavsett graden av utbrott, är det möjligt att behandla finnar och minska risken för ärrbildning.</p>
            <p class="p200 mt-xl">På AcneSpecialisten erbjuder vi skräddarsydda behandlingslösningar för alla typer av finnar. Vår erfarna hudterapeuter använder sig av beprövade metoder för att ge dig den bästa möjliga hudvården. Genom en kostnadsfri hudkonsultation kartlägger vi dina specifika behov och utvecklar en personlig behandlingsplan. Vi tar även fram en hudvårdsrutin för hur du behandlar huden hemma, så att du kan upprätthålla en hälsosam hud och optimera dina behandlingsresultat.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man finnar?',
            content: '<p class="p200">Finnar är en hudåkomma som uppstår när talgkörtlar i huden överproducerar talg, ofta på grund av genetiska, hormonella, och miljömässiga faktorer. En viss mängd talg är essentiell för att huden ska förbli hälsosam, men ett överskott kan resultera i blockeringar av porerna. Dessa blockeringar, tillsammans med döda hudceller, skapar en gynnsam miljö för bakterietillväxt. Kroppens naturliga respons på denna bakterietillväxt är inflammation, vilket visar sig som finnar på huden.</p>',
            extended_content: '<p class="p200 mt-xl">Hormonella förändringar, särskilt under puberteten, kan leda till ökad talgproduktion, men även stress, vissa mediciner, och miljöfaktorer som varma, fuktiga klimat kan bidra. Livshändelser som graviditet, menstruation och klimakteriet, liksom användning av anabola steroider och vissa typer av preventivmedel, kan också påverka uppkomsten av finnar. Stress, både från större och mindre händelser, kan förvärra hudtillstånd genom att öka kroppens produktion av talg, vilket i sin tur kan leda till finnar.</p>
            <p class="p200 mt-xl">Att behandla finnar effektivt innebär att hantera talgproduktionen med lämpliga hudvårdsprodukter och regelbundna hudvårdsbehandlingar. Med rätt behandling kan finnar elimineras. På AcneSpecialisten har vi omfattande erfarenhet och expertis inom behandling av finnar. Vi hjälper dig att upprätthålla en balanserad talgproduktion för att minska risken för utbrott och förbättra hudens övergripande hälsa.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får finnar?',
            content: '<p class="p200">Finnar är mest förekommande hos tonåringar och unga vuxna, men personer i alla åldrar kan drabbas, oberoende av kön eller hudtyp. Under puberteten sker en ökning av könshormonerna, vilket kan orsaka en uppsjö av hudproblem, inklusive finnar. Dessa kan variera i allvarlighetsgrad från milda tillstånd med enstaka finnar till mer omfattande problem med både små och stora, smärtsamma bölder. Eftersom finnar ofta uppträder i ansiktet under en känslomässigt känslig period, kan de ha en negativ inverkan på självkänslan och psykiskt välbefinnande, vilket gör effektiv behandling avgörande för att förhindra ärr och andra hudskador.</p>',
            extended_content: '<p class="p200 mt-xl">Finnar är inte ett problem som enbart berör tonåringar. Även barn kan visa tecken på hudirritationer som liknar finnar, och vuxna kan uppleva utbrott som ofta relateras till hormonella förändringar eller stress. Hos kvinnor kan hormonella fluktuationer under graviditet, menstruationscykeln och klimakteriet bidra till vuxenacne, även känd som acne tarda. Användning av preventivmedel kan också ha en inverkan på hudens tillstånd, även om effekterna varierar från person till person.</p>
            <p class="p200 mt-xl">Att boka en kostnadsfri hudkonsultation hos AcneSpecialisten är ett första steg mot att hantera problem med finnar. Under konsultationen görs en noggrann bedömning av din hud, och du får skräddarsydda förslag på behandlingar samt en personlig hudvårdsrutin anpassad för din unika hudtyp. Detta är en viktig del i processen för att förebygga ytterligare hudproblem.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'barn' => 'Barn', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man finnar?',
            content: '<p class="p200">Finnar kan uppträda på många delar av kroppen och drabbar individer oavsett ålder eller hudtyp. De är vanligast i ansiktet men kan också förekomma på bröstet, axlarna och ryggen. Dessa områden är mer benägna att utveckla finnar på grund av en hög koncentration av talgkörtlar som kan leda till en överproduktion av talg, vilket i sin tur resulterar i tilltäppta porer och hudinflammationer.</p>',
            extended_content: '<p class="p200 mt-xl">Ansiktsfinnar är särskilt framträdande och kan ha en stor inverkan på en persons självkänsla och mentala välbefinnande, eftersom de är svårare att dölja. Tonåringar är ofta drabbade av detta under puberteten på grund av hormonella förändringar som stimulerar talgproduktionen. Vuxna, särskilt kvinnor, kan också uppleva ansiktsfinnar relaterade till hormonella förändringar under graviditet, menstruation och klimakteriet.</p>
            <p class="p200 mt-xl">Finnar på bröstet, axlarna och ryggen är också ett vanligt besvär och kan vara lika störande som ansiktsfinnar, även om de lättare kan döljas under kläder. Orsakerna är desamma som för ansiktsfinnar, men yttre faktorer såsom friktion från kläder eller väskor kan också bidra till problemet. För att effektivt behandla och förebygga finnar, oavsett var de uppstår på kroppen, är det viktigt att upprätthålla en anpassad hudvårdsrutin. Detta inkluderar rengöring, återfuktning och specifika behandlingar anpassade för din hudtyp. Konsultera en hudspecialist hos oss för att få råd om de mest lämpliga produkterna och behandlingarna för just dina behov, och för att minimera problem med finnar över hela kroppen.</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en hudterapeut som analyserar dina finnar och skapar en unik behandlingsplan.',
            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder målinriktade och effektiva behandlingar för dina finnar, anpassade efter din hudtyp och finnarnas svårighetsgrad.',
            url_label: 'Se behandlingar mot finnar',
            url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
            url_title: 'Utforska våra skräddarsydda behandlingar mot finnar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'För att hålla finnarna borta och din hud i balans erbjuder vi en personlig hudvårdsrutin och produkter som är särskilt anpassade för din hudtyp.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/finnar',
            url_title: 'Hitta de bästa produkterna för att förebygga finnar'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'Om finnarna har lämnat ärr eller annan skada, fokuserar vi på att reparera din hud med avancerade behandlingsmetoder.',
            url_label: 'Se ärrbehandlingar',
            url: 'behandla-finnar-arr.php',
            url_title: 'Upptäck effektiva behandlingar för ärr orsakade av finnar'
      ),
);

$treatment_link = '<a href="finnar-behandling.php" title="Utforska effektiva behandlingar mot finnar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot finnar</a>';

$types_title = 'Olika typer av Finnar';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Finnar baserat på ålder',
            content: '<p class="p200">Finnar är inte begränsade till en viss ålder och kan påverka både unga och vuxna. Tonårsfinnar är vanliga och orsakas ofta av hormonella förändringar under puberteten. Men även som vuxen kan man drabbas, och det kan relateras till olika faktorer såsom stress, kost och livsstil. Det är essentiellt att förstå att finnar kan påverka personer i olika skeden av livet.</p>',
            types: array(
                  new BasedType(
                        title: 'Vuxenfinnar',
                        subtitle: '20-65 års ålder',
                        image_url: 'bilder/symptom/102x102/vuxenfinnar.webp',
                        image_alt: 'Bild av finnar hos vuxna',
                        image_title: 'Finnar hos vuxna',
                        url: '/vuxenfinnar.php',
                        url_title: 'Utforska information om finnar hos vuxna'
                  ),
                  new BasedType(
                        title: 'Tonårsfinnar',
                        subtitle: '13-19 års ålder',
                        image_url: 'bilder/symptom/102x102/tonarsfinnar.webp',
                        image_alt: 'Bild av finnar hos tonåringar',
                        image_title: 'Finnar hos tonåringar',
                        url: '/tonarsfinnar.php',
                        url_title: 'Utforska information om finnar hos tonåringar'
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Finnar baserat på yttre faktorer',
            content: '<p class="p200">Externa faktorer kan kraftigt påverka uppkomsten av finnar. Sådana faktorer kan vara solens strålar, friktion mot huden, användning av kosmetika, vissa läkemedel och miljöpåverkan. Dessa kan bidra till utvecklingen eller förvärringen av finnar genom att irritera huden, täppa till porerna eller rubba hudens talgproduktion.</p>',
            types: array(
                  new BasedType(
                        title: 'Stress finnar',
                        subtitle: 'Finnar orsakat av stress',

                        image_url: 'bilder/symptom/102x102/stress-finnar.webp',
                        image_alt: 'Ansikte med stress finnar',
                        image_title: 'Exempel på stress finnar',

                        url: 'stress-finnar.php',
                        url_title: 'Lär dig mer om stress finnar',
                  ),
                  new BasedType(
                        title: 'Hormonella finnar',
                        subtitle: 'Finnar orsakad av hormoner',

                        image_url: 'bilder/symptom/102x102/hormonella-finnar.webp',
                        image_alt: 'Ansikte med hormonella finnar',
                        image_title: 'Exempel på hormonella finnar',

                        url: 'hormonell-acne.php',
                        url_title: 'Utforska mer om hur hormoner kan framkalla finnar',
                  ),
                  new BasedType(
                        title: 'Solfinnar',
                        subtitle: 'Acne aestivalis',

                        image_url: 'bilder/symptom/102x102/solfinnar.webp',
                        image_alt: 'Ansikte med solfinnar',
                        image_title: 'Exempel på solfinnar',

                        url: 'mallorca-acne.php',
                        url_title: 'Läs mer om hur solen kan orsaka solfinnar',
                  ),
                  new BasedType(
                        title: 'Inflammerade finnar',
                        subtitle: 'Acne pustulosa',

                        image_url: 'bilder/symptom/102x102/inflammerade-finnar.webp',
                        image_alt: 'Ansikte med inflammerade finnar',
                        image_title: 'Exempel på inflammerade finnar',

                        url: 'inflammation-acne.php',
                        url_title: 'Lär dig mer om inflammation akne',
                  ),
                  new BasedType(
                        title: 'Kosmetik finnar',
                        subtitle: 'Acne cosmetica',

                        image_url: 'bilder/symptom/102x102/kosmetik-finnar.webp',
                        image_alt: 'Ansikte med kosmetik finnar',
                        image_title: 'Exempel på kosmetik finnar',

                        //url: 'problem/akne/typer/kosmetika-akne',
                        //url_title: 'Lär dig mer om hur kosmetika kan ge akne',
                  ),
                  new BasedType(
                        title: 'Finnar från pillande',
                        subtitle: 'Acne exoriée ',

                        image_url: 'bilder/symptom/102x102/pill-finnar.webp',
                        image_alt: 'Ansikte med pill finnar',
                        image_title: 'Exempel på pill finnar',

                        //url: 'problem/akne/typer/acne-exoriee',
                        //url_title: 'Läs mer om hur pillande kan leda till akne',
                  ),
                  new BasedType(
                        title: 'Friktions finnar',
                        subtitle: 'Acne mechanica',

                        image_url: 'bilder/symptom/102x102/friktions-finnar.webp',
                        image_alt: 'Ansikte med friktions finnar',
                        image_title: 'Exempel på friktions finnar',

                        //url: 'problem/akne/typer/akne-mekanisk',
                        //url_title: 'Utforska mer om hur friktion kan orsaka akne',
                  ),
                  new BasedType(
                        title: 'Kontakt finnar',
                        subtitle: 'Acne venenata',

                        image_url: 'bilder/symptom/102x102/kontakt-akne.webp',
                        image_alt: 'Ansikte med kontakt finnar',
                        image_title: 'Exempel på kontakta finnar',

                        //url: 'problem/akne/typer/kontakt-akne',
                        //url_title: 'Utforska mer om hur direktkontakt kan påverka akne',
                  ),
                  new BasedType(
                        title: 'Svampfinnar',
                        subtitle: 'Fungal acne',

                        image_url: 'bilder/symptom/102x102/svamp-finnar.webp',
                        image_alt: 'Ansikte med svampfinnar',
                        image_title: 'Exempel på svampfinnar',

                        //url: 'problem/akne/typer/fungal-akne',
                        //url_title: 'Lär dig mer om hur svamp relateras till akne',
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Finnar baserat på område',
            content: '<p class="p200">Finnar kan framträda på olika delar av kroppen. Ansiktet är det vanligaste området, men finnar kan också uppstå på bröstet, ryggen, axlarna och andra delar av kroppen. Finnarnas placering kan ge en indikation på underliggande orsaker, såsom hormonella förändringar, irritation från kläder eller externa faktorer som sol och friktion.</p>',
            types: array(
                  new BasedType(
                        title: 'Finnar i ansiktet',
                        subtitle: 'Acne faciei',

                        image_url: 'bilder/symptom/102x102/finnar-ansikte.webp',
                        image_alt: 'Finnar i ansiktet',
                        image_title: 'Exempel på finnar i ansiktet',

                        url: 'finnar-ansikte.php',
                        url_title: 'Läs mer om finnar i ansiktet och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        title: 'Finnar på ryggen',
                        subtitle: 'Acne dorsalis',

                        image_url: 'bilder/symptom/102x102/finnar-rygg.webp',
                        image_alt: 'Finnar på ryggen',
                        image_title: 'Exempel på finnar på ryggen',

                        url: 'finnar-rygg.php',
                        url_title: 'Läs mer om finnar på ryggen och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        title: 'Finnar på bröstet',
                        subtitle: 'Acne pectoralis',

                        image_url: 'bilder/symptom/102x102/finnar-brost.webp',
                        image_alt: 'Finnar på bröstet',
                        image_title: 'Exempel på finnar på bröstet',

                        url: 'finnar-brost.php',
                        url_title: 'Läs mer om finnar på bröstet och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        title: 'Finnar runt munnen',
                        subtitle: 'Perioral dermatit',

                        image_url: 'bilder/problem/102x102/perioral-dermatit.webp',
                        image_alt: 'Finnar runt munnen',
                        image_title: 'Exempel på finnar runt munnen',

                        url: '/perioral-dermatit.php',
                        url_title: 'Läs mer om finnar runt munnen och möjliga behandlingar'
                  ),
            )
      ),


);

$symptoms_title = 'Finnar symptom';

$symptoms = array(
      new Symptom(
            name: 'Röda Finnar',
            aka: 'Papler',
            content: 'Kännetecknas av små, röda och inflammerade utslag orsakade av bakterieinfektioner i hårsäckarna, dessa blemmor är ömma vid beröring och förekommer främst i ansiktet, på nacken, bröstet och ryggen.',
            image: 'images/symptoms/102x102/papler.webp',
            image_alt: 'Röda finnar (papler) i ansiktet',
            image_title: 'Papler (Röda Finnar)',
            //url: 'problem/finnar/typer/atrophic-boxcar-scars',
            //url_title: 'Lär dig mer om röda finnar',
            //url_label: 'Mer information om papler'
      ),
      new Symptom(
            name: 'Gula Finnar',
            aka: 'Pustuler',
            content: 'Dessa är ömma, gula utslag med ett varigt centrum, skapade av en mix av bakterier och talg, och de tenderar att vara smärtsamma, framträdande på ansikte, nacke, bröst och rygg.',
            image: 'images/symptoms/102x102/pustler.webp',
            image_alt: 'Gula finnar (pustler) i ansiktet',
            image_title: 'Pustler (Gula Finnar)',
            //url: 'problem/finnar/typer/atrophic-rolling-scars',
            //url_title: 'Fler detaljer om gula finnar',
            //url_label: 'Utforska pustuler'
      ),
      new Symptom(
            name: 'Innåtfinnar / Inombordare',
            aka: 'Noduler',
            content: 'Djupa, smärtsamma utslag som bildas vid allvarliga infektioner i hårsäckarna, dessa är större än 5 mm och syns ofta på ansikte, bröst och rygg.',
            image: 'images/symptoms/102x102/noduler.webp',
            image_alt: 'Innåtfinnar (noduler) i ansiktet',
            image_title: 'Noduler (Innåtfinnar)',
            //url: 'problem/finnar/typer/hypertrophic-keloid',
            //url_title: 'Mer om innåtfinnar',
            //url_label: 'Utforska noduler'
      ),
      new Symptom(
            name: 'Bölder',
            aka: 'Cystor',
            content: 'Liknande noduler men fyllda med var, dessa djupa och ömma blemmor uppstår från allvarliga infektioner i hårsäckarna och kan vara både mjuka och fasta vid beröring, vanligtvis större än 5 mm och förekommer på ansikte, bröst och rygg.',
            image: 'images/symptoms/102x102/cystor.webp',
            image_alt: 'Bölder (cystor) i ansiktet',
            image_title: 'Bölder (cystor)',
            //url: 'problem/finnar/typer/hypertrophic-keloid',
            //url_title: 'Läs mer om bölder (cystor)',
            //url_label: 'Mer information om bölder'
      ),

);

$headline01 = "01. Identifiera dina finnar";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Möt en expert på finnar för en individuell konsultation. Under detta möte kommer en detaljerad analys av ditt hudproblem att utföras. Vi tar även bilder för att tydligt kunna se och jämföra dina resultat och rekommenderar en anpassad behandlingsplan som passar just din hud.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild som visar en konsultation för finnar',
      image_title: 'Konsultation för finnbehandling',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka här för att boka en tid för en konsultation om finnar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url_label: 'Läs mer om gratis hudkonsultation mot finnar',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot finnar',

);

$headline02 = "02. Behandla dina finnar";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot finnar',
            duration: '60 min',
            price: '995 kr',
            content: 'Vår ansiktsbehandling mot finnar är en effektiv lösning, noggrant framtagen för att extrahera orenheter som orsakar inflammation och skador på huden. Genom att varsamt ta bort finnar kan behandlingen hjälpa till att förebygga ärrbildning och främja snabbare läkning.',
            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling mot finnar',
            image_title: 'Ansiktsbehandling mot finnar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot finnar',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Pimples',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot finnar',
            url_label: 'Läs mer om ansiktsbehandling mot akne',
            url: '/portomning.php',
            url_title: 'Läs mer om ansiktsbehandling mot akne',
      ),
      new Service(
            title: 'Laserbehandling mot finnar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Bekämpa finnar med vår avancerade laserteknik! Genom att rikta sig mot bakterier som orsakar inflammation, minskar denna behandling risken för framtida utbrott och hjälper till att ge dig en jämnare och klarare hud.',
            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling mot finnar',
            image_title: 'Laserbehandling mot finnar för en klarare hud',
            consultation_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples&method=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka här för att boka tid för en hudkonsultation för laserbehandling mot finnar',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka här för att boka tid för en laserbehandling mot finnar',
            url: '/behandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser mot finnar',
            url_title: 'Läs mer om laser mot finnar',
      ),
      new Service(
            title: 'Kemisk peeling mot finnar',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla finnar. Genom att använda en speciellt framtagen syra för att exfoliera huden, främjar kemisk peeling cellförnyelse, rensar tilltäppta porer och minskar inflammation.',
            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling mot finnar',
            image_title: 'Kemisk peeling mot finnar behandling',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot finnar',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot finnar behandling',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling mot finnar',
            url_title: 'Läs mer om kemisk peeling mot finnar',
      ),

      new Service(
            title: 'Microneedling mot finnar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en effektiv behandlingsmetod mot finnar. Genom att skapa små mikroskopiska kanaler i huden, främjar denna behandling hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Metoden kan effektivt minska utbrott av finnar, förbättra hudens struktur och minska synligheten av ärr orsakade av finnar.',
            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling mot finnar',
            image_title: 'Microneedling mot finnar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot finnar',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot finnar',
            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling mot finnar',
            url_title: 'Läs mer om microneedling mot finnar',
      )


);

$headline03 = "03. Förebygg uppkomsten av nya finnar";

$products = array(
      new Service(
            title: 'Produkter mot finnar',
            duration: null,
            price: 'Pris från 1395 kr',
            content: 'Att effektivt bekämpa och förebygga finnar kräver regelbunden användning av de rätta produkterna. Våra hudvårdsprodukter har specialutformats för att balansera din hud och motverka uppkomsten av nya finnar..',
            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av finnar',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av finnar',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/finnar',
            url_label: 'Läs mer om våra produkter mot finnar',
            url_title: 'Klicka här för att läsa mer om våra effektiva produkter mot finnar'
      )
);


$headline04 = "04. Reparera ärr från finnar";

$procedures = array(
      new Service(
            title: 'Reparera ärr efter finnar',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Efter finnar kan det ibland uppstå ärr i form av gropar och fläckar på huden där finnarna tidigare varit. Dessa ärr kan vara i olika former och färger, och behandlas med olika metoder.',
            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Reparera ärr efter finnar',
            image_title: 'Reparera ärr efter finnar',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot ärr från finnar',

            booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_PimpleScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot ärr från finnar',

            url: 'behandla-finnar-arr.php',
            url_label: 'Läs mer om behandlingar mot ärr från finnar',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot ärr från finnar'
      ),

);
$articles = array(
      new Article(
            title: 'Varför AcneSpecialisten?!',
            image_small: null,
            image_large: null,
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Har du kämpat med finnar och provat allt utan att få långvariga resultat? Då är det dags att vända dig till oss på AcneSpecialisten. Med över 30 års erfarenhet av att arbeta med finnar, är vi specialister som vet exakt vilken process som krävs för att bli av med problemet. Många av våra kunder har tidigare försökt med olika behandlingar utan framgång. Det är här vi kommer in. Vi skräddarsyr behandlingar baserade på dina specifika behov och tillämpar en beprövad metod som faktiskt fungerar. Vi använder bara de bästa produkterna och behandlingarna som är anpassade för att bekämpa finnar och hjälper dig att uppnå en klar och frisk hud.</p>

            <p class="p200 mt-m">När du väljer AcneSpecialisten får du inte bara den mest effektiva behandlingen för ditt specifika fall, utan också en hudvårdspartner som stöttar dig genom hela processen. Vi tar ditt problem på allvar och vi tar oss tid att förstå din hudtyp och dina unika behov. Ta steget mot en finn-fri hud idag genom att boka en kostnadsfri konsultation hos oss. Vi har kunskapen och erfarenheten att hjälpa dig att nå dina hudvårdsmål. Låt oss visa dig varför AcneSpecialisten är ditt bästa val för att hantera och övervinna dina finnar!</p>',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Om du kämpar med finnar som påverkar ditt självförtroende eller om du har testat olika produkter och behandlingar utan att se några bestående resultat, då är det dags att söka hjälp hos AcneSpecialisten. Vår expertis sträcker sig över många år och vi förstår de unika utmaningar som finnar kan orsaka. Vi erbjuder en kostnadsfri konsultation där vi analyserar din hud och föreslår en individuell behandlingsplan som passar just dig. Vare sig du lider av lite eller mycket finnar, har AcneSpecialisten de verktyg och den kunskap som behövs för att hjälpa dig att uppnå en klarare och friskare hud. Tveka inte att ta steget mot en bättre hudhälsa genom att boka en gratis konsultation hos oss idag!</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat svår akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_title: 'Person som har akne',
            image_alt: 'Ansiktet på en person som behandlat akne, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_title: 'Person som har rosacea',
            image_alt: 'Ansiktet på en person som behandlat rosacea, före och efterbild',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);


$results_url_label = "Se fler resultat";
$results_url_title = "se flera behandlingsresultat av finnar";


$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Farväl finnar!',
            text: "Jag har länge kämpat med envisa finnar, men tack vare AcneSpecialisten är de nu borta. Kunde inte vara mer nöjd!",
            signature: 'Elin'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Finnar är ett minne blott',
            text: "Efter månader av behandlingar hos AcneSpecialisten är mina finnar äntligen borta. Personalen är proffsig, och resultaten talar för sig själva!",
            signature: 'Martin'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Inga mer finnar!',
            text: "Jag trodde aldrig jag skulle bli av med mina finnar, men behandlingarna här har verkligen gjort underverk. Rekommenderar starkt!",
            signature: 'Karin'
      ),

);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om finnar' => array(
            new Question(
                  title: 'Hur blir jag av med mina finnar snabbt?',
                  text: '<p class="p200">Att snabbt bli av med finnar innebär en kombination av rätt hudvård och livsstilsförändringar. Att använda produkter som är specifikt utformade för att bekämpa finnar. En personligt anpassad konsultation hos oss kan erbjuda en skräddarsydd plan som inte bara adresserar dina nuvarande finnar utan också hjälper till att förebygga nya utbrott, vilket ger dig en klarare hud snabbare än du kanske trodde var möjligt.</p>'
            ),
            new Question(
                  title: 'Är det en finne jag har, även om det bara är en?',
                  text: '<p class="p200">Ja, även en enskild finne anses vara en form av finnar. Enstaka finnar är lika mycket en del av finnarnas spektrum som ett fullblåst utbrott. Varje finne är ett tecken på att din hud reagerar på något, vare sig det är blockerade porer, överskott av olja, bakterier eller inflammation. Att behandla även enstaka finnar med lämplig vård kan hjälpa till att hålla huden i balans och förebygga framtida utbrott.</p>'
            ),
            new Question(
                  title: 'Bör jag klämma mina finnar?',
                  text: '<p class="p200">Att klämma finnar är en handling som bör undvikas eftersom det kan orsaka mer skada än nytta. När du klämmer finnar riskerar du att introducera bakterier i öppna sår, vilket kan leda till infektion och ärrbildning. Istället för att klämma, rekommenderar vi professionella behandlingar som säkert kan avlägsna finnar och behandla den underliggande orsaken utan att riskera din huds hälsa.</p>'
            ),
            new Question(
                  title: 'Försvinner finnarna efter ungdomsåren?',
                  text: '<p class="p200">Många upplever en förbättring i sin hud efter ungdomsåren, men det är inte en garanti för att finnar helt försvinner. Hormonella förändringar, livsstil och genetik spelar alla en roll i hur din hud beter sig genom olika livsfaser. För vissa fortsätter kampen mot finnar in i vuxenåldern, vilket gör kontinuerlig hudvård och behandling nödvändig. Tidig och effektiv behandling är avgörande för att minimera risken för ärr och långsiktiga hudproblem.</p>'
            ),
            new Question(
                  title: 'Kan vuxna få finnar?',
                  text: '<p class="p200">Absolut, finnar är inte bara ett problem för tonåringar. Många vuxna upplever vad som ofta kallas "vuxenakne", som kan orsakas av allt från hormonella förändringar, stress, viss medicinering, till olämplig hudvård. Det är viktigt för vuxna som upplever finnar att inte avfärda det som ett övergående problem utan att söka lämplig vård och behandling för att hantera tillståndet effektivt.</p>'
            ),
            new Question(
                  title: 'Förvärrar choklad mina finnar?',
                  text: '<p class="p200">Även om det finns en utbredd uppfattning, saknas vetenskapligt stöd för att chokladkonsumtion direkt leder till finnar. Faktorer som stress kan däremot ha en inverkan på din hud. Om stress orsakad av chokladätande påverkar dig, kan detta indirekt bidra till utvecklingen av finnar. Att njuta av choklad i måttliga mängder är dock inget som orsakar finnar.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra för att bli av med mina finnar?',
                  text: '<p class="p200">Att hantera finnar framgångsrikt kräver en omfattande strategi som inkluderar både behandlingar och hudvårdsprodukter. Vi erbjuder personliga hudkonsultationer för att utarbeta en behandlingsplan skräddarsydd för dina specifika behov och mål, vilket hjälper dig att uppnå och bibehålla en klar hud.</p>'
            ),

      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till finnar";

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
$skinguide_url_title = "Läs fler guider om finnar";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i finnar och hudvård',
            image_title: 'Cazzandra Lindberg - Expert på behandling av finnar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på finnar',
            image_title: 'Veronika Benedik - Specialist inom vården av finnar'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom behandling av finnar',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på finnar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av finnar',
            image_title: 'Vilma Libom - Expert inom behandling av finnar'
      )
);


$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Ärr från finnar',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar ärr efter finnar, en typ av hudproblem som ofta följer efter acne',
            image_title: 'ärr från finnar - en vanlig följd av akne',
            url: 'acnearr.php',
            url_title: 'Acneärr'
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
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
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
$brands_url_title = "Varumärken för Aknebehandling";

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