<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort hudförändringar - Symptom, orsak och behandling';
$seo_description = 'Här hittar du allt om hudförändringar och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'ansiktsvårta, fibrom, födelsemärke, hallonmärke, jordgubbsmärke, smultronmärke, hemangiom, hudflikar, hudutväxt, leverfläckar, mole, seborroisk keratos, skintags, skönhetsfläck, åldersvårta';
$seo_image = '/bilder/hudproblem/424x456/hudforandringar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Hudförändringar', '/hudproblem/hudforandringar/'),
);

$image_small = 'bilder/hudproblem/424x324/hudforandringar.webp';
$image_large = 'bilder/hudproblem/424x456/hudforandringar.webp';
$image_title = 'Olika typer av hudförändringar';
$image_alt = 'Bild som illustrerar olika typer av hudförändringar';

$green_banner_content = new GreenBannerContent(
      title: 'Hudförändringar',
      description: 'Hudförändringar kan inkludera ett brett spektrum av tillstånd, från födelsermäken och leverfläckar till hudflikar. Vi ger en överblick över de vanligaste typerna av hudförändringar och vad de beror på.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles', 'Boka gratis konsultation för hudförändringar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles', 'Boka gratis konsultation för hudförändringar'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
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
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är hudförändringar?',
            content: '<p class="p200">Hudförändringar kan vara både godartade och elaktartade, vi behandlar endast med godartade hudförändringar som upplevs som estetiskt störande utan att påverka individens hälsa och det är de vi kommer att prata om här. Dessa förändringar kan uppträda som fläckar, upphöjningar, eller utväxter och kommer i en mängd olika former, färger och storlekar. Även om de är ofarliga, kan en del av dem orsaka kosmetiska eller komfortrelaterade bekymmer. En av de vanligaste formerna av hudförändringar är leverfläckar, som i huvudsak är överdrivna pigmentansamlingar i huden. De kan vara medfödda eller uppkomma med tiden på grund av solens exponering, ålder eller genetik. Födelsemärken är en annan typ av vanlig hudförändring som kan uppträda var som helst på kroppen. De är oftast bruna eller svarta, men kan också vara blå, grå eller till och med röda eller rosa. Deras storlek och form kan variera mycket.</p>',
            extended_content: '<p class="p200 mt-xl">Hemangiom, ofta kallade hallonmärke, jordgubbsmärke eller smultronmärke, är ljusröda födelsemärken som uppkommer vid eller strax efter födseln. Dessa märken består av extra blodkärl och bleknar oftast över tid. <a class="b200 underline color-deep-sea-400" href="blodprickar.php">Blodprickar</a> eller Cherryspot är också en liten röd hudförändring. <a class="b200 underline color-deep-sea-400" href="seborroisk-keratos.php">Seborroisk Keratos</a> och åldersvårtor är vanliga hos äldre individer. De är oftast bruna, upphöjda fläckar som kan vara skrovliga. Medan de kan se oroande ut, är de oftast ofarliga. Skintags, eller hudflikar, är små, mjuka utväxter av hud som ofta uppträder på områden där hud gnids mot hud, som halsen, armhålorna eller ljumsken.</p>
            <p class="p200 mt-xl">Fibrom och andra hudutväxter kan vara mjuka eller fasta och variera i färg från hudfärgad till svart. Även om de flesta av dessa är ofarliga, är det alltid bra att få dem kontrollerade om någon ny hudförändring eller om en befintlig förändring börjar ändra sig. Sammanfattningsvis är hudförändringar vanligtvis ofarliga hudutväxter eller märken på huden. Medan de flesta inte kräver behandling, kan de ibland tas bort av kosmetiska skäl eller om de orsakar irritation.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man hudförändringar?',
            content: '<p class="p200">Hudförändringars uppkomst kan vara en produkt av flera olika faktorer, både interna och externa. Genetik spelar ofta en betydande roll. Till exempel kan födelsemärken och vissa typer av leverfläckar ärvas från föräldrar till barn. Om det finns en familjehistoria av vissa hudförändringar, är chansen större att andra familjemedlemmar också kommer att utveckla dem. Miljöfaktorer är också avgörande. Solens ultravioletta strålar är en känd orsak till många hudförändringar, inklusive leverfläckar, födelsemärken och seborroiska keratoser. Långvarig och oskyddad exponering för solen kan inte bara leda till en ökning av antalet hudförändringar, utan också förändra de som redan finns. Detta understryker vikten av att använda solskydd och att ta andra försiktighetsåtgärder när man är utomhus.</p>',
            extended_content: '<p class="p200 mt-xl">Åldrande är ytterligare en bidragande faktor. Med tiden börjar huden att visa tecken på slitage. Kollagenproduktionen minskar, vilket leder till minskad elasticitet och fasthet i huden. Som ett resultat av detta kan nya hudförändringar uppträda, och befintliga kan bli mer framträdande. Åldersvårtor, till exempel, tenderar att uppträda med stigande ålder och är särskilt vanliga hos individer över 50. Hormonella förändringar, särskilt de som inträffar under graviditet, pubertet och klimakteriet, kan också leda till utveckling av nya hudförändringar eller förändringar av redan existerande märken. Hudflikar och skintags kan uppträda eller öka i storlek under dessa perioder.</p>
            <p class="p200 mt-xl">Infektioner, allergier, hudskador eller andra medicinska tillstånd kan också orsaka hudförändringar. För att sammanfatta, hudförändringar kan uppträda av en mängd olika skäl, allt från genetik och åldrande till miljöfaktorer och hormonella obalanser. Det är därför det är viktigt att ha en förståelse för dessa underliggande orsaker, så att man kan vidta lämpliga åtgärder för att förebygga, behandla eller övervaka dem.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'aldrande' => 'Ålder', 'sol' => 'Sol')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får hudförändringar?',
            content: '<p class="p200">Nästan alla människor kommer vid något skede i livet att uppleva någon form av hudförändring, men vem som drabbas, när och varför kan variera beroende på ett flertal faktorer. För det första är genetik en av de mest avgörande faktorerna. Om dina föräldrar eller andra nära släktingar har en historia av specifika hudförändringar, såsom födelsemärken, leverfläckar eller åldersvårtor, är chansen större att du också kommer att utveckla liknande förändringar. Detta arv kan sträcka sig över flera generationer, vilket betyder att även om dina föräldrar inte har dessa hudförändringar, kan du ändå ärva benägenheten från tidigare generationer. Ålder är en annan viktig faktor. Även om människor i alla åldrar kan utveckla hudförändringar, tenderar vissa förändringar att vara mer vanliga under specifika livsfaser. Till exempel är hemangiom, även kända som jordgubbsmärken, vanligast hos nyfödda, medan åldersvårtor oftast uppträder i vuxen ålder.</p>',
            extended_content: '<p class="p200 mt-xl">Personer som spenderar mycket tid utomhus eller som inte regelbundet använder solskydd kan ha en högre risk att utveckla solrelaterade hudförändringar som leverfläckar. Detsamma gäller individer som ofta utsätter sin hud för kemikalier eller andra irriterande ämnen, vilket kan leda till reaktioner eller långvariga förändringar i huden. Hormonella förändringar, som de som upplevs under graviditet, pubertet och klimakteriet, kan också påverka hudens tillstånd och förekomsten av hudförändringar. Detta kan förklara varför vissa kvinnor plötsligt upptäcker hudförändringar under graviditeten eller varför tonåringar kan märka nya födelsemärken under puberteten.</p>
            <p class="p200 mt-xl">Hälsotillstånd och mediciner kan också påverka hudens utseende. Personer med vissa autoimmuna sjukdomar kan vara mer benägna att utveckla specifika hudförändringar. Likaså kan vissa mediciner orsaka hudreaktioner eller förändringar som en biverkning. Så även om nästan alla kommer att uppleva någon form av hudförändring under sin livstid, varierar sannolikheten, typen och svårighetsgraden av dessa förändringar beroende på genetik, ålder, livsstil, hormonella förändringar, hälsa och andra faktorer. Att förstå dessa nyanser kan hjälpa individer att vara mer medvetna och ta hand om sin hud på bästa möjliga sätt.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'barn' => 'Barn', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna', '65+' => 'Äldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man hudförändringar?',
            content: '<p class="p200">Hudförändringar kan uppstå överallt på kroppen, men vissa områden är mer benägna att utveckla specifika typer av förändringar beroende på en kombination av genetik, exponering och andra faktorer. Ansiktet och huvudet är ett av de vanligaste områdena där människor märker hudförändringar, givet dess konstanta exponering för miljöfaktorer som sol, vind och föroreningar. Här kan du hitta allt från födelsemärken och åldersvårtor till seborroisk keratos. På grund av den ökade solens exponering är leverfläckar och födelsemärken också vanliga i detta område, särskilt på kinderna, näsan och pannan. Händer och armar, som också ofta är exponerade, kan visa tecken på åldrande snabbare än mer skyddade områden. Här kan man se leverfläckar, åldersvårtor eller solskadad hud. Dessutom kan hudutväxter eller hudflikar utvecklas i områden med friktion, såsom axlar eller under bysten.</p>',
            extended_content: '<p class="p200 mt-xl">Baksidan av kroppen, särskilt ryggen, kan vara en plats där födelsemärken och leverfläckar utvecklas eftersom det ofta är svårt för individer att övervaka dessa områden regelbundet. Förändringar här bör granskas regelbundet av en hudspecialist för att säkerställa att de inte är skadliga. Benen, särskilt hos kvinnor, kan uppleva förändringar som en följd av solskador, åldrande eller hormonella förändringar. Här kan du hitta leverfläckar, fibromer och ibland utväxter som är resultatet av kronisk friktion eller irritation. Halsen och bröstområdet är också kända för att visa tecken på åldrande eller solskada. Denna känsliga hud kan utveckla seborroisk keratos, skintags eller andra mindre vanliga hudförändringar som fibrom.</p>
            <p class="p200 mt-xl">Beroende på kroppens område kan också hudens tjocklek, mängden fettvävnad och graden av solskydd påverka vilken typ av hudförändring som är mest sannolik. Sammanfattningsvis, även om hudförändringar kan förekomma var som helst på kroppen, varierar förekomsten och typen av förändringar beroende på områdets unika exponering för yttre och inre faktorer. Att känna igen dessa skillnader kan hjälpa individer att övervaka sin hud mer effektivt och söka professionell rådgivning när det behövs.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kropp' => 'Kroppen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos oss får du träffa en hudterapeut som kan undersöka dina godartade hudförändringar och skapa en individuell behandlingsplans.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför behandlingar med laser eller CryoPen. Vi anpassar alltid behandlingsmetoden efter dina behov.',

            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles',
            url_title: 'Utforska våra skräddarsydda behandlingar för hudförändringar'
      ),

);

$types_title = 'Olika typer av hudförändringar';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Hudförändringar',
            content: '<p class="p200">Hudförändringar kan uppstå av många olika anledningar, inklusive genetik, ålder, exponering för solen, hormonella förändringar och skador. Dessa förändringar varierar från godartade fläckar och utväxter till mer allvarliga tillstånd som kan kräva medicinsk uppmärksamhet. Det är viktigt att känna igen och förstå de olika typerna av hudförändringar för att kunna ta hand om dem på rätt sätt.</p>',
            types: array(
                  new BasedType(
                        title: 'Ansiktsvårta',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/ansiktsvarta.webp',
                        image_alt: 'Bild av Ansiktsvårta',
                        image_title: 'Exempel på Ansiktsvårta',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Fibrom',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/fibrom.webp',
                        image_alt: 'Bild av Fibrom',
                        image_title: 'Exempel på Fibrom',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Födelsemärke',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/fodelsemarke.webp',
                        image_alt: 'Bild av Födelsemärke',
                        image_title: 'Exempel på Födelsemärke',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Hallonmärke',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/hallonmarke.webp',
                        image_alt: 'Bild av Hallonmärke',
                        image_title: 'Exempel på Hallonmärke',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Jordgubbsmärke',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/jordgubbsmarke.webp',
                        image_alt: 'Bild av Jordgubbsmärke',
                        image_title: 'Exempel på Jordgubbsmärke',
                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Smultronmärke',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/smultronmarke.webp',
                        image_alt: 'Bild av Smultronmärke',
                        image_title: 'Exempel på Smultronmärke',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Hemangiom',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/hemangiom.webp',
                        image_alt: 'Bild av Hemangiom',
                        image_title: 'Exempel på Hemangiom',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Cherryspot',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/cherryspot.webp',
                        image_alt: 'Bild av Cherryspot',
                        image_title: 'Exempel på Cherryspot',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Hudflikar',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/hudflikar.webp',
                        image_alt: 'Bild av Hudflikar',
                        image_title: 'Exempel på Hudflikar',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Hudutväxt',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/hudutvaxt.webp',
                        image_alt: 'Bild av Hudutväxt',
                        image_title: 'Exempel på Hudutväxt',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Leverfläckar',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/leverflackar.webp',
                        image_alt: 'Bild av Leverfläckar',
                        image_title: 'Exempel på Leverfläckar',
                        url: null,
                        url_title: null,
                  ),
                  new BasedType(
                        title: 'Seborroisk Keratos',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/seborroisk-keratos.webp',
                        image_alt: 'Bild av Seborroisk Keratos',
                        image_title: 'Exempel på Seborroisk Keratos',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Skintags',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/skintags.webp',
                        image_alt: 'Bild av Skintags',
                        image_title: 'Exempel på Skintags',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Skönhetsfläck',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/skonhetsflack.webp',
                        image_alt: 'Bild av Skönhetsfläck',
                        image_title: 'Exempel på Skönhetsfläck',
                        url: null,
                        url_title: null,
                  ),

                  new BasedType(
                        title: 'Åldersvårta',
                        subtitle: '',
                        image_url: 'bilder/hudtyper/232x232/aldersvarta.webp',
                        image_alt: 'Bild av Åldersvårta',
                        image_title: 'Exempel på Åldersvårta',
                        url: null,
                        url_title: null,
                  ),
            )
      ),

);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för hudförändringar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en konsultation får du träffa en hudterapeut som går igenom din hud. Vi tar före-bilder på det berörda området och rekommenderar en lämplig behandlingsplan.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för hudförändringsbehandling',
      image_title: 'Konsultation för behandling av hudförändringar',

      url_label: 'Läs mer om konsultation',
      url: '/gratis-hudkonsultation.php',
      url_title: 'Läs mer om konsultation mot hudförändringar',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Moles',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudförändringar',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'CryoPen mot hudförändringar',
            duration: '20 min',
            price: 'Från 1595 kr',
            content: 'Cryopen fryser bort hudförändringar med extrem kyla, vilket förstör den oönskade hudförändringen. Behandlingen initierar kroppens läkningsprocess, vilket leder till att förändringarna gradvis försvinner.',

            image_small: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_large: 'bilder/hudbehandlingar/200x200/cryopen.webp',
            image_alt: 'Bild av en Cryopen behandling',
            image_title: 'Behandling av hudförändringar med Cryopen',

            url: '/cryopen.php',
            url_label: 'Läs mer om CryoPen',
            url_title: 'Läs mer om CryoPen mot hudförändringar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_CryoPen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen'
      ),
      new Service(
            title: 'Laser mot hudförändringar',
            duration: '20 min',
            price: 'Från 1995 kr',
            content: 'Laserbehandling riktar högintensivt ljus mot hudförändringar, vilket "bränner" bort dem genom att omvandla ljuset till värme. Denna metod ger ofta omedelbara resultat, med hudförändringar som försvinner direkt efter behandling.',

            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Kvinna som får laserbehandling mot hudförändringar',
            image_title: 'Laserbehandling mot hudförändringar',

            url_label: 'Läs mer om laser',
            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_title: 'Läs mer om laser mot hudförändringar',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_CO2',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot hudförändringar',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles&method=Method_laser_skin_imperfections',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot hudförändringar',
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina hudförändringar?',
            image_title: 'När ska jag söka hjälp med mina hudförändringar?',
            content: 'Hudförändringar är en oundviklig del av våra liv som kan variera från mindre estetiska bekymmer till med omfattande besvär. Dessa förändringar är ofta ofarliga men kan ha en djupgående effekt på vårt psykiska välbefinnande och vår självuppfattning. Det är viktigt att förstå att hudens utseende spelar en central roll i vår självbild och hur vi uppfattas av andra. När dessa förändringar börjar inverka negativt på vårt välbefinnande, oavsett om det handlar om minskad självkänsla eller ökad psykisk stress, blir det avgörande att söka professionell hjälp.',
            extended_content: 'Att ta steget att söka behandling är viktigt för att du ska få den hjälp du behöver. En kvalificerad hudterapeut kan erbjuda en detaljerad utvärdering och rekommendera behandlingsalternativ som är skräddarsydda efter individens specifika behov och situation. Om du känner att hudförändringarna börjar påverka ditt självförtroende eller orsakar oro, är det dags att söka hjälp. Att kontakta en specialist för en konsultation är det första steget mot att återfå kontrollen över din hudhälsa och ditt välbefinnande. Observera att vi på AcneSpecialisten inte kan diagnostisera om dina hudförändringar är elakartade.'
      ),
      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            content: 'Att navigera i världen av hudförändringar kan vara en utmaning, men AcneSpecialisten är här för att erbjuda professionell vägledning och behandling. Vi förstår de unika utmaningar som varje hudtillstånd medför och anpassar våra behandlingar för att effektivt adressera och hantera dina specifika hudförändringar. På AcneSpecialisten är vi engagerade i att tillhandahålla en helhetslösning för din hudhälsa. Genom att kombinera det senaste inom hudvårdsteknologi med en djupgående förståelse för de underliggande orsakerna till hudförändringar, strävar vi efter att erbjuda lösningar som behandlar huden effektivt. Vår holistiska tillvägagångssätt innebär att vi ser till hela din hälsa och livsstil, vilket gör det möjligt för oss att erbjuda rådgivning och behandlingar som förbättrar din hud från grunden.',
            extended_content: 'Att välja AcneSpecialisten för dina hudförändringar innebär att du väljer en partner som bryr sig om ditt välbefinnande och din självkänsla. Vi vet att hudproblem inte bara är en fysisk fråga, utan också kan påverka hur du känner dig om dig själv. Oavsett om du söker behandling för mindre estetiska skäl eller mer omfattande hudförändringar, är AcneSpecialisten här för att hjälpa dig att uppnå och upprätthålla en problemfri hy.',
      ),
);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-1.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-1.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-1.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-1.webp',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-2.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-2.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-2.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-2.webp',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-3.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-3.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-3.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-3.webp',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-5.webp',
            image_after_small: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-5.webp',
            image_before_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-fore-5.webp',
            image_after_large: '/bilder/resultat/hudforandringar/resultat-hudforandringar-efter-5.webp',
            url_title: 'Resultat',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            age: 1,
            gender: '',
            problem: '',
            type: '',
            treatment: new ResultTreatment(
                  duration: '',
                  procedures: array(
                        new ResultProcedure(
                              image: '',
                              name: '',
                              count: ''
                        ),
                  ),
                  product: new ResultProduct(
                        image: '',
                        name: '',
                  ),
                  employee: new ResultEmployee(
                        image: '',
                        name: ''
                  ),
            )
      ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat för hudförändringar";



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
                  title: 'Är vissa personer mer benägna att utveckla hudförändringar än andra?',
                  text: '<p class="p200">Ja, genetik spelar en roll, och de med en familjehistoria av vissa hudförändringar kan vara mer benägna att utveckla dem. Exponering för sol, hudtyp, ålder och andra faktorer kan också påverka sannolikheten.</p>'
            ),
            new Question(
                  title: 'Hur kan jag förebygga uppkomsten av hudförändringar?',
                  text: '<p class="p200">Några grundläggande åtgärder inkluderar att använda solskydd regelbundet, undvika överdriven solning, ha på sig skyddande klädsel under intensiv sol, inte röka, äta en balanserad kost, och genomgå regelbundna hudkontroller.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till hudförändringar";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av hudförändringar',
            image_title: 'Cazzandra Lindberg - Expert på behandling av hudförändringar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på hudförändringar',
            image_title: 'Veronika Benedik - Specialist inom hudförändringsvård'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom behandling av hudförändringar',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på hudförändringar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av hudförändringar',
            image_title: 'Vilma Libom - Expert inom behandling av hudförändringar'
      ),
);

$specialist_url_label = "Se alla hudterapeuter";
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
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_title: 'Harmony XL Pro - Laser & IPL',
            image_alt: 'Harmony XL Pro logotyp',
            url: 'alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
      ),
      new Brand(
            label: 'Fraction CO2',
            image: 'bilder/logotyper/fraction-co2.png',
            image_alt: 'Fraction CO2 logotyp',
            image_title: 'Fraction CO2',
            url: '/varumarken/fraction-co2/',
            url_title: 'Fraction CO2',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av hudförändringar";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/hudproblem/hudforandringar/" />

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
      <?php
      $floater_small_text = true;
      include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/floater.php');
      ?>
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
                                          <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(-1)">
                                                <?php icon('arrow-left') ?>
                                          </button>
                                          <button class="round-large grey" aria-label="scroll" onclick="scrollSpecialists(1)">
                                                <?php icon('arrow-right') ?>
                                          </button>
                                    </div>
                              </div>
                              <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut/"><?php echo $specialist_url_label ?></a>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken/"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>