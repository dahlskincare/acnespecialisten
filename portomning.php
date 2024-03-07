<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Portömning mot Pormaskar - Portömning | AcneSpecialisten';
$seo_description = 'AcneSpecialisten erbjuder specialiserade porrengöringsbehandlingar riktade mot pormaskar och orenheter. Våra skräddarsydda behandlingar renar porerna och bidrar till en jämnare hudtextur. Få professionell hjälp och skräddarsydda hudvårdsråd för att uppnå en sundare hud och reducera synligheten av pormaskar.';
$seo_keywords = 'ansiktsbehandlingar mot pormaskar, portömning, rengöring av pormaskar, behandling av pormaskar, pormaskrengöring, hudvård, klara porer, AcneSpecialisten, djuprengöring av huden, förebygga pormaskar, minska pormaskar, rena porer';

$seo_image = 'images/treatments/large/ansiktsbehandlingar-mot-problemhy.webp';

$model = new Service(
    title: 'Portömning',
    duration: '60 min',
    price: 'Från 799 kr',
    content: '<p class="p200">Portömning är en effektiv ansiktsbehandling som tömmer porerna på talg och döda hudceller, för att bli av med pormaskar och finnar. Denna behandling utförs av professionella hudterapeuter för att säkerställa en effektiv och grundlig djuprengöring av huden.</p>',
    image_small: 'bilder/behandlingar/358x274/ansiktsbehandlingar-mot-problemhy.webp',
    image_large: 'bilder/behandlingar/424x456/ansiktsbehandlingar-mot-problemhy.webp',
    image_alt: 'Portömning',
    image_title: 'Portömning',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '995 kr',
            savings: null,
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '2595 kr',
            savings: '865 kr per behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Chest&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '3995 kr',
            savings: '799 kr per behandling',
            booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Back&procedures=PriceClass_1_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$nav_buttons = array(
    'about' => 'Om portömning',
    'preparing' => 'Förberedelser',
    'process' => 'Processen',
    'types' => 'Typer',
    'treatment-areas' => 'Områden',
    'aftercare' => 'Eftervård',
    'results' => 'Resultat',
    'reviews' => 'Omdömen',
    'faq' => 'FAQ',
    'skin-guide' => 'Hudguide',
    'specialists' => 'Specialister',
    'service-brands' => 'Märken',
);

$description_title = 'Vad är portömning?';
$description_text = '<p class="p200">Våra ansiktsbehandlingar är specialanpassade för att målmedvetet angripa och reducera pormaskar, och ge dig en långvarig behandlingsmetod för en problemfri hy. Genom specialicerade tekniker som vapozone använder vi ånga för att varsamt öppna upp porerna, vilket möjliggör en djup och effektiv rengöring speciellt inriktad på borttagning av pormaskar och andra tilltäpptheter.</p>
    <p class="p200 mt-m">Dessa behandlingar är skräddarsydda för olika hudtyper som är benägna till pormaskar, oavsett om din hud är oljig, torr eller en kombination. Vårt mål är att förbättra hudens övergripande tillstånd och återställa en naturlig balans, samtidigt som vi tillhandahåller den med näring och omsorg som krävs för att förebygga framtida tilltäpptheter och uppkomsten av nya pormaskar.</p>';


$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför portömning',
        image_small: '/bilder/process/358x272/problemhy-forberedelser.webp',
        image_large: '/bilder/process/872x456/problemhy-forberedelser.webp',
        image_alt: 'Förberedelser inför portömning',
        image_title: 'Förberedelser inför portömning',
        content: '<p class="p200">Du är alltid välkommen att komma som du är till en portömning hos oss på AcneSpecialisten. Dock kan några enkla förberedelser optimera effekten av din behandling. Vi råder dig att, om möjligt, undvika hudvårdsprodukter med starka ingredienser eller exfolierande syror några dagar före din behandling för att minska risken för irritation och göra din hud mer mottaglig för behandlingen.</p>
            <p class="p200 mt-m">Vi har inte heller några krav på att du ska komma osminkad utan detta kan vi hjäpla dig att tvätta bort i samband med att behandlingen inleds. Vi ser fram emot att ta emot dig och erbjuda en skräddarsydd behandlingsplan, anpassad efter dina behov, oavsett om det är för pormaskar i ansiktet, på bröstet eller ryggen.</p>',
    ),
    'process' => new Article(
        title: 'Hur går en portömning till?',
        image_small: '/bilder/process/358x272/problemhy-process.webp',
        image_large: '/bilder/process/872x456/problemhy-process.webp',
        image_alt: 'Hur går en portömning till?',
        image_title: 'Hur går en portömning till?',
        content: '<p class="p200">Portömning är en noggrann rengöringsprocess med målet att djuprengöra porerna och avlägsna orenheter som pormaskar, vilket bidrar till en jämnare hudton och textur. Behandlingen påbörjas med att huden varsamt rengörs för att tvätta bort yttre orenheter såsom talg och smuts, följt av en peelingtvätt som exfolierar och tar bort döda hudceller. Denna exfoliering är viktig då den förbereder huden genom att öppna upp porerna, vilket gör dem redo för den följande djuprengöringen.</p>
        <p class="p200 mt-m">Efter peelingen tillämpas en mild ångbehandling med hjälp av en Vapozon. Ångan mjukar upp huden och öppnar porerna ytterligare, vilket gör det enklare att ta bort pormaskar och andra blockeringar. Detta steg är avgörande eftersom det förbereder huden för den manuella portömningen där en terapeut varsamt tömmer porerna. För de mest envisa tilltäppningarna kan en lansett användas för att försiktigt göra en öppning och möjliggöra en mer effektiv rengöring.</p>
        <p class="p200 mt-m">Efter den manuella rengöringen lugnas huden med en specialanpassad lermask, som har förmågan att minska rodnad och dra ihop porerna, vilket efterlämnar en slät och jämn hud. Avslutningsvis återfuktas huden med en närande dagkräm. Denna sista fas av behandlingen är viktig för hudens återhämtning och för att skapa en skyddande barriär mot yttre miljöfaktorer. Genom hela processen är målet inte bara att rengöra porerna utan också att återställa hudens naturliga balans och förebygga framtida hudproblem.</p>',
    ),
);

$treatment_areas_title = 'Behandlingsområden för portömning';
$treatment_areas_text = '<p class="p200">Pormaskar kan uppstå överallt på kroppen där det finns porer. Vi utför därför inte bara portömning i ansiktet utan även på brötstet och på ryggen.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        title: null,
        description: null,
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Portömning i ansiktet',
                image_title: 'Portömning i ansiktet',
                title: 'Ansikte',
                duration: '60 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Face&procedures=PriceClass_1_Procedure_1',
                url_label: 'Boka',
                url_title: 'Boka tid för portömning i ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brost.webp',
                image_alt: 'Portömning på bröstet',
                image_title: 'Portömning på bröstet',
                title: 'Bröst',
                duration: '60 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Chest&procedures=PriceClass_1_Procedure_1',
                url_label: 'Boka',
                url_title: 'Boka tid för portömning på bröstet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rygg.webp',
                image_alt: 'Portömning på ryggen',
                image_title: 'Portömning på ryggen',
                title: 'Rygg',
                duration: '60 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones&area=Facial_Back&procedures=PriceClass_1_Procedure_1',
                url_label: 'Boka',
                url_title: 'Boka tid för portömning på ryggen'
            ),
        )
    ),
);

$types_title = 'Portömning mot hudproblem';
$types_description = '';
$types = array(
    new Service(
        title: 'Ansiktsbehandling mot Pormaskar',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling anpassad för pormaskar med fokus på att rengöra porer och klämma ut pormaskar.',
        image_small: 'bilder/problem/102x102/pormaskar.webp',
        image_large: 'bilder/problem/200x200/pormaskar.webp',
        image_alt: 'Ansiktsbehandling mot Pormaskar',
        image_title: 'Ansiktsbehandling mot Pormaskar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Comedones',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Comedones',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling mot Pormaskar',

        url_label: 'Läs mer om pormaskar',
        url: '/pormaskar.php',
        url_title: 'Läs mer om pormaskar',
    ),
    new Service(
        title: 'Ansiktsbehandling mot Akne',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling anpassad för akne med fokus på att klämma ut papler, pustler och komedoner.',
        image_small: 'bilder/problem/102x102/akne.webp',
        image_large: 'bilder/problem/200x200/akne.webp',
        image_alt: 'Ansiktsbehandling mot Akne',
        image_title: 'Ansiktsbehandling mot Akne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Acne',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling mot Akne',

        url_label: 'Läs mer om akne',
        url: '/acne.php',
        url_title: 'Läs mer om akne',
    ),
    new Service(
        title: 'Ansiktsbehandling mot Finnar',
        duration: null,
        price: null,
        content: 'Ansiktsbehandling mot finnar som djuprengör, behandlar och klämmer ut finnar finnar, samtidigt som den balanserar hudens talgproduktion och minskar inflammation.',
        image_small: 'bilder/problem/102x102/finnar.webp',
        image_large: 'bilder/problem/200x200/finnar.webp',
        image_alt: 'Ansiktsbehandling mot Finnar',
        image_title: 'Ansiktsbehandling mot Finnar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_Pimples',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_Pimples',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling mot Finnar',

        url_label: 'Läs mer om finnar',
        url: '/finnar.php',
        url_title: 'Läs mer om finnar',
    ),
    new Service(
        title: 'Ansiktsbehandling för Stora Porer',
        duration: null,
        price: null,
        content: 'Denna behandling är specifikt framtagen för att behandla och minska framträdande stora porer. Vi rengör och tömmer porerna på djupet så att de blir mindre framträdande vilket resulterar i en jämnare och slätare hy.',
        image_small: 'bilder/problem/102x102/stora-porer.webp',
        image_large: 'bilder/problem/200x200/stora-porer.webp',
        image_alt: 'Ansiktsbehandling för Stora Porer',
        image_title: 'Ansiktsbehandling för Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Problem_Consultation&Consultationwhat=Problem_LargePores',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=facialProblem&problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka en Ansiktsbehandling för Stora Porer',

        url_label: 'Läs mer om stora porer',
        url: '/stora-porer.php',
        url_title: 'Läs mer om stora porer',
    ),
);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård och underhåll efter portömning',
        image_small: '/bilder/process/358x272/problemhy-eftervard.webp',
        image_large: '/bilder/process/872x456/problemhy-eftervard.webp',
        image_alt: 'Eftervård och underhåll',
        image_title: 'Eftervård och underhåll',
        content: '<p class="p200">Efter en noggrann portömning hos Acnespecialisten är rätt eftervård avgörande för att upprätthålla resultaten och främja hudens läkning. Vi rekommenderar att efter behandlingen fortsätter du med en daglig hudvårdsrutin som omfattar produkter särskilt anpassade för att vårda och balansera porerna efter tömning. För detta ändamål rekommenderar vi produkter från DAHL Skincare, som stöder balansen i din hud och arbetar för att avlägsna och minimera pormaskar.</p>
        <p class="p200 mt-m">Bra hudvård är anpassad efter dig och vi på Acnespecialisten strävar efter att skräddarsy rekommendationer som kompletterar din specifika hudtyp och behov. Genom att använda rätt hudvårdsprodukter i din dagliga rutin kan du inte bara upprätthålla de positiva effekterna av portömningen utan också stärka din hud mot framtida problem. Vi är dedikerade till att stötta dig genom hela din hudvårdsresa och ser fram emot att hjälpa dig uppnå och bibehålla en klar och hälsosam hud. Låt Acnespecialisten vara din guide och stöd på vägen mot en sund hudvårdsvana.</p>',
    ),
);

$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-1.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-1.jpg',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Svår akne">Svår akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '5 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Cazzandra Lindberg'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.jpg',
        url_title: 'Akne resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 18,
        gender: 'Kvinna',
        problem: 'Akne',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="acne.php" title="Akne">Akne</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Aknebehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår akne',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.jpg',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.jpg',
        image_after_large: '/bilder/resultat/424x424/resultat-rosacea-efter.jpg',
        url_title: 'Rosacea resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 33,
        gender: 'Kvinna',
        problem: 'Rosacea',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '<a href="rosacea.php" title="Rosacea">Rosacea</a>',
            procedures: array(
                new ResultProcedure(
                    image: 'https://via.placeholder.com/102x102.webm',
                    name: 'Rosaceabehandling',
                    count: '3 tillfällen'
                ),
            ),
            product: new ResultProduct(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Produktpaket mot svår rosacea',
            ),
            employee: new ResultEmployee(
                image: 'https://via.placeholder.com/102x102.webm',
                name: 'Julia Eklund'
            ),
        )
    ),
);

$reviews_title = 'Omdömen';
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
$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur ofta bör jag genomgå en portömning?',
            text: 'Frekvensen av portömningar varierar beroende på din hudtyp och graden av pormaskar. Ofta behöver ett kortare interval i början och därefter underhålls huden med en behandling varannan månad. För att skapa en anpassad behandlingsplan rekommenderar vi att du genomgår en konsultation med en hudspecialist.'
        ),
        new Question(
            title: 'Kommer pormaskarna tillbaka efter en portömning?',
            text: 'Portömning är effektivt för att ta bort befintliga pormaskar, men det kan inte förhindra nya från att bildas. Det är avgörande att upprätthålla en god hudvårdsrutin efter behandlingen för att minimera risken för nya pormaskar.'
        ),
        new Question(
            title: 'Hur snabbt kan jag se resultat från portömning?',
            text: 'Många kunder ser en förbättring direkt efter första behandlingen, men för att uppnå bästa möjliga resultat kan det krävas flera sessioner över en tidsperiod. Kombinationen av regelbundna portömningar och rätt hemvård är nyckeln till långsiktiga resultat.'
        ),
        new Question(
            title: 'Behöver jag en portömning även om jag bara har några få pormaskar?',
            text: 'Ja, även ett fåtal pormaskar kan behandlas med portömning. Det finns ingen minimumgräns för antalet pormaskar som krävs för att dra nytta av behandlingen. Varje hudtillstånd är unikt och kan gagnas av en personligt anpassad hudvårdsstrategi.'
        ),
    )
);
$faq_view_more = 'Se alla frågor & svar';

$skin_guide_title = 'Hudguiden';
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
);
$skin_guide_view_more = 'Se alla artiklar';

$specialists_title = 'Våra hudterpaueter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i pormaskbehandling',
        image_title: 'Cazzandra Lindberg - Expert på pormaskbehandling'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på pormaskar',
        image_title: 'Veronika Benedik - Specialist inom pormaskvård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom pormaskhantering',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på pormaskar'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot pormaskbehandling',
        image_title: 'Vilma Libom - Expert inom pormaskbehandling'
    )
);

$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Alma',
        image: 'bilder/logotyper/alma.svg',
        image_alt: 'Alma logotyp',
        image_title: 'Alma Lasermaskiner',
        url: '/varumarken/alma',
        url_title: 'Alma',
    ),
    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
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
        label: 'HydraFacial',
        image: 'bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/alma/rejuve-dye-vl',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'bilder/logotyper/cryopen.svg',
        image_alt: 'CryoPen logotyp',
        image_title: 'CryoPen - frysbehandling',
        url: '/cryopen.php',
        url_title: 'CryoPen',
    ),
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
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova',
        url_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'bilder/logotyper/lumenis.svg',
        image_alt: 'Lumenis logotyp',
        image_title: 'Lumenis - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x',
        url_title: 'Lumenis',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
    ),
    new Brand(
        label: 'Exceed',
        image: 'bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed',
        url_title: 'Exceedn',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: 'bilder/logotyper/microdermabrasion.png',
        image_alt: 'Microdermabrasion logotyp',
        image_title: 'Microdermabrasion - hudslipning',
        url: '/microdermabrasion.php',
        url_title: 'Microdermabrasion',
    ),
);
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
    <link rel="stylesheet" href="/behandlingar/service.css">
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
    <div class="is-hidden-touch is-hidden-desktop-only" id="floater">
        <div class="container">
            <div id="floating-picture" style="background-image: url('<?php echo $model->image_large ?>')">
                <div id="overlay">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                    <div>
                        <h2 class="h500">
                            <?php echo $model->title ?>
                        </h2>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-m">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-m"><?php echo $model->content ?></div>
                        <?php } ?>
                        <?php if (isset($model->procedures)) { ?>
                            <div id="floating-procedures" class="mt-xl">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="floating-procedure">
                                        <div class="p200">
                                            <?php echo $procedure->label ?>
                                        </div>
                                        <div class="floating-procedure-price">
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl">
                            <div class="columns is-2 is-variable">
                                <div class="column">
                                    <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                                </div>
                                <div class="column">
                                    <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section id="header">
            <div id="green-header-small" class="is-hidden-desktop">
                <div class="container">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/breadcrumbs/breadcrumbs.php'); ?>
                    <h1 class="h600">
                        <?php echo $model->title ?>
                    </h1>
                    <?php if (isset($model->duration)) { ?>
                        <h3 class="mt-xs p200 l10n">Längd: <?php echo $model->duration ?></h3>
                    <?php } ?>
                    <?php if (strlen($model->content) > 0) { ?>
                        <div class="mt-xs"><?php echo $model->content ?></div>
                    <?php } ?>
                    <?php if (isset($model->procedures)) { ?>
                        <div class="procedures mt-xl">
                            <?php foreach ($model->procedures as $procedure) { ?>
                                <div class="procedure">
                                    <div class="p200"><?php echo $procedure->label ?></div>
                                    <div>
                                        <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                        <span class="p200"><?php echo $procedure->savings ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="mt-xl">
                        <div class="columns is-mobile">
                            <div class="column is-half">
                                <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white expand" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            </div>
                            <div class="column is-half">
                                <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white expand" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
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
                        <div class="column is-half flex-row align-end justify-end">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                        </div>
                    </div>
                    <div id="green-header-large-text" class="mt-xxs">
                        <h1 class="h600">
                            <?php echo $model->title ?>
                        </h1>
                        <?php if (isset($model->duration)) { ?>
                            <div class="mt-xs">
                                <span class="p200 l10n">Längd: <?php echo $model->duration ?></span>
                            </div>
                        <?php } ?>
                        <?php if (strlen($model->content) > 0) { ?>
                            <div class="mt-s"><?php echo $model->content ?></div>
                        <?php } ?>
                        <?php if (isset($model->procedures)) { ?>
                            <div class="mt-xl large-procedures flex-row">
                                <?php foreach ($model->procedures as $procedure) { ?>
                                    <div class="large-procedure">
                                        <div class="p200 l10n"><?php echo $procedure->label ?></div>
                                        <div>
                                            <span class="h200 mr-xs"><?php echo $procedure->price ?></span>
                                            <span class="p200"><?php echo $procedure->savings ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="mt-xl flex-row" id="book-buttons">
                            <a href="<?php echo $model->consultation_url ?>" title="<?php echo $model->consultation_url_title ?>" class="button b200 white" title="<?php echo $model->consultation_url_label ?>"><?php echo $model->consultation_url_label ?></a>
                            <a href="<?php echo $model->booking_url ?>" title="<?php echo $model->booking_url_title ?>" class="button b200 white" title="<?php echo $model->booking_url_label ?>"><?php echo $model->booking_url_label ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div id="content">
                <section id="badges" class="mt-m mb-s is-hidden-desktop">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/badges/badges.php'); ?>
                </section>
                <section id="image" class="is-hidden-desktop">
                    <picture>
                        <source media="(max-width: 449px)" srcset="<?php echo $model->image_small ?>">
                        <source media="(min-width: 450px)" srcset="<?php echo $model->image_large ?>">
                        <img src="<?php echo $model->image_large ?>" alt="<?php echo $model->image_alt ?>" title="<?php echo $model->image_title ?>" width="358" height="274" />
                    </picture>
                </section>
                <section id="nav-buttons">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/nav_buttons/nav_buttons.php'); ?>
                </section>
                <section id="about">
                    <h2 class="h500"><?php echo $description_title ?></h2>
                    <div class="mt-xl"><?php echo $description_text ?></div>
                </section>

                <?php foreach ($top_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php if (isset($treatment_areas_title)) { ?>
                            <h2 class="big l10n"><?php echo $treatment_areas_title ?></h2>
                        <?php } ?>
                        <?php if (isset($treatment_areas_text)) { ?>
                            <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php } ?>
                        <div class="mt-m">
                            <?php foreach ($treatment_areas as $treatment_area) {
                                if (isset($treatment_area->image_small)) { ?>
                                    <picture>
                                        <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                        <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                        <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                    </picture>
                                <? }
                                if (isset($treatment_area->title)) { ?>
                                    <h3 class="h300 mt-xl"><?php echo $treatment_area->title ?></h3>
                                <?php }
                                if (isset($treatment_area->description)) { ?>
                                    <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                            <?php }
                                foreach ($treatment_area->items as $treatment_area_item) {
                                    include('behandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
                                }
                            } ?>
                        </div>
                    </section>
                <?php } ?>
                <?php if (isset($types_title)) { ?>
                    <section id="types" class="large-margin">
                        <h2 class="h500"><?php echo $types_title; ?></h2>
                        <?php if (isset($types_description)) { ?>
                            <p class="p200 mt-xs"><?php echo $types_description ?></p>
                        <?php } ?>
                        <div class="mt-xl"></div>
                        <?php if (isset($types)) { ?>
                            <?php foreach ($types as $service) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $service) { ?>
                                <div class="big-type">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card_big/service_card_big.php') ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php if (isset($combos) && isset($combos_title)) { ?>
                    <section id="combos" class="large-margin">
                        <h2 class="big l10n"><?php echo $combos_title ?></h2>
                        <?php foreach ($combos as $combo) { ?>
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_combo/service_combo.php') ?>
                        <?php } ?>
                    </section>
                <?php } ?>
                <?php foreach ($bottom_articles as $id => $article) { ?>
                    <section id="<?php echo $id ?>">
                        <?php
                        include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/article/article_widget.php');
                        ?>
                    </section>
                <?php } ?>
                <?php if (isset($service_brands)) { ?>
                    <section id="service-brands" class="large-margin">
                        <?php if (isset($service_brands_title)) { ?>
                            <h2 class="h500"><?php echo $service_brands_title ?></h2>
                        <?php } ?>
                        <?php if (isset($service_brands_text)) { ?>
                            <div class="mt-xs"><?php echo $service_brands_text ?></div>
                        <?php } ?>
                        <div class="mt-xl">
                            <?php
                            $brands = $service_brands;
                            include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                            ?>
                        </div>
                    </section>
                <?php } ?>
                <section id="results" class="large-margin">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/results/results_narrow.php') ?>
                </section>
                <section id="reviews" class="large-margin">
                    <div class="flex-row align-end justify-space-between">
                        <h2 class="big l10n"><?php echo $reviews_title ?></h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="fragor-svar.php" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor"><?php echo $faq_view_more ?></a>
                </section>
                <!--Hudguide-->
                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specilaister"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
            <section id="brands">
                <div class="flex-row align-end justify-space-between">
                    <h2 class="big l10n"><?php echo $brands_title ?></h2>
                    <a href="varumarken" class="button compact text is-hidden-mobile">
                        <span class="l10n">Se alla varumärken</span>
                        <?php icon('navigate-next') ?>
                    </a>
                </div>
                <?php
                $brands = $all_brands;
                include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/brands/brands.php');
                ?>
                <a class="mt-xl button b200 outline expand auto-width is-hidden-desktop l10n" href="varumarken" title="Se alla varumärken">Se alla varumärken</a>
            </section>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>