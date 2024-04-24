<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('../widgets/problem-trivia-card/problem-trivia.php');
include_once('../widgets/symptom-card/symptom.php');
include_once('../widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är oönskat hår? - Symptom, orsak och behandling';
$seo_description = 'Här hittar du allt om oönskat hår och hur man blir av med det. Boka in en kostnadsfri konsultation där vi tar fram en personlig behandlingsplan.';
$seo_keywords = 'oönskat hår, orsaker till oönskat hår, förebygga oönskat hår, ta bort oönskat hår';

$seo_image = '/bilder/hudproblem/424x456/oonskat-har.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem'),
      new PathSegment('Oönskat Hår', '/hudproblem/oonskat-har'),
);

$title = 'Oönskat Hår';

$image_small = 'bilder/hudproblem/424x324/oonskat-har.webp';
$image_large = 'bilder/hudproblem/424x456/oonskat-har.webp';
$image_title = 'Visar en hud med oönskat hår';
$image_alt = 'Bild som illustrerar hur oönskat hår ser ut på huden';
$description = 'Oönskat hår kan påverka olika delar av kroppen och ansiktet. Denna sida utforskar de underliggande orsakerna till oönskad hårväxt och de olika metoder som finns tillgängliga för hårborttagning.';

$consultation_url_label = "Boka gratis konsultation";
$consultation_url = "https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval";
$consultation_url_title = "Gratis Konsultation för Oönskat Hår";

$booking_url_label = "Boka behandling";
$booking_url = "https://acnespecialisten.se/book?flow=permanent_harborttagning";
$booking_url_title = "Boka Behandling för Oönskat Hår";

$mobile_consultation_url_label = "Gratis konsultation";
$mobile_consultation_url_title = "Gratis Konsultation för Oönskat Hår";

$mobile_booking_url_label = "Boka behandling";
$mobile_booking_url_title = "Boka Behandling för Oönskat Hår";

$floating_consultation_url_label = "Boka gratis konsultation";
$floating_consultation_url_title = "Gratis Konsultation för Oönskat Hår";

$floating_booking_url_label = "Boka behandling";
$floating_booking_url_title = "Boka Behandling för Oönskat Hår";

$nav_buttons = array(
      'about' => 'Om oönskat hår',
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
      'specialists' => 'Hudterapeuter',
);

$about_title = 'Om oönskat hår';

$trivias = array(
      new ProblemTrivia(
            prefix: 'Vad',
            title: 'är oönskat hår?',
            content: '<p class="p200">Oönskat hår är oftast normal, kliniskt känt som hirsutism, avser normal eller överdriven hårväxt på kroppen som individen upplever som onödig eller icke önskvärd. Alla människor har kroppshår, men om mängden, tjockleken, längden eller placeringen av håret avviker från vad som personligen uppfattas som normalt, betraktas det som "oönskat". Det kan variera i textur från mjukt och fjunigt till grovt och tjockt, och i färg från ljust och nästan osynligt till mörkt och framträdande. Även om det kan dyka upp på områden där hår normalt växer, som på ben, armar och underarmar, kan det också uppstå på ställen där hår inte alltid förväntas, såsom på ansiktet, ryggen eller bröstet.</p>',
            extended_content: '<p class="p200 mt-xl">Beroende på individens situation kan uppfattningen om vad som betraktas som oönskat hår variera kraftigt. Denna subjektiva uppfattning av hårväxt har lett till en mångfald av metoder och behandlingar, från rakning och vaxning till mer permanenta lösningar som laser, för att hantera problemet med oönskat hår.</p>',
            icons: array()
      ),
      new ProblemTrivia(
            prefix: 'Varför',
            title: 'får man oönskat hår?',
            content: '<p class="p200">Oönskat hår uppstår av en mängd olika skäl, både genetiska och hormonella (PCOS). Hårväxt regleras till stor del av hormoner. När en ökning av hormoner inträffar, kan detta resultera i överdriven hårväxt, särskilt på kroppens delar där män vanligtvis har hår, som ansiktet och bröstet. En annan bidragande faktor kan vara genetik vilket orsakar att vissa får tjockare och mörkare kroppshår. Detta betyder inte nödvändigtvis att dessa individer har en hormonell obalans, utan snarare en genetisk benägenhet för sådan hårväxt.</p>',
            extended_content: '<p class="p200 mt-xl">Förändringar i hormonnivåerna, som kan inträffa under graviditet, klimakteriet, PCOS, eller till följd av vissa mediciner, kan också leda till tillfällig överdriven hårväxt. I andra fall kan sjukdomar i binjurarna eller hypofysen, som producerar hormoner, vara orsaken. Utöver detta kan vissa mediciner, inklusive vissa steroider, antikonvulsiva medel och vissa mediciner för högt blodtryck, förorsaka överdriven hårväxt som en biverkning. Även vissa kosmetiska produkter, särskilt de som innehåller hormoner, kan påverka hårväxten. Det är viktigt att förstå att medan alla människor har kroppshår, varierar mängden, textur och färg beroende på en kombination av genetik, hormonella nivåer och andra faktorer.</p>',
            icons: array('genetik' => 'Genetik', 'hormoner' => 'Hormoner')
      ),
      new ProblemTrivia(
            prefix: 'Vem',
            title: 'får oönskat hår?',
            content: '<p class="p200">Oönskat hår kan drabba människor av alla kön och åldrar, men förekomsten och intensiteten av denna hårväxt kan variera beroende på flera faktorer. Till att börja med är genetik en av de främsta orsakerna. Människor med familjemedlemmar som har kraftigare hårväxt kan vara mer benägna att uppleva detta själva. Hormonella förändringar spelar också en avgörande roll i utvecklingen av oönskat hår. Kvinnor kan uppleva överdriven hårväxt på platser där män vanligtvis har hår, som ansiktet, bröstet och ryggen. Hormonella förändringar under graviditet, klimakteriet eller på grund av medicinsk behandling kan även påverka hårväxt. När östrogennivåerna sjunker och påverkan av manliga hormoner kan bli mer framträdande.</p>',
            extended_content: '<p class="p200 mt-xl">Män kan också påverkas. Till exempel kan män som tar vissa mediciner eller har vissa medicinska tillstånd uppleva ökad hårväxt på oväntade ställen. Det är också viktigt att notera att begreppet "oönskat hår" är kulturellt och individuellt bestämt. Vad som anses vara "oönskat" i en kultur eller för en individ kan anses vara attraktivt eller önskvärt i en annan. Med det sagt, oavsett normer, är det viktigt för individer att förstå att de inte är ensamma om att hantera denna fråga, och det finns många behandlingsalternativ tillgängliga för dem som vill minska eller ta bort oönskat hår.</p>',

            icons: array('man-kvinna' => 'Män & Kvinnor', 'vuxna' => 'Vuxna')
      ),
      new ProblemTrivia(
            prefix: 'Var',
            title: 'får man oönskat hår?',
            content: '<p class="p200">Oönskat hår kan växa på nästan vilken del av kroppen som helst. Ett av de vanligaste områdena där kvinnor upplever oönskat hår är ansiktet. Detta omfattar överläppen, kinderna, hakan och området mellan näsan. Kvinnor som genomgår hormonella förändringar kan märka en markant ökning av hårväxt i dessa områden.</p>',
            extended_content: '<p class="p200 mt-xl">På kroppen upplever både män och kvinnor oönskat hår i områden som underarmarna, benen, armarna och ryggen. Bröst och mage är också vanliga områden där oönskat hår kan uppstå. Bikiniområdet är en annan plats där många kvinnor upplever ökad hårväxt, särskilt runt bikinilinjen. Denna ökade hårväxt kan vara särskilt problematisk under sommarmånaderna eller när man bär badkläder.</p>
            <p class="p200 mt-xl">Likaså kan hårväxt på intima områden som runt vagina och anus upplevas som oönskad av många. Denna typ av hårväxt är helt naturlig och varierar i omfattning, tjocklek och färg från person till person. Hårväxt i dessa områden tjänar biologiska syften, bland annat att skydda de känsliga områdena mot friktion och infektioner. Trots dess naturliga funktion, väljer många att ta bort håret i dessa områden för estetiska skäl eller för en känsla av renhet och komfort.</p>
            <p class="p200 mt-xl">Även om det kan verka mindre vanligt, finns det människor som upplever hårväxt på ovansidan av sina händer och fötter. Dessutom kan hormonella obalanser, genetik och vissa medicinska tillstånd orsaka att hår växer på oväntade platser, såsom inuti öronen, inuti näsan eller till och med på pannan. Oavsett var på kroppen det oönskade håret växer, varierar dess tjocklek och färg. Medan några kan ha tunt, ljust hår som är knappt märkbart, kan andra ha tjockt, mörkt hår som är mycket synligt.</p>',
            icons: array('ansikte' => 'Ansiktet', 'kropp' => 'Kroppen')
      ),
);

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten får du träffa en expert inom hårbortagning som hjälper dig identifiera ditt behov av laserbehandling för oönskat hår och skapar en individuell behandlingsplan.',

            url_label: 'Boka gratis konsultation',
            url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
            url_title: 'Boka din kostnadsfria konsultation för laserbehandling idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför effektiva laserbehandlingar för permanent hårborttagning, anpassade för din hårtyp och hudton, så att du på ett säkert sätt kan bli av med ditt oönskade hår.',

            url_label: 'Se laserbehandlingar för hårborttagning',
            url: 'permanent-harborttagning.php',
            url_title: 'Utforska våra skräddarsydda laserbehandlingar för permanent hårborttagning'
      ),
);

$treatment_link = '<a href="permanent-harborttagning.php" title="Utforska effektiva laser mot oönskat hår" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar mot oönskat hår</a>';

$headline01 = "01. Identifiera ditt oönskade hår";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Vid ett personligt möte med en hårborttagningsspecialist utförs en undersökning av ditt oönskade hår. Vi rekommenderar en lämplig laserbehandling, samt skräddarsyr en behandlingsplan anpassad efter dina behov.',

      image_small: 'images/services/200x200/konsultation.webp',
      image_large: 'images/services/200x200/konsultation.webp',
      image_alt: 'Bild av en konsultation för hårborttagning med laser',
      image_title: 'Konsultation för hårborttagning med laser',

      url_label: 'Läs mer om gratis konsultation mot oönskat hår',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot oönskat hår',

      consultation_url_label: 'Boka konsultation',
      consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
      consultation_url_title: 'Klicka för att boka tid för en konsultation för hårborttagning',

      booking_url_label: null,
      booking_url: null,
      booking_url_title: null,
);

$headline02 = "02. Behandla oönskat hår";

$services = array(
      new Service(
            title: 'Laser för hårborttagning',
            duration: '50 min',
            price: '2595 kr',
            content: 'Avancerad laserbehandling för hårborttagning erbjuder en effektiv lösning för att ta bort oönskat hår permanent. Lasertekniken riktar sig mot hårstråets melanin, vilket förstör hårsäcken och förhindrar framtida hårväxt.',

            image_small: 'images/services/200x200/permanent-harborttagning.webp',
            image_large: 'images/services/200x200/permanent-harborttagning.webp',
            image_alt: 'Bild av laserbehandling för hårborttagning',
            image_title: 'Laserbehandling för hårborttagning',

            url_label: 'Läs mer om laser mot oönskat hår',
            url: '/permanent-harborttagning.php',
            url_title: 'Läs mer om laser mot oönskat hår',

            consultation_url_label: 'Boka konsultation',
            consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
            consultation_url_title: 'Klicka för att boka tid för en konsultation för laserbehandling för hårborttagning',

            booking_url_label: 'Boka behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning',
            booking_url_title: 'Klicka för att boka tid för en laserbehandling för hårborttagning'
      )
);


$articles = array(
      new Article(
            title: 'När bör du söka hjälp för oönskat hår?',
            image_small: null,
            image_large: null,
            image_alt: 'När bör du söka hjälp för oönskat hår?',
            image_title: 'När bör du söka hjälp för oönskat hår?',
            content: '<p class="p200">Att bli av med oönskad hårväxt kan vara en utmaning som påverkar självkänslan negativt. Många förlitar sig på tillfälliga lösningar som rakning eller vaxning, vilka ofta leder till återkommande besvär och hudirritation. För de som söker en mer permanent lösning på problemet med oönskad hårväxt, erbjuds professionella behandlingar som laser som effektivt tar bort håret. Denna teknik inaktiverar hårfolliklarna med ljusenergi, vilket stoppar hårets återväxt och ger ett bestående resultat.</p>
            <p class="p200 mt-m">Att välja professionell hjälp för att ta itu med oönskat hår är ett viktigt steg mot förbättrad självbild och välbefinnande. Laserhårborttagning är inte bara en investering i ditt utseende utan även i din livskvalitet, genom att erbjuda en hållbar lösning på ett vanligt estetiskt bekymmer. Det är avgörande att välja en erfaren specialist som kan erbjuda skräddarsydda behandlingar för din unika situation, vilket säkerställer optimala och tillfredsställande resultat.</p>',
      ),
      new Article(
            title: 'Varför välja AcneSpecialisten för behandling av oönskat hår?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför välja AcneSpecialisten för behandling av oönskat hår?',
            image_title: 'Varför välja AcneSpecialisten för behandling av oönskat hår?',
            content: '<p class="p200">AcneSpecialisten är en pålitlig partner när det kommer till behandling av oönskat hår. Vår erfarenhet och användning av de senaste teknologierna inom hårborttagning för att du ska få både effektiva och säkra behandlingar. Vårt team av experter skräddarsyr behandlingen efter dina individuella hår och hudtyp, för att säkerställa bästa möjliga resultat. Hos oss får du tillgång till toppmodern behandling med personlig service och uppföljning. Vi är engagerade i att hjälpa dig uppnå en slät och hårfri hud på det sätt som passar dig bäst.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="acne.php" title="Akne">Akne</a>',
            )
      ),
      new ResultCustomer(
            image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
            image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
            image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
            image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
            image_before_alt: 'Före',
            image_before_title: 'Före',
            image_after_alt: 'Efter',
            image_after_title: 'Efter',
            treatment: new ResultTreatment(
                  duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            )
      ),
);

$show_all_results_label = "Se fler resultat";
$show_all_results_title = "se flera behandlingsresultat";


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
      'Generellt om oönskat hår' => array(
            new Question(
                  title: 'Vad är oönskat hår och varför uppstår det?',
                  text: '<p class="p200">Oönskat hår är allt hår på kroppen som inte är önsksvärt, som kan uppstå av olika anledningar som genetik, hormonella obalanser eller vissa medicinska tillstånd. Det kan visa sig på olika delar av kroppen där man normalt inte önskar hårväxt, som ansiktet, bröstet, eller ryggen.</p>'
            ),
            new Question(
                  title: 'Vilka är de mest effektiva professionella behandlingarna för att permanent minska oönskat hår?',
                  text: '<p class="p200">Professionella behandlingar som laserhårborttagning har visat sig vara effektiva för permanent hårborttagning. Dessa metoder måste utföras av certifierade specialister och kräver flera behandlingar för bästa resultat.</p>'
            ),
            new Question(
                  title: 'Är laserhårborttagning säker för alla hudtyper?',
                  text: '<p class="p200">Laserhårborttagning är säker för de flesta hudtyper, men det är viktigt att konsultera med en specialist för att bestämma den bästa typen av laser för din hudton och hårfärg. Vissa lasrar är mer lämpade för ljusare hud med mörkt hår, medan andra är säkrare för mörkare hudtyper. På AcneSpecialisten har vi de senaste maskinerna som passar alla hudtoner och hårfärger som går att behandla.</p>'
            ),
            new Question(
                  title: 'Kan oönskat hår orsaka hudproblem?',
                  text: '<p class="p200">Oönskat hår i sig orsakar sällan hudproblem, men de metoder som används för att ta bort det kan ibland leda till hudirritation, inåtväxande hår, och andra hudåkommor. Genom att behandla hårväxten med laser kan vi få bort den utan att orsaka dessa bieffekter.</p>'
            ),
            new Question(
                  title: 'Hur viktig är eftervård efter hårborttagningsbehandling?',
                  text: '<p class="p200">Eftervård är mycket viktig för att minimera risken för biverkningar och maximera behandlingens effektivitet. Det kan innebära att undvika solen, applicera lugnande krämer eller geler, och undvika vissa hudvårdsprodukter eller aktiviteter som kan irritera behandlade områden.</p>'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat";

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
$skinguide_url_title = "Läs fler guider";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling mot oönskat hår',
            image_title: 'Cazzandra Lindberg - Expert på oönskat hår'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på oönskat hår',
            image_title: 'Veronika Benedik - Specialist inom oönskat hår'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom oönskat hårhantering',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på oönskat hår'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot oönskat hårbehandling',
            image_title: 'Vilma Libom - Expert inom oönskat hårbehandling'
      )
);

$specialist_url_label = "Se alla hudterapeuter";
$specialist_url_title = "Specialiserade Hudterapeuter";

$brands = array(
      new Brand(
            label: 'Splendor X',
            image: 'bilder/logotyper/splendor-x.png',
            image_alt: 'Splendor X logotyp',
            image_title: 'Splendor X - Permanent hårborttagning med laser',
            url: '/varumarken/splendor-x',
            url_title: 'Splendor X',
      ),
      new Brand(
            label: 'Soprano Ice',
            image: 'bilder/logotyper/soprano-ice.png',
            image_alt: 'Soprano Ice logotyp',
            image_title: 'Soprano Ice - Permanent hårborttagning med laser',
            url: '/varumarken/alma/soprano-ice',
            url_title: 'Soprano Ice',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för oönskat hår";

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
      <link rel="stylesheet" href="hudproblem/problem.css">
      <script src="hudproblem/widgets/problem-trivia-card/problem-trivia-card.js"></script>
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
                              <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="/hudterapeut"><?php echo $specialist_url_label ?></a>
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