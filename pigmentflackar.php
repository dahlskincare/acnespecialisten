<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är pigmentfläckar? - Orsak, Behandla och Förebygg';
$seo_description = 'Här hittar du allt om pigmentfläckar och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'pigmentfläckar, orsaker till pigmentfläckar, förebygga pigmentfläckar, minska pigmentfläckar, hyperpigmentering, hudfläckar, hyperpigmentering, pigmenteringar';

$title = 'Pigmentfläckar';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem.php'),
      new PathSegment('Pigmentfläckar', '/pigmentflackar.php'),
);

$description = 'Pigmentfläckar, inklusive åldersfläckar eller hyperpigmentering, beror på ojämn produktion av melanin. På denna sida dyker vi djupare in i de bakomliggande faktorerna och presenterar en översikt över behandlingsmetoder för att skapa en mer enhetlig hudton.';

$image_small = 'bilder/problem/424x324/pigmentflackar.webp';
$image_large = 'bilder/problem/424x456/pigmentflackar.webp';
$image_title = 'Visar en hud med pigmentfläckar';
$image_alt = 'Bild som illustrerar hur pigmentfläckar kan se ut på huden';

$akas = [
      new Link(
            label: 'Pigmentförändringar',
            url: 'postinflammatorisk-hyperpigmentering.php',
            title: 'Utforska orsakerna, symptomen och de effektiva behandlingarna för postinflammatorisk hyperpigmentering i form av fläckar från finnar'
      ),
      new Link(
            label: 'Hudfläckar',
            url: null,
            title: 'Hudfläckar'
      ),

];

$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots";
$consultation_url_label = "Boka gratis konsultation";
$consultation_url_title = "Gratis konsultation för behandling av pigmentfläckar";

$booking_url = "https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka din tid för behandling av hudförändringar";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis konsultation för pigmenteringar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka din tid för behandling av pigmentförändringar";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Gratis konsultation för hyperpigmentering";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka din tid för behandling av hudfläckar";

$nav_buttons = array(
      'about' => 'Om pigmentfläckar',
      'approach' => 'Metoden',
      'symptoms' => 'Typer',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$about_title = 'Om Pigmentfläckar';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, kända som mörka hudfläckar, är områden på huden som har blivit mörkare än den omgivande huden. Detta beror på en överproduktion av melanin, hudens naturliga pigment. Fläckarna kan variera i färg, storlek och form och kan finnas var som helst på kroppen. De är oftast ofarliga men kan påverka huden estetiskt och känslomässigt, speciellt om de är synliga på utsatta områden som ansikte och händer.</p>',
            extended_content: '<p class="p200 mt-xl">Pigmentfläckar varierar i utseende, från lätta färgförändringar till djupare och mer distinkta mörkningar. De omfattar olika former, såsom lentigo (solfläckar), nevi (födelsemärken), och hyperpigmentering, vilken inkluderar tillstånd som åldersfläckar och melasma. Behandlingsstrategier anpassas ofta utifrån fläckarnas specifika karaktär och orsak.</p>
            <p class="p200 mt-xl">Hos oss, med över 30 års erfarenhet av att behandla pigmentfläckar, erbjuder vi de mest effektiva metoderna. Behandlingen måste skräddarsys efter din hudtyp och dina specifika hudfläckar. Våra specialister står redo att erbjuda dig en kostnadsfri hudkonsultation för att analysera din situation och utforma en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som stöttar dig genom hela behandlingsprocessen, från start till mål.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: 'uppstår pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar eller pigmentförändringar uppstår när melanin produceras ojämnt i huden, vilket skapar mörkare fläckar. Detta kan orsakas av solskador, åldrande, hormonella obalanser eller vissa mediciner och hälsoförhållanden. Vissa typer av pigmentfläckar kan bli permanenta om de inte behandlas korrekt.</p>',
            extended_content: '<p class="p200 mt-xl">Förståelse för typen av pigmentfläck och dess orsak är nyckeln till effektiv behandling. Felaktig behandling kan förvärra tillståndet, medan tidig diagnos och rätt behandling kan förhindra att fläckarna blir permanenta. Kunskap om hudvård och förebyggande åtgärder är också avgörande.</p>
            <p class="p200 mt-xl">Med över 30 års erfarenhet i branschen, specialiserar vi oss på att förstå och behandla pigmentfläckar. Vi erbjuder en kostnadsfri konsultation för att analysera din hud och utforma en individuell behandlingsplan. Genom att arbeta tillsammans med dig, strävar vi efter att förbättra och bevara din huds hälsa och utseende. Boka en tid idag och ta steget mot en klarare och friskare hud.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'sol' => 'Sol', 'graviditet' => 'Graviditet')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, även kända som pigmentförändringar, är ett fenomen som inte begränsas till en viss ålder, kön eller hudton. Individer med mörkare hud och de som har en familjehistoria av pigmentfläckar kan dock vara mer benägna att utveckla dessa märken. Hormonella förändringar, som de som kan inträffa under graviditet, kan också bidra till deras uppkomst.</p>',
            extended_content: '<p class="p200 mt-xl">Solskadad hy är en av de vanligaste orsakerna till att pigmentfläckar uppkommer. Långvarig exponering för solens strålar kan leda till en ökad produktion av melanin, vilket i sin tur kan resultera i ojämna mörka fläckar på huden. Åldrande kan också leda till ojämn melaninproduktion, där hudens förmåga att jämnt fördela melanin förändras med tiden. Detta resulterar i olika typer och nyanser av pigmentfläckar.</p>
            <p class="p200 mt-xl">Även om pigmentfläckar i ansiktet och på kroppen oftast är ofarliga, kan de vara störande ur ett estetiskt perspektiv. Dessa fläckar kan variera i storlek, form och färg, och kan vara både mörkt bruna, ljust bruna och helt vita. Eftersom de ofta uppenbarar sig i ansiktet, på kinderna och pannan, kan de påverka självkänslan hos många. Att söka professionell hjälp för att behandla och minimera deras utseende kan vara ett effektivt sätt att återställa huden till ett mer enhetligt och klart utseende.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna', '65+' => 'Äldre',)
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, eller hudfläckar, uppstår ofta i ansiktet, där de vanligtvis påverkar områden som kinder och panna. Exponering för solen utan ordentligt skydd kan snabbt leda till dessa missfärgningar, särskilt i områden som är mest utsatta för solljuset.</p>',
            extended_content: '<p class="p200 mt-xl">Förutom ansiktet kan pigmentfläckar även dyka upp på andra delar av kroppen, inklusive halsen, dekolletaget och händerna. Platser som ofta exponeras för solen är mer benägna att drabbas. Den ojämna produktionen av melanin som resulterar i fläckarna kan uppstå var som helst på huden.</p>
            <p class="p200 mt-xl">Om du vill ta bort dina pigmentfläckar och vill förstå mer om din specifika situation är det viktigt med professionell hjälp. Hos oss får du möjlighet att boka en kostnadsfri konsultation med en dedikerad hudterapeut som kan identifiera typen av pigmentfläckar du har och lägga upp en individuell behandlingsplan. Denna personliga analys hjälper oss att skräddarsy den mest effektiva metoden för att behandla dina pigmentfläckar och hjälpa dig att återfå en jämn och klar hudton.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kropp' => 'Kropp', 'hander' => 'Händer')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten börjar din behandling med en gratis konsultation. En erfaren hudterapeut undersöker dina hudproblem, identifierar dina specifika pigmentfläckar och skapar en skräddarsydd behandlingsplan anpassad till dina unika behov.',
            url_label: 'Boka en gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
            url_title: 'Boka din kostnadsfria konsultation om pigmentfläckar idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med din personliga behandlingsplan i hand använder AcneSpecialisten specialiserade metoder för att effektivt behandla dina pigmentfläckar. Vår expertis säkerställer att du snabbt ser resultat och känner dig nöjd med din hud.',
            url_label: 'Utforska våra behandlingar mot pigmentfläckar',
            url: 'behandla-pigmentflackar.php',
            url_title: 'Upptäck våra unika och effektiva behandlingar för pigmentfläckar'
      ),
);

$treatment_link = '<a href="behandla-pigmentflackar.php" title="Utforska effektiva behandlingar mot pigmentfläckar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot pigmentfläckar</a>';

$types_title = 'Olika typer av Pigmentfläckar';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Pigmentfläckar baserat på orsak',
            content: '<p class="p200">Pigmentfläckar kan orsakas av en mängd yttre faktorer som solens UV-strålning, hormonella förändringar, åldrande, miljöfaktorer och yttre skador på huden. Långvarig exponering för solen utan skydd, till exempel, kan öka melaninproduktionen och leda till fläckar, medan hormonella förändringar som graviditet kan ge temporär pigmentering. Förståelsen för dessa faktorer är avgörande för effektiv förebyggande och behandling av pigmentfläckar.</p>',
            types: array(
                  new BasedType(
                        title: 'Hormonella pigmentförändringar',
                        subtitle: 'Melasma',
                        image_url: '/bilder/symptom/102x102/melasma.webp',
                        image_alt: 'Bild av hormonella pigmentförändringar',
                        image_title: 'Hormonella pigmentförändringar',
                        url: '/melasma.php',
                        url_title: 'Utforska information om hormonella pigmentförändringar'
                  ),
                  new BasedType(
                        title: 'Solfläckar',
                        subtitle: 'Solar Lentigines',
                        image_url: '/bilder/symptom/102x102/solflackar.webp',
                        image_alt: 'Bild av solfläckar',
                        image_title: 'Solfläckar',
                        url: '/solskadad-hy.php',
                        url_title: 'Utforska information om solfläckar'
                  ),
                  new BasedType(
                        title: 'Åldersfläckar',
                        subtitle: 'Lentigo Senilis',
                        image_url: '/bilder/symptom/102x102/aldersflackar.webp',
                        image_alt: 'Bild av åldersfläckar',
                        image_title: 'Åldersfläckar',
                        url: '/aldersflackar.php',
                        url_title: 'Utforska information om åldersfläckar'
                  ),
                  new BasedType(
                        title: 'Fräknar',
                        subtitle: 'Ephelides',
                        image_url: '/bilder/symptom/102x102/fraknar.webp',
                        image_alt: 'Bild av fräknar',
                        image_title: 'Fräknar',
                        //url: 'problem/pigmentflackar/typer/freknar',
                        //url_title: 'Utforska information om fräknar'
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Pigmentfläckar baserat på Färg',
            content: '<p class="p200">Färgen på en pigmentfläck kan avslöja mycket om dess orsak och typ. Bruna fläckar är ofta kopplade till åldersrelaterade förändringar och solskador, medan röda eller rosa kan indikera inflammation. Svarta eller mörkbruna fläckar kan vara mer allvarliga och kräver professionell bedömning. Blå eller grå fläckar är oftast medfödda och specifika för vissa hudtyper. Varje färg ger ledtrådar som kan hjälpa i diagnostisering och behandling.</p>',
            types: array(
                  new BasedType(
                        title: 'Mörka / Bruna Pigmentfläckar',
                        subtitle: 'Hyperpigmentering',
                        image_url: '/bilder/symptom/102x102/melasma.webp',
                        image_alt: 'Bild av mörka bruna pigmentfläckar',
                        image_title: 'Mörka bruna pigmentförändringar',
                        //url: 'problem/pigmentflackar/typer/morka-bruna',
                        //url_title: 'Utforska mörka bruna pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Röda / Lila Pigmentfläckar',
                        subtitle: 'Postinflammatorisk Hyperpigmentering (PIH)',
                        image_url: '/bilder/symptom/102x102/postinflammatorisk-hyperpigmentering.webp',
                        image_alt: 'Bild av röda lila pigmentfläckar',
                        image_title: 'Röda lila pigmentförändringar',
                        //url: 'problem/pigmentflackar/typer/roda-lila',
                        //url_title: 'Utforska röda lila pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Ljusbruna Pigmentfläckar',
                        subtitle: 'Café au lait fläckar',
                        image_url: '/bilder/symptom/102x102/melasma.webp',
                        image_alt: 'Bild av ljusbruna pigmentfläckar',
                        image_title: 'Ljusbruna pigmentförändringar',
                        //url: 'problem/pigmentflackar/typer/ljusbruna',
                        //url_title: 'Utforska ljusbruna pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Vita Pigmentfläckar',
                        subtitle: 'Hypopigmentering',
                        image_url: '/bilder/symptom/102x102/postinflammatorisk-hypopigmentering.webp',
                        image_alt: 'Bild av vita pigmentfläckar',
                        image_title: 'Vita pigmentförändringar',
                        //url: 'problem/pigmentflackar/typer/vita',
                        //url_title: 'Utforska vita pigmentfläckar'
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Pigmentfläckar baserat på område',
            content: '<p class="p200">Pigmentfläckar kan uppstå på olika delar av kroppen, inklusive ansiktet, händerna och resten av kroppen. Platsen kan ibland ge insikt i orsaken; till exempel, fläckar på händer och ansikte är ofta kopplade till solskador eftersom dessa områden är mest utsatta för solen. Pigmentfläckar på kroppen kan vara mer relaterade till åldrande eller hormonella förändringar. Bedömning av pigmentfläckar baserat på område hjälper till att förstå underliggande faktorer och ger riktning för skräddarsydd behandling.</p>',
            types: array(
                  new BasedType(
                        title: 'Pigmentfläckar i ansiktet',
                        subtitle: 'Solfläckar & åldersfläckar',
                        image_url: '/bilder/symptom/102x102/melasma.webp',
                        image_alt: 'Bild av pigmentfläckar i ansiktet',
                        image_title: 'Pigmentförändringar i ansiktet',
                        //url: 'problem/pigmentflackar/omraden/ansikte',
                        //url_title: 'Läs mer om pigmentfläckar i ansiktet'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på överläppen',
                        subtitle: 'Melasma & Chloasma',
                        image_url: '/bilder/symptom/102x102/melasma.webp',
                        image_alt: 'Bild av pigmentfläckar på överläppen',
                        image_title: 'Pigmentförändringar på överläppen',
                        //url: 'problem/pigmentflackar/omraden/overlappen',
                        //url_title: 'Läs mer om pigmentfläckar på överläppen'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på Kroppen',
                        subtitle: 'Hyperpigmentering',
                        image_url: '/bilder/symptom/102x102/melasma.webp',
                        image_alt: 'Bild av pigmentfläckar på kroppen',
                        image_title: 'Pigmentförändringar på kroppen',
                        //url: 'problem/pigmentflackar/omraden/kroppen',
                        //url_title: 'Läs mer om pigmentfläckar på kroppen'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på Händerna',
                        subtitle: 'Solfläckar & åldersfläckar',
                        image_url: '/bilder/symptom/102x102/melasma.webp',
                        image_alt: 'Bild av pigmentfläckar på händerna',
                        image_title: 'Pigmentförändringar på händerna',
                        //url: 'problem/pigmentflackar/omraden/hander',
                        //url_title: 'Läs mer om pigmentfläckar på händerna'
                  ),

            )
      )

);

$headline01 = "01. Identifiera dina Pigmentfläckar";

$service = new Service(
      title: 'Konsultation för Pigmentfläckar och Hudfläckar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en specialist inom pigmenteringar och hudfläckar genomförs en detaljerad analys av dina specifika pigmentfläckar. Vi fotograferar de berörda områdena och går igenom dina mål och förväntningar.',
      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av pigmentfläckar och hudfläckar',
      image_title: 'Konsultation för behandling av pigmentfläckar och hudfläckar',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_PigmentationSpots',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för pigmentfläckar och hudfläckar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer om vår konsultation för pigmentfläckar och hudfläckar',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för pigmentfläckar och hudfläckar'
);

$headline02 = "02. Behandlingar mot pigmentfläckar";

$services = array(
      new Service(
            title: 'IPL-behandling för Pigmentfläckar',
            duration: '60 min',
            price: '2595 kr',
            content: 'IPL (Intense Pulsed Light) utnyttjar fokuserade ljusstrålar för att behandla och reducera pigmentfläckar och pigmenteringar. Behandlingen främjar hudens kollagenproduktion och tar bort skadade hudceller, vilket resulterar i en jämnare hud och mindre synliga fläckar.',
            image_small: 'images/services/200x200/ipl.webp',
            image_large: 'images/services/200x200/ipl.webp',
            image_alt: 'Bild av en IPL-behandling för pigmentfläckar',
            image_title: 'IPL-behandling för Pigmentfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_IPL',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling av pigmentfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=ipl&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en IPL-behandling för pigmentfläckar',
            url: 'ipl-pigmentflackar.php',
            url_label: 'Läs mer om IPL-behandling för pigmentfläckar',
            url_title: 'Klicka här för att läsa mer om IPL-behandling för pigmentfläckar'
      ),
      new Service(
            title: 'Kemisk Peeling för Pigmentfläckar',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling är en beprövad metod som förnyar och förbättrar hudens yta. Behandlingen används för att exfoliera och ta bort det yttersta hudlagret, vilket hjälper till att reducera synliga pigmentfläckar och förbättra hudens allmänna utseende.',
            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling för pigmentfläckar',
            image_title: 'Kemisk Peeling för Pigmentfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling av pigmentfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för pigmentfläckar',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling mot pigmentfläckar',
            url_title: 'Läs mer om kemisk peeling mot pigmentfläckar'
      ),
      new Service(
            title: 'Laserbehandling mot pigmentfläckar',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserbehandling mot pigmentfläckar och ojämn pigmentering använder precisa ljusstrålar för att bryta ned överdriven pigmentering i huden. Denna behandling hjälper till att minska synligheten av pigmentfläckar och förbättra hudens jämnhet.',
            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av en laserbehandling mot pigmentfläckar',
            image_title: 'Laserbehandling för pigmentfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot pigmentfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot pigmentfläckar',
            url: '/behandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser mot pigmentfläckar',
            url_title: 'Läs mer om laser mot pigmentfläckar'
      ),

      new Service(
            title: 'Microneedling för Pigmentfläckar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en avancerad teknik som används för att behandla och förbättra hudens utseende, särskilt när det gäller pigmentfläckar och ojämn hudton.',
            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling för pigmentfläckar',
            image_title: 'Microneedling för Pigmentfläckar',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling av pigmentfläckar',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling för pigmentfläckar',
            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling mot pigmentfläckar',
            url_title: 'Läs mer om microneedling mot pigmentfläckar'
      ),
);


$articles = array(
      new Article(
            title: 'När ska jag söka vård för mina pigmentfläckar?',
            image_small: null,
            image_large: null,
            image_alt: 'Kvinna som funderar över sina pigmentfläckar',
            image_title: 'Övervägande av behandling för pigmentfläckar hos Acnespecialisten',
            content: '<p class="p200">Pigmentfläckar, även kända som hyperpigmentering, kan visa sig på huden av olika skäl, såsom solskador, hormonella förändringar eller naturlig åldrande. Även om de flesta av dessa fläckar är godartade och inte utgör någon fara, kan de fortfarande vara en estetisk olägenhet för många. För dem som känner att deras pigmentfläckar påverkar deras självförtroende eller deras dagliga liv är det dags att överväga behandlingsalternativ.</p>
            <p class="p200 mt-m">Om du har fläckar som du redan vet är godartade men som du finner störande, kan en konsultation hos AcneSpecialistem hjälpa dig att utforska de bästa behandlingsmetoderna för just din hudtyp och dina behov.Det bör noteras att på vår klinik behandlar vi endast estetiska aspekter av pigmentfläckar. Om du har bekymmer om en specifik fläck på din hud rekommenderar vi att du konsulterar en hudläkare. Vi kan inte behandla eller diagnostisera melanom eller andra medicinska hudtillstånd.</p>',
      ),
      new Article(
            title: 'Varför ska jag behandla mina pigmentfläckar hos Acnespecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Acnespecialisten klinik, expert på behandling av pigmentfläckar',
            image_title: 'Expertbehandling av pigmentfläckar hos Acnespecialisten',
            content: '<p class="p200">Att välja rätt klinik för behandling av pigmentfläckar är avgörande för önskat resultat, och Acnespecialisten är verkligen en framstående aktör inom detta fält. Med sin djupgående expertis och långa erfarenhet av att hantera en mängd hudproblem, inklusive pigmentfläckar, har teamet på Acnespecialisten utbildats för att noggrant identifiera och anpassa behandlingar efter olika typer av pigmentförändringar. För oss är ingen hud den andra lik, och därför tar vi fram skräddarsydda behandlingsplaner som speglar just dina specifika behov och önskade resultat.</p>
            <p class="p200 mt-m">Kombinationen av vår omfattande erfarenhet och den senaste teknologin inom hudvård garanterar att du får den mest effektiva och säkra behandlingen som finns tillgänglig. Men vår omsorg sträcker sig bortom själva behandlingen; på Acnespecialisten ser vi till din övergripande hudhälsa, erbjuder råd och vägledning för att du ska kunna upprätthålla och förbättra ditt skick och därmed förhindra framtida pigmentering. Om du eftersträvar genuina resultat och önskar expertvård för dina pigmentfläckar, finns det ingen bättre plats än Acnespecialisten.</p>',
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
$results_url_title = "se flera behandlingsresultat av pigmentfläckar";


$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'En behandling som fungerar!',
            text: "Var osäker först, men kliniken förklarade allt tydligt och resultatet blev bättre än förväntat. Tack för ert professionella bemötande!",
            signature: 'Erik'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Äntligen ett resultat jag kan se!',
            text: "Har testat olika behandlingar utan framgång sen hitta jag AcneSpecialisten. Nu känner jag mig som en ny person. Mycket nöjd med resultatet och personalen!",
            signature: 'Anna'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Proffsigt och effektivt!',
            text: "Endast gjort 2 behandlingar men det har redan gett mig hopp, Jag känner mig trygg med deras kunskap och har redan sett fantastiska förbättringar. En klinik jag verkligen rekommenderar.",
            signature: 'Jonas'
      ),
);


$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Allt du behöver veta om ärr av finnar' => array(
            new Question(
                  title: 'Kan jag helt bli fri från ärr som orsakats av finnar?',
                  text: '<p class="p200">Absolut, ärr som uppstått från finnar kan behandlas. Efter en grundlig analys av din hud sätter vi upp en behandlingsplan som är skräddarsydd för dig. Vi samarbetar tätt för att se till att dina ärr försvinner, även om behandlingstiden kan variera.</p>'
            ),
            new Question(
                  title: 'Kommer ärrbildningen från att jag klämt på finnarna?',
                  text: '<p class="p200">Att klämma på finnar kan bidra, men är inte den enda orsaken till ärrbildning. Ibland beror det på att finnar inte blivit korrekt behandlade. Vi kan identifiera ditt unika fall och arbeta för att förhindra framtida ärr.</p>'
            ),
            new Question(
                  title: 'Är det möjligt att ärr som behandlats kommer tillbaka?',
                  text: '<p class="p200">En gång behandlade ärr kommer inte att återuppstå. Men utan korrekt behandling av finnar, kan nya ärr uppstå. Vårt fokus ligger på både att behandla ärr och förhindra nya finnar.</p>'
            ),
            new Question(
                  title: 'Hur många sessioner behövs för att radera mina ärr från finnar?',
                  text: '<p class="p200">Det finns ingen standardmängd sessioner, då detta beror på din hud och dina ärr. Vi gör en individuell plan och din hudterapeut kommer att guida dig genom processen och ge dig en uppskattning av hur många behandlingar som behövs.</p>'
            ),
            new Question(
                  title: 'Vilka tekniker används för att behandla olika ärr från finnar?',
                  text: '<p class="p200">Beroende på din hud och ärrtyp erbjuder vi olika metoder, inklusive laser, peeling och microneedling. Vi kommer att rekommendera den bästa metoden för just dig under en kostnadsfri konsultation.</p>'
            ),
            new Question(
                  title: 'Är det smärtsamt att behandla ärr från finnar? Hur ser eftervård ut?',
                  text: '<p class="p200">Vi gör vårt bästa för att minimera obehag. Eftervården är anpassad till varje individ och du får fullständiga instruktioner för hudvård efter varje behandling.</p>'
            ),
            new Question(
                  title: 'Vilken tid behöver jag mellan behandlingar? När kommer jag att se förbättringar?',
                  text: '<p class="p200">Behandlingsintervaller och tiden till synliga resultat varierar beroende på din situation. Din hudterapeut kommer att fastställa en plan inklusive en tidslinje som är anpassad för just dig.</p>'
            )
      ),

);


$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till ärr";

$skin_guide_articles = array(
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
$skinguide_url_title = "Läs fler guider om Pigmentfläckar";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i pigmentfläcksbehandling',
            image_title: 'Cazzandra Lindberg - Expert på pigmentfläcksbehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på pigmentfläckar',
            image_title: 'Veronika Benedik - Specialist inom pigmentfläckarsård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom aknehantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på pigmentfläckar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot pigmentfläcksbehandling',
            image_title: 'Vilma Libom - Expert inom pigmentfläcksbehandling'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialiserade Hudterapeuter med inriktning mot ärr bildade av finnar";


$related_problems = array(
      new RelatedProblem(
            name: 'Melasma',
            aka: 'Pigmenteringar',
            image: 'images/problems/102x102/melasma.webp',
            image_alt: 'Melasma i ansiktet',
            image_title: 'Melasma - en vanlig hudåkomma',
            url: '/melasma.php',
            url_title: 'Melasma'
      ),
      new RelatedProblem(
            name: 'Solskadad hy',
            aka: 'Solfläckar',
            image: 'bilder/problem/solskadad-hy.webp',
            image_alt: 'Solskadad hy i ansiktet',
            image_title: 'Solskadad hy - en vanlig hudåkomma',
            url: '/solskadad-hy.php',
            url_title: 'Solskadad hy'
      ),
);

$brands = array(
      new Brand(
            label: 'Alma Rejuve Dye-VL',
            image: 'bilder/logotyper/rejuve-dye-vl.svg',
            image_alt: 'Alma Rejuve Dye-VL logotyp',
            image_title: 'Alma Rejuve Dye-VL - IPL',
            url: '/varumarken/alma/rejuve-dye-vl',
            url_title: 'Alma Rejuve Dye-VL',
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
            label: 'Powerlite Photonova',
            image: 'bilder/logotyper/powerlite-photonova.svg',
            image_alt: 'Powerlite Photonova logotyp',
            image_title: 'Powerlite Photonova - IPL',
            url: '/varumarken/powerlite-photonova',
            url_title: 'Powerlite Photonova',
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
            url: 'varumarken/skin-tech',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för pigmentfläckar";

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
                                          <a href="<?php echo $booking_url ?>" title="B<?php echo $booking_url_title ?>" class="button b200 white l10n"><?php echo $booking_url_label ?></a>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot akne" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>