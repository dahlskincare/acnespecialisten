<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Ta bort acneärr, gropar och fläckar i huden | AcneSpecialisten';
$seo_description = 'AcneSpecialisten har behandlat acneärr i 30 år. Boka tid för en gratis hudkonsultation så hjälper vi dig med rätt behandling!';
$seo_keywords = 'acneärr, akne ärr, ärr i ansiktet, ärr från finnar, acneärr gropar';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Acneärr', '/acnearr.php'),
);

$image_small = 'bilder/hudproblem/424x324/aknearr.webp';
$image_large = 'bilder/hudproblem/424x456/aknearr.webp';
$image_title = 'Visar en hud med acneärr';
$image_alt = 'Närbild på ett ansikte som har acneärr';

$green_banner_content = new GreenBannerContent(
      title: 'Acneärr',
      description: 'Här förklarar vi vad som kännetecknar acneärr, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av acneärr, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.',
      links_touch: [
            new Link('Boka konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för acneärr'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars', 'Boka gratis konsultation för acneärr'),
            new Link('Boka behandling', 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Atrofiska ärr - ( Gropar )',
                  url: 'atrofiska-arr.php',
                  title: 'Allt du behöver veta om atrofiska ärr i form av gropar från akne och deras behandling'
            ),
            new Link(
                  label: 'Postinflammatorisk hyperpigmentering - ( Fläckar )',
                  url: 'postinflammatorisk-hyperpigmentering.php',
                  title: 'Utforska orsaker, symptom och behandlingar av post inflammatorisk hyperpigmentering i form av fläckar från akne'
            ),
      ]
);

$about_title = 'Fakta';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: ' är acneärr?',
            content: '<p class="p200">Acneärr är märken eller förändringar som blir kvar på huden efter att inflammationer från akne har läkt. När vi pratar om acneärr, menar vi oftast de synliga tecknen som akneutbrott lämnar efter sig, vilka kan påverka hudens utseende på lång sikt. Dessa ärr kan se olika ut beroende på person och vilken typ av akne de har haft. Acneärr kan främst kategoriseras som atrofiska ärr (gropar) och postinflammatorisk hyperpigmentering (fläckar).</p>',
            extended_content: '<p class="p200 mt-xl"> Atrofiska ärr är fördjupningar i form av gropar i huden. Detta är vanligt symtom efter aktiv akne och varierar i utseende. Atrofiska ärr kan framträda som små, djupa hål som påminner om ispickesår, ha en vågig kontur som skapar ett ojämnt form och djup. Postinflammatorisk hyperpigmentering är en följd av akne som inte orsakar någon fördjupning eller grop i huden. Istället är det fläckar av ökad pigmentering som uppstår på platsen för tidigare inflammation. Dessa fläckar kan vara mörkare än den omgivande huden och variera i nyans från rosa till brun, beroende på hudton och svårighetsgraden av den initiala inflammationen. Postinflammatorisk hyperpigmentering skapar en ojämn hudton men ändrar inte hudens textur.</p>
            <p class="p200 mt-xl">På AcneSpecialisten, med över 30 års erfarenhet av behandling av acneärr, erbjuder vi de senaste och mest effektiva metoderna för att hantera och reducera dessa ärr. Behandlingen av acneärr kan vara komplex och måste skräddarsys efter individens hudtyp och typ av ärr. Det är av yttersta vikt att först hantera och behandla aktiv akne innan man går vidare med ärrbehandling, då nya akneutbrott kan leda till fler ärr. Vi har specialister som är redo att erbjuda dig en kostnadsfri hudkonsultation för att fastställa vilken typ av acneärr du har och lägga upp en personlig behandlingsplan. Du blir också tilldelad en personlig hudterapeut som är med dig hela vägen från start till mål.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Varför',
            title: ' får man acneärr?',
            content: '<p class="p200">Acneärr uppstår som ett resultat av hudens läkningsprocess efter acneutbrott. Det finns två huvudtyper av ärr som kan bildas: atrofiska ärr, som är gropar i huden, och postinflammatoriska hyperpigmenteringar, som är mörka fläckar. Atrofiska ärr bildas när huden inte kan återskapa tillräckligt med vävnad under läkningsprocessen, delvis på grund av den aggressiva fettsyran från finnarna som fräter ner och "äter upp" den omkringliggande huden.</p>',
            extended_content: '<p class="p200 mt-xl">Detta sker ofta efter svårare former av acne, som cystor och noduler, som skadar huden djupare och mer omfattande än mindre blemmor. När dessa akneformer läker, lämnar de bakom sig fördjupningar i huden eftersom det inte finns tillräckligt med kollagen (ett protein som hjälper till att hålla huden jämn och elastisk) för att fylla ut skadan. Detta resulterar i att huden får ett gropigt utseende.</p>
            <p class="p200 mt-xl">Postinflammatoriska hyperpigmenteringar uppstår däremot när huden överproducerar melanin, pigmentet som ger huden dess färg, som svar på inflammation. Denna överproduktion kan leda till att områden av huden blir mörkare än omgivningen. Dessa mörka fläckar är vanligare hos personer med mörkare hudtoner och kan uppstå efter nästan vilken typ av acne som helst, inklusive de fall där aggressiva fettsyror har frätit på huden. Även om dessa fläckar kan blekna med tiden, kan de vara envisa och kräver ibland speciella behandlingar för att lindra.</p>
            <p class="p200 mt-xl">Sammanfattningsvis uppstår acneärr som en bieffekt av hudens naturliga läkningsprocess, förvärrat av aggressiva fettsyror från finnarna som skadar den omkringliggande huden. Atrofiska ärr och postinflammatoriska hyperpigmenteringar är de två vanligaste typerna av ärr som kan lämna permanenta märken på huden. Förståelse för dessa processer är viktigt för att vidta åtgärder för att förebygga och behandla acneärr effektivt.</p>',
            icons: array()
      ),

      new ProblemTrivia(
            prefix: 'Vem',
            title: ' får acneärr?',
            content: '<p class="p200">Att förstå vilka som är mest benägna att få acneärr kräver en djupare titt på de individuella faktorer som påverkar hudens reaktion på acne. Även om acne i sig är en vanlig hudåkomma som kan drabba nästan vem som helst, finns det vissa personer som har en högre risk att utveckla bestående ärr efter dessa utbrott.</p>',
            extended_content: '<p class="p200 mt-xl">För det första spelar genetik en betydande roll i hudens förmåga att läka och reagera på inflammation. Personer vars familjemedlemmar har en historia av acneärr är mer benägna att också uppleva detta. Detta innebär att om dina föräldrar eller syskon har kämpat med acneärr, kan din egen risk för att utveckla dem vara högre. Genetiken kan påverka allt från hudens tjocklek till hur väl den kan återhämta sig efter inflammation, vilket direkt påverkar ärrbildningsprocessen.</p>
            <p class="p200 mt-xl">Ålder och hudtyp är ytterligare faktorer som påverkar vem som får acneärr. Ungdomar och unga vuxna genomgår hormonella förändringar som ofta leder till mer utbredd acne, vilket kan öka risken för ärrbildning om acnen inte hanteras väl. Personer med oljig hudtyper kan också ha en ökad benägenhet för acne, vilket i sin tur kan leda till en högre risk för ärr.</p>
            <p class="p200 mt-xl">Slutligen är det viktigt att nämna att personer som har en tendens att peta på eller klämma sina finnar löper en större risk att utveckla ärr. Denna mekaniska manipulation kan förvärra hudens inflammation och skada, vilket leder till en större sannolikhet för ärrbildning. Att motstå frestelsen att röra vid finnar och följa en lämplig hudvårdsrutin är avgörande för att minska risken för acneärr.</p>
            <p class="p200 mt-xl">Sammanfattningsvis är personer med genetiska förutsättningar, de som genomgår hormonella förändringar, har en oljig hudtyp, eller de som aktivt manipulerar sina finnar, mer benägna att utveckla acneärr. Förståelsen för dessa riskfaktorer är viktig för att vidta åtgärder mot att förhindra ärrbildning och hantera acnen på ett effektivt sätt.</p>',
            icons: array('man-kvinna' => 'Män & Kvinnor', 'tonaringar' => 'Tonåringar', 'vuxna' => 'Vuxna')
      ),

      new ProblemTrivia(
            prefix: 'Var',
            title: ' får man acneärr?',
            content: '<p class="p200">Acneärr kan bildas på alla områden där akne har uppstått. Det är mest vanligt med ärr på ansiktet, särskilt på kinderna, pannan och hakan, men de kan också uppträda på ryggen, bröstet, axlarna och nacken. Även om de oftast finns på dessa områden, är de inte begränsade till dem och kan förekomma på andra delar av kroppen också.</p>',
            extended_content: '<p class="p200 mt-xl">Beroende på typen och omfattningen av ärrbildningen kan olika behandlingsmetoder vara nödvändiga. Detta kan inkludera allt från laserbehandlingar och kemiska peelingar till mer invasiva kirurgiska metoder. Hos Acnespecialisten erbjuder vi omfattande behandlingar som tar itu med acneärr oavsett var de befinner sig på kroppen. Behandlingsval beror på individens unika behov och måste göras med en kvalificerad hudvårdsexpert.</p>
            <p class="p200 mt-xl">Det är också viktigt att betona att behandlingen av acneärr är en process som kan ta tid. Även om vissa metoder kan ge omedelbara förbättringar, kräver ärrbehandling ofta en långsiktig strategi och tålamod från patientens sida. Samarbete med en erfaren specialist, som Acnespecialisten, kan säkerställa att processen skräddarsys för att möta individens behov och mål. Kontakta oss för en kostnadsfri konsultation och börja din resa mot en hälsosam och klar hud idag!</p>',
            icons: array('ansikte' => 'Ansiktet', 'brost' => 'Bröst', 'rygg' => 'Rygg')
      ),
);
$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du tilldelad en personlig hudterapeut som noga undersöker och identifierar dina acneärr. Tillsammans kartlägger vi din unika ärrtyp och skapar en individuell behandlingsplan, skräddarsydd för just dina behov.',
            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
            url_title: 'Boka din kostnadsfria ärrkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Med målinriktade och effektiva acneärrbehandlingar, skräddarsyr vi en lösning som är perfekt anpassad för din specifika ärrtyp. Vår expertis säkerställer en snabb och säker förbättring av hudens utseende, så att du kan känna dig trygg och nöjd med ditt resultat.',
            url_label: 'Se behandlingar',
            url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_AcneScars',
            url_title: 'Utforska våra skräddarsydda behandlingar för acneärr'
      ),
);

$treatment_link = '<a href="behandla-acnearr.php" title="Utforska effektiva behandlingar mot acneärr" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';


$symptoms_title = 'Olika typer av acneärr';

$symptoms = array(
      new Symptom(
            name: 'Postinflammatorisk hyperpigmentering (PIH)',
            aka: 'Mörka/bruna fläckar',
            content: 'Mörka fläckar som uppstår efter ett acneutbrott, där huden blivit mörkare på de områden som tidigare varit inflammerade. Det är resultatet av en ökad melaninproduktion som svar på hudskadan.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Läs mer om postinflammatorisk hyperpigmentering',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/postinflammatorisk-hyperpigmentering.webp',
            image_alt: 'Bild av postinflammatorisk hyperpigmentering',
            image_title: 'Postinflammatorisk hyperpigmentering'
      ),
      new Symptom(
            name: 'Atrofiska "ice-pick" ärr',
            aka: 'Gropar eller nålstick-liknande ärr',
            content: 'Smala, djupa och spetsiga gropar i huden, liknande hål efter en ispicka. Uppstår ofta efter djupgående acne och ger huden ett ojämnt utseende.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska "ice-pick" ärr',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-ice-pick-arr.webp',
            image_alt: 'Bild av atrofiska "ice-pick" ärr',
            image_title: 'Atrofiska "ice-pick" ärr'
      ),
      new Symptom(
            name: 'Atrofiska "Boxcar" ärr',
            aka: 'Gropar eller skålliknande ärr',
            content: 'Breda med skarpa kanter och fördjupningar som liknar formen på ett boxcar. De bildas vanligtvis efter akneutbrott som lämnar runda eller ovala hål i huden.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska "Boxcar" ärr',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-boxcar-arr.webp',
            image_alt: 'Bild av atrofiska "Boxcar" ärr',
            image_title: 'Atrofiska "Boxcar" ärr (gropar)'

      ),
      new Symptom(
            name: 'Postinflammatorisk hypopigmentering',
            aka: 'Vita fläckar',
            content: 'Detta är förlusten av hudfärg på acnebenägna områden, vilket resulterar i ljusare eller vitaktiga fläckar. Det sker när en inflammation leder till en minskning av melaninproduktionen i de drabbade områdena.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Läs mer om postinflammatorisk hypopigmentering',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/postinflammatorisk-hypopigmentering.webp',
            image_alt: 'Bild av postinflammatorisk hypopigmentering',
            image_title: 'Postinflammatorisk hypopigmentering (vita fläckar)'
      ),
      new Symptom(
            name: 'Atrofiska "rolling" ärr',
            aka: 'Gropar',
            content: 'Vågig yta med mjuka, ojämna fördjupningar. De orsakas av skador under huden som drar huden nedåt, vilket skapar ett oregelbundet utseende.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska "rolling" ärr',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-rolling-arr.webp',
            image_alt: 'Bild av atrofiska "rolling" ärr',
            image_title: 'Atrofiska "rolling" ärr (gropar)'
      ),
      new Symptom(
            name: 'Postinflammatorisk erytem (PIE)',
            aka: 'Rosa/lila fläckar eller missfärgning',
            content: 'Röda eller rosa fläckar på huden efter en inflammation. Detta är inte en permanent pigmentförändring utan en tillfällig rodnad som orsakas av skadade eller vidgade blodkärl under hudens yta.',
            url: 'postinflammatorisk-hyperpigmentering.php',
            url_title: 'Läs mer om postinflammatorisk erytem',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/postinflammatorisk-erytem.webp',
            image_alt: 'Bild av postinflammatorisk erytem',
            image_title: 'Postinflammatorisk erytem (rosa/lila fläckar)'
      ),
      new Symptom(
            name: 'Atrofiska ärr',
            aka: 'Gropar',
            content: 'Samlingsnamnet för ärr som bildar fördjupningar i huden, inklusive ice-pick, boxcar och rolling ärr. Dessa uppstår när huden förlorar vävnad under läkningsprocessen, vilket leder till att ärrvävnaden sjunker nedåt och skapar gropar.',
            url: 'atrofiska-arr.php',
            url_title: 'Läs mer om atrofiska ärr (gropar)',
            url_label: 'Läs mer',
            image: 'bilder/symptom/102x102/atrofiska-arr.webp',
            image_alt: 'Bild av atrofiska ärr (gropar)',
            image_title: 'Atrofiska ärr (gropar)'
      ),

);

$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Acneärr Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en specialist inom acneärr utförs en noggrann undersökning av dina ärr. Vi tar före-bilder på de drabbade områdena och diskuterar dina mål och förväntningar. En skräddarsydd behandlingsplan anpassad efter dina individuella behov och ärrets typ rekommenderas.',
      image_small: 'bilder/behandlingar/200x200/konsultation.webp',
      image_large: 'bilder/behandlingar/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för acneärrbehandling',
      image_title: 'Konsultation för acneärrbehandling',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_AcneScars',
      consultation_url_label: 'Boka konsultaion',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för acneärr',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url: '/gratis-hudkonsultation.php',
      url_label: 'Läs mer om gratis hudkonsultation',
      url_title: 'Läs mer om gratis hudkonsultation'
);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Laser mot acneärr',
            duration: '90 min',
            price: '4595 kr',
            content: 'Laserbehandling är en effektiv metod för att ta bort ärr i ansiktet med laser som använder koncentrerade ljusstrålar för att behandla och minska ärr som orsakats av akne. Genom att stimulera hudens naturliga kollagenproduktion och ta bort skadade hudceller, kan denna behandling jämna ut hudens textur och minska framträdandet av ärr.',
            image_small: 'bilder/behandlingar/200x200/laser.webp',
            image_large: 'bilder/behandlingar/200x200/laser.webp',
            image_alt: 'Bild av en laserbehandling mot acneärr',
            image_title: 'Laserbehandling mot acneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laser mot acneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot acneärr',
            url: '/laser-acnearr.php',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot acneärr',
      ),
      new Service(
            title: 'Kemisk peeling mot acneärr',
            duration: '30 min',
            price: '1995 kr',
            content: 'Kemisk peeling förbättrar hudens utseende och textur med häjlp av syror. Denna behandling är särskilt effektiv för ärrtypen fläckar och verkar genom att applicera en kemisk lösning som exfolierar och tar bort det yttersta hudlagret. Detta främjar hudens förnyelse och kan avsevärt minska framträdandet av ärr och fläckar.',
            image_small: 'bilder/behandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/behandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av en kemisk peeling mot acneärr',
            image_title: 'Kemisk peeling mot acneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot acneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot acneärr',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot acneärr',
      ),
      new Service(
            title: 'Microneedling mot acneärr',
            duration: '60 min',
            price: '2595 kr',
            content: 'Microneedling är en populär behandling av ärr i ansiktet som riktiar sig särskilt till atrofiska ärr. Med hjälp av små, fina nålar skapas kontrollerade mikroskador i huden, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Detta leder till en jämnare hudtextur och minskat framträdande av atrofiska ärr.',
            image_small: 'bilder/behandlingar/200x200/microneedling.webp',
            image_large: 'bilder/behandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av en microneedling-behandling mot acneärr',
            image_title: 'Microneedling mot acneärr',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot acneärr',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_AcneScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling-behandling mot acneärr',
            url: '/microneedling-acnearr.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot acneärr',
      ),
);

$articles = array(
      new Article(
            title: 'Hur får man bort hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: 'Hur får man bort acneärr?Hur får man bort acneärr?',
            image_title: 'Hur får man bort acneärr?',
            content: '<p class="p200">Vi erbjuder de senaste behandlingsmetoderna mot alla typer av acneärr. Oavsett om det gäller laserbehandling för de mest envisa ärrtyperna, microneedling som är effektiv mot atrofiska ärr, eller kemisk peeling för ärrtypen fläckar, är våra behandlingsalternativ bäst mot acneärr. Vi använder alltid de mest avancerade och skräddarsydda lösningarna för dina acneärr.</p>
            <p class="p200 mt-m">Din resa med oss börjar med en helt kostnadsfri konsultation. Vi tar oss tiden att analysera ditt unika fall och erbjuder dig en personlig hudterapeut. Din terapeut kommer att vara din guide och stöttepelare från start till mål, och skapa en behandlingsplan som är helt anpassad efter dina behov.</p>',
      ),
      new Article(
            title: 'Varför AcneSpecialisten?!',
            image_small: null,
            image_large: null,
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">När det kommer till att välja rätt behandling för dina acneärr, vet vi hur avgörande det är att finna någon som inte bara förstår ditt problem utan också erbjuder de mest innovativa och effektiva lösningarna. På Acnespecialisten har vi dedikerat över 30 år till att förstå och behandla acneärr. Vår gedigna erfarenhet gör oss till specialister som verkligen lever upp till vårt namn.</p>
            <p class="p200 mt-m">Det som verkligen särskiljer oss är vår fokuserade expertis inom acneärrbehandling. Vi är inte bara experter på acneärr, utan även pionjärer inom ärrreducering, laserbehandling och effektiv aknebehandling. Genom att välja Acnespecialisten får du tillgång till en värld av expertis och omtanke, där ditt välmående står i centrum. Vi ser fram emot att hjälpa dig på din resa mot en ny början. Boka din kostnadsfria konsultation idag och ta det första steget med oss.</p>',
            url: '/gratis-hudkonsultation.php',
            url_label: 'Läs mer',
            url_title: 'Läs mer om varför gratis hudkonsultation',
      ),
);

$results_title = 'Acneärr före och efter resultat';
$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-1.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-1.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-2.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-2.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-3.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-3.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-4.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-4.jpg',
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
            image_before_small: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
            image_after_small: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
            image_before_large: '/bilder/resultat/acnearr/resultat-acnearr-fore-5.jpg',
            image_after_large: '/bilder/resultat/acnearr/resultat-acnearr-efter-5.jpg',
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

$results_url_label = "Se fler resultat";
$results_url_title = "se flera behandlingsresultat från acneärr";


$reviews = array(
      new Review(
            stars: 5,
            brand: 'Trustpilot',
            logo_url: 'images/brands/trustpilot.svg',
            title: 'Utmärkt',
            text: "Professionellt gjort. Man känner sig trygg. Är nöjd med dagens behandling.",
            signature: 'Vee'
      ),
      new Review(
            stars: 5,
            brand: 'Google',
            logo_url: 'images/brands/google-small.svg',
            title: 'Bra ställe..',
            text: "Bra ställe och fantastiska specialister. Jag uppskattar mycket hur ren platsen är men också hur uppmärksam personalen är. Rekommenderas 10/10!",
            signature: 'Alba'
      ),
      new Review(
            stars: 5,
            brand: 'Bokadirekt',
            logo_url: 'images/brands/bokadirekt-small.svg',
            title: 'Så fräsch lokal..',
            text: "Så fräsch lokal och proffsigt och mysigt besök. Vi har nu satt upp en plan för min hy.",
            signature: 'Matilda'
      ),

);

$faq_categories = array(
      'Generellt om akne' => array(
            new Question(
                  title: 'Är det möjligt att helt bli av med mina acneärr?',
                  text: '<p class="p200">Ja, det är absolut möjligt att bli av med dina acneärr! Under vår kostnadsfria hudkonsultation kommer vi att noggrant undersöka och identifiera graden av ditt problem för att hjälpa dig att behandla det på bästa möjliga sätt. Genom att följa våra individuella råd och den skräddarsydda behandlingsplan vi rekommenderar, kan dina acneärr försvinna. Det är dock viktigt att förstå att tidsramen kan variera beroende på hur grova eller djupa ärr du har. Vi kommer att arbeta tillsammans med dig för att uppnå det bästa resultatet.</p>'
            ),
            new Question(
                  title: 'Har jag fått ärr från finnar eftersom jag har klämt på dem?',
                  text: '<p class="p200">Inte nödvändigtvis. Även om det klart kan vara en faktor – särskilt om du har pillat eller klämt på finnar som inte varit mogna – är det inte alltid orsaken till ärrbildning. Ofta handlar det snarare om att aknen inte har behandlats på rätt sätt, vilket har tillåtit den att skada hudens lager. På AcneSpecialisten kan vi hjälpa dig att förstå dina specifika förhållanden och få bort ärr från finnar effektivt.</p>'
            ),
            new Question(
                  title: 'Kan mina acneärr komma tillbaka efter behandling?',
                  text: '<p class="p200">Nej, de ärr som du redan har behandlat bort kommer inte tillbaka. Men det är viktigt att förstå att om du inte behandlar själva orsaken till ärrbildningen, det vill säga aknen, kan nya ärr uppstå. På Acnespecialisten fokuserar vi inte bara på att behandla själva ärrbildningen, utan vi ser till att ta itu med roten till problemet och behandlar själva aknen. Detta hjälper dig att förhindra att nya ärr bildas, och ger dig den bästa chansen till en frisk och klar hud.</p>'
            ),
            new Question(
                  title: 'Hur många behandlingar behövs för att ta bort mina acneärr?',
                  text: '<p class="p200">Antalet behandlingar som krävs för att uppnå önskat resultat varierar beroende på typ och svårighetsgrad av acneärr, samt den metod som valts för att behandla din specifika hudtyp. På Acnespecialisten vet vi att varje persons hud är unik, och vi skräddarsyr en behandlingsplan baserat på dina individuella behov. Under din kostnadsfria konsultation kommer du att tilldelas en personlig hudterapeut som är med dig hela vägen. Din terapeut kommer att analysera din hud och ta fram en skräddarsydd plan som bäst passar dina behov, och ge dig en uppfattning om hur många behandlingar som kan behövas för att uppnå de bästa resultaten mot dina acneärr.</p>'
            ),
            new Question(
                  title: 'Vilka behandlingsmetoder erbjuder ni för olika typer av acneärr?',
                  text: '<p class="p200">Vi erbjuder en mängd olika behandlingsalternativ för acneärr, inklusive laserbehandling, kemisk peeling och microneedling. Varje metod har sina unika fördelar och är mest effektiva för vissa typer av ärr. Under en kostnadsfri konsultation med en av våra hudterapeuter kan vi utvärdera dina specifika behov och rekommendera den metod som passar din hudtyp och acneärr bäst.</p>'
            ),
            new Question(
                  title: 'Är behandlingarna smärtsamma? Vilken eftervård krävs?',
                  text: '<p class="p200">Våra behandlingsmetoder är utformade för att vara så bekväma som möjligt, och vi tar alla nödvändiga steg för att minimera eventuell obehag. Känslan under behandlingen kan variera beroende på metoden och acneärrtypen. Eftervården är också individuell och din hudterapeut kommer att ge dig detaljerade instruktioner för hur du tar hand om din hud efter behandlingen för att främja läkning och optimera resultaten.</p>'
            ),
            new Question(
                  title: 'Hur länge behöver jag vänta mellan behandlingarna? Och hur snabbt kommer jag se resultat?',
                  text: '<p class="p200">Tiden mellan behandlingarna och hur snabbt du kommer se resultat beror på den specifika metoden som används och din individuella hudtyp. I allmänhet rekommenderar vi en viss tid mellan sessionerna för att din hud ska få tid att läka ordentligt och för att maximera effektiviteten av behandlingen. Din personliga hudterapeut kommer att gå igenom alla detaljer med dig och skapa en skräddarsydd behandlingsplan som passar dina behov, inklusive en tidslinje för när du kan förvänta dig att se synliga förbättringar.</p>'
            ),
            new Question(
                  title: 'Räknas hål i huden efter pormask som acneärr?',
                  text: '<p class="p200">Hål i huden efter pormaskar, ofta kallade ispickärr eller förstorade porer, räknas vanligtvis inte som acneärr i strikt mening men är definitivt en form av permanent hudskada som kan uppkomma efter akne. Dessa små gropar i huden är resultatet av att djupa pormaskar eller andra akneutbrott har skadat det omgivande vävnaden, vilket gör att huden inte kan återhämta sig helt och lämnar permanenta märken. Behandling av sådana skador genomförs dock med samma metoder som för acneärr vilket inkluderar laserbehandlingar och microneedling.</p>'
            ),
      ),

);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till acneärr";

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
$skinguide_url_title = "Läs fler guider om acneärr";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut med fokus på acneärr sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i acneärrbehandling',
            image_title: 'Cazzandra Lindberg - Expert på acneärrbehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut med specialisering i acneärr sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på acneärr',
            image_title: 'Veronika Benedik - Specialist inom acneärrvård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut med inriktning mot acneärr sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut specialiserad på acneärrhantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på acneärr'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut med specialisering i acneärr sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot acneärrbehandling',
            image_title: 'Vilma Libom - Expert inom acneärrbehandling'
      )
);


$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Specialisserade Hudterapeuter med inriktning mot acneärr";

$related_problems = array(
      new RelatedProblem(
            name: 'Aktiv Akne',
            aka: 'Finnar',
            image: 'bilder/hudproblem/102x102/akne.webp',
            image_alt: 'Ansikte med aktiv akne',
            image_title: 'Aktiv Akne - en vanlig hudåkomma',
            url: 'acne.php',
            url_title: 'Akne'
      ),
      new RelatedProblem(
            name: 'Finnar',
            aka: 'Akne',
            image: 'bilder/hudproblem/102x102/finnar.webp',
            image_alt: 'Ansikte med finnar',
            image_title: 'Finnar - ett vanligt hudproblem',
            url: 'finnar.php',
            url_title: 'Finnar'
      ),
      new RelatedProblem(
            name: 'Ärr från finnar',
            aka: 'gropar & Fläckar',
            image: 'bilder/hudproblem/102x102/acnearr.webp',
            image_alt: 'Ansikte med ärr från finnar',
            image_title: 'ärr från finnar - en vanlig följd av akne',
            url: 'finnar-arr.php',
            url_title: 'Acneärr'
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
            url: 'varumarken/skin-tech',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för acneärr";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/acnearr.php" />

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
                                                      <?php include('hudproblem/widgets/symptom-card/symptom-card.php'); ?>
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

                        <!--Hudguide-->
                        <section id="specialists">
                              <div class="flex-row justify-space-between">
                                    <h2 class="big l10n">Våra hudterapeuter</h2>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut"><?php echo $specialist_url_label ?></a>
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