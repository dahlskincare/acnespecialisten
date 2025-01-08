<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'Skinbooster behandlingar - Återfukta och föryngra din hud';
$seo_description = 'Effektiv nålfri behandling för djup återfuktning och hudförnyelse. Återuppliva din hud med förbättrad elasticitet, lyster och textur utan biverkningar.';
$seo_keywords = 'skinbooster, skinbooster behandling';
$seo_image = '/images/treatments/large/skinbooster.webp';

$path_segments = array(
    new PathSegment('Behandlingar', '/hudbehandlingar/'),
    new PathSegment('Skinbooster', '/hudbehandlingar/skinbooster/'),
);

$model = new Service(
    title: 'Skinbooster behandling',
    duration: '50 min',
    price: '2595 kr',
    content: '',
    image_small: 'bilder/hudbehandlingar/358x274/skinbooster.webp',
    image_large: 'bilder/hudbehandlingar/424x456/skinbooster.webp',
    image_alt: 'Skinbooster',
    image_title: 'Skinbooster',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Infuzion',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=infuzion',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
    procedures: array(
        new Procedure(
            label: '1 behandling',
            price: '2595 kr',
            savings: null,
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea&procedures=PriceClass_5_Procedure_1',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '3 behandlingar',
            price: '6995 kr',
            savings: 'Spara 790 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea&procedures=PriceClass_5_Procedure_3',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        ),
        new Procedure(
            label: '5 behandlingar',
            price: '9995 kr',
            savings: 'Spara 2980 kr',
            booking_url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea&procedures=PriceClass_5_Procedure_5',
            booking_url_label: 'Boka tid för behandling',
            booking_url_title: 'Boka tid för behandling'
        )
    ),
);

$description_title = 'Vad är Skinbooster?';
$description_text = '<p class="p200">Skinbooster är en innovativ behandling som fungerar som fillers utan nålar för att förbättra hudens kvalitet, utan de vanliga bieffekterna som kommer med nålbehandlingar. Denna unika behandlingsmetod använder ett specialutvecklat serum, Cytocare 532, som innehåller hyaluronsyra och en rik blandning av 52 essentiella vitaminer och mineraler. Dessa ingredienser tränger djupt in i huden för att intensivt återfukta och stimulera kollagen- och elastinproduktionen, vilket är nödvändigt för att upprätthålla hudens fyllighet, elasticitet och fräschhet.</p>
<p class="p200 mt-m">Under en Skinbooster-behandling används en roller i kombination med galvanisk ström för att slussa ner serumet 3 mm under huden, vilket säkerställer att varje hudcell når och absorberar näringsämnena effektivt. Denna nålfria metod gör det möjligt att behandla även känsliga områden nära ögonen. Skinbooster är idealisk för att förbättra hudens utseende i ansiktet, halsen, dekolletaget och på händerna, och ger flera fördelar som minskning av mörka ringar, utjämning av fina linjer, förbättring av hudens fasthet och elasticitet samt en övergripande förbättring av hudens lyster och textur.</p>
<p class="p200 mt-m">För att uppnå de bästa resultaten rekommenderas en serie av tre behandlingar med en veckas mellanrum, efterföljt av underhållsbehandlingar var sjätte månad. Vi erbjuder även Multifuzion, en kombinationsbehandling som innefattar både microneedling och Skinbooster för en ännu djupare effekt och stimulans av hudens naturliga proteinproduktion, vilket är särskilt effektivt för att återfå en ungdomligare och fastare hud.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Förberedelser',
        image_small: '/bilder/process/358x272/skinbooster-forberedelser.webp',
        image_large: '/bilder/process/872x456/skinbooster-forberedelser.webp',
        image_alt: 'Förberedelser inför Skinbooster',
        image_title: 'Förberedelser inför Skinbooster',
        content: '<p class="p200">För att förbereda dig inför din Skinbooster-behandling hos AcneSpecialisten, rekommenderar vi några enkla steg. Minska användningen av hudvårdsprodukter med starka aktiva ingredienser, som exfolierande syror, några dagar före din behandling. Detta minskar risken för irritation och förbereder din hud för att effektivt ta emot de näringsrika ingredienserna i behandlingen.</p>
        <p class="p200 mt-m">Att komma osminkad till din behandling är inte ett krav, men om du väljer att göra det, underlättar det för oss att göra en noggrann hudanalys och anpassa behandlingen efter dina specifika behov. Under en kostnadsfri konsultation går vi igenom allt du behöver veta inför behandlingen. Vårt team på AcneSpecialisten ser fram emot att välkomna dig och utforma en skräddarsydd behandlingsplan för din hudtyp och dina mål. Vi är här för att stödja dig genom din hudvårdsresa och ser fram emot att bidra till din förbättrade hudhälsa.</p>',
    ),
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/skinbooster-process.webp',
        image_large: '/bilder/process/872x456/skinbooster-process.webp',
        image_alt: 'Hur går Skinbooster behandlingen till?',
        image_title: 'Hur går Skinbooster behandlingen till?',
        content: '<p class="p200">Skinbooster är en innovativ behandling som erbjuder de fördelar man finner i både fillers och skinboosters, men helt utan användning av nålar. Denna skonsamma men effektiva behandling passar perfekt för att förbättra hudens utseende och kvalitet på ansiktet, halsen, dekolletaget eller händerna.</p>
        <p class="p200 mt-m">Under behandlingen appliceras Cytocare 532, ett serum rikt på hyaluronsyra och en blandning av 52 essentiella vitaminer och mineraler. Denna kraftfulla formula återfuktar huden på djupet och stimulerar produktionen av elastin och kollagen, vilket bidrar till en förbättrad hudstruktur och elasticitet. Applikationen görs med en unik roller som använder galvanisk ström, vilket möjliggör penetration av serumet upp till 3mm under hudytan och säkerställer en jämn fördelning över behandlingsområdet.</p>
        <p class="p200 mt-m">Efter behandlingen får huden en lugnande vård för att maximera resultatet och komforten. Vi rekommenderar att genomgå en serie av tre behandlingar med en veckas mellanrum för optimala resultat, som kan varar i upp till sex månader. En uppföljningsbehandling var sjätte månad hjälper till att upprätthålla hudens ungdomliga utseende och lyster. Infuzion är en idealisk lösning för dem som söker en effektiv, smärtfri behandling för att återfå en fräsch och återfuktad hud.</p>',
    ),
);

$types_title = '';
$types_description = '';
/*$big_types = array(
    new Service(
        title: 'Kombinera Skinbooster med Microneedling för Mutifuzion',
        duration: null,
        price: null,
        content: '<p class="p200">Multifuzion är en innovativ behandling som kombinerar kraften hos microneedling med fördelarna av en Skinbooster, för en omfattande hudförbättring. Behandlingen inleds med microneedling, där fina nålar skapar mikrokanaler i huden. Denna teknik främjar hudens egen läkningsförmåga och stimulerar produktionen av kollagen, vilket leder till en förstärkt hudstruktur och en minskning av ärr och fina linjer.</p>
        <p class="p200 mt-m">Direkt efter microneedling tillämpas Skinbooster. De mikrokanaler som skapas under microneedling möjliggör för Infuzion-serumet, som är laddat med hyaluronsyra och vitala näringsämnen, att penetrera djupare in i huden. Detta intensifierar hydreringen och näringsförsörjningen till hudcellerna, vilket resulterar i en djupare och mer långvarig effekt.</p>
        <p class="p200 mt-m">Multifuzion är en utmärkt behandling för att adressera en rad hudproblem som åldrande, torrhet, ojämn hudton och struktur. Genom att kombinera dessa två kraftfulla behandlingar ger Multifuzion en omfattande förbättring av huden, inte bara i utseende utan även i dess struktur och kvalitet, vilket ger en mer ungdomlig och strålande lyster.</p>',
        image_small: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_large: '/bilder/hudbehandlingar/200x200/microneedling.webp',
        image_alt: 'Förstärk din Microneedling med Skinbooster',
        image_title: 'Förstärk din Microneedling med Skinbooster',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Consultation_Brand&Consultationwhat=Consultation_Brand_Infuzion',
        consultation_url_label: 'Boka hudkonsultation',
        consultation_url_title: 'Boka tid för hudkonsultation',
        booking_url: 'https://boka.acnespecialisten.se?flow=infuzion',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka tid för behandling',
        icons: array(),
        procedures: array()
    ),
);*/

$treatment_areas_title = 'Behandlingsområden';
$treatment_areas_text = '<p class="p200">Skinbooster kan anvädnas på flera delar av kroppen för fina resultat.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: null,
        image_title: null,
        title: null,
        description: null,
        items: array(
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/ansikte.svg',
                image_alt: 'Infuzion behandling i ansiktet',
                image_title: 'Infuzion behandling i ansiktet',
                title: 'Ansikte',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling i ansiktet'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hals.svg',
                image_alt: 'Infuzion behandling för halsen',
                image_title: 'Infuzion behandling för halsen',
                title: 'Hals',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling för halsen'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/dekolletage.svg',
                image_alt: 'Infuzion behandling för dekolletaget',
                image_title: 'Infuzion behandling för dekolletaget',
                title: 'Dekolletage',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling för dekolletaget'
            ),
            new TreatmentAreaItem(
                image: '/bilder/omraden/ikoner/hander.svg',
                image_alt: 'Infuzion behandling för händerna',
                image_title: 'Infuzion behandling för händerna',
                title: 'Händer',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för Infuzion behandling för händerna'
            ),

        )
    ),
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Kombinera områden',
        image_title: 'Kombinera områden',
        title: 'Kombinera områden',
        description: '<p class="p200">Med Skinbooster kan vi kombinera flera områden.</p>',
        items: array(
            new TreatmentAreaItem(
                image: '/icons/1x.svg',
                image_alt: '1x område',
                image_title: '1x område',
                title: '1x område',
                duration: '50 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_1xArea',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 1 område.'
            ),
            new TreatmentAreaItem(
                image: '/icons/2x.svg',
                image_alt: '2x områden',
                image_title: '2x områden',
                title: '2x områden',
                duration: '60 min',
                price: '3595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_2xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 2 områden.'
            ),
            new TreatmentAreaItem(
                image: '/icons/3x.svg',
                image_alt: '3x områden',
                image_title: '3x områden',
                title: '3x områden',
                duration: '70 min',
                price: '4595 kr',
                url: 'https://boka.acnespecialisten.se?flow=infuzion&area=Infuzion_3xAreas',
                url_label: 'Boka',
                url_title: 'Boka tid för behandling av 3 områden.'
            ),
        )
    ),
);

$bottom_articles = array(
    'aftercare' => new Article(
        title: 'Eftervård',
        image_small: '/bilder/process/358x272/skinbooster-eftervard.webp',
        image_large: '/bilder/process/872x456/skinbooster-eftervard.webp',
        image_alt: 'Eftervård för Skinbooster',
        image_title: 'Eftervård för Skinbooster',
        content: '<p class="p200">Eftervård är en viktig del för att uppnå och bibehålla optimala resultat från din Infuzion skinbooster och Multifuzion behandlingar hos AcneSpecialisten. Efter dessa behandlingar är din hud mer mottaglig för vård och näring, och det är därför viktigt att ge den rätt behandling för att stödja återhämtningen och optimera resultatet.</p>
        <p class="p200 mt-m">För Infuzion-behandlingen rekommenderar vi att du använder skonsamma, återfuktande hudvårdsprodukter som inte irriterar huden. Håll även huden väl återfuktad och skydda den från solen.</p>
        <p class="p200 mt-m">Om du har genomgått Multifuzion, som kombinerar microneedling och Infuzion, kan din hud behöva extra omsorg. Det är viktigt att undvika exfolierande produkter eller starka ingredienser i några dagar efter behandlingen för att låta huden återhämta sig. Eftersom huden kan vara extra känslig efter behandlingen är det viktigt att skydda den mot solen. Använd solskydd med hög SPF och undvik direkt solljus för att förhindra hyperpigmentering och skada på den behandlade huden.</p>
        <p class="p200 mt-m">Vi på AcneSpecialisten är här för att stödja dig genom din hudvårdsresa. Vi erbjuder skräddarsydda råd och uppföljning för att säkerställa att du upprätthåller de positiva resultaten från din behandling. Genom att noggrant följa våra rekommenderade eftervårdsinstruktioner kan du bidra till en hälsosam, återfuktad och strålande hud långt efter din behandling.</p>',
    ),
);

$service_brands_title = 'Märken för Skinbooster';
$service_brands_text = '<p class="p200">Vi utför Skinbooster med Infuzion.</p>';
$service_brands = array(

    new Brand(
        label: 'Infuzion',
        image: 'bilder/logotyper/infuzion.svg',
        image_alt: 'Infuzion logotyp',
        image_title: 'Infuzion - nålfri skinbooster',
        url: '/infuzion.php',
        url_title: 'Infuzion',
    ),
);

$results_title = 'Skinbooster före efter resultat';
$results = array(
    new ResultCustomer(
        url: '',
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-fore-1.webp',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
        image_after_large: '/bilder/resultat/424x424/resultat-akne-fore-1.webp',
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
        image_before_small: '/bilder/resultat/358x358/resultat-akne-fore-2.webp',
        image_after_small: '/bilder/resultat/358x358/resultat-akne-efter-2.jpg',
        image_before_large: '/bilder/resultat/424x424/resultat-akne-fore-2.webp',
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
            title: 'Hur många Skinbooster behandlingar rekommenderas?',
            text: 'För optimalt resultat rekommenderas en uppbyggnadsfas av 3 behandlingar med en veckas mellanrum och därefter underhållsbehandlingar var 4-6e månad.'
        ),

        new Question(
            title: 'Är effekterna från Infuzion eller Multifuzion varaktiga?',
            text: 'Resultaten från Infuzion och Multifuzion kan vara långvariga, särskilt om de stöds av en kontinuerlig och lämplig hudvårdsrutin. Åldrande och miljöfaktorer kan dock påverka hur länge resultaten varar. För att bibehålla och förstärka effekterna kan periodiska underhållsbehandlingar vara nödvändiga.'
        ),

        new Question(
            title: 'Vad ska jag tänka på inför min Infuzion eller Multifuzion behandling?',
            text: 'Innan du genomgår en Infuzion eller Multifuzion behandling är det bäst att undvika produkter som kan irritera huden, såsom starka exfolierande syror. Håll huden återfuktad och skyddad mot solen. Vid din konsultation kommer vi att ge dig anpassade råd för att förbereda din hud optimalt för behandlingen.'
        ),

        new Question(
            title: 'Vad är skillnaden mellan Infuzion, Multifuzion och traditionella skinboosters och fillers?',
            text: 'Infuzion och Multifuzion skiljer sig från traditionella skinboosters och fillers genom deras unika applikationsmetod och ingredienser. De erbjuder intensiv hydrering och hudförbättring utan användning av nålar, vilket gör dem till ett skonsamt alternativ. Dessa behandlingar är särskilt bra för att förbättra hudens textur, elasticitet och lyster genom att effektivt tillföra näringsämnen till hudens djupare lager.'
        ),
        new Question(
            title: 'Skinbooster biverkningar?',
            text: 'Eftersom vi utför skinbooster-behandlingar utan nålar, är risken för biverkningar minimal. Denna nålfria metod eliminerar de vanligaste biverkningarna som är associerade med injektioner, såsom svullnad, rodnad, och blåmärken. Våra kunder upplever en skonsam och effektiv behandling med fokus på att förbättra hudens kvalitet utan obehag eller nedtid.'
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
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i Skinbooster-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på Skinbooster-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på Skinbooster',
        image_title: 'Veronika Benedik - Specialist inom Skinbooster-vård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom Skinbooster-behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på Skinbooster'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot Skinbooster-behandlingar',
        image_title: 'Vilma Libom - Expert inom Skinbooster-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>

    <link rel="canonical" href="https://www.acnespecialisten.se/hudbehandlingar/skinbooster/" />

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
                                include($_SERVER['DOCUMENT_ROOT'] . '/hudbehandlingar/widgets/treatment-area-item-card/treatment-area-item-card.php');
                            }
                        } ?>
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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut/" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
                </section>
            </div>
        </div>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <script src="/includes/scripts/floating-image.js"></script>
</body>

</html>