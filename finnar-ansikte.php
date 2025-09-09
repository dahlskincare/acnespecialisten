<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Finnar i ansiktet | AcneSpecialisten';
$seo_description = 'Läs mer om finnar i ansiktet & AcneSpecialistens behandlingar mot finnar. Boka en gratis hudkonsultation →';
$seo_keywords = 'finnar i ansiktet';
$seo_image = 'bilder/hudproblem/424x456/finnar-ansikte.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Finnar Ansikte', '/finnar-ansikte.php'),
);

$image_small = 'bilder/hudproblem/358x274/finnar-ansikte.webp';
$image_large = 'bilder/hudproblem/424x456/finnar-ansikte.webp';
$image_title = 'Visar en hud med finnar i ansiktet';
$image_alt = 'Bild som visar hudproblem med finnar i ansiktet';

$green_banner_content = new GreenBannerContent(
      title: 'Finnar i ansiktet',
      description: 'Finnar i ansiktet orsakas ofta av hormonella förändringar, stress och andra faktorer. AcneSpecialisten erbjuder målinriktade behandlingar för att effektivt hantera detta hudtillstånd. Vi delar även skräddarsydda hudvårdsråd för alla åldersgrupper, vilket hjälper dig att uppnå en klarare hud.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple', 'Boka gratis konsultation'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Finnar',
                  url: 'finnar.php',
                  title: 'Allt du behöver veta om finnar och deras behandling'
            ),
            new Link(
                  label: 'Vuxenfinnar',
                  url: 'vuxenacne.php',
                  title: 'Utforska orsaker, symptom och behandlingar av vuxenfinnar'
            ),
            new Link(
                  label: 'Tonårsfinnar',
                  url: 'tonarsacne.php',
                  title: 'Komplett guide om tonårsfinnar: orsaker, förebyggande och lösningar'
            ),
      ]
);

$floating_box = 'Behandla dina finnar i ansiktet effektivt.';

$description_title = 'Orsaker och Behandlingar';
$description_text = '<p class="p200">Finnar i ansiktet drabbar inte bara tonåringar utan även individer i alla åldrar, ofta påverkade av hormonella förändringar, stress och livsstil. På AcneSpecialisten fokuserar vi på att noggrant rengöra och balansera huden med metoder anpassade för olika hudtyper. Vi erbjuder ett brett utbud av behandlingar som effektivt bekämpar finnar och är skonsamma mot huden.</p>

<p class="p200 mt-m">Vår expertis på AcneSpecialisten innefattar skräddarsydda hudvårdsprogram som möter de unika behoven hos varje individ. Från precisa rengöringsstrategier till specialanpassade behandlingar som vårdar och lugnar, våra hudterapeuter har den kunskap och erfarenhet som krävs för att erbjuda effektiv och skonsam vård för alla typer av hudproblem.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Hos AcneSpecialisten blir du kopplad till en personlig hudterapeut som hjälper dig identifiera dina finnar och skapar en individuell behandlingsplan.',
            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
            url_title: 'Boka din kostnadsfria hudkonsultation idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Vi utför grundliga och effektiva behandlingar anpassade för dina specifika problem, så att du snabbt och säkert blir av med finnarna.',
            url_label: 'Se finnarbehandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples',
            url_title: 'Utforska våra skräddarsydda behandlingar'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'Vi hjälper dig att hitta en hudvårdsrutin och produkter som passar din hudtyp för att förebygga nya finnar och hålla din hud i balans.',
            url_label: 'Se produkter',
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
            url_title: 'Hitta de bästa produkterna för att förebygga finnar'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När finnarna är borta fokuserar vi på att reducera eventuella ärr med behandlingsmetoder som laser, microneedling och kemisk peeling för en jämn och problemfri hud.',
            url_label: 'Se behandlingar',
            url: 'behandla-finnar-arr.php',
            url_title: 'Upptäck effektiva behandlingar för ärr från finnar'
      ),
);

$treatment_link = '<a href="finnar-behandling.php" title="Utforska effektiva abehandlingar mot finnar i ansiktet" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlinga</a>';

$top_articles = array(
      'areas' => new Article(
            title: 'Varför uppstår hudproblemet?',
            image_small: null,
            image_large: null,
            image_alt: '',
            image_title: '',
            content: '<p class="p200">Finnar i ansiktet kan ofta uppstå som ett resultat av flera samverkande faktorer. Hormonella förändringar kan orsaka en ökad produktion av talg, vilket i sin tur kan leda till tilltäppta porer. Stress är en annan bidragande faktor som kan förvärra tillståndet. Även om finnar främst uppträder i ansiktet, är det inte ovanligt att de även dyker upp på andra delar av kroppen som rygg och bröst. På AcneSpecialisten lägger vi stor vikt vid att förstå din unika hudtyp och dess behov, för att kunna erbjuda de mest effektiva behandlingsalternativen för finnar i ansiktet.</p>
            <p class="p200 mt-m">Att hantera finnar i ansiktet kräver en hudvårdsrutin som är anpassad till de specifika kraven som finnar i ansiktet har. Det är viktigt att välja hudvårdsprodukter som är både skonsamma och effektiva, för att minska irritation samtidigt som hudens naturliga balans stöds. På AcneSpecialisten finns våra erfarna hudterapeuter redo att ge personliga råd och rekommendationer för att skapa en hudvårdsrutin som främjar en frisk och balanserad hud för ansiktet.</p>',
      ),
);


$headline01 = "01. Identifiera";

$service = new Service(
      title: 'Konsultation',
      duration: '20 min',
      price: 'Kostnadsfri',
      content: 'Möt en expert för en individuell konsultation och detaljerad analys av ditt hudproblem. Vi tar bilder för att jämföra resultat och rekommenderar en anpassad behandlingsplan.',
      image_small: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_large: 'bilder/hudbehandlingar/200x200/konsultation.webp',
      image_alt: 'Bild som visar en konsultation för finnar',
      image_title: 'Konsultation för finnbehandling',
      consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
      consultation_url_label: 'Boka konsultation',
      consultation_url_title: 'Klicka här för att boka en tid för en konsultation om finnar',
      booking_url: null,
      booking_url_label: null,
      booking_url_title: null,
      url_label: 'Läs mer om gratis hudkonsultation',
      url: 'gratis-hudkonsultation.php',
      url_title: 'Läs mer om gratis hudkonsultation mot finnar',

);

$headline02 = "02. Behandla";

$services = array(
      new Service(
            title: 'Ansiktsbehandling mot finnar',
            duration: '60 min',
            price: '1295 kr',
            content: 'Effektiv lösning för att klämma finnar utan att orsaka ärr, detta genom att noggrant framtagen för att extrahera orenheter som orsakar inflammation och skador på huden. Genom att varsamt ta bort finnar kan behandlingen hjälpa till att förebygga ärrbildning och främja snabbare läkning.',
            image_small: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/ansiktsbehandling.webp',
            image_alt: 'Bild av en ansiktsbehandling mot finnar',
            image_title: 'Ansiktsbehandling mot finnar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Comedones_Pimple',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för ansiktsbehandling mot finnar',
            booking_url: 'https://boka.acnespecialisten.se?flow=facialProblem&problem=Problem_Pimples',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en ansiktsbehandling mot finnar',
            url_label: 'Läs mer om ansiktsbehandling',
            url: '/portomning.php',
            url_title: 'Läs mer om ansiktsbehandling mot finnar',
      ),
      new Service(
            title: 'Laserbehandling mot finnar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Avancerade laserteknik! Genom att rikta sig mot bakterier som orsakar inflammation, minskar denna behandling risken för framtida utbrott och hjälper till att ge dig en jämnare och klarare hud.',
            image_small: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_large: 'bilder/hudbehandlingar/200x200/laser.webp',
            image_alt: 'Bild av laserbehandling mot finnar',
            image_title: 'Laserbehandling mot finnar för en klarare hud',
            consultation_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Pimples&method=Method_LaserProblem',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka här för att boka tid för en hudkonsultation för laserbehandling mot finnar',
            booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka här för att boka tid för en laserbehandling mot finnar',
            url: '/hudbehandlingar/laser-mot-hudproblem/',
            url_label: 'Läs mer om laser',
            url_title: 'Läs mer om laser mot finnar',
      ),
      new Service(
            title: 'Kemisk peeling mot finnar',
            duration: '30 min',
            price: '1595 kr',
            content: 'Effektiv metod för att behandla finnar. Genom att använda en speciellt framtagen syra för att exfoliera huden, främjar kemisk peeling cellförnyelse, rensar tilltäppta porer och minskar inflammation.',
            image_small: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
            image_alt: 'Bild av kemisk peeling mot finnar',
            image_title: 'Kemisk peeling mot finnar behandling',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_ChemicalPeeling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för kemisk peeling mot finnar',
            booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en kemisk peeling mot finnar behandling',
            url: '/kemisk-peeling.php',
            url_label: 'Läs mer om kemisk peeling',
            url_title: 'Läs mer om kemisk peeling mot finnar',
      ),

      new Service(
            title: 'Microneedling mot finnar',
            duration: '50 min',
            price: '2595 kr',
            content: 'Effektiv behandlingsmetod. Genom att skapa små mikroskopiska kanaler i huden, främjar denna behandling hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Metoden kan effektivt minska utbrott av finnar, förbättra hudens struktur och minska synligheten av ärr orsakade av finnar.',
            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Bild av microneedling mot finnar',
            image_title: 'Microneedling mot finnar',
            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Microneedling',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot finnar',
            booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=SKIP',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot finnar',
            url: '/microneedling.php',
            url_label: 'Läs mer om microneedling',
            url_title: 'Läs mer om microneedling mot finnar',
      )


);

$headline03 = "03. Förebygg";

$products = array(
      new Service(
            title: 'Produkter mot finnar',
            duration: null,
            price: 'Från 1495 kr',
            content: 'Att effektivt behandla huden kräver regelbunden användning av de rätta produkterna. Våra hudvårdsprodukter har specialutformats för att balansera din hud och motverka uppkomsten av nya finnar.',
            image_small: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_large: 'bilder/hudbehandlingar/200x200/produkter.webp',
            image_alt: 'Bild av produkter designade för behandling av finnar',
            image_title: 'Effektiva produkter för bekämpning och förebyggande av finnar',
            consultation_url: null,
            consultation_url_label: null,
            consultation_url_title: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
            url: 'https://dahlskincare.se/produktkategorier/produktpaket/finnar',
            url_label: 'Läs mer om produkterna',
            url_title: 'Klicka här för att läsa mer om våra effektiva produkter mot finnar'
      )
);


$headline04 = "04. Reparera";

$procedures = array(
      new Service(
            title: 'Reparera ärr efter finnar',
            duration: '4 behandlingsmetoder',
            price: null,
            content: 'Ärr kan uppstå i form av gropar och fläckar på huden där finnarna tidigare varit. Dessa ärr kan vara i olika former och färger, och behandlas med olika metoder.',
            image_small: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_large: 'bilder/hudbehandlingar/200x200/microneedling.webp',
            image_alt: 'Reparera ärr efter finnar',
            image_title: 'Reparera ärr efter finnar',

            consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne_Scars',
            consultation_url_label: 'Boka konsultation',
            consultation_url_title: 'Klicka för att boka tid för en hudkonsultation för microneedling mot ärr från finnar',

            booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_PimpleScars',
            booking_url_label: 'Boka behandling',
            booking_url_title: 'Klicka för att boka tid för en microneedling mot ärr från finnar',

            url: 'behandla-finnar-arr.php',
            url_label: 'Läs mer om behandlingar',
            url_title: 'Klicka här för att läsa mer om våra behandlingar mot ärr från finnar'
      ),

);



$articles = array(
      new Article(
            title: 'När ska jag söka hjälp?',
            image_small: null,
            image_large: null,
            image_alt: 'När ska jag söka hjälp för finnar i ansiktet?',
            image_title: 'När ska jag söka hjälp för finnar i ansiktet?',
            content: '<p class="p200">finnar i ansiktet kan vara mer än bara ett kosmetiskt problem – de kan också vara en källa till fysisk och emotionell stress. Om du märker att dina finnar är ihållande eller blir värre är det dags att överväga professionell hjälp. Att hantera finnarna tidigt är avgörande för att minska risken för ärrbildning och andra långsiktiga effekter på huden. Professionell rådgivning kan inte bara hjälpa till att behandla befintliga utbrott, utan också ge insikt i förebyggande åtgärder och skräddarsydda hudvårdsrutiner.</p>',
      ),

      new Article(
            title: 'Varför ska jag välja AcneSpecialisten?',
            image_small: null,
            image_large: null,
            image_alt: 'Varför ska jag välja AcneSpecialisten för finnar i ansiktet?',
            image_title: 'Varför ska jag välja AcneSpecialisten för finnar i ansiktet?',
            content: '<p class="p200">Vi på AcneSpecialisten har behandlat finnar i ansiktet i över 30 års erfarenhet. Vår unika expertis i hudens komplexitet ger oss möjligheten att erbjuda skräddarsydda behandlingsmetoder.</p>
            <p class="p200 mt-m">På AcneSpecialisten skapar vi en personligt anpassad behandlingsplan för varje kund. Vi engagerar oss inte endast i att lindra dina nuvarande hudproblem, utan också i att undervisa dig i hur du kan bevara en långsiktigt problemfri. Vårt engagemang och vår expertis gör oss till det uppenbara valet för den som söker en varaktig lösning på problem med finnar i ansiktet, och vårt mål är att du ska känna dig trygg och nöjd med din hudvård.</p>',
      ),
);

$results = array(
      new ResultCustomer(
            url: '',
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-1.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-1.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-1.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-1.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-2.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-2.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-2.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-2.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-3.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-3.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-3.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-3.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-4.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-4.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-4.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-4.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-5.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-5.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-5.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-5.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-6.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-6.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-6.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-6.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-7.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-7.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-7.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-7.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-8.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-8.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-8.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-8.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-9.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-9.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-9.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-9.jpg',
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
            image_before_small: '/bilder/resultat/acne/resultat-acne-fore-10.jpg',
            image_after_small: '/bilder/resultat/acne/resultat-acne-efter-10.jpg',
            image_before_large: '/bilder/resultat/acne/resultat-acne-fore-10.jpg',
            image_after_large: '/bilder/resultat/acne/resultat-acne-efter-10.jpg',
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
$show_all_results_title = "se flera behandlingsresultat";

$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg hudterapeut',
            image_title: 'Cazzandra Lindberg - Hudterapeut'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik hudterapeut',
            image_title: 'Veronika Benedik - Hudterapeut'
      ),
      new Specialist(
            name: 'Julia Eklund',
            title: 'Hudterapeut sedan 2017',
            image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
            image_alt: 'Julia Eklund hudterapeut',
            image_title: 'Julia Eklund - Hudterapeut'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom hudterapeut',
            image_title: 'Vilma Libom - Hudterapeut'
      )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$related_problems = array(
      new RelatedProblem(
            name: 'Acneärr',
            aka: 'gropar & fläckar',
            image: 'bilder/hudproblem/200x200/acnearr.webp',
            image_alt: 'Bild som visar acneärr, en typ av hudproblem som ofta följer efter akne',
            image_title: 'Acneärr - en vanlig följd av akne',
            url: 'acnearr.php',
            url_title: 'Acneärr'
      ),
      new RelatedProblem(
            name: 'Rosacea',
            aka: 'ansiktsrodnad',
            image: 'bilder/hudproblem/200x200/rosacea.webp',
            image_alt: 'Bild som illustrerar rosacea, ett hudtillstånd som kan förväxlas med akne',
            image_title: 'Rosacea - en hudsjukdom som ofta förväxlas med akne',
            url: 'rosacea.php',
            url_title: 'Rosacea'
      ),
      new RelatedProblem(
            name: 'Perioral dermatit',
            aka: 'akne runt munnen',
            image: 'bilder/hudproblem/200x200/perioral-dermatit.webp',
            image_alt: 'Bild som skildrar perioral dermatit, en hudåkomma som kan förväxlas med akne',
            image_title: 'Perioral dermatit (acne runt munnen) ett hudproblem liknande akne',
            url: 'perioral-dermatit.php',
            url_title: 'Perioral dermatit',
      ),
);

$brands = array(
      new Brand(
            label: 'DAHL Skincare',
            image: 'bilder/logotyper/dahl-skincare.webp',
            image_alt: 'DAHL Skincare logotyp',
            image_title: 'DAHL Skincare - hudvårdsprodukter',
            url: 'https://dahlskincare.se',
            url_title: 'DAHL Skincare',
      ),
      new Brand(
            label: 'Alma Hybrid',
            image: 'bilder/logotyper/alma-hybrid.svg',
            image_title: 'Alma Hybrid - CO2 laser',
            image_alt: 'Alma Hybrid logotyp',
            url: '/alma-hybrid-co2-laser.php',
            url_title: 'Läs mer om Alma Hybrid CO2 laser',
      ),
      new Brand(
            label: 'Harmony XL Pro',
            image: 'bilder/logotyper/harmony-xl-pro.png',
            image_title: 'Harmony XL Pro - Laser & IPL',
            image_alt: 'Harmony XL Pro logotyp',
            url: '/alma-harmony-xl-pro.php',
            url_title: 'Läs mer om Harmony XL Pro Laser & IPL',
      ),
      new Brand(
            label: 'Dermapen',
            image: 'bilder/logotyper/dermapen.svg',
            image_alt: 'Dermapen Brand Logo',
            image_title: 'Dermapen - Microneedling Verktyg för Hudföryngring',
            url: '/dermapen.php',
            url_title: 'Läs mer om Dermapen Microneedling Hudvårdslösningar',
      ),
      new Brand(
            label: 'Skin Tech',
            image: 'bilder/logotyper/skin-tech.svg',
            image_title: 'Skin Tech - Professionella kemiska peelingar',
            image_alt: 'Skin Tech logotyp',
            url: '/varumarken/skin-tech/',
            url_title: 'Läs mer om Skin Techs kemiska peelingar',
      ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/finnar-ansikte.php" />

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
                        <section id="products">
                              <h2 class="h500"><?php echo $headline03 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($products as $scm) { ?>
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php'); ?>
                                    <hr class="is-hidden-mobile mb-xxl">
                              <?php } ?>
                        </section>
                        <section id="treatment-solutions">
                              <h2 class="h500"><?php echo $headline04 ?></h2>
                              <hr class="is-hidden-mobile mt-xl">
                              <?php foreach ($procedures as $scm) { ?>
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken/"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>