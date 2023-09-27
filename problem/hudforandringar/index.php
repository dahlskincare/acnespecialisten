<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Hudförändringar - Identifiering och Råd | Acnespecialisten';
$seo_description = 'Lär dig allt om olika typer av hudförändringar, från identifiering till råd och omhändertagande. Skräddarsydda lösningar och expertis från Acnespecialisten.';
$seo_keywords = 'ansiktsvårta, fibrom, födelsemärke, hallonmärke, jordgubbsmärke, smultronmärke, hemangiom, hudflikar, hudutväxt, leverfläckar, mole, seborroisk keratos, skintags, skönhetsfläck, åldersvårta';

// här lägger du bild som du vill skall synas när du länkar i sociala medier eller sms
$seo_image = 'images/treatments/large/hudforandringar.jpg';

$title = 'Hudförändringar';

$image_small = 'images/problems/424x324/hudforandringar.webp';
$image_large = 'images/problems/424x456/hudforandringar.webp';
$image_title = 'Olika typer av hudförändringar';
$image_alt = 'Bild som illustrerar olika typer av hudförändringar';
$description = 'Här förklarar vi vad som kännetecknar olika typer av hudförändringar, varför de kan uppstå, och hur man kan hantera dem. Vi går även igenom hur vi på Acnespecialisten kan stödja dig i din process att förstå och ta hand om dina hudförändringar.';

$akas = [
      new Link(
            label: 'Födelsemären',
            url: null,
            title: 'Födelsemärken',
      ),
      new Link(
            label: 'Hudflikar',
            url: null,
            title: 'Hudflikar',
      ),
      new Link(
            label: 'Leverfläckar',
            url: null,
            title: 'Leverfläckar',
      ),
];

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "consultation-booking?problem=hudforandringar";
$consultation_url_title = "Gratis Konsultation för Hudförändringar";

$booking_url_label = "Boka behandling";
$booking_url = "treatment-booking?problem=hudforandringar";
$booking_url_title = "Boka Aknebehandling";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Hudförändringar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Aknebehandling";

$floating_consultation_url_label = "Få gratis konsultation";
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
      'articles' => 'Risker',
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
            content: '<p class="p200">Hudförändringar är godartade tillväxter eller markeringar på huden som inte utgör något hot mot en individs hälsa. Dessa förändringar kan uppträda som fläckar, upphöjningar, eller utväxter och kommer i en mängd olika former, färger och storlekar. Även om de är ofarliga, kan en del av dem orsaka kosmetiska eller komfortrelaterade bekymmer. En av de vanligaste formerna av godartade hudförändringar är leverfläckar, som i huvudsak är överdrivna pigmentansamlingar i huden. De kan vara medfödda eller uppkomma med tiden på grund av solens exponering eller genetik. Födelsemärken är också godartade och kan uppträda någonstans på kroppen. De är oftast bruna eller svarta, men kan också vara blå, grå eller till och med röda eller rosa. Deras storlek och form kan variera mycket.</p>',
            extended_content: '<p class="p200 mt-xl">Hemangiom, ofta kallade hallonmärke, jordgubbsmärke eller smultronmärke, är ljusröda födelsemärken som uppkommer vid eller strax efter födseln. Dessa märken består av extra blodkärl och bleknar oftast över tid. Seborroisk Keratos och åldersvårtor är vanliga hos äldre individer. De är oftast bruna, upphöjda fläckar som kan vara skrovliga. Medan de kan se oroande ut, är de helt godartade. Skintags, eller hudflikar, är små, mjuka utväxter av hud som ofta uppträder på områden där hud gnids mot hud, som halsen, armhålorna eller ljumsken.</p>
            <p class="p200 mt-xl">Fibrom och andra hudutväxter kan vara mjuka eller fasta och variera i färg från hudfärgad till svart. Även om de flesta av dessa är godartade, är det alltid bra att få dem kontrollerade om någon ny hudförändring eller om en befintlig förändring börjar ändra sig. Sammanfattningsvis är godartade hudförändringar vanligtvis ofarliga tillväxter eller märken på huden. Medan de flesta inte kräver behandling, kan de ibland tas bort av kosmetiska skäl eller om de orsakar irritation. Trots att de är godartade, är det viktigt att regelbundet granska huden och konsultera en specialist om några förändringar upptäcks.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man hudförändringar?',
            content: '<p class="p200">Hudförändringars uppkomst kan vara en produkt av flera olika faktorer, både interna och externa. Genetik spelar ofta en betydande roll. Till exempel kan födelsemärken och vissa typer av leverfläckar ärvas från föräldrar till barn. Om det finns en familjehistoria av vissa hudförändringar, är chansen större att andra familjemedlemmar också kommer att utveckla dem. Miljöfaktorer är också avgörande. Solens ultravioletta strålar är en känd orsak till många hudförändringar, inklusive leverfläckar, födelsemärken och seborroiska keratoser. Långvarig och oskyddad exponering för solen kan inte bara leda till en ökning av antalet hudförändringar, utan också förändra de som redan finns. Detta understryker vikten av att använda solskyddsmedel och att ta andra försiktighetsåtgärder när man är utomhus.</p>',
            extended_content: '<p class="p200 mt-xl">Åldrande är ytterligare en bidragande faktor. Med tiden börjar huden att visa tecken på slitage. Kollagenproduktionen minskar, vilket leder till minskad elasticitet och fasthet i huden. Som ett resultat av detta kan nya hudförändringar uppträda, och befintliga kan bli mer framträdande. Åldersvårtor, till exempel, tenderar att uppträda med stigande ålder och är särskilt vanliga hos individer över 50. Hormonella förändringar, särskilt de som inträffar under graviditet, pubertet och menopaus, kan också leda till utveckling av nya hudförändringar eller förändringar av redan existerande märken. Hudflikar och skintags kan uppträda eller öka i storlek under dessa perioder.</p>
            <p class="p200 mt-xl">Infektioner, allergier, hudskador eller andra medicinska tillstånd kan också orsaka hudförändringar. Hudskador, som skärsår eller skrubbsår, kan ibland leda till ärrbildning eller andra permanenta märken. För att sammanfatta, hudförändringar kan uppträda av en mängd olika skäl, allt från genetik och åldrande till miljöfaktorer och hormonella obalanser. Det är därför det är viktigt att ha en förståelse för dessa underliggande orsaker, så att man kan vidta lämpliga åtgärder för att förebygga, behandla eller övervaka dem.</p>',
            icons: array('who-infants' => 'Hormoner', 'who-teenagers' => 'Stress', 'who-adults' => 'Genetik', 'who-elders' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får hudförändringar?',
            content: '<p class="p200">Nästan alla människor kommer vid något skede i livet att uppleva någon form av hudförändring, men vem som drabbas, när och varför kan variera beroende på ett flertal faktorer. För det första är genetik en av de mest avgörande faktorerna. Om dina föräldrar eller andra nära släktingar har en historia av specifika hudförändringar, såsom födelsemärken, leverfläckar eller åldersvårtor, är chansen större att du också kommer att utveckla liknande förändringar. Detta arv kan sträcka sig över flera generationer, vilket betyder att även om dina föräldrar inte har dessa hudförändringar, kan du ändå ärva benägenheten från tidigare generationer. Ålder är en annan viktig faktor. Även om människor i alla åldrar kan och gör utveckla hudförändringar, tenderar vissa förändringar att vara mer vanliga under specifika livsfaser. Till exempel är hemangiom, även kända som jordgubbsmärken, vanligast hos nyfödda, medan åldersvårtor oftast uppträder i vuxen ålder.</p>',
            extended_content: '<p class="p200 mt-xl">Miljö och livsstil påverkar också sannolikheten för att utveckla hudförändringar. Personer som spenderar mycket tid utomhus eller som inte regelbundet använder solskyddsmedel kan ha en högre risk att utveckla solinducerade hudförändringar som leverfläckar. Detsamma gäller individer som ofta utsätter sin hud för kemikalier eller andra irriterande ämnen, vilket kan leda till reaktioner eller långvariga förändringar i huden. Hormonella förändringar, som de som upplevs under graviditet, pubertet och menopaus, kan också påverka hudens tillstånd och förekomsten av hudförändringar. Detta kan förklara varför vissa kvinnor plötsligt upptäcker hudförändringar under graviditeten eller varför tonåringar kan märka nya födelsemärken under puberteten.</p>
            <p class="p200 mt-xl">Hälsotillstånd och mediciner kan också påverka hudens utseende. Personer med vissa autoimmuna sjukdomar, till exempel, kan vara mer benägna att utveckla specifika hudförändringar. Likaså kan vissa mediciner orsaka hudreaktioner eller förändringar som en biverkning. Så även om nästan alla kommer att uppleva någon form av hudförändring under sin livstid, varierar sannolikheten, typen och svårighetsgraden av dessa förändringar beroende på genetik, ålder, livsstil, hormonella förändringar, hälsa och andra faktorer. Att förstå dessa nyanser kan hjälpa individer att vara mer medvetna och ta hand om sin hud på bästa möjliga sätt.</p>',

            icons: array('who-infants' => 'Barn', 'who-teenagers' => 'Ungdommar', 'who-adults' => 'Vuxna', 'who-elders' => 'Män & Kvinnor')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man hudförändringar?',
            content: '<p class="p200">Hudförändringar kan uppstå överallt på kroppen, men vissa områden är mer benägna att utveckla specifika typer av förändringar beroende på en kombination av genetik, exponering och andra faktorer. Ansiktet är ett av de vanligaste områdena där människor märker hudförändringar, givet dess konstanta exponering för miljöfaktorer som sol, vind och föroreningar. Här kan du hitta allt från födelsemärken och åldersvårtor till seborroisk keratos. På grund av den ökade solens exponering är leverfläckar och födelsemärken också vanliga i detta område, särskilt på kinderna, näsan och pannan. Händer och armar, som också ofta är exponerade, kan visa tecken på åldrande snabbare än mer skyddade områden. Här kan man se leverfläckar, åldersvårtor eller solskadad hud. Dessutom kan hudutväxter eller hudflikar utvecklas i områden med friktion, såsom axlar eller under bysten.</p>',
            extended_content: '<p class="p200 mt-xl">Baksidan av kroppen, särskilt ryggen, kan vara en plats där födelsemärken och leverfläckar utvecklas eftersom det ofta är svårt för individer att övervaka dessa områden regelbundet. Förändringar här bör granskas regelbundet av en läkare eller hudspecialist för att säkerställa att de inte är skadliga. Benen, särskilt hos kvinnor, kan uppleva förändringar som en följd av solskador, åldrande eller hormonella förändringar. Här kan du hitta leverfläckar, fibromer och ibland utväxter som är resultatet av kronisk friktion eller irritation. Halsen och bröstområdet är också kända för att visa tecken på åldrande eller solskada. Denna känsliga hud kan utveckla seborroisk keratos, skintags eller andra mindre vanliga hudförändringar som fibromer.</p>
            <p class="p200 mt-xl">Beroende på kroppens område kan också hudens tjocklek, mängden fettvävnad och graden av solskydd påverka vilken typ av hudförändring som är mest sannolik. Hudförändringar kan också förekomma internt, som i munnens slemhinna eller på ögats retina, även om dessa inte är synliga för blotta ögat. Sammanfattningsvis, även om hudförändringar kan förekomma var som helst på kroppen, varierar förekomsten och typen av förändringar beroende på områdets unika exponering för yttre och inre faktorer. Att känna igen dessa skillnader kan hjälpa individer att övervaka sin hud mer effektivt och söka professionell rådgivning när det behövs.</p>',
            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'Axlarna')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos oss blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din hudförändring och skapar en individuell behandlingsplan.',

            url_label: 'Få gratis konsultation',
            url: 'hudkonsultation',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva behandlingar anpassade för din specifika hudförändring, så att du kan känna dig trygg och säker.',

            url_label: 'Se behandlingar för hudförändringar',
            url: 'behandlingar/hudforandringar',
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
                      subtitle: null,
                      image_url: 'images/problems/102x102/ansiktsvarta.webp',
                      image_alt: 'Bild av Ansiktsvårta',
                      image_title: 'Exempel på Ansiktsvårta',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Fibrom',
                      subtitle: null,
                      image_url: 'images/problems/102x102/fibrom.webp',
                      image_alt: 'Bild av Fibrom',
                      image_title: 'Exempel på Fibrom',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Födelsemärke',
                      subtitle: null,
                      image_url: 'images/problems/102x102/fodelsemarke.webp',
                      image_alt: 'Bild av Födelsemärke',
                      image_title: 'Exempel på Födelsemärke',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hallonmärke',
                      subtitle: null,
                      image_url: 'images/problems/102x102/hallonmarke.webp',
                      image_alt: 'Bild av Hallonmärke',
                      image_title: 'Exempel på Hallonmärke',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Jordgubbsmärke',
                      subtitle: null,
                      image_url: 'images/problems/102x102/jordgubbsmarke.webp',
                      image_alt: 'Bild av Jordgubbsmärke',
                      image_title: 'Exempel på Jordgubbsmärke',
                      url: null,
                      url_title: null,
                  ),
                  new BasedType(
                      title: 'Smultronmärke',
                      subtitle: null,
                      image_url: 'images/problems/102x102/smultronmarke.webp',
                      image_alt: 'Bild av Smultronmärke',
                      image_title: 'Exempel på Smultronmärke',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hemangiom',
                      subtitle: null,
                      image_url: 'images/problems/102x102/hemangiom.webp',
                      image_alt: 'Bild av Hemangiom',
                      image_title: 'Exempel på Hemangiom',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hudflikar',
                      subtitle: null,
                      image_url: 'images/problems/102x102/hudflikar.webp',
                      image_alt: 'Bild av Hudflikar',
                      image_title: 'Exempel på Hudflikar',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Hudutväxt',
                      subtitle: null,
                      image_url: 'images/problems/102x102/hudutvaxt.webp',
                      image_alt: 'Bild av Hudutväxt',
                      image_title: 'Exempel på Hudutväxt',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Leverfläckar',
                      subtitle: null,
                      image_url: 'images/problems/102x102/leverflackar.webp',
                      image_alt: 'Bild av Leverfläckar',
                      image_title: 'Exempel på Leverfläckar',
                      url: null,
                      url_title: null,
                  ),
                  new BasedType(
                      title: 'Seborroisk Keratos',
                      subtitle: null,
                      image_url: 'images/problems/102x102/seborroisk-keratos.webp',
                      image_alt: 'Bild av Seborroisk Keratos',
                      image_title: 'Exempel på Seborroisk Keratos',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Skintags',
                      subtitle: null,
                      image_url: 'images/problems/102x102/skintags.webp',
                      image_alt: 'Bild av Skintags',
                      image_title: 'Exempel på Skintags',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Skönhetsfläck',
                      subtitle: null,
                      image_url: 'images/problems/102x102/skonhetsflack.webp',
                      image_alt: 'Bild av Skönhetsfläck',
                      image_title: 'Exempel på Skönhetsfläck',
                      url: null,
                      url_title: null,
                  ),

                  new BasedType(
                      title: 'Åldersvårta',
                      subtitle: null,
                      image_url: 'images/problems/102x102/aldersvarta.webp',
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

      image_small: 'images/services/200x200/konsultation-hudforandring.webp',
      image_large: 'images/services/200x200/konsultation-hudforandring.webp',
      image_alt: 'Bild av en konsultation för hudförändringsbehandling',
      image_title: 'Konsultation för behandling av hudförändringar',

      url_label: 'Läs mer om vår hudkonsultation för hudförändringar',
      url: 'hudkonsultation-forandringar',
      url_title: 'Klicka här för att läsa mer om gratis hudkonsultation för hudförändringar',

      consultation_url_label: 'Boka tid för hudkonsultation för hudförändringar',
      consultation_url: 'consultation-booking?problem=hudforandring',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudförändringar',
);

$headline02 = "02. Behandla hudförändringar med Cryopen";

$services = array(
      new Service(
            title: 'Behandling med Cryopen',
            duration: '45 min',
            price: '1295 kr',
            content: 'Cryopen är en avancerad behandling som snabbt och effektivt behandlar hudförändringar genom att frysa det drabbade området. Detta kan hjälpa till att minska eller eliminera utseendet på olika typer av hudförändringar.',

            image_small: 'images/services/200x200/cryopen-behandling.webp',
            image_large: 'images/services/200x200/cryopen-behandling.webp',
            image_alt: 'Bild av en Cryopen behandling',
            image_title: 'Behandling av hudförändringar med Cryopen',

            url: 'behandlingar/cryopen',
            url_label: 'Läs mer om behandling med Cryopen',
            url_title: 'Klicka här för att läsa mer om Cryopen behandling',

            consultation_url_label: 'Boka tid för konsultation för Cryopen behandling',
            consultation_url: 'consultation-booking?problem=hudforandring&service=cryopen',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för Cryopen behandling',

            booking_url_label: 'Boka tid för behandling med Cryopen',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/hudspecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43560/cryopen-behandling-1653923',
            booking_url_title: 'Klicka för att boka tid för en behandling med Cryopen'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp med mina hudförändringar?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag söka hjälp med mina hudförändringar?',
            image_title: 'När ska jag söka hjälp med mina hudförändringar?',
            content: '<p class="p200">Hudförändringar är vanliga och kan variera i form och storlek. Även om de flesta hudförändringar är godartade och inte utgör något direkt hot, kan de påverka självkänslan eller ge upphov till oro. Om du märker att en hudförändring förändras, kliar, blöder eller om du helt enkelt är osäker på dess natur, bör du söka professionell rådgivning.</p>
            <p class="p200 mt-m">Hos AcneSpecialisten kan du få en individuell konsultation där våra specialister kommer att granska och bedöma dina hudförändringar. Beroende på diagnos kan du få rekommendationer om lämplig behandling eller vidare rådgivning. Vår prioritet är att hjälpa dig att känna dig trygg och informerad om din hy. Så, om du är bekymrad över några hudförändringar, vänta inte med att boka en tid med oss. Det är aldrig för tidigt att ta steget.</p>',
      ),
      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina hudförändringar?',
            content: '<p class="p200">När det kommer till behandling och bedömning av hudförändringar är AcneSpecialisten det självklara valet. Med över 30 års erfarenhet inom hudvård och hudförändringar, kan vi erbjuda lösningar som är både effektiva och skräddarsydda efter dina behov.</p>
            <p class="p200 mt-m">Vårt team av hudterapeuter använder de senaste metoderna och teknologierna för att säkerställa bästa möjliga resultat. Vi arbetar med en individuellt anpassad behandlingsplan och följer upp din framgång genom hela behandlingsprocessen. Tillsammans med dig ser vi till att du får rätt behandling och råd för dina hudförändringar.</p>
            <p class="p200 mt-m">När du väljer AcneSpecialisten för dina hudförändringar får du inte bara tillgång till toppmodern och effektiv behandling. Vi ser dig som en partner på din resa mot en hälsosam hud och är dedikerade till att hjälpa dig varje steg på vägen. Med vårt engagemang, djupa kunskap och långa erfarenhet är vi ditt bästa val för behandling av hudförändringar.</p>',
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
                  title: 'Hur blir jag av med min akne snabbt?',
                  text: '<p class="p200">Att bli av med akne snabbt är en utmaning, eftersom det inte finns någon quickfix när det gäller akne. Effektiv behandling kräver att du tar hand om din hud genom att använda rätt behandlingar och produkter som passar din specifika hudtyp och akne. För att få en skräddarsydd behandlingsplan som hjälper dig att bli av med aknen så snabbt som möjligt, rekommenderar vi att du bokar en kostnadsfri hudkonsultation hos oss. Under konsultationen kommer vi att analysera din hud och hjälpa dig att utforma en anpassad behandlingsrutin som ger dig de bästa förutsättningarna för att snabbt och effektivt behandla din akne.</p>'
            ),
      ),
      'Behandling mot akne' => array(
            new Question(
                  title: 'Hur många behandlingar behövs?',
                  text: '<p class="p200">Antalet behandlingar som behövs varierar från person till person och beror på flera faktorer, som din hudtyp, svårighetsgraden av din akne och din respons på behandlingen. Vanligtvis kan du se en förbättring efter 1 till 3 veckors regelbunden behandling.</p>'
            ),
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="faq"><?php echo $faq_url_label ?></a>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" href="skin-guide" title="<?php echo $skinguide_url_title ?>"><?php echo $skinguide_url_label ?></a>
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
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>