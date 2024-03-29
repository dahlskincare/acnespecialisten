<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Alma Hybrid - Avancerad Laserbehandling för Hudförnyelse | AcneSpecialisten';
$seo_description = 'AcneSpecialisten introducerar Alma Hybrid, en banbrytande laserbehandling som kombinerar CO2 och icke-ablativ lasrar för att effektivt hantera ett brett spektrum av hudproblem. Idealisk för acneärr, ojämn hudton, rynkor och fina linjer, erbjuder Alma Hybrid en omfattande lösning för hudföryngring och texturutjämning.';
$seo_keywords = 'Alma Hybrid, laserbehandling, hudföryngring, acneärr, hudton, hudtextur, avancerad hudvård, AcneSpecialisten, effektiv hudbehandling, hudförnyelse';

$seo_image = 'images/treatments/large/alma-hybrid.jpg';

$model = new Service(
    title: 'Alma Hybrid',
    duration: null,
    price: 'Från 4595 kr',
    content: '<p class="p200">Alma Hybrid hos AcneSpecialisten representerar nästa generation av laserbehandlingar, kombinerar effektiviteten av CO2-laser med mångsidigheten hos icke-ablativ lasrar. Denna innovativa behandling är utformad för att effektivt hantera en rad hudproblem, inklusive acneärr, rynkor, fina linjer och ojämn hudton. Med Alma Hybrid upplever du en betydande förbättring av hudens textur och lyster.</p>
    <p class="p200 mt-m">Vår Alma Hybrid-teknik arbetar genom att noggrant och kontrollerat skapa mikroskopiska skador i hudens yttre lager, vilket stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Denna process resulterar i en märkbar föryngring av huden, vilket minskar synligheten av ärr och förbättrar hudens övergripande struktur och utseende. Alma Hybrid är det perfekta valet för dem som söker en omfattande och avancerad lösning för hudföryngring och förbättring av hudkvalitet.</p>',
    image_small: 'https://via.placeholder.com/358x274.webp',
    image_large: 'https://via.placeholder.com/424x456.webp',
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

$description_title = 'Vad är Alma Hybrid?';
$description_text = '<p class="p200">Alma Hybrid på AcneSpecialisten representerar en banbrytande teknik inom laserbehandling, som kombinerar den fraktionerade, ablativa CO2-lasern med icke-ablativ laserteknik. Denna avancerade metod erbjuder en omfattande och mångsidig lösning för ett brett spektrum av hudproblem, inklusive acneärr, rynkor, bristningar, ojämn hudton och stora porer. Genom att kombinera dessa två lasertekniker uppnår vi överlägsna resultat med minskad återhämtningstid.</p>
<p class="p200 mt-m">CO2-lasern arbetar genom att skapa kontrollerade mikroskopiska skador i hudens yttre lager, vilket främjar hudens naturliga läkningsprocess och stimulerar kollagenproduktionen. Denna process hjälper till att förbättra hudens struktur, minska ärr och rynkor, och ge en övergripande hudföryngring. Samtidigt arbetar den icke-ablativa lasertekniken med att förbättra hudens elasticitet och textur på ett djupare plan, utan att skada hudens yttre lager. Detta möjliggör en effektiv behandling med minimal återhämtningstid.</p>
<p class="p200 mt-m">Alma Hybrid är känd för sin förmåga att leverera snabba och synliga resultat redan efter en session, vilket gör den till en idealisk lösning för dem som söker en effektiv och tidsbesparande behandling. Dessutom är säkerheten alltid en prioritet, med förbättrade säkerhetsåtgärder som säkerställer en trygg och behaglig upplevelse. Våra skräddarsydda Alma Hybrid-behandlingar på AcneSpecialisten erbjuder en effektiv väg mot en fräschare, jämnare och mer vital hud.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Alma Hybrid',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Förberedelser inför Alma Hybrid',
        image_title: 'Förberedelser inför Alma Hybrid',
        content: '<p class="p200">Inför din Alma Hybrid-behandling hos AcneSpecialisten, erbjuder vi en kostnadsfri konsultation. Under denna session kommer vi att gå igenom behandlingsprocessen i detalj och skapa en personlig behandlingsplan för att uppnå bästa möjliga resultat. Det är ett viktigt steg för att säkerställa att du är fullständigt informerad och bekväm med behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen diskuterar vi också specifika förberedelser som är nödvändiga för just din hudtyp och ditt individuella tillstånd. Vi betonar vikten av att undvika solbränna och stark sol några veckor före behandlingen, då detta kan påverka hudens känslighet och behandlingens effektivitet. Vidare rekommenderas att du undviker hudvårdsprodukter med starka aktiva ingredienser som exfolierande syror minst en vecka före behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen tar vi även upp din hudhistorik som kan påverka behandlingen. Detta är en viktig del av processen för att skräddarsy behandlingen efter dina behov och för att säkerställa att du får den mest effektiva och säkra behandlingen. Vi ser fram emot att arbeta tillsammans med dig och hjälpa dig att uppnå din önskade hudkvalitet med Alma Hybrid-behandling.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Steam'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraction'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Cleansing'
        ))
    ),
    'process' => new Article(
        title: 'Hur går behandling med Alma Hybrid till?',
        image_small: 'https://via.placeholder.com/358x272.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hur går behandling med Alma Hybrid till?',
        image_title: 'Hur går behandling med Alma Hybrid till?',
        content: '<p class="p200">Att genomgå en Alma Hybrid-behandling hos AcneSpecialisten innebär en noggrann och avancerad process för att effektivt behandla problemhy. Behandlingen inleds med en grundlig rengöring av det område som ska behandlas för att säkerställa att huden är optimalt förberedd för laserterapin.</p>
        <p class="p200 mt-m">Alma Hybrid använder en unik kombination av laser-teknologier för att målinriktat behandla olika hudproblem. Under behandlingen använder vi fraktionerad CO2-laser som arbetar genom att skapa små mikroskopiska skador i hudens lager. Denna process stimulerar hudens naturliga läkning och tillväxt av nytt kollagen och elastin, vilket är avgörande för hudens hälsa och ungdomlighet.</p>
        <p class="p200 mt-m">Behandlingen är speciellt effektiv för att minska synligheten av olika typer av ärr, inklusive acneärr och operationsärr. Den är också idealisk för att behandla rynkor, fina linjer och för att utföra huduppfräschning och hudresurfacing. Värmen från lasern kan upplevas som en värmande känsla på huden, men vi använder effektiva kylmetoder och bedövning för att göra behandlingen så behaglig som möjligt.</p>
        <p class="p200 mt-m">Efter behandlingen är det normalt att uppleva viss rodnad och svullnad. Detta är en del av kroppens naturliga läkningsprocess. Vi ger dig detaljerade instruktioner om eftervård för att maximera återhämtningen och säkerställa att din hud läker ordentligt. Resultaten från Alma Hybrid-behandlingen utvecklas gradvis, och du kan förvänta dig att se en kontinuerlig förbättring av din hudkvalitet över tid.</p>',
        tags: array(new ArticleTag(
            icon: 'article-tag-steam',
            label: 'Steam'
        ), new ArticleTag(
            icon: 'article-tag-extraction',
            label: 'Extraction'
        ), new ArticleTag(
            icon: 'article-tag-mask',
            label: 'Mask'
        ), new ArticleTag(
            icon: 'article-tag-cleansing',
            label: 'Cleansing'
        ))
    ),
);

$types_title = 'Alma Hybrid signaturbehadnlingar';
$types_description = 'Här hittar du Alma Hybrids signaturbehandlingar som presenterar de 3 egenskaper lasermaskinen är mest effektiv inom. Dessa är reducering av olika typer av ärr, att ge huden en effektiv hudförnyelse samt en mildare huduppfräschning med minimal återhämtningstid.';
$big_types = array(
    new Service(
        title: 'Hybrid oScar - Behandling av ärr',
        duration: '90 min',
        price: null,
        content: '<p class="p200">På AcneSpecialisten erbjuder vi OScar-behandlingen, en specialiserad metod för att effektivt behandla olika typer av ärr, inklusive acneärr, trauma- och kirurgiska ärr. Denna avancerade behandling utnyttjar den senaste tekniken genom att kombinera CO2 och 1570nm laservåglängder för att nå optimal penetration i hudens dermisskikt.</p>
        <p class="p200 mt-m">Behandlingsprocessen för OScar anpassas noggrant för att passa varje unik klient och ärrtyp. Genom att justera penetrationsdjup, koagulationsbredd och densitet kan vi skräddarsy behandlingen för att uppnå bästa möjliga resultat. Denna precisa metod stimulerar hudens naturliga läkningsprocess och kollagenproduktion, vilket är avgörande för att minska synligheten och djupet av ärrbildningar.</p>
        <p class="p200 mt-m">Efter laserbehandlingen kompletterar vi med Impact-serum för att ytterligare förbättra behandlingens effektivitet. Impact hjälper till att säkerställa att serumet når de djupare hudlagren, vilket bidrar till en förbättrad läkning och förnyelse av huden. OScar-behandlingen är en idealisk lösning för dig som söker en omfattande och effektiv lösning för att dramatiskt minska synligheten av ärr och förbättra hudens övergripande utseende och textur.</p>',
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'Hybrid oScar',
        image_title: 'Hybrid oScar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Hybrid oScar',
        booking_url_title: 'Boka Hybrid oScar',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
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
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'HybridLift',
        image_title: 'HybridLift',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka HybridLift',
        booking_url_title: 'Boka HybridLift',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
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
        image_small: 'https://via.placeholder.com/358x274.webp',
        image_large: 'https://via.placeholder.com/872x456.webp',
        image_alt: 'SoftLift',
        image_title: 'SoftLift',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka tid för hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka SoftLift',
        booking_url_title: 'Boka SoftLift',
        icons: array('who-infants' => 'Infants', 'who-teenagers' => 'Teenagers', 'who-adults' => 'Adults', 'who-elders' => 'Elders'),
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
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid mot Acneärr',
        image_title: 'Alma Hybrid mot Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka Alma Hybrid mot Acneärr',
        booking_url_title: 'Boka Alma Hybrid mot Acneärr',
    ),

    new Service(
        title: 'Alma Hybrid mot Rynkor och Fina Linjer',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Vår Alma Hybrid-laser fokuserar på att minska rynkor och fina linjer, återställer hudens ungdomliga utseende genom att stimulera kollagen och elastinproduktion.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid mot Rynkor och Fina Linjer',
        image_title: 'Alma Hybrid mot Rynkor och Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka Alma Hybrid mot Rynkor och Fina Linjer',
        booking_url_title: 'Boka Alma Hybrid mot Rynkor och Fina Linjer',
    ),

    new Service(
        title: 'Alma Hybrid mot Bristningar',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Behandlingen med Alma Hybrid-laser erbjuder en effektiv metod för att minska bristningar. Denna teknik förbättrar hudens textur och elasticitet, vilket ger en jämnare hudton.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid mot Bristningar',
        image_title: 'Alma Hybrid mot Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka Alma Hybrid mot Bristningar',
        booking_url_title: 'Boka Alma Hybrid mot Bristningar',
    ),

    new Service(
        title: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        duration: '30 minuter',
        price: '2995 kr',
        content: 'Specialiserad laserbehandling för att reducera synligheten av skade- och operationsärr. Alma Hybrid stimulerar hudens naturliga regenereringsprocess för slätare och jämnare hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        image_title: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_Scars',
        booking_url_label: 'Boka Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        booking_url_title: 'Boka Alma Hybrid mot Ärr (Skade- och Operationsärr)',
    ),

    new Service(
        title: 'Alma Hybrid mot Pigmentfläckar',
        duration: '950 minuter',
        price: '4595 kr',
        content: 'Målriktad laserbehandling för att ljusa upp och reducera pigmentfläckar. Alma Hybrid jämnar ut hudtonen och återställer hudens naturliga lyster.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid  mot Pigmentfläckar',
        image_title: 'Alma Hybrid mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka Alma Hybrid mot Pigmentfläckar',
        booking_url_title: 'Boka Alma Hybrid mot Pigmentfläckar',
    ),

    new Service(
        title: 'Alma Hybrid mot Aktiv Acne',
        duration: '60 minuter',
        price: '3595 kr',
        content: 'Innovativ behandling för aktiv acne med Alma Hybrid-laser. Denna teknik angriper acnebakterier och minskar inflammation, vilket leder till en klarare och friskare hud.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid mot Aktiv Acne',
        image_title: 'Alma Hybrid mot Aktiv Acne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka Alma Hybrid mot Aktiv Acne',
        booking_url_title: 'Boka Alma Hybrid mot Aktiv Acne',
    ),

    new Service(
        title: 'Alma Hybrid mot Stora Porer',
        duration: '60 minuter',
        price: '3595 kr',
        content: 'Effektiv behandling för att minska storleken på stora porer. Alma Hybrid-laser förfinar hudens struktur, ger en jämnare hudton och förbättrar hudens övergripande utseende.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid mot Stora Porer',
        image_title: 'Alma Hybrid mot Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almahybrid&skipable_problem=Problem_LargePores',
        booking_url_label: 'Boka Alma Hybrid mot Stora Porer',
        booking_url_title: 'Boka Alma Hybrid mot Stora Porer',
    ),

    new Service(
        title: 'Alma Hybrid mot Hudutväxter',
        duration: '30 minuter',
        price: '1595 kr',
        content: 'Säker och skonsam borttagning av hudutväxter med Alma Hybrid-laser. Denna metod erbjuder en effektiv behandling med minimal risk för ärrbildning.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid mot Hudutväxter',
        image_title: 'Alma Hybrid mot Hudutväxter',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Alma Hybrid mot hudutväxter',
        booking_url_title: 'Boka Alma Hybrid mot hudutväxter',
    ),

    new Service(
        title: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Alma Hybrid-laser ger en omfattande förnyelse och uppfräschning av huden. Denna behandling reducerar ålderstecken och återställer hudens naturliga lyster och vitalitet.',
        image_small: 'https://via.placeholder.com/102x102.jpg',
        image_large: 'https://via.placeholder.com/200x200.jpg',
        image_alt: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        image_title: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HybridCO2',
        consultation_url_label: 'Boka gratis konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://www.bokadirekt.se/',
        booking_url_label: 'Boka Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        booking_url_title: 'Boka Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
    ),
);

$treatment_areas_title = 'Behandlingsområden med Alma Hybrid';
$treatment_areas_text = '<p class="p200">Alma Hybrid är en mångsidig laserbehandling som är effektiv för att behandla en rad olika hudområden. Vi använder denna avancerade teknik för att behandla specifika områden såsom ansikte, hals, dekolletage, rygg och händer.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Ansikte & Kropp',
        image_title: 'Ansikte & Kropp',
        title: 'Ansikte & Kropp',
        description: '<p class="p200">Vi behandlar flera områden på kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/94x72.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för handbehandling'
            ),

        )
    ),
    new TreatmentArea(
        image_small: 'https://via.placeholder.com/361x274.webm',
        image_large: 'https://via.placeholder.com/872x456.webm',
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Kombinera flera områden för bättre effekt.</p>',
        items: array(
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '100 min',
                price: '5595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: 'https://via.placeholder.com/102x102.webp',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '110 min',
                price: '6595 kr',
                url: 'https://bokadirekt.se',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för Alma Hybrid',
    image_small: 'https://via.placeholder.com/358x272.webp',
    image_large: 'https://via.placeholder.com/872x456.webp',
    image_alt: 'Eftervård för Alma Hybrid',
    image_title: 'Eftervård för Alma Hybrid',
    content: '<p class="p200">Efter din Alma Hybrid-laserbehandling är det viktigt att noggrant följa våra eftervårdsinstruktioner för att främja en snabb och effektiv läkningsprocess. Du kan förvänta dig en viss rodnad och svullnad i det behandlade området, vilket är en normal reaktion på behandlingen. För att undvika irritation och infektioner, bör du undvika att röra området med orena händer och avstå från att använda makeup under de första 24 timmarna.</p>
    <p class="p200 mt-m">Under de första dagarna efter behandlingen är det viktigt att du undviker fysisk ansträngning, heta duschar och bastu, eftersom dessa kan förvärra svullnaden och rodnaden. Solskydd är kritiskt; applicera en hög SPF för att skydda den känsliga huden från solens strålar. Vi rekommenderar att du använder milda och återfuktande hudvårdsprodukter som är fria från parfymer och andra irriterande ingredienser för att stödja hudens läkningsprocess och bibehålla fuktbalansen.</p>
    <p class="p200 mt-m">Det är viktigt att du följer de eftervårdsinstruktioner som ges av din hudterapeut. Om du har några frågor eller oro efter din behandling, tveka inte att kontakta oss för rådgivning. Regelbundna uppföljningar och eventuellt ytterligare behandlingar kan rekommenderas beroende på din hudtyp och de hudvårdsresultat du önskar uppnå.</p>',
    tags: array(new ArticleTag('article-tag-steam', 'Steam'), new ArticleTag('article-tag-extraction', 'Extraction'), new ArticleTag('article-tag-mask', 'Mask'), new ArticleTag('article-tag-cleansing', 'Cleansing'))
));

$service_brands_title = 'Andra märken för laser';
$service_brands_text = '<p class="p200">Utöver Alma Hybrid har vi ett bredd utbud av moderna och effektiva lasermaskiner.</p>';
$service_brands = array(

    new Brand(
        label: 'Alma Rejuve DyeVL',
        image: 'images/brands/alma-rejuve-dyevl.svg',
        image_alt: 'Alma Rejuve DyeVL',
        image_title: 'Alma Rejuve DyeVL',
    ),
    new Brand(
        label: 'Alma Harmony XL Pro',
        image: 'images/brands/alma-harmony-xl-pro.svg',
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
            duration: 'Efter 3 månaders behandling av <a href="/problme/akne/aknebehandling" title="akne">akne</a>',
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
            duration: 'Efter 2 månaders behandling av <a href="/problme/akne/aknebehandling" title="akne">akne</a>',
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
            duration: 'Efter 4 månaders behandling av <a href="/problme/rosacea/rosaceabehandling" title="akne">akne</a>',
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
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                            </picture>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="faq" title="Se alla frågor"><?php echo $faq_view_more ?></a>
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