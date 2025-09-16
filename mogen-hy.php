<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandla åldrande och mogen hy | AcneSpecialisten';
$seo_description = 'Vi hjälper dig att hitta rätt behandling för mogen och åldrande hud. Boka en tid för gratis konsultation och få en skräddarsydd hudvårdsrutin →';
$seo_keywords = 'mogen hy, orsaker till mogen hy, förebygga ålderstecken, hudåldrande, rynkor, fina linjer, ålderfläckar';
$seo_image = 'bilder/hudproblem/424x456/mogen-hy.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Mogen hy', '/mogen-hy.php'),
);

$image_small = 'bilder/hudproblem/358x274/mogen-hy.webp';
$image_large = 'bilder/hudproblem/424x456/mogen-hy.webp';
$image_title = 'Visar en hud med tecken på åldrande';
$image_alt = 'Bild som illustrerar hur mogen hy ser ut';

$green_banner_content = new GreenBannerContent(
      title: 'Mogen Hy',
      description: 'Mogen hy visar tecken på åldrande såsom rynkor, fina linjer och slapp hy. Denna sida fokuserar på att förstå orsakerna bakom hudens åldrande och hur de påverkar hudens utseende och känsla.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Wrinkles', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Wrinkles', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Wrinkles', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Wrinkles', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
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
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är mogen hy?',
            content: '<p class="p200">Mogen hy är en term som oftast används för att beskriva hudens tillstånd när den börjar visa tecken på åldrande. Dessa tecken kan inkludera rynkor, fina linjer, förlust av spänst och elasticitet, torrhet, ojämn hudton, pigmentfläckar och förtjockning av huden. En annan viktig förändring är att huden kan bli tunnare och förlora sin naturliga förmåga att behålla fukt, vilket leder till torrhet. Mogen hy kan också vara mer benägen för rodnad eller ha en minskad förmåga att läka snabbt efter skador.</p>',
            extended_content: '<p class="p200 mt-xl">Med tiden kan också hudens porer bli mer framträdande, särskilt om de tidigare varit blockerade av talg och döda hudceller. Även om oljeproduktionen kan minska med åldern, kan detta paradoxalt nog leda till både torrhet och förstorade porer på grund av en ansamling i porerna. Hudens yttre barriär kan också försvagas, vilket gör den mer sårbar för yttre skadliga faktorer som föroreningar och UV-strålar.</p>
            <p class="p200 mt-xl">Utöver detta påverkas huden av de naturliga sänkningarna av vissa hormoner i kroppen. Till exempel minskar både det manliga och kvinnliga könshormonerna med åldern, vilket direkt påverkar hudens förmåga att producera kollagen och bevara fukt. Denna hormonella förändring kan leda till en ökad torrhet och en minskning av hudens övergripande tjocklek och densitet. Slutligen, med tiden, kan huden också förlora sin förmåga att effektivt förnya sig själv, vilket kan leda till en ansamling av döda hudceller på ytan, vilket resulterar i en ojämn hudton.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man mogen hy?',
            content: '<p class="p200">Mogen hy är en oundviklig del av den naturliga åldringsprocessen, men vad är de bakomliggande orsakerna? För det första börjar biologisk åldrande redan i 20-årsåldern. Med tiden minskar kollagenproduktionen, en kritisk komponent för hudens struktur. Denna minskning av kollagen leder till att huden blir tunnare och mindre elastisk, vilket i sin tur ger upphov till rynkor och fina linjer. Dessutom minskar hudens naturliga talgproduktion, vilket kan leda till torrhet. Även hudens självläkningsförmåga minskar med åldern, vilket resulterar i längre återhämtningstider efter skador.</p>',
            extended_content: '<p class="p200 mt-xl">Hormonella förändringar spelar också en betydande roll. När vi åldras minskar nivåerna av vissa hormoner, såsom östrogen, vilket kan påverka hudens tjocklek, fuktighetsnivå och elasticitet. Denna hormonella förändring kan leda till en förlust av hudens fyllighet samt en ökning av torrhet och känslighet. Externa faktorer som UV-strålar från solen är också avgörande för hur vår hud åldras. UV-strålningen skadar hudens kollagen och elastin, vilket framkallar rynkor, åldersfläckar och andra ålders tecken. Andra miljöfaktorer, såsom föroreningar och rök, kan också påskynda hudens åldrande. Rökning, särskilt, kan minska blodflödet till huden, vilket påskyndar åldrandet.</p>
            <p class="p200 mt-xl">Våra livsstilsval kan även influera hur vår hud åldras. Saker som otillräcklig sömn, dålig kost, stress och alkoholkonsumtion kan alla bidra till att vår hud åldras i förtid. Omvänt kan en balanserad kost rik på antioxidanter, regelbunden motion och tillräckligt med sömn hjälpa till att stödja hudens hälsa och fördröja åldrandet. Slutligen spelar våra gener en roll i hur och när vi börjar visa tecken på åldrande. Vissa människor kan börja märka dessa tecken tidigare än andra på grund av deras genetiska anlag. Medan vi inte kan kontrollera alla dessa faktorer, kan medvetna val och förståelse hjälpa oss att ta hand om vår hud på bästa möjliga sätt.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'livsstil' => 'Livsstil', 'sol' => 'Sol')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får mogen hy?',
            content: '<p class="p200">Alla människor kommer oundvikligen att uppleva mogen hy eftersom det är en del av den naturliga åldringsprocessen. Men hur och när tecknen på mogen hy framträder kan variera kraftigt mellan individer. Många faktorer, både genetiska och yttre, påverkar hur vår hud utvecklas med tiden. Genetik spelar en avgörande roll i när vi börjar visa tecken på mogen hy. Precis som vissa familjer kan ha en historia av tidigt gråa hår eller skallighet, kan vissa ha en genetiska anlag för tidiga rynkor eller åldersfläckar. Medan vi inte kan ändra våra gener, kan vi vara medvetna om dessa genetiska tendenser och anpassa vår hudvård därefter.</p>',
            extended_content: '<p class="p200 mt-xl">Hudtyp kan också påverka hur och när tecknen på mogen hy uppträder. Till exempel tenderar personer med ljusare hudtoner att visa tecken på åldrande snabbare jämfört med dem med mörkare hudtoner, eftersom ljusare hud är mer känslig för UV-skador. Exponering för yttre faktorer påverkar också hudens åldrande. Människor som spenderar mycket tid i solen utan tillräckligt solskydd kommer troligtvis att märka tecken på åldrande hy tidigare än de som undviker solen. Samspelet mellan solskador och genetik kan förstärka åldrandet av huden. Till exempel kan någon med en genetisk benägenhet för rynkor som också spenderar mycket tid i solen uppleva djupare och mer framträdande rynkor.</p>
            <p class="p200 mt-xl">Livsstil och allmänna hälsa har också en inverkan. Rökare, till exempel, kan märka tecken på mogen hy tidigare än icke-rökare på grund av de skadliga kemikalierna i cigaretter. På samma sätt kan de som utsätter sig för mycket stress eller inte följer en hälsosam diet också se tecken på åldrande tidigare. Slutligen är det viktigt att förstå att åldrandet är en naturlig process, och medan vi kan vidta åtgärder för att fördröja tecknen på åldrande, kommer alla till slut att uppleva dem. Emellertid kan medvetenhet och proaktiv hudvård hjälpa oss att bromsa upp och motverka ålderstecken.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna', '65+' => 'Äldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man mogen hy?',
            content: '<p class="p200">När vi talar om var på kroppen man får mogen hy, refererar vi oftast till de områden som är mest utsatta för yttre påverkan och där tecknen på åldrande tydligt framträder. Ansiktet är det mest uppenbara området eftersom det ständigt är exponerat för omgivningen. Med tiden börjar huden på ansiktet visa tecken som fina linjer, rynkor, pigmentförändringar och förlust av elasticitet, särskilt runt ögonen, munnen och på pannan. Halsen och dekolletaget är andra områden där tecknen på mogen hy ofta blir synliga. Dessa områden har tunnare hud jämfört med andra delar av kroppen, vilket gör dem särskilt känsliga för solskador och andra yttre påverkande faktorer. Åldersfläckar, linjer och förlust av hudens fasthet är vanliga problem här.</p>',
            extended_content: '<p class="p200 mt-xl">Händerna är ytterligare ett område där mogen hy kan bli särskilt märkbar. Händerna utsätts ständigt för elementen, och deras hud är ofta mindre skyddad jämfört med andra delar av kroppen. Detta kan leda till torrhet, fläckighet, och framträdande vener. Förutom dessa specifika områden kan huden på kroppen generellt förlora sin fasthet och smidighet över tid. Områden som armar, ben och buk kan visa tecken på åldrande i form av slapp hud, särskilt om det har skett snabba viktfluktuationer.</p>
            <p class="p200 mt-xl">Det är också värt att nämna att ålderstecken kan påverka huden över hela kroppen, inte bara på ytan. Åldrandet kan påverka hudens djupare lager, vilket minskar produktionen av kollagen och elastin – två proteiner som är avgörande för hudens struktur och elasticitet. Det är viktigt att notera att medan dessa tecken på mogen hy är naturliga och en del av åldringsprocessen, finns det sätt att fördröja och minska deras framträdande genom solskydd, rätt hudvård och behandlingar. Oavsett var på kroppen tecknen på mogen hy uppträder, finns det strategier och behandlingar för att hantera dem och hjälpa individer att känna sig mer bekväma och självsäkra i sin hud.</p>',
            icons: array('ansikte' => 'Ansiktet', 'hander' => 'Händer')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos får du en personlig hudterapeut som hjälper dig att identifiera tecknen på mogen hy och skapar en skräddarsydd behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Wrinkles',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför effektiva behandlingar särskilt anpassade för mogen hy. Våra metoder är framtagna för att ge din hud förnyad lyster, minska fina linjer och förbättra hudens elasticitet.',

            url_label: '',
            url: '',
            url_title: '',
      ),
);

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

                        url: 'hudproblem/mogenhy/typer/tidigmogenhy',
                        url_title: 'Utforska information om tidig mogen hy'
                  ),
                  new BasedType(
                        title: 'Mogen hy',
                        subtitle: 'Vanligtvis i 40-50 årsåldern',

                        image_url: 'images/problems/102x102/mogenhy.webp',
                        image_alt: 'Bild av mogen hy',
                        image_title: 'Mogen hy under medelåldern',

                        url: 'hudproblem/mogenhy/typer/mogenhy',
                        url_title: 'Utforska information om mogen hy'
                  ),
                  new BasedType(
                        title: 'Avancerad mogen hy',
                        subtitle: '50 år och äldre',

                        image_url: 'images/problems/102x102/avanceradmogenhy.webp',
                        image_alt: 'Bild av avancerad mogen hy',
                        image_title: 'Mogen hy hos äldre',

                        url: 'hudproblem/mogenhy/typer/avanceradmogenhy',
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
$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för mogen hy',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en hudterapeut utförs en djupgående analys av din hy. Vi tar före-bilder på din hud, identifierar tecken på åldrande, och rekommenderar en skräddarsydd behandlingsplan.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för mogen hy',
      image_title: 'Konsultation för mogen hy',

      url_label: 'Läs mer om konsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Klicka här för att läsa mer om konsultation för mogen hy',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Wrinkles',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för mogen hy',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Laser mot mogen hy',
            duration: '90 min',
            price: '4595 kr',
            content: 'En avancerad laserbehandling anpassad för att möta de unika behoven hos mogen hud, vilket inkluderar att minska synliga tecken på åldrande såsom fina linjer, rynkor och slapp hy.',

            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling mot mogen hy',
            image_title: 'Laserbehandling mot mogen hy',

            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot mogen hy',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot mogen hy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Wrinkles&method=Method_LaserProblem&area=EMPTY',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot mogen hy',
      ),
      new Service(
            title: 'Kemisk peeling för mogen hy',
            duration: '40 min',
            price: '1995 kr',
            content: 'Framtagen för att exfoliera döda hudceller, boosta cellförnyelse och förbättra hudens textur. Resultatet är en jämnare hudton, förnyad lyster och minskade tecken på åldrande.',

            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling för mogen hy',
            image_title: 'Kemisk peeling för mogen hy',

            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot mogen hy',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling för mogen hy',

            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Wrinkles&method=Method_ChemicalPeeling&area=EMPTY',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för mogen hy'
      ),

      new Service(
            title: 'Microneedling för mogen hy',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling för mogen hy stimulerar hudens naturliga kollagenproduktion, vilket hjälper till att minska fina linjer, rynkor och andra tecken på åldrande.',

            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling för mogen hy',
            image_title: 'Microneedling för mogen hy',

            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot mogen hy',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling för mogen hy',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Wrinkles&method=Method_Microneedling&area=EMPTY',
            booking_url_title: 'Klicka för att boka tid för en microneedling för mogen hy'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med tecken på mogen hy?',
            image_title: 'När ska jag söka hjälp med tecken på mogen hy?',
            content: '<p class="p200">Mogen hy med tecken på åldrande, som fina linjer, rynkor och förlust av elasticitet, är en naturlig del av åldrandeprocessen. Men för vissa kan dessa tecken på åldrande påverka självkänslan och orsaka obehag. Om du märker att din åldrande börjar påverka ditt välbefinnande, eller om du har provat olika produkter och behandlingar utan framgång, kan det vara dags att söka professionell hjälp. Det är viktigt att komma ihåg att det inte finns någon "minsta gräns" för när det är lämpligt att söka professionell hudvård.</p>
            <p class="p200 mt-m">Hos en hudspecialist kan du få en personlig konsultation och behandlingsplan som är skräddarsydd för just dina behov. En hudterapeut kan analysera din hudtyp, diskutera möjliga orsaker till dina hudproblem och rekommendera den mest effektiva behandlingsmetoden för dig. Detta kan inkludera allt från djuprengöring och återfuktning till mer avancerade behandlingar som laser och hudföryngring. Så, om du känner att tecknen på åldrnadet påverkar ditt självförtroende eller om du bara vill förbättra hudens utseende, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot en förbättrad hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mogen hy?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mogen hy?',
            content: '<p class="p200">Letar du efter effektiv behandling för de utmaningar som följer med åldrandet? Då är AcneSpecialisten platsen för dig. Med mer än tre decenniers erfarenhet inom hudvård, specialiserar vi oss på att effektivt minska ålderstecken såsom rynkor, fina linjer och förlorad elasticitet.Hos oss möts du av de mest framstående metoderna och teknikerna i hudvårdens värld, allt för att du ska kunna se de bästa resultaten. Våra hudterapeuter utformar en skräddarsydd behandlingsplan just för dig och följer dig noga genom din behandlingsresa.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten betyder inte bara tillgång till den mest avancerade behandlingen för din hud. Vi är dedikerade till att du ska uppnå dina huvårdsmål. Vår djupa kunskap, engagemang och långvariga erfarenhet gör oss till ditt främsta val för att ta hand om din mogna hy.</p>',
      ),

);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.webp',
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
$results_url_title = "se flera behandlingsresultat för mogen hy";



$faq_categories = array(
      'Generellt om mogen hy' => array(
            new Question(
                  title: 'Vad menas med termen "mogen hy"?',
                  text: '<p class="p200">Mogen hy hänvisar till huden som börjar visa tecken på åldrande. Dessa tecken kan inkludera rynkor, fina linjer, förlust av elasticitet, förtunning av huden, ojämn hudton, pigmentförändringar och minskad fuktighet. Medan åldrande är en naturlig process, kan yttre faktorer som solexponering, kost, och livsstilsval också påverka hudens åldrande.</p>'
            ),
            new Question(
                  title: 'Vid vilken ålder börjar huden oftast klassificeras som mogen?',
                  text: '<p class="p200">Det finns ingen exakt ålder där huden börjar klassificeras som "mogen", eftersom åldrande är en individuell process. Men många människor börjar märka förändringar i sin hud runt 30 till 40-årsåldern. Dessa förändringar kan vara mer eller mindre framträdande beroende på genetik, livsstil och hudvårdsvanor.</p>'
            ),
            new Question(
                  title: 'Hur påverkar hormonella förändringar, såsom klimakteriet, mogen hy?',
                  text: '<p class="p200">Klimakteriet och de hormonella förändringar som följer med den kan ha en märkbar inverkan på huden. Östrogen, ett hormon som minskar under klimakteriet, spelar en viktig roll i produktionen av kollagen och hudens naturliga oljor. När nivåerna av östrogen minskar, kan huden bli torrare, mindre elastisk, och mer benägen för rynkor och fina linjer.</p>'
            ),
            new Question(
                  title: 'Vilken roll spelar genetik i hur och när huden blir mogen?',
                  text: '<p class="p200">Genetik spelar en betydande roll i processen för hudens åldrande. Om dina föräldrar eller nära släktingar har en hud som åldras långsamt eller visa tecken på åldrande vid en högre ålder, kan du också ha en genetisk benägenhet att uppleva samma utveckling. Detta betyder dock inte att externa faktorer som solexponering och livsstilsval inte kommer att ha någon inverkan.</p>'
            ),
            new Question(
                  title: 'Kan miljöfaktorer, som luftfuktighet och föroreningar, påverka mogen hy mer än yngre hy?',
                  text: '<p class="p200">Ja, mogen hy kan vara mer känslig för yttre påverkan som luftfuktighet och föroreningar. Denna hudtyp har ofta en minskad förmåga att hålla kvar fukt, vilket gör den mer sårbar för torrhet i låg luftfuktighet. Föroreningar kan också påskynda åldringsprocessen genom att orsaka oxidativ stress, vilket kan vara mer skadligt för en redan åldrande hud.</p>'
            ),
            new Question(
                  title: 'Är det möjligt att förhindra vissa tecken på åldrande, eller handlar det mest om att hantera dem när de uppstår?',
                  text: '<p class="p200">Medan vissa tecken på åldrande är oundvikliga på grund av genetik och den naturliga åldringsprocessen, kan många yttre tecken på åldrande förebyggas eller minimeras. Regelbunden hudvård med behandlingar och solskydd kan alla bidra till att minska eller fördröja tecknen på hudens åldrande. När tecknen väl dyker upp finns det behandlingar och produkter som kan hjälpa till att hantera dem.</p>'
            ),
            new Question(
                  title: 'Varför får man rynkor när man blir äldre?',
                  text: '<p class="p200">Rynkor uppstår med åldern på grund av en kombination av flera faktorer. Hudens naturliga åldringsprocess leder till att produktionen av kollagen och elastin, som ger huden dess struktur och elasticitet, minskar. Exponering för UV-strålning från solen kan också bryta ner kollagen och elastin, vilket accelererar hudens åldrande. Dessutom blir huden tunnare och torrare med åldern, vilket gör den mer benägen för rynkor. Ansiktsuttryck, såsom leende och rynkande av pannan, kan över tid bidra till att permanenta linjer och veck bildas.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till mogen hy";


$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av mogen hy',
            image_title: 'Cazzandra Lindberg - Expert på behandling av mogen hy'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på mogen hy',
            image_title: 'Veronika Benedik - Specialist inom vård av mogen hy'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom behandling av mogen hy',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på mogen hy'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av mogen hy',
            image_title: 'Vilma Libom - Expert inom vård av mogen hy'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter specialiserade på mogen hy";

$related_problems = array(
      new RelatedProblem(
            name: 'Pigmentfläckar',
            aka: 'melasma',
            image: 'bilder/hudproblem/200x200/pigmentflackar.webp',
            image_alt: 'Ansikte med pigmentfläckar',
            image_title: 'Pigmentfläckar',
            url: 'pigmentflackar.php',
            url_title: 'Pigmentfläckar',
      ),
      new RelatedProblem(
            name: 'Stora porer',
            aka: 'förstorade porer',
            image: 'bilder/hudproblem/200x200/stora-porer.webp',
            image_alt: 'Ansikte med stora porer',
            image_title: 'Stora porer',
            url: 'stora-porer.php',
            url_title: 'Stora porer',
      ),
);

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
            url: 'varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av mogen hy";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/mogen-hy.php" />

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