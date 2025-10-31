<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once('hudproblem/widgets/problem-trivia-card/problem-trivia.php');
include_once('hudproblem/widgets/symptom-card/symptom.php');
include_once('hudproblem/widgets/related-problem-card/related-problem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Vad är hormonell acne? Vanliga frågor och svar | AcneSpecialisten';
$seo_description = 'Lider du av hormonell akne eller hormonella finnar som vuxen? Upptäck orsaker, symptom och bästa behandlingarna för hormonfinnar och få en problemfri hud';
$seo_keywords = 'hormonell acne, hormonell akne, hormon finnar, hormonella finnar, hormonell akne behandling, hormonell akne vuxen, hormonella finnar vuxen, hormonfinnar, acne hormonell, hormonell akne haka, hormonfinnar hakan, hormonell akne produkter, hormon akne, hormonell acne kinder, hudvård hormonell acne, behandla hormonell acne, akne hormonell';
$seo_image = 'bilder/hudproblem/424x456/akne.webp';

$path_segments = array(
      new PathSegment('Hudproblem', '/hudproblem/'),
      new PathSegment('Hormonell Acne', '/hormonell-acne.php'),
);

$image_small = 'bilder/hudproblem/358x274/akne.webp';
$image_large = 'bilder/hudproblem/424x456/akne.webp';
$image_title = 'Effektiv Behandling av hormonell acne';
$image_alt = 'Bild som visar behandlingsmetoder för hormonell acne';

$green_banner_content = new GreenBannerContent(
      title: 'Hormonell acne & hormon finnar',
      description: 'Hormonell akne, eller hormonfinnar ofta ett problem inte bara under tonåren utan även för vuxna, är ett vanligt hudtillstånd som påverkar många. Denna typ av acne uppstår när hormonella förändringar, såsom de som sker under menstruationscykeln, graviditet, eller på grund av vissa medicinska tillstånd, stimulerar en överproduktion av olja i huden.',
      links_touch: [
            new Link('Boka konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      links_desktop: [
            new Link('Boka gratis konsultation', 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne', 'Boka gratis konsultation för akne'),
            new Link('Boka behandling', 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne', 'Boka denna behandling'),
      ],
      show_consultation_card: false,
      akas: [
            new Link(
                  label: 'Akne',
                  url: 'acne.php',
                  title: 'Allt du behöver veta om akne och deras behandling'
            ),
      ]
);

$floating_box = 'Behandla din hy effektivt.';

$description_title = 'Hur vet jag om min akne är hormonell?';
$description_text = '<p class="p200">Hormonell acne, ofta känd som hormon finnar, är ett tillstånd där huden blir utsatt för utbrott som är direkt kopplade till kroppens hormonella förändringar och obalanser. Denna typ av akne skiljer sig från andra former av akne genom att den är starkt kopplad till svängningar i hormonerna, vilket kan påverka hudens tillstånd. Obalanser kan leda till ökad talgproduktion i huden, vilket i sin tur kan täppa till porerna och skapa en gynnsam miljö för bakterietillväxt och inflammation. Hormonell acne är särskilt vanlig under puberteten, men det är inte ovanligt att vuxna, och i synnerhet kvinnor, upplever dessa hudutslag. <a class="b200 underline color-deep-sea-400" href="/vuxenacne.php" title="Mer information om att få finnar som vuxen kvinna">Finnar hos en vuxen kvinna</a> kan uppstå både innan och vid mens, men även vara kopplat till graviditet, klimakteriet eller användning av preventivmedel. Hos både män och kvinnor kan stress och vissa livsstilsfaktorer också påverka hormonbalansen och därmed bidra till akneutbrott.</p>
<p class="p200 mt-m">Behandlingen av acne som är hormonell utan att rubba hudens naturliga hormoner fokuserar på en helhetslösning som kombinerar rätt behandlingar med rätt hudvårdsprodukter. Denna metod kombinerar extraktioner på klinik för att tömma aknen, med en skräddarsydd hudvårdsrutin som används hemma. Med hjälp av en hudterapeut som guidar dig genom hela processen kan du kontrollera din hy effektivt.</p>';

$treatment_steps = array(
      new TreatmentStep(
            title: 'Identifiera',
            content: 'Vår specialiserade konsultation på AcneSpecialisten är avsedd att djupdyka i de unika egenskaperna hos din hormonella akne.',
            url_label: 'Boka gratis konsultation',
            url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Problem&Consultationwhat=Consultation_Problem_Acne',
            url_title: 'Boka din kostnadsfria hudkonsultation för hormonell acne idag'
      ),
      new TreatmentStep(
            title: 'Behandla',
            content: 'Våra behandlingar för hormonell acne är skräddarsydda för att passa just din hudtyp och dess unika behov.',
            url_label: 'Se behandlingar',
            url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
            url_title: 'Utforska våra behandlingar för hormonell acne'
      ),
      new TreatmentStep(
            title: 'Förebygga',
            content: 'För att förebygga framtida utbrott av hormonell acne, erbjuder vi specialdesignade produkter och rutiner.',
            url_label: 'Se produkter',
            url: 'https://www.dahlskincare.com/sv/produktkategorier/produktpaket/akne',
            url_title: 'Hitta de bästa produkterna för att förebygga hormonell acne'
      ),
      new TreatmentStep(
            title: 'Reparera',
            content: 'När vi har behandlat den aktiva hormonella aknen, inriktar vi oss på att reparera och förbättra hudens kvalitet.',
            url_label: 'Se ärrbehandlingar',
            url: 'behandla-acnearr.php',
            url_title: 'Upptäck våra effektiva behandlingar för ärr orsakade av hormonell acne'
      ),
);

$treatment_link = '<a href="acnebehandling.php" title="Utforska effektiva behandlingar mot hormonell acne" class="mt-xl button b200 outline expand auto-width">Läs mer om våra behandlingar</a>';

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

// Results Grid Implementation
$results_images = array(
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kaklinje.webp',
            image_alt: 'Akne längs käklinjen före och efter behandling',
            image_title: 'Hormonell akne resultat - käklinje',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-haka.webp',
            image_alt: 'Akne på kinder och haka före och efter behandling',
            image_title: 'Hormonell akne resultat - kinder och haka',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kinder-mun.webp',
            image_alt: 'Akne runt kinder och mun före och efter behandling',
            image_title: 'Hormonell akne resultat - kinder och mun',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind-hals.webp',
            image_alt: 'Akne från kind till hals före och efter behandling',
            image_title: 'Hormonell akne resultat - kind och hals',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-hals.webp',
            image_alt: 'Akne på halsen före och efter behandling',
            image_title: 'Hormonell akne resultat - hals',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-munnen.webp',
            image_alt: 'Akne runt munnen före och efter behandling',
            image_title: 'Hormonell akne resultat - runt munnen',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-en-stor.webp',
            image_alt: 'En inflammerad finne före och efter behandling',
            image_title: 'Hormonell akne resultat - inflammerad finne',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-kind.webp',
            image_alt: 'Akne på kinden före och efter behandling',
            image_title: 'Hormonell akne resultat - kind',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-ansikte-hoger-latt.webp',
            image_alt: 'Mild akne på höger ansiktshalva före och efter behandling',
            image_title: 'Hormonell akne resultat - mild höger sida',
            content: '',
      ),
      new LabelImage(
            image_url: '/bilder/resultat/832x476/akne/akne-finnar-resultat-fore-efter-rodnad.webp',
            image_alt: 'Rodnad akne i ansiktet före och efter behandling',
            image_title: 'Hormonell akne resultat - rodnad',
            content: '',
      ),
);
$results_url = '/resultat-acne.php';



$faq_categories = array(
      'Generella frågor' => array(
            new Question(
                  title: 'Varför är acne hormonell?',
                  text: 'Hormonell acne är en typ av akne som främst drivs av hormonella förändringar och obalanser i kroppen. Den är vanlig hos tonåringar under puberteten men kan även påverka vuxna, särskilt kvinnor, på grund av cykliska hormonförändringar, graviditet, användning av vissa typer av preventivmedel eller hormonrelaterade tillstånd.'
            ),
            new Question(
                  title: 'Hur får man bort hormonell acne?',
                  text: 'Att effektivt hantera hormonell acne börjar med att utvärdera din hudvårdsrutin och produkter. En skräddarsydd hudvårdsrutin framtagen av en hudterapeut kan göra stor skillnad. Denna rutin kan inkludera användning av hudvårdsprodukter och specifika behandlingar som är anpassade för att lugna inflammation och reglera talgproduktionen, samt produkter som hjälper till att balansera hudens naturliga barriär. Regelbunden professionell behandling, såsom djuprengörande ansiktsbehandlingar och milda peelingar, kan också vara avgörande för att minska och förebygga utbrott.'
            ),
            new Question(
                  title: 'Varför får man finnar innan mens?',
                  text: 'Finnar vid mens beror ofta på hormonella förändringar i kroppen som sker under menstruationscykeln. Särskilt ökningen av androgener precis före mens kan stimulera talgkörtlarna att producera mer talg, vilket kan leda till tilltäppta porer och i slutändan acne. Denna typ av akne kallas hormonell acne och är vanlig bland kvinnor inte bara under mens utan också under andra hormonellt påverkade perioder såsom graviditet och klimakteriet. Hormonell obalans under dessa tider kan orsaka utbrott av finnar som ett direkt resultat av de förändrade hormonnivåerna.'
            ),
      ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor";

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
            title: 'Hudterapeut sedan 2021',
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
$brands_url_title = "Se alla varumärken";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/hormonell-acne.php" />

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

                        <section id="results">
                              <?php
                              $results_title = 'Resultat för hormonell akne';
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
                        <section id="results-narrow">
                              <?php
                              $results_title = 'Resultat';
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
                        <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" title="<?php echo $brands_url_title ?>" href="varumarken/"><?php echo $brands_url_label ?></a>

                  </section>
            </div>
      </main>
      <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
      <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>
