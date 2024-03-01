<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Harmony XL Pro - Mångsidig Laserbehandling | AcneSpecialisten';
$seo_description = 'Upptäck AcneSpecialistens Harmony XL Pro, en mångsidig och avancerad laserteknik för behandling av diverse hudåkommor. Denna teknologi är särskilt effektiv för hudföryngring, pigmentering, aknehantering, hårborttagning, vaskulära behandlingar och tatueringsborttagning. Harmony XL Pro erbjuder skräddarsydda behandlingar för att möta dina unika hudvårdsbehov.';
$seo_keywords = 'Harmony XL Pro, mångsidig laserbehandling, hudföryngring, pigmentering, aknebehandling, hårborttagning, vaskulära behandlingar, tatueringsborttagning, AcneSpecialisten, anpassad hudvård';

$seo_image = 'images/treatments/large/alma-harmony-xl-pro.webp';

$path_segments = array(
      new PathSegment('Varumärken', '/varumarken/'),
      new PathSegment('Alma Harmony XL Pro', '/alma-harmony-xl-pro.php'),
);

$model = new Service(
    title: 'Alma Harmony XL Pro',
    duration: null,
    price: 'Från 4595 kr',
    content: '<p class="p200">På AcneSpecialisten erbjuder vi Harmony XL Pro, en avancerad och mångsidig laserteknik som är idealisk för en rad olika hudbehandlingar. Harmony XL Pro är utmärkt för allt från hudföryngring och pigmentkorrigering till effektiv aknebehandling.</p>',
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

$nav_buttons = array(
    'about' => 'Om Alma Harmony XL Pro',
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

$description_title = 'Vad är Harmony XL Pro?';
$description_text = '<p class="p200">Harmony XL Pro på AcneSpecialisten är en avancerad och mångsidig laserplattform som erbjuder skräddarsydda lösningar för en mängd hudproblem. Denna innovativa teknik kombinerar olika lasermoduler och ljusbaserade behandlingar för att ge en anpassad och effektiv hudvårdsupplevelse.</p>
<p class="p200 mt-m">Med Harmony XL Pro kan vi adressera en rad hudtillstånd, inklusive hudföryngring, pigmentkorrigering, aknebehandling, vaskulära problem, och även tatueringsborttagning. Den unika mångsidigheten hos denna plattform gör det möjligt för oss att skapa skonsamma men kraftfulla behandlingsprotokoll, anpassade efter varje klients individuella behov och hudtyp.</p>
<p class="p200 mt-m">Denna teknik är känd för sin förmåga att leverera märkbara resultat med minimal återhämtningstid. Harmony XL Pro är idealisk för de som söker en icke-invasiv, men effektiv, lösning på sina hudvårdsproblem. Vår användning av Harmony XL Pro på AcneSpecialisten innebär att vi kan erbjuda en hög nivå av personlig anpassning i våra behandlingar, vilket leder till optimala resultat och förbättrad hudhälsa.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Harmony XL Pro',
        image_small: '/bilder/process/358x272/alma-harmony-xl-pro-forberedelser.webp',
        image_large: '/bilder/process/872x456/alma-harmony-xl-pro-forberedelser.webp',
        image_alt: 'Förberedelser inför Alma Harmony XL Pro',
        image_title: 'Förberedelser inför Alma Harmony XL Pro',
        content: '<p class="p200">Inför din Harmony XL Pro-behandling på AcneSpecialisten är det viktigt att förbereda din hud för att optimera behandlingens effekt. Vi inleder processen med en kostnadsfri konsultation, där vi noggrant går igenom behandlingen och skapar en anpassad behandlingsplan utifrån dina unika hudbehov.</p>
        <p class="p200 mt-m">För att förbereda dig inför behandlingen rekommenderar vi att du undviker direkt solstrålning och solarium under veckorna före din session. Detta är för att minska risken för överkänslighet och för att optimera hudens tillstånd för behandlingen. Du bör också undvika att använda hudvårdsprodukter som innehåller starka aktiva ingredienser, såsom exfolierande syror, åtminstone en vecka före din behandling.</p>
        <p class="p200 mt-m">Under konsultationen kommer vi att granska din hudhistorik och eventuella tidigare behandlingar för att fullständigt anpassa Harmony XL Pro-behandlingen till dina behov. Vårt mål är att du ska känna dig trygg och informerad genom hela behandlingsprocessen. Vi ser fram emot att hjälpa dig att uppnå en förbättrad hudkvalitet och ett strålande utseende med hjälp av Harmony XL Pro.</p>',
    ),
    'process' => new Article(
        title: 'Hur går behandling med Harmony XL Pro till?',
        image_small: '/bilder/process/358x272/alma-harmony-xl-pro-process.webp',
        image_large: '/bilder/process/872x456/alma-harmony-xl-pro-process.webp',
        image_alt: 'Hur går behandling med Harmony XL Pro till?',
        image_title: 'Hur går behandling med Harmony XL Pro till?',
        content: '<p class="p200">Harmony XL Pro-behandlingen på AcneSpecialisten är en sofistikerad metod för att effektivt adressera och behandla en rad hudåkommor. Din session börjar med en grundlig rengöring av huden för att optimera förberedelserna inför laserns applicering.</p>
        <p class="p200 mt-m">Denna avancerade behandling kombinerar olika lasertekniker för att målinriktat och skonsamt behandla ditt hudtillstånd. Med Harmony XL Pro-teknologin använder vi fraktionerad CO2-laser för att skapa mikroskopiska skador i hudens yttre lager. Denna process aktiverar kroppens naturliga läkningsmekanismer och främjar nybildning av kollagen och elastin, vitala komponenter för en frisk och ungdomlig hud.</p>
        <p class="p200 mt-m">Denna laserbehandling är särskilt effektiv för att behandla och reducera ärr, som acneärr och kirurgiska ärr, samt att jämna ut rynkor och fina linjer. Behandlingen bidrar även till huduppfräschning och förbättring av hudens övergripande textur. Du kan känna en mild värme under behandlingen, men vi använder olika metoder för att minimera obehag och säkerställa en behaglig upplevelse.</p>
        <p class="p200 mt-m">Efter behandlingen kan viss rodnad och svullnad förekomma, vilket är en normal reaktion och en del av läkningsprocessen. Vi ger dig omfattande instruktioner för eftervård för att stödja din hud under återhämtningsprocessen. Resultaten från Harmony XL Pro-behandlingarna utvecklas över tid, vilket ger en gradvis och varaktig förbättring av din hudkvalitet.</p>',
    ),
);

$types_title = 'Hudproblem som behandlas med Harmony XL Pro';
$types_description = '<p class="p200">med Harmony XL Pro behandlar vi en rad olika hudproblem effektivt.</p>';
$types = array(
    new Service(
        title: 'Harmony XL Pro mot Acneärr',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Harmony XL Pro-lasern reducerar effektivt acneärr och förbättrar hudens textur genom att stimulera kollagenproduktion och främja hudens läkning, vilket resulterar i en jämnare och mer föryngrad hud.',
        image_small: 'bilder/problem/102x102/acnearr.webp',
        image_large: 'bilder/problem/200x200/acnearr.webp',
        image_alt: 'Harmony XL Pro mot Acneärr',
        image_title: 'Harmony XL Pro mot Acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Acneärr',
    ),

    new Service(
        title: 'Harmony XL Pro mot Rynkor och Fina Linjer',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Harmony XL Pro-lasern fokuserar på att mjuka upp rynkor och fina linjer, vilket bidrar till att återställa hudens ungdomliga utseende och elasticitet genom stimulering av kollagen- och elastinproduktion.',
        image_small: 'bilder/problem/102x102/mogen-hy.webp',
        image_large: 'bilder/problem/200x200/mogen-hy.webp',
        image_alt: 'Harmony XL Pro mot Rynkor och Fina Linjer',
        image_title: 'Harmony XL Pro mot Rynkor och Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Rynkor och Fina Linjer',
    ),

    new Service(
        title: 'Harmony XL Pro mot Bristningar',
        duration: '90 minuter',
        price: '4595 kr',
        content: 'Denna laserbehandling med Harmony XL Pro är effektiv för att reducera bristningar och förbättra hudens textur och elasticitet, vilket ger en slätare och mer enhetlig hudton.',
        image_small: 'bilder/problem/102x102/bristningar.webp',
        image_large: 'bilder/problem/200x200/bristningar.webp',
        image_alt: 'Harmony XL Pro mot Bristningar',
        image_title: 'Harmony XL Pro mot Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Bristningar',
    ),

    new Service(
        title: 'Harmony XL Pro mot Ärr (Skade- och Operationsärr)',
        duration: '30 minuter',
        price: '2995 kr',
        content: 'Harmony XL Pro-lasern erbjuder en specialiserad behandling för att effektivt minska synligheten av skade- och operationsärr, och stimulerar samtidigt hudens naturliga regenereringsprocess.',
        image_small: 'bilder/problem/102x102/operations-skadearr.webp',
        image_large: 'bilder/problem/200x200/operations-skadearr.webp',
        image_alt: 'Harmony XL Pro mot Ärr (Skade- och Operationsärr)',
        image_title: 'Harmony XL Pro mot Ärr (Skade- och Operationsärr)',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_Scars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Ärr (Skade- och Operationsärr)',
    ),

    new Service(
        title: 'Harmony XL Pro mot Pigmentfläckar',
        duration: '950 minuter',
        price: '4595 kr',
        content: 'Denna målinriktade laserbehandling med Harmony XL Pro arbetar för att ljusa upp och reducera pigmentfläckar, och jämnar ut hudtonen samtidigt som den återställer hudens naturliga lyster.',
        image_small: 'bilder/problem/102x102/pigmentflackar.webp',
        image_large: 'bilder/problem/200x200/pigmentflackar.webp',
        image_alt: 'Harmony XL Pro mot Pigmentfläckar',
        image_title: 'Harmony XL Pro mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Pigmentfläckar',
    ),

    new Service(
        title: 'Harmony XL Pro mot Aktiv Acne',
        duration: '60 minuter',
        price: '3595 kr',
        content: 'Harmony XL Pro-lasern behandlar aktiv acne genom att angripa acnebakterier och minska inflammation, vilket resulterar i en klarare och friskare hud.',
        image_small: 'bilder/problem/102x102/acne.webp',
        image_large: 'bilder/problem/200x200/acne.webp',
        image_alt: 'Harmony XL Pro mot Aktiv Acne',
        image_title: 'Harmony XL Pro mot Aktiv Acne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Aktiv Acne',
    ),

    new Service(
        title: 'Harmony XL Pro mot Stora Porer',
        duration: '60 minuter',
        price: '3595 kr',
        content: 'Harmony XL Pro-laserbehandling minskar effektivt storleken på stora porer och förfinar hudens struktur, vilket bidrar till en jämnare hudton och ett förbättrat utseende.',
        image_small: 'bilder/problem/102x102/stora-porer.webp',
        image_large: 'bilder/problem/200x200/stora-porer.webp',
        image_alt: 'Harmony XL Pro mot Stora Porer',
        image_title: 'Harmony XL Pro mot Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_HarmonyXLPRO',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka gratis konsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=almaharmony&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Harmony XL Pro mot Stora Porer',
    ),

    new Service(
        title: 'Harmony XL Pro för Hudföryngring (Skin Rejuvenation)',
        duration: '60 minuter',
        price: '4000 kr',
        content: 'Harmony XL Pro-laserbehandling erbjuder en avancerad lösning för hudföryngring. Denna behandling syftar till att minska ålderstecken, förbättra hudton och textur, och återställa hudens ungdomliga lyster och vitalitet. Perfekt för dem som önskar en synlig uppfräschning av huden med långvariga resultat.',
        image_small: 'bilder/problem/102x102/mogen-hy.webp',
        image_large: 'bilder/problem/200x200/mogen-hy.webp',
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

$treatment_areas_title = 'Behandlingsområden för Harmony XL Pro';
$treatment_areas_text = '<p class="p200">Den mångsidiga Harmony XL Pro-tekniken behandlar effektivt en rad olika hudområden.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte & Kropp',
        image_title: 'Ansikte & Kropp',
        title: 'Ansikte & Kropp',
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
                image: null,
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
                image: null,
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
                image: null,
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

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för Harmony XL Pro',
    image_small: '/bilder/process/358x272/alma-harmony-xl-pro-eftervard.webp',
    image_large: '/bilder/process/872x456/alma-harmony-xl-pro-eftervard.webp',
    image_alt: 'Eftervård för Harmony XL Pro',
    image_title: 'Eftervård för Harmony XL Pro',
    content: '<p class="p200">Att följa rätt eftervård är avgörande för att maximera effekten av din Harmony XL Pro-laserbehandling hos AcneSpecialisten. Efter behandlingen är det normalt att uppleva en viss rodnad och svullnad i det behandlade området. Vi råder dig att inte röra området med orena händer och att undvika makeup under de första 24 timmarna för att minska risken för irritation och infektioner.</p>
    <p class="p200 mt-m">Under återhämtningen är det viktigt att undvika aktiviteter som kan öka svullnad och rodnad, såsom intensiv träning, heta duschar och bastu. Användning av solskydd med hög SPF är essentiellt för att skydda den känsliga huden från solens UV-strålar. Vi rekommenderar också att du använder milda och återfuktande hudvårdsprodukter utan starka dofter eller irriterande ingredienser för att främja en smidig läkningsprocess och upprätthålla hudens fuktbalans.</p>
    <p class="p200 mt-m">Om du har några frågor eller bekymmer efter din behandling, är vi alltid här för att erbjuda råd och stöd. Regelbundna uppföljningar och eventuella ytterligare behandlingar kan diskuteras och planeras utifrån din individuella hudtyp och de specifika mål du har för din hudvård. Vårt mål på AcneSpecialisten är att du ska känna dig trygg och nöjd med dina behandlingsresultat.</p>',
));

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
            title: 'Hur många Harmony XL Pro-behandlingar behövs för bästa resultat?',
            text: 'Antalet Harmony XL Pro-behandlingar som behövs varierar individuellt, beroende på dina hudproblem och önskade resultat. Generellt rekommenderas en serie av 3-5 behandlingar med några veckors mellanrum. Under konsultationen skapar vi en anpassad behandlingsplan som passar just dina behov.'
        ),
        new Question(
            title: 'Hur långvariga är effekterna av Harmony XL Pro-behandlingar?',
            text: 'Resultaten från Harmony XL Pro-behandlingar kan vara långvariga, men det är viktigt att underhålla huden och skydda den från yttre påverkan som sol och åldrande. Regelbundna uppföljningsbehandlingar och en skräddarsydd hudvårdsrutin rekommenderas för att bevara effekterna.'
        ),
        new Question(
            title: 'Vad kan jag förvänta mig efter en Harmony XL Pro-behandling?',
            text: 'Efter en Harmony XL Pro-behandling är det vanligt med rodnad, svullnad och en viss känslighet i det behandlade området. Dessa symtom är normala och börjar avta efter några dagar. Följ alltid eftervårdsinstruktionerna och skydda huden mot solen för att främja en smidig läkningsprocess.'
        ),
        new Question(
            title: 'Krävs det särskild eftervård efter Harmony XL Pro-behandling?',
            text: 'Ja, korrekt eftervård är avgörande efter en Harmony XL Pro-behandling. Detta innefattar att regelbundet använda solskydd, undvika direkt solljus, och använda milda, återfuktande hudvårdsprodukter. Följ de eftervårdsråd som ges av din hudterapeut för bästa möjliga resultat och läkning.'
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

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Powerlite Photonova',
        image: 'images/brands/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova',
        image_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Dermapen',
        image: 'images/brands/dermapen.svg',
        image_alt: 'Dermapen',
        image_title: 'Dermapen',
    ),
    new Brand(
        label: 'CryoPen',
        image: 'images/brands/cryopen.svg',
        image_alt: 'CryoPen',
        image_title: 'CryoPen',
    ),
    new Brand(
        label: 'Alma',
        image: 'images/brands/alma.svg',
        image_alt: 'Alma',
        image_title: 'Alma',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'images/brands/prx-t33.svg',
        image_alt: 'PRX-T33',
        image_title: 'PRXT',
    ),
    new Brand(
        label: 'HydraFacial',
        image: 'images/brands/hydrafacial.svg',
        image_alt: 'HydraFacial',
        image_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Infuzion',
        image: 'images/brands/infuzion.svg',
        image_alt: 'Infuzion',
        image_title: 'Infuzion',
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