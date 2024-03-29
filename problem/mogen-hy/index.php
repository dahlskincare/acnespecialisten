<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Mogen Hy - Orsaker, Behandling och Förebyggande | Acnespecialisten';
$seo_description = 'Lär dig allt om mogen hy, från dess orsaker till hur man behandlar och förebygger tecken på åldrande. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'mogen hy, behandling av mogen hy, orsaker till mogen hy, förebygga ålderstecken, hudåldrande, rynkor, fina linjer, ålderfläckar, hudföryngring';

$title = 'Mogen Hy';

$image_small = 'bilder/problem/424x324/mogen-hy.webp';
$image_large = 'bilder/problem/424x456/mogen-hy.webp';
$image_title = 'Visar en hud med tecken på åldrande';
$image_alt = 'Bild som illustrerar hur mogen hy ser ut';
$description = 'Här förklarar vi vad som kännetecknar mogen hy, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika tecken på åldrande, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$akas = [
      new Link(
            label: 'Åldrande hy',
            url: null,
            title: 'Åldrande hy'
      ),
      new Link(
            label: 'Ålderstecken',
            url: null,
            title: 'Ålderstecken'
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "consultation-booking?problem=mature-skin";
$consultation_url_title = "Gratis Konsultation för Mogen Hy";

$booking_url_label = "Boka behandling";
$booking_url = "treatment-booking?problem=mature-skin";
$booking_url_title = "Boka Behandling för Mogen Hy";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Mogen Hy";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Behandling för Mogen Hy";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Mogen Hy";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Behandling för Mogen Hy";

$nav_buttons = array(
      'about' => 'Om mogen hy',
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

$about_title = 'Om mogen hy';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är mogen hy?',
            content: '<p class="p200">Mogen hy är en term som oftast används för att beskriva hudens tillstånd när den börjar visa tecken på åldrande. Dessa tecken kan inkludera rynkor, fina linjer, förlust av spänst och elasticitet, torrhet, ojämn hudton, pigmentfläckar och förtjockning av huden. En annan viktig förändring är att huden kan bli tunnare och förlora sin naturliga förmåga att behålla fukt, vilket leder till torrhet. Mogen hy kan också vara mer benägen för rodnad eller ha en minskad förmåga att läka snabbt efter skador.</p>',
            extended_content: '<p class="p200 mt-xl">Med tiden kan också hudens porer bli mer framträdande, särskilt om de tidigare varit blockerade av talg och döda hudceller. Även om oljeproduktionen kan minska med åldern, kan detta paradoxalt nog leda till både torrhet och förstorade porer på grund av en ansamling i porerna. Hudens yttre barriär kan också försvagas, vilket gör den mer sårbar för yttre skadliga faktorer som föroreningar och UV-strålar.</p>
            <p class="p200 mt-xl">Utöver detta påverkas huden av de naturliga sänkningarna av vissa hormoner i kroppen. Till exempel minskar östrogennivåerna med åldern, vilket direkt påverkar hudens förmåga att producera kollagen och bevara fukt. Denna hormonella förändring kan leda till en ökad torrhet och en minskning av hudens övergripande tjocklek och densitet. Slutligen, med tiden, kan huden också förlora sin förmåga att effektivt förnya sig själv, vilket kan leda till en upphopning av döda hudceller på ytan, vilket resulterar i en tråkigare hudton.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man mogen hy?',
            content: '<p class="p200">Mogen hy är en oundviklig del av den naturliga åldringsprocessen, men vad är de bakomliggande orsakerna? För det första börjar biologisk åldrande redan i 20-årsåldern. Med tiden minskar kollagenproduktionen, en kritisk komponent för hudens struktur. Denna minskning av kollagen leder till att huden blir tunnare och mindre elastisk, vilket i sin tur ger upphov till rynkor och fina linjer. Dessutom minskar hudens naturliga talgproduktion, vilket kan leda till torrhet. Även hudens självläkningsförmåga minskar med åldern, vilket resulterar i längre återhämtningstider efter skador.</p>',
            extended_content: '<p class="p200 mt-xl">Hormonella förändringar spelar också en betydande roll. När vi åldras minskar nivåerna av vissa hormoner, såsom östrogen, vilket kan påverka hudens tjocklek, fuktighetsnivå och elasticitet. Denna hormonella förändring kan leda till en förlust av hudens fyllighet samt en ökning av torrhet och känslighet. Externa faktorer som UV-strålar från solen är också avgörande för hur vår hud åldras. UV-strålningen skadar hudens kollagen och elastin, vilket framkallar rynkor, åldersfläckar och andra åldrande tecken. Andra miljöfaktorer, såsom föroreningar och rök, kan också påskynda hudens åldrande. Rökning, särskilt, kan minska blodflödet till huden, vilket förvärrar åldrandet.</p>
            <p class="p200 mt-xl">Våra livsstilsval kan även influera hur vår hud åldras. Saker som otillräcklig sömn, dålig kost, stress och alkoholkonsumtion kan alla bidra till att vår hud åldras i förtid. Omvänt kan en balanserad kost rik på antioxidanter, regelbunden motion och tillräckligt med sömn hjälpa till att stödja hudens hälsa och fördröja åldrandet. Slutligen spelar våra gener en roll i hur och när vi börjar visa tecken på åldrande. Vissa människor kan börja märka dessa tecken tidigare än andra på grund av deras genetiska predisposition. Medan vi inte kan kontrollera alla dessa faktorer, kan medvetna val och förståelse hjälpa oss att ta hand om vår hud på bästa möjliga sätt.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'livsstil' => 'Livsstil', 'sol' => 'Sol')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får mogen hy?',
            content: '<p class="p200">Alla människor kommer oundvikligen att uppleva mogen hy eftersom det är en del av den naturliga åldringsprocessen. Men hur och när tecknen på mogen hy framträder kan variera kraftigt mellan individer. Många faktorer, både genetiska och yttre, påverkar hur vår hud utvecklas med tiden. Genetik spelar en avgörande roll i när vi börjar visa tecken på mogen hy. Precis som vissa familjer kan ha en historia av tidigt gråa hår eller skallighet, kan vissa ha en genetisk predisposition för tidiga rynkor eller åldersfläckar. Medan vi inte kan ändra våra gener, kan vi vara medvetna om dessa genetiska tendenser och anpassa vår hudvård därefter.</p>',
            extended_content: '<p class="p200 mt-xl">Hudtyp kan också påverka hur och när tecknen på mogen hy uppträder. Till exempel tenderar personer med ljusare hudtoner att visa tecken på åldrande snabbare jämfört med dem med mörkare hudtoner, eftersom ljusare hud är mer känslig för UV-skador. Exponering för yttre faktorer påverkar också hudens åldrande. Människor som spenderar mycket tid i solen utan adekvat solskydd kommer troligtvis att märka tecken på mogen hy tidigare än de som undviker solen. Samspelet mellan solskador och genetik kan förstärka åldrandet av huden. Till exempel kan någon med en genetisk predisposition för rynkor som också spenderar mycket tid i solen uppleva djupare och mer framträdande rynkor.</p>
            <p class="p200 mt-xl">Livsstil och allmänna hälsa har också en inverkan. Rökare, till exempel, kan märka tecken på mogen hy tidigare än icke-rökare på grund av de skadliga kemikalierna i cigaretter. På samma sätt kan de som utsätter sig för mycket stress eller inte följer en hälsosam diet också se tecken på åldrande tidigare. Slutligen är det viktigt att förstå att åldrandet är en naturlig process, och medan vi kan vidta åtgärder för att fördröja tecknen på mogen hy, kommer alla till slut att uppleva dem. Emellertid kan medvetenhet och proaktiv vård hjälpa oss att omfamna denna fas med självförtroende och nåd.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna', 'aldre' => 'Äldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man mogen hy?',
            content: '<p class="p200">När vi talar om var på kroppen man får mogen hy, refererar vi oftast till de områden som är mest utsatta för yttre påverkan och där tecknen på åldrande tydligt framträder. Ansiktet är det mest uppenbara området eftersom det ständigt är exponerat för omgivningen. Med tiden börjar huden på ansiktet visa tecken som fina linjer, rynkor, pigmentförändringar och förlust av elasticitet, särskilt runt ögonen, munnen och på pannan. Halsen och dekolletaget är andra områden där tecknen på mogen hy ofta blir synliga. Dessa områden har tunnare hud jämfört med andra delar av kroppen, vilket gör dem särskilt känsliga för solskador och andra yttre påverkande faktorer. Åldersfläckar, linjer och förlust av hudens fasthet är vanliga problem här.</p>',
            extended_content: '<p class="p200 mt-xl">Händerna är ytterligare ett område där mogen hy kan bli särskilt märkbar. Händerna utsätts ständigt för elementen, och deras hud är ofta mindre skyddad jämfört med andra delar av kroppen. Detta kan leda till torrhet, fläckighet, och framträdande vener. Förutom dessa specifika områden kan huden på kroppen generellt förlora sin fasthet och smidighet över tid. Områden som armar, ben och buk kan visa tecken på mogen hy i form av slapp hud, särskilt om det har skett snabba viktfluktuationer.</p>
            <p class="p200 mt-xl">Det är också värt att nämna att mogen hy kan påverka huden över hela kroppen, inte bara på ytan. Åldrandet kan påverka hudens djupare lager, vilket minskar produktionen av kollagen och elastin – två proteiner som är avgörande för hudens struktur och elasticitet. Det är viktigt att notera att medan dessa tecken på mogen hy är naturliga och en del av åldringsprocessen, finns det sätt att fördröja och minska deras framträdande genom solskydd, rätt hudvård och andra preventiva åtgärder. Oavsett var på kroppen tecknen på mogen hy uppträder, finns det strategier och behandlingar för att hantera dem och hjälpa individer att känna sig mer bekväma och självsäkra i sin hud.</p>',
            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlarna')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten kopplas du till en personlig hudterapeut som hjälper dig att identifiera tecknen på mogen hy och skapar en skräddarsydd behandlingsplan för dina specifika behov.',

            url_label: 'Få gratis konsultation',
            url: 'gratis-hudkonsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva behandlingar särskilt anpassade för mogen hy. Våra metoder är designade för att ge din hud förnyad lyster, minska fina linjer och förbättra hudens elasticitet.',

            url_label: 'Se behandlingar för mogen hy',
            url: 'behandlingar/mogenhy',
            url_title: 'Utforska våra skräddarsydda behandlingar för mogen hy'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi rådgör dig om den bästa hudvårdsrutinen och produkterna för mogen hy, för att bevara hudens ungdomlighet och motverka framtida ålderstecken.',

            url_label: 'Se produkter',
            url: 'https://swedskin.com',
            url_title: 'Hitta de bästa produkterna för mogen hy'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'Om din hud har ålderstecken såsom pigmentfläckar, förlorad elasticitet eller djupare rynkor, erbjuder vi behandlingsmetoder som laser, microneedling och kemisk peeling för att förnya och förbättra hudens utseende.',

            url_label: 'Se behandlingar för ålderstecken',
            url: 'behandlingar/ålderstecken',
            url_title: 'Upptäck effektiva behandlingar för ålderstecken'
      ),
);

$treatment_link = '<a href="problem/mogen-hy/behandla-mogen-hy" title="Utforska effektiva behandlingar mot mogen hy" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot mogen hy</a>';

/*
$types_title = 'Olika typer av mogen hy';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Mogen hy baserat på ålder',
            content: '<p class="p200">Mogen hy uppträder oftast som ett resultat av den naturliga åldringsprocessen. Ålderstecken kan börja dyka upp så tidigt som i 30-årsåldern, intensifieras under 40- och 50-årsåldern, och bli mer framträdande efter 60. Dessa förändringar kan inkludera torrhet, rynkor, minskad elasticitet och en ojämn hudton. Faktorer som solskada, genetik och hudvårdsvanor spelar också en roll i hur huden åldras. Det är viktigt att förstå de unika behoven i varje livsfas för att bäst vårda och upprätthålla en frisk hud.</p>',
            types: array(
                  new BasedType(
                        title: 'Tidig mogen hy',
                        subtitle: 'Vanligtvis i 30-40 årsåldern',

                        image_url: 'images/problems/102x102/tidigmogenhy.webp',
                        image_alt: 'Bild av tidig mogen hy',
                        image_title: 'Mogen hy i tidig ålder',

                        url: 'problem/mogenhy/typer/tidigmogenhy',
                        url_title: 'Utforska information om tidig mogen hy'
                  ),
                  new BasedType(
                        title: 'Mogen hy',
                        subtitle: 'Vanligtvis i 40-50 årsåldern',

                        image_url: 'images/problems/102x102/mogenhy.webp',
                        image_alt: 'Bild av mogen hy',
                        image_title: 'Mogen hy under medelåldern',

                        url: 'problem/mogenhy/typer/mogenhy',
                        url_title: 'Utforska information om mogen hy'
                  ),
                  new BasedType(
                        title: 'Avancerad mogen hy',
                        subtitle: '50 år och äldre',

                        image_url: 'images/problems/102x102/avanceradmogenhy.webp',
                        image_alt: 'Bild av avancerad mogen hy',
                        image_title: 'Mogen hy hos äldre',

                        url: 'problem/mogenhy/typer/avanceradmogenhy',
                        url_title: 'Utforska information om avancerad mogen hy'
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Mogen hy baserat på svårighetsgrad',
            content: '<p class="p200">Mogen hy kan variera i svårighetsgrad beroende på tecken på åldrande som torrhet, fina linjer, djupa rynkor, pigmentförändringar och minskad elasticitet. I milda fall kan tecknen på mogen hy vara subtila, som fina linjer och något minskad fasthet. Allvarligare fall kan visa djupa rynkor, betydande torrhet och betydande förlust av hudelasticitet. Svårighetsgraden kan påverka en persons självkänsla och hur de upplever sitt utseende. Det är viktigt att identifiera och vårda mogen hy baserat på dess svårighetsgrad för att säkerställa bästa möjliga hudvård och bevara hudens ungdomliga utseende så länge som möjligt.</p>',
            types: array(
                  new BasedType(
                        title: 'Mild mogen hy',
                        subtitle: 'Fina linjer och lätt torrhet',

                        image_url: 'images/problems/102x102/mild-mogenhy.webp',
                        image_alt: 'Bild av mild mogen hy',
                        image_title: 'Mild mogen hy exemplifierad',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Medelsvår mogen hy',
                        subtitle: 'Djupare rynkor och märkbar torrhet',

                        image_url: 'images/problems/102x102/medelsvar-mogenhy.webp',
                        image_alt: 'Bild av medelsvår mogen hy',
                        image_title: 'Medelsvår mogen hy exemplifierad',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Svår mogen hy',
                        subtitle: 'Betydande elasticitetsförlust och mycket torr',

                        image_url: 'images/problems/102x102/svar-mogenhy.webp',
                        image_alt: 'Bild av svår mogen hy',
                        image_title: 'Svår mogen hy exemplifierad',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Mogen hy baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer kan påverka mogen hys tillstånd och framhäva tecken på åldrande. Exempelvis kan solskador, miljöföroreningar, felaktig hudvård, och andra yttre påverkan bidra till en för tidig åldring av huden. Dessa faktorer kan leda till bland annat pigmentförändringar, förlorad elasticitet, torrhet och djupare rynkor.</p>',
            types: array(
                  new BasedType(
                        title: 'Solskadad hy',
                        subtitle: 'Skador orsakade av UV-strålning',

                        image_url: 'images/problems/102x102/solskadad-hy.webp',
                        image_alt: 'Bild av solskadad hy',
                        image_title: 'Exempel på solskadad hy',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Miljöpåverkad hy',
                        subtitle: 'Påverkan från föroreningar och toxiner',

                        image_url: 'images/problems/102x102/miljopaverkad-hy.webp',
                        image_alt: 'Bild av miljöpåverkad hy',
                        image_title: 'Exempel på miljöpåverkad hy',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Livsstilspåverkad hy',
                        subtitle: 'Effekter av livsstilsval som kost, stress och sömn',

                        image_url: 'images/problems/102x102/livsstilspaverkad-hy.webp',
                        image_alt: 'Bild av livsstilspåverkad hy',
                        image_title: 'Exempel på livsstilspåverkad hy',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Mogen hy baserat på område',
            content: '<p class="p200">Mogen hy kan uppvisa tecken på åldrande på olika områden av kroppen. Ansiktet är där de mest framträdande tecknen på mogen hy oftast observeras, som fina linjer, rynkor och åldersfläckar. Men tecken på mogen hy kan även observeras på halsen, dekolletaget och händerna. Dessa områden kan visa åldersrelaterade förändringar på grund av solskador, genetik och andra yttre faktorer.</p>',
            types: array(
                  new BasedType(
                        title: 'Mogen hy i ansiktet',
                        subtitle: 'De vanligaste tecknen på åldrande',

                        image_url: 'images/problems/102x102/mogen-hy-ansikte.webp',
                        image_alt: 'Bild av mogen hy i ansiktet',
                        image_title: 'Exempel på mogen hy i ansiktet',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Mogen hy på halsen',
                        subtitle: 'Visar ofta tidiga tecken på åldrande',

                        image_url: 'images/problems/102x102/mogen-hy-hals.webp',
                        image_alt: 'Bild av mogen hy på halsen',
                        image_title: 'Exempel på mogen hy på halsen',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Mogen hy på händerna',
                        subtitle: 'En ofta förbisedd indikator på åldrande',

                        image_url: 'images/problems/102x102/mogen-hy-hand.webp',
                        image_alt: 'Bild av mogen hy på händerna',
                        image_title: 'Exempel på mogen hy på händerna',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
);

$symptoms_title = 'Mogen hy symptom';

$symptoms = array(
      new Symptom(
            name: 'Rynkor och fina linjer',
            aka: 'Tecken på åldrande',
            content: 'Med tiden, på grund av naturligt åldrande och yttre faktorer som UV-exponering, förlorar huden sin elasticitet och fukt, vilket resulterar i uppkomsten av rynkor och fina linjer.',
            
            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/rynkor.webp',
            image_alt: 'Bild av rynkor och fina linjer',
            image_title: 'Rynkor och fina linjer'
      ),
      new Symptom(
            name: 'Förlorad hudelasticitet',
            aka: 'Hudens slapphet',
            content: 'När huden förlorar sin elasticitet blir den mindre stram och fast. Detta leder till säckighet och ett äldre utseende.',
            
            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/forlorad-hudelasticitet.webp',
            image_alt: 'Bild av förlorad hudelasticitet',
            image_title: 'Förlorad hudelasticitet'
      ),
      new Symptom(
            name: 'Pigmentförändringar',
            aka: 'Åldersfläckar och ojämn hudton',
            content: 'Ökad melaninproduktion kan leda till pigmentförändringar som åldersfläckar och ojämn hudton. Dessa mörka fläckar blir mer framträdande med åldern.',
            
            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/pigmentatforandringar.webp',
            image_alt: 'Bild av pigmentförändringar',
            image_title: 'Pigmentförändringar'
      ),
      new Symptom(
            name: 'Torrt och skör',
            aka: 'Minskad fukt i huden',
            content: 'Med tiden minskar hudens förmåga att behålla fukt, vilket gör den mer benägen att bli torr, skör och mindre smidig.',
            
            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/torr-hy.webp',
            image_alt: 'Bild av torr och skör hud',
            image_title: 'Torrt och skört'
      ),
      new Symptom(
            name: 'Minskad kollagenproduktion',
            aka: 'Hudens stödstruktur försämras',
            content: 'Kollagen är ett viktigt protein som ger huden dess styrka och elasticitet. Med åldern minskar produktionen, vilket kan leda till slapp hud och rynkor.',
            
            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/minskad-kollagenproduktion.webp',
            image_alt: 'Bild av minskad kollagenproduktion',
            image_title: 'Minskad kollagenproduktion'
      ),
      new Symptom(
            name: 'Förlust av hudens volym',
            aka: 'Huden känns mindre fyllig',
            content: 'Med åldrandet kan huden förlora sin naturliga volym, vilket leder till att den känns mindre fyllig och mindre elastisk. Detta kan orsakas av en kombination av minskad kollagenproduktion, förlust av fettvävnad och andra åldersrelaterade förändringar.',
            
            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/forlust-volymwebp',
            image_alt: 'Bild av förlust av hudens volym',
            image_title: 'Förlust av hudens volym'
      ),
      new Symptom(
            name: 'Minskad lyster',
            aka: 'Trött och glåmig hy',
            content: 'Lystern i huden kan minskas över tid på grund av en kombination av yttre skadliga faktorer som UV-strålning, föroreningar och rökning, samt inre faktorer som minskad blodcirkulation och hudcellsförnyelse. Resultatet är en hud som ser trött, glåmig och mindre livfull ut.',
            
            url_label: null,
            url: null,
            url_title: null,

            image: 'images/symptoms/102x102/minskad-lyster.webp',
            image_alt: 'Bild av minskad lyster',
            image_title: 'Minskad lyster'
      ),
);
*/
$headline01 = "01. Utforska din mogen hy";

$service = new Service(
      title: 'Konsultation för mogen hy',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en hudterapeut utförs en djupgående analys av din mogen hy. Vi tar före-bilder på din hud, identifierar tecken på åldrande, och rekommenderar en lämplig behandling. Vidare skräddarsyr vi en behandlingsplan anpassad efter dina individuella behov.',

      image_small: 'images/services/200x200/konsultation-mogenhy.webp',
      image_large: 'images/services/200x200/konsultation-mogenhy.webp',
      image_alt: 'Bild av en konsultation för mogen hy',
      image_title: 'Konsultation för mogen hy',

      url_label: 'Läs mer om vår konsultation för mogen hy',
      url: 'konsultation-mogenhy',
      url_title: 'Klicka här för att läsa mer om konsultation för mogen hy',

      consultation_url_label: 'Boka tid för konsultation för mogen hy',
      consultation_url: 'consultation-booking?problem=mogenhy',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för mogen hy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla tecken på mogen hy";

$services = array(
      new Service(
            title: 'Ansiktsbehandling för mogen hy',
            duration: '60 min',
            price: '1595 kr',
            content: 'Denna ansiktsbehandling är speciellt anpassad för mogen hy. Den syftar till att återfukta, boosta kollagenproduktionen och förbättra hudens elasticitet. Behandlingen hjälper till att minska uppkomsten av fina linjer och rynkor.',

            image_small: 'images/services/200x200/ansiktsbehandling-mogenhy.webp',
            image_large: 'images/services/200x200/ansiktsbehandling-mogenhy.webp',
            image_alt: 'Bild av en ansiktsbehandling för mogen hy',
            image_title: 'Ansiktsbehandling för mogen hy',

            url: 'behandlingar/ansiktsbehandling-mogenhy',
            url_label: 'Läs mer om ansiktsbehandling för mogen hy',
            url_title: 'Klicka här för att läsa mer om ansiktsbehandling för mogen hy',

            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url: 'consultation-booking?problem=mogenhy&service=classicFacials',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för mogen hy',

            booking_url_label: 'Boka tid för ansiktsbehandling för mogen hy',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/mogenspecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/mogenhy-konsultation-1643922',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling för mogen hy'
      ),
      new Service(
            title: 'Kemisk peeling för mogen hy',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling för mogen hy är designad för att exfoliera döda hudceller, boosta cellförnyelse och förbättra hudens textur. Resultatet är en jämnare hudton, förnyad lyster och minskade tecken på åldrande.',

            image_small: 'images/services/200x200/kemisk-peeling-mogenhy.webp',
            image_large: 'images/services/200x200/kemisk-peeling-mogenhy.webp',
            image_alt: 'Bild av kemisk peeling för mogen hy',
            image_title: 'Kemisk peeling för mogen hy',

            url: 'behandlingar/kemisk-peeling-mogenhy',
            url_label: 'Läs mer om kemisk peeling för mogen hy',
            url_title: 'Klicka här för att läsa mer om kemisk peeling för mogen hy',

            consultation_url: 'consultation-booking?problem=mogenhy&service=chemicalPeeling',
            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för mogen hy',

            booking_url: 'https://www.bokadirekt.se/boka-tjanst/mogenspecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/mogenhy-konsultation-1643922',
            booking_url_label: 'Boka tid för kemisk peeling för mogen hy',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för mogen hy'
      ),

      new Service(
            title: 'Microneedling för mogen hy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling för mogen hy stimulerar hudens naturliga kollagenproduktion, vilket hjälper till att minska fina linjer, rynkor och andra tecken på åldrande. Denna behandling kan effektivt förbättra hudens struktur och elasticitet, vilket ger ett yngre och mer vitalt utseende.',

            image_small: 'images/services/200x200/microneedling-mogenhy.webp',
            image_large: 'images/services/200x200/microneedling-mogenhy.webp',
            image_alt: 'Bild av microneedling för mogen hy',
            image_title: 'Microneedling för mogen hy',

            url: 'behandlingar/microneedling-mogenhy',
            url_label: 'Läs mer om microneedling för mogen hy',
            url_title: 'Klicka här för att läsa mer om microneedling för mogen hy',

            consultation_url_label: 'Boka tid för hudkonsultation',
            consultation_url: 'consultation-booking?problem=mogenhy&service=microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för mogen hy',

            booking_url_label: 'Boka tid för microneedling för mogen hy',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/mogenspecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/mogenhy-konsultation-1643922',
            booking_url_title: 'Klicka för att boka tid för en microneedling för mogen hy'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med tecken på mogen hy?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag söka hjälp med tecken på mogen hy?',
            image_title: 'När ska jag söka hjälp med tecken på mogen hy?',
            content: '<p class="p200">Mogen hy med tecken på åldrande, som fina linjer, rynkor och förlust av elasticitet, är en naturlig del av åldrandeprocessen. Men för vissa kan dessa tecken på åldrande påverka självkänslan och orsaka obehag. Om du märker att din mogen hy börjar påverka ditt välbefinnande, eller om du har provat olika produkter och behandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att komma ihåg att det inte finns någon "minsta gräns" för när det är lämpligt att söka professionell vård.</p>
            <p class="p200 mt-m">Hos en hudspecialist kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just dina behov. En hudterapeut kan analysera din hudtyp, diskutera möjliga orsaker till dina hudproblem och rekommendera den mest effektiva behandlingsmetoden för dig. Detta kan inkludera allt från djuprengöring och återfuktning till mer avancerade behandlingar som microneedling och kemisk peeling. Så, om du känner att tecknen på mogen hy påverkar ditt självförtroende eller om du bara vill förbättra hudens utseende, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot en förbättrad hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mogen hy?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mogen hy?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mogen hy?',
            content: '<p class="p200">Om du är ute efter en effektiv och långsiktig lösning på utmaningarna med mogen hy, är AcneSpecialisten det självklara valet. Vi har över 30 års erfarenhet inom hudvård och en specialisering i att behandla tecken på åldrande såsom fina linjer, rynkor och minskad elasticitet.</p>
            <p class="p200 mt-m">Vi använder de senaste metoderna och teknologierna inom hudvård för att du ska uppnå bästa möjliga resultat. Vårt team av hudterapeuter står redo att erbjuda en individuellt anpassad behandlingsplan och att stötta dig genom hela processen. Med regelbundna uppföljningar och anpassade hemmavårdsprogram ser vi till att din huds vitalitet förblir på topp.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten innebär att du får tillgång till den mest avancerade och effektiva behandlingen för din mogen hy. Men det är inte allt. Vi ser dig som en partner i din hudvårdsresa och är dedikerade till att hjälpa dig att uppnå och bibehålla en frisk och ungdomlig hy. Vårt engagemang, kunskap och erfarenhet gör oss till ditt bästa val för behandling av mogen hy.</p>',
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

$results_url_label = "Se fler resultat";
$results_url_title = "se flera behandlingsresultat för mogen hy";


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
      'Generellt om mogen hy' => array(
            new Question(
                  title: 'Vad menas med termen "mogen hy"?',
                  text: '<p class="p200">Mogen hy hänvisar till huden som börjar visa tecken på åldrande. Dessa tecken kan inkludera rynkor, fina linjer, förlust av elasticitet, förtunning av huden, ojämn hudton, pigmentförändringar och minskad fuktighet. Medan åldrande är en naturlig process, kan yttre faktorer som solexponering, kost, och livsstilsval också påverka hudens åldrande.</p>'
            ),
            new Question(
                  title: 'Vid vilken ålder börjar huden oftast klassificeras som mogen?',
                  text: '<p class="p200">Det finns ingen exakt ålder där huden börjar klassificeras som "mogen", eftersom åldrande är en individuell process. Men många människor börjar märka förändringar i sin hud runt 40-årsåldern. Dessa förändringar kan vara mer eller mindre framträdande beroende på genetik, livsstil och hudvårdsvanor.</p>'
            ),
            new Question(
                  title: 'Hur påverkar hormonella förändringar, såsom menopaus, mogen hy?',
                  text: '<p class="p200">Menopaus och de hormonella förändringar som följer med den kan ha en märkbar inverkan på huden. Östrogen, ett hormon som minskar under menopaus, spelar en viktig roll i produktionen av kollagen och hudens naturliga oljor. När nivåerna av östrogen minskar, kan huden bli torrare, mindre elastisk, och mer benägen för rynkor och fina linjer.</p>'
            ),
            new Question(
                  title: 'Vilken roll spelar genetik i hur och när huden blir mogen?',
                  text: '<p class="p200">Genetik spelar en betydande roll i hudens åldrande process. Om dina föräldrar eller nära släktingar har en huds som åldras långsamt eller visa tecken på åldrande vid en högre ålder, kan du också ha en genetisk benägenhet att uppleva samma saker. Detta betyder dock inte att externa faktorer som solexponering och livsstilsval inte kommer att ha någon inverkan.</p>'
            ),
            new Question(
                  title: 'Vilken inverkan har kost och näring på mogen hy?',
                  text: '<p class="p200">Kost och näring spelar en avgörande roll för huden. En balanserad kost rik på antioxidanter, omega-3-fettsyror, vitaminer och mineraler kan bidra till en hälsosam hud. Mat som är rik på vitamin C och E, till exempel, kan hjälpa till att bekämpa fria radikaler och skydda huden från oxidativ stress.</p>'
            ),
            new Question(
                  title: 'Kan miljöfaktorer, som luftfuktighet och föroreningar, påverka mogen hy mer än yngre hy?',
                  text: '<p class="p200">Ja, mogen hy kan vara mer känslig för yttre påverkan som luftfuktighet och föroreningar. Denna hudtyp har ofta en minskad förmåga att hålla kvar fukt, vilket gör den mer sårbar för torrhet i låg luftfuktighet. Föroreningar kan också påskynda åldringsprocessen genom att orsaka oxidativ stress, vilket kan vara mer skadligt för en redan åldrande hud.</p>'
            ),
            new Question(
                  title: 'Är det möjligt att förhindra vissa tecken på åldrande, eller handlar det mest om att hantera dem när de uppstår?',
                  text: '<p class="p200">Medan vissa tecken på åldrande är oundvikliga på grund av genetik och den naturliga åldringsprocessen, kan många yttre tecken på åldrande förebyggas eller minimeras. Regelbunden hudvård, solskydd, en balanserad kost, och en hälsosam livsstil kan alla bidra till att minska eller fördröja tecknen på hudens åldrande. När tecknen väl dyker upp finns det behandlingar och produkter som kan hjälpa till att hantera dem.</p>'
            ),
      ),
      'Behandling mot mogen hy' => array(
            new Question(
                  title: 'Vilka typer av behandlingar rekommenderas oftast för mogen hy?',
                  text: '<p class="p200">För mogen hy rekommenderas ofta behandlingar som fokuserar på återfuktning, återställande av hudens elasticitet och reduktion av fina linjer och rynkor. Detta kan inkludera mikroneedling, kemiska peelingar och laserbehandlingar. Det är också vanligt att rekommendera produkter med aktiva ingredienser som retinol, hyaluronsyra och antioxidanter.</p>'
            ),
            new Question(
                  title: 'Vilken roll spelar hemmavård i behandlingen av mogen hy?',
                  text: '<p class="p200">Hemmavård är avgörande för att upprätthålla resultaten av professionella behandlingar och för att stödja hudens hälsa. Detta innebär att använda kvalitativa produkter som är lämpliga för mogen hy och att följa en regelbunden hudvårdsrutin som rengöring, toning, återfuktning och solskydd.</p>'
            ),
            new Question(
                  title: 'Finns det några specifika ingredienser jag bör leta efter i produkter för mogen hy?',
                  text: '<p class="p200">Absolut, för mogen hy är det fördelaktigt att leta efter produkter som innehåller retinol, hyaluronsyra, peptider, ceramider, antioxidanter (som vitamin C och E) och solskyddsfaktor. Dessa ingredienser hjälper till att återställa hudens elasticitet, återfukta, skydda mot fria radikaler och förebygga ytterligare åldrande.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till mogen hy";

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
$skinguide_url_title = "Läs fler guider om mogen hy";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av mogen hy',
            image_title: 'Cazzandra Lindberg - Expert på behandling av mogen hy'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på mogen hy',
            image_title: 'Veronika Benedik - Specialist inom vård av mogen hy'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom behandling av mogen hy',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på mogen hy'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av mogen hy',
            image_title: 'Vilma Libom - Expert inom vård av mogen hy'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter specialiserade på mogen hy";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: '/problem/acnearr',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'problem/rosacea',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit',
            url_title: 'Perioral dermatit',
      ),
);
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
$brands_url_title = "Varumärken för behandling av mogen hy";

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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot akne" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>