<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Fraction CO2 laser - Nya generationens fraktionerad laser | AcneSpecialisten';
$seo_description = 'Fraction CO2 laser med 13 spottstorlekar. Effektiv mot ärr, hudföryngring och pigmentering hos AcneSpecialisten Stockholm.';
$seo_keywords = 'fraction co2 laser, fraktionerad laser, ärrbehandling, hudföryngring, hyperpigmentering, bristningar, laser stockholm, fraction co2 stockholm';
$seo_image = '/bilder/varumarken/424x456/fraction-co2.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Fraction CO2 laser', '/varumarken/fraction-co2/'),
);

$model = new Service(
    title: 'Fraction CO2 laser - Nya generationens fraktionerad laser',
    duration: null,
    price: 'Från 5595 kr',
    content: '<p class="p200">Fraction CO2 är nya generationens fraktionerade laser för kropp och ansikte med avancerad scanningsteknik. Med 13 olika spottstorlekar och 8 olika behandlingsmönster erbjuder denna banbrytande teknik präcis och anpassningsbar behandling för ett brett spektrum av hudproblem inklusive ärrbehandling, hudföryngring, hyperpigmentering och bristningar.</p>',
    image_small: '/bilder/varumarken/358x274/fraction-co2.webp',
    image_large: '/bilder/varumarken/424x456/fraction-co2.webp',
    image_alt: 'Fraction CO2',
    image_title: 'Fraction CO2',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Fraction CO2 - nya generationens fraktionerade laser med 13 spottstorlekar och 8 behandlingsmönster.';

$description_title = 'Vad är Fraction CO2 laser?';
$description_text = '<p class="p200">Fraction CO2 är nya generationens fraktionerade CO2-laser för kropp och ansikte som använder avancerad scanningsteknik. Denna innovativa laser erbjuder enastående precision med 13 olika spottstorlekar och 8 olika behandlingsmönster, vilket möjliggör skräddarsydda behandlingar för varje unik hudtyp och problemområde. Tekniken är effektiv för ärrbehandling, hudföryngring, hyperpigmentering, bristningar och vaskulära problem som rosacea.</p>
<p class="p200 mt-m">Fraction CO2 fungerar genom att producera ljusstrålar som delas upp i små fraktionerade strålar som penetrerar huden till specifika djup. Detta skapar mikroskopiska sår som stimulerar hudens naturliga läkningsprocess och kollagenproduktion. Den fraktionerade tekniken innebär att endast en del av hudytan behandlas åt gången, vilket resulterar i kortare återhämtningstid jämfört med traditionella lasrar samtidigt som man uppnår utmärkta resultat.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går Fraction CO2 laserbehandling till?',
        image_small: '/bilder/process/358x272/fraction-co2-process.webp',
        image_large: '/bilder/process/872x456/fraction-co2-process.webp',
        image_alt: 'Hur går Fraction CO2 laserbehandling till?',
        image_title: 'Hur går en Fraction CO2 behandling till?',
        content: '<p class="p200">Att genomgå en Fraction CO2 laserbehandling hos AcneSpecialisten innebär en noggrann och avancerad process för att effektivt behandla hudproblem. Behandlingen inleds med en grundlig rengöring av det område som ska behandlas för att säkerställa att huden är optimalt förberedd för laserbehandlingen. Efter den initiala rengöringen appliceras en bedövningskräm på det område som ska behandlas för att minimera eventuell smärta och obehag under proceduren. Detta steg är viktigt för att säkerställa att du känner dig så bekväm som möjligt under hela behandlingsprocessen.</p>
        <p class="p200 mt-m">När bedövningen har fått verka och området är förberett, börjar själva Fraction CO2-laserbehandlingen. Med sina 13 olika spottstorlekar och 8 behandlingsmönster kan lasern anpassas exakt efter ditt hudproblem. Laserstrålen delas upp i små fraktionerade pulser som penetrerar huden till optimalt djup och skapar mikroskopiska behandlingszoner. Detta stimulerar hudens naturliga läkningsprocess och främjar nybildning av kollagen och elastin.</p>
        <p class="p200 mt-m">Behandlingen anpassas noggrant efter dina specifika hudbehov, önskemål och problemtyp. Den fraktionerade tekniken innebär att endast delar av hudytan behandlas åt gången, vilket gör det möjligt att behandla huden med stor precision utan att skada det omgivande vävnaden. Detta bidrar till en snabbare läkningsprocess och kortare återhämtningstid jämfört med traditionella lasrar.</p>
        <p class="p200 mt-m">Som ett avslutande steg i din behandling applicerar vi närande serum som penetrerar djupt genom de mikrokanaler som skapats av Fraction CO2-lasern. Detta säkerställer optimal återhämtning och förstärker behandlingens effekter genom att tillföra aktiva ingredienser som främjar läkning och hudförnyelse på djupet.</p>',
    ),
);

$types_title = 'Fraction CO2 Signaturbehandlingar';
$types_description = 'Här hittar du Fraction CO2:s Signaturbehandlingar som visar de tre områden där denna avancerade laser är mest effektiv. Med 13 spottstorlekar och 8 behandlingsmönster erbjuder vi precis anpassad behandling för ärrreducering, hudföryngring och pigmentbehandling.';

$big_types = array(
    new Service(
        title: 'Fraction Scar - Ärrbehandling',
        duration: '90 min',
        price: null,
        content: '<p class="p200">Fraction Scar är vår specialiserade ärrbehandling med Fraction CO2 laser, utformad för att effektivt behandla alla typer av ärr inklusive acneärr, kirurgiska ärr och skadeärr. Genom Fraction CO2:s unika kombination av 13 spottstorlekar och 8 behandlingsmönster kan vi anpassa behandlingen exakt efter ditt ärrproblem och hudtyp för optimala resultat.</p>
        <p class="p200 mt-m">Behandlingen fungerar genom att skapa kontrollerade mikroskopiska kanaler i huden som stimulerar kroppens naturliga läkningsprocess och kollagenproduktion. Den fraktionerade tekniken innebär att endast delar av ärrområdet behandlas åt gången, vilket möjliggör precision och minskar återhämtningstiden samtidigt som behandlingseffektiviteten maximeras.</p>
        <p class="p200 mt-m">Fraction Scar är idealisk för dig som vill få dramatiska förbättringar av ärrsynlighet och hudtextur. Behandlingen stimulerar hudförnyelse på djupet och hjälper till att jämna ut ojämnheter, vilket resulterar i en slätare och mer enhetlig hudton med varaktiga resultat.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/fraction-co2-standard.webp',
        image_large: '/bilder/hudbehandlingar/200x200/fraction-co2-standard.webp',
        image_alt: 'Fraction Scar',
        image_title: 'Fraction Scar',
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
                price: '5595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '12995 kr',
                savings: 'Spara 3790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '18995 kr',
                savings: 'Spara 8980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'Fraction Rejuvenation - Hudföryngring',
        duration: '90 min',
        price: null,
        content: '<p class="p200">Fraction Rejuvenation är vår specialiserade hudföryngringsbehandling som använder Fraction CO2 laserns avancerade teknologi för att effektivt behandla åldersförändringar, rynkor, fina linjer och ojjämn hudton. Genom att kombinera 13 olika spottstorlekar med 8 behandlingsmönster kan vi skräddarsy behandlingen för att uppnå optimal hudföryngring anpassad efter din unika hudtyp och åldersförändringar.</p>
        <p class="p200 mt-m">Behandlingen fungerar genom att skapa kontrollerade mikroskopiska behandlingszoner i huden som stimulerar kroppens naturliga kollagenproduktion och cellförnyelse. Den fraktionerade tekniken gör det möjligt att behandla hudproblem på flera nivåer samtidigt - från ytliga pigmentförändringar till djupare strukturella förbättringar. Detta resulterar i en jämnare hudton, minskning av rynkor och en övergripande förbättring av hudens elasticitet och fasthet.</p>
        <p class="p200 mt-m">Fraction Rejuvenation är idealisk för dig som vill uppnå synliga hudföryngringsresultat med minimal nedetid. Behandlingen ger progressiva förbättringar över tid och hjälper till att återställa hudens ungdomliga utstrålning och vitalitet genom att optimera hudens naturliga förnyelsecykler.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/fraction-co2-boost-glow.webp',
        image_large: '/bilder/hudbehandlingar/200x200/fraction-co2-boost-glow.webp',
        image_alt: 'Fraction Rejuvenation',
        image_title: 'Fraction Rejuvenation',
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
                price: '5595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '12995 kr',
                savings: 'Spara 3790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '18995 kr',
                savings: 'Spara 8980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_5'
            )
        )
    ),
    new Service(
        title: 'Fraction Precision - Pigmentbehandling',
        duration: '60 min',
        price: null,
        content: '<p class="p200">Fraction Precision är vår specialiserade pigmentbehandling som använder Fraction CO2 laserns precision för att effektivt behandla hyperpigmentering, solfläckar, melasma, åldersfläckar och ojjämn hudton. Genom de 13 olika spottstorlekarna och 8 behandlingsmönstren kan vi rikta behandlingen exakt mot pigmenterade områden medan omgivande frisk hud lämnas oförändrad.</p>
        <p class="p200 mt-m">Behandlingen fungerar genom att den fraktionerade lasern penetrerar till det djup där pigmentcellerna är lokaliserade och bryter ned överskottspigment på ett kontrollerat sätt. Samtidigt stimuleras hudens naturliga förnyelsecykel vilket hjälper till att transportera bort det nedbrutet pigmentet och ersätta det med ny, frisk hud. Denna process resulterar i en jämnare och klarare hudton.</p>
        <p class="p200 mt-m">Fraction Precision är idealisk för dig som vill åtgärda specifika pigmentproblem med hög precision och minimal påverkan på omgivande hud. Behandlingen ger progressiva resultat över tid och hjälper till att återställa hudens naturliga, jämna pigmentering för en mer ungdomlig och strålande hudton.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/fraction-co2-pormaskar.webp',
        image_large: '/bilder/hudbehandlingar/200x200/fraction-co2-pormaskar.webp',
        image_alt: 'Fraction Precision',
        image_title: 'Fraction Precision',
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
                price: '5595 kr',
                savings: null,
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_1'
            ),
            new Procedure(
                label: '3 behandlingar',
                price: '12995 kr',
                savings: 'Spara 3790 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_3'
            ),
            new Procedure(
                label: '5 behandlingar',
                price: '18995 kr',
                savings: 'Spara 8980 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=laserProblem&skipable_problem=SKIP&area=Laser_1xArea&procedures=PriceClass_11_Procedure_5'
            )
        )
    ),

);

$types_title = 'Hudproblem vi behandlar';
$types_description = '<p class="p200">På AcneSpecialisten använder vi Alma Hybrid för att effektivt behandla en rad olika hudproblem.</p>';
$types = array(
    new Service(
        title: 'CO2 laser mot acneärr',
        duration: '90 min',
        price: '5595 kr',
        content: 'Effektiv metod för att minska acneärr. Kombinerar precisionslaser med djupvävnadsuppvärmning, stimulerar hudens läkning för jämnare hudtextur.',
        image_small: 'bilder/hudproblem/102x102/acnearr.webp',
        image_large: 'bilder/hudproblem/200x200/acnearr.webp',
        image_alt: 'Alma Hybrid mot Acneärr',
        image_title: 'Alma Hybrid mot Acneärr',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Acneärr',

        url: '/laser-acnearr.php',
        url_label: 'Läs mer om laser mot acneärr',
        url_title: 'Läs mer om laser mot acneärr',
    ),
    new Service(
        title: 'CO2 laser mot ärr (skade- och operationsärr)',
        duration: '90 min',
        price: '5595 kr',
        content: 'Fraktionerad laser för ärr behandlar skade- och operationsärr genom att stimulera hudregenerering, minskar ärrsynlighet med förbättrad hudtextur.',
        image_small: 'bilder/hudproblem/102x102/operations-skadearr.webp',
        image_large: 'bilder/hudproblem/200x200/operations-skadearr.webp',
        image_alt: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        image_title: 'Alma Hybrid mot Ärr (Skade- och Operationsärr)',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=Problem_Scars&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Ärr (Skade- och Operationsärr)',

        url: '/laser-arr.php',
        url_label: 'Läs mer om laser mot ärr',
        url_title: 'Läs mer om laser mot ärr',
    ),
    new Service(
        title: 'CO2 laser mot Hudutväxter',
        duration: '20 min',
        price: '1995 kr',
        content: 'Tar bort hudutväxter såsom vårtor och skin tags med precision, minimerar skada på omgivande vävnader för en säker och effektiv behandling.',
        image_small: 'bilder/hudproblem/102x102/hudutvaxter.webp',
        image_large: 'bilder/hudproblem/200x200/hudutvaxter.webp',
        image_alt: 'Alma Hybrid mot Hudutväxter',
        image_title: 'Alma Hybrid mot Hudutväxter',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=problem&problem=Problem_Moles&method=Method_laser_skin_imperfections&area=Laser_ny_kund',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot hudutväxter',

        url: '/hudproblem/hudforandringar/',
        url_label: 'Läs mer om hudförändringar',
        url_title: 'Läs mer om hudförändringar',
    ),
    new Service(
        title: 'CO2 laser mot bristningar',
        duration: '90 min',
        price: '5595 kr',
        content: 'Laser behandling mot bristningar stimulerar kollagenproduktion och hudförnyelse för att förbättra hudens elasticitet och textur, reducerar bristningars utseende.',
        image_small: 'bilder/hudproblem/102x102/bristningar.webp',
        image_large: 'bilder/hudproblem/200x200/bristningar.webp',
        image_alt: 'Alma Hybrid mot Bristningar',
        image_title: 'Alma Hybrid mot Bristningar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Bristningar',

        url: '/hudproblem/bristningar/',
        url_label: 'Läs mer om bristningar',
        url_title: 'Läs mer om bristningar',
    ),
    new Service(
        title: 'CO2 laser mot stora porer',
        duration: '90 min',
        price: '5595 kr',
        content: 'Minskar utseendet av stora porer genom att förbättra hudens yta och textur, bidrar till en jämnare hudton.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Alma Hybrid mot Stora Porer',
        image_title: 'Alma Hybrid mot Stora Porer',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Stora Porer',

        url: '/stora-porer.php',
        url_label: 'Läs mer om stora porer',
        url_title: 'Läs mer om stora porer',
    ),
    new Service(
        title: 'CO2 laser mot rynkor och fina Linjer',
        duration: '90 min',
        price: '5595 kr',
        content: 'Kombinerar laser med värmestimulering för att släta ut rynkor och linjer. Främjar kollagenproduktion för en ungdomligare hud.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Alma Hybrid mot Rynkor och Fina Linjer',
        image_title: 'Alma Hybrid mot Rynkor och Fina Linjer',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=Problem_Wrinkles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Rynkor och Fina Linjer',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),
    new Service(
        title: 'CO2 laser mot pigmentfläckar',
        duration: '50 min',
        price: '5595 kr',
        content: 'Reducerar och tar bort pigmentfläckar. Målinriktad laser bryter ner pigmentering för en jämnare hudton.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Alma Hybrid  mot Pigmentfläckar',
        image_title: 'Alma Hybrid mot Pigmentfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Pigmentfläckar',

        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om laser mot pigmentfläckar',
        url_title: 'Läs mer om laser mot pigmentfläckar',
    ),
    new Service(
        title: 'CO2 laser mot aktiv acne',
        duration: '60 min',
        price: 'Från 4595 kr',
        content: 'Reducerar aktiv acne genom att minska inflammation och döda bakterier, förhindrar framtida utbrott genom att rikta sig mot acneorsaker.',
        image_small: 'bilder/hudproblem/102x102/acne.webp',
        image_large: 'bilder/hudproblem/200x200/acne.webp',
        image_alt: 'Alma Hybrid mot Aktiv Acne',
        image_title: 'Alma Hybrid mot Aktiv Acne',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid mot Aktiv Acne',

        url: '/laser-acne.php',
        url_label: 'Läs mer om laser mot acne',
        url_title: 'Läs mer om laser mot acne',
    ),
    new Service(
        title: 'CO2 laser för hudföryngring (skin rejuvenation)',
        duration: '90 min',
        price: '5595 kr',
        content: 'Stimulerar hudens naturliga läkning för förnyad hud med förbättrad textur och utstrålning. Minskar tecken på åldrande för ett friskare utseende.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        image_title: 'Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Fraction',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Service_Laser_HybridLift',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Alma Hybrid för Hudföryngring (Skin Rejuvenation)',
    ),
);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte & Kropp',
        image_title: 'Ansikte & Kropp',
        title: 'Ansikte & kropp',
        description: '',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '90 min',
                price: '5595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '90 min',
                price: '5595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '90 min',
                price: '5595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/rygg.svg',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '90 min',
                price: '5595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '90 min',
                price: '5595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_Hands',
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
        description: '<p class="p200">Kombinera flera områden för ett utökat och jämnare resultat.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '90 min',
                price: '5595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: '/icons/2x.svg',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '100 min',
                price: '6595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: '/icons/3x.svg',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '110 min',
                price: '7595 kr',
                url: 'https://boka.acnespecialisten.se?flow=almahybrid&skipable_problem=SKIP&area=Laser_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/alma-hybrid-forberedelser.webp',
        image_large: '/bilder/process/872x456/alma-hybrid-forberedelser.webp',
        image_alt: 'Förberedelser inför Alma Hybrid',
        image_title: 'Förberedelser inför Alma Hybrid',
        content: '<p class="p200">Inför din Alma Hybrid-behandling hos AcneSpecialisten, erbjuder vi en kostnadsfri konsultation. Under denna session kommer vi att gå igenom behandlingsprocessen i detalj och skapa en personlig behandlingsplan för att uppnå bästa möjliga resultat. Det är ett viktigt steg för att säkerställa att du är fullständigt informerad och bekväm med behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen diskuterar vi också specifika förberedelser som är nödvändiga för just din hudtyp och ditt individuella tillstånd. Vi betonar vikten av att undvika solbränna och stark sol några veckor före behandlingen, då detta kan påverka hudens känslighet och behandlingens effektivitet. Vidare rekommenderas att du undviker hudvårdsprodukter med starka aktiva ingredienser som exfolierande syror minst en vecka före behandlingen.</p>
        <p class="p200 mt-m">Under konsultationen tar vi även upp din hudhistorik som kan påverka behandlingen. Detta är en viktig del av processen för att skräddarsy behandlingen efter dina behov och för att säkerställa att du får den mest effektiva och säkra behandlingen. Vi ser fram emot att arbeta tillsammans med dig och hjälpa dig att uppnå din önskade hudkvalitet med Alma Hybrid-behandling.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/alma-hybrid-eftervard.webp',
        image_large: '/bilder/process/872x456/alma-hybrid-eftervard.webp',
        image_alt: 'Eftervård CO2 laser',
        image_title: 'Eftervård CO2 laser',
        content: '<p class="p200">Efter din Alma Hybrid-laserbehandling är det viktigt att noggrant följa våra eftervårdsinstruktioner för att främja en snabb och effektiv läkningsprocess. Du kan förvänta dig en viss rodnad och svullnad i det behandlade området, vilket är en normal reaktion på behandlingen. För att undvika irritation och infektioner, bör du undvika att röra området med orena händer och avstå från att använda makeup under de första 24 timmarna.</p>
        <p class="p200 mt-m">Under de första dagarna efter behandlingen är det viktigt att du undviker fysisk ansträngning, heta duschar och bastu, eftersom dessa kan förvärra svullnaden och rodnaden. Solskydd är kritiskt, applicera en hög SPF för att skydda den känsliga huden från solens strålar. Vi rekommenderar att du använder milda och återfuktande hudvårdsprodukter som är fria från irriterande ingredienser för att stödja hudens läkningsprocess och bibehålla fuktbalansen.</p>
        <p class="p200 mt-m">Det är viktigt att du följer de eftervårdsinstruktioner som ges av din hudterapeut. Om du har några frågor eller oro efter din behandling, tveka inte att kontakta oss för rådgivning. Regelbundna uppföljningar och ytterligare behandlingar kan rekommenderas beroende på din hudtyp och de hudvårdsresultat du önskar uppnå.</p>',
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

$results_title = 'Alma Hybrid före och efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-alma-hybrid-oscar-fore.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-alma-hybrid-oscar-efter.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-alma-hybrid-oscar-fore.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-alma-hybrid-oscar-efter.webp',
        url_title: 'Alma Hybrid oScar resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Man',
        problem: 'Ärr',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '',
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
        image_before_small: '/bilder/resultat/358x358/resultat-alma-hybrid-hybridlift-fore.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-alma-hybrid-hybridlift-efter.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-alma-hybrid-hybridlift-fore.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-alma-hybrid-hybridlift-efter.webp',
        url_title: 'Alma Hybrid HybridLift resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Man',
        problem: 'Ärr',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '',
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
        image_before_small: '/bilder/resultat/358x358/resultat-alma-hybrid-softlift-fore.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-alma-hybrid-softlift-efter.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-alma-hybrid-softlift-fore.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-alma-hybrid-softlift-efter.webp',
        url_title: 'Alma Hybrid CO2 laser resultat',
        image_before_alt: 'Före',
        image_before_title: 'Före',
        image_after_alt: 'Efter',
        image_after_title: 'Efter',
        age: 21,
        gender: 'Man',
        problem: 'Ärr',
        type: 'Svår',
        treatment: new ResultTreatment(
            duration: '',
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
        image_before_small: '/bilder/resultat/arr/resultat-arr-fore.webp',
        image_after_small: '/bilder/resultat/arr/resultat-arr-efter.webp',
        image_before_large: '/bilder/resultat/arr/resultat-arr-fore.webp',
        image_after_large: '/bilder/resultat/arr/resultat-arr-efter.webp',
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
        image_before_small: '/bilder/resultat/arr/resultat-arr-fore-2.webp',
        image_after_small: '/bilder/resultat/arr/resultat-arr-efter-2.webp',
        image_before_large: '/bilder/resultat/arr/resultat-arr-fore-2.webp',
        image_after_large: '/bilder/resultat/arr/resultat-arr-efter-2.webp',
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
        image_before_small: '/bilder/resultat/arr/resultat-arr-fore-3.webp',
        image_after_small: '/bilder/resultat/arr/resultat-arr-efter-3.webp',
        image_before_large: '/bilder/resultat/arr/resultat-arr-fore-3.webp',
        image_after_large: '/bilder/resultat/arr/resultat-arr-efter-3.webp',
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

$reviews_title = 'Omdömen';

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur många behandlingar behövs för bästa resultat?',
            text: '<p class="p200">Antalet Alma Hybrid-behandlingar varierar beroende på dina specifika hudproblem och önskade resultat. Vanligtvis rekommenderas en serie av 3-5 behandlingar med intervaller på några veckor. En skräddarsydd behandlingsplan kommer att utformas under din konsultation för att möta dina unika behov.</p>'
        ),
        new Question(
            title: 'Hur länge håller resultatet från behandlingarna',
            text: '<p class="p200">Effekterna från Alma Hybrid-behandlingar kan vara långvariga, men det är viktigt att notera att yttre faktorer som solens strålar och hudens naturliga åldrande kan påverka resultaten över tid. Regelbundna underhållsbehandlingar och en noggrann hudvårdsrutin kan hjälpa till att bevara de positiva resultaten.</p>'
        ),
        new Question(
            title: 'Vad är skillnaden på fraktionerad och vanlig CO2 laser?',
            text: '<p class="p200">Fraktionerad CO2-laser och traditionell CO2-laser är två tekniker som används inom hudföryngring och behandling av hudproblem, men de skiljer sig åt i hur de appliceras och deras effekt på huden.</p>
            <p class="p200 mt-xl">Traditionell CO2-laser:<br />Denna laser använder en kontinuerlig ljusstråle som avlägsnar hela det yttersta hudlagret (epidermis) och värmer upp det underliggande hudlagret (dermis). Detta stimulerar produktionen av nytt kollagen och främjar hudens naturliga läkningsprocess, vilket resulterar i en jämnare, fastare hud. Eftersom den traditionella CO2-lasern behandlar hela hudområdet den appliceras på, kan återhämtningstiden vara längre, och det finns en högre risk för biverkningar såsom rodnad, svullnad och i sällsynta fall ärrbildning.</p>
            <p class="p200 mt-xl">Fraktionerad CO2-laser:<br />Fraktionerad teknik bryter upp laserljuset i tusentals små strålar (mikrostrålar) som tränger djupt in i huden för att behandla en fraktion av huden i taget, lämnar omgivande vävnad opåverkad. Detta leder till snabbare läkning eftersom endast en del av huden behandlas vid en given tidpunkt, samtidigt som det stimulerar kollagenproduktionen och hudförnyelsen. Fraktionerad CO2-laser kan med större precision behandla fina linjer, rynkor, ärr och andra hudtexturproblem med mindre risk för biverkningar och kortare återhämtningstid jämfört med traditionell CO2-laser.</p>
            <p class="p200 mt-xl">Sammanfattningsvis erbjuder fraktionerad CO2-laser fördelarna med CO2-laserbehandling men med förbättrad säkerhet, mindre återhämtningstid och lägre risk för komplikationer, vilket gör det till ett populärt val för dem som söker effektiva hudföryngringsbehandlingar.</p>'
        ),
    )
);
$faq_view_more = 'Se alla frågor & svar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'bilder/hudterapeut/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Alma Hybrid-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på Alma Hybrid-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'bilder/hudterapeut/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Alma Hybrid',
        image_title: 'Veronika Benedik - Specialist inom Alma Hybrid-vård'
    ),
    new Specialist(
        name: 'Julia Eklund',
        title: 'Hudterapeut sedan 2021',
        image: 'bilder/hudterapeut/312x312/hudterapeut-julia.webp',
        image_alt: 'Julia Eklund, hudterapeut med kunskap inom Alma Hybrid-behandlingar',
        image_title: 'Julia Eklund - Hudterapeut specialiserad på Alma Hybrid'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'bilder/hudterapeut/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Alma Hybrid-behandlingar',
        image_title: 'Vilma Libom - Expert inom Alma Hybrid-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/alma-hybrid-co2-laser.php" />

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
                            <?php if (!isset($big_types)) { ?>
                                <hr class="is-hidden-touch" />
                            <?php } ?>
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
                                include('hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>