<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Soprano ICE Laserbehandling - Effektiv Hårborttagning';
$seo_description = 'Upptäck Soprano Ice, en ledande teknologi inom permanent hårborttagning. Innovativ laserbehandling för att effektivt avlägsna oönskat hår på alla hudtyper.';
$seo_keywords = 'Soprano ICE, permanent hårborttagning, laserbehandling, skonsam hårborttagning, effektiv metod, alla hudtyper, säker laserbehandling, långvariga resultat';

$seo_image = '/images/treatments/large/soprano-ice.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Soprano Ice', '/varumarken/alma/soprano-ice/'),
);

$model = new Service(
    title: 'Soprano Ice',
    duration: null,
    price: 'Från 995 kr',
    content: '<p class="p200">Soprano ICE är en revolution inom området för permanent hårborttagning med laser, som erbjuder en toppmodern lösning för dig som önskar att effektivt och varaktigt minska oönskad hårväxt. Denna avancerade teknik använder en kombination av flera våglängder för att på ett målriktat och skonsamt sätt avlägsna hårstrån genom att selektivt påverka hårfolliklarna.</p>',
    image_small: 'bilder/varumarken/358x274/soprano-ice.webp',
    image_large: 'bilder/varumarken/424x456/soprano-ice.webp',
    image_alt: 'Permanent Hårborttagning',
    image_title: 'Permanent Hårborttagning',
    consultation_url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_SopranoIce',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Effektiv laserbehandling för permanent hårborttagning som passar alla.';

$nav_buttons = array(
    'about' => 'Om Soprano Ice',
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

$description_title = 'Vad är Soprano ICE för permanent hårborttagning?';
$description_text = '<p class="p200">Soprano ICE är en innovation inom området permanent hårborttagning. Denna avancerade laserbehandling kombinerar flera våglängder för att effektivt och skonsamt behandla en bred variation av hårtyper. Känd för sin revolutionerande kylteknik, erbjuder Soprano ICE en nästan helt smärtfri upplevelse, vilket utmärker den från traditionella lasermetoder.</p>
<p class="p200 mt-m">Soprano ICE:s stora fördel är dess mångsidighet och förmåga att behandla kunder året runt, även de med solbränd hud. Behandlingen är exceptionellt snabb och kräver ingen återhämtningstid, vilket gör den idealisk för alla områden på kroppen, inklusive känsliga områden som ansiktet. Soprano ICE är effektiv för de flesta hårtyper och nyanser, även om det bör noteras att vissa hårtyper som grått och mycket ljust hår kan vara svårare att behandla med denna metod.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandling med Soprano Ice till?',
        image_small: '/bilder/process/358x272/soprano-ice-process.webp',
        image_large: '/bilder/process/872x456/soprano-ice-process.webp',
        image_alt: 'Hur går behandlingen med Soprano Ice till?',
        image_title: 'Hur går behandlingen med Soprano Ice till?',
        content: '<p class="p200">Under en Soprano ICE-session appliceras specialiserat laserljus på de önskade områdena för hårborttagning. Denna laser använder en unik kombination av våglängder som absorberas av pigmentet i hårfolliklarna och omvandlas till värme, vilket effektivt skadar folliklarna och förhindrar framtida hårväxt.</p>
        <p class="p200 mt-m">En viktig del av Soprano ICE-behandlingen är användningen av en speciell gel som hjälper till att leda laserljuset effektivt och öka patientkomforten. Denna gel hjälper till att skydda huden under behandlingen och bidrar till en jämnare fördelning av laserns värme. Efter behandlingen kan det uppstå en viss rodnad och svullnad i de behandlade områdena, men dessa symtom är normalt milda och övergående. För att uppnå bästa möjliga och långvariga resultat är det ofta nödvändigt med flera behandlingssessioner. Vår expertis och användning av Soprano ICE säkerställer en effektiv, säker och bekväm upplevelse för permanent hårborttagning, vilket resulterar i en mjuk och hårfri hud.</p>',
    ),
);

$combos_title = 'Populära behandlingskombinationer';
$combos = array(
    new ServiceCombo(
        name: 'Bikinilinje + Hela ben',
        image_small: null,
        image_large: null,
        image_alt: 'Bikinilinje + Hela ben',
        image_title: 'Bikinilinje + Hela ben',
        duration: '80 min',
        price: '4190 kr',
        booking_url: 'https://bokadirekt.se',
        booking_url_label: 'Boka tid för behandling',
        booking_url_title: 'Boka tid för behandling',
        items: array(
            new ServiceComboItem(
                title: 'Bikinilinje',
                price: '1595 kr',
            ),
            new ServiceComboItem(
                title: 'Hela ben',
                price: '2595 kr',
            )
        )
    ),
);

$treatment_areas_title = 'Behandlingsområden för Soprano Ice';
$treatment_areas_text = '<p class="p200">Soprano Ice behandlar effektivt hårväxt på hela kroppen.</p>';

$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ansikte',
        image_title: 'Ansikte',
        title: 'Ansikte',
        description: '<p class="p200">Kom ihåg att alltid börja med en kostnadsfri konsultation.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/ansikte.webp',
                image_alt: 'Hela Ansiktet',
                image_title: 'Hela Ansiktet',
                title: 'Hela Ansiktet',
                duration: '30 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Face',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/oron.webp',
                image_alt: 'Öron',
                image_title: 'Öron',
                title: 'Öron',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Ears',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/kinder.webp',
                image_alt: 'Kinder',
                image_title: 'Kinder',
                title: 'Kinder',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Chin',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/overlapp.webp',
                image_alt: 'Överläpp',
                image_title: 'Överläpp',
                title: 'Överläpp',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_UpperLip',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/haka.webp',
                image_alt: 'Haka',
                image_title: 'Haka',
                title: 'Haka',
                duration: '20 min',
                price: '995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Chin',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kropp',
        image_title: 'Kropp',
        title: 'Kropp',
        description: '<p class="p200">Kom ihåg att alltid börja med en kostnadsfri konsultation.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/axlar.webp',
                image_alt: 'Axlar',
                image_title: 'Axlar',
                title: 'Axlar',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Shoulders',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armhalor.webp',
                image_alt: 'Armhålor',
                image_title: 'Armhålor',
                title: 'Armhålor',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Armpits',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brost.webp',
                image_alt: 'Bröst',
                image_title: 'Bröst',
                title: 'Bröst',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Chest',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/mage.webp',
                image_alt: 'Mage',
                image_title: 'Mage',
                title: 'Mage',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Stomach',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/rygg.webp',
                image_alt: 'Rygg',
                image_title: 'Rygg',
                title: 'Rygg',
                duration: '40 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Back',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/svank.webp',
                image_alt: 'Svank',
                image_title: 'Svank',
                title: 'Svank',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_LowerBack',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/armar.webp',
                image_alt: 'Armar',
                image_title: 'Armar',
                title: 'Armar',
                duration: '40 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Arms',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hander.webp',
                image_alt: 'Händer & Fingrar',
                image_title: 'Händer & Fingrar',
                title: 'Händer & Fingrar',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Hands',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Intim (Kvinna)',
        image_title: 'Intim (Kvinna)',
        title: 'Intim (Kvinna)',
        description: '<p class="p200">Kom ihåg att alltid börja med en kostnadsfri konsultation.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/bikinilinje.webp',
                image_alt: 'Bikinilinje',
                image_title: 'Bikinilinje',
                title: 'Bikinilinje',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_BikiniLine',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/string.webp',
                image_alt: 'String',
                image_title: 'String',
                title: 'String',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_ThongLine',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/brasiliansk-anus.webp',
                image_alt: 'Brasiliansk + Runt Anus',
                image_title: 'Brasiliansk + Runt Anus',
                title: 'Brasiliansk + Runt Anus',
                duration: '40 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_BrazilianAnus',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/anus.webp',
                image_alt: 'Runt Anus',
                image_title: 'Runt Anus',
                title: 'Runt Anus',
                duration: '30 min',
                price: '1595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Anus',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Intim (Man)',
        image_title: 'Intim (Man)',
        title: 'Intim (Man)',
        description: '<p class="p200">Kom ihåg att alltid börja med en kostnadsfri konsultation.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/manzilian-konsultation.webp',
                image_alt: 'Konsultation - Manzilian',
                image_title: 'Konsultation - Manzilian',
                title: 'Konsultation - Manzilian',
                duration: '20 min',
                price: 'Gratis',
                url: 'https://acnespecialisten.se/book?flow=consultation&ConsultationType=Service_Consultation&Consultationwhat=Method_LaserHairRemoval',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/manzilian.webp',
                image_alt: 'Manzillian',
                image_title: 'Manzillian',
                title: 'Manzillian',
                duration: '60 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Manzilian',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/manzilian-anus.webp',
                image_alt: 'Manzillian + Runt Anus',
                image_title: 'Manzillian + Runt Anus',
                title: 'Manzillian + Runt Anus',
                duration: '60 min',
                price: '2995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Manzilian_Anus',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/anus-man.webp',
                image_alt: 'Runt Anus',
                image_title: 'Runt Anus',
                title: 'Runt Anus',
                duration: '40 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Anus_Male',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Ben',
        image_title: 'Ben',
        title: 'Ben',
        description: '<p class="p200">Kom ihåg att alltid börja med en kostnadsfri konsultation.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/halva-ben.webp',
                image_alt: 'Halva Ben',
                image_title: 'Halva Ben',
                title: 'Halva Ben',
                duration: '40 min',
                price: '1995 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_LegsHalf',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/hela-ben.webp',
                image_alt: 'Hela Ben',
                image_title: 'Hela Ben',
                title: 'Hela Ben',
                duration: '60 min',
                price: '2595 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_LegsFull',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/92x92/fotter.webp',
                image_alt: 'Fötter & Tår',
                image_title: 'Fötter & Tår',
                title: 'Fötter & Tår',
                duration: '30 min',
                price: '1295 kr',
                url: 'https://acnespecialisten.se/book?flow=permanent_harborttagning_SI&area_ms=UnwantedHair_Feet',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser inför Soprano Ice',
        image_small: '/bilder/process/358x272/soprano-ice-forberedelser.webp',
        image_large: '/bilder/process/872x456/soprano-ice-forberedelser.webp',
        image_alt: 'Förberedelser inför Splendor X',
        image_title: 'Förberedelser inför Splendor X',
        content: '<p class="p200">Att noggrant förbereda sig inför en Soprano ICE-behandling är essentiellt för att uppnå optimala resultat i permanent hårborttagning. Denna toppmoderna laserbehandling kräver specifika förberedelser för att garantera en effektiv och säker session. Innan din Soprano ICE-behandling är det viktigt att du inte vaxar eller noppar hår i det område som ska behandlas. Lasern fungerar bäst när hårfolliklarna är intakta, så det rekommenderas att du raka området noga dagen före din behandling.</p>
        <p class="p200 mt-m">För att maximera säkerheten och effektiviteten med Soprano ICE, bör du undvika solning och användning av självbruningsprodukter under veckorna före din behandling. Solbränd hud kan påverka behandlingens utfall och öka risken för biverkningar. Genom att följa dessa förberedelser säkerställer du att din hud är i bästa möjliga skick inför Soprano ICE-behandlingen, vilket bidrar till en effektiv och problemfri hårborttagningsprocess.</p>',
        tags: array(new ArticleTag(
            icon: 'rakning',
            label: 'Rakning'
        ))
    ),
    'aftercare' => new Article(
        title: 'Soprano Ice eftervård',
        image_small: '/bilder/process/358x272/soprano-ice-eftervard.webp',
        image_large: '/bilder/process/872x456/soprano-ice-eftervard.webp',
        image_alt: 'Soprano Ice eftervård',
        image_title: 'Soprano Ice eftervård',
        content: '<p class="p200">Eftervården efter en Soprano ICE-behandling för permanent hårborttagning är en viktig del av processen och spelar en avgörande roll för en smidig och effektiv återhämtning. Soprano ICE är känd för sin skonsamma behandlingsmetod, vilket ofta leder till en snabbare återhämtning jämfört med traditionella laserbehandlingar. Att följa eftervårdsråden är dock viktigt för att uppnå bästa möjliga resultat.</p>
        <p class="p200 mt-m">Efter din behandling kan du uppleva mild rodnad och en lätt värmande känsla i det behandlade området, vilket är normala reaktioner som vanligtvis avtar inom kort tid. Detta indikerar Soprano ICE:s skonsamma effekt på huden. För att främja en snabb återhämtning bör du behandla området varsamt, undvika direkt exponering för solljus och använda solskyddsmedel med hög SPF för att skydda huden.</p>
        <p class="p200 mt-m">Undvik att skrubba eller irritera huden med starka hudvårdsprodukter och undvik andra hårborttagningsmetoder som vaxning eller plockning under återhämtningsperioden. Genom att följa dessa riktlinjer kan du säkerställa att din hud återhämtar sig på bästa sätt och behåller de optimala resultaten från din Soprano ICE-behandling.</p>',
    ),
);

$service_brands_title = 'Märken för Permanent Hårborttagning';
$service_brands_text = '<p class="p200">Utöver Soprano Ice utför vi även permanent hårborttagning med Splendor X.</p>';
$service_brands = array(

    new Brand(
        label: 'Splendor X',
        image: 'bilder/logotyper/splendor-x.png',
        image_alt: 'Splendor X logotyp',
        image_title: 'Splendor X - Permanent hårborttagning med laser',
        url: '/varumarken/splendor-x',
        url_title: 'Splendor X',
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
            title: 'Hur många behandlingar med Soprano ICE krävs för permanent hårborttagning?',
            text: '<p class="p200">Antalet behandlingar med Soprano ICE för permanent hårborttagning varierar beroende på individuella faktorer som hårtyp, hårfärg och behandlingsområde. Generellt sett kan det krävas 8-12 behandlingar för att uppnå optimala resultat. Behandlingarna utförs med några veckors mellanrum för att effektivt följa hårets tillväxtcykel.</p>'
        ),
        new Question(
            title: 'Hur långvariga är resultaten med Soprano ICE?',
            text: '<p class="p200">Resultaten av permanent hårborttagning med Soprano ICE är vanligtvis långvariga. De flesta klienter upplever en betydande och varaktig minskning av hårväxt efter en fullständig serie av behandlingar. Vissa klienter kan behöva periodiska underhållsbehandlingar för att hantera eventuell återväxt av finare hårstrån.</p>'
        ),
        new Question(
            title: 'Hur förbereder jag mig inför en Soprano ICE-behandling?',
            text: '<p class="p200">För att förbereda dig för en Soprano ICE-behandling är det viktigt att du inte vaxar eller noppar hår i det område som ska behandlas. Raka området dagen före din behandling för att förbättra resultatet. Det är också viktigt att undvika solning och använda solskydd i veckorna före din behandling för att minska risken för biverkningar och maximera effektiviteten.</p>'
        ),
        new Question(
            title: 'Är behandling med Soprano ICE smärtsam?',
            text: '<p class="p200">Många upplever att behandling med Soprano ICE är mindre smärtsam än andra former av laserbehandling för hårborttagning. Tack vare dess avancerade kylsystem och mjuka lasermetod rapporterar de flesta endast en lätt snäppkänsla mot huden. Smärtupplevelsen kan dock variera beroende på individens smärttröskel och behandlingsområde.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Soprano Ice-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på Soprano Ice-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Soprano Ice',
        image_title: 'Veronika Benedik - Specialist inom Soprano Ice-behandlingar'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom Soprano Ice-behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på Soprano Ice'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Soprano Ice-behandlingar',
        image_title: 'Vilma Libom - Expert inom Soprano Ice-behandlingar'
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
                                include($_SERVER['DOCUMENT_ROOT'] . '/behandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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