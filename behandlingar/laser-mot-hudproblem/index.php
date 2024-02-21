<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Laser mot Hudproblem - Effektiva Resultat | AcneSpecialisten';
$seo_description = 'AcneSpecialisten erbjuder avancerade laserbehandlingar för att effektivt hantera problemhy. Våra CO2-laserbehandlingar är speciellt designade för att behandla acneärr, ojämn hudton och textur. Upplev förbättrad hudkvalitet och reduktion av hudproblem med vår expertis inom laserterapi.';
$seo_keywords = 'CO2-laser, laserbehandling, problemhy, acneärr, förbättrad hudton, hudtextur, avancerad hudvård, AcneSpecialisten, effektiv hudbehandling, hudförnyelse';

$seo_image = '/images/treatments/large/laser.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/behandlingar.php'),
    new PathSegment('Laser mot hudproblem', '/behandlingar/laser-mot-hudproblem/'),
);

$model = new Service(
    title: 'Laser mot hudproblem',
    duration: null,
    price: 'Från 4595 kr',
    content: '<p class="p200">På AcneSpecialisten erbjuder vi fraktionerad CO2-laserbehandling, en avancerad metod för att effektivt behandla problemhy. Denna laserterapi är särskilt effektiv mot acneärr, ojämn hudton och textur, och ger märkbara förbättringar i hudkvaliteten.</p>',
    image_small: 'bilder/behandlingar/358x274/laser-mot-problemhy.webp',
    image_large: 'bilder/behandlingar/424x456/laser-mot-problemhy.webp',
    image_alt: 'Ansiktsbehandlingar för problemhy',
    image_title: 'Ansiktsbehandlingar för problemhy',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=laserProblem',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Fraktionerad CO2-laserbehandling är det senaste och mest effektiva mot en lång rad hudproblem.';

$nav_buttons = array(
    'about' => 'Om laser mot problemhy',
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

$description_title = 'Vad är laser mot hudproblem?';
$description_text = '<p class="p200">Vår fraktionerade CO2-laserbehandling på AcneSpecialisten sträcker sig även till att effektivt behandla stora porer, ett vanligt hudproblem som många upplever. Denna avancerade lasermetod är idealisk för att förfina hudens textur och minska synligheten av förstorade porer. Genom att målinriktat behandla de drabbade områdena, arbetar lasern för att stimulera hudens naturliga förnyelseprocess och därigenom förbättra hudens struktur.</p>
<p class="p200 mt-m">Genom att exfoliera det yttre hudlagret och stimulera kollagenproduktionen under huden, bidrar behandlingen till att dra åt och minimera storleken på porerna. Detta leder inte bara till en synlig förbättring av porernas utseende utan även till en övergripande jämnare och klarare hudton. Vår fraktionerade CO2-laser är således en utmärkt behandlingsmetod för dig som vill uppnå en förfinad hudtextur och en minskning av stora porer, samtidigt som du behandlar andra hudproblem som ärrbildning, rynkor och fina linjer.</p>
<p class="p200 mt-m">Oavsett dina hudproblem, vårt mål på AcneSpecialisten är att erbjuda effektiva och skräddarsydda behandlingar som förbättrar din hudkvalitet och ger dig en mer ungdomlig och fräsch utstrålning.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför laser mot problemhy',
        image_small: null,
        image_large: null,
        image_alt: 'Förberedelser inför laser mot problemhy',
        image_title: 'Förberedelser inför laser mot problemhy',
        content: '<p class="p200">Inför din laserbehandling mot problemhy på AcneSpecialisten, rekommenderar vi att du börjar med en kostnadsfri konsultation. Detta steg är essentiellt för att vi ska kunna förbereda din hud optimalt och förstå dina specifika behov. Under konsultationen diskuterar vi din hudtyp, eventuella hudproblem och dina mål med behandlingen. Vi tar även en titt på din nuvarande hudvårdsrutin och gör nödvändiga justeringar inför behandlingen.</p>
        <p class="p200 mt-m">För att förbereda din hud för laserbehandlingen är det viktigt att du undviker solbränna och stark sol under veckorna före behandlingen. Solbränd hud kan vara mer känslig, vilket kan påverka behandlingens effektivitet och säkerhet. Dessutom rekommenderas att du undviker hudvårdsprodukter med starka ingredienser, som exfolierande syror, minst en vecka före din behandling för att minimera risken för irritation.</p>
        <p class="p200 mt-m">Din säkerhet och komfort är vår högsta prioritet. Vi uppmuntrar dig att dela alla hudrelaterade tillstånd eller bekymmer under konsultationen. Detta säkerställer att vi kan skräddarsy behandlingen efter dina unika behov och ge dig den bästa möjliga upplevelsen och resultaten med vår laserbehandling.</p>',
    ),
    'process' => new Article(
        title: 'Hur går laser mot problemhy till?',
        image_small: null,
        image_large: null,
        image_alt: 'Hur går laser mot problemhy till?',
        image_title: 'Hur går laser mot problemhy till?',
        content: '<p class="p200">När du kommer till AcneSpecialisten för en laserbehandling mot problemhy, startar vi med en noggrann rengöring av ditt behandlingsområde. Detta är en viktig del i processen för att säkerställa att huden är fri från smuts och oljor, vilket gör behandlingen mer effektiv.</p>
        <p class="p200 mt-m">Vår fraktionerade CO2-laserbehandling involverar användning av avancerad laser-teknologi för att rikta in sig på djupet av huden. Lasern skapar mikroskopiska "zoner" av skada i huden, vilket stimulerar hudens naturliga läkningsprocess och främjar kollagen- och elastinproduktion. Denna process hjälper till att minska synligheten av ärr, inklusive acneärr, operationsärr, och bristningar. Den är även effektiv för att behandla rynkor och fina linjer, samt utföra huduppfräschning och hudresurfacing.</p>
        <p class="p200 mt-m">Under behandlingen kan du känna en värmande känsla, men vi använder kylsystem och bedövningsmedel för att göra upplevelsen så bekväm som möjligt. Efter behandlingen kan det uppstå rodnad och svullnad, vilket är en normal reaktion och en del av läkningsprocessen. Vi ger dig noggranna instruktioner för eftervård för att säkerställa en snabb och smidig läkningsprocess. Resultaten från behandlingen utvecklas över tid, när huden gradvis förnyas och förbättras från insidan.</p>',
    ),
);

$types_title = 'Hudproblem som behandlas med laser';
$types_description = '<p class="p200">Vår laserbehandling är effektiv för en rad olika hudproblem, tack vare dess förmåga att stimulera hudens egen läkningsprocess och kollagenproduktion. Nedan listar vi de hudproblem som vi effektivt behandlar med vår lasermetod.</p>';
$types = array(
    new Service(
        title: 'Laserbehandling mot Acneärr',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Vår laserbehandling är särskilt effektiv för att minska synligheten av acneärr. Genom att använda fraktionerad CO2-laser stimuleras hudens naturliga läkningsprocess, vilket bidrar till en jämnare hudstruktur och minskning av ärr.',
        image_small: 'bilder/problem/102x102/acnearr.webp',
        image_large: 'bilder/problem/200x200/acnearr.webp',
        image_alt: 'Laserbehandling mot Acneärr',
        image_title: 'Laserbehandling mot Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Rynkor och Fina Linjer',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Denna laserbehandling syftar till att föryngra huden genom att minska uppkomsten av rynkor och fina linjer. Med hjälp av fraktionerad CO2-laser stimuleras kollagenproduktionen, vilket resulterar i en fastare och mer ungdomlig hud.',
        image_small: 'bilder/problem/102x102/mogen-hy.webp',
        image_large: 'bilder/problem/200x200/mogen-hy.webp',
        image_alt: 'Laserbehandling mot Rynkor och Fina Linjer',
        image_title: 'Laserbehandling mot Rynkor och Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Bristningar',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Vår laserbehandling erbjuder en effektiv lösning för att reducera synligheten av bristningar. Genom att använda fraktionerad CO2-laser, behandlas de berörda områdena för att främja hudens naturliga läkningsprocess och förbättra hudens textur.',
        image_small: 'bilder/problem/102x102/bristningar.webp',
        image_large: 'bilder/problem/200x200/bristningar.webp',
        image_alt: 'Laserbehandling för Bristningar',
        image_title: 'Laserbehandling för Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Ärr (Skade- och Operationsärr)',
        duration: '30 minuter',
        price: '2995 kr',
        content: 'Denna laserbehandling är speciellt anpassad för att minska synligheten av skade- och operationsärr. Genom att använda avancerad CO2-laser stimuleras hudens förnyelseprocess för att mjuka upp och släta ut ärrvävnad.',
        image_small: 'bilder/problem/102x102/operations-skadearr.webp',
        image_large: 'bilder/problem/200x200/operations-skadearr.webp',
        image_alt: 'Laserbehandling mot Ärr',
        image_title: 'Laserbehandling mot Ärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Scars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Pigmentfläckar',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår laserbehandling riktar sig mot pigmentfläckar och ojämn hudton. Med fraktionerad CO2-laser behandlas områden med hyperpigmentering för att jämna ut hudtonen och återställa en naturlig lyster i huden.',
        image_small: 'bilder/problem/102x102/pigmentflackar.webp',
        image_large: 'bilder/problem/200x200/pigmentflackar.webp',
        image_alt: 'Laserbehandling mot Pigmentfläckar',
        image_title: 'Laserbehandling mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Melasma',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår laserbehandling mot melasma använder CO2-laser för att effektivt ljusa upp och behandla mörka fläckar orsakade av melasma, vilket leder till en mer jämn och klar hudton.',
        image_small: 'bilder/problem/102x102/melasma.webp',
        image_large: 'bilder/problem/200x200/melasma.webp',
        image_alt: 'Laserbehandling mot Melasma',
        image_title: 'Laserbehandling mot Melasma',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Melasma',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Ytliga Blodkärl',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Effektiv behandling av ytliga blodkärl med vår fraktionerad CO2-laser. Denna metod fokuserar på att minska synligheten av ytliga blodkärl och förbättra hudens övergripande utseende.',
        image_small: 'bilder/problem/102x102/ytliga-blodkarl.webp',
        image_large: 'bilder/problem/200x200/ytliga-blodkarl.webp',
        image_alt: 'Laserbehandling mot Ytliga Blodkärl',
        image_title: 'Laserbehandling mot Ytliga Blodkärl',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Rosacea',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Avancerad laserbehandling som effektivt reducerar symtomen av rosacea. Fraktionerad CO2-laser används för att lugna huden och minska rodnad och inflammation associerad med detta tillstånd.',
        image_small: 'bilder/problem/102x102/rosacea.webp',
        image_large: 'bilder/problem/200x200/rosacea.webp',
        image_alt: 'Laserbehandling mot Rosacea',
        image_title: 'Laserbehandling mot Rosacea',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_BloodVessels',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Aktiv Acne',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Vår laserbehandling för aktiv acne använder fraktionerad CO2-laser för att effektivt behandla acneutbrott. Denna metod riktar sig mot bakterier som orsakar acne och minskar inflammation, vilket leder till en minskning av acne och förhindrar nya utbrott.',
        image_small: 'bilder/problem/102x102/acne.webp',
        image_large: 'bilder/problem/200x200/acne.webp',
        image_alt: 'Laserbehandling mot Aktiv Acne',
        image_title: 'Laserbehandling mot Aktiv Acne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Stora Porer',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Denna behandling är inriktad på att förminska och förbättra utseendet av stora porer. Genom att använda fraktionerad CO2-laser stimuleras huden för att dra ihop porerna, vilket resulterar i en mer jämn och förfinad hudtextur.',
        image_small: 'bilder/problem/102x102/stora-porer.webp',
        image_large: 'bilder/problem/200x200/stora-porer.webp',
        image_alt: 'Laserbehandling mot Stora Porer',
        image_title: 'Laserbehandling mot Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_LargePores',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),

    new Service(
        title: 'Laserbehandling mot Hudutväxter',
        duration: '50 minuter',
        price: '2595 kr',
        content: 'Fraktionerad CO2-laserbehandling för säker och effektiv borttagning av hudutväxter. Denna metod ger en skonsam behandling som minimerar risken för ärrbildning och ger ett slätt, jämnt resultat.',
        image_small: 'bilder/problem/102x102/hudforandringar.webp',
        image_large: 'bilder/problem/200x200/hudforandringar.webp',
        image_alt: 'Laserbehandling mot Hudutväxter',
        image_title: 'Laserbehandling mot Hudutväxter',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserProblem',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=Problem_Moles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka laserbehandling',
    ),
);

$treatment_areas_title = 'Behandlingsområden för Laser';
$treatment_areas_text = '<p class="p200">Vår laserbehandling är anpassningsbar för en rad olika områden, vilket gör den idealisk för att adressera specifika hudproblem på olika delar av kroppen. Vi använder fraktionerad CO2-laser för att behandla hudområden som ansikte, hals, dekolletage, rygg och händer, samt specifika ansiktsområden som panna, näsa, kinder, överläpp och haka. Denna teknik möjliggör precisionsbehandling för att förbättra hudens kvalitet och utseende, oavsett område.</p>';
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
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/panna.webp',
                image_alt: 'Panna',
                image_title: 'Panna',
                title: 'Panna',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Forehead',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling i pannan'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/nasa.webp',
                image_alt: 'Näsa',
                image_title: 'Näsa',
                title: 'Näsa',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Nose',
                url_label: 'Boka',
                url_title: 'Boka tid för näsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/kinder.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Kinder',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Cheeks',
                url_label: 'Boka',
                url_title: 'Boka tid för kindbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/overlapp.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för överläppsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/haka.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Chin',
                url_label: 'Boka',
                url_title: 'Boka tid för hakbehandling'
            ),

        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'Kropp',
        description: '<p class="p200">Vi behandlar flera olika delar av kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hals.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/dekolletage.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rygg.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hander.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_Hands',
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
        description: '<p class="p200">Kombinera flera områden för bättre effekt.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '90 min',
                price: '5595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '90 min',
                price: '6595 kr',
                url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Laser_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för laserbehandling',
    image_small: null,
    image_large: null,
    image_alt: 'Eftervård för laserbehandling',
    image_title: 'Eftervård för laserbehandling',
    content: '<p class="p200">Eftervård är en avgörande del av din laserbehandlingsprocess för att säkerställa bästa möjliga resultat och snabb återhämtning. Omedelbart efter din laserbehandling kan du uppleva rodnad och viss svullnad i det behandlade området, vilket är normalt. Det är viktigt att inte röra området med orena händer och att undvika att applicera makeup under de första 24 timmarna för att förhindra irritation och infektioner.</p>
    <p class="p200 mt-m">Under återhämtningsperioden, undvik intensiv fysisk aktivitet, heta duschar och bastu, då detta kan förvärra svullnad och rodnad. Användning av hög SPF-solskydd är avgörande för att skydda den känsliga huden från solskador. Välj milda, återfuktande hudvårdsprodukter utan parfym eller irriterande ämnen för att hjälpa till med läkningsprocessen och bevara hudens fuktighet.</p>
    <p class="p200 mt-m">Följ de specifika eftervårdsinstruktionerna som ges av din hudterapeut noggrant. Om du har några frågor eller funderingar efter din behandling, tveka inte att kontakta din klinik för råd. Regelbundna uppföljningar och ytterligare behandlingar kan rekommenderas baserat på din hudtyp och de mål du har för din hudvård.</p>',
));

$service_brands_title = 'Märken för laser mot problemhy';
$service_brands_text = '<p class="p200">Vi har ett stort utbud av lasermaskiner för att kunna välja rätt metod för just dina behov.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Hybrid',
        image: 'images/brands/alma-hybrid.svg',
        image_alt: 'Alma Hybrid',
        image_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Alma Rejuve DyeVL',
        image: 'images/brands/alma-rejuve-dyevl.svg',
        image_alt: 'Alma Rejuve DyeVL',
        image_title: 'Alma Rejuve DyeVL',
    ),
    new Brand(
        label: 'Alma Harmony XL Pro',
        image: 'images/brands/alma-harmony-xl-pro.png',
        image_alt: 'Alma Harmony XL Pro',
        image_title: 'Alma Harmony XL Pro',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
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
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
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
        image_alt: 'Akne resultat',
        image_title: 'Akne resultat',
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
        image_alt: 'Rosacea resultat',
        image_title: 'Rosacea resultat',
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
            title: 'Hur många laserbehandlingar mot problemhy krävs?',
            text: 'Antalet laserbehandlingar för problemhy varierar beroende på individens specifika hudtillstånd och mål. Ofta rekommenderas en serie av 3-5 behandlingar med några veckors mellanrum. En individuell behandlingsplan och rekommendationer kommer att ges under en konsultation.'
        ),
        new Question(
            title: 'Är resultaten från laserbehandling mot problemhy bestående?',
            text: 'Laserbehandlingar kan ge långsiktiga förbättringar, men det är viktigt att komma ihåg att hudens åldrande och yttre faktorer kan påverka hållbarheten av resultaten. En kontinuerlig hudvårdsrutin och eventuellt periodiska uppföljningsbehandlingar kan behövas för att bibehålla effekterna.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig direkt efter en laserbehandling mot problemhy?',
            text: 'Efter en laserbehandling mot problemhy kan du uppleva viss rodnad, svullnad eller känslighet i det behandlade området. Dessa reaktioner är normala och bör avta inom några dagar. Det är viktigt att följa eftervårdsinstruktionerna och skydda huden mot solen.'
        ),
        new Question(
            title: 'Behöver jag speciell eftervård efter en laserbehandling mot problemhy?',
            text: 'Eftervård är viktig för att upprätthålla resultaten av din laserbehandling. Det innefattar användning av solskydd, undvikande av direkt solstrålning och användning av milda hudvårdsprodukter. Din hudterapeut kommer att ge dig specifika råd baserade på din behandling och hudtyp.'
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
        image: 'images/specialists/large/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg',
        image_title: 'Cazzandra Lindberg'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/large/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik',
        image_title: 'Veronika Benedik'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/large/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul',
        image_title: 'Amira Maqboul'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/large/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom',
        image_title: 'Vilma Libom'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Powerlite',
        image: 'images/brands/powerlite.svg',
        image_alt: 'Powerlite',
        image_title: 'Powerlite',
    ),
    new Brand(
        label: 'Dermapen4',
        image: 'images/brands/dermapen4.svg',
        image_alt: 'Dermapen4',
        image_title: 'Dermapen4',
    ),
    new Brand(
        label: 'Cryopen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'Cryopen',
        image_title: 'Cryopen',
    ),
    new Brand(
        label: 'Lumenis',
        image: 'images/brands/lumenis.svg',
        image_alt: 'Lumenis',
        image_title: 'Lumenis',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRXT',
        image: 'images/brands/prxt.svg',
        image_alt: 'PRXT',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'Hydrafacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'Hydrafacial',
        image_title: 'Hydrafacial',
    ),
    new Brand(
        label: 'IP infusion',
        image: 'images/brands/ipinfusion.svg',
        image_alt: 'IP infusion',
        image_title: 'IP infusion',
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
                        <div class="mt-m"><?php echo $floating_box ?></div>
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
                    <h1 class="mt-xs h600">
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
                                    <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300 mt-xl"><?php echo $treatment_area->title ?></h3>
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
                <section id="faq" class="large-margin">
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