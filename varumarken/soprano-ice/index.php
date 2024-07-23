<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Soprano ICE Platinum - Diodlaser hårborttagning';
$seo_description = 'Soprano ICE Platinum, diodlaser för hårborttagning. Smärtfri laserbehandling för att effektivt avlägsna oönskat hår på alla hudtyper. Boka gratis konsultation!';
$seo_keywords = 'diodlaser, soprano ice platinum, soprano ice, soprano ice laser, soprano ice stockholm, laser hårborttagning sundbyberg, diodlaser hårborttagning, vad är diodlaser?';

$seo_image = '/images/treatments/large/soprano-ice.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('Soprano Ice', '/varumarken/soprano-ice/'),
);

$model = new Service(
    title: 'Soprano ICE Platinum - Diodlaser Hårborttagning',
    duration: null,
    price: 'Från 995 kr',
    content: '<p class="p200">Soprano ICE är en revolution inom området för permanent hårborttagning med diodlaser, som erbjuder en toppmodern lösning för dig som önskar att effektivt ta bort oönskad hårväxt permanent. Denna avancerade teknik använder en kombination av flera våglängder för att på ett målriktat och skonsamt sätt avlägsna hårstrån genom att selektivt påverka hårfolliklarna.</p>',
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

$description_title = 'Vad är Soprano ICE Platinum?';
$description_text = '<p class="p200">Soprano ICE Platinum representerar framkanten inom teknologin för permanent hårborttagning, genom att effektivt kombinera tre kraftfulla diodlaserteknologier i en behandling. Denna innovativa diodlaserbehandling använder en unik 3 i 1 metod som integrerar våglängderna Alexandrit 755NM, Speed 810NM, och YAG 1064NM, var och en med särskilda egenskaper för att målriktat och skonsamt behandla olika hårtyper och hudtoner.</p>
<p class="p200 mt-m">Alexandrit 755NM våglängden är särskilt effektiv för ljusa och tunna hårstrån, som traditionellt varit utmanande att behandla. Denna våglängd utmärker sig genom sin höga energiabsorption och ytliga penetration, vilket gör den idealisk för att behandla hårstrån nära hudytan i områden som ögonbryn och överläpp.</p>
<p class="p200 mt-m">Speed 810NM våglängden erbjuder djup penetration av hårsäcken, vilket möjliggör en snabb och effektiv behandling av större områden såsom armar, ben, kinder och skäggområdet. Dess förmåga att absorbera melanin i måttlig grad gör den säker för användning på mörkare hudtyper, medan dess djupverkande penetration tar sikte på hårsäckens struktur runt hårstrået.</p>
<p class="p200 mt-m">YAG 1064NM våglängden, med sin låga melaninabsorption, är optimal för mörkare hudtyper och erbjuder den djupaste penetrationen. Denna våglängd riktar sig direkt mot hårpapillen och hårpulpan och kan behandla även djupt inbäddade hårstrån i områden som hårbotten, armhålor och intima zoner. Den genererar även en högre värme som bidrar till en mer effektiv hårborttagning över hela behandlingsområdet.</p>
<p class="p200 mt-m">Soprano ICE Platinum skiljer sig från andra laserbehandlingar genom sin revolutionerande kylteknik som ger en nästan smärtfri behandlingsupplevelse. Denna teknologi, tillsammans med behandlingens hastighet och avsaknad av behovet av återhämtningstid, gör Soprano ICE Platinum till en idealisk lösning för permanent hårborttagning på alla kroppsområden, inklusive de mest känsliga. </p>
<p class="p200 mt-m">Den är effektiv året runt, även på solbränd hud, vilket gör den till en flexibel lösning för en bred variation av klienter. Även om Soprano ICE Platinum är effektiv för de flesta hårtyper och nyanser, är det viktigt att notera att vissa hårtyper, såsom grått och mycket ljust hår, kan vara mer utmanande att behandla.</p>';

$top_articles = array(
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/soprano-ice-process.webp',
        image_large: '/bilder/process/872x456/soprano-ice-process.webp',
        image_alt: 'Hur går behandlingen med Soprano Ice till?',
        image_title: 'Hur går behandlingen med Soprano Ice till?',
        content: '<p class="p200">Att genomgå en Soprano ICE behandling är en effektiv och skonsam metod för permanent hårborttagning som passar de flesta hårtyper och hudtoner. För att du som kund ska få den bästa möjliga upplevelsen och resultatet, är det viktigt att följa några enkla förberedelser och förstå hur processen går till.</p>
        <p class="p200 mt-m">Dagen innan din behandling är det viktigt att du rakar det område som ska behandlas. Detta säkerställer att lasern kan penetrera huden effektivt och nå hårsäckarna utan hinder. Var noga med att undvika vaxning eller epilering, då dessa metoder tar bort hårstrået från follikeln, vilket gör att lasern inte har något mål att rikta in sig på.</p>
        <p class="p200 mt-m">Vid ankomst till din behandling kommer en kylgel att appliceras på behandlingsområdet. Denna gel fungerar inte bara som en barriär mellan lasern och din hud för att skydda och minska obehag, utan den hjälper även laserns ljus att effektivt tränga igenom huden och nå hårsäckarna.</p>
        <p class="p200 mt-m">Behandlingen utförs sedan genom att en handhållen enhet förs över huden i svepande rörelser. Enheten avger laserimpulser som varsamt värmer upp hårsäckarna till en punkt där de inte längre kan producera hår. Tack vare Soprano ICE:s unika kylteknik, känner du minimalt obehag under processen. Det känns oftast som en lätt kittlande sensation, med en sval känsla från gelen och den kylande effekten av lasern.</p>
        <p class="p200 mt-m">En av de stora fördelarna med Soprano ICE är att behandlingen är snabb och effektiv, vilket gör det möjligt att behandla större områden på kort tid utan behov av återhämtning. Efter behandlingen kan du återgå till dina dagliga aktiviteter direkt, utan någon återhämtningstid.</p>',
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

$treatment_areas_title = 'Behandlingsområden';
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
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/soprano-ice-forberedelser.webp',
        image_large: '/bilder/process/872x456/soprano-ice-forberedelser.webp',
        image_alt: 'Förberedelser inför Soprano ICE',
        image_title: 'Förberedelser inför Soprano ICE',
        content: '<p class="p200">Att noggrant förbereda sig inför en Soprano ICE-behandling är viktigt för att uppnå optimala resultat i permanent hårborttagning. Denna toppmoderna laserbehandling kräver specifika förberedelser för att garantera en effektiv och säker behandling. Innan din Soprano ICE-behandling är det viktigt att du inte vaxar eller noppar hår i det område som ska behandlas. Lasern fungerar bäst när hårfolliklarna är intakta, så det rekommenderas att du rakar området noga dagen innan din behandling.</p>
        <p class="p200 mt-m">För att maximera säkerheten och effektiviteten med Soprano ICE, bör du undvika solbränna och användning av självbruningsprodukter inför behandlingen. Solbränd hud kan påverka behandlingens utfall och öka risken för biverkningar. Genom att följa dessa förberedelser säkerställer du att din hud är i bästa möjliga skick inför Soprano ICE-behandlingen, vilket bidrar till en effektiv och problemfri hårborttagningsprocess.</p>',
    ),
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/soprano-ice-eftervard.webp',
        image_large: '/bilder/process/872x456/soprano-ice-eftervard.webp',
        image_alt: 'Soprano ICE eftervård',
        image_title: 'Soprano ICe eftervård',
        content: '<p class="p200">Efter din behandling kan du uppleva mild rodnad och en lätt värmande känsla i det behandlade området, vilket är normala reaktioner som vanligtvis avtar inom kort tid. För att främja en snabb återhämtning bör du behandla området varsamt, undvika direkt exponering för solljus och använda solskydd med hög SPF för att skydda huden.</p>
        <p class="p200 mt-m">Undvik att skrubba eller irritera huden med starka hudvårdsprodukter och undvik andra hårborttagningsmetoder som vaxning eller plockning under återhämtningsperioden. Genom att följa dessa riktlinjer kan du säkerställa att din hud återhämtar sig på bästa sätt och behåller de optimala resultaten från din Soprano ICE-behandling.</p>',
    ),
);

$service_brands_title = 'Andra teknologier för hårborttagning';
$service_brands_text = '<p class="p200">Vi erbjuder även Splendor X som består av laser för hårborttagning.</p>';
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

$reviews_view_more = 'Se alla omdömen';

$faq_title = 'Frågor & Svar';
$faq_categories = array(
    '' => array(
        new Question(
            title: 'Vad är diodlaser?',
            text: '<p class="p200">Diodlaser i Soprano ICE använder en specifik våglängd på 810 nm för att djupt penetrera huden och målinrikta hårsäckarna utan att skada omgivande vävnad. Det gör behandlingen säker och effektiv för permanent hårborttagning.</p>'
        ),
        new Question(
            title: 'Är resultaten från Soprano ICE permanenta?',
            text: '<p class="p200">Ja, Soprano ICE tar permanent bort håret efter en serie serie behandlingar. Efter att ha genomgått en komplett serie behandlingar, upplever de flesta en betydande minskning i hårväxt på de behandlade områdena. Dock kan resultaten variera beroende på individuella faktorer.</p>'
        ),
        new Question(
            title: 'Hur många behandlingar behövs för bästa resultat?',
            text: '<p class="p200">Antalet behandlingar varierar beroende på individens hår- och hudtyp, samt området som behandlas. Vanligtvis rekommenderas 6-8 behandlingar med 4-6 veckors intervall för att uppnå optimala resultat, men det kan behövas fler sessioner för vissa personer.</p>'
        ),
        new Question(
            title: 'Är Soprano ICE smärtsam?',
            text: '<p class="p200">Soprano ICE är känd för att vara en av de minst smärtsamma metoderna för laserhårborttagning, tack vare sin unika kylteknik och gradvisa uppvärmning av huden. De flesta känner endast en lätt värme eller stickande känsla.</p>'
        ),
        new Question(
            title: 'Kan Soprano ICE användas på alla hudtyper?',
            text: '<p class="p200">Ja, Soprano ICE är effektiv och säker för alla hudtyper, inklusive solbränd hud. Dess teknologi är utformad för att anpassa sig och behandla olika hudfärger och hårtyper effektivt, vilket gör den till en mångsidig lösning för permanent hårborttagning.</p>'
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

    <link rel="canonical" href="https://www.acnespecialisten.se/varumarken/soprano-ice/" />

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
                            <button class="round-large grey" onclick="scrollSpecialists(-1)">
                                <?php icon('arrow-left') ?>
                            </button>
                            <button class="round-large grey" onclick="scrollSpecialists(1)">
                                <?php icon('arrow-right') ?>
                            </button>
                        </div>
                    </div>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/widgets/specialists/specialists-narrow.php'); ?>
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>