<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är hudförändringar? - Symptom, orsak och behandling';
$seo_description = 'Här hittar du allt om hudförändringar och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'ansiktsvårta, fibrom, födelsemärke, hallonmärke, jordgubbsmärke, smultronmärke, hemangiom, hudflikar, hudutväxt, leverfläckar, mole, seborroisk keratos, skintags, skönhetsfläck, åldersvårta';

// här lägger du bild som du vill skall synas när du länkar i sociala medier eller sms
$seo_image = '/bilder/problem/424x456/hudforandringar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem.php'),
      new PathSegment('Hudförändringar', '/problem/hudforandringar'),
);

$title = 'Hudförändringar';

$image_small = 'bilder/problem/424x324/hudforandringar.webp';
$image_large = 'bilder/problem/424x456/hudforandringar.webp';
$image_title = 'Olika typer av hudförändringar';
$image_alt = 'Bild som illustrerar olika typer av hudförändringar';
$description = 'Hudförändringar kan inkludera ett brett spektrum av tillstånd, från födelsermäken och leverfläckar till hudflikar. Vi ger en överblick över de vanligaste typerna av hudförändringar och vad de beror på.';

$akas = [
      new Link(
            label: 'Födelsemärken',
            url: '/fodelsemarken.php',
            title: 'Födelsemärken',
      ),
      new Link(
            label: 'Hudflikar',
            url: '/hudflikar.php',
            title: 'Hudflikar',
      ),
      new Link(
            label: 'Leverfläckar',
            url: null,
            title: 'Leverfläckar',
      ),
];

$consultation_url_label = "Boka gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen";
$consultation_url_title = "Gratis Konsultation för Hudförändringar";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=cryopen";
$booking_url_title = "Boka behandling";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Hudförändringar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka behandling";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Hudförändringar";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Behandling";

$nav_buttons = array(
      'about' => 'Om hudförandringar',
      'approach' => 'Metoden',
      'types' => 'Typer',
      'symptoms' => 'Symptom',
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

$about_title = 'Om hudförändringar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är hudförändringar?',
            content: '<p class="p200">Hudförändringar kan vara både godartade och elaktartade, vi jobbar endast med godartade hudförändringar som upplevs som estetiskt störande utan att påverka individens hälsa och det är de vi kommer att prata om här. Dessa förändringar kan uppträda som fläckar, upphöjningar, eller utväxter och kommer i en mängd olika former, färger och storlekar. Även om de är ofarliga, kan en del av dem orsaka kosmetiska eller komfortrelaterade bekymmer. En av de vanligaste formerna av hudförändringar är leverfläckar, som i huvudsak är överdrivna pigmentansamlingar i huden. De kan vara medfödda eller uppkomma med tiden på grund av solens exponering, ålder eller genetik. Födelsemärken är en annan typ av vanlig hudförändring som kan uppträda var som helst på kroppen. De är oftast bruna eller svarta, men kan också vara blå, grå eller till och med röda eller rosa. Deras storlek och form kan variera mycket.</p>',
            extended_content: '<p class="p200 mt-xl">Hemangiom, ofta kallade hallonmärke, jordgubbsmärke eller smultronmärke, är ljusröda födelsemärken som uppkommer vid eller strax efter födseln. Dessa märken består av extra blodkärl och bleknar oftast över tid. Seborroisk Keratos och åldersvårtor är vanliga hos äldre individer. De är oftast bruna, upphöjda fläckar som kan vara skrovliga. Medan de kan se oroande ut, är de oftast ofarliga. Skintags, eller hudflikar, är små, mjuka utväxter av hud som ofta uppträder på områden där hud gnids mot hud, som halsen, armhålorna eller ljumsken.</p>
            <p class="p200 mt-xl">Fibrom och andra hudutväxter kan vara mjuka eller fasta och variera i färg från hudfärgad till svart. Även om de flesta av dessa är ofarliga, är det alltid bra att få dem kontrollerade om någon ny hudförändring eller om en befintlig förändring börjar ändra sig. Sammanfattningsvis är hudförändringar vanligtvis ofarliga hudutväxter eller märken på huden. Medan de flesta inte kräver behandling, kan de ibland tas bort av kosmetiska skäl eller om de orsakar irritation.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man hudförändringar?',
            content: '<p class="p200">Hudförändringars uppkomst kan vara en produkt av flera olika faktorer, både interna och externa. Genetik spelar ofta en betydande roll. Till exempel kan födelsemärken och vissa typer av leverfläckar ärvas från föräldrar till barn. Om det finns en familjehistoria av vissa hudförändringar, är chansen större att andra familjemedlemmar också kommer att utveckla dem. Miljöfaktorer är också avgörande. Solens ultravioletta strålar är en känd orsak till många hudförändringar, inklusive leverfläckar, födelsemärken och seborroiska keratoser. Långvarig och oskyddad exponering för solen kan inte bara leda till en ökning av antalet hudförändringar, utan också förändra de som redan finns. Detta understryker vikten av att använda solskyddsmedel och att ta andra försiktighetsåtgärder när man är utomhus.</p>',
            extended_content: '<p class="p200 mt-xl">Åldrande är ytterligare en bidragande faktor. Med tiden börjar huden att visa tecken på slitage. Kollagenproduktionen minskar, vilket leder till minskad elasticitet och fasthet i huden. Som ett resultat av detta kan nya hudförändringar uppträda, och befintliga kan bli mer framträdande. Åldersvårtor, till exempel, tenderar att uppträda med stigande ålder och är särskilt vanliga hos individer över 50. Hormonella förändringar, särskilt de som inträffar under graviditet, pubertet och klimakteriet, kan också leda till utveckling av nya hudförändringar eller förändringar av redan existerande märken. Hudflikar och skintags kan uppträda eller öka i storlek under dessa perioder.</p>
            <p class="p200 mt-xl">Infektioner, allergier, hudskador eller andra medicinska tillstånd kan också orsaka hudförändringar. Hudskador, som skärsår eller skrubbsår, kan ibland leda till ärrbildning eller andra permanenta märken. För att sammanfatta, hudförändringar kan uppträda av en mängd olika skäl, allt från genetik och åldrande till miljöfaktorer och hormonella obalanser. Det är därför det är viktigt att ha en förståelse för dessa underliggande orsaker, så att man kan vidta lämpliga åtgärder för att förebygga, behandla eller övervaka dem.</p>',
            icons: array('genetik' => 'Genetik', 'alder' => 'Ålder', 'livsstil' => 'Livsstil', 'sol' => 'Sol')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får hudförändringar?',
            content: '<p class="p200">Nästan alla människor kommer vid något skede i livet att uppleva någon form av hudförändring, men vem som drabbas, när och varför kan variera beroende på ett flertal faktorer. För det första är genetik en av de mest avgörande faktorerna. Om dina föräldrar eller andra nära släktingar har en historia av specifika hudförändringar, såsom födelsemärken, leverfläckar eller åldersvårtor, är chansen större att du också kommer att utveckla liknande förändringar. Detta arv kan sträcka sig över flera generationer, vilket betyder att även om dina föräldrar inte har dessa hudförändringar, kan du ändå ärva benägenheten från tidigare generationer. Ålder är en annan viktig faktor. Även om människor i alla åldrar kan och gör utveckla hudförändringar, tenderar vissa förändringar att vara mer vanliga under specifika livsfaser. Till exempel är hemangiom, även kända som jordgubbsmärken, vanligast hos nyfödda, medan åldersvårtor oftast uppträder i vuxen ålder.</p>',
            extended_content: '<p class="p200 mt-xl">Personer som spenderar mycket tid utomhus eller som inte regelbundet använder solskydd kan ha en högre risk att utveckla solinducerade hudförändringar som leverfläckar. Detsamma gäller individer som ofta utsätter sin hud för kemikalier eller andra irriterande ämnen, vilket kan leda till reaktioner eller långvariga förändringar i huden. Hormonella förändringar, som de som upplevs under graviditet, pubertet och klimakteriet, kan också påverka hudens tillstånd och förekomsten av hudförändringar. Detta kan förklara varför vissa kvinnor plötsligt upptäcker hudförändringar under graviditeten eller varför tonåringar kan märka nya födelsemärken under puberteten.</p>
            <p class="p200 mt-xl">Hälsotillstånd och mediciner kan också påverka hudens utseende. Personer med vissa autoimmuna sjukdomar, till exempel, kan vara mer benägna att utveckla specifika hudförändringar. Likaså kan vissa mediciner orsaka hudreaktioner eller förändringar som en biverkning. Så även om nästan alla kommer att uppleva någon form av hudförändring under sin livstid, varierar sannolikheten, typen och svårighetsgraden av dessa förändringar beroende på genetik, ålder, livsstil, hormonella förändringar, hälsa och andra faktorer. Att förstå dessa nyanser kan hjälpa individer att vara mer medvetna och ta hand om sin hud på bästa möjliga sätt.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'barn' => 'Barn', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna', 'aldre' => 'Aldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man hudförändringar?',
            content: '<p class="p200">Hudförändringar kan uppstå överallt på kroppen, men vissa områden är mer benägna att utveckla specifika typer av förändringar beroende på en kombination av genetik, exponering och andra faktorer. Ansiktet är ett av de vanligaste områdena där människor märker hudförändringar, givet dess konstanta exponering för miljöfaktorer som sol, vind och föroreningar. Här kan du hitta allt från födelsemärken och åldersvårtor till seborroisk keratos. På grund av den ökade solens exponering är leverfläckar och födelsemärken också vanliga i detta område, särskilt på kinderna, näsan och pannan. Händer och armar, som också ofta är exponerade, kan visa tecken på åldrande snabbare än mer skyddade områden. Här kan man se leverfläckar, åldersvårtor eller solskadad hud. Dessutom kan hudutväxter eller hudflikar utvecklas i områden med friktion, såsom axlar eller under bysten.</p>',
            extended_content: '<p class="p200 mt-xl">Baksidan av kroppen, särskilt ryggen, kan vara en plats där födelsemärken och leverfläckar utvecklas eftersom det ofta är svårt för individer att övervaka dessa områden regelbundet. Förändringar här bör granskas regelbundet av en läkare eller hudspecialist för att säkerställa att de inte är skadliga. Benen, särskilt hos kvinnor, kan uppleva förändringar som en följd av solskador, åldrande eller hormonella förändringar. Här kan du hitta leverfläckar, fibromer och ibland utväxter som är resultatet av kronisk friktion eller irritation. Halsen och bröstområdet är också kända för att visa tecken på åldrande eller solskada. Denna känsliga hud kan utveckla seborroisk keratos, skintags eller andra mindre vanliga hudförändringar som fibromer.</p>
            <p class="p200 mt-xl">Beroende på kroppens område kan också hudens tjocklek, mängden fettvävnad och graden av solskydd påverka vilken typ av hudförändring som är mest sannolik. Hudförändringar kan också förekomma internt, som i munnens slemhinna eller på ögats retina, även om dessa inte är synliga för blotta ögat. Sammanfattningsvis, även om hudförändringar kan förekomma var som helst på kroppen, varierar förekomsten och typen av förändringar beroende på områdets unika exponering för yttre och inre faktorer. Att känna igen dessa skillnader kan hjälpa individer att övervaka sin hud mer effektivt och söka professionell rådgivning när det behövs.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kropp' => 'Kroppen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos oss blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din hudförändring och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva behandlingar anpassade för din specifika hudförändring, så att du kan känna dig trygg och säker.',

            url_label: 'Se behandlingar för hudförändringar',
            url: 'problem/hudforandringar/behandla-hudforandringar',
            url_title: 'Utforska våra skräddarsydda behandlingar för hudförändringar'
      ),

);

$treatment_link = '<a href="problem/hudforandringar/behandla-hudforandringar" title="Utforska effektiva behandlingar mot hudförändringar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot hudförändringar</a>';

$types_title = 'Olika typer av hudförändringar';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Hudförändringar',
            content: '<p class="p200">Hudförändringar kan uppstå av många olika anledningar, inklusive genetik, ålder, exponering för solen, hormonella förändringar och skador. Dessa förändringar varierar från godartade fläckar och utväxter till mer allvarliga tillstånd som kan kräva medicinsk uppmärksamhet. Det är viktigt att känna igen och förstå de olika typerna av hudförändringar för att kunna ta hand om dem på rätt sätt.</p>',
            types: array(
                  new BasedType(
                      title: 'Ansiktsvårta',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/ansiktsvarta.webp',
                      image_alt: 'Bild av Ansiktsvårta',
                      image_title: 'Exempel på Ansiktsvårta',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Fibrom',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/fibrom.webp',
                      image_alt: 'Bild av Fibrom',
                      image_title: 'Exempel på Fibrom',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Födelsemärke',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/fodelsemarke.webp',
                      image_alt: 'Bild av Födelsemärke',
                      image_title: 'Exempel på Födelsemärke',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hallonmärke',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/hallonmarke.webp',
                      image_alt: 'Bild av Hallonmärke',
                      image_title: 'Exempel på Hallonmärke',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Jordgubbsmärke',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/jordgubbsmarke.webp',
                      image_alt: 'Bild av Jordgubbsmärke',
                      image_title: 'Exempel på Jordgubbsmärke',
                      url: null,
                      url_title: null,
                  ),
                  new BasedType(
                      title: 'Smultronmärke',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/smultronmarke.webp',
                      image_alt: 'Bild av Smultronmärke',
                      image_title: 'Exempel på Smultronmärke',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hemangiom',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/hemangiom.webp',
                      image_alt: 'Bild av Hemangiom',
                      image_title: 'Exempel på Hemangiom',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hudflikar',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/hudflikar.webp',
                      image_alt: 'Bild av Hudflikar',
                      image_title: 'Exempel på Hudflikar',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hudutväxt',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/hudutvaxt.webp',
                      image_alt: 'Bild av Hudutväxt',
                      image_title: 'Exempel på Hudutväxt',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Leverfläckar',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/leverflackar.webp',
                      image_alt: 'Bild av Leverfläckar',
                      image_title: 'Exempel på Leverfläckar',
                      url: null,
                      url_title: null,
                  ),
                  new BasedType(
                      title: 'Seborroisk Keratos',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/seborroisk-keratos.webp',
                      image_alt: 'Bild av Seborroisk Keratos',
                      image_title: 'Exempel på Seborroisk Keratos',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Skintags',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/skintags.webp',
                      image_alt: 'Bild av Skintags',
                      image_title: 'Exempel på Skintags',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Skönhetsfläck',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/skonhetsflack.webp',
                      image_alt: 'Bild av Skönhetsfläck',
                      image_title: 'Exempel på Skönhetsfläck',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Åldersvårta',
                      subtitle: '',
                      image_url: 'bilder/symptom/102x102/aldersvarta.webp',
                      image_alt: 'Bild av Åldersvårta',
                      image_title: 'Exempel på Åldersvårta',
                      url: null,
                      url_title: null,
                  ),
            )
      ),

);

$headline01 = "01. Identifiera din hudförändring";

$service = new Service(
      title: 'Konsultation för hudförändringar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en hudspecialist utförs en undersökning av din hudförändring. Vi tar före-bilder på det berörda området och rekommenderar en lämplig behandling med Cryopen, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för hudförändringsbehandling',
      image_title: 'Konsultation för behandling av hudförändringar',

      url_label: 'Läs mer om konsultation mot hudförändringar',
      url: '/gratis-hudkonsultation.php',
      url_title: 'Läs mer om konsultation mot hudförändringar',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudförändringar',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla hudförändringar med Cryopen";

$services = array(
      new Service(
            title: 'Behandling med Cryopen',
            duration: '20 min',
            price: '995 kr',
            content: 'Cryopen är en avancerad behandling som snabbt och effektivt behandlar hudförändringar genom att frysa det drabbade området. Detta kan hjälpa till att minska eller eliminera utseendet på olika typer av hudförändringar.',

            image_small: 'images/services/200x200/cryopen.webp',
            image_large: 'images/services/200x200/cryopen.webp',
            image_alt: 'Bild av en Cryopen behandling',
            image_title: 'Behandling av hudförändringar med Cryopen',

            url: '/cryopen.php',
            url_label: 'Läs mer om CryoPen mot hudförändringar',
            url_title: 'Läs mer om CryoPen mot hudförändringar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=cryopen',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina hudförändringar?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina hudförändringar?',
            image_title: 'När ska jag söka hjälp med mina hudförändringar?',
            content: '<p class="p200">Hudförändringar är en oundviklig del av våra liv som kan variera från mindre estetiska bekymmer till med omfattande besvär. Dessa förändringar är ofta ofarliga men kan ha en djupgående effekt på vårt psykiska välbefinnande och vår självuppfattning. Det är viktigt att förstå att hudens utseende spelar en central roll i vår självbild och hur vi uppfattas av andra. När dessa förändringar börjar inverka negativt på vårt välbefinnande, oavsett om det handlar om minskad självkänsla eller ökad psykisk stress, blir det avgörande att söka professionell hjälp.</p>
            <p class="p200 mt-m">Att ta steget att söka behandling är viktigt för att du ska få den hjälp du behöver. En kvalificerad hudterapeut kan erbjuda en detaljerad utvärdering och rekommendera behandlingsalternativ som är skräddarsydda efter individens specifika behov och situation. Dessa alternativ kan variera från enkla justeringar i hudvårdsrutinen till mer avancerade behandlingar, beroende på förändringarnas utseende och omfattning.</p>
            <p class="p200 mt-m">Om du känner att hudförändringarna börjar påverka ditt självförtroende eller orsakar oro, är det dags att söka hjälp. Att kontakta en specialist för en konsultation är det första steget mot att återfå kontrollen över din hudhälsa och ditt välbefinnande.</p>',
      ),
      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            content: '<p class="p200">Att navigera i världen av hudförändringar kan vara en utmaning, men AcneSpecialisten är här för att erbjuda professionell vägledning och behandling. Med vår breda expertis i en variation av hudtillstånd, inklusive ansiktsvårtor, fibrom, olika typer av märken som födelsemärken, hallonmärken och jordgubbsmärken, samt mer specifika tillstånd som hemangiom, hudflikar och seborroisk keratos, står vi redo att möta dina behov med skräddarsydda behandlingsplaner. Vi förstår de unika utmaningar som varje hudtillstånd medför och anpassar våra behandlingar för att effektivt adressera och hantera dina specifika hudförändringar.</p>
            <p class="p200 mt-m">På AcneSpecialisten är vi engagerade i att tillhandahålla en helhetslösning för din hudhälsa. Genom att kombinera det senaste inom hudvårdsteknologi med en djupgående förståelse för de underliggande orsakerna till hudförändringar, strävar vi efter att erbjuda lösningar som behandlar huden effektivt. Vår holistiska tillvägagångssätt innebär att vi ser till hela din hälsa och livsstil, vilket gör det möjligt för oss att erbjuda rådgivning och behandlingar som förbättrar din hud från grunden.</p>
            <p class="p200 mt-m">Att välja AcneSpecialisten för dina hudförändringar innebär att du väljer en partner som bryr sig om ditt välbefinnande och din självkänsla. Vi vet att hudproblem inte bara är en fysisk fråga, utan också kan påverka hur du känner dig om dig själv. Oavsett om du söker behandling för mindre estetiska skäl eller mer omfattande hudförändringar, är AcneSpecialisten här för att hjälpa dig att uppnå och upprätthålla en problemfri hy.</p>',
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
$show_all_results_title = "se flera behandlingsresultat för hudförändringar";


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
                  title: 'Vad är en hudförändring och varför uppstår den?',
                  text: '<p class="p200">En hudförändring refererar till alla förändringar eller oregelbundenheter som uppträder på huden, vilka kan vara tillfälliga eller permanenta. De kan uppstå av en mängd olika skäl, inklusive genetik, exponering för sol, ålder, hormonella förändringar, skador eller infektioner.</p>'
            ),
            new Question(
                  title: 'Hur skiljer sig olika typer av hudförändringar åt?',
                  text: '<p class="p200">Det finns en mängd olika typer av hudförändringar, inklusive (men inte begränsat till) födelsemärken, leverfläckar, vårtor, fibromer, hemangiom och hudutväxter. De skiljer sig åt baserat på deras utseende, orsak, plats på kroppen, och om de är godartade eller maligna.</p>'
            ),
            new Question(
                  title: 'Är alla hudförändringar farliga eller skadliga?',
                  text: '<p class="p200">Nej, de flesta hudförändringar är ofarliga och godartade. Men det är viktigt att känna igen tecknen på potentiellt farliga hudförändringar, särskilt de som kan indikera hudcancer.</p>'
            ),
            new Question(
                  title: 'Hur kan jag skilja mellan en ofarlig och en potentiellt farlig hudförändring?',
                  text: '<p class="p200">Enkel regel som används för att identifiera potentiellt farliga hudförändringar är ABCDE-regeln: Asymmetry (Asymmetri), Border (Oregelbunden kant), Color (Flerfärgad eller onormal färg), Diameter (Större än 6mm) och Evolving (Förändras över tid). Om en hudförändring uppvisar något av dessa tecken bör man konsultera en hudläkare.</p>'
            ),
            new Question(
                  title: 'Är vissa personer mer benägna att utveckla hudförändringar än andra?',
                  text: '<p class="p200">Ja, genetik spelar en roll, och de med en familjehistoria av vissa hudförändringar kan vara mer benägna att utveckla dem. Exponering för sol, hudtyp, ålder och andra faktorer kan också påverka sannolikheten.</p>'
            ),
            new Question(
                  title: 'Kan livsstilsval som kost, rökning eller solning påverka risken för hudförändringar?',
                  text: '<p class="p200">Absolut. Överdriven solning utan adekvat solskydd kan leda till solskador och öka risken för hudförändringar. Rökning kan också påverka hudens hälsa negativt. Vissa studier antyder att en balanserad kost kan bidra till att upprätthålla en frisk hud.</p>'
            ),
            new Question(
                  title: 'Hur kan jag förebygga uppkomsten av hudförändringar?',
                  text: '<p class="p200">Några grundläggande åtgärder inkluderar att använda solskydd regelbundet, undvika överdriven solning, ha på sig skyddande klädsel under intensiv sol, inte röka, äta en balanserad kost, och genomgå regelbundna hudkontroller.</p>'
            ),
            new Question(
                  title: 'Är det smärtsamt att ta bort hudförändringar?',
                  text: '<p class="p200">Tack vare CryoPen kan vi med kryoterapi, vilket är en metod som använder kyla för att frysa och eliminera hudförändringar. Under behandlingen kan vissa individer uppleva en stickande känsla eller ett kortvarigt obehag när förändringen fryses. Storleken och placeringen av hudförändringen kan påverka obehagskänslan. Efter behandlingen kan det området uppvisa tecken på rodnad, svullnad eller bli lite ömt, men detta brukar vara övergående. Generellt sett anses CryoPen vara en av de mildare och mindre smärtsamma metoderna för att ta bort hudförändringar.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till hudförändringar";

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
$skinguide_url_title = "Läs fler guider om hudförändringar";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av hudförändringar',
            image_title: 'Cazzandra Lindberg - Expert på behandling av hudförändringar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på hudförändringar',
            image_title: 'Veronika Benedik - Specialist inom hudförändringsvård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom behandling av hudförändringar',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på hudförändringar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av hudförändringar',
            image_title: 'Vilma Libom - Expert inom behandling av hudförändringar'
      ),
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter specialisterade på hudförändringar";

$brands = array(

      new Brand(
            label: 'CryoPen',
            image: '/bilder/logotyper/cryopen.svg',
            image_alt: 'CryoPen Brand Logo',
            image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
            url: '/cryopen.php',
            url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
      ),
      new Brand(
            label: 'Alma Hybrid',
            image: '/bilder/logotyper/alma-hybrid.svg',
            image_alt: 'Alma Hybrid logotyp',
            image_title: 'Alma Hybrid CO2',
            url: '/alma-hybrid-co2-laser.php',
            url_title: 'Alma Hybrid',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av hudförändringar";

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
                                    <!--<?php echo $types_url ?>-->
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