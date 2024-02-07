<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Akne - Orsaker, Behandling och Förebyggande | AcneSpecialisten';
$seo_description = 'Lär dig allt om akne, från dess orsaker till hur man behandlar och förebygger det. Skräddarsydda lösningar och expertis från AcneSpecialisten.';
$seo_keywords = 'akne, orsaker till akne, varför får man akne, var akne, varför akne';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'bilder/problem/424x456/akne.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem.php'),
      new PathSegment('Akne', '/acne.php'),
);

$title = 'Akne';

$image_small = 'bilder/problem/424x324/akne.webp';
$image_large = 'bilder/problem/424x456/akne.webp';
$image_title = 'Akne';
$image_alt = 'Närbild på ett ansikte som har akne';
$description = 'Här förklarar vi vad som kännetecknar akne, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av akne, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Finnar',
            url: 'finnar.php',
            title: 'Allt du behöver veta om finnar och deras behandling'
      ),
      new Link(
            label: 'Vuxenakne',
            url: 'vuxenacne.php',
            title: 'Utforska orsaker, symptom och behandlingar av vuxenakne'
      ),
      new Link(
            label: 'Tonårsakne',
            url: 'tonarsacne.php',
            title: 'Komplett guide om tonårsakne: orsaker, förebyggande och lösningar'
      ),
];

$consultation_url_label = "Boka gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne";
$consultation_url_title = "Boka gratis konsultation för Akne";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne";
$booking_url_title = "Boka Aknebehandling";

$mobile_consultation_url_label = "Boka gratis konsultation";
$mobile_consultation_url_title = "Boka gratis konsultation för Akne";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Aknebehandling";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Boka gratis konsultation för Akne";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Aknebehandling";

$nav_buttons = array(
      'about' => 'Om akne',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'Varför AS?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'Fragor & svar',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om akne';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är akne?',
            content: '<p class="p200">Akne är en ärftlig och hormonell hudförändring som uppstår när talgproduktionen i hudens porer ökar. Huden behöver en viss mängd talg för att hålla sig mjuk och smidig, men vid överproduktion har huden svårt att avlägsna hudrester, vilket leder till bakterier och små inflammationer. Dessa inflammationer orsakar akne, eller finnar som vi ofta säger i dagligt tal. Akne är en inflammation i huden som uppstår när porerna täpps till av talg, döda hudceller och bakterier.</p>',
            extended_content: '<p class="p200 mt-xl">Både barn och vuxna kan drabbas av akne, men det är vanligast under tonåren. Vissa har besvär med akne under längre perioder, medan andra endast vid enstaka tillfällen. Akne kan se ut på många olika sätt, från små knottror på huden till variga större bölder. Det viktiga att komma ihåg är att akne kan behandlas. Ibland krävs behandling under en längre tidsperiod, men med rätt behandling kan både bestående ärrbildning och psykiskt lidande undvikas eller lindras.</p>
            <p class="p200 mt-xl">På Acnespecialisten kan du få hjälp med din akne. Vi har kunskap och erfarenhet av olika typer av behandlingar som ger goda resultat och många nöjda kunder. Vi börjar alltid med en kostnadsfri hudkonsultation där vi identifierar din akne och planerar den mest lämpliga behandlingen för dig och din hy. Du får även en effektiv hudvårdsrutin som du enkelt kan följa hemma.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man akne?',
            content: '<p class="p200">Akne är en hudåkomma som beror på en kombination av genetiska, hormonella och miljömässiga faktorer. En normal talgproduktion är nödvändig för att huden ska må bra, men när huden överproducerar talg kan detta leda till akne. Detta beror bland annat på anlag man har ärvt från sina föräldrar. Vid en överproduktion av talg klarar porerna inte av att ta hand om överflödet, och tillsammans med hudrester täpps pormynningarna till, vilket leder till att bakterier samlas. Kroppen försvarar sig då med en inflammation, och det är just detta som syns på huden i form av akne.</p>',
            extended_content: '<p class="p200 mt-xl">Hormoner får porerna i huden att överproducera talg. Det är vanligt att drabbas av akne under puberteten, när kroppen genomgår stora förändringar, men även små barn och vuxna kan få akne. Flera faktorer kan orsaka och försämra akne, såsom stress, vissa läkemedel, varma och fuktiga miljöer samt hormonförändringar vid graviditet, menstruation och klimakteriet. Även anabola steroider och p-piller kan orsaka akne. Stress påverkar ofta huden mer än vi kanske tror, och både stora och små händelser i livet kan öka kroppens stressnivå och orsaka hudförändringar i form av hormonell akne.</p>
            <p class="p200 mt-xl">För att behandla akne är det viktigt att balansera kroppens talgproduktion med rätt hudvårdsprodukter och hållbara hudvårdsrutiner. Successivt kan aknen antingen bli mycket bättre eller helt försvinna. Vi som arbetar på Acnespecialisten har lång erfarenhet och stor kunskap av aknebehandlingar och kan hjälpa dig att hålla kroppens naturliga produktion av talg på en optimal nivå och på så sätt reducera dina besvär med akne.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'stress' => 'Stress', 'klimat' => 'Klimat', 'graviditet' => 'Graviditet')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får akne?',
            content: '<p class="p200">Akne är vanligast bland tonåringar och unga vuxna, men det kan drabba människor i alla åldrar, oavsett kön och hudtyp. I puberteten ökar produktionen av könshormoner, vilket kan leda till akne vulgaris, även kallad tonårsakne. Denna form av akne kan variera från enstaka finnar till större besvär, med små gula eller röda utslag, stora och smärtsamma bölder. Eftersom akne oftast uppträder i ansiktet under en känslig period som tonåren, kan det påverka det mentala måendet och det är viktigt att behandla akne effektivt för att undvika ärrbildning och andra skador på huden.</p>',
            extended_content: '<p class="p200 mt-xl">Akne drabbar inte bara tonåringar. Spädbarn och småbarn kan drabbas av lindriga former av akne, såsom akne neonatorum och akne infantum. Vuxenakne, kallad akne tarda, kan också uppstå om huden överproducerar talg. Kvinnor drabbas oftare av vuxenakne än män, eftersom de påverkas mer av hormonsvängningar under graviditet, mens och klimakteriet. Preventivmedel kan också påverka huden, men hur de påverkar varierar från individ till individ.</p>
            <p class="p200 mt-xl">Yttre faktorer som stress och alkohol kan också påverka akne, både hos tonåringar och vuxna. För att behandla akne rekommenderas att boka en kostnadsfri hudkonsultation hos AcneSpecialisten. Där görs en bedömning av din hud och du får förslag på behandlingar samt en personlig hudvårdsrutin anpassad efter din hudtyp. Detta hjälper dig att motverka ytterligare problem med akne.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'barn' => 'Barn', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man akne?',
            content: '<p class="p200">Akne kan uppstå på flera delar av kroppen och påverka personer i olika åldrar och med olika hudtyper. Vanligast är att akne drabbar ansiktet, men det kan även förekomma på andra områden som bröstet, axlarna och ryggen. Placeringen av akne beror på var talgkörtlarna är aktiva och därmed kan överproducera talg, vilket leder till tilltäppta porer och inflammationer i huden.</p>',
            extended_content: '<p class="p200 mt-xl">Akne i ansiktet är särskilt påtagligt, eftersom det är svårt att dölja och ofta påverkar en persons självkänsla och mentala välbefinnande. Det är vanligt att tonåringar drabbas av ansiktsakne under puberteten, då hormonella förändringar kan leda till ökad talgproduktion. Även vuxna kan drabbas av ansiktsakne, särskilt kvinnor som genomgår hormonella förändringar under graviditet, mens och klimakteriet.</p>
            <p class="p200 mt-xl">Akne på bröstet, axlarna och ryggen är också vanligt och kan vara lika besvärande som ansiktsakne, även om det är lättare att dölja under kläder. Denna typ av akne kan orsakas av samma faktorer som ansiktsakne, men även av yttre faktorer som friktion från kläder eller väskor som gnider mot huden och skapar irritation. För att behandla och förebygga akne oavsett var på kroppen det uppstår, är det viktigt att följa en anpassad hudvårdsrutin, inklusive rengöring, återfuktning och aknebehandlingar som passar din hudtyp. Konsultera hos en av våra hudspecialister för att få råd om vilka produkter och behandlingar som är bäst lämpade för din specifika situation och för att minimera akneproblem på olika delar av kroppen.</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din aknetyp och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför grundliga och effektiva aknebehandlingar anpassade för din specifika aknetyp, så att du snabbt och säkert blir av med problemet.',

            url_label: 'Se aknebehandlingar',
            url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Acne',
            url_title: 'Utforska våra skräddarsydda aknebehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny akne och hålla din hud i balans.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            url_title: 'Hitta de bästa produkterna för att förebygga akne'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När aknen är borta fokuserar vi på att reducera eventuella ärr med behandlingsmetoder som laser, microneedling och kemisk peeling för en jämn och problemfri hud.',

            url_label: 'Se ärrbehandlingar',
            url: 'behandla-acnearr.php',
            url_title: 'Upptäck effektiva behandlingar för akneärr'
      ),

);
$treatment_link = '<a href="acnebehandling.php" title="Utforska effektiva aknebehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra aknebehandlingar</a>';

$types_title = 'Olika typer av akne';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Akne baserat på ålder',
            content: '<p class="p200">Akne är en hudåkomma som kan drabba både ungdomar och vuxna, även om det är vanligast under tonåren. Tonårsakne uppstår ofta på grund av hormonella förändringar under puberteten. Hos vuxna kan akne orsakas av faktorer som stress, hormonobalans och genetik. Oavsett ålder är det viktigt att förstå att akne kan påverka människor i alla livsstadier.</p>',
            types: array(
                  new BasedType(
                        title: 'Tonårsakne',
                        subtitle: 'Acne vulgaris',

                        image_url: 'bilder/symptom/102x102/tonarsakne.webp',
                        image_alt: 'Bild av tonårsakne',
                        image_title: 'Akne hos tonåringar',

                        url: 'tonarsacne.php',
                        url_title: 'Utforska information om tonårsakne'
                  ),
                  new BasedType(
                        title: 'Vuxenakne',
                        subtitle: 'Acne tarda',

                        image_url: 'bilder/symptom/102x102/vuxenakne.webp',
                        image_alt: 'Bild av vuxenakne',
                        image_title: 'Akne hos vuxna',

                        url: 'vuxenacne.php',
                        url_title: 'Utforska information om vuxenakne'
                  ),
                  new BasedType(
                        title: 'Barnakne',
                        subtitle: 'Acne neonatorum',

                        image_url: 'bilder/symptom/102x102/barnakne.webp',
                        image_alt: 'Bild av barnakne',
                        image_title: 'Akne hos barn',

                        //url: 'problem/akne/typer/barnakne',
                        //url_title: 'Utforska information om barnakne'
                  ),

            )
      ),
      new BasedTypeCategory(
            title: 'Akne baserat på svårighetsgrad',
            content: '<p class="p200">Akne kan variera i svårighetsgrad från milda till extremt allvarliga fall. I milda fall av akne är symptomen ofta mindre uttalade och består främst av pormaskar, medan mer allvarliga fall innefattar djupare inflammationer i form av cystor och noduler. Svårighetsgraden påverkar också hur akne påverkar en persons livskvalitet och hur den ska behandlas. Det är viktigt att diagnostisera och behandla akne utifrån dess svårighetsgrad för att säkerställa bästa möjliga behandlingsresultat och förhindra potentiella ärr och bestående skador på huden.</p>',
            types: array(
                  new BasedType(
                        title: 'Mild akne',
                        subtitle: 'Acne comedonica',

                        image_url: 'bilder/symptom/102x102/mild-akne.webp',
                        image_alt: 'Bild av mild akne',
                        image_title: 'Mild akne exemplifierad',

                        //url: 'problem/akne/typer/mild-akne',
                        //url_title: 'Utforska mer information om mild akne'
                  ),
                  new BasedType(
                        title: 'Medelsvår akne',
                        subtitle: 'Acne papulopustulosa',

                        image_url: 'bilder/symptom/102x102/medelsvar-akne.webp',
                        image_alt: 'Bild av medelsvår akne',
                        image_title: 'Medelsvår akne exemplifierad',

                        //url: 'problem/akne/typer/medel-akne',
                        //url_title: 'Utforska mer information om medelsvår akne'
                  ),
                  new BasedType(
                        title: 'Svår akne',
                        subtitle: 'Acne nodulocystica',

                        image_url: 'bilder/symptom/102x102/svar-akne.webp',
                        image_alt: 'Bild av svår akne',
                        image_title: 'Svår akne exemplifierad',

                        //url: 'problem/akne/typer/svar-akne',
                        //url_title: 'Utforska mer information om svår akne'
                  ),
                  new BasedType(
                        title: 'Mycket svår akne',
                        subtitle: 'Acne conglobata',

                        image_url: 'bilder/symptom/102x102/mycket-svar-akne.webp',
                        image_alt: 'Bild av mycket svår akne',
                        image_title: 'Mycket svår akne exemplifierad',

                        //url: 'problem/akne/typer/mycket-svar-akne',
                        //url_title: 'Utforska mer information om mycket svår akne'
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Akne baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer kan också påverka uppkomsten av akne. Exempel på dessa är sol, friktion, kosmetika, mediciner och miljöfaktorer. Dessa kan bidra till eller förvärra akne genom att irritera huden, täppa till porer eller påverka hudens talgproduktion.</p>',
            types: array(
                  new BasedType(
                        title: 'Stress acne',
                        subtitle: 'Acne orsakat av stress',

                        image_url: 'bilder/symptom/102x102/stress-akne.webp',
                        image_alt: 'Bild av stress akne',
                        image_title: 'Exempel på stress akne',

                        url: 'stress-acne.php',
                        url_title: 'Lär dig mer om stress akne',
                  ),
                  new BasedType(
                        title: 'Hormonell akne',
                        subtitle: 'Akne orsakad av hormoner',

                        image_url: 'bilder/symptom/102x102/hormonell-akne.webp',
                        image_alt: 'Bild av hormonell akne',
                        image_title: 'Exempel på hormonell akne',

                        url: 'hormonell-acne.php',
                        url_title: 'Utforska mer om hur hormoner kan framkalla akne',
                  ),
                  new BasedType(
                        title: 'Mallorca akne',
                        subtitle: 'Acne aestivalis',

                        image_url: 'bilder/symptom/102x102/mallorca-akne.webp',
                        image_alt: 'Bild av Mallorca akne',
                        image_title: 'Exempel på Mallorca akne',

                        url: 'mallorca-acne.php',
                        url_title: 'Läs mer om hur solen kan orsaka Mallorca akne',
                  ),
                  new BasedType(
                        title: 'Inflammerad Akne',
                        subtitle: 'Acne pustulosa',

                        image_url: 'bilder/symptom/102x102/inflammerad-akne.webp',
                        image_alt: 'Bild av inflammation akne',
                        image_title: 'Exempel på inflammation akne',

                        url: 'inflammation-acne.php',
                        url_title: 'Lär dig mer om inflammation akne',
                  ),
                  new BasedType(
                        title: 'Kosmetika akne',
                        subtitle: 'Acne cosmetica',

                        image_url: 'bilder/symptom/102x102/kosmetika-akne.webp',
                        image_alt: 'Bild av kosmetika akne',
                        image_title: 'Exempel på kosmetika akne',

                        //url: 'problem/akne/typer/kosmetika-akne',
                        //url_title: 'Lär dig mer om hur kosmetika kan ge akne',
                  ),
                  new BasedType(
                        title: 'Akne från pillande',
                        subtitle: 'Acne exoriée ',

                        image_url: 'bilder/symptom/102x102/pill-akne.webp',
                        image_alt: 'Bild av pill akne',
                        image_title: 'Exempel på pill akne',

                        //url: 'problem/akne/typer/acne-exoriee',
                        //url_title: 'Läs mer om hur pillande kan leda till akne',
                  ),
                  new BasedType(
                        title: 'Friktionsakne',
                        subtitle: 'Acne mechanica',

                        image_url: 'bilder/symptom/102x102/friktions-akne.webp',
                        image_alt: 'Bild av friktions akne',
                        image_title: 'Exempel på friktions akne',

                        //url: 'problem/akne/typer/akne-mekanisk',
                        //url_title: 'Utforska mer om hur friktion kan orsaka akne',
                  ),
                  new BasedType(
                        title: 'Kontaktakne',
                        subtitle: 'Acne venenata',

                        image_url: 'bilder/symptom/102x102/kontakt-akne.webp',
                        image_alt: 'Bild av kontaktakne',
                        image_title: 'Exempel på kontaktakne',

                        //url: 'problem/akne/typer/kontakt-akne',
                        //url_title: 'Utforska mer om hur direktkontakt kan påverka akne',
                  ),
                  new BasedType(
                        title: 'Svampakne',
                        subtitle: 'Fungal acne',

                        image_url: 'bilder/symptom/102x102/svamp-akne.webp',
                        image_alt: 'Bild av svampakne',
                        image_title: 'Exempel på svampakne',

                        //url: 'problem/akne/typer/fungal-akne',
                        //url_title: 'Lär dig mer om hur svamp relateras till akne',
                  ),
                  
            )
      ),
      new BasedTypeCategory(
            title: 'Akne baserat på område',
            content: '<p class="p200">Akne kan uppträda på olika områden på kroppen. Ansiktet är det vanligaste området, men akne kan också förekomma på bröst, rygg, axlar och andra delar av kroppen. Placeringen av akne kan ge en indikation på dess orsak, som hormonella förändringar, irritation från kläder eller yttre faktorer som sol och friktion.</p>',
            types: array(
                  new BasedType(
                        title: 'Akne i ansiktet',
                        subtitle: 'Acne faciei',

                        image_url: 'bilder/symptom/102x102/akne-ansikte.webp',
                        image_alt: 'Bild av akne i ansiktet',
                        image_title: 'Exempel på akne i ansiktet',

                        url: 'acne-ansikte.php',
                        url_title: 'Läs mer om akne i ansiktet och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        title: 'Akne på ryggen',
                        subtitle: 'Acne dorsalis',

                        image_url: 'bilder/symptom/102x102/akne-rygg.webp',
                        image_alt: 'Bild av akne på ryggen',
                        image_title: 'Exempel på akne på ryggen',

                        url: 'acne-rygg.php',
                        url_title: 'Läs mer om akne på ryggen och dess potentiella behandlingar'
                  ),
                  new BasedType(
                        title: 'Akne på bröstet',
                        subtitle: 'Acne pectoralis',

                        image_url: 'bilder/symptom/102x102/akne-brost.webp',
                        image_alt: 'Bild av akne på bröstet',
                        image_title: 'Exempel på akne på bröstet',

                        url: 'acne-brost.php',
                        url_title: 'Läs mer om akne på bröstet och dess potentiella behandlingar'
                  ),

            )
      )

);

$symptoms_title = 'Akne symptom';

$symptoms = array(
      new Symptom(
            name: 'Öppna komedoner',
            aka: 'Svarta pormaskar',
            content: 'Svarta pormaskar är små, mörka prickar som uppstår när en por täpps igen av talg och döda hudceller. De är ofta svarta eller bruna på grund av oxidation, som inträffar när melanin, hudens pigment kommer i kontakt med luft. Pormaskar kan vara platta eller lätt upphöjda och är vanligt förekommande på näsan, kinderna och panna.',

            url_label: 'Läs mer om öppna komedoner',
            url: 'svarta-pormaskar.php',
            url_title: 'Läs mer om Svarta pormaskar (svarta pormaskar)',

            image: 'bilder/symptom/102x102/komedoner-oppna.webp',
            image_alt: 'Ansikte med öppna komedoner (svarta pormaskar)',
            image_title: 'Öppna komedoner (svarta pormaskar)'
      ),
      new Symptom(
            name: 'Stängda komedoner',
            aka: 'Vita pormaskar',
            content: 'Vita pormaskarär små, vita eller hudfärgade utbuktningar som uppstår när en por täpps till av talg och döda hudceller under hudytan. De är täckta av ett tunt lager hud, vilket förhindrar oxidation och därmed behåller sin ljusa färg. Whiteheads kan vara platta eller lätt upphöjda och är vanligt förekommande på pannan och kinderna.',

            url_label: 'Läs mer om stängda komedoner',
            url: 'vita-pormaskar.php',
            url_title: 'Läs mer om stängda komedoner (vita pormaskar)',

            image: 'bilder/symptom/102x102/komedoner-stangda.webp',
            image_alt: 'Ansikte med stängda komedoner (vita pormaskar)',
            image_title: 'Stängda komedoner (vita pormaskar)'
      ),
      new Symptom(
            name: 'Papler',
            aka: 'Röda finnar',
            content: 'Papuler är små, fasta, röda och inflammerade blemmor som uppstår när en hårsäck blir infekterad av bakterier, oftast Cutibacterium acnes. De är vanligtvis mindre än 5 mm i diameter och kan vara känsliga vid beröring. Papuler är vanligt förekommande på ansiktet, nacken, bröstet och ryggen.',

            //url_label: 'Läs mer om papler',
            //url: 'problem/akne/typer/atrophic-boxcar-scars',
            //url_title: 'Läs mer om papler (röda finnar)',

            image: 'bilder/symptom/102x102/papler.webp',
            image_alt: 'Ansikte med papler (röda finnar)',
            image_title: 'Papler (röda finnar)'
      ),
      new Symptom(
            name: 'Pustler',
            aka: 'Gula finnar',
            content: 'Pustuler är gula och inflammerade blemmor som innehåller var som är en blandning av bakterier, talg och döda hudceller. De ser ut som papuler men har en vit eller gul prick i mitten. Pustler kan vara smärtsamma och är vanligt förekommande på ansiktet, nacken, bröstet och ryggen.',

            //url_label: 'Läs mer om pustler',
            //url: 'problem/akne/typer/atrophic-rolling-scars',
            //url_title: 'Läs mer om pustler (gula finnar)',

            image: 'bilder/symptom/102x102/pustler.webp',
            image_alt: 'Ansikte med pustler (gula finnar)',
            image_title: 'Pustler (gula finnar)'
      ),
      new Symptom(
            name: 'Noduler',
            aka: 'Innåtfinnar',
            content: 'Noduler är större, djupare och ofta smärtsamma inflammerade blemmor som uppstår när en hårsäck blir kraftigt infekterad och inflammationen sprider sig till det omgivande vävnaden. De är vanligtvis större än 5 mm i diameter och kan vara fasta och ömma vid beröring. Noduler är vanligt förekommande på ansiktet, bröstet och ryggen.',

            //url_label: 'Läs mer om noduler',
            //url: 'problem/akne/typer/hypertrophic-keloid',
            //url_title: 'Läs mer om noduler (innåtfinnar)',

            image: 'bilder/symptom/102x102/noduler.webp',
            image_alt: 'Ansikte med noduler (innåtfinnar)',
            image_title: 'Noduler (innåtfinnar)'
      ),
      new Symptom(
            name: 'Cystor',
            aka: 'Bölder',
            content: 'Cystor är stora, inflammerade och smärtsamma blemmor som är fyllda med var och bildas när en hårsäck blir mycket infekterad och inflammationen sprider sig djupt in i huden. De kan vara runda och mjuka eller fasta och ömma vid beröring. Cystor kan vara större än 5 mm i diameter och är vanligt förekommande på ansiktet, bröstet och ryggen.',

            //url_label: 'Läs mer om cystor',
            //url: 'problem/akne/typer/hypertrophic-keloid',
            //url_title: 'Läs mer om cystor (bölder)',

            image: 'bilder/symptom/102x102/cystor.webp',
            image_alt: 'Ansikte med cystor (bölder)',
            image_title: 'Cystor (bölder)'
      ),
);

$headline01 = "01. Identifiera din akne";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en acnespecialist utförs en undersökning av din akne. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Kvinna som får konsultation för aknebehandling',
      image_title: 'Konsultation för aknebehandling',

      url_label: 'Läs mer om gratis hudkonsultation mot akne',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot akne',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för akne',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla aktiv akne";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot akne',
            duration: '60 min',
            price: '995 kr',
            content: 'En effektiv ansiktsbehandling mot akne fokuserar på att noggrant extrahera orenheter som orsakar inflammation och skador i huden. Genom att försiktigt klämma ut akne och pormaskar kan behandlingen bidra till att förebygga ärrbildning och främja en snabbare läkning.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Kvinna som får ansiktsbehandling mot akne',
            image_title: 'Ansiktsbehandling mot akne',

            url_label: 'Läs mer om ansiktsbehandling mot akne',
            url: 'behandlingar/ansiktsbehandlingar-problemhy/ansiktsbehandlingar-akne.php',
            url_title: 'Läs mer om ansiktsbehandling mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Acne',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot akne',
      ),
      new Service(
            title: 'Laser mot akne',
            duration: '50 min',
            price: '2595 kr',
            content: 'En avancerad laserbehandling mot akne erbjuder en effektiv lösning för att bekämpa aktiv akne. Lasertekniken riktar sig mot de bakterier som orsakar inflammation och hjälper till att minska produktionen av talg, vilket minskar risken för framtida akne utbrott.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Kvinna som får laserbehandling mot akne',
            image_title: 'Laserbehandling mot akne',

            url_label: 'Läs mer om laser mot akne',
            url: 'laser-acne.php',
            url_title: 'Läs mer om laser mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot akne',
      ),
      new Service(
            title: 'Kemisk peeling mot akne',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla akne. Genom att använda en speciellt framtagen syra för att exfoliera huden, främjar kemisk peeling cellförnyelse, rensar tilltäppta porer och minskar inflammation.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Man som får kemisk peeling mot akne',
            image_title: 'Kemisk peeling mot akne behandling',

            url_label: 'Läs mer om kemisk peeling mot akne',
            url: 'kemisk-peeling-acne.php',
            url_title: 'Läs mer om kemisk peeling mot akne',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot akne',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Acne',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot akne',

      ),

      new Service(
            title: 'Microneedling mot akne',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en innovativ behandlingsmetod för akne. Detta utförs genom att skapa små mikroskopiska kanaler i huden vilket främjar hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Denna behandling kan effektivt behandla utbrott av akne, förbättra hudens struktur och minska synligheten av akneärr.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Kvinna som får microneedling mot akne',
            image_title: 'Microneedling mot akne behandling',

            url_label: 'Läs mer om microneedling mot akne',
            url: 'microneedling-acne.php',
            url_title: 'Läs mer om microneedling mot akne',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Acne',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot akne',
      ),
);

$headline03 = "03. Förebygg uppkomsten av ny akne";

$products = array(
      new Service(
            title: 'Produkter mot akne',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt bekämpa och förebygga akne är daglig behandling med rätt produkter och rutiner avgörande. Våra akneprodukter är speciellt utformade för att hålla din hud i balans och förhindra att ny akne uppstår.',

            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Produkter designade för behandling av akne',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av akne',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot akne',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            booking_url_title: 'Klicka för att köpa produktpaket mot akne',
      )
);

$headline04 = "04. Reparera post-akne (acneärr)";

$procedures = array(
      new Service(
            title: 'Reparera acneärr',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Efter aktiv akne kan man uppleva post-akne, vilket innebär ärr i form av gropar i olika former och fläckar i olika färger på huden där aknen tidigare varit. Olika typer av ärr behandlas med olika metoder. Klicka här för att läsa mer om hur du kan reparera din hud och ta hand om post-akne.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Kvinna som får behandling mot acneärr',
            image_title: 'Reparera acneärr',

            url_label: 'Läs mer om behandling mot akneärr',
            url: 'behandla-acnearr.php',
            url_title: 'Läs mer om behandling mot akneärr',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot akne',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_AcneScars',
            booking_url_title: 'Klicka för att boka tid för behandling mot akneärr',

      ),
);
$articles = array(
      new Article(
            title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Du som vill ha det som är bäst mot akne bör välja AcneSpecialisten eftersom vi är experter på att behandla akne och har över 30 års erfarenhet av att ha arbetat med olika typer av akne. Vi lever upp till vårt namn genom att erbjuda personlig och professionell hjälp för att hjälpa dig att uppnå en klar och frisk hud. Vi skräddarsyr behandlingar baserade på dina individuella problem och behov, vi rekommenderar de bästa akneprodukterna för att förebygga och behandla din hud och akne. </p>
            <p class="p200 mt-m">Genom att välja Acnespecialisten får du den mest effektiva behandlingen för ditt specifika fall och en hudvårdspartner som stöttar dig genom hela processen.</p>',

            image_small: null,
            image_large: null,
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Du bör besöka Acnespecialisten när du känner att din akne påverkar din livskvalitet eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar och resultat. Ju tidigare du söker hjälp, desto större är chansen att undvika ärrbildning och långvariga hudproblem. Acnespecialisten är här för att erbjuda dig expertis och skräddarsydda behandlingar oavsett om du har lindrig, måttlig eller svår akne. Tveka inte att kontakta oss för att boka en kostnadsfri konsultation och ta det första steget mot en klarare och friskare hud.</p>
            <p class="p200 mt-m">Välj Acnespecialisten innan du går till en läkare, eftersom vi erbjuder en kostnadsfri konsultation där vi analyserar din akne och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla akne och kan ge dig råd om vilka produkter och behandlingar som är bäst för just din hudtyp. Att prova AcneSpecialisten först kan hjälpa dig att undvika att använda tunga mediciner som kan ha biverkningar och påverka hela kroppen. Genom att boka en gratis konsultation hos oss får du en chans att se hur vi kan hjälpa dig att förbättra din hudhälsa innan du tar steget att besöka en läkare.</p>',

            image_small: null,
            image_large: null,
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
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

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera aknebehandlingsresultat";


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
      'Generellt om akne' => array(
            new Question(
                  title: 'Hur blir jag av med min akne snabbt?',
                  text: '<p class="p200">Att bli av med akne snabbt är en utmaning, eftersom det inte finns någon quickfix när det gäller akne. Effektiv behandling kräver att du tar hand om din hud genom att använda rätt behandlingar och produkter som passar din specifika hudtyp och akne. För att få en skräddarsydd behandlingsplan som hjälper dig att bli av med aknen så snabbt som möjligt, rekommenderar vi att du bokar en kostnadsfri hudkonsultation hos oss. Under konsultationen kommer vi att analysera din hud och hjälpa dig att utforma en anpassad behandlingsrutin som ger dig de bästa förutsättningarna för att snabbt och effektivt behandla din akne.</p>'
            ),
            new Question(
                  title: 'Har jag akne även om jag bara har en finne?',
                  text: '<p class="p200">Ja, du har tekniskt sett akne även om du bara har en enstaka finne. Akne kan ta sig många olika former och innefattar alla typer av finnar, oavsett om det är enstaka eller flera, stora eller små, papler eller pustler. Många tror att de inte har akne om de endast upplever enstaka finnar då och då, men faktum är att alla dessa fall kategoriseras som akne.</p>'
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
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till akne";

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
$skinguide_url_title = "Läs fler guider om akne";

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

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
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
      <meta name="title" content="<?php echo $seo_title ?>">
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
                                    <a href="<?php echo $aka->url ?>" title="<?php echo $aka->title ?>" class="mt-xs button b50 bright">
                                          <?php echo $aka->label ?>
                                    </a>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>