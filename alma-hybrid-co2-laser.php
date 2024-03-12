<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Alma Hybrid - Avancerad Laserbehandling för Hudförnyelse';
$seo_description = 'AcneSpecialisten introducerar Alma Hybrid, en banbrytande laserbehandling som kombinerar CO2 och icke-ablativ lasrar för att effektivt hantera ett brett spektrum av hudproblem. Idealisk för acneärr, ojämn hudton, rynkor och fina linjer, erbjuder Alma Hybrid en omfattande lösning för hudföryngring och texturutjämning.';
$seo_keywords = 'Alma Hybrid, laserbehandling, CO2 laser';

$seo_image = 'images/treatments/large/alma-hybrid.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Alma Hybrid CO2 laser', '/alma-hybrid-co2-laser.php'),
);

$model = new Service(
    title: 'CO2 laser - Alma Hybrid',
    duration: null,
    price: 'Från 4595 kr',
    content: '<p class="p200">Alma Hybrid är en fraktionerad CO2 laser vilket är nästa generation av laserbehandlingar. Kombinerar effektiviteten av CO2-laser med mångsidigheten hos icke-ablativ lasrar. Denna innovativa behandling är utformad för att effektivt hantera en rad hudproblem, inklusive acneärr, rynkor, fina linjer och ojämn hudton.</p>',
    image_small: 'bilder/varumarken/358x274/alma.webp',
    image_large: 'bilder/varumarken/424x456/alma.webp',
    image_alt: 'Alma Hybrid',
    image_title: 'Alma Hybrid',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=almahybrid',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Alma Hybrid är den mest avancerade kombinationen av ablativ och icke-ablativ CO2 laser.';

$nav_buttons = array(
    'about' => 'Om Alma Hybrid',
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

$description_title = 'Vad är fraktionerad CO2 laser i Stockholm?';
$description_text = '<p class="p200">Fraktionerad laser är en banbrytande teknik inom laserbehandling, som kombinerar den fraktionerade, ablativa CO2-lasern med icke-ablativ laserteknik. Denna avancerade metod erbjuder en omfattande och mångsidig lösning för ett brett spektrum av hudproblem, inklusive acneärr, rynkor, bristningar, ojämn hudton och stora porer med mera. Genom att kombinera dessa två lasertekniker uppnår vi överlägsna resultat med minskad återhämtningstid.</p>
<p class="p200 mt-m">CO2-lasern arbetar genom att skapa kontrollerade mikroskopiska skador i hudens yttre lager, vilket främjar hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Denna process hjälper till att förbättra hudens struktur, minska ärr och rynkor, och ge en övergripande hudföryngring. Samtidigt arbetar den icke-ablativa lasertekniken med att förbättra hudens elasticitet och textur på ett djupare plan, utan att skada hudens yttre lager. Detta möjliggör en effektiv behandling med minimal återhämtningstid.</p>
<p class="p200 mt-m">Alma Hybrid är känd för sin förmåga att leverera snabba och synliga resultat redan efter en behandling, vilket gör den till en idealisk lösning för dem som söker en effektiv och tidsbesparande behandling. Dessutom är säkerheten alltid en prioritet, med förbättrade säkerhetsåtgärder som säkerställer en trygg och behaglig upplevelse. Våra skräddarsydda Alma Hybrid-behandlingar på AcneSpecialisten erbjuder en effektiv väg mot en fräschare, jämnare och mer vital hud.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går fraktionerad CO2 laserbehandling till?',
        image_small: '/bilder/process/358x272/alma-hybrid-process.webp',
        image_large: '/bilder/process/872x456/alma-hybrid-process.webp',
        image_alt: 'Hur går fraktionerad CO2 laserbehandling till?',
        image_title: 'Hur går fraktionerad CO2 laserbehandling till?',
        content: '<p class="p200">Att genomgå en CO2 laserbehandling hos AcneSpecialisten innebär en noggrann och avancerad process för att effektivt behandla hudproblem. Behandlingen inleds med en grundlig rengöring av det område som ska behandlas för att säkerställa att huden är optimalt förberedd för laserbehandlingen. Efter den initiala rengöringen appliceras en bedövningskräm på det område som ska behandlas för att minimera eventuell smärta och obehag under proceduren. Detta steg är viktigt för att säkerställa att du som patient känner dig så bekväm som möjligt under hela behandlingsprocessen.</p>
        <p class="p200 mt-m">När bedövningen har fått verka och området är förberett, börjar själva CO2-laserbehandlingen med Alma Hybrid. Denna avancerade teknik kombinerar fraktionerad CO2-laser med ytterligare modaliteter för att ge en djup och effektiv behandling. Laserenergin levereras i små, kontrollerade pulser som penetrerar hudens yttre lager. Detta stimulerar hudens naturliga läkningsprocess och främjar nybildning av kollagen och elastin, vilket resulterar i en fastare, jämnare och mer ungdomlig hud.</p>
        <p class="p200 mt-m">Behandlingen anpassas noggrant efter dina specifika hudbehov och problemområden, och den fraktionerade naturen av lasern gör det möjligt att behandla huden med stor precision utan att skada det omgivande vävnaden. Detta bidrar till en snabbare läkningsprocess och mindre nedtid jämfört med traditionella CO2-laserbehandlingar.</p>
        <p class="p200 mt-m">Som ett avslutande steg i din behandling, använder vi Almas patenterade Trans Epidermal Delivery (TED) ultraljudsteknik. Denna metod utnyttjar akustiskt tryck för att möjliggöra införandet av kosmetiska produkter djupt in i huden genom de mikrokanaler som skapats av CO2-lasern. Detta säkerställer att det anpassade serumet effektivt når hudens djupare lager, vilket optimerar återhämtningen och förstärker behandlingens effekter.</p>',
    ),
);

$types_title = 'Alma Hybrid signaturbehandlingar';
$types_description = 'Här hittar du Alma Hybrids signaturbehandlingar som presenterar de 3 egenskaper lasermaskinen är mest effektiv inom. Dessa är reducering av olika typer av ärr, att ge huden en effektiv hudförnyelse samt en mildare huduppfräschning med minimal återhämtningstid.';
$big_types = array(
    new Service(
        title: 'Hybrid oScar - Behandling av ärr',
        duration: '90 min',
        price: null,
        content: '<p class="p200">På AcneSpecialisten erbjuder vi OScar-behandlingen, en specialiserad metod för att effektivt behandla olika typer av ärr, inklusive acneärr, trauma- och kirurgiska ärr. Denna avancerade behandling utnyttjar den senaste tekniken genom att kombinera CO2 och 1570nm laservåglängder för att nå optimal penetration i hudens dermisskikt.</p>
        <p class="p200 mt-m">Behandlingsprocessen för OScar anpassas noggrant för att passa varje unik klient och ärrtyp. Genom att justera penetrationsdjup, koagulationsbredd och densitet kan vi skräddarsy behandlingen för att uppnå bästa möjliga resultat. Denna precisa metod stimulerar hudens naturliga läkningsprocess och kollagenproduktion, vilket är avgörande för att minska synligheten och djupet av ärrbildningar.</p>
        <p class="p200 mt-m">Efter laserbehandlingen kompletterar vi med Impact-serum för att ytterligare förbättra behandlingens effektivitet. Impact hjälper till att säkerställa att serumet når de djupare hudlagren, vilket bidrar till en förbättrad läkning och förnyelse av huden. OScar-behandlingen är en idealisk lösning för dig som söker en omfattande och effektiv lösning för att dramatiskt minska synligheten av ärr och förbättra hudens övergripande utseende och textur.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'Hybrid oScar',
        image_title: 'Hybrid oScar',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '4595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_oScar&procedures=PriceClass_9_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '10995 kr',
                savings: 'Spara 2790 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_oScar&procedures=PriceClass_9_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '15995 kr',
                savings: 'Spara 6980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_oScar&procedures=PriceClass_9_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'HybridLift - Hudresurfacing (Over-the-weekend behandling)',
        duration: '90 min',
        price: null,
        content: '<p class="p200">På AcneSpecialisten introducerar vi HybridLift, en banbrytande hudresurfacingbehandling som kombinerar ablativa och termiska lasermetoder med avancerad produktleverans för att skapa enastående resultat med minimal återhämtningstid. HybridLift är idealisk för dig som söker en effektiv lösning för att snabbt förbättra hudens utseende över en helg.</p>
        <p class="p200 mt-m">Denna unika behandling utnyttjar en kombination av CO2- och 1570nm-lasrar. Det specialutformade scanningsmönstret skapar en hudsammandragande effekt som effektivt minskar fina linjer och djupare rynkor, samtidigt som det skalar bort solpigmenteringar. Denna process stimulerar hudens egen förnyelse och hjälper till att ge en mer ungdomlig och jämn hudton.</p>
        <p class="p200 mt-m">Efter laserbehandlingen applicerar vi Impact-ultraljudsteknik för att förbättra penetrationen av hudvårdande produkter djupt in i huden. Denna metod säkerställer att aktiva ingredienser når de nivåer där de är mest effektiva, vilket ytterligare förbättrar hudens textur och lyster. HybridLift är den ultimata over-the-weekend behandlingen för dig som önskar synliga förbättringar på kort tid och med minimal återhämtning.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'HybridLift',
        image_title: 'HybridLift',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '4595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_HybridLift&procedures=PriceClass_9_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '10995 kr',
                savings: 'Spara 2790 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_HybridLift&procedures=PriceClass_9_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '15995 kr',
                savings: 'Spara 6980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_HybridLift&procedures=PriceClass_9_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'SoftLift - huduppfräschning (Lunch-time behandling)',
        duration: '60 min',
        price: null,
        content: '<p class="p200">AcneSpecialisten presenterar nu SoftLift, en innovativ huduppfräschande behandling utformad för att ge synliga resultat med minimal återhämtningstid. SoftLift är perfekt för dig som önskar en snabb och effektiv förbättring av din hudton, minskning av fina linjer och rynkor, samt reparation av hudskador inklusive akneärr, allt under en lunchrast.</p>
        <p class="p200 mt-m">Denna skonsamma men kraftfulla behandling använder en icke-ablativ 1570nm-laser som skapar en betydande termisk effekt. Den främjar neokollagenes och regenererar den extracellulära matrisen som stöder hudcellerna, vilket bidrar till en mer ungdomlig och strålande hud. Samtidigt lämnas epidermis intakt, vilket minimerar återhämtningstiden.</p>
        <p class="p200 mt-m">SoftLift är en idealisk behandling för de som vill ha snabba resultat utan att behöva ta ledigt från vardagsaktiviteter. Behandlingen är särskilt effektiv för att förbättra hudtonen och strukturen, strama upp huden och återställa dess ungdomliga utseende. Med SoftLift uppnår du en jämnare och fräschare hud snabbt och enkelt, vilket gör den till det perfekta valet för en snabb och effektiv huduppfräschning.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'SoftLift',
        image_title: 'SoftLift',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        icons: array(),
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '3595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_SoftLift&procedures=PriceClass_7_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '8995 kr',
                savings: 'Spara 1790 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_SoftLift&procedures=PriceClass_7_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '12995 kr',
                savings: 'Spara 4980 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_SoftLift&procedures=PriceClass_7_Procedure_5'
            )
        )
    ),

);

$types_title = 'Hudproblem som behandlas med Alma Hybrid';
$types_description = '<p class="p200">På AcneSpecialisten använder vi Alma Hybrid för att effektivt behandla en rad olika hudproblem.</p>';
$types = array(
    new Service(
        title: 'Alma Hybrid mot Acneärr',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Effektiv behandling av acneärr med Alma Hybrid-laser. Denna teknik minskar ärr och förbättrar hudens textur genom att stimulera kollagenproduktion och hudens läkningsprocess.',
        image_small: 'bilder/problem/102x102/acnearr.webp',
        image_large: 'bilder/problem/200x200/acnearr.webp',
        image_alt: 'Alma Hybrid mot Acneärr',
        image_title: 'Alma Hybrid mot Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Acneärr',

        url: '/laser-acnearr.php',
        url_label: 'Läs mer om laser mot acneärr',
        url_title: 'Läs mer om laser mot acneärr',
    ),

    new Service(
        title: 'Alma Hybrid mot Rynkor och Fina Linjer',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Vår Alma Hybrid-laser fokuserar på att minska rynkor och fina linjer, återställer hudens ungdomliga utseende genom att stimulera kollagen och elastinproduktion.',
        image_small: 'bilder/problem/102x102/mogen-hy.webp',
        image_large: 'bilder/problem/200x200/mogen-hy.webp',
        image_alt: 'Alma Hybrid mot Rynkor och Fina Linjer',
        image_title: 'Alma Hybrid mot Rynkor och Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_Wrinkles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Rynkor och Fina Linjer',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),

    new Service(
        title: 'Alma Hybrid mot Bristningar',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Behandlingen med Alma Hybrid-laser erbjuder en effektiv metod för att minska bristningar. Denna teknik förbättrar hudens textur och elasticitet, vilket ger en jämnare hudton.',
        image_small: 'bilder/problem/102x102/bristningar.webp',
        image_large: 'bilder/problem/200x200/bristningar.webp',
        image_alt: 'Alma Hybrid mot Bristningar',
        image_title: 'Alma Hybrid mot Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Bristningar',

        url: '/problem/bristningar/',
        url_label: 'Läs mer om bristningar',
        url_title: 'Läs mer om bristningar',
    ),

    new Service(
        title: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        duration: '30 minuter',
        price: '2995 kr',
        content: 'Specialiserad laserbehandling för att reducera synligheten av skade- och operationsärr. Alma Hybrid stimulerar hudens naturliga regenereringsprocess för slätare och jämnare hud.',
        image_small: 'bilder/problem/102x102/operations-skadearr.webp',
        image_large: 'bilder/problem/200x200/operations-skadearr.webp',
        image_alt: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        image_title: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_Scars&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Ärr (Skade- och Operationsärr)',

        url: '/laser-arr.php',
        url_label: 'Läs mer om laser mot ärr',
        url_title: 'Läs mer om laser mot ärr',
    ),

    new Service(
        title: 'Alma Hybrid mot Pigmentfläckar',
        duration: '950 minuter',
        price: '4595 kr',
        content: 'Målriktad laserbehandling för att ljusa upp och reducera pigmentfläckar. Alma Hybrid jämnar ut hudtonen och återställer hudens naturliga lyster.',
        image_small: 'bilder/problem/102x102/pigmentflackar.webp',
        image_large: 'bilder/problem/200x200/pigmentflackar.webp',
        image_alt: 'Alma Hybrid  mot Pigmentfläckar',
        image_title: 'Alma Hybrid mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Pigmentfläckar',

        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om laser mot pigmentfläckar',
        url_title: 'Läs mer om laser mot pigmentfläckar',
    ),

    new Service(
        title: 'Alma Hybrid mot Aktiv Acne',
        duration: '50 minuter',
        price: '2995 kr',
        content: 'Innovativ behandling för aktiv acne med Alma Hybrid-laser. Denna teknik angriper acnebakterier och minskar inflammation, vilket leder till en klarare och friskare hud.',
        image_small: 'bilder/problem/102x102/acne.webp',
        image_large: 'bilder/problem/200x200/acne.webp',
        image_alt: 'Alma Hybrid mot Aktiv Acne',
        image_title: 'Alma Hybrid mot Aktiv Acne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Aktiv Acne',

        url: '/laser-acne.php',
        url_label: 'Läs mer om laser mot akne',
        url_title: 'Läs mer om laser mot akne',
    ),

    new Service(
        title: 'Alma Hybrid mot Stora Porer',
        duration: '60 minuter',
        price: '3595 kr',
        content: 'Effektiv behandling för att minska storleken på stora porer. Alma Hybrid-laser förfinar hudens struktur, ger en jämnare hudton och förbättrar hudens övergripande utseende.',
        image_small: 'bilder/problem/102x102/stora-porer.webp',
        image_large: 'bilder/problem/200x200/stora-porer.webp',
        image_alt: 'Alma Hybrid mot Stora Porer',
        image_title: 'Alma Hybrid mot Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Stora Porer',

        url: '/stora-porer.php',
        url_label: 'Läs mer om stora porer',
        url_title: 'Läs mer om stora porer',
    ),

    new Service(
        title: 'Alma Hybrid mot Hudutväxter',
        duration: '30 minuter',
        price: '1595 kr',
        content: 'Säker och skonsam borttagning av hudutväxter med Alma Hybrid-laser. Denna metod erbjuder en effektiv behandling med minimal risk för ärrbildning.',
        image_small: 'bilder/problem/102x102/hudutvaxter.webp',
        image_large: 'bilder/problem/200x200/hudutvaxter.webp',
        image_alt: 'Alma Hybrid mot Hudutväxter',
        image_title: 'Alma Hybrid mot Hudutväxter',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Service_Laser_oScar',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot hudutväxter',

        url: '/problem/hudforandringar/behandla-hudforandringar/',
        url_label: 'Läs mer om behandling av hudförändringar',
        url_title: 'Läs mer om behandling av hudförändringar',
    ),

    new Service(
        title: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Alma Hybrid-laser ger en omfattande förnyelse och uppfräschning av huden. Denna behandling reducerar ålderstecken och återställer hudens naturliga lyster och vitalitet.',
        image_small: 'bilder/problem/102x102/mogen-hy.webp',
        image_large: 'bilder/problem/200x200/mogen-hy.webp',
        image_alt: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        image_title: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=laserProblem&skipable_problem=SKIP&area=Service_Laser_HybridLift',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
    ),
);

$treatment_areas_title = 'Behandlingsområden med Alma Hybrid';
$treatment_areas_text = '<p class="p200">Alma Hybrid är en mångsidig laserbehandling som är effektiv för att behandla en rad olika hudområden. Vi använder denna avancerade teknik för att behandla specifika områden såsom ansikte, hals, dekolletage, rygg och händer.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte & Kropp',
        image_title: 'Ansikte & Kropp',
        title: 'Ansikte & Kropp',
        description: '<p class="p200">Vi behandlar flera områden på kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_Face',
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
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_Neck',
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
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_Decolletage',
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
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_Back',
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
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_Hands',
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
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '100 min',
                price: '5595 kr',
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '110 min',
                price: '6595 kr',
                url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=SKIP&area=Laser_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Alma Hybrid',
        image_small: '/bilder/process/358x272/alma-hybrid-forberedelser.webp',
        image_large: '/bilder/process/872x456/alma-hybrid-forberedelser.webp',
        image_alt: 'Förberedelser inför Alma Hybrid',
        image_title: 'Förberedelser inför Alma Hybrid',
        content: '<p class="p200">Inför din Alma Hybrid-behandling hos AcneSpecialisten, erbjuder vi en kostnadsfri konsultation. Under denna session kommer vi att gå igenom behandlingsprocessen i detalj och skapa en personlig behandlingsplan för att uppnå bästa möjliga resultat. Det är ett viktigt steg för att säkerställa att du är fullständigt informerad och bekväm med behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen diskuterar vi också specifika förberedelser som är nödvändiga för just din hudtyp och ditt individuella tillstånd. Vi betonar vikten av att undvika solbränna och stark sol några veckor före behandlingen, då detta kan påverka hudens känslighet och behandlingens effektivitet. Vidare rekommenderas att du undviker hudvårdsprodukter med starka aktiva ingredienser som exfolierande syror minst en vecka före behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen tar vi även upp din hudhistorik som kan påverka behandlingen. Detta är en viktig del av processen för att skräddarsy behandlingen efter dina behov och för att säkerställa att du får den mest effektiva och säkra behandlingen. Vi ser fram emot att arbeta tillsammans med dig och hjälpa dig att uppnå din önskade hudkvalitet med Alma Hybrid-behandling.</p>',
    ),
    'aftercare' => new Article(
    title: 'Eftervård för Alma Hybrid',
    image_small: '/bilder/process/358x272/alma-hybrid-eftervard.webp',
    image_large: '/bilder/process/872x456/alma-hybrid-eftervard.webp',
    image_alt: 'Eftervård för Alma Hybrid',
    image_title: 'Eftervård för Alma Hybrid',
    content: '<p class="p200">Efter din Alma Hybrid-laserbehandling är det viktigt att noggrant följa våra eftervårdsinstruktioner för att främja en snabb och effektiv läkningsprocess. Du kan förvänta dig en viss rodnad och svullnad i det behandlade området, vilket är en normal reaktion på behandlingen. För att undvika irritation och infektioner, bör du undvika att röra området med orena händer och avstå från att använda makeup under de första 24 timmarna.</p>
    <p class="p200 mt-m">Under de första dagarna efter behandlingen är det viktigt att du undviker fysisk ansträngning, heta duschar och bastu, eftersom dessa kan förvärra svullnaden och rodnaden. Solskydd är kritiskt; applicera en hög SPF för att skydda den känsliga huden från solens strålar. Vi rekommenderar att du använder milda och återfuktande hudvårdsprodukter som är fria från parfymer och andra irriterande ingredienser för att stödja hudens läkningsprocess och bibehålla fuktbalansen.</p>
    <p class="p200 mt-m">Det är viktigt att du följer de eftervårdsinstruktioner som ges av din hudterapeut. Om du har några frågor eller oro efter din behandling, tveka inte att kontakta oss för rådgivning. Regelbundna uppföljningar och eventuellt ytterligare behandlingar kan rekommenderas beroende på din hudtyp och de hudvårdsresultat du önskar uppnå.</p>',
    ),
);

$service_brands_title = 'Andra märken för laser';
$service_brands_text = '<p class="p200">Utöver Alma Hybrid har vi ett bredd utbud av moderna och effektiva lasermaskiner.</p>';
$service_brands = array(

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
        url: '/varumarken/alma/rejuve-dye-vl',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: 'bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova',
        url_title: 'Powerlite Photonova',
    ),
);

$results_title = 'CO2 laser före och efter';
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
            title: 'Hur många Alma Hybrid-behandlingar behövs för bästa resultat?',
            text: 'Antalet Alma Hybrid-behandlingar varierar beroende på dina specifika hudproblem och önskade resultat. Vanligtvis rekommenderas en serie av 3-5 behandlingar med intervaller på några veckor. En skräddarsydd behandlingsplan kommer att utformas under din konsultation för att möta dina unika behov.'
        ),
        new Question(
            title: 'Hur långvariga är effekterna av Alma Hybrid-behandlingar?',
            text: 'Effekterna från Alma Hybrid-behandlingar kan vara långvariga, men det är viktigt att notera att yttre faktorer som solens strålar och hudens naturliga åldrande kan påverka resultaten över tid. Regelbundna underhållsbehandlingar och en noggrann hudvårdsrutin kan hjälpa till att bevara de positiva resultaten.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig efter en Alma Hybrid-behandling?',
            text: 'Efter en Alma Hybrid-behandling kan du förvänta dig en viss rodnad, svullnad och känslighet i det behandlade området. Dessa är vanliga reaktioner och brukar avta inom några dagar. Följ eftervårdsinstruktionerna noggrant och skydda huden väl mot solen för att stödja läkningsprocessen.'
        ),
        new Question(
            title: 'Krävs det särskild eftervård efter Alma Hybrid-behandling?',
            text: 'Efter en Alma Hybrid-behandling är det viktigt med korrekt eftervård för att maximera resultatet. Detta inkluderar användning av solskydd, undvikande av direkt solljus och användning av mjuka, återfuktande hudvårdsprodukter. Din hudterapeut kommer att ge dig skräddarsydda råd för din hudtyp och behandling.'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Alma Hybrid-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på Alma Hybrid-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Alma Hybrid',
        image_title: 'Veronika Benedik - Specialist inom Alma Hybrid-vård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom Alma Hybrid-behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på Alma Hybrid'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Alma Hybrid-behandlingar',
        image_title: 'Vilma Libom - Expert inom Alma Hybrid-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

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
                                include('behandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="specialister" title="Se alla specialister"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>