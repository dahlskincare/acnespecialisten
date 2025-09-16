<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är milier? | AcneSpecialisten';
$seo_description = 'Här hittar du allt om milier och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'plitor i ansiktet, knotter i ansiktet, små knottror i ansiktet, vita små prickar på huden, millier, knottror i ansiktet, pormask som inte går att klämma, hård vit kula under huden, milie, vita finnar, vita upphöjda prickar på huden, små vita prickar på huden, milier hud, milier';
$seo_image = 'bilder/hudproblem/424x456/milier.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Milier', '/milier.php'),
);

$image_small = 'bilder/hudproblem/358x274/milier.webp';
$image_large = 'bilder/hudproblem/424x456/milier.webp';
$image_title = 'Visar en hud med milier';
$image_alt = 'Bild som illustrerar hur milier ser ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Milier i ansiktet',
      description: 'Milier är små, vita cystor som kan drabba alla. På denna sida utforskar vi hur milier bildas, deras placering på huden och skillnaden mellan milier och andra hudproblem.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Milia&method=Service_Facial_MiliaTreatment&area=EMPTY', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Milia&method=Service_Facial_MiliaTreatment&area=EMPTY', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är milier?',
            content: '<p class="p200">Milier är små, vita eller ibland gula inkappslingar som framträder på hudens yta. Dessa formationer är faktiskt små cystor fyllda med keratin, ett protein som finns i hud, hår och naglar, vilket gör att de kan upplevas som hårda pormaskar eller finnar. De bildas när döda hudceller blir instängda istället för att exfolieras bort naturligt. Trots att de kan uppfattas som estetiskt störande för vissa, är milier helt ofarliga och inte smittsamma. Det är också viktigt att inte försöka klämma sina egna milier då de saknar poröppning vilket kan leda till inflammation eller ärrbildning om de klämms.</p>',
            extended_content: '<p class="p200 mt-xl">Milier kan delas in i olika kategorier baserade på deras ursprung. Primära milier uppstår utan någon uppenbar anledning och kan ses hos individer i alla åldrar, inklusive nyfödda. Sekundära milier, å andra sidan, utvecklas som en respons på skada, såsom en inflammatorisk hudsjukdom, skador från solbränna, eller som en bieffekt av vissa hudvårdsprodukter eller behandlingar som irriterar huden. Att förstå dessa typer är viktigt för att rikta in sig på lämplig <a class="b200 underline color-deep-sea-400" href="/milierbehandling.php" title="Mer information om milier behandling">milier beandling</a> och hudvård för att förebygga eller minska förekomsten av milier.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man milier?',
            content: '<p class="p200">Det finns många orsaker bakom bilandet av milier men grundar sig ofta i ansamlingen av döda hudceller. Dessa celler kan bli instängda under huden snarare än att avlägsnas genom den naturliga exfolieringsprocessen. Förutom denna samling kan genetiska faktorer, olämplig hudvård, och skador på huden också spela en roll i utvecklingen av milier.</p>',
            extended_content: '<p class="p200 mt-xl">Till exempel kan användning av för tjocka eller oljebaserade hudvårdsprodukter bidra till att keratinet blir instängt, vilket underlättar bildandet av milier. På samma sätt kan hud som skadas av solen eller som är utsatt för aggressiva kemikalier ha en nedsatt förmåga att exfoliera döda hudceller effektivt, vilket leder till att dessa celler ackumuleras och bildar milier. Att förstå dessa utlösande faktorer är avgörande för att vidta förebyggande åtgärder och anpassa sin hudvårdsrutin för att minimera risken för milier.</p>',
            icons: array('genetik' => 'Genetik', 'klimat' => 'Klimat', 'livsstil' => 'Livsstil')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får milier?',
            content: '<p class="p200">Milier, de små keratinfyllda cystorna som bildas under huden, kan påverka individer oavsett ålder, kön eller hudtyp, vilket gör dem till ett vanligt hudtillstånd. Dock varierar förekomsten av milier bland olika åldersgrupper och under olika omständigheter. Eftersom det är något alla kan drabbas av har milier många olika namn som användsi dagligt tal såsom plitor, knotter, knottror eller bara prickar.</p>',
            extended_content: '<p class="p200 mt-xl">Nyfödda<br />Milier är mycket vanliga hos nyfödda och anses vara en normal del av hudens utveckling. Hos spädbarn uppträder milier ofta i ansiktet, särskilt runt näsan och på kinderna, men de kan också förekomma på andra delar av kroppen. Dessa milier försvinner vanligtvis naturligt inom några veckor eller månader efter födseln utan behandling.</p>
            <p class="p200 mt-xl">Vuxna<br />Även om milier är särskilt vanliga hos nyfödda, kan vuxna också utveckla dem. Hos vuxna kan bildandet av milier associeras med hudskador, långvarig solskada, användning av vissa kosmetiska produkter som kan blockera porerna, eller hudtillstånd som påverkar hudens förmåga att exfoliera sig själv. Vuxna med en tendens till torr hud eller de som upplever hormonella förändringar kan också vara mer benägna att utveckla milier.</p>
            <p class="p200 mt-xl">Personer med vissa hudtillstånd<br />Individer med vissa hudåkommor, såsom rosacea, atopisk dermatit eller skadad hud från till exempel solbränna, kan ha en ökad risk att utveckla milier. Hudtillstånd som påverkar hudens barriärfunktion eller förnyelseprocess kan skapa gynnsamma förhållanden för milier att bildas.</p>
            <p class="p200 mt-xl">Sammanfattningsvis kan vem som helst få milier, men förekomsten kan vara högre bland nyfödda, vuxna som utsätts för vissa riskfaktorer, personer med specifika hudtillstånd, och de som använder produkter som kan bidra till hudblockeringar. Även om milier är ofarliga och inte indikerar ett allvarligare hudproblem, kan de för vissa personer vara en kosmetisk oro som de önskar behandla.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'barn' => 'Barn', 'vuxna' => 'Vuxna', '65+' => 'Äldre')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man milier?',
            content: '<p class="p200">Milier kan uppträda på olika delar av kroppen men är mest vanliga i ansiktet, där huden är känslig och utsatt för både yttre och inre faktorer som kan bidra till deras bildning. De specifika platser där milier oftast observeras inkluderar:</p>',
            extended_content: '<p class="p200 mt-xl">Ögonområdet<br />Milier förekommer ofta runt ögonen, inklusive ögonlocken och under ögonen. Denna hud är särskilt tunn och känslig, vilket gör den mer mottaglig för blockeringar som kan leda till milier.</p>
            <p class="p200 mt-xl">Kinder<br />Ansiktets kinder är en annan vanlig plats för milier, särskilt hos nyfödda och små barn, men även vuxna kan drabbas här. Huden på kinderna kan lätt bli irriterad eller skadad, vilket skapar gynnsamma förhållanden för milier att utvecklas.</p>
            <p class="p200 mt-xl">Näsan<br />Området runt näsan, inklusive näsvingarna och näsryggen, är ytterligare en vanlig plats för bildandet av milier. Näsan har hög talgproduktion, och även om milier inte direkt orsakas av talg, kan relaterade hudförändringar bidra till att keratin blir instängt.</p>
            <p class="p200 mt-xl"Hakan<br />Liksom andra delar av ansiktet kan hakan vara en plats där milier uppstår, särskilt i områden där huden kan bli irriterad från rakning, friktion eller användning av tjocka hudvårdsprodukter som kan blockera porerna.</p>
            <p class="p200 mt-xl">Öronen<br />Milier kan även uppträda på eller runt öronen, inklusive öronlapparna och bakom öronen, där små hudfickor lätt kan bli blockerade.</p>
            <p class="p200 mt-xl">Även om dessa är de vanligaste platserna för milier, kan de i princip uppträda var som helst på kroppen. Det är mindre vanligt, men inte omöjligt, för milier att utvecklas på områden som halsen och bröstet, särskilt om huden där har blivit irriterad eller skadad.</p>
            <p class="p200 mt-xl">Det är viktigt att komma ihåg att även om milier kan vara kosmetiskt störande, är de helt ofarliga och inte smittsamma. De kan dock vara tecken på att huden behöver extra omvårdnad eller anpassning av hudvårdsrutiner, särskilt för personer som ofta upplever dessa små cystor.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kinder' => 'På Kinderna', 'ogon' => 'Runt ögonen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten matchas du med en personlig hudterapeut som hjälper dig att identifierar dina hudproblem och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi erbjuder målinriktade och effektiva behandlingar, anpassade till din hud och dess unika behov. Vårt mål är att du ska kunna bli av med dina milier på ett säkert och effektivt sätt.',

            url_label: 'Läs mer om behandling',
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
$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation för milier',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under ett personligt möte med en av AcneSpecialistens hudexperter utförs en undersökning av din hy. Vi tar före-bilder på det drabbade området och rekommenderar en skräddarsydd behandlingsplan utformad efter dina specifika behov.',

      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för milierbehandling',
      image_title: 'Konsultation för milierbehandling',

      url_label: 'Läs mer om konsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Klicka här för att läsa mer om kostnadsfri konsultation för milier',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för milier',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Behandling mot milier',
            duration: '60 min',
            price: '1295 kr',
            content: 'Vår behandling syftar till att noggrant avlägsna dessa små cystor. Genom att använda säkra och effektiva extraktionsmetoder, hjälper vi dig att bli av med milier och därmed förbättra hudens övergripande utseende.',

            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en behandling mot milier',
            image_title: 'Behandling mot milier',

            url: '/milierbehandling.php',
            url_label: 'Läs mer om ansiktsbehandling',
            url_title: 'Klicka här för att läsa mer om behandling mot milier',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Milia',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för behandling mot milier',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Milia&method=Service_Facial_MiliaTreatment&area=EMPTY',
            booking_url_title: 'Klicka för att boka tid för en behandling mot milier'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp med mina milier?',
            image_title: 'När ska jag söka hjälp med mina milier?',
            content: '<p class="p200">Att upptäcka milier på huden kan vara en källa till frustration, särskilt när de dyker upp på väl synliga ställen. Dessa små, ofarliga hudcystor orsakar vanligtvis inte något fysiskt obehag, men deras närvaro kan vara estetiskt störande för många. Det finns specifika situationer när det blir viktigt att överväga att söka professionell hjälp för att hantera dem. Om du har försökt olika metoder för hembehandling utan något märkbart resultat, kan det vara ett tecken på att det är dags att ta nästa steg.</p>
            <p class="p200 mt-m">Ibland kan det vara svårt att skilja milier från andra hudförändringar såsom vita pormaskar eller små fettknölar. Om osäkerhet råder kring vad dessa hudförändringar faktiskt är, är det klokt att söka expertis för en korrekt diagnos. Att besöka en hudterapeut kan ge klarhet och säkerställa att du får rätt behandling.</p>
            <p class="p200 mt-m">Milier kan för vissa personer vara mer än bara en mindre skönhetssak; de kan påverka självkänslan och välbefinnandet. Om du känner dig obekväm eller självmedveten på grund av dina milier, är det ett tydligt tecken på att professionell hjälp kan vara av värde. En hudterapeut kan erbjuda skräddarsydda behandlingsalternativ som effektivt förbättrar hudens utseende utan att kompromissa med dess hälsa.</p>
            <p class="p200 mt-m">Ett viktigt skäl till att undvika att hantera milier på egen hand är risken för hudskador, infektioner eller ärrbildning. Professionell borttagning av milier genom en hudterapeut säkerställer att behandlingen utförs säkert och effektivt, med minimal risk för negativa effekter. Att välja att besöka en specialist kan därför vara ett klokt beslut för alla som vill hantera sina milier på ett säkert och effektivt sätt, samtidigt som de upprätthåller en god hudhälsa och estetik.</p>',
      ),

      new Article(
            title: 'Varför ska jag besöka AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag besöka AcneSpecialisten för mina milier?',
            image_title: 'Varför ska jag besöka AcneSpecialisten för mina milier?',
            content: '<p class="p200">Att besöka Acnespecialisten för dina milier innebär att du får tillgång till över 30 års erfarenhet och expertis inom specifika behandlingar för dessa små, keratinfyllda cystor. Vi förstår att milier, som saknar naturlig poröppning, kräver särskild hantering med de rätta verktygen för att säkert och effektivt avlägsna dem utan risk för ärrbildning eller infektion. </p>
            <p class="p200 mt-m">Vår långvariga specialisering och användning av beprövade tekniker har etablerat oss som ledande experter på området, erkända för vår förmåga att erbjuda skräddarsydda behandlingslösningar. Genom att välja oss får du inte bara professionell hjälp med att ta bort milier utan också en partner som bidrar till din övergripande hudhälsa. Låt vår expertis och dedikation till kvalitet visa varför vi anses vara de bästa för behandling av milier.</p>',
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
$results_url_title = "se flera milierbehandlingsresultat";



$faq_categories = array(
      'Generellt om milier' => array(
            new Question(
                  title: 'Är milier skadliga eller farliga för huden?',
                  text: '<p class="p200">Nej, milier är inte skadliga eller farliga för huden. De är små, ofarliga cystor som bildas när keratin, ett hudprotein, blir instängt under hudytan. Även om milier inte orsakar fysisk skada, kan de vara ett estetiskt bekymmer för vissa.</p>'
            ),
            new Question(
                  title: 'Kan milier försvinna av sig själva?',
                  text: '<p class="p200">Milier tenderar sällan att försvinna av sig själva, särskilt om de har funnits under en längre tid. I vissa fall kan milier hos nyfödda försvinna spontant, men hos vuxna är det mindre troligt. Professionell behandling rekommenderas för att effektivt och säkert ta bort dem.</p>'
            ),

            new Question(
                  title: 'Vad skiljer milier från finnar?',
                  text: 'Milier och finnar skiljer sig åt i orsak och utseende. Milier uppstår när keratin, ett protein i huden, blir instängt under ytan och bildar små, vita eller gulaktiga cystor. De är inte resultatet av tilltäppta porer och är inte inflammerade. Vita finnar, å andra sidan, orsakas av tilltäppta hårsäckar på grund av överproduktion av talg och döda hudceller, vilket kan leda till inflammation och bakterietillväxt.</p>'
            ),
            new Question(
                  title: 'Hur länge tar det att se resultat efter en behandling för milier?',
                  text: '<p class="p200">Resultaten kan ses omedelbart efter behandlingen då milierna extraheras. Därefter kan det ta några dagar för huden att läka, i vissa fall kan flera behandlingar krävs för att få bort milierna helt och hållet.</p>'
            ),
            new Question(
                  title: 'Hur kan jag förhindra att milier återkommer?',
                  text: '<p class="p200">Förhindrande av milier inkluderar god hudvård som rengöring och återfuktning samt att identifiera de yttre faktorer som bidragit till att milierna uppstått.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till milier";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling av milier',
            image_title: 'Cazzandra Lindberg - Expert på behandling av milier'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på milier',
            image_title: 'Veronika Benedik - Specialist inom vård av milier'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom behandling av milier',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på milier'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av milier',
            image_title: 'Vilma Libom - Expert inom behandling av milier'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$brands = array(
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
            url: '/varumarken/skin-tech/',
            url_title: 'Skin Tech',
      ),
      new Brand(
            label: 'Alma Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Alma Rejuve Dye-VL logotyp',
            image_title: 'Alma Rejuve Dye-VL - IPL',
            url: '/varumarken/rejuve-dye-vl/',
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
            url: '/varumarken/splendor-x/',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice logotyp',
            image_title: 'Soprano Ice - Permanent hårborttagning med laser',
            url: '/varumarken/soprano-ice/',
            url_title: 'Soprano Ice',
      ),
      new Brand(
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova logotyp',
            image_title: 'Powerlite Photonova - IPL',
            url: '/varumarken/powerlite-photonova/',
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
            url: '/varumarken/splendor-x/',
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
            url: '/varumarken/exceed/',
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

      <link rel="canonical" href="https://www.acnespecialisten.se/milier.php" />

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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot milier" href="varumarken/">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>