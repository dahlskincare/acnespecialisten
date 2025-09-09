<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Pigmentfläckar och bruna fläckar på huden | AcneSpecialisten';
$seo_description = 'Här hittar du allt om pigmentfläckar och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'pigmentfläckar på överläppen, pigmentfläckar överläpp, mörk fläck på läppen, bruna fläckar på kroppen, pigmentfläckar ljusa, melasma överläpp, bruna fläckar på huden, pigmentförändringar läppar, bruna fläckar, ljusbruna fläckar på huden';
$seo_image = 'bilder/hudproblem/424x456/pigmentflackar.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Pigmentfläckar', '/pigmentflackar.php'),
);

$image_small = 'bilder/hudproblem/358x274/pigmentflackar.webp';
$image_large = 'bilder/hudproblem/424x456/pigmentflackar.webp';
$image_title = 'Visar en hud med pigmentfläckar';
$image_alt = 'Bild som illustrerar hur pigmentfläckar kan se ut på huden';

$green_banner_content = new GreenBannerContent(
      title: 'Pigmentfläckar',
      description: 'Pigmentfläckar, inklusive åldersfläckar eller hyperpigmentering, beror på ökad produktion av melanin. På denna sida dyker vi djupare in i de bakomliggande faktorerna och presenterar en översikt över behandlingsmetoder för att skapa en mer enhetlig hudton.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
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
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, kända som mörka hudfläckar, är områden på huden som har blivit mörkare än den omgivande huden. Detta beror på en överproduktion av melanin, hudens naturliga pigment. Fläckarna kan variera i färg, storlek och form och kan finnas var som helst på kroppen. De är oftast ofarliga men kan påverka huden estetiskt och känslomässigt, speciellt om de är synliga på utsatta områden som ansikte och händer.</p>',
            extended_content: '<p class="p200 mt-xl">Pigmentfläckar varierar i utseende, från lätta färgförändringar till djupare och mer distinkta mörkningar. De omfattar olika former, såsom lentigo (solfläckar), nevi (födelsemärken), och hyperpigmentering, vilken inkluderar tillstånd som åldersfläckar och melasma. Behandlingsstrategier anpassas ofta utifrån fläckarnas specifika karaktär och orsak.</p>
            <p class="p200 mt-xl">Hos oss, med över 30 års erfarenhet av effektiv <a class="b200 underline color-deep-sea-400" href="/ipl-pigmentflackar.php" title="Mer information om borttagning av pigmentfläckar">borttagning av pigmentfläckar</a>, erbjuder vi de mest effektiva metoderna. Behandlingen måste skräddarsys efter din hudtyp och dina specifika hudfläckar. Våra specialister står redo att erbjuda dig en kostnadsfri hudkonsultation för att analysera din situation och utforma en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som stöttar dig genom hela behandlingsprocessen, från start till mål.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar eller pigmentförändringar uppstår när melanin produceras ojämnt i huden, vilket skapar mörkare fläckar. Detta kan orsakas av solskador, åldrande, hormonella obalanser eller vissa mediciner och hälsoförhållanden. Vissa typer av pigmentfläckar kan bli permanenta om de inte behandlas korrekt.</p>',
            extended_content: '<p class="p200 mt-xl">Förståelse för typen av pigmentfläck och dess orsak är nyckeln till effektiv behandling. Felaktig behandling kan förvärra tillståndet, medan tidig diagnos och rätt behandling kan förhindra att fläckarna blir permanenta. Kunskap om hudvård och förebyggande åtgärder är också avgörande.</p>
            <p class="p200 mt-xl">Med över 30 års erfarenhet i branschen, specialiserar vi oss på att förstå och behandla pigmentfläckar. Vi erbjuder en kostnadsfri konsultation för att analysera din hud och utforma en individuell behandlingsplan. Genom att arbeta tillsammans med dig, strävar vi efter att förbättra och bevara din huds hälsa och utseende. Boka en tid idag och ta steget mot en klarare och friskare hud.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'sol' => 'Sol', 'graviditet' => 'Graviditet')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, även kända som pigmentförändringar, är ett fenomen som inte begränsas till en viss ålder, kön eller hudton. Individer med mörkare hud och de som har en familjehistoria av pigmentfläckar kan dock vara mer benägna att utveckla dessa märken. Hormonella förändringar, som de som kan inträffa under graviditet, kan också bidra till deras uppkomst.</p>',
            extended_content: '<p class="p200 mt-xl">Solskadad hy är en av de vanligaste orsakerna till att pigmentfläckar uppkommer. Långvarig exponering för solens strålar kan leda till en ökad produktion av melanin, vilket i sin tur kan resultera i ojämna mörka fläckar på huden. Åldrande kan också leda till ojämn melaninproduktion, där hudens förmåga att jämnt fördela melanin förändras med tiden. Detta resulterar i olika typer och nyanser av pigmentfläckar.</p>
            <p class="p200 mt-xl">Även om pigmentfläckar i ansiktet och på kroppen oftast är ofarliga, kan de vara störande ur ett estetiskt perspektiv. Dessa fläckar kan variera i storlek, form och färg, och kan vara både mörkt bruna, ljust bruna och helt vita. Eftersom de ofta uppenbarar sig i ansiktet, på kinderna och pannan, kan de påverka självkänslan hos många. Att söka professionell hjälp för att behandla och minimera deras utseende kan vara ett effektivt sätt att återställa huden till ett mer enhetligt och klart utseende.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna', '65+' => 'Äldre',)
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, eller hudfläckar, uppstår ofta i ansiktet, där de vanligtvis påverkar områden som mörk fläck på överläpp, kinder och panna. Exponering för solen utan ordentligt skydd kan snabbt leda till dessa missfärgningar, särskilt i områden som är mest utsatta för solljuset.</p>',
            extended_content: '<p class="p200 mt-xl">Förutom ansiktet kan pigmentfläckar även dyka upp på andra delar av med bruna fläckar på kroppen, inklusive halsen, dekolletaget och händerna. Platser som ofta exponeras för solen är mer benägna att drabbas. Den ojämna produktionen av melanin som resulterar i fläckarna kan uppstå var som helst på huden.</p>
            <p class="p200 mt-xl">Om du vill ta bort dina pigmentfläckar och vill förstå mer om din specifika situation är det viktigt med professionell hjälp. Hos oss får du möjlighet att boka en kostnadsfri konsultation med en dedikerad hudterapeut som kan identifiera typen av pigmentfläckar du har och lägga upp en individuell behandlingsplan. Denna personliga analys hjälper oss att skräddarsy den mest effektiva metoden för att behandla dina pigmentfläckar och hjälpa dig att återfå en jämn och klar hudton.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kropp' => 'Kropp', 'hander' => 'Händer')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten börjar din behandling med en gratis konsultation. En erfaren hudterapeut undersöker dina hudproblem, identifierar dina specifika pigmentfläckar och skapar en skräddarsydd behandlingsplan anpassad till dina unika behov.',
            url_label: 'Boka en gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
            url_title: 'Boka din kostnadsfria konsultation om pigmentfläckar idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med din personliga behandlingsplan i hand använder AcneSpecialisten specialiserade metoder för att effektivt behandla dina pigmentfläckar. Vår expertis säkerställer att du snabbt ser resultat och känner dig nöjd med din hud.',
            url_label: 'Utforska våra behandlingar',
            url: 'behandla-pigmentflackar.php',
            url_title: 'Upptäck våra unika och effektiva behandlingar för pigmentfläckar'
      ),
);

$treatment_link = '<a href="behandla-pigmentflackar.php" title="Utforska effektiva behandlingar mot pigmentfläckar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

$types_title = 'Olika typer av pigmentfläckar';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Baserat på orsak',
            content: '<p class="p200">Pigmentfläckar kan orsakas av en mängd yttre faktorer som solens UV-strålning, hormonella förändringar, åldrande, miljöfaktorer och yttre skador på huden. Långvarig exponering för solen utan skydd, till exempel, kan öka melaninproduktionen och leda till fläckar, medan hormonella förändringar som graviditet kan ge temporär pigmentering. Förståelsen för dessa faktorer är avgörande för effektiv förebyggande och behandling av pigmentfläckar.</p>',
            types: array(
                  new BasedType(
                        title: 'Hormonella pigmentförändringar',
                        subtitle: 'Melasma',
                        image_url: '/bilder/hudtyper/232x232/hormonella-pigmentforandringar.webp',
                        image_alt: 'Bild av hormonella pigmentförändringar',
                        image_title: 'Hormonella pigmentförändringar',
                        url: '/melasma.php',
                        url_title: 'Utforska information om hormonella pigmentförändringar'
                  ),
                  new BasedType(
                        title: 'Solfläckar',
                        subtitle: 'Solar Lentigines',
                        image_url: '/bilder/hudtyper/232x232/solflackar.webp',
                        image_alt: 'Bild av solfläckar',
                        image_title: 'Solfläckar',
                        url: '/solskadad-hy.php',
                        url_title: 'Utforska information om solfläckar'
                  ),
                  new BasedType(
                        title: 'Åldersfläckar',
                        subtitle: 'Lentigo Senilis',
                        image_url: '/bilder/hudtyper/232x232/aldersflackar.webp',
                        image_alt: 'Bild av åldersfläckar',
                        image_title: 'Åldersfläckar',
                        url: '/aldersflackar.php',
                        url_title: 'Utforska information om åldersfläckar'
                  ),
                  new BasedType(
                        title: 'Fräknar',
                        subtitle: 'Ephelides',
                        image_url: '/bilder/hudtyper/232x232/fraknar.webp',
                        image_alt: 'Bild av fräknar',
                        image_title: 'Fräknar',
                        //url: 'hudproblem/pigmentflackar/typer/freknar',
                        //url_title: 'Utforska information om fräknar'
                  ),
            )
      ),
      new BasedTypeCategory(
            title: 'Baserat på Färg',
            content: '<p class="p200">Färgen på en pigmentfläck kan avslöja mycket om dess orsak och typ. Bruna fläckar är ofta kopplade till åldersrelaterade förändringar och solskador, medan röda eller rosa kan indikera inflammation. Svarta eller mörkbruna fläckar kan vara mer allvarliga och kräver professionell bedömning. Blå eller grå fläckar är oftast medfödda och specifika för vissa hudtyper. Varje färg ger ledtrådar som kan hjälpa i diagnostisering och behandling.</p>',
            types: array(
                  new BasedType(
                        title: 'Mörka / Bruna Pigmentfläckar',
                        subtitle: 'Hyperpigmentering',
                        image_url: '/bilder/hudtyper/232x232/bruna-pigmentflackar.webp',
                        image_alt: 'Bild av mörka bruna pigmentfläckar',
                        image_title: 'Mörka bruna pigmentförändringar',
                        //url: 'hudproblem/pigmentflackar/typer/morka-bruna',
                        //url_title: 'Utforska mörka bruna pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Röda / Lila Pigmentfläckar',
                        subtitle: 'Postinflammatorisk Hyperpigmentering (PIH)',
                        image_url: '/bilder/hudtyper/232x232/roda-pigmentflackar.webp',
                        image_alt: 'Bild av röda lila pigmentfläckar',
                        image_title: 'Röda lila pigmentförändringar',
                        //url: 'hudproblem/pigmentflackar/typer/roda-lila',
                        //url_title: 'Utforska röda lila pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Ljusbruna Pigmentfläckar',
                        subtitle: 'Café au lait fläckar',
                        image_url: '/bilder/hudtyper/232x232/ljusbruna-pigmentflackar.webp',
                        image_alt: 'Bild av ljusbruna pigmentfläckar',
                        image_title: 'Ljusbruna pigmentförändringar',
                        //url: 'hudproblem/pigmentflackar/typer/ljusbruna',
                        //url_title: 'Utforska ljusbruna pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Vita Pigmentfläckar',
                        subtitle: 'Hypopigmentering',
                        image_url: '/bilder/hudtyper/232x232/vita-pigmentflackar.webp',
                        image_alt: 'Bild av vita pigmentfläckar',
                        image_title: 'Vita pigmentförändringar',
                        //url: 'hudproblem/pigmentflackar/typer/vita',
                        //url_title: 'Utforska vita pigmentfläckar'
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Baserat på område',
            content: '<p class="p200">Pigmentfläckar kan uppstå på olika delar av kroppen, inklusive ansiktet, händerna och resten av kroppen. Platsen kan ibland ge insikt i orsaken; till exempel, fläckar på händer och ansikte är ofta kopplade till solskador eftersom dessa områden är mest utsatta för solen. Pigmentfläckar på kroppen kan vara mer relaterade till åldrande eller hormonella förändringar. Bedömning av pigmentfläckar baserat på område hjälper till att förstå underliggande faktorer och ger riktning för skräddarsydd behandling.</p>',
            types: array(
                  new BasedType(
                        title: 'Pigmentfläckar i ansiktet',
                        subtitle: 'Solfläckar & åldersfläckar',
                        image_url: '/bilder/hudtyper/232x232/pigmentflackar-ansikte.webp',
                        image_alt: 'Bild av pigmentfläckar i ansiktet',
                        image_title: 'Pigmentförändringar i ansiktet',
                        //url: 'hudproblem/pigmentflackar/omraden/ansikte',
                        //url_title: 'Läs mer om pigmentfläckar i ansiktet'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på överläppen',
                        subtitle: 'Melasma & Chloasma',
                        image_url: '/bilder/hudtyper/232x232/pigmentflackar-overlapp.webp',
                        image_alt: 'Bild av pigmentfläckar på överläppen',
                        image_title: 'Pigmentförändringar på överläppen',
                        url: '/melasma.php',
                        url_title: 'Läs mer om pigmentfläckar på överläppen'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på Kroppen',
                        subtitle: 'Hyperpigmentering',
                        image_url: '/bilder/hudtyper/232x232/pigmentflackar-kropp.webp',
                        image_alt: 'Bild av pigmentfläckar på kroppen',
                        image_title: 'Pigmentförändringar på kroppen',
                        //url: 'hudproblem/pigmentflackar/omraden/kroppen',
                        //url_title: 'Läs mer om pigmentfläckar på kroppen'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på Händerna',
                        subtitle: 'Solfläckar & åldersfläckar',
                        image_url: '/bilder/hudtyper/232x232/pigmentflackar-hander.webp',
                        image_alt: 'Bild av pigmentfläckar på händerna',
                        image_title: 'Pigmentförändringar på händerna',
                        //url: 'hudproblem/pigmentflackar/omraden/hander',
                        //url_title: 'Läs mer om pigmentfläckar på händerna'
                  ),

            )
      )

);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en specialist inom pigmenteringar och hudfläckar genomförs en detaljerad analys av dina specifika pigmentfläckar. Vi fotograferar de berörda områdena och går igenom dina mål och förväntningar.',
      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av pigmentfläckar och hudfläckar',
      image_title: 'Konsultation för behandling av pigmentfläckar och hudfläckar',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för pigmentfläckar och hudfläckar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'gratis-hudkonsultation.php',
      url_label: 'Läs mer konsultation',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för pigmentfläckar och hudfläckar'
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'IPL-behandling mot pigmentfläckar',
            duration: '60 min',
            price: '2595 kr',
            content: 'IPL behandling använder ljuspulser för att bryta ner melanin i huden, vilket gör att de bleknar eller försvinner.',
            image_small: 'bilder/hudbehandlingar/200x200/ipl.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ipl.webp',
            image_alt: 'Bild av en IPL-behandling för pigmentfläckar',
            image_title: 'IPL-behandling för Pigmentfläckar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_IPL',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling av pigmentfläckar',
            booking_url: 'https://boka.acnespecialisten.se?flow=ipl&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en IPL-behandling för pigmentfläckar',
            url: 'ipl-pigmentflackar.php',
            url_label: 'Läs mer om IPL behandling',
            url_title: 'Klicka här för att läsa mer om IPL-behandling för pigmentfläckar'
      ),
      new Service(
            title: 'Kemisk peeling mot pigmentfläckar',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling är en beprövad metod som förnyar och förbättrar hudens yta. Behandlingen används för att exfoliera och ta bort det yttersta hudlagret, vilket hjälper till att reducera synliga pigmentfläckar och förbättra hudens allmänna utseende.',
            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling för pigmentfläckar',
            image_title: 'Kemisk Peeling för Pigmentfläckar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling av pigmentfläckar',
            booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för pigmentfläckar',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot pigmentfläckar'
      ),
      new Service(
            title: 'Laserbehandling mot pigmentfläckar',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserbehandling mot ojämn pigmentering använder precisa ljusstrålar för att bryta ned överdriven pigmentering i huden. Denna behandling hjälper till att minska synligheten av pigmentfläckar och förbättra hudens jämnhet.',
            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Bild av en laserbehandling mot pigmentfläckar',
            image_title: 'Laserbehandling för pigmentfläckar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot pigmentfläckar',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot pigmentfläckar',
            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot pigmentfläckar'
      ),

      new Service(
            title: 'Microneedling mot pigmentfläckar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en avancerad teknik som används för att behandla och förbättra hudens utseende, särskilt när det gäller pigmentfläckar och ojämn hudton.',
            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling för pigmentfläckar',
            image_title: 'Microneedling för Pigmentfläckar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling av pigmentfläckar',
            booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=Problem_PigmentationSpots',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling för pigmentfläckar',
            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot pigmentfläckar'
      ),
);

$articles = array(
      new Article(
            title: 'När ska jag söka behandling?',
            image_small: null,
            image_large: null,
            image_alt: 'Kvinna som funderar över sina pigmentfläckar',
            image_title: 'Övervägande av behandling för pigmentfläckar hos Acnespecialisten',
            content: '<p class="p200">Pigmentfläckar, även kända som hyperpigmentering, kan visa sig på huden av olika skäl, såsom solskador, hormonella förändringar eller naturlig åldrande. Även om de flesta av dessa fläckar är godartade och inte utgör någon fara, kan de fortfarande vara en estetisk olägenhet för många. För dem som känner att deras pigmentfläckar påverkar deras självförtroende eller deras dagliga liv är det dags att överväga behandlingsalternativ.</p>
            <p class="p200 mt-m">Om du har fläckar som du redan vet är godartade men som du finner störande, kan en konsultation hos AcneSpecialistem hjälpa dig att utforska de bästa behandlingsmetoderna för just din hudtyp och dina behov.Det bör noteras att på vår klinik behandlar vi endast estetiska aspekter av pigmentfläckar.</p>',
      ),
      new Article(
            title: 'Varför ska jag behandla mig hos Acnespecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Acnespecialisten klinik, expert på behandling av pigmentfläckar',
            image_title: 'Expertbehandling av pigmentfläckar hos Acnespecialisten',
            content: '<p class="p200">Att välja rätt klinik för behandling av pigmentfläckar är avgörande för önskat resultat, och Acnespecialisten är verkligen en framstående aktör inom detta fält. Med sin djupgående expertis och långa erfarenhet av att hantera en mängd hudproblem, inklusive pigmentfläckar, har teamet på Acnespecialisten utbildats för att noggrant identifiera och anpassa behandlingar efter olika typer av pigmentförändringar. För oss är ingen hud den andra lik, och därför tar vi fram skräddarsydda behandlingsplaner som speglar just dina specifika behov och önskade resultat.</p>
            <p class="p200 mt-m">Kombinationen av vår omfattande erfarenhet och den senaste teknologin inom hudvård garanterar att du får den mest effektiva och säkra behandlingen som finns tillgänglig. Men vår omsorg sträcker sig bortom själva behandlingen; på Acnespecialisten ser vi till din övergripande hudhälsa, erbjuder råd och vägledning för att du ska kunna upprätthålla och förbättra hudens skick och därmed förhindra framtida pigmentering. Om du eftersträvar genuina resultat och önskar expertvård för dina pigmentfläckar, finns det ingen bättre plats än Acnespecialisten.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
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
$results_url_title = "se flera behandlingsresultat av pigmentfläckar";



$faq_categories = array(
      'Allt du behöver veta om ärr av finnar' => array(
            new Question(
                  title: 'Vad är pigmentfläckar och hur skiljer de sig från vanliga hudfläckar?',
                  text: '<p class="p200">Pigmentfläckar, även kända som hyperpigmentering, uppstår när vissa områden av huden blir mörkare än den omgivande huden. De kan uppkomma som ett resultat av en överproduktion av melanin, pigmentet som ger huden dess färg. Dessa fläckar skiljer sig från vanliga hudfläckar genom deras färgintensitet och tendens att uppstå som en reaktion på faktorer som solskador, hormonella förändringar eller åldrande.</p>'
            ),
            new Question(
                  title: 'Vilka är de vanligaste orsakerna till hyperpigmentering?',
                  text: '<p class="p200">De vanligaste orsakerna inkluderar exponering för solen, vilket kan leda till solfläckar eller åldersfläckar; hormonella förändringar, som kan förekomma under graviditet eller som en bieffekt av vissa mediciner; och inflammation eller hudskador, som kan resultera i mörkare fläckar efter läkning. Genetiska faktorer kan också spela en roll i benägenheten att utveckla pigmentfläckar.</p>'
            ),
            new Question(
                  title: 'Finns det olika typer av pigmentfläckar?',
                  text: '<p class="p200">Ja, det finns flera typer av pigmentfläckar, inklusive melasma, som ofta är kopplat till hormonella förändringar och förekommer vanligtvis på ansiktet; solfläckar, också kända som leverfläckar, som är resultatet av solskador; och postinflammatorisk hyperpigmentering, som uppstår på områden där huden har varit inflammerad eller skadad.</p>'
            ),
            new Question(
                  title: 'Kan alla hudtyper få pigmentfläckar?',
                  text: '<p class="p200"> Ja, pigmentfläckar kan påverka människor med alla hudtyper. Dock kan risknivån och typerna av pigmentfläckar variera beroende på hudens pigmentering och genetiska faktorer. Personer med ljusare hud kan märka en större kontrast med hyperpigmentering, medan de med mörkare hudtoner kan vara mer benägna att utveckla vissa typer av fläckar som postinflammatorisk hyperpigmentering.</p>'
            ),
            new Question(
                  title: 'Hur kan jag identifiera en pigmentfläck jämfört med andra hudförändringar?',
                  text: '<p class="p200">   Pigmentfläckar är vanligtvis platta, mörkare områden som varierar i storlek och form och är tydligare än den omgivande huden. De kan förekomma var som helst på kroppen men är vanligast i ansiktet, på händerna och andra områden som utsätts för solen. Om du är osäker på dina pigmentfläckar, är det alltid bäst att boka en konsultation hos en av våra hudterapeuter för en korrekt diagnos och råd.</p>'

            )
      ),

);


$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till pigmentfläckar";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i pigmentfläcksbehandling',
            image_title: 'Cazzandra Lindberg - Expert på hudfläckar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på pigmentfläckar',
            image_title: 'Veronika Benedik - Specialist inom hyperpigmentering'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2021',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund, hudterapeut med kunskap inom aknehantering',
            image_title: 'Julia Eklund - Hudterapeut specialiserad på pigmentfläckar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot pigmentfläcksbehandling',
            image_title: 'Vilma Libom - Expert inom pigmenteringar'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialiserade Hudterapeuter med inriktning mot ärr bildade av finnar";


$related_problems = array(
      new RelatedProblem(
            name: 'Melasma',
            aka: 'pigmenteringar',
            image: '/bilder/hudproblem/102x102/melasma.webp',
            image_title: 'Melasma - en vanlig hudåkomma',
            image_alt: 'Melasma i ansiktet',
            url: '/melasma.php',
            url_title: 'Melasma'
      ),
      new RelatedProblem(
            name: 'Solskadad hy',
            aka: 'solfläckar',
            image: '/bilder/hudproblem/102x102/solskadad-hy.webp',
            image_title: 'Solskadad hy - en vanlig hudåkomma',
            image_alt: 'Solskadad hy i ansiktet',
            url: '/solskadad-hy.php',
            url_title: 'Solskadad hy'
      ),
      new RelatedProblem(
            name: 'Hudförändringar',
            aka: 'leverfläckar & födelsemärken',
            image: '/bilder/hudproblem/102x102/hudforandringar.webp',
            image_title: 'födelsemärke i ansiktet',
            image_alt: 'svart utåtstående leverläck i ansiktet',
            url: '/hudproblem/hudforandringar/',
            url_title: 'Solskadad hy'
      ),
      new RelatedProblem(
            name: 'Åldersfläckar',
            aka: 'åldersvårtor',
            image: '/bilder/hudproblem/102x102/aldersflackar.webp',
            image_title: 'Leverfläck i huvudet',
            image_alt: 'svart upphöjdleverfläck på huvudet',
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
            url: '/varumarken/rejuve-dye-vl/',
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
            url: '/varumarken/powerlite-photonova/',
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
            url: 'varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för pigmentfläckar";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/pigmentflackar.php" />

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