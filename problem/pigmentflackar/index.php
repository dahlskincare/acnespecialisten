<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Pigmentfläckar - Behandlingsmetoder, Orsaker och Hur Man Förebygger | Acnespecialisten';
$seo_description = 'Lär dig allt om pigmentfläckar, inklusive deras bakomliggande orsaker, effektiva metoder för behandling, och hur du kan förebygga dem. Sök professionell vägledning och skräddarsydda lösningar för hyperpigmentering och hudfläckar från Acnespecialisten.';
$seo_keywords = 'pigmentfläckar, behandling av pigmentfläckar, orsaker till pigmentfläckar, förebygga pigmentfläckar, minska pigmentfläckar, hyperpigmentering, hudfläckar, behandling av hyperpigmentering, pigmenteringar';

$title = 'Pigmentfläckar';

$description = 'Lider du av pigmentfläckar, även kända som pigmentförändringar och hudfläckar? Vi känner till utmaningarna och har lösningen för dig. Lär dig mer om dessa hudfläckar, deras orsaker och hur våra specialiserade terapeuter kan skräddarsy en behandling för just dig. Boka en kostnadsfri konsultation nu och påbörja din väg mot en fläckfri och frisk hud.';

$image_small = 'images/problems/424x324/pigmentflackar.webp'; // Ersätt med lämplig bild för pigmentfläckar
$image_large = 'images/problems/424x456/pigmentflackar.webp'; // Ersätt med lämplig bild för pigmentfläckar
$image_title = 'Visar en hud med pigmentfläckar';
$image_alt = 'Bild som illustrerar hur pigmentfläckar kan se ut på huden';




$akas = [
      new Link(
            label: 'Pigmentförändringar',
            url: 'problem/arr-fran-finnar/postinflammatorisk-hyperpigmentering',
            title: 'Utforska orsakerna, symptomen och de effektiva behandlingarna för postinflammatorisk hyperpigmentering i form av fläckar från finnar'
      ),
      new Link(
            label: 'Hudfläckar',
            url: 'problem/arr-fran-finnar/atrofiska-arr',
            title: 'Lär dig mer om atrofiska ärr i form av gropar som uppstått från finnar och upptäck våra specialiserade behandlingsalternativ'
      ),

];

$consultation_url = "consultation-booking?problem=pigmentation";
$consultation_url_label = "Få gratis konsultation";
$consultation_url_title = "Gratis konsultation för behandling av pigmentfläckar";

$booking_url = "treatment-booking?problem=pigmentation";
$booking_url_label = "Boka behandling";
$booking_url_title = "Boka din tid för behandling av hudförändringar";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis konsultation för pigmenteringar";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka din tid för behandling av pigmentförändringar";

$floating_consultation_url_label = "Få gratis konsultation";
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
            content: '<p class="p200">Pigmentfläckar, kända som mörka hudfläckar, är områden på huden som har blivit mörkare än den omgivande huden. Denna mörkfärgning beror på en överproduktion av melanin, hudens naturliga pigment. Fläckarna kan variera i färg, storlek och form och kan finnas var som helst på kroppen. De är oftast ofarliga men kan påverka huden estetiskt och känslomässigt, speciellt om de är synliga på utsatta områden som ansikte och händer.</p>',
            extended_content: '<p class="p200 mt-xl">Pigmentfläckar kan visa sig på olika sätt. Vissa är bara milda färgförändringar, medan andra kan vara mörkare och mer framträdande. De kan klassificeras i olika typer som leverfläckar, solfläckar och melasma. Varje typ kräver en unik behandlingsmetod.</p>
            <p class="p200 mt-xl">Hos oss, med över 30 års erfarenhet av att behandla pigmentfläckar, erbjuder vi de mest effektiva metoderna. Behandlingen måste skräddarsys efter din hudtyp och dina specifika fläckar. Våra specialister står redo att erbjuda dig en kostnadsfri hudkonsultation för att analysera din situation och utforma en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som stöttar dig genom hela behandlingsprocessen, från start till mål.</p>',
            icons: array()
      ),


      new ProblemTrivia(
            prefix: 'Varför',
            title: 'uppstår pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar eller pigmentförändringa uppstår när melanin produceras ojämnt i huden, vilket skapar mörkare fläckar. Detta kan orsakas av solskador, åldrande, hormonella obalanser eller vissa mediciner och hälsoförhållanden. Vissa typer av pigmentfläckar kan bli permanenta om de inte behandlas korrekt.</p>',
            extended_content: '<p class="p200 mt-xl">Förståelse för typen av pigmentfläck och dess orsak är nyckeln till effektiv behandling. Felaktig behandling kan förvärra tillståndet, medan tidig diagnos och rätt behandling kan förhindra att fläckarna blir permanenta. Kunskap om hudvård och förebyggande åtgärder är också avgörande.</p>
            <p class="p200 mt-xl">Med över 30 års erfarenhet i branschen, specialiserar vi oss på att förstå och behandla pigmentfläckar. Vi erbjuder en kostnadsfri konsultation för att analysera din hud och utforma en individuell behandlingsplan. Genom att arbeta tillsammans med dig, strävar vi efter att förbättra och bevara din huds hälsa och utseende. Boka en tid idag och ta steget mot en klarare och friskare hud.</p>',
            icons: array('who-infants' => 'Solskador', 'who-teenagers' => 'Hormonella obalanser', 'who-adults' => 'Åldrande', 'who-elders' => 'Felaktig behandling')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, även kända som pigmentförändringar, är ett fenomen som inte begränsas till en viss ålder, kön eller hudton. Individer med mörkare hud och de som har en familjehistoria av pigmentfläckar kan dock vara mer benägna att utveckla dessa märken. Hormonella förändringar, som de som kan inträffa under graviditet, kan också bidra till deras uppkomst.</p>',
            extended_content: '<p class="p200 mt-xl">Solskadad hy är en av de vanligaste orsakerna till att pigmentfläckar uppkommer. Långvarig exponering för solens strålar kan leda till en ökad produktion av melanin, vilket i sin tur kan resultera i ojämna mörka fläckar på huden. Åldrande kan också leda till ojämn melaninproduktion, där hudens förmåga att jämnt fördela melanin förändras med tiden. Detta resulterar i olika typer och nyanser av pigmentfläckar.</p>
            <p class="p200 mt-xl">Även om pigmentfläckar i ansiktet och på kroppen är helt ofarliga, kan de vara störande ur ett estetiskt perspektiv. Dessa fläckar kan variera i storlek, form och färg, och kan vara både mörkt bruna, ljust bruna och helt vita. Eftersom de ofta uppenbarar sig i ansiktet, på kinderna och pannan, kan de påverka självkänslan hos många. Att söka professionell hjälp för att behandla och minimera deras utseende kan vara ett effektivt sätt att återställa huden till ett mer enhetligt och klart utseende.</p>',
            icons: array('who-infants' => 'Kvinnor', 'who-teenagers' => 'Män', 'who-adults' => 'Ungdommar', 'who-elders' => 'Vuxna')
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man pigmentfläckar?',
            content: '<p class="p200">Pigmentfläckar, eller hudfläckar, uppstår ofta i ansiktet, där de vanligtvis påverkar områden som kinder och panna. Exponering för solen utan ordentligt skydd kan snabbt leda till dessa missfärgningar, särskilt i områden som är mest utsatta för solljuset.</p>',
            extended_content: '<p class="p200 mt-xl">Bortom ansiktet kan pigmentfläckar även dyka upp på andra delar av kroppen, inklusive halsen, dekolletaget och händerna. Platser som ofta exponeras för solen är mer benägna att drabbas. Den ojämna produktionen av melanin som resulterar i fläckarna kan manifesteras var som helst på huden.</p>
            <p class="p200 mt-xl">Om du vill ta bort dina pigmentfläckar och vill förstå mer om din specifika situation är det viktigt med professionell hjälp. Hos oss får du möjlighet att boka en kostnadsfri konsultation med en dedikerad hudterapeut som kan identifiera typen av pigmentfläckar du har och lägga upp en individuell behandlingsplan. Denna personliga analys hjälper oss att skräddarsy den mest effektiva metoden för att behandla dina pigmentfläckar och hjälpa dig att återfå en jämn och klar hudton.</p>',
            icons: array('who-infants' => 'Ansiktet', 'who-teenagers' => 'Ryggen', 'who-adults' => 'Bröstet', 'who-elders' => 'händerna')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'På AcneSpecialisten börjar din behandling med en gratis konsultation. En erfaren hudterapeut undersöker dina hudproblem, identifierar dina specifika pigmentfläckar och skapar en skräddarsydd behandlingsplan anpassad till dina unika behov.',
            url_label: 'Boka en gratis konsultation',
            url: 'hudkonsultation',
            url_title: 'Boka din kostnadsfria konsultation om pigmentfläckar idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med din personliga behandlingsplan i hand använder AcneSpecialisten specialiserade metoder för att effektivt behandla dina pigmentfläckar. Vår expertis säkerställer att du snabbt ser resultat och känner dig nöjd med din hud.',
            url_label: 'Utforska våra behandlingar för pigmentfläckar',
            url: 'behandlingar/pigmentflackar',
            url_title: 'Upptäck våra unika och effektiva behandlingar för pigmentfläckar'
      ),
);

$treatment_link = '<a href="problem/pigmentflackar/behandla-pigmentflackar" title="Utforska effektiva behandlingar mot pigmentfläckar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot pigmentfläckar</a>';
/*
$types_title = 'Olika typer av Pigmentfläckar';

$type_categories = array(
      new BasedTypeCategory(
            title: 'Pigmentfläckar baserat på orsak',
            content: '<p class="p200">Pigmentfläckar kan orsakas av en mängd yttre faktorer som solens UV-strålning, hormonella förändringar, åldrande, miljöfaktorer och yttre skador på huden. Långvarig exponering för solen utan skydd, till exempel, kan öka melaninproduktionen och leda till fläckar, medan hormonella förändringar som graviditet kan ge temporär pigmentering. Förståelsen för dessa faktorer är avgörande för effektiv förebyggande och behandling av pigmentfläckar.</p>',
            types: array(
                  new BasedType(
                        title: 'Hormonella pigmentförändringar',
                        subtitle: 'Även kallat melasma',
                        image_url: 'images/problems/102x102/melasma.webp',
                        image_alt: 'Bild av hormonella pigmentförändringar',
                        image_title: 'Hormonella pigmentförändringar',
                        url: 'problem/pigmentflackar/typer/melasma',
                        url_title: 'Utforska information om hormonella pigmentförändringar'
                  ),
                  new BasedType(
                        title: 'Solfläckar',
                        subtitle: 'Även kallat Solar Lentigines',
                        image_url: 'images/problems/102x102/solflackar.webp',
                        image_alt: 'Bild av solfläckar',
                        image_title: 'Solfläckar',
                        url: 'problem/pigmentflackar/typer/solflackar',
                        url_title: 'Utforska information om solfläckar'
                  ),
                  new BasedType(
                        title: 'Åldersfläckar',
                        subtitle: 'Även kallat Lentigo Senilis',
                        image_url: 'images/problems/102x102/aldersflackar.webp',
                        image_alt: 'Bild av åldersfläckar',
                        image_title: 'Åldersfläckar',
                        url: 'problem/pigmentflackar/typer/aldersflackar',
                        url_title: 'Utforska information om åldersfläckar'
                  ),
                  new BasedType(
                        title: 'Fräknar',
                        subtitle: 'Även kallat Ephelides',
                        image_url: 'images/problems/102x102/freknar.webp',
                        image_alt: 'Bild av fräknar',
                        image_title: 'Fräknar',
                        url: 'problem/pigmentflackar/typer/freknar',
                        url_title: 'Utforska information om fräknar'
                  ),

            )
      ),
      new BasedTypeCategory(
            title: 'Pigmentfläckar baserat på Färg',
            content: '<p class="p200">Färgen på en pigmentfläck kan avslöja mycket om dess orsak och typ. Bruna fläckar är ofta kopplade till åldersrelaterade förändringar och solskador, medan röda eller rosa kan indikera inflammation. Svarta eller mörkbruna fläckar kan vara mer allvarliga och kräver professionell bedömning. Blå eller grå fläckar är oftast medfödda och specifika för vissa hudtyper. Varje färg ger ledtrådar som kan hjälpa i diagnostisering och behandling.</p>',
            types: array(
                  new BasedType(
                        title: 'Mörka / Bruna Pigmentfläckar',
                        subtitle: 'Även kallat Hyperpigmentering',
                        image_url: 'images/pigmentflackar/102x102/morka-bruna.webp',
                        image_alt: 'Bild av mörka bruna pigmentfläckar',
                        image_title: 'Mörka bruna pigmentförändringar',
                        url: 'problem/pigmentflackar/typer/morka-bruna',
                        url_title: 'Utforska mörka bruna pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Röda / Lila Pigmentfläckar',
                        subtitle: 'Även kallat Postinflammatorisk Hyperpigmentering (PIH)',
                        image_url: 'images/pigmentflackar/102x102/roda-lila.webp',
                        image_alt: 'Bild av röda lila pigmentfläckar',
                        image_title: 'Röda lila pigmentförändringar',
                        url: 'problem/pigmentflackar/typer/roda-lila',
                        url_title: 'Utforska röda lila pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Ljusbruna Pigmentfläckar',
                        subtitle: 'Även kallat Café au lait fläckar',
                        image_url: 'images/pigmentflackar/102x102/ljusbruna.webp',
                        image_alt: 'Bild av ljusbruna pigmentfläckar',
                        image_title: 'Ljusbruna pigmentförändringar',
                        url: 'problem/pigmentflackar/typer/ljusbruna',
                        url_title: 'Utforska ljusbruna pigmentfläckar'
                  ),
                  new BasedType(
                        title: 'Vita Pigmentfläckar',
                        subtitle: 'Även kallat Hypopigmentering',
                        image_url: 'images/pigmentflackar/102x102/vita.webp',
                        image_alt: 'Bild av vita pigmentfläckar',
                        image_title: 'Vita pigmentförändringar',
                        url: 'problem/pigmentflackar/typer/vita',
                        url_title: 'Utforska vita pigmentfläckar'
                  ),
            )
      ),

      new BasedTypeCategory(
            title: 'Pigmentfläckar baserat på område',
            content: '<p class="p200">Pigmentfläckar kan uppstå på olika delar av kroppen, inklusive ansiktet, händerna och resten av kroppen. Platsen kan ibland ge insikt i orsaken; till exempel, fläckar på händer och ansikte är ofta kopplade till solskador eftersom dessa områden är mest utsatta för solen. Pigmentfläckar på kroppen kan vara mer relaterade till åldrande eller hormonella förändringar. Bedömning av pigmentfläckar baserat på område hjälper till att förstå underliggande faktorer och ger riktning för skräddarsydd behandling.</p>',
            types: array(
                  new BasedType(
                        title: 'Pigmentfläckar i ansiktet',
                        subtitle: 'Även kallat Solfläckar & åldersfläckar',
                        image_url: 'images/pigmentflackar/102x102/ansikte.webp',
                        image_alt: 'Bild av pigmentfläckar i ansiktet',
                        image_title: 'Pigmentförändringar i ansiktet',
                        url: 'problem/pigmentflackar/omraden/ansikte',
                        url_title: 'Läs mer om pigmentfläckar i ansiktet'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på överläppen',
                        subtitle: 'Även kallat Melasma & Chloasma',
                        image_url: 'images/pigmentflackar/102x102/overlappen.webp',
                        image_alt: 'Bild av pigmentfläckar på överläppen',
                        image_title: 'Pigmentförändringar på överläppen',
                        url: 'problem/pigmentflackar/omraden/overlappen',
                        url_title: 'Läs mer om pigmentfläckar på överläppen'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på Kroppen',
                        subtitle: 'Även kallat Solfläckar & åldersfläckar',
                        image_url: 'images/pigmentflackar/102x102/kroppen.webp',
                        image_alt: 'Bild av pigmentfläckar på kroppen',
                        image_title: 'Pigmentförändringar på kroppen',
                        url: 'problem/pigmentflackar/omraden/kroppen',
                        url_title: 'Läs mer om pigmentfläckar på kroppen'
                  ),
                  new BasedType(
                        title: 'Pigmentfläckar på Händerna',
                        subtitle: 'Även kallat Solfläckar & åldersfläckar',
                        image_url: 'images/pigmentflackar/102x102/hander.webp',
                        image_alt: 'Bild av pigmentfläckar på händerna',
                        image_title: 'Pigmentförändringar på händerna',
                        url: 'problem/pigmentflackar/omraden/hander',
                        url_title: 'Läs mer om pigmentfläckar på händerna'
                  ),

            )
      )

);

$types_url = '<a href="problem/pigmentflackar/typer" title="Lär dig mer om olika typer av pigmentfläckar och deras behandling" class="mt-xl button b200 outline expand l10n is-hidden-tablet">Läs mer om olika typer av pigmentfläckar</a>
              <a href="problem/pigmentflackar/typer" title="Lär dig mer om olika typer av pigmentfläckar och deras behandling" class="mt-xl button b200 outline l10n is-hidden-mobile">Läs mer om olika typer av pigmentfläckar</a>';

*/

$headline01 = "01. Identifiera dina Pigmentfläckar";

$service = new Service(
      title: 'Konsultation för Pigmentfläckar och Hudfläckar',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Under en personlig konsultation med en specialist inom pigmenteringar och hudfläckar genomförs en detaljerad analys av dina specifika pigmentfläckar. Vi fotograferar de berörda områdena och går igenom dina mål och förväntningar. En personlig behandlingsplan utformas, anpassad till dina unika behov och typen av pigmentering som du har.',
      image_small: 'images/services/200x200/pigmentflackar-konsultation.webp',
      image_large: 'images/services/200x200/pigmentflackar-konsultation.webp',
      image_alt: 'Bild av en konsultation för behandling av pigmentfläckar och hudfläckar',
      image_title: 'Konsultation för behandling av pigmentfläckar och hudfläckar',
      consultation_url: 'consultation-booking?problem=pigmentation',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för pigmentfläckar och hudfläckar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: 'hudkonsultation',
      url_label: 'Läs mer om vår konsultation för pigmentfläckar och hudfläckar',
      url_title: 'Klicka här för att läsa mer om gratis konsultation för pigmentfläckar och hudfläckar'
);

$headline02 = "02. Behandlingar mot pigmentfläckar";

$services = array(
      new Service(
            title: 'IPL-behandling för Pigmentfläckar',
            duration: '90 min',
            price: '4595 kr',
            content: 'IPL (Intense Pulsed Light) utnyttjar fokuserade ljusstrålar för att behandla och reducera pigmentfläckar och pigmenteringar. Behandlingen främjar hudens kollagenproduktion och tar bort skadade hudceller, vilket resulterar i en jämnare hud och mindre synliga fläckar.',
            image_small: 'images/services/200x200/ipl-behandling-pigmentflackar.webp',
            image_large: 'images/services/200x200/ipl-behandling-pigmentflackar.webp',
            image_alt: 'Bild av en IPL-behandling för pigmentfläckar',
            image_title: 'IPL-behandling för Pigmentfläckar',
            consultation_url: 'consultation-booking?problem=pigmentation&service=ipl',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för IPL-behandling av pigmentfläckar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/ipl-behandling-pigmentflackar-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en IPL-behandling för pigmentfläckar',
            url: 'ipl-behandling-pigmentflackar',
            url_label: 'Läs mer om IPL-behandling för pigmentfläckar',
            url_title: 'Klicka här för att läsa mer om IPL-behandling för pigmentfläckar'
      ),
      new Service(
            title: 'Kemisk Peeling för Pigmentfläckar',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling är en beprövad metod som förnyar och förbättrar hudens yta. Behandlingen används för att exfoliera och ta bort det yttersta hudlagret, vilket hjälper till att reducera synliga pigmentfläckar och förbättra hudens allmänna utseende.',
            image_small: 'images/services/200x200/kemisk-peeling-pigmentflackar.webp',
            image_large: 'images/services/200x200/kemisk-peeling-pigmentflackar.webp',
            image_alt: 'Bild av en kemisk peeling för pigmentfläckar',
            image_title: 'Kemisk Peeling för Pigmentfläckar',
            consultation_url: 'consultation-booking?problem=pigmentation&service=chemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling av pigmentfläckar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/kemisk-peeling-pigmentflackar-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling för pigmentfläckar',
            url: 'behandlingar/kemisk-peeling-pigmentflackar',
            url_label: 'Läs mer om kemisk peeling för pigmentfläckar',
            url_title: 'Klicka här för att läsa mer om kemisk peeling för pigmentfläckar'
      ),
      new Service(
            title: 'Laserbehandling mot pigmentfläckar',
            duration: '60 min',
            price: '4595 kr',
            content: 'Laserbehandling mot pigmentfläckar och ojämn pigmentering använder precisa ljusstrålar för att bryta ned överdriven pigmentering i huden. Denna behandling hjälper till att minska synligheten av pigmentfläckar och förbättra hudens jämnhet.',
            image_small: 'images/services/200x200/laserbehandling-pigmentflackar.webp',
            image_large: 'images/services/200x200/laserbehandling-pigmentflackar.webp',
            image_alt: 'Bild av en laserbehandling mot pigmentfläckar',
            image_title: 'Laserbehandling för pigmentfläckar',
            consultation_url: 'consultation-booking?problem=pigmentation&service=laser',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot pigmentfläckar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/laserbehandling-pigmentflackar-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot pigmentfläckar',
            url: 'behandlingar/laserbehandling-pigmentflackar',
            url_label: 'Läs mer om laserbehandling för pigmentfläckar',
            url_title: 'Klicka här för att läsa mer om laserbehandling mot pigmentfläckar'
      ),

      new Service(
            title: 'Microneedling för Pigmentfläckar',
            duration: '60 min',
            price: '2995 kr',
            content: 'Microneedling är en avancerad teknik som används för att behandla och förbättra hudens utseende, särskilt när det gäller pigmentfläckar och ojämn hudton. Små, fina nålar skapar kontrollerade mikroskador i huden, vilket igångsätter hudens läkningsprocess och kollagenproduktion. Resultatet blir en jämnare hudton och mindre synliga pigmentfläckar.',
            image_small: 'images/services/200x200/microneedling-pigmentflackar.webp',
            image_large: 'images/services/200x200/microneedling-pigmentflackar.webp',
            image_alt: 'Bild av en microneedling-behandling för pigmentfläckar',
            image_title: 'Microneedling för Pigmentfläckar',
            consultation_url: 'consultation-booking?problem=pigmentation&service=microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling av pigmentfläckar',
            booking_url: 'https://www.bokadirekt.se/boka-tjanst/acnespecialisten-sveriges-sk%C3%B6nhetscenter-%C3%B6stermalm-43559/microneedling-pigmentflackar-1643922',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling för pigmentfläckar',
            url: 'behandlingar/microneedling-pigmentflackar',
            url_label: 'Läs mer om microneedling för pigmentfläckar',
            url_title: 'Klicka här för att läsa mer om microneedling-behandling för pigmentfläckar'
      ),
);


$articles = array(
      new Article(
            title: 'När ska jag söka vård för mina pigmentfläckar?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Kvinna som funderar över sina pigmentfläckar',
            image_title: 'Övervägande av behandling för pigmentfläckar hos Acnespecialisten',
            content: '<p class="p200">Pigmentfläckar, även kända som hyperpigmentering, kan visa sig på huden av olika skäl, såsom solskador, hormonella förändringar eller naturlig åldrande. Även om de flesta av dessa fläckar är godartade och inte utgör något medicinskt hot, kan de fortfarande vara en estetisk olägenhet för många. För dem som känner att deras pigmentfläckar påverkar deras självförtroende eller deras dagliga liv är det dags att överväga behandlingsalternativ. Om du har fläckar som du redan vet är godartade men som du finner störande, kan en konsultation hos AcneSpecialistem hjälpa dig att utforska de bästa behandlingsmetoderna för just din hudtyp och dina behov.Det bör noteras att på vår klinik behandlar vi endast estetiska aspekter av pigmentfläckar. Om du har bekymmer om en specifik fläck på din hud rekommenderar vi att du konsulterar en hudläkare. Vi kan inte behandla eller diagnostisera melanom eller andra medicinska hudtillstånd.</p>',
      ),
      new Article(
            title: 'Varför ska jag behandla mina pigmentfläckar hos Acnespecialisten?',
            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Acnespecialisten klinik, expert på behandling av pigmentfläckar',
            image_title: 'Expertbehandling av pigmentfläckar hos Acnespecialisten',
            content: '<p class="p200">Att välja rätt klinik för behandling av pigmentfläckar är avgörande för önskat resultat, och Acnespecialisten är verkligen en framstående aktör inom detta fält. Med sin djupgående expertis och långa erfarenhet av att hantera en mängd hudproblem, inklusive pigmentfläckar, har teamet på Acnespecialisten utbildats för att noggrant identifiera och anpassa behandlingar efter olika typer av pigmentförändringar. För oss är ingen hud den andra lik, och därför tar vi fram skräddarsydda behandlingsplaner som speglar just dina specifika behov och önskade resultat. Kombinationen av vår omfattande erfarenhet och den senaste teknologin inom hudvård garanterar att du får den mest effektiva och säkra behandlingen som finns tillgänglig. Men vår omsorg sträcker sig bortom själva behandlingen; på Acnespecialisten ser vi till din övergripande hudhälsa, erbjuder råd och vägledning för att du ska kunna upprätthålla och förbättra ditt skick och därmed förhindra framtida pigmentering. Om du eftersträvar genuina resultat och önskar expertvård för dina pigmentfläckar, finns det ingen bättre plats än Acnespecialisten.</p>',
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
            title: 'Hudterapeut specialiserad på behandling av ärr orsakade av finnar sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med expertis i ärr av finnar',
            image_title: 'Cazzandra Lindberg - Expert på behandling av ärr från finnar'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Erfaren hudterapeut inriktad på ärr som uppstått från finnar sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut fokuserad på ärr av finnar',
            image_title: 'Veronika Benedik - Specialist inom behandling av ärr som uppstått av finnar'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut med inriktning mot ärr bildade av finnar sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut specialiserad på behandling av ärr orsakade av finnar',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på ärr från finnar'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut med expertis inom ärr som uppstått genom finnar sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling av ärr bildade av finnar',
            image_title: 'Vilma Libom - Expert inom behandling av ärr orsakade av finnar'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialiserade Hudterapeuter med inriktning mot ärr bildade av finnar";


$related_problems = array(
      new RelatedProblem(
            name: 'Melasma',
            aka: 'Finnar',
            image: 'images/problems/102x102/akne.webp',
            image_alt: 'Bild som visar aktiv akne, en vanlig hudåkomma',
            image_title: 'Aktiv Akne - en vanlig hudåkomma',
            url: 'problem/akne',
            url_title: 'Akne'
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
            label: 'Alma Hybrid CO2',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Alma hybrid CO2 Laser för behandling av pigmentfläckar och melasma',
            image_title: 'Alma Hybrid CO2 - Laser Teknologi för behandling av hudfläckar och pigmentering',
            url: 'varumarken/alma-hybrid-co2',
            url_title: 'Läs mer om Alma hybrid CO2 Laser för pigmentfläckar'
      ),
      new Brand(
            label: 'Alma Harmony XL PRO',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Alma Harmony XL PRO Microneedling för melasma och pigmentfläckar',
            image_title: 'Alma Harmony XL PRO - Microneedling lösning för hudfläckar och pigmentering',
            url: 'varumarken/dermapen4',
            url_title: 'Läs mer om Alma Harmony XL PRO för pigmentering och hudförändringar',
      ),
      new Brand(
            label: 'SkinTech',
            image: 'images/brands/cryopen.svg',
            image_alt: 'SkinTech Cryopen för behandling av pigmentfläckar',
            image_title: 'SkinTech Cryopen - Kryoterapi Verktyg för hudfläckar och melasma',
            url: 'varumarken/cryopen',
            url_title: 'Läs mer om SkinTech Cryopen för behandling av pigmentfläckar',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen Microneedling för behandling av melasma och pigmentering',
            image_title: 'Dermapen - Microneedling teknologi för hudfläckar och pigmentfläckar',
            url: 'varumarken/dermapen4',
            url_title: 'Läs mer om Dermapen Microneedling för pigmentförändringar',
      ),
      new Brand(
            label: 'Alma',
            image: 'images/brands/alma.svg',
            image_alt: 'Alma teknologi för behandling av melasma och hudfläckar',
            image_title: 'Alma - Laser, IPL och RF teknologi för behandling av pigmentfläckar',
            url: 'varumarken/alma',
            url_title: 'Läs mer om Alma Laser och IPL för pigmentering',
      ),
      new Brand(
            label: 'PRX-T33',
            image: 'images/brands/prxt.svg',
            image_alt: 'PRX-T33 teknologi för behandling av hudfläckar',
            image_title: 'PRX-T33 - Bio-revitaliserande behandling för melasma och pigmentfläckar',
            url: 'varumarken/prxt',
            url_title: 'Läs mer om PRX-T33 för behandling av pigmentering',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial behandling för melasma och hudfläckar',
            image_title: 'Hydrafacial - Hudvårdslösning för pigmentfläckar och melasma',
            url: 'varumarken/hydrafacial',
            url_title: 'Läs mer om Hydrafacial behandlingar för pigmentering',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'Infuzion teknologi för behandling av hudfläckar',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion för behandling av melasma och pigmentfläckar',
            url: 'varumarken/infuzion',
            url_title: 'Läs mer om Infuzion för behandling av pigmentering'
      ),
);


$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för ärr";

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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="Se våra varumärken mot akne" href="varumarken">Se alla varumärken</a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="includes/scripts/floating-image.js"></script>
</body>

</html>