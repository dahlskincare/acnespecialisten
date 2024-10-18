<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Laser hårborttagning i Stockholm med Alexandrite laser';
$seo_description = 'Splendor X - nästa generations laser för permanent hårborttagning. Upplev en överlägsen behandling som effektivt och smärtfritt tar bort hår på alla hudtyper.';
$seo_keywords = 'alexandrite laser, alexandrite laser pris, alexandrite laser vs diode laser, laser alexandrite stockholm, alexandrite laser hårborttagning, splendor x';

$seo_image = '/images/treatments/large/splendor-x.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Splendor X', '/varumarken/splendor-x/'),
);

$model = new Service(
    title: 'Hårborttagning Stockholm - Splendor X',
    duration: null,
    price: 'Från 995 kr',
    content: '<p class="p200">Splendor X representerar en banbrytande utveckling inom permanent hårborttagning med laser, och erbjuder en avancerad lösning för dig som önskar att permanent ta bort hår.</p>',
    image_small: 'bilder/varumarken/358x274/splendor-x.webp',
    image_large: 'bilder/varumarken/424x456/splendor-x.webp',
    image_alt: 'Permanent Hårborttagning',
    image_title: 'Permanent Hårborttagning',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_SplendorX',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = 'Den senaste och mest effektiva laserbehandlingen för permanent hårborttagning.';

$description_title = 'Vad är Splendor X laser?';
$description_text = '<p class="p200">Splendor X är en framstående laserutrustning från Lumenis, specialiserad på permanent hårborttagning genom användning av BLEND X-teknologi. Denna teknologi kombinerar Nd:YAG- och Alexandrite laser för att skapa en skräddarsydd behandling lämplig för nästan alla hud- och hårtyper. Detta innovativa system erbjuder en nästan smärtfri upplevelse, tack vare en unik kylmetod, vilket skiljer den från traditionella laserbehandlingar.</p>
<p class="p200 mt-m">Utrustningen är designad för att vara flexibel och kan användas på hela kroppen, inklusive ansikte och ben, oavsett årstid. Detta gör det möjligt att genomföra behandlingar året runt utan behov av återhämtningstid. Den är dock effektiv mot de flesta andra hårnyanser och fjun, vilket gör den till en idealisk lösning för dem som söker efter permanent hårborttagning.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/splendor-x-process.webp',
        image_large: '/bilder/process/872x456/splendor-x-process.webp',
        image_alt: 'Hur går behandlingen med Splendor X till?',
        image_title: 'Hur går behandlingen med Splendor X till?',
        content: '<p class="p200">Splendor X-behandlingen revolutionerar den permanenta hårborttagningen med sin unika gelfria och därmed kladdfria metod. Behandlingen utförs med hög precision tack vare kombinationen av ett UV-bläck och speciellt UV ljus som gör att laserterapeuten tydligt ser exakt vilka områden som ska behandlas. När du genomgår en Splendor X-behandling appliceras specialiserat laserljus på de områden där du önskar hårborttagning. Denna laserstråle absorberas av pigmentet i hårfolliklarna och omvandlas till värme. Denna värme inaktiverar hårfolliklarna vilket gör att dem slutar producera går, detta sker helt utan att skada vävnaden, vilket förhindrar framtida hårväxt på ett precist och säkert sätt.</p>
        <p class="p200 mt-m">Efter behandlingen kan det förekomma en viss rodnad och svullnad på de behandlade områdena, men dessa reaktioner är milda och försvinner vanligtvis snabbt. För att uppnå optimala och långvariga resultat kan det vara nödvändigt med flera behandlingssessioner, då hår växer i olika faser och varje strå måste behandlas vid rätt tidpunkt. Vår expertis och avancerade teknik med Splendor X säkerställer en effektiv, säker och bekväm upplevelse, vilket resulterar i slät och hårfri hud.</p>',
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
                savings: null,
            ),
            new ServiceComboItem(
                title: 'Hela ben',
                price: '2595 kr',
                savings: null,
            )
        )
    ),
);

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">Splendor X behandlar effektivt hårväxt på hela kroppen, från topp till tå.</p>';

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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Face',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Ears',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Cheeks',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_UpperLip',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Chin',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Shoulders',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Armpits',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Chest',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Stomach',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Back',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_LowerBack',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Arms',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Hands',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_BikiniLine',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_ThongLine',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_BrazilianAnus',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Anus',
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
                url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Service&Consultationwhat=Consultation_Method_Manzillian',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Manzilian',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Manzilian_Anus',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Anus_Male',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_LegsHalf',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_LegsFull',
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
                url: 'https://boka.acnespecialisten.se?flow=permanent_harborttagning_SX&area_ms=UnwantedHair_Feet',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling'
            ),
        )
    ),
);

$bottom_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/splendor-x-forberedelser.webp',
        image_large: '/bilder/process/872x456/splendor-x-forberedelser.webp',
        image_alt: 'Förberedelser inför Splendor X',
        image_title: 'Förberedelser inför Splendor X',
        content: '<p class="p200">Att förbereda sig noggrant inför en Splendor X-behandling är avgörande för att uppnå de bästa resultaten i permanent hårborttagning. Denna avancerade laserbehandling kräver specifika förberedelser för att säkerställa en effektiv och säker behandling. Innan din Splendor X-session är det viktigt att du avstår från att vaxa eller noppa hår i området som ska behandlas. Laseren behöver intakta hårfolliklar för att kunna verka effektivt. Istället ska du raka området noggrant dagen före din behandling.</p>
        <p class="p200 mt-m">För att optimera säkerheten och effektiviteten av Splendor X-behandlingen bör du även undvika att vara solbränd samt användning av självbruningsprodukter inför behandlingen. Solbränd hud kan påverka hur laserljuset absorberas och öka risken för biverkningar. Genom att följa dessa riktlinjer ser du till att din hud är väl förberedd för Splendor X-behandlingen, vilket bidrar till en smidig och framgångsrik hårborttagningsprocess.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/splendor-x-eftervard.webp',
        image_large: '/bilder/process/872x456/splendor-x-eftervard.webp',
        image_alt: 'Splendor X eftervård',
        image_title: 'Splendor X eftervård',
        content: '<p class="p200">Eftervården för Splendor X-behandling hårborttagning är avgörande för att främja en förbättrad och effektiv återhämtning. Splendor X-teknologin är utformad för att vara skonsam mot huden, vilket bidrar till en snabbare återhämtning jämfört med traditionella laserbehandlingar. Dock är det viktigt att följa eftervårdsråden för att maximera denna fördel.</p>
        <p class="p200 mt-m">Efter behandlingen kan man uppleva mild rodnad och en lätt värmande känsla i de behandlade områdena. Dessa symtom är normala och bör avta relativt snabbt. För att stödja och påskynda återhämtningsprocessen, rekommenderas det att man sköter det behandlade området varsamt, undviker direkt solljus och använder ett högt SPF-solskydd för att skydda huden.</p>
        <p class="p200 mt-m">Undvik att skrubba huden eller använda irriterande hudvårdsprodukter, och avstå från andra hårborttagningsmetoder som vaxning eller plockning. Genom att följa dessa steg säkerställer du att huden återhämtar sig effektivt och behåller de optimala resultaten från din Splendor X-behandling.</p>',
    ),
);

$service_brands_title = 'Andra teknologier för hårborttagning';
$service_brands_text = '<p class="p200">Vi erbjuder även Soprano Ice som består använder diode laser för hårborttagning.</p>';
$service_brands = array(

    new Brand(
        label: 'Soprano Ice',
        image: 'bilder/logotyper/soprano-ice.png',
        image_alt: 'Soprano Ice logotyp',
        image_title: 'Soprano Ice - Permanent hårborttagning med laser',
        url: '/varumarken/soprano-ice/',
        url_title: 'Soprano Ice',
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

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Hur många behandlingar krävs för hårborttagning?',
            text: '<p class="p200">Antalet Splendor X-behandlingar som krävs för permanent hårborttagning varierar beroende på individuella faktorer som hårtyp, hårfärg och behandlingsområde. Generellt sett kan det behövas 8-12 behandlingar för att uppnå optimala resultat med Splendor X. Behandlingarna utförs med några veckors mellanrum för att effektivt följa hårets olika växtfaser.</p>'
        ),
        new Question(
            title: 'Hur långvariga är resultaten?',
            text: '<p class="p200">Splendor X-behandlingen erbjuder permanenta resultat när det gäller att minska oönskad hårväxt. Efter en fullständig behandlingsserie kan många användare uppleva en signifikant minskning av hårväxt på behandlade områden. Det är dock viktigt att komma ihåg att individuella resultat kan variera.</p>'
        ),
        new Question(
            title: 'Hur förbereder jag mig inför en behandling?',
            text: '<p class="p200">Inför din Splendor X-behandling bör du undvika att vaxa eller noppa hår i behandlingsområdet. Det är viktigt att raka området dagen före behandlingen för att optimera effektiviteten. Dessutom är det kritiskt att skydda huden från solen i veckorna före behandlingen för att minimera risken för biverkningar och förbättra behandlingens resultat.</p>'
        ),
        new Question(
            title: 'Är behandlingen smärtsam?',
            text: '<p class="p200">Splendor X-behandlingen är känd för att vara mindre smärtsam jämfört med traditionella laserbehandlingar för hårborttagning. Tack vare den avancerade kyltekniken och den precisa laserstrålen upplever de flesta en minimalt obehaglig känsla, som ofta beskrivs som lätt snärt mot huden. Smärtupplevelsen varierar dock från person till person.</p>'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i behandling med Splendor X',
        image_title: 'Cazzandra Lindberg - Expert på behandling med Splendor X'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på behandling med Splendor X',
        image_title: 'Veronika Benedik - Specialist inom behandling med Splendor X'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom behandling med Splendor X',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på behandling med Splendor X'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot behandling med Splendor X',
        image_title: 'Vilma Libom - Expert inom behandling med Splendor X'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/varumarken/splendor-x/" />

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
                                include($_SERVER['DOCUMENT_ROOT'] . '/hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
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