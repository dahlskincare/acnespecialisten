<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'PRX T33 Stockholm | AcneSpecialisten';
$seo_description = 'Boka en PRX T33 behandling som ✓Motverkar tecken på åldrande ✓Förbättrar hudens struktur ✓Återställer din naturliga hudton. Starta med gratis konsultation →';
$seo_keywords = 'prx t33, prx behandling, prx, prx t33 behandling';
$seo_image = 'images/treatments/large/prx-t33.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('PRX-T33', '/prx-t33.php'),
);

$model = new Service(
    title: 'PRX T33 behandling i Stockholm',
    duration: null,
    price: null,
    content: '<p class="p200">PRX T33 är en avancerad form av kemisk peeling som inriktar sig på att effektivt förbättra hudens utseende och kvalitet. Denna innovativa behandling är särskilt lämplig för dig som vill adressera hudproblem såsom acneärr, melasma, pigmentfläckar, pormaskar, stora porer, samt rynkor och fina linjer.</p>',
    image_small: 'bilder/varumarken/358x274/prx-t33.webp',
    image_large: 'bilder/varumarken/424x456/prx-t33.webp',
    image_alt: 'PRX T33 behandlingar',
    image_title: 'PRX T33 behandlingar',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 procedure',
            price: '1995 kr',
            savings: null,
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '4 procedures',
            price: '6995 kr',
            savings: 'Spara 985 kr',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_4',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '6 procedures',
            price: '8995 kr',
            savings: 'Spara 2975 kr',
            booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_6',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$floating_box = 'Effektiv nålbehandling som förbättrar hudens struktur.';

$description_title = 'Vad är PRX T33?';
$description_text = '<p class="p200">PRX T33 är en banbrytande hudföryngringsbehandling som erbjuder de revolutionerande fördelarna med en kemisk peeling utan den avflagning och återhämtningstid som ofta förknippas med sådana behandlingar. Den unika formulan kombinerar TCA (triklorättiksyra) med väteperoxid (H2O2) och kojicsyra, skapar en kraftfull blandning som djupt penetrerar huden utan att orsaka yttre skador.</p>
<p class="p200 mt-m">Denna behandling är utformad för att stimulera hudens naturliga förnyelseprocess på djupet, vilket resulterar i en förbättrad hudstruktur, elasticitet och fasthet. PRX T33 stimulerar kollagenproduktionen och ger en omedelbar åtstramande effekt, vilket gör den idealisk för att behandla en rad hudåkommor, inklusive fina linjer och rynkor, ärr, slapp hud och en ojämn hudton.</p>
<p class="p200 mt-m">En av de största fördelarna med PRX T33 är att den inte kräver någon återhämtningstid, vilket gör det möjligt för kunden att återgå till sina normala aktiviteter omedelbart efter behandlingen. Detta, tillsammans med dess effektivitet vid förbättring av hudens utseende och känsla, har gjort PRX T33 till en favorit bland de som söker icke-invasiva metoder för hudförbättring. Behandlingen passar alla hudtyper och kan utföras när som helst på året, vilket ger en mångsidig lösning för de som strävar efter en ungdomligare, mer strålande hud.</p>';

$top_articles = array(

    'process' => new Article(
        title: 'Hur går behandling till?',
        image_small: '/bilder/process/358x272/prx-t33-process.webp',
        image_large: '/bilder/process/872x456/prx-t33-process.webp',
        image_alt: 'Hur går behandling med PRX T33 till?',
        image_title: 'Hur går behandling med PRX T33 till?',
        content: '<p class="p200">Behandlingen inleds med en noggrann rengöring av huden för att skapa en optimal grund för peelingen. Därefter appliceras PRX T33-lösningen varsamt på huden i olika lager. Denna unika formula är utformad för att djupgående exfoliera utan att orsaka den flagning som traditionella kemiska peelings kan ge. Du kan känna en mild stickande känsla, men processen är i stort sett smärtfri tack vare PRX T33:s avancerade sammansättning.</p>
        <p class="p200 mt-m">Efter att peelingen har verkat i rätt tid, följer en lugnande fas där vi applicerar en återfuktande och lugnande mask för att maximera komforten och minimera eventuell rodnad. Slutligen avslutas behandlingen med en närande kräm som hjälper till att återställa hudens fuktbalans och ger en omedelbar lyster. Med PRX T33-behandlingen hos AcneSpecialisten kan du förvänta dig en snabb och effektiv förbättring av hudens textur och utseende, utan den återhämtningstid som associeras med traditionell kemisk peeling.</p>',
    ),
);

$big_types = array(
    new Service(
        title: 'PRX T33',
        duration: '30 min',
        price: null,
        content: '<p class="p200">PRX T33 är en innovativ kemisk peeling som erbjuder exceptionella resultat för att bekämpa tecken på åldrande, som rynkor, fina linjer, pigmenteringar och bristningar. Denna avancerade behandling är utformad för att ge intensiv förnyelse och förbättring av hudens struktur och ton utan den avskalning som traditionella peelings kan medföra.</p>
        <p class="p200 mt-m">Under PRX T33-behandlingen appliceras en speciell lösning som verkar djupt in i huden för att stimulera kollagenproduktionen och förnya hudcellerna. Detta bidrar till att effektivt minska tecken på åldrande och förbättra hudens övergripande utseende. Unikt för PRX T33 är dess förmåga att ge dramatiska resultat utan längre återhämtningstid, vilket gör den idealisk för de som önskar snabba, märkbara förbättringar.</p>
        <p class="p200 mt-m">PRX T33 är särskilt lämplig för de som vill återställa hudens lyster och ungdomliga utstrålning. Dess skonsamma men effektiva formula säkerställer en behaglig behandlingsupplevelse, vilket gör den till ett utmärkt val för de som söker en kraftfull men icke-invasiv lösning för att förbättra hudens kvalitet.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'PRX T33',
        image_title: 'PRX T33',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1995 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '6995 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '8995 kr',
                savings: 'Spara 2975 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_6'
            ),
        )
    ),

);

/*$types_title = 'Hudproblem vi behandlar med PRX T33';
$types_description = '';

$types = array(
    new Service(
        title: 'PRX T33 mot acneärr',
        duration: '30 min',
        price: null,
        content: 'Utformad för att effektivt behandla och minska synligheten av acneärr. Denna behandling arbetar på djupet för att jämna ut både ytan och hudtonen där ärrbildning har skett.',
        image_small: 'bilder/hudproblem/102x102/acnearr.webp',
        image_large: 'bilder/hudproblem/200x200/acnearr.webp',
        image_alt: 'Kemisk peeling mot acneärr',
        image_title: 'Kemisk peeling mot acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka kemisk peeling mot acneärr',

        url: '/acnearr.php',
        url_label: 'Läs mer om acneärr',
        url_title: 'Läs mer om acneärr',
    ),
    new Service(
        title: 'PRX T33 mot Pigmentfläckar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna behandling riktar sig mot pigmentfläckar, vilket hjälper till att jämföra hudton och reducera synliga fläckar.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Kemisk Peeling mot Pigmentfläckar',
        image_title: 'Kemisk Peeling mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Pigmentfläckar',

        url: '/pigmentflackar.php',
        url_label: 'Läs mer om pigmentfläckar',
        url_title: 'Läs mer om pigmentfläckar',
    ),
    new Service(
        title: 'PRX T33 mot Melasma',
        duration: '30 min',
        price: '1995 kr',
        content: 'Effektiv behandling för att ljusa upp och behandla melasma, vilket ger en jämnare och klarare hudton.',
        image_small: 'bilder/hudproblem/102x102/melasma.webp',
        image_large: 'bilder/hudproblem/200x200/melasma.webp',
        image_alt: 'Kemisk Peeling mot Melasma',
        image_title: 'Kemisk Peeling mot Melasma',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Melasma',
        booking_url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=Problem_Melasma',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling för Melasma',

        url: '/melasma.php',
        url_label: 'Läs mer om melasma',
        url_title: 'Läs mer om melasma',
    ),
    new Service(
        title: 'PRX T33 mot Rynkor & Fina Linjer',
        duration: '30 min',
        price: '1995 kr',
        content: 'Anpassad för att behandla åldrande hud, denna peeling minskar rynkor och fina linjer, vilket ger en mer ungdomlig och slät hud.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        image_title: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Rynkor och Fina Linjer',
        booking_url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Rynkor och Fina Linjer',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),
    new Service(
        title: 'PRX T33 mot Pormaskar & Stora Porer',
        duration: '30 min',
        price: '1595 kr',
        content: 'Denna behandling är idealisk för att djuprengöra huden, minska synligheten av pormaskar och förminska stora porer, vilket bidrar till en jämnare hudton och textur.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Kemisk Peeling mot Pormaskar och Stora Porer',
        image_title: 'Kemisk Peeling mot Pormaskar och Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        booking_url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=Problem_LargePores',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Pormaskar och Stora Porer',

        url: '/pormaskar.php',
        url_label: 'Läs mer om pormaskar',
        url_title: 'Läs mer om pormaskar',
    ),
    new Service(
        title: 'PRX T33 mot Bristningar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna peelingbehandling hjälper till att minska synligheten av bristningar, vilket förbättrar hudens struktur och utseende.',
        image_small: 'bilder/hudproblem/102x102/bristningar.webp',
        image_large: 'bilder/hudproblem/200x200/bristningar.webp',
        image_alt: 'Kemisk Peeling mot Bristningar',
        image_title: 'Kemisk Peeling mot Bristningar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Bristningar',
        booking_url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=Problem_StrechMarks',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Bristningar',

        url: '/hudproblem/bristningar/',
        url_label: 'Läs mer om bristningar',
        url_title: 'Läs mer om bristningar',
    ),
    new Service(
        title: 'PRX T33 mot Aktiv Akne',
        duration: '30 min',
        price: '1595 kr',
        content: 'Behandlar aktiv akne och hjäpler till att rengöra porer, minska inflammation och exfolierar huden.',
        image_small: 'bilder/hudproblem/102x102/akne.webp',
        image_large: 'bilder/hudproblem/200x200/akne.webp',
        image_alt: 'Kemisk Peeling mot Aktiv Akne',
        image_title: 'Kemisk Peeling mot Aktiv Akne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_PRXT33',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Aktiv Akne',
        booking_url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Aktiv Akne',

        url: '/kemisk-peeling-acne.php',
        url_label: 'Läs mer om kemisk peeling mot acne',
        url_title: 'Läs mer om kemisk peeling mot acne',
    ),
);*/

/*$big_types = array(
    new Service(
        title: 'Boosta din PRX T33 behandling med Microneedling',
        duration: null,
        price: null,
        content: '<p class="p200">För att ta din PRX T33 behandling till nästa nivå, introducerar vår klinik en innovativ kombinationsbehandling som kombinerar fördelarna med PRX T33 och microneedling för att maximera hudens förnyelse och lyster. Genom denna konbinations metod uppnås en djupgående förbättring av hudens kvalitet, spänst och lyster, samtidigt som den minimala återhämtningstiden bibehålls.</p>
        <p class="p200 mt-m">Genom att applicera PRX T33 direkt efter en microneedling-session, stimuleras hudens naturliga läkningsmekanismer och kollagenproduktion på ett kraftfullt sätt. PRX T33 är ett komplement till microneedling, vilket intensifierar de återskapande effekterna och bidrar till en långvarig förbättring av hudtonen, texturen samt en signifikant minskning av fina linjer och ojämnheter. Upplev den omvandlande kraften i denna kombinerade behandling för en synligt förnyad och strålande hud.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/kemisk-peeling.webp',
        image_alt: 'Boosta din PRX T33-behandling med Microneedling',
        image_title: 'Boosta din PRX T33-behandling med Microneedling',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_Microneedling',
        consultation_url_label: 'Boka hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=microneedling&skipable_problem=SKIP&area=Microneedling+PRX-T33-Boost',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka tid för behandling',
        icons: array(),
        procedures: array()
    ),
);*/

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte & kropp',
        image_title: 'Ansikte & kropp',
        title: 'Ansikte & kropp',
        description: '<p class="p200">Vår kemiska peeling kan appliceras på flera olika områden, anpassad efter dina behov.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=SKIP&area=ChemicalPeeling_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=SKIP&area=ChemicalPeeling_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=SKIP&area=ChemicalPeeling_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/rygg.svg',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=SKIP&area=ChemicalPeeling_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Händer',
                image_title: 'Händer',
                title: 'Händer',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=prx&skipable_problem=SKIP&area=ChemicalPeeling_Hands',
                url_label: 'Boka',
                url_title: 'Boka tid för handbehandling'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/prx-t33-forberedelser.webp',
        image_large: '/bilder/process/872x456/prx-t33-forberedelser.webp',
        image_alt: 'Förberedelser inför PRX T33-behandling',
        image_title: 'Förberedelser inför PRX T33-behandling',
        content: '<p class="p200">För att förbereda dig optimalt för din PRX T33-behandling hos AcneSpecialisten, rekommenderar vi att du följer några enkla men viktiga steg. Börja med att undvika exfoliering av huden några dagar före din behandling. Eftersom PRX T33 agerar djupt på huden, är det bäst att låta huden vara så orörd som möjligt innan peelingen.</p>
        <p class="p200 mt-m">Det är också viktigt att skydda din hud mot solen och undvika att använda brun-utan-sol-produkter veckan före din behandling. Denna försiktighetsåtgärd minskar risken för oönskade reaktioner och säkerställer att din hud är i bästa skick för att ta emot behandlingen. Vidare, informera din hudterapeut om eventuella mediciner du använder eller om du har några aktuella hudtillstånd, så att behandlingen kan anpassas på ett säkert och effektivt sätt. Tveka inte att kontakta oss om du har några frågor eller oro inför din PRX T33-behandling – vi är här för att se till att din upplevelse blir så bekväm och givande som möjligt.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/prx-t33-eftervard.webp',
        image_large: '/bilder/process/872x456/prx-t33-eftervard.webp',
        image_alt: 'PRX T33 eftervård',
        image_title: 'PRX T33 eftervård',
        content: '<p class="p200">Eftervård är en avgörande del av processen för att uppnå optimala resultat från din PRX-T33 behandling. För att säkerställa att din hud får den vård den behöver efter denna innovativa behandling, inkluderar vi ett skräddarsytt eftervårdskit som en del av din behandlingsplan. Detta kit är designat för att stödja och maximera din huds återhämtningsprocess och förbättra de långsiktiga resultaten av din behandling.</p>
    <p class="p200 mt-m">Det eftervårdskit du mottar ska användas under de första tre dagarna efter din behandling. Kitet innehåller noggrant utvalda produkter som är anpassade för att vårda, återfukta och skydda din hud under den kritiska återhämtningsperioden. Genom att följa eftervårdsinstruktionerna och använda produkterna i kitet som angivet, kan du hjälpa din hud att bibehålla optimal fuktbalans, minska risken för irritation och främja en snabbare återhämtning.</p>',
    ),
);

$service_brands_title = 'Märken för kemisk peeling';
$service_brands_text = '<p class="p200">Utöver PRX T33 jobbar vi även med Skin Tech för kemisk peeling.</p>';
$service_brands = array(
    new Brand(
        label: 'Skin Tech',
        image: 'images/brands/skin-tech.svg',
        image_alt: 'Skin Tech',
        image_title: 'Skin Tech'
    ),
);

$results_title = 'PRX T33 före och efter resultat';
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

$reviews_title = 'PRX T33 recension';

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Är PRX T33 lämplig för alla hudtyper?',
            text: '<p class="p200">Ja, PRX T33 är en flexibel kemisk peeling som passar för många olika hudtyper. Denna behandling är skonsam och effektiv, och vi anpassar den individuellt för att säkerställa att den passar dina specifika hudbehov och ger optimala resultat.</p>'
        ),
        new Question(
            title: 'Kan PRX T33 behandling hjälpa till med acneärr och pigmentfläckar?',
            text: '<p class="p200">Definitivt, PRX T33 är särskilt effektiv för att behandla acneärr och pigmentfläckar. Denna peeling hjälper till att exfoliera huden och främja cellförnyelse, vilket kan minska synligheten av acneärr och jämna ut pigmentfläckar.</p>'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå en PRX T33 behandling?',
            text: '<p class="p200">Behandlingsintervall för PRX T33 varierar beroende på din hudtyp och de problem du vill åtgärda. Vissa kan ha fördel av behandlingar var fjärde till sjätte vecka, medan andra kan behöva behandlas med längre eller kortare mellanrum. Vi kommer att rekommendera en behandlingsplan anpassad efter din personliga hudanalys.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i PRX T33-behandling',
        image_title: 'Cazzandra Lindberg - Expert på PRX T33-behandling'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på PRX T33',
        image_title: 'Veronika Benedik - Specialist inom PRX T33-behandling'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom PRX T33-behandling',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på PRX T33'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot PRX T33-behandling',
        image_title: 'Vilma Libom - Expert inom PRX T33-behandling'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/prx-t33.php" />
      
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
                                <picture class="mb-xl">
                                    <source media="(max-width: 799px)" srcset="<?php echo $treatment_area->image_small ?>">
                                    <source media="(min-width: 800px)" srcset="<?php echo $treatment_area->image_large ?>">
                                    <img class="treatment-area-image" src="<?php echo $treatment_area->image_small ?>" alt="<?php echo $treatment_area->image_alt ?>" title="<?php echo $treatment_area->image_title ?>" width="364" height="364" />
                                </picture>
                            <?php } ?>
                            <h3 class="h300"><?php echo $treatment_area->title ?></h3>
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