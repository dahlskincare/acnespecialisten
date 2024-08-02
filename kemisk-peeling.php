<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Kemisk peeling Stockholm | AcneSpecialisten';
$seo_description = 'Vi erbjuder kemisk peeling med olika behandlingsmetoder. ✓BHA ✓AHA ✓TCA – Boka tid för en gratis hudkonsultation så hjälper vi dig med rätt behandling!';
$seo_keywords = 'kemisk peeling, kemisk peeling ansikte';

$seo_image = 'bilder/hudbehandlingar/424x456/kemisk-peeling.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Kemisk Peeling', '/kemisk-peeling.php'),
);

$model = new Service(
    title: 'Kemisk Peeling',
    duration: '30 min',
    price: null,
    content: '<p class="p200">Kemisk peeling är en hudvårdsbehandling som används för att förbättra hudens utseende och textur. Genom att applicera exfolierande syror på huden avlägsnas de döda hudcellerna på ytan. Denna process stimulerar cellförnyelsen och främjar tillväxten av ny, friskare hud. </p>',
    image_small: 'bilder/hudbehandlingar/358x274/kemisk-peeling.webp',
    image_large: 'bilder/hudbehandlingar/424x456/kemisk-peeling.webp',
    image_alt: 'Kemisk peeling behandlingar',
    image_title: 'Kemisk peeling behandlingar',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '1995 kr',
            savings: null,
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '4 behandlingar',
            price: '6995 kr',
            savings: 'Spara 785 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        ),
        new Procedure(
            label: '6 behandlingar',
            price: '8995 kr',
            savings: 'Spara 2975 kr',
            booking_url: null,
            booking_url_label: null,
            booking_url_title: null,
        )
    ),
);

$floating_box = 'Exfolierar och förnyar hudytan effektivt.';

$description_title = 'Vad är kemisk peeling?';
$description_text = '<p class="p200">Kemisk peeling för ansikte och kropp innefattar en rad avancerade behandlingar som är speciellt utformade för att effektivt hantera olika hudproblem och förbättra hudens kvalitet på djupet. Genom att applicera anpassade syror som AHA, BHA, TCA och PRX-T33, arbetar vi på cellnivå för att varsamt exfoliera, förnya och vitalisera huden.</p>
<p class="p200 mt-m">Våra behandlingar är idealiska för att ta itu med ett brett spektrum av hudproblem. Från acneärr och bekämpa aktiv akne, till att effektivt minska melasma och pigmentfläckar. Dessutom är de mycket effektiva mot pormaskar och stora porer, rynkor och fina linjer samt solskadad hy. Varje kemisk peeling vi erbjuder är skräddarsydd för att matcha individens unika hudtyp och problem, och syftar till att återställa hudens naturliga balans. Vårt mål är att ge varje klient en hud som inte bara ser jämnare och klarare ut, utan som också känns friskare och mer ungdomlig.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/kemisk-peeling-forberedelser.webp',
        image_large: '/bilder/process/872x456/kemisk-peeling-forberedelser.webp',
        image_alt: null,
        image_title: null,
        content: '<p class="p200">När du förbereder dig för en kemisk peeling hos AcneSpecialisten finns det några enkla steg du kan följa för att optimera din behandlingsupplevelse. För det första är det bra att undvika att exfoliera huden några dagar före din behandling, då själva peelingen kommer att ta hand om detta. Det är också viktigt att inte sola eller använda brun-utan-sol-produkter veckan innan behandlingen för att minska risken för hudirritationer.</p>
        <p class="p200 mt-m">Dessutom är det viktigt att informera din hudterapeut om eventuella mediciner du tar eller om du har aktiva hudåkommor, så att vi kan anpassa behandlingen på bästa sätt. Kom ihåg att det viktigaste är att du känner dig bekväm och trygg, så om du har några frågor eller funderingar rekommenderar vi alltid att du börjar med en kostnadsfri konsultation.</p>',
    ),
    'process' => new Article(
        title: 'Hur går behandlingen till?',
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
        title: 'Easy Phytic Peel | Glycolic + Lactic + Mandelic + Phytic acids',
        duration: '30 min',
        price: null,
        content: '',
        image_small: '/bilder/hudbehandlingar/200x200/easy-phytic-peel.webp',
        image_large: '/bilder/hudbehandlingar/200x200/easy-phytic-peel.webp',
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
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyPhytic&procedures=PriceClass_A_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '5595 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyPhytic&procedures=PriceClass_A_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '7595 kr',
                savings: 'Spara 1975 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyPhytic&procedures=PriceClass_A_Procedure_6'
            ),
        )
    ),
    new Service(
        title: 'Easy Droxy Versicolor Peel | Glycolic + Lactic + Citric + Kojic + Salicylic Acid',
        duration: '30 min',
        price: null,
        content: '',
        image_small: '/bilder/hudbehandlingar/200x200/easy-droxy-versicolor-peel.webp',
        image_large: '/bilder/hudbehandlingar/200x200/easy-droxy-versicolor-peel.webp',
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
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyDroxyVersicolor&procedures=PriceClass_A_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '5595 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyDroxyVersicolor&procedures=PriceClass_A_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '7595 kr',
                savings: 'Spara 1975 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyDroxyVersicolor&procedures=PriceClass_A_Procedure_6'
            ),
        )
    ),
    new Service(
        title: 'Skin Tech Easy TCA Pain Control',
        duration: '30 min',
        price: null,
        content: '',
        image_small: '/bilder/hudbehandlingar/200x200/easy-tca-pain-control.webp',
        image_large: '/bilder/hudbehandlingar/200x200/easy-tca-pain-control.webp',
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
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyTCA&procedures=PriceClass_B_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '6995 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyTCA&procedures=PriceClass_B_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '8995 kr',
                savings: 'Spara 2975 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_EasyTCA&procedures=PriceClass_B_Procedure_6'
            ),
        )
    ),
    new Service(
        title: 'PRX-T33',
        duration: '30 min',
        price: null,
        content: '',
        image_small: '/bilder/hudbehandlingar/200x200/prx-t33.webp',
        image_large: '/bilder/hudbehandlingar/200x200/prx-t33.webp',
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
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_1'
            ),
            new Procedure(
                label: '4 behandlingar',
                price: '6995 kr',
                savings: 'Spara 785 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_4'
            ),
            new Procedure(
                label: '6 behandlingar',
                price: '8995 kr',
                savings: 'Spara 2975 kr',
                booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=Service_ChemicalPeeling_PRX&procedures=PriceClass_B_Procedure_6'
            ),
        )
    ),

);

$types_title = 'Hudproblem vi behandlar';
$types_description = '<p class="p200">På AcneSpecialisten erbjuder vi skräddarsydda kemiska peelings för en rad hudproblem. Våra behandlingar är specifikt utformade för att effektivt hantera allt från acneärr och aktiv akne till melasma och pigmentfläckar. Vi tar även hand om pormaskar, stora porer, samt rynkor och fina linjer. Genom att välja rätt typ av kemisk peeling för varje specifikt hudproblem, kan vi erbjuda behandlingar som inte bara förbättrar hudens utseende, utan också dess övergripande hälsa och vitalitet.</p>';
$types = array(
    new Service(
        title: 'Kemisk peeling mot acneärr',
        duration: '30 min',
        price: '1995 kr',
        content: 'Utformad för att effektivt behandla och minska synligheten av acneärr (fläckar). Denna behandling arbetar på djupet för att jämna ut hudtonen där ärrbildning har skett.',
        image_small: 'bilder/hudproblem/102x102/acnearr.webp',
        image_large: 'bilder/hudproblem/200x200/acnearr.webp',
        image_alt: 'Kemisk peeling mot acneärr',
        image_title: 'Kemisk peeling mot acneärr',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_AcneScars',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka kemisk peeling mot acneärr',

        url: '/acnearr.php',
        url_label: 'Läs mer om acneärr',
        url_title: 'Läs mer om acneärr',
    ),
    new Service(
        title: 'Kemisk Peeling mot acne',
        duration: '30 min',
        price: '1595 kr',
        content: 'Effektiv acne peeling som hjälper till att rengöra porer, minska inflammation och förhindra framtida utbrott.',
        image_small: 'bilder/hudproblem/102x102/akne.webp',
        image_large: 'bilder/hudproblem/200x200/akne.webp',
        image_alt: 'Kemisk Peeling mot acne',
        image_title: 'Kemisk Peeling mot acne',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Aktiv Akne',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_Acne',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot acne',

        url: '/kemisk-peeling-acne.php',
        url_label: 'Läs mer om kemisk peeling mot acne',
        url_title: 'Läs mer om kemisk peeling mot acne',
    ),
    new Service(
        title: 'Kemisk Peeling mot Pormaskar & Stora Porer',
        duration: '30 min',
        price: '1595 kr',
        content: 'Denna behandling är idealisk för att djuprengöra och rensar ur porerna, minska synligheten av pormaskar och förminska stora porer, vilket bidrar till en jämnare hudton och textur.',
        image_small: 'bilder/hudproblem/102x102/stora-porer.webp',
        image_large: 'bilder/hudproblem/200x200/stora-porer.webp',
        image_alt: 'Kemisk Peeling för Pormaskar och Stora Porer',
        image_title: 'Kemisk Peeling för Pormaskar och Stora Porer',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Pormaskar och Stora Porer',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_LargePores&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling för Pormaskar och Stora Porer',

        url: '/pormaskar.php',
        url_label: 'Läs mer om pormaskar',
        url_title: 'Läs mer om pormaskar',
    ),
    new Service(
        title: 'Kemisk Peeling mot Melasma',
        duration: '30 min',
        price: '1995 kr',
        content: 'Effektiv behandling för att ljusa upp och behandla melasma, vilket ger en jämnare och klarare hudton.',
        image_small: 'bilder/hudproblem/102x102/melasma.webp',
        image_large: 'bilder/hudproblem/200x200/melasma.webp',
        image_alt: 'Kemisk Peeling för Melasma',
        image_title: 'Kemisk Peeling för Melasma',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Melasma',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_Melasma&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling för Melasma',

        url: '/melasma.php',
        url_label: 'Läs mer om melasma',
        url_title: 'Läs mer om melasma',
    ),
    new Service(
        title: 'Kemisk Peeling mot Pigmentfläckar',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna behandling riktar sig mot pigmentfläckar, vilket hjälper till att jämföra hudton och reducera synliga fläckar.',
        image_small: 'bilder/hudproblem/102x102/pigmentflackar.webp',
        image_large: 'bilder/hudproblem/200x200/pigmentflackar.webp',
        image_alt: 'Kemisk Peeling mot Pigmentfläckar',
        image_title: 'Kemisk Peeling mot Pigmentfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Pigmentfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_PigmentationSpots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Pigmentfläckar',

        url: '/pigmentflackar.php',
        url_label: 'Läs mer om pigmentfläckar',
        url_title: 'Läs mer om pigmentfläckar',
    ),
    new Service(
        title: 'Kemisk Peeling mot Rynkor & Fina Linjer',
        duration: '30 min',
        price: '1995 kr',
        content: 'Anpassad för att behandla åldrande hud, denna peeling minskar rynkor och fina linjer, vilket ger en mer ungdomlig och slät hud.',
        image_small: 'bilder/hudproblem/102x102/mogen-hy.webp',
        image_large: 'bilder/hudproblem/200x200/mogen-hy.webp',
        image_alt: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        image_title: 'Kemisk Peeling mot Rynkor och Fina Linjer',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Rynkor och Fina Linjer',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_Wrinkles&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Rynkor och Fina Linjer',

        url: '/mogen-hy.php',
        url_label: 'Läs mer om mogen hy',
        url_title: 'Läs mer om mogen hy',
    ),
    new Service(
        title: 'Kemisk Peeling mot Solskadad Hy',
        duration: '30 min',
        price: '1995 kr',
        content: 'Denna peeling riktar sig specifikt mot solskadad hud och hjälper till att reparera och förbättra hudens utseende efter solens påverkan.',
        image_small: 'bilder/hudproblem/102x102/solskadad-hy.webp',
        image_large: 'bilder/hudproblem/200x200/solskadad-hy.webp',
        image_alt: 'Kemisk Peeling mot Solskadad Hy',
        image_title: 'Kemisk Peeling mot Solskadad Hy',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_ChemicalPeeling',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka tid för konsultation om Solskadad Hy',
        booking_url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=Problem_SunDamage&area=EMPTY',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka Kemisk Peeling mot Solskadad Hy',

        url: '/solskadad-hy.php',
        url_label: 'Läs mer om solskadad hy',
        url_title: 'Läs mer om solskadad hy',
    ),
);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">En mångsidig behandlingsmetod som är lämplig för att förbättra hudens tillstånd i ansiktet, på halsen, dekolletaget och ryggen.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte & kropp',
        image_title: 'Ansikte & kropp',
        title: 'Ansikte & kropp',
        description: '<p class="p200">Behandlingen kan appliceras på flera olika områden, anpassad efter dina behov.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Ansikte',
                image_title: 'Ansikte',
                title: 'Ansikte',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Face',
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
                url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Neck',
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
                url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Decolletage',
                url_label: 'Boka',
                url_title: 'Boka tid för dekolletagebehandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/rygg.svg',
                image_alt: 'Rygg',
                image_title: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Back',
                title: 'Rygg',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för ryggbehandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Behandlingen fungerar även utmärkt om du vill kombinera flera olika områden.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: '/icons/2x.svg',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '40 min',
                price: '2995 kr',
                url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: '/icons/3x.svg',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '50 min',
                price: '3995 kr',
                url: 'https://boka.acnespecialisten.se?flow=chemicalpeeling&skipable_problem=SKIP&area=ChemicalPeeling_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: '/bilder/process/358x272/kemisk-peeling-eftervard.webp',
    image_large: '/bilder/process/872x456/kemisk-peeling-eftervard.webp',
    image_alt: 'Eftervård för kemisk peeling',
    image_title: 'Eftervård för kemisk peeling',
    content: '<p class="p200"><p class="p200">Eftervård är avgörande för att maximera resultaten av din kemiska peeling. För att underhålla och förbättra din hudkvalitet efter behandlingen, är det viktigt att följa en skräddarsydd hudvårdsrutin. Det innebär inte bara att använda rätt produkter, utan också att följa en rutin som är anpassad för din specifika hudtyp och de behov som uppstått efter peelingen.</p>
    <p class="p200 mt-m">På AcneSpecialisten hjälper vi dig att skapa en effektiv eftervårdsplan som passar just din hud. Detta kan innefatta allt från noggrann rengöring och återfuktning till speciella vårdåtgärder som lugnar och främjar hudens läkningsprocess. Vi guidar dig genom varje steg för att försäkra att du ger din hud den optimala vård den behöver för att återhämta sig och bibehålla de positiva effekterna av peelingen. Rätt eftervård är nödvändig för att upprätthålla en hälsosam, välvårdad och strålande hud.</p>',
));

$service_brands_title = 'Märken för kemisk peeling';
$service_brands_text = '<p class="p200">Vi använder Skin Tech och PRX-T33.</p>';
$service_brands = array(

    new Brand(
        label: 'Skin Tech',
        image: 'bilder/logotyper/skin-tech.svg',
        image_alt: 'Skin Tech logotyp',
        image_title: 'Skin Tech - kemisk peeling',
        url: '/varumarken/skin-tech/',
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

$results_title = 'Kemisk Peeling före och efter bilder';
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

$faq_title = 'Frågor & svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Är kemisk peeling lämplig för alla hudtyper?',
            text: '<p class="p200">Ja, vi erbjuder olika typer av kemiska peelings som är anpassade för olika hudtyper. Vi anpassar varje behandling individuellt för att säkerställa att den passar dina hudbehov och ger bästa möjliga resultat.</p>'
        ),
        new Question(
            title: 'Kan kemisk peeling hjälpa till med acneärr och pigmentfläckar?',
            text: '<p class="p200">Absolut, kemisk peeling är en effektiv metod för att behandla acneärr och pigmentfläckar. Genom att exfoliera och främja cellförnyelse kan dessa behandlingar signifikant förbättra hudens textur och minska synligheten av ärr och fläckar.</p>'
        ),
        new Question(
            title: 'Hur ofta bör jag genomgå en kemisk peeling?',
            text: '<p class="p200">Frekvensen av kemisk peeling beror på din hudtyp och de specifika problem du vill adressera. Ofta börjar man med en behandling i veckan och sedan underhålls resultatet med frekvensen 4-6 veckor. Våra experter kommer att rekommendera en behandlingsplan baserad på din hudanalys.</p>'
        ),
        new Question(
            title: 'Vilken typ av kemisk peeling ska jag välja för min hud?',
            text: '<p class="p200">För att hitta den bästa kemiska peelingen för din hud rekommenderar vi en personlig konsultation. Under denna tid kommer våra hudterapeuter att analysera din hudtyp och behov, och rekommendera den mest effektiva behandlingen.</p>'
        ),
        new Question(
            title: 'Vad är de vanligaste biverkningarna av kemisk peeling?',
            text: '<p class="p200">Kemisk peeling är en populär hudvårdsbehandling som används för att förbättra hudens utseende. Trots dess effektivitet kan behandlingen medföra vissa biverkningar, som varierar beroende på peelingens djup och din huds känslighet. De vanligaste biverkningarna inkluderar:</p>
            <p class="p200 mt-m">Rodnad och irritation:<br />Det är vanligt att uppleva en viss grad av rodnad och irritation i behandlingsområdet, vilket vanligtvis avtar inom några timmar till dagar efter behandlingen.</p>
            <p class="p200 mt-m">Flagnande hy:<br />Eftersom behandlingen avlägsnar det yttersta hudlagret, kan du uppleva att huden börjar skala eller flagna bort under dagarna som följer behandlingen, vilket är en del av läkningsprocessen.</p>
            <p class="p200 mt-m">Torhet:<br />Din hud kan kännas ovanligt torr och stram efter behandlingen, vilket kan hanteras med återfuktande produkter rekommenderade av din hudvårdsspecialist.</p>
            <p class="p200 mt-m">Känslighet mot solen:<br />Efter en kemisk peeling är huden mer känslig för solen, vilket gör det viktigt att använda solskydd med hög SPF och undvika direkt solljus under de första veckorna efter behandlingen.</p>
            <p class="p200 mt-m">Självklart hjälper vi dig alltid att anpassa behandlingen efter dina behov och minimera risken för biverkningar.</p>'
        ),
        new Question(
            title: 'Vilken är den starkaste aha syran?',
            text: '<p class="p200">Den starkaste AHA-syran vi använder på vår klinik är Easy Phytic Peel. Detta är en professionell peeling som innehåller en kraftfull kombination av AHA-syror, designad för att ge djupgående exfoliering och stimulera hudens förnyelseprocess. Det unika med Easy Phytic Peel är dess förmåga att verka effektivt utan att orsaka irritation, vilket gör den till ett utmärkt val för de som söker märkbara resultat.</p>
            <p class="p200 mt-m">Det är viktigt att veta att AHA-syror som används på hudvårdskliniker generellt är starkare än de produkter som är avsedda för hemmabruk. Professionella behandlingar är utformade för att utföras av utbildade specialister som kan anpassa behandlingen efter individens hudtyp och behov, samtidigt som de säkerställer optimal säkerhet och effektivitet. Denna nivå av anpassning och styrka i behandlingen bidrar till mer påtagliga och långvariga resultat jämfört med hemmaprodukter.</p>'
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

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/kemisk-peeling.php" />

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

                <section id="reviews" class="large-margin">
                    <h2 class="big l10n"><?php echo $reviews_title ?></h2>
                    <?php
                    $reviews_narrow = true;
                    include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/reviews/reviews.php');
                    ?>
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