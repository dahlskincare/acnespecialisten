<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Kemisk Peeling - Effektiva Hudförbättrande Behandlingar | AcneSpecialisten';
$seo_description = 'Upptäck AcneSpecialistens expertutbud av kemiska peelings för att förbättra hudens utseende och hälsa. Våra anpassade peelingar behandlar allt från akne till åldrande, och erbjuder djupgående lösningar för diverse hudproblem. Med vår specialkunskap och avancerade behandlingar är din väg till en klarare och mer strålande hud inom räckhåll.';
$seo_keywords = 'kemisk peeling, stockholm';

$seo_image = 'images/treatments/large/kemisk-peeling.webp';

$path_segments = array(
      new PathSegment('Behandlingar', '/behandlingar.php'),
      new PathSegment('Kemisk Peeling', '/kemisk-peeling.php'),
);

$model = new Service(
    title: 'Kemisk Peeling',
    duration: '30 min',
    price: null,
    content: '<p class="p200">Kemisk peeling är en hudvårdsbehandling som används för att förbättra hudens utseende och textur. Genom att applicera exfolierande syror på huden avlägsnas de döda hudcellerna på ytan. Denna process stimulerar cellförnyelsen och främjar tillväxten av ny, friskare hud. </p>',
    image_small: 'bilder/behandlingar/358x274/kemisk-peeling.webp',
    image_large: 'bilder/behandlingar/424x456/kemisk-peeling.webp',
    image_alt: 'Kemisk peeling behandlingar',
    image_title: 'Kemisk peeling behandlingar',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Exfolierar och förnyar hudytan effektivt.';

$nav_buttons = array(
    'about' => 'Om Kemisk Peeling',
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

$description_title = 'Vad är kemisk peeling?';
$description_text = '<p class="p200">Kemisk peeling hos AcneSpecialisten innefattar en rad avancerade behandlingar som är speciellt utformade för att effektivt hantera olika hudproblem och förbättra hudens kvalitet på djupet. Genom att applicera anpassade syror som AHA, BHA, TCA och PRX-T33, arbetar vi på cellnivå för att varsamt exfoliera, förnya och vitalisera huden.</p>
<p class="p200 mt-m">Våra behandlingar är idealiska för att ta itu med ett brett spektrum av hudproblem. Från acneärr och bekämpa aktiv akne, till att effektivt minska melasma och pigmentfläckar. Dessutom är de mycket effektiva mot pormaskar och stora porer, rynkor och fina linjer samt solskadad hy. Varje kemisk peeling vi erbjuder är skräddarsydd för att matcha individens unika hudtyp och problem, och syftar till att återställa hudens naturliga balans. Vårt mål är att ge varje klient en hud som inte bara ser jämnare och klarare ut, utan som också känns friskare och mer ungdomlig.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför kemisk peeling',
        image_small: '/bilder/process/358x272/kemisk-peeling-forberedelser.webp',
        image_large: '/bilder/process/872x456/kemisk-peeling-forberedelser.webp',
        image_alt: null,
        image_title: null,
        content: '<p class="p200">När du förbereder dig för en kemisk peeling hos AcneSpecialisten finns det några enkla steg du kan följa för att optimera din behandlingsupplevelse. För det första är det bra att undvika att exfoliera huden några dagar före din behandling, då själva peelingen kommer att ta hand om detta. Det är också viktigt att inte sola eller använda brun-utan-sol-produkter veckan innan behandlingen för att minska risken för hudirritationer.</p>
        <p class="p200 mt-m">Dessutom är det viktigt att informera din hudterapeut om eventuella mediciner du tar eller om du har aktiva hudåkommor, så att vi kan anpassa behandlingen på bästa sätt. Kom ihåg att det viktigaste är att du känner dig bekväm och trygg, så om du har några frågor eller funderingar rekommenderar vi alltid att du börjar med en kostnadsfri konsultation.</p>',
    ),
    'process' => new Article(
        title: 'Hur går kemisk peeling behandlingar till?',
        image_small: '/bilder/process/358x272/kemisk-peeling-process.webp',
        image_large: '/bilder/process/872x456/kemisk-peeling-process.webp',
        image_alt: null,
        image_title: null,
        content: '<p class="p200">På AcneSpecialisten erbjuder vi kemiska peelingbehandlingar som är anpassade för att möta en mängd olika hudproblem. Vi förstår att varje persons hud är unik och skräddarsyr därför varje behandling för att passa just dina individuella behov och hudtillstånd. Våra erfarna hudterapeuter använder sin expertis och djupgående kunskap för att ge dig den bästa möjliga behandling och resultat.</p>
        <p class="p200 mt-m">Varje kemisk peelingbehandling inleds med en grundlig rengöring för att förbereda huden. Detta följs av appliceringen av en specifikt utvald syra, som är anpassad efter din hudtyp och de hudproblem som ska behandlas. Denna syra arbetar för att exfoliera de övre hudlagren och stimulerar hudens naturliga förnyelseprocess. Beroende på behandlingens intensitet, kan du uppleva en lätt stickande känsla under denna fas. Efter att syran har verkat tillräckligt länge neutraliseras den noggrant för att säkerställa din komfort och säkerhet. Avslutningsvis appliceras en återfuktande mask för att lugna huden och minska eventuell rodnad eller irritation. Behandlingen avslutas med en återfuktande kräm som hjälper din hud att känna sig återupplivad och förnyad.</p>',
    ),
);

$big_types = array(
    new Service(
        title: 'Skin Tech Easy Phytic Peel',
        duration: '30 min',
        price: null,
        content: '<p class="p200">Skin Tech Easy Phytic Peel är perfekt för dig som vill behandla orenheter, igentäppt hy och pigmenteringar, då den passar för alla hudtyper. Denna milda peeling ger en fördjupad rengöring och förbättrar hudens övergripande utseende utan att kräva en lång återhämtningsperiod. Den unika formulan i Easy Phytic Peel exfolierar försiktigt hudens yttre lager, vilket bidrar till en minskning av synliga ojämnheter och en förnyelse av hudcellerna.</p>
        <p class="p200 mt-m">Efter appliceringen av peelingen får huden en chans att återhämta sig med en lugnande behandling som återinför fukt och lindrar eventuell rodnad. En av de största fördelarna med Easy Phytic Peel är att den inte kräver neutralisering eller avtvättning, vilket gör behandlingsprocessen smidig och enkel. Resultatet är en betydligt klarare, jämnare och mer strålande hud. Skin Tech Easy Phytic Peel är perfekt för dig som söker en effektiv lösning på hudproblem utan att kompromissa med hudens känslighet eller komfort.</p>',
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyPhytic&procedures=PriceClass_A_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '5595 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyPhytic&procedures=PriceClass_A_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '7595 kr',
                savings: 'Spara 1975 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyPhytic&procedures=PriceClass_A_Procedure_6'
            ),
        )
    ),
    new Service(
        title: 'Skin Tech Easy Droxy Versicolor Peel',
        duration: '30 min',
        price: null,
        content: '<p class="p200">Skin Tech Easy Droxy Versicolor Peel är en utmärkt behandling för dig som söker en uppfräschning av huden och en effektiv lösning mot pigmenteringar. Denna peeling är skonsam och passar för en mängd olika hudtyper, och är särskilt effektiv för att ge huden en fräschare, klarare och mer ungdomlig utstrålning. Den arbetar genom att varsamt exfoliera hudens yttre lager, vilket hjälper till att reducera ojämnheter och främja en jämn hudton.</p>
        <p class="p200 mt-m">Easy Droxy Versicolor Peel är designad för att ge maximal komfort under behandlingen och kräver ingen neutralisering. Efter behandlingen återställs hudens fuktbalans och rodnad minskas, vilket gör att huden känns lugn och återfuktad. Denna peeling är idealisk för de som önskar synliga resultat utan en lång återhämtningsperiod. Användningen av Easy Droxy Versicolor Peel är ett effektivt steg mot en mer strålande och jämn hud, och den är ett utmärkt val för alla som vill ge sin hud en snabb och effektiv uppfräschning.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'Skin Tech Easy Droxy Versicolor Peel',
        image_title: 'Skin Tech Easy Droxy Versicolor Peel',
        consultation_url: null,
        consultation_url_label: null,
        consultation_url_title: null,
        booking_url: null,
        booking_url_label: null,
        booking_url_title: null,
        procedures: array(
            new Procedure(
                label: '1 behandling',
                price: '1595 kr',
                savings: null,
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyDroxyVersicolor&procedures=PriceClass_A_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '5595 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyDroxyVersicolor&procedures=PriceClass_A_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '7595 kr',
                savings: 'Spara 1975 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyDroxyVersicolor&procedures=PriceClass_A_Procedure_6'
            ),
        )
    ),
    new Service(
        title: 'Skin Tech Easy TCA Pain Control',
        duration: '30 min',
        price: null,
        content: '<p class="p200">Skin Tech Easy TCA Pain Control är en avancerad kemisk peeling som erbjuder kraftfulla resultat i kampen mot åldrande, ojämn hudstruktur och hudton, samt missfärgningar. Denna peeling är särskilt utformad för att erbjuda en djupgående förnyelse av huden, vilket gör den perfekt för de som söker märkbara förbättringar i hudens utseende och kvalitet.</p>
        <p class="p200 mt-m">Under behandlingen appliceras Easy TCA Pain Control varsamt för att behandla hudens djupare lager, vilket stimulerar cellförnyelse och kollagenproduktion. Denna process bidrar till att dramatiskt reducera synliga tecken på åldrande som fina linjer och rynkor, och hjälper till att jämnar ut hudtonen och strukturen. En av de stora fördelarna med Easy TCA Pain Control är dess förmåga att kontrollera obehag under behandlingen, vilket säkerställer en bekvämare upplevelse för kunden. Efter peelingen får huden nödvändig vård för att återhämta sig och för att maximera behandlingseffekten. Skin Tech Easy TCA Pain Control är idealisk för de som önskar en djup och effektiv behandling för att återställa hudens ungdomliga glöd.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'Skin Tech Easy TCA Pain Control',
        image_title: 'Skin Tech Easy TCA Pain Control',
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
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyTCA&procedures=PriceClass_B_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '6995 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyTCA&procedures=PriceClass_B_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '8995 kr',
                savings: 'Spara 2975 kr',
                booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyTCA&procedures=PriceClass_B_Procedure_6'
            ),
        )
    ),
    new Service(
        title: 'PRX-T33',
        duration: '30 min',
        price: null,
        content: '<p class="p200">PRX-T33 är en innovativ kemisk peeling som erbjuder exceptionella resultat för att bekämpa tecken på åldrande, som rynkor, fina linjer, pigmenteringar och bristningar. Denna avancerade behandling är utformad för att ge intensiv förnyelse och förbättring av hudens struktur och ton utan den avskalning som traditionella peelings kan medföra.</p>
        <p class="p200 mt-m">Under PRX-T33-behandlingen appliceras en speciell lösning som verkar djupt in i huden för att stimulera kollagenproduktionen och förnya hudcellerna. Detta bidrar till att effektivt minska tecken på åldrande och förbättra hudens övergripande utseende. Unikt för PRX-T33 är dess förmåga att ge dramatiska resultat utan längre återhämtningstid, vilket gör den idealisk för de som önskar snabba, märkbara förbättringar.</p>
        <p class="p200 mt-m">PRX-T33 är särskilt lämplig för de som vill återställa hudens lyster och ungdomliga utstrålning. Dess skonsamma men effektiva formula säkerställer en behaglig behandlingsupplevelse, vilket gör den till ett utmärkt val för de som söker en kraftfull men icke-invasiv lösning för att förbättra hudens kvalitet.</p>',
        image_small: null,
        image_large: null,
        image_alt: 'PRX-T33',
        image_title: 'PRX-T33',
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

$types_title = 'Hudproblem vi behandlar med kemisk peeling';
$types_description = '<p class="p200">På AcneSpecialisten erbjuder vi skräddarsydda kemiska peelings för en rad hudproblem. Våra behandlingar är specifikt utformade för att effektivt hantera allt från acneärr och aktiv akne till melasma och pigmentfläckar. Vi tar även hand om pormaskar, stora porer, samt rynkor och fina linjer. Genom att välja rätt typ av kemisk peeling för varje specifikt hudproblem, kan vi erbjuda behandlingar som inte bara förbättrar hudens utseende, utan också dess övergripande hälsa och vitalitet.</p>';
$types = array(
    new Service(
        title: 'Kemisk Peeling mot Melasma',
        duration: '30 min',
        price: '1995 kr',
        content: 'Effektiv behandling för att ljusa upp och behandla melasma, vilket ger en jämnare och klarare hudton.',
        image_small: 'bilder/problem/102x102/melasma.webp',
        image_large: 'bilder/problem/200x200/melasma.webp',
        image_alt: 'Kemisk Peeling för Melasma',
        image_title: 'Kemisk Peeling för Melasma',
        consultation_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Melasma',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Melasma',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Melasma',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling för Melasma',
    ),
    new Service(
        title: 'Kemisk Peeling mot Pigmentfläckar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna behandling riktar sig mot pigmentfläckar, vilket hjälper till att jämföra hudton och reducera synliga fläckar.',
        image_small: 'bilder/problem/102x102/pigmentflackar.webp',
        image_large: 'bilder/problem/200x200/pigmentflackar.webp',
        image_alt: 'Kemisk Peeling mot Pigmentfläckar',
        image_title: 'Kemisk Peeling mot Pigmentfläckar',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Pigmentfläckar',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Pigmentfläckar',
    ),
    new Service(
        title: 'Kemisk Peeling mot Rynkor & Fina Linjer',
        duration: '30 min',
        price: '1995 kr',
        content: 'Anpassad för att behandla åldrande hud, denna peeling minskar rynkor och fina linjer, vilket ger en mer ungdomlig och slät hud.',
        image_small: 'bilder/problem/102x102/mogen-hy.webp',
        image_large: 'bilder/problem/200x200/mogen-hy.webp',
        image_alt: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        image_title: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Rynkor och Fina Linjer',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Wrinkles',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Rynkor och Fina Linjer',
    ),
    new Service(
        title: 'Kemisk Peeling mot Solskadad Hy',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna peeling riktar sig specifikt mot solskadad hud och hjälper till att reparera och förbättra hudens utseende efter solens påverkan.',
        image_small: 'bilder/problem/102x102/solskadad-hy.webp',
        image_large: 'bilder/problem/200x200/solskadad-hy.webp',
        image_alt: 'Kemisk Peeling mot Solskadad Hy',
        image_title: 'Kemisk Peeling mot Solskadad Hy',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Solskadad Hy',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_SunDamage',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Solskadad Hy',
    ),
    new Service(
        title: 'Kemisk peeling mot acneärr',
        duration: '30 min',
        price: null,
        content: 'Vår specialanpassade kemiska peeling är utformad för att effektivt behandla och minska synligheten av acneärr. Denna behandling arbetar på djupet för att jämna ut både ytan och hudtonen där ärrbildning har skett.',
        image_small: 'bilder/problem/102x102/acnearr.webp',
        image_large: 'bilder/problem/200x200/acnearr.webp',
        image_alt: 'Kemisk peeling mot acneärr',
        image_title: 'Kemisk peeling mot acneärr',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka konsultation',
        booking_url_title: 'Boka kemisk peeling mot acneärr',
    ),
    new Service(
        title: 'Kemisk Peeling mot Aktiv Akne',
        duration: '30 min',
        price: '1595 kr',
        content: 'Specialiserad peeling för att behandla aktiv akne. Hjälper till att rengöra porer, minska inflammation och förhindra framtida utbrott.',
        image_small: 'bilder/problem/102x102/akne.webp',
        image_large: 'bilder/problem/200x200/akne.webp',
        image_alt: 'Kemisk Peeling för Aktiv Akne',
        image_title: 'Kemisk Peeling för Aktiv Akne',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Aktiv Akne',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka konsultation',
        booking_url_title: 'Boka Kemisk Peeling för Aktiv Akne',
    ),
    new Service(
        title: 'Kemisk Peeling mot Pormaskar & Stora Porer',
        duration: '30 min',
        price: '1595 kr',
        content: 'Denna behandling är idealisk för att djuprengöra huden, minska synligheten av pormaskar och förminska stora porer, vilket bidrar till en jämnare hudton och textur.',
        image_small: 'bilder/problem/102x102/stora-porer.webp',
        image_large: 'bilder/problem/200x200/stora-porer.webp',
        image_alt: 'Kemisk Peeling för Pormaskar och Stora Porer',
        image_title: 'Kemisk Peeling för Pormaskar och Stora Porer',
        consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        booking_url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=Problem_LargePores',
        booking_url_label: 'Boka konsultation',
        booking_url_title: 'Boka Kemisk Peeling för Pormaskar och Stora Porer',
    ),
);

$treatment_areas_title = 'Behandlingsområden för Kemisk Peeling';
$treatment_areas_text = '<p class="p200">Kemisk peeling är en mångsidig behandlingsmetod som är lämplig för att förbättra hudens tillstånd i ansiktet, på halsen, dekolletaget och ryggen.</p>';
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
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för ansiktsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hals.webp',
                image_alt: 'Hals',
                image_title: 'Hals',
                title: 'Hals',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Neck',
                url_label: 'Boka',
                url_title: 'Boka tid för halsbehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/dekolletage.webp',
                image_alt: 'Dekolletage',
                image_title: 'Dekolletage',
                title: 'Dekolletage',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rygg.webp',
                image_alt: 'Rygg',
                image_title: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Back',
                title: 'Rygg',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård för kemisk peeling',
    image_small: '/bilder/process/358x272/kemisk-peeling-eftervard.webp',
    image_large: '/bilder/process/872x456/kemisk-peeling-eftervard.webp',
    image_alt: 'Eftervård för kemisk peeling',
    image_title: 'Eftervård för kemisk peeling',
    content: '<p class="p200"><p class="p200">Eftervård är avgörande för att maximera resultaten av din kemiska peeling. För att underhålla och förbättra din hudkvalitet efter behandlingen, är det viktigt att följa en skräddarsydd hudvårdsrutin. Det innebär inte bara att använda rätt produkter, utan också att följa en rutin som är anpassad för din specifika hudtyp och de behov som uppstått efter peelingen.</p>
    <p class="p200 mt-m">På AcneSpecialisten hjälper vi dig att skapa en effektiv eftervårdsplan som passar just din hud. Detta kan innefatta allt från noggrann rengöring och återfuktning till speciella vårdåtgärder som lugnar och främjar hudens läkningsprocess. Vi guidar dig genom varje steg för att försäkra att du ger din hud den optimala vård den behöver för att återhämta sig och bibehålla de positiva effekterna av peelingen. Rätt eftervård är essentiell för att upprätthålla en hälsosam, välvårdad och strålande hud.</p>',
));

$service_brands_title = 'Märken för kemisk peeling';
$service_brands_text = '<p class="p200">Vi utför kemisk peeling med Skin Tech och PRX-T33.</p>';
$service_brands = array(

    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'PRX-T33',
        image: 'bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
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

$reviews_title = 'Reviews';
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

$faq_title = 'Frågor & svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Är kemisk peeling lämplig för alla hudtyper?',
            text: 'Ja, vi erbjuder olika typer av kemiska peelings som är anpassade för olika hudtyper. Vi anpassar varje behandling individuellt för att säkerställa att den passar dina hudbehov och ger bästa möjliga resultat.'
        ),
        new Question(
            title: 'Kan kemisk peeling hjälpa till med acneärr och pigmentfläckar?',
            text: 'Absolut, kemisk peeling är en effektiv metod för att behandla acneärr och pigmentfläckar. Genom att exfoliera och främja cellförnyelse kan dessa behandlingar signifikant förbättra hudens textur och minska synligheten av ärr och fläckar.'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå en kemisk peeling?',
            text: 'Frekvensen av kemisk peeling beror på din hudtyp och de specifika problem du vill adressera. En del kan behöva behandlingar var fjärde till sjätte vecka, medan andra kan ha behov av mer eller mindre frekventa sessioner. Våra experter kommer att rekommendera en behandlingsplan baserad på din hudanalys.'
        ),
        new Question(
            title: 'Vilken typ av kemisk peeling ska jag välja för min hud?',
            text: 'För att hitta den bästa kemiska peelingen för din hud rekommenderar vi en personlig konsultation. Under denna tid kommer våra hudterapeuter att analysera din hudtyp och behov, och rekommendera den mest effektiva behandlingen, vare sig det är Easy Phytic Peel, Easy TCA Pain Control, PRX-T33, eller någon annan.'
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
$skin_guide_view_more = 'Visa alla artiklar';

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
      new Specialist(
            name: 'Cazzandra Lindberg',
            title: 'Hudterapeut sedan 2015',
            image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
            image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i kemisk peeling',
            image_title: 'Cazzandra Lindberg - Expert på kemisk peeling'
      ),
      new Specialist(
            name: 'Veronika Benedik',
            title: 'Hudterapeut sedan 1999',
            image: 'images/specialists/312x312/hudterapeut-veronika.webp',
            image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på kemisk peeling',
            image_title: 'Veronika Benedik - Specialist inom kemisk peeling'
      ),
      new Specialist(
            name: 'Amira Maqboul',
            title: 'Hudterapeut sedan 2017',
            image: 'images/specialists/312x312/hudterapeut-amira.webp',
            image_alt: 'Amira Maqboul, hudterapeut med kunskap inom kemisk peeling',
            image_title: 'Amira Maqboul - Hudterapeut specialiserad på kemisk peeling'
      ),
      new Specialist(
            name: 'Vilma Libom',
            title: 'Hudterapeut sedan 2019',
            image: 'images/specialists/312x312/hudterapeut-vilma.webp',
            image_alt: 'Vilma Libom, hudterapeut med inriktning mot kemisk peeling',
            image_title: 'Vilma Libom - Expert inom kemisk peeling'
      )
);
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
    new Brand(
        label: 'Alma',
        image: '/bilder/logotyper/alma.svg',
        image_alt: 'Alma logotyp',
        image_title: 'Alma Lasermaskiner',
        url: '/varumarken/alma',
        url_title: 'Alma',
    ),
    new Brand(
        label: 'Alma Hybrid',
        image: '/bilder/logotyper/alma-hybrid.svg',
        image_alt: 'Alma Hybrid logotyp',
        image_title: 'Alma Hybrid CO2',
        url: '/alma-hybrid-co2-laser.php',
        url_title: 'Alma Hybrid',
    ),
    new Brand(
        label: 'Dermapen',
        image: '/bilder/logotyper/dermapen.svg',
        image_alt: 'Dermapen logotyp',
        image_title: 'Dermapen - Microneedling',
        url: '/dermapen.php',
        url_title: 'Dermapen',
    ),
    new Brand(
        label: 'Harmony XL Pro',
        image: '/bilder/logotyper/harmony-xl-pro.png',
        image_alt: 'Harmony XL Pro logotyp',
        image_title: 'Alma Harmony XL Pro',
        url: '/alma-harmony-xl-pro.php',
        url_title: 'Harmony XL Pro',
    ),
    new Brand(
        label: 'HydraFacial',
        image: '/bilder/logotyper/hydrafacial.svg',
        image_alt: 'HydraFacial logotyp',
        image_title: 'HydraFacial - Dermabrasion',
        url: '/hydrafacial.php',
        url_title: 'HydraFacial',
    ),
    new Brand(
        label: 'Skin Tech',
        image: '/bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech',
        url_title: 'Skin Tech',
    ),
    new Brand(
        label: 'Alma Rejuve Dye-VL',
        image: '/bilder/logotyper/rejuve-dye-vl.svg',
        image_alt: 'Alma Rejuve Dye-VL logotyp',
        image_title: 'Alma Rejuve Dye-VL - IPL',
        url: '/varumarken/alma/rejuve-dye-vl',
        url_title: 'Alma Rejuve Dye-VL',
    ),
    new Brand(
        label: 'CryoPen',
        image: '/bilder/logotyper/cryopen.svg',
        image_alt: 'CryoPen logotyp',
        image_title: 'CryoPen - frysbehandling',
        url: '/cryopen.php',
        url_title: 'CryoPen',
    ),
    new Brand(
        label: 'Splendor X',
        image: '/bilder/logotyper/splendor-x.png',
        image_alt: 'Splendor X logotyp',
        image_title: 'Splendor X - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x',
        url_title: 'Splendor X',
    ),
    new Brand(
        label: 'Soprano Ice',
        image: '/bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/alma/soprano-ice',
        url_title: 'Soprano Ice',
    ),
    new Brand(
        label: 'Powerlite Photonova',
        image: '/bilder/logotyper/powerlite-photonova.svg',
        image_alt: 'Powerlite Photonova logotyp',
        image_title: 'Powerlite Photonova - IPL',
        url: '/varumarken/powerlite-photonova',
        url_title: 'Powerlite Photonova',
    ),
    new Brand(
        label: 'Infuzion',
        image: '/bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
    new Brand(
        label: 'Lumenis',
        image: '/bilder/logotyper/lumenis.svg',
        image_alt: 'Lumenis logotyp',
        image_title: 'Lumenis - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x',
        url_title: 'Lumenis',
    ),
    new Brand(
        label: 'PRX-T33',
        image: '/bilder/logotyper/prx-t33.svg',
        image_alt: 'PRX-T33 logotyp',
        image_title: 'PRX-T33 - kemisk peeling',
        url: '/prx-t33.php',
        url_title: 'PRX-T33',
    ),
    new Brand(
        label: 'Exceed',
        image: '/bilder/logotyper/exceed.png',
        image_alt: 'Exceed logotyp',
        image_title: 'Exceed - microneedling',
        url: '/varumarken/exceed',
        url_title: 'Exceedn',
    ),
    new Brand(
        label: 'Microdermabrasion',
        image: '/bilder/logotyper/microdermabrasion.png',
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