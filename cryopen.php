<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/models.php');

$seo_title = 'CryoPen behandling – Ta bort leverfläckar & födelsemärken';
$seo_description = 'En CryoPen-behandling är effektiv och fryser bort godartade hudförändringar som leverfläckar, hudflikar & fibrom. Boka gratis konsultation hos oss →';
$seo_keywords = 'ta bort födelsemärken, ta bort leverfläckar, cryopen, cryopen före efter, cryopen behandling, cryopen biverkningar, cryopen pris, cryopen recension, cryopen stockholm, cryopen leverfläck, cryopen födelsemärke, cryopen läkning, cryopen resultat, vad är cryopen, cryopen behandling stockholm';

$seo_image = 'bilder/varumarken/424x456/cryopen.webp';

$path_segments = array(
    new PathSegment('Varumärken', '/varumarken/'),
    new PathSegment('CryoPen', '/cryopen.php'),
);

$model = new Service(
    title: 'CryoPen behandling i Stockholm',
    duration: null,
    price: 'Från 2332 kr',
    content: '<p class="p200">CryoPen är ett effektivt alternativ för att ta bort leverfläckar, födelsemärken, skintags, fibrom, fettknölar, hemangiom, pigmentfläckar och mycket mer. Är du osäker på vilken typ av fläck du har? Boka en kostnadsfri konsultation, där vi bedömer din hud och ger råd om den bästa behandlingen för dina behov.</p>',
    image_small: 'bilder/varumarken/358x274/cryopen.webp',
    image_large: 'bilder/varumarken/424x456/cryopen.webp',
    image_alt: 'CryoPen',
    image_title: 'CryoPen',
    consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
    consultation_url_label: 'Boka hudkonsultation',
    consultation_url_title: 'Boka tid för hudkonsultation',
    booking_url: 'https://boka.acnespecialisten.se?flow=cryopen',
    booking_url_label: 'Boka behandling',
    booking_url_title: 'Boka tid för behandling',
);

$floating_box = '';

$description_title = 'Vad är CryoPen?';
$description_text = '<p class="p200">CryoPen är ett verktyg som på under 20 sekunder effektivt fryser bort godartade hudförändringar. “Kryo” i kryobehandling betyder frysning, och denna populära metod används världen över. Behandlingen ger snabba resultat, är skonsam mot huden och är idealisk för att ta bort olika typer av hudförändringar såsom födelsemärken, leverfläckar, hudflikar, ansiktsvårtor och andra utåtstående märken och skönhetsfläckar.</p>

    <p class="p200 mt-m">CryoPen använder precis kylteknologi för att selektivt frysa och förstöra oönskade hudförändringar. Genom att rikta in sig på specifika områden med extrem kyla kan CryoPen behandla hudförändringar effektivt utan att skada den omgivande huden. Den naturliga läkningsprocessen som stimuleras efter behandlingen resulterar i en jämnare och mer estetisk hudyta.</p>';

$top_articles = array(
    'preparing' => new Article(
        title: 'Inför behandling',
        image_small: '/bilder/process/358x272/cryopen-forberedelser.webp',
        image_large: '/bilder/process/872x456/cryopen-forberedelser.webp',
        image_alt: 'Inför CryoPenbehandling',
        image_title: 'Inför CryoPenbehandling',
        content: '<p class="p200">Vi erbjuder alltid en kostnadsfri konsultation inför din CryoPen-behandling. Under konsultationen möter du en av våra erfarna hudterapeuter som noggrant undersöker de hudförändringar du vill ta bort. Detta steg är avgörande för att skapa en skräddarsydd behandlingsplan och för att avgöra om CryoPen är den bästa metoden för dig.</p>
        <p class="p200 mt-m">Förbered huden inför behandlingen genom att undvika att pilla eller irritera området. Utsätt inte huden för intensiv solning eller stark kyla innan din session. Under konsultationen får du omfattande information om hur du bäst förbereder dig och vad du kan förvänta dig av behandlingen. Om förhållandena tillåter kan vi ofta påbörja behandlingen direkt efter konsultationen.</p>
        <p class="p200 mt-m">Observera att vi endast behandlar godartade hudförändringar. Om du är osäker på om din hudåkomma är ofarlig, bör du först konsultera en läkare. Om den är ofarlig, boka en kostnadsfri CryoPen-konsultation där vi utformar en individuell behandlingsplan för dig.</p>',
    ),
    'process' => new Article(
        title: 'Hur går behandlingen till?',
        image_small: '/bilder/process/358x272/cryopen-process.webp',
        image_large: '/bilder/process/872x456/cryopen-process.webp',
        image_alt: 'Hur går CryoPen till?',
        image_title: 'Hur går CryoPen till?',
        content: '<p class="p200">Med hjälp av CryoPennan applicerar vår kvalificerade hudterapeut en exakt dos av kyla direkt på den oönskade hudförändringen. Denna riktade kyla är mycket effektiv och behandlingen tar bara några sekunder. Känslan under behandlingen kan jämföras med en nypande eller stickande känsla, men är normalt sett kortvarig och hanterbar.</p>
        <p class="p200 mt-m">Omedelbart efter CryoPen-behandlingen kan det behandlade området uppvisa rodnad eller svullnad, och ibland kan en liten blåsa uppstå. Detta är en normal reaktion och en del av den naturliga läkningsprocessen. Efter behandlingen kommer du att få detaljerade instruktioner för att ta hand om huden hemma. Den frysta hudförändringen kommer att torka och krympa inom några veckor, under följande behandlingar så kommer hudförändringen gradvis att försvinna.</p>',
    ),
);

$types_title = 'Olika typer av utväxter vi tar bort';
$types_description = '';
$types = array(
    new Service(
        title: 'CryoPen mot födelsemärken',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen för födelsemärken',
        image_title: 'CryoPen för födelsemärken',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av födelsemärken',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_fodelsemarken',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för födelsemärken',

        url: '/fodelsemarken.php',
        url_label: 'Läs mer om födelsemärken',
        url_title: 'Läs mer om födelsemärken',
    ),
    new Service(
        title: 'CryoPen mot leverfläckar',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen av leverfläckar',
        image_title: 'CryoPen av leverfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för leverfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_leverflackar',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för leverfläckar',

        url: '/fodelsemarken.php',
        url_label: 'Läs mer om leverfläckar',
        url_title: 'Läs mer om leverfläckar',
    ),
    new Service(
        title: 'CryoPen mot hudflikar',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen för hudflikar',
        image_title: 'CryoPen för hudflikar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av hudflikar',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för hudflikar',

        url: '/hudflikar.php',
        url_label: 'Läs mer om hudflikar',
        url_title: 'Läs mer om hudflikar',
    ),
    new Service(
        title: 'CryoPen mot skintags',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen av hudflikar',
        image_title: 'CryoPen av hudflikar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för hudflikar',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för hudflikar',

        url: '/hudflikar.php',
        url_label: 'Läs mer om hudflikar',
        url_title: 'Läs mer om hudflikar',
    ),
    new Service(
        title: 'CryoPen mot Hallonmärke - Jordgubbsmärke - Smultronmärke',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen av kärlförändringar',
        image_title: 'CryoPen av kärlförändringar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för kärlförändringar',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_smultronmarke',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för kärlförändringar',

        url: '/blodprickar.php',
        url_label: 'Läs mer om hallonmärken, jordgubbsmärken och smultronmärken',
        url_title: 'Läs mer om hallonmärken, jordgubbsmärken och smultronmärken',
    ),
    new Service(
        title: 'CryoPen mot hemangiom',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen för hemangiom',
        image_title: 'CryoPen för hemangiom',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för hemangiom',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_angiom',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för hemangiom',

        url: '/blodprickar.php',
        url_label: 'Läs mer om hemangiom',
        url_title: 'Läs mer om hemangiom',
    ),
    new Service(
        title: 'CryoPen mot åldersfläckar',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen av åldersfläckar',
        image_title: 'CryoPen av åldersfläckar',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för åldersfläckar',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_age_spots',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för åldersfläckar',

        url: '/aldersflackar.php',
        url_label: 'Läs mer om åldersfläckar',
        url_title: 'Läs mer om åldersfläckar',
    ),
    new Service(
        title: 'CryoPen mot fibrom',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen för fibrom',
        image_title: 'CryoPen för fibrom',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av fibrom',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_fibrom',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för fibrom',

        url: '/hudproblem/hudforandringar/',
        url_label: 'Läs mer om fibrom',
        url_title: 'Läs mer om fibrom',
    ),
    new Service(
        title: 'CryoPen mot seborroisk keratos',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen av seborroisk keratos',
        image_title: 'CryoPen av seborroisk keratos',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för seborroisk keratos',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_seborroisk_keratos',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för seborroisk keratos',

        url: '/hudproblem/hudforandringar/',
        url_label: 'Läs mer om seborroisk keratos',
        url_title: 'Läs mer om seborroisk keratos',
    ),
    new Service(
        title: 'CryoPen mot ansiktsvårtor',
        duration: '20 min',
        price: '995 kr',
        content: '',
        image_small: null,
        image_large: null,
        image_alt: 'CryoPen för ansiktsvårtor',
        image_title: 'CryoPen för ansiktsvårtor',
        consultation_url: 'https://boka.acnespecialisten.se?flow=consultation&ConsultationType=Brand_Consultation&Consultationwhat=Brand_CryoPen',
        consultation_url_label: 'Boka konsultation',
        consultation_url_title: 'Boka konsultation för behandling av ansiktsvårtor',
        booking_url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_angiom',
        booking_url_label: 'Boka behandling',
        booking_url_title: 'Boka CryoPen för ansiktsvårtor',

        url: '/hudproblem/hudforandringar/',
        url_label: 'Läs mer om ansiktsvårtor',
        url_title: 'Läs mer om ansiktsvårtor',
    ),
);

$treatment_areas_title = 'Områden vi behandlar';
$treatment_areas_text = '<p class="p200">CryoPen erbjuder en mångsidig lösning för att avlägsna hudförändringar på många delar av kroppen, inklusive känsliga och svåråtkomliga områden. Behandlingen kan utföras på ansikte, hals, axlar, rygg och även intima områden. CryoPen är idealisk för att behandla enstaka eller flera hudförändringar, oavsett deras storlek och placering, och anpassas för att leverera optimala resultat för varje unikt fall.</p>';
$treatment_areas = array(
    new TreatmentArea(
        image_small: null,
        image_large: null,
        image_alt: 'Antal hudförändringar',
        image_title: 'Antal hudförändringar',
        title: 'Antal hudförändringar',
        description: '<p class="p200">Priset baseras på antal hudförändringar som behandlas.</p>',
        items: array(
            new TreatmentAreaItem(
                image: null,
                image_alt: '1 st',
                image_title: '1 st',
                title: '1 st',
                duration: '20 min',
                price: '995 kr',
                url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags&quantity=PriceClass_Skin_Imperfections_1',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '2 - 3 st',
                image_title: '2 - 3 st',
                title: '2 - 3 st',
                duration: '20 min',
                price: '1595 kr',
                url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags&quantity=PriceClass_Skin_Imperfections_2-3',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '4 - 6 st',
                image_title: '4 - 6 st',
                title: '4 - 6 st',
                duration: '20 min',
                price: '1995 kr',
                url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags&quantity=PriceClass_Skin_Imperfections_4-6',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '7 - 10 st',
                image_title: '7 - 10 st',
                title: '7 - 10 st',
                duration: '30 min',
                price: '2595 kr',
                url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags&quantity=PriceClass_Skin_Imperfections_7-10',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '20 st',
                image_title: '20 st',
                title: '20 st',
                duration: '30 min',
                price: '4995 kr',
                url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags&quantity=PriceClass_Skin_Imperfections_20',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: '50 st',
                image_title: '50 st',
                title: '50 st',
                duration: '70 min',
                price: '9995 kr',
                url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Problem_skintags&quantity=PriceClass_Skin_Imperfections_50',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),
            new TreatmentAreaItem(
                image: null,
                image_alt: 'Återbesök',
                image_title: 'Återbesök',
                title: 'Återbesök',
                duration: '20 min',
                price: 'Från 250 kr',
                url: 'https://boka.acnespecialisten.se?flow=cryopen&skipable_problem=Cryopen_aterbesok',
                url_label: 'Boka',
                url_title: 'Boka tid förCryoPen'
            ),

        )
    ),
);

$bottom_articles = array('aftercare' => new Article(
    title: 'Eftervård',
    image_small: '/bilder/process/358x272/cryopen-eftervard.webp',
    image_large: '/bilder/process/872x456/cryopen-eftervard.webp',
    image_alt: 'Efter CryoPen',
    image_title: 'Efter CryoPen',
    content: '<p class="p200">Efter en CryoPen-behandling är korrekt eftervård avgörande för att säkerställa en effektiv läkning och för att undvika komplikationer. Direkt efter behandlingen kan området vara rött och svullet, vilket är normalt. Det är viktigt att skydda det behandlade området från att smuts, undvik därför att röra det med händerna och att applicera smink inom de första 24 timmarna efter ingreppet.</p>
    <p class="p200 mt-m">För att minska risken för irritation och svullnad, bör du avstå från att delta i ansträngande aktiviteter som intensiv träning, bastu och heta duschar/badför under de första dagarna efter behandlingen. Det är viktigt att skydda huden, speciellt på det behandlade området så det är viktigt att applicera solskydd för att skydda huden mot UV-strålning och hjälpa till i läkningsprocessen.</p>
    <p class="p200 mt-m">Det är viktigt att du följer de eftervårdsinstruktioner som din hudterapeut ger dig. Om du upplever några osäkerheter eller bekymmer angående din läkning efter behandlingen, kontakta din klinik för råd. Baserat på din huds respons på behandlingen rekommenderas en eller flera uppföljningar eller behandlingar för optimala resultat.</p>',
));

$results_title = 'CryoPen före och efter resultat';
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
            title: 'Vilken är den vanliga läkningstiden efter en behandling med CryoPen?',
            text: '<p class="p200">Läkningstiden efter en CryoPen behandling varierar beroende på individens hudtyp, omfattning och storlek på de behandlade hudförändringarna. Små hudförändringar tenderar att läka inom några dagar, medan större eller fler behandlade områden kan kräva flera veckor. Initial svullnad och rodnad är att förvänta och bör avta inom de första dagarna efter behandling.</p>'
        ),
        new Question(
            title: 'Finns det en risk att hudförändringar återkommer efter att ha använt CryoPen?',
            text: '<p class="p200">CryoPen är utformad för att permanentta bort hudförändringar, de kommer inte att komma tillbaka.</p>'
        ),
        new Question(
            title: 'Vad ska jag undvika efter behandling med CryoPen?',
            text: '<p class="p200">Efter en CryoPe behandling är det viktigt att inte röra det behandlade området med orena händer för att förhindra infektion. Du bör också skydda området från direkt solljus och använda solskydd för att undvika pigmentförändringar. Undvik att applicera makeup, utsättande för intensiv värme såsom bastu, och att ta långa varma duschar under de första 24 till 48 timmarna. Dessa försiktighetsåtgärder bidrar till att ge din hud de bästa förutsättningarna för att läka på ett korrekt sätt.</p>'
        ),
        new Question(
            title: 'Hur många behandlingar krävs?',
            text: '<p class="p200">Vanligtvis krävs 1-3 behandlingar för att få bort hudförändringen. Detta baseras på genomsnittliga fall där hudförändringarna är av mindre storlek och reagerar väl på behandlingen. Det är dock viktigt att notera att varje individs hud är unik, och i vissa fall kan det vara nödvändigt med fler behandlingar för att fullständigt avlägsna hudförändringar, särskilt om de är större eller djupare.</p>'
        ),
        new Question(
            title: 'Hur vet jag om min hudförändring är godartad?',
            text: '<p class="p200">Vi på AcneSpecialisten har tyvärr inte möjlighet att undersöka hudförändringar. Vi behandlar enbart godartade. Är du osäker på om din hudförändring är godartad rekommenderar vi att du först ser till att få den bedömd av en läkare.</p>'
        ),
        new Question(
            title: 'Kan man ta bort och frysa bort födelsemärken själv?',
            text: '<p class="p200">Nej, det rekommenderas inte att man försöker ta bort eller frysa bort födelsemärken. Man ska inte heller försöka ta bort en fettknöl själv eller använda seborroisk keratos behandla själv lösningar. Födelsemärken kan variera stort i form, storlek och djup, och det krävs rätt bedömning för att avgöra den mest lämpliga behandlingen. Att använda produkter som CryoPen hemma utan tillräcklig kunskap eller erfarenhet kan leda till oönskade resultat, inklusive infektion, ärrbildning eller i värsta fall missa en diagnos av hudcancer. Professionell bedömning av en hudläkare eller certifierad specialist är avgörande för en säker och effektiv borttagning av födelsemärke.</p>'
        ),
        new Question(
            title: 'CryoPen biverkningar?',
            text: '<p class="p200">Användning av CryoPen för att frysa bort hudförändringar är en generellt säker metod, men som med alla medicinska ingrepp kan det finnas potentiella biverkningar. Dessa kan inkludera:</p>
            <p class="p200 mt-xl">Mild smärta eller obehag under behandlingen, liknande en stickande eller brännande känsla.</p>
            <p class="p200 mt-xl">Rödhet, svullnad, och blåsor kan uppstå på behandlingsområdet, vilka vanligtvis läker inom några dagar.</p>
            <p class="p200 mt-xl">Ärrbildning, även om detta är mindre vanligt, kan vissa personer utveckla ärr på behandlingsområdet, speciellt om eftervården inte följs som rekommenderat.</p>
            <p class="p200 mt-xl">Pigmentförändringar, såsom hypopigmentering (blekare hud) eller hyperpigmentering (mörkare hud), kan förekomma, särskilt hos personer med mörkare hudtoner. Dessa förändringar är oftast tillfälliga men kan vara permanenta i vissa fall.</p>
            <p class="p200 mt-xl">Det är viktigt att följa alla eftervårdsinstruktioner från din behandlare för att minimera risken för biverkningar och säkerställa en säker läkningsprocess. Om du upplever några oväntade symtom efter behandling med CryoPen, bör du omedelbart kontakta din vårdgivare.</p>'
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

$specialists_title = 'Våra hudterapeuter';
$specialists = array(
    new Specialist(
        name: 'Cazzandra Lindberg',
        title: 'Hudterapeut sedan 2015',
        image: 'images/specialists/312x312/hudterapeut-cazzandra.webp',
        image_alt: 'Cazzandra Lindberg, hudterapeut med specialisering i CryoPen-behandlingar',
        image_title: 'Cazzandra Lindberg - Expert på CryoPen-behandlingar'
    ),
    new Specialist(
        name: 'Veronika Benedik',
        title: 'Hudterapeut sedan 1999',
        image: 'images/specialists/312x312/hudterapeut-veronika.webp',
        image_alt: 'Veronika Benedik, erfaren hudterapeut med fokus på CryoPen-behandlingar',
        image_title: 'Veronika Benedik - Specialist inom CryoPen-vård'
    ),
    new Specialist(
        name: 'Amira Maqboul',
        title: 'Hudterapeut sedan 2017',
        image: 'images/specialists/312x312/hudterapeut-amira.webp',
        image_alt: 'Amira Maqboul, hudterapeut med kunskap inom CryoPen-behandlingar',
        image_title: 'Amira Maqboul - Hudterapeut specialiserad på CryoPen'
    ),
    new Specialist(
        name: 'Vilma Libom',
        title: 'Hudterapeut sedan 2019',
        image: 'images/specialists/312x312/hudterapeut-vilma.webp',
        image_alt: 'Vilma Libom, hudterapeut med inriktning mot CryoPen-behandlingar',
        image_title: 'Vilma Libom - Expert inom CryoPen-behandlingar'
    )
);
$specialists_view_more = 'Se alla hudterapeuter';

$brands_title = 'Märken vi jobbar med';
$all_brands = array(
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
        url: '/varumarken/rejuve-dye-vl',
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
        url: '/varumarken/soprano-ice',
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

    <link rel="canonical" href="https://www.acnespecialisten.se/cryopen.php" />

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
                    <a class="mt-xl button b200 outline expand auto-width l10n" href="/hudterapeut" title="Se alla hudterapeuter"><?php echo $specialists_view_more ?></a>
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