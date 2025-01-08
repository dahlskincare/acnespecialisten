<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Laserbehandling ansikte och kropp i Stockholm';
$seo_description = 'Avancerade laserbehandlingar för att effektivt hantera olika typer av hudproblem i ansiktet och på kroppen. Boka gratis konsultation idag!';
$seo_keywords = 'laserbehandling, ansikte, kropp';
$seo_image = '/images/treatments/large/laser.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Laser mot hudproblem', '/hudbehandlingar/laser-mot-hudproblem/'),
);

$model = new Service(
    title: 'Laserbehandling för ansikte och kropp',
    duration: null,
    price: null,
    content: '<p class="p200">Hos AcneSpecialisten använder vi en rad avancerade lasertekniker för att effektivt behandla en mängd hudproblem, vilket bidrar till märkbara förbättringar i hudens kvalitet och utseende.</p>',
    image_small: 'bilder/hudbehandlingar/358x274/laser-mot-problemhy.webp',
    image_large: 'bilder/hudbehandlingar/424x456/laser-mot-problemhy.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Vi använder de senaste laserteknikerna som är effektiva mot en lång rad hudproblem.';

$description_title = 'Vad är laserbehandling?';
$description_text = '<p class="p200">Laser är en avancerad teknologi som använder ljusstrålar med hög intensitet för att behandla ett brett spektrum av hudproblem. Denna teknik utnyttjar olika våglängder och styrkor anpassade för specifika tillstånd och hudtyper, vilket gör den extremt mångsidig. </p>
<p class="p200 mt-m">Exempel på lasertyper inkluderar CO2-lasern, som är effektiv för att minska acneärr, stora porer och fina linjer genom att stimulera hudens förnyelseprocess. YAG-lasern är en annan variant som ofta används för djupare penetration, idealisk för pigmentförändringar och hårborttagning. Alexandritlaser är föredragen för hårborttagning på ljusare hudtoner, medan diodlasern passar för en rad olika hudtyper och behandlingsområden.</p>
<p class="p200 mt-m">Varje laser typ har unika egenskaper som gör den lämplig för olika behandlingsmål, från hudförnyelse och förbättrad hudtextur till minskning av pigmentfläckar och hårborttagning. På AcneSpecialisten anpassar vi behandlingen efter dina individuella behov och hudproblem, med målet att förbättra din hudkvalitet och ge en ungdomligare utstrålning. Vårt utbud av laserbehandlingar ger effektiva lösningar för en mängd hudåkommor, inklusive porförminskning, ärrbehandling, och hudföryngring.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/laser-forberedelser.webp',
        image_large: '/bilder/process/872x456/laser-forberedelser.webp',
        image_alt: 'Förberedelser inför laserbehandling',
        image_title: 'Förberedelser inför laserbehandling',
        content: '<p class="p200">Inför din laserbehandling rekommenderar vi att du börjar med en kostnadsfri konsultation. Detta steg är nödvändigt för att vi ska kunna förstå dina specifika behov och förbereda en behandlingsplan för just dig. Under konsultationen diskuterar vi din hudtyp, eventuella hudproblem och dina mål med behandlingen. Vi tar även en titt på din nuvarande hudvårdsrutin och gör nödvändiga justeringar inför behandlingen.</p>
        <p class="p200 mt-m">För att förbereda din hud för laserbehandlingen är det viktigt att du undviker solbränna och stark sol under veckorna före behandlingen. Solbränd hud kan vara mer känslig, vilket kan påverka behandlingens effektivitet och säkerhet. Dessutom rekommenderas att du undviker hudvårdsprodukter med starka ingredienser, som exfolierande syror, minst en vecka före din behandling för att minimera risken för irritation.</p>
        <p class="p200 mt-m">Din säkerhet och komfort är vår högsta prioritet. Vi uppmuntrar dig att dela alla hudrelaterade tillstånd eller bekymmer under konsultationen. Detta säkerställer att vi kan skräddarsy behandlingen efter dina unika behov och ge dig den bästa möjliga upplevelsen och resultaten med vår laserbehandling.</p>',
    ),
    'process' => new Article(
        title: 'Hur fungerar behandlingen?',
        image_small: '/bilder/process/358x272/laser-process.webp',
        image_large: '/bilder/process/872x456/laser-process.webp',
        image_alt: 'Hur går laserbehandlingen till?',
        image_title: 'Hur går laserbehandlingen till?',
        content: '<p class="p200">Vi startar med en noggrann rengöring av ditt behandlingsområde. Detta är en viktig del i processen för att säkerställa att huden är fri från smuts och oljor, vilket gör behandlingen mer effektiv.</p>
        <p class="p200 mt-m">För vissa av de mer avancerade laserbehandlingarna vi erbjuder, är det nödvändigt att förbereda huden med en bedövande kräm före själva behandlingsprocessen. Denna kräm bör appliceras på behandlingsområdet och får verka på huden i cirka 30 min. Denna förberedelse är särskilt viktig för behandlingar som använder vår avancerade fraktionerade CO2-laser, för att säkerställa en bekväm upplevelse under hela behandlingen.</p>
        <p class="p200 mt-m">Under behandlingen kan du känna en värmande känsla, men vi använder kylsystem för att göra upplevelsen så bekväm som möjligt. Efter behandlingen kan det uppstå rodnad och svullnad, vilket är en normal reaktion och en del av läkningsprocessen. Vi ger dig noggranna instruktioner för eftervård för att säkerställa en snabb och smidig läkningsprocess. Resultaten från behandlingen utvecklas över tid, när huden gradvis förnyas och förbättras från insidan.</p>',
    ),
);

$types_title = 'Hudproblem som behandlas';
$types_description = '<p class="p200">Våra laserbehandlingar är effektiva för en rad olika hudproblem, tack vare dess förmåga att stimulera hudens egen läkningsprocess och kollagenproduktion. Nedan listar vi de hudproblem som vi effektivt behandlar med vår lasertekniker.</p>';
$types = array(
    new Service(
        title: 'Laserbehandling mot Acneärr',
        duration: '90 min',
        price: '4595 kr',
        content: 'Beroende på typen av acneärr, antingen gropar eller fläckar, anpassas laserbehandlingen med specifik laserteknologi. För att utforska den mest effektiva behandlingen för dina ärr, rekommenderar vi en konsultation.',
        image_small: 'bilder/hudproblem/102x102/acnearr.webp',
        image_large: 'bilder/hudproblem/200x200/acnearr.webp',
        image_alt: 'Laserbehandling mot Acneärr',
        image_title: 'Laserbehandling mot Acneärr',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/laser-acnearr.php',
        url_label: 'Läs mer om laser mot acneärr',
        url_title: 'Läs mer om laser mot acneärr',
    ),
    new Service(
        title: 'Laserbehandling mot Aktiv Acne',
        duration: '50 min',
        price: '2595 kr',
        content: 'Laserbehandling mot acne syftar till att eliminera bakterierna som orsakar finnar. Genom att rikta värme djupt in i finnarna bidrar lasern till att de minskar i storlek och så småningom försvinner.',
        image_small: 'bilder/hudproblem/102x102/acne.webp',
        image_large: 'bilder/hudproblem/200x200/acne.webp',
        image_alt: 'Laserbehandling mot Aktiv Acne',
        image_title: 'Laserbehandling mot Aktiv Acne',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/laser-acne.php',
        url_label: 'Läs mer om laser mot akne',
        url_title: 'Läs mer om laser mot akne',
    ),
    new Service(
        title: 'Laserbehandling mot Ytliga Blodkärl',
        duration: '50 min',
        price: '2595 kr',
        content: ' Behandling med laser mot ytliga blodkärl innebär att laserljuset riktas mot hemoglobin i de synliga kärlen, vilket effektivt bryter ner dem och minskar deras synlighet.',
        image_small: 'bilder/hudproblem/102x102/ytliga-blodkarl.webp',
        image_large: 'bilder/hudproblem/200x200/ytliga-blodkarl.webp',
        image_alt: 'Laserbehandling mot Ytliga Blodkärl',
        image_title: 'Laserbehandling mot Ytliga Blodkärl',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/ipl-ytliga-blodkarl.php',
        url_label: 'Läs mer om laser mot ytliga blodkärl',
        url_title: 'Läs mer om laser mot ytliga blodkärl',
    ),
    new Service(
        title: 'Laserbehandling mot Rosacea',
        duration: '50 min',
        price: '2595 kr',
        content: 'Laserbehandling för rosacea fokuserar på att minska inflammation i blodkärlen och huden samt att dämpa rodnad, vilket bidrar till en klarare och mer jämn hudton.',
        image_small: 'bilder/hudproblem/102x102/rosacea.webp',
        image_large: 'bilder/hudproblem/200x200/rosacea.webp',
        image_alt: 'Laserbehandling mot Rosacea',
        image_title: 'Laserbehandling mot Rosacea',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Rosacea&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/ipl-rosacea.php',
        url_label: 'Läs mer om laser mot rosacea',
        url_title: 'Läs mer om laser mot rosacea',
    ),
    new Service(
        title: 'Laserbehandling mot Pigmentfläckar',
        duration: '50 min',
        price: '2595 kr',
        content: 'Vid behandling av pigmentfläckar riktas laserenergi mot melaninpigmentet för att successivt minska fläckarnas synlighet och främja en enhetlig hudton.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Laserbehandling mot Pigmentfläckar',
        image_title: 'Laserbehandling mot Pigmentfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om laser mot pigmentfläckar',
        url_title: 'Läs mer om laser mot pigmentfläckar',
    ),
    new Service(
        title: 'Laserbehandling mot Melasma',
        duration: '50 min',
        price: '2595 kr',
        content: 'Behandling mot melasma inriktar sig på att rikta laserenergin mot det djupare liggande melaninet, vilket är karakteristiskt för melasma, för att effektivt ljusa upp och reducera pigmenteringen.',
        image_small: 'bilder/hudproblem/102x102/melasma.webp',
        image_large: 'bilder/hudproblem/200x200/melasma.webp',
        image_alt: 'Laserbehandling mot Melasma',
        image_title: 'Laserbehandling mot Melasma',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Melasma&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/melasma.php',
        url_label: 'Läs mer om melasma',
        url_title: 'Läs mer om melasma',
    ),
    new Service(
        title: 'Laserbehandling mot Stora Porer',
        duration: '90 min',
        price: '4595 kr',
        content: 'Fokuserar på att minska porernas storlek genom att stimulera kollagenproduktionen under huden, vilket leder till en slätare och mer enhetlig hudton.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Laserbehandling mot Stora Porer',
        image_title: 'Laserbehandling mot Stora Porer',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/stora-porer.php',
        url_label: 'Läs mer om stora porer',
        url_title: 'Läs mer om stora porer',
    ),
    new Service(
        title: 'Laserbehandling mot Hudutväxter',
        duration: '20 min',
        price: 'Från 1595 kr',
        content: 'Använder en specifik våglängd av laserljus för att direkt bränna bort pigmentet i leverfläckar och födelsemärken, vilket effektivt tar bort dessa hudförändringar.',
        image_small: 'bilder/hudproblem/102x102/hudforandringar.webp',
        image_large: 'bilder/hudproblem/200x200/hudforandringar.webp',
        image_alt: 'Laserbehandling mot Hudutväxter',
        image_title: 'Laserbehandling mot Hudutväxter',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Moles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/hudproblem/hudforandringar/',
        url_label: 'Läs mer om behandling av hudförändringar',
        url_title: 'Läs mer om behandling av hudförändringar',
    ),
    new Service(
        title: 'Laserbehandling mot Bristningar',
        duration: '90 min',
        price: '4595 kr',
        content: 'Använder laserljus för att stimulera hudens kollagenproduktion, vilket minskar synligheten av bristningar och förbättrar hudens textur.',
        image_small: 'bilder/hudproblem/102x102/bristningar.webp',
        image_large: 'bilder/hudproblem/200x200/bristningar.webp',
        image_alt: 'Laserbehandling för Bristningar',
        image_title: 'Laserbehandling för Bristningar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/hudproblem/bristningar/',
        url_label: 'Läs mer om bristningar',
        url_title: 'Läs mer om bristningar',
    ),
    new Service(
        title: 'Laserbehandling mot Ärr (Skade- och Operationsärr)',
        duration: '30 min',
        price: '2995 kr',
        content: 'Riktar in sig på att mjuka upp och minska ärrvävnad, vilket bidrar till att ärr blir mindre framträdande och huden jämnare.',
        image_small: 'bilder/hudproblem/102x102/operations-skadearr.webp',
        image_large: 'bilder/hudproblem/200x200/operations-skadearr.webp',
        image_alt: 'Laserbehandling mot Ärr',
        image_title: 'Laserbehandling mot Ärr',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Scars&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/laser-arr.php',
        url_label: 'Läs mer om laser mot ärr',
        url_title: 'Läs mer om laser mot ärr',
    ),
    new Service(
        title: 'Laserbehandling mot Rynkor och Fina Linjer',
        duration: '90 min',
        price: '4595 kr',
        content: 'Laserbehandling mot rynkor och fina linjer fungerar genom att försiktigt avlägsna det yttersta hudlagret samtidigt som det stimulerar produktionen av ny hud och kollagen. Detta bidrar till att minska rynkor och fina linjer, vilket resulterar i en slätare och yngre hud.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Laserbehandling mot Rynkor och Fina Linjer',
        image_title: 'Laserbehandling mot Rynkor och Fina Linjer',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Laser',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=Problem_Wrinkles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),
);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">Vår laserbehandling är anpassningsbar för en rad olika områden, vilket gör den idealisk för att adressera specifika hudproblem på olika delar av kroppen. Vi behandlar områden som ansikte, hals, dekolletage, rygg och händer, samt specifika ansiktsområden som panna, näsa, kinder, överläpp och haka. Denna teknik möjliggör precisionsbehandling för att förbättra hudens kvalitet och utseende, oavsett område.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Vi behandlar både hela och delar av ansiktet med laser.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/rygg.svg',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_Hands',
                url_label: 'Boka',
                url_title: 'Boka tid för handbehandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Kombinera flera områden för ett jämnare resultat.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: '/icons/2x.svg',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '100 min',
                price: '5595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: '/icons/3x.svg',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '110 min',
                price: '6595 kr',
                url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: '/bilder/process/358x272/laser-eftervard.webp',
    image_large: '/bilder/process/872x456/laser-eftervard.webp',
    image_alt: 'Eftervård för laserbehandling',
    image_title: 'Eftervård för laserbehandling',
    content: '<p class="p200">Eftervård är en avgörande del av din laserbehandlingsprocess för att säkerställa bästa möjliga resultat och snabb återhämtning. Omedelbart efter din laserbehandling kan du uppleva rodnad och viss svullnad i det behandlade området, vilket är normalt. Det är viktigt att inte röra området med orena händer och att undvika att applicera makeup under de första 24 timmarna för att förhindra irritation och infektioner.</p>
    <p class="p200 mt-m">Under återhämtningsperioden, undvik intensiv fysisk aktivitet, heta duschar och bastu, då detta kan förvärra svullnad och rodnad. Användning av hög SPF-solskydd är avgörande för att skydda den känsliga huden från solskador. Välj milda, återfuktande hudvårdsprodukter utan irriterande ämnen för att hjälpa till med läkningsprocessen och bevara hudens fuktighet.</p>
    <p class="p200 mt-m">Följ de specifika eftervårdsinstruktionerna som ges av din hudterapeut noggrant. Om du har några frågor eller funderingar efter din behandling, tveka inte att kontakta din personliga hudterapeut för råd. Regelbundna uppföljningar och ytterligare behandlingar kan rekommenderas baserat på din hudtyp och de mål du har för din hud.</p>',
));

$service_brands_title = 'Varumärken för laserbehandling i Stockholm';
$service_brands_text = '<p class="p200">Vi har ett stort utbud av lasermaskiner för att kunna välja rätt metod för just dina behov.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Hybrid',
        image: 'bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
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
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl/',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova/',
        url_title: 'Powerlite Photonova',
    ),
);

$results_title = 'Laserbehandling före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
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
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-efter-2.webp',
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
        image_before_small: '/bilder/resultat/358x358/resultat-rosacea-fore.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-rosacea-efter.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-rosacea-fore.webp',
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
            title: 'Hur många laserbehandlingar krävs?',
            text: '<p class="p200">Antalet laserbehandlingar för problemhy varierar beroende på individens specifika hudproblem och mål. Ofta rekommenderas en serie av 3-5 behandlingar. En individuell behandlingsplan och rekommendationer kommer att ges under en konsultation.</p>'
        ),
        new Question(
            title: 'Är resultaten från laserbehandling mot problemhy bestående?',
            text: '<p class="p200">Vårt primära mål med laserbehandling är att erbjuda en effektiv lösning för specifika hudproblem. Varje behandlingsplan skräddarsys utifrån individuella behov och mål, vilket vi grundligt går igenom under den initiala konsultationen. Detta säkerställer att du har realistiska förväntningar på vad som kan uppnås. När det gäller hudproblem, uppnår vi ofta långvariga förbättringar genom att målmedvetet adressera och behandla underliggande tillstånd. Det är dock viktigt att förstå att åldrande hud är en naturlig process som inte kan stoppas helt. Våra laserbehandlingar kan dock markant förbättra hudens utseende genom att minska synligheten av rynkor, fina linjer och slapphet, vilket ger ett friskare och mer ungdomligt utseende. Vi strävar efter att ge dig bestående resultat där det är möjligt, men rekommenderar även en anpassad hudvårdsrutin för att upprätthålla dessa resultat över tid.</p>'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig direkt efter en laserbehandling?',
            text: '<p class="p200">Efter en laserbehandling mot problemhy kan du uppleva viss rodnad, svullnad eller känslighet i det behandlade området. Dessa reaktioner är normala och bör avta inom några dagar. Det är viktigt att följa eftervårdsinstruktionerna och skydda huden mot solen.</p>'
        ),
        new Question(
            title: 'Behöver jag speciell eftervård efter en laserbehandling?',
            text: '<p class="p200">Eftervård är viktig för att upprätthålla resultaten av din laserbehandling. Det innefattar användning av solskydd, undvikande av direkt solstrålning och användning av milda hudvårdsprodukter. Din hudterapeut kommer att ge dig specifika råd baserade på din behandling och hudtyp.</p>'
        ),
        new Question(
            title: 'Hur lång tid mellan laserbehandlingarna?',
            text: '<p class="p200">Tiden mellan laserbehandlingar kan variera beroende på typen av laser, behandlingens intensitet och det specifika hudtillståndet som behandlas. Generellt rekommenderas en paus på 4 till 6 veckor mellan sessionerna för de flesta laserbehandlingar. Denna tidsram ger huden tillräckligt med tid att läka och regenerera sig själv. För vissa mer intensiva laserbehandlingar, som CO2-lasern, kan det behövas en längre återhämtningstid. Det är viktigt att följa din hudvårdsspecialists rekommendationer för att uppnå bästa möjliga resultat och säkerställa en säker läkningsprocess.</p>'
        ),
        new Question(
            title: 'Vad ska jag göra om jag nyligen har solbränt hud?',
            text: '<p class="p200">Vi rekommenderar att du väntar med laserbehandling tills din solbränna har bleknat helt. Solbränd hud har en ökad risk för negativa effekter, såsom brännskador eller pigmentförändringar efter behandlingen. Det är viktigt att skydda huden från solen före och efter laserbehandlingen för att maximera resultaten och minimera riskerna.</p>'
        ),
        new Question(
            title: 'Är det säkert att genomgå laserbehandling om jag är gravid?',
            text: '<p class="p200">Som en försiktighetsåtgärd rekommenderar vi inte laserbehandlingar för gravida kvinnor. Det finns begränsad forskning om effekterna av laserbehandlingar under graviditeten, så vi föreslår att vänta med behandlingen tills efter graviditeten och amningsperioden.</p>'
        ),
        new Question(
            title: 'Kan alla hudtyper behandlas säkert med laser?',
            text: '<p class="p200">De flesta hudtyper kan behandlas med laser, men det finns vissa begränsningar. Personer med mycket mörk hud kan ha en ökad risk för pigmentförändringar som ett resultat av vissa lasertyper. Under den initiala konsultationen bedömer vi din hudtyp och eventuella risker för att säkerställa att behandlingen är säker och effektiv för dig.</p>'
        ),
    )
);
$faq_view_more = 'Se alla frågor & svar';



$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i laserbehandling av hudproblem',
        image_title: 'Cazzandra Lindberg - Expert på laserbehandling av hudproblem'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på laserbehandling av hudproblem',
        image_title: 'Veronika Benedik - Specialist inom laserbehandling av hudproblem'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom laserbehandling av hudproblem',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på laserbehandling av hudproblem'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot laserbehandling av hudproblem',
        image_title: 'Vilma Libom - Expert inom laserbehandling av hudproblem'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/laser-mot-hudproblem/" />

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
    <link rel="stylesheet" href="/hudbehandlingar/service.css">
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
                <?php if (isset($types_title)) { ?>
                    <section id="types" class="large-margin">
                        <h2 class="h500"><?php echo $types_title; ?></h2>
                        <?php if (isset($types_description)) { ?>
                            <p class="p200 mt-xs"><?php echo $types_description ?></p>
                        <?php } ?>
                        <div class="mt-xl"></div>
                        <?php if (isset($types)) { ?>
                            <?php foreach ($types as $scm) { ?>
                                <hr class="is-hidden-touch" />
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/service_card/service_card.php') ?>
                            <?php } ?>
                            <hr class="is-hidden-touch" />
                        <?php } ?>
                        <?php if (isset($big_types)) { ?>
                            <?php foreach ($big_types as $scm) { ?>
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
                <?php if (isset($treatment_areas)) { ?>
                    <section id="treatment-areas" class="large-margin">
                        <?php if (isset($treatment_areas_title)) { ?>
                            <h2 class="big l10n"><?php echo $treatment_areas_title ?></h2>
                        <?php } ?>
                        <?php if (isset($treatment_areas_text)) { ?>
                            <div class="mt-xs"><?php echo $treatment_areas_text ?></div>
                        <?php } ?>
                        <?php foreach ($treatment_areas as $treatment_area) { ?>
                            <?php if (isset($treatment_area->image_small)) { ?>
                                <picture>
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img loading="lazy" class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl4"><?php echo $treatment_area->title ?></h3>
                            <div class="mb-xl"><?php echo $treatment_area->description ?></div>
                        <?php
                            foreach ($treatment_area->items as $treatment_area_item) {
                                include('../widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
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

                <section id="reviews" class="large-margin">
                    <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="https://se.trustpilot.com/review/acnespecialisten.se" title="Se alla omdömen"><?php echo $reviews_view_more ?></a>
                </section>
                <section id="faq" class="large-margin">
                    <h2 class="big l10n"><?php echo $faq_title ?></h2>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/faq/faq.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="fragor-svar.php" title="Se alla frågor"><?php echo $faq_view_more ?></a>
                </section>

                <section id="specialists" class="large-margin">
                    <div class="flex-row justify-space-between">
                        <h2 class="big l10n"><?php echo $specialists_title ?></h2>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>