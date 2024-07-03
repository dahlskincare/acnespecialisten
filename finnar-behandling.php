<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Behandling mot finnar | AcneSpecialisten';
$seo_description = 'Boka vår effektiva behandling av finnar i Stockholm! Vi anpassar behandlingen efter din hudtyp. Börja med vår kostnadsfria konsultation →';
$seo_keywords = 'finnar behandling, behandling av finnar, förebygga finnar, ta bort finnar';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar'),
    new PathSegment('För finnar', '/finnar-behandling.php'),
);

$model = new Service(
    title: 'Behandlingar för finnar',
    duration: null,
    price: null,
    content: '<p class="p200">Här har vi samlat de mest effektiva metoderna för behandling av finnar som hjälper dig att effektivt bli av med finnarna oavsett typ. Oavsett ditt specifika behov, har vi rätt lösning för dig. Är du osäker på vilken behandling för finnar som bäst passar din hudtyp för att bli av med finnarna? Oroa dig inte, boka en kostnadsfri konsultation hos oss på AcneSpecialisten så hjälper vi dig vidare mot en klarare och friskare hy.</p>',
    image_small: 'bilder/hudproblem/424x324/finnar.webp',
    image_large: 'bilder/hudproblem/424x456/finnar.webp',
    image_alt: 'Bild på behandling av finnar',
    image_title: 'Behandling av finnar',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Behandlingar för finnar';

$about_title = 'Hur går behandlingen till?';

$about_content = '<p class="p200">Att behandla och ta bort finnar är ingen quickfix. På AcneSpecialisten använder vi vår expertis och de bästa verktygen för att effektivt och regelbundet bli av med finnar. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och ta fram en individuell behandlingsplan.</p>

    <p class="p200 mt-xl">Vår första prioritet är att bli av med inflammationen och finnarna, de huvudsakliga orsakerna till ärrbildning. Efter att den aktiva finnen har behandlats hjälper vi dig att skapa en anpassad hudvårdsrutin med produkter mot finnar för att förebygga framtida utbrott. Om finnarna har lämnat ärr bakom sig, har vi lösningar för att reparera huden. Vi ser fram emot att bli din guide på resan mot att bli av med finnar och återfå en klarare, friskare hy.</p>';

$headline01 = "01. Identifiera";

$define_image = '/bilder/hudbehandlingar/872x456/gratis-hudkonsultation.webp';
$define_image_alt = 'Hur vi tar bort och behandlar finnar?';
$define_image_title = 'Hur vi tar bort och behandlar finnar?';

$define_content = '<p class="p200">Första steget i vår process att bli av med finnar är att kartlägga din finn-typ. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och diskuterar dina hudmål och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg och anpassa din behandlingsplan över tid. En personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en konsekvent omsorg anpassad efter dina specifika behov.</p>';

$define_consultation_link = "gratis-hudkonsultation.php";
$define_consultation_link_label = "Boka gratis konsultation";
$define_consultation_link_title = "klicka här för att boka din kostnadsfria hudkonsultation mot finnar";


$headline02 = "02. Behandla";

$treat_content = '<p class="p200">När din finntyp har identifierats, inleder vi fas två: behandling av de aktiva finnarna. Här är målet framför allt att få bort inflammationerna och finnarna som riskerar att skada huden och leda till ärr. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket gör att vi kan maximera resultaten och minimera obehaget. Genom denna process minskar vi inflammation, rensar bort döda hudceller, och kontrollerar talgproduktionen, vilket över tid leder till minskade finnar och dess förekomst. Vi anpassar behandlingsplanen efter din huds respons.</p>';

$services = array(
    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_title: 'Effektiv Ansiktsbehandling mot Finnar på AcneSpecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot finnar utförd på AcneSpecialisten',

        title: 'Ansiktsbehandling mot Finnar',
        duration: '60 minuter',
        price: 'Pris från 799 kr',
        icons: array(),
        content: '<p class="p200">Ansiktsbehandling mot finnar på AcneSpecialisten är en djuprengöring av huden som tar bort döda hudceller och frigör tilltäppta porer. Behandlingen inleds med en rengöring, följt av ångning för att öppna upp porerna. Därefter följer en djup porrengöring där orenheter och finnar elimineras. Behandlingen avslutas med en lugnande mask och fuktgivande kräm anpassad för din hudtyp.</p>',

        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation för Finnar på AcneSpecialisten',

        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples&method=Method_FacialProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din ansiktsbehandling mot finnar på AcneSpecialisten',

        url: '/hudbehandlingar/ansiktsbehandling/akne/',
        url_label: 'Läs mer om ansiktsbehandling',
        url_title: 'Läs mer om ansiktsbehandling mot finnar',

        // short_title: 'Ansiktsbehandling'

    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_title: 'Klient som genomgår laserbehandling mot finnar',
        image_alt: 'Bild av laserbehandling mot finnar hos AcneSpecialisten',
        title: 'Effektiv laserbehandling mot finnar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Genom att använda ljusenergi för att behandla inflammationen i huden som orsakar finnar. Laserstrålen tränger ner i huden och behandlar de djupa lager där finnar börjar. Denna metod reducerar oljeproduktionen i huden och dödar bakterier som bidrar till finnarutbrott.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot finnar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples&method=Method_LaserProblem',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot finnar nu',
        url: 'laser-acne.php',
        url_label: 'Läs mer om laserbehandling',
        url_title: 'Läs mer om laserbehandling mot finnar',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för finnar',
        image_alt: 'Bild på kemisk peelingbehandling mot finnar hos AcneSpecialisten',
        title: 'Kemisk peeling mot finnar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">På AcneSpecialisten använder vi en speciell lösning som appliceras på huden för att avlägsna det översta lagret. Detta ger plats åt ny, frisk hud att växa fram, vilket bidrar till att reducera utseendet av ärr från finnar och att förbättra hudens textur och utseende.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot finnar',
        url: 'kemisk-peeling-acne.php',
        url_label: 'Läs mer om kemisk peeling mot finnar',
        url_title: 'Läs mer om kemisk peeling mot finnar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples&method=Method_ChemicalPeeling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot finnar nu',
        short_title: 'Kemisk Peeling'
    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för finnar',
        image_alt: 'Bild på microneedlingbehandling mot finnar hos AcneSpecialisten',
        title: 'Effektiv microneedling mot finnar',
        duration: '30-60 min',
        price: '1295 kr',
        icons: array(),
        content: '<p class="p200">Effektiv behandlingsmetod mot finnar som använder små mikronålar för att skapa mikroskopiska kanaler i huden. Detta stimulerar hudens naturliga läkningsprocess och ökar produktionen av kollagen och elastin. Microneedling behandlar även de underliggande problemen med finnar genom att tillåta aktiva ingredienser att tränga djupare in i huden.</p>',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot finnar',
        url: 'microneedling-acne.php',
        url_label: 'Läs mer om microneedling',
        url_title: 'Läs mer om microneedling mot finnar',
        booking_url: 'https://acnespecialisten.se/book?flow=problem&problem=Problem_Pimples&method=Method_Microneedling',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot finnar nu',
        short_title: 'Microneedling'
    ),

);

$headline03 = "03. Förebygg";

$products = array(
    new Product(
        image_small: null,
        image_large: null,
        image_title: 'Acnespecialistens effektiva hudvårdsprodukter mot finnar',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot finnar',

        url: 'https://dahlskincare.se/produktkategorier/produktpaket/finnar',
        url_label: 'Utforska våra hudvårdsprodukterna',
        url_title: 'Information om Acnespecialistens hudvårdsprodukter mot finnar',
        price: 'Acnespecialistens hudvårdsprodukter mot finnar - Pris från 1295 kr',
        content: '<p class="p200">För detta ändamål erbjuder vi en daglig hudvårdsrutin med specifika produkter mot finnar. Denna rutin hjälper till att hålla din hy ren, balanserad och fri från överflödigt talg och bakterier. Denna dagliga vård hjälper till att förhindra framtida utbrott och är lika viktig som regelbundna besök hos oss på Acnespecialisten.</p>',
    ),
);

$headline04 = '04. Reparera';

$repair_image_small = null;
$repair_image_large = null;

$repair_content = '<p class="p200">När dina finnar har behandlats och finnarna tagits bort, kan det hända att de lämnar ärr bakom sig. På Acnespecialisten kan vi hjälpa dig att reparera dessa ärr genom olika tekniker som laserteknik och microneedling. Dessa metoder främjar hudens egen regenerering, hjälper till att återställa en jämn hudstruktur och minska synligheten av ärr. Med oss vid din sida kan du känna att du har stödet du behöver för att ta bort finnar och njuta av en klarare, friskare hy.</p>';

$repair_url = 'behandla-finnar-arr.php';
$repair_url_label = 'Se ärrbehandlingar';
$repair_url_title = 'klicka här för att se våra ärrbehandlingar efter finnar';

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
$show_all_results_title = "Resultat mot finnar";

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
    '' => array(
        new Question(
            title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för olika hudproblem?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för hudproblem, inklusive behandling för finnar, rosaceabehandling och portömning.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling hos Acnespecialisten?',
            text: 'En behandling hos Acnespecialisten tar vanligtvis cirka 60 - 90 minuter.'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för att se resultat?',
            text: 'Antalet behandlingar som behövs för att se resultat varierar beroende på ditt specifika hudproblem och din hudtyp. Genomsnittligt antal behandlingar är mellan 2-4 stycken.'
        ),
        new Question(
            title: 'Är behandlingarna smärtsamma?',
            text: 'Behandlingarna hos Acnespecialisten är utformade för att minimera obehag. När vi behandlar inflammerade områden och utför extraktioner kan det dock uppstå en tillfällig smärta. Denna känsla är dock övergående och försvinner snabbt, så du kan känna dig trygg under behandlingen.'
        ),
        new Question(
            title: 'Kan alla hudtyper behandlas hos Acnespecialisten?',
            text: 'Ja, Acnespecialisten erbjuder behandlingar som passar alla hudtyper.'
        ),
    ),
);

$faq_url_label = "Läs fler frågor & svar";
$faq_url_title = "läs flera frågor relaterat till behandling av finnar";

$specialists = array(
    new Specialist(
        name: 'Cassandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_title: 'Cassandra Lindberg, Hudterapeut hos Acnespecialisten sedan 2015',
        image_alt: 'Cassandra Lindberg - Erfaren Hudterapeut hos Acnespecialisten'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_title: 'Veronika Benedik, Erfaren Hudterapeut på Acnespecialisten',
        image_alt: 'Veronika Benedik, hudterapeut sedan 1999 på Acnespecialisten'
    ),
    new Specialist(
        name: 'Jennifer Eklund',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_title: 'Amira Maqboul, Hudterapeut på Acnespecialisten',
        image_alt: 'Amira Maqboul, hudterapeut sedan 2017 på Acnespecialisten'

    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_title: 'Vilma Libom, Hudterapeut på Acnespecialisten',
        image_alt: 'Vilma Libom, hudterapeut sedan 2019 på Acnespecialisten'
    )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Hudterapeuter Specialiserade på finnar";

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
        url: '/varumarken/skin-tech',
        url_title: 'Läs mer om Skin Techs kemiska peelingar',
    ),
);

$brands_url_label = "Se alla varumärken";
$brands_url_title = "Varumärken för behandling av finnar";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

      <link rel="canonical" href="https://www.acnespecialisten.se/finnar-behandling.php" />
      
    <title><?php echo $seo_title ?></title>
    <meta name="description" content="<?php echo $seo_description ?>">
    <meta name="keywords" content="<?php echo $seo_keywords ?>">

    <!-- Optional: Set canonical version of this page (https://support.google.com/webmasters/answer/10347851) -->

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
    <link rel="stylesheet" href="/styles/default-layout.css">
    <link rel="stylesheet" href="hudproblem/treatment.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/floater/treatment_floater.php'); ?>
    <main>
        <section id="header">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/green_header_banner/treatment_green_header_banner.php'); ?>
        </section>
        <div class="container">
            <div id="content">
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $about_title; ?></h2>
                    <div class="mt-xl"><?php echo $about_content ?></div>
                </section>
                <section id="define">
                    <h2 class="h500 l10n"><?php echo $headline01; ?></h2>
                    <img class="mt-xl step-image" src="<?php echo $define_image ?>" alt="<?php echo $define_image_alt ?>" title="<?php echo $define_image_title ?>" width="872" height="456" />
                    <div class="mt-xl"><?php echo $define_content ?></div>
                    <a href="<?php echo $define_consultation_link ?>" title="<?php echo $define_consultation_link_title ?>" class="mt-xl button b200 l10n"><?php echo $define_consultation_link_label ?></a>
                </section>
                <section id="treat">
                    <h2 class="h500 l10n"><?php echo $headline02 ?></h2>
                    <div class="mt-xs">
                        <?php echo $treat_content ?>
                        </p>
                        <?php foreach ($services as $service) {
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php');
                        } ?>
                </section>
                <?php if (isset($products) && sizeof($products) > 0) { ?>
                    <section id="prevent">
                        <h2 class="h500 l10n"><?php echo $headline03 ?></h2>
                        <?php foreach ($products as $product) {
                            include('hudproblem/widgets/product-card/product-card.php');
                        } ?>
                    </section>
                <?php } ?>
                <section id="repair">
                    <h2 class="h500 l10n"><?php echo $headline04 ?></h2>
                    <?php if (isset($repair_image_small)) { ?>
                        <picture class="mb-xl">
                            <source media="(max-width: 799px)" srcset="<?php echo $repair_image_small ?>">
                            <source media="(min-width: 800px)" srcset="<?php echo $repair_image_large ?>">
                            <img src="<?php echo $repair_image_large ?>" alt="<?php echo $repair_title ?>" title="<?php echo $repair_title ?>" class=" mt-xl" width="872" height="456" />
                        </picture>
                    <?php } ?>
                    <div><?php echo $repair_content ?></div>
                    <a href="<?php echo $repair_url ?>" title="<?php echo $repair_url_title ?>" class="mt-xl button outline b200 expand is-hidden-tablet l10n"><?php echo $repair_url_label ?></a>
                    <a href="<?php echo $repair_url ?>" title="<?php echo $repair_url_title ?>" class="mt-xl button compact text b200 is-hidden-mobile">
                        <span class="l10n"><?php echo $repair_url_label ?></span>
                        <?php icon('navigate-next'); ?>
                    </a>
                </section>
                <section id="results">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php'); ?>
                </section>
                <section id="reviews">
                    <h2 class="big l10n">Omdömen</h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $review_url_title ?>" href="https://se.trustpilot.com/review/acnespecialisten.se"><?php echo $review_url_label ?></a>
                </section>
                <section id="faq">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Frågor & Svar</h2>
                        <a href="fragor-svar.php" title="FAQ" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler frågor & svar</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                </section>
                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeuter</h2>
                        <a href="hudterapeut" title="Hudterapeuter" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut"><?php echo $specialist_url_label ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken" title="Varumärken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" title="Varumärken" href="varumarken">Se alla varumärken</a>
            </section>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>