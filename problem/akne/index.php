<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$image_small = 'images/problems/424x324/akne.webp';
$image_large = 'images/problems/424x456/akne.webp';

$description = 'Här förklarar vi vad som kännetecknar akne, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av akne, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';
$akas = ['problem/finnar' => 'Finnar', 'problem/finnar/vuxenakne' => 'Vuxenakne', 'problem/finnar/tonarsakne' => 'Tonårsakne'];
$nav_buttons = array(
      'about' => 'Om akne',
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
      'related-problems' => 'Relaterade problem'
);
$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är akne?',
            content: '<p class="p200">Akne är en ärftlig och hormonell hudförändring som uppstår när talgproduktionen i hudens porer ökar. Huden behöver en viss mängd talg för att hålla sig mjuk och smidig, men vid överproduktion har huden svårt att avlägsna hudrester, vilket leder till bakterier och små inflammationer. Dessa inflammationer orsakar akne, eller finnar som vi ofta säger i dagligt tal. Akne är en inflammation i huden som uppstår när porerna täpps till av talg, döda hudceller och bakterier.</p>',

            extended_content: '<p class="p200">Både barn och vuxna kan drabbas av akne, men det är vanligast under tonåren. Vissa har besvär med akne under längre perioder, medan andra endast vid enstaka tillfällen. Akne kan se ut på många olika sätt, från små knottror på huden till variga större utslag. Det viktiga att komma ihåg är att akne kan behandlas. Ibland krävs behandling under en längre tidsperiod, men med rätt behandling kan både bestående ärrbildning och psykiskt lidande undvikas eller lindras.</p>
         
            <p class="p200 mt-xl">På Acnespecialisten kan du få hjälp med din akne. Vi har kunskap och erfarenhet av olika typer av behandlingar som ger goda resultat och många nöjda kunder. Vi börjar alltid med en kostnadsfri hudkonsultation där vi identifierar problemet och planerar den mest lämpliga behandlingen för dig och din hy. Du får även en effektiv hudvårdsrutin som du enkelt kan följa hemma. Vi rekommenderar att du tar hand om din allmänna hälsa: sov ordentligt, ät hälsosamt och motionera regelbundet. När du mår bra i sin helhet påverkar det din hud positivt.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man akne?',
            content: '<p class="p200">Akne är en hudåkomma som beror på en kombination av genetiska, hormonella och miljömässiga faktorer. En normal talgproduktion är nödvändig för att huden ska må bra, men när huden överproducerar talg kan detta leda till akne. Detta beror bland annat på anlag man har ärvt från sina föräldrar. Vid en överproduktion av talg klarar porerna inte av att ta hand om överflödet, och tillsammans med hudrester täpps pormynningarna till, vilket leder till att bakterier samlas. Kroppen försvarar sig då med en inflammation, och det är just detta som syns på huden i form av akne.</p>',

            extended_content: '<p class="p200">Hormoner får porerna i huden att överproducera talg. Det är vanligt att drabbas av akne under puberteten, när kroppen genomgår stora förändringar, men även små barn och vuxna kan få akne. Flera faktorer kan orsaka och försämra akne, såsom stress, vissa läkemedel, varma och fuktiga miljöer samt hormonförändringar vid graviditet, menstruation och klimakteriet. Även anabola steroider och p-piller kan orsaka akne. Stress påverkar ofta huden mer än vi kanske tror, och både stora och små händelser i livet kan öka kroppens stressnivå och orsaka hudförändringar i form av hormonell akne.</p>
         
            <p class="p200 mt-xl">För att behandla akne är det viktigt att balansera kroppens talgproduktion med rätt hudvårdsprodukter och hållbara hudvårdsrutiner. Successivt kan aknen antingen bli mycket bättre eller helt försvinna. Vi som arbetar på Acnespecialisten har lång erfarenhet och stor kunskap av aknebehandlingar och kan hjälpa dig att hålla kroppens naturliga produktion av talg på en optimal nivå och på så sätt reducera dina besvär med akne.</p>',
            icons: array('who-infants' => 'Hormoner', 'who-teenagers' => 'Stress', 'who-adults' => 'Genetik', 'who-elders' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får akne?',
            content: '<p class="p200">Akne är vanligast bland tonåringar och unga vuxna, men det kan drabba människor i alla åldrar, oavsett kön och hudtyp. I puberteten ökar produktionen av könshormoner, vilket kan leda till akne vulgaris, även kallad tonårsakne. Denna form av akne kan variera från enstaka finnar till större besvär, med små gula eller röda utslag, stora knölar och smärtsamma blåsor. Eftersom akne oftast uppträder i ansiktet under en känslig period som tonåren, kan det påverka det mentala måendet och det är viktigt att behandla akne effektivt för att undvika ärrbildning och andra skador på huden.</p>',

            extended_content: '<p class="p200">Akne drabbar inte bara tonåringar. Spädbarn och småbarn kan drabbas av lindriga former av akne, såsom akne neonatorum och akne infantum. Vuxenakne, kallad akne tarda, kan också uppstå om huden överproducerar talg. Kvinnor drabbas oftare av vuxenakne än män, eftersom de påverkas mer av hormonsvängningar under graviditet, mens och klimakteriet. Preventivmedel kan också påverka huden, men hur de påverkar varierar från individ till individ.</p>

            <p class="p200 mt-xl">Yttre faktorer som stress och alkohol kan också påverka akne, både hos tonåringar och vuxna. Akne kan uppstå i ansiktet, på bröstet, axlarna och ryggen. För att behandla akne rekommenderas att boka en kostnadsfri hudkonsultation hos Acnespecialisten. Där görs en bedömning av din hud och du får förslag på behandlingar samt en personlig hudvårdsrutin anpassad efter din hudtyp. Detta hjälper dig att motverka ytterligare problem med akne, både i ansiktet och på andra delar av kroppen.</p>',
            icons: array('who-infants' => 'Barn', 'who-teenagers' => 'Ungdommar', 'who-adults' => 'Vuxna', 'who-elders' => 'Män & Kvinnor')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man akne?',
            content: '<p class="p200">Akne kan uppstå på flera delar av kroppen och påverka personer i olika åldrar och med olika hudtyper. Vanligast är att akne drabbar ansiktet, men det kan även förekomma på andra områden som bröstet, axlarna och ryggen. Placeringen av akne beror på var talgkörtlarna är aktiva och därmed kan överproducera talg, vilket leder till tilltäppta porer och inflammationer i huden.</p>',

            extended_content: '<p class="p200 mt-xl">Akne i ansiktet är särskilt påtagligt, eftersom det är svårt att dölja och ofta påverkar en persons självkänsla och mentala välbefinnande. Det är vanligt att tonåringar drabbas av ansiktsakne under puberteten, då hormonella förändringar kan leda till ökad talgproduktion. Även vuxna kan drabbas av ansiktsakne, särskilt kvinnor som genomgår hormonella förändringar under graviditet, mens och klimakteriet.</p>

            <p class="p200 mt-xl">Akne på bröstet, axlarna och ryggen är också vanligt och kan vara lika besvärande som ansiktsakne, även om det är lättare att dölja under kläder. Denna typ av akne kan orsakas av samma faktorer som ansiktsakne, men även av yttre faktorer som friktion från kläder eller väskor som gnider mot huden och skapar irritation.
                  För att behandla och förebygga akne oavsett var på kroppen det uppstår, är det viktigt att följa en anpassad hudvårdsrutin, inklusive rengöring, återfuktning och eventuellt användning av aknebehandlingar som passar din hudtyp. Konsultera hos en av våra hudspecialister för att få råd om vilka produkter och behandlingar som är bäst lämpade för din specifika situation och för att minimera akneproblem på olika delar av kroppen.</p>',
            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlarna')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din aknetyp och skapar en individuell behandlingsplan.',
            url: 'hudkonsultation',
            url_label: 'Få gratis konsultation'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika aknetyp, så att du snabbt och säkert blir av med problemet.',
            url: 'aknebehandling',
            url_label: 'Se aknebehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny akne och hålla din hud i balans.',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            url_label: 'Se produkter'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När aknen är borta fokuserar vi på att reducera eventuella ärr med behandlingsmetoder som laser, microneedling och kemisk peeling för en jämn och problemfri hud.',
            url: 'aknearr-behandling',
            url_label: 'Se ärrbehandlingar'
      ),
);
$type_categories = array(
      new BasedTypeCategory(
            id: 'category-age',
            title: 'Akne baserat på ålder',
            content: '<p class="p200">Akne är en hudåkomma som kan drabba både ungdomar och vuxna, även om det är vanligast under tonåren. Tonårsakne uppstår ofta på grund av hormonella förändringar under puberteten. Vuxenakne förekommer också, och det kan bero på en rad olika faktorer. Hos vuxna kan akne orsakas av faktorer som stress, hormonobalans och genetik. Oavsett ålder är det viktigt att förstå att akne kan påverka människor i alla livsstadier.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/vuxenakne.webp',
                        title: 'Vuxenakne',
                        subtitle: 'Även kallat acne tarda',
                        content: '',
                        url: 'problem/akne/typer/vuxenakne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/tonarsakne.webp',
                        title: 'Tonårsakne',
                        subtitle: 'Även kallat acne vulgaris',
                        content: '',
                        url: 'problem/akne/typer/tonårsakne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/barnakne.webp',
                        title: 'Barnakne',
                        subtitle: 'Även kallat acne neonatorum',
                        content: '',
                        url: 'problem/akne/typer/barnakne',
                  ),
            )
      ),
      new BasedTypeCategory(
            id: 'category-severity',
            title: 'Akne baserat på svårighetsgrad',
            content: '<p class="p200">Akne kan variera i svårighetsgrad från milda till extremt allvarliga fall. I milda fall av akne är symptomen ofta mindre uttalade och består främst av pormaskar, medan mer allvarliga fall innefattar djupare inflammationer i form av cystor och noduler. Svårighetsgraden påverkar också hur akne påverkar en persons livskvalitet och hur den ska behandlas. Det är viktigt att diagnostisera och behandla akne utifrån dess svårighetsgrad för att säkerställa bästa möjliga behandlingsresultat och förhindra potentiella ärr och bestående skador på huden.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/mild-akne.webp',
                        title: 'Mild akne',
                        subtitle: 'även kallat acne comedonica',
                        content: '',
                        url: 'problem/akne/typer/mild-akne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/medelsvar-akne.webp',
                        title: 'Medelsvår akne',
                        subtitle: 'Även kallat acne papulopustulosa',
                        content: '',
                        url: 'problem/akne/typer/medel-akne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/svar-akne.webp',
                        title: 'Svår akne',
                        subtitle: 'Även kallat Acne nodulocystica',
                        content: '',
                        url: 'problem/akne/typer/svar-akne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/mycket-svar-akne.webp',
                        title: 'Mycket svår akne',
                        subtitle: 'Även kallat Acne conglobata',
                        content: '',
                        url: 'problem/akne/typer/mycket-svar-akne',
                  ),
            )
      ),
      new BasedTypeCategory(
            id: 'category-reason',
            title: 'Akne baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer kan också påverka uppkomsten av akne. Exempel på dessa är sol, friktion, kosmetika, mediciner och miljöfaktorer. Dessa kan bidra till eller förvärra akne genom att irritera huden, täppa till porer eller påverka hudens talgproduktion.</p>',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/mallorca-akne.webp',
                        title: 'Mallorca akne',
                        subtitle: 'även kallat Acne aestivalis',
                        content: '',
                        url: 'problem/akne/typer/mallorca-akne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/hormonell-akne.webp',
                        title: 'Hormonell akne',
                        subtitle: 'akne orsakad av hormoner',
                        content: '',
                        url: 'problem/akne/typer/hormonell-akne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/kosmetika-akne.webp',
                        title: 'kosmetika akne',
                        subtitle: 'Även kallat Acne cosmetica',
                        content: '',
                        url: 'problem/akne/typer/kosmetika-akne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/pill-akne.webp',
                        title: 'Akne från pillande',
                        subtitle: 'Även kallat Acne exoriée ',
                        content: '',
                        url: 'problem/akne/typer/acne-exoriee',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/friktions-akne.webp',
                        title: 'Friktionsakne',
                        subtitle: 'Även kallat Acne mechanica',
                        content: '',
                        url: 'problem/akne/typer/akne-mekanisk',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/lakemedelsakne.webp',
                        title: 'Läkemedelsakne',
                        subtitle: 'Även kallat Acne medicamentosa',
                        content: '',
                        url: 'problem/akne/typer/lakemedelsakne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/kontakt-akne.webp',
                        title: 'Kontaktakne',
                        subtitle: 'Även kallat Acne venenata',
                        content: '',
                        url: 'problem/akne/typer/kontakt-akne',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/svamp-akne.webp',
                        title: 'Svampakne',
                        subtitle: 'Även kallat fungal acne',
                        content: '',
                        url: 'problem/akne/typer/fungal-akne',
                  )
            )
      ),
      new BasedTypeCategory(
            id: 'category-area',
            title: 'Akne baserat på område',
            content: 'Akne kan uppträda på olika områden på kroppen. Ansiktet är det vanligaste området, men akne kan också förekomma på bröst, rygg, axlar och andra delar av kroppen. Placeringen av akne kan ge en indikation på dess orsak, som hormonella förändringar, irritation från kläder eller yttre faktorer som sol och friktion.',
            types: array(
                  new BasedType(
                        image_url: 'images/problems/102x102/akne-ansikte.webp',
                        title: 'Akne i ansiktet',
                        subtitle: 'Även kallat Acne faciei',
                        content: '',
                        url: 'problem/akne/typer/akne-ansiktet',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/akne-rygg.webp',
                        title: 'Akne på ryggen',
                        subtitle: 'Även kallat Acne dorsalis',
                        content: '',
                        url: 'problem/akne/typer/akne-ryggen',
                  ),
                  new BasedType(
                        image_url: 'images/problems/102x102/akne-brost.webp',
                        title: 'Akne på bröstet',
                        subtitle: 'Även kallat Acne pectoralis',
                        content: '',
                        url: 'problem/akne/typer/akne-brostet',
                  ),

            )
      )

);
$symptoms = array(
      new Symptom(
            name: 'Komedoner (Öppna)',
            image: 'images/symptoms/102x102/komedoner-oppna.webp',
            content: 'Pormaskar (öppna komedoner) är små, mörka prickar som uppstår när en por täpps igen av talg (hudens naturliga olja) och döda hudceller. De är ofta svarta eller bruna på grund av oxidation, som inträffar när melanin (hudens pigment) kommer i kontakt med luft. Pormaskar kan vara platta eller lätt upphöjda och är vanligt förekommande på näsan, kinderna, pannan och hakan.',
            url: 'problem/akne/typer/post-inflammatory-hyperpigmentaion',
            url_label: 'Läs mer',
            aka: 'Även kallat pormaskar',
            image_title: 'Komedoner'
      ),
      new Symptom(
            name: 'Komedoner (Stängda)',
            image: 'images/symptoms/102x102/komedoner-stangda.webp',
            content: 'Whiteheads (slutna komedoner) är små, vita eller hudfärgade utbuktningar som uppstår när en por täpps till av talg och döda hudceller under hudytan. De är täckta av ett tunt lager hud, vilket förhindrar oxidation och därmed behåller sin ljusa färg. Whiteheads kan vara platta eller lätt upphöjda och är vanligt förekommande på pannan, kinderna och hakan.',
            url: 'problem/akne/typer/atrophic-icepick-scars',
            aka: '"whiteheads"',
            image_title: 'Även kallat komedoner'
      ),
      new Symptom(
            name: 'Papler',
            image: 'images/symptoms/102x102/papler.webp',
            content: 'Papuler är små, fasta, röda och inflammerade blemmor som uppstår när en hårsäck blir infekterad av bakterier, oftast Propionibacterium acnes. De är vanligtvis mindre än 5 mm i diameter och kan vara känsliga vid beröring. Papuler är vanligt förekommande på ansiktet, nacken, bröstet och ryggen.',
            url: 'problem/akne/typer/atrophic-boxcar-scars',
            aka: 'Även kallat röda finnar',
            image_title: 'Papler'
      ),
      new Symptom(
            name: 'Pustler',
            image: 'images/symptoms/102x102/pustler.webp',
            content: 'Pustuler är röda och inflammerade blemmor som innehåller var (en blandning av döda bakterier, vita blodkroppar och döda hudceller). De ser ut som papuler men har en vit eller gul prick i mitten. Pustuler kan vara smärtsamma och är vanligt förekommande på ansiktet, nacken, bröstet och ryggen.',
            url: 'problem/akne/typer/atrophic-rolling-scars',
            aka: 'Även kallat gula finnar',
            image_title: 'Pustler'
      ),
      new Symptom(
            name: 'Noduler',
            image: 'images/symptoms/102x102/noduler.webp',
            content: 'Noduler är större, djupare och ofta smärtsamma inflammerade blemmor som uppstår när en hårsäck blir kraftigt infekterad och inflammationen sprider sig till det omgivande vävnaden. De är vanligtvis större än 5 mm i diameter och kan vara fasta och ömma vid beröring. Noduler är vanligt förekommande på ansiktet, nacken, bröstet, ryggen och ibland även på överarmarna och skinkorna.',
            url: 'problem/akne/typer/hypertrophic-keloid',
            aka: 'Även kallat innåtfinnar',
            image_title: 'Noduler'
      ),
      new Symptom(
            name: 'Cystor',
            image: 'images/symptoms/102x102/cystor.webp',
            content: 'Cystor är stora, inflammerade och smärtsamma blemmor som är fyllda med var och bildas när en hårsäck blir mycket infekterad och inflammationen sprider sig djupt in i huden. De kan vara runda och mjuka eller fasta och ömma vid beröring. Cystor kan vara större än 5 mm i diameter och är vanligt förekommande på ansiktet, nacken, bröstet och ryggen. Cystisk akne kan leda till ärrbildning och kräver ofta professionell behandling.',
            url: 'problem/akne/typer/hypertrophic-keloid',
            aka: 'Även kallat bölder',
            image_title: 'Cystor'
      ),
);
$service = new Service(
      id: 'fyll-ratt-lank',
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en acnespecialist utförs en undersökning av din akne. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Konsultation',
      image_title: 'Konsultation',
      consultation_url: 'hudkonsultation',
      consultation_url_title: 'Boka tid för hudkonsultation',
      booking_url: null,
      booking_url_title: null

);
$services = array(
      new Service(
            id: 'fyll-ratt-lank',
            title: 'Ansiktsbehandling mot akne',
            duration: '60 min',
            price: '995 kr',
            content: 'En effektiv ansiktsbehandling mot akne fokuserar på att noggrant extrahera orenheter som orsakar inflammation och skador i huden. Genom att försiktigt klämma ut akne och pormaskar kan behandlingen bidra till att förebygga ärrbildning och främja en snabbare läkning.',
            image_small: 'images/services/200x200/ansiktsbehandling-akne.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-akne.webp',
            image_alt: 'Ansiktsbehandling mot akne',
            image_title: 'Ansiktsbehandling mot akne',
            consultation_url: 'hudkonsultation',
            consultation_url_title: 'Boka tid för hudkonsultation',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922',
            booking_url_title: 'Boka tid för ansiktsbehandling mot akne'
      ),
      new Service(
            id: 'fyll-ratt-lank',
            title: 'Laser mot akne',
            duration: '50 min',
            price: '2595 kr',
            content: 'En avancerad laserbehandling mot akne erbjuder en effektiv lösning för att bekämpa aktiv akne och ärr som kan uppstå efter utbrott. Lasertekniken riktar sig mot de bakterier som orsakar inflammation och hjälper till att minska produktionen av talg, vilket minskar risken för framtida utbrott.',
            image_small: 'images/services/200x200/laser-akne.webp',
            image_large: 'images/services/200x200/laser-akne.webp',
            image_alt: 'Laser mot akne',
            image_title: 'Laser mot akne',
            consultation_url: 'hudkonsultation',
            consultation_url_title: 'Boka tid för hudkonsultation',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922',
            booking_url_title: 'Boka tid för laser mot akne'
      ),
      new Service(
            id: 'fyll-ratt-lank',
            title: 'Kemisk peeling mot akne',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla akne. Genom att använda en speciellt framtagen lösning för att exfoliera huden, främjar kemisk peeling cellförnyelse, rensar tilltäppta porer och minskar inflammation. Resultatet är en jämnare hudton, mindre utbrott och färre synliga ärr. Det är en enkel och effektiv strategi för att ta kontroll över din akne och förbättra din hudhälsa.',
            image_small: 'images/services/200x200/kemisk-peeling-akne.webp',
            image_large: 'images/services/200x200/kemisk-peeling-akne.webp',
            image_alt: 'Kemisk peeling mot akne',
            image_title: 'Kemisk peeling mot akne',
            consultation_url: 'hudkonsultation',
            consultation_url_title: 'Boka tid för hudkonsultation',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922',
            booking_url_title: 'Boka tid för kemisk peeling mot akne'
      ),
);
$products = array(
      new Service(
            id: 'produkter-mot-akne',
            title: 'Produkter mot akne',
            duration: null,
            price: 'Price from 995 kr',
            content: 'För att effektivt bekämpa och förebygga akne är daglig behandling med rätt produkter avgörande. Våra akneprodukter är speciellt utformade för att hålla din hud i balans och förhindra att ny akne uppstår.',
            image_small: 'images/services/200x200/produkter-akne.webp',
            image_large: 'images/services/200x200/produkter-akne.webp',
            image_alt: 'Produkter mot akne',
            image_title: 'Produkter mot akne',
            consultation_url: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_title: null
      )
);
$procedures = array(
      new Service(
            id: 'microneedling-for-acne',
            title: 'Reparera acneärr',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Efter aktiv akne kan man uppleva post-akne, vilket innebär ärr i form av gropar i olika former och fläckar i olika färger på huden där aknen tidigare varit. Olika typer av ärr behandlas med olika metoder. Klicka här för att läsa mer om hur du kan reparera din hud och ta hand om post-akne.',
            image_small: 'images/services/200x200/microneedling-aknearr.webp',
            image_large: 'images/services/200x200/microneedling-aknearr.webp',
            image_alt: 'Reparera acneärr',
            image_title: 'Reparera acneärr',
            consultation_url: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_title: null
      ),
);
$articles = array(
      new Article(
            id: 'pigmentation-causes-and-risk-factors',
            title: 'Varför AcneSpecialisten?!',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            content: '<p class="p200">Du som vill ha det som är bäst mot akne bör välja Acnespecialisten eftersom vi är experter på att behandla akne och har över 30 års erfarenhet av att ha arbetat med olika typer av akne. Vi lever upp till vårt namn genom att erbjuda personlig och professionell hjälp för att hjälpa dig att uppnå en klar och frisk hud. Vi skräddarsyr behandlingar baserade på dina individuella problem och behov, vi rekommenderar de bästa akneprodukterna för att förebygga och behandla din hud och akne. </p><p class="p200 mt-m">Genom att välja Acnespecialisten får du den mest effektiva behandlingen för ditt specifika fall och en hudvårdspartner som stöttar dig genom hela processen.</p>',
      ),
      new Article(
            id: 'when-to-see-your-pigmentation-specialist',
            title: 'När ska jag besöka AcneSpecialisten?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            content: '<p class="p200">Du bör besöka Acnespecialisten när du känner att din akne påverkar din livskvalitet eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar. Ju tidigare du söker hjälp, desto större är chansen att undvika ärrbildning och långvariga hudproblem. Acnespecialisten är här för att erbjuda dig expertis och skräddarsydda behandlingar oavsett om du har lindrig, måttlig eller svår akne. Tveka inte att kontakta oss för att boka en kostnadsfri konsultation och ta det första steget mot en klarare och friskare hud.</p><p class="p200 mt-m">Välj Acnespecialisten innan du går till en läkare, eftersom vi erbjuder en kostnadsfri konsultation där vi analyserar din akne och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla akne och kan ge dig råd om vilka produkter och behandlingar som är bäst för just din hudtyp. Att prova Acnespecialisten först kan hjälpa dig att undvika att använda tunga mediciner som kan ha biverkningar och påverka hela kroppen. Genom att boka en gratis konsultation hos oss får du en chans att se hur vi kan hjälpa dig att förbättra din hudhälsa innan du tar steget att besöka en läkare.</p>',
      ),
);
$results = array(
      new ResultCustomer(
            id: '1',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne"">behandlingar mot akne</a>',
            )
      ),
      new ResultCustomer(
            id: '2',
            image_before_small: 'https://via.placeholder.com/358x358.webm',
            image_after_small: 'https://via.placeholder.com/358x358.webm',
            image_before_large: 'https://via.placeholder.com/424x424.webm',
            image_after_large: 'https://via.placeholder.com/424x424.webm',
            age: 18,
            gender: 'Female',
            problem: 'Akne',
            type: 'Severe',
            treatment: new ResultTreatment(
                  duration: 'Efter 3 månaders <a href="behandlingar/akne" title="Akne">behandlingar mot akne</a>',
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
      'Generellt om akne' => array(
            new Question(
                  title: 'Hur blir jag av med min akne snabbt?',
                  text: 'Att bli av med akne snabbt är en utmaning, eftersom det inte finns någon quickfix när det gäller akne. Effektiv behandling kräver att du tar hand om din hud genom att använda rätt behandlingar och produkter som passar din specifika hudtyp och akne. För att få en skräddarsydd behandlingsplan som hjälper dig att bli av med aknen så snabbt som möjligt, rekommenderar vi att du bokar en kostnadsfri hudkonsultation hos oss. Under konsultationen kommer vi att analysera din hud och hjälpa dig att utforma en anpassad behandlingsrutin som ger dig de bästa förutsättningarna för att snabbt och effektivt behandla din akne.'
            ),
            new Question(
                  title: 'Har jag akne även om jag bara har en finne?',
                  text: 'ja, du har tekniskt sett akne även om du bara har en enstaka finne. Akne kan ta sig många olika former och innefattar alla typer av finnar, oavsett om det är enstaka eller flera, stora eller små, papler eller pustler. Många tror att de inte har akne om de endast upplever enstaka finnar då och då, men faktum är att alla dessa fall kategoriseras som akne.'
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
                  text: 'Nej, det är en myt att choklad direkt skulle leda till akne. Ingen vetenskaplig forskning har tydligt påvisat ett direkt samband mellan chokladkonsumtion och uppkomsten av finnar. Det som potentiellt kan påverka din akne är stress. Om du upplever stress över att du ätit choklad, kan det i sin tur bidra till akneutbrott. Men en bit choklad då och då bör inte orsaka akneutbrott hos de flesta människor.'
            ),
            new Question(
                  title: 'Vad kan jag göra för att bli av med min akne?',
                  text: 'Att bekämpa akne effektivt kräver en individuellt anpassad strategi som kombinerar lämpliga behandlingar och hudvårdsprodukter, utformade för att passa dina unika behov och din huds specifika tillstånd. På Acnespecialisten, erbjuder vi kostnadsfria hudkonsultationer där vi kan utvärdera ditt specifika fall av akne och hjälpa till att skräddarsy en effektiv behandlingsrutin.'
            )
      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Hur många behandlingar behövs?',
                  text: '<p class="p200">Antalet behandlingar som behövs varierar från person till person och beror på flera faktorer, som din hudtyp, svårighetsgraden av din akne och din respons på behandlingen. Vanligtvis kan du se en förbättring efter 1 till 3 veckors regelbunden behandling.</p>

                       <p class="p200 mt-m">Det är viktigt att påpeka att behandlingen hos oss inte fungerar i isolering. En väsentlig del av din framgång ligger i den dagliga användningen av de rekommenderade produkterna hemma. Det är kombinationen av professionell behandling och hemmavård som ger bästa möjliga resultat.</p>

                        <p class="p200 mt-m">Om du inte upplever de förväntade förbättringarna efter en tid, uppmanar vi dig att ta kontakt med din personliga hudterapeut. Tillsammans kan vi se över dina hudvårdsrutiner och de produkter du använder, för att optimera din behandlingsplan.</p>'
            ),
            new Question(
                  title: 'Finns det en risk att min akne återkommer?',
                  text: '<p class="p200">Ja, det finns en risk att akne återkommer, eftersom akne kan påverkas av flera faktorer såsom genetik, hormoner, livsstil och hudvård. Personer med en genetisk benägenhet för akne kan uppleva att aknen återkommer, särskilt under perioder av hormonella förändringar som pubertet, graviditet eller menstruation. Även faktorer som stress, kost och användning av olämpliga hudvårdsprodukter kan bidra till att aknen återkommer.</p>
                       
                       <p class="p200 mt-m">Det är dock viktigt att komma ihåg att regelbunden och korrekt hudvård kan hålla aknen i schack. Precis som vi borstar tänderna varje dag för att hålla karies borta, behöver vi underhålla vår hud för att hålla aknen borta. Det innebär att följa en anpassad hudvårdsrutin, hantera stress och upprätthålla en hälsosam livsstil. Så länge du tar hand om din hud regelbundet och på rätt sätt, kan du förhindra att aknen återkommer.</p>'
            ),
            new Question(
                  title: 'Vilken är den bästa behandlingen mot akne?',
                  text: 'Vilken behandling som är bäst för akne varierar beroende på individens hudtyp, aknens svårighetsgrad och orsaker till akne. Den bästa behandlingen är en skräddarsydd behandlingsplan som kombinerar rätt behandlingar, produkter och rutiner för att effektivt ta itu med den aktiva aknen och förhindra att nya utbrott uppstår. Genom att först behandla och bli av med den aktiva aknen kan du uppnå en klarare hud. Därefter är det viktigt att bibehålla resultaten med lämpliga produkter och rutiner för att motverka att nya finnar uppstår och hålla aknen under kontroll. Det rekommenderas att konsultera en av våra specialister för att få en personlig och effektiv behandlingsplan som passar just din hud och akne.'
            ),
            new Question(
                  title: 'Gör aknebehandlingen ont?',
                  text: 'vi strävar efter att göra aknebehandlingen så behaglig som möjligt för våra klienter. Det är sant att akne ibland innebär inflammation i porerna och kan göra ont när de öppnas upp och töms. Men vi vill påpeka att smärtupplevelsen kan variera från person till person och bero på behandlingsmetoden som används. Vår erfarna personal är välutbildad och tar stor hänsyn till din komfort under behandlingen. Om du känner någon obehag, tveka inte att informera din acnespecialist så att de kan justera behandlingen efter dina behov.'
            ),
            new Question(
                  title: 'Vad ska jag tänka på innan behandlingen?',
                  text: 'Vi vill att din behandling ska vara så smidig och bekväm som möjligt, och vi strävar efter att göra processen enkel för dig. Du behöver inte förbereda något särskilt inför ditt besök hos oss. Kom precis som du är, och vi tar hand om resten. Vi kommer att genomföra en grundlig hudanalys och skräddarsy en behandlingsplan som passar just dig och din hudtyp. Så, du kan lita på oss och bara slappna av inför din aknebehandling.'
            ),
            new Question(
                  title: 'Vad ska jag tänka på efter behandling?',
                  text: '<p class="p200">Efter din aknebehandling hos Acnespecialisten kan du uppleva att huden blir något röd och irriterad. Detta är helt normalt och en del av hudens naturliga läkningsprocess. Rödheten och irritationen kommer att avta under dagarna efter behandlingen. Det är viktigt att du fortsätter att följa den hudvårdsrutin och de produktrekommendationer vi gett dig för att stödja hudens återhämtning och maximera resultaten av behandlingen.</p>
                        
                        <p class="p200 mt-m">Undvik att peta eller klämma på behandlade områden för att undvika eventuell ärrbildning och infektion. Dessutom är det bra att skydda huden från solen, då den kan vara extra känslig efter behandling. Använd solskyddsmedel och undvik direkt solljus så mycket som möjligt. Kom ihåg att vi på Acnespecialisten alltid finns här för dig om du har några frågor eller funderingar efter din behandling.</p>'
            ),
            new Question(
                  title: 'Eftervård efter behandlingen?',
                  text: '<p class="p200">Eftervården efter en aknebehandling hos Acnespecialisten är lika viktig som själva behandlingen. När aknen är utklämd och borta är det viktigt att förebygga uppkomsten av ny akne. Om du inte följer din eftervårdsplan kommer du att få resultat, men det kommer inte vara bestående, eftersom akneproduktionen sätter igång igen kort tid efter behandlingen.</p>

                  <p class="p200 mt-m">För att hålla huden i kontroll och balans är det viktigt att följa de råd och rekommendationer vi ger dig angående hudvårdsrutin och produkter. Kontinuerlig behandling och förebyggande åtgärder är avgörande för att uppnå och bibehålla en klar och frisk hud. Kom ihåg att vi på Acnespecialisten alltid finns här för att hjälpa och stötta dig genom hela processen, både under och efter din behandling.</p>',
            ),
      ),
);
$skin_guide_articles = array(
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: '',
            problem: 'Acne',
            description: "",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: '',
            problem: 'Acne',
            description: "",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      ),
      new SkinGuideArticle(
            id: 'how-hormones-effect',
            title: 'How hormones effect?',
            subtitle: 'In a personal meeting with a skin specialist, your skin type is examined and identified.',
            problem: 'Acne',
            description: "In a personal meeting with a skin specialist, your skin type is examined and identified. We take pre-photos of your skin, recommend.",
            image_small: 'https://via.placeholder.com/426x324.webp',
            image_large: 'https://via.placeholder.com/872x456.jpg',
            category_id: 'category-here',
            subcategory_id: 'subcategory-here'
      )
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
            id: 'acnearr',
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp'
      ),
      new RelatedProblem(
            id: 'rosacea',
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp'
      ),
      new RelatedProblem(
            id: 'perioral-dermatit',
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp'
      ),
);
$brands = array(
      new Brand('Powerlite', 'images/brands/powerlite.svg'),
      new Brand('Dermapen4', 'images/brands/dermapen4.svg'),
      new Brand('Cryopen', 'images/brands/cryopen.svg'),
      new Brand('Lumenis', 'images/brands/lumenis.svg'),
      new Brand('Alma', 'images/brands/alma.svg'),
      new Brand('PRXT', 'images/brands/prxt.svg'),
      new Brand('Hydrafacial', 'images/brands/hydrafacial.svg'),
      new Brand('IP infusion', 'images/brands/ipinfusion.svg'),
);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">
            Vad är akne? Vanliga frågor och svar | AcneSpecialisten
      </title>
      <meta name="description" content="" class="l10n">
      <meta name="title" content="" class="l10n">
      <meta name="keywords" content="" class="l10n">

      <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->
      <meta property="og:title" content="Acnespecialisten" />
      <meta property="og:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="og:image" content="images/about-desktop.jpg" />
      <meta property="twitter:title" content="Acnespecialisten" />
      <meta property="twitter:description" content="Acnespecialisten is the best etc.." class="l10n" />
      <meta property="twitter:image" content="images/about-desktop.jpg" />
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
                                    <h2 class="h600">Akne</h2>
                                    <div class="mt-m aka">
                                          <span class="p200 l10n">Även kallat</span>
                                          <?php
                                          $length = sizeof(($akas));
                                          $values = array_values($akas);
                                          $keys = array_keys($akas);
                                          for ($i = 0; $i < $length; $i++) { ?>
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                          <div class="mt-xl">
                                                <div class="columns is-2 is-variable">
                                                      <div class="column">
                                                            <a href="hudkonsultation" title="Vår hudkonsultation" class="button white expand l10n">Få gratis konsultation</a>
                                                      </div>
                                                      <div class="column">
                                                            <a href="https://bokadirekt.se" title="Boka behandling" class="button white expand l10n">Boka behandling</a>
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
                              <h1 class="h600">Akne</h1>
                              <h3 class="mt-xs p100 l10n">Även känt som:</h3>
                              <?php foreach ($akas as $key => $aka) { ?>
                                    <div>
                                          <a href="<?php echo $key ?>" title="<?php echo $aka ?>" class="mt-xs button b50 bright">
                                                <?php echo $aka ?>
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
                                                <a href="hudkonsultation" title="Gratis hudkonsultation" class="button b200 white expand l10n">Gratis konsultation</a>
                                          </div>
                                          <div class="column is-half">
                                                <a href="https://bokadirekt.se" title="Boka behandling" class="button b200 white expand l10n">Boka behandling</a>
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
                                    <h1 class="h600">Akne</h1>
                                    <div class="mt-s">
                                          <span class="h200 l10n">Även känt som:</span>
                                          <?php
                                          $length = sizeof(($akas));
                                          $values = array_values($akas);
                                          $keys = array_keys($akas);
                                          for ($i = 0; $i < $length; $i++) { ?>
                                                <?php
                                                if ($i == $length - 1) {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="' . $keys[$i] . '" title="' . $values[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                    </div>
                                    <p class="mt-s p200"><?php echo $description ?></p>
                                    <div class="mt-xl flex-row" id="book-buttons">
                                          <a href="hudkonsultation" title="Gratis hudkonsultation" class="button b200 white l10n">Få gratis konsultation</a>
                                          <a href="https://bokadirekt.se" title="Boka behandling" class="button b200 white l10n">Boka behandling</a>
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
                                    <img src="<?php echo $image_large ?>" alt="Akne" title="Akne" width="358" height="274" />
                              </picture>
                        </section>
                        <section id="nav-buttons">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                        </section>
                        <section id="about">
                              <h2 class="h500 l10n">Om Akne</h2>
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
                              <a href="problem/aknearr/behandling" title="Om aknebehandlingar" class="mt-xl button b200 outline expand auto-width l10n">Läs mer om aknebehandlingar</a>
                        </section>
                        <?php if (sizeof($type_categories) > 0) { ?>
                              <section id="types">
                                    <h2 class="h500 l10n">Olika typer av akne</h2>
                                    <div class="is-hidden-tablet">
                                          <div class="mt-m mb-xxl" id="type-category-buttons">
                                                <?php foreach ($type_categories as $type_category) { ?>
                                                      <a href="javascript:;" class="button b50 grey">
                                                            <?php echo $type_category->title ?>
                                                      </a>
                                                <?php } ?>
                                          </div>
                                          <?php foreach ($type_categories as $type_category) { ?>
                                                <div class="type-category" id="<?php echo $type_category->id ?>">
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
                                                <div class="type-category-large" id="<?php echo $type_category->id ?>">
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
                                    <a href="typer" title="Om aknetyper" class="mt-xl button b200 outline expand l10n is-hidden-tablet">Läs mer om aknetyper</a>
                                    <a href="typer" title="Om aknetyper" class="mt-xl button b200 outline l10n is-hidden-mobile">Läs mer om aknetyper</a>
                              </section>
                        <?php } ?>
                        <?php if (sizeof($symptoms) > 0) { ?>
                              <section id="symptoms">
                                    <h2 class="h500">Akne symptom</h2>
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
                              <h2 class="h500 l10n">01. Identifiera din akne</h2>
                              <hr class="is-hidden-mobile">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                              <hr class="is-hidden-mobile">
                        </section>
                        <section id="treatments">
                              <h2 class="h500">02. Behandla aktiv akne</h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($services as $service) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="products">
                              <h2 class="h500">03. Förebygg uppkomsten av ny akne</h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $service) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="treatment-solutions">
                              <h2 class="h500">04. Reparera post-akne</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Omdömen" href="https://se.trustpilot.com/review/acnespecialisten.se">Läs fler omdömen</a>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="Frågor och svar" href="faq">Läs fler frågor & Svar</a>
                        </section>
                        <section id="skin-guide">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Hudguide</h2>
                                    <div class="is-hidden-touch">
                                          <button class="round-large grey" onclick="scrollSkinGuide(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" onclick="scrollSkinGuide(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/skin_guide/skin_guide_narrow.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide">Läs fler guider</a>
                        </section>
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
                                                <?php include('../widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </dig>
                        </section>
                  </div>
                  <section id="brands">
                        <div class="flex-row align-end justify-space-between">
                              <h2 class="big l10n">Varumärken</h2>
                              <a href="brands" title="Varumärken" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Varumärken" href="brands">Se alla varumärken</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>