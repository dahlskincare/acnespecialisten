<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('problem/widgets/problem-trivia-card/problem-trivia.php');
include_once('problem/widgets/symptom-card/symptom.php');
include_once('problem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Allt om Rhinophyma och Rosacea - Orsaker, Behandlingar och Förebyggande | Acnespecialisten';
$seo_description = 'Upptäck viktiga fakta om rhinophyma, en avancerad form av rosacea, och hur det påverkar huden. Få insikter i effektiva behandlingar och omsorgsmetoder med Acnespecialistens expertis.';
$seo_keywords = 'rhinophyma, rosacea, rhinophyma behandling, orsaker till rhinophyma, förebygga rhinophyma, ta bort rhinophyma, avancerad rosacea, hudsjukdomar, rosaceaärr, förtjockad hud på näsan';

// här lägger du bild som du vill skall synas när du länkar i socialamerider eller sms

$seo_image = 'bilder/problem/424x456/rosacea.webp';

$title = 'Rhinophyma Rosacea';

$image_small = 'bilder/problem/424x324/rosacea.webp';
$image_large = 'bilder/problem/424x456/rosacea.webp';
$image_title = 'Visar en hud med rosacea';
$image_alt = 'Bild som illustrerar hur rosacea ser ut på huden';
$description = 'Här förklarar vi vad som kännetecknar rosacea, varför problemet uppstår och hur vi kan hjälpa dig med behandling. Vi går även igenom hur vi identifierar olika typer av rosacea, orsakerna bakom dem och hur vi kan stödja dig i din behandlingsprocess.';

$floating_box = 'Text på floating box';

$consultation_url_label = "Få gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne";
$consultation_url_title = "Gratis Konsultation för rosacea";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Acne";
$booking_url_title = "Boka rosaceabehandling";

$mobile_consultation_url_label = "Få gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för rosacea";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka rosaceabehandling";

$floating_consultation_url_label = "Få gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för rosacea";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka rosaceabehandling";

$nav_buttons = array(
      'about' => 'Om rhinophyma rosacea',
      'approach' => 'Metoden',
      'areas' => 'Områden',
      'define' => 'Konsultation',
      'treatments' => 'Behandling',
      'articles' => 'När?',
      'articles' => 'Varför er?',
      'results' => 'Resultat',
      'reviews' => 'Omdömen',
      'faq' => 'FAQ',
      'skin-guide' => 'Hudguide',
      'specialists' => 'Specialister',
      'related-problems' => 'Relaterade problem',
);

$description_title = 'Vad är Sun Spots?';
$description_text = '<p class="p200">Klassiska ansiktsbehandlingar är en grundsten inom hudvård och erbjuder en upplevelse av avkoppling samtidigt som huden får den vård den behöver. Behandlingarna går ut på att rengöra, återfukta, balansera och revitalisera huden, samt att hantera specifika hudproblem.</p>
<p class="p200 mt-m">Hos oss på AcneSpecialisten kan du välja mellan flera typer av klassiska ansiktsbehandlingar. Vi erbjuder allt från den traditionella Klassisk ansiktsbehandling till Antistress, där fokus ligger på avslappning. Hudterapeutens val anpassas helt efter dina behov, medan Peel, Boost & Glow siktar på att ge huden en extra boost. För den som vill ha det lilla extra erbjuder vi Lyx behandlingen. Oavsett vilken behandling du väljer, är vårt mål att ge din hud den bästa möjliga omsorgen.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera din rosaceatyp och skapar en individuell behandlingsplan.',

            url_label: 'Få gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför skonsamma och effektiva rosaceabehandlingar anpassade för din specifika rosaceatyp, så att du snabbt och säkert blir av med problemet.',

            url_label: 'Se rosaceabehandlingar',
            url: 'acnebehandling.php',
            url_title: 'Utforska våra skräddarsydda rosaceabehandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga ny rosacea och hålla din hud i balans.',

            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            url_title: 'Hitta de bästa produkterna för att förebygga rosacea'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När rosacean är borta fokuserar vi på att reducera eventuella ärr med behandlingsmetoder som laser, microneedling och kemisk peeling för en jämn och problemfri hud.',

            url_label: 'Se ärrbehandlingar',
            url: 'behandla-acnearr.php',
            url_title: 'Upptäck effektiva behandlingar för rosaceaärr'
      ),

);
$treatment_link = '<a href="acnebehandling.php" title="Utforska effektiva rosaceabehandlingar" class="mt-xl button b200 outline expand auto-width">Läs mer om våra rosaceabehandlingar</a>';

$top_articles = array(
    'omraden' => new Article(
        title: 'Sun Spot Areas',
        image_small: '',
        image_large: '',
        image_alt: '',
        image_title: '',
        content: '<p class="p200">Att förbereda sig för en Dermapen-behandling innebär att först genomgå en detaljerad konsultation med en av våra hudspecialister. Under konsultationen utförs en noggrann bedömning av din hud för att identifiera individuella behov och särskilda hudproblem. Denna initiala analys är kritisk för att utforma en personlig behandlingsplan som är perfekt anpassad för dina unika hudvårdsbehov.</p>
        <p class="p200 mt-m">För optimala resultat bör huden inte vara solskadad vid tidpunkten för behandlingen. Vi rekommenderar också att du avstår från att använda hudirriterande produkter som innehåller starka syror några dagar före behandlingen. Vår hudterapeut kommer att ge dig fullständig vägledning för att förbereda din hud inför behandlingen med Dermapen, för att säkerställa en effektiv och trygg upplevelse.</p>',
        tags: array(new ArticleTag(
            icon: 'anga',
            label: 'Ånga'
        ), new ArticleTag(
            icon: 'extraktion',
            label: 'Extraktion'
        ), new ArticleTag(
            icon: 'mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'rengoring',
            label: 'Rengöring'
        ))
    ),
);

$articles = array(
      new Article(
            title: 'Varför AcneSpecialisten?!',
            content: '<p class="p200">Du som vill ha det som är bäst mot rosacea bör välja Acnespecialisten eftersom vi är experter på att behandla rosacea och har över 30 års erfarenhet av att ha arbetat med olika typer av rosacea. Vi lever upp till vårt namn genom att erbjuda personlig och professionell hjälp för att hjälpa dig att uppnå en klar och frisk hud. Vi skräddarsyr behandlingar baserade på dina individuella problem och behov, vi rekommenderar de bästa rosaceaprodukterna för att förebygga och behandla din hud och rosacea. </p><p class="p200 mt-m">Genom att välja Acnespecialisten får du den mest effektiva behandlingen för ditt specifika fall och en hudvårdspartner som stöttar dig genom hela processen.</p>',

            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'Varför AcneSpecialisten?!',
            image_title: 'Varför AcneSpecialisten?!',
      ),
      new Article(
            title: 'När ska jag besöka AcneSpecialisten?',
            content: '<p class="p200">Du bör besöka Acnespecialisten när du känner att din rosacea påverkar din livskvalitet eller om du har provat olika behandlingar och produkter utan att se några varaktiga förbättringar. Ju tidigare du söker hjälp, desto större är chansen att undvika ärrbildning och långvariga hudproblem. Acnespecialisten är här för att erbjuda dig expertis och skräddarsydda behandlingar oavsett om du har lindrig, måttlig eller svår rosacea. Tveka inte att kontakta oss för att boka en kostnadsfri konsultation och ta det första steget mot en klarare och friskare hud.</p><p class="p200 mt-m">Välj Acnespecialisten innan du går till en läkare, eftersom vi erbjuder en kostnadsfri konsultation där vi analyserar din rosacea och föreslår en individuell behandlingsplan. Våra specialister har stor erfarenhet av att behandla rosacea och kan ge dig råd om vilka produkter och behandlingar som är bäst för just din hudtyp. Att prova Acnespecialisten först kan hjälpa dig att undvika att använda tunga mediciner som kan ha biverkningar och påverka hela kroppen. Genom att boka en gratis konsultation hos oss får du en chans att se hur vi kan hjälpa dig att förbättra din hudhälsa innan du tar steget att besöka en läkare.</p>',

            image_small: 'https://via.placeholder.com/358x272.webp',
            image_large: 'https://via.placeholder.com/872x456.webp',
            image_alt: 'När ska jag besöka AcneSpecialisten?',
            image_title: 'När ska jag besöka AcneSpecialisten?',
      ),
);

$headline01 = "01. Identifiera din rosacea";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en acnespecialist utförs en undersökning av din rosacea. Vi tar före-bilder på din hud och rekommenderar en lämplig behandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för rosaceabehandling',
      image_title: 'Konsultation för rosaceabehandling',

      url_label: '',
      url: '',
      url_title: '',

      consultation_url_label: 'Boka hudkonsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
      consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för rosacea',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,

);

$headline02 = "02. Behandla aktiv rosacea";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot rosacea',
            duration: '60 min',
            price: '995 kr',
            content: 'En effektiv ansiktsbehandling mot rosacea fokuserar på att noggrant extrahera orenheter som orsakar inflammation och skador i huden. Genom att försiktigt klämma ut rosacea och pormaskar kan behandlingen bidra till att förebygga ärrbildning och främja en snabbare läkning.',

            image_small: 'images/services/200x200/ansiktsbehandling.webp',
            image_large: 'images/services/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling mot rosacea',
            image_title: 'Ansiktsbehandling mot rosacea',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot rosacea',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Acne',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot rosacea',
      ),
      new Service(
            title: 'Laser mot rosacea',
            duration: '50 min',
            price: '2595 kr',
            content: 'En avancerad laserbehandling mot rosacea erbjuder en effektiv lösning för att bekämpa aktiv rosacea och ärr som kan uppstå efter utbrott. Lasertekniken riktar sig mot de bakterier som orsakar inflammation och hjälper till att minska produktionen av talg, vilket minskar risken för framtida utbrott.',

            image_small: 'images/services/200x200/laser.webp',
            image_large: 'images/services/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling mot rosacea',
            image_title: 'Laserbehandling mot rosacea',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för laserbehandling mot rosacea',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling mot rosacea',
      ),
      new Service(
            title: 'Kemisk peeling mot rosacea',
            duration: '30 min',
            price: '1595 kr',
            content: 'Kemisk peeling är en effektiv metod för att behandla rosacea. Genom att använda en speciellt framtagen lösning för att exfoliera huden, främjar kemisk peeling cellförnyelse, rensar tilltäppta porer och minskar inflammation. Resultatet är en jämnare hudton, mindre utbrott och färre synliga ärr. Det är en enkel och effektiv strategi för att ta kontroll över din rosacea och förbättra din hudhälsa.',

            image_small: 'images/services/200x200/kemisk-peeling.webp',
            image_large: 'images/services/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling mot rosacea',
            image_title: 'Kemisk peeling mot rosacea behandling',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot rosacea',

            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Acne',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot rosacea behandling',

      ),
      new Service(
            title: 'Microneedling mot rosacea',
            duration: '50 min',
            price: '2595 kr',
            content: 'Microneedling är en innovativ behandlingsmetod för rosacea. Detta utförs genom att skapa små mikroskopiska kanaler i huden vilket främjar hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Denna behandling kan effektivt minska utbrott av rosacea, förbättra hudens struktur och minska synligheten av rosaceaärr. Microneedling är en säker och effektiv strategi för att ta kontroll över din rosacea och förbättra din hudhälsa.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling mot rosacea',
            image_title: 'Microneedling mot rosacea behandling',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot rosacea',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=Problem_Acne',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot rosacea behandling',
      ),
);

$headline03 = "03. Förebygg uppkomsten av ny rosacea";

$products = array(
      new Service(
            title: 'Produkter mot rosacea',
            duration: null,
            price: 'Pris från 1495 kr',
            content: 'För att effektivt bekämpa och förebygga rosacea är daglig behandling med rätt produkter avgörande. Våra rosaceaprodukter är speciellt utformade för att hålla din hud i balans och förhindra att ny rosacea uppstår.',

            image_small: 'images/services/200x200/produkter.webp',
            image_large: 'images/services/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av rosacea',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av rosacea',

            url: '',
            url_label: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för hudvårdsprodukter mot rosacea',

            booking_url_label: 'Köp produkter',
            booking_url: 'https://dahlskincare.se/produktkategorier/produktpaket/rosacea',
            booking_url_title: 'Klicka för att köpa produktpaket mot rosacea',
      )
);

$headline04 = "04. Reparera post-rosacea";

$procedures = array(
      new Service(
            title: 'Reparera acneärr',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Efter aktiv rosacea kan man uppleva post-rosacea, vilket innebär ärr i form av gropar i olika former och fläckar i olika färger på huden där rosacean tidigare varit. Olika typer av ärr behandlas med olika metoder. Klicka här för att läsa mer om hur du kan reparera din hud och ta hand om post-rosacea.',

            image_small: 'images/services/200x200/microneedling.webp',
            image_large: 'images/services/200x200/microneedling.webp',
            image_alt: 'Reparera acneärr',
            image_title: 'Reparera acneärr',

            url_label: '',
            url: '',
            url_title: '',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot rosacea',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=dermapen&skipable_problem=Problem_AcneScars',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot rosacea behandling',

      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter-1.jpg',
            image_alt: 'rosacea resultat',
            image_title: 'rosacea resultat',
            treatment: new ResultTreatment(
                  duration: '3 månader',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter-2.jpg',
            image_alt: 'rosacea resultat',
            image_title: 'rosacea resultat',
            treatment: new ResultTreatment(
                  duration: '2 månader',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_alt: 'Rosacea resultat',
            image_title: 'Rosacea resultat',
            treatment: new ResultTreatment(
                  duration: '4 månader',
            )
      ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera rosaceabehandlingsresultat";


$reviews = array(
      new Review(
            brand: 'Trustpilot',
            title: 'Supernöjd',
            text: "Supernöjd med min behandling och med Josefin som behandlare. Har på mindre än 2 månader blivit av med nästan all rosacea efter att testat nästan allt som går innan. Väldigt glad över min nya fina hy :)",
            signature: 'Sofia',
            stars: 5,
            logo_url: 'images/brands/trustpilot.svg'

      ),
      new Review(
            brand: 'Google',
            title: 'Jag är mycket nöjd..',
            text: "Jag är mycket nöjd med förbättringarna i min hy tack vare ansiktsbehandlingarna och produkterna. Jag ser stora framsteg och rosacean är betydligt mildare",
            signature: 'Lovisa',
            stars: 5,
            logo_url: 'images/brands/google-small.svg'

      ),
      new Review(
            brand: 'Bokadirekt',
            title: 'Rekommenderar varmt!',
            text: "Det enda som fungerat mot min rosacea med synliga resultat. Jättetrevlig och kunnig behandlare!",
            signature: 'Emily',
            stars: 5,
            logo_url: 'images/brands/bokadirekt-small.svg'
      ),

);

$review_url_label = "Läs fler omdömen";
$review_url_title = "AcneSpecialisten Omdömen";

$faq_categories = array(
      'Generellt om rosacea' => array(
            new Question(
                  title: 'Hur blir jag av med min rosacea snabbt?',
                  text: '<p class="p200">Att bli av med rosacea snabbt är en utmaning, eftersom det inte finns någon quickfix när det gäller rosacea. Effektiv behandling kräver att du tar hand om din hud genom att använda rätt behandlingar och produkter som passar din specifika hudtyp och rosacea. För att få en skräddarsydd behandlingsplan som hjälper dig att bli av med rosacean så snabbt som möjligt, rekommenderar vi att du bokar en kostnadsfri hudkonsultation hos oss. Under konsultationen kommer vi att analysera din hud och hjälpa dig att utforma en anpassad behandlingsrutin som ger dig de bästa förutsättningarna för att snabbt och effektivt behandla din rosacea.</p>'
            ),
            new Question(
                  title: 'Har jag rosacea även om jag bara har en finne?',
                  text: '<p class="p200">Ja, du har tekniskt sett rosacea även om du bara har en enstaka finne. rosacea kan ta sig många olika former och innefattar alla typer av finnar, oavsett om det är enstaka eller flera, stora eller små, papler eller pustler. Många tror att de inte har rosacea om de endast upplever enstaka finnar då och då, men faktum är att alla dessa fall kategoriseras som rosacea.</p>'
            ),
            new Question(
                  title: 'Ska jag klämma mina finnar?',
                  text: '<p class="p200">Vi på Acnespecialisten rekommenderar att du inte klämmer finnar själv, eftersom felaktig teknik kan leda till ärrbildning och förvärra inflammationen genom att införa bakterier från dina fingrar. Det är dock sant att finnar kan behöva klämmas, men det måste göras på rätt sätt för att undvika skador på huden. Om du undviker att klämma helt kan ärrbildning också uppstå, eftersom fettsyran i finnen fortsätter att fräta på huden.</p>

                        <p class="p200 mt-m">För att klämma finnar korrekt krävs både rätt utrustning och teknik. På Acnespecialisten har vi erfarna hudterapeuter som kan hjälpa dig att behandla dina finnar på ett säkert och effektivt sätt. Genom att vända dig till oss får du den expertis och omsorg du behöver för att hantera din rosacea på bästa sätt. Du kan läsa mer om våra rosaceabehandlingar och hur de kan hjälpa dig här.</p>'
            ),
            new Question(
                  title: 'Försvinner rosacean efter tonåren?',
                  text: '<p class="p200">Det är svårt att ge ett entydigt svar på den frågan eftersom det varierar från person till person. För vissa kan rosacea vara ett tonårsproblem som försvinner när de blir äldre, medan det för andra kan övergå till vuxenrosacea. Det är inte säkert att rosacean försvinner efter tonåren, och det kan variera beroende på individuella faktorer som hormoner, genetik och livsstil.</p>

                        <p class="p200 mt-m">rosacea kan uppstå i olika faser av livet och dess svårighetsgrad varierar från person till person. Vissa individer upplever rosacea under tonåren, som sedan försvinner när de når vuxen ålder. Andra kan vara rosaceafria under tonåren, men drabbas av rosacea som vuxna. Den mest besvärliga situationen är när någon drabbas av rosacea under tonåren som sedan övergår till vuxenrosacea.</p>

                        <p class="p200 mt-m">När man når vuxen ålder och rosacean fortfarande inte har försvunnit, är det stor risk att rosacean har lett till ärrbildning. Det är därför viktigt att behandla rosacea i alla åldrar för att förebygga och minimera risken för att drabbas av acneärr. Oavsett ålder och fas av rosacea, bör man söka hjälp för att behandla och kontrollera sitt tillstånd, för att minska risken för långsiktiga hudproblem som ärrbildning.</p>'
            ),
            new Question(
                  title: 'Kan jag ha rosacea även om jag är vuxen?',
                  text: '<p class="p200">Ja, rosacea kan drabba vuxna och det är faktiskt ganska vanligt. Vuxenrosacea drabbar cirka 12-22% av alla kvinnor och 3% av alla män. Den kan uppkomma vid 20-, 30- och 40-årsåldern, och ibland ännu senare. Det kallas då för vuxenrosacea och har också med hormonerna i din kropp att göra, men faktorerna som triggar igång din rosacea är lite annorlunda än vid tonårsrosacea.</p>

                        <p class="p200 mt-m">Vid tonårsrosacea ökar produktionen av det manliga könshormonet i din kropp. Det, i kombination med fettproduktionen, kan leda till att du drabbas av rosacea. Vid vuxen ålder däremot, kan rosacean bero på sådant som graviditet, menstruation, alkohol, stress och preventivmedel. Alltså, yttre faktorer som triggar igång dina hormoner och får rosacean att blomma upp.</p>

                       <p class="p200 mt-m">Vuxenrosacea kan orsakas av flera faktorer, såsom hormonella förändringar, stress, genetik och användning av olämpliga hudvårdsprodukter. Hos kvinnor kan rosacea ofta vara kopplad till menstruationscykeln eller hormonella förändringar i samband med graviditet och menopaus.</p>

                       <p class="p200 mt-m">Sammanfattningsvis kan rosacea drabba personer i alla åldrar, och det är viktigt att vara medveten om att rosacea inte bara är ett tonårsproblem.</p>'
            ),
            new Question(
                  title: 'Förvärras min rosacea av att jag äter choklad?',
                  text: '<p class="p200">Nej, det är en myt att choklad direkt skulle leda till rosacea. Ingen vetenskaplig forskning har tydligt påvisat ett direkt samband mellan chokladkonsumtion och uppkomsten av finnar. Det som potentiellt kan påverka din rosacea är stress. Om du upplever stress över att du ätit choklad, kan det i sin tur bidra till rosaceautbrott. Men en bit choklad då och då bör inte orsaka rosaceautbrott hos de flesta människor.</p>'
            ),
            new Question(
                  title: 'Vad kan jag göra för att bli av med min rosacea?',
                  text: '<p class="p200">Att bekämpa rosacea effektivt kräver en individuellt anpassad strategi som kombinerar lämpliga behandlingar och hudvårdsprodukter, utformade för att passa dina unika behov och din huds specifika tillstånd. På Acnespecialisten, erbjuder vi kostnadsfria hudkonsultationer där vi kan utvärdera ditt specifika fall av rosacea och hjälpa till att skräddarsy en effektiv behandlingsrutin.</p>'
            )
      ),
      'Behandling mot rosacea' => array(
            new Question(
                  title: 'Hur många behandlingar behövs?',
                  text: '<p class="p200">Antalet behandlingar som behövs varierar från person till person och beror på flera faktorer, som din hudtyp, svårighetsgraden av din rosacea och din respons på behandlingen. Vanligtvis kan du se en förbättring efter 1 till 3 veckors regelbunden behandling.</p>

                       <p class="p200 mt-m">Det är viktigt att påpeka att behandlingen hos oss inte fungerar i isolering. En väsentlig del av din framgång ligger i den dagliga användningen av de rekommenderade produkterna hemma. Det är kombinationen av professionell behandling och hemmavård som ger bästa möjliga resultat.</p>

                        <p class="p200 mt-m">Om du inte upplever de förväntade förbättringarna efter en tid, uppmanar vi dig att ta kontakt med din personliga hudterapeut. Tillsammans kan vi se över dina hudvårdsrutiner och de produkter du använder, för att optimera din behandlingsplan.</p>'
            ),
            new Question(
                  title: 'Finns det en risk att min rosacea återkommer?',
                  text: '<p class="p200">Ja, det finns en risk att rosacea återkommer, eftersom rosacea kan påverkas av flera faktorer såsom genetik, hormoner, livsstil och hudvård. Personer med en genetisk benägenhet för rosacea kan uppleva att rosacean återkommer, särskilt under perioder av hormonella förändringar som pubertet, graviditet eller menstruation. Även faktorer som stress, kost och användning av olämpliga hudvårdsprodukter kan bidra till att rosacean återkommer.</p>
                       
                       <p class="p200 mt-m">Det är dock viktigt att komma ihåg att regelbunden och korrekt hudvård kan hålla rosacean i schack. Precis som vi borstar tänderna varje dag för att hålla karies borta, behöver vi underhålla vår hud för att hålla rosacean borta. Det innebär att följa en anpassad hudvårdsrutin, hantera stress och upprätthålla en hälsosam livsstil. Så länge du tar hand om din hud regelbundet och på rätt sätt, kan du förhindra att rosacean återkommer.</p>'
            ),
            new Question(
                  title: 'Vilken är den bästa behandlingen mot rosacea?',
                  text: '<p class="p200">Vilken behandling som är bäst för rosacea varierar beroende på individens hudtyp, rosaceans svårighetsgrad och orsaker till rosacea. Den bästa behandlingen är en skräddarsydd behandlingsplan som kombinerar rätt behandlingar, produkter och rutiner för att effektivt ta itu med den aktiva rosacean och förhindra att nya utbrott uppstår. Genom att först behandla och bli av med den aktiva rosacean kan du uppnå en klarare hud. Därefter är det viktigt att bibehålla resultaten med lämpliga produkter och rutiner för att motverka att nya finnar uppstår och hålla rosacean under kontroll. Det rekommenderas att konsultera en av våra specialister för att få en personlig och effektiv behandlingsplan som passar just din hud och rosacea.</p>'
            ),
            new Question(
                  title: 'Gör rosaceabehandlingen ont?',
                  text: '<p class="p200">Vi strävar efter att göra rosaceabehandlingen så behaglig som möjligt för våra klienter. Det är sant att rosacea ibland innebär inflammation i porerna och kan göra ont när de öppnas upp och töms. Men vi vill påpeka att smärtupplevelsen kan variera från person till person och bero på behandlingsmetoden som används. Vår erfarna personal är välutbildad och tar stor hänsyn till din komfort under behandlingen. Om du känner någon obehag, tveka inte att informera din acnespecialist så att de kan justera behandlingen efter dina behov.</p>'
            ),
            new Question(
                  title: 'Vad ska jag tänka på innan behandlingen?',
                  text: '<p class="p200">Vi vill att din behandling ska vara så smidig och bekväm som möjligt, och vi strävar efter att göra processen enkel för dig. Du behöver inte förbereda något särskilt inför ditt besök hos oss. Kom precis som du är, och vi tar hand om resten. Vi kommer att genomföra en grundlig hudanalys och skräddarsy en behandlingsplan som passar just dig och din hudtyp. Så, du kan lita på oss och bara slappna av inför din rosaceabehandling.</p>'
            ),
            new Question(
                  title: 'Vad ska jag tänka på efter behandling?',
                  text: '<p class="p200">Efter din rosaceabehandling hos Acnespecialisten kan du uppleva att huden blir något röd och irriterad. Detta är helt normalt och en del av hudens naturliga läkningsprocess. Rödheten och irritationen kommer att avta under dagarna efter behandlingen. Det är viktigt att du fortsätter att följa den hudvårdsrutin och de produktrekommendationer vi gett dig för att stödja hudens återhämtning och maximera resultaten av behandlingen.</p>
                        
                        <p class="p200 mt-m">Undvik att peta eller klämma på behandlade områden för att undvika eventuell ärrbildning och infektion. Dessutom är det bra att skydda huden från solen, då den kan vara extra känslig efter behandling. Använd solskyddsmedel och undvik direkt solljus så mycket som möjligt. Kom ihåg att vi på Acnespecialisten alltid finns här för dig om du har några frågor eller funderingar efter din behandling.</p>'
            ),
            new Question(
                  title: 'Eftervård efter behandlingen?',
                  text: '<p class="p200">Eftervården efter en rosaceabehandling hos Acnespecialisten är lika viktig som själva behandlingen. När rosacean är utklämd och borta är det viktigt att förebygga uppkomsten av ny rosacea. Om du inte följer din eftervårdsplan kommer du att få resultat, men det kommer inte vara bestående, eftersom rosaceaproduktionen sätter igång igen kort tid efter behandlingen.</p>

                  <p class="p200 mt-m">För att hålla huden i kontroll och balans är det viktigt att följa de råd och rekommendationer vi ger dig angående hudvårdsrutin och produkter. Kontinuerlig behandling och förebyggande åtgärder är avgörande för att uppnå och bibehålla en klar och frisk hud. Kom ihåg att vi på Acnespecialisten alltid finns här för att hjälpa och stötta dig genom hela processen, både under och efter din behandling.</p>',
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till rosacea";

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
$skinguide_url_title = "Läs fler guider om rosacea";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i rosaceabehandling',
            image_title: 'Cazzandra Lindberg - Expert på rosaceabehandling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på rosacea',
            image_title: 'Veronika Benedik - Specialist inom rosaceavård'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom rosaceahantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på rosacea'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot rosaceabehandling',
            image_title: 'Vilma Libom - Expert inom rosaceabehandling'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "rosacea Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & Fläckar',
            image: 'images/problems/102x102/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter rosacea',
            image_title: 'Acneärr - en vanlig följd av rosacea',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'images/problems/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med rosacea',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med rosacea',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'rosacea runt munnen',
            image: 'images/problems/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med rosacea',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande rosacea',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);
$brands = array(
      new Brand(
            label: 'Powerlite Photonova',
            image: 'images/brands/powerlite.svg',
            image_alt: 'Powerlite Brand Logo',
            image_title: 'Powerlite - IPL och Laser Teknologi för Hudvård',
            url: 'varumarken/powerlite-photonova',
            url_title: 'Läs mer om Powerlite IPL och Laser Hudvårdsteknologi'
      ),
      new Brand(
            label: 'Dermapen',
            image: 'images/brands/dermapen4.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: 'dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'CryoPen',
            image: 'images/brands/cryopen.svg',
            image_alt: 'CryoPen Brand Logo',
            image_title: 'CryoPen - Kryoterapi Verktyg för Hudbehandlingar',
            url: 'cryopen.php',
            url_title: 'Läs mer om CryoPen Kryoterapi Hudbehandlingar',
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
            image: 'images/brands/prx-t33.svg',
            image_alt: 'PRX-T33 Brand Logo',
            image_title: 'PRX-T33 - Bio-revitaliserande Hudbehandlingsteknik',
            url: 'prx-t33.php',
            url_title: 'Läs mer om PRX-T33 Bio-revitaliserande Hudbehandlingar',
      ),
      new Brand(
            label: 'Hydrafacial',
            image: 'images/brands/hydrafacial.svg',
            image_alt: 'Hydrafacial Brand Logo',
            image_title: 'Hydrafacial - Intensiv Hydrering och Rengöring Behandlingar för Hudvård',
            url: 'hydrafacial.php',
            url_title: 'Läs mer om Hydrafacial Hudvårdsbehandlingar',
      ),
      new Brand(
            label: 'Infuzion',
            image: 'images/brands/ipinfusion.svg',
            image_alt: 'Infuzion Brand Logo',
            image_title: 'Infuzion - Hudföryngring och Näringsinfusion System för Hudvård',
            url: 'infuzion.php',
            url_title: 'Läs mer om Infuzion Hudföryngringslösningar'
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för rosaceabehandling";

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
                                          <div class="mt-m"><?php echo $floating_box ?></div>
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
                          <h2 class="h500"><?php echo $description_title ?></h2>
                          <div class="mt-xl"><?php echo $description_text ?></div>
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

                        <?php foreach ($top_articles as $id => $article) { ?>
                          <section id="<?php echo $id ?>">
                              <?php
                              include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                              ?>
                          </section>
                      <?php } ?>

                        <section id="articles">
                              <?php foreach ($articles as $article) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php'); ?>
                              <?php } ?>
                        </section>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>