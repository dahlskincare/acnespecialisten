<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Aknebehandlingar i Stockholm | AcneSpecialisten';
$seo_description = 'Behandla din akne hos AcneSpecialisten, vi har 30 års erfarenhet av få bort akne med våra aknebehandlingar, Boka gratis hudkonsultation i Stockholm eller online';
$seo_keywords = 'aknebehandling, akne medicin, acne behandling, bästa aknebehandling, ansikte behandling, aknebehandling, behandling acne, få bort acne, ta bort acne, hormonell aknebehandling, behandla acne, behandla akne, bli av med acne, bli av med akne, få bort akne, hur blir man av med akne';
$seo_image = 'bilder/hudproblem/424x456/akne.jpg';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Aknebehandling', '/acnebehandling.php'),
);

$model = new Service(
    title: 'Aknebehandlingar',
    duration: null,
    price: 'Från 1595 kr',
    content: '<p class="p200">Här har vi samlat de bästa aknebehandlingarna för att effektivt ta bort akne, oavsett typ. Är du osäker på vilken behandling som bäst passar din hudtyp? Oavsett om det gäller hormonell akne eller annan typ av akne, rekommenderar vi att börja med en kostnadsfri hudkonsultation hos oss på AcneSpecialisten. Vi hjälper dig att skräddarsy en behandlingsplan för att effektivt bekämpa och ta bort din akne.</p>',
    image_small: 'bilder/hudproblem/358x274/akne.webp',
    image_large: 'bilder/hudproblem/424x456/akne.webp',
    image_alt: 'Bild som illustrerar akne',
    image_title: 'Akne',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$about_title = 'Om behandlingarna';

$about_content = '<p class="p200">Att behandla och ta bort akne är ingen quickfix. På AcneSpecialisten använder vi vår expertis och de bästa verktygen för att effektivt få bort akne. Med vår kostnadsfria hudkonsultation kan vi identifiera din unika hudtyp och ta fram en individuell behandlingsplan.</p>

    <p class="p200 mt-xl">Vår första prioritet är att få bort inflammationen och finnarna, de huvudsakliga orsakerna till ärrbildning. Vi skapar en anpassad hudvårdsrutin med produkter mot akne för att förebygga framtida utbrott. Om aknen har lämnat ärr bakom sig, har vi lösningar för att reparera huden. Vi ser fram emot att bli din guide på resan mot att ta bort akne och återfå en klarare, friskare hy.</p>';

$headline01 = "01. Identifiera";

$define_image = '/bilder/hudbehandlingar/872x456/gratis-hudkonsultation.webp';
$define_image_alt = 'Hur vi tar bort och behandlar akne?';
$define_image_title = 'Hur vi tar bort och behandlar akne?';

$define_content = '<p class="p200">Första steget i vår process att få bort akne är att kartlägga din aknetyp, oavsett om du har problem med acne i ditt ansikte, på bröstet eller på ryggen. Vi inleder med en kostnadsfri konsultation där vi analyserar din hud och diskuterar dina hudmål och tidigare erfarenheter. Förebilder tas för att kunna följa din huds framsteg för varje återbesök. Du kommer att få en personlig hudterapeut följer med dig genom hela behandlingsresan, vilket säkerställer en konsekvent omsorg anpassad efter dina specifika behov.</p>';

$define_consultation_link = "https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne";
$define_consultation_link_label = "Boka Gratis Konsultation";
$define_consultation_link_title = "Klicka här för att boka din kostnadsfria hudkonsultation mot akne";

$headline02 = "02. Behandla";

$treat_content = '<p class="p200">När din aknetyp har identifierats, inleder vi fas två: behandling av den aktiva aknen. Här är målet framförallt att få bort inflammationerna och finnarna som riskerar att skada huden och leda till ärr. Vi tillämpar olika metoder för att anpassa behandlingen efter dina unika behov, vilket gör att vi kan maximera resultaten. Genom denna process minskar vi inflammation, rensar bort döda hudceller, och kontrollerar talgproduktionen, vilket över tid leder till minskad akne och dess förekomst.</p>';

$services = array(
    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_large: '/bilder/hudbehandlingar/200x200/ansiktsbehandlingar-mot-problemhy.webp',
        image_title: 'Effektiv Ansiktsbehandling mot Akne på Acnespecialisten',
        image_alt: 'Bild illustrerar en ansiktsbehandling mot akne utförd på Acnespecialisten',

        title: 'Ansiktsbehandling mot Acne',
        duration: '60 min',
        price: 'Från 1295 kr',
        content: '<p class="p200">Ansiktsbehandling mot acne är en djuprengöring av huden som tar bort döda hudceller och frigör tilltäppta porer. När du besöker kliniken inleds behandlingen med en rengöring, följt av ångning för att öppna upp porerna. Det är viktigt att låta en hudterapeut klämma finnarna och extrahera porerna. Behandlingen avslutas med en lugnande mask och fuktgivande kräm anpassad för din hudtyp.</p>',

        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka Hudkonsultation mot Acne på Acnespecialisten',

        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Acne&method=acne_facial',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din ansiktsbehandling mot acne på AcneSpecialisten',

        url: '/hudbehandlingar/ansiktsbehandling/akne/',
        url_label: 'Läs mer om ansiktsbehandling',
        url_title: 'Läs mer om ansiktsbehandling mot akne',

        // short_title: 'Ansiktsbehandling'

    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_large: '/bilder/hudbehandlingar/200x200/laser-mot-hudproblem.webp',
        image_title: 'Klient som genomgår laserbehandling mot akne',
        image_alt: 'Bild av laserbehandling mot akne hos Acnespecialisten',
        title: 'Laserbehandling mot akne',
        duration: '60 min',
        price: 'Från 2595 kr',
        icons: array(),
        content: '<p class="p200">Laserbehandling mot akne fungerar genom att använda ljusenergi för att behandla inflammationen i huden som orsakar akne. Laserstrålen tränger ner i huden och behandlar de djupa lager där akne börjar och finns. Denna metod lugnar & reducerar talgproduktionen i huden och dödar bakterier som finns i poren</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för laserbehandling mot akne',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din laserbehandling mot akne nu',
        url: 'laser-acne.php',
        url_label: 'Läs mer om laserbehandling',
        url_title: 'Läs mer om laserbehandling mot akne',

        // short_title: 'Laser'

    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_title: 'Utförande av kemisk peelingbehandling för akne',
        image_alt: 'Bild på kemisk peelingbehandling mot akne hos Acnespecialisten',
        title: 'Kemisk peeling mot akne',
        duration: '30 min',
        price: 'Från 1595 kr',
        icons: array(),
        content: '<p class="p200">Kemisk peeling är en effektiv behandling mot akne som fungerar genom att applicera en specialiserad syra på huden. Syran exfolierar och avlägsnar det översta hudlagret, vilket tar bort döda hudceller och talg som täpper till porerna och orsakar akne. Detta hjälper till att minska inflammationen och främjar tillväxten av ny, frisk hud. Genom att stimulera hudens naturliga förnyelseprocess, bidrar kemisk peeling till att förbättra hudens textur, få bort finnar och ge en jämnare hudton.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för kemisk peeling mot akne',
        url: 'kemisk-peeling-acne.php',
        url_label: 'Läs mer om kemisk peeling',
        url_title: 'Läs mer om kemisk peeling mot akne',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din kemiska peeling mot akne nu',
        short_title: 'Kemisk Peeling'

    ),

    new Service(
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_title: 'Utförande av microneedlingbehandling för akne',
        image_alt: 'Bild på microneedlingbehandling mot akne hos Acnespecialisten',
        title: 'Microneedling mot akne',
        duration: '50 min',
        price: 'Från 2595 kr',
        icons: array(),
        content: '<p class="p200">Microneedling kan döda aknebakterien (Cutibacterium acnes) genom att punktera huden med mikronålar, vilket skickar syre ner i poren och skapar en ogynnsam miljö för bakterien. Dessutom stimulerar behandlingen blodcirkulationen och immunsvaret, vilket minskar inflammation och bakterienivåer. Mikronålarna kan också hjälpa till att leverera antibakteriella och antiinflammatoriska produkter djupare in i huden, vilket ökar deras effektivitet. Kombinationen av dessa mekaniska och kemiska effekter bidrar till att minska förekomsten av aknebakterier och få bort akne.</p>',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka en konsultation för microneedling mot akne',
        url: 'microneedling-acne.php',
        url_label: 'Läs mer om microneedling',
        url_title: 'Läs mer om microneedling mot akne',
        booking_url: 'https://boka.acnespecialisten.se?flow=microneedling&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka din microneedling mot akne nu',
        short_title: 'Microneedling'

    ),
);

$headline03 = "03. Förebygg";

$products = array(
    new Product(
        image_small: '/bilder/hudbehandlingar/358x274/produkter.webp',
        image_large: '/bilder/hudbehandlingar/872x456/produkter.webp',
        image_title: 'Acnespecialistens effektiva hudvårdsprodukter mot akne',
        image_alt: 'Bild på Acnespecialistens hudvårdsprodukter mot akne',

        url: 'https://dahlskincare.se/produktkategorier/produktpaket/akne',
        url_label: 'Utforska produkterna',
        url_title: 'Information om Acnespecialistens hudvårdsprodukter mot akne',

        price: 'Produkter mot akne - Från 1395 kr',
        content: '<p class="p200">Att förebygga hudproblemet är en viktig del av processen för att hålla din hud aknefri. För att hålla din akne under kontroll rekommenderar vi en daglig hudvårdsrutin med specifika produkter mot akne. Denna rutin hjälper till att hålla din hy ren, balanserad och fri från överflödigt talg och bakterier. Denna dagliga vård hjälper dig att bli fri från aknen samt förhindra framtida utbrott.</p>',
    ),
);

$headline04 = '04. Reparera';

$repair_image_small = '/bilder/hudbehandlingar/358x274/laser.webp';
$repair_image_large = '/bilder/hudbehandlingar/872x456/laser.webp';
$repair_title = 'Bild på Acnebehandling';
$repair_content = '<p class="p200">När din akne har behandlats och aknen försvunnit, tar vi itu med akneärren som den lämnat bakom sig. På AcneSpecialisten kan vi hjälpa dig att reparera dessa ärr genom olika tekniker som laser, syror och microneedling. Dessa metoder främjar hudens egen läkningsprocess, hjälper till att återställa en jämn hudstruktur och minska synligheten av ärr. Med oss vid din sida kan du känna att du har stödet du behöver för att ta bort dina acneärr och njuta av en problemfri hy.</p>';

$repair_url = 'behandla-acnearr.php';
$repair_url_label = 'Se behandlingar';
$repair_url_title = 'klicka här för att se våra ärrbehandlingarna';

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
$show_all_results_title = "Se fler resultat";



$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vilka typer av behandlingar erbjuder Acnespecialisten för olika hudproblem?',
            text: 'Acnespecialisten erbjuder en rad olika behandlingar för hudproblem, inklusive acnebehandling, rosaceabehandling och portömning.'
        ),
        new Question(
            title: 'Hur lång tid tar en behandling hos Acnespecialisten?',
            text: 'En behandling hos Acnespecialisten tar vanligtvis cirka 60 - 90 min.'
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
$faq_url_title = "läs flera frågor relaterat till aknebehandling";

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
$skinguide_url_title = "Läs fler guider om aknebehandling";

$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i aknebehandling',
        image_title: 'Cazzandra Lindberg - Expert på aknebehandling'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på akne',
        image_title: 'Veronika Benedik - Specialist inom aknevård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom aknehantering',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på akne'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot aknebehandling',
        image_title: 'Vilma Libom - Expert inom aknebehandling'
    )
);

$specialist_url_label = "Se alla specialister";
$specialist_url_title = "Akne Specialiserade Hudterapeuter";

$brands = array(
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
$brands_url_title = "Varumärken för Aknebehandling";

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/acnebehandling.php" />

    <title><?php echo $seo_title ?></title>
    <meta name="description" content="<?php echo $seo_description ?>">
    <meta name="keywords" content="<?php echo $seo_keywords ?>">
    <meta property="og:title" content="<?php echo $seo_title ?>" />
    <meta property="og:description" content="<?php echo $seo_description ?>" />
    <meta property="og:image" content="<?php echo $seo_image ?>" />

    <meta property="twitter:title" content="<?php echo $seo_title ?>" />
    <meta property="twitter:description" content="<?php echo $seo_description ?>" />
    <meta property="twitter:image" content="<?php echo $seo_image ?>" />

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
                <section id="image" class="mt-m is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_small ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
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
                        <?php foreach ($services as $scm) {
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
                    <picture>
                        <source media="(max-width: 799px)" srcset="<?php echo $repair_image_small ?>">
                        <source media="(min-width: 800px)" srcset="<?php echo $repair_image_large ?>">
                        <img src="<?php echo $repair_image_large ?>" alt="<?php echo $repair_title ?>" title="<?php echo $repair_title ?>" class=" mt-xl" width="872" height="456" />
                    </picture>
                    <div class="mt-xl"><?php echo $repair_content ?></div>
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
                </section>
                <section id="faq">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Frågor & Svar</h2>
                        <a href="fragor-svar.php" title="Läs fler frågor & svar" class="button compact text is-hidden-mobile">
                            <span class="l10n">Läs fler frågor & svar</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php $faq_categories = array(
                        'Behandling mot akne' => array(
                            new Question(
                                title: 'Hur många behandlingar behövs?',
                                text: '<p class="p200">Antalet behandlingar som behövs varierar från person till person och beror på flera faktorer, som din hudtyp, svårighetsgraden av din akne och din respons på behandlingen. Vanligtvis kan du se en förbättring efter 1 till 3 veckors regelbunden behandling.</p>

                                       <p class="p200 mt-m">En väsentlig del av din framgång ligger i den dagliga användningen av de rekommenderade produkterna hemma. Det är kombinationen av professionell klinik behandling och hemmavård som ger bästa möjliga resultat.</p>

                                        <p class="p200 mt-m">Om du inte upplever de förväntade förbättringarna efter en tid, uppmanar vi dig att ta kontakt med din personliga hudterapeut. Tillsammans kan vi se över dina hudvårdsrutiner och de produkter du använder, för att optimera din behandlingsplan. För bäst resultat rekommenderas en acne kur med flera behandlingar.</p>'
                            ),
                            new Question(
                                title: 'Finns det en risk att min akne återkommer?',
                                text: '<p class="p200">Ja, akne är ett ihållande problem som inte går att bota utan uppstår till följd av de fakturer som orsakar akne såsom genetik, hormoner, livsstil och hudvård. Personer med en genetisk benägenhet för akne kan uppleva att aknen återkommer, särskilt under perioder av hormonella förändringar som pubertet, graviditet eller menstruation. Även faktorer som stress och användning av olämpliga hudvårdsprodukter kan bidra till att aknen återkommer.</p>
                                       
                                       <p class="p200 mt-m">Det är dock viktigt att komma ihåg att regelbunden och korrekt hudvård kan hålla aknen i schack. Precis som vi borstar tänderna varje dag för att hålla karies borta, behöver vi underhålla vår hud för att hålla aknen borta. Det innebär att följa en anpassad hudvårdsrutin, hantera stress och upprätthålla en hälsosam livsstil. Så länge du tar hand om din hud regelbundet och på rätt sätt, kan du förhindra att aknen återkommer.</p>'
                            ),
                            new Question(
                                title: 'Vilken är den bästa aknebehandling ni erbjuder?',
                                text: '<p class="p200">Vilken behandling som är bäst för akne varierar beroende på individens hudtyp, aknens svårighetsgrad och orsakerna till akne. Den bästa behandlingen är en skräddarsydd behandlingsplan som kombinerar rätt behandlingar, produkter och rutiner för att effektivt ta itu med den aktiva aknen och förhindra att nya utbrott uppstår. Genom att först behandla och bli av med den aktiva aknen kan du uppnå en klarare hud. Därefter är det viktigt att bibehålla resultaten med lämpliga produkter och rutiner för att motverka att nya finnar uppstår och hålla aknen under kontroll. Det rekommenderas att konsultera en av våra specialister för att få en personlig och effektiv behandlingsplan som passar just din hud och akne.</p>'
                            ),
                            new Question(
                                title: 'Gör aknebehandlingen ont?',
                                text: '<p class="p200">Vi strävar efter att göra aknebehandlingen så behaglig som möjligt för våra klienter. Det är sant att akne ibland innebär inflammation i porerna och kan göra ont när de öppnas upp och töms. Men vi vill påpeka att smärtupplevelsen kan variera från person till person och bero på behandlingsmetoden som används. Vår erfarna hudterapeuter är välutbildad och tar stor hänsyn till din komfort under behandlingen. Om du känner någon obehag, tveka inte att informera din acnespecialist så att de kan justera behandlingen efter dina behov.</p>'
                            ),
                            new Question(
                                title: 'Vad ska jag tänka på innan behandlingen?',
                                text: '<p class="p200">Vi vill att din behandling ska vara så smidig och bekväm som möjligt, och vi strävar efter att göra processen enkel för dig. Du behöver inte förbereda något särskilt inför ditt besök hos oss. Kom precis som du är, och vi tar hand om resten. Vi kommer att genomföra en grundlig hudanalys och skräddarsy en behandlingsplan som passar just dig och din hudtyp. Så, du kan lita på oss och bara slappna av inför din aknebehandling.</p>'
                            ),
                            new Question(
                                title: 'Vad ska jag tänka på efter behandling?',
                                text: '<p class="p200">Efter din behandling på akne klinik kan du uppleva att huden blir något röd och irriterad. Detta är helt normalt och en del av hudens naturliga läkningsprocess. Rödheten och irritationen kommer att avta under dagarna efter behandlingen. Det är viktigt att du fortsätter att följa den hudvårdsrutin och de produktrekommendationer vi gett dig för att stödja hudens återhämtning och maximera resultaten av behandlingen.</p>
                                        
                                        <p class="p200 mt-m">Undvik att peta eller klämma på behandlade områden för att undvika eventuell ärrbildning och infektion. Dessutom är det bra att skydda huden från solen, då den kan vara extra känslig efter behandling. Använd solskydd och undvik direkt solljus så mycket som möjligt. Kom ihåg att vi på AcneSpecialisten alltid finns här för dig om du har några frågor eller funderingar efter din behandling.</p>'
                            ),
                            new Question(
                                title: 'Hemmavård efter behandlingen?',
                                text: '<p class="p200">Hemmavården efter en aknebehandling hos Acnespecialisten är lika viktig som själva behandlingen. När aknen är utklämd och borta är det viktigt att förebygga uppkomsten av ny akne. Om du inte följer din eftervårdsplan kommer du att få resultat, men det kommer inte vara bestående, eftersom akneproduktionen sätter igång igen kort tid efter behandlingen.</p>

                                  <p class="p200 mt-m">För att hålla huden i kontroll och balans är det viktigt att följa de råd och rekommendationer vi ger dig angående hudvårdsrutin och produkter. Du behöver inte akne medicin för att behandla problemet utan kan göra det effektivt med hjälp av rätt hudvårdsprodukter. Kontinuerlig behandling och förebyggande åtgärder är avgörande för att uppnå och bibehålla en klar och frisk hud. Kom ihåg att vi på AcneSpecialisten alltid finns här för att hjälpa och stötta dig genom hela processen, både under och efter din behandling.</p>',
                            ),
                        ),

                    );
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $faq_url_title ?>" href="fragor-svar.php"><?php echo $faq_url_label ?></a>
                </section>

                <section id="specialists">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n">Våra hudterapeuter</h2>
                        <a href="hudterapeut/" title="Hudterapeuter" class="button compact text is-hidden-mobile">
                            <span class="l10n">Se alla hudterapeuter</span>
                            <?php icon('navigate-next') ?>
                        </a>
                    </div>
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" title="<?php echo $specialist_url_title ?>" href="hudterapeut/"><?php echo $specialist_url_label ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n">Varumärken</h2>
                    <a href="varumarken/" title="Varumärken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php'); ?>
                <a class="mt-xl button outline expand is-hidden-tablet l10n" title="Varumärken" href="varumarken/">Se alla varumärken</a>
            </section>

        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>