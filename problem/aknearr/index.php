<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$image_small = 'images/problems/medium/acne-scars.jpg';
$image_large = 'images/problems/large/acne-scars.jpg';

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
            prefix: 'Vart',
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
            title: 'identifieraa',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din aknetyp och skapar en individuell behandlingsplan.',
            url: 'https://www.dahlskincare.com/skin-consultation',
            url_label: 'Få gratis konsultation'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva aknebehandlingar anpassade för din specifika aknetyp, så att du snabbt och säkert blir av med problemet.',
            url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922',
            url_label: 'Se aknebehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'EVi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny akne och hålla din hud i balans.',
            url: 'https://www.dahlskincare.com',
            url_label: 'Se produkter'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När aknen är borta fokuserar vi på att reducera eventuella ärr med behandlingsmetoder som laser, microneedling och kemisk peeling för en jämn och problemfri hud.',
            url: 'https://www.dahlskincare.com',
            url_label: 'Se ärrbehandlingar'
      ),
);
$type_categories = array(
      new BasedTypeCategory(
            id: 'category-age',
            title: 'Baserat på ålder',
            content: '<p class="p200">Akne är en hudåkomma som kan drabba både ungdomar och vuxna, även om det är vanligast under tonåren. Tonårsakne uppstår ofta på grund av hormonella förändringar under puberteten. Vuxenakne förekommer också, och det kan bero på en rad olika faktorer. Hos vuxna kan akne orsakas av faktorer som stress, hormonobalans och genetik. Oavsett ålder är det viktigt att förstå att akne kan påverka människor i alla livsstadier.</p>',
            types: array(
                  new BasedType(
                        id: 'vuxenakne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Vuxenakne',
                        subtitle: 'Även kallat acne tarda',
                        content: ''
                  ),
                  new BasedType(
                        id: 'tonårsakne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Tonårsakne',
                        subtitle: 'Även kallat acne vulgaris',
                        content: ''
                  ),
                  new BasedType(
                        id: 'barnakne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Barnakne',
                        subtitle: 'Även kallat acne neonatorum',
                        content: ''
                  ),
            )
      ),
      new BasedTypeCategory(
            id: 'category-severity',
            title: 'Baserat på svårighetsgrad',
            content: '<p class="p200">Akne är en hudåkomma som kan drabba både ungdomar och vuxna, även om det är vanligast under tonåren. Tonårsakne uppstår ofta på grund av hormonella förändringar under puberteten. Vuxenakne förekommer också, och det kan bero på en rad olika faktorer. Hos vuxna kan akne orsakas av faktorer som stress, hormonobalans och genetik. Oavsett ålder är det viktigt att förstå att akne kan påverka människor i alla livsstadier.</p>',
            types: array(
                  new BasedType(
                        id: 'vuxenakne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Vuxenakne',
                        subtitle: 'Även kallat acne tarda',
                        content: ''
                  ),
                  new BasedType(
                        id: 'tonårsakne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Tonårsakne',
                        subtitle: 'Även kallat acne vulgaris',
                        content: ''
                  ),
                  new BasedType(
                        id: 'barnakne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Barnakne',
                        subtitle: 'Även kallat acne neonatorum',
                        content: ''
                  ),
            )
      ),
      new BasedTypeCategory(
            id: 'category-reason',
            title: 'Baserat på orsak',
            content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>',
            types: array(
                  new BasedType(
                        id: 'mallorca-acne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Mallorca acne',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  ),
                  new BasedType(
                        id: 'hormonal-acne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Hormonal acne',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  ),
                  new BasedType(
                        id: 'cosmetic-acne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Cosmetic acne',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  ),
                  new BasedType(
                        id: 'acne-exoriee',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Acne exoriee',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  ),
                  new BasedType(
                        id: 'acne-mechanics',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Acne mechanics',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  ),
                  new BasedType(
                        id: 'acne-medicamentosa',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Acne medicamentosa',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  ),
                  new BasedType(
                        id: 'fungal-acne',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Fungal acne',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  )
            )
      ),
      new BasedTypeCategory(
            id: 'category-area',
            title: 'Baserat på område',
            content: '<p class="p200">Akne kan uppstå på olika områden av kroppen, men det är vanligast att det drabbar ansiktet, bröstet, axlarna och ryggen. Olika typer av akne kan förekomma på olika ställen, och vissa områden kan vara mer mottagliga för vissa akneformer än andra.</p>',
            types: array(
                  new BasedType(
                        id: 'acne-on-face',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Acne on face',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  ),
                  new BasedType(
                        id: 'acne-on-body',
                        image_url: 'https://via.placeholder.com/102x102.jpg',
                        title: 'Acne on body',
                        subtitle: 'Also called scars stains',
                        content: '<p class="p200">Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.</p>'
                  )
            )
      )
);
$symptoms = array(
      new Symptom(
            id: 'post-inflammatory-hyperpigmentaion',
            name: 'Post inflammatory hyperpigmentation',
            aka: 'scars stains',
            image: 'images/symptoms/small/post-inflammatory-hyperpigmentation.jpg',
            content: 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'
      ),
      new Symptom(
            id: 'atrophic-icepick-scars',
            name: 'Atrophic icepick scars',
            aka: 'scars stains',
            image: 'images/symptoms/small/atrophic-icepick-scars.jpg',
            content: 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'
      ),
      new Symptom(
            id: 'atrophic-boxcar-scars',
            name: 'Atrophic boxcar scars',
            aka: 'scars stains',
            image: 'images/symptoms/small/atrophic-boxcar-scars.jpg',
            content: 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'
      ),
      new Symptom(
            id: 'atrophic-rolling-scars',
            name: 'Atrophic rolling scars',
            aka: 'scars stains',
            image: 'images/symptoms/small/atrophic-rolling-scars.jpg',
            content: 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'
      ),
      new Symptom(
            id: 'hypertrophic-keloid',
            name: 'Hypertrophic keloid',
            aka: 'scars stains',
            image: 'images/symptoms/small/hypertrophic-keloid.jpg',
            content: 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears on the face, but you can also get a rash on the shoulders, back and chest. The rash can look many different ways and vary in both appearance and quantity.'
      ),
);
$service = new Service(
      id: 'acne-scars-consultation',
      title: 'Consultation',
      duration: '30 min',
      price: '1295 kr',
      content: 'This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin... ',
      image_small: 'images/service-categories/small/consultation.jpg',
      image_large: 'images/service-categories/large/consultation.jpg',
      consultation_url: 'https://dahlskincare.com/skin-consultation',
      booking_url: null
);
$services = array(
      new Service('acne-scars-microneedling', 'Microneedling for acne scars', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/microneedling.jpg', 'images/service-categories/large/microneedling.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922'),
      new Service('acne-scars-laser', 'Laser for acne scars', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/laser-problem-skin.jpg', 'images/service-categories/large/laser-problem-skin.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922'),
      new Service('acne-scars-chemical-peeling', 'Chemical peeling for acne scars', '30 min', '1295 kr', 'Acne, as we have seen, is a rash on the skin caused by inflamed sebaceous glands, which in turn is due to hormones and heredity, and thus has nothing to do with poor hygiene. Acne often appears...', 'images/service-categories/small/chemical-peeling.jpg', 'images/service-categories/large/chemical-peeling.jpg', 'https://dahlskincare.com/skin-consultation', 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/acne%C3%A4rr-konsultation-1643922'),
);
$articles = array(
      new Article('pigmentation-causes-and-risk-factors', 'Acne scars causes and risks factors', 'https://via.placeholder.com/358x272.webp', 'https://via.placeholder.com/872x456.webp', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'),
      new Article('when-to-see-your-pigmentation-specialist', 'When to see your acne scars specialist?', 'https://via.placeholder.com/358x272.webp', 'https://via.placeholder.com/872x456.webp', '<p class="p200">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin.</p><p class="p200 mt-m">This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples and gives a really good start to the treatment of the skin. During the acne treatment, the skin is cleaned in depth with the help of a vapozone that steams up the skin. This is a treatment adapted for acne skin and pimples.</p>'),
);

$faq_categories = array(
      '' => array(
            new Question(
                  title: 'How many treatments are needed?',
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ),
            new Question(
                  title: 'Can my acne come back?',
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ),
            new Question(
                  title: 'How do I get rid of my acne fast?',
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ),
            new Question(
                  title: 'Do I have acne even if I only have one pimple?',
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            )
      )
);

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image_small: 'images/specialists/small/specialist-1.jpg',
            image_large: 'images/specialists/large/hudterapeut-cazzandra.webp'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image_small: 'images/specialists/small/specialist-2.jpg',
            image_large: 'images/specialists/large/hudterapeut-veronika.webp'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image_small: 'images/specialists/small/specialist-3.jpg',
            image_large: 'images/specialists/large/hudterapeut-amira.webp'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image_small: 'images/specialists/small/specialist-4.jpg',
            image_large: 'images/specialists/large/hudterapeut-vilma.webp'
      )
);
$related_problems = array(
      new RelatedProblem(
            id: 'acne',
            name: 'Acne',
            aka: 'scars stains',
            image: 'https://via.placeholder.com/102x102.webp'
      ),
      new RelatedProblem(
            id: 'acne',
            name: 'Acne',
            aka: 'scars stains',
            image: 'https://via.placeholder.com/102x102.webp'
      ),
      new RelatedProblem(
            id: 'acne',
            name: 'Acne',
            aka: 'scars stains',
            image: 'https://via.placeholder.com/102x102.webp'
      ),
);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
      <!-- TODO: Set title and meta tags -->
      <title class="l10n">
            Acnespecialisten | Akne
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
                  <div id="floating-picture" style="background-image: url('images/problems/carousel/large/acne-scars.jpg')">
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
                                                      echo '<a href="' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                          <div class="mt-xl">
                                                <div class="columns is-2 is-variable">
                                                      <div class="column">
                                                            <a href="https://dahlskincare.com/consultation" target="_blank" class="button white expand l10n">Få gratis konsultation</a>
                                                      </div>
                                                      <div class="column">
                                                            <a href="https://bokadirekt.se" target="_blank" class="button white expand l10n">Boka behandling</a>
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
                              <h1 class="h600">Akneärr</h1>
                              <h3 class="mt-xs p100 l10n">Även känt som:</h3>
                              <?php foreach ($akas as $key => $aka) { ?>
                                    <div>
                                          <a href="<?php echo $key ?>" class="mt-xs button b50 bright">
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
                                                <a href="https://dahlskincare.com/consultation" target="_blank" class="button b200 white expand l10n">Free consultation</a>
                                          </div>
                                          <div class="column is-half">
                                                <a href="https://bokadirekt.se" target="_blank" class="button b200 white expand l10n">Book a treatment</a>
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
                                                      echo '<a href="' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>.';
                                                } else {
                                                      echo '<a href="' . $keys[$i] . '" class="b200 underline">' . $values[$i] . '</a>,';
                                                }
                                                ?>
                                          <?php } ?>
                                    </div>
                                    <p class="mt-s p200">
                                          <?php echo $description ?>
                                    </p>
                                    <div class="mt-xl flex-row" id="book-buttons">
                                          <a href="https://dahlskincare.com/consultation" target="_blank" class="button b200 white l10n">Få gratis konsultation</a>
                                          <a href="https://bokadirekt.se" target="_blank" class="button b200 white l10n">Boka behandling</a>
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
                                    <img src="<?php echo $image_large ?>" alt="Akne" width="358" height="274" />
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
                              <a href="problem/aknearr/behandling" class="mt-xl button b200 outline expand auto-width l10n">
                                    Läs mer om aknebehandlingar
                              </a>
                        </section>
                        <?php if (sizeof($type_categories) > 0) { ?>
                              <section id="types">
                                    <h2 class="h500 l10n">Olika typer av akne</h2>
                                    <div class="is-hidden-tablet">
                                          <div class="mt-m mb-xxl" id="type-category-buttons">
                                                <?php foreach ($type_categories as $type_category) { ?>
                                                      <a href=" javascript:;" onclick="scrollToElement('#<?php echo $type_category->id ?>')" class="button b50 grey">
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
                                    <a href="<?php echo $_SERVER['REQUEST_URI'] . 'typer' ?>" class="mt-xl button b200 outline expand l10n is-hidden-tablet">Läs mer om aknetyper</a>
                                    <a href="<?php echo $_SERVER['REQUEST_URI'] . 'typer' ?>" class="mt-xl button b200 outline l10n is-hidden-mobile">Läs mer om aknetyper</a>
                              </section>
                        <?php } ?>
                        <?php if (sizeof($symptoms) > 0) { ?>
                              <section id="symptoms">
                                    <h2 class="h500">Akne symptoms</h2>
                                    <div class="mt-m is-hidden-tablet" id="symptom-buttons">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <a href="javascript:;" onclick="scrollToElement('#<?php echo $symptom->id ?>')" class="button b50 grey">
                                                      <?php echo $symptom->name ?>
                                                </a>
                                          <?php } ?>
                                    </div>
                                    <div class="columns is-multiline is-variable is-3" id="symptom-cards">
                                          <?php foreach ($symptoms as $symptom) { ?>
                                                <div class="column is-half" id="<?php echo $symptom->id ?>">
                                                      <?php include('../widgets/symptom-card/symptom-card.php'); ?>
                                                </div>
                                          <?php } ?>
                                    </div>
                              </section>
                        <?php } ?>
                        <section id="define">
                              <h2 class="h500 l10n">identifiera din Akne</h2>
                              <hr class="is-hidden-mobile">
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                              <hr class="is-hidden-mobile">
                        </section>
                        <section id="treatments">
                              <h2 class="h500">Behandla din akne</h2>
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
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
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
                              $reviews = array(
                                    new Review(
                                          stars: 5,
                                          brand: 'Trustpilot',
                                          logo_url: 'images/brands/trustpilot.svg',
                                          title: 'Allt gick jätte bra!',
                                          text: "Allt gick jätte bra, personal var snäll och trevlig med min dotter. Min dotter var orolig för behandling hur ska det vara därför har det varit så lång tid innan vi kommit tillbaka och börjat med behandling. Det var inte lätt för henne men hon är jätte nöjd och glad när hon såg bra resultat /ändring på hennes ansikte. Tack så jätte mycket!!",
                                          signature: 'Emily'
                                    ),
                                    new Review(
                                          stars: 5,
                                          brand: 'Google',
                                          logo_url: 'images/brands/trustpilot.svg',
                                          title: 'Man behöver inte klä av sig',
                                          text: "Man behöver inte klä av sig för behandling. Behandlaren känns inte stressad, sitter kvar utan att springa iväg för att uträtta annat! Frågar inte ut en. Försöker inte pracka på en produkter. Är trevlig och hjälpsam",
                                          signature: 'Emily'
                                    ),
                                    new Review(
                                          stars: 5,
                                          brand: 'Trustpilot',
                                          logo_url: 'images/brands/trustpilot.svg',
                                          title: 'Otroligt nöjd',
                                          text: "Efter bara tre månader hos bästa Emma har min hud blivit så mycket bättre! Efter en graviditet och en kombination av hormonell och bakteriell acne så har jag äntligen börjar komma tillbaks till min gamla hy. Är verkligen så himla nöjd. Har gjort ansiktsbehandling mot acne samt kört acnespecialistens produkter och kan bara säga gott om dem!",
                                          signature: 'Emily'
                                    ),
                                    new Review(
                                          stars: 5,
                                          brand: 'Google',
                                          logo_url: 'images/brands/trustpilot.svg',
                                          title: 'Nöjd',
                                          text: "Ett första besök som absolut kommer leda till ett till. Bra och tydlig information om vad som skulle vara bäst för min hy.",
                                          signature: 'Emily'
                                    ),
                                    new Review(
                                          stars: 5,
                                          brand: 'Trustpilot',
                                          logo_url: 'images/brands/trustpilot.svg',
                                          title: 'Kunniga och bra!',
                                          text: "Mina tonårsdöttrar har båda gått till acnespecialisten under flera år med både mindre och större problemområden. Vi har alltid fått professionell och kunnig behandling, bra produkter och bra råd, som också hjälper fint!",
                                          signature: 'Emily'
                                    ),
                              );
                              $reviews_narrow = true;
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                              ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="omdomen">Läs fler omdömen</a>
                        </section>
                        <section id="faq">
                              <h2 class="big l10n">Frågor & Svar</h2>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="faq">Läs fler frågor & Svar</a>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide">View all articles</a>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister">View all specialists</a>
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
                              <a href="brands" class="button compact text is-hidden-mobile">
                                    <span class="l10n">Se alla varumärken</span>
                                    <?php icon('navigate-next') ?>
                              </a>
                        </div>
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="brands">View all brands</a>
                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>