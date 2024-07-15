<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Alma Harmony XL Pro behandling i Stockholm';
$seo_description = 'En mångsidig och avancerad medicinsk laser för behandling av olika hudåkommor som hudföryngring, pigmentering, aknereducering och ytliga blodkärl.';
$seo_keywords = 'medicinsk laser, hudföryngring laser, yag laser, nd yag, Alma Harmony XL Pro';

$seo_image = 'images/treatments/large/alma-harmony-xl-pro.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Alma Harmony XL Pro', '/alma-harmony-xl-pro.php'),
);

$model = new Service(
    title: 'Alma Harmony XL Pro',
    duration: null,
    price: 'Från 4595 kr',
    content: '<p class="p200">Alma Harmony XL Pro är en avancerad multi laser plattform som kombinerar flera tekniker för att adressera en mängd hudtillstånd. Den erbjuder anpassningsbara behandlingar för ärrbildning, hudföryngring, pigmentkorrigering, acnebehandling och mer, med minimal återhämtningstid.</p>',
    image_small: 'bilder/varumarken/358x274/harmony-xl-pro.webp',
    image_large: 'bilder/varumarken/424x456/harmony-xl-pro.webp',
    image_alt: 'Alma Harmony XL Pro',
    image_title: 'Alma Harmony XL Pro',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=almaharmony',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Alma Harmony XL Pro är det senaste inom modern laserteknik.';

$description_title = 'Vad är Harmony XL Pro?';
$description_text = '<p class="p200">Alma Harmony XL Pro är en banbrytande plattform för estetiska behandlingar som integrerar en rad avancerade tekniker för att möta en mängd hudvårdsbehov. Denna plattform använder specifika teknologier för att erbjuda skräddarsydda lösningar för hudföryngring laser, korrigering av huddefekter, och förbättring av hudens övergripande kvalitet. Här följer en översikt över några av de nyckeltekniker som Alma Harmony XL Pro erbjuder:</p>
<p class="p200 mt-m">Clear Lift - Q-switchad Nd:YAG<br />
Clear Lift använder Q-switchad Nd:YAG-laserteknik, känd för sin förmåga att behandla en rad hudtillstånd utan att skada hudens yttre lager. Denna teknik är idealisk för hudföryngring, minskning av fina linjer och rynkor, samt ljusning av pigmentfläckar. Den erbjuder en säker och effektiv behandling för alla hudtyper, inklusive mörkare hudtoner, med minimal återhämtningstid.</p>
<p class="p200 mt-m">Clear Skin - Erbium Glass 1540<br />
Clear Skin-tekniken använder Erbium Glass-laser på 1540nm för att effektivt behandla acne, acneärr, och andra texturrelaterade hudproblem. Denna icke-ablativa medicinsk laser tränger djupt in i huden för att stimulera kollagenproduktion och hudförnyelse, vilket resulterar i en klarare och jämnare hudton. Behandlingen är skonsam och lämpar sig väl för känsliga hudområden.</p>
<p class="p200 mt-m">iPixel - Erbium YAG: 2940<br />
iPixel är en fraktionerad laserbehandling som använder Erbium YAG laser på 2940nm för att utföra precisionsskinnande av huden. Denna metod är effektiv för att minska ärr, förbättra hudtextur, och strama åt huden genom att stimulera intensiv hudregeneration. Den erbjuder snabba resultat med kort återhämtningstid och är lämplig för de som vill ha märkbara förbättringar med minimala ingrepp.</p>
<p class="p200 mt-m">Dye-VL: IPL<br />
Dye-VL-tekniken utnyttjar kraften i Intensivt Pulserat Ljus (IPL) kombinerat med en unik färgämneslösning för att selektivt rikta in sig på och behandla vaskulära lesioner, rodnad, pigmentfläckar och solskador. Denna mångsidiga behandlingsmetod är skonsam mot huden och erbjuder förbättringar i hudton och textur, vilket gör den idealisk för en omfattande hudförnyelse.</p>
<p class="p200 mt-m">Q-switchad Nd:YAG-teknik<br />
Bryter effektivt ner och tar bort tatueringspigment från huden. Denna metod riktar sig selektivt mot bläckpartiklarna, vilket tillåter kroppen att naturligt eliminera dem.</p>
<p class="p200 mt-m">Alma Harmony XL Pro kombinerar dessa innovativa tekniker för att erbjuda en komplett lösning för de mest efterfrågade estetiska behandlingarna. Genom att anpassa behandlingen efter varje patients unika behov säkerställer Alma Harmony XL Pro optimala resultat och maximal patienttillfredsställelse.</p>';

$types_title = 'Hudproblem vi behandlar';
$types_description = '<p class="p200">';
$types = array(
    new Service(
        title: 'Harmony XL Pro mot acneärr',
        duration: '90 min',
        price: '4595 kr',
        content: 'Använder ClearSkin med Erbium Glass 1540 munstycke för att stimulera kollagen och främja hudförnyelse. Denna teknik minskar acneärrens synlighet genom djup penetration och kollageninduktion.',
        image_small: 'bilder/hudproblem/102x102/acnearr.webp',
        image_large: 'bilder/hudproblem/200x200/acnearr.webp',
        image_alt: 'Harmony XL Pro mot Acneärr',
        image_title: 'Harmony XL Pro mot Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Acneärr',

        url: '/laser-acnearr.php',
        url_label: 'Läs mer om laser mot acneärr',
        url_title: 'Läs mer om laser mot acneärr',
    ),
    new Service(
        title: 'Harmony XL Pro mot aktiv acne',
        duration: '60 min',
        price: '2995 kr',
        content: 'ClearSkin erbjuder en unik kombination av laserenergi och vakuum för att behandla aktiv acne genom att minska talgproduktionen och eliminera acne-bakterier. Denna metods djuprengörande effekt bidrar till klarare hud.',
        image_small: 'bilder/hudproblem/102x102/acne.webp',
        image_large: 'bilder/hudproblem/200x200/acne.webp',
        image_alt: 'Harmony XL Pro mot Aktiv Acne',
        image_title: 'Harmony XL Pro mot Aktiv Acne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Aktiv Acne',

        url: '/laser-acne.php',
        url_label: 'Läs mer om laser mot akne',
        url_title: 'Läs mer om laser mot akne',
    ),
    new Service(
        title: 'Harmony XL Pro mot ärr (skade- och operationsärr)',
        duration: '30 min',
        price: '2995 kr',
        content: 'Kombinerar ClearLift och iPixel tekniker för att målinrikta och behandla ärrvävnad genom stimulering av ny hudväxt och minskning av ärrvävnadens tjocklek. Denna strategi jämnar ut hudtexturen och minimerar ärr.',
        image_small: 'bilder/hudproblem/102x102/operations-skadearr.webp',
        image_large: 'bilder/hudproblem/200x200/operations-skadearr.webp',
        image_alt: 'Harmony XL Pro mot Ärr (Skade- och Operationsärr)',
        image_title: 'Harmony XL Pro mot Ärr (Skade- och Operationsärr)',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_Scars&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Ärr (Skade- och Operationsärr)',

        url: '/laser-arr.php',
        url_label: 'Läs mer om laser mot ärr',
        url_title: 'Läs mer om laser mot ärr',
    ),
    new Service(
        title: 'Harmony XL Pro mot bristningar',
        duration: '90 min',
        price: '4595 kr',
        content: 'ClearLift med Q-switchad Nd:YAG teknologi använder mikrovibrationer för att stimulera djupt liggande hudlager utan att skada ytan. Denna process främjar hudens naturliga läkningsmekanismer, vilket minskar bristningars synlighet.',
        image_small: 'bilder/hudproblem/102x102/bristningar.webp',
        image_large: 'bilder/hudproblem/200x200/bristningar.webp',
        image_alt: 'Harmony XL Pro mot Bristningar',
        image_title: 'Harmony XL Pro mot Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Bristningar',

        url: '/hudproblem/bristningar/',
        url_label: 'Läs mer om bristningar',
        url_title: 'Läs mer om bristningar',
    ),
    new Service(
        title: 'Harmony XL Pro mot stora porer',
        duration: '90 min',
        price: '4595 kr',
        content: 'ClearLift tekniken stimulerar hudens djupare lager för att förbättra hudstrukturen och minska porernas storlek. Denna icke-invasiva metod ger en slätare och mer raffinerad hudtextur.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Harmony XL Pro mot Stora Porer',
        image_title: 'Harmony XL Pro mot Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Stora Porer',

        url: '/stora-porer.php',
        url_label: 'Läs mer om stora porer',
        url_title: 'Läs mer om stora porer',
    ),
    new Service(
        title: 'Harmony XL Pro mot pigmentfläckar',
        duration: '90 min',
        price: '4595 kr',
        content: 'Dye-VL använder IPL-teknologi med ett specifikt munstycke för att rikta in sig på melanin, vilket ljusar upp och reducerar pigmentfläckar. Denna selektiva målinriktning bidrar till en jämnare hudton.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Harmony XL Pro mot Pigmentfläckar',
        image_title: 'Harmony XL Pro mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Pigmentfläckar',

        url: '/ipl-pigmentflackar.php',
        url_label: 'Läs mer om laser mot pigmentfläckar',
        url_title: 'Läs mer om laser mot pigmentfläckar',
    ),
    new Service(
        title: 'Harmony XL Pro mot rynkor och fina Linjer',
        duration: '90 min',
        price: '4595 kr',
        content: 'iPixel med Erbium YAG 2940 munstycke utför mikrolaser peeling som stimulerar hudregeneration och kollagenproduktion. Detta slätar effektivt ut rynkor och fina linjer genom precisionsförnyelse av hudytan.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Harmony XL Pro mot Rynkor och Fina Linjer',
        image_title: 'Harmony XL Pro mot Rynkor och Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_Wrinkles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Rynkor och Fina Linjer',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),
    new Service(
        title: 'Harmony XL Pro för hudföryngring (skin rejuvenation)',
        duration: '90 min',
        price: '4595 kr',
        content: 'Använder en kombination av tekniker, inklusive Dye-VL och ClearLift, för att omfattande förbättra hudtonen, textur och elasticitet. Denna flerdimensionella strategi resulterar i en märkbart yngre och mer strålande hud.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Harmony XL Pro-behandling för hudföryngring',
        image_title: 'Harmony XL Pro-behandling för hudföryngring',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation för hudföryngring',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=Service_Laser_Harmony_Skin_Rejuvenation',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro för hudföryngring',
    ),
);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">Den mångsidiga Harmony XL Pro-tekniken behandlar effektivt en rad olika hudområden.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte & Kropp',
        image_title: 'Ansikte & Kropp',
        title: 'Ansikte & kropp',
        description: '<p class="p200">Vi behandlar dessutom flera områden på kroppen.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=IPL_Face',
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
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=IPL_Neck',
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
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=IPL_Decolletage',
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
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=Laser_Back',
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
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=IPL_Hands',
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
        description: '<p class="p200">Utöka effekten genom att behandla flera områden.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '90 min',
                price: '4595 kr',
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=Laser_1xArea',
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
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=IPL_2xAreas',
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
                url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=SKIP&area=IPL_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/alma-harmony-xl-pro-forberedelser.webp',
        image_large: '/bilder/process/872x456/alma-harmony-xl-pro-forberedelser.webp',
        image_alt: 'Förberedelser inför Alma Harmony XL Pro',
        image_title: 'Förberedelser inför Alma Harmony XL Pro',
        content: '<p class="p200">Inför din Harmony XL Pro-behandling på AcneSpecialisten är det viktigt att förbereda din hud för att optimera behandlingens effekt. Vi inleder processen med en kostnadsfri konsultation, där vi noggrant går igenom behandlingen och skapar en anpassad behandlingsplan utifrån dina unika hudbehov.</p>
            <p class="p200 mt-m">För att förbereda dig inför behandlingen rekommenderar vi att du undviker direkt solstrålning och solarium under veckorna före din session. Detta är för att minska risken för överkänslighet och för att optimera hudens tillstånd för behandlingen. Du bör också undvika att använda hudvårdsprodukter som innehåller starka aktiva ingredienser, såsom exfolierande syror, åtminstone en vecka före din behandling.</p>
            <p class="p200 mt-m">Under konsultationen kommer vi att granska din hudhistorik och eventuella tidigare behandlingar för att fullständigt anpassa Harmony XL Pro-behandlingen till dina behov. Vårt mål är att du ska känna dig trygg och informerad genom hela behandlingsprocessen. Vi ser fram emot att hjälpa dig att uppnå en förbättrad hudkvalitet och ett strålande utseende med hjälp av Harmony XL Pro.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/alma-harmony-xl-pro-eftervard.webp',
        image_large: '/bilder/process/872x456/alma-harmony-xl-pro-eftervard.webp',
        image_alt: 'Eftervård för Harmony XL Pro',
        image_title: 'Eftervård för Harmony XL Pro',
        content: '<p class="p200">Att följa rätt eftervård är avgörande för att maximera effekten av din Harmony XL Pro-laserbehandling hos AcneSpecialisten. Efter behandlingen är det normalt att uppleva en viss rodnad och svullnad i det behandlade området. Vi råder dig att inte röra området med orena händer och att undvika makeup under de första 24 timmarna för att minska risken för irritation och infektioner.</p>
        <p class="p200 mt-m">Under återhämtningen är det viktigt att undvika aktiviteter som kan öka svullnad och rodnad, såsom intensiv träning, heta duschar och bastu. Användning av solskydd med hög SPF är essentiellt för att skydda den känsliga huden från solens UV-strålar. Vi rekommenderar också att du använder milda och återfuktande hudvårdsprodukter utan irriterande ingredienser för att främja en smidig läkningsprocess och upprätthålla hudens fuktbalans.</p>
        <p class="p200 mt-m">Om du har några frågor eller bekymmer efter din behandling, är vi alltid här för att erbjuda råd och stöd. Regelbundna uppföljningar och eventuella ytterligare behandlingar kan diskuteras och planeras utifrån din individuella hudtyp och de specifika mål du har för din hudvård. Vårt mål på AcneSpecialisten är att du ska känna dig trygg och nöjd med dina behandlingsresultat.</p>',
    ),
);

$service_brands_title = 'Andra märken för laser';
$service_brands_text = '<p class="p200">Utöver Harmony XL Pro har vi ett bredd utbud av moderna och effektiva lasermaskiner.</p>';
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
        label: 'Alma Rejuve Dye-VL',
        image: 'bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/rejuve-dye-vl',
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
            title: 'Hur säker är behandlingen med Alma Harmony XL Pro?',
            text: '<p class="p200">Alma Harmony XL Pro är känd för sin höga säkerhetsprofil och är designad för att behandla en mängd hudtillstånd med minimal risk. Plattformen erbjuder skräddarsydda behandlingsprotokoll för alla hudtyper, inklusive mörkare hudtoner, vilket minskar risken för biverkningar.</p>'
        ),
        new Question(
            title: 'Hur lång tid tar en behandlingssession med Alma Harmony XL Pro?',
            text: '<p class="p200">Längden på en behandlingssession varierar beroende på behandlingsområdets storlek och den specifika tekniken som används. Sessioner kan vara allt från några få min till en timme, vilket gör det möjligt för många behandlingar att utföras även under en lunchrast.</p>'
        ),
        new Question(
            title: 'Är behandlingar med Alma Harmony XL Pro smärtsamma?',
            text: '<p class="p200">De flesta patienter upplever minimalt till inget obehag under behandlingen, tack vare de icke-invasiva teknikerna och möjligheten till topikal bedövning vid mer avancerade behandlingar. Obehaget är ofta kortvarigt och hanterbart.</p>'
        ),
        new Question(
            title: 'Hur många behandlingssessioner behövs för att se resultat?',
            text: '<p class="p200">Antalet rekommenderade sessioner varierar beroende på individens hudtillstånd och de specifika målen med behandlingen. Vissa förbättringar kan märkas redan efter en session, men vanligtvis krävs flera sessioner för optimala resultat.</p>'
        ),
        new Question(
            title: 'Hur lång är återhämtningsperioden efter en behandling med Alma Harmony XL Pro?',
            text: '<p class="p200">Återhämtningsperioden är minimal, med de flesta patienter som återgår till sina normala aktiviteter direkt efter behandlingen. För vissa mer intensiva behandlingar kan en kort återhämtningsperiod krävas, men detta diskuteras i förväg med din behandlare.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandlingar med Harmony XL Pro',
        image_title: 'Cazzandra Lindberg - Expert på behandlingar med Harmony XL Pro'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på behandlingar med Harmony XL Pro',
        image_title: 'Veronika Benedik - Specialist inom behandlingar med Harmony XL Pro'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom behandlingar med Harmony XL Pro',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på behandlingar med Harmony XL Pro'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandlingar med Harmony XL Pro',
        image_title: 'Vilma Libom - Expert inom behandlingar med Harmony XL Pro'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/alma-harmony-xl-pro.php" />

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
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>