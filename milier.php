<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är milier? - Orsaker, Behandling och Förebyggande';
$seo_description = 'Här hittar du allt om milier och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'milier, orsaker till milier, förebygga milier, ta bort milier';

$title = 'Milier';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem.php'),
      new PathSegment('Milier', '/milier.php'),
);

$image_small = 'bilder/problem/424x324/milier.webp';
$image_large = 'bilder/problem/424x456/milier.webp';
$image_title = 'Visar en hud med milier';
$image_alt = 'Bild som illustrerar hur milier ser ut på huden';
$description = 'Milier är små, vita cystor som kan drabba alla. På denna sida utforskar vi hur milier bildas, deras placering på huden och skillnaden mellan milier och andra hudproblem.';

$consultation_url_label = "Boka gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia";
$consultation_url_title = "Gratis Konsultation för Milier";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Milia";
$booking_url_title = "Boka Milierbehandling";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Milier";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Milierehandling";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Milier";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Milierbehandling";

$nav_buttons = array(
      'about' => 'Om milier',
      'approach' => 'Metoden',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'Varför AS?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om milier';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är milier?',
            content: '<p class="p200">Milier är små, fasta cystor som är vanligtvis vita eller hudfärgade och som kan förekomma på olika delar av ansiktet. De är typiskt sett 1-2 millimeter i diameter och uppstår när döda hudceller eller keratin, ett protein som naturligt förekommer i hud, hår och naglar, blir instängda under hudens yta. Denna instängning skapar en liten kapsel eller ficka fylld med proteinet keratin. Milier är i allmänhet helt smärtfria och orsakar inte inflammation eller rodnad runt det drabbade området, vilket skiljer dem från akne eller andra inflammerade hudåkommor.</p>',
            extended_content: '<p class="p200 mt-xl">Många förväxlar milier med vanlig akne, men dessa två hudåkommor skiljer sig åt både i deras orsaker och i hur de bör behandlas. Till skillnad från akne, är milier inte fyllda med var och de är inte resultatet av bakterieinfektioner eller inflammation. De är heller inte associerade med överproduktion av talg, vilket är en av de vanligaste orsakerna till akne. Eftersom milier saknar en poröppning är det viktigt att inte klämma på milier i ett försök att "rensa ut" dem, eftersom detta kan leda till infektion och ärrbildning.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man milier?',
            content: '<p class="p200">Orsakerna till att man får milier kan vara många och varierar från person till person. Generellt sett uppstår milier när döda hudceller eller keratin blir instängda under hudens ytskikt. Detta kan hända av olika anledningar, inklusive naturliga hudförändringar, hormonella fluktuationer, eller som en reaktion på vissa produkter. Det kan ocskå uppstå som ett resultat av förändringar i huden eller hormonella obalanser, exempelvis kan kvinnor uppleva en ökning av milier under graviditet eller menopaus på grund av hormonella förändringar.</p>',
            extended_content: '<p class="p200 mt-xl">Personer som utsätter sin hud för mycket sol löper högre risk att få milier. För det tredje kan vissa hudåkommor och medicinska tillstånd öka risken för att utveckla milier. Dessa inkluderar saker som brännskador, allergiska reaktioner och även vissa typer av hudsjukdomar. Det har också observerats att personer med mer fuktig och oljig hud är mer benägna att utveckla milier.</p>
            <p class="p200 mt-xl">Vissa personer är mer benägna att utveckla milier än andra, så är genetiska faktorer troligtvis också inblandade. Detta innebär att om andra i din familj har haft milier, kan det öka din egen risk att utveckla dem. Det är alltså en kombination av genetiska, hormonella och externa faktorer som samverkar för att orsaka dessa små, men ofta störande, hudcystor.</p>',
            icons: array('hormoner' => 'Hormoner', 'stress' => 'Stress', 'genetik' => 'Genetik', 'livsstil' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får milier?',
            content: '<p class="p200">Milier är en hudåkomma som kan drabba människor i alla åldrar, från spädbarn till äldre. Men det finns vissa grupper som är mer utsatta än andra. I det följande kommer vi att gå igenom de olika demografierna och förklara varför vissa människor är mer benägna att få milier. För det första är milier mycket vanliga hos nyfödda och spädbarn. Detta beror på att deras hud fortfarande utvecklas och det kan därför vara lättare för keratin eller döda hudceller att bli instängda. För spädbarn försvinner ofta milier av sig själv inom några veckor eller månader. I vuxen ålder kan milier drabba både män och kvinnor, men det är särskilt vanligt under perioder av hormonella förändringar. Hormonella obalanser kan påverka hudens talgproduktion och därmed bidra till att keratin blir instängd.</p>',
            extended_content: '<p class="p200 mt-xl">Ett annat viktigt faktum är att personer med vissa hudtyper och hudtillstånd, såsom akne eller eksem, kan vara mer benägna att utveckla milier. Om du redan har en hudåkomma som innebär ökad talgproduktion eller hudirritation, kan detta öka chansen för att du får milier. Ytterligare en faktor som kan spela in är livsstil och skönhetsvanor.</p>
            <p class="p200 mt-xl">Slutligen bör vi inte förbise de genetiska faktorerna. Om det finns en historia av milier i din familj, kan du vara genetiskt predisponerad att utveckla dem. Detta kan förklara varför vissa personer, trots att ta väl hand om sin hud och undvika kända utlösande faktorer, ändå utvecklar milier. Sammanfattningsvis kan milier drabba i princip vem som helst, men det finns vissa grupper och livsstilar som ökar sannolikheten för att utveckla denna hudåkomma. Oavsett din ålder eller bakgrund, om du är orolig över milier, är det alltid en god idé att konsultera en hudspecialist för att identifiera problemet och skräddarsy behandling.</p>',

            icons: array('man-kvinna' => 'Män & Kvinnor', 'barn' => 'Barn', 'vuxna' => 'Vuxna', '65+' => 'Äldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man milier?',
            content: '<p class="p200">Milier kan uppträda på olika delar av kroppen, men de är mest framträdande i ansiktet, speciellt runt ögonen, kinderna och på näsan. De små, vita eller gula cystorna kan också ses på andra områden och detta kommer att utforskas ytterligare här. I ansiktet är områdena runt ögonen och på kindbenen särskilt känsliga för milier eftersom huden här är tunnare och mindre utsatt för naturlig exfoliering genom friktion. Detta gör det lättare för keratin och andra hudceller att bli instängda, vilket leder till utvecklingen av milier. Människor som ofta använder ögonkräm eller tung makeup i dessa områden kan vara mer mottagliga.</p>',
            extended_content: '<p class="p200 mt-xl">Bortom ansiktet kan milier även dyka upp på halsen, bröstet och andra områden. Milier kan även uppträda på ögonlocken, en plats där huden är särskilt tunn och känslig. Sammanfattningsvis kan milier uppträda på en rad olika områden av kroppen, men de är särskilt vanliga i ansiktet och på andra känsliga eller tunna hudområden. Oavsett var de dyker upp är det viktigt att förstå de underliggande orsakerna och att vidta lämpliga åtgärder för att behandla och förhindra dem.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'På Kinderna')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten matchas du med en personlig hudterapeut som hjälper dig att identifierar dina milier och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder målinriktade och effektiva behandlingar för milier, anpassade till din hud och dess unika behov. Vårt mål är att du ska kunna bli av med dina milier på ett säkert och effektivt sätt.',

            url_label: 'Se milierbehandlingar',
            url: 'milierbehandling.php',
            url_title: 'Utforska våra skräddarsydda behandlingar för milier'
      ),
);
/*
$types_title = 'Olika typer av milier';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Milier baserat på ålder',
            content: '<p class="p200">Milier kan förekomma hos individer i alla åldrar men är vanligtvis mer framträdande i vissa livssteg. Spädbarnsmilier är vanliga och försvinner ofta av sig själva med tiden. Vuxenmilier är däremot mer bestående och kan uppstå på grund av olika faktorer såsom hudskador, solskador eller användning av vissa hudvårdsprodukter. Det är viktigt att förstå att milier inte bara är kopplat till årder utan kan påverka personer oavsett livsfas.</p>',
            types: array(
                  new BasedType(
                        title: 'Vuxenmilier',
                        subtitle: 'Stannar ofta längre och kan kräva behandling',

                        image_url: 'images/problems/102x102/vuxenmilier.webp',
                        image_alt: 'Bild av milier hos vuxna',
                        image_title: 'Milier hos vuxna',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Spädbarnsmilier',
                        subtitle: 'Vanligen temporära och försvinner ofta av sig själva',

                        image_url: 'images/problems/102x102/spadbarnsmilier.webp',
                        image_alt: 'Bild av milier hos spädbarn',
                        image_title: 'Milier hos spädbarn',

                        url: null,
                        url_title: null,
                  ),

            )
      ),
      new BasedTypeCategory(
            title: 'Milier baserat på yttre faktorer',
            content: '<p class="p200">Yttre faktorer kan påverka förekomsten och svårighetsgraden av milier. Dessa inkluderar exponering för solen, hudskador, användning av kosmetika och hudvårdsprodukter, liksom miljöfaktorer som luftfuktighet och föroreningar. Dessa faktorer kan irritera huden, leda till överdriven keratinproduktion och därför bidra till bildandet av milier.</p>',
            types: array(
                  new BasedType(
                        title: 'Sol-exponerade milier',
                        subtitle: 'Framkallade av överdriven solexponering',

                        image_url: 'images/problems/102x102/sol-exponerade-milier.webp',
                        image_alt: 'Bild av milier orsakade av solen',
                        image_title: 'Exempel på milier orsakade av solen',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Kosmetik-inducerade milier',
                        subtitle: 'Orsakade av hudvårdsprodukter och kosmetika',

                        image_url: 'images/problems/102x102/kosmetik-inducerade-milier.webp',
                        image_alt: 'Bild av milier orsakade av kosmetika',
                        image_title: 'Exempel på milier orsakade av kosmetika',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Miljö-inducerade milier',
                        subtitle: 'Påverkas av faktorer som luftfuktighet och föroreningar',

                        image_url: 'images/problems/102x102/miljo-inducerade-milier.webp',
                        image_alt: 'Bild av milier orsakade av miljöfaktorer',
                        image_title: 'Exempel på milier påverkade av miljöfaktorer',

                        url: null,
                        url_title: null,
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Milier baserat på område',
            content: '<p class="p200">Milier kan uppstå på olika delar av ansiktet och kroppen. De är vanligast i ansiktet, speciellt runt ögon, näsa och kinder. De kan också förekomma på hals, bröst och till och med genitalområdet. Var milier dyker upp kan ge en indikation på dess möjliga orsaker, inklusive exponering för yttre faktorer, hudtyp eller andra underliggande medicinska tillstånd.</p>',
            types: array(
                  new BasedType(
                        title: 'Milier runt ögonen',
                        subtitle: 'Vanligaste området för milier',
                        
                        image_url: 'images/problems/102x102/milier-ogon.webp',
                        image_alt: 'Bild av milier runt ögonen',
                        image_title: 'Exempel på milier runt ögonen',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Milier på kinderna',
                        subtitle: 'Andra vanligaste området för milier',
                        
                        image_url: 'images/problems/102x102/milier-kinder.webp',
                        image_alt: 'Bild av milier på kinderna',
                        image_title: 'Exempel på milier på kinderna',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Milier på halsen',
                        subtitle: 'Ofta nära käklinjen',
                        
                        image_url: 'images/problems/102x102/milier-hals.webp',
                        image_alt: 'Bild av milier på halsen',
                        image_title: 'Exempel på milier på halsen',

                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Milier på bröstet',
                        subtitle: 'Kan förekomma hos både män och kvinnor',

                        image_url: 'images/problems/102x102/milier-brost.webp',
                        image_alt: 'Bild av milier på bröstet',
                        image_title: 'Exempel på milier på bröstet',

                        url: null,
                        url_title: null,
                  ),
            )
      )

);


$symptoms_title = 'Milier symptom';

$symptoms = array(
      new Symptom(
                  name: 'Vita eller gula knottror',
                  aka: 'Vanligt kännetecken för milier',
                  content: 'Dessa små, fasta cystor är vanligtvis vita eller gula och varierar i storlek från 1 till 2 mm i diameter. De är fyllda med keratin och är oftast ofarliga. Dessa knottror tenderar att förekomma i kluster, oftast i ansiktet, särskilt runt ögonen och kinderna.',

                  url_label: null,
                  url: null,
                  url_title: null,

                  image: 'images/symptoms/102x102/vita-gula-knottror.webp',
                  image_alt: 'Bild av vita eller gula knottror',
                  image_title: 'Vita eller gula knottror'
            ),
      new Symptom(
                  name: 'Hård konsistens',
                  aka: 'Fasta och oelastiska',
                  content: 'Milier är vanligtvis mycket fasta och oelastiska. De känns ofta som små pärlor under huden. På grund av deras fasta konsistens är de inte lätt att klämma eller avlägsna utan professionell behandling.',

                  url_label: null,
                  url: null,
                  url_title: null,

                  image: 'images/symptoms/102x102/hard-konsistens.webp',
                  image_alt: 'Bild av hård konsistens',
                  image_title: 'Hård konsistens'
            ),
      new Symptom(
                  name: 'Långvariga',
                  aka: 'Ihållande',
                  content: 'Milier tenderar att vara långvariga och förändras inte mycket över tid om de inte behandlas. I vissa fall kan de till och med bestå i flera månader eller år, vilket kan vara kosmetiskt störande för vissa individer.',

                  url_label: null,
                  url: null,
                  url_title: null,

                  image: 'images/symptoms/102x102/langvariga.webp',
                  image_alt: 'Bild av långvariga milier',
                  image_title: 'Långvarig'
            ),
);
*/
$headline01 = "01. Identifiera dina milier";

$service = new Service(
      title: 'Konsultation för milier',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under ett personligt möte med en av AcneSpecialistens hudexperter utförs en undersökning av dina milier. Vi tar före-bilder på det drabbade området och rekommenderar en skräddarsydd behandlingsplan utformad efter dina specifika behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för milierbehandling',
      image_title: 'Konsultation för milierbehandling',

      url_label: 'Läs mer om konsultation mot milier',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Klicka här för att läsa mer om kostnadsfri konsultation för milier',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för milier',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla milier";

$services = array(
      new Service(
            title: 'Behandling mot milier',
            duration: '60 min',
            price: '995 kr',
            content: 'Vår behandling mot milier syftar till att noggrant avlägsna dessa små cystor. Genom att använda säkra och effektiva extraktionsmetoder, hjälper vi dig att bli av med milier och därmed förbättra hudens övergripande utseende.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en behandling mot milier',
            image_title: 'Behandling mot milier',

            url: 'milierbehandling.php',
            url_label: 'Läs mer om ansiktsbehandling mot milier',
            url_title: 'Klicka här för att läsa mer om behandling mot milier',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Milia',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för behandling mot milier',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Milia',
            booking_url_title: 'Klicka för att boka tid för en behandling mot milier'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina milier?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina milier?',
            image_title: 'När ska jag söka hjälp med mina milier?',
            content: '<p class="p200">Milier är små, vita eller gulaktiga cystor som kan uppstå på huden hos personer i alla åldrar. Även om milier är ofarliga och mestadels estetiska bekymmer, kan de ändå påverka självkänslan eller ge upphov till obehag. Om du har provat olika hudvårdsprodukter och hemmabehandlingar utan framgång, eller om milier börjar påverka ditt välbefinnande, kan det vara dags att söka professionell hjälp. Det finns ingen "minsta gräns" för när det är lämpligt att söka professionell vård för dina milier.</p>
            <p class="p200 mt-m">Hos en hudspecialist, som de hos AcneSpecialisten, kan du få en personlig konsultation och en skräddarsydd behandlingsplan. En expert kan analysera din hudtyp och de områden där milier har uppstått, och sedan rekommendera den mest effektiva behandlingsmetoden för just ditt fall. Om du känner att dina milier har blivit en belastning eller om du helt enkelt vill förbättra din huds utseende, tveka inte att söka professionell hjälp. Det är aldrig för tidigt eller för sent att ta steget mot bättre hy.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina milier?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina milier?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina milier?',
            content: '<p class="p200">Om du letar efter en effektiv lösning för dina milier, är AcneSpecialisten det självklara valet. Med över 30 års erfarenhet inom hudvård och en specialisering i att behandla olika hudåkommor, inklusive milier, kan vi erbjuda en individuellt skräddarsydd behandlingsplan som är perfekt anpassad för dig.</p>
            <p class="p200 mt-m">Vi använder oss av de mest beprövade metoderna inom hudvård för att ge dig bästa möjliga resultat. Vårt team av professionella hudterapeuter står redo att guida dig genom hela behandlingsprocessen. Med regelbundna uppföljningar och anpassade hemmavårdsprogram säkerställer vi en långvarig förbättring av din hud.</p>
            <p class="p200 mt-m">När du väljer AcneSpecialisten för behandling av dina milier får du inte bara tillgång till den mest effektiva hudvården. Vi ser också dig som en partner i din hudvårdsresa och är engagerade i att hjälpa dig uppnå och bibehålla en klar och frisk hud. Vårt engagemang, vår kunskap och vår långa erfarenhet gör oss till ditt bästa val för behandling av milier.</p>',
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
$results_url_title = "se flera milierbehandlingsresultat";


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
      'Generellt om milier' => array(
            new Question(
                  title: 'Är milier skadliga eller farliga för huden?',
                  text: '<p class="p200">Milier är i allmänhet inte skadliga eller farliga för huden. De är små, vita eller gula cystor som i huvudsak är estetiska i sin natur. De är inte infektiösa och förvandlas inte till cancer. Det primära problemet med milier är ofta kosmetiskt, eftersom de kan vara störande för personen som har dem.</p>'
            ),
            new Question(
                  title: 'Kan milier försvinna av sig själva?',
                  text: '<p class="p200">Milier tenderar sällan att försvinna av sig själva, särskilt om de har funnits under en längre tid. I vissa fall kan milier hos nyfödda försvinna spontant, men hos vuxna är det mindre troligt. Professionell behandling rekommenderas för att effektivt och säkert ta bort dem.</p>'
            ),

            new Question(
                  title: 'Vad skiljer milier från finnar?',
                  text: 'Det finns inget direkt samband mellan milier och akne eller eksem, även om de kan uppträda samtidigt. Milier är fyllda med keratin snarare än talg, som är fallet med akne. De kan dock förekomma i områden där huden är skadad eller inflammerad, som kan vara fallet med eksem.</p>'
            ),
            new Question(
                  title: 'Hur länge tar det att se resultat efter en behandling för milier?',
                  text: '<p class="p200">Resultaten kan ses omedelbart efter behandlingen då milierna extraheras. Därefter kan det ta några dagar till veckor för huden att läka helt och för milier att försvinna helt, i vissa fall kan flera behandlingar krävs för att få bort milierna helt och hållet.</p>'
            ),
            new Question(
                  title: 'Hur kan jag förhindra att milier återkommer?',
                  text: '<p class="p200">Förhindrande av milier inkluderar god hudvård som rengöring och återfuktning samt att identifiera de yttre faktorer som bidragit till att milierna uppstått.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till milier";

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
$skinguide_url_title = "Läs fler guider om milier";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av milier',
            image_title: 'Cazzandra Lindberg - Expert på behandling av milier'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på milier',
            image_title: 'Veronika Benedik - Specialist inom vård av milier'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom behandling av milier',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på milier'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av milier',
            image_title: 'Vilma Libom - Expert inom behandling av milier'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Blandhy',
            aka: 'Kombinationshy',
            image: 'bilder/problem/102x102/blandhy.webp',
            image_alt: 'Bild som visar blandhy, en typ av hudproblem där vissa områden är torra medan andra är oljiga',
            image_title: 'Blandhy - en komplex hudtyp som kräver specialiserad vård',
            url: 'blandhy.php',
            url_title: 'Blandhy'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/problem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'bilder/problem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);

$brands = array(
      new Brand(
            label: 'Alma',
            image: 'bilder/logotyper/alma.svg',
            image_alt: 'Alma logotyp',
            image_title: 'Alma Lasermaskiner',
            url: '/varumarken/alma',
            url_title: 'Alma',
      ),
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
            url: '/varumarken/alma/rejuve-dye-vl',
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
            url: '/varumarken/alma/soprano-ice',
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
$brands_url_title = "Varumärken för Milierbehandling";

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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot milier" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>