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
      description: 'Pigmentfläckar, som åldersfläckar och hyperpigmentering, uppstår när huden bildar för mycket melanin på ett ställe. Nedan går vi igenom varför de uppstår, de olika typerna och vilka behandlingar som jämnar ut hudtonen.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PigmentationSpots', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PigmentationSpots', 'Boka denna behandling'),
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
            content: '<p class="p200">Pigmentfläckar är områden på huden som blivit mörkare än huden runt omkring. De uppstår när hudens pigmentceller bildar för mycket melanin, det naturliga färgämnet, på ett avgränsat ställe. Fläckarna varierar i färg, storlek och form och kan sitta var som helst på kroppen. De är oftast ofarliga, men kan påverka både utseendet och självkänslan, särskilt när de syns på utsatta ställen som ansiktet och händerna.</p>',
            extended_content: '<p class="p200 mt-xl">Pigmentfläckar varierar i utseende, från lätta färgförändringar till tydligt mörka fläckar. Hit hör lentigo (solfläckar), nevi (födelsemärken) och hyperpigmentering, som i sin tur rymmer åldersfläckar och melasma.</p>
            <p class="p200 mt-xl">Vi tar bort pigmentfläckar med bland annat <a class="b200 underline color-deep-sea-400" href="/ipl-pigmentflackar.php" title="Mer information om borttagning av pigmentfläckar">IPL</a>, laser och kemisk peeling. Vilken metod som passar avgörs av fläckens typ, färg och djup, och därför börjar vi alltid med en kostnadsfri konsultation där vi går igenom din hud.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar uppstår när melaninet produceras ojämnt, så att pigmentet samlas i mörkare fläckar i stället för att fördelas jämnt över huden. Den vanligaste utlösaren är solens UV-strålar, men även åldrande, hormonella obalanser (som vid graviditet) och vissa mediciner och hälsotillstånd kan sätta igång samma reaktion. Fläckar som byggts upp under lång tid kan bli svåra att få bort helt om de inte behandlas.</p>',
            extended_content: '<p class="p200 mt-xl">Solen är den vanligaste orsaken bakom pigmentfläckar. UV-strålarna får pigmentcellerna att producera extra melanin som ett försvar, och upprepas det år efter år samlas pigmentet i bestående fläckar. Även enstaka kraftiga solbrännor kan lämna märken som syns långt senare.</p>
            <p class="p200 mt-xl">Fel metod kan i värsta fall göra en fläck mörkare, medan rätt behandling i tid kan hindra att den blir permanent. Djupare pigment, som vid melasma, kräver ofta fler behandlingar än ytliga solfläckar.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner', 'sol' => 'Sol', 'graviditet' => 'Graviditet')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får pigmentfläckar?',
            content: '<p class="p200">Hormonförändringar ökar risken för pigmentfläckar, särskilt under graviditet då melasma är vanligt. Ärftlighet spelar också in: har du nära släktingar med pigmentfläckar är risken högre. Även hudtypen påverkar, eftersom mörkare hud ofta reagerar starkare med pigment. I grunden kan dock vem som helst få pigmentfläckar, oavsett ålder, kön eller hudton.</p>',
            extended_content: '<p class="p200 mt-xl">Graviditet är en av de vanligaste situationerna bakom pigmentfläckar. Hormonförändringarna kan ge melasma, ibland kallat graviditetsmask, som lägger sig ganska symmetriskt över kinder, panna och överläpp. Hos vissa bleknar det efter förlossningen, hos andra blir det kvar. Även yrken och fritidsintressen med mycket sol ökar risken, eftersom huden då exponeras mer.</p>
            <p class="p200 mt-xl">Pigmentfläckar är i sig ofarliga, men eftersom de ofta syns i ansiktet kan de påverka självkänslan. Det går att behandla dem för att jämna ut hudtonen, och en konsultation ger dig en bild av vad som är möjligt för just din hud.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna', '65+' => 'Äldre')
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar sitter oftast i ansiktet, framför allt på överläppen, kinderna och pannan. De områdena är mest utsatta för sol, och exponering utan ordentligt skydd leder snabbt till missfärgningar just där.</p>',
            extended_content: '<p class="p200 mt-xl">Förutom ansiktet är bruna fläckar på kroppen vanliga, särskilt på halsen, dekolletaget och händerna. Gemensamt för dessa områden är att de exponeras mycket för sol, och de är därför mer utsatta. I princip kan fläckarna dock dyka upp var som helst på huden.</p>
            <p class="p200 mt-xl">Var fläcken sitter påverkar också behandlingen. Huden på händer och dekolletage är tunnare och känsligare än i ansiktet, vilket vi tar hänsyn till när vi väljer metod.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kropp' => 'Kropp', 'hander' => 'Händer')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten börjar din behandling med en gratis konsultation. En erfaren hudterapeut undersöker din hud, identifierar vilken typ av pigmentfläckar du har och lägger upp en behandlingsplan anpassad efter dem.',
            url_label: 'Boka en gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Pigmentation',
            url_title: 'Boka din kostnadsfria konsultation om pigmentfläckar idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med din behandlingsplan använder vi metoder som är anpassade efter dina pigmentfläckar, med målet att jämna ut hudtonen steg för steg och hålla nya fläckar borta.',
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
            content: '<p class="p200">Beroende på vad som utlöst dem delas pigmentfläckar in i olika typer, och typen avgör vilken behandling som fungerar bäst. Hormonella pigmentförändringar som melasma hänger ihop med graviditet och hormoner, solfläckar och åldersfläckar byggs upp av årens solexponering, och fräknar är till stor del ärftliga. Nedan går vi igenom de vanligaste typerna.</p>',
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
            title: 'Baserat på färg',
            content: '<p class="p200">Färgen på en pigmentfläck säger en del om vad som ligger bakom. Bruna fläckar hänger oftast ihop med sol och ålder, röda eller rosa med inflammation efter till exempel finnar, och blå eller grå toner är oftast medfödda och specifika för vissa hudtyper. Färgen är en av de saker vi läser av på konsultationen för att välja rätt behandling. En fläck som ändrar färg, form eller storlek bör dock alltid visas för läkare innan estetisk behandling.</p>',
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
            content: '<p class="p200">Var fläckarna sitter hänger ofta ihop med vad som orsakat dem, och därför delar vi också in dem efter område. Fläckar i ansiktet och på händerna kommer oftast av sol, eftersom de ytorna exponeras mest, medan fläckar på kroppen oftare beror på åldrande eller hormoner. Nedan ser du de vanligaste platserna.</p>',
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
            duration: '20-70 min',
            price: 'Från 1995 kr',
            content: 'IPL-behandling använder ljuspulser som bryter ner melaninet i huden, så att fläckarna bleknar eller försvinner.',
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
            duration: '40 min',
            price: '1995 kr',
            content: 'Kemisk peeling exfolierar och löser upp det yttersta hudlagret, där en stor del av det ytliga pigmentet sitter. När lagret ersätts av ny hud kan pigmentfläckarna blekna och hudtonen bli jämnare och klarare.',
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
            duration: '20-90 min',
            price: 'Från 2595 kr',
            content: 'Laser riktar precisa ljusstrålar mot det överflödiga pigmentet och bryter ned det. När pigmentet försvinner bleknar fläckarna och hudtonen blir jämnare.',
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
            price: '2995 kr',
            content: 'Microneedling skapar mikroskopiska kanaler i huden med tunna nålar, vilket sätter igång hudens egen förnyelse. Den nya hud som bildas har jämnare pigmentfördelning, vilket dämpar pigmentfläckar och ojämn hudton.',
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
            content: '<p class="p200">De flesta pigmentfläckar är godartade och helt ofarliga. Ändå kan de vara en estetisk olägenhet, särskilt när de sitter synligt i ansiktet eller på händerna. Känner du att dina fläckar påverkar självförtroendet eller vardagen är en konsultation ett bra första steg för att gå igenom vilka behandlingar som passar.</p>
            <p class="p200 mt-m">Om du har fläckar som du redan vet är godartade men som du finner störande, kan en konsultation hos AcneSpecialisten hjälpa dig att gå igenom vilka behandlingar som passar din hud. Observera att vi på vår klinik bara behandlar de estetiska aspekterna av pigmentfläckar.</p>',
      ),
      new Article(
            title: 'Varför ska jag behandla mig hos Acnespecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Acnespecialisten klinik, expert på behandling av pigmentfläckar',
            image_title: 'Expertbehandling av pigmentfläckar hos Acnespecialisten',
            content: '<p class="p200">Med mer än 30 års erfarenhet av hudvård har AcneSpecialisten behandlat pigmentfläckar i alla former, från enstaka solfläckar till utbredd melasma. Eftersom olika typer kräver olika behandling börjar vi alltid med att fastställa vilken sorts pigmentering du har, och väljer metod utifrån fläckarnas färg, djup och orsak.</p>
            <p class="p200 mt-m">Din hudterapeut följer dig genom hela behandlingen och ger dig råd om hur du skyddar huden mot solen efteråt, så att nya fläckar inte hinner byggas upp igen. Målet är en jämnare hudton som håller över tid, inte bara ett snabbt resultat.</p>',
      ),
);

$results_images = array(
      new LabelImage(
            image_url: '/bilder/resultat/832x476/pigmentflackar/pigmentflackar-resultat-fore-efter-ansikte.webp',
            image_alt: 'Pigmentfläckar i ansiktet före och efter behandling',
            image_title: 'Resultat: Jämnare hudton i ansiktet',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/pigmentflackar/pigmentflackar-resultat-fore-efter-fraknar.webp',
            image_alt: 'Behandlingsresultat som visar förbättrad hudton och minskade pigmentfläckar',
            image_title: 'Resultat: Jämnare hudton med minskad pigmentering',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/pigmentflackar/pigmentflackar-resultat-fore-efter-kind-tinning.webp',
            image_alt: 'Resultat efter behandling av ojämn pigmentering i ansiktet',
            image_title: 'Resultat: Reducerade pigmentförändringar',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/pigmentflackar/pigmentflackar-resultat-fore-efter-kind.webp',
            image_alt: 'Bild som visar minskade mörka fläckar på kinden efter behandling',
            image_title: 'Resultat: Ljusare och jämnare hudton',
            content: '',
      ),
);

$results_url = '/resultat.php';
$results_url_label = "Se alla resultat";
$results_url_title = "se flera behandlingsresultat av pigmentfläckar";

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



$faq_categories = array(
      'Allt du behöver veta om pigmentfläckar' => array(
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
                  text: '<p class="p200">Ja, pigmentfläckar kan påverka människor med alla hudtyper. Dock kan risknivån och typerna av pigmentfläckar variera beroende på hudens pigmentering och genetiska faktorer. Personer med ljusare hud kan märka en större kontrast med hyperpigmentering, medan de med mörkare hudtoner kan vara mer benägna att utveckla vissa typer av fläckar som postinflammatorisk hyperpigmentering.</p>'
            ),
            new Question(
                  title: 'Hur kan jag identifiera en pigmentfläck jämfört med andra hudförändringar?',
                  text: '<p class="p200">Pigmentfläckar är vanligtvis platta, mörkare områden som varierar i storlek och form och är tydligare än den omgivande huden. De kan förekomma var som helst på kroppen men är vanligast i ansiktet, på händerna och andra områden som utsätts för solen. Om du är osäker på dina pigmentfläckar är det alltid bäst att boka en konsultation hos en av våra hudterapeuter för en bedömning och råd om vilken typ av pigmentering det rör sig om.</p>'
            ),
            new Question(
                  title: 'Hur behandlar man fräknar?',
                  text: '<p class="p200">Fräknar är pigmentfläckar som orsakas av solexponering och genetiska faktorer. De behandlas med metoder som riktar sig mot melaninproduktion i huden, såsom IPL, laser, kemisk peeling eller microneedling. Dessa behandlingar hjälper till att minska synligheten av fräknar och skapa en jämnare hudton.</p>'
            )
      ),

);


$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till pigmentfläckar";

$specialists = array(
      new Specialist(
            name: 'Cazzandra L',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra L, hudterapeut med specialisering i pigmentfläcksbehandling',
            image_title: 'Cazzandra L - Expert på hudfläckar'
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
$specialist_url_title = "Hudterapeuter specialiserade på pigmentfläckar";


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
            image_alt: 'svart utstående leverfläck i ansiktet',
            url: '/hudproblem/hudforandringar/',
            url_title: 'Hudförändringar'
      ),
      new RelatedProblem(
            name: 'Åldersfläckar',
            aka: 'åldersvårtor',
            image: '/bilder/hudproblem/102x102/aldersflackar.webp',
            image_title: 'Åldersfläckar på huden',
            image_alt: 'ljusbruna åldersfläckar på huden',
            url: '/aldersflackar.php',
            url_title: 'Åldersfläckar'
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
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - microneedlingverktyg för hudföryngring',
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

                        <section id="results">
                              <?php
                              $results_title = 'Pigmentfläckar före och efter bilder';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results_grid/results_grid.php');
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
                              <div class="columns is-variable is-0-mobile is-3-tablet is-multiline">
                                    <?php foreach ($related_problems as $problem) { ?>
                                          <div class="column is-half">
                                                <?php include('hudproblem/widgets/related-problem-card/related-problem-card.php'); ?>
                                          </div>
                                    <?php } ?>
                              </div>
                        </section>
                        <section id="results-narrow" class="large-margin">
                              <?php
                              $results_title = 'Jämför resultaten';
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php');
                              ?>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot pigmentfläckar" href="varumarken/">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>